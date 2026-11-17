@extends('layouts.app')

@section('title', 'About')
@section('meta_description', 'About Cenrion Technologies — 16+ years of global software delivery. AI speed with engineering accountability.')

@push('styles')
<style>
    .about-glow {
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(6,182,212,0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }
    .about-card-hover {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .about-card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(6,37,56,0.1);
    }
</style>
@endpush

@section('content')

{{-- ============================================================
     HERO SECTION: Founder Rigor & Global Delivery Architecture
     ============================================================ --}}
<section class="home-hero relative overflow-hidden pt-8 pb-16 lg:pt-12 lg:pb-20" style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 100%);">
    <div class="home-hero-glow" aria-hidden="true"></div>
    <div class="about-glow" style="top: -100px; right: -100px;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
            
            {{-- Left column: Copy & CTAs --}}
            <div class="lg:col-span-7">
                <div class="inline-flex items-center gap-2 mb-4" data-animate data-delay="40">
                    <span class="inline-block w-5 h-px" style="background:#06B6D4;"></span>
                    <span class="section-tag">WHO WE ARE &bull; 16+ YEARS GLOBAL DELIVERY RIGOR</span>
                </div>

                <h1 class="font-extrabold tracking-tight mb-5 leading-[1.1]"
                    style="font-size:clamp(2.5rem,4.5vw,4.1rem); color:#062538; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.03em;"
                    data-animate data-delay="80">
                    Glass box engineering,<br>
                    <span class="gradient-text">led by delivery rigor.</span>
                </h1>

                <p class="text-lg lg:text-xl leading-relaxed mb-8 max-w-2xl"
                   style="color:#5A7184;" data-animate data-delay="120">
                    For 16+ years our founder has steered software from requirement to worldwide production release.
                    Cenrion exists to close the dangerous gap between rapid AI code generation and dependable enterprise engineering.
                </p>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 mb-10" data-animate data-delay="160">
                    <a href="{{ route('contact') }}" class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 14px 30px; font-size: 15px;">
                        Talk to Us
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#founder-track"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5 w-full sm:w-auto text-center"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        Founder Track Record
                        <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </a>
                </div>

                {{-- Global Stats --}}
                <div class="grid grid-cols-3 gap-4 pt-6 border-t" style="border-color: #E2EAF4;" data-animate data-delay="200">
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">100+</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Projects Shipped</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">16+</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Years Track Record</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">7</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Global Markets</div>
                    </div>
                </div>
            </div>

            {{-- Right column: Founder & Global Architecture Console --}}
            <div class="lg:col-span-5" data-animate data-delay="100">
                <div class="rounded-3xl p-6 lg:p-7 relative overflow-hidden"
                     style="background: linear-gradient(145deg, #072B40 0%, #062538 60%, #09344D 100%); border: 2px solid rgba(6,182,212,0.35); box-shadow: 0 24px 60px rgba(6,37,56,0.38), 0 0 30px rgba(6,182,212,0.15);">
                    
                    <div style="position:absolute;top:-40px;right:-40px;width:200px;height:200px;background:radial-gradient(circle,rgba(6,182,212,0.25),transparent 70%);pointer-events:none;"></div>

                    {{-- Window Header --}}
                    <div class="flex items-center justify-between pb-4 mb-5 border-b border-white/10">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-cyan-400"></span>
                            <span class="w-3 h-3 rounded-full bg-indigo-400"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                            <span class="text-xs font-mono font-semibold ml-2 text-cyan-200">cenrion-governance.sys</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold tracking-wide uppercase"
                              style="background: rgba(6,182,212,0.18); border: 1px solid rgba(6,182,212,0.4); color: #67E8F9;">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                            Delivery Leadership
                        </span>
                    </div>

                    {{-- Founder Credential Card --}}
                    <div class="p-4 rounded-2xl mb-4 border" style="background: rgba(10,45,68,0.7); border: 1px solid rgba(6,182,212,0.25);">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-cyan-300">Executive Leadership</span>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-cyan-900/60 text-cyan-200 border border-cyan-500/30">Founder &bull; Delivery</span>
                        </div>
                        <h4 class="text-base font-bold text-white mb-1">M.S. Ansari</h4>
                        <p class="text-xs text-gray-300 leading-relaxed mb-3">
                            Senior Delivery Manager &bull; Former QE Lead &amp; SDET Architect
                        </p>
                        <blockquote class="text-xs italic text-cyan-200 border-l-2 border-cyan pl-2.5 py-0.5">
                            &ldquo;Speed without verification is just risk delivered sooner.&rdquo;
                        </blockquote>
                    </div>

                    {{-- Global Footprint Telemetry Chips --}}
                    <div class="p-3.5 rounded-xl border mb-3" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                        <div class="text-[10px] font-mono uppercase text-gray-400 mb-1.5">Global Client Reach</div>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['United States', 'Switzerland', 'Germany', 'United Kingdom', 'Austria', 'Poland', 'South Africa'] as $ctry)
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-cyan-950/70 text-cyan-300 border border-cyan-500/20">
                                {{ $ctry }}
                            </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">Release Gates</span>
                            <span class="text-cyan-300 font-bold">100% Gated</span>
                        </div>
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">Client Retention</span>
                            <span class="text-emerald-400 font-bold">Multi-Year &check;</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     FOUNDER NOTE SECTION
     ============================================================ --}}
