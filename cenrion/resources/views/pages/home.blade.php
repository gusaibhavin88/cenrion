@extends('layouts.app')

@section('title', 'Cenrion — Technology & AI Solutions')

@section('meta_description', 'Cenrion builds intelligent software, AI-powered solutions, and scalable technology systems that help businesses operate, innovate, and grow.')

@push('styles')
<style>
    /* ── Hero ── */
    .hero-orb {
        position: absolute;
        border-radius: 9999px;
        filter: blur(80px);
        pointer-events: none;
    }
    @keyframes drift-a {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(-40px, 28px, 0); }
    }
    @keyframes drift-b {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(32px, -26px, 0); }
    }
    @keyframes drift-c {
        0%, 100% { transform: translate3d(-50%, -50%, 0) scale(1); }
        50% { transform: translate3d(-42%, -60%, 0) scale(1.08); }
    }
    .hero-orb-a { animation: drift-a 16s ease-in-out infinite; }
    .hero-orb-b { animation: drift-b 20s ease-in-out infinite; }
    .hero-orb-c { animation: drift-c 13s ease-in-out infinite; }

    .hero-ticker { margin-top: 6.5rem; }
    .hero-ticker-track { animation-duration: 26s; gap: 0; }
    .hero-ticker-set {
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
    .hero-ticker-set span { color: #00AEEF; }

    @keyframes chip-float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .hero-chip { animation: chip-float 4.6s ease-in-out infinite; }
    .hero-chip:nth-child(2) { animation-delay: 0.35s; }
    .hero-chip:nth-child(3) { animation-delay: 0.7s; }
    .hero-chip:nth-child(4) { animation-delay: 1.05s; }

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
        .hero-orb-a, .hero-orb-b, .hero-orb-c, .hero-chip, .marquee-track { animation: none; }
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
     SECTION 1: HERO
══════════════════════════════════════════════════════════ --}}
<section class="relative min-h-screen flex flex-col justify-center hero-grid overflow-hidden"
         style="background-color: #0B1D2E;">

    {{-- Ambient gradient orbs --}}
    <div class="hero-orb hero-orb-a"
         style="width:600px;height:600px;top:-150px;right:-100px;
                background:radial-gradient(circle,rgba(0,174,239,0.10),transparent 70%);"></div>
    <div class="hero-orb hero-orb-b"
         style="width:500px;height:500px;bottom:-100px;left:-80px;
                background:radial-gradient(circle,rgba(77,216,245,0.08),transparent 70%);"></div>
    <div class="hero-orb hero-orb-c"
         style="width:300px;height:300px;top:40%;left:50%;
                background:radial-gradient(circle,rgba(0,174,239,0.06),transparent 70%);"></div>

    <div class="hero-ticker marquee-wrapper relative z-10" aria-hidden="true">
        <div class="marquee-track hero-ticker-track">
            @for ($copy = 0; $copy < 2; $copy++)
                <span class="hero-ticker-set">
                    Engineering <span>·</span>
                    Artificial Intelligence <span>·</span>
                    Cloud Platforms <span>·</span>
                    Product Design <span>·</span>
                    Data Systems <span>·</span>
                    Automation <span>·</span>
                </span>
            @endfor
        </div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-8 pt-16 pb-28 text-center">

        {{-- Eyebrow --}}
        <div data-animate data-delay="0">
            <span class="section-tag inline-flex items-center gap-2 mb-6">
                <span class="inline-block w-5 h-px" style="background:#00AEEF;"></span>
                Technology &amp; AI Solutions
                <span class="inline-block w-5 h-px" style="background:#00AEEF;"></span>
            </span>
        </div>

        {{-- H1 --}}
        <h1 class="js-split font-extrabold tracking-tight mb-6 leading-none"
            style="font-size:clamp(2.8rem,7vw,5rem); color:white;">
            Technology that moves<br>
            <span class="gradient-text draw-line">business forward.</span>
        </h1>

        {{-- Subheading --}}
        <p class="mx-auto mb-10 leading-relaxed"
           style="max-width:600px;font-size:1.1rem;color:#94A3B8;"
           data-animate style="transition-delay:200ms">
            We build intelligent software, AI-powered solutions, and scalable technology
            systems that help businesses operate, innovate, and grow.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4"
             data-animate style="transition-delay:300ms">
            <a href="{{ route('capabilities') }}" class="btn-primary">
                Explore Our Capabilities
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
            <a href="{{ route('contact') }}" class="btn-outline-white">
                Talk to Us
            </a>
        </div>

        <div class="mt-12 flex flex-wrap items-center justify-center gap-3">
            <span class="tech-badge-dark hero-chip">AI &amp; Automation</span>
            <span class="tech-badge-dark hero-chip">Cloud Platforms</span>
            <span class="tech-badge-dark hero-chip">Product Engineering</span>
            <span class="tech-badge-dark hero-chip">Data Systems</span>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce-slow"
         style="color:rgba(0,174,239,0.5);">
        <span class="text-xs font-medium tracking-widest uppercase" style="font-size:10px;letter-spacing:0.15em;">Scroll to explore</span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
        </svg>
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
                style="color:#0B1D2E;" data-animate style="transition-delay:80ms">
                Core Capabilities
            </h2>
            <p class="mx-auto text-lg" style="max-width:520px;color:#5A7184;"
               data-animate style="transition-delay:160ms">
                End-to-end technology disciplines, executed with depth and precision.
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
     SECTION 3: DELIVERY PROCESS
