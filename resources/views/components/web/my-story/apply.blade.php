@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/my-story/apply.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="apply">

    <div class="apply_container">

        <div class="content_container">

            <div class="text_container">

                <h2 class="content">
                    Prêt à travailler avec un partenaire dévoué ?
                </h2>

                <div class="cta_container">
                    <a href="{{ route('contact') }}" class="cta animated_hover">
                        Contactez-moi
                        <x-icons.chevron-right/>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>
