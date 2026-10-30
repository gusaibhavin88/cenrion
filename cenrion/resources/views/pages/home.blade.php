@extends('layouts.app')

@section('title', 'Glass Box Engineering')

@section('meta_description', 'Cenrion delivers glass box engineering — AI speed with engineering accountability across managed IT services, staff augmentation, and product engineering.')

@push('styles')
<style>
    .home-hero {
        min-height: auto;
    }

    /* Glass box — the hero object. A see-through engineering volume,
       not a particle field or a gradient blob. */
    .glassbox {
        position: relative;
        width: 100%;
        max-width: 560px;
        margin: 0 auto;
    }
    .hero-layout {
        display: grid;
        grid-template-columns: minmax(0, 1fr);
        grid-template-areas:
            "intro"
            "visual"
            "actions";
        align-items: center;
    }
    .hero-intro { grid-area: intro; }
    .hero-actions { grid-area: actions; }
    .glassbox { grid-area: visual; }

    .glassbox-stage {
        position: relative;
        height: 300px;
        cursor: grab;
    }
    .glassbox-stage:active { cursor: grabbing; }
    .glassbox-stage canvas {
        display: block;
        width: 100%;
        height: 100%;
    }
    .glassbox-kicker {
        position: absolute;
        top: 8px;
        left: 4px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: #0B1D2E;
        pointer-events: none;
    }
    .glassbox-kicker i {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #00AEEF;
        box-shadow: 0 0 0 0 rgba(0,174,239,0.55);
        animation: glassbox-ping 2.4s ease-out infinite;
    }
    @keyframes glassbox-ping {
        0% { box-shadow: 0 0 0 0 rgba(0,174,239,0.45); }
        70% { box-shadow: 0 0 0 8px rgba(0,174,239,0); }
        100% { box-shadow: 0 0 0 0 rgba(0,174,239,0); }
    }
    .glassbox-legend {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
        margin-top: 2px;
    }
    .glassbox-legend li {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 7px 12px;
        border-radius: 999px;
        border: 1px solid rgba(11,29,46,0.08);
        background: rgba(255,255,255,0.55);
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.04em;
        color: rgba(11,29,46,0.55);
        transition: border-color 0.35s ease, color 0.35s ease, background 0.35s ease, box-shadow 0.35s ease;
    }
    .glassbox-legend li span {
        font-variant-numeric: tabular-nums;
        font-size: 10px;
        letter-spacing: 0.08em;
        color: #00AEEF;
    }
    .glassbox-legend li.is-lit {
        color: #0B1D2E;
        border-color: rgba(0,174,239,0.45);
        background: rgba(0,174,239,0.10);
        box-shadow: 0 8px 22px rgba(0,174,239,0.12);
    }
    @media (min-width: 1024px) {
        .hero-layout {
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
            grid-template-areas:
                "intro visual"
                "actions visual";
            column-gap: 1.5rem;
            row-gap: 0;
        }
        .glassbox { margin: 0 0 0 auto; }
        .glassbox-stage { height: 520px; }
        .glassbox-kicker { top: 36px; left: 18px; }
    }
    .services-ticker-set {
        display: inline-flex;
        align-items: center;
        gap: 1.1rem;
        padding-right: 1.1rem;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: rgba(224, 247, 255, 0.72);
        white-space: nowrap;
    }
    .services-ticker-set span { color: #00AEEF; }

    .hero-chip-light {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 16px;
        background: rgba(11,29,46,0.04);
        border: 1px solid rgba(11,29,46,0.08);
        border-radius: 999px;
        font-size: 13px; font-weight: 500;
        color: #0B1D2E;
        white-space: nowrap;
    }

    .insight-card::after,
    .labs-mini-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: -80%;
        width: 45%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.45), transparent);
        transform: skewX(-18deg);
        pointer-events: none;
        z-index: 2;
    }
    .insight-card:hover::after,
    .labs-mini-card:hover::after { left: 140%; transition: left 0.7s ease; }

    @media (prefers-reduced-motion: reduce) {
        .marquee-track, .glassbox-kicker i { animation: none; }
        .insight-card::after, .labs-mini-card::after { display: none; }
    }

    /* ── Scroll indicator bounce ── */
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50%       { transform: translateY(8px); }
    }
    .animate-bounce-slow { animation: bounce-slow 2s ease-in-out infinite; }

    /* ── Marquee ── */
    @keyframes marquee {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .marquee-track {
        display: flex;
        width: max-content;
        animation: marquee 30s linear infinite;
    }
    .marquee-track:hover { animation-play-state: paused; }
    .marquee-wrapper { overflow: hidden; position: relative; }
    /* Fade edges */
    .marquee-wrapper::before,
    .marquee-wrapper::after {
        content: '';
        position: absolute;
        top: 0; bottom: 0;
        width: 80px;
        z-index: 10;
        pointer-events: none;
    }
    .marquee-wrapper::before {
        left: 0;
        background: linear-gradient(to right, #0B1D2E, transparent);
    }
    .marquee-wrapper::after {
        right: 0;
        background: linear-gradient(to left, #0B1D2E, transparent);
    }
    .process-on-navy h3 { color: #FFFFFF !important; }
    .process-on-navy p { color: #94A3B8 !important; }
    .process-on-navy .process-connector {
        background: linear-gradient(to right, rgba(0,174,239,0.55), rgba(0,174,239,0.12));
    }

    /* ── Tech badge dark variant ── */
    .tech-badge-dark {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 18px;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 999px;
        font-size: 13px; font-weight: 500;
        color: #E0F7FF;
        white-space: nowrap;
        transition: background 0.2s, border-color 0.2s;
        cursor: default;
    }
    .tech-badge-dark:hover {
        background: rgba(0,174,239,0.15);
        border-color: rgba(0,174,239,0.4);
    }

    /* ── Process connector line ── */
    .process-connector {
        flex: 1;
        height: 2px;
        background: linear-gradient(to right, rgba(0,174,239,0.4), rgba(0,174,239,0.1));
        margin-top: 28px; /* aligns with icon center */
    }

    /* ── Insight card ── */
    .insight-card {
        background: rgba(255,255,255,0.94);
        border: 1px solid rgba(226,234,244,0.9);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.28s ease;
        box-shadow: 0 10px 25px rgba(12,25,40,0.06);
        position: relative;
    }
    .insight-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0,174,239,0.06), transparent 50%);
        opacity: 0;
        transition: opacity 0.28s ease;
    }
    .insight-card:hover::before {
        opacity: 1;
    }
    .insight-card:hover {
        border-color: rgba(0,174,239,0.3);
        box-shadow: 0 18px 48px rgba(0,174,239,0.12), 0 10px 28px rgba(11,29,46,0.08);
        transform: translateY(-4px);
    }

    /* ── Labs mini card ── */
    .labs-mini-card {
        background: rgba(17,34,55,0.78);
        border: 1px solid rgba(26,51,82,0.9);
        border-radius: 18px;
        transition: all 0.28s ease;
        box-shadow: 0 10px 24px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
    }
    .labs-mini-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0,174,239,0.08), transparent 45%);
        opacity: 0;
        transition: opacity 0.28s ease;
    }
    .labs-mini-card:hover::before {
        opacity: 1;
    }
    .labs-mini-card:hover {
        border-color: rgba(0,174,239,0.4);
        box-shadow: 0 16px 42px rgba(0,174,239,0.14), 0 10px 28px rgba(11,29,46,0.18);
        transform: translateY(-3px);
    }

    /* ── CTA banner noise pattern ── */
    .cta-banner {
        background: linear-gradient(135deg, #0B1D2E 0%, #112237 50%, #0B1D2E 100%);
        position: relative;
        overflow: hidden;
    }
    .cta-banner::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(0,174,239,0.06) 1px, transparent 1px);
        background-size: 28px 28px;
        pointer-events: none;
    }
    .cta-orb-left {
        position: absolute; left: -120px; top: -80px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(0,174,239,0.15), transparent 70%);
        border-radius: 9999px;
        pointer-events: none;
    }
    .cta-orb-right {
        position: absolute; right: -100px; bottom: -100px;
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(77,216,245,0.1), transparent 70%);
        border-radius: 9999px;
        pointer-events: none;
    }
