@extends('layouts.app')

@section('title', 'Careers')
@section('meta_description', 'Join Cenrion Technologies. We are building an elite engineering team — AI in the loop, senior engineers in charge.')

@push('styles')
<style>
    .career-glow {
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(6,182,212,0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }
    .career-card-hover {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .career-card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(6,37,56,0.1);
    }
</style>
@endpush

@section('content')

{{-- ============================================================
     HERO SECTION: Hiring & Engineering Talent Architecture
     ============================================================ --}}
<section class="home-hero relative overflow-hidden pt-8 pb-16 lg:pt-12 lg:pb-20" style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 100%);">
    <div class="home-hero-glow" aria-hidden="true"></div>
    <div class="career-glow" style="top: -100px; right: -100px;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
            
            {{-- Left column: Copy & CTAs --}}
            <div class="lg:col-span-7">
                <div class="inline-flex items-center gap-2 mb-4" data-animate data-delay="40">
                    <span class="inline-block w-5 h-px" style="background:#06B6D4;"></span>
                    <span class="section-tag">ENGINEERING TALENT &bull; HIGH AUTONOMY &bull; CRAFT FIRST</span>
                </div>

                <h1 class="font-extrabold tracking-tight mb-5 leading-[1.1]"
                    style="font-size:clamp(2.5rem,4.5vw,4.1rem); color:#062538; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.03em;"
                    data-animate data-delay="80">
                    Engineers who own<br>
                    <span class="gradient-text">the end result.</span>
                </h1>

                <p class="text-lg lg:text-xl leading-relaxed mb-8 max-w-2xl"
                   style="color:#5A7184;" data-animate data-delay="120">
                    We're building a team that cares about craft, code quality and real-world outcomes &mdash;
                    AI in the loop, senior engineers in charge. No ticket-pushing bureaucracy, just deep engineering ownership.
                </p>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 mb-10" data-animate data-delay="160">
                    <a href="#open-positions" class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 14px 30px; font-size: 15px;">
                        See Open Positions
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="mailto:hello@cenrion.com?subject=Speculative Application"
                       class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5 w-full sm:w-auto text-center"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        <svg class="w-4 h-4 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Send Your CV
                    </a>
                </div>

                {{-- Culture Metrics --}}
                <div class="grid grid-cols-3 gap-4 pt-6 border-t" style="border-color: #E2EAF4;" data-animate data-delay="200">
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">100%</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Remote-Friendly</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">High</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Autonomy Culture</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Top 5%</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Engineering Bar</div>
                    </div>
                </div>
            </div>

            {{-- Right column: Hiring / Talent Radar Console --}}
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
                            <span class="text-xs font-mono font-semibold ml-2 text-cyan-200">cenrion-talent.sys</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold tracking-wide uppercase"
                              style="background: rgba(6,182,212,0.18); border: 1px solid rgba(6,182,212,0.4); color: #67E8F9;">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                            Talent Radar Active
                        </span>
                    </div>

                    {{-- Role Tracks in Console --}}
                    <div class="space-y-3 mb-5">
                        <div class="p-3.5 rounded-xl border relative" style="background: rgba(10,45,68,0.7); border: 1px solid rgba(6,182,212,0.25);">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs font-bold text-cyan-300">Cohort Track 01</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-cyan-900/60 text-cyan-200 border border-cyan-500/30">Senior Level</span>
                            </div>
                            <h4 class="text-sm font-bold text-white mb-0.5">Full-Stack &amp; Cloud Engineers</h4>
                            <p class="text-xs text-gray-300">React, Next.js, Node.js, Python, AWS &bull; High scale production</p>
                        </div>

                        <div class="p-3.5 rounded-xl border relative" style="background: rgba(10,45,68,0.7); border: 1px solid rgba(99,102,241,0.25);">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs font-bold text-indigo-300">Cohort Track 02</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-indigo-900/60 text-indigo-200 border border-indigo-500/30">Specialist</span>
                            </div>
                            <h4 class="text-sm font-bold text-white mb-0.5">AI &amp; Agentic System Architects</h4>
                            <p class="text-xs text-gray-300">LLM orchestration, RAG pipelines, determinism &amp; evals</p>
                        </div>

                        <div class="p-3.5 rounded-xl border relative" style="background: rgba(10,45,68,0.7); border: 1px solid rgba(16,185,129,0.25);">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-xs font-bold text-emerald-300">Cohort Track 03</span>
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-900/60 text-emerald-200 border border-emerald-500/30">Quality Lead</span>
                            </div>
                            <h4 class="text-sm font-bold text-white mb-0.5">SDET &amp; Quality Engineering</h4>
                            <p class="text-xs text-gray-300">Automated gates, synthetic load testing &amp; release integrity</p>
                        </div>
                    </div>

                    {{-- Culture Telemetry Chips --}}
                    <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">Sprint Rhythm</span>
                            <span class="text-cyan-300 font-bold">100% Async</span>
                        </div>
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">Meeting Load</span>
                            <span class="text-emerald-400 font-bold">Minimal</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     WHY JOIN CENRION (4 Modern Pillars)
     ============================================================ --}}
