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
     TECHNOLOGY EXPERTISE SECTION
     ============================================================ --}}
<section class="py-24" style="background:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        
        <div class="text-center mb-16" data-animate>
            <span class="section-tag block mb-3">Our Stack</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                Technologies We Master
            </h2>
            <p class="text-sm mt-3 text-gray-500 max-w-lg mx-auto">Selected strictly for production performance, enterprise maintainability, and developer throughput.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            {{-- AI & ML --}}
            <div class="bg-white rounded-3xl p-8 border about-card-hover" style="border: 1.5px solid #E2EAF4;">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-cyan/15 flex items-center justify-center text-cyan font-bold">AI</div>
                    <h3 class="font-bold text-lg" style="color:#062538;">AI &amp; Machine Learning</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Python', 'PyTorch', 'LangChain', 'OpenAI API', 'Claude API', 'Gemini API'] as $t)
                    <span class="px-3 py-1 rounded-full text-xs font-bold" style="background:rgba(6,182,212,0.1); color:#0891B2;">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Frontend --}}
            <div class="bg-white rounded-3xl p-8 border about-card-hover" style="border: 1.5px solid #E2EAF4;">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600 font-bold">FE</div>
                    <h3 class="font-bold text-lg" style="color:#062538;">Frontend Engineering</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['React', 'Next.js', 'TypeScript', 'Tailwind CSS', 'Alpine.js'] as $t)
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-indigo-50 text-indigo-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Backend --}}
            <div class="bg-white rounded-3xl p-8 border about-card-hover" style="border: 1.5px solid #E2EAF4;">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600 font-bold">BE</div>
                    <h3 class="font-bold text-lg" style="color:#062538;">Backend &amp; APIs</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Laravel', 'Node.js', 'Go', 'Python / FastAPI', 'PostgreSQL', 'Redis'] as $t)
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Cloud --}}
            <div class="bg-white rounded-3xl p-8 border about-card-hover" style="border: 1.5px solid #E2EAF4;">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 font-bold">OPS</div>
                    <h3 class="font-bold text-lg" style="color:#062538;">Cloud &amp; DevOps</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['AWS', 'GCP', 'Docker', 'Kubernetes', 'Terraform', 'CI/CD Pipelines'] as $t)
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-purple-50 text-purple-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Quality --}}
            <div class="bg-white rounded-3xl p-8 border about-card-hover" style="border: 1.5px solid #E2EAF4;">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 font-bold">QE</div>
                    <h3 class="font-bold text-lg" style="color:#062538;">Quality Engineering</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Playwright', 'Selenium', 'Cypress', 'Appium', 'Performance / k6'] as $t)
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Data --}}
            <div class="bg-white rounded-3xl p-8 border about-card-hover" style="border: 1.5px solid #E2EAF4;">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 font-bold">DATA</div>
                    <h3 class="font-bold text-lg" style="color:#062538;">Data &amp; Pipelines</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Snowflake', 'BigQuery', 'Apache Kafka', 'dbt', 'Airflow'] as $t)
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>

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
