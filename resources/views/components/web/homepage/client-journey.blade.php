@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/client-journey.css?v=".now()->toDateTimeString())}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/client-journey.js?v=".now()->toDateTimeString()) }}"></script>
@endpush



<section class="client_journey_container">

    <div class="content_container">

        <header>
            <div class="title_container">
                <h2 class="title">Les 9 étapes de la fidélisation client</h2>
            </div>
        </header>

        <div class="nine_step_container">

            <div class="step_frame">

                <div class="step_marker m1" data-step="1">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Évaluer</h3>
                            <p class="content">
                                Questionnaires, Mystery-Shoppers, collecte de data
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m2" data-step="2">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Organiser</h3>
                            <p class="content">
                                Segmenter les clients Agenda + Calendrier
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m3" data-step="3">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Surpasser</h3>
                            <p class="content">
                                Overdeliver, éléments de surprise, effet wow, bonus, mots manuscrits
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m4" data-step="4">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Renforcer</h3>
                            <p class="content">
                                Message de bienvenue parès signature, Call & Lunch post préstation
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m5" data-step="5">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Écouter</h3>
                            <p class="content">
                                Tenir compte et informer le client des changements apportés suite à ses commentaires
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m6" data-step="6">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Regrouper</h3>
                            <p class="content">
                                Créer une communauté / Club de membres. Générer des ambassadeurs
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m7" data-step="7">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Jouer</h3>
                            <p class="content">
                                Programme de fidélité, Gamification, défis collaboratifs, Awrards et Rewards, parrainage
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m8" data-step="8">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Privilégier</h3>
                            <p class="content">
                                Ventes réservées aux clients fidèles, events privilèges
                            </p>
                        </div>
                    </div>

                </div>

                <div class="step_marker m9" data-step="9">

                    <div class="marker_content">
                        <div class="label">
                            <h3 class="title">Scaler</h3>
                            <p class="content">
                                Créer de nouveaux produits complémentaires à fort profit
                            </p>
                        </div>
                    </div>

                </div>



                <svg id="track" xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 480 365" class="nine_steps_svg" preserveAspectRatio="none">

                    <defs>

                        <linearGradient id="gradient-orange" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" stop-color="white"/>
                            <stop offset="100%" stop-color="white"/>
                        </linearGradient>

                        <filter id="path-shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="-1" stdDeviation="2" flood-color="#1E58BEFF" flood-opacity="0.5"/>
                            <feDropShadow dx="0" dy="1" stdDeviation="2" flood-color="#1E58BEFF" flood-opacity="0.5"/>
                        </filter>

                    </defs>

                    <path class="path_1" d="M6 6C370 7 461 8 466 69 473 175 4 177 6 289 8 346 79 352 466 351"/>

                    <path class="path_2" d="M6 6C370 7 461 8 466 69 473 175 4 177 6 289 8 346 79 352 466 351"/>

                </svg>

            </div>

        </div>

    </div>

</section>
