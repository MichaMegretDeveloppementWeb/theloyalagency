@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/quote.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/homepage/quote.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush


<section class="quote_section">

    <div class="section_content">

        <div class="quote_container">
            <x-icons.quote class="quote_icon"/>
            <blockquote class="quote_text">
                Une entreprise ne maîtrise jamais ce que ses clients diront d'elle...
                Pourtant elle est entièrement responsable des mots - des maux - qu'elle leur laisse.
            </blockquote>
            <p class="quote_author">— Melinda Marin</p>
        </div>

    </div>

</section>
