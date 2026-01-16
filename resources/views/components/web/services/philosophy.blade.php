@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/philosophy.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="philosophy" {{ $attributes }}>

    <div class="philosophy_container">

        <div class="quote_container">
            <x-icons.quote class="quote_icon"/>
            <p class="quote_text">
                Chaque entreprise a son histoire, ses clients, ses défis.
            </p>
        </div>

        <p class="philosophy_text">
            C'est pourquoi mon accompagnement part toujours de votre réalité pour construire ensemble une stratégie adaptée à vos enjeux spécifiques.
        </p>

    </div>

</section>
