@section('title') À propos de Melinda Marin - Experte fidélisation client | The Loyal Agency @endsection

@section('description') Découvrez Melinda Marin, fondatrice de The Loyal Agency, son parcours et son expertise en stratégie de rétention et fidélisation client. @endsection

@section('canonical-url', route('about'))

@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/my-story/main.css") . "?v=".now()->toDateTimeString() }}">
@endpush

@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/my-story/main.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush


<x-layouts.web class="my-story">

    <x-slot name="header">

        <x-web.main-header/>

    </x-slot>

    <x-web.my-story.header/>

    <x-web.my-story.profile-image/>

    <x-web.my-story.about-me/>

    <x-web.my-story.stats/>

    <x-web.my-story.value-proposition/>

    <x-web.my-story.apply/>

    <x-web.my-story.social-proof/>

    <x-slot name="footer">

        <x-web.main-footer/>

    </x-slot>


</x-layouts.web>
