@section('title') L'histoire de Melinda Marin - Experte fidélisation client | The Loyal Agency @endsection

@section('description') Découvrez le parcours inspirant de Melinda Marin, fondatrice de The Loyal Agency. Comprenez ses motivations, ses inspirations, et tout ce qui fait sa légitimité pour vous fournir les meilleurs conseil en fidélisation et relationnel client @endsection

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
