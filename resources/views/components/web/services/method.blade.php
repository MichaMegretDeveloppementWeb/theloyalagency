@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/method.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/services/method.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="method" {{ $attributes }}>

    <div class="method_container">

        <header class="method_header">
            <h2 class="title">La Méthode</h2>
            <p class="subtitle">4 étapes pour transformer votre relation client</p>
        </header>

        <div class="steps">

            <article class="step">
                <span class="step_number">01</span>
                <div class="step_content">
                    <h3 class="step_title">Le parcours client</h3>
                </div>
            </article>

            <article class="step">
                <span class="step_number">02</span>
                <div class="step_content">
                    <h3 class="step_title">La classification des clients</h3>
                </div>
            </article>

            <article class="step">
                <span class="step_number">03</span>
                <div class="step_content">
                    <h3 class="step_title">Les circonstances d'abandon</h3>
                </div>
            </article>

            <article class="step">
                <span class="step_number">04</span>
                <div class="step_content">
                    <h3 class="step_title">La transformation</h3>
                </div>
            </article>

        </div>


        <footer class="formats">

            <div class="formats_header">
                <span class="formats_line"></span>
                <p class="formats_label">Formats disponibles</p>
                <span class="formats_line"></span>
            </div>

            <div class="formats_list">

                <div class="format">
                    <h4 class="format_title">Consulting</h4>
                    <p class="format_description">Accompagnement personnalisé pour votre entreprise</p>
                </div>

                <div class="format">
                    <h4 class="format_title">Formation des équipes</h4>
                    <p class="format_description">Transmission des compétences à vos collaborateurs</p>
                </div>

            </div>

        </footer>

    </div>

</section>
