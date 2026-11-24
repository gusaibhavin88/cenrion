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
                            value="{{ old('email', 'Shoaib06@gmail.com') }}"
                            required
                            class="w-full px-4 py-3 rounded-xl bg-black/30 border border-white/15 text-white placeholder-gray-400 text-sm focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all font-sans"
                            placeholder="Shoaib06@gmail.com"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"/></svg>
                        </div>
                    </div>
                </div>

                {{-- Password Input --}}
                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-cyan-200 mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            value="Shoaib@5706"
                            required
                            class="w-full px-4 py-3 rounded-xl bg-black/30 border border-white/15 text-white placeholder-gray-400 text-sm focus:outline-none focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/20 transition-all font-sans"
                            placeholder="••••••••••••"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-gray-400">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                    </div>
                </div>

                {{-- Hint for admin credentials --}}
                <div class="p-3 rounded-xl bg-cyan-950/40 border border-cyan-500/20 text-[11px] text-cyan-200/80 leading-relaxed">
                    <span class="font-bold text-cyan-300">Default Credentials:</span><br>
                    Email: <code class="text-white font-mono">Shoaib06@gmail.com</code><br>
                    Password: <code class="text-white font-mono">Shoaib@5706</code>
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

</body>
</html>
