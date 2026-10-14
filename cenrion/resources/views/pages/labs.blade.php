@extends('layouts.app')

@section('title', 'Cenrion Labs')
@section('meta_description', 'Cenrion Labs: working technology demonstrations of AI, data, and engineering capability. Proof through code, not slides.')

@section('content')

{{-- =====================================================================
     HERO SECTION — dot grid background
     ===================================================================== --}}
<section class="relative overflow-hidden" style="background-color:#0B1D2E; padding-top:8rem; padding-bottom:5rem;">
    {{-- Dot grid overlay --}}
    <div class="absolute inset-0" style="background-image:radial-gradient(circle, rgba(0,174,239,0.18) 1px, transparent 1px); background-size:32px 32px;"></div>
    {{-- Radial glow --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[900px] h-[500px] pointer-events-none" style="background:radial-gradient(ellipse at center, rgba(0,174,239,0.12) 0%, transparent 65%);"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-center">
        {{-- Eyebrow badge --}}
        <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border mb-8" style="background-color:rgba(0,174,239,0.1); border-color:rgba(0,174,239,0.3);" data-animate data-delay="0">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#00AEEF">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 1-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
            </svg>
            <span class="text-sm font-semibold" style="color:#00AEEF;">Cenrion Labs</span>
        </div>

        <h1 class="js-split text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            Proof of Engineering<br>
            <span class="draw-line" style="color:#00AEEF;">Capability</span>
        </h1>
        <p class="text-xl max-w-2xl mx-auto" style="color:#94A3B8;" data-animate data-delay="180">
            Working technology demonstrations, not slides. Each Labs project is a functional build that shows exactly how we engineer solutions — before any engagement begins.
        </p>
    </div>
</section>

{{-- =====================================================================
     CONCEPT BANNER
     ===================================================================== --}}
<section style="background-color:#F5F8FC; padding-top:3rem; padding-bottom:2rem;">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="rounded-2xl p-8 flex flex-col sm:flex-row items-start gap-6" style="background-color:#EBF8FF; border-left: 4px solid #00AEEF; border: 1px solid #BEE3F8; border-left: 4px solid #00AEEF;">
            <div class="flex-shrink-0">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase" style="background-color:#00AEEF; color:#fff;">
                    CONCEPT
                </div>
            </div>
            <div>
                <p class="font-bold text-lg mb-1" style="color:#0B1D2E;">Technology Demonstration</p>
                <p style="color:#5A7184;">The projects below are engineering-led proof-of-concept builds. They demonstrate how Cenrion approaches real-world problems using modern AI, data, and software engineering techniques. Each demo is intentionally constrained in scope to surface architectural thinking and engineering quality — not to replicate a production system. All features are illustrative.</p>
            </div>
        </div>
    </div>
</section>

{{-- =====================================================================
     DEMO CARDS
     ===================================================================== --}}
<section class="py-16" style="background-color:#F5F8FC;">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="space-y-10">

            {{-- ============================================================
                 DEMO CARD 1 — AI Document Intelligence
                 ============================================================ --}}
            <div class="bg-white rounded-2xl border shadow-sm overflow-hidden" style="border-color:#E2EAF4;">
                <div class="grid grid-cols-1 lg:grid-cols-5">

                    {{-- Left accent + icon column --}}
                    <div class="lg:col-span-2 p-10 flex flex-col justify-between" style="background: linear-gradient(135deg, #0B1D2E 0%, #112237 100%);">
                        <div>
                            {{-- Status badge --}}
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full mb-6" style="background-color:rgba(0,174,239,0.2); border: 1px solid rgba(0,174,239,0.4);">
                                <div class="w-2 h-2 rounded-full animate-pulse" style="background-color:#00AEEF;"></div>
                                <span class="text-xs font-semibold" style="color:#00AEEF;">Coming Soon</span>
                            </div>

                            {{-- CONCEPT badge --}}
                            <div class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold tracking-widest uppercase mb-6 ml-2" style="background-color:rgba(0,174,239,0.15); color:#4DD8F5; border: 1px solid rgba(77,216,245,0.3);">
                                CONCEPT
                            </div>

                            <div class="mb-6">
                                <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#00AEEF">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                            </div>

                            <h2 class="text-2xl font-bold text-white mb-3">AI Document Intelligence</h2>
                            <p style="color:#94A3B8;">Upload any PDF. Watch AI extract structured data, generate a contextual summary, and answer natural-language questions about the document — all in seconds.</p>
                        </div>

                        {{-- Tech tags --}}
                        <div class="mt-8">
                            <p class="text-xs font-semibold uppercase tracking-wider mb-3" style="color:#5A7184;">Technology Stack</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Python', 'LangChain', 'OpenAI API', 'FastAPI'] as $tech)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:rgba(0,174,239,0.15); color:#4DD8F5; border: 1px solid rgba(77,216,245,0.25);">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Right content column --}}
                    <div class="lg:col-span-3 p-10">
                        <p class="text-sm font-bold uppercase tracking-wider mb-6" style="color:#00AEEF;">How It Works</p>

                        <div class="space-y-6 mb-10">
                            @php
                            $steps1 = [
                                ['01', 'Upload a PDF', 'Drop any PDF document — contracts, reports, invoices, research papers — into the interface.'],
                                ['02', 'AI Extraction', 'LangChain orchestrates document chunking and semantic parsing, extracting key fields and structured data automatically.'],
                                ['03', 'Summary Generation', 'The connected LLM produces a concise, accurate summary of the document\'s key content and context.'],
                                ['04', 'Q&A Interface', 'Ask natural-language questions about the document. The system retrieves and synthesises answers from the source text.'],
                            ];
                            @endphp
                            @foreach($steps1 as $step)
                            <div class="flex gap-5">
                                <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-xl font-bold text-sm" style="background-color:#EBF8FF; color:#00AEEF;">{{ $step[0] }}</div>
                                <div>
                                    <p class="font-semibold mb-1" style="color:#0D1B2A;">{{ $step[1] }}</p>
                                    <p class="text-sm" style="color:#5A7184;">{{ $step[2] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button disabled class="inline-flex items-center gap-3 px-6 py-3 rounded-xl font-semibold text-sm border-2 cursor-not-allowed opacity-60 transition-all" style="border-color:#00AEEF; color:#00AEEF;">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                            </svg>
                            Explore Demo — Coming Soon
                        </button>
                    </div>
                </div>
            </div>

            {{-- ============================================================
                 DEMO CARD 2 — AI Support Agent
                 ============================================================ --}}
            <div class="bg-white rounded-2xl border shadow-sm overflow-hidden" style="border-color:#E2EAF4;">
                <div class="grid grid-cols-1 lg:grid-cols-5">

                    <div class="lg:col-span-2 p-10 flex flex-col justify-between" style="background: linear-gradient(135deg, #0B1D2E 0%, #112237 100%);">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full mb-6" style="background-color:rgba(0,174,239,0.2); border: 1px solid rgba(0,174,239,0.4);">
                                <div class="w-2 h-2 rounded-full animate-pulse" style="background-color:#00AEEF;"></div>
                                <span class="text-xs font-semibold" style="color:#00AEEF;">Coming Soon</span>
                            </div>

                            <div class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold tracking-widest uppercase mb-6 ml-2" style="background-color:rgba(0,174,239,0.15); color:#4DD8F5; border: 1px solid rgba(77,216,245,0.3);">
                                CONCEPT
                            </div>

                            <div class="mb-6">
                                <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#00AEEF">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                </svg>
                            </div>

                            <h2 class="text-2xl font-bold text-white mb-3">AI Support Agent</h2>
                            <p style="color:#94A3B8;">A multi-turn conversational AI that handles support queries with full context awareness — backed by Retrieval-Augmented Generation to answer accurately from a knowledge base.</p>
                        </div>

                        <div class="mt-8">
                            <p class="text-xs font-semibold uppercase tracking-wider mb-3" style="color:#5A7184;">Technology Stack</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['OpenAI API', 'LangChain', 'Vector DB', 'React'] as $tech)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:rgba(0,174,239,0.15); color:#4DD8F5; border: 1px solid rgba(77,216,245,0.25);">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 p-10">
                        <p class="text-sm font-bold uppercase tracking-wider mb-6" style="color:#00AEEF;">How It Works</p>

                        <div class="space-y-6 mb-10">
                            @php
                            $steps2 = [
                                ['01', 'Knowledge Ingestion', 'A product knowledge base is chunked, embedded, and stored in a vector database — creating a semantic search layer the agent can query in real time.'],
                                ['02', 'User Query', 'The user asks a question in natural language through the chat interface. The agent maintains full conversation history for context.'],
                                ['03', 'RAG Retrieval', 'Relevant knowledge base chunks are retrieved via semantic similarity search and injected into the LLM prompt as grounding context.'],
                                ['04', 'Response & Escalation', 'The agent generates a grounded response. If confidence is low or the query falls outside scope, it routes intelligently to a human.'],
                            ];
                            @endphp
                            @foreach($steps2 as $step)
                            <div class="flex gap-5">
                                <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-xl font-bold text-sm" style="background-color:#EBF8FF; color:#00AEEF;">{{ $step[0] }}</div>
                                <div>
                                    <p class="font-semibold mb-1" style="color:#0D1B2A;">{{ $step[1] }}</p>
                                    <p class="text-sm" style="color:#5A7184;">{{ $step[2] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button disabled class="inline-flex items-center gap-3 px-6 py-3 rounded-xl font-semibold text-sm border-2 cursor-not-allowed opacity-60 transition-all" style="border-color:#00AEEF; color:#00AEEF;">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                            </svg>
                            Explore Demo — Coming Soon
                        </button>
                    </div>
                </div>
            </div>

            {{-- ============================================================
                 DEMO CARD 3 — Analytics Dashboard
                 ============================================================ --}}
            <div class="bg-white rounded-2xl border shadow-sm overflow-hidden" style="border-color:#E2EAF4;">
                <div class="grid grid-cols-1 lg:grid-cols-5">

                    <div class="lg:col-span-2 p-10 flex flex-col justify-between" style="background: linear-gradient(135deg, #0B1D2E 0%, #112237 100%);">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full mb-6" style="background-color:rgba(0,174,239,0.2); border: 1px solid rgba(0,174,239,0.4);">
                                <div class="w-2 h-2 rounded-full animate-pulse" style="background-color:#00AEEF;"></div>
                                <span class="text-xs font-semibold" style="color:#00AEEF;">Coming Soon</span>
                            </div>

                            <div class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold tracking-widest uppercase mb-6 ml-2" style="background-color:rgba(0,174,239,0.15); color:#4DD8F5; border: 1px solid rgba(77,216,245,0.3);">
                                CONCEPT
                            </div>

                            <div class="mb-6">
                                <svg class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#00AEEF">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                </svg>
                            </div>

                            <h2 class="text-2xl font-bold text-white mb-3">Analytics Dashboard</h2>
                            <p style="color:#94A3B8;">Real-time data visualisation with multi-level drill-down. Interactive charts and KPI tracking built to demonstrate how business intelligence should feel — fast, clear, and explorable.</p>
                        </div>

                        <div class="mt-8">
                            <p class="text-xs font-semibold uppercase tracking-wider mb-3" style="color:#5A7184;">Technology Stack</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['React', 'TypeScript', 'D3.js', 'PostgreSQL'] as $tech)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold" style="background-color:rgba(0,174,239,0.15); color:#4DD8F5; border: 1px solid rgba(77,216,245,0.25);">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 p-10">
                        <p class="text-sm font-bold uppercase tracking-wider mb-6" style="color:#00AEEF;">How It Works</p>

                        <div class="space-y-6 mb-10">
                            @php
                            $steps3 = [
                                ['01', 'Live Data Feed', 'A PostgreSQL backend streams simulated business metrics — sales, engagement, performance — updated in real time via a lightweight API.'],
                                ['02', 'D3.js Visualisation', 'Data is rendered into interactive charts using D3.js — bar, line, heatmap, and scatter — each built for responsiveness and performance.'],
                                ['03', 'Drill-Down Exploration', 'Click any data point or chart segment to drill into granular detail. Filters and date range selectors reshape the view instantly without page reloads.'],
                                ['04', 'KPI Summary Layer', 'A top-level summary layer surfaces headline metrics and trend signals, giving decision-makers the key numbers at a glance.'],
                            ];
                            @endphp
                            @foreach($steps3 as $step)
                            <div class="flex gap-5">
                                <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 rounded-xl font-bold text-sm" style="background-color:#EBF8FF; color:#00AEEF;">{{ $step[0] }}</div>
                                <div>
                                    <p class="font-semibold mb-1" style="color:#0D1B2A;">{{ $step[1] }}</p>
                                    <p class="text-sm" style="color:#5A7184;">{{ $step[2] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button disabled class="inline-flex items-center gap-3 px-6 py-3 rounded-xl font-semibold text-sm border-2 cursor-not-allowed opacity-60 transition-all" style="border-color:#00AEEF; color:#00AEEF;">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                            </svg>
                            Explore Demo — Coming Soon
                        </button>
                    </div>
                </div>
            </div>

        </div>{{-- /demo cards --}}
    </div>
</section>

{{-- =====================================================================
     BOTTOM CTA
     ===================================================================== --}}
<section class="py-24" style="background-color:#0B1D2E;">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 mb-6">
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
            <span class="text-sm font-semibold tracking-widest uppercase" style="color:#00AEEF;">Let's Build Together</span>
            <div class="h-px w-8" style="background-color:#00AEEF;"></div>
        </div>
        <h2 class="text-4xl lg:text-5xl font-extrabold text-white mb-6">
            Seen enough? Let's talk about your problem.
        </h2>
        <p class="text-xl mb-10" style="color:#94A3B8;">
            These demos are just a taste of what we build. Tell us what you're trying to solve and we'll show you what's possible.
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
