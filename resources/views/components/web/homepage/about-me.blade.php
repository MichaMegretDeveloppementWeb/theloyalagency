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
                Melinda a grandi à St‑Martin, « Friendly Island », paradis fragile où le sourire et la résilience soutiennent un tourisme vital, souvent balayé par les cyclones.
                Là, elle comprend qu’un client heureux fait vivre tout un écosystème.
            </p>

            <p class="description">
                Très tôt fascinée par l’hôtellerie de luxe, elle découvre qu’un séjour minutieusement orchestré peut devenir un refuge mémorable. Elle s’y plonge avec passion, résolue à en maîtriser chaque détail.
            </p>

            <p class="description">
                En Europe, la réalité se durcit : précarité, harcèlement, dettes. Pourtant, l’hôtellerie reste son port d’attache, exigeant mais fidèle, où elle puise sa force.
            </p>

            <p class="description">
                Au fil des années, elle cultive un art : dépasser la simple transaction, anticiper les attentes, offrir l’attention juste au bon moment. Pour elle, une relation solide rapporte plus et plus longtemps que n’importe quelle campagne d’acquisition.
            </p>

            <p class="description">
                De cette conviction naît The Loyal Agency, qui aide les entreprises à replacer le client au cœur de leur stratégie grâce à des méthodes concrètes et une intelligence relationnelle affinée sur le terrain.
            </p>

            <p class="description">
                Aujourd’hui, Melinda accompagne équipes commerciales, dirigeant·e·s et entrepreneur·e·s avec exigence, clarté et humanité, pour bâtir des liens sincères et des résultats durables.
            </p>

            <a href="{{ route('about') }}" class="cta">
                En savoir plus
                <x-icons.chevron-right/>
            </a>

        </div>

    </div>

</section>
