@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/about.css") . "?v=".now()->toDateTimeString()}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/about.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush



<section class="about">

    <div class="section_content">

        <div class="img_container">
            <img src="{{ asset('assets/images/homepage/about_image.webp') }}" alt="Portrait professionnel de Melinda Marin, consultante en relation client spécialisée en fidélisation et optimisation du chiffre d’affaires">
        </div>

        <div class="text_container">

            <h2 class="title">&Agrave; propos de moi</h2>

            <p class="description">
                Au fil des années, je me suis spécialisée dans la stratégie de rétention client, combinant approche data‑driven, psychologie comportementale et CRM sur‑mesure.
                Je conçois des parcours client personnalisés, des campagnes de réengagement et des tactiques d’upsell qui réduisent le churn, renforcent l’engagement et maximisent le ROI.
            </p>

            <p class="description">
                J'accompagne dirigeants, équipes commerciales et entrepreneurs pour booster leurs revenus, optimiser leur rentabilité et bâtir des communautés de clients fidèles et engagés. Ma conviction ? Une relation client authentique et bien pensée génère une valeur à long terme supérieure à n’importe quelle campagne d’acquisition.
            </p>

            <p class="pre_cta">
                Prêt à travailler avec un partenaire dévoué ?
            </p>

            <a href="{{ route('about') }}" class="cta">
                En savoir plus
                <x-icons.chevron-right/>
            </a>

        </div>

    </div>

</section>