<section class="bg-white py-24 relative overflow-hidden">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            
            <div data-animate>
                <span class="section-tag block mb-3">A Note from the Founder</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-5" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                    Why I started Cenrion
                </h2>
                <p class="text-lg leading-relaxed mb-4" style="color:#5A7184;">
                    For 16+ years I have delivered software, growing from software engineer to SDET,
                    Quality Engineering Manager and Senior Delivery Manager. My clients span the US,
                    Switzerland, Germany, Austria, Poland, the UK and South Africa.
                </p>
                <p class="text-lg leading-relaxed mb-6" style="color:#5A7184;">
                    AI now writes code faster than most teams can review it. Clients still need software
                    that works before it goes live and scales after it does. Cenrion exists to deliver both.
                </p>
                <blockquote class="text-xl font-bold leading-snug mb-3" style="color:#062538;">
                    &ldquo;Speed without verification is just risk delivered sooner.&rdquo;
                </blockquote>
                <p class="text-sm font-bold text-cyan">M.S. Ansari &bull; Founder, Cenrion Technologies</p>
            </div>

            <div class="grid sm:grid-cols-2 gap-5" data-animate data-delay="80">
                <div class="p-8 rounded-3xl border about-card-hover"
                     style="background: #F8FAFC; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <p class="text-4xl font-extrabold mb-2" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">100+</p>
                    <p class="text-sm font-bold mb-1" style="color:#062538;">Projects Delivered</p>
                    <p class="text-xs" style="color:#5A7184;">From first architectural requirement to worldwide deployment.</p>
                </div>
                <div class="p-8 rounded-3xl border about-card-hover"
                     style="background: #F8FAFC; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                    <p class="text-4xl font-extrabold mb-2" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">16+</p>
                    <p class="text-sm font-bold mb-1" style="color:#062538;">Years of Delivery</p>
                    <p class="text-xs" style="color:#5A7184;">Deep software engineering and client delivery governance.</p>
                </div>
                <div class="p-8 rounded-3xl border sm:col-span-2 about-card-hover"
                     style="background: linear-gradient(135deg, #FFFFFF 0%, #F0FDFA 100%); border: 2px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.08);">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan"></span>
                        <p class="text-sm font-bold" style="color:#062538;">Global Delivery Standards</p>
                    </div>
                    <p class="text-xs leading-relaxed" style="color:#5A7184;">
                        Trusted partner for engineering leaders across the United States, Switzerland, Germany, Austria, Poland, United Kingdom, and South Africa.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     FOUNDER CAREER TIMELINE (2012–2026 Pipeline)
     ============================================================ --}}
<section id="founder-track" class="py-24" style="background:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        
        <div class="text-center mb-14" data-animate>
            <span class="section-tag block mb-3">Founder Track Record &bull; 2012&ndash;2026</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                From Hands-On Engineer to Global Delivery Leader
            </h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach([
                ['2012', 'Software Engineer', '#06B6D4'],
                ['2014', 'SDET Engineer', '#0891B2'],
                ['2017', 'Specialization Lead, SDET', '#6366F1'],
                ['2021', 'QE Manager', '#8B5CF6'],
                ['2023', 'Delivery Manager', '#F59E0B'],
                ['2025+', 'Senior Delivery Manager', '#10B981'],
            ] as $i => $role)
            <div class="p-6 rounded-3xl bg-white border text-center relative overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"
                 style="border: 1.5px solid #E2EAF4;" data-animate data-delay="{{ $i * 60 }}">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:{{ $role[2] }};"></div>
                <span class="inline-flex px-3 py-1 rounded-full text-xs font-black uppercase mb-3 text-white"
                      style="background: {{ $role[2] }};">
                    {{ $role[0] }}
                </span>
                <p class="text-sm font-bold" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">{{ $role[1] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ============================================================
     MISSION & VISION SECTION
     ============================================================ --}}
