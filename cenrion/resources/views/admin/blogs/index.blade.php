@extends('admin.layout')

@section('title', 'Manage Blog Articles')
@section('page_title', 'Blogs & Insights Control')
@section('page_subtitle', 'Create, update, and manage research and engineering articles published on the website')

@section('content')
<div class="space-y-6" x-data="{
    deleteModalOpen: false,
    deleteAction: '',
    deleteTitle: '',
    confirmDelete(action, title) {
        this.deleteAction = action;
        this.deleteTitle = title;
        this.deleteModalOpen = true;
    }
}">

    {{-- Top Action Bar --}}
    <div class="bg-white rounded-2xl border border-[#E2EAF4] p-5 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
        <div>
            <div class="text-sm font-extrabold text-[#062538] font-heading">
                All Blog Articles <span class="text-xs font-semibold text-gray-500">({{ count($blogs) }})</span>
            </div>
            <p class="text-xs text-[#5A7184]">Articles are rendered under <a href="{{ route('insights') }}" target="_blank" class="text-cyan-600 underline">/insights</a> and individually under <span class="font-mono">/insights/{slug}</span></p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="w-full sm:w-auto px-4 py-2.5 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-bold text-xs flex items-center justify-center gap-2 transition-all shadow-md shadow-cyan-500/25">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add New Article
        </a>
    </div>

    {{-- Blogs Table --}}
    <div class="bg-white rounded-2xl border border-[#E2EAF4] shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-[#F8FAFC] border-b border-[#E2EAF4] text-[11px] font-extrabold uppercase tracking-wider text-[#5A7184]">
                        <th class="py-4 px-6">Article</th>
                        <th class="py-4 px-4">Category</th>
                        <th class="py-4 px-4">Author &amp; Date</th>
                        <th class="py-4 px-4">Status</th>
                        <th class="py-4 px-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#F1F5F9] text-xs">
                    @forelse($blogs as $blog)
                        <tr class="hover:bg-gray-50/80 transition-colors">
                            {{-- Title & Slug --}}
                            <td class="py-4 px-6">
                                <div class="font-bold text-[#062538] text-sm hover:text-cyan-600 transition-colors">
                                    <a href="{{ route('admin.blogs.edit', $blog['id']) }}">{{ $blog['title'] }}</a>
                                </div>
                                <div class="text-[11px] text-gray-400 font-mono mt-0.5">
                                    /insights/{{ $blog['slug'] }} &bull; {{ $blog['reading_time'] }} min read
                                </div>
                            </td>

                            {{-- Category --}}
                            <td class="py-4 px-4">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-cyan-50 text-cyan-800 border border-cyan-200">
                                    {{ $blog['category'] ?? 'General' }}
                                </span>
                            </td>

                            {{-- Author & Date --}}
                            <td class="py-4 px-4">
                                <div class="font-semibold text-gray-700">{{ $blog['author'] ?? 'Cenrion Engineering' }}</div>
                                <div class="text-[11px] text-gray-400">{{ $blog['date'] ?? '' }}</div>
                            </td>

                            {{-- Status --}}
                            <td class="py-4 px-4">
                                @if(($blog['status'] ?? 'published') === 'published')
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                        Draft
                                    </span>
                                @endif
                            </td>

                            {{-- Actions --}}
                            <td class="py-4 px-6 text-right">
                                <div class="inline-flex items-center gap-2">
                                    <a href="{{ route('insights.show', $blog['slug']) }}" target="_blank" class="p-2 text-gray-400 hover:text-cyan-600 hover:bg-cyan-50 rounded-lg transition-colors" title="Preview on Website">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                    <a href="{{ route('admin.blogs.edit', $blog['id']) }}" class="p-2 text-gray-400 hover:text-[#062538] hover:bg-gray-100 rounded-lg transition-colors" title="Edit Article">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    
                                    {{-- Custom Modal Trigger --}}
                                    <button type="button"
                                            @click="confirmDelete('{{ route('admin.blogs.destroy', $blog['id']) }}', '{{ addslashes($blog['title']) }}')"
                                            class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors cursor-pointer"
                                            title="Delete Article">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-gray-500">
                                <div class="max-w-sm mx-auto">
                                    <p class="text-sm font-bold text-[#062538] mb-1">No blog articles found</p>
                                    <p class="text-xs text-[#5A7184] mb-4">Get started by creating your first technical insight article.</p>
                                    <a href="{{ route('admin.blogs.create') }}" class="px-4 py-2 rounded-xl bg-cyan-500 text-white font-bold text-xs inline-flex items-center gap-2">
                                        Add Article
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Custom Confirmation Modal --}}
    <div x-show="deleteModalOpen"
         x-cloak
         class="fixed inset-0 z-50 overflow-y-auto"
         aria-labelledby="modal-title" role="dialog" aria-modal="true"
         @keydown.escape.window="deleteModalOpen = false">
        
        {{-- Backdrop --}}
        <div x-show="deleteModalOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-[#062538]/70 backdrop-blur-sm transition-opacity"
             @click="deleteModalOpen = false"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div x-show="deleteModalOpen"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 @click.stop
                 class="relative transform overflow-hidden rounded-3xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-md border border-[#E2EAF4]">
                
                <div class="p-6 sm:p-7">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-red-50 border border-red-100 flex items-center justify-center text-red-600 shrink-0 shadow-sm">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-extrabold text-[#062538] font-heading" id="modal-title">
                                Delete Article
                            </h3>
                            <p class="text-xs text-gray-500 mt-0.5">
                                This action is permanent and cannot be undone.
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Are you sure you want to permanently delete <span class="font-bold text-[#062538]" x-text="deleteTitle"></span>?
                        </p>
                    </div>
                </div>

                <div class="bg-[#F8FAFC] px-6 py-4 border-t border-[#E2EAF4] flex flex-col-reverse sm:flex-row sm:justify-end gap-2.5">
                    <button type="button"
                            @click="deleteModalOpen = false"
                            class="w-full sm:w-auto px-4 py-2.5 rounded-xl border border-gray-200 bg-white text-xs font-bold text-gray-700 hover:bg-gray-50 transition-colors shadow-sm cursor-pointer">
                        Cancel
                    </button>
                    <form :action="deleteAction" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                                class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-xs font-bold text-white shadow-md shadow-red-600/25 transition-all flex items-center justify-center gap-1.5 cursor-pointer">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <span>Yes, Delete Article</span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
