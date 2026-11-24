<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In | Cenrion</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=8">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#062538',
                            medium:  '#0A2D44',
                            light:   '#0E3550',
                        },
                        cyan: {
                            DEFAULT: '#06B6D4',
                            dark:    '#0891B2',
                            light:   '#67E8F9',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen flex items-center justify-center p-4 relative overflow-hidden" style="background: radial-gradient(circle at 50% 20%, #082E47 0%, #062538 60%, #03141F 100%);">

    {{-- Ambient Background Glows --}}
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(6,182,212,0.18), transparent 70%);"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(99,102,241,0.15), transparent 70%);"></div>

    <div class="w-full max-w-md relative z-10">

        {{-- Top Brand Indicator --}}
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl mb-4 shadow-2xl shadow-cyan-500/30" style="background: linear-gradient(135deg, #06B6D4 0%, #0891B2 100%); border: 1px solid rgba(103,232,249,0.3);">
                <span class="text-white font-extrabold text-2xl font-heading">C</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight font-heading">Cenrion Admin Panel</h1>
            <p class="text-cyan-200/70 text-xs mt-1.5 uppercase font-bold tracking-widest">Authorized Operations Only</p>
        </div>

        {{-- Card --}}
        <div class="rounded-3xl p-7 sm:p-9 shadow-2xl backdrop-blur-xl relative" style="background: rgba(10, 45, 68, 0.75); border: 1.5px solid rgba(6,182,212,0.25); box-shadow: 0 25px 60px rgba(0,0,0,0.5);">
            
            @if(session('error'))
                <div class="mb-6 p-3.5 rounded-xl bg-red-500/15 border border-red-500/30 text-red-200 text-xs font-semibold flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-red-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if(session('success'))
                <div class="mb-6 p-3.5 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-200 text-xs font-semibold flex items-center gap-2.5">
                    <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                {{-- Email / Username Input --}}
                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-cyan-200 mb-2">
                        Username / Email
                    </label>
                    <div class="relative">
                        <input
                            type="text"
                            name="email"
                            id="email"
                            value="{{ old('email', '') }}"
                            required
                            autocomplete="username"
                            class="w-full px-4 py-3 rounded-xl bg-black/30 border border-white/15 text-white placeholder-gray-400 text-sm focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all font-sans"
                            placeholder="Enter your email or username"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"/></svg>
                        </div>
                    </div>
                </div>

                {{-- Password Input with Eye Toggle --}}
                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-cyan-200 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            required
                            autocomplete="current-password"
                            class="w-full pl-4 pr-11 py-3 rounded-xl bg-black/30 border border-white/15 text-white placeholder-gray-400 text-sm focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all font-sans"
                            placeholder="Enter password"
                        >
                        <button
                            type="button"
                            id="toggle-password"
                            class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-cyan-300 transition-colors focus:outline-none cursor-pointer"
                            title="Toggle password visibility"
                            aria-label="Toggle password visibility"
                        >
                            {{-- Eye Open (shown when masked) --}}
                            <svg id="eye-open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            {{-- Eye Slashed (shown when visible) --}}
                            <svg id="eye-closed" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Submit Button --}}
                <button
                    type="submit"
                    class="w-full py-3.5 px-4 rounded-xl text-white font-bold text-sm tracking-wide transition-all duration-200 hover:shadow-xl hover:shadow-cyan-500/30 hover:-translate-y-0.5 active:translate-y-0 cursor-pointer flex items-center justify-center gap-2"
                    style="background: linear-gradient(135deg, #06B6D4 0%, #0891B2 100%); border: 1px solid rgba(103,232,249,0.35);"
                >
                    <span>Sign In to Admin Panel</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </form>

            <div class="mt-6 pt-6 border-t border-white/10 text-center">
                <a href="{{ route('home') }}" class="text-xs text-gray-400 hover:text-cyan-300 transition-colors inline-flex items-center gap-1.5 font-medium">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Return to Cenrion Website
                </a>
            </div>

        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('toggle-password');
            const passInput = document.getElementById('password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeClosed = document.getElementById('eye-closed');

            if (toggleBtn && passInput) {
                toggleBtn.addEventListener('click', function () {
                    const isPassword = passInput.getAttribute('type') === 'password';
                    passInput.setAttribute('type', isPassword ? 'text' : 'password');
                    if (isPassword) {
                        eyeOpen.classList.add('hidden');
                        eyeClosed.classList.remove('hidden');
                    } else {
                        eyeOpen.classList.remove('hidden');
                        eyeClosed.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>
