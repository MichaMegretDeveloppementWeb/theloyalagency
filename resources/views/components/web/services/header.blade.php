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

</section>
