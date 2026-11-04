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
        max-width:640px;
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
        color: #062538;
        pointer-events: none;
    }
    .glassbox-kicker i {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #06B6D4;
        box-shadow: 0 0 0 0 rgba(6,182,212,0.55);
        animation: glassbox-ping 2.4s ease-out infinite;
    }
    @keyframes glassbox-ping {
        0% { box-shadow: 0 0 0 0 rgba(6,182,212,0.45); }
        70% { box-shadow: 0 0 0 8px rgba(6,182,212,0); }
        100% { box-shadow: 0 0 0 0 rgba(6,182,212,0); }
    }
    .glassbox-legend {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-top: 6px;
    }
    .glassbox-legend li {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.02em;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .glassbox-legend li[data-layer="0"] {
        background: rgba(6, 182, 212, 0.08);
        border: 1.5px solid rgba(6, 182, 212, 0.35);
        color: #062538;
        box-shadow: 0 4px 14px rgba(6, 182, 212, 0.1);
    }
    .glassbox-legend li[data-layer="0"] span {
        background: #06B6D4;
        color: #FFFFFF;
        padding: 2px 7px;
        border-radius: 999px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.06em;
    }
    .glassbox-legend li[data-layer="0"]:hover,
    .glassbox-legend li[data-layer="0"].is-lit {
        background: rgba(6, 182, 212, 0.16);
        border-color: #06B6D4;
        box-shadow: 0 8px 24px rgba(6, 182, 212, 0.25);
        transform: translateY(-2px);
    }

    .glassbox-legend li[data-layer="1"] {
        background: rgba(99, 102, 241, 0.08);
        border: 1.5px solid rgba(99, 102, 241, 0.35);
        color: #062538;
        box-shadow: 0 4px 14px rgba(99, 102, 241, 0.1);
    }
    .glassbox-legend li[data-layer="1"] span {
        background: #6366F1;
        color: #FFFFFF;
        padding: 2px 7px;
        border-radius: 999px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.06em;
    }
    .glassbox-legend li[data-layer="1"]:hover,
    .glassbox-legend li[data-layer="1"].is-lit {
        background: rgba(99, 102, 241, 0.16);
        border-color: #6366F1;
        box-shadow: 0 8px 24px rgba(99, 102, 241, 0.25);
        transform: translateY(-2px);
    }

    .glassbox-legend li[data-layer="2"] {
        background: rgba(16, 185, 129, 0.08);
        border: 1.5px solid rgba(16, 185, 129, 0.35);
        color: #062538;
        box-shadow: 0 4px 14px rgba(16, 185, 129, 0.1);
    }
    .glassbox-legend li[data-layer="2"] span {
        background: #10B981;
        color: #FFFFFF;
        padding: 2px 7px;
        border-radius: 999px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.06em;
    }
    .glassbox-legend li[data-layer="2"]:hover,
    .glassbox-legend li[data-layer="2"].is-lit {
        background: rgba(16, 185, 129, 0.16);
        border-color: #10B981;
        box-shadow: 0 8px 24px rgba(16, 185, 129, 0.25);
        transform: translateY(-2px);
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
    .services-ticker-set span { color: #06B6D4; }

    .hero-chip-light {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 16px;
        background: rgba(6,37,56,0.04);
        border: 1px solid rgba(6,37,56,0.08);
        border-radius: 999px;
        font-size: 13px; font-weight: 500;
        color: #062538;
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

    /* â”€â”€ Scroll indicator bounce â”€â”€ */
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50%       { transform: translateY(8px); }
    }
    .animate-bounce-slow { animation: bounce-slow 2s ease-in-out infinite; }

    /* â”€â”€ Marquee â”€â”€ */
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
        background: linear-gradient(to right, #062538, transparent);
    }
    .marquee-wrapper::after {
        right: 0;
        background: linear-gradient(to left, #062538, transparent);
    }
    .process-on-navy h3 { color: #FFFFFF !important; }
    .process-on-navy p { color: #94A3B8 !important; }
    .process-on-navy .process-connector {
        background: linear-gradient(to right, rgba(6,182,212,0.55), rgba(6,182,212,0.12));
    }

    /* â”€â”€ Tech badge dark variant â”€â”€ */
    .tech-badge-dark {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 18px;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 999px;
        font-size: 13px; font-weight: 500;
        color: #ECFEFF;
        white-space: nowrap;
        transition: background 0.2s, border-color 0.2s;
        cursor: default;
    }
    .tech-badge-dark:hover {
        background: rgba(6,182,212,0.15);
        border-color: rgba(6,182,212,0.4);
    }

    /* â”€â”€ Process connector line â”€â”€ */
    .process-connector {
        flex: 1;
        height: 2px;
        background: linear-gradient(to right, rgba(6,182,212,0.4), rgba(6,182,212,0.1));
        margin-top: 28px; /* aligns with icon center */
    }

    /* â”€â”€ Insight card â”€â”€ */
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
        background: linear-gradient(135deg, rgba(6,182,212,0.06), transparent 50%);
        opacity: 0;
        transition: opacity 0.28s ease;
    }
    .insight-card:hover::before {
        opacity: 1;
    }
    .insight-card:hover {
        border-color: rgba(6,182,212,0.3);
        box-shadow: 0 18px 48px rgba(6,182,212,0.12), 0 10px 28px rgba(6,37,56,0.08);
        transform: translateY(-4px);
    }

    /* â”€â”€ Labs mini card â”€â”€ */
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
        background: linear-gradient(135deg, rgba(6,182,212,0.08), transparent 45%);
        opacity: 0;
        transition: opacity 0.28s ease;
    }
    .labs-mini-card:hover::before {
        opacity: 1;
    }
    .labs-mini-card:hover {
        border-color: rgba(6,182,212,0.4);
        box-shadow: 0 16px 42px rgba(6,182,212,0.14), 0 10px 28px rgba(6,37,56,0.18);
        transform: translateY(-3px);
    }

    /* â”€â”€ CTA banner noise pattern â”€â”€ */
    .cta-banner {
        background: linear-gradient(135deg, #062538 0%, #0A2D44 50%, #062538 100%);
        position: relative;
        overflow: hidden;
    }
    .cta-banner::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(6,182,212,0.06) 1px, transparent 1px);
        background-size: 28px 28px;
        pointer-events: none;
    }
    .cta-orb-left {
        position: absolute; left: -120px; top: -80px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(6,182,212,0.15), transparent 70%);
        border-radius: 9999px;
        pointer-events: none;
    }
    .cta-orb-right {
        position: absolute; right: -100px; bottom: -100px;
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(103,232,249,0.1), transparent 70%);
        border-radius: 9999px;
        pointer-events: none;
    }
</style>
@endpush

@section('content')

{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 1: HERO (light fold)
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="home-hero relative overflow-hidden">
    <div class="home-hero-glow" aria-hidden="true"></div>
    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10 pt-10 pb-10 lg:pt-8 lg:pb-12">
        <div class="hero-layout">
            <div class="hero-intro text-center lg:text-left">
                <div data-animate data-delay="0">
                    <span class="section-tag inline-flex items-center gap-2 mb-5">
                        <span class="inline-block w-5 h-px" style="background:#06B6D4;"></span>
                        AI Speed · Engineering Accountability
                        <span class="inline-block w-5 h-px" style="background:#06B6D4;"></span>
                    </span>
                </div>

                <h1 class="js-split font-extrabold tracking-tight mb-1 lg:mb-0 leading-[1.08]" style="font-size:clamp(2.75rem,5.5vw,4.6rem); color:#062538; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.035em;">
                    Glass box<br>
                    <span style="color:#06B6D4;">engineering.</span>
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
                   style="max-width:640px;font-size:1.1rem;color:#5A7184;"
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
             style="color:rgba(6,37,56,0.35);">
            <span class="text-xs font-medium tracking-widest uppercase" style="font-size:10px;letter-spacing:0.15em;">Scroll</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.5" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </div>
    </div>
</section>

{{-- Modern Services Ribbon (Static high-tech layout replacing old scroller) --}}
<section class="services-band py-5 relative overflow-hidden" aria-label="Core Capabilities">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 50%, rgba(6,182,212,0.12), transparent 75%);pointer-events:none;"></div>
    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-3 lg:gap-4">
            @php
            $bandServices = [
                ['name' => 'Managed IT Services', 'icon' => 'M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z'],
                ['name' => 'Staff Augmentation', 'icon' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z'],
                ['name' => 'Product Engineering', 'icon' => 'M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z'],
                ['name' => 'AI & Automation', 'icon' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z'],
                ['name' => 'Cloud & DevOps', 'icon' => 'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z'],
                ['name' => 'Quality Engineering', 'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z']
            ];
            @endphp
            @foreach($bandServices as $svc)
                <div class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all duration-300 hover:scale-105 cursor-default"
                     style="background: rgba(255,255,255,0.05); border: 1px solid rgba(6,182,212,0.25); color: #ECFEFF; box-shadow: 0 4px 14px rgba(0,0,0,0.2);">
                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#06B6D4" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $svc['icon'] }}"/>
                    </svg>
                    <span>{{ $svc['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     WHY NOW
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24 bg-white relative overflow-hidden">
    {{-- Ambient soft background blur --}}
    <div style="position:absolute;top:10%;left:50%;transform:translateX(-50%);width:680px;height:340px;background:radial-gradient(ellipse,rgba(6,182,212,0.06),transparent 70%);pointer-events:none;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        {{-- Header --}}
        <div class="text-center mb-14">
            <span class="section-tag inline-flex items-center gap-2 mb-3" data-animate>
                <span class="inline-block w-4 h-px" style="background:#06B6D4;"></span>
                Why Now
                <span class="inline-block w-4 h-px" style="background:#06B6D4;"></span>
            </span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.03em;" data-animate data-delay="80">
                It is about time.
            </h2>
            <p class="mx-auto text-lg leading-relaxed" style="max-width:640px;color:#5A7184;" data-animate data-delay="160">
                AI has made writing code faster than at any point in the history of software.
                What has not kept pace is the engineering discipline that makes that code trustworthy, visible and ready to scale.
            </p>
        </div>

        @php
        $whyNowItems = [
            [
                'num' => '01',
                'title' => 'Speed went up',
                'badge' => 'ACCELERATION',
                'desc' => 'Code is generated, reviewed and shipped in a fraction of the time it once took. Prototypes arrive in hours instead of months.',
                'icon' => 'M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z',
                'topGradient' => 'linear-gradient(90deg, #06B6D4, #22D3EE)',
                'cardBg' => 'linear-gradient(155deg, rgba(6,182,212,0.06) 0%, #FFFFFF 65%)',
                'borderColor' => 'rgba(6,182,212,0.3)',
                'hoverShadow' => '0 16px 36px -10px rgba(6,182,212,0.22)',
                'iconBg' => 'rgba(6,182,212,0.12)',
                'iconBorder' => 'rgba(6,182,212,0.3)',
                'accent' => '#0891B2',
                'badgeBg' => 'rgba(6,182,212,0.1)',
                'badgeColor' => '#0891B2',
                'badgeBorder' => 'rgba(6,182,212,0.25)'
            ],
            [
                'num' => '02',
                'title' => 'Visibility went down',
                'badge' => 'BLACK BOX BLINDSPOT',
                'desc' => 'Clients see the output, rarely the architecture, the tests or the risks behind it. Code compiles, but nobody knows how it behaves under stress.',
                'icon' => 'M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88',
                'topGradient' => 'linear-gradient(90deg, #6366F1, #818CF8)',
                'cardBg' => 'linear-gradient(155deg, rgba(99,102,241,0.06) 0%, #FFFFFF 65%)',
                'borderColor' => 'rgba(99,102,241,0.28)',
                'hoverShadow' => '0 16px 36px -10px rgba(99,102,241,0.22)',
                'iconBg' => 'rgba(99,102,241,0.12)',
                'iconBorder' => 'rgba(99,102,241,0.3)',
                'accent' => '#4F46E5',
                'badgeBg' => 'rgba(99,102,241,0.1)',
                'badgeColor' => '#4F46E5',
                'badgeBorder' => 'rgba(99,102,241,0.25)'
            ],
            [
                'num' => '03',
                'title' => 'Engineering got rushed',
                'badge' => 'COMPOUNDING DEBT',
                'desc' => 'Shortcuts replaced system design, and quality became optional the moment delivery timelines tightened. Technical debt compounds exponentially.',
                'icon' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
                'topGradient' => 'linear-gradient(90deg, #F59E0B, #FBBF24)',
                'cardBg' => 'linear-gradient(155deg, rgba(245,158,11,0.06) 0%, #FFFFFF 65%)',
                'borderColor' => 'rgba(245,158,11,0.28)',
                'hoverShadow' => '0 16px 36px -10px rgba(245,158,11,0.22)',
                'iconBg' => 'rgba(245,158,11,0.12)',
                'iconBorder' => 'rgba(245,158,11,0.3)',
                'accent' => '#D97706',
                'badgeBg' => 'rgba(245,158,11,0.1)',
                'badgeColor' => '#D97706',
                'badgeBorder' => 'rgba(245,158,11,0.25)'
            ],
            [
                'num' => '04',
                'title' => 'Scalability became an afterthought',
                'badge' => 'PRODUCTION VULNERABILITY',
                'desc' => 'Systems are built to pass the demo, then buckle under real user volume and production workloads when real revenue is at stake.',
                'icon' => 'M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z',
                'topGradient' => 'linear-gradient(90deg, #EF4444, #F87171)',
                'cardBg' => 'linear-gradient(155deg, rgba(239,68,68,0.06) 0%, #FFFFFF 65%)',
                'borderColor' => 'rgba(239,68,68,0.28)',
                'hoverShadow' => '0 16px 36px -10px rgba(239,68,68,0.22)',
                'iconBg' => 'rgba(239,68,68,0.12)',
                'iconBorder' => 'rgba(239,68,68,0.3)',
                'accent' => '#DC2626',
                'badgeBg' => 'rgba(239,68,68,0.1)',
                'badgeColor' => '#DC2626',
                'badgeBorder' => 'rgba(239,68,68,0.25)'
            ],
        ];
        @endphp

        {{-- 4 Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($whyNowItems as $i => $item)
            <div class="p-6 sm:p-7 rounded-2xl relative overflow-hidden transition-all duration-300 hover:-translate-y-1.5 group flex flex-col justify-between"
                 style="background: {{ $item['cardBg'] }}; border: 1px solid {{ $item['borderColor'] }}; box-shadow: 0 10px 25px rgba(6,37,56,0.05);"
                 onmouseover="this.style.boxShadow='{{ $item['hoverShadow'] }}'"
                 onmouseout="this.style.boxShadow='0 10px 25px rgba(6,37,56,0.05)'"
                 data-animate data-delay="{{ $i * 80 }}">
                {{-- Top colored accent strip --}}
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:{{ $item['topGradient'] }};"></div>

                <div>
                    {{-- Header Row: Icon + Badge + Number --}}
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl flex items-center justify-center transition-transform group-hover:scale-105"
                                 style="background:{{ $item['iconBg'] }}; border:1px solid {{ $item['iconBorder'] }};">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="{{ $item['accent'] }}" stroke-width="1.75" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}"/>
                                </svg>
                            </div>
                            <span class="text-[10px] font-extrabold tracking-widest px-2.5 py-1 rounded-full uppercase"
                                  style="background:{{ $item['badgeBg'] }}; color:{{ $item['badgeColor'] }}; border:1px solid {{ $item['badgeBorder'] }};">
                                {{ $item['badge'] }}
                            </span>
                        </div>
                        <span class="text-sm font-extrabold font-mono px-2 py-0.5 rounded"
                              style="background:rgba(6,37,56,0.05); color:#062538;">
                            {{ $item['num'] }}
                        </span>
                    </div>

                    <h3 class="text-xl font-bold mb-3" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        {{ $item['title'] }}
                    </h3>
                    <p class="text-sm leading-relaxed" style="color:#5A7184;">
                        {{ $item['desc'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Bottom Takeaway Banner --}}
        <div class="mt-8 p-6 sm:p-7 rounded-2xl border flex flex-col sm:flex-row items-center justify-between gap-5 relative overflow-hidden"
             style="background: linear-gradient(135deg, #062538 0%, #0A2D44 60%, #0E3550 100%); border-color: rgba(6,182,212,0.3); box-shadow: 0 16px 36px rgba(6,37,56,0.22);"
             data-animate data-delay="360">
            <div style="position:absolute;top:0;right:0;width:300px;height:100%;background:radial-gradient(ellipse at 100% 50%, rgba(6,182,212,0.18), transparent 70%);pointer-events:none;"></div>
            
            <div class="relative z-10 flex items-center gap-4 text-center sm:text-left flex-col sm:flex-row">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                     style="background: rgba(6,182,212,0.18); border: 1px solid rgba(6,182,212,0.4); box-shadow: 0 0 20px rgba(6,182,212,0.25);">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#06B6D4" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-base sm:text-lg font-bold text-white mb-1" style="font-family:'Plus Jakarta Sans',sans-serif;">The Glass Box Solution</h4>
                    <p class="text-xs sm:text-sm leading-relaxed" style="color: #94A3B8;">We pair raw AI generation speed with strict architectural gates, transparent peer review, and scale testing.</p>
                </div>
            </div>

            <div class="relative z-10 shrink-0">
                <a href="{{ route('capabilities') }}" class="btn-accent text-sm whitespace-nowrap" style="padding: 11px 22px;">
                    Explore Capabilities
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     BLACK BOX â†’ GLASS BOX
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>The Black Box Problem</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#062538;" data-animate data-delay="80">
                The gap between speed and scale
            </h2>
            <p class="mx-auto text-lg" style="max-width:640px;color:#5A7184;" data-animate data-delay="160">
                AI tools now write a large share of new code, so features arrive faster than ever.
                Architecture, visibility and the checks that prove code works have not kept pace.
                Cenrion closes that gap on every project.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-14">
            {{-- Left Box: What AI accelerated (Cyan / Tech acceleration theme) --}}
            <div class="p-7 rounded-2xl border transition-all duration-300 hover:-translate-y-1" style="background:linear-gradient(180deg,#FFFFFF 0%,#F0FDFA 100%);border:1.5px solid rgba(6,182,212,0.35);box-shadow:0 12px 30px rgba(6,182,212,0.1);" data-animate>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background:rgba(6,182,212,0.12);border:1px solid rgba(6,182,212,0.3);">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-wider uppercase" style="color:#0891B2;">Acceleration</span>
                        <h3 class="font-bold text-lg" style="color:#062538;">What AI accelerated</h3>
                    </div>
                </div>
                <ul class="space-y-2.5 text-sm" style="color:#475569;">
                    @foreach(['Code generation','Prototypes and proofs of concept','Feature delivery','Release frequency'] as $line)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0" style="background:rgba(6,182,212,0.15);color:#0891B2;">&#10003;</span>
                        <span>{{ $line }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Middle Box: Cenrion Bridges the gap (Signature Deep Navy Brand theme) --}}
            <div class="p-7 rounded-2xl text-center flex flex-col justify-center relative overflow-hidden transition-all duration-300 hover:-translate-y-1" style="background:linear-gradient(135deg,#0E3550 0%,#062538 60%,#0A2D44 100%);border:1.5px solid rgba(6,182,212,0.4);box-shadow:0 16px 42px rgba(6,37,56,0.35),inset 0 1px 0 rgba(255,255,255,0.1);" data-animate data-delay="80">
                <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(6,182,212,0.25),transparent 70%);pointer-events:none;"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl mb-4 mx-auto" style="background:rgba(6,182,212,0.18);border:1px solid rgba(6,182,212,0.4);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#67E8F9" stroke-width="1.8" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>
                    </div>
                    <span class="section-tag block mb-1 text-cyan font-bold tracking-widest text-xs uppercase">Cenrion Solution</span>
                    <h3 class="text-2xl font-extrabold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Bridges the gap</h3>
                    <p class="text-sm leading-relaxed" style="color:#CBD5E1;">16+ years of global delivery leadership, applied to software that is built to scale.</p>
                    <div class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold tracking-widest uppercase" style="color:#67E8F9;letter-spacing:0.12em;">
                        <span style="display:inline-block;width:16px;height:1px;background:#06B6D4;"></span>
                        AI Speed &middot; Engineering Accountability
                        <span style="display:inline-block;width:16px;height:1px;background:#06B6D4;"></span>
                    </div>
                </div>
            </div>

            {{-- Right Box: What got left behind (Coral / Caution theme) --}}
            <div class="p-7 rounded-2xl border transition-all duration-300 hover:-translate-y-1" style="background:linear-gradient(180deg,#FFFFFF 0%,#FFFBEB 100%);border:1.5px solid rgba(245,158,11,0.35);box-shadow:0 12px 30px rgba(245,158,11,0.1);" data-animate data-delay="160">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0" style="background:rgba(245,158,11,0.12);border:1px solid rgba(245,158,11,0.3);">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#D97706" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-wider uppercase" style="color:#D97706;">Vulnerabilities</span>
                        <h3 class="font-bold text-lg" style="color:#062538;">What got left behind</h3>
                    </div>
                </div>
                <ul class="space-y-2.5 text-sm" style="color:#475569;">
                    @foreach(['Visibility into how it was built','Architecture that scales','Quality checks and sign-off','Performance under real load'] as $line)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0" style="background:rgba(245,158,11,0.15);color:#D97706;">!</span>
                        <span>{{ $line }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-8 rounded-2xl border" style="border-color:#E2EAF4;background:#fff;" data-animate>
                <span class="section-tag block mb-3">Black box</span>
                <h3 class="text-xl font-bold mb-3" style="color:#062538;">Hope it works</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    You receive finished software but cannot see how it was built or tested. Problems show up after launch.
                </p>
            </div>
            <div class="p-8 rounded-2xl border" style="border-color:rgba(6,182,212,0.35);background:#fff;" data-animate data-delay="80">
                <span class="section-tag block mb-3">Glass box</span>
                <h3 class="text-xl font-bold mb-3" style="color:#062538;">See every step and check</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    You see the plan, the tests and the results. Every step is checked and signed off. Problems are caught before launch.
                </p>
            </div>
        </div>

        <p class="mt-10 text-center text-lg font-semibold" style="color:#062538;" data-animate>
            Every Cenrion release is engineered to scale — architecture decisions, code reviews, automated tests and performance benchmarks travel with it.
        </p>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 2: CAPABILITIES OVERVIEW
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24 bg-white">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        {{-- Section header --}}
        <div class="text-center mb-16">
            <span class="section-tag block mb-3" data-animate>What We Build</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4"
                style="color:#062538;" data-animate data-delay="80">
                Six capabilities, one standard
            </h2>
            <p class="mx-auto text-lg" style="max-width:640px;color:#5A7184;"
               data-animate data-delay="160">
                Architecture, reviews, tests and benchmarks travel with every release —
                so you can see exactly how it was built.
            </p>
        </div>

        {{-- 6-card grid --}}
        @php
        $capabilityCards = [
            [
                'title' => 'AI & Automation',
                'badge' => 'GENAI & AGENTS',
                'desc' => 'Generative AI, agentic workflows & custom LLMs tailored to your domain and business processes.',
                'icon' => 'M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z',
                'topGradient' => 'linear-gradient(90deg, #06B6D4, #22D3EE)',
                'bg' => 'linear-gradient(160deg, #F0FDFE 0%, #FFFFFF 65%)',
                'border' => 'rgba(6,182,212,0.35)',
                'hoverShadow' => '0 18px 40px -10px rgba(6,182,212,0.22)',
                'iconBg' => 'rgba(6,182,212,0.12)',
                'iconBorder' => 'rgba(6,182,212,0.3)',
                'accent' => '#0891B2',
                'badgeBg' => 'rgba(6,182,212,0.1)',
                'badgeColor' => '#0891B2',
                'badgeBorder' => 'rgba(6,182,212,0.25)',
                'delay' => 0
            ],
            [
                'title' => 'Software Engineering',
                'badge' => 'CORE PLATFORMS',
                'desc' => 'Modern web, mobile & enterprise software platforms — built to last and scale.',
                'icon' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5',
                'topGradient' => 'linear-gradient(90deg, #062538, #1E3A8A)',
                'bg' => 'linear-gradient(160deg, #F8FAFC 0%, #FFFFFF 65%)',
                'border' => 'rgba(6,37,56,0.22)',
                'hoverShadow' => '0 18px 40px -10px rgba(6,37,56,0.18)',
                'iconBg' => 'rgba(6,37,56,0.08)',
                'iconBorder' => 'rgba(6,37,56,0.22)',
                'accent' => '#062538',
                'badgeBg' => 'rgba(6,37,56,0.06)',
                'badgeColor' => '#062538',
                'badgeBorder' => 'rgba(6,37,56,0.18)',
                'delay' => 80
            ],
            [
                'title' => 'Cloud & DevOps',
                'badge' => 'CLOUD-NATIVE',
                'desc' => 'Cloud-native builds, IaC, CI/CD & cost optimization across AWS, GCP, and Azure.',
                'icon' => 'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z',
                'topGradient' => 'linear-gradient(90deg, #0284C7, #38BDF8)',
                'bg' => 'linear-gradient(160deg, #F0F9FF 0%, #FFFFFF 65%)',
                'border' => 'rgba(2,132,199,0.3)',
                'hoverShadow' => '0 18px 40px -10px rgba(2,132,199,0.2)',
                'iconBg' => 'rgba(2,132,199,0.12)',
                'iconBorder' => 'rgba(2,132,199,0.3)',
                'accent' => '#0284C7',
                'badgeBg' => 'rgba(2,132,199,0.1)',
                'badgeColor' => '#0284C7',
                'badgeBorder' => 'rgba(2,132,199,0.25)',
                'delay' => 160
            ],
            [
                'title' => 'Quality Engineering',
                'badge' => 'TEST & VERIFY',
                'desc' => 'Automated testing, API performance & stress testing — quality baked into every build.',
                'icon' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'topGradient' => 'linear-gradient(90deg, #059669, #34D399)',
                'bg' => 'linear-gradient(160deg, #F0FDF4 0%, #FFFFFF 65%)',
                'border' => 'rgba(16,185,129,0.3)',
                'hoverShadow' => '0 18px 40px -10px rgba(16,185,129,0.2)',
                'iconBg' => 'rgba(16,185,129,0.12)',
                'iconBorder' => 'rgba(16,185,129,0.3)',
                'accent' => '#059669',
                'badgeBg' => 'rgba(16,185,129,0.1)',
                'badgeColor' => '#059669',
                'badgeBorder' => 'rgba(16,185,129,0.25)',
                'delay' => 240
            ],
            [
                'title' => 'Data & Analytics',
                'badge' => 'INTELLIGENCE',
                'desc' => 'Pipelines, real-time analytics & data platforms that turn raw data into business intelligence.',
                'icon' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z',
                'topGradient' => 'linear-gradient(90deg, #7C3AED, #A855F7)',
                'bg' => 'linear-gradient(160deg, #FAF5FF 0%, #FFFFFF 65%)',
                'border' => 'rgba(124,58,237,0.3)',
                'hoverShadow' => '0 18px 40px -10px rgba(124,58,237,0.2)',
                'iconBg' => 'rgba(124,58,237,0.12)',
                'iconBorder' => 'rgba(124,58,237,0.3)',
                'accent' => '#7C3AED',
                'badgeBg' => 'rgba(124,58,237,0.1)',
                'badgeColor' => '#7C3AED',
                'badgeBorder' => 'rgba(124,58,237,0.25)',
                'delay' => 320
            ],
            [
                'title' => 'Tech Consulting',
                'badge' => 'ADVISORY',
                'desc' => 'Architecture modernization & AI adoption strategy — from roadmap to execution.',
                'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18',
                'topGradient' => 'linear-gradient(90deg, #D97706, #F59E0B)',
                'bg' => 'linear-gradient(160deg, #FFFBEB 0%, #FFFFFF 65%)',
                'border' => 'rgba(217,119,6,0.3)',
                'hoverShadow' => '0 18px 40px -10px rgba(217,119,6,0.2)',
                'iconBg' => 'rgba(217,119,6,0.12)',
                'iconBorder' => 'rgba(217,119,6,0.3)',
                'accent' => '#D97706',
                'badgeBg' => 'rgba(217,119,6,0.1)',
                'badgeColor' => '#D97706',
                'badgeBorder' => 'rgba(217,119,6,0.25)',
                'delay' => 400
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($capabilityCards as $card)
            <div class="p-6 sm:p-7 rounded-2xl relative overflow-hidden transition-all duration-300 hover:-translate-y-1.5 group flex flex-col justify-between"
                 style="background: {{ $card['bg'] }}; border: 1px solid {{ $card['border'] }}; box-shadow: 0 10px 28px rgba(6,37,56,0.06);"
                 onmouseover="this.style.boxShadow='{{ $card['hoverShadow'] }}'"
                 onmouseout="this.style.boxShadow='0 10px 28px rgba(6,37,56,0.06)'"
                 data-animate style="transition-delay:{{ $card['delay'] }}ms">
                {{-- Top colored accent strip --}}
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:{{ $card['topGradient'] }};"></div>
                
                <div>
                    <div class="flex items-center justify-between gap-3 mb-5">
                        {{-- Icon container --}}
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center transition-transform group-hover:scale-105"
                             style="background:{{ $card['iconBg'] }}; border:1px solid {{ $card['iconBorder'] }};">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 stroke="{{ $card['accent'] }}" stroke-width="1.75" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $card['icon'] }}"/>
                            </svg>
                        </div>
                        <span class="text-[10px] font-extrabold tracking-widest px-2.5 py-1 rounded-full uppercase"
                              style="background:{{ $card['badgeBg'] }}; color:{{ $card['badgeColor'] }}; border:1px solid {{ $card['badgeBorder'] }};">
                            {{ $card['badge'] }}
                        </span>
                    </div>

                    <h3 class="text-xl font-bold mb-2.5" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        {{ $card['title'] }}
                    </h3>
                    <p class="text-sm leading-relaxed mb-6" style="color:#5A7184;">
                        {{ $card['desc'] }}
                    </p>
                </div>

                <div>
                    <a href="{{ route('capabilities') }}" class="inline-flex items-center gap-1.5 text-sm font-bold transition-all"
                       style="color:{{ $card['accent'] }};">
                        Learn more
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                            <path fill-rule="evenodd" d="M2 8a.75.75 0 01.75-.75h8.69L8.22 4.03a.75.75 0 011.06-1.06l4.5 4.5a.75.75 0 010 1.06l-4.5 4.5a.75.75 0 01-1.06-1.06l3.22-3.22H2.75A.75.75 0 012 8z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Bottom link --}}
        <div class="text-center mt-12" data-animate>
            <a href="{{ route('capabilities') }}"
               class="inline-flex items-center gap-2 font-semibold text-sm"
               style="color:#06B6D4;">
                View all capabilities
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 3: TECHNOLOGY ECOSYSTEM BAR
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24 relative overflow-hidden" style="background:#062538;">
    {{-- Ambient glows --}}
    <div style="position:absolute;top:20%;left:-10%;width:420px;height:420px;background:radial-gradient(circle,rgba(168,85,247,0.12),transparent 70%);pointer-events:none;border-radius:9999px;"></div>
    <div style="position:absolute;bottom:10%;right:-10%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;border-radius:9999px;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>Our Stack</span>
            <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-3 text-white" data-animate data-delay="80" style="font-family:'Plus Jakarta Sans',sans-serif;">
                Engineered Expertise
            </h2>
            <p class="text-base" style="color:#94A3B8;" data-animate data-delay="160">
                Deep hands-on proficiency across the modern technology landscape.
            </p>
        </div>

        @php
        $techGroups = [
            [
                'label' => 'AI & ML',
                'badge' => 'INTELLIGENCE',
                'icon' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z',
                'techs' => ['Python', 'PyTorch', 'OpenAI API', 'LangChain', 'TensorFlow'],
                'cardBg' => 'linear-gradient(155deg, rgba(168,85,247,0.16) 0%, rgba(15,23,42,0.95) 55%, rgba(139,92,246,0.06) 100%)',
                'cardBorder' => 'rgba(168,85,247,0.4)',
                'cardShadow' => '0 12px 30px -10px rgba(168,85,247,0.3)',
                'iconBg' => 'rgba(168,85,247,0.22)',
                'iconBorder' => 'rgba(168,85,247,0.5)',
                'iconColor' => '#C084FC',
                'labelColor' => '#F3E8FF',
                'pillBg' => 'rgba(168,85,247,0.12)',
                'pillBorder' => 'rgba(168,85,247,0.3)',
                'pillColor' => '#E9D5FF'
            ],
            [
                'label' => 'Frontend',
                'badge' => 'INTERFACE',
                'icon' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5',
                'techs' => ['React', 'Next.js', 'TypeScript', 'Tailwind CSS', 'Vue.js'],
                'cardBg' => 'linear-gradient(155deg, rgba(6,182,212,0.18) 0%, rgba(15,23,42,0.95) 55%, rgba(14,165,233,0.06) 100%)',
                'cardBorder' => 'rgba(6,182,212,0.4)',
                'cardShadow' => '0 12px 30px -10px rgba(6,182,212,0.3)',
                'iconBg' => 'rgba(6,182,212,0.22)',
                'iconBorder' => 'rgba(6,182,212,0.5)',
                'iconColor' => '#22D3EE',
                'labelColor' => '#ECFEFF',
                'pillBg' => 'rgba(6,182,212,0.12)',
                'pillBorder' => 'rgba(6,182,212,0.3)',
                'pillColor' => '#CFFAFE'
            ],
            [
                'label' => 'Backend',
                'badge' => 'SYSTEMS',
                'icon' => 'M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 019 0m-9 0a4.5 4.5 0 018.573-1.917',
                'techs' => ['Node.js', 'Go', 'Laravel', 'FastAPI', 'PostgreSQL'],
                'cardBg' => 'linear-gradient(155deg, rgba(16,185,129,0.16) 0%, rgba(15,23,42,0.95) 55%, rgba(5,150,105,0.06) 100%)',
                'cardBorder' => 'rgba(16,185,129,0.4)',
                'cardShadow' => '0 12px 30px -10px rgba(16,185,129,0.3)',
                'iconBg' => 'rgba(16,185,129,0.22)',
                'iconBorder' => 'rgba(16,185,129,0.5)',
                'iconColor' => '#34D399',
                'labelColor' => '#ECFDF5',
                'pillBg' => 'rgba(16,185,129,0.12)',
                'pillBorder' => 'rgba(16,185,129,0.3)',
                'pillColor' => '#D1FAE5'
            ],
            [
                'label' => 'Cloud & DevOps',
                'badge' => 'INFRASTRUCTURE',
                'icon' => 'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z',
                'techs' => ['AWS', 'Azure', 'GCP', 'Kubernetes', 'Terraform'],
                'cardBg' => 'linear-gradient(155deg, rgba(245,158,11,0.16) 0%, rgba(15,23,42,0.95) 55%, rgba(239,68,68,0.06) 100%)',
                'cardBorder' => 'rgba(245,158,11,0.4)',
                'cardShadow' => '0 12px 30px -10px rgba(245,158,11,0.3)',
                'iconBg' => 'rgba(245,158,11,0.22)',
                'iconBorder' => 'rgba(245,158,11,0.5)',
                'iconColor' => '#FBBF24',
                'labelColor' => '#FFFBEB',
                'pillBg' => 'rgba(245,158,11,0.12)',
                'pillBorder' => 'rgba(245,158,11,0.3)',
                'pillColor' => '#FEF3C7'
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($techGroups as $i => $group)
            <div class="rounded-2xl p-6 relative overflow-hidden transition-all duration-300 hover:-translate-y-1.5"
                 style="background:{{ $group['cardBg'] }}; border:1px solid {{ $group['cardBorder'] }}; box-shadow:{{ $group['cardShadow'] }};"
                 data-animate data-delay="{{ $i * 80 }}">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background:{{ $group['iconBg'] }}; border:1px solid {{ $group['iconBorder'] }};">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="{{ $group['iconColor'] }}" stroke-width="1.75" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $group['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-[10px] font-extrabold tracking-widest block uppercase" style="color:{{ $group['iconColor'] }};opacity:0.85;">{{ $group['badge'] }}</span>
                        <span class="text-base font-bold tracking-wide" style="color:{{ $group['labelColor'] }}; font-family:'Plus Jakarta Sans',sans-serif;">{{ $group['label'] }}</span>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($group['techs'] as $tech)
                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold transition-all duration-200 cursor-default"
                          style="background:{{ $group['pillBg'] }}; border:1px solid {{ $group['pillBorder'] }}; color:{{ $group['pillColor'] }};">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 4: DELIVERY PROCESS (navy contrast fold)
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="fold-navy process-on-navy py-24">
    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>How We Work</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 text-white"
                data-animate data-delay="80">
                The Glass Box model
            </h2>
            <p class="mx-auto text-lg" style="max-width:640px;color:#94A3B8;"
               data-animate data-delay="160">
                Most vendors leave architecture and scaling to the end. We engineer for scale from day one
                and place a gate between every phase. Each gate leaves behind a document the client keeps.
            </p>
        </div>

        {{-- 5-Box Step-by-Step Flow Pipeline (Strictly Horizontal Line) --}}
        <div class="overflow-x-auto pb-6 mb-12" style="-webkit-overflow-scrolling: touch;">
            <div class="grid grid-cols-5 gap-3 lg:gap-4 min-w-[900px] lg:min-w-0 relative">
                @php
                    $flowSteps = [
                        [
                            'step' => '01',
                            'name' => 'Discover',
                            'desc' => 'Outcomes and success criteria &middot; Architecture & risk map',
                            'gate' => 'G1',
                            'color' => '#06B6D4',
                            'bgRgba' => 'rgba(6,182,212,0.12)',
                            'borderRgba' => 'rgba(6,182,212,0.35)',
                            'lineGradient' => 'linear-gradient(90deg, #06B6D4, #6366F1)',
                        ],
                        [
                            'step' => '02',
                            'name' => 'Design',
                            'desc' => 'UX and system design &middot; Architecture built to scale',
                            'gate' => 'G2',
                            'color' => '#6366F1',
                            'bgRgba' => 'rgba(99,102,241,0.12)',
                            'borderRgba' => 'rgba(99,102,241,0.35)',
                            'lineGradient' => 'linear-gradient(90deg, #6366F1, #8B5CF6)',
                        ],
                        [
                            'step' => '03',
                            'name' => 'Build',
                            'desc' => 'Agile engineering sprints &middot; Clean, reviewed code',
                            'gate' => 'G3',
                            'color' => '#A855F7',
                            'bgRgba' => 'rgba(168,85,247,0.12)',
                            'borderRgba' => 'rgba(168,85,247,0.35)',
                            'lineGradient' => 'linear-gradient(90deg, #A855F7, #F59E0B)',
                        ],
                        [
                            'step' => '04',
                            'name' => 'Release',
                            'desc' => 'CI/CD and cloud deployment &middot; Release readiness sign-off',
                            'gate' => 'G4',
                            'color' => '#F59E0B',
                            'bgRgba' => 'rgba(245,158,11,0.12)',
                            'borderRgba' => 'rgba(245,158,11,0.35)',
                            'lineGradient' => 'linear-gradient(90deg, #F59E0B, #10B981)',
                        ],
                        [
                            'step' => '05',
                            'name' => 'Scale',
                            'desc' => 'Performance and load tuning &middot; Monitoring & growth',
                            'gate' => 'Scale',
                            'color' => '#10B981',
                            'bgRgba' => 'rgba(16,185,129,0.12)',
                            'borderRgba' => 'rgba(16,185,129,0.35)',
                            'lineGradient' => 'linear-gradient(90deg, #10B981, #06B6D4)',
                        ],
                    ];
                @endphp

                @foreach($flowSteps as $idx => $st)
                <div class="relative group" data-animate data-delay="{{ $idx * 75 }}">
                    {{-- Flow card --}}
                    <div class="rounded-2xl p-5 text-center h-full flex flex-col justify-between relative overflow-hidden transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-2xl"
                         style="background: linear-gradient(180deg, rgba(14,53,80,0.65) 0%, rgba(6,37,56,0.85) 100%); border: 1.5px solid {{ $st['borderRgba'] }}; box-shadow: 0 10px 28px rgba(0,0,0,0.3);">
                        
                        {{-- Top colored step pipeline bar --}}
                        <div style="position:absolute;top:0;left:0;right:0;height:3px;background:{{ $st['color'] }};box-shadow:0 0 12px {{ $st['color'] }};"></div>

                        <div>
                            {{-- Step indicator pill --}}
                            <div class="flex items-center justify-center gap-1.5 mb-3">
                                <span class="inline-flex px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-widest"
                                      style="background: {{ $st['bgRgba'] }}; border: 1px solid {{ $st['borderRgba'] }}; color: {{ $st['color'] }};">
                                    STEP {{ $st['step'] }}
                                </span>
                            </div>

                            <h3 class="text-xl font-extrabold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">{{ $st['name'] }}</h3>
                            <p class="text-xs leading-relaxed mb-4" style="color:#94A3B8;">{!! $st['desc'] !!}</p>
                        </div>

                        {{-- Gate badge --}}
                        <div class="pt-2">
                            <span class="inline-flex items-center justify-center px-3.5 py-1 rounded-full text-xs font-bold tracking-wider"
                                  style="background: {{ $st['bgRgba'] }}; border: 1px solid {{ $st['borderRgba'] }}; color: {{ $st['color'] }}; box-shadow: 0 0 10px {{ $st['bgRgba'] }};">
                                {{ $st['gate'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Horizontal Flow arrow connector to next step --}}
                    @if($idx < count($flowSteps) - 1)
                    <div class="absolute -right-3.5 top-1/2 -translate-y-1/2 z-20 w-7 h-7 rounded-full flex items-center justify-center pointer-events-none"
                         style="background: #062538; border: 1.5px solid {{ $st['color'] }}; box-shadow: 0 0 12px {{ $st['color'] }};">
                        <svg class="w-3.5 h-3.5" style="color: {{ $st['color'] }};" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        <p class="text-center text-sm mb-12" style="color:#94A3B8;" data-animate>
            <span style="color:#06B6D4;font-weight:700;">QA layer</span> —
            Automated testing and code review run through every phase, from the first sprint to scale.
        </p>

                <div class="rounded-2xl overflow-hidden border" style="border-color:rgba(6,182,212,0.3);box-shadow:0 12px 40px rgba(0,0,0,0.35);background:rgba(10,37,56,0.6);backdrop-filter:blur(12px);" data-animate>
            <div class="px-6 py-5 flex items-center justify-between flex-wrap gap-4" style="background:linear-gradient(90deg, rgba(6,182,212,0.15) 0%, rgba(15,23,42,0.6) 100%);border-bottom:1px solid rgba(6,182,212,0.2);">
                <div>
                    <h3 class="text-xl font-bold text-white flex items-center gap-2" style="font-family:'Plus Jakarta Sans',sans-serif;">
                        <span class="inline-block w-2.5 h-2.5 rounded-full bg-cyan-400"></span>
                        What you receive at every gate
                    </h3>
                    <p class="text-sm mt-1" style="color:#94A3B8;">A gate is a checkpoint with a clear pass or fail. If a gate fails, it is fixed before the work moves on.</p>
                </div>
                <span class="px-3.5 py-1.5 rounded-full text-xs font-bold tracking-wider uppercase" style="background:rgba(6,182,212,0.15);border:1px solid rgba(6,182,212,0.4);color:#67E8F9;">
                    5 Verification Gates
                </span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr style="background:rgba(6,37,56,0.85);color:#67E8F9;border-bottom:1px solid rgba(255,255,255,0.08);">
                            <th class="px-6 py-4 font-bold tracking-wider text-xs uppercase">Gate</th>
                            <th class="px-6 py-4 font-bold tracking-wider text-xs uppercase">Checkpoint</th>
                            <th class="px-6 py-4 font-bold tracking-wider text-xs uppercase">What you receive</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                            ['G1', 'Architecture approved', 'Solution architecture and scalability plan', '#06B6D4', 'rgba(6,182,212,0.18)', 'rgba(6,182,212,0.45)', '#67E8F9', '#ECFEFF'],
                            ['G2', 'Design signed off', 'System design, API contracts and test strategy', '#A855F7', 'rgba(168,85,247,0.18)', 'rgba(168,85,247,0.45)', '#D8B4FE', '#F3E8FF'],
                            ['G3', 'Build verified', 'Code review, automated test and security reports', '#10B981', 'rgba(16,185,129,0.18)', 'rgba(16,185,129,0.45)', '#6EE7B7', '#ECFDF5'],
                            ['G4', 'Release ready', 'Deployment runbook and performance benchmarks', '#F59E0B', 'rgba(245,158,11,0.18)', 'rgba(245,158,11,0.45)', '#FCD34D', '#FFFBEB'],
                            ['Scale', 'Growth and operations', 'Monitoring, capacity planning and root-cause reports', '#EC4899', 'rgba(236,72,153,0.18)', 'rgba(236,72,153,0.45)', '#F472B6', '#FDF2F8'],
                        ] as $row)
                        <tr class="transition-colors duration-200" style="border-bottom:1px solid rgba(255,255,255,0.06);"
                            onmouseover="this.style.background='{{ $row[4] }}'"
                            onmouseout="this.style.background='transparent'">
                            <td class="px-6 py-4 font-bold">
                                <span class="inline-flex items-center justify-center px-3.5 py-1 rounded-full text-xs font-extrabold tracking-wider"
                                      style="background:{{ $row[4] }};border:1px solid {{ $row[5] }};color:{{ $row[6] }};box-shadow:0 2px 10px {{ $row[4] }};">
                                    {{ $row[0] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 font-semibold" style="color:{{ $row[7] }};">
                                <span class="inline-block w-2.5 h-2.5 rounded-full mr-2.5" style="background:{{ $row[3] }};box-shadow:0 0 8px {{ $row[3] }};"></span>
                                {{ $row[1] }}
                            </td>
                            <td class="px-6 py-4" style="color:#E2E8F0;">
                                <div class="inline-flex items-center gap-2.5">
                                    <svg class="w-4 h-4 flex-shrink-0" style="color:{{ $row[3] }};" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <span>{{ $row[2] }}</span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 5: CENRION LABS TEASER
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24 bg-white">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="flex flex-col lg:flex-row items-start gap-16">

            {{-- Left column: text --}}
            <div class="flex-1 lg:max-w-lg" data-animate>
                <span class="section-tag block mb-4">Cenrion Labs</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-6 leading-tight"
                    style="color:#062538;">
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
                    <div class="labs-mini-card p-6 sm:col-span-2 relative overflow-hidden"
                         style="background: linear-gradient(145deg, #072B40 0%, #062538 50%, #083752 100%); border: 2px solid #06B6D4; box-shadow: 0 16px 40px rgba(6,182,212,0.25), 0 0 20px rgba(6,182,212,0.15), inset 0 1px 0 rgba(103,232,249,0.3);">
                        <div class="flex items-start justify-between mb-3">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                 style="background: rgba(6,182,212,0.25); border: 1.5px solid #06B6D4; box-shadow: 0 0 16px rgba(6,182,212,0.45);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="#67E8F9" stroke-width="1.8" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                </svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase text-white"
                                  style="background: linear-gradient(90deg, #06B6D4, #0891B2); box-shadow: 0 4px 14px rgba(6,182,212,0.45); border: 1px solid rgba(255,255,255,0.25);">
                                <svg class="w-3 h-3 text-cyan-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                LIVE SHOWCASE
                            </span>
                        </div>
                        <h4 class="font-bold text-base mb-1" style="color:#67E8F9;">AI Document Intelligence</h4>
                        <p class="text-xs leading-relaxed mb-3" style="color:#E2E8F0;">
                            Upload any document &mdash; contracts, reports, invoices &mdash; and get instant AI-powered extraction, summarization, and Q&amp;A.
                        </p>
                        <div class="inline-flex items-center gap-1.5 text-xs font-bold" style="color:#67E8F9;">
                            <span>Explore Document Intelligence</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </div>
                    </div>

                    {{-- Lab card 2: AI Support Agent --}}
                    <div class="labs-mini-card p-6 relative overflow-hidden"
                         style="background: linear-gradient(145deg, #072B40 0%, #062538 50%, #083752 100%); border: 2px solid #06B6D4; box-shadow: 0 16px 40px rgba(6,182,212,0.25), 0 0 20px rgba(6,182,212,0.15), inset 0 1px 0 rgba(103,232,249,0.3);">
                        <div class="flex items-start justify-between mb-3">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                 style="background: rgba(6,182,212,0.25); border: 1.5px solid #06B6D4; box-shadow: 0 0 16px rgba(6,182,212,0.45);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="#67E8F9" stroke-width="1.8" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                </svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase text-white"
                                  style="background: linear-gradient(90deg, #06B6D4, #0891B2); box-shadow: 0 4px 14px rgba(6,182,212,0.45); border: 1px solid rgba(255,255,255,0.25);">
                                <svg class="w-3 h-3 text-cyan-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                AGENTIC WORKFLOW
                            </span>
                        </div>
                        <h4 class="font-bold text-base mb-1" style="color:#67E8F9;">AI Support Agent</h4>
                        <p class="text-xs leading-relaxed mb-3" style="color:#E2E8F0;">
                            Agentic customer support powered by retrieval-augmented generation.
                        </p>
                        <div class="inline-flex items-center gap-1.5 text-xs font-bold" style="color:#67E8F9;">
                            <span>Explore Agent Architecture</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </div>
                    </div>

                    {{-- Lab card 3: Analytics Dashboard (Recommended Fit) --}}
                    <div class="labs-mini-card p-6 relative overflow-hidden"
                         style="background: linear-gradient(145deg, #072B40 0%, #062538 50%, #083752 100%); border: 2px solid #06B6D4; box-shadow: 0 16px 40px rgba(6,182,212,0.25), 0 0 20px rgba(6,182,212,0.15), inset 0 1px 0 rgba(103,232,249,0.3);">
                        {{-- Recommended badge --}}
                        <div class="flex items-start justify-between mb-3">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                 style="background: rgba(6,182,212,0.25); border: 1.5px solid #06B6D4; box-shadow: 0 0 16px rgba(6,182,212,0.45);">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                     stroke="#67E8F9" stroke-width="1.8" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                </svg>
                            </div>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase text-white"
                                  style="background: linear-gradient(90deg, #06B6D4, #0891B2); box-shadow: 0 4px 14px rgba(6,182,212,0.45); border: 1px solid rgba(255,255,255,0.25);">
                                <svg class="w-3 h-3 text-cyan-200" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                RECOMMENDED FIT
                            </span>
                        </div>
                        <h4 class="font-bold text-base mb-1" style="color:#67E8F9;">Analytics Dashboard</h4>
                        <p class="text-xs leading-relaxed mb-3" style="color:#E2E8F0;">
                            Real-time data visualization with streaming pipeline architecture.
                        </p>
                        <div class="inline-flex items-center gap-1.5 text-xs font-bold" style="color:#67E8F9;">
                            <span>Explore Recommended Architecture</span>
                            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                        </div>
                    </div>

                </div>{{-- /grid --}}
            </div>

        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 6: THOUGHT LEADERSHIP TEASER
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        {{-- Section header --}}
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-12">
            <div>
                <span class="section-tag block mb-3" data-animate>Insights</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight"
                    style="color:#062538;" data-animate style="transition-delay:80ms">
                    Thinking Out Loud
                </h2>
            </div>
            <a href="{{ route('insights') }}"
               class="hidden sm:inline-flex items-center gap-2 font-semibold text-sm shrink-0"
               style="color:#06B6D4;" data-animate style="transition-delay:160ms">
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
                <div class="h-1 w-full" style="background:linear-gradient(to right,#06B6D4,#67E8F9);"></div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide"
                              style="background:rgba(6,182,212,0.1);color:#06B6D4;">
                            AI &amp; Applied Tech
                        </span>
                        <span class="text-xs" style="color:#94A3B8;">8 min read</span>
                    </div>
                    <h3 class="text-xl font-bold leading-snug mb-3" style="color:#062538;">
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
                                 style="background:#06B6D4;color:white;">C</div>
                            <span class="text-xs font-medium" style="color:#5A7184;">Cenrion Team</span>
                        </div>
                        <a href="{{ route('insights') }}"
                           class="inline-flex items-center gap-1.5 text-sm font-semibold group"
                           style="color:#06B6D4;">
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
                <div class="h-1 w-full" style="background:linear-gradient(to right,#67E8F9,#06B6D4);"></div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide"
                              style="background:rgba(6,182,212,0.1);color:#06B6D4;">
                            Engineering Strategy
                        </span>
                        <span class="text-xs" style="color:#94A3B8;">6 min read</span>
                    </div>
                    <h3 class="text-xl font-bold leading-snug mb-3" style="color:#062538;">
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
                                 style="background:#06B6D4;color:white;">C</div>
                            <span class="text-xs font-medium" style="color:#5A7184;">Cenrion Team</span>
                        </div>
                        <a href="{{ route('insights') }}"
                           class="inline-flex items-center gap-1.5 text-sm font-semibold group"
                           style="color:#06B6D4;">
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
               style="color:#06B6D4;">
                View All Insights
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     AI IN THE LOOP
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24 bg-white">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="text-center mb-14">
            <span class="section-tag block mb-3" data-animate>How We Use AI</span>
            <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#062538;" data-animate data-delay="80">
                AI in the loop, engineers in charge
            </h2>
            <p class="mx-auto text-lg" style="max-width:640px;color:#5A7184;" data-animate data-delay="160">
                We use AI where it saves time. Senior engineers own the architecture and review every AI output before it ships.
                You get the speed of AI with engineers accountable for the result.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Box 1: AI Related (Neural velocity, electric cyan, neural chips) --}}
            <div class="p-8 rounded-2xl border relative overflow-hidden transition-all duration-300 hover:-translate-y-2"
                 style="background: linear-gradient(180deg, #FFFFFF 0%, #F0FDFA 55%, #E0F2FE 100%); border: 2px solid #06B6D4; box-shadow: 0 16px 36px rgba(6,182,212,0.18);"
                 data-animate data-delay="0">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(6,182,212,0.15),transparent 70%);pointer-events:none;"></div>
                
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider mb-4"
                     style="background: rgba(6,182,212,0.15); border: 1px solid rgba(6,182,212,0.4); color: #0891B2;">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                    </span>
                    AI Acceleration Engine
                </div>

                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(6,182,212,0.22), rgba(6,182,212,0.08)); border: 1.5px solid #06B6D4; box-shadow: 0 0 18px rgba(6,182,212,0.25);">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-wider uppercase block" style="color:#0891B2;">Speed & Automation</span>
                        <h3 class="text-xl font-extrabold" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">AI accelerates</h3>
                    </div>
                </div>

                <p class="text-xs leading-relaxed mb-4" style="color:#5A7184;">Neural copilot workflows, synthetic testing and rapid component scaffolding.</p>

                <ul class="space-y-3 text-sm">
                    @foreach(['Code scaffolding and refactoring', 'Integrations and boilerplate', 'Documentation drafts'] as $line)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0"
                              style="background: rgba(6,182,212,0.18); color: #0891B2;">&#10003;</span>
                        <span style="color:#334155; font-weight: 500;">{{ $line }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Box 2: Engineer Related (Architectural blueprint, indigo/navy, terminal code rigor) --}}
            <div class="p-8 rounded-2xl border relative overflow-hidden transition-all duration-300 hover:-translate-y-2"
                 style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F3FF 55%, #EDE9FE 100%); border: 2px solid #6366F1; box-shadow: 0 16px 36px rgba(99,102,241,0.18);"
                 data-animate data-delay="80">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(99,102,241,0.15),transparent 70%);pointer-events:none;"></div>

                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider mb-4"
                     style="background: rgba(99,102,241,0.15); border: 1px solid rgba(99,102,241,0.4); color: #4F46E5;">
                    <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                    Senior Architect Rigor
                </div>

                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(99,102,241,0.22), rgba(99,102,241,0.08)); border: 1.5px solid #6366F1; box-shadow: 0 0 18px rgba(99,102,241,0.25);">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#4F46E5" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-wider uppercase block" style="color:#6366F1;">Engineering Ownership</span>
                        <h3 class="text-xl font-extrabold" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Engineers decide</h3>
                    </div>
                </div>

                <p class="text-xs leading-relaxed mb-4" style="color:#5A7184;">Human governance, production-grade review, resilience gates and security validation.</p>

                <ul class="space-y-3 text-sm">
                    @foreach(['Architecture owned by senior engineers', 'Human review of every change', 'Designed for scale, not just the demo'] as $line)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0"
                              style="background: rgba(99,102,241,0.18); color: #4F46E5;">&#10003;</span>
                        <span style="color:#334155; font-weight: 500;">{{ $line }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Box 3: Client Related (Executive transparency, verified emerald, dashboard audits) --}}
            <div class="p-8 rounded-2xl border relative overflow-hidden transition-all duration-300 hover:-translate-y-2"
                 style="background: linear-gradient(180deg, #FFFFFF 0%, #ECFDF5 55%, #D1FAE5 100%); border: 2px solid #10B981; box-shadow: 0 16px 36px rgba(16,185,129,0.18);"
                 data-animate data-delay="160">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(16,185,129,0.15),transparent 70%);pointer-events:none;"></div>

                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider mb-4"
                     style="background: rgba(16,185,129,0.15); border: 1px solid rgba(16,185,129,0.4); color: #059669;">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    Client Visibility &amp; Trust
                </div>

                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(16,185,129,0.22), rgba(16,185,129,0.08)); border: 1.5px solid #10B981; box-shadow: 0 0 18px rgba(16,185,129,0.25);">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#059669" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-wider uppercase block" style="color:#059669;">Zero Black Box</span>
                        <h3 class="text-xl font-extrabold" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Clients see</h3>
                    </div>
                </div>

                <p class="text-xs leading-relaxed mb-4" style="color:#5A7184;">Real-time test deliverables, direct access to code gates and benchmark telemetry.</p>

                <ul class="space-y-3 text-sm">
                    @foreach(['Architecture and design decisions', 'Code review and test results', 'Performance and scale reports'] as $line)
                    <li class="flex items-center gap-2.5">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0"
                              style="background: rgba(16,185,129,0.18); color: #059669;">&#10003;</span>
                        <span style="color:#334155; font-weight: 500;">{{ $line }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     PRODUCT ENGINEERING REVIEW
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-animate>
                <span class="section-tag block mb-3">Where to Start</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#062538;">
                    Start with a Product Engineering review
                </h2>
                <p class="text-lg mb-8" style="color:#5A7184;">
                    A fixed-scope review of your product's architecture, code base and delivery pipeline, completed in two weeks.
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
                {{-- Step 01: Map --}}
                <div class="p-6 rounded-2xl bg-white border flex gap-5 items-start transition-all duration-300 hover:-translate-y-1"
                     style="border: 1.5px solid #E2EAF4; box-shadow: 0 4px 16px rgba(0,0,0,0.03);"
                     data-animate data-delay="0">
                    <span class="w-10 h-10 rounded-xl flex items-center justify-center text-xs font-black shrink-0"
                          style="background: rgba(6,182,212,0.1); border: 1.5px solid rgba(6,182,212,0.25); color: #0891B2;">01</span>
                    <div class="flex-1">
                        <h3 class="font-bold text-lg mb-1" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Map</h3>
                        <p class="text-sm leading-relaxed" style="color:#5A7184;">Architecture, code base and release pipeline as they run today</p>
                    </div>
                </div>

                {{-- Step 02: Measure --}}
                <div class="p-6 rounded-2xl bg-white border flex gap-5 items-start transition-all duration-300 hover:-translate-y-1"
                     style="border: 1.5px solid #E2EAF4; box-shadow: 0 4px 16px rgba(0,0,0,0.03);"
                     data-animate data-delay="80">
                    <span class="w-10 h-10 rounded-xl flex items-center justify-center text-xs font-black shrink-0"
                          style="background: rgba(6,182,212,0.1); border: 1.5px solid rgba(6,182,212,0.25); color: #0891B2;">02</span>
                    <div class="flex-1">
                        <h3 class="font-bold text-lg mb-1" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Measure</h3>
                        <p class="text-sm leading-relaxed" style="color:#5A7184;">Scalability limits, technical debt and quality gaps</p>
                    </div>
                </div>

                {{-- Step 03: Recommend (Featured Recommended Fit with Talk to Us Cyan #06B6D4) --}}
                <div class="p-6 rounded-2xl border flex gap-5 items-start relative overflow-hidden transition-all duration-300 hover:-translate-y-1 group"
                     style="background: linear-gradient(180deg, #F0FDFA 0%, #FFFFFF 55%); border: 2px solid #06B6D4; box-shadow: 0 10px 30px rgba(6,182,212,0.18);"
                     data-animate data-delay="160">
                    
                    {{-- 03 Pill in solid #06B6D4 (Talk to Us color) --}}
                    <span class="w-10 h-10 rounded-xl flex items-center justify-center text-xs font-black shrink-0 text-white"
                          style="background: #06B6D4; box-shadow: 0 4px 14px rgba(6,182,212,0.35);">03</span>
                    
                    <div class="flex-1 relative z-10">
                        <div class="flex items-center gap-3 mb-1">
                            <h3 class="font-bold text-lg" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Recommend</h3>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold uppercase tracking-wider text-white"
                                  style="background: #06B6D4; box-shadow: 0 2px 10px rgba(6,182,212,0.35);">
                                <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/>
                                </svg>
                                Recommended Fit
                            </span>
                        </div>
                        <p class="text-sm leading-relaxed" style="color:#5A7184;">
                            A prioritised engineering roadmap to <span style="color:#0891B2; font-weight:600;">scale with confidence</span>
                        </p>
                    </div>

                    {{-- Right arrow indicator --}}
                    <div class="hidden sm:flex items-center self-center text-cyan opacity-80 group-hover:opacity-100 group-hover:translate-x-1 transition-all">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="#06B6D4" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     SECTION 7: CTA BANNER
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
<section class="cta-banner py-28">
    {{-- Ambient orbs --}}
    <div class="cta-orb-left"></div>
    <div class="cta-orb-right"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 sm:px-8 lg:px-10 text-center">

        {{-- Decorative icon --}}
        <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl mb-8"
             style="background:rgba(6,182,212,0.15);border:1px solid rgba(6,182,212,0.3);"
             data-animate>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="#06B6D4" stroke-width="1.5" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
            </svg>
        </div>

        <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-5 text-white leading-tight"
            data-animate data-delay="80">
            Ready to build something<br>
            <span class="gradient-text">meaningful?</span>
        </h2>
        <p class="text-lg mb-10 mx-auto" style="color:#94A3B8;max-width:640px;"
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
    const reduce = false; // Force rotation regardless of system preference
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
        glow.addColorStop(0, 'rgba(6,182,212,' + (0.18 * ease) + ')');
        glow.addColorStop(0.48, 'rgba(6,182,212,' + (0.05 * ease) + ')');
        glow.addColorStop(1, 'rgba(6,182,212,0)');
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
            ctx.strokeStyle = 'rgba(6,37,56,' + (fade * ease) + ')';
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
        shade.addColorStop(0, 'rgba(6,37,56,' + (0.13 * ease) + ')');
        shade.addColorStop(1, 'rgba(6,37,56,0)');
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
            g.addColorStop(1, 'rgba(6,182,212,' + ((0.045 + facing * 0.11) * veil * ease) + ')');
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
                ? 'rgba(6,182,212,' + (0.16 * ease) + ')'
                : 'rgba(6,37,56,' + (0.035 * ease) + ')';
            ctx.fill();
            ctx.lineWidth = index === active ? 1.4 : 1;
            ctx.strokeStyle = index === active
                ? 'rgba(6,182,212,' + (0.85 * ease) + ')'
                : 'rgba(6,37,56,' + (0.28 * ease) + ')';
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
            ctx.strokeStyle = 'rgba(6,182,212,' + ((index === active ? 0.45 : 0.16) * ease) + ')';
            ctx.stroke();
        });

        ctx.lineWidth = 1;
        ctx.strokeStyle = 'rgba(6,37,56,' + (0.22 * ease) + ')';
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
        ctx.fillStyle = 'rgba(103,232,249,' + (0.13 * ease) + ')';
        ctx.fill();
        ctx.lineWidth = 1.5;
        ctx.strokeStyle = 'rgba(6,182,212,' + (0.9 * ease) + ')';
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
            ctx.strokeStyle = 'rgba(6,182,212,' + ((0.08 + near * 0.16) * ease) + ')';
            ctx.stroke();
            ctx.lineWidth = 1.35;
            ctx.strokeStyle = 'rgba(6,37,56,' + ((0.35 + near * 0.5) * ease) + ')';
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
                    dot.addColorStop(0, 'rgba(6,182,212,' + alpha + ')');
                    dot.addColorStop(1, 'rgba(6,182,212,0)');
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
        ctx.strokeStyle = 'rgba(6,37,56,' + (0.35 * ease) + ')';
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

