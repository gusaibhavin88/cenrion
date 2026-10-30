@props([
    'variant' => 'brand', // brand | white
    'showWordmark' => true,
    'size' => 36,
])

@php
    $wordColor = match ($variant) {
        'white' => '#FFFFFF',
        default => '#062538',
    };
    // For white variant on dark bg, use a CSS filter to turn the SVG white
    $imgStyle = $variant === 'white'
        ? 'filter: brightness(0) invert(1);'
        : '';
@endphp

<a {{ $attributes->merge(['href' => route('home'), 'class' => 'flex items-center gap-2.5 group', 'aria-label' => 'Cenrion home']) }}>
    <img
        src="/images/logo-full2.png"
        width="{{ $size * 2.5 }}"
        height="{{ $size }}"
        alt="Cenrion"
        style="{{ $imgStyle }} transition: transform 0.3s ease;"
        class="shrink-0 group-hover:scale-105"
    >
</a>
