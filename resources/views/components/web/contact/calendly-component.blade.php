@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/contact/calendly-component.css") . "?v=".now()->toDateTimeString()}}">
@endpush



<section class="calendly_component">

    <div class="title_container">
        <h2 class="title">
            Réservez un rendez-vous
        </h2>
        <span class="sub_line"></span>
    </div>

    <!-- Calendly inline widget begin -->
    <div class="calendly-inline-widget" data-url="https://calendly.com/michamegret-dev/30min" style="min-width:320px;height:700px;" data-resize="true"></div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
    <!-- Calendly inline widget end -->



</section>
