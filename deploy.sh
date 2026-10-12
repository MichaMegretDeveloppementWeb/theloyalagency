#!/usr/bin/env bash
# The Loyal Agency - deploiement d'une installation Laravel existante.
# Usage : bash deploy.sh [--publish]
# PHP_BIN et COMPOSER_BIN designent les executables PHP/Composer.
# Par defaut, un site deja en maintenance reste ferme apres le deploiement.

set -Eeuo pipefail

# Le corps est charge avant git merge, qui peut remplacer ce meme fichier.
main() {
    local app_dir branch repository publish=false arg
    local php_bin composer_bin candidate origin current_branch target before
    local was_down=false maintenance_started=false
    app_dir="$(cd -- "$(dirname -- "${BASH_SOURCE[0]}")" && pwd)"
    branch="main"
    repository="https://github.com/MichaMegretDeveloppementWeb/theloyalagency.git"

    for arg in "$@"; do
        case "$arg" in
            --publish) publish=true ;;
            --help|-h)
                printf '%s\n' 'Usage : bash deploy.sh [--publish]' \
                    'Sans option : conserve le mode maintenance initial.' \
                    '--publish : ouvre le site uniquement apres un deploiement reussi.' \
                    'Prerequis : clone existant, .env configure, PHP 8.2 et Composer.'
                return 0
                ;;
            *) printf 'Option inconnue : %s\n' "$arg" >&2; return 1 ;;
        esac
    done

    cd -- "$app_dir"
    [[ -f artisan && -f composer.lock && -f .env ]] || {
        printf '%s\n' 'Il faut une installation Laravel existante avec artisan, composer.lock et .env configure.' >&2
        return 1
    }
    for candidate in git flock; do
        command -v "$candidate" >/dev/null || {
            printf 'Commande requise introuvable : %s\n' "$candidate" >&2
            return 1
        }
    done
    [[ "$(git rev-parse --show-toplevel)" == "$app_dir" ]] || {
        printf '%s\n' 'Le script doit se trouver a la racine du depot Git.' >&2
        return 1
    }

    # Verrou hors des fichiers suivis, libere automatiquement a la sortie.
    exec 9>"$(git rev-parse --git-path deploy.lock)"
    flock -n 9 || { printf '%s\n' 'Un deploiement est deja en cours.' >&2; return 1; }

    origin="$(git remote get-url origin)"
    case "$origin" in
        "$repository"|"${repository%.git}"|git@github.com:MichaMegretDeveloppementWeb/theloyalagency.git|ssh://git@github.com/MichaMegretDeveloppementWeb/theloyalagency.git) ;;
        *) printf 'Le remote origin doit designer %s (HTTPS ou SSH).\n' "$repository" >&2; return 1 ;;
    esac
    current_branch="$(git branch --show-current)"
    [[ "$current_branch" == "$branch" ]] || {
        printf 'Branche attendue : %s ; branche actuelle : %s\n' "$branch" "$current_branch" >&2
        return 1
    }
    [[ -z "$(git status --porcelain --untracked-files=normal)" ]] || {
        printf '%s\n' 'Des modifications ou fichiers non suivis sont presents. Les sauvegarder avant de deployer.' >&2
        git status --short
        return 1
    }

    php_bin="${PHP_BIN:-}"
    if [[ -z "$php_bin" ]]; then
        for candidate in /opt/alt/php82/usr/bin/php /usr/local/bin/php82 /usr/bin/php82; do
            if [[ -x "$candidate" ]]; then php_bin="$candidate"; break; fi
        done
        php_bin="${php_bin:-$(command -v php || true)}"
    fi
    [[ -n "$php_bin" ]] || { printf '%s\n' 'PHP introuvable. Definir PHP_BIN.' >&2; return 1; }
    if ! "$php_bin" -r 'exit(PHP_VERSION_ID >= 80200 && PHP_VERSION_ID < 80300 ? 0 : 1);'; then
        printf '%s\n' 'Utiliser PHP 8.2 pour ce deploiement, comme sur le serveur web.' \
            'Exemple : PHP_BIN=/opt/alt/php82/usr/bin/php bash deploy.sh' >&2
        return 1
    fi
    composer_bin="${COMPOSER_BIN:-}"
    if [[ -z "$composer_bin" && -f "$app_dir/composer.phar" ]]; then
        composer_bin="$app_dir/composer.phar"
    fi
    composer_bin="${composer_bin:-$(command -v composer || true)}"
    if [[ -z "$composer_bin" ]]; then
        for candidate in "$HOME/bin/composer" "$HOME/composer.phar" /usr/local/bin/composer; do
            if [[ -f "$candidate" ]]; then composer_bin="$candidate"; break; fi
        done
    fi
    [[ -f "$composer_bin" ]] || {
        printf '%s\n' 'Composer introuvable. Definir COMPOSER_BIN vers le fichier PHP composer ou composer.phar.' >&2
        return 1
    }
    "$php_bin" "$composer_bin" --version
    [[ -w storage && -w storage/framework && -w storage/logs && -w bootstrap/cache ]] || {
        printf '%s\n' 'storage, storage/framework, storage/logs et bootstrap/cache doivent etre accessibles en ecriture.' >&2
        return 1
    }
    [[ -f vendor/autoload.php ]] || {
        printf '%s\n' 'Installation initiale : executer composer install avant ce script (voir README).' >&2
        return 1
    }

    printf '\n%s\n' 'Deploiement The Loyal Agency (main / PHP 8.2)'
    before="$(git rev-parse HEAD)"
    # Authentification et divergence verifiees avant de fermer le site.
    git fetch origin "refs/heads/$branch"
    target="$(git rev-parse FETCH_HEAD)"
    git merge-base --is-ancestor HEAD "$target" || {
        printf '%s\n' 'Historique local divergent ou en avance. Resoudre la situation Git avant de deployer.' >&2
        return 1
    }

    # Ce projet utilise le mode maintenance fichier. Le secret existant est preserve.
    "$php_bin" -r '
        require "vendor/autoload.php";
        $app = require "bootstrap/app.php";
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        if (config("app.maintenance.driver") !== "file") {
            fwrite(STDERR, "Ce script necessite APP_MAINTENANCE_DRIVER=file.\n");
            exit(1);
        }
    '
    [[ ! -f storage/framework/down ]] || was_down=true

    deployment_failed() {
        local status="$1"
        trap - ERR INT TERM
        printf '\nEchec du deploiement (code %s). Commit avant intervention : %s\n' "$status" "$before" >&2
        if [[ "$maintenance_started" == true || "$was_down" == true ]]; then
            printf '%s\n' 'Le site reste en maintenance. Corriger le probleme puis relancer bash deploy.sh.' >&2
        fi
        exit "$status"
    }
    trap 'deployment_failed "$?"' ERR
    trap 'deployment_failed 130' INT
    trap 'deployment_failed 143' TERM

    if [[ "$was_down" == false ]]; then
        "$php_bin" artisan down --retry=60
        maintenance_started=true
    fi

    git merge --ff-only "$target"
    # Les pages chargent public/assets directement : aucun build Node/Vite requis.
    "$php_bin" "$composer_bin" check-platform-reqs --lock --no-dev
    "$php_bin" "$composer_bin" install --no-dev --prefer-dist --no-interaction --no-progress --optimize-autoloader
    "$php_bin" artisan config:clear
    "$php_bin" artisan migrate --force
    "$php_bin" artisan optimize:clear
    "$php_bin" artisan optimize

    if [[ "$was_down" == false || "$publish" == true ]]; then
        "$php_bin" artisan up
        printf '%s\n' 'Deploiement termine : site ouvert.'
    else
        printf '%s\n' 'Deploiement termine : page d attente conservee.' \
            'Pour publier apres verification : bash deploy.sh --publish'
    fi
    trap - ERR INT TERM
    printf 'Commit deploye : %s\n' "$(git rev-parse --short HEAD)"
}

{
    main "$@"
    exit 0
}
