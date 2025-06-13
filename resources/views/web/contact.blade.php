@section('title') Contact – The Loyal Agency | Expert fidélisation client @endsection

@section('description') Contactez Melinda Marin, fondatrice de The Loyal Agency, pour optimiser votre relation client et booster vos revenus. Formulaire ou email : réponse sous 24 h. @endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/contact/main.css") . "?v=".now()->toDateTimeString() }}">
@endpush

@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/contact/main.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

@section('livewire-styles')
    @livewireStyles
@endsection
@section('livewire-scripts')
    @livewireScripts
@endsection



<x-layouts.web class="contact">

    <x-slot name="header">

        <x-web.main-header/>

    </x-slot>



    <div class="main_title_container">

        <h1 class="main_title">
            Discutons de votre projet
        </h1>

    </div>



    <nav class="breadcrumb">
        <div>
            <a href="{{ route('homepage') }}" class="item">Accueil</a>
        </div>
        /
        <div>
            <span class="item current">
                Contact
            </span>
        </div>
    </nav>



    <x-web.contact.direct-contact/>


    <x-web.contact.calendly-component/>


    <livewire:web.contact.form-component/>




    <x-slot name="footer">

        <x-web.main-footer/>

    </x-slot>


</x-layouts.web>
