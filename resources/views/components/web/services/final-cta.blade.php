@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/final-cta.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/services/final-cta.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="final_cta" {{ $attributes }}>

    <img
        src="{{ asset("assets/images/services/cta-background.webp") }}"
        alt="Fond abstrait aux courbes elegantes dans des tons bleu profond evoquant la confiance et la transformation"
        class="background_image"
        loading="lazy"
    />

    <div class="section_content">

        <h2 class="cta_title">Prêt à fidéliser autrement&nbsp;?</h2>

        <p class="cta_text">
            Chaque projet commence par une conversation. Parlons de vos enjeux.
        </p>

        <a href="{{ route('contact') }}" class="cta_button">
            <span>Discuter de mon projet</span>
            <x-phosphor-arrow-right-light />
        </a>

    </div>

</section>
