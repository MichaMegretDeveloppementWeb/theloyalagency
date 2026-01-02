@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/coaching-offer.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/services/coaching-offer.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush


{{-- =====================================================================================
SECTION 1 : HERO
====================================================================================== --}}
<section id="coaching-hero" class="coaching-section bg-white">

    <div class="section_content">

        <p class="hero_subtitle">
            Un accompagnement sur-mesure pour transformer<br>
            vos clients en partenaires durables
        </p>

    </div>

</section>




{{-- =====================================================================================
SECTION 3 : PROCESSUS - 4 ÉTAPES
====================================================================================== --}}
<section id="coaching-process" class="coaching-section">

    <div class="process_step step_odd bg-white">
        <div class="step_content">
            <span class="step_number">1</span>
            <div class="step_text">
                <h3 class="step_title">Diagnostic</h3>
                <p class="step_description">
                    Nous analysons ensemble votre situation : parcours client, points de friction, opportunités inexploitées.
                </p>
            </div>
        </div>
    </div>

    <div class="process_step step_even bg-cream">
        <div class="step_content">
            <div class="step_text">
                <h3 class="step_title">Stratégie</h3>
                <p class="step_description">
                    Je conçois avec vous un plan d'action personnalisé, avec des objectifs clairs et mesurables.
                </p>
            </div>
            <span class="step_number">2</span>
        </div>
    </div>

    <div class="process_step step_odd bg-white">
        <div class="step_content">
            <span class="step_number">3</span>
            <div class="step_text">
                <h3 class="step_title">Accompagnement</h3>
                <p class="step_description">
                    Lors de nos sessions, je vous guide pas à pas. On avance à votre rythme, en ajustant selon les retours.
                </p>
            </div>
        </div>
    </div>

    <div class="process_step step_even bg-cream">
        <div class="step_content">
            <div class="step_text">
                <h3 class="step_title">Résultats</h3>
                <p class="step_description">
                    Nous mesurons les progrès et optimisons continuellement pour des résultats durables.
                </p>
            </div>
            <span class="step_number">4</span>
        </div>
    </div>

</section>


{{-- =====================================================================================
SECTION 4 : POUR QUI - Design moderne avec cards
====================================================================================== --}}
<section id="coaching-audience" class="coaching-section bg-white">

    <div class="section_content">

        <div class="audience_header">
            <h3 class="audience_title">Ce coaching est fait pour vous si...</h3>
            <p class="audience_subtitle">Peu importe votre secteur, la fidélisation est un levier de croissance accessible à tous.</p>
        </div>

        <div class="audience_grid">

            <div class="audience_card">
                <div class="card_icon">
                    <x-phosphor-storefront-light />
                </div>
                <h4 class="card_title">E-commerce</h4>
                <p class="card_description">
                    Vous vendez en ligne et voulez fidéliser au-delà de la première commande
                </p>
            </div>

            <div class="audience_card">
                <div class="card_icon">
                    <x-phosphor-handshake-light />
                </div>
                <h4 class="card_title">Services</h4>
                <p class="card_description">
                    Vous proposez des services et cherchez à créer des relations durables
                </p>
            </div>

            <div class="audience_card">
                <div class="card_icon">
                    <x-phosphor-trend-up-light />
                </div>
                <h4 class="card_title">Startups</h4>
                <p class="card_description">
                    Vous êtes en croissance et voulez structurer votre approche client
                </p>
            </div>

            <div class="audience_card">
                <div class="card_icon">
                    <x-phosphor-user-focus-light />
                </div>
                <h4 class="card_title">Indépendants</h4>
                <p class="card_description">
                    Vous travaillez seul et voulez maximiser la valeur de chaque client
                </p>
            </div>

        </div>

    </div>

</section>


{{-- =====================================================================================
SECTION 5 : BÉNÉFICES - Design épuré
====================================================================================== --}}
<section id="coaching-benefits" class="coaching-section bg-cream">

    <div class="section_content">

        <h3 class="benefits_title">Ce que vous gagnez</h3>

        <div class="benefits_grid">

            <div class="benefit_item">
                <div class="benefit_icon">
                    <x-phosphor-compass-light />
                </div>
                <div class="benefit_text">
                    <h4 class="benefit_title">Vision claire</h4>
                    <p class="benefit_description">Comprenez exactement quels leviers activer pour fidéliser</p>
                </div>
            </div>

            <div class="benefit_item">
                <div class="benefit_icon">
                    <x-phosphor-toolbox-light />
                </div>
                <div class="benefit_text">
                    <h4 class="benefit_title">Outils concrets</h4>
                    <p class="benefit_description">Des méthodes et templates directement applicables</p>
                </div>
            </div>

            <div class="benefit_item">
                <div class="benefit_icon">
                    <x-phosphor-binoculars-light />
                </div>
                <div class="benefit_text">
                    <h4 class="benefit_title">Regard expert</h4>
                    <p class="benefit_description">Identifiez les opportunités que vous ne voyez plus</p>
                </div>
            </div>

            <div class="benefit_item">
                <div class="benefit_icon">
                    <x-phosphor-graduation-cap-light />
                </div>
                <div class="benefit_text">
                    <h4 class="benefit_title">Montée en compétences</h4>
                    <p class="benefit_description">Devenez autonome dans votre stratégie de fidélisation</p>
                </div>
            </div>

            <div class="benefit_item">
                <div class="benefit_icon">
                    <x-phosphor-chart-line-up-light />
                </div>
                <div class="benefit_text">
                    <h4 class="benefit_title">Résultats mesurables</h4>
                    <p class="benefit_description">Suivez vos progrès avec des indicateurs clairs</p>
                </div>
            </div>

            <div class="benefit_item">
                <div class="benefit_icon">
                    <x-phosphor-heart-straight-light />
                </div>
                <div class="benefit_text">
                    <h4 class="benefit_title">Accompagnement humain</h4>
                    <p class="benefit_description">Un suivi personnalisé adapté à votre rythme</p>
                </div>
            </div>

        </div>

    </div>

</section>


{{-- =====================================================================================
SECTION 2 : PHILOSOPHIE
====================================================================================== --}}
<section id="coaching-philosophy" class="coaching-section bg-white">

    <div class="section_content">

        <div class="quote_container">
            <x-icons.quote class="quote_icon"/>
            <p class="quote_text">
                Chaque entreprise a son histoire, ses clients, ses défis.
            </p>
        </div>

        <p class="philosophy_text">
            C'est pourquoi mon accompagnement part toujours de votre réalité pour construire ensemble une stratégie adaptée à vos enjeux spécifiques.
        </p>

    </div>

</section>


{{-- =====================================================================================
SECTION 6 : CTA - Design élégant
====================================================================================== --}}
<section id="coaching-cta" class="coaching-section bg-cream">

    <div class="section_content">

        <div class="cta_container">

            <div class="cta_text_content">
                <h3 class="cta_title">Prêt à fidéliser autrement ?</h3>
                <p class="cta_text">
                    Chaque projet commence par une conversation. Parlons de vos enjeux.
                </p>
            </div>

            <a href="{{ route('contact') }}" class="cta_button">
                <span>Discuter de mon projet</span>
                <x-phosphor-arrow-right-light />
            </a>

        </div>

    </div>

</section>
