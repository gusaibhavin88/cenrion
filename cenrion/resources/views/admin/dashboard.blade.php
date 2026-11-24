@extends('admin.layout')

@section('title', 'Dashboard')
@section('page_title', 'Overview & Control Center')
@section('page_subtitle', 'System health, published content, open positions and navigation settings')

@section('content')
<div class="space-y-8">

    {{-- Top Metrics Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        
        {{-- Blogs Metric Card --}}
        <div class="bg-white rounded-2xl border border-[#E2EAF4] p-6 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-[#5A7184]">Blog Articles</span>
                <div class="w-10 h-10 rounded-xl bg-cyan-50 border border-cyan-100 flex items-center justify-center text-cyan-600">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-2">
                <span class="text-3xl font-extrabold text-[#062538] font-heading">{{ $stats['total_blogs'] }}</span>
                <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">{{ $stats['published_blogs'] }} Published</span>
                @if($stats['draft_blogs'] > 0)
                    <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full">{{ $stats['draft_blogs'] }} Draft</span>
                @endif
            </div>
            <div class="pt-3 border-t border-[#F1F5F9] flex items-center justify-between text-xs">
                <span class="text-[#5A7184]">Insights live on website</span>
                <a href="{{ route('admin.blogs.index') }}" class="font-bold text-cyan-600 hover:text-cyan-700 inline-flex items-center gap-1">Manage &rarr;</a>
            </div>
        </div>

        {{-- Vacancies Metric Card --}}
        <div class="bg-white rounded-2xl border border-[#E2EAF4] p-6 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-[#5A7184]">Careers & Open Positions</span>
                <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-2">
                <span class="text-3xl font-extrabold text-[#062538] font-heading">{{ $stats['total_vacancies'] }}</span>
                <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">{{ $stats['active_vacancies'] }} Active Cohort</span>
            </div>
            <div class="pt-3 border-t border-[#F1F5F9] flex items-center justify-between text-xs">
                <span class="text-[#5A7184]">Displayed on /careers</span>
                <a href="{{ route('admin.vacancies.index') }}" class="font-bold text-indigo-600 hover:text-indigo-700 inline-flex items-center gap-1">Manage &rarr;</a>
            </div>
        </div>

        {{-- Navbar Metric Card --}}
        <div class="bg-white rounded-2xl border border-[#E2EAF4] p-6 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-wider text-[#5A7184]">Navbar Radio Control</span>
                <div class="w-10 h-10 rounded-xl bg-cyan-50 border border-cyan-100 flex items-center justify-center text-cyan-600">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-2">
                <span class="text-3xl font-extrabold text-[#062538] font-heading">{{ $stats['visible_navbar'] }} / {{ count($navbar) }}</span>
                <span class="text-xs font-semibold text-cyan-700 bg-cyan-50 px-2 py-0.5 rounded-full">Visible Items</span>
                @if($stats['hidden_navbar'] > 0)
                    <span class="text-xs font-semibold text-gray-600 bg-gray-100 px-2 py-0.5 rounded-full">{{ $stats['hidden_navbar'] }} Hidden</span>
                @endif
            </div>
            <div class="pt-3 border-t border-[#F1F5F9] flex items-center justify-between text-xs">
                <span class="text-[#5A7184]">Controlled via radio buttons</span>
                <a href="{{ route('admin.navbar.index') }}" class="font-bold text-cyan-600 hover:text-cyan-700 inline-flex items-center gap-1">Configure &rarr;</a>
            </div>
        </div>

    </div>

    {{-- Quick Action Bar --}}
    <div class="bg-gradient-to-r from-[#062538] to-[#0A2D44] rounded-2xl p-6 text-white flex flex-col md:flex-row items-center justify-between gap-4 shadow-lg shadow-navy/10">
        <div>
            <h2 class="text-lg font-bold font-heading">Quick Actions</h2>
            <p class="text-xs text-gray-300">Quickly create new content or configure site navigation</p>
        </div>
        <div class="flex flex-wrap items-center gap-3 w-full md:w-auto">
            <a href="{{ route('admin.blogs.create') }}" class="px-4 py-2.5 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all shadow-md shadow-cyan-500/25">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                New Blog Article
            </a>
            <a href="{{ route('admin.vacancies.create') }}" class="px-4 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs border border-white/20 flex items-center justify-center gap-2 transition-all">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                New Job Opening
            </a>
            <a href="{{ route('admin.navbar.index') }}" class="px-4 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-cyan-300 font-bold text-xs border border-cyan-400/30 flex items-center justify-center gap-2 transition-all">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                Navbar Radio Settings
            </a>
        </div>
    </div>

    {{-- Content Sections Grid --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        {{-- Recent Blogs Section --}}
        <div class="bg-white rounded-2xl border border-[#E2EAF4] shadow-sm overflow-hidden">
            <div class="p-5 border-b border-[#E2EAF4] flex items-center justify-between">
                <div>
                    <h3 class="font-extrabold text-[#062538] font-heading text-base">Recent Blog Articles</h3>
                    <p class="text-xs text-[#5A7184]">Manage Insights published on the website</p>
                </div>
                <a href="{{ route('admin.blogs.index') }}" class="text-xs font-bold text-cyan-600 hover:text-cyan-700">View All ({{ count($recentBlogs) }})</a>
            </div>

            <div class="divide-y divide-[#F1F5F9]">
                @forelse($recentBlogs as $blog)
                    <div class="p-4 hover:bg-gray-50 transition-colors flex items-center justify-between gap-3">
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 rounded text-[10px] font-extrabold uppercase {{ ($blog['status'] ?? 'published') === 'published' ? 'bg-emerald-50 text-emerald-700' : 'bg-amber-50 text-amber-700' }}">
                                    {{ $blog['status'] ?? 'published' }}
                                </span>
                                <span class="text-xs text-gray-400 font-medium">{{ $blog['category'] ?? 'AI & Tech' }}</span>
                            </div>
                            <h4 class="text-sm font-bold text-[#062538] truncate hover:text-cyan-600">
                                <a href="{{ route('admin.blogs.edit', $blog['id']) }}">{{ $blog['title'] }}</a>
                            </h4>
                            <p class="text-xs text-gray-500 truncate mt-0.5">{{ $blog['excerpt'] }}</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <a href="{{ route('admin.blogs.edit', $blog['id']) }}" class="p-1.5 text-gray-400 hover:text-cyan-600 hover:bg-cyan-50 rounded-lg transition-colors" title="Edit">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                            <a href="{{ route('insights.show', $blog['slug']) }}" target="_blank" class="p-1.5 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors" title="Preview on Website">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-6 text-center text-xs text-gray-500">No blog articles yet.</div>
                @endforelse
            </div>
        </div>

        {{-- Open Vacancies Section --}}
        <div class="bg-white rounded-2xl border border-[#E2EAF4] shadow-sm overflow-hidden">
            <div class="p-5 border-b border-[#E2EAF4] flex items-center justify-between">
                <div>
                    <h3 class="font-extrabold text-[#062538] font-heading text-base">Open Vacancies</h3>
                    <p class="text-xs text-[#5A7184]">Manage career roles shown under /careers</p>
                </div>
                <a href="{{ route('admin.vacancies.index') }}" class="text-xs font-bold text-cyan-600 hover:text-cyan-700">View All ({{ count($recentVacancies) }})</a>
            </div>

            <div class="divide-y divide-[#F1F5F9]">
                @forelse($recentVacancies as $vacancy)
                    <div class="p-4 hover:bg-gray-50 transition-colors flex items-center justify-between gap-3">
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 rounded text-[10px] font-extrabold uppercase {{ ($vacancy['status'] ?? 'active') === 'active' ? 'bg-emerald-50 text-emerald-700' : 'bg-gray-100 text-gray-600' }}">
                                    {{ $vacancy['status'] ?? 'active' }}
                                </span>
                                <span class="text-xs text-gray-400 font-medium">{{ $vacancy['department'] }}</span>
                            </div>
                            <h4 class="text-sm font-bold text-[#062538] truncate hover:text-indigo-600">
                                <a href="{{ route('admin.vacancies.edit', $vacancy['id']) }}">{{ $vacancy['title'] }}</a>
                            </h4>
                            <p class="text-xs text-gray-500 truncate mt-0.5">{{ $vacancy['type'] }}</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <a href="{{ route('admin.vacancies.edit', $vacancy['id']) }}" class="p-1.5 text-gray-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-colors" title="Edit">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-6 text-center text-xs text-gray-500">No vacancies defined.</div>
                @endforelse
            </div>
        </div>

    </div>

    {{-- Navbar Radio Status Strip --}}
    <div class="bg-white rounded-2xl border border-[#E2EAF4] p-6 shadow-sm">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-5 pb-4 border-b border-[#E2EAF4]">
            <div>
                <h3 class="font-extrabold text-[#062538] font-heading text-base flex items-center gap-2">
                    <span>Navbar Pages Radio Control</span>
                    <span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-cyan-100 text-cyan-800">Radio Button Managed</span>
                </h3>
                <p class="text-xs text-[#5A7184] mt-0.5">Control which page links appear in the website top navbar</p>
            </div>
            <a href="{{ route('admin.navbar.index') }}" class="btn-accent px-4 py-2 text-xs font-bold rounded-xl text-white bg-cyan-600 hover:bg-cyan-700 transition-colors shrink-0">
                Manage Radio Settings &rarr;
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-3">
            @foreach($navbar as $key => $item)
                <div class="p-3 rounded-xl border text-center transition-all {{ ($item['status'] ?? 'visible') === 'visible' ? 'bg-cyan-50/40 border-cyan-200 text-cyan-950' : 'bg-gray-50 border-gray-200 text-gray-400' }}">
                    <div class="w-2.5 h-2.5 rounded-full mx-auto mb-1.5 {{ ($item['status'] ?? 'visible') === 'visible' ? 'bg-emerald-500 animate-pulse' : 'bg-gray-300' }}"></div>
                    <div class="text-xs font-bold truncate">{{ $item['name'] }}</div>
                    <div class="text-[10px] font-bold uppercase tracking-wider mt-1 {{ ($item['status'] ?? 'visible') === 'visible' ? 'text-emerald-700' : 'text-gray-400' }}">
                        {{ ($item['status'] ?? 'visible') === 'visible' ? '● Visible' : '○ Hidden' }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
