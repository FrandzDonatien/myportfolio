@props(['class' => ''])

{{-- Étape 2 : cette liste viendra de config('portfolio.socials') --}}
<div {{ $attributes->merge(['class' => 'socials ' . $class]) }}>
    <a href="#" aria-label="GitHub"><x-icon name="github" :size="19" /></a>
    <a href="#" aria-label="LinkedIn"><x-icon name="linkedin" :size="19" /></a>
    <a href="#" aria-label="X"><x-icon name="x" :size="19" /></a>
    <a href="#contact" aria-label="Email"><x-icon name="mail" :size="19" /></a>
</div>
