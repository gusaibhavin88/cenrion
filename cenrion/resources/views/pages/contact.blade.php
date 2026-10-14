@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Start a conversation with Cenrion. Tell us about your project and we\'ll be in touch.')

@section('content')

{{-- ============================================================
     HERO / CONTACT SECTION
     ============================================================ --}}
<section class="bg-[#F5F8FC] pt-32 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16 items-start">

            {{-- ── LEFT COLUMN ──────────────────────────────────── --}}
            <div class="lg:col-span-2 lg:pt-4">

                {{-- Eyebrow --}}
                <span class="section-tag" data-animate data-delay="0">Get In Touch</span>

                {{-- Heading --}}
                <h1 class="js-split mt-4 text-4xl sm:text-5xl font-extrabold text-[#0D1B2A] leading-tight">
                    Let's build something<br class="hidden sm:block"> meaningful.
                </h1>

                {{-- Subtext --}}
                <p class="mt-5 text-lg text-[#5A7184] leading-relaxed" data-animate data-delay="160">
                    Tell us about your project. We respond to every genuine inquiry within 1 business day.
                </p>

                {{-- Contact Details --}}
                <div class="mt-8 space-y-3">
                    {{-- Email --}}
                    <a href="mailto:hello@cenrion.com"
                       class="flex items-center gap-3 group w-fit">
                        <span class="flex-shrink-0 w-9 h-9 rounded-lg bg-[#00AEEF]/10 flex items-center justify-center
                                     group-hover:bg-[#00AEEF]/20 transition-colors duration-200">
                            <svg class="w-4 h-4 text-[#00AEEF]" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                        </span>
                        <span class="text-[#0D1B2A] font-medium group-hover:text-[#00AEEF] transition-colors duration-200">
                            hello@cenrion.com
                        </span>
                    </a>

                    {{-- Location --}}
                    <div class="flex items-center gap-3">
                        <span class="flex-shrink-0 w-9 h-9 rounded-lg bg-[#00AEEF]/10 flex items-center justify-center">
                            <svg class="w-4 h-4 text-[#00AEEF]" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                        </span>
                        <span class="text-[#5A7184] font-medium">Based in India. Serving globally.</span>
                    </div>
                </div>

                {{-- Feature Points --}}
                <ul class="mt-10 space-y-4">
                    @foreach([
                        'No sales pitch. Just an honest conversation.',
                        'Response within 1 business day.',
                        'Confidential and no-obligation.',
                    ] as $point)
                    <li class="flex items-start gap-3">
                        <span class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#00AEEF]/15 flex items-center justify-center">
                            <svg class="w-3 h-3 text-[#00AEEF]" fill="none" stroke="currentColor" stroke-width="3"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </span>
                        <span class="text-[#5A7184] leading-snug">{{ $point }}</span>
                    </li>
                    @endforeach
                </ul>

            </div>
            {{-- ── END LEFT COLUMN ─────────────────────────────── --}}

            {{-- ── RIGHT COLUMN — FORM CARD ────────────────────── --}}
            <div class="lg:col-span-3">

                {{-- Success Banner --}}
                @if(session('success'))
                <div class="mb-6 flex items-start gap-3 rounded-xl bg-emerald-50 border border-emerald-200 px-5 py-4">
                    <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full bg-emerald-500 flex items-center justify-center">
                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" stroke-width="3"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </span>
                    <p class="text-emerald-800 font-medium leading-snug">{{ session('success') }}</p>
                </div>
                @endif

                {{-- Form Card --}}
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 sm:p-10"
                     x-data="{
                         selectedCategories: {{ json_encode(old('category', [])) }},
                         toggleCategory(cat) {
                             const idx = this.selectedCategories.indexOf(cat);
                             if (idx === -1) {
                                 this.selectedCategories.push(cat);
                             } else {
                                 this.selectedCategories.splice(idx, 1);
                             }
                         },
                         isSelected(cat) {
                             return this.selectedCategories.includes(cat);
                         }
                     }">

                    <h2 class="text-xl font-bold text-[#0D1B2A] mb-7">Send us a message</h2>

                    <form action="{{ route('contact.submit') }}" method="POST" novalidate class="space-y-6">
                        @csrf

                        {{-- Row 1: Name + Email --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                            {{-- Full Name --}}
                            <div>
                                <label for="name" class="block text-sm font-semibold text-[#0D1B2A] mb-1.5">
                                    Full Name <span class="text-[#EF4444]">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    required
                                    value="{{ old('name') }}"
                                    placeholder="Jane Smith"
                                    class="w-full rounded-lg border px-4 py-2.5 text-[#0D1B2A] placeholder-[#94A3B8]
                                           text-sm bg-white transition-all duration-200
                                           focus:outline-none focus:ring-2 focus:ring-[#00AEEF] focus:border-transparent
                                           @error('name') border-[#EF4444] bg-red-50 @else border-[#E2EAF4] @enderror"
                                />
                                @error('name')
                                <p class="mt-1.5 text-xs text-[#EF4444] flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Work Email --}}
                            <div>
                                <label for="email" class="block text-sm font-semibold text-[#0D1B2A] mb-1.5">
                                    Work Email <span class="text-[#EF4444]">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    required
                                    value="{{ old('email') }}"
                                    placeholder="jane@company.com"
                                    class="w-full rounded-lg border px-4 py-2.5 text-[#0D1B2A] placeholder-[#94A3B8]
                                           text-sm bg-white transition-all duration-200
                                           focus:outline-none focus:ring-2 focus:ring-[#00AEEF] focus:border-transparent
                                           @error('email') border-[#EF4444] bg-red-50 @else border-[#E2EAF4] @enderror"
                                />
                                @error('email')
                                <p class="mt-1.5 text-xs text-[#EF4444] flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                        </div>

                        {{-- Row 2: Company + Phone --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                            {{-- Company Name --}}
                            <div>
                                <label for="company" class="block text-sm font-semibold text-[#0D1B2A] mb-1.5">
                                    Company Name <span class="text-[#EF4444]">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    required
                                    value="{{ old('company') }}"
                                    placeholder="Acme Corp"
                                    class="w-full rounded-lg border px-4 py-2.5 text-[#0D1B2A] placeholder-[#94A3B8]
                                           text-sm bg-white transition-all duration-200
                                           focus:outline-none focus:ring-2 focus:ring-[#00AEEF] focus:border-transparent
                                           @error('company') border-[#EF4444] bg-red-50 @else border-[#E2EAF4] @enderror"
                                />
                                @error('company')
                                <p class="mt-1.5 text-xs text-[#EF4444] flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Phone Number (Optional) --}}
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-[#0D1B2A] mb-1.5">
                                    Phone Number
                                    <span class="font-normal text-[#94A3B8]">(Optional)</span>
                                </label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="+91 98765 43210"
                                    class="w-full rounded-lg border border-[#E2EAF4] px-4 py-2.5 text-[#0D1B2A]
                                           placeholder-[#94A3B8] text-sm bg-white transition-all duration-200
                                           focus:outline-none focus:ring-2 focus:ring-[#00AEEF] focus:border-transparent"
                                />
                            </div>

                        </div>

                        {{-- Project Category — Pill Checkboxes --}}
                        <div>
                            <label class="block text-sm font-semibold text-[#0D1B2A] mb-2">
                                Project Category <span class="text-[#EF4444]">*</span>
                            </label>
                            <p class="text-xs text-[#94A3B8] mb-3">Select all that apply.</p>

                            <div class="flex flex-wrap gap-2">
                                @php
                                $categories = [
                                    'AI/GenAI Solutions',
                                    'Software Engineering',
                                    'Data & Analytics',
                                    'Cloud & DevOps',
                                    'Automation',
                                    'QA Engineering',
                                    'Dedicated Team',
                                    'Other',
                                ];
                                @endphp

                                @foreach($categories as $cat)
                                <button
                                    type="button"
                                    @click="toggleCategory('{{ $cat }}')"
                                    :class="isSelected('{{ $cat }}')
                                        ? 'bg-[#00AEEF] border-[#00AEEF] text-white shadow-sm'
                                        : 'bg-white border-[#E2EAF4] text-[#5A7184] hover:border-[#00AEEF] hover:text-[#00AEEF]'"
                                    class="inline-flex items-center gap-1.5 rounded-full border px-3.5 py-1.5
                                           text-xs font-medium transition-all duration-150 cursor-pointer select-none">
                                    <span x-show="isSelected('{{ $cat }}')" class="flex-shrink-0">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                        </svg>
                                    </span>
                                    {{ $cat }}
                                </button>

                                {{-- Hidden inputs bound to Alpine state --}}
                                <template x-if="isSelected('{{ $cat }}')">
                                    <input type="hidden" name="category[]" value="{{ $cat }}">
                                </template>
                                @endforeach
                            </div>

                            @error('category')
                            <p class="mt-2 text-xs text-[#EF4444] flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{-- Project Scope --}}
                        <div>
                            <label for="scope" class="block text-sm font-semibold text-[#0D1B2A] mb-1.5">
                                Tell Us About Your Project <span class="text-[#EF4444]">*</span>
                            </label>
                            <textarea
                                id="scope"
                                name="scope"
                                rows="5"
                                required
                                placeholder="Tell us about your project, goals, timeline, and any technical context that would help us understand the challenge."
                                class="w-full rounded-lg border px-4 py-3 text-[#0D1B2A] placeholder-[#94A3B8]
                                       text-sm bg-white transition-all duration-200 resize-none leading-relaxed
                                       focus:outline-none focus:ring-2 focus:ring-[#00AEEF] focus:border-transparent
                                       @error('scope') border-[#EF4444] bg-red-50 @else border-[#E2EAF4] @enderror"
                            >{{ old('scope') }}</textarea>
                            @error('scope')
                            <p class="mt-1.5 text-xs text-[#EF4444] flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{-- Privacy note --}}
                        <p class="text-xs text-[#94A3B8] leading-relaxed">
                            By submitting this form you agree that Cenrion may contact you regarding your inquiry.
                            We never share your information with third parties.
                        </p>

                        {{-- Submit Button --}}
                        <button
                            type="submit"
                            class="btn-primary w-full flex items-center justify-center gap-2 text-base py-3.5">
                            Send Message
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </button>

                    </form>
                </div>
                {{-- End Form Card --}}

            </div>
            {{-- ── END RIGHT COLUMN ────────────────────────────── --}}

        </div>
    </div>
</section>
{{-- END HERO / CONTACT SECTION --}}


{{-- ============================================================
     FAQ SECTION
     ============================================================ --}}
<section class="bg-[#F5F8FC] py-20 border-t border-[#E2EAF4]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0D1B2A]">Common Questions</h2>
        </div>

        {{-- Accordion Items --}}
        <div class="space-y-3">

            @php
            $faqs = [
                [
                    'q' => 'Is there an obligation after the first conversation?',
                    'a' => 'Absolutely not. Our initial consultation is entirely exploratory. We\'ll understand your challenge and share our perspective, with no strings attached.',
                ],
                [
                    'q' => 'How quickly can Cenrion start on a project?',
                    'a' => 'Depending on scope and resource availability, we typically begin onboarding within 2–4 weeks of agreement.',
                ],
                [
                    'q' => 'Do you work with early-stage startups?',
                    'a' => 'We work with businesses at any stage. Whether you\'re pre-product or scaling, we tailor our engagement model to fit your situation.',
                ],
            ];
            @endphp

            @foreach($faqs as $i => $faq)
            <div
                x-data="{ open: false }"
                class="bg-white rounded-xl border border-[#E2EAF4] overflow-hidden shadow-sm
                       transition-shadow duration-200 hover:shadow-md">

                {{-- Accordion Header --}}
                <button
                    type="button"
                    @click="open = !open"
                    :aria-expanded="open"
                    class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left
                           focus:outline-none focus-visible:ring-2 focus-visible:ring-[#00AEEF] focus-visible:ring-inset">

                    <span class="text-base font-semibold text-[#0D1B2A] leading-snug">
                        {{ $faq['q'] }}
                    </span>

                    {{-- Chevron icon --}}
                    <span
                        :class="open ? 'rotate-180 text-[#00AEEF]' : 'text-[#94A3B8]'"
                        class="flex-shrink-0 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </span>
                </button>

                {{-- Accordion Body --}}
                <div
                    x-show="open"
                    x-collapse
                    x-cloak>
                    <div class="px-6 pb-5 pt-0">
                        <div class="border-t border-[#E2EAF4] pt-4">
                            <p class="text-[#5A7184] text-sm leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>
{{-- END FAQ SECTION --}}

@endsection
