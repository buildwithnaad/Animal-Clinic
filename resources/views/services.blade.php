@extends('layouts.master')

@section('heading')
    Services | Pet clinic
@endsection

@section('content')
    <!-- Hero Section -->
    <section
        class="w-full min-h-screen bg-center bg-cover bg-no-repeat flex justify-center items-center" style="background-image: url({{asset('cuidar_files/services.jpg')}})">
        <div class="bg-black w-full min-h-screen absolute top-0 left-0 z-0" style="opacity: 0.5"></div>
        <div class="flex flex-col z-10 w-100 md:w-[50%]  gap-10 mt-[100px]">
            <h1 class="flex flex-col w-full text-white gap-3">
                <span class="font-sans text-center font-black text-6xl">Our Services</span>
                <span class="font-sans text-center  font-bold text-xl">At CUIDAR, we offer compassionate and comprehensive
                    services to ensure the well-being of every animal we care for.
                </span>
            </h1>
        </div>
    </section>

     



    <!-- Services Grid -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h2 class="text-4xl font-extrabold text-center text-green-700 mb-12 font-sans">What We Offer</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @php
                    $services = [
                        [
                            'title' => 'Rescue & Rehabilitation',
                            'desc' =>
                                'We rescue injured, abused, and abandoned animals, providing them with shelter, food, and medical treatment until they’re ready for adoption.',
                            'icon' => '🐾',
                        ],
                        [
                            'title' => '24/7 Veterinary Care',
                            'desc' =>
                                'Our expert veterinarians are available round-the-clock for emergency treatments, vaccinations, and regular checkups.',
                            'icon' => '🩺',
                        ],
                        [
                            'title' => 'Adoption Services',
                            'desc' =>
                                'We help our furry friends find forever homes through a careful screening and matchmaking process for responsible pet ownership.',
                            'icon' => '🏠',
                        ],
                        [
                            'title' => 'Sterilization & Vaccination',
                            'desc' =>
                                'We offer sterilization and routine vaccination drives to control stray animal populations and promote long-term health.',
                            'icon' => '💉',
                        ],
                        [
                            'title' => 'Animal Transport',
                            'desc' =>
                                'We provide safe transportation of rescued or adopted animals, ensuring they travel with comfort and care.',
                            'icon' => '🚐',
                        ],
                        [
                            'title' => 'Education & Awareness',
                            'desc' =>
                                'We educate communities on animal rights, responsible pet care, and the importance of sterilization and rescue.',
                            'icon' => '📚',
                        ],
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="bg-gray-50 p-8 rounded-xl shadow-md text-center hover:shadow-xl transition duration-300">
                        <div class="text-5xl mb-4">{{ $service['icon'] }}</div>
                        <h3 class="text-2xl font-bold text-green-700 mb-2">{{ $service['title'] }}</h3>
                        <p class="text-gray-700 text-md leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
 <section class="pb-[100px] bg-lime-800 mt-[200px]">
            <div class="container  mx-auto px-4 sm:px-6 lg:px-8 max-w-screen-xl">
                <div class="mx-0 rounded ">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 relative -top-[150px]">
                        <div class="col-span-1 lg:col-span-1 ">
                            <div class="relative py-4 overflow-hidden">
                                <img src="{{ url('cuidar_files/cuidamos.png') }}" alt=""
                                    class="flex w-full rounded-l">
                                <div
                                    class="text-white before:rounded-l gradient-bg-green font-bold flex flex-col items-center justify-end absolute text-center top-0 left-0 bottom-8 w-full h-full z-[1] text-white pb-6 before:absolute before:content-[''] before:left-0 before:top-0 before:h-full before:w-full before:-z-[1] before:w-full before:h-full before:object-contain">
                                    <i class="fa-solid fa-paw mt-1"></i>
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
                                    <i class="fa-solid fa-paw mt-1"></i>
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
                                    <i class="fa-solid fa-paw mt-1"></i>
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
    <!-- Why Choose Us Section -->
    <section class="py-[100px]">
        <div class="container mx-auto px-6 max-w-screen-md text-center">
            <h2 class="text-4xl font-extrabold font-sans">Why Choose CUIDAR?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-left my-10">
                <div>
                    <h3 class="text-xl font-semibold mb-2">✅ Compassionate Team</h3>
                    <p class="text-md mb-4">Our staff and volunteers are trained professionals who love what they do.</p>

                    <h3 class="text-xl font-semibold mb-2">✅ Modern Facilities</h3>
                    <p class="text-md mb-4">We use state-of-the-art equipment and spacious, clean shelters for all animals.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">✅ Transparency & Trust</h3>
                    <p class="text-md mb-4">Our processes, reports, and donations are fully transparent and traceable.</p>

                    <h3 class="text-xl font-semibold mb-2">✅ Community Impact</h3>
                    <p class="text-md">We’re more than a shelter — we’re a movement creating lasting change in animal
                        welfare.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->

    <section class="py-20 bg-green-700 text-white text-center">
        <div class="container mx-auto px-6 max-w-screen-md">
            <h2 class="text-4xl font-extrabold mb-6 font-sans">Need Help or Want to Learn More?</h2>
            <p class="text-lg mb-8">If you know an animal in need or want to volunteer with us, reach out now.
                Every life matters.</p>
            <a href="{{ url('/contact') }}"
                class="mb-[100px] inline-block bg-white text-green-700 font-bold py-3 px-6 rounded-full hover:bg-opacity-90 transition">Contact Us</a>
        </div>
    </section>
@endsection
