{{-- Étape 2 : les liens viendront de config('portfolio.nav') --}}
<header class="nav">
    <div class="wrap nav__in">
        <a class="brand" href="{{ route('home') }}">
            <span class="brand__mark">F</span>FRANDZ<span class="brand__accent">DEV</span>
        </a>

        <nav class="nav__links" aria-label="Navigation principale">
            <a href="#accueil" class="is-active">Accueil</a>
            <a href="#a-propos">À propos</a>
            <a href="#expertises">Expertises</a>
            <a href="#experience">Expérience</a>
            <a href="#projets">Projets</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav__end">
            <div class="toggle" role="group" aria-label="Thème">
                <button type="button" data-set-theme="light" aria-pressed="false" aria-label="Thème clair">
                    <x-icon name="sun" :size="14" />
                </button>
                <button type="button" data-set-theme="dark" aria-pressed="true" aria-label="Thème sombre">
                    <x-icon name="moon" :size="14" />
                </button>
            </div>

            <a class="btn btn--outline" href="{{ asset('cv/frandz-dev.pdf') }}" download>Télécharger CV</a>

            <button class="burger" type="button" aria-label="Ouvrir le menu" aria-expanded="false">
                <x-icon name="menu" :size="18" />
            </button>
        </div>
    </div>
</header>
