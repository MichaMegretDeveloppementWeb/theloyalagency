@section('title') Coaching Fidélisation – accompagnement sur-mesure | The Loyal Agency @endsection

@section('description') Découvrez mon offre de coaching en fidélisation client. Un accompagnement personnalisé pour construire une stratégie de rétention efficace, augmenter votre rentabilité et transformer vos clients en partenaires durables. @endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/main.css") . "?v=".now()->toDateTimeString() }}">
@endpush


<x-layouts.web class="services">

    <x-slot name="header">

        <x-web.main-header/>

    </x-slot>


    <x-web.services.header/>

    <x-web.services.coaching-offer/>


    <x-slot name="footer">

        <x-web.main-footer/>

    </x-slot>


</x-layouts.web>