<section class="bg-white py-24">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">

            {{-- Mission Card --}}
            <div class="p-10 rounded-3xl border relative overflow-hidden flex flex-col justify-between"
                 style="background: linear-gradient(145deg, #072B40 0%, #062538 100%); border: 2px solid rgba(6,182,212,0.35); box-shadow: 0 16px 40px rgba(6,37,56,0.25);"
                 data-animate>
                <div>
                    <span class="section-tag block mb-4 text-cyan-300">Our Mission</span>
                    <blockquote class="text-2xl lg:text-3xl font-extrabold text-white leading-snug mb-6" style="font-family:'Plus Jakarta Sans',sans-serif;">
                        &ldquo;To be the engineering partner that makes technology work for business &mdash; with intelligence, precision, and radical transparency.&rdquo;
                    </blockquote>
                </div>
                <div class="flex items-center gap-3 pt-6 border-t border-white/10">
                    <span class="w-8 h-1 bg-cyan rounded-full"></span>
                    <span class="text-xs font-mono uppercase text-gray-300">Cenrion Core Purpose</span>
                </div>
            </div>

            {{-- Vision Card --}}
            <div class="p-10 rounded-3xl border relative overflow-hidden flex flex-col justify-between bg-white"
                 style="border: 2px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.03);"
                 data-animate data-delay="100">
                <div>
                    <span class="section-tag block mb-4">Our Vision</span>
                    <p class="text-lg lg:text-xl font-bold mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        A true engineering partner, not just another vendor.
                    </p>
                    <p class="text-sm leading-relaxed mb-4" style="color:#5A7184;">
                        We're building a team of engineers who combine technical mastery with the discernment to understand business drivers. In an industry full of agencies eager to say yes to bad ideas, Cenrion is built to give you the honest truth.
                    </p>
                    <p class="text-sm leading-relaxed" style="color:#5A7184;">
                        We work closely, communicate with clarity, and aren't afraid to say when an approach carries unacceptable risk.
                    </p>
                </div>
                <div class="flex items-center gap-3 pt-6 border-t" style="border-color:#E2EAF4;">
                    <span class="w-8 h-1 bg-cyan rounded-full"></span>
                    <span class="text-xs font-bold text-navy" style="color:#062538;">Honesty as a First-Class Feature</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     CORE VALUES SECTION (Deep Navy)
     ============================================================ --}}
