@section('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage.css") }}">
@endsection

@section('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage.js") }}"></script>
@endsection

<x-layouts.web class="homepage">

    <x-slot name="header">

        <header id="main_header">

            <div class="header_container">

                <div class="header_logo-name">

                    <div class="logo_container">
                        <img src="{{ asset('assets/images/commons/logo-1.webp') }}" alt="Logo de l'entreprise The Loyal Agency">
                    </div>
                    <div class="enterprise_name">
                        The loyal agency
                    </div>

                </div>

                <div class="burger_container">

                    <div class="burger_center_line"></div>

                </div>

                <nav id="main_navbar">

                    <ul class="navbar_links">

                        <li class="link">
                            <a href="#">Accueil</a>
                            <div class="sub_line"></div>
                        </li>

                        <li class="link">
                            <a href="#">Prestations</a>
                            <div class="sub_line"></div>
                        </li>

                        <li class="link">
                            <a href="#">Prendre rendez-vous</a>
                            <div class="sub_line"></div>
                        </li>

                    </ul>

                </nav>

            </div>

        </header>

    </x-slot>


    <section class="top_banner">

        <div class="banner_text">

            <h1 class="title">
                Optimisez votre <br> portefeuille client
            </h1>

            <p class="sub_title">
                Vos clients sont la clé de la réussite de votre entreprise.
                The Loyal Agency vous accompagne pour transformer vos clients en partenaires de croissance, maximisant ainsi leur fidélité et la rentabilité de votre entreprise.
            </p>

            <button class="book_call">
                <a class="cta_button" href="#">Réserver un appel</a>
            </button>

        </div>


    </section>


    <section class="stats">

        <div class="title_container">
            <h2 class="title">
                Pourquoi fidéliser vos clients ?
                {{--<img src="{{ asset("assets/images/commons/browser-crown-icon.webp") }}" alt="Image représentant une couronne">--}}
            </h2>

            <p class="sub_title">
                La prospection, c’est essentiel… Mais devoir trouver inlassablement de nouveaux clients est une boucle épuisante et coûteuse.
                Pour <span class="main_colored_text">rentabiliser au maximum votre prospection</span> il est important de capitaliser sur les clients acquis.
            </p>
        </div>

        <ul class="stat_list">

            <li class="stat clients_spend_more">

                <div class="image_container">
                    <img src="{{ asset("assets/images/homepage/clients-spend-more.webp") }}" alt="Graphique sur un carnet avec règle et stylos" role="img"/>
                    <div class="mask mask1" aria-hidden="true"></div>
                    <div class="mask mask2" aria-hidden="true"></div>
                    <div class="mask mask3" aria-hidden="true"></div>
                </div>

                <h3 class="title">
                    Un client fidèle <span class="main_colored_text">dépense 67% plus</span> qu'un nouveau client.
                </h3>

            </li>

            <li class="stat save_money">

                <div class="image_container">
                    <img src="{{ asset("assets/images/homepage/save-money.webp") }}" alt="Deux statues bleues, l'une dépitée assise sur des liasses de billets, l'autre victorieuse debout sur des pièces, symbolisant une économie d'argent" role="img" />
                    <div class="mask mask1" aria-hidden="true"></div>
                    <div class="mask mask2" aria-hidden="true"></div>
                    <div class="mask mask3" aria-hidden="true"></div>
                </div>

                <h3 class="title">
                    Garder un client <span class="main_colored_text">coûte 5 fois moins cher</span> que d'en trouver un autre.
                </h3>

            </li>

            <li class="stat up_profits">

                <div class="image_container">
                    <img src="{{ asset("assets/images/homepage/up-profits.webp") }}" alt="Croissance de la rentabilité représentée par un graphique en barres montantes avec flèche vers le haut" role="img">
                    <div class="mask mask1" aria-hidden="true"></div>
                    <div class="mask mask2" aria-hidden="true"></div>
                    <div class="mask mask3" aria-hidden="true"></div>
                </div>

                <h3 class="title">
                    Une entreprise qui fidélise bien peut <span class="main_colored_text">augmenter sa rentabilité</span> de 25 à 95 %.
                </h3>

            </li>

        </ul>

    </section>


    <section class="our_strategy">

        <div class="title_container">
            <h2 class="title">
                Notre strategie
            </h2>
        </div>

        <div class="content_container">

            <div class="strategy_container see_beyond_numbers">

                <h3 class="title">
                    <img src="{{ asset("assets/images/commons/browser-crown-icon.webp") }}" alt="Image représentant une couronne">
                    Regarder au-delà des chiffres
                </h3>

                <p class="content">
                    Nous analysons les émotions, les attentes et les signaux faibles qui existent dans la relation entre votre entreprise et vos clients.
                    Cela nous permet d'établir une stratégie forte, basée sur les valeurs Humaine et en armonie avec celles de vos clients.
                </p>

            </div>

            <div class="strategy_container field_analysis">

                <h3 class="title">
                    <img src="{{ asset("assets/images/commons/browser-crown-icon.webp") }}" alt="Image représentant une couronne">
                    Miser sur la proximité
                </h3>

                <p class="content">
                    Nous combinons cet analyse stratégique à une intuition acquise sur le terrain, en nous rendant au coeur de votre cible, pour extraire les besoins rééls et les envies profondes de vos clients.
                    Cet approche nous permet de fédérer sur des idées concrètes et d'accompagner nos client vers une véritable croissance.
                </p>

            </div>

        </div>

    </section>


</x-layouts.web>
