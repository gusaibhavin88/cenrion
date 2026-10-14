@extends('layouts.app')

@section('title', 'Solutions')
@section('meta_description', 'Cenrion delivers problem-centric technology solutions: AI-powered support, legacy modernization, process automation, and data intelligence.')

@section('content')

{{-- =====================================================================
     HERO SECTION
     ===================================================================== --}}
<section class="relative overflow-hidden" style="background-color:#0B1D2E; padding-top:8rem; padding-bottom:5rem;">
    <div class="absolute inset-0 opacity-5" style="background-image:radial-gradient(circle, #00AEEF 1px, transparent 1px); background-size:40px 40px;"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] rounded-full opacity-10" style="background:radial-gradient(ellipse, #00AEEF 0%, transparent 70%);"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 mb-6" data-animate data-delay="0">
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
            <span class="text-sm font-semibold tracking-widest uppercase" style="color:#00AEEF;">Business Solutions</span>
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
        </div>

        <h1 class="js-split text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            Real Problems.<br>Engineered Solutions.
        </h1>
        <p class="text-xl max-w-2xl mx-auto" style="color:#94A3B8;" data-animate data-delay="180">
            We don't sell technology for its own sake. We identify the business problems that matter most and engineer solutions designed to move the needle — measurably.
        </p>
    </div>
</section>

{{-- =====================================================================
     SOLUTION CARDS
     ===================================================================== --}}
<section class="py-20" style="background-color:#F5F8FC;">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4" style="color:#0B1D2E;">Where We Deliver Results</h2>
            <p class="text-lg max-w-2xl mx-auto" style="color:#5A7184;">Four high-impact solution areas where Cenrion consistently drives measurable outcomes for our clients.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- --------------------------------------------------------
                 SOLUTION 1 — AI-Powered Customer Support
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-all duration-300 group" style="border-color:#E2EAF4;">
                {{-- Number badge --}}
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl" style="background-color:#EBF8FF;">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                    </div>
                    <span class="text-5xl font-black" style="color:#E2EAF4;">01</span>
                </div>

                <h3 class="text-2xl font-bold mb-4" style="color:#0B1D2E;">AI-Powered Customer Support</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#94A3B8;">The Challenge</p>
                    <p class="text-sm" style="color:#5A7184;">High support volumes, slow response times, and inconsistent service quality are draining resources and eroding customer satisfaction — while human agents spend most of their time on repetitive, low-value queries.</p>
                </div>

                <div class="mb-8 p-4 rounded-xl" style="background-color:#EBF8FF; border-left: 3px solid #00AEEF;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#00AEEF;">The Solution</p>
                    <p class="text-sm" style="color:#0D1B2A;">We design and deploy conversational AI systems that handle first and second-line support autonomously — with intelligent escalation, context retention, and continuous learning built in from day one.</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach(['Generative AI', 'Conversational AI', 'LLM'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:#EBF8FF; color:#00AEEF;">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 SOLUTION 2 — Legacy System Modernization
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-all duration-300 group" style="border-color:#E2EAF4;">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl" style="background-color:#EBF8FF;">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                    </div>
                    <span class="text-5xl font-black" style="color:#E2EAF4;">02</span>
                </div>

                <h3 class="text-2xl font-bold mb-4" style="color:#0B1D2E;">Legacy System Modernization</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#94A3B8;">The Challenge</p>
                    <p class="text-sm" style="color:#5A7184;">Ageing monolithic systems are becoming barriers to growth — difficult to maintain, expensive to scale, and incompatible with modern integrations. Yet re-platforming carries serious business risk when done carelessly.</p>
                </div>

                <div class="mb-8 p-4 rounded-xl" style="background-color:#EBF8FF; border-left: 3px solid #00AEEF;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#00AEEF;">The Solution</p>
                    <p class="text-sm" style="color:#0D1B2A;">We execute structured modernization programmes — decomposing monoliths into microservices, migrating to cloud-native infrastructure, and preserving business continuity at every stage of the transition.</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach(['Microservices', 'Cloud Migration', 'API Design'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:#EBF8FF; color:#00AEEF;">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 SOLUTION 3 — Intelligent Process Automation
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-all duration-300 group" style="border-color:#E2EAF4;">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl" style="background-color:#EBF8FF;">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>
                    </div>
                    <span class="text-5xl font-black" style="color:#E2EAF4;">03</span>
                </div>

                <h3 class="text-2xl font-bold mb-4" style="color:#0B1D2E;">Intelligent Process Automation</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#94A3B8;">The Challenge</p>
                    <p class="text-sm" style="color:#5A7184;">High-volume manual workflows — data entry, document handling, cross-system data transfer — consume skilled team capacity, introduce human error, and create operational bottlenecks that compound over time.</p>
                </div>

                <div class="mb-8 p-4 rounded-xl" style="background-color:#EBF8FF; border-left: 3px solid #00AEEF;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#00AEEF;">The Solution</p>
                    <p class="text-sm" style="color:#0D1B2A;">We design and implement automation solutions combining RPA, AI-driven decision logic, and seamless third-party integrations — eliminating manual overhead and enabling teams to operate at a fundamentally higher level.</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach(['RPA', 'Workflow Automation', 'Integration'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:#EBF8FF; color:#00AEEF;">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- --------------------------------------------------------
                 SOLUTION 4 — Data Intelligence Platforms
                 -------------------------------------------------------- --}}
            <div class="bg-white rounded-2xl border p-10 shadow-sm hover:shadow-md transition-all duration-300 group" style="border-color:#E2EAF4;">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl" style="background-color:#EBF8FF;">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </div>
                    <span class="text-5xl font-black" style="color:#E2EAF4;">04</span>
                </div>

                <h3 class="text-2xl font-bold mb-4" style="color:#0B1D2E;">Data Intelligence Platforms</h3>

                <div class="mb-4 p-4 rounded-xl" style="background-color:#F5F8FC;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#94A3B8;">The Challenge</p>
                    <p class="text-sm" style="color:#5A7184;">Organisations are data-rich but insight-poor — critical business data sits fragmented across siloed systems, inaccessible to decision-makers or locked in formats that prevent meaningful analysis.</p>
                </div>

                <div class="mb-8 p-4 rounded-xl" style="background-color:#EBF8FF; border-left: 3px solid #00AEEF;">
                    <p class="text-xs font-bold uppercase tracking-wider mb-1" style="color:#00AEEF;">The Solution</p>
                    <p class="text-sm" style="color:#0D1B2A;">We build unified data platforms that ingest, transform, and surface business intelligence in real time — giving leadership and operational teams the visibility they need to make confident, data-driven decisions at every level.</p>
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach(['Business Intelligence', 'Analytics', 'Data Engineering'] as $tag)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:#EBF8FF; color:#00AEEF;">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

        </div>{{-- /solution grid --}}
    </div>
</section>

{{-- =====================================================================
     ENGAGEMENT MODELS
     ===================================================================== --}}
<section class="py-20" style="background-color:#0B1D2E;">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 mb-4">
                <div class="h-px w-8" style="background-color:#00AEEF;"></div>
                <span class="text-sm font-semibold tracking-widest uppercase" style="color:#00AEEF;">How We Work</span>
                <div class="h-px w-8" style="background-color:#00AEEF;"></div>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Engagement Models</h2>
            <p class="text-lg max-w-2xl mx-auto" style="color:#94A3B8;">We adapt to how your organisation works — from defined project delivery to embedded engineering capacity.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

            {{-- Model 1 --}}
            <div class="rounded-2xl p-8 border transition-all duration-300 hover:border-cyan-400" style="background-color:#112237; border-color:#1A3352;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-6" style="background-color:rgba(0,174,239,0.15);">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Project-Based Delivery</h3>
                <p class="text-sm mb-6" style="color:#94A3B8;">Fixed scope, explicit timeline, and defined deliverables. Ideal for organisations with a clear problem statement and a desire for predictable outcomes.</p>
                <ul class="space-y-2">
                    @foreach(['Defined outcomes', 'Fixed timeline', 'Milestone-based billing'] as $point)
                    <li class="flex items-center gap-2 text-sm" style="color:#94A3B8;">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        {{ $point }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 2 --}}
            <div class="rounded-2xl p-8 border transition-all duration-300 hover:border-cyan-400" style="background-color:#112237; border-color:#1A3352;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-6" style="background-color:rgba(0,174,239,0.15);">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Staff Augmentation</h3>
                <p class="text-sm mb-6" style="color:#94A3B8;">Senior Cenrion engineers embedded directly into your existing teams — operating to your standards, in your tools, under your leadership.</p>
                <ul class="space-y-2">
                    @foreach(['Instant capability lift', 'Your workflows & tools', 'Flexible duration'] as $point)
                    <li class="flex items-center gap-2 text-sm" style="color:#94A3B8;">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        {{ $point }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 3 --}}
            <div class="rounded-2xl p-8 border transition-all duration-300 hover:border-cyan-400" style="background-color:#112237; border-color:#1A3352;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-6" style="background-color:rgba(0,174,239,0.15);">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Dedicated Engineering Teams</h3>
                <p class="text-sm mb-6" style="color:#94A3B8;">A complete cross-functional squad — engineers, QA, architecture — operating as a cohesive delivery unit fully focused on your product or programme.</p>
                <ul class="space-y-2">
                    @foreach(['Full squad ownership', 'Agile delivery rhythm', 'Strategic alignment'] as $point)
                    <li class="flex items-center gap-2 text-sm" style="color:#94A3B8;">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        {{ $point }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Model 4 --}}
            <div class="rounded-2xl p-8 border transition-all duration-300 hover:border-cyan-400" style="background-color:#112237; border-color:#1A3352;">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl mb-6" style="background-color:rgba(0,174,239,0.15);">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AEEF">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Technology Advisory</h3>
                <p class="text-sm mb-6" style="color:#94A3B8;">Strategic guidance without the delivery overhead. Architecture reviews, technology selection, and engineering leadership for organisations navigating critical decisions.</p>
                <ul class="space-y-2">
                    @foreach(['Architecture reviews', 'Tech stack guidance', 'CTO-as-a-service'] as $point)
                    <li class="flex items-center gap-2 text-sm" style="color:#94A3B8;">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        {{ $point }}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>{{-- /engagement grid --}}
    </div>
</section>

{{-- =====================================================================
     BOTTOM CTA
     ===================================================================== --}}
<section class="py-24" style="background-color:#F5F8FC;">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 mb-6">
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
            <span class="text-sm font-semibold tracking-widest uppercase" style="color:#00AEEF;">Work With Us</span>
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
        </div>
        <h2 class="text-4xl lg:text-5xl font-extrabold mb-6" style="color:#0B1D2E;">
            Ready to solve the real problem?
        </h2>
        <p class="text-xl mb-10" style="color:#5A7184;">
            Let's have an honest conversation about your challenge and whether we're the right fit to help.
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
