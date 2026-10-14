@extends('layouts.app')

@section('title', 'Capabilities')
@section('meta_description', 'Cenrion\'s full technology capabilities: AI & Generative AI, Software Engineering, Data & Analytics, Cloud & DevOps, Quality Engineering, Automation & Systems.')

@section('content')

{{-- =====================================================================
     HERO SECTION
     ===================================================================== --}}
<section class="relative overflow-hidden" style="background-color:#0B1D2E; padding-top:8rem; padding-bottom:5rem;">
    {{-- Background grid pattern --}}
    <div class="absolute inset-0 opacity-5" style="background-image:radial-gradient(circle, #00AEEF 1px, transparent 1px); background-size:40px 40px;"></div>
    {{-- Subtle cyan glow --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] rounded-full opacity-10" style="background:radial-gradient(ellipse, #00AEEF 0%, transparent 70%);"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
        {{-- Eyebrow --}}
        <div class="inline-flex items-center gap-2 mb-6" data-animate data-delay="0">
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
            <span class="text-sm font-semibold tracking-widest uppercase" style="color:#00AEEF;">What We Build</span>
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
        </div>

        <h1 class="js-split text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            Engineering Capabilities
        </h1>
        <p class="text-xl max-w-2xl mx-auto" style="color:#94A3B8;" data-animate data-delay="180">
            Depth in every discipline. Breadth across the modern technology stack.
        </p>
    </div>
</section>

{{-- =====================================================================
     CAPABILITIES GRID
     ===================================================================== --}}
<section class="py-20" style="background-color:#F5F8FC;">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- --------------------------------------------------------
                 PILLAR 1 — AI & Generative AI
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-shadow duration-300" style="border-color:#E2EAF4;">
                {{-- Icon --}}
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl mb-6" style="background-color:#EBF8FF;">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold mb-3" style="color:#0B1D2E;">AI &amp; Generative AI</h2>
                <p class="mb-8" style="color:#5A7184;">We design and deploy intelligent systems that put the power of modern AI to work — from document understanding to autonomous agents operating at scale.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'AI-powered applications',
                        'Generative AI integration',
                        'Agentic AI workflows',
                        'Intelligent Document Processing',
                        'LLM fine-tuning &amp; customization',
                        'Conversational AI platforms',
                    ] as $item)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" style="color:#0D1B2A;">{!! $item !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 PILLAR 2 — Software Engineering
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-shadow duration-300" style="border-color:#E2EAF4;">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl mb-6" style="background-color:#EBF8FF;">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold mb-3" style="color:#0B1D2E;">Software Engineering</h2>
                <p class="mb-8" style="color:#5A7184;">We architect and build robust, scalable software products — from consumer-facing applications to mission-critical enterprise platforms.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'Web &amp; mobile applications',
                        'Enterprise SaaS platforms',
                        'API architecture &amp; design',
                        'Microservices architecture',
                        'Legacy system modernization',
                        'Product engineering',
                    ] as $item)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" style="color:#0D1B2A;">{!! $item !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 PILLAR 3 — Data & Analytics
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-shadow duration-300" style="border-color:#E2EAF4;">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl mb-6" style="background-color:#EBF8FF;">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold mb-3" style="color:#0B1D2E;">Data &amp; Analytics</h2>
                <p class="mb-8" style="color:#5A7184;">We transform raw data into strategic assets — building pipelines, dashboards, and models that power faster, smarter decision-making across the organisation.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'Data engineering &amp; ETL',
                        'Real-time data pipelines',
                        'Business Intelligence dashboards',
                        'Advanced data visualization',
                        'Predictive analytics',
                        'Unified data platforms',
                    ] as $item)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" style="color:#0D1B2A;">{!! $item !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 PILLAR 4 — Cloud & DevOps
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-shadow duration-300" style="border-color:#E2EAF4;">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl mb-6" style="background-color:#EBF8FF;">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold mb-3" style="color:#0B1D2E;">Cloud &amp; DevOps</h2>
                <p class="mb-8" style="color:#5A7184;">We migrate, modernise, and optimise cloud infrastructure — building reliable, secure, and cost-efficient environments with engineering-led DevOps practices.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'AWS / Azure / GCP migration',
                        'Cloud-native development',
                        'Infrastructure as Code (IaC)',
                        'CI/CD pipeline design',
                        'Cloud cost optimization',
                        'Site reliability engineering',
                    ] as $item)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" style="color:#0D1B2A;">{!! $item !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 PILLAR 5 — Quality Engineering
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-shadow duration-300" style="border-color:#E2EAF4;">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl mb-6" style="background-color:#EBF8FF;">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold mb-3" style="color:#0B1D2E;">Quality Engineering</h2>
                <p class="mb-8" style="color:#5A7184;">We embed quality throughout the delivery lifecycle — not as a gate at the end, but as a continuous discipline that keeps systems reliable and release cycles fast.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'Automated test suite development',
                        'API reliability testing',
                        'Load &amp; performance testing',
                        'Continuous quality integration',
                        'Test strategy &amp; planning',
                        'QA process design',
                    ] as $item)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" style="color:#0D1B2A;">{!! $item !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 PILLAR 6 — Automation & Systems
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-shadow duration-300" style="border-color:#E2EAF4;">
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl mb-6" style="background-color:#EBF8FF;">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold mb-3" style="color:#0B1D2E;">Automation &amp; Systems</h2>
                <p class="mb-8" style="color:#5A7184;">We eliminate repetitive manual effort and create intelligent workflows that integrate disparate systems — freeing teams to focus on higher-value work.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach([
                        'Robotic Process Automation (RPA)',
                        'Custom workflow automation',
                        'Third-party API integrations',
                        'Enterprise process design',
                        'System orchestration',
                        'Operational monitoring',
                    ] as $item)
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" style="color:#0D1B2A;">{!! $item !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>{{-- /grid --}}
    </div>
</section>

{{-- =====================================================================
     BOTTOM CTA
     ===================================================================== --}}
<section class="py-24" style="background-color:#0B1D2E;">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 mb-6">
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
            <span class="text-sm font-semibold tracking-widest uppercase" style="color:#00AEEF;">Get Started</span>
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
        </div>
        <h2 class="text-4xl lg:text-5xl font-extrabold text-white mb-6">
            Let's define your technology roadmap.
        </h2>
        <p class="text-xl mb-10" style="color:#94A3B8;">
            Tell us what you're building. We'll tell you how to engineer it right.
        </p>
        <a href="{{ route('contact') }}"
           class="inline-flex items-center gap-3 px-8 py-4 rounded-xl text-white font-semibold text-lg transition-all duration-200 hover:shadow-lg hover:-translate-y-0.5"
           style="background-color:#00AEEF;">
            Talk to Us
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</section>

@endsection
