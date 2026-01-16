@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/customer-recovery.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/services/customer-recovery.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="customer_recovery" {{ $attributes }}>

    <header class="section_header">
        <h2 class="section_title">Récupérer vos clients abandonnés</h2>
    </header>

    <div class="key_stat">

        <div class="stat_number">
            <span>73%</span>
        </div>

        <div class="stat_separator"></div>

        <div class="stat_content">

            <span class="quote_mark">"</span>

            <p class="stat_text">
                C'est la part des entreprises qui <strong>surpassent leurs concurrents</strong> financièrement grâce à une expérience client supérieure à la moyenne.
            </p>

            <cite class="stat_source">Forbes</cite>

        </div>

    </div>

</section>
