<section class="hero" id="accueil">
    <div class="wrap hero__in">
        <div>
            <p class="hello">Bonjour, je suis</p>
            <h1>Frandz <em>DEV</em></h1>
            <p class="hero__role">Analyste Revenue Assurance<br>&amp; Développeur Java / Laravel</p>
            <p class="hero__text">
                Passionné par la data, l'automatisation et les solutions technologiques, j'aide les entreprises
                à mieux analyser, protéger leurs revenus et construire des systèmes fiables et performants.
            </p>

            <div class="hero__cta">
                <a class="btn btn--solid" href="#projets">Voir mes projets <x-icon name="arrow" :size="15" /></a>
                <a class="btn btn--ghost" href="{{ asset('cv/frandz-dev.pdf') }}" download>
                    Télécharger mon CV <x-icon name="download" :size="15" />
                </a>
            </div>

            <x-socials />
        </div>

        <div class="hero__visual">
            <div class="portrait">
                {{-- Dépose la photo détournée dans public/images/portrait.png --}}
                <img class="portrait__note" src="{{ asset('hero.png') }}" alt="">
                <svg class="portrait__ph" viewBox="0 0 300 340" fill="none" aria-hidden="true">
                    <defs>
                        <linearGradient id="pg" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0" stop-color="#22c55e" stop-opacity=".30"/>
                            <stop offset="1" stop-color="#22c55e" stop-opacity=".04"/>
                        </linearGradient>
                    </defs>
                    <circle cx="150" cy="96" r="62" fill="url(#pg)"/>
                    <path d="M28 340c0-68 55-118 122-118s122 50 122 118z" fill="url(#pg)"/>
                </svg>

                <div class="kpi">
                    <p class="kpi__label">Revenue Assurance</p>
                    <p class="kpi__value">+12.5% <x-icon name="trend" :size="15" /></p>
                    <svg class="spark" viewBox="0 0 220 56" fill="none" preserveAspectRatio="none" aria-hidden="true">
                        <path d="M0 46 L22 40 L44 44 L66 30 L88 34 L110 22 L132 26 L154 14 L176 18 L198 8 L220 4"
                              stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <ul class="stack" aria-label="Technologies">
                    <li>Java</li>
                    <li>Laravel</li>
                    <li>Python</li>
                    <li>PostgreSQL</li>
                    <li>Airflow</li>
                </ul>

                <p class="handwrite">Better data<br>Better decisions<br>Higher revenue</p>
            </div>
        </div>
    </div>
</section>
