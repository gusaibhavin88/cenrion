@props([
    'variant' => 'brand', // brand (for light bg) | white (for dark bg) | navy | all-white
    'showWordmark' => true,
    'size' => 36,
])

@php
    $logoSrc = match ($variant) {
        'white', 'reverse' => '/images/logo-white.png',
        'all-white'        => '/images/logo-all-white.png',
        'navy'             => '/images/logo-all-navy.png',
        default            => '/images/logo-brand.png',
    };
@endphp

<a {{ $attributes->merge(['href' => route('home'), 'class' => 'flex items-center gap-2.5 group', 'aria-label' => 'Cenrion home']) }}>
    <img
        src="{{ $logoSrc }}"
        alt="Cenrion"
        style="height: {{ $size }}px; width: auto; object-fit: contain; transition: transform 0.3s ease;"
        class="shrink-0 group-hover:scale-105"
    >
</a>
