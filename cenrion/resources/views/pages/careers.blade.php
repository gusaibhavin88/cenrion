@extends('layouts.app')

@section('title', 'Careers')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="relative overflow-hidden bg-[#0B1D2E] pt-32 pb-20">
    {{-- Background decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute -top-60 -right-60 w-[800px] h-[800px] rounded-full bg-[#00AEEF] opacity-[0.04] blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] rounded-full bg-[#4DD8F5] opacity-[0.03] blur-3xl -translate-x-1/3 translate-y-1/3"></div>
        {{-- Grid pattern --}}
        <svg class="absolute inset-0 w-full h-full opacity-[0.02]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="careers-hero-grid" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="#00AEEF" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#careers-hero-grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            {{-- Eyebrow --}}
            <div class="inline-flex items-center gap-2 mb-6" data-animate="fade-up" data-delay="0">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Join the Team</span>
            </div>

            {{-- Heading --}}
            <h1 class="js-split text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight mb-6" data-animate="fade-up" data-delay="100">
                Build the Future of<br>
                <span class="text-[#00AEEF]">Enterprise Technology</span>
            </h1>

            {{-- Subtext --}}
            <p class="text-lg text-[#94A3B8] leading-relaxed max-w-2xl" data-animate="fade-up" data-delay="200">
                We're building a team of engineers who care deeply about craft, quality, and outcomes.
                If you want your work to matter — and you want to work with people who hold the same bar — you'll fit right in.
            </p>

            {{-- Hero CTA --}}
            <div class="mt-10 flex flex-col sm:flex-row gap-4" data-animate="fade-up" data-delay="300">
                <a href="#open-positions"
                   class="inline-flex items-center gap-2 px-7 py-4 rounded-xl bg-[#00AEEF] text-white font-semibold hover:bg-[#007DB8] transition-all duration-200 shadow-lg shadow-[#00AEEF]/20 hover:-translate-y-0.5">
                    See Open Positions
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
                <a href="mailto:hello@cenrion.com?subject=Speculative Application"
                   class="inline-flex items-center gap-2 px-7 py-4 rounded-xl border border-[#1A3352] text-white font-semibold hover:border-[#00AEEF] hover:text-[#00AEEF] transition-all duration-200 hover:-translate-y-0.5">
                    Send Your CV
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY CENRION SECTION
     ============================================================ --}}
<section class="bg-[#F5F8FC] py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate="fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Why Join</span>
                <div class="h-px w-8 bg-[#00AEEF]"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B1D2E]">An Engineering-First Culture</h2>
            <p class="mt-4 text-[#5A7184] max-w-xl mx-auto">We built Cenrion for people who take their craft seriously.</p>
        </div>

        {{-- 4-card grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

            {{-- Deep Technical Work --}}
            <div class="group bg-white rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-animate="fade-up" data-delay="0">
                <div class="flex items-start gap-5">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#0B1D2E] mb-2 group-hover:text-[#00AEEF] transition-colors duration-200">Deep Technical Work</h3>
                        <p class="text-[#5A7184] leading-relaxed">No ticket-pushing or shallow integrations. Real architecture, real systems, real engineering decisions that matter. You'll own meaningful work from day one.</p>
                    </div>
                </div>
            </div>

            {{-- Growing Team --}}
            <div class="group bg-white rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-animate="fade-up" data-delay="100">
                <div class="flex items-start gap-5">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#0B1D2E] mb-2 group-hover:text-[#00AEEF] transition-colors duration-200">Growing Team</h3>
                        <p class="text-[#5A7184] leading-relaxed">Be foundational. Shape the culture, technical direction, and how we work. Early team members have real influence on what Cenrion becomes.</p>
                    </div>
                </div>
            </div>

            {{-- Modern Stack --}}
            <div class="group bg-white rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-animate="fade-up" data-delay="200">
                <div class="flex items-start gap-5">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#0B1D2E] mb-2 group-hover:text-[#00AEEF] transition-colors duration-200">Modern Stack</h3>
                        <p class="text-[#5A7184] leading-relaxed">React, Laravel, Python, AWS, LangChain. No legacy messes, no technical debt inherited from 2008. We choose tools deliberately and keep them current.</p>
                    </div>
                </div>
            </div>

            {{-- Remote-Friendly --}}
            <div class="group bg-white rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-animate="fade-up" data-delay="300">
                <div class="flex items-start gap-5">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                        <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3 12a8.96 8.96 0 01.284-2.253"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-[#0B1D2E] mb-2 group-hover:text-[#00AEEF] transition-colors duration-200">Remote-Friendly</h3>
                        <p class="text-[#5A7184] leading-relaxed">Async-first with a strong communication culture. We value output and thinking over presence. Work from where you do your best work.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     OPEN POSITIONS SECTION
     ============================================================ --}}
