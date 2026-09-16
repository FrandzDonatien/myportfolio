@props(['name', 'size' => 20])

@php
    $stroked = [
        'sun'       => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
        'moon'      => '<path d="M21 12.8A9 9 0 1111.2 3a7 7 0 009.8 9.8z"/>',
        'menu'      => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'arrow'     => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'download'  => '<path d="M12 3v12M7 11l5 5 5-5M5 21h14"/>',
        'trend'     => '<path d="M7 17L17 7M9 7h8v8"/>',
        'mail'      => '<rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'phone'     => '<path d="M5 4h4l2 5-2.5 1.5a12 12 0 005 5L15 13l5 2v4a1 1 0 01-1.1 1A16 16 0 014 5.1 1 1 0 015 4z"/>',
        'pin'       => '<path d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        'clock'     => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'briefcase' => '<path d="M4 8h16v12H4z"/><path d="M9 8V5h6v3"/>',
        'languages' => '<rect x="3" y="4" width="13" height="12" rx="2"/><path d="M8 20h13V9"/>',
        'chart'     => '<path d="M4 19V5M4 19h16"/><path d="M8 15l3-4 3 3 4-6"/>',
        'database'  => '<ellipse cx="12" cy="6" rx="8" ry="3"/><path d="M4 6v12c0 1.7 3.6 3 8 3s8-1.3 8-3V6"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>',
        'code'      => '<path d="M8 8l-4 4 4 4M16 8l4 4-4 4M13 5l-2 14"/>',
        'server'    => '<rect x="3" y="4" width="18" height="6" rx="2"/><rect x="3" y="14" width="18" height="6" rx="2"/><path d="M7 7h.01M7 17h.01"/>',
        'building'  => '<rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/>',
        'cap'       => '<path d="M3 9l9-5 9 5-9 5-9-5z"/><path d="M7 11v5c0 1.4 2.2 2.5 5 2.5s5-1.1 5-2.5v-5"/>',
        'folder'    => '<path d="M4 6h16v13H4z"/><path d="M4 10h16M9 6V4h6v2"/>',
    ];

    $filled = [
        'github'   => '<path d="M12 2a10 10 0 00-3.16 19.49c.5.09.69-.22.69-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.53 2.36 1.09 2.94.83.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02a9.5 9.5 0 015 0c1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .27.18.58.69.48A10 10 0 0012 2z"/>',
        'linkedin' => '<path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-.95 1.83-1.95 3.76-1.95 4.02 0 4.76 2.5 4.76 5.76V21h-4v-5.5c0-1.31-.03-3-1.9-3-1.9 0-2.2 1.43-2.2 2.9V21H9z"/>',
        'x'        => '<path d="M17.5 3h3l-6.6 7.5L21.8 21h-5.9l-4.3-5.6L6.4 21H3.4l7-8L2.6 3h6l3.9 5.2zm-1 16h1.6L8.1 4.6H6.4z"/>',
    ];
@endphp

@if (isset($filled[$name]))
    <svg viewBox="0 0 24 24" fill="currentColor" width="{{ $size }}" height="{{ $size }}" aria-hidden="true" {{ $attributes }}>
        {!! $filled[$name] !!}
    </svg>
@else
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
         stroke-linejoin="round" width="{{ $size }}" height="{{ $size }}" aria-hidden="true" {{ $attributes }}>
        {!! $stroked[$name] ?? '' !!}
    </svg>
@endif
