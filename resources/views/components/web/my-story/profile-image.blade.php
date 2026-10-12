@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/my-story/profile-image.css") . "?v=".now()->toDateTimeString() }}">
@endpush

<div id="profile_image_container">

    <img
        src="{{ asset('assets/images/my-story/melinda-marin-portrait-960.webp') }}"
        srcset="{{ asset('assets/images/my-story/melinda-marin-portrait-480.webp') }} 480w,
                {{ asset('assets/images/my-story/melinda-marin-portrait-960.webp') }} 960w"
        sizes="(max-width: 533px) 90vw, 480px"
        width="960"
        height="1440"
        loading="lazy"
        decoding="async"
        alt="Melinda Marin, fondatrice de The Loyal Agency et experte en fidélisation client"
    >

</div>
