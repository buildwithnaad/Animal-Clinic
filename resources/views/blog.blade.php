@extends('layouts.master')
@section('heading')
    Blog | Pet clinic
@endsection
@section('content')
    <!-- Hero Banner -->
    <section
        class="w-full min-h-screen bg-center bg-cover bg-no-repeat flex justify-center items-center" style="background-image: url({{asset('cuidar_files/blog.jpg')}})">
        <div class="bg-black w-full min-h-screen absolute top-0 left-0 z-0" style="opacity: 0.5"></div>
        <div class="flex flex-col z-10 w-100 md:w-[50%]  gap-10 mt-[100px]">
            <h1 class="flex flex-col w-full text-white gap-3">
                <span class="font-sans text-center font-black text-6xl">From the Paw Print</span>
                <span class="font-sans text-center  font-bold text-xl">Read heartwarming stories, updates, and insights from
                    our rescue journey.
                </span>
            </h1>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-20 bg-gray-50 pb-[200px]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-green-800 mb-14 font-sens">Latest Blog Posts</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-5">
                <!-- Repeat This Card -->
                <div class="group bg-white rounded-xl overflow-hidden transition-all duration-500 hover:scale-[1.03] hover:shadow-2xl"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('cuidar_files/blog1.jpg') }}" alt="Blog Image"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <div class="p-6">
                        <span class="text-sm uppercase tracking-widest text-green-600 font-semibold">Rescue Story</span>
                        <h3
                            class="text-2xl font-bold text-gray-800 mt-2 mb-3 transition-colors duration-300 group-hover:text-green-700 blog-title">
                            Bella's Journey from Stray to Safe
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">Discover how Bella, a scared and injured pup, found her
                            forever home through love and care.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>By Admin</span>
                            <span>Aug 3, 2025</span>
                        </div>
                        <a href="/blog/bellas-journey"
                            class="inline-block mt-5 text-green-700 font-semibold hover:underline">Read More →</a>
                    </div>
                </div>
                <!-- Repeat End -->

                <!-- Card 2 -->
                <div class="group bg-white rounded-xl overflow-hidden transition-all duration-500 hover:scale-[1.03] hover:shadow-2xl"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('cuidar_files/blog2.jpg') }}" alt="Blog Image"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <div class="p-6">
                        <span class="text-sm uppercase tracking-widest text-green-600 font-semibold">Tips</span>
                        <h3
                            class="text-2xl font-bold text-gray-800 mt-2 mb-3 transition-colors duration-300 group-hover:text-green-700 blog-title">
                            5 Ways to Help Local Shelters
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">You don’t need to adopt to make a difference. Learn small ways
                            to support rescues in your area.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>By Team</span>
                            <span>Aug 1, 2025</span>
                        </div>
                        <a href="/blog/help-shelters"
                            class="inline-block mt-5 text-green-700 font-semibold hover:underline">Read More →</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group bg-white rounded-xl overflow-hidden transition-all duration-500 hover:scale-[1.03] hover:shadow-2xl"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('cuidar_files/blog3.jpg') }}" alt="Blog Image"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <div class="p-6">
                        <span class="text-sm uppercase tracking-widest text-green-600 font-semibold">Health</span>
                        <h3
                            class="text-2xl font-bold text-gray-800 mt-2 mb-3 transition-colors duration-300 group-hover:text-green-700 blog-title">
                            Newborn Puppy Care 101
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">Our vets share essential care tips to give fragile newborns a
                            healthy start in life.</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>By Dr. Sara</span>
                            <span>Jul 25, 2025</span>
                        </div>
                        <a href="/blog/puppy-care"
                            class="inline-block mt-5 text-green-700 font-semibold hover:underline">Read More →</a>
                    </div>
                </div>

                {{-- loop for controller --}}


                @if ($blogs->count())
                    @foreach ($blogs as $blog)
                        <div class="group bg-white rounded-xl overflow-hidden transition-all duration-500 hover:scale-[1.03] hover:shadow-2xl"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                            <div class="overflow-hidden">

                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}"
                                        class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500 ease-in-out"
                                        alt="Blog Image">
                                @endif
                            </div>
                            <div class="p-6">
                                <span
                                    class="text-sm uppercase tracking-widest text-green-600 font-semibold">{{ $blog->slug }}</span>
                                <h3
                                    class="text-2xl font-bold text-gray-800 mt-2 mb-3 transition-colors duration-300 group-hover:text-green-700 blog-title">
                                    {{ $blog->title }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4">{{ $blog->description }}</p>
                                <div class="flex items-center justify-between text-sm text-gray-500">
                                    <span>By Dr. Sara</span>
                                    <span> {{ \Carbon\Carbon::parse($blog->post_date)->format('M d, Y') }}</span>
                                </div>
                                <a href="{{ route('blog.show', $blog->slug) }}"
                                    class="inline-block mt-5 text-green-700 font-semibold hover:underline">Read More →</a>
                            </div>
                        </div>
                    @endforeach
                    
                @endif


            </div>
        </div>
    </section>

@endsection
