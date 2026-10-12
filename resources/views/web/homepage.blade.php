@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/main.css") . "?v=".now()->toDateTimeString() }}">
@endpush

@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/main.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<x-layouts.web class="homepage">

    <x-slot name="header">

        <x-web.main-header/>

    </x-slot>


    <x-web.homepage.top-banner/>


    <x-web.homepage.problem-solution/>


    <x-web.homepage.quote/>


    <x-web.homepage.client-journey/>


    {{--<x-web.homepage.services/>--}}


    {{--<x-web.homepage.about-me/>--}}


    <x-web.homepage.cta/>


    {{-- Avis temporairement masqués en attendant les témoignages clients définitifs.
    <x-web.homepage.reviews :$reviews/>
    --}}


    {{--<x-web.homepage.satisfied-or-refunded/>--}}


    <x-slot name="footer">

        <x-web.main-footer/>

    </x-slot>


</x-layouts.web>
