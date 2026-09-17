<section class="section section--alt" id="contact">
    <div class="wrap">
        <x-section-heading number="06" label="Contact" />

        <div class="contact">
            <div class="contact__intro">
                <h2 class="section-title">Discutons de votre projet</h2>
                <p>
                    Une idée, un projet ou une opportunité ?<br>
                    Je suis toujours ouvert à de nouvelles collaborations.
                </p>
            </div>

            <div class="contact__list reveal">
                <p class="contact__item">
                    <x-icon name="mail" :size="16" />
                    <a href="mailto:monemail@exemple.com">monemail@exemple.com</a>
                </p>
                <p class="contact__item">
                    <x-icon name="phone" :size="16" />
                    <a href="tel:+22890123456">+228 90 12 34 56</a>
                </p>
                <p class="contact__item">
                    <x-icon name="pin" :size="16" />
                    Lomé, Togo
                </p>
            </div>

            {{-- Étape 4 : <form class="form contact__form" method="POST" action="{{ route('contact.store') }}"> @csrf --}}
            <form class="form contact__form reveal" novalidate>
                <div class="form__row">
                    <input class="field" type="text" name="name" placeholder="Votre nom"
                           aria-label="Votre nom" value="{{ old('name') }}" required>
                    <input class="field" type="email" name="email" placeholder="Votre email"
                           aria-label="Votre email" value="{{ old('email') }}" required>
                </div>

                <select class="field" name="subject" aria-label="Sujet">
                    <option value="">Sujet</option>
                    <option>Mission Revenue Assurance</option>
                    <option>Développement web</option>
                    <option>Autre</option>
                </select>

                <textarea class="field" name="message" placeholder="Votre message"
                          aria-label="Votre message" required>{{ old('message') }}</textarea>

                <button class="btn btn--solid" type="submit">
                    Envoyer le message <x-icon name="arrow" :size="15" />
                </button>

                <p class="form__status" role="status" aria-live="polite">
                    @if (session('status')) {{ session('status') }} @endif
                </p>
            </form>
        </div>
    </div>
</section>
