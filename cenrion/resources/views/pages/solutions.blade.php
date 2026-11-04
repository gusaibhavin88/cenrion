@extends('layouts.app')

@section('title', 'Solutions')
@section('meta_description', 'Cenrion delivers problem-centric technology solutions: AI-powered support, legacy modernization, process automation, and data intelligence.')

@push('styles')
<style>
    .solution-glow {
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(6,182,212,0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }
    .solution-card-hover {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .solution-card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(6,37,56,0.12);
    }
</style>
@endpush

@section('content')

{{-- =====================================================================
     HERO SECTION: Modern Engineering Solutions Architecture
     ===================================================================== --}}
<section class="home-hero relative overflow-hidden pt-8 pb-16 lg:pt-12 lg:pb-20" style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 100%);">
    <div class="home-hero-glow" aria-hidden="true"></div>
    <div class="solution-glow" style="top: -100px; right: -100px;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
            
            {{-- Left column: Copy & CTAs --}}
            <div class="lg:col-span-7">
                <div class="inline-flex items-center gap-2 mb-4" data-animate data-delay="40">
                    <span class="inline-block w-5 h-px" style="background:#06B6D4;"></span>
                    <span class="section-tag">ENGINEERING SOLUTIONS &bull; DUAL DELIVERY MODEL</span>
                </div>

                <h1 class="font-extrabold tracking-tight mb-5 leading-[1.1]"
                    style="font-size:clamp(2.5rem,4.5vw,4.1rem); color:#062538; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.03em;"
                    data-animate data-delay="80">
                    Two delivery models,<br>
                    <span class="gradient-text">engineered to scale.</span>
                </h1>

                <p class="text-lg lg:text-xl leading-relaxed mb-8 max-w-2xl"
                   style="color:#5A7184;" data-animate data-delay="120">
                    Hand us a complete outcome or augment your team with senior engineers.
                    Managed IT Services and Staff Augmentation both operate under Cenrion's
                    transparent Glass Box model &mdash; AI speed with human architectural accountability.
                </p>

                <div class="flex flex-wrap items-center gap-4 mb-10" data-animate data-delay="160">
                    <a href="{{ route('contact') }}" class="btn-accent" style="padding: 14px 30px; font-size: 15px;">
                        Talk to Us
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#core-services"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        Explore Services
                        <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </a>
                </div>

                {{-- Solution Metrics --}}
                <div class="grid grid-cols-3 gap-4 pt-6 border-t" style="border-color: #E2EAF4;" data-animate data-delay="200">
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">100%</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">SLA Accountability</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">2x</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Cycle Velocity</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Zero</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Black Box Handover</div>
                    </div>
                </div>
            </div>

            {{-- Right column: Modern Glass Box Solution Visualizer Console --}}
            <div class="lg:col-span-5" data-animate data-delay="100">
                <div class="rounded-3xl p-6 lg:p-7 relative overflow-hidden"
                     style="background: linear-gradient(145deg, #072B40 0%, #062538 60%, #09344D 100%); border: 2px solid rgba(6,182,212,0.35); box-shadow: 0 24px 60px rgba(6,37,56,0.38), 0 0 30px rgba(6,182,212,0.15);">
                    
                    {{-- Ambient backdrop orb inside card --}}
                    <div style="position:absolute;top:-40px;right:-40px;width:200px;height:200px;background:radial-gradient(circle,rgba(6,182,212,0.25),transparent 70%);pointer-events:none;"></div>

                    {{-- Window bar --}}
                    <div class="flex items-center justify-between pb-4 mb-5 border-b border-white/10">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-cyan-400"></span>
                            <span class="w-3 h-3 rounded-full bg-indigo-400"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                            <span class="text-xs font-mono font-semibold ml-2 text-cyan-200">cenrion-solutions.engine</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold tracking-wide uppercase"
                              style="background: rgba(6,182,212,0.18); border: 1px solid rgba(6,182,212,0.4); color: #67E8F9;">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                            Active Model
                        </span>
                    </div>

                    {{-- Architecture Flow Diagram Inside Console --}}
                    <div class="space-y-3.5 mb-6">
                        {{-- Track A: Managed IT Services --}}
                        <div class="p-3.5 rounded-xl border relative transition-all duration-200 hover:border-cyan"
                             style="background: rgba(10,45,68,0.7); border: 1px solid rgba(6,182,212,0.25);">
                            <div class="flex items-center justify-between mb-1.5">
                                <span class="text-xs font-bold uppercase tracking-wide text-cyan-300 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                                    </svg>
                                    Delivery Track 01
                                </span>
                                <span class="text-[11px] font-mono px-2 py-0.5 rounded bg-cyan-900/60 text-cyan-200 border border-cyan-500/30">End-to-End SLA</span>
                            </div>
                            <h4 class="text-sm font-bold text-white mb-0.5">Managed IT Services</h4>
                            <p class="text-xs text-gray-300">Complete outcome ownership &bull; Cloud ops, SRE &amp; architecture</p>
                        </div>

                        {{-- Governance Connector: Glass Box Layer --}}
                        <div class="flex items-center justify-center gap-2 py-1">
                            <span class="h-px flex-1 bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></span>
                            <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-widest text-cyan-200"
                                  style="background: rgba(6,182,212,0.2); border: 1px solid rgba(6,182,212,0.4);">
                                Glass Box Gate Protocol
                            </span>
                            <span class="h-px flex-1 bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></span>
                        </div>

                        {{-- Track B: Staff Augmentation --}}
                        <div class="p-3.5 rounded-xl border relative transition-all duration-200 hover:border-cyan"
                             style="background: rgba(10,45,68,0.7); border: 1px solid rgba(6,182,212,0.25);">
                            <div class="flex items-center justify-between mb-1.5">
                                <span class="text-xs font-bold uppercase tracking-wide text-cyan-300 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                    </svg>
                                    Delivery Track 02
                                </span>
                                <span class="text-[11px] font-mono px-2 py-0.5 rounded bg-cyan-900/60 text-cyan-200 border border-cyan-500/30">Embedded Squad</span>
                            </div>
                            <h4 class="text-sm font-bold text-white mb-0.5">Staff Augmentation</h4>
                            <p class="text-xs text-gray-300">Vetted engineers embedded directly into your sprints &amp; leads</p>
                        </div>
                    </div>

                    {{-- Live Console Telemetry Badges --}}
                    <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">CI/CD Pipeline</span>
                            <span class="text-emerald-400 font-bold">VERIFIED &check;</span>
                        </div>
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">Quality Gates</span>
                            <span class="text-cyan-300 font-bold">G1 &rarr; G4</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- =====================================================================
     CORE SERVICES SECTION (Deep Navy & Pure White Cards)
     ===================================================================== --}}
