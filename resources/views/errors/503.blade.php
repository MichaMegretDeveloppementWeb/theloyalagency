@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/errors/503.css?v='.now()->toDateTimeString()) }}">
@endsection

@section('title') Création du site en cours @endsection
@section('description') Le site de notre agence de consulting en fidélisation et relation client est en cours de création. @endsection

<x-layouts.simple class="coming_soon_page">

    <div class="title_container">

        <img class="logo" src="{{ asset('assets/images/commons/logo-2.webp') }}" alt="The loyal agency Logo">

        <div class="content">
            Le site de notre agence de consulting en fidélisation et relation client est en cours de création. &Agrave; très vite.
        </div>

    </div>

</x-layouts.simple>
