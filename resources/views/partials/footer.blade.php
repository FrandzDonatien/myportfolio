<footer class="footer">
    <div class="wrap footer__top">
        <a class="brand" href="{{ route('home') }}">
            <span class="brand__mark">F</span>
            <span class="brand__text">FRANDZ<span class="brand__accent">DEV</span>
                <span class="footer__tag">Data • Code • Revenue</span>
            </span>
        </a>

        <nav class="footer__nav" aria-label="Pied de page">
            <a href="#accueil">Accueil</a>
            <a href="#a-propos">À propos</a>
            <a href="#expertises">Expertises</a>
            <a href="#experience">Expérience</a>
            <a href="#projets">Projets</a>
            <a href="#contact">Contact</a>
        </nav>

        <x-socials class="socials--flat" />
    </div>

    <div class="wrap footer__bottom">
        <span>&copy; {{ now()->year }} Frandz DEV. Tous droits réservés.</span>
        <em>Construire aujourd'hui les solutions de demain.</em>
    </div>
</footer>
