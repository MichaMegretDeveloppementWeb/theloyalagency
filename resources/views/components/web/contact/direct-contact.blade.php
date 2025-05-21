@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/contact/direct-contact.css?v=".now()->toDateTimeString())}}">
@endpush



<section class="direct_contact">

    <div class="title_container">
        <h2 class="title">
            Contactez-moi directement
        </h2>
        <span class="sub_line"></span>
    </div>

    <ul class="contact_methods_container">

        <li class="contact_method phone">

            <div class="icon_container">
                <img src="{{ asset("assets/images/contact/contact-phone.webp") }}" alt="Combiné téléphonique dessiné à la main – appel et contact téléphonique relation client" loading="lazy">
            </div>

            <h3 class="contact_title">Par téléphone</h3>

            <a href="tel:0687934647" class="contact_content">06 87 93 46 47</a>

        </li>

        <li class="contact_method mail">

            <div class="icon_container">
                <img src="{{ asset("assets/images/contact/contact-mail.webp") }}" alt="Enveloppe esquissée à la main – contact par email et service client relation client" loading="lazy">
            </div>

            <h3 class="contact_title">Par email</h3>

            <a href="mailto:melinda@theloyalagency.com" class="contact_content">melinda@theloyalagency.com</a>

        </li>

        <li class="contact_method linkedin">

            <div class="icon_container">
                <img src="{{ asset("assets/images/contact/contact-linkedin.webp") }}" alt="Logo LinkedIn dessiné à main levée – page de la consultante en relation client pour conseils et actualités" loading="lazy">
            </div>

            <h3 class="contact_title">Sur LinkedIn</h3>

            <a href="www.linkedin.com/in/megret-micha-01b83b238" class="contact_content">Ma page</a>

        </li>

    </ul>

</section>
