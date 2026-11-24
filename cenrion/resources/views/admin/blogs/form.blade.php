@extends('admin.layout')

@section('title', $isEdit ? 'Edit Blog Article' : 'New Blog Article')
@section('page_title', $isEdit ? 'Edit Blog Article' : 'Create New Blog Article')
@section('page_subtitle', $isEdit ? 'Update details, content, or publication status' : 'Publish a new research perspective or engineering article')

@section('content')
<div class="max-w-4xl mx-auto">

    <div class="mb-4">
        <a href="{{ route('admin.blogs.index') }}" class="text-xs font-bold text-gray-500 hover:text-cyan-600 inline-flex items-center gap-1.5 transition-colors">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Back to Articles List
        </a>
    </div>

    <div class="bg-white rounded-3xl border border-[#E2EAF4] shadow-sm p-6 sm:p-8">
        <form action="{{ $isEdit ? route('admin.blogs.update', $blog['id']) : route('admin.blogs.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Title --}}
            <div>
                <label for="title" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                    Article Title <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    value="{{ old('title', $blog['title']) }}"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-sm font-semibold text-[#062538] transition-all"
                    placeholder="e.g. Where Generative AI Actually Creates Business Value"
                >
            </div>

            {{-- Slug & Category Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                {{-- Slug --}}
                <div>
                    <label for="slug" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        URL Slug <span class="text-gray-400 font-normal lowercase">(leave empty to auto-generate)</span>
                    </label>
                    <input
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{ old('slug', $blog['slug']) }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs font-mono text-gray-700 transition-all"
                        placeholder="e.g. where-generative-ai-creates-value"
                    >
                </div>

                {{-- Category --}}
                <div>
                    <label for="category" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Category <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="category"
                        id="category"
                        value="{{ old('category', $blog['category']) }}"
                        required
                        list="category-suggestions"
                        class="w-full px-4 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="e.g. AI & Applied Tech"
                    >
                    <datalist id="category-suggestions">
                        <option value="AI & Applied Tech">
                        <option value="Engineering Strategy">
                        <option value="Cloud & DevOps">
                        <option value="Software Architecture">
                    </datalist>
                </div>
            </div>

            {{-- Metadata Row: Reading Time, Author, Date, Status --}}
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                {{-- Reading Time --}}
                <div>
                    <label for="reading_time" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Reading Time (min)
                    </label>
                    <input
                        type="text"
                        name="reading_time"
                        id="reading_time"
                        value="{{ old('reading_time', $blog['reading_time']) }}"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="8"
                    >
                </div>

                {{-- Author --}}
                <div>
                    <label for="author" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Author
                    </label>
                    <input
                        type="text"
                        name="author"
                        id="author"
                        value="{{ old('author', $blog['author']) }}"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="Cenrion Engineering"
                    >
                </div>

                {{-- Date --}}
                <div>
                    <label for="date" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Display Date
                    </label>
                    <input
                        type="text"
                        name="date"
                        id="date"
                        value="{{ old('date', $blog['date']) }}"
                        required
                        class="w-full px-3.5 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs text-gray-700 transition-all"
                        placeholder="e.g. October 2026"
                    >
                </div>

                {{-- Status --}}
                <div>
                    <label for="status" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                        Status
                    </label>
                    <select
                        name="status"
                        id="status"
                        class="w-full px-3.5 py-2.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs font-bold text-gray-700 transition-all"
                    >
                        <option value="published" {{ old('status', $blog['status']) === 'published' ? 'selected' : '' }}>Published (Live)</option>
                        <option value="draft" {{ old('status', $blog['status']) === 'draft' ? 'selected' : '' }}>Draft (Hidden)</option>
                    </select>
                </div>
            </div>

            {{-- Excerpt --}}
            <div>
                <label for="excerpt" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                    Excerpt / Summary <span class="text-red-500">*</span>
                    <span class="text-gray-400 font-normal lowercase">(displayed on cards and preview grids)</span>
                </label>
                <textarea
                    name="excerpt"
                    id="excerpt"
                    rows="3"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs leading-relaxed text-[#062538] transition-all"
                    placeholder="Brief high-level summary that catches the reader's attention..."
                >{{ old('excerpt', $blog['excerpt']) }}</textarea>
            </div>

            {{-- Full Content --}}
            <div>
                <label for="content" class="block text-xs font-bold uppercase tracking-wider text-[#062538] mb-2">
                    Full Article Content <span class="text-red-500">*</span>
                    <span class="text-gray-400 font-normal lowercase">(separate paragraphs with an empty line)</span>
                </label>
                <textarea
                    name="content"
                    id="content"
                    rows="12"
                    required
                    class="w-full px-4 py-3.5 rounded-xl border border-[#E2EAF4] bg-[#F8FAFC] focus:bg-white focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 text-xs leading-relaxed text-[#062538] font-sans transition-all"
                    placeholder="Write the full in-depth engineering article here..."
                >{{ old('content', is_array($blog['content']) ? implode("\n\n", $blog['content']) : $blog['content']) }}</textarea>
            </div>

            {{-- Submit Row --}}
            <div class="pt-4 border-t border-[#E2EAF4] flex items-center justify-between">
                <a href="{{ route('admin.blogs.index') }}" class="px-5 py-2.5 rounded-xl text-xs font-bold text-gray-600 hover:bg-gray-100 transition-colors">
                    Cancel
                </a>
                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-bold text-xs shadow-md shadow-cyan-500/25 transition-all flex items-center gap-2 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ $isEdit ? 'Save Changes' : 'Publish Article' }}</span>
                </button>
            </div>

        </form>
    </div>

</div>
@endsection
