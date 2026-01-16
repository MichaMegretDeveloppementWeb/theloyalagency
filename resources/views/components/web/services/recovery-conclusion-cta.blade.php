@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/recovery-conclusion-cta.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="recovery_conclusion_cta" {{ $attributes }}>

    <div class="conclusion_container">

        <p class="conclusion_text">
            Vous avez le pouvoir de <em>métamorphoser</em> votre relation client
        </p>

        <a href="{{ route('contact') }}" class="cta_button">
            <span class="cta_text">Prendre rendez-vous</span>
            <span class="cta_arrow">→</span>
        </a>

    </div>

</section>
