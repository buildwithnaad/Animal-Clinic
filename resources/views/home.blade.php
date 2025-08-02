@extends('layouts.master')

<style>
    .hero-section {
        background-image: url('{{ url('cuidar_files/banner1.png') }}');
    }
</style>

@section('content')
    <section class="min-w-screen min-h-screen z-10 hero-section" style="padding: 220px 20px 20px 50px ">

        <div class="flex flex-col z-10  gap-10" >
            <h1 class="flex flex-col max-w-md text-white gap-3">
                <span class="font-sans font-bold text-xl">Veterinary Medical Care</span>
                <span class="font-sans font-black text-6xl">Rescue, Treatment and Promotion of Responsible Adoption
                </span>
            </h1>
            <div class="flex text-white items-center gap-10 font-sans font-bold">
                <a href="#"
                    class="py-6 px-8 bg-green-700 uppercase flex flex-col items-center justify-center transition-all duration-250 hover:opacity-75 hover:transition-all hover:duration-250">Speak with us</a>
                <span class="text-lg">(24)99882-4755</span>
            </div>

        </div>
    </section>

    <main class="z-20">
        <section class="pt-[150px] pb-[250px]">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="col-span-1">
                        <img src="{{ url('cuidar_files/home_welcome.png') }}" alt="">
                    </div>
                    <div class="col-span-1 w-100">
                        <h1 class="text-4xl lg:text-5xl font-extrabold mb-4 flex flex-col font-sans gap-2">
                            <small class="text-sm text-black">Quality & Experience</small>
                            <span class="text-green-700">
                                Quality & Experience
                                Welcome to<span class="text-green-500">CUIDAR</span></span>
                        </h1>

                        <p class="mb-6 font-sans w-10/12 text-lg font-medium">
                            CUIDAR was founded with the goal of becoming a sustainable and solid company that promotes
                            the care of stray animals with low expectations. We understand that this path, with
                            abandoned and/or unattended animals, can exacerbate public health problems and cause various
                            types of accidents. That's why we decided to found CUIDAR and provide individuals,
                            businesses, and government agencies with someone to rely on when needed.
                        </p>

                        <ul class="list-inside mb-6 text-lg font-semibold py-5">
                            <li class="my-3 flex items-center"><span class="material-symbols-outlined mr-3">pets</span>We
                                have an area of over 3
                                thousand square meters
                                metros quadrados</li>
                            <li class="my-3 flex items-center"><span
                                    class="material-symbols-outlined mr-3">pets</span>Physical structure in constant
                                evolution</li>
                            <li class="my-3 flex items-center"><span
                                    class="material-symbols-outlined mr-3">pets</span>Professionals dedicated to care 7
                                days a week
                            </li>
                        </ul>

                        <a href="#"
                            class="bg-lime-800 text-white py-4 px-8 rounded-full inline-block transition duration-300 hover:brightness-110">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-[100px] bg-lime-800">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="mx-0 rounded ">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 relative -top-[150px]">
                        <div class="col-span-1 lg:col-span-1 ">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/cuidamos.png') }}" alt=""
                                    class="flex w-full rounded-l">
                                <div
                                    class="text-white before:rounded-l gradient-bg-green font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <span class="material-symbols-outlined mr-3">pets</span>
                                    <h3 class="text-4xl font-extrabold font-sans my-5">We take care</h3>
                                    <div>Popular clinic for large and small
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 lg:col-span-1">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/abrigamos.png') }}" alt="" class="flex w-full">
                                <div
                                    class="text-white gradient-bg-orange font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <span class="material-symbols-outlined mr-3">pets</span>
                                    <h3 class="text-4xl font-extrabold font-sans my-5">We shelter
                                    </h3>
                                    <div>Private shelter with veterinary assistance
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 lg:col-span-1">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/adote.png') }}" alt="" class="flex w-full rounded-r">
                                <div
                                    class="text-white before:rounded-r gradient-bg-blue font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <span class="material-symbols-outlined mr-3">pets</span>
                                    <h3 class="text-4xl font-extrabold font-sans my-5">Don't buy! Adopt!
                                    </h3>
                                    <div>When you embrace the feeling is stronger
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center -mt-20 mx-20">
                    <div class="mx-auto text-center text-white text-xl">
                        <p>Cuidar does not accept animals free of charge. All animals we rescue are rescued through
                            contacts established with companies and government agencies that use our services to
                            minimize abandonment and abuse.</p>
                        <div class="mt-20">
                            <a href="#"
                                class="rounded-full border-white border-2 border-solid py-3 px-6 hover:opacity-75">GET
                                IN TOUCH</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-[150px]">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl flex flex-col items-center">
                <div class="">
                    <h1
                        class="text-4xl lg:text-5xl font-extrabold mb-4 flex flex-col font-sans gap-2 items-center justify-center">
                        <small class="text-sm text-black">What Can We Do For You?
                        </small>
                        <span class="text-green-700">Veterinary <span class="text-green-500">Care</span></span>
                    </h1>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mt-10">
                    <!-- Row 1 -->
                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-veterinario.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">Veterinary medical care

                                </h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">We have trained professionals
                                    working full-time. All services are provided with the utmost professionalism and
                                    affordable prices.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-vacinacao.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">Vaccination</h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">Our professionals can
                                    vaccinate your pet here at the clinic or at home, depending on your preference.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-castracao.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">Castration</h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">Realizamos We perform dog and
                                    cat neutering at affordable prices so that people with lower purchasing power can
                                    also take good care of their pets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white px-16 py-12 rounded shadow-md">
                        <div class="flex items-center gap-4">
                            <img src="{{ url('cuidar_files/serv-levatras.png') }}" />
                            <div>
                                <h1 class="text-2xl text-green-500 font-sans font-bold">Delivery</h1>
                                <p class="text-md font-sans font-semibold text-gray-600 ">Possuímos We have our own
                                    vehicle to pick up your pet for veterinary care at our clinic, and we offer in-home
                                    consultations and vaccinations. Contact our team.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-20">
                    <a href="#"
                        class="rounded-full text-green-700 font-semibold border-green-700 border-2 border-solid py-4 px-8 hover:bg-green-700 hover:text-white transition duration-200">SEE
                        ALL SERVICES</a>
                </div>
            </div>
        </section>
        <section class="py-[250px]">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl flex flex-col items-center">
                <div class="">
                    <h1
                        class="text-4xl lg:text-5xl font-extrabold mb-4 flex flex-col font-sans gap-2 items-center justify-center">
                        <small class="text-sm text-black">Team & Partners</small>
                        <span class="text-green-700">These make the <span class="text-green-500">difference</span></span>
                    </h1>
                </div>
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
            </div>
        </section>

    </main>
@endsection
