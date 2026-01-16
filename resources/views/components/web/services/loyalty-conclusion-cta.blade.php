@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/loyalty-conclusion-cta.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="loyalty_conclusion_cta" {{ $attributes }}>

    <div class="conclusion_container">

        <p class="conclusion_text">
            Faites de chaque client une <em>histoire à raconter</em>
        </p>

        <a href="{{ route('contact') }}" class="cta_button">
            <span class="cta_text">Prendre rendez-vous</span>
            <span class="cta_arrow">→</span>
        </a>

    </div>

</section>
