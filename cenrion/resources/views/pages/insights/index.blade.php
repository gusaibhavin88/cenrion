@extends('layouts.app')

@section('title', 'Insights')

@section('content')

{{-- ============================================================
     HERO SECTION
     ============================================================ --}}
<section class="relative bg-[#F5F8FC] pt-32 pb-16 overflow-hidden">
    {{-- Subtle decorative accent --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none" aria-hidden="true">
        <div class="absolute -top-20 -right-20 w-[400px] h-[400px] rounded-full bg-[#00AEEF] opacity-[0.05] blur-3xl"></div>
        <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-[#00AEEF]/30 to-transparent"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            {{-- Eyebrow --}}
            <div class="inline-flex items-center gap-2 mb-5" data-animate="fade-up" data-delay="0">
                <div class="h-px w-8 bg-[#00AEEF]"></div>
                <span class="text-[#00AEEF] text-sm font-semibold tracking-widest uppercase">Thought Leadership</span>
            </div>

            {{-- Heading --}}
            <h1 class="js-split text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#0B1D2E] leading-tight tracking-tight mb-5" data-animate="fade-up" data-delay="100">
                Insights &<br>
                <span class="text-[#00AEEF]">Perspectives</span>
            </h1>

            {{-- Subtext --}}
            <p class="text-lg text-[#5A7184] leading-relaxed" data-animate="fade-up" data-delay="200">
                Technical depth meets business clarity. No hype, no filler — just engineering thinking applied to real problems.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================
     ARTICLES SECTION (with Alpine.js category filter)
     ============================================================ --}}
<section class="bg-[#F5F8FC] py-12 pb-24"
         x-data="{
             activeCategory: 'all',
             categories: [
                 { id: 'all', label: 'All' },
                 { id: 'ai-applied-tech', label: 'AI & Applied Tech' },
                 { id: 'engineering-strategy', label: 'Engineering Strategy' }
             ]
         }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap items-center gap-2 mb-10" data-animate="fade-up">
            <template x-for="cat in categories" :key="cat.id">
                <button
                    @click="activeCategory = cat.id"
                    :class="activeCategory === cat.id
                        ? 'bg-[#00AEEF] text-white shadow-md shadow-[#00AEEF]/20 border-transparent'
                        : 'bg-white text-[#5A7184] border-[#E2EAF4] hover:border-[#00AEEF] hover:text-[#00AEEF]'"
                    class="px-5 py-2 rounded-full text-sm font-semibold border transition-all duration-200 cursor-pointer"
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
                    class="group bg-white rounded-2xl border border-[#E2EAF4] overflow-hidden hover:border-[#00AEEF]/40 hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
                    data-animate="fade-up">

                    {{-- Card Header / Category Banner --}}
                    <div class="h-1.5 w-full
                        @if(($article['category_slug'] ?? '') === 'ai-applied-tech') bg-gradient-to-r from-purple-400 to-[#00AEEF]
                        @elseif(($article['category_slug'] ?? '') === 'engineering-strategy') bg-gradient-to-r from-emerald-400 to-[#00AEEF]
                        @else bg-gradient-to-r from-[#00AEEF] to-[#4DD8F5]
                        @endif">
                    </div>

                    <div class="p-7">
                        {{-- Category Badge + Read Time --}}
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold
                                @if(($article['category_slug'] ?? '') === 'ai-applied-tech') bg-purple-50 text-purple-700 border border-purple-100
                                @elseif(($article['category_slug'] ?? '') === 'engineering-strategy') bg-emerald-50 text-emerald-700 border border-emerald-100
                                @else bg-[#00AEEF]/10 text-[#007DB8] border border-[#00AEEF]/20
                                @endif">
                                {{ $article['category'] ?? 'General' }}
                            </span>
                            <span class="text-[#94A3B8] text-xs flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $article['reading_time'] ?? '5' }} min read
                            </span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-xl font-bold text-[#0B1D2E] mb-3 group-hover:text-[#00AEEF] transition-colors duration-200 leading-snug">
                            <a href="{{ route('insights.show', $article['slug']) }}" class="after:absolute after:inset-0">
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
                                <div class="w-8 h-8 rounded-full bg-[#00AEEF]/10 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                    </svg>
                                </div>
                                <span class="text-[#0B1D2E] text-sm font-medium">{{ $article['author'] ?? 'Cenrion Team' }}</span>
                            </div>
                            <span class="text-[#94A3B8] text-xs">
                                {{ isset($article['published_at']) ? \Carbon\Carbon::parse($article['published_at'])->format('d M Y') : '' }}
                            </span>
                        </div>
                    </div>

                    {{-- Read more link indicator --}}
                    <div class="px-7 pb-6">
                        <a href="{{ route('insights.show', $article['slug']) }}"
                           class="inline-flex items-center gap-1.5 text-[#00AEEF] text-sm font-semibold hover:gap-2.5 transition-all duration-200">
                            Read article
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>

                </article>
            @empty
                {{-- Empty State --}}
                <div class="md:col-span-2 text-center py-20" data-animate="fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-[#00AEEF]/10 flex items-center justify-center mx-auto mb-5">
                        <svg class="w-8 h-8 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#0B1D2E] mb-2">No articles yet</h3>
                    <p class="text-[#5A7184]">Insights are coming soon. Check back shortly.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>

{{-- ============================================================
     NEWSLETTER SUBSCRIPTION TEASER
     ============================================================ --}}
<section class="bg-[#112237] py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center" data-animate="fade-up">

            {{-- Icon --}}
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#00AEEF]/10 mb-6">
                <svg class="w-7 h-7 text-[#00AEEF]" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                </svg>
            </div>

            {{-- Heading --}}
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-3">Stay Sharp</h2>
            <p class="text-[#94A3B8] mb-8 leading-relaxed">
                Technical insights, engineering perspectives, and AI developments. No fluff, no spam — just clarity delivered to your inbox.
            </p>

            {{-- Newsletter Form --}}
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" action="#" method="POST" @submit.prevent>
                @csrf
                <label for="newsletter-email" class="sr-only">Email address</label>
                <input
                    id="newsletter-email"
                    type="email"
                    name="email"
                    placeholder="your@email.com"
                    required
                    class="flex-1 px-4 py-3 rounded-xl bg-[#0B1D2E] border border-[#1A3352] text-white placeholder-[#5A7184] focus:outline-none focus:border-[#00AEEF] focus:ring-1 focus:ring-[#00AEEF] transition-colors duration-200 text-sm">
                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-[#00AEEF] text-white font-semibold text-sm hover:bg-[#007DB8] transition-all duration-200 shadow-lg shadow-[#00AEEF]/20 whitespace-nowrap flex-shrink-0">
                    Subscribe
                </button>
            </form>

            <p class="text-[#5A7184] text-xs mt-4">No spam. Unsubscribe any time.</p>

        </div>
    </div>
</section>

@endsection
