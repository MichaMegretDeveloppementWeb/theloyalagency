@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/problem-solution.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/problem-solution.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush



<section class="problem_solution_container">

    <header>
        <div class="title_container">
            <h2 class="title">Ils ont disparu&nbsp;? <br> Faites-les revenir.</h2>
        </div>
    </header>

    <main>

        <div class="carousel_wrapper">

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
                                <img src="{{ asset("assets/images/homepage/solution.webp") }}" alt="" role="presentation" loading="lazy">
                            </div>
                            <div class="image_container container_2">
                                <img src="{{ asset("assets/images/homepage/problem.webp") }}" alt="" role="presentation" loading="lazy">
                            </div>

                            <p class="card_text problem_text">
                                <b>Client perdu ?</b> <br> Parti sans explication...
                            </p>
                            <p class="card_text solution_text">
                                Quelques étapes suffisent rétablir la relation client.
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
                                <img src="{{ asset("assets/images/homepage/solution.webp") }}" alt="" role="presentation" loading="lazy">
                            </div>
                            <div class="image_container container_2">
                                <img src="{{ asset("assets/images/homepage/problem.webp") }}" alt="" role="presentation" loading="lazy">
                            </div>
                            <p class="card_text problem_text">
                                <b>Client silencieux ?</b> <br> Il ne dit rien&nbsp;... mais il pense beaucoup.
                            </p>
                            <p class="card_text solution_text">
                                Rien n'est figé. Un simple geste peut relancer le dialogue.
                            </p>
                        </div>
                        <button type="button" class="switch switch_to_solution" aria-label="Afficher la solution à ce problème" aria-pressed="false">
                            <div class="content">
                                Solution
                            </div>
                            <x-bi-hand-index-thumb class="hand_pointer_icon" />
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
                                <img src="{{ asset("assets/images/homepage/solution.webp") }}" alt="" role="presentation" loading="lazy">
                            </div>
                            <div class="image_container container_2">
                                <img src="{{ asset("assets/images/homepage/problem.webp") }}" alt="" role="presentation" loading="lazy">
                            </div>
                            <p class="card_text problem_text">
                                <b>Client oublié ?</b> <br> Il s'est fondu dans la masse jusqu'à disparaître.
                            </p>
                            <p class="card_text solution_text">
                                Recréer le lien est possible. A vous de faire le premier pas.
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

        </div>

        <div class="carousel_controls">
            <button type="button" class="carousel_nav carousel_nav_left" aria-label="Voir la carte précédente">
                <x-icons.arrow-left />
            </button>

            <div class="carousel_pagination">
                <button type="button" class="pagination_dot" data-index="0" aria-label="Aller à la carte 1"></button>
                <button type="button" class="pagination_dot active" data-index="1" aria-label="Aller à la carte 2"></button>
                <button type="button" class="pagination_dot" data-index="2" aria-label="Aller à la carte 3"></button>
            </div>

            <button type="button" class="carousel_nav carousel_nav_right" aria-label="Voir la carte suivante">
                <x-icons.arrow-right />
            </button>
        </div>

        <div class="cta_container">
            <a href="{{ route('services') }}" class="cta">
                En savoir plus
                <x-icons.chevron-right/>
            </a>
        </div>

    </main>



</section>
