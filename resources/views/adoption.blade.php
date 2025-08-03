@extends('layouts.master')

@section('content')
    <section class="w-full min-h-screen bg-[url('http://pet_clinic.test/cuidar_files/adoption.jpg')] bg-center bg-cover bg-no-repeat flex justify-center items-center">
        <div class="bg-black w-full h-full absolute top-0 left-0 z-0" style="opacity: 0.5"></div>
        

         <div class="flex flex-col z-10 w-100 md:w-[50%]  gap-10 mt-[100px]" >
            <h1 class="flex flex-col w-full text-white gap-3">
                <span class="font-sans text-center font-black text-6xl">Adopt a Friend</span>
                <span class="font-sans text-center font-bold text-xl">Give a second chance to an animal in need. Discover our adorable and healthy pets ready to find a loving home.
                </span>
            </h1>

        </div>
    </section>

    <!-- Adoptable Pets -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h2 class="text-4xl font-extrabold text-center text-green-700 mb-12 font-sans">Meet Our Pets</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="bg-white rounded shadow-lg overflow-hidden">
                        <img src="h" class="w-full h-60 object-cover" alt="Pet 1">
                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600"></h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">Loving, friendly and trained. Perfect for families with children.</p>
                            <a href="#adoption-form"
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full hover:brightness-110 transition">Adopt Now</a>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>

    <!-- Why Adopt -->
    <section class="py-20 bg-lime-800 text-white">
        <div class="container mx-auto px-6 max-w-screen-md text-center">
            <h2 class="text-4xl font-extrabold mb-6 font-sans">Why Adopt from CUIDAR?</h2>
            <p class="text-lg mb-10">Adopting a rescued animal not only gives them a new life, but it also gives you a loyal companion. All our pets are vaccinated, cared for by professionals, and ready for your home.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                <div class="flex flex-col items-center gap-2">
                    <i class="fa-solid fa-heart text-4xl"></i>
                    <p class="font-bold text-xl">Save a Life</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <i class="fa-solid fa-shield-dog text-4xl"></i>
                    <p class="font-bold text-xl">Trained & Healthy Pets</p>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <i class="fa-solid fa-house-chimney-heart text-4xl"></i>
                    <p class="font-bold text-xl">Support Animal Welfare</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Adoption Process -->
    <section class="py-20 bg-white" id="adoption-form">
        <div class="container mx-auto px-6 max-w-screen-md">
            <h2 class="text-4xl font-extrabold text-center text-green-700 mb-12 font-sans">How to Adopt</h2>
            <ol class="list-decimal list-inside space-y-6 text-lg text-gray-800">
                <li>Choose your pet from the gallery above.</li>
                <li>Fill out the adoption form below or contact our team.</li>
                <li>Wait for our verification and home check.</li>
                <li>Meet your new friend and finalize the adoption!</li>
            </ol>

            <form class="mt-12 space-y-6 bg-gray-100 p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <input type="text" placeholder="Full Name" class="p-4 rounded w-full" required>
                    <input type="email" placeholder="Email" class="p-4 rounded w-full" required>
                    <input type="text" placeholder="Phone Number" class="p-4 rounded w-full">
                    <input type="text" placeholder="Pet Interested In" class="p-4 rounded w-full">
                </div>
                <textarea rows="5" placeholder="Why do you want to adopt?" class="w-full p-4 rounded resize-none" required></textarea>
                <button type="submit"
                    class="bg-green-700 hover:brightness-110 transition text-white font-bold py-3 px-6 rounded-full">Submit
                    Application</button>
            </form>
        </div>
    </section>
@endsection
