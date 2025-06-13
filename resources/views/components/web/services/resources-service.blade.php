@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/services/resources.css") . "?v=".now()->toDateTimeString() }}">
@endpush

@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/services/resources.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<section id="ressources">

    <div class="section_content">

        <div class="image_container">

            <img src="{{ asset("assets/images/services/ressources-images.webp") }}" alt="" role="presentation"  aria-hidden="true">

        </div>


        <div class="text_container">

            <div class="content_container">

                <h2 class="title">
                    Ressources
                </h2>

                <p class="content">
                    Téléchargez dès maintenant des guides exclusifs pour maîtriser la fidélisation client.
                    À travers des études de cas, des check‑lists et des bonnes pratiques éprouvées, vous apprendrez à optimiser votre relation client, à réduire le churn et à booster votre rentabilité.
                    Chaque ressource est conçue pour être immédiatement opérationnelle : téléchargez, appliquez et voyez vos indicateurs de rétention progresser !
                </p>

                <a href="{{ route('contact') }}" class="cta animated_hover">
                    Demander des ressources
                    <x-icons.chevron-right/>
                </a>

            </div>

        </div>

    </div>

</section>
