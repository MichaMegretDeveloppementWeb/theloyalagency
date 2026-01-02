@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/services.css") . "?v=".now()->toDateTimeString()}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/services.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush



<section class="services">

    <div class="section_content">

        <div class="title_container">
            <h2 class="title">
                Mon offre
            </h2>
        </div>

        <div class="offer_container">

            <div class="offer_content">

                <div class="offer_header">
                    <h3 class="offer_title">
                        Coaching Fidélisation
                    </h3>
                    <p class="offer_tagline">
                        Un accompagnement personnalisé pour transformer vos clients en partenaires durables
                    </p>
                </div>

                <p class="offer_description">
                    Chaque entreprise est unique. C'est pourquoi je vous propose un coaching sur-mesure, adapté à votre réalité et à vos objectifs. Ensemble, nous construisons une stratégie de fidélisation client qui génère des résultats concrets et durables.
                </p>

                <ul class="offer_benefits">

                    <li class="benefit">
                        <x-icons.check/>
                        <p class="text">
                            Diagnostic approfondi de votre situation actuelle
                        </p>
                    </li>

                    <li class="benefit">
                        <x-icons.check/>
                        <p class="text">
                            Sessions de coaching individuelles et personnalisées
                        </p>
                    </li>

                    <li class="benefit">
                        <x-icons.check/>
                        <p class="text">
                            Plan d'action concret adapté à vos enjeux
                        </p>
                    </li>

                    <li class="benefit">
                        <x-icons.check/>
                        <p class="text">
                            Suivi et ajustements pour des résultats durables
                        </p>
                    </li>

                </ul>

                <div class="offer_cta_container">
                    <a href="{{ route('contact') }}" class="cta cta_primary">
                        Discuter de mon projet
                    </a>
                    <a href="{{ route('services') }}" class="cta cta_secondary">
                        Plus de détails
                        <x-icons.arrow-right/>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>
