@extends('layouts.dashboard')
@section('title', 'Clients')
@section('dash-body')
<x-notification/>

    <div class="content-page">
        <div class="content">
            <div class="card-header bg-success text-white mt-3">
                <h4 class="mb-0">Add New Blog</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" required>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Featured Image</label>
                        <input type="file" class="form-control " style="height: 100%" id="image" name="image"
                            accept="image/*">
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Blog Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success">Publish Blog</button>
                </form>
            </div>
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
