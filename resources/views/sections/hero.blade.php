<section class="hero" id="accueil">

    <div class="wrap hero__in">

        {{-- =====================================================
             LEFT : INTRODUCTION
             ===================================================== --}}
        <div class="hero__content">

            <p class="hero__eyebrow">
                <span></span>
                Bonjour, je suis
            </p>

            <h1 class="hero__title">
                Frandz
                <span>DEV</span>
            </h1>

            <div class="hero__role">
                Analyste Revenue Assurance
                <span>&</span>
                Développeur Java / Laravel
            </div>

            <p class="hero__description">
                Je travaille à l'intersection de la
                <strong>Revenue Assurance</strong>,
                de la <strong>data</strong> et du
                <strong>développement logiciel</strong>.
                Mon objectif : transformer les données et les processus
                en solutions fiables, automatisées et utiles au métier.
            </p>

            <div class="hero__actions">

                <a
                    href="#projets"
                    class="btn btn--solid"
                >
                    Voir mes projets

                    <x-icon
                        name="arrow"
                        :size="15"
                    />
                </a>

                <a
                    href="{{ asset('cv/frandz-dev.pdf') }}"
                    class="btn btn--ghost"
                    download
                >
                    Télécharger mon CV

                    <x-icon
                        name="download"
                        :size="15"
                    />
                </a>

            </div>

            <x-socials />

        </div>


        {{-- =====================================================
             RIGHT : VISUAL
             ===================================================== --}}
        <div class="hero__visual">

            <div class="hero__image-frame">

                <img
                    src="{{ asset('user.jpg') }}"
                    alt="Frandz DEV"
                    class="hero__image"
                >

                <div class="hero__image-overlay"></div>


                {{-- Small identity label --}}
                <div class="hero__label">
                    <span class="hero__label-dot"></span>

                    <div>
                        <small>Focus</small>
                        <strong>
                            Data · Automation · Engineering
                        </strong>
                    </div>
                </div>


                {{-- Technology stack --}}
                <div class="hero__stack">

                    <span>Java</span>
                    <span>Laravel</span>
                    <span>Python</span>
                    <span>PostgreSQL</span>

                </div>


                {{-- Editorial statement --}}
                <div class="hero__statement">
                    <span>01</span>

                    <p>
                        Better data.<br>
                        Better decisions.
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- Bottom metadata --}}
    <div class="hero__bottom wrap">

        <span>
            Based in Lomé, Togo
        </span>

        <span class="hero__line"></span>

        <span>
            Revenue Assurance · Software Engineering
        </span>

    </div>

</section>
