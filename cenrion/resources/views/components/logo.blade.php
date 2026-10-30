@props([
    'variant' => 'brand', // brand | navy | white
    'showWordmark' => true,
    'size' => 36,
])

@php
    $navy = match ($variant) {
        'white' => '#FFFFFF',
        default => '#0B1D2E',
    };
    $cyan = match ($variant) {
        'white' => '#FFFFFF',
        'navy'  => '#0B1D2E',
        default => '#00AEEF',
    };
    $word = match ($variant) {
        'white' => '#FFFFFF',
        default => '#0B1D2E',
    };
@endphp

<a {{ $attributes->merge(['href' => route('home'), 'class' => 'flex items-center gap-2.5 group', 'aria-label' => 'Cenrion home']) }}>
    <svg width="{{ $size }}" height="{{ $size }}" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="transition-transform duration-300 group-hover:scale-105 shrink-0">
        {{-- Four interlocking arrow pieces forming an X — top navy, bottom cyan --}}
        <path d="M6 6h16.5L18 10.5 27 19.5h-7.5L6 6Z" fill="{{ $navy }}"/>
        <path d="M42 6H25.5L30 10.5 21 19.5h7.5L42 6Z" fill="{{ $navy }}"/>
        <path d="M6 42V25.5L10.5 30 19.5 21v7.5L6 42Z" fill="{{ $cyan }}"/>
        <path d="M42 42V25.5L37.5 30 28.5 21v7.5L42 42Z" fill="{{ $cyan }}"/>
    </svg>
    @if ($showWordmark)
        <span class="logo-wordmark font-extrabold tracking-tight leading-none transition-colors duration-200"
              style="font-size: {{ max(18, (int) round($size * 0.62)) }}px; letter-spacing: -0.04em; color: {{ $word }};">
            cenrion
        </span>
    @endif
</a>
