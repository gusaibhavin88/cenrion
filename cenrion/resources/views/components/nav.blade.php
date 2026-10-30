<nav
    id="main-nav"
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 20"
    :class="{ 'nav-scrolled': scrolled }"
    :style="{
        position: 'fixed',
        top: '0',
        left: scrolled ? '24px' : '0',
        right: scrolled ? '24px' : '0',
        zIndex: '1000',
        transition: 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)',
        padding: scrolled ? '12px 0' : '18px 0',
        background: scrolled ? '#E8ECF0' : '#E8ECF0',
        backdropFilter: 'blur(18px)',
        WebkitBackdropFilter: 'blur(18px)',
        borderBottom: '1px solid rgba(6,37,56,0.06)',
        borderRadius: scrolled ? '18px' : '0',
        boxShadow: scrolled ? '0 10px 28px rgba(6,37,56,0.08)' : 'none'
    }"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">

            @include('components.logo', ['variant' => 'brand', 'size' => 36])

            <div class="hidden md:flex items-center gap-1 lg:gap-2">
                {{-- Capabilities --}}
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <button class="nav-link px-4 py-2.5 rounded-lg flex items-center gap-1 cursor-pointer {{ request()->routeIs('capabilities') ? 'active' : '' }}">
                        Capabilities
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="dropdownOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[600px] bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden"
                         style="display: none;">
                        <div class="p-6 grid grid-cols-2 gap-4">
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">AI & Automation</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Generative AI, agentic workflows & custom LLMs</p>
                            </a>
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Software Engineering</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Modern web, mobile & enterprise platforms</p>
                            </a>
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Cloud & DevOps</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Cloud-native builds, IaC, CI/CD & optimization</p>
                            </a>
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(6,182,212,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Data & Analytics</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Pipelines, real-time analytics & data platforms</p>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Solutions --}}
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <button class="nav-link px-4 py-2.5 rounded-lg flex items-center gap-1 cursor-pointer {{ request()->routeIs('solutions') ? 'active' : '' }}">
                        Solutions
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="dropdownOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[600px] bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden"
                         style="display: none;">
                        <div class="p-6 grid grid-cols-2 gap-4">
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Managed IT Services</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">End-to-end delivery under agreed service levels</p>
                            </a>
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Staff Augmentation</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Vetted engineers who join your team and process</p>
                            </a>
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Product Engineering</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Architecture to production, built to scale</p>
                            </a>
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <h4 class="font-semibold text-sm mb-1" style="color: #062538;">Technology Advisory</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Architecture guidance, AI roadmaps & diligence</p>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('labs') }}"
                   class="btn-accent"
                   style="padding: 10px 18px; font-size: 14px;">
                    Cenrion Labs
                </a>
                <a href="{{ route('insights') }}" class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('insights*') ? 'active' : '' }}">Insights</a>
                <a href="{{ route('careers') }}" class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a>
            </div>

            <div class="hidden md:flex items-center ml-2">
                <a href="{{ route('contact') }}" class="btn-accent" style="padding: 10px 22px; font-size: 14px;">
                    Talk to Us
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            <button
                type="button"
                class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg transition-colors"
                style="color:#062538;"
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
        style="background: white; border-top: 1px solid #E2EAF4; box-shadow: 0 8px 32px rgba(0,0,0,0.08); margin-top: 10px;"
        @click.away="open = false"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-col gap-1">
            <a href="{{ route('capabilities') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('capabilities') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50' }}" @click="open = false">Capabilities</a>
            <a href="{{ route('solutions') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('solutions') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50' }}" @click="open = false">Solutions</a>
            <a href="{{ route('about') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('about') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50' }}" @click="open = false">About</a>
            <a href="{{ route('insights') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('insights*') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50' }}" @click="open = false">Insights</a>
            <a href="{{ route('careers') }}" class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors {{ request()->routeIs('careers') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50' }}" @click="open = false">Careers</a>
            <div class="pt-3 mt-2 border-t border-gray-100 flex flex-col gap-2">
                <a href="{{ route('labs') }}" class="btn-primary w-full justify-center" @click="open = false">Cenrion Labs</a>
                <a href="{{ route('contact') }}" class="btn-accent w-full justify-center" @click="open = false">Talk to Us</a>
            </div>
        </div>
    </div>
</nav>
