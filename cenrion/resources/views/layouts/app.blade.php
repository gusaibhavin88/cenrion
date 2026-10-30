<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Cenrion — Technology & AI Solutions')">
    <title>@yield('title', 'Cenrion') | Cenrion</title>

    {{-- Google Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    {{-- Tailwind Config --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#0B1D2E',
                            medium:  '#112237',
                            light:   '#1A3352',
                            xlight:  '#243D5C',
                        },
                        cyan: {
                            DEFAULT: '#00AEEF',
                            dark:    '#007DB8',
                            light:   '#4DD8F5',
                            xlight:  '#E0F7FF',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-up':    'fadeUp 0.6s ease-out forwards',
                        'fade-in':    'fadeIn 0.4s ease-out forwards',
                        'slide-down': 'slideDown 0.3s ease-out forwards',
                    },
                    keyframes: {
                        fadeUp: {
                            '0%':   { opacity: '0', transform: 'translateY(24px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%':   { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideDown: {
                            '0%':   { opacity: '0', transform: 'translateY(-8px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                    },
                },
            },
        }
    </script>

    {{-- Global Styles --}}
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', sans-serif;
            color: #0D1B2A;
            background: #FFFFFF;
            position: relative;
        }
        main { position: relative; z-index: 1; }

        /* Light hero system */
        .page-hero,
        .home-hero {
            background:
                radial-gradient(ellipse 70% 55% at 92% 0%, rgba(0,174,239,0.10), transparent 60%),
                linear-gradient(180deg, #FFFFFF 0%, #F5F8FC 72%, #F5F8FC 100%);
        }
        .page-hero-glow,
        .home-hero-glow {
            position: absolute;
            top: -12%;
            right: -8%;
            width: min(52vw, 560px);
            height: min(52vw, 560px);
            background: radial-gradient(circle, rgba(0,174,239,0.12), transparent 68%);
            pointer-events: none;
            filter: blur(8px);
        }
        .page-hero-pattern,
        .home-hero-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.04;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='96' height='96' viewBox='0 0 96 96'%3E%3Cpath d='M12 12h28l-9 9 13 13H32L12 12zm72 0H56l9 9-13 13h12l20-22zM12 84V56l9 9 13-13v12L12 84zm72 0V56l-9 9-13-13v12L84 84z' fill='%230B1D2E'/%3E%3C/svg%3E");
            background-size: 96px 96px;
        }
        .page-hero-arrow {
            position: absolute;
            right: -2%;
            bottom: -18%;
            width: min(42vw, 320px);
            opacity: 0.045;
            pointer-events: none;
            transform: rotate(-8deg);
        }
        .page-hero-arrow svg { width: 100%; height: auto; }
        .opacity-0 { opacity: 0; }
        .animate-fade-up { animation: fadeUp 0.6s ease-out forwards; }

        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 100%;
            transform: scaleX(0);
            transform-origin: left center;
            z-index: 2000;
            background: linear-gradient(90deg, #007DB8, #00AEEF 40%, #4DD8F5);
            pointer-events: none;
        }

        [data-animate] {
            --anim-delay: 0ms;
            opacity: 0;
            transform: translate3d(0, 36px, 0);
            filter: blur(8px);
            transition:
                opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1),
                transform 0.9s cubic-bezier(0.22, 1, 0.36, 1),
                filter 0.9s ease;
            transition-delay: var(--anim-delay);
        }
        [data-animate="fade-left"] { transform: translate3d(48px, 0, 0); }
        [data-animate="fade-right"] { transform: translate3d(-48px, 0, 0); }
        [data-animate="fade-in"] { transform: none; }
        [data-animate="scale"] { transform: scale(0.94); filter: blur(4px); }
        [data-animate].animated {
            opacity: 1;
            transform: none;
            filter: none;
        }

        .js-split[data-animate] {
            opacity: 1;
            transform: none;
            filter: none;
            transition: none;
        }
        .js-split .word {
            display: inline-block;
            overflow: hidden;
            vertical-align: bottom;
            line-height: 1.08;
            padding-bottom: 0.06em;
            margin-bottom: -0.06em;
        }
        .js-split .word > span {
            display: inline-block;
            transform: translateY(115%);
            transition: transform 0.85s cubic-bezier(0.22, 1, 0.36, 1);
            transition-delay: calc(var(--i) * 55ms);
        }
        .js-split.animated .word > span { transform: translateY(0); }

        .draw-line { position: relative; display: inline-block; }
        .draw-line::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0.04em;
            width: 100%;
            height: 0.07em;
            border-radius: 999px;
            background: linear-gradient(90deg, #00AEEF, #4DD8F5);
            transform: scaleX(0);
            transform-origin: left center;
            transition: transform 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s;
        }
        .js-split.animated .draw-line::after,
        .animated .draw-line::after { transform: scaleX(1); }

        [data-draw] {
            transform: scaleX(0);
            transform-origin: left center;
            transition: transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
            transition-delay: var(--anim-delay, 0ms);
        }
        [data-draw].animated { transform: scaleX(1); }

        .card::after,
        .card-dark::after {
            content: "";
            position: absolute;
            top: 0;
            left: -80%;
            width: 45%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.55), transparent);
            transform: skewX(-18deg);
            pointer-events: none;
            z-index: 2;
        }
        .card:hover::after,
        .card-dark:hover::after { left: 140%; transition: left 0.7s ease; }

        @media (prefers-reduced-motion: reduce) {
            [data-animate],
            .js-split[data-animate] { transition: none; opacity: 1; transform: none; filter: none; }
            .js-split .word > span { transform: none; transition: none; }
            .draw-line::after,
            [data-draw] { transform: none; transition: none; }
            #scroll-progress { display: none; }
            .card::after, .card-dark::after { display: none; }
        }

        /* Buttons — navy primary for contrast on light heroes */
        .btn-primary {
            background: #0B1D2E; color: #FFFFFF; padding: 12px 28px; border-radius: 8px;
            font-weight: 600; font-size: 15px; transition: all 0.2s ease;
            display: inline-flex; align-items: center; gap: 8px; text-decoration: none;
        }
        .btn-primary:hover {
            background: #112237; transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(11,29,46,0.28);
        }
        .btn-secondary {
            background: transparent; color: #0B1D2E; padding: 12px 28px; border-radius: 8px;
            font-weight: 600; font-size: 15px; border: 1.5px solid rgba(11,29,46,0.22);
            transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;
        }
        .btn-secondary:hover { border-color: #00AEEF; color: #007DB8; background: rgba(0,174,239,0.06); transform: translateY(-1px); }
        .btn-accent {
            background: #00AEEF; color: #FFFFFF; padding: 12px 28px; border-radius: 8px;
            font-weight: 600; font-size: 15px; transition: all 0.2s ease;
            display: inline-flex; align-items: center; gap: 8px; text-decoration: none;
        }
        .btn-accent:hover {
            background: #007DB8; transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(0,174,239,0.28);
        }

        .btn-white {
            background: white; color: #0B1D2E; padding: 12px 28px; border-radius: 8px;
            font-weight: 600; font-size: 15px; transition: all 0.2s ease;
            display: inline-flex; align-items: center; gap: 8px; text-decoration: none;
        }
        .btn-white:hover {
            background: #F5F8FC; transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .btn-outline-white {
            background: transparent; color: white; padding: 12px 28px; border-radius: 8px;
            font-weight: 600; font-size: 15px; border: 1.5px solid rgba(255,255,255,0.5);
            transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;
        }
        .btn-outline-white:hover { border-color: white; background: rgba(255,255,255,0.1); }

        /* Cards */
        .card {
            background: rgba(255,255,255,0.9);
            border-radius: 18px;
            border: 1px solid rgba(226,234,244,0.9);
            box-shadow: 0 12px 30px rgba(11,29,46,0.08), inset 0 1px 0 rgba(255,255,255,0.9);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.28s ease;
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,174,239,0.08), transparent 40%, rgba(77,216,245,0.06));
            opacity: 0;
            transition: opacity 0.28s ease;
        }
        .card:hover::before {
            opacity: 1;
        }
        .card:hover {
            border-color: rgba(0,174,239,0.38);
            box-shadow: 0 18px 42px rgba(0,174,239,0.12), 0 8px 24px rgba(11,29,46,0.08);
            transform: translateY(-3px);
        }
        .card-dark {
            background: rgba(17,34,55,0.82);
            border-radius: 18px;
            border: 1px solid rgba(26,51,82,0.9);
            box-shadow: 0 12px 30px rgba(10,16,28,0.28), inset 0 1px 0 rgba(255,255,255,0.06);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.28s ease;
            position: relative;
            overflow: hidden;
        }
        .card-dark::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,174,239,0.12), transparent 45%, rgba(77,216,245,0.06));
            opacity: 0;
            transition: opacity 0.28s ease;
        }
        .card-dark:hover::before {
            opacity: 1;
        }
        .card-dark:hover {
            border-color: rgba(0,174,239,0.45);
            box-shadow: 0 18px 42px rgba(0,174,239,0.12), 0 8px 24px rgba(11,29,46,0.18);
            transform: translateY(-3px);
        }

        /* Utility classes */
        .section-tag {
            font-size: 12px; font-weight: 700; text-transform: uppercase;
            letter-spacing: 0.12em; color: #00AEEF;
        }
        .gradient-text {
            background: linear-gradient(135deg, #00AEEF, #4DD8F5);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-grid {
            background-image: radial-gradient(rgba(0,174,239,0.08) 1px, transparent 1px);
            background-size: 32px 32px;
        }
        .tech-badge {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 14px; background: rgba(0,174,239,0.08);
            border: 1px solid rgba(0,174,239,0.2); border-radius: 999px;
            font-size: 13px; font-weight: 500; color: #0B1D2E;
        }

        /* Light navigation */
        .nav-link {
            position: relative; color: #0B1D2E; font-weight: 500; font-size: 15px;
            transition: all 0.25s ease; text-decoration: none;
        }
        .nav-link:hover {
            color: #007DB8;
            background: rgba(0,174,239,0.08);
        }
        .nav-link.active {
            color: #007DB8;
            background: rgba(0,174,239,0.12);
            font-weight: 600;
        }
        .nav-scrolled {
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            box-shadow: 0 10px 28px rgba(11,29,46,0.08);
            padding-top: 12px !important;
            padding-bottom: 12px !important;
            border-bottom: 1px solid rgba(11,29,46,0.06) !important;
            border-radius: 18px;
            left: 24px !important;
            right: 24px !important;
            width: auto !important;
        }

        /* Navy contrast folds */
        .fold-navy {
            background: #0B1D2E;
            position: relative;
            overflow: hidden;
        }
        .fold-navy::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='96' height='96' viewBox='0 0 96 96'%3E%3Cpath d='M12 12h28l-9 9 13 13H32L12 12zm72 0H56l9 9-13 13h12l20-22zM12 84V56l9 9 13-13v12L12 84zm72 0V56l-9 9-13-13v12L84 84z' fill='%23FFFFFF'/%3E%3C/svg%3E");
            background-size: 96px 96px;
            opacity: 0.035;
            pointer-events: none;
        }
        .services-band {
            background: #0B1D2E;
            border-top: 1px solid rgba(255,255,255,0.06);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
    </style>

    @stack('styles')
</head>
<body>
    <div id="scroll-progress" aria-hidden="true"></div>

    {{-- Navigation --}}
    @include('components.nav')

    {{-- Main Content --}}
    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Global JavaScript --}}
    <script>
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        document.querySelectorAll('[data-delay]').forEach(el => {
            el.style.setProperty('--anim-delay', el.dataset.delay + 'ms');
        });

        document.querySelectorAll('[data-animate]').forEach(el => {
            if (el.dataset.delay) return;
            const siblings = [...el.parentElement.children].filter(node => node.hasAttribute('data-animate'));
            const index = siblings.indexOf(el);
            if (siblings.length > 1 && index > 0) {
                el.style.setProperty('--anim-delay', (index * 90) + 'ms');
            }
        });

        document.querySelectorAll('.js-split').forEach(root => {
            const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT, {
                acceptNode(node) {
                    if (!node.textContent.trim()) return NodeFilter.FILTER_REJECT;
                    if (node.parentElement.closest('.word')) return NodeFilter.FILTER_REJECT;
                    return NodeFilter.FILTER_ACCEPT;
                }
            });
            const textNodes = [];
            while (walker.nextNode()) textNodes.push(walker.currentNode);
            let index = 0;
            textNodes.forEach(node => {
                const fragment = document.createDocumentFragment();
                node.textContent.split(/(\s+)/).forEach(part => {
                    if (!part) return;
                    if (/^\s+$/.test(part)) {
                        fragment.appendChild(document.createTextNode(' '));
                        return;
                    }
                    const word = document.createElement('span');
                    word.className = 'word';
                    const inner = document.createElement('span');
                    inner.textContent = part;
                    inner.style.setProperty('--i', index++);
                    word.appendChild(inner);
                    fragment.appendChild(word);
                });
                node.parentNode.replaceChild(fragment, node);
            });
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

        document.querySelectorAll('[data-animate], [data-draw], .js-split').forEach(el => observer.observe(el));

        const progress = document.getElementById('scroll-progress');
        const updateProgress = () => {
            const scrollable = document.documentElement.scrollHeight - window.innerHeight;
            const value = scrollable > 0 ? window.scrollY / scrollable : 0;
            progress.style.transform = 'scaleX(' + value + ')';
        };
        if (!reduceMotion) {
            updateProgress();
            window.addEventListener('scroll', updateProgress, { passive: true });
        }

        const nav = document.getElementById('main-nav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('nav-scrolled', window.scrollY > 20);
        }, { passive: true });
    </script>

    @stack('scripts')
</body>
</html>
