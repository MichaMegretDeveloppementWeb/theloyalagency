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

    {{--<x-web.services.coaching-offer/>--}}

    <x-web.services.customer-recovery class="bg-white"/>

    <x-web.services.method class="bg-white"/>

    <x-web.services.recovery-conclusion-cta class="bg-white"/>

    <x-web.services.philosophy class="bg-cream"/>

    <x-web.services.customer-loyalty class="bg-white"/>

    <x-web.services.loyalty-steps class="bg-white"/>

    <x-web.services.loyalty-conclusion-cta class="bg-white"/>

    <x-web.services.benefits class="bg-cream"/>

    <x-web.services.final-cta/>

    <x-web.services.collaboration-process class="bg-white"/>


    <x-slot name="footer">

        <x-web.main-footer/>

    </x-slot>


</x-layouts.web>