<section id="open-positions" class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate="fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Opportunities</span>
                <div class="h-px w-8 bg-[#00AEEF]"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B1D2E]">Open Positions</h2>
        </div>

        {{-- Elegant Empty State --}}
        <div class="max-w-lg mx-auto" data-animate="fade-up">
            <div class="relative bg-[#F5F8FC] rounded-2xl border border-[#E2EAF4] p-12 text-center overflow-hidden">

                {{-- Decorative circles --}}
                <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full border-2 border-[#00AEEF]/10" aria-hidden="true"></div>
                <div class="absolute -bottom-6 -left-6 w-24 h-24 rounded-full border-2 border-[#00AEEF]/10" aria-hidden="true"></div>

                {{-- Icon --}}
                <div class="relative inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white border border-[#E2EAF4] shadow-sm mb-6">
                    <svg class="w-10 h-10 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                    </svg>
                </div>

                {{-- Heading --}}
                <h3 class="text-xl font-bold text-[#0B1D2E] mb-3">No open positions right now</h3>

                {{-- Subtext --}}
                <p class="text-[#5A7184] leading-relaxed mb-2">
                    We're growing and will be posting roles soon.
                </p>
                <p class="text-[#5A7184] leading-relaxed mb-8">
                    If you're exceptional and you believe in what we're building, we'd still love to hear from you.
                </p>

                {{-- Speculative CTA --}}
                <a href="mailto:hello@cenrion.com?subject=Speculative Application"
                   class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-[#00AEEF] text-white font-semibold hover:bg-[#007DB8] transition-all duration-200 shadow-lg shadow-[#00AEEF]/20 hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Send Your CV
                </a>

                <p class="text-[#94A3B8] text-xs mt-4">hello@cenrion.com — Speculative Application</p>

            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     ENGINEERING VALUES SECTION (Navy)
     ============================================================ --}}
<section class="bg-[#0B1D2E] py-24 relative overflow-hidden">

    {{-- Background decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] rounded-full bg-[#00AEEF] opacity-[0.03] blur-3xl translate-x-1/3 -translate-y-1/3"></div>
        <svg class="absolute inset-0 w-full h-full opacity-[0.02]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="values-engineering-grid" width="80" height="80" patternUnits="userSpaceOnUse">
                    <path d="M 80 0 L 0 0 0 80" fill="none" stroke="#00AEEF" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#values-engineering-grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate="fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">What We Stand For</span>
                <div class="h-px w-8 bg-[#00AEEF]"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">Engineering Values</h2>
        </div>

        {{-- 3-col values --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Craftsmanship --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl text-center" data-animate="fade-up" data-delay="0">
                <div class="w-14 h-14 rounded-2xl bg-[#00AEEF]/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-7 h-7 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Craftsmanship</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">We write code that we're proud of. Clean, maintainable, documented. Not because we're told to — because we care about the work itself.</p>
            </div>

            {{-- Depth --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl text-center" data-animate="fade-up" data-delay="150">
                <div class="w-14 h-14 rounded-2xl bg-[#00AEEF]/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-7 h-7 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H7a2 2 0 00-2 2v2M9 3h6M9 3V1m6 2h2a2 2 0 012 2v2m0 0V5m0 2v10m0 0v2a2 2 0 01-2 2h-2m0 0H9m6 0v2M9 21H7a2 2 0 01-2-2v-2m0 0V9M5 9H3m2 0h14m0 0h2M5 15H3m2 0h14m0 0h2M9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Depth</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">Surface-level knowledge isn't enough. We go deep on our tools, our domains, and our client problems — because depth is where real value lives.</p>
            </div>

            {{-- Transparency --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl text-center" data-animate="fade-up" data-delay="300">
                <div class="w-14 h-14 rounded-2xl bg-[#00AEEF]/10 flex items-center justify-center mx-auto mb-6 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-7 h-7 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Transparency</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">Internally and externally. We communicate clearly, share context freely, and don't hide problems. Trust is built through honesty, not polish.</p>
            </div>

        </div>

    </div>
</section>

{{-- ============================================================
     FINAL CTA SECTION
     ============================================================ --}}
<section class="bg-[#F5F8FC] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative bg-white rounded-2xl border border-[#E2EAF4] shadow-sm overflow-hidden" data-animate="fade-up">
            {{-- Accent bar --}}
            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#00AEEF] to-[#4DD8F5]"></div>

            <div class="px-8 py-14 text-center sm:px-16">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#00AEEF]/10 mb-6">
                    <svg class="w-7 h-7 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0B1D2E] mb-4">Interested in Cenrion?</h2>
                <p class="text-[#5A7184] max-w-lg mx-auto mb-8 leading-relaxed">
                    Even if there's no open role that fits right now, we'd love to know you're out there. Send us a note — tell us what you do and what you're looking for.
                </p>
                <a href="mailto:hello@cenrion.com?subject=Speculative Application"
                   class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-[#00AEEF] text-white font-semibold hover:bg-[#007DB8] transition-all duration-200 shadow-lg shadow-[#00AEEF]/20 hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Email Us
                </a>
                <p class="text-[#94A3B8] text-sm mt-4">hello@cenrion.com</p>
            </div>
        </div>
    </div>
</section>

@endsection
