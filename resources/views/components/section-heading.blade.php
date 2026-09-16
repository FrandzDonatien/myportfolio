@props(['number', 'label', 'title' => null])

<p class="eyebrow"><b>{{ $number }}.</b> {{ $label }}</p>
@if ($title)
    <h2 class="section-title">{{ $title }}</h2>
@endif
