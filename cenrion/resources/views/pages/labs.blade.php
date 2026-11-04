@extends('layouts.app')

@section('title', 'Cenrion Labs — Innovation Division & Working Demos')
@section('meta_description', 'Cenrion Labs: Our innovation playground for experiments in AI, products, and startup ideas. Working technology demonstrations built with glass box engineering.')

@push('styles')
<style>
    /* Clean Hero Glow & Pulse */
    .labs-hero-bg {
        background: linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 100%);
    }

    .labs-ambient-glow {
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(6, 182, 212, 0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }

    /* Waveform glow animation */
    @keyframes pulseGlow {
        0%, 100% { filter: drop-shadow(0 0 3px rgba(6, 182, 212, 0.5)); opacity: 0.85; }
        50% { filter: drop-shadow(0 0 8px rgba(6, 182, 212, 0.85)); opacity: 1; }
    }
    .pulse-waveform {
        animation: pulseGlow 3s ease-in-out infinite;
    }

    /* Division Pillar Card Hover in Cenrion Cyan & Navy */
    .labs-pillar-card {
        background: #FFFFFF;
        border: 1.5px solid #E2EAF4;
        box-shadow: 0 4px 18px rgba(6, 37, 56, 0.04);
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .labs-pillar-card:hover {
        transform: translateY(-6px);
        border-color: #06B6D4;
        box-shadow: 0 16px 36px rgba(6, 182, 212, 0.18), 0 4px 14px rgba(6, 37, 56, 0.06);
    }

    /* Demo card accent border */
    .demo-card {
        transition: all 0.3s ease;
    }
    .demo-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 40px rgba(6, 37, 56, 0.08);
    }
</style>
@endpush

@section('content')

{{-- =====================================================================
     HERO SECTION: OUR INNOVATION DIVISION (CENRION SIGNATURE BRAND PALETTE)
     ===================================================================== --}}
<section class="labs-hero-bg relative overflow-hidden pt-8 pb-14 sm:pt-14 sm:pb-20 lg:pt-16 lg:pb-24">
    <div class="labs-ambient-glow" style="top: -120px; left: 50%; transform: translateX(-50%);"></div>
    <div class="labs-ambient-glow" style="bottom: -150px; right: -80px;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-4 sm:px-6 sm:px-8 lg:px-10 text-center">

        {{-- Eyebrow --}}
        <div class="inline-flex items-center gap-2 px-3.5 py-1 sm:px-4 sm:py-1.5 rounded-full mb-4 sm:mb-6"
             style="background: #ECFEFF; border: 1.5px solid rgba(6, 182, 212, 0.35);"
             data-animate>
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
            </span>
            <span class="text-[11px] sm:text-xs font-black uppercase tracking-widest" style="color: #0891B2; font-family:'Plus Jakarta Sans',sans-serif;">
                OUR INNOVATION DIVISION
            </span>
        </div>

        {{-- Title with Left & Right Cyan Waveforms (Responsive on Mobile) --}}
        <div class="flex items-center justify-center gap-2 sm:gap-6 md:gap-8 mb-4 sm:mb-6" data-animate data-delay="80">
            
            {{-- Left Waveform Line (Compact on mobile) --}}
            <svg class="w-8 sm:w-20 md:w-36 lg:w-44 h-6 sm:h-8 pulse-waveform text-cyan shrink-0" viewBox="0 0 160 32" fill="none">
                <path d="M0 16h45l8-14 10 28 9-20 7 12 8-6h73" stroke="#06B6D4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            {{-- Main Heading --}}
            <h1 class="text-3xl sm:text-5xl lg:text-7xl font-extrabold tracking-tight leading-tight"
                style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">
                <span>Cenrion</span> <span style="color:#06B6D4;">Labs</span>
            </h1>

            {{-- Right Waveform Line (Compact on mobile) --}}
            <svg class="w-8 sm:w-20 md:w-36 lg:w-44 h-6 sm:h-8 pulse-waveform text-cyan shrink-0" viewBox="0 0 160 32" fill="none">
                <path d="M0 16h73l8-6 7 12 9-20 10 28 8-14h45" stroke="#06B6D4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        {{-- Subtitle Paragraph (Direct from PDF) --}}
        <p class="text-sm sm:text-base lg:text-xl max-w-3xl mx-auto leading-relaxed mb-8 sm:mb-14 px-2"
           style="color: #5A7184;"
           data-animate data-delay="160">
            Our playground for experiments in AI, new products and startup ideas. Cenrion Labs is where we build growth accelerators, our own products, branded solutions and startup concepts.
        </p>

        {{-- 4 Division Pillars (Strictly Cenrion Navy & Cyan Brand Template) --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 text-left" data-animate data-delay="240">

            {{-- Pillar 1: Growth accelerators --}}
            <div class="labs-pillar-card p-5 sm:p-7 rounded-2xl sm:rounded-3xl relative overflow-hidden flex flex-col justify-between group">
                
                {{-- Top 3px glowing cyan accent bar --}}
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg, #06B6D4, #67E8F9);box-shadow:0 0 10px rgba(6,182,212,0.5);"></div>
                
                {{-- Subtle ambient corner glow --}}
                <div style="position:absolute;top:0;right:0;width:120px;height:120px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    {{-- Eyebrow badge --}}
                    <div class="flex items-center justify-between gap-2 mb-3 sm:mb-4">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider"
                              style="background: #ECFEFF; border: 1px solid rgba(6,182,212,0.3); color: #0891B2;">
                            <span class="relative flex h-1.5 w-1.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-cyan-500"></span>
                            </span>
                            Division 01
                        </span>
                        <span class="text-[11px] font-mono font-bold" style="color: #0891B2;">AI Velocity</span>
                    </div>

                    {{-- Icon Container --}}
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl flex items-center justify-center mb-3 sm:mb-4 transition-all duration-300 group-hover:scale-110"
                         style="background: rgba(6,182,212,0.1); border: 1.5px solid rgba(6,182,212,0.3);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-extrabold mb-1.5 sm:mb-2 group-hover:text-cyan transition-colors" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Growth accelerators
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed mb-4 sm:mb-5" style="color: #5A7184;">
                        Ready-to-deploy AI and automation kits that help businesses grow faster.
                    </p>
                </div>

                {{-- Micro-chip Tag --}}
                <div class="pt-3 sm:pt-4 border-t flex items-center justify-between text-xs" style="border-color: #E2EAF4;">
                    <span class="font-bold text-[11px]" style="color: #062538;">Turnkey Scaffolds</span>
                    <span class="font-bold text-[11px] px-2 py-0.5 rounded-md" style="background: #ECFEFF; color: #0891B2; border: 1px solid rgba(6,182,212,0.25);">3x Speed</span>
                </div>
            </div>

            {{-- Pillar 2: Products --}}
            <div class="labs-pillar-card p-5 sm:p-7 rounded-2xl sm:rounded-3xl relative overflow-hidden flex flex-col justify-between group">
                
                {{-- Top 3px glowing cyan accent bar --}}
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg, #06B6D4, #67E8F9);box-shadow:0 0 10px rgba(6,182,212,0.5);"></div>
                
                {{-- Subtle ambient corner glow --}}
                <div style="position:absolute;top:0;right:0;width:120px;height:120px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    {{-- Eyebrow badge --}}
                    <div class="flex items-center justify-between gap-2 mb-3 sm:mb-4">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider"
                              style="background: #ECFEFF; border: 1px solid rgba(6,182,212,0.3); color: #0891B2;">
                            Division 02
                        </span>
                        <span class="text-[11px] font-mono font-bold" style="color: #0891B2;">In-House IP</span>
                    </div>

                    {{-- Icon Container --}}
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl flex items-center justify-center mb-3 sm:mb-4 transition-all duration-300 group-hover:scale-110"
                         style="background: rgba(6,182,212,0.1); border: 1.5px solid rgba(6,182,212,0.3);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.07a4.5 4.5 0 004.486-6.32l-3.27 3.27a1.5 1.5 0 01-2.122-2.122l3.27-3.27a4.5 4.5 0 00-6.32 4.486c.118.58.094 1.193-.07 1.743z"/>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-extrabold mb-1.5 sm:mb-2 group-hover:text-cyan transition-colors" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Products
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed mb-4 sm:mb-5" style="color: #5A7184;">
                        Software products we design, build and run ourselves.
                    </p>
                </div>

                {{-- Micro-chip Tag --}}
                <div class="pt-3 sm:pt-4 border-t flex items-center justify-between text-xs" style="border-color: #E2EAF4;">
                    <span class="font-bold text-[11px]" style="color: #062538;">Proprietary Code</span>
                    <span class="font-bold text-[11px] px-2 py-0.5 rounded-md" style="background: #ECFEFF; color: #0891B2; border: 1px solid rgba(6,182,212,0.25);">Production Grade</span>
                </div>
            </div>

            {{-- Pillar 3: Branded solutions --}}
            <div class="labs-pillar-card p-5 sm:p-7 rounded-2xl sm:rounded-3xl relative overflow-hidden flex flex-col justify-between group">
                
                {{-- Top 3px glowing cyan accent bar --}}
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg, #06B6D4, #67E8F9);box-shadow:0 0 10px rgba(6,182,212,0.5);"></div>
                
                {{-- Subtle ambient corner glow --}}
                <div style="position:absolute;top:0;right:0;width:120px;height:120px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    {{-- Eyebrow badge --}}
                    <div class="flex items-center justify-between gap-2 mb-3 sm:mb-4">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider"
                              style="background: #ECFEFF; border: 1px solid rgba(6,182,212,0.3); color: #0891B2;">
                            Division 03
                        </span>
                        <span class="text-[11px] font-mono font-bold" style="color: #0891B2;">White-Label</span>
                    </div>

                    {{-- Icon Container --}}
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl flex items-center justify-center mb-3 sm:mb-4 transition-all duration-300 group-hover:scale-110"
                         style="background: rgba(6,182,212,0.1); border: 1.5px solid rgba(6,182,212,0.3);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-extrabold mb-1.5 sm:mb-2 group-hover:text-cyan transition-colors" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Branded solutions
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed mb-4 sm:mb-5" style="color: #5A7184;">
                        White-label platforms partners can launch under their own brand.
                    </p>
                </div>

                {{-- Micro-chip Tag --}}
                <div class="pt-3 sm:pt-4 border-t flex items-center justify-between text-xs" style="border-color: #E2EAF4;">
                    <span class="font-bold text-[11px]" style="color: #062538;">Partner Ready</span>
                    <span class="font-bold text-[11px] px-2 py-0.5 rounded-md" style="background: #ECFEFF; color: #0891B2; border: 1px solid rgba(6,182,212,0.25);">Custom Themed</span>
                </div>
            </div>

            {{-- Pillar 4: Startup concepts --}}
            <div class="labs-pillar-card p-5 sm:p-7 rounded-2xl sm:rounded-3xl relative overflow-hidden flex flex-col justify-between group">
                
                {{-- Top 3px glowing cyan accent bar --}}
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg, #06B6D4, #67E8F9);box-shadow:0 0 10px rgba(6,182,212,0.5);"></div>
                
                {{-- Subtle ambient corner glow --}}
                <div style="position:absolute;top:0;right:0;width:120px;height:120px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    {{-- Eyebrow badge --}}
                    <div class="flex items-center justify-between gap-2 mb-3 sm:mb-4">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider"
                              style="background: #ECFEFF; border: 1px solid rgba(6,182,212,0.3); color: #0891B2;">
                            Division 04
                        </span>
                        <span class="text-[11px] font-mono font-bold" style="color: #0891B2;">Incubation</span>
                    </div>

                    {{-- Icon Container --}}
                    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl flex items-center justify-center mb-3 sm:mb-4 transition-all duration-300 group-hover:scale-110"
                         style="background: rgba(6,182,212,0.1); border: 1.5px solid rgba(6,182,212,0.3);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2.2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                        </svg>
                    </div>

                    <h3 class="text-lg sm:text-xl font-extrabold mb-1.5 sm:mb-2 group-hover:text-cyan transition-colors" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Startup concepts
                    </h3>
                    <p class="text-xs sm:text-sm leading-relaxed mb-4 sm:mb-5" style="color: #5A7184;">
                        Early ideas we prototype, test with real users and spin out.
                    </p>
                </div>

                {{-- Micro-chip Tag --}}
                <div class="pt-3 sm:pt-4 border-t flex items-center justify-between text-xs" style="border-color: #E2EAF4;">
                    <span class="font-bold text-[11px]" style="color: #062538;">Rapid Prototypes</span>
                    <span class="font-bold text-[11px] px-2 py-0.5 rounded-md" style="background: #ECFEFF; color: #0891B2; border: 1px solid rgba(6,182,212,0.25);">2-Wk MVP</span>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =====================================================================
     SECTION 2: WORKING DEMONSTRATIONS (SLIDE 15: PROOF BEFORE PROMISES)
     ===================================================================== --}}
<section class="py-14 sm:py-20 lg:py-28" style="background-color: #FFFFFF;">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 sm:px-8 lg:px-10">

        {{-- Section Header --}}
        <div class="text-center mb-10 sm:mb-16" data-animate>
            <div class="inline-flex items-center gap-2 mb-3">
                <div class="h-px w-6 sm:w-8" style="background-color:#06B6D4;"></div>
                <span class="text-[11px] sm:text-xs font-extrabold tracking-widest uppercase" style="color:#0891B2;">WORKING DEMONSTRATIONS</span>
                <div class="h-px w-6 sm:w-8" style="background-color:#06B6D4;"></div>
            </div>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-3 sm:mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                Proof before <span class="gradient-text">promises.</span>
            </h2>
            <p class="text-sm sm:text-base lg:text-lg max-w-2xl mx-auto leading-relaxed px-2" style="color:#5A7184;">
                Working systems from Cenrion Labs you can explore today, built in-house to show our depth across AI, real-time data pipelines, and software engineering.
            </p>
        </div>

        {{-- Concept & Architecture Quality Banner --}}
        <div class="rounded-2xl p-5 sm:p-8 mb-10 sm:mb-12 flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6"
             style="background: #F8FAFC; border: 1.5px solid #E2EAF4; border-left: 5px solid #06B6D4; box-shadow: 0 4px 20px rgba(6,37,56,0.03);"
             data-animate>
            <div class="shrink-0 flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-xl"
                 style="background: rgba(6,182,212,0.12); color: #0891B2;">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="flex-1">
                <div class="flex flex-wrap items-center gap-2 sm:gap-3 mb-1">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded text-[10px] font-extrabold tracking-widest uppercase text-white"
                          style="background-color:#06B6D4;">
                        TECHNOLOGY DEMONSTRATION
                    </span>
                    <span class="text-xs font-bold" style="color:#062538;">Glass Box Proof-of-Concept Standard</span>
                </div>
                <p class="text-xs sm:text-sm leading-relaxed" style="color:#5A7184;">
                    The projects below are engineering-led builds demonstrating how Cenrion approaches production systems using modern AI, data, and software engineering techniques. Each demo showcases tangible architectural thinking, zero black-box code, and verifiable engineering quality.
                </p>
            </div>
        </div>

        {{-- ============================================================
             3 COMPREHENSIVE WORKING DEMO CARDS (RESPONSIVE)
             ============================================================ --}}
        <div class="space-y-8 sm:space-y-12">

            {{-- DEMO CARD 1: AI Document Intelligence --}}
            <div class="demo-card bg-white rounded-2xl sm:rounded-3xl border shadow-sm overflow-hidden"
                 style="border: 1.5px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.03);"
                 data-animate>
                <div class="grid grid-cols-1 lg:grid-cols-12">

                    {{-- Left Accent Panel (Deep Navy) --}}
                    <div class="lg:col-span-5 p-6 sm:p-8 lg:p-10 flex flex-col justify-between text-white relative overflow-hidden"
                         style="background: linear-gradient(145deg, #072B40 0%, #062538 60%, #083752 100%); border-right: 1.5px solid rgba(6,182,212,0.2);">
                        
                        <div style="position:absolute;top:0;right:0;width:200px;height:200px;background:radial-gradient(circle,rgba(6,182,212,0.18),transparent 70%);pointer-events:none;"></div>

                        <div>
                            {{-- Header Badges --}}
                            <div class="flex flex-wrap items-center gap-2 mb-4 sm:mb-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase text-white"
                                      style="background: linear-gradient(90deg, #06B6D4, #0891B2); box-shadow: 0 2px 10px rgba(6,182,212,0.35);">
                                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                    LIVE CONCEPT
                                </span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase"
                                      style="background: rgba(255,255,255,0.08); color: #67E8F9; border: 1px solid rgba(103,232,249,0.3);">
                                    AI &bull; Extraction &bull; Q&amp;A
                                </span>
                            </div>

                            {{-- Icon --}}
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl flex items-center justify-center mb-4 sm:mb-6"
                                 style="background: rgba(6,182,212,0.2); border: 1.5px solid #06B6D4; box-shadow: 0 0 18px rgba(6,182,212,0.35);">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                </svg>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold mb-2 sm:mb-3" style="color: #67E8F9; font-family:'Plus Jakarta Sans',sans-serif;">
                                AI Document Intelligence
                            </h3>
                            <p class="text-xs sm:text-sm leading-relaxed mb-5 sm:mb-6" style="color:#CBD5E1;">
                                Upload any document &mdash; contracts, reports, invoices &mdash; and get instant AI-powered extraction, automated structured summarization, and natural language Q&amp;A in seconds.
                            </p>

                            {{-- Live Interactive Mockup Terminal --}}
                            <div class="rounded-xl p-3.5 sm:p-4 mb-5 sm:mb-6 font-mono text-xs overflow-x-auto"
                                 style="background: rgba(3, 18, 28, 0.7); border: 1px solid rgba(6,182,212,0.3);">
                                <div class="flex items-center justify-between pb-2 mb-2 border-b border-slate-700/60 text-slate-400">
                                    <span class="flex items-center gap-1.5 text-cyan-300">
                                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                                        parser_pipeline.py
                                    </span>
                                    <span>24.8ms SLA</span>
                                </div>
                                <div class="space-y-1 text-slate-300">
                                    <p><span class="text-cyan-400">&gt; Input:</span> vendor_agreement_2026.pdf</p>
                                    <p><span class="text-emerald-400">&gt; Extracted:</span> 48 Clauses &bull; 99.4% Confidence</p>
                                    <p><span class="text-amber-400">&gt; Summary:</span> Net-30 payment terms &bull; $1.5M Cap</p>
                                </div>
                            </div>
                        </div>

                        {{-- Technology Stack --}}
                        <div class="pt-2">
                            <span class="text-[11px] font-bold uppercase tracking-wider block mb-2 text-slate-400">Technology Stack</span>
                            <div class="flex flex-wrap gap-1.5 sm:gap-2">
                                @foreach(['Python', 'LangChain', 'OpenAI API', 'FastAPI', 'Chunking Engine'] as $tech)
                                <span class="px-2.5 py-1 rounded-lg text-xs font-semibold"
                                      style="background: rgba(6,182,212,0.15); color: #67E8F9; border: 1px solid rgba(103,232,249,0.3);">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Right Content Panel (White) --}}
                    <div class="lg:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6 sm:mb-8">
                                <span class="text-xs font-extrabold uppercase tracking-widest text-cyan">Execution Pipeline</span>
                                <span class="text-xs font-mono font-bold text-slate-400">4-Stage Autonomous Flow</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-6 mb-6 sm:mb-8">
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">01</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Upload a PDF</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Drop complex PDF documents &mdash; agreements, financial tables, filings &mdash; directly into the parser.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">02</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">AI Extraction</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">LangChain orchestrates semantic chunking and entity classification, capturing tables and key clauses.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">03</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Contextual Summary</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Generates executive briefs, risk flags, and highlighted legal/technical obligations automatically.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">04</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Q&amp;A Interface</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Ask natural questions about the file and receive verified source citations with exact line numbers.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-5 sm:pt-6 border-t flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                            <span class="text-xs font-mono text-center sm:text-left" style="color:#94A3B8;">Status: Active Incubation Cohort</span>
                            <a href="{{ route('contact') }}"
                               class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 11px 24px; font-size: 13px;">
                                Request Architecture Walkthrough
                                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- DEMO CARD 2: AI Support Agent --}}
            <div class="demo-card bg-white rounded-2xl sm:rounded-3xl border shadow-sm overflow-hidden"
                 style="border: 1.5px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.03);"
                 data-animate>
                <div class="grid grid-cols-1 lg:grid-cols-12">

                    {{-- Left Accent Panel (Deep Navy) --}}
                    <div class="lg:col-span-5 p-6 sm:p-8 lg:p-10 flex flex-col justify-between text-white relative overflow-hidden"
                         style="background: linear-gradient(145deg, #072B40 0%, #062538 60%, #083752 100%); border-right: 1.5px solid rgba(6,182,212,0.2);">
                        
                        <div style="position:absolute;top:0;right:0;width:200px;height:200px;background:radial-gradient(circle,rgba(6,182,212,0.18),transparent 70%);pointer-events:none;"></div>

                        <div>
                            {{-- Header Badges --}}
                            <div class="flex flex-wrap items-center gap-2 mb-4 sm:mb-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase text-white"
                                      style="background: #06B6D4; box-shadow: 0 2px 10px rgba(6,182,212,0.35);">
                                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                    AGENTIC WORKFLOW
                                </span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase"
                                      style="background: rgba(255,255,255,0.08); color: #67E8F9; border: 1px solid rgba(103,232,249,0.3);">
                                    RAG &bull; Multi-Turn
                                </span>
                            </div>

                            {{-- Icon --}}
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl flex items-center justify-center mb-4 sm:mb-6"
                                 style="background: rgba(6,182,212,0.2); border: 1.5px solid #06B6D4; box-shadow: 0 0 18px rgba(6,182,212,0.35);">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/>
                                </svg>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold mb-2 sm:mb-3" style="color: #67E8F9; font-family:'Plus Jakarta Sans',sans-serif;">
                                AI Support Agent
                            </h3>
                            <p class="text-xs sm:text-sm leading-relaxed mb-5 sm:mb-6" style="color:#CBD5E1;">
                                A multi-turn assistant grounded in complex enterprise documentation through retrieval. Eliminates hallucinations with strict vector semantic boundaries.
                            </p>

                            {{-- Live Dialogue Preview Mockup --}}
                            <div class="rounded-xl p-3.5 sm:p-4 mb-5 sm:mb-6 text-xs space-y-2 overflow-x-auto"
                                 style="background: rgba(3, 18, 28, 0.7); border: 1px solid rgba(6,182,212,0.3);">
                                <div class="flex items-start gap-2">
                                    <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-slate-700 text-slate-300">USER</span>
                                    <span class="text-slate-300">How do we enforce automated rollbacks on Gate G4 failures?</span>
                                </div>
                                <div class="flex items-start gap-2 pt-2 border-t border-slate-700/50">
                                    <span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-cyan-500/30 text-cyan-300">AGENT</span>
                                    <span class="text-cyan-200">Gate G4 deployment runbooks execute automated canary validation. On error rate &gt;0.05%, blue/green switches instantly.</span>
                                </div>
                            </div>
                        </div>

                        {{-- Technology Stack --}}
                        <div class="pt-2">
                            <span class="text-[11px] font-bold uppercase tracking-wider block mb-2 text-slate-400">Technology Stack</span>
                            <div class="flex flex-wrap gap-1.5 sm:gap-2">
                                @foreach(['OpenAI API', 'LangChain', 'Vector DB', 'React', 'FastAPI'] as $tech)
                                <span class="px-2.5 py-1 rounded-lg text-xs font-semibold"
                                      style="background: rgba(6,182,212,0.15); color: #67E8F9; border: 1px solid rgba(103,232,249,0.3);">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Right Content Panel (White) --}}
                    <div class="lg:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6 sm:mb-8">
                                <span class="text-xs font-extrabold uppercase tracking-widest text-cyan">Retrieval &amp; Logic Flow</span>
                                <span class="text-xs font-mono font-bold text-slate-400">Zero Hallucination Standard</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-6 mb-6 sm:mb-8">
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">01</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Knowledge Ingestion</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Internal engineering wikis and API specs are chunked and embedded into high-dimensional vector spaces.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">02</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Intent &amp; Routing</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Queries are analyzed for semantic context and session history, discarding conversational noise.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">03</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Grounded RAG</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Relevant document chunks are retrieved with cosine similarity &gt;0.85 and injected into the execution context.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">04</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Human Escalation</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">If confidence drops below threshold, the conversation transitions to senior engineering leads seamlessly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-5 sm:pt-6 border-t flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                            <span class="text-xs font-mono text-center sm:text-left" style="color:#94A3B8;">Status: In-House Enterprise Beta</span>
                            <a href="{{ route('contact') }}"
                               class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 11px 24px; font-size: 13px;">
                                Discuss Agent Integration
                                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {{-- DEMO CARD 3: Analytics Dashboard (Recommended Fit) --}}
            <div class="demo-card bg-white rounded-2xl sm:rounded-3xl border shadow-sm overflow-hidden"
                 style="border: 2px solid #06B6D4; box-shadow: 0 16px 40px rgba(6,182,212,0.12);"
                 data-animate>
                <div class="grid grid-cols-1 lg:grid-cols-12">

                    {{-- Left Accent Panel (Deep Navy) --}}
                    <div class="lg:col-span-5 p-6 sm:p-8 lg:p-10 flex flex-col justify-between text-white relative overflow-hidden"
                         style="background: linear-gradient(145deg, #072B40 0%, #062538 60%, #083752 100%); border-right: 1.5px solid rgba(6,182,212,0.3);">
                        
                        <div style="position:absolute;top:0;right:0;width:200px;height:200px;background:radial-gradient(circle,rgba(6,182,212,0.22),transparent 70%);pointer-events:none;"></div>

                        <div>
                            {{-- Header Badges --}}
                            <div class="flex flex-wrap items-center gap-2 mb-4 sm:mb-6">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-extrabold tracking-wider uppercase text-white"
                                      style="background: #06B6D4; box-shadow: 0 4px 14px rgba(6,182,212,0.45);">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    RECOMMENDED FIT
                                </span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase"
                                      style="background: rgba(255,255,255,0.08); color: #67E8F9; border: 1px solid rgba(103,232,249,0.3);">
                                    Streaming Data &bull; Live KPIs
                                </span>
                            </div>

                            {{-- Icon --}}
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl flex items-center justify-center mb-4 sm:mb-6"
                                 style="background: rgba(6,182,212,0.25); border: 1.5px solid #06B6D4; box-shadow: 0 0 20px rgba(6,182,212,0.45);">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                </svg>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold mb-2 sm:mb-3" style="color: #67E8F9; font-family:'Plus Jakarta Sans',sans-serif;">
                                Analytics Dashboard
                            </h3>
                            <p class="text-xs sm:text-sm leading-relaxed mb-5 sm:mb-6" style="color:#CBD5E1;">
                                High-density operational and revenue telemetry on a streaming pipeline architecture. Interactive multi-level drilldown built for enterprise decision-makers.
                            </p>

                            {{-- Live Streaming Chart Mockup --}}
                            <div class="rounded-xl p-3.5 sm:p-4 mb-5 sm:mb-6 overflow-hidden"
                                 style="background: rgba(3, 18, 28, 0.7); border: 1px solid rgba(6,182,212,0.3);">
                                <div class="flex items-center justify-between text-xs font-mono mb-2">
                                    <span class="text-cyan-300">Throughput: 142.8k req/s</span>
                                    <span class="text-emerald-400 font-bold">&bull; LIVE</span>
                                </div>
                                <svg class="w-full h-10 sm:h-12 text-cyan" viewBox="0 0 280 48" fill="none">
                                    <path d="M0 38 L30 32 L60 36 L90 20 L120 26 L150 12 L180 18 L210 6 L240 14 L280 4"
                                          stroke="#06B6D4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M0 38 L30 32 L60 36 L90 20 L120 26 L150 12 L180 18 L210 6 L240 14 L280 4 L280 48 L0 48 Z"
                                          fill="url(#cyanGlowGrad)" opacity="0.25"/>
                                    <defs>
                                        <linearGradient id="cyanGlowGrad" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#06B6D4"/>
                                            <stop offset="100%" stop-color="#062538" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>

                        {{-- Technology Stack --}}
                        <div class="pt-2">
                            <span class="text-[11px] font-bold uppercase tracking-wider block mb-2 text-slate-400">Technology Stack</span>
                            <div class="flex flex-wrap gap-1.5 sm:gap-2">
                                @foreach(['React 19', 'TypeScript', 'D3.js', 'PostgreSQL', 'Streaming Pipeline'] as $tech)
                                <span class="px-2.5 py-1 rounded-lg text-xs font-semibold"
                                      style="background: rgba(6,182,212,0.15); color: #67E8F9; border: 1px solid rgba(103,232,249,0.3);">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Right Content Panel (White) --}}
                    <div class="lg:col-span-7 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6 sm:mb-8">
                                <span class="text-xs font-extrabold uppercase tracking-widest text-cyan">Streaming Architecture</span>
                                <span class="text-xs font-mono font-bold text-slate-400">Low Latency Telemetry</span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-6 mb-6 sm:mb-8">
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">01</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Live Data Feed</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">A high-frequency pipeline ingests operational telemetry, transactions, and service health metrics continuously.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">02</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">D3.js Visualisation</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Real-time rendering of time-series graphs, scatter distributions, and cohort heatmaps with zero UI stutter.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">03</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Granular Drilldown</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Click through high-level KPIs down to specific microservices, error spikes, and customer journey bottlenecks.</p>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <span class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-black mb-2 text-cyan bg-cyan-50 border border-cyan-200">04</span>
                                    <h4 class="font-bold text-sm mb-1" style="color:#062538;">Executive Signals</h4>
                                    <p class="text-xs leading-relaxed" style="color:#5A7184;">Machine learning anomaly detectors flag regressions before they impact end-user SLAs or revenue.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-5 sm:pt-6 border-t flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                            <span class="text-xs font-mono text-center sm:text-left" style="color:#94A3B8;">Recommended Engineering Showcase</span>
                            <a href="{{ route('contact') }}"
                               class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 11px 24px; font-size: 13px;">
                                Explore Analytics Pipeline
                                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- Incubation Partnership Banner (Responsive) --}}
        <div class="mt-12 sm:mt-16 rounded-2xl sm:rounded-3xl p-6 sm:p-8 lg:p-12 relative overflow-hidden"
             style="background: linear-gradient(135deg, #062538 0%, #0A2D44 60%, #083752 100%); border: 1.5px solid rgba(6,182,212,0.35); box-shadow: 0 20px 50px rgba(6,37,56,0.3);"
             data-animate>
            <div style="position:absolute;top:0;right:0;width:300px;height:300px;background:radial-gradient(circle,rgba(6,182,212,0.18),transparent 70%);pointer-events:none;"></div>
            
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-6 sm:gap-8">
                <div class="max-w-2xl text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider mb-3 sm:mb-4"
                          style="background: rgba(6,182,212,0.15); color: #67E8F9; border: 1px solid rgba(6,182,212,0.4);">
                        <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                        Cenrion Labs Incubation
                    </span>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-white mb-2 sm:mb-3" style="font-family:'Plus Jakarta Sans',sans-serif;">
                        Have an ambitious AI or product concept?
                    </h3>
                    <p class="text-xs sm:text-sm lg:text-base leading-relaxed" style="color:#94A3B8;">
                        We co-build with visionary founders and enterprises. Hand us a complex problem, and our team will build a working, production-grade proof of concept in 2 weeks &mdash; proven by code, not slides.
                    </p>
                </div>
                <div class="w-full sm:w-auto shrink-0">
                    <a href="{{ route('contact') }}"
                       class="btn-accent w-full sm:w-auto text-center justify-center px-8 py-3.5 sm:py-4 text-sm font-bold shadow-lg"
                       style="background: #06B6D4; color: #FFFFFF; box-shadow: 0 4px 18px rgba(6,182,212,0.4);">
                        Propose a Labs Project &rarr;
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- =====================================================================
     BOTTOM CTA BANNER (RESPONSIVE)
     ===================================================================== --}}
