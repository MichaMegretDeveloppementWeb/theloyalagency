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
                <a href="/" aria-label="Retour à l'accueil">
                    <img src="{{ asset('assets/images/commons/main-logo-desktop.webp') }}" alt="Logo de l'entreprise The Loyal Agency" loading="lazy">
                </a>
            </div>
        </div>

        <div class="burger_container">
            <button type="button" class="burger_button" aria-label="Ouvrir le menu" aria-expanded="false">
                <div class="burger_center_line"></div>
            </button>
        </div>

        <nav id="main_navbar" aria-label="Navigation principale">
            <ul class="navbar_links">
                <li class="link home">
                    <a href="{{ route('homepage') }}">
                        <x-icons.home aria-label="Accueil"/>
                        Accueil</a>
                    <div class="sub_line"></div>
                </li>
                <li class="link services">
                    <a href="#">Prestations</a>
                    <div class="sub_line"></div>
                </li>
                <li class="link contact">
                    <a href="{{ route('contact') }}">Prendre rendez-vous</a>
                </li>
            </ul>
        </nav>

    </div>

</header>
