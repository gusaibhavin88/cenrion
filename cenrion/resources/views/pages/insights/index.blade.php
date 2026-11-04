@extends('layouts.app')

@section('title', 'Insights')
@section('meta_description', 'Cenrion Insights — technical depth meets business clarity. Engineering thinking applied to real production problems.')

@push('styles')
<style>
    .insights-glow {
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(6,182,212,0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }
    .insight-card-hover {
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .insight-card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(6,37,56,0.1);
    }
</style>
@endpush

@section('content')

{{-- ============================================================
     HERO SECTION: Modern Engineering Research Architecture
     ============================================================ --}}
<section class="home-hero relative overflow-hidden pt-8 pb-16 lg:pt-12 lg:pb-20" style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 100%);">
    <div class="home-hero-glow" aria-hidden="true"></div>
    <div class="insights-glow" style="top: -100px; right: -100px;"></div>

    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center">
            
            {{-- Left column: Copy & CTAs --}}
            <div class="lg:col-span-7">
                <div class="inline-flex items-center gap-2 mb-4" data-animate data-delay="40">
                    <span class="inline-block w-5 h-px" style="background:#06B6D4;"></span>
                    <span class="section-tag">ENGINEERING RESEARCH &bull; ARCHITECTURAL PERSPECTIVES</span>
                </div>

                <h1 class="font-extrabold tracking-tight mb-5 leading-[1.1]"
                    style="font-size:clamp(2.5rem,4.5vw,4.1rem); color:#062538; font-family:'Plus Jakarta Sans',sans-serif; letter-spacing:-0.03em;"
                    data-animate data-delay="80">
                    Technical depth meets<br>
                    <span class="gradient-text">architectural clarity.</span>
                </h1>

                <p class="text-lg lg:text-xl leading-relaxed mb-8 max-w-2xl"
                   style="color:#5A7184;" data-animate data-delay="120">
                    Real engineering thinking applied to production challenges. Zero vendor hype, zero vague consulting slides &mdash;
                    just concrete frameworks for architecture, scalable systems, and practical generative AI ROI.
                </p>

                <div class="flex flex-wrap items-center gap-4 mb-10" data-animate data-delay="160">
                    <a href="#articles-list" class="btn-accent" style="padding: 14px 30px; font-size: 15px;">
                        Explore Articles
                        <svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#newsletter-section"
                       class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl text-sm font-bold transition-all duration-200 hover:-translate-y-0.5"
                       style="background: #FFFFFF; color: #062538; border: 1.5px solid #E2EAF4; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        <svg class="w-4 h-4 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                        Stay Updated
                    </a>
                </div>

                {{-- Research Metrics --}}
                <div class="grid grid-cols-3 gap-4 pt-6 border-t" style="border-color: #E2EAF4;" data-animate data-delay="200">
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">100%</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Peer Reviewed</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Real</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Production Data</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-extrabold tracking-tight mb-1" style="color: #062538; font-family:'Plus Jakarta Sans',sans-serif;">Quarterly</div>
                        <div class="text-xs font-semibold uppercase tracking-wider" style="color: #0891B2;">Applied AI Reports</div>
                    </div>
                </div>
            </div>

            {{-- Right column: Research Console / Technical Paper Snapshot --}}
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
                            <span class="text-xs font-mono font-semibold ml-2 text-cyan-200">cenrion-insights.pub</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-extrabold tracking-wide uppercase"
                              style="background: rgba(6,182,212,0.18); border: 1px solid rgba(6,182,212,0.4); color: #67E8F9;">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-pulse"></span>
                            Featured Paper
                        </span>
                    </div>

                    {{-- Featured Article Preview inside Console --}}
                    <div class="p-4 rounded-2xl mb-4 border" style="background: rgba(10,45,68,0.7); border: 1px solid rgba(6,182,212,0.25);">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-cyan-900/60 text-cyan-300 border border-cyan-500/30">AI &amp; APPLIED TECH</span>
                            <span class="text-[10px] font-mono text-gray-400">8 min read</span>
                        </div>
                        <h4 class="text-base font-bold text-white mb-2 leading-snug">
                            Where Generative AI Actually Creates Business Value
                        </h4>
                        <p class="text-xs text-gray-300 leading-relaxed mb-3">
                            Beyond the hype &mdash; specific, measurable engineering patterns separating real ROI from expensive experimentation.
                        </p>
                        <div class="flex items-center gap-2 text-[11px] font-mono text-cyan-200">
                            <span>Author: Cenrion Research Squad</span>
                        </div>
                    </div>

                    {{-- Research Benchmarks Chips --}}
                    <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">P99 Latency</span>
                            <span class="text-cyan-300 font-bold">&lt; 180ms</span>
                        </div>
                        <div class="px-3 py-2 rounded-lg flex items-center justify-between" style="background: rgba(6,37,56,0.6); border: 1px solid rgba(255,255,255,0.08);">
                            <span class="text-gray-400">ROI Pattern</span>
                            <span class="text-emerald-400 font-bold">Validated &check;</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     ARTICLES SECTION (with Alpine.js category filter)
     ============================================================ --}}
