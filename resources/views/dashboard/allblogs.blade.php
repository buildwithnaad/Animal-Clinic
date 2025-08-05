@extends('layouts.dashboard')
@section('title', 'Manage Blogs')
@section('dash-body')
    <x-notification/>
    <div class="content-page">
        <h1 class="text-3xl font-bold mb-6 text-green-700">Manage Blogs</h1>

        <div class="overflow-x-auto">
            <a href="{{ route('add.blog') }}" class="btn btn-primary my-2">New Blog</a>
            <table style="width: 100%" class=" bg-white border border-gray-200 shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Title</th>
                        <th class="py-3 px-4 text-left">Slug</th>
                        <th class="py-3 px-4 text-left">Image</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $index => $blog)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $index + 1 }}</td>
                            <td class="py-3 px-4">{{ $blog->title }}</td>
                            <td class="py-3 px-4">{{ $blog->slug }}</td>
                            <td class="py-3 px-4">
                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Image"
                                        style="height: 50px; width: auto; object-fit: cover; border-radius: 5px;">
                                @else
                                    <span class="text-gray-400 text-sm">No image</span>
                                @endif
                            </td>
                            <td class="d-flex py-3 px-4 justify-content-start items-center">

                                <a href="{{ route('admin.blogs.edit', $blog->id) }}"" class="btn btn-warning mx-1"><i
                                        class="fas fa-pencil-alt"></i></a>

                                <form action="{{ route('admin.blogs.delete', $blog->id) }}"" method="POST"
                                    onsubmit="return confirm('Do you want to delete this client?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-6 text-center text-gray-500">No blogs available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-md-right justify-content-end d-none d-sm-block">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - Developed By <strong><a href="" target="_blank">Naad
                                Ali</a></strong>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
