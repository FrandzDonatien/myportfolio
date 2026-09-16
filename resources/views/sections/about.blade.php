<section class="section" id="a-propos">
    <div class="wrap">
        <x-section-heading number="01" label="À propos" title="Qui suis-je ?" />

        <div class="about">
            <div class="about__text">
                <p class="lead">
                    Je suis un analyste Revenue Assurance et développeur passionné par la data, l'automatisation
                    et les solutions technologiques. J'aime transformer les données en insights et les idées en
                    applications concrètes.
                </p>
                <p class="lead">
                    Mon objectif : évoluer vers une autonomie complète, devenir indispensable dans la création de
                    solutions qui ont un réel impact sur la performance des entreprises.
                </p>
                <p class="about__cta">
                    <a class="btn btn--ghost" href="#experience">En savoir plus <x-icon name="arrow" :size="15" /></a>
                </p>
            </div>

            {{-- Étape 2 : @foreach (config('portfolio.facts') as $fact) --}}
            <dl class="facts">
                <div class="fact">
                    <span class="fact__ico"><x-icon name="pin" :size="16" /></span>
                    <div><dt>Localisation</dt><dd>Togo, Lomé</dd></div>
                </div>
                <div class="fact">
                    <span class="fact__ico"><x-icon name="clock" :size="16" /></span>
                    <div><dt>Disponibilité</dt><dd>Disponible</dd></div>
                </div>
                <div class="fact">
                    <span class="fact__ico"><x-icon name="briefcase" :size="16" /></span>
                    <div><dt>Années d'expérience</dt><dd>+2 ans</dd></div>
                </div>
                <div class="fact">
                    <span class="fact__ico"><x-icon name="languages" :size="16" /></span>
                    <div><dt>Langues</dt><dd>Français (natif), Anglais (B1)</dd></div>
                </div>
            </dl>

            <figure class="photo about__photo">
                <img src="{{ asset('pc.jpg') }}" alt="Poste de travail">
                <figcaption class="photo__quote">« La technologie est un outil, l'impact est le but. »</figcaption>
            </figure>
        </div>
    </div>
</section>
