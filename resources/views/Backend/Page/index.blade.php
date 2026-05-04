@extends('backend.layout.app')

@section('title', 'Page Management - TK&D')
@section('page_title', 'Page Management')

@php
    $isEdit = $formMode === 'edit' && $selectedPage;
    $hasErrors = $errors->any();
    $isCreateRoute = request()->routeIs('admin.page.create');
    $openModal = $isEdit || $hasErrors || $isCreateRoute;
    $formAction = $isEdit ? route('admin.page.update', $selectedPage) : route('admin.page.store');
    $titleValue = old('title', $selectedPage->title ?? '');
    $slugValue = old('slug', $selectedPage->slug ?? '');
    $contentValue = old('content', $selectedPage->content ?? '');
    $metaTitleValue = old('meta_title', $selectedPage->meta_title ?? '');
    $metaDescriptionValue = old('meta_description', $selectedPage->meta_description ?? '');
    $orderValue = old('order', $selectedPage->order ?? 0);
    $publishedValue = old('is_published', $selectedPage->is_published ?? false);
@endphp

@section('content')
<div class="mx-auto max-w-7xl space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 sm:text-3xl">Page Management</h1>
            <p class="text-sm text-gray-500 sm:text-base">Create, edit, and delete website pages from one place.</p>
        </div>

        <a href="{{ route('admin.page.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#003366] px-5 py-3 font-medium text-white shadow-sm transition hover:bg-[#002244]">
            <i class="fas fa-plus"></i>
            <span>Create New Page</span>
        </a>
    </div>

    @if (session('success'))
        <div class="rounded-2xl border border-green-200 bg-green-50 px-5 py-4 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-4 md:hidden">
        @forelse ($pages as $page)
            <div class="rounded-3xl border border-gray-100 bg-white p-5 shadow">
                <div class="flex items-start justify-between gap-3">
                    <div class="min-w-0">
                        <h3 class="truncate font-semibold text-gray-800">{{ $page->title }}</h3>
                        <p class="mt-1 break-all text-sm text-gray-500">/{{ $page->slug }}</p>
                    </div>

                    <span class="inline-flex shrink-0 items-center rounded-full px-3 py-1 text-xs font-medium {{ $page->is_published ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                        {{ $page->is_published ? 'Published' : 'Draft' }}
                    </span>
                </div>

                <div class="mt-4 space-y-2 text-sm text-gray-600">
                    <p>Order: {{ $page->order }}</p>
                    <p>Updated: {{ $page->updated_at?->diffForHumans() }}</p>
                    @if ($page->hero_image)
                        <a href="{{ asset('storage/' . $page->hero_image) }}" target="_blank" class="inline-flex text-blue-600 hover:underline">
                            View image
                        </a>
                    @else
                        <p class="text-gray-400">No image</p>
                    @endif
                </div>

                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="{{ route('admin.page.edit', $page) }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-amber-50 px-4 py-2 text-sm font-medium text-amber-700 transition hover:bg-amber-100">
                        <i class="fas fa-edit"></i>
                        <span>Edit</span>
                    </a>

                    <form action="{{ route('admin.page.destroy', $page) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Are you sure you want to delete this page?')"
                            class="inline-flex items-center gap-2 rounded-xl bg-red-50 px-4 py-2 text-sm font-medium text-red-700 transition hover:bg-red-100">
                            <i class="fas fa-trash"></i>
                            <span>Delete</span>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="rounded-3xl border border-gray-100 bg-white px-6 py-16 text-center text-gray-400 shadow">
                <i class="fas fa-file-alt mb-4 text-5xl"></i>
                <p class="text-lg">No pages found</p>
            </div>
        @endforelse
    </div>

    <div class="hidden overflow-hidden rounded-3xl border border-gray-100 bg-white shadow md:block">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="border-b bg-gray-50">
                        <th class="px-6 py-5 text-left font-semibold text-gray-600">Title</th>
                        <th class="px-6 py-5 text-left font-semibold text-gray-600">Slug</th>
                        <th class="px-6 py-5 text-left font-semibold text-gray-600">Hero Image</th>
                        <th class="px-6 py-5 text-center font-semibold text-gray-600">Status</th>
                        <th class="px-6 py-5 text-center font-semibold text-gray-600">Order</th>
                        <th class="px-6 py-5 text-center font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($pages as $page)
                        <tr class="transition hover:bg-gray-50">
                            <td class="px-6 py-5">
                                <div class="font-semibold text-gray-800">{{ $page->title }}</div>
                                <div class="mt-1 text-xs text-gray-400">Updated {{ $page->updated_at?->diffForHumans() }}</div>
                            </td>
                            <td class="px-6 py-5">
                                <code class="rounded-xl bg-gray-100 px-3 py-1.5 text-sm text-gray-600">/{{ $page->slug }}</code>
                            </td>
                            <td class="px-6 py-5">
                                @if ($page->hero_image)
                                    <a href="{{ asset('storage/' . $page->hero_image) }}" target="_blank" class="text-blue-600 hover:underline">
                                        View image
                                    </a>
                                @else
                                    <span class="text-sm text-gray-400">No image</span>
                                @endif
                            </td>
                            <td class="px-6 py-5 text-center">
                                <span class="inline-flex items-center rounded-full px-4 py-1.5 text-sm font-medium {{ $page->is_published ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                                    {{ $page->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-6 py-5 text-center font-medium text-gray-600">
                                {{ $page->order }}
                            </td>
                            <td class="px-6 py-5">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.page.edit', $page) }}"
                                        class="rounded-xl p-3 text-amber-600 transition hover:bg-amber-50"
                                        title="Edit page">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.page.destroy', $page) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this page?')"
                                            class="rounded-xl p-3 text-red-600 transition hover:bg-red-50"
                                            title="Delete page">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-20 text-center text-gray-400">
                                <i class="fas fa-file-alt mb-4 text-6xl"></i>
                                <p class="text-lg">No pages found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="rounded-3xl border border-gray-100 bg-white px-4 py-4 shadow sm:px-6">
        {{ $pages->links() }}
    </div>
