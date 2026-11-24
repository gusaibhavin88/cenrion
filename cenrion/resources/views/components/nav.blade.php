<nav
    id="main-nav"
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 20"
    :class="{ 'nav-scrolled': scrolled }"
    :style="{
        position: 'fixed',
        top: scrolled ? '14px' : '0',
        left: scrolled ? '24px' : '0',
        right: scrolled ? '24px' : '0',
        zIndex: '1000',
        transition: 'all 0.35s cubic-bezier(0.4, 0, 0.2, 1)',
        padding: scrolled ? '10px 0' : '16px 0',
        background: '#062538',
        backdropFilter: 'blur(20px)',
        WebkitBackdropFilter: 'blur(20px)',
        border: scrolled ? '1px solid rgba(6, 182, 212, 0.3)' : 'none',
        borderBottom: scrolled ? '1px solid rgba(6, 182, 212, 0.3)' : '1px solid rgba(6, 182, 212, 0.25)',
        borderRadius: scrolled ? '18px' : '0',
        boxShadow: scrolled ? '0 16px 40px rgba(0, 0, 0, 0.45)' : '0 4px 24px rgba(6, 37, 56, 0.35)'
    }"
>
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">

            @include('components.logo', ['variant' => 'white', 'size' => 32])

            <div class="hidden md:flex items-center gap-1 lg:gap-1.5 xl:gap-2">
                {{-- Capabilities --}}
                @if(($navbarSettings['capabilities']['status'] ?? 'visible') === 'visible')
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <a href="{{ route('capabilities') }}" class="nav-link whitespace-nowrap px-2.5 lg:px-3 xl:px-4 py-2 lg:py-2.5 text-xs lg:text-[13.5px] xl:text-sm rounded-lg flex items-center gap-1 cursor-pointer {{ request()->routeIs('capabilities') ? 'active' : '' }}">
                        <span>Capabilities</span>
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200 shrink-0" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <div x-show="dropdownOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[600px] rounded-2xl shadow-2xl overflow-hidden"
                         style="background: rgba(6, 37, 56, 0.95); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(6,182,212,0.25); box-shadow: 0 20px 48px rgba(0,0,0,0.5); display: none;">
                        <div class="p-6 grid grid-cols-2 gap-4">
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.15); border: 1px solid rgba(6,182,212,0.25);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#67E8F9" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">AI & Automation</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Generative AI, agentic workflows & custom LLMs</p>
                            </a>
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.15); border: 1px solid rgba(6,182,212,0.25);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#67E8F9" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Software Engineering</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Modern web, mobile & enterprise platforms</p>
                            </a>
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.15); border: 1px solid rgba(6,182,212,0.25);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#67E8F9" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Cloud & DevOps</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Cloud-native builds, IaC, CI/CD & optimization</p>
                            </a>
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.15); border: 1px solid rgba(6,182,212,0.25);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#67E8F9" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Data & Analytics</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Pipelines, real-time analytics & data platforms</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Solutions --}}
                @if(($navbarSettings['solutions']['status'] ?? 'visible') === 'visible')
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <a href="{{ route('solutions') }}" class="nav-link whitespace-nowrap px-2.5 lg:px-3 xl:px-4 py-2 lg:py-2.5 text-xs lg:text-[13.5px] xl:text-sm rounded-lg flex items-center gap-1 cursor-pointer {{ request()->routeIs('solutions') ? 'active' : '' }}">
                        <span>Solutions</span>
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200 shrink-0" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <div x-show="dropdownOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[600px] rounded-2xl shadow-2xl overflow-hidden"
                         style="background: rgba(6, 37, 56, 0.95); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(6,182,212,0.25); box-shadow: 0 20px 48px rgba(0,0,0,0.5); display: none;">
                        <div class="p-6 grid grid-cols-2 gap-4">
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Managed IT Services</h4>
                                <p class="text-xs leading-relaxed text-gray-400">End-to-end delivery under agreed service levels</p>
                            </a>
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Staff Augmentation</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Vetted engineers who join your team and process</p>
                            </a>
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Product Engineering</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Architecture to production, built to scale</p>
                            </a>
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-white/5 transition-colors">
                                <h4 class="font-semibold text-sm mb-1 text-white group-hover:text-cyan transition-colors">Technology Advisory</h4>
                                <p class="text-xs leading-relaxed text-gray-400">Architecture guidance, AI roadmaps & diligence</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                @if(($navbarSettings['about']['status'] ?? 'visible') === 'visible')
                <a href="{{ route('about') }}" class="nav-link whitespace-nowrap px-2.5 lg:px-3 xl:px-4 py-2 lg:py-2.5 text-xs lg:text-[13.5px] xl:text-sm rounded-lg {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                @endif

                @if(($navbarSettings['labs']['status'] ?? 'visible') === 'visible')
                <a href="{{ route('labs') }}"
                   class="btn-accent whitespace-nowrap shrink-0 px-3 py-2 lg:px-3.5 lg:py-2.5 xl:px-4 text-xs lg:text-[13.5px] xl:text-sm font-semibold"
                   style="white-space: nowrap !important;">
                    Cenrion Labs
                </a>
                @endif

                @if(($navbarSettings['insights']['status'] ?? 'visible') === 'visible')
                <a href="{{ route('insights') }}" class="nav-link whitespace-nowrap px-2.5 lg:px-3 xl:px-4 py-2 lg:py-2.5 text-xs lg:text-[13.5px] xl:text-sm rounded-lg {{ request()->routeIs('insights*') ? 'active' : '' }}">Insights</a>
                @endif

                @if(($navbarSettings['careers']['status'] ?? 'visible') === 'visible')
                <a href="{{ route('careers') }}" class="nav-link whitespace-nowrap px-2.5 lg:px-3 xl:px-4 py-2 lg:py-2.5 text-xs lg:text-[13.5px] xl:text-sm rounded-lg {{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a>
                @endif
            </div>

            @if(($navbarSettings['contact']['status'] ?? 'visible') === 'visible')
            <div class="hidden md:flex items-center ml-1 lg:ml-2 shrink-0">
                <a href="{{ route('contact') }}" class="btn-accent whitespace-nowrap shrink-0 px-3 py-2 lg:px-3.5 lg:py-2.5 xl:px-5 text-xs lg:text-[13.5px] xl:text-sm font-semibold" style="white-space: nowrap !important;">
                    <span class="whitespace-nowrap">Talk to Us</span>
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="shrink-0">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            @endif

            <button
                type="button"
                class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg transition-colors hover:bg-white/10"
                style="color:#ECFEFF;"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-label="Toggle navigation menu"
            >
                <svg x-show="!open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
                <svg x-show="open" x-cloak width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden"
        style="background: rgba(6, 37, 56, 0.95); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-top: 1px solid rgba(6,182,212,0.25); box-shadow: 0 16px 36px rgba(0,0,0,0.5); margin-top: 10px; border-radius: 14px;"
        @click.away="open = false"
    >
        <div class="max-w-8xl mx-auto px-6 sm:px-8 py-4 flex flex-col gap-1">
            @if(($navbarSettings['capabilities']['status'] ?? 'visible') === 'visible')
            <a href="{{ route('capabilities') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('capabilities') ? 'bg-cyan/20 text-cyan' : 'text-gray-200 hover:bg-white/10' }}" @click="open = false">Capabilities</a>
            @endif

            @if(($navbarSettings['solutions']['status'] ?? 'visible') === 'visible')
            <a href="{{ route('solutions') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('solutions') ? 'bg-cyan/20 text-cyan' : 'text-gray-200 hover:bg-white/10' }}" @click="open = false">Solutions</a>
            @endif

            @if(($navbarSettings['about']['status'] ?? 'visible') === 'visible')
            <a href="{{ route('about') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('about') ? 'bg-cyan/20 text-cyan' : 'text-gray-200 hover:bg-white/10' }}" @click="open = false">About</a>
            @endif

            @if(($navbarSettings['insights']['status'] ?? 'visible') === 'visible')
            <a href="{{ route('insights') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('insights*') ? 'bg-cyan/20 text-cyan' : 'text-gray-200 hover:bg-white/10' }}" @click="open = false">Insights</a>
            @endif

            @if(($navbarSettings['careers']['status'] ?? 'visible') === 'visible')
            <a href="{{ route('careers') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('careers') ? 'bg-cyan/20 text-cyan' : 'text-gray-200 hover:bg-white/10' }}" @click="open = false">Careers</a>
            @endif

            @if((($navbarSettings['labs']['status'] ?? 'visible') === 'visible') || (($navbarSettings['contact']['status'] ?? 'visible') === 'visible'))
            <div class="pt-3 mt-2 border-t border-white/10 flex flex-col gap-2">
                @if(($navbarSettings['labs']['status'] ?? 'visible') === 'visible')
                <a href="{{ route('labs') }}" class="btn-primary w-full justify-center" style="background: rgba(6,182,212,0.2); border: 1px solid rgba(6,182,212,0.4); color: #67E8F9;" @click="open = false">Cenrion Labs</a>
                @endif

                @if(($navbarSettings['contact']['status'] ?? 'visible') === 'visible')
                <a href="{{ route('contact') }}" class="btn-accent w-full justify-center" @click="open = false">Talk to Us</a>
                @endif
            </div>
            @endif
        </div>
    </div>
</nav>
