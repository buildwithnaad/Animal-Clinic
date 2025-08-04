@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section
        class="w-full min-h-screen bg-[url('http://pet_clinic.test/cuidar_files/about.jpg')] bg-center bg-cover bg-no-repeat flex justify-center items-center">
        <div class="bg-black w-full min-h-screen absolute top-0 left-0 z-0" style="opacity: 0.5"></div>
        <div class="flex flex-col z-10 w-100 md:w-[50%]  gap-10 mt-[100px]">
            <h1 class="flex flex-col w-full text-white gap-3">
                <span class="font-sans text-center font-black text-6xl">Who We Are</span>
                <span class="font-sans text-center  font-bold text-xl">CUIDAR is a movement of compassion, care, and community. We are dedicated to the rescue, rehabilitation, and rehoming of animals who deserve a second chance.
                </span>
            </h1>

        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-screen-xl grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('cuidar_files/home_welcome.png') }}" alt="CUIDAR Mission" class="w-full">
            </div>
            <div>
                <h2 class="text-4xl font-extrabold text-green-700 mb-6 font-sans">Our Mission</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    We strive to protect and improve the lives of stray, abandoned, and abused animals by providing shelter, medical care, and adoption opportunities. Our mission is to create a society where every animal is treated with kindness and respect.
                </p>
                <h3 class="text-2xl font-bold text-green-600 mt-8">Our Vision</h3>
                <p class="text-lg text-gray-700 leading-relaxed">
                    To become a national model for animal welfare — where animals are no longer left behind, and every pet has a home.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h2 class="text-4xl font-extrabold text-center text-green-700 mb-12 font-sans">Our Story</h2>
            <div class="max-w-4xl mx-auto text-center text-lg text-gray-700 leading-loose mt-3">
                <p>
                    CUIDAR was founded by a group of animal lovers who witnessed the overwhelming number of strays and abused animals on the streets. In 2020, we started as a small rescue unit with limited resources but big hearts. Over the years, we grew into a full-service veterinary and adoption facility, supported by compassionate people, businesses, and agencies who share our mission.
                </p>
                <p class="mt-6">
                    Our shelter now covers over 3,000 square meters and is home to hundreds of animals at any given time. With 24/7 medical care, volunteer support, and professional staff, we ensure every rescued animal receives the care it deserves.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Impact -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-screen-xl text-center">
            <h2 class="text-4xl font-extrabold text-green-700 mb-10 font-sans">Our Impact</h2>
            <div class="flex justify-between flex-wrap items-center mt-[50px]">
                <div class="our-impact my-2">
                    <h3 class="text-3xl font-black text-lime-800">3,000+</h3>
                    <p class="text-lg text-gray-700 mt-2">Animals Rescued</p>
                </div>
                <div class="our-impact my-2">
                    <h3 class="text-3xl font-black text-lime-800">2,400+</h3>
                    <p class="text-lg text-gray-700 mt-2">Successful Adoptions</p>
                </div>
                <div class="our-impact my-2">
                    <h3 class="text-3xl font-black text-lime-800">15+</h3>
                    <p class="text-lg text-gray-700 mt-2">Veterinarians & Caregivers</p>
                </div>
                <div class="our-impact my-2">
                    <h3 class="text-3xl font-black text-lime-800">50+</h3>
                    <p class="text-lg text-gray-700 mt-2">Partners & Sponsors</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="bg-lime-800 text-white py-20">
        <div class="container mx-auto px-6 max-w-screen-md text-center">
            <h2 class="text-4xl font-extrabold mb-10 font-sans">Our Core Values</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 text-left mt-[50px]">
                <div class="p-5 bg-lime-900 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-3">Compassion</h3>
                    <p class="text-md">We treat every animal with love, dignity, and the care they deserve.</p>
                </div>
                <div class="p-5 bg-lime-900 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-3">Responsibility</h3>
                    <p class="text-md">We promote responsible ownership, sterilization, and long-term care.</p>
                </div>
                <div class="p-5 bg-lime-900 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-3">Transparency</h3>
                    <p class="text-md">All donations and processes are transparent and accountable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
       <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-10">
                    <!-- Row 1 -->
                    <div class="bg-white px-8 py-12 rounded shadow-md">
                        <div class="flex flex-col justify-center items-center gap-4 ">
                            <img src="{{ url('cuidar_files/equipe3.jpg') }}" class="rounded" />
                            <div
                                class="flex flex-col items-center relative justify-center after:content-[''] after:absolute after:-bottom-4 after:left-[50%] after:h-[1px] after:w-10 after:bg-gray-300 after:transform after:translate-x-[-50%]">
                                <h1 class="text-2xl text-green-500 font-sans font-bold">Dr. Lucas</h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">Veterinarian</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-8 py-12 rounded shadow-md">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="{{ url('cuidar_files/equipe2.jpg') }}" class="rounded" />
                            <div
                                class="flex flex-col items-center  relative justify-center after:content-[''] after:absolute after:-bottom-4 after:left-[50%] after:h-[1px] after:w-10 after:bg-gray-300 after:transform after:translate-x-[-50%]">
                                <h1 class="text-2xl text-green-500 font-sans font-bold">DR. Lorem</h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">Veterinary</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-8 py-12 rounded shadow-md">
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="{{ url('cuidar_files/equipe6.jpg') }}" class="rounded" />
                            <div
                                class="flex flex-col items-center  relative justify-center after:content-[''] after:absolute after:-bottom-4 after:left-[50%] after:h-[1px] after:w-10 after:bg-gray-300 after:transform after:translate-x-[-50%]">
                                <h1 class="text-2xl text-green-500 font-sans font-bold">DR. Ipsum</h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">Caregiver</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-green-700 text-white text-center">
        <div class="container mx-auto px-6 max-w-screen-md">
            <h2 class="text-4xl font-extrabold mb-6 font-sans">Join Our Mission</h2>
            <p class="text-lg mb-8">Whether you choose to adopt, volunteer, or donate, your support helps us continue saving lives every day.</p>
            <a href="{{ url('/contact') }}"
                class="mb-[100px] inline-block bg-white text-green-700 font-bold py-3 px-6 rounded-full hover:bg-opacity-90 transition">Contact Us</a>
        </div>
    </section>
@endsection
