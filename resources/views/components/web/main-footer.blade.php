@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/main-footer.css") . "?v=".now()->toDateTimeString() }}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/main-footer.js") . "?v=".now()->toDateTimeString() }}"></script>
@endpush

<footer id="main_footer">

    <div class="footer_container">

        <div class="footer__grid">

            <div class="footer__logo-desc">

                <a href="/" aria-label="Retour à l'accueil" class="logo_container">
                    <img src="{{ asset('assets/images/commons/main-logo-desktop.webp') }}" alt="Logo The Loyal Agency" loading="lazy">
                </a>

                <p>The Loyal Agency, experte en communication et relation client depuis 2010. Faites confiance à mon savoir-faire pour booster votre rentabilité.</p>

            </div>

            <div class="footer__links">

                <div class="footer_utilities">

                    <h3>Liens utiles</h3>
                    <ul>
                        <li><a href="{{ route('homepage') }}">Accueil</a></li>
                        <li><a href="{{ route('about') }}">Mon histoire</a></li>
                        <li><a href="{{ route('services') }}">Mes services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('legal.privacy-policy') }}">Politique de confidentialité</a></li>
                        <li><a href="{{ route('legal.legal-notice') }}">Mention légales</a></li>
                    </ul>

                </div>

                <div class="footer__contact">
                    <h3>Contactez-moi</h3>
                    <address>
                        <p>The Loyal Agency</p>
                        <p>Route cantonale 5, 1898 St-Gingolph, Suisse</p>
                        <p>Tél : <a href="tel:+33123456789">01 23 45 67 89</a></p>
                        <p>Email : <a href="mailto:contact@theloyalagency.fr">contact@theloyalagency.com</a></p>
                    </address>
                </div>

                <div class="footer__social">
                    <h3>Suivez-moi</h3>
                    <ul>
                        <li>
                            <a href="#" aria-label="LinkedIn" class="logo_container">
                                <img src="{{ asset("assets/images/commons/linkedin-logo.webp") }}" alt="Logo LinkedIn">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="footer__bottom">
            <p>&copy; 2025 The Loyal Agency. Tous droits réservés.</p>
        </div>

    </div>

</footer>
