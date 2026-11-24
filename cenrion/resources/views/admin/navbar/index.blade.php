@extends('admin.layout')

@section('title', 'Navbar Pages Radio Control')
@section('page_title', 'Navbar Pages Control (Radio Button)')
@section('page_subtitle', 'Enable or disable website navbar menu items using radio buttons')

@section('content')
<div class="max-w-4xl mx-auto space-y-6" x-data="{
    navbarState: {
        @foreach($navbar as $key => $item)
            '{{ $key }}': '{{ $item['status'] ?? 'visible' }}',
        @endforeach
    },
    setShowAll() {
        Object.keys(this.navbarState).forEach(k => this.navbarState[k] = 'visible');
    }
}">

    {{-- Explanatory Banner --}}
    <div class="bg-gradient-to-r from-[#062538] to-[#0E3550] rounded-2xl p-6 text-white shadow-lg shadow-navy/15 border border-cyan-500/20">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div>
                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider bg-cyan-400/20 text-cyan-300 border border-cyan-400/30 mb-2">
                    Radio Button Navigation Management
                </div>
                <h2 class="text-lg font-bold font-heading">Control Navbar Menu Links</h2>
                <p class="text-xs text-gray-300 max-w-xl mt-1 leading-relaxed">
                    Select <span class="text-cyan-300 font-bold">"Show in Navbar"</span> or <span class="text-gray-300 font-bold">"Hide from Navbar"</span> for each individual page using the radio buttons below. The main desktop navbar and mobile slide-out menu will dynamically reflect your selections.
                </p>
            </div>
            <div class="flex items-center gap-2 shrink-0">
                <button type="button" @click="setShowAll()" class="px-3.5 py-2 rounded-xl bg-white/10 hover:bg-white/20 text-xs font-bold text-cyan-300 border border-cyan-400/30 transition-all flex items-center gap-1.5 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    Select Show All
                </button>
            </div>
        </div>
    </div>

    {{-- Live Simulated Navbar Preview --}}
    <div class="bg-white rounded-2xl border border-[#E2EAF4] p-5 shadow-sm">
        <div class="flex items-center justify-between mb-3">
            <span class="text-xs font-bold uppercase tracking-wider text-[#5A7184]">Interactive Navbar Preview</span>
            <span class="text-[11px] text-cyan-600 font-semibold">Simulated Desktop Menu</span>
        </div>
        <div class="p-3.5 rounded-xl bg-[#062538] flex flex-wrap items-center justify-between gap-3 text-xs text-white">
            <div class="flex items-center gap-2 font-bold text-sm tracking-tight text-white shrink-0">
                <div class="w-6 h-6 rounded-md bg-cyan-500 flex items-center justify-center font-black text-xs text-white">C</div>
                <span>Cenrion</span>
            </div>
            <div class="flex flex-wrap items-center gap-1.5 text-xs">
                @foreach($navbar as $key => $item)
                    @if($key !== 'contact')
                        <div x-show="navbarState['{{ $key }}'] === 'visible'" class="px-2.5 py-1 rounded-lg {{ $key === 'labs' ? 'bg-cyan-500 text-white font-semibold' : 'text-gray-300 hover:text-white bg-white/5' }}">
                            {{ $item['name'] }}
                        </div>
                    @endif
                @endforeach
            </div>
            <div x-show="navbarState['contact'] === 'visible'" class="shrink-0">
                <span class="px-3 py-1 rounded-lg bg-cyan-500 font-bold text-white text-xs">Talk to Us</span>
            </div>
        </div>
    </div>

    {{-- Form with Radio Buttons --}}
    <form action="{{ route('admin.navbar.update') }}" method="POST">
        @csrf

        <div class="bg-white rounded-3xl border border-[#E2EAF4] shadow-sm divide-y divide-[#F1F5F9] overflow-hidden">
            @foreach($navbar as $key => $item)
                @php
                    $currentStatus = $item['status'] ?? 'visible';
                @endphp
                <div class="p-5 sm:p-6 hover:bg-gray-50/70 transition-colors flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    
                    {{-- Page Info --}}
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-sm font-extrabold text-[#062538] font-heading">{{ $item['name'] }}</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-mono text-gray-500 bg-gray-100 border border-gray-200">
                                route('{{ $item['route'] }}')
                            </span>
                        </div>
                        <p class="text-xs text-[#5A7184] leading-relaxed">{{ $item['description'] }}</p>
                    </div>

                    {{-- Radio Button Group --}}
                    <div class="flex items-center gap-3 shrink-0 bg-[#F8FAFC] p-1.5 rounded-2xl border border-[#E2EAF4]">
                        
                        {{-- Radio Option 1: Show (Visible) --}}
                        <label class="flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs font-bold transition-all cursor-pointer select-none"
                               :class="navbarState['{{ $key }}'] === 'visible' ? 'bg-emerald-500 text-white shadow-sm shadow-emerald-500/25' : 'text-gray-600 hover:text-gray-900'">
                            <input
                                type="radio"
                                name="navbar[{{ $key }}]"
                                value="visible"
                                @change="navbarState['{{ $key }}'] = 'visible'"
                                class="w-3.5 h-3.5 text-emerald-600 focus:ring-emerald-500 border-gray-300"
                                {{ $currentStatus === 'visible' ? 'checked' : '' }}
                            >
                            <span>Show in Navbar</span>
                        </label>

                        {{-- Radio Option 2: Hide (Hidden) --}}
                        <label class="flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs font-bold transition-all cursor-pointer select-none"
                               :class="navbarState['{{ $key }}'] === 'hidden' ? 'bg-gray-700 text-white shadow-sm' : 'text-gray-500 hover:text-gray-900'">
                            <input
                                type="radio"
                                name="navbar[{{ $key }}]"
                                value="hidden"
                                @change="navbarState['{{ $key }}'] = 'hidden'"
                                class="w-3.5 h-3.5 text-gray-600 focus:ring-gray-500 border-gray-300"
                                {{ $currentStatus === 'hidden' ? 'checked' : '' }}
                            >
                            <span>Hide from Navbar</span>
                        </label>

                    </div>

                </div>
            @endforeach

            {{-- Submit Row --}}
            <div class="p-6 bg-[#F8FAFC] flex items-center justify-between">
                <div class="text-xs text-gray-500">
                    Changes take effect immediately on public navbar.
                </div>
                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-bold text-xs shadow-md shadow-cyan-500/25 transition-all flex items-center gap-2 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>Save Navbar Settings</span>
                </button>
            </div>

        </div>
    </form>

</div>
@endsection
