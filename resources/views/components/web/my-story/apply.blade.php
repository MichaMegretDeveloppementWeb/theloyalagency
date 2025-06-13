@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/my-story/apply.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="apply">

    <div class="apply_container">

        <div aria-hidden="true" class="shape_cut_elmt">
            <div class="corner_rounded top_left"></div>
            <div class="corner_rounded bottom_right"></div>
        </div>

        <div class="title_container">
            <h2 class="title">
                Candidater
            </h2>
            <div aria-hidden="true" class="corner_rounded top_left"></div>
            <div aria-hidden="true" class="corner_rounded bottom_right"></div>
        </div>



        <div class="content_container">

            <div class="text_container">

                <p class="content">
                    Prêt à travailler avec <br>
                    un partenaire dévoué ?
                </p>

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
