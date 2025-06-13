@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/pack-boost.css") . "?v=".now()->toDateTimeString() }}">
@endpush

@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/services/pack-boost.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="pack-boost">

    <div class="section_content">


        <div class="text_container">

            <div class="content_container">

                <h2 class="title">
                    Pack boost
                </h2>

                <p class="content">
                    Abonnez‑vous et profitez d’un accès illimité à l’ensemble de mes ressources exclusives (guides, templates, études de cas) pour maîtriser la fidélisation client, optimiser vos revenus et augmenter votre rentabilité.
                </p>

                <ul class="list_advantage">
                    <li class="item">
                        <x-icons.chevron-right/>
                        <p><strong>1 heure de coaching mensuel incluse</strong> : un rendez‑vous individuel pour analyser vos blocages et définir les priorités.</p>
                    </li>
                    <li class="item">
                        <x-icons.chevron-right/>
                        <p><strong>Analyse ciblée de vos points d’amélioration</strong> : diagnostic rapide de votre stratégie relation client.</p>
                    </li>
                    <li class="item">
                        <x-icons.chevron-right/>
                        <p><strong>Plan d’action personnalisé</strong> : des recommandations concrètes et adaptées pour booster l’engagement, réduire le churn et maximiser votre ROI.</p>
                    </li>
                </ul>

                {{--<p class="content">
                    Avec le Pack Boost, vous combinez formation continue et accompagnement expert pour transformer chaque interaction client en levier de croissance durable.
                </p>--}}

                <a href="{{ route('contact') }}" class="cta animated_hover">
                    Souscrire à l'offre
                    <x-icons.chevron-right/>
                </a>

            </div>

        </div>


        <div class="image_container">

            <img src="{{ asset("assets/images/services/pack-boost.webp") }}" alt="" role="presentation"  aria-hidden="true">

        </div>

    </div>

</section>
