@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/header.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="services_header">

    <div class="title_container">
        <h1 class="title">
            Mes services
        </h1>
    </div>


    <nav class="breadcrumb">
        <div>
            <a href="{{ route('homepage') }}" class="item">Accueil</a>
        </div>
        /
        <div>
            <span class="item current">
                Mes services
            </span>
        </div>
    </nav>


    <div class="main_image_container">

        <nav class="services_nav">

            <ul class="services_list">

                <li class="item">
                    <a href="#ressources">
                        Ressources
                    </a>
                </li>

                <li class="item">
                    <a href="#pack-boost">
                        Pack boost
                    </a>
                </li>

                <li class="item">
                    <a href="#pack-maitrise">
                        Pack maîtrise
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</section>
