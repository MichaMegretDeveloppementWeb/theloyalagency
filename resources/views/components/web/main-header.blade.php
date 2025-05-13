@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/main-header.css?v=".now()->toDateTimeString())}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/main-header.js") }}"></script>
@endpush

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
