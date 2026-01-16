@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/header.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="services_header">

    <div class="title_container">
        <h1 class="title">
            Coaching Fidélisation
        </h1>
    </div>


    <nav class="breadcrumb">
        <div>
            <a href="{{ route('homepage') }}" class="item">Accueil</a>
        </div>
        /
        <div>
            <span class="item current">
                Mon offre
            </span>
        </div>
    </nav>


    <div class="main_image_container">

        <div class="text_container">

            <p class="text">
                Un accompagnement sur-mesure pour transformer vos clients en partenaires durables.
            </p>

        </div>

    </div>


    <div class="intro_container">

        <div class="text_container">

            <div class="title_container">
                <h2 class="title">Mon approche</h2>
            </div>

            <p class="content">
                Construisez un modèle de relation client qui vous ressemble et auquel vos clients s'identifient. Vous serez à l'origine d'un lien unique et authentique avec chacun d'entre eux et votre CRM sera rempli de clients générateurs de chiffre d'affaires.
            </p>

        </div>

    </div>

</section>
