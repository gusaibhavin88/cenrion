<footer style="background: #0B1D2E;">

    {{-- ── Main Footer Grid ── --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

            {{-- ── Column 1: Brand & Mission ── --}}
            <div class="sm:col-span-2 lg:col-span-1">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5 group" aria-label="Cenrion home">
                    <svg width="34" height="34" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <polygon points="16,11 20,16 16,21 12,16" fill="#00AEEF"/>
                        <polygon points="16,0 19,5 16,10 13,5" fill="#4DD8F5"/>
                        <polygon points="16,22 19,27 16,32 13,27" fill="#4DD8F5"/>
                        <polygon points="0,16 5,13 10,16 5,19" fill="#4DD8F5"/>
                        <polygon points="22,16 27,13 32,16 27,19" fill="#4DD8F5"/>
                        <polygon points="23,3 27,5 25,9 21,7" fill="#00AEEF" opacity="0.7"/>
                        <polygon points="9,23 13,25 11,29 7,27" fill="#00AEEF" opacity="0.7"/>
                        <polygon points="9,3 13,7 11,11 7,5" fill="#00AEEF" opacity="0.7"/>
                        <polygon points="23,23 27,27 25,29 21,25" fill="#00AEEF" opacity="0.7"/>
                    </svg>
                    <span style="font-size: 20px; font-weight: 800; letter-spacing: -0.03em; color: #FFFFFF;">cenrion</span>
                </a>

                {{-- Tagline --}}
                <p style="color: #4DD8F5; font-size: 14px; font-weight: 600; margin-bottom: 12px; letter-spacing: 0.01em;">
                    Technology2 that moves business forward.
                </p>

                {{-- Mission --}}
                <p style="color: #94A3B8; font-size: 14px; line-height: 1.7; margin-bottom: 20px;">
                    We partner with forward-thinking organisations to design, build, and scale intelligent software systems — from AI and data platforms to cloud-native applications.
                </p>

                {{-- Tech stack badges --}}
                <div class="flex flex-wrap gap-2">
                    @foreach(['Python', 'Laravel', 'React', 'TypeScript', 'AWS', 'Kubernetes'] as $tech)
                        <span style="
                            display: inline-flex; align-items: center; padding: 5px 12px;
                            background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12);
                            border-radius: 999px; font-size: 12px; font-weight: 500; color: #CBD5E1;
                        ">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>

            {{-- ── Column 2: Solutions ── --}}
            <div>
                <h3 style="color: #FFFFFF; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px;">
                    Solutions
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
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
                            <a href="{{ route('solutions') }}"
                               style="color: #94A3B8; font-size: 14px; font-weight: 400; text-decoration: none; transition: color 0.2s ease; display: inline-flex; align-items: center; gap: 6px;"
                               onmouseover="this.style.color='#00AEEF'"
                               onmouseout="this.style.color='#94A3B8'">
                                <svg width="10" height="10" viewBox="0 0 20 20" fill="currentColor" style="opacity:0.5; flex-shrink:0;" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ $solution }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Column 3: Company ── --}}
            <div>
                <h3 style="color: #FFFFFF; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px;">
                    Company
                </h3>
                <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                    @php
                        $company = [
                            ['label' => 'About',          'route' => 'about'],
                            ['label' => 'Careers',        'route' => 'careers'],
                            ['label' => 'Insights',       'route' => 'insights'],
                            ['label' => 'Cenrion Labs',   'route' => 'labs'],
                            ['label' => 'Contact',        'route' => 'contact'],
                        ];
                    @endphp
                    @foreach($company as $item)
                        <li>
                            <a href="{{ route($item['route']) }}"
                               style="color: #94A3B8; font-size: 14px; font-weight: 400; text-decoration: none; transition: color 0.2s ease; display: inline-flex; align-items: center; gap: 6px;"
                               onmouseover="this.style.color='#00AEEF'"
                               onmouseout="this.style.color='#94A3B8'">
                                <svg width="10" height="10" viewBox="0 0 20 20" fill="currentColor" style="opacity:0.5; flex-shrink:0;" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- ── Column 4: Contact ── --}}
            <div>
                <h3 style="color: #FFFFFF; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 20px;">
                    Contact
                </h3>

                {{-- Email --}}
                <div class="mb-5">
                    <p style="color: #5A7184; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 6px;">
                        Email
                    </p>
                    <a href="mailto:hello@cenrion.com"
                       style="color: #94A3B8; font-size: 14px; text-decoration: none; transition: color 0.2s ease;"
                       onmouseover="this.style.color='#00AEEF'"
                       onmouseout="this.style.color='#94A3B8'">
                        hello@cenrion.com
                    </a>
                </div>

                {{-- Social links --}}
                <div class="mb-6">
                    <p style="color: #5A7184; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px;">
                        Follow Us
                    </p>
                    <div class="flex items-center gap-3">
                        {{-- LinkedIn --}}
                        <a href="https://linkedin.com/company/cenrion"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="Cenrion on LinkedIn"
                           style="
                               display: flex; align-items: center; justify-content: center;
                               width: 38px; height: 38px; border-radius: 10px;
                               background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
                               color: #94A3B8; transition: all 0.2s ease;
                           "
                           onmouseover="this.style.background='rgba(0,174,239,0.15)'; this.style.borderColor='rgba(0,174,239,0.4)'; this.style.color='#00AEEF';"
                           onmouseout="this.style.background='rgba(255,255,255,0.06)'; this.style.borderColor='rgba(255,255,255,0.1)'; this.style.color='#94A3B8';">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>

                        {{-- Twitter / X --}}
                        <a href="https://twitter.com/cenrion"
                           target="_blank" rel="noopener noreferrer"
                           aria-label="Cenrion on X (Twitter)"
                           style="
                               display: flex; align-items: center; justify-content: center;
                               width: 38px; height: 38px; border-radius: 10px;
                               background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.1);
                               color: #94A3B8; transition: all 0.2s ease;
                           "
                           onmouseover="this.style.background='rgba(0,174,239,0.15)'; this.style.borderColor='rgba(0,174,239,0.4)'; this.style.color='#00AEEF';"
                           onmouseout="this.style.background='rgba(255,255,255,0.06)'; this.style.borderColor='rgba(255,255,255,0.1)'; this.style.color='#94A3B8';">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.259 5.63L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- CTA Button --}}
                <a href="{{ route('contact') }}"
                   class="btn-primary"
                   style="padding: 10px 20px; font-size: 14px; width: 100%; justify-content: center;">
                    Talk to Us
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

        </div>{{-- /grid --}}
    </div>{{-- /main grid wrapper --}}

    {{-- ── Divider ── --}}
    <div style="border-top: 1px solid #1A3352;"></div>

    {{-- ── Bottom Bar ── --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">

            {{-- Copyright --}}
            <p style="color: #5A7184; font-size: 13px; font-weight: 400;">
                &copy; {{ date('Y') }} Cenrion. All rights reserved.
            </p>

            {{-- Legal links --}}
            <div class="flex items-center gap-6">
                <a href="#"
                   style="color: #5A7184; font-size: 13px; text-decoration: none; transition: color 0.2s ease;"
                   onmouseover="this.style.color='#00AEEF'"
                   onmouseout="this.style.color='#5A7184'">
                    Privacy Policy
                </a>
                <a href="#"
                   style="color: #5A7184; font-size: 13px; text-decoration: none; transition: color 0.2s ease;"
                   onmouseover="this.style.color='#00AEEF'"
                   onmouseout="this.style.color='#5A7184'">
                    Terms of Service
                </a>
            </div>

        </div>
    </div>

</footer>
