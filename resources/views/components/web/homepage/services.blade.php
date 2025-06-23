@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/services.css") . "?v=".now()->toDateTimeString()}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/services.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush



<section class="services">

    <div class="section_content">

        <div class="title_container">
            <h2 class="title">
                Les offres
            </h2>
        </div>

        <ul class="services_list">

            <li class="service load_resources">

                <div class="service_content">

                    <div class="service_icon_container">
                        <img src="{{ asset("assets/images/homepage/services_icon_1.webp") }}" alt="Illustration dessinée main : document et flèche téléchargement – ressources à la carte pour consultant en relation client">
                    </div>

                    <div class="service_description_container">

                        <h3 class="title">
                            MEMBERSHIP – LA LOYAL ACADEMY
                        </h3>

                        <p class="description">
                            Accédez immédiatement à nos guides, modèles et check-lists pour optimiser votre relation client et augmenter votre chiffre d’affaires.
                        </p>

                        <ul class="includes_list">

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    50+ ressources activables
                                </p>
                            </li>

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    1 défi mensuel pour s’entraîner
                                </p>
                            </li>

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    1h de coaching par mois
                                </p>
                            </li>

                        </ul>

                    </div>

                    <a href="{{ route('services') }}#ressources" class="cta">
                        En savoir plus sur cette offre
                        <x-icons.arrow-right/>
                    </a>

                </div>

            </li>



            <li class="service mix_coaching">

                <div class="service_content">

                    <div class="service_icon_container">
                        <img src="{{ asset("assets/images/homepage/services_icon_2.webp") }}" alt="Illustration dessinée main : document et flèche téléchargement – ressources à la carte pour consultant en relation client">
                    </div>

                    <div class="service_description_container">

                        <h3 class="title">
                            LEARNING – LE LOYAL LAB’
                        </h3>

                        <p class="description">
                            Formations et ateliers pratiques pour rendre vos clients fidèles, rentables… et fans de votre marque.
                        </p>

                        <ul class="includes_list">

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    Minimum 10h de formation
                                </p>
                            </li>

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    Des outils directement intégrables à votre société
                                </p>
                            </li>

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    Des cas pratiques adaptés à votre réalité
                                </p>
                            </li>

                        </ul>

                    </div>

                    <a href="{{ route('services') }}#pack-boost" class="cta">
                        En savoir plus sur cette offre
                        <x-icons.arrow-right/>
                    </a>

                </div>

            </li>



            <li class="service full_coaching">

                <div class="service_content">

                    <div class="service_icon_container">
                        <img src="{{ asset("assets/images/homepage/services_icon_3.webp") }}" alt="Illustration dessinée main : document et flèche téléchargement – ressources à la carte pour consultant en relation client">
                    </div>

                    <div class="service_description_container">

                        <h3 class="title">
                            CONSULTING – LE LOYALTY MASTERY
                        </h3>

                        <p class="description">
                            Un accompagnement global et sur-mesure pour déployer une véritable stratégie de fidélisation et relation client au sein de3 votre entreprise et maximiser votre rentabilité.
                        </p>

                        <ul class="includes_list">

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    Audit complet
                                </p>
                            </li>

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    Intégration d’une méthodologie adaptée
                                </p>
                            </li>

                            <li class="include">
                                <x-icons.check/>
                                <p class="text">
                                    Accompagnement pas à pas
                                </p>
                            </li>

                        </ul>

                    </div>

                    <a href="{{ route('services') }}#pack-maitrise" class="cta">
                        En savoir plus sur cette offre
                        <x-icons.arrow-right/>
                    </a>

                </div>

            </li>

        </ul>

    </div>

</section>
