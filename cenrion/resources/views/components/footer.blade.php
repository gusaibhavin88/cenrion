<style>
    .footer-link {
        color: #94A3B8;
        font-size: 14px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: color 0.2s ease, padding-left 0.2s ease;
    }
    .footer-link:hover { color: #06B6D4; padding-left: 4px; }

    .footer-social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        color: #94A3B8;
        transition: all 0.25s ease;
        text-decoration: none;
    }
    .footer-social-btn:hover {
        background: rgba(6,182,212,0.15);
        border-color: rgba(6,182,212,0.4);
        color: #06B6D4;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(6,182,212,0.15);
    }

    .footer-tech-pill {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        background: rgba(6,182,212,0.08);
        border: 1px solid rgba(6,182,212,0.18);
        border-radius: 999px;
        font-size: 11px;
        font-weight: 600;
        color: #67E8F9;
        letter-spacing: 0.04em;
        transition: background 0.2s, border-color 0.2s;
    }
    .footer-tech-pill:hover {
        background: rgba(6,182,212,0.16);
        border-color: rgba(6,182,212,0.35);
    }

    .footer-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: linear-gradient(135deg, #06B6D4, #0891B2);
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.25s ease;
        box-shadow: 0 4px 18px rgba(6,182,212,0.28);
    }
    .footer-cta-btn:hover {
        background: linear-gradient(135deg, #0891B2, #0E7490);
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(6,182,212,0.38);
    }
</style>

<footer style="background: linear-gradient(180deg, #062538 0%, #041C2C 100%); position: relative; overflow: hidden;">

    {{-- Ambient top glow --}}
    <div style="position:absolute;top:0;left:50%;transform:translateX(-50%);width:600px;height:2px;background:linear-gradient(90deg,transparent,rgba(6,182,212,0.5),transparent);pointer-events:none;"></div>
    <div style="position:absolute;top:-80px;right:-80px;width:360px;height:360px;background:radial-gradient(circle,rgba(6,182,212,0.07),transparent 70%);pointer-events:none;border-radius:9999px;"></div>
    <div style="position:absolute;bottom:-60px;left:-60px;width:280px;height:280px;background:radial-gradient(circle,rgba(103,232,249,0.05),transparent 70%);pointer-events:none;border-radius:9999px;"></div>

    {{-- ── Main Footer Grid ── --}}
    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10 pt-16 pb-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

            {{-- ── Column 1: Brand ── --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <div class="mb-5">
                    @include('components.logo', ['variant' => 'white', 'size' => 34])
                </div>

                <p style="color: #67E8F9; font-size: 14px; font-weight: 700; margin-bottom: 10px; letter-spacing: 0.01em; font-family: 'Plus Jakarta Sans', sans-serif;">
                    Glass box engineering.
                </p>

                <p style="color: #94A3B8; font-size: 13.5px; line-height: 1.75; margin-bottom: 20px;">
                    AI speed with engineering accountability — managed IT services, staff augmentation, and product engineering built to scale.
                </p>

                {{-- Tech pills --}}
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach(['Python', 'Laravel', 'React', 'TypeScript', 'AWS', 'Kubernetes'] as $tech)
                        <span class="footer-tech-pill">{{ $tech }}</span>
                    @endforeach
                </div>

                {{-- Social icons --}}
                <div class="flex items-center gap-3">
                    <a href="https://linkedin.com/company/cenrion" target="_blank" rel="noopener noreferrer"
                       aria-label="Cenrion on LinkedIn" class="footer-social-btn">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com/cenrion" target="_blank" rel="noopener noreferrer"
                       aria-label="Cenrion on X (Twitter)" class="footer-social-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.259 5.63L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/cenrion" target="_blank" rel="noopener noreferrer"
                       aria-label="Cenrion on GitHub" class="footer-social-btn">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- ── Column 2: Solutions ── --}}
            <div>
                <h3 style="color: #FFFFFF; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.14em; margin-bottom: 20px; font-family: 'Plus Jakarta Sans', sans-serif;">
                    Solutions
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 11px;">
                    @php
                        $solutions = [
                            'AI/GenAI Solutions',
                            'Software Engineering',
                            'Data & Analytics',
                            'Cloud & DevOps',
                            'Automation',
                            'QA Engineering',
                        ];
                    @endphp
                    @foreach($solutions as $solution)
                        <li>
                            <a href="{{ route('solutions') }}" class="footer-link">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" style="flex-shrink:0;" aria-hidden="true">
                                    <circle cx="4" cy="4" r="3" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                                {{ $solution }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Column 3: Company ── --}}
            <div>
                <h3 style="color: #FFFFFF; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.14em; margin-bottom: 20px; font-family: 'Plus Jakarta Sans', sans-serif;">
                    Company
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 11px;">
                    @php
                        $company = [
                            ['label' => 'About',        'route' => 'about'],
                            ['label' => 'Careers',      'route' => 'careers'],
                            ['label' => 'Insights',     'route' => 'insights'],
                            ['label' => 'Cenrion Labs', 'route' => 'labs'],
                            ['label' => 'Contact',      'route' => 'contact'],
                        ];
                    @endphp
                    @foreach($company as $item)
                        <li>
                            <a href="{{ route($item['route']) }}" class="footer-link">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" style="flex-shrink:0;" aria-hidden="true">
                                    <circle cx="4" cy="4" r="3" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Column 4: Contact ── --}}
            <div>
                <h3 style="color: #FFFFFF; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.14em; margin-bottom: 20px; font-family: 'Plus Jakarta Sans', sans-serif;">
                    Get in Touch
                </h3>

                <div class="space-y-4 mb-6">
                    {{-- Email --}}
                    <div class="flex items-start gap-3">
                        <div style="width:32px;height:32px;border-radius:8px;background:rgba(6,182,212,0.1);border:1px solid rgba(6,182,212,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="1.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                        </div>
                        <div>
                            <p style="color:#5A7184;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;margin-bottom:3px;">Email</p>
                            <a href="mailto:hello@cenrion.com" class="footer-link" style="font-size:13.5px;">hello@cenrion.com</a>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="flex items-start gap-3">
                        <div style="width:32px;height:32px;border-radius:8px;background:rgba(6,182,212,0.1);border:1px solid rgba(6,182,212,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#06B6D4" stroke-width="1.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                        </div>
                        <div>
                            <p style="color:#5A7184;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;margin-bottom:3px;">Phone</p>
                            <a href="tel:+919998904079" class="footer-link" style="font-size:13.5px;">+91 99989 04079</a>
                        </div>
                    </div>
                </div>

                {{-- CTA Button --}}
                <a href="{{ route('contact') }}" class="footer-cta-btn" style="width:100%;justify-content:center;">
                    Talk to Us
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

        </div>{{-- /grid --}}
    </div>{{-- /main grid wrapper --}}

    {{-- ── Divider ── --}}
    <div style="border-top: 1px solid rgba(255,255,255,0.06); position: relative;">
        <div style="position:absolute;top:-1px;left:50%;transform:translateX(-50%);width:120px;height:1px;background:linear-gradient(90deg,transparent,rgba(6,182,212,0.5),transparent);"></div>
    </div>

    {{-- ── Bottom Bar ── --}}
    <div class="relative z-10 max-w-8xl mx-auto px-6 sm:px-8 lg:px-10 py-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

            {{-- Left: copyright + tagline --}}
            <div class="flex flex-col sm:flex-row items-center gap-3">
                <p style="color: #5A7184; font-size: 13px;">
                    &copy; {{ date('Y') }} Cenrion Technologies Pvt. Ltd.
                </p>
                <span style="color:rgba(255,255,255,0.1);" class="hidden sm:inline">&bull;</span>
                <span style="color:#5A7184;font-size:12px;font-style:italic;">Built with AI speed. Engineered for scale.</span>
            </div>

            {{-- Right: legal links + badge --}}
            <div class="flex items-center gap-5">
                <a href="#" style="color: #5A7184; font-size: 13px; text-decoration: none; transition: color 0.2s ease;"
                   onmouseover="this.style.color='#06B6D4'" onmouseout="this.style.color='#5A7184'">Privacy Policy</a>
                <a href="#" style="color: #5A7184; font-size: 13px; text-decoration: none; transition: color 0.2s ease;"
                   onmouseover="this.style.color='#06B6D4'" onmouseout="this.style.color='#5A7184'">Terms of Service</a>
                <div style="display:inline-flex;align-items:center;gap:5px;padding:4px 10px;background:rgba(6,182,212,0.08);border:1px solid rgba(6,182,212,0.2);border-radius:999px;">
                    <span style="display:inline-block;width:6px;height:6px;border-radius:50%;background:#06B6D4;box-shadow:0 0 0 2px rgba(6,182,212,0.3);"></span>
                    <span style="font-size:11px;font-weight:600;color:#06B6D4;letter-spacing:0.06em;">Glass Box</span>
                </div>
            </div>

        </div>
    </div>

</footer>
