@extends('layouts.app')

@section('title', 'About')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="relative overflow-hidden bg-[#0B1D2E] pt-32 pb-20">
    {{-- Background decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute -top-40 -right-40 w-[600px] h-[600px] rounded-full bg-[#00AEEF] opacity-[0.04] blur-3xl"></div>
        <div class="absolute bottom-0 -left-40 w-[500px] h-[500px] rounded-full bg-[#00AEEF] opacity-[0.03] blur-3xl"></div>
        {{-- Grid pattern --}}
        <svg class="absolute inset-0 w-full h-full opacity-[0.025]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="about-hero-grid" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="#00AEEF" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#about-hero-grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- Eyebrow --}}
        <div class="inline-flex items-center gap-2 mb-6" data-animate="fade-up" data-delay="0">
            <div class="h-px w-8 bg-[#00AEEF]"></div>
            <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Who We Are</span>
            <div class="h-px w-8 bg-[#00AEEF]"></div>
        </div>

        {{-- Heading --}}
        <h1 class="js-split text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight tracking-tight mb-6" data-animate="fade-up" data-delay="100">
            Built by Engineers,<br class="hidden sm:block">
            <span class="text-[#00AEEF]">For Engineers</span>
        </h1>

        {{-- Subtext --}}
        <p class="max-w-2xl mx-auto text-lg text-[#94A3B8] leading-relaxed" data-animate="fade-up" data-delay="200">
            Cenrion is a modern engineering partner built on the belief that technology should solve real business problems.
            We bring together deep technical expertise and clear business thinking — so what we build actually works.
        </p>
    </div>
</section>

{{-- ============================================================
     MISSION SECTION
     ============================================================ --}}
<section class="bg-[#F5F8FC] py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: Mission Statement --}}
            <div data-animate="fade-right">
                <div class="inline-flex items-center gap-2 mb-5">
                    <div class="h-px w-8 bg-[#00AEEF]"></div>
                    <span class="text-[#00AEEF] text-xs font-semibold tracking-widest uppercase">Our Mission</span>
                </div>
                <blockquote class="text-2xl lg:text-3xl font-bold text-[#0B1D2E] leading-snug">
                    "To be the engineering partner that makes technology work for business — with intelligence, precision, and transparency."
                </blockquote>
                <div class="mt-8 flex items-center gap-3">
                    <div class="w-10 h-1 bg-[#00AEEF] rounded-full"></div>
                    <span class="text-[#5A7184] text-sm font-medium">Cenrion Mission Statement</span>
                </div>
            </div>

            {{-- Right: Vision --}}
            <div data-animate="fade-left" data-delay="150">
                <div class="inline-flex items-center gap-2 mb-5">
                    <div class="h-px w-8 bg-[#00AEEF]"></div>
                    <span class="text-[#00AEEF] text-xs font-semibold tracking-widest uppercase">Our Vision</span>
                </div>
                <p class="text-[#0D1B2A] text-lg leading-relaxed mb-5">
                    We're building a team of engineers who combine genuine technical depth with the ability to understand and serve business goals. In a world full of technology vendors and agencies, Cenrion exists to be something rarer: a true engineering partner.
                </p>
                <p class="text-[#5A7184] leading-relaxed">
                    That means we work closely, we communicate clearly, and we're not afraid to say when something is hard, risky, or simply the wrong approach. We believe honesty is a feature, not a bug.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     ENGINEERING PHILOSOPHY SECTION
     ============================================================ --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate="fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">How We Think</span>
                <div class="h-px w-8 bg-[#00AEEF]"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B1D2E]">Engineering Philosophy</h2>
        </div>

        {{-- 3-col card grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Card 1: Technical Depth --}}
            <div class="group relative bg-[#F5F8FC] rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF] hover:shadow-xl transition-all duration-300" data-animate="fade-up" data-delay="0">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-[#00AEEF]/10 mb-6 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    {{-- CPU Chip Icon --}}
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3H7a2 2 0 00-2 2v2M9 3h6M9 3V1m6 2h2a2 2 0 012 2v2m0 0V5m0 2v10m0 0v2a2 2 0 01-2 2h-2m0 0H9m6 0v2M9 21H7a2 2 0 01-2-2v-2m0 0V9M5 9H3m2 0h14m0 0h2M5 15H3m2 0h14m0 0h2M9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#0B1D2E] mb-3 group-hover:text-[#00AEEF] transition-colors duration-300">Technical Depth</h3>
                <p class="text-[#5A7184] leading-relaxed">
                    We go deep. Not just frameworks and tools, but the fundamentals that sit beneath them. We understand why things work, not just how to make them work today.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-[#00AEEF] to-[#4DD8F5] rounded-b-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            {{-- Card 2: Business Alignment --}}
            <div class="group relative bg-[#F5F8FC] rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF] hover:shadow-xl transition-all duration-300" data-animate="fade-up" data-delay="100">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-[#00AEEF]/10 mb-6 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    {{-- Chart Bar Icon --}}
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 13.5V19a1 1 0 001 1h3a1 1 0 001-1v-5.5M9 8.5V19a1 1 0 001 1h3a1 1 0 001-1V8.5M15 11.5V19a1 1 0 001 1h3a1 1 0 001-1v-7.5M3 13.5a9 9 0 0118-5"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#0B1D2E] mb-3 group-hover:text-[#00AEEF] transition-colors duration-300">Business Alignment</h3>
                <p class="text-[#5A7184] leading-relaxed">
                    Engineering must serve outcomes. We start with the business problem, not the technology. Every architectural decision is weighed against its real-world impact.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-[#00AEEF] to-[#4DD8F5] rounded-b-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            {{-- Card 3: Honest Collaboration --}}
            <div class="group relative bg-[#F5F8FC] rounded-2xl p-8 border border-[#E2EAF4] hover:border-[#00AEEF] hover:shadow-xl transition-all duration-300" data-animate="fade-up" data-delay="200">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-[#00AEEF]/10 mb-6 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    {{-- Chat Bubble Icon --}}
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#0B1D2E] mb-3 group-hover:text-[#00AEEF] transition-colors duration-300">Honest Collaboration</h3>
                <p class="text-[#5A7184] leading-relaxed">
                    We tell you what's hard, what's possible, and what's a bad idea — with respect. You deserve a partner who gives you the full picture, not just the easy sell.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-[#00AEEF] to-[#4DD8F5] rounded-b-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     VALUES SECTION
     ============================================================ --}}
<section class="bg-[#0B1D2E] py-24 relative overflow-hidden">

    {{-- Background decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] rounded-full bg-[#00AEEF] opacity-[0.03] blur-3xl translate-x-1/2 -translate-y-1/2"></div>
        <svg class="absolute inset-0 w-full h-full opacity-[0.02]" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="values-grid" width="80" height="80" patternUnits="userSpaceOnUse">
                    <path d="M 80 0 L 0 0 0 80" fill="none" stroke="#00AEEF" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#values-grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate="fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Core Values</span>
                <div class="h-px w-8 bg-[#00AEEF]"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">What Drives Us</h2>
        </div>

        {{-- 4-col grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Craftsmanship --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" data-animate="fade-up" data-delay="0">
                <div class="w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center mb-5 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z"/>
                    </svg>
                </div>
                <div class="text-[#00AEEF] text-xs font-semibold tracking-widest uppercase mb-3">01</div>
                <h3 class="text-xl font-bold text-white mb-3">Craftsmanship</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">We care about code quality, architecture, and the details that matter — because good work compounds over time.</p>
            </div>

            {{-- Transparency --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" data-animate="fade-up" data-delay="100">
                <div class="w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center mb-5 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="text-[#00AEEF] text-xs font-semibold tracking-widest uppercase mb-3">02</div>
                <h3 class="text-xl font-bold text-white mb-3">Transparency</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">No surprises. Clear communication at every stage — on progress, risks, costs, and decisions.</p>
            </div>

            {{-- Innovation --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" data-animate="fade-up" data-delay="200">
                <div class="w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center mb-5 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <div class="text-[#00AEEF] text-xs font-semibold tracking-widest uppercase mb-3">03</div>
                <h3 class="text-xl font-bold text-white mb-3">Innovation</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">We actively explore emerging technologies to bring real advantage — not trends for their own sake, but tools that move the needle.</p>
            </div>

            {{-- Delivery --}}
            <div class="group bg-[#112237] rounded-2xl p-8 border border-[#1A3352] hover:border-[#00AEEF]/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" data-animate="fade-up" data-delay="300">
                <div class="w-12 h-12 rounded-xl bg-[#00AEEF]/10 flex items-center justify-center mb-5 group-hover:bg-[#00AEEF]/20 transition-colors duration-300">
                    <svg class="w-6 h-6 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                    </svg>
                </div>
                <div class="text-[#00AEEF] text-xs font-semibold tracking-widest uppercase mb-3">04</div>
                <h3 class="text-xl font-bold text-white mb-3">Delivery</h3>
                <p class="text-[#94A3B8] text-sm leading-relaxed">Ideas are worthless without execution. We ship — on time, with quality, and with the discipline to follow through.</p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     TECHNOLOGY EXPERTISE SECTION
     ============================================================ --}}
<section class="bg-[#F5F8FC] py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="text-center mb-16" data-animate="fade-up">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Our Stack</span>
                <div class="h-px w-8 bg-[#00AEEF]"></div>
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B1D2E]">Technologies We Master</h2>
            <p class="mt-4 text-[#5A7184] max-w-xl mx-auto">A modern, battle-tested stack selected for performance, scalability, and developer productivity.</p>
        </div>

        {{-- Category Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- AI & ML --}}
            <div class="bg-white rounded-2xl p-7 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-lg transition-all duration-300" data-animate="fade-up" data-delay="0">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-9 h-9 rounded-lg bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#0B1D2E] text-lg">AI & Machine Learning</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Python', 'PyTorch', 'TensorFlow', 'LangChain', 'OpenAI API'] as $tech)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-purple-50 text-purple-700 border border-purple-100">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Frontend --}}
            <div class="bg-white rounded-2xl p-7 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-lg transition-all duration-300" data-animate="fade-up" data-delay="80">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-9 h-9 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0H3"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#0B1D2E] text-lg">Frontend</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['React', 'Next.js', 'TypeScript', 'Tailwind CSS', 'Vue.js'] as $tech)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Backend --}}
            <div class="bg-white rounded-2xl p-7 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-lg transition-all duration-300" data-animate="fade-up" data-delay="160">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-9 h-9 rounded-lg bg-emerald-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#0B1D2E] text-lg">Backend</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Laravel/PHP', 'Node.js', 'Go', 'FastAPI', 'REST/GraphQL'] as $tech)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Cloud --}}
            <div class="bg-white rounded-2xl p-7 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-lg transition-all duration-300" data-animate="fade-up" data-delay="240">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-9 h-9 rounded-lg bg-[#00AEEF]/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#0B1D2E] text-lg">Cloud & DevOps</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['AWS', 'Azure', 'GCP', 'Kubernetes', 'Docker', 'Terraform'] as $tech)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-[#00AEEF]/10 text-[#007DB8] border border-[#00AEEF]/20">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Data --}}
            <div class="bg-white rounded-2xl p-7 border border-[#E2EAF4] hover:border-[#00AEEF]/40 hover:shadow-lg transition-all duration-300 sm:col-span-2 lg:col-span-1" data-animate="fade-up" data-delay="320">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-9 h-9 rounded-lg bg-amber-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 6c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-[#0B1D2E] text-lg">Data Engineering</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['PostgreSQL', 'MongoDB', 'Redis', 'Apache Kafka', 'dbt'] as $tech)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-100">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- CTA --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-16" data-animate="fade-up">
            <a href="{{ route('careers') }}"
               class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-[#00AEEF] text-white font-semibold hover:bg-[#007DB8] transition-all duration-200 shadow-lg shadow-[#00AEEF]/20 hover:shadow-[#00AEEF]/30 hover:-translate-y-0.5">
                Join the Team
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-[#0B1D2E] font-semibold border border-[#E2EAF4] hover:border-[#00AEEF] hover:text-[#00AEEF] transition-all duration-200 hover:-translate-y-0.5">
                Talk to Us
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

@endsection
