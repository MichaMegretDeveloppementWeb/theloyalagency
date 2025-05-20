@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/about.css?v=".now()->toDateTimeString())}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/about.js?v=".now()->toDateTimeString()) }}"></script>
@endpush



<section class="about">

    <div class="section_content">

        <div class="img_container">
            <img src="{{ asset('assets/images/homepage/about_image.webp') }}" alt="Portrait professionnel de Melinda Marin, consultante en relation client spécialisée en fidélisation et optimisation du chiffre d’affaires">
        </div>

        <div class="text_container">

            <h2 class="title">&Agrave; propos de moi</h2>

            <p class="description">
                Consultante en relation client, j’accompagne les marques dans l’optimisation de leur service pour augmenter leur chiffre d’affaires, améliorer leur rentabilité et fidéliser durablement leurs clients.
                Forte de 15 ans en hôtellerie de luxe et d’une expérience de cliente mystère pour la maison Chanel, j’allie stratégie de commercialisation et approche centrée sur l’humain.
                <br><br>
                <u>Mon approche :</u>
            </p>

            <ul class="approaches_list">

                <li class="approach">
                    {{--<x-icons.check/>--}}
                    <x-icons.chevron-right/>
                    <span class="text"><b>Audit relation client</b> pour identifier vos leviers de croissance</span>
                </li>

                <li class="approach">
                    {{--<x-icons.check/>--}}
                    <x-icons.chevron-right/>
                    <span class="text"><b>Conception de parcours client sur-mesure</b>, du premier contact à la fidélisation</span>
                </li>

                <li class="approach">
                    {{--<x-icons.check/>--}}
                    <x-icons.chevron-right/>
                    <span class="text"><b>Formation et coaching</b> de vos équipes pour délivrer un service mémorable</span>
                </li>

            </ul>

            <p class="pre_cta">
                Prêt à transformer chaque interaction en opportunité de revenu et de satisfaction ?
            </p>

            <a href="#" class="cta">
                Contactez-moi
                <x-icons.chevron-right/>
            </a>

        </div>

    </div>

</section>
