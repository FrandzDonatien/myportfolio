<section class="section section--alt" id="projets">
    <div class="wrap">
        <x-section-heading number="04" label="Projets" />

        <div class="head-row head-row--center">
            <h2 class="section-title">Mes projets récents</h2>
            <p class="head-row__link">
                <a class="link-more" href="#">Voir tous les projets <x-icon name="arrow" :size="14" /></a>
            </p>
        </div>

        {{-- Étape 3 : @foreach ($projects as $project) depuis le modèle Project --}}
        <div class="grid-3">
            <article class="project">
                <div class="project__media"><span>aperçu — projet-1.jpg</span></div>
                <div class="project__body">
                    <h3>Plateforme de gestion académique</h3>
                    <p>Application web complète pour la gestion des étudiants, notes et bulletins.</p>
                    <div class="tags">
                        <span class="tag">Laravel</span><span class="tag">MySQL</span><span class="tag">Docker</span>
                    </div>
                </div>
            </article>

            <article class="project">
                <div class="project__media"><span>aperçu — projet-2.jpg</span></div>
                <div class="project__body">
                    <h3>Dashboard Revenue Assurance</h3>
                    <p>Analyse des écarts de facturation et suivi des revenus en temps réel.</p>
                    <div class="tags">
                        <span class="tag">Python</span><span class="tag">PostgreSQL</span><span class="tag">Power BI</span>
                    </div>
                </div>
            </article>

            <article class="project">
                <div class="project__media"><span>aperçu — projet-3.jpg</span></div>
                <div class="project__body">
                    <h3>Automatisation de tâches</h3>
                    <p>Scripts de traitement automatique des fichiers et exports : contrôles, alertes, rapports.</p>
                    <div class="tags">
                        <span class="tag">Laravel</span><span class="tag">Vue.js</span><span class="tag">FFmpeg</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