<section class="bg-white py-24 relative overflow-hidden">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-16" data-animate="fade-up">
            <span class="section-tag block mb-3">Why Engineers Join</span>
            <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                An Engineering-First Culture
            </h2>
            <p class="text-lg max-w-xl mx-auto" style="color:#5A7184;">
                We built Cenrion for engineers who take craft seriously and want real ownership.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Pillar 1: Deep Technical Work --}}
            <div class="bg-white rounded-3xl p-8 border career-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.08);"
                 data-animate data-delay="0">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-6"
                     style="background: linear-gradient(135deg, rgba(6,182,212,0.22), rgba(6,182,212,0.08)); border: 1.5px solid #06B6D4;">
                    <svg class="w-6 h-6 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Deep Technical Work</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    No ticket-pushing or shallow integrations. Real architecture, distributed systems, and engineering decisions that move the needle.
                </p>
            </div>

            {{-- Pillar 2: Growing Team --}}
            <div class="bg-white rounded-3xl p-8 border career-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(99,102,241,0.3); box-shadow: 0 10px 28px rgba(99,102,241,0.08);"
                 data-animate data-delay="80">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-6"
                     style="background: linear-gradient(135deg, rgba(99,102,241,0.22), rgba(99,102,241,0.08)); border: 1.5px solid #6366F1;">
                    <svg class="w-6 h-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">High-Impact Influence</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    Be foundational. Shape technical direction, library choices, and engineering patterns. Early members have outsized leverage.
                </p>
            </div>

            {{-- Pillar 3: Modern Stack --}}
            <div class="bg-white rounded-3xl p-8 border career-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(168,85,247,0.3); box-shadow: 0 10px 28px rgba(168,85,247,0.08);"
                 data-animate data-delay="160">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-6"
                     style="background: linear-gradient(135deg, rgba(168,85,247,0.22), rgba(168,85,247,0.08)); border: 1.5px solid #A855F7;">
                    <svg class="w-6 h-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Modern Tech Stack</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    React, Next.js, Python, Go, Node.js, AWS, and cutting-edge agentic workflows. Zero legacy debt from 2008.
                </p>
            </div>

            {{-- Pillar 4: Remote-First --}}
            <div class="bg-white rounded-3xl p-8 border career-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(16,185,129,0.3); box-shadow: 0 10px 28px rgba(16,185,129,0.08);"
                 data-animate data-delay="240">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-6"
                     style="background: linear-gradient(135deg, rgba(16,185,129,0.22), rgba(16,185,129,0.08)); border: 1.5px solid #10B981;">
                    <svg class="w-6 h-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3 12a8.96 8.96 0 01.284-2.253"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Async &amp; Remote</h3>
                <p class="text-sm leading-relaxed" style="color:#5A7184;">
                    We judge output, code quality, and intellectual rigor &mdash; not hours sitting in a chair. Work from where you thrive.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     OPEN POSITIONS SECTION
     ============================================================ --}}
