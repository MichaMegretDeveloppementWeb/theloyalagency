@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage.css?v=".now()->toDateTimeString()) }}">
@endsection

@section('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage.js?v=".now()->toDateTimeString()) }}"></script>
@endsection

<x-layouts.web class="homepage">

    <x-slot name="header">

        <header id="main_header" class="appear">

            <div class="header_container">

                <div class="header_logo-name">

                    <div class="logo_container">
                        <img src="{{ asset('assets/images/commons/main-logo-desktop.webp') }}" alt="Logo de l'entreprise The Loyal Agency">
                    </div>
                    {{--<div class="enterprise_name">
                        The loyal agency
                    </div>--}}

                </div>

                <div class="burger_container">

                    <div class="burger_center_line"></div>

                </div>

                <nav id="main_navbar">

                    <ul class="navbar_links">

                        <li class="link home">
                            <a href="#">
                                <x-icons.home/>
                                Accueil</a>
                            <div class="sub_line"></div>
                        </li>

                        <li class="link services">
                            <a href="#">Prestations</a>
                            <div class="sub_line"></div>
                        </li>

                        <li class="link contact">
                            <a href="#">Prendre rendez-vous</a>
                        </li>

                    </ul>

                </nav>

            </div>

        </header>

    </x-slot>


    <section class="top_banner_container">

        <section class="top_banner">

            <div class="title_container">

                <h1 class="main_title">Boostez votre rentabilité</h1>

                <div class="morph_sub_title_container">

                    <div class="variant variant_1">Treat &nbsp; them Royal</div>
                    <div class="variant variant_2">Make &nbsp;them Loyal</div>

                </div>

                <a class="cta contact" href="#">
                    Contactez-moi
                    <x-icons.cta-arrow-right/>
                </a>

            </div>

            <div class="image_container">

                <img src="{{ asset('assets/images/homepage/image-profil-melinda.webp') }}" alt="Image de profil de Melinda Marin, directrice chez The Loyal Agency">

            </div>

        </section>

    </section>



    {{--<section class="stats">

        <ul class="stat_list">

            <li class="stat clients_spend_more">

                <div class="image_container">
                    <img src="{{ asset("assets/images/homepage/clients-spend-more.webp") }}" alt="Graphique sur un carnet avec règle et stylos" role="img"/>
                    <div class="mask mask1" aria-hidden="true"></div>
                    <div class="mask mask2" aria-hidden="true"></div>
                    <div class="mask mask3" aria-hidden="true"></div>
                </div>

            </li>

            <li class="stat save_money">

                <div class="image_container">
                    <img src="{{ asset("assets/images/homepage/save-money.webp") }}" alt="Deux statues bleues, l'une dépitée assise sur des liasses de billets, l'autre victorieuse debout sur des pièces, symbolisant une économie d'argent" role="img" />
                    <div class="mask mask1" aria-hidden="true"></div>
                    <div class="mask mask2" aria-hidden="true"></div>
                    <div class="mask mask3" aria-hidden="true"></div>
                </div>

            </li>

            <li class="stat up_profits">

                <div class="image_container">
                    <img src="{{ asset("assets/images/homepage/up-profits.webp") }}" alt="Croissance de la rentabilité représentée par un graphique en barres montantes avec flèche vers le haut" role="img">
                    <div class="mask mask1" aria-hidden="true"></div>
                    <div class="mask mask2" aria-hidden="true"></div>
                    <div class="mask mask3" aria-hidden="true"></div>
                </div>

            </li>

        </ul>

    </section>--}}



</x-layouts.web>
