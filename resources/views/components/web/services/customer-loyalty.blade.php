@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/customer-loyalty.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/services/customer-loyalty.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="customer_loyalty" {{ $attributes }}>

    <header class="section_header">
        <h2 class="section_title">Fidéliser vos clients actifs</h2>
    </header>

    <div class="key_stat">

        <div class="stat_number">
            <span>60%</span>
        </div>

        <div class="stat_separator"></div>

        <div class="stat_content">

            <span class="quote_mark">"</span>

            <p class="stat_text">
                C'est l'augmentation moyenne des profits suite à une <strong>hausse de la fidélisation de 5%</strong>.
            </p>

            <cite class="stat_source">Harvard Business Review</cite>

        </div>

    </div>

</section>
