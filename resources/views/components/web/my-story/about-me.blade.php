@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/my-story/about.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="about_me">

    <div class="quote_container">

        <x-icons.quote/>

        <div class="text_container">
            <p class="content">
                Lorsque j'ai découvert l'hôtellerie, c'est très vite devenue une révélation : je comprend qu’une expérience client parfaitement orchestrée peut transformer un simple séjour en souvenir inoubliable. Chaque détail, chaque attention me révèle le pouvoir des relations humaines et la force d’une relation client bien pensée, capable de booster les revenus et d’augmenter la rentabilité.
                Mon arrivée en Europe a marquée un nouveau chapitre : périodes d’incertitude, défis financiers et harcèlement professionnel ont mis ma détermination à l’épreuve. À chaque fois, je suis revenue à l’hôtellerie, un refuge exigeant mais fidèle, où j'ai affiné mon sens du service et consolidé mon expertise en matière de fidélisation.
            </p>
        </div>

        <div class="sub_image_container">
            <img src="{{ asset("assets/images/my-story/quote-image.webp") }}" alt="" role="presentation"  aria-hidden="true">
        </div>

    </div>

    <div class="about_container">

        <div class="title_container">
            <h2 class="title">
                &Agrave; propos de moi
            </h2>
        </div>

        <div class="text_container">

            <p class="content top">
                Au fil des années, je me suis spécialisée dans la stratégie de rétention client, combinant approche data‑driven, psychologie comportementale et CRM sur‑mesure. Je conçois des parcours client personnalisés, des campagnes de réengagement et des tactiques d’upsell qui réduisent le churn, renforcent l’engagement et maximisent le ROI.
            </p>

            <p class="content top">
                Forte de cette expérience, je fonde The Loyal Agency : une agence dédiée à replacer le client au cœur de la stratégie d’entreprise, non pas avec des solutions universelles, mais avec des méthodes concrètes, inspirées du terrain et ancrées dans l’intelligence relationnelle.
            </p>

            <p class="content top">
                Aujourd’hui, j'accompagne dirigeants, équipes commerciales et entrepreneurs pour booster leurs revenus, optimiser leur rentabilité et bâtir des communautés de clients fidèles et engagés. Ma conviction ? Une relation client authentique et bien pensée génère une valeur à long terme supérieure à n’importe quelle campagne d’acquisition.
            </p>

        </div>

    </div>

</section>
