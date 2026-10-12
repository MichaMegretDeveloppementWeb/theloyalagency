# The Loyal Agency

Site vitrine de Melinda Marin : Laravel 12, Blade, Livewire 3 et CSS/JavaScript sur mesure.
Les pages publiques chargent directement les fichiers versionnés dans `public/assets`.
Aucun build Vite ni installation Node n'est nécessaire pour leur déploiement actuel.

## Déploiement SSH

Dépôt : https://github.com/MichaMegretDeveloppementWeb/theloyalagency.git

Branche : `main`

Le script cible **PHP 8.2** et une installation existante. Il privilégie
`/opt/alt/php82/usr/bin/php` sur Hostinger. Vérifier aussi que le domaine utilise
PHP 8.2 dans le panneau d'hébergement : choisir le binaire CLI ne change pas PHP côté web.

Prérequis :

- Git, Bash, `flock`, Composer et les extensions PHP requises par `composer.lock`.
- Un clone sur la branche `main`, avec `origin` pointant vers ce dépôt (HTTPS ou SSH).
- Un répertoire de travail propre ; les modifications du serveur doivent être sauvegardées
  et réconciliées avant le déploiement. Le script ne les écrase pas.
- Un `.env` serveur configuré, une `APP_KEY` existante, les accès à la base et au SMTP,
  `APP_ENV=production`, `APP_DEBUG=false` et `APP_MAINTENANCE_DRIVER=file`.
- Les dépendances déjà installées dans `vendor`.
- `storage`, `storage/framework`, `storage/logs` et `bootstrap/cache` accessibles
  en écriture au compte de déploiement et à PHP.
- La racine web du domaine dirigée vers `public/`.

Le script ne modifie ni le `.env`, ni les permissions, ni la clé d'application.
Il ne télécharge pas d'installateur Composer.

### Première récupération du script sur le serveur existant

Depuis la racine du projet sur le serveur, après publication du commit sur GitHub :

```bash
git status --short
git remote get-url origin
git branch --show-current
git pull --ff-only origin main
bash deploy.sh
```

Si Git signale des modifications ou une divergence, les résoudre avant de poursuivre.
Si un `deploy.sh` non suivi a été copié manuellement sur le serveur, le sauvegarder
hors du dépôt avant le premier `git pull`.

Il n'est pas nécessaire que le script soit déjà présent pour le récupérer :
le premier `git pull` l'ajoute. Le site est actuellement derrière une page d'attente ;
elle reste en place avec la commande ci-dessus.

### Déploiements suivants

```bash
bash deploy.sh
```

Le script vérifie les prérequis, récupère `main`, refuse un historique divergent,
place le site en maintenance si nécessaire, puis effectue :

1. La mise à jour Git en avance rapide uniquement.
2. La vérification des prérequis PHP du verrou Composer.
3. `composer install --no-dev` à partir de `composer.lock`.
4. Les migrations avec `php artisan migrate --force`.
5. La régénération des caches Laravel.

Un site déjà ouvert est rouvert après réussite. Un site déjà en maintenance reste
en maintenance, avec son accès de prévisualisation existant. Pour ouvrir explicitement
le site après les vérifications :

```bash
bash deploy.sh --publish
```

Cette option effectue également le déploiement complet avant l'ouverture.
En cas d'échec après le début de l'intervention, le site reste en maintenance :
corriger la cause et relancer le script. Il affiche le commit initial pour faciliter
le diagnostic. Aucun retour arrière automatique du code ou de la base n'est effectué ;
prévoir une sauvegarde de la base avant les migrations.

Pour préciser les chemins des exécutables :

```bash
PHP_BIN=/opt/alt/php82/usr/bin/php COMPOSER_BIN=/usr/local/bin/composer bash deploy.sh
```

`COMPOSER_BIN` doit désigner le fichier PHP de Composer ou un `composer.phar`,
pas une commande contenant plusieurs arguments.

### Nouvelle installation

Le script ne propose pas de mode `--fresh` : il ne prépare pas un hébergement vide.
Pour un nouveau clone, configurer d'abord le `.env`, la clé d'application, la base,
les permissions et le domaine, puis installer les dépendances avec PHP 8.2 :

```bash
/opt/alt/php82/usr/bin/php /usr/local/bin/composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction
/opt/alt/php82/usr/bin/php artisan down
bash deploy.sh
```

Adapter les chemins PHP/Composer à l'hébergement. Le mode maintenance empêche
l'ouverture par le script tant que la préparation n'est pas terminée.
Le lien `public/storage` n'est pas nécessaire aux médias actuels, tous présents
dans `public/assets`.