</style>
@endpush

@section('content')

{{-- ══════════════════════════════════════════════════════════
     SECTION 1: HERO (light fold)
══════════════════════════════════════════════════════════ --}}
<section class="home-hero relative overflow-hidden">
    <div class="home-hero-glow" aria-hidden="true"></div>
    <div class="home-hero-pattern" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 pt-10 pb-10 lg:pt-8 lg:pb-12">
        <div class="hero-layout">
            <div class="hero-intro text-center lg:text-left">
                <div data-animate data-delay="0">
                    <span class="section-tag inline-flex items-center gap-2 mb-5">
                        <span class="inline-block w-5 h-px" style="background:#00AEEF;"></span>
                        AI Speed · Engineering Accountability
                        <span class="inline-block w-5 h-px" style="background:#00AEEF;"></span>
                    </span>
                </div>

                <h1 class="js-split font-extrabold tracking-tight mb-1 lg:mb-0 leading-[1.05]"
                    style="font-size:clamp(2.6rem,5.4vw,4.5rem); color:#0B1D2E;">
                    Glass box<br>
                    <span class="draw-line" style="color:#00AEEF;">engineering.</span>
                </h1>
            </div>

            <div class="glassbox" data-animate="fade-in" data-delay="80">
                <div class="glassbox-stage" id="glassbox">
                    <p class="glassbox-kicker"><i></i> Open system</p>
                    <canvas id="glassbox-canvas" aria-hidden="true"></canvas>
                </div>
                <ul class="glassbox-legend" aria-label="What the glass box makes visible">
                    <li data-layer="0"><span>01</span> Architecture</li>
                    <li data-layer="1"><span>02</span> Visibility</li>
                    <li data-layer="2"><span>03</span> Quality</li>
                </ul>
            </div>

            <div class="hero-actions text-center lg:text-left mt-6 lg:mt-5">
                <p class="mx-auto lg:mx-0 mb-8 leading-relaxed"
                   style="max-width:520px;font-size:1.1rem;color:#5A7184;"
                   data-animate data-delay="160">
                    AI made writing code faster than ever. Cenrion closes the gap with architecture,
                    visibility and quality checks that prove software is ready to scale.
                </p>

                <div class="flex flex-col sm:flex-row items-center lg:items-start justify-center lg:justify-start gap-4"
                     data-animate data-delay="240">
                    <a href="{{ route('contact') }}" class="btn-primary">
                        Start a Product Review
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="{{ route('capabilities') }}" class="btn-secondary">
                        Explore Capabilities
                    </a>
                </div>

                <div class="mt-8 flex flex-wrap items-center justify-center lg:justify-start gap-3" data-animate data-delay="300">
                    <span class="hero-chip-light">Managed IT Services</span>
                    <span class="hero-chip-light">Staff Augmentation</span>
                    <span class="hero-chip-light">Product Engineering</span>
                    <span class="hero-chip-light">Quality Engineering</span>
                </div>
            </div>
        </div>

        <div class="mt-6 lg:mt-2 flex flex-col items-center gap-2 animate-bounce-slow"
             style="color:rgba(11,29,46,0.35);">
            <span class="text-xs font-medium tracking-widest uppercase" style="font-size:10px;letter-spacing:0.15em;">Scroll</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </div>
    </div>
</section>

{{-- Thin navy services band — separation under light hero --}}
<section class="services-band py-4 overflow-hidden" aria-label="Services">
    <div class="marquee-wrapper">
        <div class="marquee-track" style="animation-duration:28s;">
            @for ($copy = 0; $copy < 2; $copy++)
                <span class="services-ticker-set">
                    Managed IT Services <span>·</span>
                    Staff Augmentation <span>·</span>
                    Product Engineering <span>·</span>
                    AI &amp; Automation <span>·</span>
                    Cloud &amp; DevOps <span>·</span>
                    Quality Engineering <span>·</span>
                </span>
            @endfor
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     WHY NOW
══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>Why Now</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#0B1D2E;" data-animate data-delay="80">
                It is about time.
            </h2>
            <p class="mx-auto text-lg" style="max-width:560px;color:#5A7184;" data-animate data-delay="160">
                AI has made writing code faster than at any point in the history of software.
                What has not kept pace is the engineering discipline that makes that code trustworthy, visible and ready to scale.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach([
                ['01', 'Speed went up', 'Code is generated, reviewed and shipped in a fraction of the time it once took.'],
                ['02', 'Visibility went down', 'Clients see the output, rarely the architecture, the tests or the risks behind it.'],
                ['03', 'Engineering got rushed', 'Shortcuts replaced design, and quality became optional the moment timelines tightened.'],
                ['04', 'Scalability became an afterthought', 'Systems are built for the demo, then strain under real users and real load.'],
            ] as $i => $item)
            <div class="p-7 rounded-2xl border" style="border-color:#E2EAF4;background:#F5F8FC;" data-animate data-delay="{{ $i * 80 }}">
                <span class="section-tag block mb-3">{{ $item[0] }}</span>
                <h3 class="text-xl font-bold mb-2" style="color:#0B1D2E;">{{ $item[1] }}</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">{{ $item[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     BLACK BOX → GLASS BOX
