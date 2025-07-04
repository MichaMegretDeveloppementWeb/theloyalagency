@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/problem-solution.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/problem-solution.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush



<section class="problem_solution_container">

    <header>
        <div class="title_container">
            <h2 class="title">Pourquoi fidéliser vos clients?</h2>
        </div>
    </header>

    <main>

        <ul class="card_list_container">

            <li class="card_container card_1">

                <article class="card">
                    <div class="frame_container">
                        <button type="button" class="switch switch_to_problem" aria-label="Afficher le problème de la fidélisation" aria-pressed="true">
                            <div class="content">
                                Problème
                            </div>
                        </button>
                        <div class="frame">
                            <div class="image_container container_1">
                                <img src="{{ asset("assets/images/homepage/sad-landscape-switch-to-happy_1_1.webp") }}" alt="Paysage pluvieux montrant un arbre sans feuille." loading="lazy">
                            </div>
                            <div class="image_container container_2">
                                <img src="{{ asset("assets/images/homepage/sad-landscape-switch-to-happy_1_2.webp") }}" alt="Paysage ensoleillé montrant un arbre verdoyant." loading="lazy">
                            </div>

                            <p class="card_text problem_text">
                                Vos réservations font le yo-yo chaque saison ?
                            </p>
                            <p class="card_text solution_text">
                                Un client fidèle dépense jusqu’à 67 fois plus qu’un nouveau. Fidélisez, lissez et stabilisez.
                            </p>
                        </div>
                        <button type="button" class="switch switch_to_solution" aria-label="Afficher la solution à ce problème" aria-pressed="false">
                            <div class="content">
                                Solution
                            </div>
                        </button>
                    </div>
                </article>

            </li>

            <li class="card_container card_2">
                <article class="card">
                    <div class="frame_container">
                        <button type="button" class="switch switch_to_problem" aria-label="Afficher le problème des revenus instables" aria-pressed="true">
                            <div class="content">
                                Problème
                            </div>
                        </button>
                        <div class="frame">
                            <div class="image_container container_1">
                                <img src="{{ asset("assets/images/homepage/sad-landscape-switch-to-happy_3_2.webp") }}" alt="Îles paradisiaques sous la pluie vues du ciel" loading="lazy">
                            </div>
                            <div class="image_container container_2">
                                <img src="{{ asset("assets/images/homepage/sad-landscape-switch-to-happy_3_1.webp") }}" alt="Îles paradisiaques sous un beau soleil vues du ciel" loading="lazy">
                            </div>
                            <p class="card_text problem_text">
                                Marre de donner 20% de commission aux OTA (alors que c’est vous qui faites tout le travail) ?
                            </p>
                            <p class="card_text solution_text">
                                Fidélisez en direct et diminuez votre dépendance aux intermédiaires.
                            </p>
                        </div>
                        <button type="button" class="switch switch_to_solution" aria-label="Afficher la solution à ce problème" aria-pressed="false">
                            <div class="content">
                                Solution
                            </div>
                        </button>
                    </div>
                </article>
            </li>

            <li class="card_container card_3">
                <article class="card">
                    <div class="frame_container">
                        <button type="button" class="switch switch_to_problem" aria-label="Afficher le problème de la notoriété" aria-pressed="true">
                            <div class="content">
                                Problème
                            </div>
                        </button>
                        <div class="frame">
                            <div class="image_container container_1">
                                <img src="{{ asset("assets/images/homepage/sad-landscape-switch-to-happy_2_1.webp") }}" alt="Paysage désertique et aride" loading="lazy">
                            </div>
                            <div class="image_container container_2">
                                <img src="{{ asset("assets/images/homepage/sad-landscape-switch-to-happy_2_2.webp") }}" alt="Paysage d'une plaine verdoyante et ensoleillé" loading="lazy">
                            </div>
                            <p class="card_text problem_text">
                                Ils viennent un fois et puis s’en vont ?
                            </p>
                            <p class="card_text solution_text">
                                Augmenter votre rétention de 5% peut booster les profits de 25 % jusqu’à 95%
                            </p>
                        </div>
                        <button type="button" class="switch switch_to_solution" aria-label="Afficher la solution à ce problème" aria-pressed="false">
                            <div class="content">
                                Solution
                            </div>
                        </button>
                    </div>
                </article>
            </li>

        </ul>

    </main>

</section>
