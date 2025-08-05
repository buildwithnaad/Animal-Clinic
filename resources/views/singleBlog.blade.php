@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section class="w-full min-h-[400px] bg-center bg-cover bg-no-repeat flex justify-center items-center relative"
        style="background-image: url('{{ asset('storage/' . $blog->image) }}')">
        <div class="absolute inset-0 bg-black opacity-60 z-0"></div>
        <div class="z-10 text-center px-5">
            <h1 class="text-white text-4xl md:text-6xl font-bold">{{ $blog->title }}</h1>
            <p class="text-white mt-4 text-md md:text-lg">{{ \Carbon\Carbon::parse($blog->post_date)->format('F d, Y') }}</p>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 bg-white rounded-xl shadow-xl">
            <div class="prose max-w-none py-10">
                <h2 class="text-3xl font-bold mb-4">{{ $blog->title }}</h2>

                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="rounded-xl w-full mb-6">
                @endif

                <p class="text-gray-700 text-lg leading-relaxed">{{ $blog->description }}</p>

                <div class="mt-8 flex items-center justify-between text-sm text-gray-500">
                    <span>👤 Author: <strong>Admin</strong></span>
                    <span>👁️ Views: {{ $blog->views }}</span>
                </div>
            </div>
        </div>
    </section>
@endsection