══════════════════════════════════════════════════════════ --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">

        {{-- Section header --}}
        <div class="text-center mb-16">
            <span class="section-tag block mb-3" data-animate>How We Work</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4"
                style="color:#0B1D2E;" data-animate style="transition-delay:80ms">
                From Idea to Impact
            </h2>
            <p class="mx-auto text-lg" style="max-width:480px;color:#5A7184;"
               data-animate style="transition-delay:160ms">
                A proven delivery approach that removes friction and drives outcomes — fast.
            </p>
        </div>

        {{-- Process steps --}}
        <div class="flex flex-col lg:flex-row items-start lg:items-start gap-0">

            {{-- Step 1: Discover --}}
            <div class="flex flex-col items-center text-center flex-1 relative" data-animate data-delay="0">
                {{-- Mobile: left border line --}}
                <div class="lg:hidden absolute left-7 top-16 bottom-0 w-px"
                     style="background:linear-gradient(to bottom,rgba(0,174,239,0.4),rgba(0,174,239,0.05));"></div>

                {{-- Number + Icon --}}
                <div class="relative mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-lg"
                         style="background:linear-gradient(135deg,#00AEEF,#007DB8);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="white" stroke-width="1.8" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                        </svg>
                    </div>
                    <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full text-xs font-bold flex items-center justify-center"
                          style="background:#0B1D2E;color:#00AEEF;font-size:10px;">1</span>
                </div>
                <h3 class="text-lg font-bold mb-2" style="color:#0B1D2E;">Discover</h3>
                <p class="text-sm leading-relaxed px-4" style="color:#5A7184;">Define outcomes &amp; architecture</p>
            </div>

            {{-- Connector (desktop only) --}}
            <div class="process-connector hidden lg:block" data-draw data-delay="180"></div>

            {{-- Step 2: Design --}}
            <div class="flex flex-col items-center text-center flex-1 relative mt-8 lg:mt-0" data-animate data-delay="120">
                <div class="lg:hidden absolute left-7 top-16 bottom-0 w-px"
                     style="background:linear-gradient(to bottom,rgba(0,174,239,0.4),rgba(0,174,239,0.05));"></div>
                <div class="relative mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-lg"
                         style="background:linear-gradient(135deg,#00AEEF,#007DB8);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="white" stroke-width="1.8" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                        </svg>
                    </div>
                    <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full text-xs font-bold flex items-center justify-center"
                          style="background:#0B1D2E;color:#00AEEF;font-size:10px;">2</span>
                </div>
                <h3 class="text-lg font-bold mb-2" style="color:#0B1D2E;">Design</h3>
                <p class="text-sm leading-relaxed px-4" style="color:#5A7184;">User experience &amp; systems</p>
            </div>

            {{-- Connector --}}
            <div class="process-connector hidden lg:block" data-draw data-delay="300"></div>

            {{-- Step 3: Build --}}
            <div class="flex flex-col items-center text-center flex-1 relative mt-8 lg:mt-0" data-animate data-delay="240">
                <div class="lg:hidden absolute left-7 top-16 bottom-0 w-px"
                     style="background:linear-gradient(to bottom,rgba(0,174,239,0.4),rgba(0,174,239,0.05));"></div>
                <div class="relative mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-lg"
                         style="background:linear-gradient(135deg,#00AEEF,#007DB8);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="white" stroke-width="1.8" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l5.654-4.654m5.896-2.65c.733-.733 1.195-1.729 1.195-2.834a4.014 4.014 0 00-4.014-4.014c-1.105 0-2.101.462-2.834 1.195m5.653 5.653l-5.653-5.653"/>
                        </svg>
                    </div>
                    <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full text-xs font-bold flex items-center justify-center"
                          style="background:#0B1D2E;color:#00AEEF;font-size:10px;">3</span>
                </div>
                <h3 class="text-lg font-bold mb-2" style="color:#0B1D2E;">Build</h3>
                <p class="text-sm leading-relaxed px-4" style="color:#5A7184;">Agile engineering &amp; testing</p>
            </div>

            {{-- Connector --}}
            <div class="process-connector hidden lg:block" data-draw data-delay="420"></div>

            {{-- Step 4: Scale --}}
            <div class="flex flex-col items-center text-center flex-1 relative mt-8 lg:mt-0" data-animate data-delay="360">
                <div class="relative mb-5">
                    <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-lg"
                         style="background:linear-gradient(135deg,#00AEEF,#007DB8);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                             stroke="white" stroke-width="1.8" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                        </svg>
                    </div>
                    <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full text-xs font-bold flex items-center justify-center"
                          style="background:#0B1D2E;color:#00AEEF;font-size:10px;">4</span>
                </div>
                <h3 class="text-lg font-bold mb-2" style="color:#0B1D2E;">Scale</h3>
                <p class="text-sm leading-relaxed px-4" style="color:#5A7184;">Cloud deployment &amp; growth</p>
            </div>

        </div>{{-- /process steps --}}

    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     SECTION 4: TECHNOLOGY ECOSYSTEM BAR
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
            data-animate style="transition-delay:80ms">
            Ready to build something<br>
            <span class="gradient-text">meaningful?</span>
        </h2>
        <p class="text-lg mb-10 mx-auto" style="color:#94A3B8;max-width:520px;"
           data-animate style="transition-delay:160ms">
            Whether you're modernizing legacy systems, launching an AI product, or scaling
            your platform — let's figure it out together.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4"
             data-animate style="transition-delay:240ms">
            <a href="{{ route('contact') }}" class="btn-primary">
                Talk to Us
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
            <a href="{{ route('capabilities') }}" class="btn-outline-white">
                Explore Capabilities
            </a>
        </div>

        {{-- Trust line --}}
        <p class="mt-12 text-xs tracking-widest uppercase" style="color:rgba(148,163,184,0.4);">
            No fluff. No long-winded proposals. Just engineering.
        </p>

    </div>
</section>

@endsection