<section id="open-positions" class="py-24" style="background:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        {{-- Section Header --}}
        <div class="text-center mb-14" data-animate="fade-up">
            <span class="section-tag block mb-3">Opportunities</span>
            <h2 class="text-3xl lg:text-5xl font-extrabold tracking-tight mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                Current Engineering Openings
            </h2>
            <p class="text-base lg:text-lg max-w-2xl mx-auto leading-relaxed" style="color:#5A7184;">
                We scout top-tier product engineers, AI systems architects, and quality gatekeepers. Async-first, engineering-owned, and zero bureaucratic overhead.
            </p>
        </div>

        {{-- Hiring Metrics & Culture Telemetry Pill --}}
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-6 mb-12" data-animate="fade-up" data-delay="80">
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white border text-xs font-bold"
                 style="border-color:#E2EAF4; color:#062538; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>4 Active Cohort Roles</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white border text-xs font-bold"
                 style="border-color:#E2EAF4; color:#062538; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                <svg class="w-3.5 h-3.5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3 12a8.96 8.96 0 01.284-2.253"/>
                </svg>
                <span>100% Async &amp; Remote</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white border text-xs font-bold"
                 style="border-color:#E2EAF4; color:#062538; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                <svg class="w-3.5 h-3.5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>Direct Architect Interview</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 rounded-xl bg-white border text-xs font-bold"
                 style="border-color:#E2EAF4; color:#062538; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                <svg class="w-3.5 h-3.5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>&lt; 48h Response SLA</span>
            </div>
        </div>

        {{-- 4 Concrete Role Cards (2x2 Grid) --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-12">

            {{-- Role 1: Senior Full-Stack Engineer --}}
            <div class="bg-white rounded-2xl sm:rounded-3xl border p-5 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 group relative overflow-hidden"
                 style="border: 1.5px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.04);"
                 data-animate="fade-up" data-delay="0">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    <div class="flex items-center justify-between gap-3 mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider"
                              style="background: rgba(6,182,212,0.12); color: #0891B2; border: 1px solid rgba(6,182,212,0.3);">
                            Platform Engineering
                        </span>
                        <span class="text-xs font-semibold px-2.5 py-0.5 rounded-md" style="background:#F1F5F9; color:#475569;">
                            Full-time &bull; Remote
                        </span>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-extrabold mb-2 group-hover:text-cyan transition-colors" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Senior Full-Stack Engineer
                    </h3>
                    
                    <p class="text-xs sm:text-sm leading-relaxed mb-5" style="color:#5A7184;">
                        Lead development of high-throughput client web applications, micro-frontends, and cloud API services. Own architecture and code rigor from sprint kickoff through production release.
                    </p>

                    {{-- Tech stack chips --}}
                    <div class="flex flex-wrap gap-1.5 mb-6">
                        @foreach(['React 19', 'Next.js', 'Node.js', 'TypeScript', 'PostgreSQL', 'AWS Serverless'] as $tech)
                        <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:#F8FAFC; color:#334155; border:1px solid #E2E8F0;">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 sm:pt-5 border-t flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                    <div>
                        <span class="text-[11px] uppercase tracking-wider block font-bold" style="color:#94A3B8;">Compensation</span>
                        <span class="text-sm font-extrabold" style="color:#062538;">$90k &ndash; $140k USD <span class="text-xs font-normal text-slate-400">/ Global Async</span></span>
                    </div>
                    <a href="mailto:hello@cenrion.com?subject=Application for Senior Full-Stack Engineer"
                       class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 10px 22px; font-size: 13px;">
                        Apply Now
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Role 2: Lead AI Systems Architect --}}
            <div class="bg-white rounded-2xl sm:rounded-3xl border p-5 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 group relative overflow-hidden"
                 style="border: 1.5px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.04);"
                 data-animate="fade-up" data-delay="80">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(99,102,241,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    <div class="flex items-center justify-between gap-3 mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider"
                              style="background: rgba(99,102,241,0.12); color: #4F46E5; border: 1px solid rgba(99,102,241,0.3);">
                            AI &amp; Emerging Tech
                        </span>
                        <span class="text-xs font-semibold px-2.5 py-0.5 rounded-md" style="background:#F1F5F9; color:#475569;">
                            Full-time &bull; Remote
                        </span>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-extrabold mb-2 group-hover:text-indigo-600 transition-colors" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Lead AI Systems Architect
                    </h3>
                    
                    <p class="text-xs sm:text-sm leading-relaxed mb-5" style="color:#5A7184;">
                        Engineer production RAG architectures, autonomous agent workflows, and deterministic LLM evaluation harnesses. Bridge the gap between AI research prototypes and enterprise reliability.
                    </p>

                    {{-- Tech stack chips --}}
                    <div class="flex flex-wrap gap-1.5 mb-6">
                        @foreach(['Python', 'LangChain', 'LlamaIndex', 'Vector DBs', 'FastAPI', 'LLM Evals'] as $tech)
                        <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:#F8FAFC; color:#334155; border:1px solid #E2E8F0;">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 sm:pt-5 border-t flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                    <div>
                        <span class="text-[11px] uppercase tracking-wider block font-bold" style="color:#94A3B8;">Compensation</span>
                        <span class="text-sm font-extrabold" style="color:#062538;">$110k &ndash; $160k USD <span class="text-xs font-normal text-slate-400">/ Global Async</span></span>
                    </div>
                    <a href="mailto:hello@cenrion.com?subject=Application for Lead AI Systems Architect"
                       class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 10px 22px; font-size: 13px;">
                        Apply Now
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Role 3: Staff SDET & Quality Engineering Lead --}}
            <div class="bg-white rounded-2xl sm:rounded-3xl border p-5 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 group relative overflow-hidden"
                 style="border: 1.5px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.04);"
                 data-animate="fade-up" data-delay="160">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(16,185,129,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    <div class="flex items-center justify-between gap-3 mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider"
                              style="background: rgba(16,185,129,0.12); color: #059669; border: 1px solid rgba(16,185,129,0.3);">
                            Quality Engineering
                        </span>
                        <span class="text-xs font-semibold px-2.5 py-0.5 rounded-md" style="background:#F1F5F9; color:#475569;">
                            Full-time &bull; Remote
                        </span>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-extrabold mb-2 group-hover:text-emerald-600 transition-colors" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Staff SDET &amp; Quality Lead
                    </h3>
                    
                    <p class="text-xs sm:text-sm leading-relaxed mb-5" style="color:#5A7184;">
                        Enforce Glass Box engineering gates. Build end-to-end automated test suites, load/stress benchmarks, and CI gate checks ensuring zero regressions reach client staging environments.
                    </p>

                    {{-- Tech stack chips --}}
                    <div class="flex flex-wrap gap-1.5 mb-6">
                        @foreach(['Playwright', 'Selenium', 'k6 Load Testing', 'TypeScript', 'GitHub Actions', 'Docker'] as $tech)
                        <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:#F8FAFC; color:#334155; border:1px solid #E2E8F0;">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 sm:pt-5 border-t flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                    <div>
                        <span class="text-[11px] uppercase tracking-wider block font-bold" style="color:#94A3B8;">Compensation</span>
                        <span class="text-sm font-extrabold" style="color:#062538;">$85k &ndash; $130k USD <span class="text-xs font-normal text-slate-400">/ Global Async</span></span>
                    </div>
                    <a href="mailto:hello@cenrion.com?subject=Application for Staff SDET and Quality Lead"
                       class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 10px 22px; font-size: 13px;">
                        Apply Now
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Role 4: Senior Cloud Infrastructure & SRE --}}
            <div class="bg-white rounded-2xl sm:rounded-3xl border p-5 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 group relative overflow-hidden"
                 style="border: 1.5px solid #E2EAF4; box-shadow: 0 10px 30px rgba(0,0,0,0.04);"
                 data-animate="fade-up" data-delay="240">
                <div style="position:absolute;top:0;right:0;width:160px;height:160px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>

                <div>
                    <div class="flex items-center justify-between gap-3 mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-wider"
                              style="background: rgba(6,182,212,0.12); color: #0891B2; border: 1px solid rgba(6,182,212,0.3);">
                            Cloud Ops &amp; Reliability
                        </span>
                        <span class="text-xs font-semibold px-2.5 py-0.5 rounded-md" style="background:#F1F5F9; color:#475569;">
                            Full-time &bull; Remote
                        </span>
                    </div>

                    <h3 class="text-xl sm:text-2xl font-extrabold mb-2 group-hover:text-cyan transition-colors" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">
                        Senior Cloud &amp; DevOps Lead
                    </h3>
                    
                    <p class="text-xs sm:text-sm leading-relaxed mb-5" style="color:#5A7184;">
                        Architect resilient multi-cloud foundations, automated GitOps deployment pipelines, and observability frameworks with Grafana &amp; OpenTelemetry. Build platforms that heal themselves.
                    </p>

                    {{-- Tech stack chips --}}
                    <div class="flex flex-wrap gap-1.5 mb-6">
                        @foreach(['Kubernetes', 'Terraform', 'AWS & GCP', 'Prometheus', 'Helm', 'ArgoCD'] as $tech)
                        <span class="px-2.5 py-1 rounded-lg text-xs font-medium" style="background:#F8FAFC; color:#334155; border:1px solid #E2E8F0;">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <div class="pt-4 sm:pt-5 border-t flex flex-col sm:flex-row sm:items-center justify-between gap-3 sm:gap-4" style="border-color:#F1F5F9;">
                    <div>
                        <span class="text-[11px] uppercase tracking-wider block font-bold" style="color:#94A3B8;">Compensation</span>
                        <span class="text-sm font-extrabold" style="color:#062538;">$95k &ndash; $145k USD <span class="text-xs font-normal text-slate-400">/ Global Async</span></span>
                    </div>
                    <a href="mailto:hello@cenrion.com?subject=Application for Senior Cloud and DevOps Lead"
                       class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 10px 22px; font-size: 13px;">
                        Apply Now
                        <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        {{-- Speculative Application & Fast-Track Cohort Card (Deep Navy Banner) --}}
        <div class="rounded-3xl p-8 lg:p-12 relative overflow-hidden"
             style="background: linear-gradient(135deg, #062538 0%, #0A2D44 60%, #083752 100%); border: 1.5px solid rgba(6,182,212,0.35); box-shadow: 0 20px 50px rgba(6,37,56,0.3);"
             data-animate="fade-up" data-delay="100">
            
            <div style="position:absolute;top:0;right:0;width:300px;height:300px;background:radial-gradient(circle,rgba(6,182,212,0.18),transparent 70%);pointer-events:none;"></div>

            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="max-w-2xl text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider mb-4"
                         style="background: rgba(6,182,212,0.15); color: #67E8F9; border: 1px solid rgba(6,182,212,0.4);">
                        <svg class="w-3.5 h-3.5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        Fast-Track Application
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-extrabold text-white mb-3" style="font-family:'Plus Jakarta Sans',sans-serif;">
                        Don't see your exact specialization listed?
                    </h3>
                    <p class="text-sm lg:text-base leading-relaxed" style="color:#94A3B8;">
                        We hire exceptional engineering talent on a rolling cohort basis. If you're an elite engineer, systems designer, or tech lead who delivers with rigor &mdash; send your GitHub, blog, or CV directly to our CTO.
                    </p>
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 mt-4 text-xs font-mono" style="color:#67E8F9;">
                        <span>&bull; Direct response within 48h</span>
                        <span>&bull; hello@cenrion.com</span>
                        <span>&bull; Paid engineering trial for all finalists</span>
                    </div>
                </div>

                <div class="shrink-0 flex flex-col sm:flex-row items-center gap-3">
                    <a href="mailto:hello@cenrion.com?subject=Speculative Engineering Application - Senior Cohort"
                       class="btn-accent px-8 py-3.5 text-sm font-bold shadow-lg"
                       style="background: #06B6D4; color: #FFFFFF; box-shadow: 0 4px 18px rgba(6,182,212,0.4);">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Send CV &amp; GitHub to Leads
                    </a>
                </div>
            </div>
        </div>

        {{-- 4-Step Engineering Interview Pipeline (Glass Box Hiring Rhythm) --}}
        <div class="mt-16 pt-12 border-t" style="border-color:#E2EAF4;" data-animate="fade-up">
            <div class="text-center mb-8">
                <span class="text-xs font-extrabold uppercase tracking-widest text-cyan block mb-1">Our Glass Box Interview Process</span>
                <h4 class="text-xl font-bold" style="color:#062538;">How we evaluate engineers &mdash; transparent, respectful, fast</h4>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="p-5 rounded-2xl bg-white border" style="border-color:#E2EAF4;">
                    <span class="text-xs font-mono font-bold text-cyan block mb-1">STEP 01</span>
                    <h5 class="text-sm font-bold mb-1" style="color:#062538;">Async Code Review</h5>
                    <p class="text-xs" style="color:#5A7184;">We review your GitHub, PRs, or past projects. No algorithmic puzzle trivia.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white border" style="border-color:#E2EAF4;">
                    <span class="text-xs font-mono font-bold text-indigo-500 block mb-1">STEP 02</span>
                    <h5 class="text-sm font-bold mb-1" style="color:#062538;">Architecture Deep Dive</h5>
                    <p class="text-xs" style="color:#5A7184;">45-minute discussion on real-world system design, trade-offs, and scalability.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white border" style="border-color:#E2EAF4;">
                    <span class="text-xs font-mono font-bold text-emerald-500 block mb-1">STEP 03</span>
                    <h5 class="text-sm font-bold mb-1" style="color:#062538;">Paid Pair Programming</h5>
                    <p class="text-xs" style="color:#5A7184;">A 3-hour compensated live session solving a realistic feature with our leads.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white border" style="border-color:#E2EAF4;">
                    <span class="text-xs font-mono font-bold text-amber-500 block mb-1">STEP 04</span>
                    <h5 class="text-sm font-bold mb-1" style="color:#062538;">Offer in 48 Hours</h5>
                    <p class="text-xs" style="color:#5A7184;">Transparent comp offer with flexible start dates and immediate async onboarding.</p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     ENGINEERING VALUES (Deep Navy High-Tech Fold)
     ============================================================ --}}
