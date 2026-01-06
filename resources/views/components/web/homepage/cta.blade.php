@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/cta.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/homepage/cta.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush



<section class="cta_section">

    <img
        src="{{ asset("assets/images/homepage/cta-background.webp") }}"
        alt="Fond abstrait aux courbes elegantes dans des tons bleu profond evoquant la confiance et la transformation"
        class="background_image"
        loading="lazy"
    />

    <div class="section_content">

        <h2 class="cta_title">Prêt à révolutionner votre façon d'interagir avec vos clients ?</h2>

        <p class="cta_text">
            Le temps est venu. Prenez contact pour remettre votre client au cœur de votre stratégie.
        </p>

        <a href="{{ route('contact') }}" class="cta_button">
            Contact
            <x-icons.chevron-right/>
        </a>

    </div>

</section>