<section id="articles-list" class="bg-white py-20 pb-28 relative overflow-hidden"
         x-data="{
             activeCategory: 'all',
             categories: [
                 { id: 'all', label: 'All Articles' },
                 { id: 'ai-applied-tech', label: 'AI & Applied Tech' },
                 { id: 'engineering-strategy', label: 'Engineering Strategy' }
             ]
         }">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap items-center gap-3 mb-12" data-animate="fade-up">
            <template x-for="cat in categories" :key="cat.id">
                <button
                    @click="activeCategory = cat.id"
                    :class="activeCategory === cat.id
                        ? 'bg-[#06B6D4] text-white shadow-lg shadow-[#06B6D4]/25 border-transparent'
                        : 'bg-white text-[#5A7184] border-[#E2EAF4] hover:border-[#06B6D4] hover:text-[#06B6D4]'"
                    class="px-5 py-2.5 rounded-full text-sm font-bold border transition-all duration-200 cursor-pointer"
                    x-text="cat.label">
                </button>
            </template>
        </div>

        {{-- Article Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($articles as $article)
                <article
                    x-show="activeCategory === 'all' || activeCategory === '{{ $article['category_slug'] ?? 'all' }}'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="group bg-white rounded-3xl border border-[#E2EAF4] overflow-hidden insight-card-hover relative flex flex-col justify-between"
                    style="box-shadow: 0 10px 30px rgba(6,37,56,0.04);"
                    data-animate="fade-up">

                    {{-- Colored Accent Bar --}}
                    <div class="h-2 w-full
                        @if(($article['category_slug'] ?? '') === 'ai-applied-tech') bg-gradient-to-r from-cyan-400 to-[#06B6D4]
                        @elseif(($article['category_slug'] ?? '') === 'engineering-strategy') bg-gradient-to-r from-indigo-500 to-[#06B6D4]
                        @else bg-gradient-to-r from-[#06B6D4] to-[#67E8F9]
                        @endif">
                    </div>

                    <div class="p-8">
                        {{-- Badge + Read Time --}}
                        <div class="flex items-center justify-between mb-5">
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full text-xs font-bold
                                @if(($article['category_slug'] ?? '') === 'ai-applied-tech') bg-cyan-50 text-cyan-800 border border-cyan-200
                                @elseif(($article['category_slug'] ?? '') === 'engineering-strategy') bg-indigo-50 text-indigo-800 border border-indigo-200
                                @else bg-[#06B6D4]/10 text-[#0891B2] border border-[#06B6D4]/20
                                @endif">
                                {{ $article['category'] ?? 'General' }}
                            </span>
                            <span class="text-xs font-semibold flex items-center gap-1.5" style="color:#94A3B8;">
                                <svg class="w-4 h-4 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $article['reading_time'] ?? '5' }} min read
                            </span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-2xl font-extrabold text-[#062538] mb-3 group-hover:text-cyan transition-colors duration-200 leading-snug"
                            style="font-family:'Plus Jakarta Sans',sans-serif;">
                            <a href="{{ route('insights.show', $article['slug']) }}">
                                {{ $article['title'] }}
                            </a>
                        </h3>

                        {{-- Excerpt --}}
                        <p class="text-[#5A7184] text-sm leading-relaxed mb-6 line-clamp-3">
                            {{ $article['excerpt'] ?? '' }}
                        </p>

                        {{-- Author + Date --}}
                        <div class="flex items-center justify-between pt-5 border-t border-[#E2EAF4]">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-black text-white"
                                     style="background: #06B6D4;">
                                    C
                                </div>
                                <span class="text-[#062538] text-xs font-bold">{{ $article['author'] ?? 'Cenrion Team' }}</span>
                            </div>
                            <span class="text-[#94A3B8] text-xs font-mono">
                                {{ isset($article['published_at']) ? \Carbon\Carbon::parse($article['published_at'])->format('d M Y') : '' }}
                            </span>
                        </div>
                    </div>

                    {{-- Read article button footer --}}
                    <div class="px-8 pb-7">
                        <a href="{{ route('insights.show', $article['slug']) }}"
                           class="inline-flex items-center gap-1.5 text-cyan text-sm font-bold group-hover:gap-2.5 transition-all duration-200">
                            Read article
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>

                </article>
            @empty
                <div class="md:col-span-2 text-center py-20" data-animate="fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-[#06B6D4]/10 flex items-center justify-center mx-auto mb-5">
                        <svg class="w-8 h-8 text-[#06B6D4]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#062538] mb-2">No articles yet</h3>
                    <p class="text-[#5A7184]">Insights are coming soon. Check back shortly.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

{{-- ============================================================
     NEWSLETTER SUBSCRIPTION SECTION (Deep Navy)
     ============================================================ --}}
<section id="newsletter-section" class="py-24 relative overflow-hidden" style="background:#062538;">
    <div style="position:absolute;left:-80px;top:20%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.15),transparent 70%);border-radius:9999px;pointer-events:none;"></div>
    <div style="position:absolute;right:-80px;bottom:10%;width:420px;height:420px;background:radial-gradient(circle,rgba(6,182,212,0.15),transparent 70%);border-radius:9999px;pointer-events:none;"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 sm:px-8 lg:px-10 text-center" data-animate="fade-up">

        {{-- Icon --}}
        <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl mb-6"
             style="background: rgba(6,182,212,0.15); border: 1.5px solid rgba(6,182,212,0.3);">
            <svg class="w-7 h-7 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
            </svg>
        </div>

        <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-3" style="font-family:'Plus Jakarta Sans',sans-serif;">
            Stay Sharp with Cenrion Insights
        </h2>
        <p class="text-gray-300 mb-8 max-w-lg mx-auto leading-relaxed text-sm sm:text-base">
            Technical breakdowns, engineering perspectives, and real AI architecture. No spam, no marketing fluff &mdash; delivered straight to your inbox.
        </p>

        {{-- Newsletter Form --}}
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" action="#" method="POST" @submit.prevent>
            @csrf
            <label for="newsletter-email" class="sr-only">Email address</label>
            <input
                id="newsletter-email"
                type="email"
                name="email"
                placeholder="your.email@company.com"
                required
                class="flex-1 px-5 py-3.5 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-cyan focus:ring-1 focus:ring-cyan transition-colors text-sm"
                style="background: #0A2D44; border: 1.5px solid rgba(6,182,212,0.3);">
            <button
                type="submit"
                class="btn-accent whitespace-nowrap"
                style="padding: 12px 28px; font-size: 14px;">
                Subscribe
            </button>
        </form>

        <p class="text-gray-400 text-xs mt-4">Zero spam. Unsubscribe with one click any time.</p>

    </div>
</section>

@endsection