<section id="core-services" class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-16">
            <span class="section-tag block mb-3" data-animate>Dual Delivery Architecture</span>
            <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;" data-animate data-delay="80">
                Choose the model that fits your operational rhythm
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color:#5A7184;" data-animate data-delay="160">
                Whether you need complete outcome ownership or senior firepower embedded in your squad, both paths follow the exact same Glass Box rigor.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-14">
            
            {{-- Service 01: Managed IT Services --}}
            <div class="p-8 lg:p-10 rounded-3xl border relative overflow-hidden solution-card-hover"
                 style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F9FC 100%); border: 2px solid rgba(6,182,212,0.3); box-shadow: 0 12px 36px rgba(6,37,56,0.06);"
                 data-animate>
                <div style="position:absolute;top:0;right:0;width:200px;height:200px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);pointer-events:none;"></div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(6,182,212,0.22), rgba(6,182,212,0.08)); border: 1.5px solid #06B6D4; box-shadow: 0 0 20px rgba(6,182,212,0.25);">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#0891B2" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider"
                          style="background: rgba(6,182,212,0.15); border: 1px solid rgba(6,182,212,0.4); color: #0891B2;">
                        Service 01 &bull; Outcome Ownership
                    </span>
                </div>

                <h3 class="text-2xl lg:text-3xl font-extrabold mb-3" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Managed IT Services</h3>
                <p class="text-base leading-relaxed mb-6" style="color:#5A7184;">
                    We own delivery end to end under agreed service levels, covering architecture,
                    engineering, cloud operations and 24/7 support &mdash; one accountable partner for the outcome.
                </p>

                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Full architecture, engineering and cloud ops accountability',
                        'SLA-backed deliverables with explicit uptime & response gates',
                        'Automated CI/CD, synthetic monitoring and zero black box handover'
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0 mt-0.5"
                              style="background: rgba(6,182,212,0.18); color: #0891B2;">&#10003;</span>
                        <span class="text-sm font-medium" style="color:#334155;">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="pt-6 border-t flex items-center justify-between" style="border-color:#E2EAF4;">
                    <span class="text-xs font-bold uppercase tracking-wider text-cyan">Best for: Comprehensive programmes</span>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-cyan hover:text-cyan-dark transition-colors">
                        Book Managed Review &rarr;
                    </a>
                </div>
            </div>

            {{-- Service 02: Staff Augmentation --}}
            <div class="p-8 lg:p-10 rounded-3xl border relative overflow-hidden solution-card-hover"
                 style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F9FC 100%); border: 2px solid rgba(99,102,241,0.3); box-shadow: 0 12px 36px rgba(6,37,56,0.06);"
                 data-animate data-delay="80">
                <div style="position:absolute;top:0;right:0;width:200px;height:200px;background:radial-gradient(circle,rgba(99,102,241,0.12),transparent 70%);pointer-events:none;"></div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(99,102,241,0.22), rgba(99,102,241,0.08)); border: 1.5px solid #6366F1; box-shadow: 0 0 20px rgba(99,102,241,0.25);">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="#4F46E5" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                        </svg>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider"
                          style="background: rgba(99,102,241,0.15); border: 1px solid rgba(99,102,241,0.4); color: #4F46E5;">
                        Service 02 &bull; Embedded Capacity
                    </span>
                </div>

                <h3 class="text-2xl lg:text-3xl font-extrabold mb-3" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Staff Augmentation</h3>
                <p class="text-base leading-relaxed mb-6" style="color:#5A7184;">
                    Vetted engineers and technology specialists who join your team, follow your process,
                    and report into your leads &mdash; Glass Box discipline embedded directly in your delivery.
                </p>

                <ul class="space-y-3 mb-8">
                    @foreach([
                        'Senior full-stack, AI and cloud infrastructure talent',
                        'Direct integration into your Jira, Slack, GitHub and daily standups',
                        'Zero ramp-up friction with production-grade engineering habits'
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold shrink-0 mt-0.5"
                              style="background: rgba(99,102,241,0.18); color: #4F46E5;">&#10003;</span>
                        <span class="text-sm font-medium" style="color:#334155;">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

                <div class="pt-6 border-t flex items-center justify-between" style="border-color:#E2EAF4;">
                    <span class="text-xs font-bold uppercase tracking-wider text-indigo-600">Best for: Scaling existing squads</span>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-indigo-600 hover:text-indigo-700 transition-colors">
                        Request Augmentation &rarr;
                    </a>
                </div>
            </div>

        </div>

        {{-- Deep Navy Architectural Feature Banner (Our Home Ground) --}}
        <div class="rounded-3xl p-8 lg:p-12 relative overflow-hidden"
             style="background: linear-gradient(135deg, #062538 0%, #072B40 50%, #0A2D44 100%); border: 2px solid rgba(6,182,212,0.3); box-shadow: 0 20px 48px rgba(0,0,0,0.35);"
             data-animate>
            <div style="position:absolute;top:0;right:0;width:300px;height:300px;background:radial-gradient(circle,rgba(6,182,212,0.18),transparent 70%);pointer-events:none;"></div>
            
            <div class="relative z-10 max-w-3xl mb-8">
                <span class="section-tag block mb-3 text-cyan-300">Our Home Ground</span>
                <h3 class="text-3xl lg:text-4xl font-extrabold text-white mb-4" style="font-family:'Plus Jakarta Sans',sans-serif;">
                    Product Engineering, end to end
                </h3>
                <p class="text-base lg:text-lg leading-relaxed text-gray-300">
                    From the first architecture decision to high-throughput platforms in production, we build products designed to scale and proven at every step.
                </p>
            </div>

            {{-- Tech Stack Badges --}}
            <div class="flex flex-wrap gap-2.5 mb-10 relative z-10">
                @foreach(['Product discovery', 'System architecture', 'Web & mobile platforms', 'APIs & microservices', 'Cloud native (AWS / GCP / Azure)', 'Real-time data platforms', 'Agentic AI integration', 'High-load performance tuning'] as $chip)
                <span class="inline-flex items-center px-4 py-2 rounded-xl text-xs font-bold tracking-wide transition-colors"
                      style="background: rgba(6,182,212,0.12); border: 1px solid rgba(6,182,212,0.3); color: #67E8F9;">
                    {{ $chip }}
                </span>
                @endforeach
            </div>

            {{-- 3 Pillars Grid --}}
            <div class="grid md:grid-cols-3 gap-6 pt-8 border-t border-white/10 relative z-10">
                <div class="p-5 rounded-2xl" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.18); border: 1px solid #06B6D4;">
                        <svg class="w-5 h-5 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base mb-1">Architecture and scale</h4>
                    <p class="text-xs leading-relaxed text-gray-400">Cloud-native, microservice and event-driven systems designed to grow smoothly without rewrites.</p>
                </div>
                <div class="p-5 rounded-2xl" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background: rgba(99,102,241,0.18); border: 1px solid #6366F1;">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base mb-1">Build and ship</h4>
                    <p class="text-xs leading-relaxed text-gray-400">React, Next.js, Node.js, Python and Go, continuously shipped through automated CI/CD pipelines.</p>
                </div>
                <div class="p-5 rounded-2xl" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background: rgba(16,185,129,0.18); border: 1px solid #10B981;">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base mb-1">Quality built in</h4>
                    <p class="text-xs leading-relaxed text-gray-400">Automated end-to-end testing, load tests, and security scans gating every production release.</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- =====================================================================
     HIGH-IMPACT SOLUTION AREAS (The 4 Solutions with Brand Colors)
     ===================================================================== --}}
