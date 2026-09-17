<section class="section section--alt" id="expertises">
    <div class="wrap">
        <x-section-heading number="02" label="Expertises" />

        <div class="head-row">
            <h2 class="section-title">Mes domaines d'expertise</h2>
            <p>
                Une combinaison de compétences techniques et analytiques pour répondre aux défis
                de la Revenue Assurance et du développement.
            </p>
        </div>

        {{-- Étape 2 : @foreach (config('portfolio.expertise') as $area) --}}
        <div class="grid-4">
            <article class="card reveal" data-number="01">
                <div class="card__head">
                    <span class="card__ico i-green"><x-icon name="chart" :size="17" /></span>
                    <h3>Revenue Assurance</h3>
                </div>
                <ul>
                    <li>Analyse des écarts &amp; anomalies</li>
                    <li>Contrôle des processus de facturation</li>
                    <li>Optimisation des revenus</li>
                    <li>Reporting &amp; tableaux de bord</li>
                </ul>
            </article>

            <article class="card reveal" data-number="02">
                <div class="card__head">
                    <span class="card__ico i-indigo"><x-icon name="database" :size="17" /></span>
                    <h3>Data &amp; BI</h3>
                </div>
                <ul>
                    <li>SQL (PostgreSQL, MySQL)</li>
                    <li>Power BI / Excel</li>
                    <li>ETL (Talend, Python, Airflow)</li>
                    <li>Data visualization</li>
                </ul>
            </article>

            <article class="card reveal" data-number="03">
                <div class="card__head">
                    <span class="card__ico i-red"><x-icon name="code" :size="17" /></span>
                    <h3>Développement</h3>
                </div>
                <ul>
                    <li>Java (Spring Boot)</li>
                    <li>Laravel (Blade, API)</li>
                    <li>JavaScript (Alpine.js)</li>
                    <li>Git / GitHub / CI-CD</li>
                </ul>
            </article>

            <article class="card reveal" data-number="04">
                <div class="card__head">
                    <span class="card__ico i-cyan"><x-icon name="server" :size="17" /></span>
                    <h3>Bases de données</h3>
                </div>
                <ul>
                    <li>PostgreSQL (admin &amp; procédures)</li>
                    <li>MySQL</li>
                    <li>Modélisation &amp; optimisation</li>
                    <li>Administration</li>
                </ul>
            </article>
        </div>
    </div>
</section>
