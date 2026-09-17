<section class="section" id="experience">
    <div class="wrap">
        <x-section-heading number="03" label="Expérience" />

        <div class="head-row head-row--center">
            <h2 class="section-title">Mon parcours professionnel</h2>
            <p class="head-row__link">
                <a class="link-more" href="#">Voir toutes les expériences <x-icon name="arrow" :size="14" /></a>
            </p>
        </div>

        {{-- Étape 3 : @foreach ($experiences as $experience) depuis le modèle Experience --}}
        <div class="timeline">
            <article class="tl reveal">
                <span class="tl__dot"></span>
                <div class="tl__top">
                    <span class="tl__ico i-cyan"><x-icon name="building" :size="17" /></span>
                    <div>
                        <h3>YAS Togo</h3>
                        <p class="tl__role">Analyste Revenue Assurance</p>
                    </div>
                </div>
                <p class="tl__date">Juin 2026 – Aujourd'hui</p>
                <ul>
                    <li>Contrôle des processus postpaid</li>
                    <li>Analyse et détection des anomalies</li>
                    <li>Reporting et suivi des revenus</li>
                </ul>
            </article>

            <article class="tl reveal">
                <span class="tl__dot"></span>
                <div class="tl__top">
                    <span class="tl__ico i-green"><x-icon name="cap" :size="17" /></span>
                    <div>
                        <h3>Stage / Projet académique</h3>
                        <p class="tl__role">Développeur Full Stack</p>
                    </div>
                </div>
                <p class="tl__date">2024 – 2025</p>
                <ul>
                    <li>Plateforme de gestion académique</li>
                    <li>Laravel + MySQL + Docker</li>
                    <li>CI/CD avec GitHub Actions</li>
                </ul>
            </article>

            <article class="tl reveal">
                <span class="tl__dot"></span>
                <div class="tl__top">
                    <span class="tl__ico i-indigo"><x-icon name="folder" :size="17" /></span>
                    <div>
                        <h3>Projets personnels</h3>
                        <p class="tl__role">Développeur &amp; Data Analyst</p>
                    </div>
                </div>
                <p class="tl__date">2023 – Aujourd'hui</p>
                <ul>
                    <li>Automatisation avec Python &amp; Airflow</li>
                    <li>Visualisation avec Power BI</li>
                    <li>Projets web (Laravel / Spring Boot)</li>
                </ul>
            </article>
        </div>
    </div>
</section>
