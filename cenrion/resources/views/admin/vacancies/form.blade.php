@extends('admin.layout')

@section('title', $isEdit ? 'Edit Vacancy' : 'New Vacancy')
@section('page_title', $isEdit ? 'Edit Vacancy' : 'Create New Open Vacancy')
@section('page_subtitle', $isEdit ? 'Update role requirements, tech stack and status' : 'Add an engineering position displayed on the careers page')

@section('content')
<div class="max-w-4xl mx-auto">

    <div class="mb-4">
        <a href="{{ route('admin.vacancies.index') }}" class="text-xs font-bold text-gray-500 hover:text-cyan-600 inline-flex items-center gap-1.5 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Vacancies List
        </a>
    </div>

    <div class="bg-white rounded-3xl border border-[#E2EAF4] shadow-sm p-6 sm:p-8">
        <form action="{{ $isEdit ? route('admin.vacancies.update', $vacancy['id']) : route('admin.vacancies.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Role Title --}}
            <div>
                <label for="title" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                    Position Title <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    value="{{ old('title', $vacancy['title']) }}"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-sm font-semibold text-[#062538] transition-all"
                    placeholder="e.g. Senior Full-Stack Engineer"
                >
            </div>

            {{-- Department & Type & Order --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                {{-- Department --}}
                <div>
                    <label for="department" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Department / Track <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="department"
                        id="department"
                        value="{{ old('department', $vacancy['department']) }}"
                        required
                        list="department-suggestions"
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="e.g. Platform Engineering"
                    >
                    <datalist id="department-suggestions">
                        <option value="Platform Engineering">
                        <option value="AI & Emerging Tech">
                        <option value="Quality Engineering">
                        <option value="Cloud Ops & Reliability">
                        <option value="Product Architecture">
                    </datalist>
                </div>

                {{-- Type --}}
                <div>
                    <label for="type" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Work Type / Modality
                    </label>
                    <input
                        type="text"
                        name="type"
                        id="type"
                        value="{{ old('type', $vacancy['type']) }}"
                        required
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="Full-time • Remote"
                    >
                </div>

                {{-- Display Order --}}
                <div>
                    <label for="order" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Display Order #
                    </label>
                    <input
                        type="number"
                        name="order"
                        id="order"
                        value="{{ old('order', $vacancy['order']) }}"
                        min="1"
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs font-mono text-gray-700 transition-all"
                    >
                </div>
            </div>

            {{-- Tech Stack Chips (Comma Separated) --}}
            <div>
                <label for="tech_stack" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                    Tech Stack Tags <span class="text-gray-400 font-normal lowercase">(comma-separated)</span>
                </label>
                <input
                    type="text"
                    name="tech_stack"
                    id="tech_stack"
                    value="{{ old('tech_stack', is_array($vacancy['tech_stack']) ? implode(', ', $vacancy['tech_stack']) : $vacancy['tech_stack']) }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                    placeholder="e.g. React 19, Next.js, Node.js, TypeScript, PostgreSQL, AWS Serverless"
                >
            </div>

            {{-- Short Description --}}
            <div>
                <label for="description" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                    Role Description &amp; Scope <span class="text-red-500">*</span>
                </label>
                <textarea
                    name="description"
                    id="description"
                    rows="4"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs leading-relaxed text-[#062538] transition-all"
                    placeholder="Describe the ownership area, engineering challenge and key responsibilities..."
                >{{ old('description', $vacancy['description']) }}</textarea>
            </div>

            {{-- Apply URL & Status --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                {{-- Apply URL / Mailto --}}
                <div>
                    <label for="apply_url" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Apply Destination <span class="text-gray-400 font-normal lowercase">(mailto: or external URL)</span>
                    </label>
                    <input
                        type="text"
                        name="apply_url"
                        id="apply_url"
                        value="{{ old('apply_url', $vacancy['apply_url']) }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="mailto:hello@cenrion.com?subject=Application for..."
                    >
                </div>

                {{-- Status --}}
                <div>
                    <label for="status" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Position Status
                    </label>
                    <select
                        name="status"
                        id="status"
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs font-bold text-gray-700 transition-all"
                    >
                        <option value="active" {{ old('status', $vacancy['status']) === 'active' ? 'selected' : '' }}>Active (Displayed on Careers)</option>
                        <option value="inactive" {{ old('status', $vacancy['status']) === 'inactive' ? 'selected' : '' }}>Inactive (Hidden)</option>
                    </select>
                </div>
            </div>

            {{-- Submit Row --}}
            <div class="pt-4 border-t border-[#E2EAF4] flex items-center justify-between">
                <a href="{{ route('admin.vacancies.index') }}" class="px-5 py-2.5 rounded-xl text-xs font-bold text-gray-600 hover:bg-gray-100 transition-colors">
                    Cancel
                </a>
                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-bold text-xs shadow-md shadow-cyan-500/25 transition-all flex items-center gap-2 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ $isEdit ? 'Save Changes' : 'Create Vacancy' }}</span>
                </button>
            </div>

        </form>
    </div>

</div>
@endsection