<section class="py-24" style="background-color:#F5F8FC;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-16">
            <span class="section-tag block mb-3" data-animate>Problem-Centric Engineering</span>
            <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;" data-animate data-delay="80">
                Where We Deliver Results
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color:#5A7184;" data-animate data-delay="160">
                Four high-impact solution domains where Cenrion consistently delivers measurable speed, reliability, and technical leverage.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- --------------------------------------------------------
                 SOLUTION 1: AI-Powered Customer Support (Electric Cyan)
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-3xl border p-8 lg:p-10 solution-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(6,182,212,0.3); box-shadow: 0 10px 30px rgba(6,182,212,0.08);"
                 data-animate>
                <div style="position:absolute;top:0;right:0;width:180px;height:180px;background:radial-gradient(circle,rgba(6,182,212,0.1),transparent 70%);pointer-events:none;"></div>
                
                {{-- Number & Icon Header --}}
                <div class="flex items-center justify-between mb-6">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(6,182,212,0.22), rgba(6,182,212,0.08)); border: 1.5px solid #06B6D4; box-shadow: 0 0 18px rgba(6,182,212,0.25);">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#0891B2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                    </div>
                    <span class="w-11 h-11 rounded-xl flex items-center justify-center text-sm font-black text-white"
                          style="background: #06B6D4; box-shadow: 0 4px 14px rgba(6,182,212,0.4);">01</span>
                </div>

                <h3 class="text-2xl font-extrabold mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">AI-Powered Customer Support</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC; border-left: 3px solid #94A3B8;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#64748B;">The Challenge</p>
                    <p class="text-sm leading-relaxed" style="color:#5A7184;">High support volumes, slow response times, and inconsistent service quality drain resources while agents drown in repetitive, low-value queries.</p>
                </div>

                <div class="mb-6 p-4 rounded-xl" style="background-color:#F0FDFA; border-left: 3px solid #06B6D4;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#0891B2;">The Solution</p>
                    <p class="text-sm leading-relaxed" style="color:#062538; font-weight: 500;">Autonomous conversational AI systems with deterministic safety guardrails, intelligent escalation, and live context retention built in.</p>
                </div>

                <div class="flex flex-wrap gap-2 pt-4 border-t" style="border-color:#E2EAF4;">
                    @foreach(['Generative AI', 'Agentic Workflows', 'RAG Architecture', 'Guardrail Safety'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold"
                          style="background-color:rgba(6,182,212,0.12); color:#0891B2; border: 1px solid rgba(6,182,212,0.25);">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 SOLUTION 2: Legacy System Modernization (Indigo Architecture)
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-3xl border p-8 lg:p-10 solution-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(99,102,241,0.3); box-shadow: 0 10px 30px rgba(99,102,241,0.08);"
                 data-animate data-delay="80">
                <div style="position:absolute;top:0;right:0;width:180px;height:180px;background:radial-gradient(circle,rgba(99,102,241,0.1),transparent 70%);pointer-events:none;"></div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(99,102,241,0.22), rgba(99,102,241,0.08)); border: 1.5px solid #6366F1; box-shadow: 0 0 18px rgba(99,102,241,0.25);">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#4F46E5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <span class="w-11 h-11 rounded-xl flex items-center justify-center text-sm font-black text-white"
                          style="background: #6366F1; box-shadow: 0 4px 14px rgba(99,102,241,0.4);">02</span>
                </div>

                <h3 class="text-2xl font-extrabold mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Legacy System Modernization</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC; border-left: 3px solid #94A3B8;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#64748B;">The Challenge</p>
                    <p class="text-sm leading-relaxed" style="color:#5A7184;">Ageing monolithic systems block business growth &mdash; expensive to maintain, fragile under load, and incompatible with modern integrations.</p>
                </div>

                <div class="mb-6 p-4 rounded-xl" style="background-color:#F5F3FF; border-left: 3px solid #6366F1;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#4F46E5;">The Solution</p>
                    <p class="text-sm leading-relaxed" style="color:#062538; font-weight: 500;">Zero-downtime strangler fig pattern migrations: decomposing monoliths into cloud-native microservices while preserving business continuity.</p>
                </div>

                <div class="flex flex-wrap gap-2 pt-4 border-t" style="border-color:#E2EAF4;">
                    @foreach(['Microservices', 'Cloud Migration', 'Strangler Fig', 'Event-Driven'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold"
                          style="background-color:rgba(99,102,241,0.12); color:#4F46E5; border: 1px solid rgba(99,102,241,0.25);">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 SOLUTION 3: Intelligent Process Automation (Emerald Green)
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-3xl border p-8 lg:p-10 solution-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(16,185,129,0.3); box-shadow: 0 10px 30px rgba(16,185,129,0.08);"
                 data-animate>
                <div style="position:absolute;top:0;right:0;width:180px;height:180px;background:radial-gradient(circle,rgba(16,185,129,0.1),transparent 70%);pointer-events:none;"></div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(16,185,129,0.22), rgba(16,185,129,0.08)); border: 1.5px solid #10B981; box-shadow: 0 0 18px rgba(16,185,129,0.25);">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#059669">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>
                    </div>
                    <span class="w-11 h-11 rounded-xl flex items-center justify-center text-sm font-black text-white"
                          style="background: #10B981; box-shadow: 0 4px 14px rgba(16,185,129,0.4);">03</span>
                </div>

                <h3 class="text-2xl font-extrabold mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Intelligent Process Automation</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC; border-left: 3px solid #94A3B8;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#64748B;">The Challenge</p>
                    <p class="text-sm leading-relaxed" style="color:#5A7184;">Manual data entry, document handling, and disjointed cross-system reconciliation consume skilled staff and create recurring operational bottlenecks.</p>
                </div>

                <div class="mb-6 p-4 rounded-xl" style="background-color:#ECFDF5; border-left: 3px solid #10B981;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#059669;">The Solution</p>
                    <p class="text-sm leading-relaxed" style="color:#062538; font-weight: 500;">Combining intelligent document extraction, automated validation loops, and direct API integrations &mdash; eliminating 80%+ manual overhead.</p>
                </div>

                <div class="flex flex-wrap gap-2 pt-4 border-t" style="border-color:#E2EAF4;">
                    @foreach(['RPA Automation', 'OCR Extraction', 'Webhook Pipelines', 'Zero Error Logic'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold"
                          style="background-color:rgba(16,185,129,0.12); color:#059669; border: 1px solid rgba(16,185,129,0.25);">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 SOLUTION 4: Data Intelligence Platforms (Sky Blue)
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-3xl border p-8 lg:p-10 solution-card-hover relative overflow-hidden"
                 style="border: 2px solid rgba(2,132,199,0.3); box-shadow: 0 10px 30px rgba(2,132,199,0.08);"
                 data-animate data-delay="80">
                <div style="position:absolute;top:0;right:0;width:180px;height:180px;background:radial-gradient(circle,rgba(2,132,199,0.1),transparent 70%);pointer-events:none;"></div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center shrink-0"
                         style="background: linear-gradient(135deg, rgba(2,132,199,0.22), rgba(2,132,199,0.08)); border: 1.5px solid #0284C7; box-shadow: 0 0 18px rgba(2,132,199,0.25);">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="#0284C7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </div>
                    <span class="w-11 h-11 rounded-xl flex items-center justify-center text-sm font-black text-white"
                          style="background: #0284C7; box-shadow: 0 4px 14px rgba(2,132,199,0.4);">04</span>
                </div>

                <h3 class="text-2xl font-extrabold mb-4" style="color:#062538; font-family:'Plus Jakarta Sans',sans-serif;">Data Intelligence Platforms</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC; border-left: 3px solid #94A3B8;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#64748B;">The Challenge</p>
                    <p class="text-sm leading-relaxed" style="color:#5A7184;">Data sits locked in disparate silos with zero unified truth &mdash; leaving leadership guessing rather than acting on real-time operational telemetry.</p>
                </div>

                <div class="mb-6 p-4 rounded-xl" style="background-color:#F0F9FF; border-left: 3px solid #0284C7;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#0284C7;">The Solution</p>
                    <p class="text-sm leading-relaxed" style="color:#062538; font-weight: 500;">Unified streaming data platforms ingesting, cleaning, and visualizing core business KPIs in sub-second latency dashboards.</p>
                </div>

                <div class="flex flex-wrap gap-2 pt-4 border-t" style="border-color:#E2EAF4;">
                    @foreach(['Lakehouse Architecture', 'Streaming Pipelines', 'Real-time BI', 'Snowflake / BigQuery'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold"
                          style="background-color:rgba(2,132,199,0.12); color:#0284C7; border: 1px solid rgba(2,132,199,0.25);">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- =====================================================================
     ENGAGEMENT MODELS: Deep Navy High-Tech Pipeline
     ===================================================================== --}}
<section class="py-24" style="background-color:#062538;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        <div class="text-center mb-16">
            <span class="section-tag block mb-3 text-cyan-300" data-animate>Flexible Collaboration</span>
            <h2 class="text-3xl lg:text-5xl font-extrabold text-white mb-4 tracking-tight"
                style="font-family:'Plus Jakarta Sans',sans-serif;" data-animate data-delay="80">
                Engagement Models
            </h2>
            <p class="text-lg max-w-2xl mx-auto" style="color:#94A3B8;" data-animate data-delay="160">
                We adapt directly to your organization &mdash; from fixed-scope outcome delivery to fully embedded engineering squads.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">

            {{-- Model 1: Managed IT --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="0">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#06B6D4;box-shadow:0 0 12px #06B6D4;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(6,182,212,0.18); border: 1.5px solid #06B6D4;">
                    <svg class="w-6 h-6 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Managed IT Services</h3>
                <p class="text-xs leading-relaxed mb-6" style="color:#94A3B8;">End-to-end outcome ownership under agreed service levels.</p>
                <ul class="space-y-2.5 pt-4 border-t border-white/10 text-xs">
                    @foreach(['One accountable partner', 'SLA-backed delivery', 'Glass Box gate sign-offs'] as $pt)
                    <li class="flex items-center gap-2" style="color:#CBD5E1;">
                        <span class="text-cyan font-bold">&check;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 2: Project-Based Delivery --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(99,102,241,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="60">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#6366F1;box-shadow:0 0 12px #6366F1;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(99,102,241,0.18); border: 1.5px solid #6366F1;">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Project-Based Delivery</h3>
                <p class="text-xs leading-relaxed mb-6" style="color:#94A3B8;">Fixed scope, explicit timeline, and guaranteed outcomes.</p>
                <ul class="space-y-2.5 pt-4 border-t border-white/10 text-xs">
                    @foreach(['Defined deliverables', 'Fixed milestones', 'Transparent billing'] as $pt)
                    <li class="flex items-center gap-2" style="color:#CBD5E1;">
                        <span class="text-indigo-400 font-bold">&check;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 3: Staff Augmentation --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(168,85,247,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="120">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#A855F7;box-shadow:0 0 12px #A855F7;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(168,85,247,0.18); border: 1.5px solid #A855F7;">
                    <svg class="w-6 h-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0ZM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Staff Augmentation</h3>
                <p class="text-xs leading-relaxed mb-6" style="color:#94A3B8;">Senior Cenrion engineers embedded directly in your sprints.</p>
                <ul class="space-y-2.5 pt-4 border-t border-white/10 text-xs">
                    @foreach(['Instant capability lift', 'In your tools & repos', 'Flexible contract length'] as $pt)
                    <li class="flex items-center gap-2" style="color:#CBD5E1;">
                        <span class="text-purple-400 font-bold">&check;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 4: Dedicated Engineering Squads --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(245,158,11,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="180">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#F59E0B;box-shadow:0 0 12px #F59E0B;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(245,158,11,0.18); border: 1.5px solid #F59E0B;">
                    <svg class="w-6 h-6 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Dedicated Squads</h3>
                <p class="text-xs leading-relaxed mb-6" style="color:#94A3B8;">Cross-functional teams: architecture, devs &amp; automated QA.</p>
                <ul class="space-y-2.5 pt-4 border-t border-white/10 text-xs">
                    @foreach(['Full squad autonomy', 'Agile delivery rhythm', 'Long-term product sync'] as $pt)
                    <li class="flex items-center gap-2" style="color:#CBD5E1;">
                        <span class="text-amber-400 font-bold">&check;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 5: Technology Advisory --}}
            <div class="rounded-3xl p-7 border relative overflow-hidden transition-all duration-300 hover:-translate-y-2 group"
                 style="background: linear-gradient(180deg, #0A2D44 0%, #072538 100%); border: 1.5px solid rgba(16,185,129,0.3); box-shadow: 0 12px 30px rgba(0,0,0,0.3);"
                 data-animate data-delay="240">
                <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#10B981;box-shadow:0 0 12px #10B981;"></div>
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background: rgba(16,185,129,0.18); border: 1.5px solid #10B981;">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2" style="font-family:'Plus Jakarta Sans',sans-serif;">Technology Advisory</h3>
                <p class="text-xs leading-relaxed mb-6" style="color:#94A3B8;">Strategic architecture reviews &amp; CTO-level guidance.</p>
                <ul class="space-y-2.5 pt-4 border-t border-white/10 text-xs">
                    @foreach(['Architecture audit', 'Tech stack selection', 'Risk & scalability roadmap'] as $pt)
                    <li class="flex items-center gap-2" style="color:#CBD5E1;">
                        <span class="text-emerald-400 font-bold">&check;</span> {{ $pt }}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- =====================================================================
     BOTTOM CTA SECTION: Light/White Background with Left & Right Engineering Accents
     ===================================================================== --}}
<section class="py-24 lg:py-28 relative overflow-hidden bg-white"
         style="background-image: radial-gradient(rgba(6,182,212,0.08) 1.5px, transparent 1.5px); background-size: 32px 32px;">
    
    {{-- Left & Right Ambient Glows --}}
    <div style="position:absolute;left:-80px;top:20%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);border-radius:9999px;pointer-events:none;"></div>
    <div style="position:absolute;right:-80px;bottom:15%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.12),transparent 70%);border-radius:9999px;pointer-events:none;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            {{-- Left Design Column (Visible on Desktop) --}}
            <div class="hidden lg:flex flex-col gap-5 lg:col-span-3 items-end" data-animate data-delay="100">
                
                {{-- Telemetry Card 1 (SLA Assurance) --}}
                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.1);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-cyan flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan animate-pulse"></span>
                            SLA Commitment
                        </span>
                        <span class="text-xs font-mono font-bold" style="color: #0891B2;">99.98%</span>
                    </div>
                    <h4 class="text-xs font-bold text-navy mb-1" style="color: #062538;">Uptime &amp; Operations</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Automated SRE failover and 24/7 continuous monitoring.</p>
                </div>

                {{-- Telemetry Card 2 (Gate Protocol) --}}
                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(99,102,241,0.3); box-shadow: 0 10px 28px rgba(99,102,241,0.08);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-indigo-600 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                            Glass Box Gates
                        </span>
                        <span class="text-xs font-mono font-bold text-indigo-600">G1 &rarr; G4</span>
                    </div>
                    <h4 class="text-xs font-bold text-navy mb-1" style="color: #062538;">Verified Delivery</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Client-owned documentation and clean code handoffs.</p>
                </div>

                {{-- Decorative Line Bracket --}}
                <div class="flex items-center gap-2 pr-4 opacity-40">
                    <span class="h-px w-16 bg-cyan"></span>
                    <span class="w-2 h-2 rotate-45 border border-cyan bg-cyan-100"></span>
                </div>

            </div>

            {{-- Center Content Column --}}
            <div class="lg:col-span-6 text-center">
                
                {{-- Decorative Lightning Icon --}}
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl mb-6"
                     style="background: rgba(6,182,212,0.12); border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 4px 16px rgba(6,182,212,0.15);"
                     data-animate>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="#06B6D4" stroke-width="2" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>

                <h2 class="text-4xl lg:text-5xl font-extrabold tracking-tight mb-5 leading-tight"
                    style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;" data-animate data-delay="80">
                    Ready to solve the<br>
                    <span class="gradient-text">real engineering problem?</span>
                </h2>
                
                <p class="text-base lg:text-lg mb-8 mx-auto leading-relaxed" style="color: #5A7184; max-width: 580px;"
                   data-animate data-delay="160">
                    Let's have an honest conversation about your product's architecture, velocity bottlenecks, and whether we're the right engineering partner.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4"
                     data-animate data-delay="240">
                    <a href="{{ route('contact') }}" class="btn-accent" style="padding: 14px 34px; font-size: 15px;">
                        Talk to Us
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="{{ route('labs') }}"
                       class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5 hover:border-cyan"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        Explore Cenrion Labs
                        <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>

            </div>

            {{-- Right Design Column (Visible on Desktop) --}}
            <div class="hidden lg:flex flex-col gap-5 lg:col-span-3 items-start" data-animate data-delay="100">
                
                {{-- Telemetry Card 3 (Cycle Velocity) --}}
                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(16,185,129,0.3); box-shadow: 0 10px 28px rgba(16,185,129,0.08);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-emerald-600 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            Velocity Boost
                        </span>
                        <span class="text-xs font-mono font-bold text-emerald-600">2.5x Faster</span>
                    </div>
                    <h4 class="text-xs font-bold text-navy mb-1" style="color: #062538;">AI-Accelerated Sprints</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Rapid scaffolding backed by senior human code review.</p>
                </div>

                {{-- Telemetry Card 4 (Client Transparency) --}}
                <div class="w-full max-w-[280px] p-4 rounded-2xl border transition-all duration-300 hover:-translate-y-1"
                     style="background: #FFFFFF; border: 1.5px solid rgba(6,182,212,0.3); box-shadow: 0 10px 28px rgba(6,182,212,0.1);">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-cyan flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-cyan"></span>
                            Direct Lead Sync
                        </span>
                        <span class="text-xs font-mono font-bold" style="color: #0891B2;">100% Open</span>
                    </div>
                    <h4 class="text-xs font-bold text-navy mb-1" style="color: #062538;">Zero Black-Box</h4>
                    <p class="text-[11px] leading-relaxed" style="color: #64748B;">Direct sprint visibility, code commits, and live telemetry.</p>
                </div>

                {{-- Decorative Line Bracket --}}
                <div class="flex items-center gap-2 pl-4 opacity-40">
                    <span class="w-2 h-2 rotate-45 border border-cyan bg-cyan-100"></span>
                    <span class="h-px w-16 bg-cyan"></span>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
