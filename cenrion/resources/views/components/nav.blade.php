<nav
    id="main-nav"
    x-data="{ open: false, scrolled: false, dropdownOpen: false }"
    @scroll.window="scrolled = window.scrollY > 20"
    :class="{ 'nav-scrolled': scrolled }"
    :style="{
        position: 'fixed',
        top: '0',
        left: scrolled ? '24px' : '0',
        right: scrolled ? '24px' : '0',
        zIndex: '1000',
        transition: 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)',
        padding: scrolled ? '12px 0' : '20px 0',
        background: scrolled ? 'rgba(11,29,46,0.42)' : 'rgba(11,29,46,0.12)',
        backdropFilter: 'blur(18px)',
        WebkitBackdropFilter: 'blur(18px)',
        borderBottom: '1px solid rgba(255,255,255,0.08)',
        borderRadius: scrolled ? '18px' : '0',
        boxShadow: scrolled ? '0 14px 36px rgba(0,0,0,0.18)' : 'none'
    }"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">

            {{-- ── Logo ── --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group" aria-label="Cenrion home">
                {{-- Geometric asterisk / tech logomark --}}
                <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="transition-transform duration-300 group-hover:scale-110">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#00AEEF"/>
                            <stop offset="100%" style="stop-color:#4DD8F5"/>
                        </linearGradient>
                    </defs>
                    {{-- Center diamond --}}
                    <polygon points="16,11 20,16 16,21 12,16" fill="url(#logoGradient)"/>
                    {{-- Top arm diamond --}}
                    <polygon points="16,0 19,5 16,10 13,5" fill="#4DD8F5"/>
                    {{-- Bottom arm diamond --}}
                    <polygon points="16,22 19,27 16,32 13,27" fill="#4DD8F5"/>
                    {{-- Left arm diamond --}}
                    <polygon points="0,16 5,13 10,16 5,19" fill="#4DD8F5"/>
                    {{-- Right arm diamond --}}
                    <polygon points="22,16 27,13 32,16 27,19" fill="#4DD8F5"/>
                    {{-- Top-right arm diamond --}}
                    <polygon points="23,3 27,5 25,9 21,7" fill="#00AEEF" opacity="0.7"/>
                    {{-- Bottom-left arm diamond --}}
                    <polygon points="9,23 13,25 11,29 7,27" fill="#00AEEF" opacity="0.7"/>
                    {{-- Top-left arm diamond --}}
                    <polygon points="9,3 13,7 11,11 7,5" fill="#00AEEF" opacity="0.7"/>
                    {{-- Bottom-right arm diamond --}}
                    <polygon points="23,23 27,27 25,29 21,25" fill="#00AEEF" opacity="0.7"/>
                </svg>
                {{-- Wordmark --}}
                <span style="font-size: 24px; font-weight: 800; letter-spacing: -0.04em; color: #FFFFFF; transition: color 0.2s ease;"
                      class="logo-wordmark group-hover:text-cyan-DEFAULT">cenrion</span>
            </a>

            {{-- ── Desktop Navigation ── --}}
            <div class="hidden md:flex items-center gap-1 lg:gap-3">
                <a href="{{ route('home') }}"
                   class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>

                {{-- Dropdown: Capabilities --}}
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <button class="nav-link px-4 py-2.5 rounded-lg flex items-center gap-1 cursor-pointer">
                        Capabilities
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
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
                            {{-- Card 1: AI & Automation --}}
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">AI & Automation</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Generative AI, agentic workflows & custom LLMs</p>
                            </a>

                            {{-- Card 2: Software Engineering --}}
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Software Engineering</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Modern web, mobile & enterprise platforms</p>
                            </a>

                            {{-- Card 3: Cloud & DevOps --}}
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Cloud & DevOps</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Cloud-native builds, IaC, CI/CD & optimization</p>
                            </a>

                            {{-- Card 4: Data & Analytics --}}
                            <a href="{{ route('capabilities') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Data & Analytics</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Pipelines, real-time analytics & data platforms</p>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Dropdown: Solutions --}}
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <button class="nav-link px-4 py-2.5 rounded-lg flex items-center gap-1 cursor-pointer">
                        Solutions
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
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
                            {{-- Card 1: Enterprise Applications --}}
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Enterprise Applications</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Robust, scalable enterprise systems</p>
                            </a>

                            {{-- Card 2: Digital Commerce --}}
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Digital Commerce</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">High-performing commerce experiences</p>
                            </a>

                            {{-- Card 3: Business Automation --}}
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Business Automation</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Streamline operations with automation</p>
                            </a>

                            {{-- Card 4: BI & Analytics --}}
                            <a href="{{ route('solutions') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">BI & Analytics</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Advanced BI with analytics-first development</p>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('labs') }}"
                   class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('labs') ? 'active' : '' }}">
                    Cenrion Labs
                </a>
                <a href="{{ route('about') }}"
                   class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>

                {{-- Dropdown: Industries --}}
                <div class="relative" x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false">
                    <button class="nav-link px-4 py-2.5 rounded-lg flex items-center gap-1 cursor-pointer">
                        Industries
                        <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
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
                            {{-- Card 1: Healthcare --}}
                            <a href="{{ route('about') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Healthcare</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Digital health & medical solutions</p>
                            </a>

                            {{-- Card 2: Finance --}}
                            <a href="{{ route('about') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Finance</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">Fintech & banking solutions</p>
                            </a>

                            {{-- Card 3: Retail --}}
                            <a href="{{ route('about') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Retail</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">E-commerce & retail platforms</p>
                            </a>

                            {{-- Card 4: Education --}}
                            <a href="{{ route('about') }}" class="group p-4 rounded-xl hover:bg-gray-50 transition-colors">
                                <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-3" style="background: rgba(0,174,239,0.1);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00AEEF" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-3.75 0V5.625c0-1.036.843-1.875 1.875-1.875h2.25c1.036 0 1.875.84 1.875 1.875v5.818c0 .896.657 1.643 1.543 1.813"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-sm mb-1" style="color: #0B1D2E;">Education</h4>
                                <p class="text-xs leading-relaxed" style="color: #5A7184;">EdTech & learning platforms</p>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('insights') }}"
                   class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('insights') ? 'active' : '' }}">
                    Insights
                </a>
                <a href="{{ route('careers') }}"
                   class="nav-link px-4 py-2.5 rounded-lg {{ request()->routeIs('careers') ? 'active' : '' }}">
                    Careers
                </a>
            </div>

            {{-- ── Desktop CTA ── --}}
            <div class="hidden md:flex items-center">
                <a href="{{ route('contact') }}"
                   class="btn-primary"
                   style="padding: 10px 24px; font-size: 14px; font-weight: 600; background: linear-gradient(135deg, #00AEEF 0%, #007DB8 100%);">
                    Talk to Us
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            {{-- ── Mobile Hamburger Button ── --}}
            <button
                type="button"
                class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg text-gray-600 hover:text-navy hover:bg-gray-100 transition-colors"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-label="Toggle navigation menu"
            >
                {{-- Hamburger icon --}}
                <svg x-show="!open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
                {{-- Close icon --}}
                <svg x-show="open" x-cloak width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- ── Mobile Menu ── --}}
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
        style="background: white; border-top: 1px solid #E2EAF4; box-shadow: 0 8px 32px rgba(0,0,0,0.12); margin-top: 10px;"
        @click.away="open = false"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex flex-col gap-1">
            <a href="{{ route('home') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('home') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                Home
            </a>
            <a href="{{ route('capabilities') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('capabilities') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                Capabilities
            </a>
            <a href="{{ route('solutions') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('solutions') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                Solutions
            </a>
            <a href="{{ route('labs') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('labs') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                Cenrion Labs
            </a>
            <a href="{{ route('about') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('about') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                About
            </a>
            <a href="{{ route('insights') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('insights') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                Insights
            </a>
            <a href="{{ route('careers') }}"
               class="flex items-center px-4 py-3 rounded-lg font-medium text-base transition-colors
                      {{ request()->routeIs('careers') ? 'bg-cyan-xlight text-cyan' : 'text-gray-700 hover:bg-gray-50 hover:text-navy' }}"
               @click="open = false">
                Careers
            </a>

            {{-- Mobile CTA --}}
            <div class="pt-3 mt-2 border-t border-gray-100">
                <a href="{{ route('contact') }}"
                   class="btn-primary w-full justify-center"
                   @click="open = false">
                    Talk to Us
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>
