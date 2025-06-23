@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/my-story/header.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<section id="my_story_header">

    <div class="title_container">
        <h1 class="title">
            Mon Histoire
        </h1>
    </div>

    <nav class="breadcrumb">
        <div>
            <a href="{{ route('homepage') }}" class="item">Accueil</a>
        </div>
        /
        <div>
            <span class="item current">
                Mon Histoire
            </span>
        </div>
    </nav>


    <div class="main_image_container">

        <div class="text_container">

            <p class="text">
                Fidéliser, c'est entreprendre dans le temps et investir dans l'avenir.
            </p>

        </div>

    </div>


    <div class="my_philosophy_container">

        <div class="text_container">

            <div class="title_container">
                <h2 class="title">Ma philosophie</h2>
            </div>

            <p class="content">
                J'ai grandi à Saint‑Martin, la «Friendly Island», où le tourisme rythme la vie et la résilience se cultive dès le plus jeune âge.
                Confrontée aux cyclones et à la fragilité d’un écosystème insulaire, j'y ai développé mon sens de l’entraide, la valeur d’un sourire sincère et, surtout, l’importance du client pour assurer la pérennité de tout un écosystème — fondements essentiels de ma vision de la fidélisation client.
            </p>

        </div>

    </div>

</section>