══════════════════════════════════════════════════════════ --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>The Black Box Problem</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#0B1D2E;" data-animate data-delay="80">
                The gap between speed and scale
            </h2>
            <p class="mx-auto text-lg" style="max-width:580px;color:#5A7184;" data-animate data-delay="160">
                AI tools now write a large share of new code, so features arrive faster than ever.
                Architecture, visibility and the checks that prove code works have not kept pace.
                Cenrion closes that gap on every project.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-14">
            <div class="p-7 rounded-2xl bg-white border" style="border-color:#E2EAF4;" data-animate>
                <h3 class="font-bold mb-4" style="color:#0B1D2E;">What AI accelerated</h3>
                <ul class="space-y-2 text-sm" style="color:#5A7184;">
                    @foreach(['Code generation','Prototypes and proofs of concept','Feature delivery','Release frequency'] as $line)
                    <li class="flex gap-2"><span style="color:#00AEEF;">›</span>{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="p-7 rounded-2xl text-center flex flex-col justify-center" style="background:#0B1D2E;" data-animate data-delay="80">
                <span class="section-tag block mb-3">Cenrion</span>
                <h3 class="text-2xl font-extrabold text-white mb-3">Bridges the gap</h3>
                <p class="text-sm" style="color:#94A3B8;">16+ years of global delivery leadership, applied to software that is built to scale.</p>
            </div>
            <div class="p-7 rounded-2xl bg-white border" style="border-color:#E2EAF4;" data-animate data-delay="160">
                <h3 class="font-bold mb-4" style="color:#0B1D2E;">What got left behind</h3>
                <ul class="space-y-2 text-sm" style="color:#5A7184;">
                    @foreach(['Visibility into how it was built','Architecture that scales','Quality checks and sign-off','Performance under real load'] as $line)
                    <li class="flex gap-2"><span style="color:#00AEEF;">›</span>{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-8 rounded-2xl border" style="border-color:#E2EAF4;background:#fff;" data-animate>
                <span class="section-tag block mb-3">Black box</span>
                <h3 class="text-xl font-bold mb-3" style="color:#0B1D2E;">Hope it works</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    You receive finished software but cannot see how it was built or tested. Problems show up after launch.
                </p>
            </div>
            <div class="p-8 rounded-2xl border" style="border-color:rgba(0,174,239,0.35);background:#fff;" data-animate data-delay="80">
                <span class="section-tag block mb-3">Glass box</span>
                <h3 class="text-xl font-bold mb-3" style="color:#0B1D2E;">See every step and check</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    You see the plan, the tests and the results. Every step is checked and signed off. Problems are caught before launch.
                </p>
            </div>
        </div>

        <p class="mt-10 text-center text-lg font-semibold" style="color:#0B1D2E;" data-animate>
            Every Cenrion release is engineered to scale — architecture decisions, code reviews, automated tests and performance benchmarks travel with it.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 2: CAPABILITIES OVERVIEW
══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">

        {{-- Section header --}}
        <div class="text-center mb-16">
            <span class="section-tag block mb-3" data-animate>What We Build</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4"
                style="color:#0B1D2E;" data-animate data-delay="80">
                Six capabilities, one standard
            </h2>
            <p class="mx-auto text-lg" style="max-width:520px;color:#5A7184;"
               data-animate data-delay="160">
                Architecture, reviews, tests and benchmarks travel with every release —
                so you can see exactly how it was built.
            </p>
        </div>

        {{-- 6-card grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Card 1: AI & Automation --}}
            <div class="card p-8 group" data-animate style="transition-delay:0ms">
                <div class="mb-5">
                    {{-- Brain / circuit icon --}}
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                         style="background:rgba(0,174,239,0.10);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#00AEEF" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#0B1D2E;">AI &amp; Automation</h3>
                <p class="text-sm leading-relaxed mb-5" style="color:#5A7184;">
                    Generative AI, agentic workflows &amp; custom LLMs tailored to your domain and business processes.
                </p>
                <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold"
                   style="color:#00AEEF;">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- Card 2: Software Engineering --}}
            <div class="card p-8 group" data-animate style="transition-delay:80ms">
                <div class="mb-5">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                         style="background:rgba(0,174,239,0.10);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#00AEEF" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#0B1D2E;">Software Engineering</h3>
                <p class="text-sm leading-relaxed mb-5" style="color:#5A7184;">
                    Modern web, mobile &amp; enterprise software platforms — built to last and scale.
                </p>
                <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold"
                   style="color:#00AEEF;">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- Card 3: Cloud & DevOps --}}
            <div class="card p-8 group" data-animate style="transition-delay:160ms">
                <div class="mb-5">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                         style="background:rgba(0,174,239,0.10);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#00AEEF" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#0B1D2E;">Cloud &amp; DevOps</h3>
                <p class="text-sm leading-relaxed mb-5" style="color:#5A7184;">
                    Cloud-native builds, IaC, CI/CD &amp; cost optimization across AWS, GCP, and Azure.
                </p>
                <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold"
                   style="color:#00AEEF;">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- Card 4: Quality Engineering --}}
            <div class="card p-8 group" data-animate style="transition-delay:240ms">
                <div class="mb-5">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                         style="background:rgba(0,174,239,0.10);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#00AEEF" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#0B1D2E;">Quality Engineering</h3>
                <p class="text-sm leading-relaxed mb-5" style="color:#5A7184;">
                    Automated testing, API performance &amp; stress testing — quality baked into every build.
                </p>
                <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold"
                   style="color:#00AEEF;">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- Card 5: Data & Analytics --}}
            <div class="card p-8 group" data-animate style="transition-delay:320ms">
                <div class="mb-5">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                         style="background:rgba(0,174,239,0.10);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#00AEEF" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#0B1D2E;">Data &amp; Analytics</h3>
                <p class="text-sm leading-relaxed mb-5" style="color:#5A7184;">
                    Pipelines, real-time analytics &amp; data platforms that turn raw data into business intelligence.
                </p>
                <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold"
                   style="color:#00AEEF;">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- Card 6: Tech Consulting --}}
            <div class="card p-8 group" data-animate style="transition-delay:400ms">
                <div class="mb-5">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center"
                         style="background:rgba(0,174,239,0.10);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="#00AEEF" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2" style="color:#0B1D2E;">Tech Consulting</h3>
                <p class="text-sm leading-relaxed mb-5" style="color:#5A7184;">
                    Architecture modernization &amp; AI adoption strategy — from roadmap to execution.
                </p>
                <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold"
                   style="color:#00AEEF;">
                    Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                        <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

        </div>{{-- /grid --}}

        {{-- Bottom link --}}
        <div class="text-center mt-12" data-animate>
            <a href="{{ route('capabilities') }}"
               class="inline-flex items-center gap-2 font-semibold text-sm"
               style="color:#00AEEF;">
                View all capabilities
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 3: TECHNOLOGY ECOSYSTEM BAR
══════════════════════════════════════════════════════════ --}}
<section class="py-20 overflow-hidden" style="background:#0B1D2E;">
    <div class="max-w-6xl mx-auto px-6 lg:px-8 mb-12 text-center">
        <span class="section-tag block mb-3" data-animate>Our Stack</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-3 text-white"
            data-animate style="transition-delay:80ms">
            Engineered Expertise
        </h2>
        <p class="text-base" style="color:#94A3B8;" data-animate style="transition-delay:160ms">
            Deep hands-on proficiency across the modern technology landscape.
        </p>
    </div>

    {{-- Marquee --}}
    <div class="marquee-wrapper py-2">
        <div class="marquee-track">
            {{-- First set --}}
            @php
            $techs = [
                ['Python',       'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'],
                ['PyTorch',      'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v4m0 0H5m4 0h10M5 7v10a2 2 0 002 2h10a2 2 0 002-2V7'],
                ['Kubernetes',   'M12 3l9 4.5v9L12 21l-9-4.5v-9L12 3z'],
                ['LangChain',    'M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244'],
                ['PostgreSQL',   'M20.25 6.375c0 8.485-7.5 11.25-7.5 11.25S5.25 14.86 5.25 6.375a7.5 7.5 0 1115 0z'],
                ['OpenAI API',   'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z'],
                ['React / Next.js','M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418'],
                ['TypeScript',   'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5'],
                ['Node.js',      'M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 019 0m-9 0a4.5 4.5 0 018.573-1.917'],
                ['Go',           'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18'],
                ['AWS',          'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z'],
                ['Azure',        'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z'],
            ];
            @endphp

            @foreach($techs as $tech)
            <div class="mx-3">
                <span class="tech-badge-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="#00AEEF" stroke-width="1.5" class="w-4 h-4 flex-shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $tech[1] }}"/>
                    </svg>
                    {{ $tech[0] }}
                </span>
            </div>
            @endforeach

            {{-- Duplicate set for seamless loop --}}
            @foreach($techs as $tech)
            <div class="mx-3">
                <span class="tech-badge-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="#00AEEF" stroke-width="1.5" class="w-4 h-4 flex-shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $tech[1] }}"/>
                    </svg>
                    {{ $tech[0] }}
                </span>
            </div>
            @endforeach
        </div>
    </div>