</div>

<div id="pageModal"
    class="fixed inset-0 z-50 {{ $openModal ? 'flex' : 'hidden' }} items-center justify-center bg-black/50 p-3 sm:p-4">
    <div class="absolute inset-0" id="modalBackdrop"></div>

    <div class="relative z-10 max-h-[92vh] w-full max-w-4xl overflow-hidden rounded-3xl bg-white shadow-2xl">
        <div class="flex items-start justify-between gap-4 border-b border-gray-100 px-4 py-4 sm:px-6 sm:py-5">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">
                    {{ $isEdit ? 'Edit Page' : 'Add New Page' }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    {{ $isEdit ? 'Update the selected page details below.' : 'Fill in the form below to add a new page.' }}
                </p>
            </div>

            <a href="{{ route('admin.page.index') }}" id="closeModalButton"
                class="rounded-xl p-3 text-gray-500 transition hover:bg-gray-100 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </a>
        </div>

        <div class="max-h-[calc(92vh-88px)] overflow-y-auto">
            @if ($hasErrors)
                <div class="px-4 pt-4 sm:px-6 sm:pt-6">
                    <div class="rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-red-700">
                        <p class="font-semibold">Please fix the following errors:</p>
                        <ul class="mt-2 list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form action="{{ $formAction }}" method="POST" enctype="multipart/form-data" class="p-4 sm:p-6">
                @csrf
                @if ($isEdit)
                    @method('PUT')
                @endif

                <div class="grid gap-6 lg:grid-cols-2">
                    <div>
                        <label for="title" class="mb-2 block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" value="{{ $titleValue }}"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 outline-none transition focus:border-[#003366] focus:ring-0"
                            placeholder="Enter page title" required>
                    </div>

                    <div>
                        <label for="slug" class="mb-2 block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ $slugValue }}"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 outline-none transition focus:border-[#003366] focus:ring-0"
                            placeholder="about-us">
                    </div>

                    <div>
                        <label for="order" class="mb-2 block text-sm font-medium text-gray-700">Display Order</label>
                        <input type="number" id="order" name="order" value="{{ $orderValue }}"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 outline-none transition focus:border-[#003366] focus:ring-0"
                            placeholder="0">
                    </div>

                    <div>
                        <label for="hero_image" class="mb-2 block text-sm font-medium text-gray-700">Hero Image</label>
                        <input type="file" id="hero_image" name="hero_image"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 text-sm text-gray-600 outline-none transition file:mr-4 file:rounded-xl file:border-0 file:bg-gray-100 file:px-4 file:py-2 file:text-gray-700 hover:file:bg-gray-200 focus:border-[#003366] focus:ring-0">

                        @if ($isEdit && $selectedPage->hero_image)
                            <a href="{{ asset('storage/' . $selectedPage->hero_image) }}" target="_blank"
                                class="mt-2 inline-flex text-sm text-blue-600 hover:underline">
                                View current image
                            </a>
                        @endif
                    </div>

                    <div>
                        <label for="meta_title" class="mb-2 block text-sm font-medium text-gray-700">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ $metaTitleValue }}"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 outline-none transition focus:border-[#003366] focus:ring-0"
                            placeholder="SEO title">
                    </div>

                    <div>
                        <label for="meta_description" class="mb-2 block text-sm font-medium text-gray-700">Meta Description</label>
                        <input type="text" id="meta_description" name="meta_description" value="{{ $metaDescriptionValue }}"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 outline-none transition focus:border-[#003366] focus:ring-0"
                            placeholder="Short SEO description">
                    </div>

                    <div class="lg:col-span-2">
                        <label for="content" class="mb-2 block text-sm font-medium text-gray-700">Content</label>
                        <textarea id="content" name="content" rows="8"
                            class="w-full rounded-2xl border border-gray-200 px-4 py-3 outline-none transition focus:border-[#003366] focus:ring-0"
                            placeholder="Write page content here..." required>{{ $contentValue }}</textarea>
                    </div>

                    <div class="lg:col-span-2">
                        <label class="inline-flex items-center gap-3 rounded-2xl border border-gray-200 px-4 py-3 text-sm font-medium text-gray-700">
                            <input type="checkbox" name="is_published" value="1"
                                class="h-4 w-4 rounded border-gray-300 text-[#003366] focus:ring-[#003366]"
                                {{ $publishedValue ? 'checked' : '' }}>
                            <span>Publish this page</span>
                        </label>
                    </div>
                </div>

                <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#003366] px-6 py-3 font-medium text-white transition hover:bg-[#002244]">
                        <i class="fas {{ $isEdit ? 'fa-save' : 'fa-plus-circle' }}"></i>
                        <span>{{ $isEdit ? 'Update Page' : 'Save Page' }}</span>
                    </button>

                    <a href="{{ route('admin.page.index') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl border border-gray-200 bg-white px-6 py-3 font-medium text-gray-700 transition hover:bg-gray-50">
                        <i class="fas fa-times"></i>
                        <span>Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('pageModal');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const closeModalButton = document.getElementById('closeModalButton');

        function openModal() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }

        function closeModal(event) {
            if (event) {
                event.preventDefault();
            }

            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.classList.remove('overflow-hidden');

            window.location.href = "{{ route('admin.page.index') }}";
        }

        if (!modal.classList.contains('hidden')) {
            openModal();
        }

        if (modalBackdrop) {
            modalBackdrop.addEventListener('click', closeModal);
        }

        if (closeModalButton) {
            closeModalButton.addEventListener('click', closeModal);
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal(event);
            }
        });
    });
</script>
@endsection