<section class="py-24 relative overflow-hidden" style="background:#062538;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-16" data-animate>
            <span class="section-tag block mb-3 text-cyan-300">What Drives Us</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight" style="font-family:'Plus Jakarta Sans',sans-serif;">
                Cenrion Engineering Principles
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            {{-- Craftsmanship --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="0">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#06B6D4;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(6,182,212,0.18); border: 1.5px solid #06B6D4;">
                    <svg class="w-6 h-6 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>
                    </svg>
                </div>
                <span class="text-xs font-mono text-cyan block mb-1">01 &bull; STANDARD</span>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Craftsmanship</h3>
                <p class="text-xs leading-relaxed text-gray-400">Quality code and architectural integrity that compounds value over time.</p>
            </div>

            {{-- Transparency --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(99,102,241,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="80">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#6366F1;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(99,102,241,0.18); border: 1.5px solid #6366F1;">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                    </svg>
                </div>
                <span class="text-xs font-mono text-indigo-400 block mb-1">02 &bull; CULTURE</span>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Transparency</h3>
                <p class="text-xs leading-relaxed text-gray-400">No surprises. Full clarity on progress, architecture risks, and budget.</p>
            </div>

            {{-- Innovation --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(168,85,247,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="160">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#A855F7;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(168,85,247,0.18); border: 1.5px solid #A855F7;">
                    <svg class="w-6 h-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <span class="text-xs font-mono text-purple-400 block mb-1">03 &bull; EDGE</span>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Innovation</h3>
                <p class="text-xs leading-relaxed text-gray-400">Exploring AI tools and distributed primitives that give real business leverage.</p>
            </div>

            {{-- Delivery --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(16,185,129,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="240">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#10B981;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(16,185,129,0.18); border: 1.5px solid #10B981;">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>
                    </svg>
                </div>
                <span class="text-xs font-mono text-emerald-400 block mb-1">04 &bull; OUTCOME</span>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Delivery Rigor</h3>
                <p class="text-xs leading-relaxed text-gray-400">Ideas matter only when shipped on time, verified at gates, and scaling.</p>
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     TECHNOLOGY EXPERTISE SECTION (Redesigned & Modernized)
     ============================================================ --}}
<section class="py-24 sm:py-28 relative overflow-hidden" style="background: linear-gradient(180deg, #F8FAFD 0%, #EEF4FA 100%);">
    {{-- Subtle Blueprint Grid Pattern --}}
    <div class="absolute inset-0 pointer-events-none opacity-40"
         style="background-image: radial-gradient(rgba(6,182,212,0.18) 1.2px, transparent 1.2px); background-size: 28px 28px;"></div>
    
    {{-- Ambient Glow Orbs --}}
    <div class="absolute -top-32 left-1/4 w-96 h-96 rounded-full pointer-events-none opacity-20"
         style="background: radial-gradient(circle, #06B6D4 0%, transparent 70%); filter: blur(50px);"></div>
    <div class="absolute -bottom-32 right-1/4 w-96 h-96 rounded-full pointer-events-none opacity-15"
         style="background: radial-gradient(circle, #6366F1 0%, transparent 70%); filter: blur(50px);"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        
        {{-- Section Header --}}
        <div class="text-center mb-16 sm:mb-20" data-animate>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase mb-4"
                 style="background: rgba(6,182,212,0.08); border: 1.5px solid rgba(6,182,212,0.25); color: #0891B2;">
                <span class="w-2 h-2 rounded-full animate-pulse" style="background: #06B6D4; box-shadow: 0 0 8px #06B6D4;"></span>
                Production-Grade Stack
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4"
                style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">
                Technologies We <span class="gradient-text">Master.</span>
            </h2>
            <p class="text-sm sm:text-base text-slate-500 max-w-2xl mx-auto leading-relaxed">
                Selected strictly for production performance, enterprise maintainability, and developer throughput. Every framework and tool in our stack is proven under real load.
            </p>
        </div>

        {{-- 6-Pillar Interactive Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 lg:gap-8">
            
            {{-- 1. AI & Machine Learning --}}
            <div class="group rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                 style="background: linear-gradient(165deg, #FFFFFF 0%, #FBFDFF 70%, #F0FDFA 100%); border: 1.5px solid rgba(6,182,212,0.28); box-shadow: 0 12px 32px rgba(6,37,56,0.04);"
                 data-animate data-delay="0">
                <div class="absolute top-0 left-0 right-0 h-1" style="background: linear-gradient(90deg, #06B6D4, #22D3EE);"></div>
                <div class="absolute top-0 right-0 w-36 h-36 rounded-full pointer-events-none opacity-40 group-hover:opacity-70 transition-opacity"
                     style="background: radial-gradient(circle, rgba(6,182,212,0.18), transparent 70%);"></div>

                <div>
                    {{-- Card Header --}}
                    <div class="flex items-start justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3.5">
                            <div class="w-13 h-13 rounded-2xl flex items-center justify-center shrink-0 p-3 shadow-sm transition-transform duration-300 group-hover:scale-110"
                                 style="background: linear-gradient(135deg, rgba(6,182,212,0.18) 0%, rgba(6,182,212,0.08) 100%); border: 1.5px solid rgba(6,182,212,0.35);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest block" style="color: #0891B2;">Intelligence</span>
                                <h3 class="font-extrabold text-lg sm:text-xl" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">AI &amp; Machine Learning</h3>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full"
                              style="background: rgba(6,182,212,0.1); color: #0891B2; border: 1px solid rgba(6,182,212,0.25);">6 Tools</span>
                    </div>

                    {{-- Technology Chips Grid --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach([
                            ['name' => 'Python', 'highlight' => true],
                            ['name' => 'PyTorch', 'highlight' => true],
                            ['name' => 'LangChain', 'highlight' => false],
                            ['name' => 'OpenAI API', 'highlight' => false],
                            ['name' => 'Claude API', 'highlight' => false],
                            ['name' => 'Gemini API', 'highlight' => false],
                        ] as $tech)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 group-hover:border-cyan/40 hover:scale-105"
                              style="background: #FFFFFF; color: #0F172A; border: 1px solid #E2E8F0; box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                            <span class="w-1.5 h-1.5 rounded-full" style="background: #06B6D4;"></span>
                            {{ $tech['name'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Card Technical Footer --}}
                <div class="pt-3.5 border-t flex items-center justify-between text-[11px]" style="border-color: rgba(6,182,212,0.18);">
                    <span class="font-medium" style="color: #64748B;">LLM Fine-tuning &amp; Autonomous Agents</span>
                    <span class="font-bold flex items-center gap-1" style="color: #0891B2;">
                        Production Ready
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                </div>
            </div>

            {{-- 2. Frontend Engineering --}}
            <div class="group rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                 style="background: linear-gradient(165deg, #FFFFFF 0%, #FBFDFF 70%, #EEF2FF 100%); border: 1.5px solid rgba(99,102,241,0.25); box-shadow: 0 12px 32px rgba(6,37,56,0.04);"
                 data-animate data-delay="80">
                <div class="absolute top-0 left-0 right-0 h-1" style="background: linear-gradient(90deg, #6366F1, #818CF8);"></div>
                <div class="absolute top-0 right-0 w-36 h-36 rounded-full pointer-events-none opacity-40 group-hover:opacity-70 transition-opacity"
                     style="background: radial-gradient(circle, rgba(99,102,241,0.18), transparent 70%);"></div>

                <div>
                    {{-- Card Header --}}
                    <div class="flex items-start justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3.5">
                            <div class="w-13 h-13 rounded-2xl flex items-center justify-center shrink-0 p-3 shadow-sm transition-transform duration-300 group-hover:scale-110"
                                 style="background: linear-gradient(135deg, rgba(99,102,241,0.18) 0%, rgba(99,102,241,0.08) 100%); border: 1.5px solid rgba(99,102,241,0.35);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#4F46E5" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest block text-indigo-600">User Experience</span>
                                <h3 class="font-extrabold text-lg sm:text-xl" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Frontend Engineering</h3>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full text-indigo-700"
                              style="background: rgba(99,102,241,0.1); border: 1px solid rgba(99,102,241,0.25);">5 Frameworks</span>
                    </div>

                    {{-- Technology Chips Grid --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach([
                            ['name' => 'React 19', 'highlight' => true],
                            ['name' => 'Next.js', 'highlight' => true],
                            ['name' => 'TypeScript', 'highlight' => true],
                            ['name' => 'Tailwind CSS', 'highlight' => false],
                            ['name' => 'Alpine.js', 'highlight' => false],
                        ] as $tech)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 group-hover:border-indigo-300 hover:scale-105"
                              style="background: #FFFFFF; color: #0F172A; border: 1px solid #E2E8F0; box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                            {{ $tech['name'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Card Technical Footer --}}
                <div class="pt-3.5 border-t flex items-center justify-between text-[11px]" style="border-color: rgba(99,102,241,0.18);">
                    <span class="font-medium" style="color: #64748B;">Core Web Vitals &amp; Sub-second FCP</span>
                    <span class="font-bold flex items-center gap-1 text-indigo-600">
                        Score 98+
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                </div>
            </div>

            {{-- 3. Backend & APIs --}}
            <div class="group rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                 style="background: linear-gradient(165deg, #FFFFFF 0%, #FBFDFF 70%, #ECFDF5 100%); border: 1.5px solid rgba(16,185,129,0.28); box-shadow: 0 12px 32px rgba(6,37,56,0.04);"
                 data-animate data-delay="160">
                <div class="absolute top-0 left-0 right-0 h-1" style="background: linear-gradient(90deg, #10B981, #34D399);"></div>
                <div class="absolute top-0 right-0 w-36 h-36 rounded-full pointer-events-none opacity-40 group-hover:opacity-70 transition-opacity"
                     style="background: radial-gradient(circle, rgba(16,185,129,0.18), transparent 70%);"></div>

                <div>
                    {{-- Card Header --}}
                    <div class="flex items-start justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3.5">
                            <div class="w-13 h-13 rounded-2xl flex items-center justify-center shrink-0 p-3 shadow-sm transition-transform duration-300 group-hover:scale-110"
                                 style="background: linear-gradient(135deg, rgba(16,185,129,0.18) 0%, rgba(16,185,129,0.08) 100%); border: 1.5px solid rgba(16,185,129,0.35);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#059669" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.75 5.1a3 3 0 0 1 2.4-1.35h7.7a3 3 0 0 1 2.4 1.35l2.1 3.45a4.5 4.5 0 0 1 .9 2.7" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest block text-emerald-600">Core Platform</span>
                                <h3 class="font-extrabold text-lg sm:text-xl" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Backend &amp; APIs</h3>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full text-emerald-700"
                              style="background: rgba(16,185,129,0.1); border: 1px solid rgba(16,185,129,0.25);">6 Engines</span>
                    </div>

                    {{-- Technology Chips Grid --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach([
                            ['name' => 'Laravel', 'highlight' => true],
                            ['name' => 'Node.js', 'highlight' => true],
                            ['name' => 'Go', 'highlight' => true],
                            ['name' => 'Python / FastAPI', 'highlight' => false],
                            ['name' => 'PostgreSQL', 'highlight' => false],
                            ['name' => 'Redis', 'highlight' => false],
                        ] as $tech)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 group-hover:border-emerald-300 hover:scale-105"
                              style="background: #FFFFFF; color: #0F172A; border: 1px solid #E2E8F0; box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            {{ $tech['name'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Card Technical Footer --}}
                <div class="pt-3.5 border-t flex items-center justify-between text-[11px]" style="border-color: rgba(16,185,129,0.18);">
                    <span class="font-medium" style="color: #64748B;">Microservices &amp; REST / GraphQL</span>
                    <span class="font-bold flex items-center gap-1 text-emerald-600">
                        99.99% SLA
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                </div>
            </div>

            {{-- 4. Cloud & DevOps --}}
            <div class="group rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                 style="background: linear-gradient(165deg, #FFFFFF 0%, #FBFDFF 70%, #FAF5FF 100%); border: 1.5px solid rgba(139,92,246,0.25); box-shadow: 0 12px 32px rgba(6,37,56,0.04);"
                 data-animate data-delay="0">
                <div class="absolute top-0 left-0 right-0 h-1" style="background: linear-gradient(90deg, #8B5CF6, #A78BFA);"></div>
                <div class="absolute top-0 right-0 w-36 h-36 rounded-full pointer-events-none opacity-40 group-hover:opacity-70 transition-opacity"
                     style="background: radial-gradient(circle, rgba(139,92,246,0.18), transparent 70%);"></div>

                <div>
                    {{-- Card Header --}}
                    <div class="flex items-start justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3.5">
                            <div class="w-13 h-13 rounded-2xl flex items-center justify-center shrink-0 p-3 shadow-sm transition-transform duration-300 group-hover:scale-110"
                                 style="background: linear-gradient(135deg, rgba(139,92,246,0.18) 0%, rgba(139,92,246,0.08) 100%); border: 1.5px solid rgba(139,92,246,0.35);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#7C3AED" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest block text-purple-600">Infrastructure</span>
                                <h3 class="font-extrabold text-lg sm:text-xl" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Cloud &amp; DevOps</h3>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full text-purple-700"
                              style="background: rgba(139,92,246,0.1); border: 1px solid rgba(139,92,246,0.25);">6 Platforms</span>
                    </div>

                    {{-- Technology Chips Grid --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach([
                            ['name' => 'AWS', 'highlight' => true],
                            ['name' => 'GCP', 'highlight' => true],
                            ['name' => 'Docker', 'highlight' => true],
                            ['name' => 'Kubernetes', 'highlight' => false],
                            ['name' => 'Terraform', 'highlight' => false],
                            ['name' => 'CI/CD Pipelines', 'highlight' => false],
                        ] as $tech)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 group-hover:border-purple-300 hover:scale-105"
                              style="background: #FFFFFF; color: #0F172A; border: 1px solid #E2E8F0; box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                            <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>
                            {{ $tech['name'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Card Technical Footer --}}
                <div class="pt-3.5 border-t flex items-center justify-between text-[11px]" style="border-color: rgba(139,92,246,0.18);">
                    <span class="font-medium" style="color: #64748B;">Terraform IaC &amp; Automated GitOps</span>
                    <span class="font-bold flex items-center gap-1 text-purple-600">
                        Zero Downtime
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                </div>
            </div>

            {{-- 5. Quality Engineering --}}
            <div class="group rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                 style="background: linear-gradient(165deg, #FFFFFF 0%, #FBFDFF 70%, #FFFBEB 100%); border: 1.5px solid rgba(245,158,11,0.28); box-shadow: 0 12px 32px rgba(6,37,56,0.04);"
                 data-animate data-delay="80">
                <div class="absolute top-0 left-0 right-0 h-1" style="background: linear-gradient(90deg, #F59E0B, #FBBF24);"></div>
                <div class="absolute top-0 right-0 w-36 h-36 rounded-full pointer-events-none opacity-40 group-hover:opacity-70 transition-opacity"
                     style="background: radial-gradient(circle, rgba(245,158,11,0.18), transparent 70%);"></div>

                <div>
                    {{-- Card Header --}}
                    <div class="flex items-start justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3.5">
                            <div class="w-13 h-13 rounded-2xl flex items-center justify-center shrink-0 p-3 shadow-sm transition-transform duration-300 group-hover:scale-110"
                                 style="background: linear-gradient(135deg, rgba(245,158,11,0.18) 0%, rgba(245,158,11,0.08) 100%); border: 1.5px solid rgba(245,158,11,0.35);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#D97706" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest block text-amber-600">Verification</span>
                                <h3 class="font-extrabold text-lg sm:text-xl" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Quality Engineering</h3>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full text-amber-700"
                              style="background: rgba(245,158,11,0.1); border: 1px solid rgba(245,158,11,0.25);">5 Frameworks</span>
                    </div>

                    {{-- Technology Chips Grid --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach([
                            ['name' => 'Playwright', 'highlight' => true],
                            ['name' => 'Selenium', 'highlight' => true],
                            ['name' => 'Cypress', 'highlight' => false],
                            ['name' => 'Appium', 'highlight' => false],
                            ['name' => 'Performance / k6', 'highlight' => true],
                        ] as $tech)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 group-hover:border-amber-300 hover:scale-105"
                              style="background: #FFFFFF; color: #0F172A; border: 1px solid #E2E8F0; box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                            {{ $tech['name'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Card Technical Footer --}}
                <div class="pt-3.5 border-t flex items-center justify-between text-[11px]" style="border-color: rgba(245,158,11,0.18);">
                    <span class="font-medium" style="color: #64748B;">Stress Testing &amp; Regression Harnesses</span>
                    <span class="font-bold flex items-center gap-1 text-amber-600">
                        Gate Certified
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                </div>
            </div>

            {{-- 6. Data & Pipelines --}}
            <div class="group rounded-3xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                 style="background: linear-gradient(165deg, #FFFFFF 0%, #FBFDFF 70%, #F0F9FF 100%); border: 1.5px solid rgba(2,132,199,0.28); box-shadow: 0 12px 32px rgba(6,37,56,0.04);"
                 data-animate data-delay="160">
                <div class="absolute top-0 left-0 right-0 h-1" style="background: linear-gradient(90deg, #0284C7, #38BDF8);"></div>
                <div class="absolute top-0 right-0 w-36 h-36 rounded-full pointer-events-none opacity-40 group-hover:opacity-70 transition-opacity"
                     style="background: radial-gradient(circle, rgba(2,132,199,0.18), transparent 70%);"></div>

                <div>
                    {{-- Card Header --}}
                    <div class="flex items-start justify-between gap-3 mb-5">
                        <div class="flex items-center gap-3.5">
                            <div class="w-13 h-13 rounded-2xl flex items-center justify-center shrink-0 p-3 shadow-sm transition-transform duration-300 group-hover:scale-110"
                                 style="background: linear-gradient(135deg, rgba(2,132,199,0.18) 0%, rgba(2,132,199,0.08) 100%); border: 1.5px solid rgba(2,132,199,0.35);">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="#0284C7" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest block text-sky-600">Data Architecture</span>
                                <h3 class="font-extrabold text-lg sm:text-xl" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Data &amp; Pipelines</h3>
                            </div>
                        </div>
                        <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full text-sky-700"
                              style="background: rgba(2,132,199,0.1); border: 1px solid rgba(2,132,199,0.25);">5 Platforms</span>
                    </div>

                    {{-- Technology Chips Grid --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach([
                            ['name' => 'Snowflake', 'highlight' => true],
                            ['name' => 'BigQuery', 'highlight' => true],
                            ['name' => 'Apache Kafka', 'highlight' => true],
                            ['name' => 'dbt', 'highlight' => false],
                            ['name' => 'Airflow', 'highlight' => false],
                        ] as $tech)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold transition-all duration-200 group-hover:border-sky-300 hover:scale-105"
                              style="background: #FFFFFF; color: #0F172A; border: 1px solid #E2E8F0; box-shadow: 0 1px 3px rgba(0,0,0,0.03);">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            {{ $tech['name'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Card Technical Footer --}}
                <div class="pt-3.5 border-t flex items-center justify-between text-[11px]" style="border-color: rgba(2,132,199,0.18);">
                    <span class="font-medium" style="color: #64748B;">ETL / ELT Pipelines &amp; Streaming Pub/Sub</span>
                    <span class="font-bold flex items-center gap-1 text-sky-600">
                        Petabyte Scale
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                    </span>
                </div>
            </div>

        </div>

        {{-- Bottom Assurance Bar --}}
        <div class="mt-14 p-6 sm:p-7 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-5 text-center md:text-left"
             style="background: #FFFFFF; border: 1.5px solid #E2EAF4; box-shadow: 0 10px 25px rgba(6,37,56,0.03);"
             data-animate>
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center shrink-0 hidden sm:flex"
                     style="background: rgba(6,182,212,0.1); border: 1px solid rgba(6,182,212,0.25);">
                    <svg class="w-5 h-5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-bold text-sm sm:text-base" style="color: #062538;">Have a custom architecture or proprietary stack?</h4>
                    <p class="text-xs sm:text-sm text-slate-500">We integrate with your existing cloud environment, security standards, and CI/CD pipelines.</p>
                </div>
            </div>
            <a href="{{ route('contact') }}"
               class="btn-accent px-6 py-3 text-xs sm:text-sm font-bold shrink-0 whitespace-nowrap shadow-sm hover:shadow-md transition-all">
                Discuss Your Architecture
                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

{{-- ============================================================
     BOTTOM CTA: Light White Background with Left & Right Accents
     ============================================================ --}}
<section class="py-14 sm:py-20 lg:py-28 relative overflow-hidden bg-white"
         style="background-image: radial-gradient(rgba(6,182,212,0.08) 1.5px, transparent 1.5px); background-size: 32px 32px;">
    
    <div style="position:absolute;left:-80px;top:20%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);border-radius:9999px;pointer-events:none;"></div>
    <div style="position:absolute;right:-80px;bottom:15%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);border-radius:9999px;pointer-events:none;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-4 sm:px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            {{-- Left Design Column --}}
            <div class="hidden lg:flex flex-col gap-5 lg:col-span-3 items-end" data-animate data-delay="100">
                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.1);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-cyan flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan animate-pulse"></span>
                            Leadership
                        </span>
                        <span class="text-xs font-mono font-bold" style="color: #0891B2;">Senior Led</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Hands-on Architecture</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Our leads architect, review code, and verify release gates.</p>
                </div>

                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(99,102,241,0.3); box-shadow: 0 10px 28px rgba(99,102,241,0.08);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-indigo-600 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                            Global Track
                        </span>
                        <span class="text-xs font-mono font-bold text-indigo-600">100+ Shipped</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Enterprise Scale</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Production platforms deployed across the US and Europe.</p>
                </div>

                <div class="flex items-center gap-2 pr-4 opacity-40">
                    <span class="h-px w-16 bg-cyan"></span>
                    <span class="w-2 h-2 rotate-45 border border-cyan bg-cyan-100"></span>
                </div>
            </div>

            {{-- Center Content Column --}}
            <div class="lg:col-span-6 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 rounded-2xl mb-5 sm:mb-6"
                     style="background: rgba(6,182,212,0.12); border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 4px 16px rgba(6,182,212,0.15);"
                     data-animate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="#06B6D4" stroke-width="2" class="w-6 h-6 sm:w-7 sm:h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>

                <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 sm:mb-5 leading-tight"
                    style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;" data-animate data-delay="80">
                    Let's discuss your<br>
                    <span class="gradient-text">engineering roadmap.</span>
                </h2>
                
                <p class="text-sm sm:text-base lg:text-lg mb-6 sm:mb-8 mx-auto leading-relaxed px-2" style="color: #5A7184; max-width: 580px;"
                   data-animate data-delay="160">
                    Speak directly with an engineering leader. We'll explore your architectural goals, delivery timelines, and how Cenrion can accelerate your team.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3.5 sm:gap-4"
                     data-animate data-delay="240">
                    <a href="{{ route('contact') }}" class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 14px 34px; font-size: 15px;">
                        Talk to Us
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="{{ route('solutions') }}"
                       class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5 hover:border-cyan w-full sm:w-auto text-center"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        Our Solutions
                        <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Design Column --}}
            <div class="hidden lg:flex flex-col gap-5 lg:col-span-3 items-start" data-animate data-delay="100">
                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(16,185,129,0.3); box-shadow: 0 10px 28px rgba(16,185,129,0.08);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-emerald-600 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            Quality Gate
                        </span>
                        <span class="text-xs font-mono font-bold text-emerald-600">Zero Black Box</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Transparent Deliverables</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Client keeps all architecture blueprints and audit artifacts.</p>
                </div>

                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.1);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-cyan flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan"></span>
                            Time to Value
                        </span>
                        <span class="text-xs font-mono font-bold" style="color: #0891B2;">2-Week Review</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Rapid Engineering Audit</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Fixed-scope review of your systems, bottlenecks, and stack.</p>
                </div>

                <div class="flex items-center gap-2 pl-4 opacity-40">
                    <span class="w-2 h-2 rotate-45 border border-cyan bg-cyan-100"></span>
                    <span class="h-px w-16 bg-cyan"></span>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