</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 4: DELIVERY PROCESS (navy contrast fold)
══════════════════════════════════════════════════════════ --}}
<section class="fold-navy process-on-navy py-24">
    <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>How We Work</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 text-white"
                data-animate data-delay="80">
                The Glass Box model
            </h2>
            <p class="mx-auto text-lg" style="max-width:560px;color:#94A3B8;"
               data-animate data-delay="160">
                Most vendors leave architecture and scaling to the end. We engineer for scale from day one
                and place a gate between every phase. Each gate leaves behind a document the client keeps.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-12">
            @foreach([
                ['01', 'Discover', 'Outcomes and success criteria · Architecture and risk map', 'G1'],
                ['02', 'Design', 'UX and system design · Architecture built to scale', 'G2'],
                ['03', 'Build', 'Agile engineering sprints · Clean, reviewed code', 'G3'],
                ['04', 'Release', 'CI/CD and cloud deployment · Release readiness sign-off', 'G4'],
                ['05', 'Scale', 'Performance and load tuning · Monitoring and growth', 'Scale'],
            ] as $i => $step)
            <div class="rounded-2xl p-5 text-center" style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);" data-animate data-delay="{{ $i * 70 }}">
                <span class="section-tag block mb-2">{{ $step[0] }}</span>
                <h3 class="text-lg font-bold text-white mb-2">{{ $step[1] }}</h3>
                <p class="text-xs leading-relaxed mb-3" style="color:#94A3B8;">{{ $step[2] }}</p>
                <span class="inline-flex px-2.5 py-1 rounded-full text-[11px] font-bold" style="background:rgba(0,174,239,0.15);color:#4DD8F5;">{{ $step[3] }}</span>
            </div>
            @endforeach
        </div>

        <p class="text-center text-sm mb-12" style="color:#94A3B8;" data-animate>
            <span style="color:#00AEEF;font-weight:700;">QA layer</span> —
            Automated testing and code review run through every phase, from the first sprint to scale.
        </p>

        <div class="rounded-2xl overflow-hidden border" style="border-color:rgba(255,255,255,0.08);" data-animate>
            <div class="px-6 py-5" style="background:rgba(255,255,255,0.04);">
                <h3 class="text-xl font-bold text-white">What you receive at every gate</h3>
                <p class="text-sm mt-1" style="color:#94A3B8;">A gate is a checkpoint with a clear pass or fail. If a gate fails, it is fixed before the work moves on.</p>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr style="color:#4DD8F5;border-bottom:1px solid rgba(255,255,255,0.08);">
                            <th class="px-6 py-3 font-semibold">Gate</th>
                            <th class="px-6 py-3 font-semibold">Checkpoint</th>
                            <th class="px-6 py-3 font-semibold">What you receive</th>
                        </tr>
                    </thead>
                    <tbody style="color:#94A3B8;">
                        @foreach([
                            ['G1', 'Architecture approved', 'Solution architecture and scalability plan'],
                            ['G2', 'Design signed off', 'System design, API contracts and test strategy'],
                            ['G3', 'Build verified', 'Code review, automated test and security reports'],
                            ['G4', 'Release ready', 'Deployment runbook and performance benchmarks'],
                            ['Scale', 'Growth and operations', 'Monitoring, capacity planning and root-cause reports'],
                        ] as $row)
                        <tr style="border-bottom:1px solid rgba(255,255,255,0.06);">
                            <td class="px-6 py-3 font-semibold" style="color:#fff;">{{ $row[0] }}</td>
                            <td class="px-6 py-3">{{ $row[1] }}</td>
                            <td class="px-6 py-3">{{ $row[2] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 5: CENRION LABS TEASER
══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-start gap-16">

            {{-- Left column: text --}}
            <div class="flex-1 lg:max-w-lg" data-animate>
                <span class="section-tag block mb-4">Cenrion Labs</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-6 leading-tight"
                    style="color:#0B1D2E;">
                    Proof of Engineering<br>
                    <span class="gradient-text">Capability.</span>
                </h2>
                <p class="text-lg leading-relaxed mb-4" style="color:#5A7184;">
                    Cenrion Labs is where theory meets production code. Each demo is a
                    fully-functional, interactive technology showcase — built to prove our
                    depth across AI, analytics, and software engineering.
                </p>
                <p class="text-base leading-relaxed mb-10" style="color:#94A3B8;">
                    No slide decks, no case study vagueness — just working systems you can
                    explore right now.
                </p>
                <a href="{{ route('labs') }}" class="btn-primary">
                    Explore Labs
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- Right column: mini-card grid --}}
            <div class="flex-1 w-full" data-animate style="transition-delay:150ms">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    {{-- Lab card 1: AI Document Intelligence --}}
                    <div class="labs-mini-card p-6 sm:col-span-2">
                        <div class="flex items-start justify-between mb-3">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                                 style="background:rgba(0,174,239,0.15);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="#00AEEF" stroke-width="1.5" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-bold tracking-widest uppercase px-2 py-1 rounded"
                                  style="color:#00AEEF;background:rgba(0,174,239,0.1);font-size:9px;">CONCEPT</span>
                        </div>
                        <h4 class="font-semibold mb-1" style="color:white;">AI Document Intelligence</h4>
                        <p class="text-xs leading-relaxed" style="color:#94A3B8;">
                            Upload any document — contracts, reports, invoices — and get instant AI-powered extraction, summarization, and Q&amp;A.
                        </p>
                    </div>

                    {{-- Lab card 2: AI Support Agent --}}
                    <div class="labs-mini-card p-6">
                        <div class="flex items-start justify-between mb-3">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                                 style="background:rgba(0,174,239,0.15);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="#00AEEF" stroke-width="1.5" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-bold tracking-widest uppercase px-2 py-1 rounded"
                                  style="color:#00AEEF;background:rgba(0,174,239,0.1);font-size:9px;">CONCEPT</span>
                        </div>
                        <h4 class="font-semibold mb-1" style="color:white;">AI Support Agent</h4>
                        <p class="text-xs leading-relaxed" style="color:#94A3B8;">
                            Agentic customer support powered by retrieval-augmented generation.
                        </p>
                    </div>

                    {{-- Lab card 3: Analytics Dashboard --}}
                    <div class="labs-mini-card p-6">
                        <div class="flex items-start justify-between mb-3">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                                 style="background:rgba(0,174,239,0.15);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="#00AEEF" stroke-width="1.5" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-bold tracking-widest uppercase px-2 py-1 rounded"
                                  style="color:#00AEEF;background:rgba(0,174,239,0.1);font-size:9px;">CONCEPT</span>
                        </div>
                        <h4 class="font-semibold mb-1" style="color:white;">Analytics Dashboard</h4>
                        <p class="text-xs leading-relaxed" style="color:#94A3B8;">
                            Real-time data visualization with streaming pipeline architecture.
                        </p>
                    </div>

                </div>{{-- /grid --}}
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 6: THOUGHT LEADERSHIP TEASER
══════════════════════════════════════════════════════════ --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">

        {{-- Section header --}}
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">
            <div>
                <span class="section-tag block mb-3" data-animate>Insights</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight"
                    style="color:#0B1D2E;" data-animate style="transition-delay:80ms">
                    Thinking Out Loud
                </h2>
            </div>
            <a href="{{ route('insights') }}"
               class="hidden sm:inline-flex items-center gap-2 font-semibold text-sm shrink-0"
               style="color:#00AEEF;" data-animate style="transition-delay:160ms">
                View All Insights
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.06l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

        {{-- Featured insight cards --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- Insight 1 --}}
            <article class="insight-card" data-animate>
                {{-- Accent top bar --}}
                <div class="h-1 w-full" style="background:linear-gradient(to right,#00AEEF,#4DD8F5);"></div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide"
                              style="background:rgba(0,174,239,0.1);color:#00AEEF;">
                            AI &amp; Applied Tech
                        </span>
                        <span class="text-xs" style="color:#94A3B8;">8 min read</span>
                    </div>
                    <h3 class="text-xl font-bold leading-snug mb-3" style="color:#0B1D2E;">
                        Where Generative AI Actually Creates Business Value
                    </h3>
                    <p class="text-sm leading-relaxed mb-6" style="color:#5A7184;">
                        Beyond the hype, there are specific, measurable places where generative AI delivers
                        genuine ROI. We break down the patterns that separate real value from expensive
                        experimentation.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold"
                                 style="background:#00AEEF;color:white;">C</div>
                            <span class="text-xs font-medium" style="color:#5A7184;">Cenrion Team</span>
                        </div>
                        <a href="{{ route('insights') }}"
                           class="inline-flex items-center gap-1.5 text-sm font-semibold group"
                           style="color:#00AEEF;">
                            Read Article
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                 class="w-4 h-4 transition-transform group-hover:translate-x-1">
                                <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            {{-- Insight 2 --}}
            <article class="insight-card" data-animate style="transition-delay:100ms">
                <div class="h-1 w-full" style="background:linear-gradient(to right,#4DD8F5,#00AEEF);"></div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide"
                              style="background:rgba(0,174,239,0.1);color:#00AEEF;">
                            Engineering Strategy
                        </span>
                        <span class="text-xs" style="color:#94A3B8;">6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold leading-snug mb-3" style="color:#0B1D2E;">
                        Monolith vs Microservices: When to Shift
                    </h3>
                    <p class="text-sm leading-relaxed mb-6" style="color:#5A7184;">
                        Not every system needs microservices — and premature decomposition has killed
                        more projects than it has saved. Here's a clear framework for knowing when
                        and how to make the move.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold"
                                 style="background:#00AEEF;color:white;">C</div>
                            <span class="text-xs font-medium" style="color:#5A7184;">Cenrion Team</span>
                        </div>
                        <a href="{{ route('insights') }}"
                           class="inline-flex items-center gap-1.5 text-sm font-semibold group"
                           style="color:#00AEEF;">
                            Read Article
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                 class="w-4 h-4 transition-transform group-hover:translate-x-1">
                                <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

        </div>

        {{-- Mobile "View All" link --}}
        <div class="text-center mt-10 sm:hidden" data-animate>
            <a href="{{ route('insights') }}"
               class="inline-flex items-center gap-2 font-semibold text-sm"
               style="color:#00AEEF;">
                View All Insights
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     AI IN THE LOOP
══════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>How We Use AI</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#0B1D2E;" data-animate data-delay="80">
                AI in the loop, engineers in charge
            </h2>
            <p class="mx-auto text-lg" style="max-width:560px;color:#5A7184;" data-animate data-delay="160">
                We use AI where it saves time. Senior engineers own the architecture and review every AI output before it ships.
                You get the speed of AI with engineers accountable for the result.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['AI accelerates', ['Code scaffolding and refactoring','Integrations and boilerplate','Documentation drafts']],
                ['Engineers decide', ['Architecture owned by senior engineers','Human review of every change','Designed for scale, not just the demo']],
                ['Clients see', ['Architecture and design decisions','Code review and test results','Performance and scale reports']],
            ] as $i => $col)
            <div class="p-7 rounded-2xl border" style="border-color:#E2EAF4;background:#F5F8FC;" data-animate data-delay="{{ $i * 80 }}">
                <h3 class="text-lg font-bold mb-4" style="color:#0B1D2E;">{{ $col[0] }}</h3>
                <ul class="space-y-2 text-sm" style="color:#5A7184;">
                    @foreach($col[1] as $line)
                    <li class="flex gap-2"><span style="color:#00AEEF;">›</span>{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     PRODUCT ENGINEERING REVIEW
══════════════════════════════════════════════════════════ --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-animate>
                <span class="section-tag block mb-3">Where to Start</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#0B1D2E;">
                    Start with a Product Engineering review
                </h2>
                <p class="text-lg mb-8" style="color:#5A7184;">
                    A fixed-scope review of your product’s architecture, code base and delivery pipeline, completed in two weeks.
                    You keep the findings and the roadmap, whether or not we work together.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary">
                    Book a review
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            <div class="space-y-4">
                @foreach([
                    ['01', 'Map', 'Architecture, code base and release pipeline as they run today'],
                    ['02', 'Measure', 'Scalability limits, technical debt and quality gaps'],
                    ['03', 'Recommend', 'A prioritised engineering roadmap to scale with confidence'],
                ] as $i => $step)
                <div class="p-6 rounded-2xl bg-white border flex gap-5" style="border-color:#E2EAF4;" data-animate data-delay="{{ $i * 80 }}">
                    <span class="section-tag shrink-0">{{ $step[0] }}</span>
                    <div>
                        <h3 class="font-bold mb-1" style="color:#0B1D2E;">{{ $step[1] }}</h3>
                        <p class="text-sm" style="color:#5A7184;">{{ $step[2] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 7: CTA BANNER
══════════════════════════════════════════════════════════ --}}
<section class="cta-banner py-28">
    {{-- Ambient orbs --}}
    <div class="cta-orb-left"></div>
    <div class="cta-orb-right"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-8 text-center">

        {{-- Decorative icon --}}
        <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl mb-8"
             style="background:rgba(0,174,239,0.15);border:1px solid rgba(0,174,239,0.3);"
             data-animate>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="#00AEEF" stroke-width="1.5" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
            </svg>
        </div>

        <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-5 text-white leading-tight"
            data-animate data-delay="80">
            Ready to build something<br>
            <span class="gradient-text">meaningful?</span>
        </h2>
        <p class="text-lg mb-10 mx-auto" style="color:#94A3B8;max-width:520px;"
           data-animate data-delay="160">
            No fluff. No long-winded proposals. Just engineering that ships fast and scales hard.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4"
             data-animate data-delay="240">
            <a href="{{ route('contact') }}" class="btn-white">
                Talk to Us
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
            <a href="{{ route('capabilities') }}" class="btn-outline-white">
                Explore Capabilities
            </a>
        </div>

        <p class="mt-12 text-xs tracking-widest uppercase" style="color:rgba(148,163,184,0.45);">
            hello@cenrion.com · www.cenrion.com
        </p>

    </div>
</section>

@endsection

@push('scripts')
<script>
(function () {
    const stage = document.getElementById('glassbox');
    const canvas = document.getElementById('glassbox-canvas');
    if (!stage || !canvas) return;

    const ctx = canvas.getContext('2d');
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const legend = document.querySelectorAll('.glassbox-legend [data-layer]');

    const CORNERS = [
        [-1, -1, -1], [1, -1, -1], [1, 1, -1], [-1, 1, -1],
        [-1, -1,  1], [1, -1,  1], [1, 1,  1], [-1, 1,  1]
    ];
    const FACES = [
        [0, 1, 2, 3],
        [4, 5, 6, 7],
        [0, 1, 5, 4],
        [3, 2, 6, 7],
        [0, 3, 7, 4],
        [1, 2, 6, 5]
    ];
    const EDGES = [
        [0, 1], [1, 2], [2, 3], [3, 0],
        [4, 5], [5, 6], [6, 7], [7, 4],
        [0, 4], [1, 5], [2, 6], [3, 7]
    ];
    const PLATES = [
        { y: -0.56, label: 0 },
        { y:  0.00, label: 1 },
        { y:  0.56, label: 2 }
    ];

    let yaw = -0.62;
    let pitch = 0.36;
    let spin = 0;
    let userYaw = 0;
    let userPitch = 0;
    let hoverYaw = 0;
    let hoverPitch = 0;
    let dragging = false;
    let lastX = 0;
    let lastY = 0;
    let visible = true;
    let raf = 0;
    const started = performance.now();

    function resize() {
        const dpr = Math.min(window.devicePixelRatio || 1, 2);
        const w = stage.clientWidth;
        const h = stage.clientHeight;
        canvas.width = Math.max(1, Math.floor(w * dpr));
        canvas.height = Math.max(1, Math.floor(h * dpr));
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    }

    function rotY(v, a) {
        const c = Math.cos(a);
        const s = Math.sin(a);
        return [v[0] * c + v[2] * s, v[1], -v[0] * s + v[2] * c];
    }

    function rotX(v, a) {
        const c = Math.cos(a);
        const s = Math.sin(a);
        return [v[0], v[1] * c - v[2] * s, v[1] * s + v[2] * c];
    }

    function world(v) {
        return rotX(rotY(v, yaw), pitch);
    }

    function project(v, cx, cy, scale) {
        const fov = 4.4;
        const p = fov / (fov + v[2]);
        return { x: cx + v[0] * scale * p, y: cy - v[1] * scale * p, z: v[2], p: p };
    }

    function normal(a, b, c) {
        const ux = b[0] - a[0], uy = b[1] - a[1], uz = b[2] - a[2];
        const vx = c[0] - a[0], vy = c[1] - a[1], vz = c[2] - a[2];
        let x = uy * vz - uz * vy;
        let y = uz * vx - ux * vz;
        let z = ux * vy - uy * vx;
        const len = Math.hypot(x, y, z) || 1;
        return [x / len, y / len, z / len];
    }

    function path(points) {
        ctx.beginPath();
        ctx.moveTo(points[0].x, points[0].y);
        for (let i = 1; i < points.length; i++) ctx.lineTo(points[i].x, points[i].y);
        ctx.closePath();
    }

    function frame() {
        const w = stage.clientWidth;
        const h = stage.clientHeight;
        if (w < 2 || h < 2) return;

        const now = performance.now();
        const t = (now - started) / 1000;
        const intro = reduce ? 1 : Math.min(1, t / 1.25);
        const ease = 1 - Math.pow(1 - intro, 3);

        if (!reduce && !dragging) spin += 0.0042;

        const aimYaw = -0.62 + spin + userYaw + hoverYaw;
        const aimPitch = 0.36 + userPitch + hoverPitch;
        yaw += (aimYaw - yaw) * (reduce ? 1 : 0.1);
        pitch += (aimPitch - pitch) * (reduce ? 1 : 0.1);

        ctx.clearRect(0, 0, w, h);

        const cx = w * 0.5;
        const cy = h * 0.5;
        const scale = Math.min(w, h) * 0.27 * (0.86 + ease * 0.14);

        const glow = ctx.createRadialGradient(cx, cy - 10, scale * 0.15, cx, cy, scale * 1.85);
        glow.addColorStop(0, 'rgba(0,174,239,' + (0.18 * ease) + ')');
        glow.addColorStop(0.48, 'rgba(0,174,239,' + (0.05 * ease) + ')');
        glow.addColorStop(1, 'rgba(0,174,239,0)');
        ctx.fillStyle = glow;
        ctx.fillRect(0, 0, w, h);

        const floorY = -1.28;
        ctx.lineWidth = 1;
        for (let i = -3; i <= 3; i++) {
            const a = world([i * 0.55, floorY, -1.7]);
            const b = world([i * 0.55, floorY, 1.7]);
            const c = world([-1.7, floorY, i * 0.55]);
            const d = world([1.7, floorY, i * 0.55]);
            const pa = project(a, cx, cy, scale);
            const pb = project(b, cx, cy, scale);
            const pc = project(c, cx, cy, scale);
            const pd = project(d, cx, cy, scale);
            const fade = 0.05 + (1 - Math.abs(i) / 3) * 0.05;
            ctx.strokeStyle = 'rgba(11,29,46,' + (fade * ease) + ')';
            ctx.beginPath();
            ctx.moveTo(pa.x, pa.y);
            ctx.lineTo(pb.x, pb.y);
            ctx.moveTo(pc.x, pc.y);
            ctx.lineTo(pd.x, pd.y);
            ctx.stroke();
        }

        const shadow = project(world([0, floorY + 0.02, 0]), cx, cy, scale);
        ctx.save();
        ctx.translate(shadow.x, shadow.y);
        ctx.scale(1, 0.32);
        ctx.beginPath();
        ctx.arc(0, 0, scale * 0.92, 0, Math.PI * 2);
        const shade = ctx.createRadialGradient(0, 0, scale * 0.1, 0, 0, scale * 0.92);
        shade.addColorStop(0, 'rgba(11,29,46,' + (0.13 * ease) + ')');
        shade.addColorStop(1, 'rgba(11,29,46,0)');
        ctx.fillStyle = shade;
        ctx.fill();
        ctx.restore();

        const cube = CORNERS.map(function (v) { return world(v); });
        const projected = cube.map(function (v) { return project(v, cx, cy, scale); });

        const light = [0.35, 0.8, -0.85];
        const lightLen = Math.hypot(light[0], light[1], light[2]);
        light[0] /= lightLen; light[1] /= lightLen; light[2] /= lightLen;

        const faces = FACES.map(function (ids) {
            const pts3 = ids.map(function (id) { return cube[id]; });
            const n = normal(pts3[0], pts3[1], pts3[2]);
            const lit = n[0] * light[0] + n[1] * light[1] + n[2] * light[2];
            const depth = (pts3[0][2] + pts3[1][2] + pts3[2][2] + pts3[3][2]) / 4;
            return { ids: ids, lit: lit, depth: depth };
        }).sort(function (a, b) { return b.depth - a.depth; });

        function paintFace(face, veil) {
            const pts = face.ids.map(function (id) { return projected[id]; });
            path(pts);
            const facing = Math.max(0, face.lit);
            const wash = ((face.lit > 0 ? 0.12 : 0.04) + facing * 0.18) * veil;
            const g = ctx.createLinearGradient(pts[0].x, pts[0].y, pts[2].x, pts[2].y);
            g.addColorStop(0, 'rgba(255,255,255,' + (wash * ease) + ')');
            g.addColorStop(0.55, 'rgba(224,247,255,' + ((wash * 0.7) * ease) + ')');
            g.addColorStop(1, 'rgba(0,174,239,' + ((0.045 + facing * 0.11) * veil * ease) + ')');
            ctx.fillStyle = g;
            ctx.fill();
        }

        faces.filter(function (face) { return face.depth > 0.02; }).forEach(function (face) {
            paintFace(face, 1);
        });

        const scan = Math.sin(t * 0.72) * 0.62;
        let active = 0;
        let best = 99;
        PLATES.forEach(function (plate, index) {
            const dist = Math.abs(plate.y - scan);
            if (dist < best) { best = dist; active = index; }
        });
        legend.forEach(function (item, index) {
            item.classList.toggle('is-lit', index === active);
        });

        const plateSize = 0.8;
        PLATES.forEach(function (plate, index) {
            const y = plate.y + Math.sin(t * 0.9 + index) * (reduce ? 0 : 0.015);
            const quad = [
                [-plateSize, y, -plateSize],
                [ plateSize, y, -plateSize],
                [ plateSize, y,  plateSize],
                [-plateSize, y,  plateSize]
            ].map(function (v) { return project(world(v), cx, cy, scale); });
            path(quad);
            ctx.fillStyle = index === active
                ? 'rgba(0,174,239,' + (0.16 * ease) + ')'
                : 'rgba(11,29,46,' + (0.035 * ease) + ')';
            ctx.fill();
            ctx.lineWidth = index === active ? 1.4 : 1;
            ctx.strokeStyle = index === active
                ? 'rgba(0,174,239,' + (0.85 * ease) + ')'
                : 'rgba(11,29,46,' + (0.28 * ease) + ')';
            ctx.stroke();

            const midX = [
                [0, y, -plateSize * 0.55],
                [0, y,  plateSize * 0.55]
            ].map(function (v) { return project(world(v), cx, cy, scale); });
            const midZ = [
                [-plateSize * 0.55, y, 0],
                [ plateSize * 0.55, y, 0]
            ].map(function (v) { return project(world(v), cx, cy, scale); });
            ctx.beginPath();
            ctx.moveTo(midX[0].x, midX[0].y);
            ctx.lineTo(midX[1].x, midX[1].y);
            ctx.moveTo(midZ[0].x, midZ[0].y);
            ctx.lineTo(midZ[1].x, midZ[1].y);
            ctx.strokeStyle = 'rgba(0,174,239,' + ((index === active ? 0.45 : 0.16) * ease) + ')';
            ctx.stroke();
        });

        ctx.lineWidth = 1;
        ctx.strokeStyle = 'rgba(11,29,46,' + (0.22 * ease) + ')';
        [[-1, -1], [1, -1], [-1, 1], [1, 1]].forEach(function (xz) {
            const a = project(world([xz[0] * plateSize, PLATES[0].y, xz[1] * plateSize]), cx, cy, scale);
            const b = project(world([xz[0] * plateSize, PLATES[2].y, xz[1] * plateSize]), cx, cy, scale);
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.stroke();
        });

        const coreSpin = reduce ? 0.4 : -t * 0.55;
        const core = CORNERS.map(function (v) {
            return world(rotY([v[0] * 0.3, v[1] * 0.3, v[2] * 0.3], coreSpin));
        });
        const coreP = core.map(function (v) { return project(v, cx, cy, scale); });
        ctx.lineWidth = 1.25;
        ctx.strokeStyle = 'rgba(0,125,184,' + (0.8 * ease) + ')';
        EDGES.forEach(function (edge) {
            ctx.beginPath();
            ctx.moveTo(coreP[edge[0]].x, coreP[edge[0]].y);
            ctx.lineTo(coreP[edge[1]].x, coreP[edge[1]].y);
            ctx.stroke();
        });

        const scanQuad = [
            [-0.98, scan, -0.98],
            [ 0.98, scan, -0.98],
            [ 0.98, scan,  0.98],
            [-0.98, scan,  0.98]
        ].map(function (v) { return project(world(v), cx, cy, scale); });
        path(scanQuad);
        ctx.fillStyle = 'rgba(77,216,245,' + (0.13 * ease) + ')';
        ctx.fill();
        ctx.lineWidth = 1.5;
        ctx.strokeStyle = 'rgba(0,174,239,' + (0.9 * ease) + ')';
        ctx.stroke();

        faces.filter(function (face) { return face.depth <= 0.02; }).forEach(function (face) {
            paintFace(face, 0.42);
        });

        EDGES.forEach(function (edge) {
            const a = projected[edge[0]];
            const b = projected[edge[1]];
            const depth = (a.z + b.z) / 2;
            const near = Math.max(0, Math.min(1, (1.15 - depth) / 2.3));
            ctx.beginPath();
            ctx.moveTo(a.x, a.y);
            ctx.lineTo(b.x, b.y);
            ctx.lineWidth = 4;
            ctx.strokeStyle = 'rgba(0,174,239,' + ((0.08 + near * 0.16) * ease) + ')';
            ctx.stroke();
            ctx.lineWidth = 1.35;
            ctx.strokeStyle = 'rgba(11,29,46,' + ((0.35 + near * 0.5) * ease) + ')';
            ctx.stroke();
        });

        if (!reduce) {
            EDGES.forEach(function (edge, index) {
                const u = (t * 0.16 + index / EDGES.length) % 1;
                for (let step = 4; step >= 0; step--) {
                    const along = (u - step * 0.028 + 1) % 1;
                    const v = [
                        CORNERS[edge[0]][0] + (CORNERS[edge[1]][0] - CORNERS[edge[0]][0]) * along,
                        CORNERS[edge[0]][1] + (CORNERS[edge[1]][1] - CORNERS[edge[0]][1]) * along,
                        CORNERS[edge[0]][2] + (CORNERS[edge[1]][2] - CORNERS[edge[0]][2]) * along
                    ];
                    const p = project(world(v), cx, cy, scale);
                    const alpha = (1 - step / 4) * 0.95 * ease;
                    const radius = (step === 0 ? 2.4 : 1.3) * p.p;
                    const dot = ctx.createRadialGradient(p.x, p.y, 0, p.x, p.y, radius * 3.2);
                    dot.addColorStop(0, 'rgba(0,174,239,' + alpha + ')');
                    dot.addColorStop(1, 'rgba(0,174,239,0)');
                    ctx.fillStyle = dot;
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, radius * 3.2, 0, Math.PI * 2);
                    ctx.fill();
                }
            });
        }

        let minX = Infinity, minY = Infinity, maxX = -Infinity, maxY = -Infinity;
        projected.forEach(function (p) {
            minX = Math.min(minX, p.x);
            minY = Math.min(minY, p.y);
            maxX = Math.max(maxX, p.x);
            maxY = Math.max(maxY, p.y);
        });
        const pad = 22;
        minX -= pad; minY -= pad; maxX += pad; maxY += pad;
        ctx.lineWidth = 1.25;
        ctx.strokeStyle = 'rgba(11,29,46,' + (0.35 * ease) + ')';
        [[minX, minY, 1, 1], [maxX, minY, -1, 1], [minX, maxY, 1, -1], [maxX, maxY, -1, -1]].forEach(function (b) {
            ctx.beginPath();
            ctx.moveTo(b[0] + b[2] * 16, b[1]);
            ctx.lineTo(b[0], b[1]);
            ctx.lineTo(b[0], b[1] + b[3] * 16);
            ctx.stroke();
        });

        if (!reduce && visible) raf = requestAnimationFrame(frame);
    }

    stage.addEventListener('pointerdown', function (event) {
        dragging = true;
        lastX = event.clientX;
        lastY = event.clientY;
        stage.setPointerCapture(event.pointerId);
    });
    stage.addEventListener('pointermove', function (event) {
        const rect = stage.getBoundingClientRect();
        if (dragging) {
            userYaw += (event.clientX - lastX) * 0.008;
            userPitch += (event.clientY - lastY) * 0.005;
            userPitch = Math.max(-0.55, Math.min(0.55, userPitch));
            lastX = event.clientX;
            lastY = event.clientY;
            if (reduce) frame();
            return;
        }
        hoverYaw = ((event.clientX - rect.left) / rect.width - 0.5) * 0.5;
        hoverPitch = ((event.clientY - rect.top) / rect.height - 0.5) * 0.3;
    });
    function release() {
        dragging = false;
    }
    stage.addEventListener('pointerup', release);
    stage.addEventListener('pointercancel', release);
    stage.addEventListener('pointerleave', function () {
        if (!dragging) {
            hoverYaw = 0;
            hoverPitch = 0;
        }
    });

    const watch = new IntersectionObserver(function (entries) {
        visible = entries[0].isIntersecting;
        if (visible && !reduce) {
            cancelAnimationFrame(raf);
            raf = requestAnimationFrame(frame);
        }
    }, { threshold: 0.05 });
    watch.observe(stage);

    window.addEventListener('resize', function () {
        resize();
        if (reduce || !visible) frame();
    });

    resize();
    frame();
})();
</script>
@endpush
