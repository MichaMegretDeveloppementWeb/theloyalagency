@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/web/homepage/top-banner.css?v='.now()->toDateTimeString()) }}">
@endpush

<section class="top_banner_container">

    <section class="top_banner">

        <div class="title_container">

            <h1 class="main_title">Boostez votre rentabilité</h1>

            <div class="morph_sub_title_container">

                <div class="variant variant_1">Treat &nbsp; them Royal</div>
                <div class="variant variant_2">Make &nbsp;them Loyal</div>

            </div>

            <a class="cta contact" href="#">
                Contactez-moi
                <x-icons.arrow-right/>
            </a>

        </div>

        <div class="image_container">

            <img src="{{ asset('assets/images/homepage/image-profil-melinda.webp') }}" alt="Image de profil de Melinda Marin, créatrice de relation client chez The Loyal Agency">

        </div>

    </section>

</section>
