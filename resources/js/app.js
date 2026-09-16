//
/**
 * Portfolio Frandz DEV — comportements front.
 * Aucune dépendance : trois petits modules autonomes.
 */

/* ---------- Thème sombre / clair ---------- */
function initTheme() {
    const root = document.documentElement;
    const buttons = document.querySelectorAll('[data-set-theme]');

    const apply = (theme) => {
        root.setAttribute('data-theme', theme);
        buttons.forEach((b) => b.setAttribute('aria-pressed', String(b.dataset.setTheme === theme)));
        try {
            localStorage.setItem('frandz-theme', theme);
        } catch (e) {
            /* navigation privée : on garde juste le thème de la session */
        }
    };

    let saved = null;
    try {
        saved = localStorage.getItem('frandz-theme');
    } catch (e) { /* ignore */ }

    apply(saved || 'dark');
    buttons.forEach((b) => b.addEventListener('click', () => apply(b.dataset.setTheme)));
}

/* ---------- Menu mobile ---------- */
function initMenu() {
    const burger = document.querySelector('.burger');
    const links = document.querySelector('.nav__links');
    if (!burger || !links) return;

    burger.addEventListener('click', () => {
        const open = links.classList.toggle('is-open');
        burger.setAttribute('aria-expanded', String(open));
    });

    links.addEventListener('click', (e) => {
        if (e.target.tagName === 'A') {
            links.classList.remove('is-open');
            burger.setAttribute('aria-expanded', 'false');
        }
    });
}

/* ---------- Lien actif selon la section visible ---------- */
function initScrollSpy() {
    if (!('IntersectionObserver' in window)) return;

    const links = Array.from(document.querySelectorAll('.nav__links a'));
    const map = {};

    links.forEach((a) => {
        const href = a.getAttribute('href');
        if (!href.startsWith('#')) return;
        const section = document.querySelector(href);
        if (section) map[section.id] = a;
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            links.forEach((a) => a.classList.remove('is-active'));
            if (map[entry.target.id]) map[entry.target.id].classList.add('is-active');
        });
    }, { rootMargin: '-45% 0px -50% 0px' });

    Object.keys(map).forEach((id) => observer.observe(document.getElementById(id)));
}

/* ---------- Formulaire de contact ----------
 * Validation d'appoint tant que la route POST /contact n'existe pas.
 * À l'étape 4, retirer le preventDefault : la validation serveur prend le relais.
 */
function initContactForm() {
    const form = document.querySelector('.contact__form');
    if (!form || form.getAttribute('method')) return;

    const status = form.querySelector('.form__status');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const missing = ['name', 'email', 'message'].some((field) => !form[field].value.trim());

        status.classList.remove('form__status--error', 'form__status--ok');

        if (missing) {
            status.textContent = 'Renseignez votre nom, votre email et votre message.';
            status.classList.add('form__status--error');
            return;
        }

        status.textContent = 'Message prêt à être envoyé. Branchez la route POST /contact pour le traiter.';
        status.classList.add('form__status--ok');
    });
}

initTheme();
initMenu();
initScrollSpy();
initContactForm();