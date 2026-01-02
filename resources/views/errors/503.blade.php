@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/errors/503.css?v='.now()->toDateTimeString()) }}">
@endsection

@section('title') Nouveau site en préparation @endsection
@section('description') The Loyal Agency fait peau neuve ! Découvrez notre nouveau site dédié au coaching en fidélisation client fin janvier 2026. @endsection

<x-layouts.simple class="coming_soon_page">

    <div class="content_container">

        <img class="logo" src="{{ asset('assets/images/commons/main-logo-desktop.png') }}" alt="The Loyal Agency Logo">

        <div class="text_content">

            <h1 class="title">Notre site fait peau neuve</h1>

            <p class="subtitle">
                Nous préparons une toute nouvelle expérience pour vous accompagner dans votre stratégie de fidélisation client.
            </p>

            <div class="date_badge">
                <span class="date_label">Lancement prévu</span>
                <span class="date_value">Fin janvier 2026</span>
            </div>

        </div>

    </div>

</x-layouts.simple>
