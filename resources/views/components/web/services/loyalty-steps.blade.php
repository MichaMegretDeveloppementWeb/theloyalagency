@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/loyalty-steps.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="loyalty_steps" {{ $attributes }}>

    <div class="steps_container">

        <header class="steps_header">
            <h3 class="title">Les 9 étapes de la fidélisation</h3>
        </header>

        <div class="steps_grid">

            <article class="step_item">
                <span class="step_number">01</span>
                <div class="step_icon">
                    <x-heroicon-o-clipboard-document-check />
                </div>
                <h4 class="step_title">Évaluer</h4>
                <p class="step_description">Écoutez vos clients, fixez un cap de progression clair.</p>
            </article>

            <article class="step_item">
                <span class="step_number">02</span>
                <div class="step_icon">
                    <x-heroicon-o-squares-2x2 />
                </div>
                <h4 class="step_title">Organiser</h4>
                <p class="step_description">Structurez votre base clients et clarifiez votre CRM interne.</p>
            </article>

            <article class="step_item">
                <span class="step_number">03</span>
                <div class="step_icon">
                    <x-heroicon-o-identification />
                </div>
                <h4 class="step_title">Connaître</h4>
                <p class="step_description">Apprenez à en savoir plus sur vos clients pour renforcer votre relation.</p>
            </article>

            <article class="step_item">
                <span class="step_number">04</span>
                <div class="step_icon">
                    <x-heroicon-o-arrow-path />
                </div>
                <h4 class="step_title">Renforcer</h4>
                <p class="step_description">Recréez du lien, réactivez les anciens, reconquérez les perdus.</p>
            </article>

            <article class="step_item">
                <span class="step_number">05</span>
                <div class="step_icon">
                    <x-heroicon-o-sparkles />
                </div>
                <h4 class="step_title">Surpasser</h4>
                <p class="step_description">Créez l'effet waouh et dépassez toutes les attentes clients.</p>
            </article>

            <article class="step_item">
                <span class="step_number">06</span>
                <div class="step_icon">
                    <x-heroicon-o-user-group />
                </div>
                <h4 class="step_title">Regrouper</h4>
                <p class="step_description">Fédérez autour de votre marque, bâtissez une vraie communauté.</p>
            </article>

            <article class="step_item">
                <span class="step_number">07</span>
                <div class="step_icon">
                    <x-heroicon-o-puzzle-piece />
                </div>
                <h4 class="step_title">Jouer</h4>
                <p class="step_description">Rendez la fidélité ludique, engageante et valorisante pour tous.</p>
            </article>

            <article class="step_item">
                <span class="step_number">08</span>
                <div class="step_icon">
                    <x-heroicon-o-gift />
                </div>
                <h4 class="step_title">Privilégier</h4>
                <p class="step_description">Offrez plus à vos meilleurs clients, créez des ambassadeurs engagés.</p>
            </article>

            <article class="step_item">
                <span class="step_number">09</span>
                <div class="step_icon">
                    <x-heroicon-o-rocket-launch />
                </div>
                <h4 class="step_title">Scaler</h4>
                <p class="step_description">Lancez de nouveaux services pour fidéliser et croître sereinement.</p>
            </article>

        </div>

    </div>

</section>
