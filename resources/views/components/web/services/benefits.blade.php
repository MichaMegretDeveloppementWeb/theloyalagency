@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/benefits.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="benefits" {{ $attributes }}>

    <div class="benefits_container">

        <header class="benefits_header">
            <h3 class="title">Ce que vous gagnez</h3>
        </header>

        <div class="benefits_list">

            <article class="benefit_item">
                <div class="benefit_separator"></div>
                <div class="benefit_content">
                    <div class="benefit_icon">
                        <x-phosphor-compass-light />
                    </div>
                    <div class="benefit_text">
                        <h4 class="benefit_title">Vision claire</h4>
                        <p class="benefit_description">Comprenez exactement quels leviers activer pour fidéliser</p>
                    </div>
                </div>
            </article>

            <article class="benefit_item">
                <div class="benefit_separator"></div>
                <div class="benefit_content">
                    <div class="benefit_icon">
                        <x-phosphor-toolbox-light />
                    </div>
                    <div class="benefit_text">
                        <h4 class="benefit_title">Outils concrets</h4>
                        <p class="benefit_description">Des méthodes et templates directement applicables</p>
                    </div>
                </div>
            </article>

            <article class="benefit_item">
                <div class="benefit_separator"></div>
                <div class="benefit_content">
                    <div class="benefit_icon">
                        <x-phosphor-binoculars-light />
                    </div>
                    <div class="benefit_text">
                        <h4 class="benefit_title">Regard expert</h4>
                        <p class="benefit_description">Identifiez les opportunités que vous ne voyez plus</p>
                    </div>
                </div>
            </article>

            <article class="benefit_item">
                <div class="benefit_separator"></div>
                <div class="benefit_content">
                    <div class="benefit_icon">
                        <x-phosphor-graduation-cap-light />
                    </div>
                    <div class="benefit_text">
                        <h4 class="benefit_title">Montée en compétences</h4>
                        <p class="benefit_description">Devenez autonome dans votre stratégie de fidélisation</p>
                    </div>
                </div>
            </article>

            <article class="benefit_item">
                <div class="benefit_separator"></div>
                <div class="benefit_content">
                    <div class="benefit_icon">
                        <x-phosphor-chart-line-up-light />
                    </div>
                    <div class="benefit_text">
                        <h4 class="benefit_title">Résultats mesurables</h4>
                        <p class="benefit_description">Suivez vos progrès avec des indicateurs clairs</p>
                    </div>
                </div>
            </article>

            <article class="benefit_item">
                <div class="benefit_separator"></div>
                <div class="benefit_content">
                    <div class="benefit_icon">
                        <x-phosphor-heart-straight-light />
                    </div>
                    <div class="benefit_text">
                        <h4 class="benefit_title">Accompagnement humain</h4>
                        <p class="benefit_description">Un suivi personnalisé adapté à votre rythme</p>
                    </div>
                </div>
            </article>

        </div>

    </div>

</section>
