@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/collaboration-process.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script src="{{ asset("assets/js/web/services/collaboration-process.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="collaboration_process" {{ $attributes }}>

    <div class="process_container">

        <header class="process_header">
            <h3 class="title">Processus de <em>collaboration</em></h3>
            <p class="subtitle">Un accompagnement structuré, pensé pour vous simplifier la vie</p>
        </header>

        <div class="timeline">

            <article class="timeline_item">
                <div class="timeline_marker">
                    <span class="marker_number">01</span>
                    <span class="marker_line"></span>
                </div>
                <div class="timeline_content">
                    <h4 class="step_title">Premier échange</h4>
                    <p class="step_description">Un appel découverte pour comprendre vos enjeux et voir si nous sommes faits pour travailler ensemble.</p>
                </div>
            </article>

            <article class="timeline_item">
                <div class="timeline_marker">
                    <span class="marker_number">02</span>
                    <span class="marker_line"></span>
                </div>
                <div class="timeline_content">
                    <h4 class="step_title">Diagnostic</h4>
                    <p class="step_description">J'analyse votre situation actuelle : parcours client, points de friction, opportunités inexploitées.</p>
                </div>
            </article>

            <article class="timeline_item">
                <div class="timeline_marker">
                    <span class="marker_number">03</span>
                    <span class="marker_line"></span>
                </div>
                <div class="timeline_content">
                    <h4 class="step_title">Plan d'action</h4>
                    <p class="step_description">Je vous présente une stratégie sur-mesure avec des objectifs clairs et des actions concrètes.</p>
                </div>
            </article>

            <article class="timeline_item">
                <div class="timeline_marker">
                    <span class="marker_number">04</span>
                    <span class="marker_line"></span>
                </div>
                <div class="timeline_content">
                    <h4 class="step_title">Accompagnement</h4>
                    <p class="step_description">Nous avançons ensemble, à votre rythme. Je vous guide pas à pas dans la mise en œuvre.</p>
                </div>
            </article>

            <article class="timeline_item">
                <div class="timeline_marker">
                    <span class="marker_number">05</span>
                    <span class="marker_line"></span>
                </div>
                <div class="timeline_content">
                    <h4 class="step_title">Résultats</h4>
                    <p class="step_description">Nous mesurons les progrès et ajustons pour des résultats durables et mesurables.</p>
                </div>
            </article>

        </div>

    </div>

</section>
