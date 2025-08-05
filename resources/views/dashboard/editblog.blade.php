@extends('layouts.dashboard')
@section('title', 'Edit Blog')
@section('dash-body')

<div class="content-page">
    <x-notification/>
    <h1 class="text-3xl font-bold text-green-700 mb-6">Edit Blog</h1>

    @if (session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4 d-flex flex-column">
            <label class="block text-gray-700 font-medium">Title</label>
            <input type="text" name="title" value="{{ old('title', $blog->title) }}"
                   class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4 d-flex flex-column">
            <label class="block text-gray-700 font-medium">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $blog->slug) }}"
                   class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4 d-flex flex-column">
            <label class="block text-gray-700 font-medium">Description</label>
            <textarea name="description" rows="5"
                      class="w-full border rounded p-2" required>{{ old('description', $blog->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Current Image</label><br>
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" style="max-height: 200px" class=" rounded shadow-md mb-2">
            @else
                <p class="text-sm text-gray-500">No image uploaded</p>
            @endif
        </div>

        <div class="mb-4 d-flex flex-column">
            <label class="block text-gray-700 font-medium">Change Image</label>
            <input type="file" name="image" accept="image/*" class="w-full border rounded p-2 form-input">
        </div>

        <button type="submit"
                class="btn btn-success">
            Update Blog
        </button>
    </form>
</div>

@endsection