<section class="py-24 relative overflow-hidden" style="background:#062538;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-16" data-animate="fade-up">
            <span class="section-tag block mb-3 text-cyan-300">What We Stand For</span>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4 tracking-tight" style="font-family:'Plus Jakarta Sans',sans-serif;">
                Our Engineering Standard
            </h2>
            <p class="text-base max-w-xl mx-auto text-gray-400">
                The principles that guide how we build, review, and ship production software.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Value 1: Craftsmanship --}}
            <div class="rounded-3xl p-8 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="0">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#06B6D4;box-shadow:0 0 12px #06B6D4;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(6,182,212,0.18); border: 1.5px solid #06B6D4;">
                    <svg class="w-6 h-6 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Craftsmanship</h3>
                <p class="text-xs leading-relaxed text-gray-400">
                    We write code we are genuinely proud of. Clean, modular, verified. Not because of arbitrary metrics &mdash; because we care about the work itself.
                </p>
            </div>

            {{-- Value 2: Depth --}}
            <div class="rounded-3xl p-8 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(99,102,241,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="80">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#6366F1;box-shadow:0 0 12px #6366F1;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(99,102,241,0.18); border: 1.5px solid #6366F1;">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 3H7a2 2 0 00-2 2v2M9 3h6M9 3V1m6 2h2a2 2 0 012 2v2m0 0V5m0 2v10m0 0v2a2 2 0 01-2 2h-2m0 0H9m6 0v2M9 21H7a2 2 0 01-2-2v-2m0 0V9M5 9H3m2 0h14m0 0h2M5 15H3m2 0h14m0 0h2M9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Architectural Depth</h3>
                <p class="text-xs leading-relaxed text-gray-400">
                    Surface knowledge isn't enough. We master the underlying primitives, concurrency models, and network boundaries where real scale happens.
                </p>
            </div>

            {{-- Value 3: Transparency --}}
            <div class="rounded-3xl p-8 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(16,185,129,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="160">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#10B981;box-shadow:0 0 12px #10B981;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(16,185,129,0.18); border: 1.5px solid #10B981;">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Radical Transparency</h3>
                <p class="text-xs leading-relaxed text-gray-400">
                    Zero posturing. We share context freely, flag blockers early, and don't sweep problems under the rug. Trust is built through direct truth.
                </p>
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
                            Career Growth
                        </span>
                        <span class="text-xs font-mono font-bold" style="color: #0891B2;">High Impact</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Direct CTO Access</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Pair with senior architects on real enterprise architecture.</p>
                </div>

                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(99,102,241,0.3); box-shadow: 0 10px 28px rgba(99,102,241,0.08);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-indigo-600 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                            Tooling Budget
                        </span>
                        <span class="text-xs font-mono font-bold text-indigo-600">Top Tier</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Modern AI Tooling</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Latest Copilot, Claude, and Gemini developer subscriptions.</p>
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
                              d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                </div>

                <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 sm:mb-5 leading-tight"
                    style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;" data-animate data-delay="80">
                    Interested in joining<br>
                    <span class="gradient-text">our engineering cohort?</span>
                </h2>
                
                <p class="text-sm sm:text-base lg:text-lg mb-6 sm:mb-8 mx-auto leading-relaxed px-2" style="color: #5A7184; max-width: 580px;"
                   data-animate data-delay="160">
                    Even if you don't see your exact role listed today, send us your work. We always make room for exceptional engineers.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3.5 sm:gap-4"
                     data-animate data-delay="240">
                    <a href="mailto:hello@cenrion.com?subject=Speculative Application" class="btn-accent w-full sm:w-auto text-center justify-center" style="padding: 14px 34px; font-size: 15px;">
                        Email Our Team
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="{{ route('about') }}"
                       class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5 hover:border-cyan w-full sm:w-auto text-center"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        About Cenrion
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
                            Fast Process
                        </span>
                        <span class="text-xs font-mono font-bold text-emerald-600">&lt; 7 Days</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">2-Stage Interview</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Practical system design and pair programming. No leetcode tricks.</p>
                </div>

                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.1);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-cyan flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan"></span>
                            Location
                        </span>
                        <span class="text-xs font-mono font-bold" style="color: #0891B2;">Global Async</span>
                    </div>
                    <h4 class="text-xs font-bold mb-1" style="color: #062538;">Work Across Borders</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Competitive compensation in USD or EUR with flexibility.</p>
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
