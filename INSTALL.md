# Étape 1 — Squelette Blade (contenu encore statique)

## Où déposer les fichiers

Copier le contenu de cette archive à la racine du projet Laravel 13. Fichiers écrasés :
`routes/web.php`, `vite.config.js`, `resources/css/app.css`, `resources/js/app.js`.

```
routes/web.php
vite.config.js
resources/css/app.css
resources/js/app.js
resources/views/home.blade.php
resources/views/components/layout/app.blade.php
resources/views/components/icon.blade.php
resources/views/components/socials.blade.php
resources/views/components/section-heading.blade.php
resources/views/partials/header.blade.php
resources/views/partials/footer.blade.php
resources/views/sections/{hero,about,expertise,experience,projects,tools,contact}.blade.php
```

## Lancer

```bash
npm install
npm run dev        # ou : composer run dev
php artisan serve
```

## À déposer soi-même

- `public/images/portrait.png` — photo détourée du hero
- `public/images/desk.jpg` — visuel « À propos » (décommenter le `<img>` dans `sections/about.blade.php`)
- `public/images/projets/*.jpg` — vignettes des projets
- `public/cv/frandz-dev.pdf` — le CV téléchargeable

## Notes

- Tailwind v4 est importé en tête de `app.css` ; les utilitaires restent disponibles à côté
  du design système maison, qui reproduit la maquette au pixel.
- Le thème est appliqué dans le `<head>` avant le premier paint, donc pas de flash blanc.
- Les commentaires `{{-- Étape 2 --}}` / `{{-- Étape 3 --}}` marquent chaque endroit qui
  deviendra une boucle sur des données.
