@extends('layouts.app')

@section('title', $article['title'])
@section('meta_description', $article['excerpt'] ?? 'Cenrion Insights: Technical depth meets architectural clarity.')

@push('styles')
<style>
    .article-glow {
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(6,182,212,0.12) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }
</style>
@endpush

@section('content')

{{-- Hero Section --}}
<section class="relative overflow-hidden pt-12 pb-16 lg:pt-16 lg:pb-20" style="background: linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 100%);">
    <div class="article-glow" style="top: -100px; right: -100px;"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 sm:px-8">
        
        {{-- Back Link --}}
        <div class="mb-8" data-animate data-delay="40">
            <a href="{{ route('insights') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#5A7184] hover:text-cyan transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Back to All Articles
            </a>
        </div>

        {{-- Meta Row --}}
        <div class="flex flex-wrap items-center gap-3 mb-6" data-animate data-delay="80">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-[#06B6D4]/10 text-[#0891B2] border border-[#06B6D4]/20">
                {{ $article['category'] ?? 'Engineering & AI' }}
            </span>
            <span class="text-xs font-medium text-[#94A3B8] flex items-center gap-1.5">
                <svg class="w-4 h-4 text-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ $article['reading_time'] ?? '5' }} min read
            </span>
            <span class="text-xs font-medium text-[#94A3B8]">&bull;</span>
            <span class="text-xs font-medium text-[#94A3B8]">
                {{ $article['date'] ?? '' }}
            </span>
        </div>

        {{-- Main Article Title --}}
        <h1 class="font-extrabold tracking-tight mb-8 leading-[1.15]"
            style="font-size: clamp(2.2rem, 4vw, 3.5rem); color: #062538; font-family: 'Plus Jakarta Sans', sans-serif; letter-spacing: -0.03em;"
            data-animate data-delay="120">
            {{ $article['title'] }}
        </h1>

        {{-- Author Row --}}
        <div class="flex items-center gap-3.5 pb-8 border-b border-[#E2EAF4]" data-animate data-delay="160">
            <div class="w-10 h-10 rounded-full flex items-center justify-center font-black text-white text-sm" style="background: linear-gradient(135deg, #06B6D4 0%, #0891B2 100%);">
                C
            </div>
            <div>
                <div class="text-sm font-bold text-[#062538]">{{ $article['author'] ?? 'Cenrion Engineering' }}</div>
                <div class="text-xs text-[#5A7184]">Engineering Research &bull; Architectural Frameworks</div>
            </div>
        </div>

    </div>
</section>

{{-- Content Body Section --}}
<section class="py-16 bg-white relative">
    <div class="max-w-4xl mx-auto px-6 sm:px-8">
        
        {{-- Excerpt Highlight Box --}}
        @if(!empty($article['excerpt']))
            <div class="p-6 sm:p-8 rounded-2xl mb-12 border-l-4 border-cyan bg-[#F5F8FC] border border-[#E2EAF4]" style="border-left-color: #06B6D4;">
                <p class="text-base sm:text-lg font-medium leading-relaxed text-[#062538]">
                    {{ $article['excerpt'] }}
                </p>
            </div>
        @endif

        {{-- Article Paragraphs --}}
        <div class="prose prose-lg max-w-none space-y-6 text-[#334155] leading-relaxed text-base sm:text-lg font-sans">
            @php
                $content = $article['content'] ?? '';
                if (is_array($content)) {
                    $paragraphs = $content;
                } else {
                    $paragraphs = array_filter(array_map('trim', explode("\n", $content)));
                }
            @endphp

            @foreach($paragraphs as $paragraph)
                @if(!empty($paragraph))
                    <p class="mb-6 leading-relaxed">{{ $paragraph }}</p>
                @endif
            @endforeach
        </div>

        {{-- Bottom CTA Box --}}
        <div class="mt-16 p-8 rounded-3xl text-white relative overflow-hidden"
             style="background: linear-gradient(145deg, #072B40 0%, #062538 60%, #09344D 100%); border: 1.5px solid rgba(6,182,212,0.35); box-shadow: 0 20px 50px rgba(6,37,56,0.3);">
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl sm:text-2xl font-extrabold text-white mb-2 font-heading">Need strategic engineering intelligence?</h3>
                    <p class="text-xs sm:text-sm text-cyan-100/80 max-w-lg leading-relaxed">
                        Talk with our senior engineering architects about deploying AI agent workflows, micro-frontend migrations, or high-throughput cloud platforms.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn-accent whitespace-nowrap shrink-0 px-6 py-3.5 text-sm font-bold">
                    Talk to Us &rarr;
                </a>
            </div>
        </div>

    </div>
</section>

{{-- Related Articles Section --}}
@if(!empty($related) && count($related) > 0)
<section class="py-20" style="background: #F8FAFC; border-top: 1px solid #E2EAF4;">
    <div class="max-w-8xl mx-auto px-6 sm:px-8 lg:px-10">
        <div class="flex items-center justify-between mb-10">
            <div>
                <span class="section-tag block mb-1">More Perspectives</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-[#062538] font-heading">Related Insights</h3>
            </div>
            <a href="{{ route('insights') }}" class="text-xs sm:text-sm font-bold text-cyan hover:underline">
                View all articles &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
            @foreach($related as $rel)
                <div class="bg-white rounded-2xl border border-[#E2EAF4] p-6 flex flex-col justify-between hover:-translate-y-1 transition-all shadow-sm h-full">
                    <div class="flex-1 flex flex-col">
                        <div class="flex items-center justify-between text-xs text-gray-400 mb-3">
                            <span class="font-bold text-[#0891B2]">{{ $rel['category'] ?? 'Engineering' }}</span>
                            <span>{{ $rel['reading_time'] ?? '5' }} min read</span>
                        </div>
                        <h4 class="font-bold text-[#062538] text-base mb-3 leading-snug hover:text-cyan transition-colors min-h-[2.75rem] line-clamp-2">
                            <a href="{{ route('insights.show', $rel['slug']) }}">{{ $rel['title'] }}</a>
                        </h4>
                        <p class="text-xs text-[#5A7184] line-clamp-2 leading-relaxed mb-4 flex-1">
                            {{ $rel['excerpt'] }}
                        </p>
                    </div>
                    <div class="pt-4 border-t border-[#F1F5F9] mt-auto">
                        <a href="{{ route('insights.show', $rel['slug']) }}" class="text-xs font-bold text-cyan inline-flex items-center gap-1">
                            Read article &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
