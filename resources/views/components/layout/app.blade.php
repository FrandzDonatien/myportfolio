@props([
    'title' => config('app.name') . ' — Analyste Revenue Assurance & Développeur Java / Laravel',
    'description' => 'Analyste Revenue Assurance et développeur Java / Laravel basé à Lomé, Togo. Data, automatisation et solutions technologiques.',
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    {{-- Applique le thème avant le premier paint pour éviter le flash --}}
    <script>
        try {
            document.documentElement.setAttribute('data-theme', localStorage.getItem('frandz-theme') || 'dark');
        } catch (e) {}
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&family=Caveat:wght@600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.header')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>
</html>