<section class="py-16 sm:py-24" style="background-color:#062538;">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 sm:px-8 lg:px-10 text-center">
        <div class="inline-flex items-center gap-2 mb-4 sm:mb-6">
            <div class="h-px w-6 sm:w-8" style="background-color:#06B6D4;"></div>
            <span class="text-xs sm:text-sm font-semibold tracking-widest uppercase" style="color:#06B6D4;">Let's Build Together</span>
            <div class="h-px w-6 sm:w-8" style="background-color:#06B6D4;"></div>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white mb-4 sm:mb-6" style="font-family:'Plus Jakarta Sans',sans-serif;">
            Seen enough? Let's talk about your problem.
        </h2>
        <p class="text-base sm:text-lg lg:text-xl mb-8 sm:mb-10 max-w-2xl mx-auto" style="color:#94A3B8;">
            These demonstrations are just a taste of what we engineer. Tell us what you're trying to solve and we'll show you what's possible with Glass Box rigor.
        </p>
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 sm:gap-4">
            <a href="{{ route('contact') }}"
               class="btn-accent w-full sm:w-auto text-center justify-center px-8 sm:px-9 py-3.5 sm:py-4 rounded-xl text-white font-bold text-base shadow-lg"
               style="background-color:#06B6D4; box-shadow: 0 4px 18px rgba(6,182,212,0.35);">
                Talk to Us
                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
            <a href="{{ route('solutions') }}"
               class="w-full sm:w-auto text-center justify-center px-7 sm:px-8 py-3.5 sm:py-4 rounded-xl text-white font-semibold text-base transition-all duration-200 hover:text-cyan border"
               style="border-color: rgba(255,255,255,0.15); background: rgba(255,255,255,0.05);">
                Explore Solutions
            </a>
        </div>
    </div>
</section>

@endsection
