@props([
    'eyebrow' => null,
    'title',
    'subtitle' => null,
    'breadcrumbs' => [],
])

<section {{ $attributes->merge(['class' => 'page-hero relative overflow-hidden']) }}>
    <div class="page-hero-glow" aria-hidden="true"></div>
    <div class="page-hero-pattern" aria-hidden="true"></div>
    <div class="page-hero-arrow" aria-hidden="true">
        <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 18h52L52 36l28 28H62L18 18Z" fill="#0B1D2E"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-14 lg:pt-14 lg:pb-16">
        @if (!empty($breadcrumbs))
            <nav class="mb-6" aria-label="Breadcrumb" data-animate data-delay="0">
                <ol class="flex flex-wrap items-center gap-2 text-sm" style="color:#5A7184;">
                    @foreach ($breadcrumbs as $i => $crumb)
                        @if ($i > 0)
                            <li aria-hidden="true" style="color:#94A3B8;">/</li>
                        @endif
                        <li style="color:#0B1D2E; font-weight:600;">{{ $crumb }}</li>
                    @endforeach
                </ol>
            </nav>
        @endif

        @if ($eyebrow)
            <div class="inline-flex items-center gap-2 mb-4" data-animate data-delay="40">
                <span class="inline-block w-5 h-px" style="background:#00AEEF;"></span>
                <span class="section-tag">{{ $eyebrow }}</span>
            </div>
        @endif

        <h1 class="js-split text-4xl sm:text-5xl lg:text-[3.25rem] font-extrabold tracking-tight leading-tight mb-4"
            style="color:#0B1D2E; max-width: 18ch;">
            {!! $title !!}
        </h1>

        @if ($subtitle)
            <p class="text-lg leading-relaxed max-w-2xl" style="color:#5A7184;" data-animate data-delay="120">
                {{ $subtitle }}
            </p>
        @endif

        {{ $slot ?? '' }}
    </div>
</section>
