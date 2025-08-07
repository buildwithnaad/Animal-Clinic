@extends('layouts.master')
@php use Illuminate\Support\Str; @endphp

<x-notification />
@section('content')
    <section
        class="w-full min-h-screen bg-[url('http://pet_clinic.test/cuidar_files/adoption.jpg')] bg-center bg-cover bg-no-repeat flex justify-center items-center">
        <div class="bg-black w-full min-h-screen absolute top-0 left-0 z-0" style="opacity: 0.5"></div>


        <div class="flex flex-col z-10 w-100 md:w-[50%]  gap-10 mt-[100px]">
            <h1 class="flex flex-col w-full text-white gap-3">
                <span class="font-sans text-center font-black text-6xl">Adopt a Friend</span>
                <span class="font-sans text-center font-bold text-xl">Give a second chance to an animal in need. Discover our
                    adorable and healthy pets ready to find a loving home.
                </span>
            </h1>

        </div>
    </section>

    <!-- Adoptable Pets -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <h2 class="text-4xl font-extrabold text-center text-green-700 mb-12 font-sans">Meet Our Pets</h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 my-10 h-fit">
                <div class="p-3">
                    <a href="#adoption-form"
                        class="block group rounded-lg p-2 hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                        <img src="{{ asset('cuidar_files/pet1.jpg') }}"
                            class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                            alt="Pet 1">

                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600">Whiskerina</h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">
                                Loving, friendly and trained. Perfect for families with children.
                            </p>
                            <span
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center">
                                Adopt Now
                            </span>
                        </div>
                    </a>
                </div>


                <div class="p-3">
                    <a href="#adoption-form"
                        class="block group rounded-lg p-2 hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                        <img src="{{ asset('cuidar_files/pet2.jpg') }}"
                            class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                            alt="Pet 1">

                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600">Captain Snuggles</h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">
                                Loving, friendly and trained. Perfect for families with children.
                            </p>
                            <span
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center">
                                Adopt Now
                            </span>
                        </div>
                    </a>
                </div>



                <div class="p-3">
                    <a href="#adoption-form"
                        class="block group rounded-lg p-2 hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                        <img src="{{ asset('cuidar_files/pet3.jpg') }}"
                            class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                            alt="Pet 1">

                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600">Cinnamon Rolla
                            </h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">
                                Loving, friendly and trained. Perfect for families with children.
                            </p>
                            <span
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center">
                                Adopt Now
                            </span>
                        </div>
                    </a>
                </div>

                <div class="p-3">
                    <a href="#adoption-form"
                        class="block group rounded-lg p-2 hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                        <img src="{{ asset('cuidar_files/pet4.jpg') }}"
                            class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                            alt="Pet 1">

                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600">Muffinbeard
                            </h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">
                                Loving, friendly and trained. Perfect for families with children.
                            </p>
                            <span
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center">
                                Adopt Now
                            </span>
                        </div>
                    </a>
                </div>


                <div class="p-3">
                    <a href="#adoption-form"
                        class="block group rounded-lg p-2 hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                        <img src="{{ asset('cuidar_files/pet5.jpg') }}"
                            class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                            alt="Pet 1">

                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600">Sir Waggington

                            </h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">
                                Loving, friendly and trained. Perfect for families with children.
                            </p>
                            <span
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center">
                                Adopt Now
                            </span>
                        </div>
                    </a>
                </div>


                <div class="p-3">
                    <a href="#adoption-form"
                        class="block group rounded-lg p-2 hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                        <img src="{{ asset('cuidar_files/pet6.jpg') }}"
                            class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                            alt="Pet 1">

                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-green-600">Biscuitto</h3>
                            <p class="text-gray-600 text-sm">2 years old • Male • Vaccinated</p>
                            <p class="text-gray-700 text-sm">
                                Loving, friendly and trained. Perfect for families with children.
                            </p>
                            <span
                                class="mt-4 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center">
                                Adopt Now
                            </span>
                        </div>
                    </a>
                </div>

                @foreach ($animals as $animal)
                    <div class="p-3 h-full">
                        <div onclick="showPayment('{{ $animal->price }}', '{{ $animal->name }}')"
                            class="block group rounded-lg p-2 h-full hover:scale-[1.02] overflow-hidden border border-transparent hover:bg-green-100 transition-all duration-300"
                            style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

                            @php
                                $image = $animal->image ? asset($animal->image) : asset('uploads/default.jpg');
                            @endphp

                            <img src="{{ $image }}"
                                class="rounded-lg transition-all duration-300 w-full object-top h-[200px] object-cover group-hover:scale-[1.02]"
                                alt="{{ $animal->name }}">

                            <div class="p-6 flex flex-col gap-2">
                                <h3 class="text-xl font-bold text-green-600">{{ $animal->name }}</h3>
                                <p class="text-gray-600 text-sm">{{ $animal->age }} old • {{ $animal->type }}</p>
                                <p class="text-gray-700 text-sm">
                                    {{ Str::words($animal->description, 20, '...') }}

                                </p>
                                <p class="text-gray-800 text-sm font-semibold flex items-center justify-between ">
                                    <span
                                        class="my-2  font-bold rounded-full
                    {{ $animal->status === 'Sold' ? 'text-red-600' : 'text-green-700' }}">
                                        {{ $animal->status }}
                                    </span>
                                    Price: Rs {{ $animal->price }}

                                </p>


                                <span
                                    class="mt-2 inline-block bg-green-700 text-white font-bold py-2 px-4 rounded-full group-hover:brightness-110 transition text-center cursor-pointer">
                                    Adopt Now
                                </span>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- Payment Section -->
            <div id="paymentSection" class="hidden mt-12 p-8 border rounded-2xl shadow-xl bg-white max-w-xl mx-auto">
                <h2 class="text-3xl font-extrabold text-green-700 mb-6 flex items-center gap-2">
                    <i class="fas fa-shield-alt text-green-600"></i> Secure Adoption Payment
                </h2>

                <div class="mb-4">
                    <p class="text-gray-800 text-lg">You're adopting:
                        <span id="animalName" class="font-semibold text-green-700"></span>
                    </p>
                    <p class="text-gray-800 text-lg">Price:
                        <span class="font-semibold text-green-700">Rs <span id="animalPrice"></span></span>
                    </p>
                </div>

                <form id="adoptionForm" action="{{ route('adoption.store') }}" method="POST" class="space-y-5">
@csrf
                    <!-- Full Name -->
                    <div class="flex items-center gap-3">
                        <i class="fas fa-user text-green-600"></i>
                        <input type="text" class="w-full border border-gray-300 p-3 rounded" placeholder="Full Name"
                            required>
                    </div>

                    <!-- Email Address -->
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-green-600"></i>
                        <input type="email" class="w-full border border-gray-300 p-3 rounded"
                            placeholder="Email Address" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="flex items-center gap-3">
                        <i class="fas fa-phone text-green-600"></i>
                        <input type="text" class="w-full border border-gray-300 p-3 rounded"
                            placeholder="Phone Number" required>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-green-600 mt-3"></i>
                        <textarea rows="3" class="w-full border border-gray-300 p-3 rounded resize-none" placeholder="Full Address"
                            required></textarea>
                    </div>

                    <!-- Bank Name -->
                    <div class="flex items-center gap-3">
                        <i class="fas fa-university text-green-600"></i>
                        <input type="text" class="w-full border border-gray-300 p-3 rounded" placeholder="Bank Name"
                            required>
                    </div>

                    <!-- IBAN Number -->
                    <div class="flex items-center gap-3">
                        <i class="fas fa-credit-card text-green-600"></i>
                        <input type="text" class="w-full border border-gray-300 p-3 rounded" placeholder="IBAN Number"
                            required>
                    </div>

                    <!-- Pay Button -->
                    <button type="submit"
                        class="w-full bg-green-700 text-white font-bold py-3 px-6 rounded-full hover:brightness-110 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-lock"></i> Pay Now
                    </button>
                </form>

            </div>



        </div>
    </section>

    <!-- Why Adopt -->
    <section class="py-20 bg-lime-800 text-white">
        <div class="container mx-auto px-6 max-w-screen-md text-center">
            <h2 class="text-4xl font-extrabold mb-6 font-sans">Why Adopt from CUIDAR?</h2>
            <p class="text-lg mb-10">Adopting a rescued animal not only gives them a new life, but it also gives you a
                loyal
                companion. All our pets are vaccinated, cared for by professionals, and ready for your home.</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 py-5 ">
                <div class="flex flex-col items-center gap-5 my-5">
                    <i class="fa-solid fa-heart text-[50px]"></i>
                    <p class="font-bold text-xl">Save a Life</p>
                </div>
                <div class="flex flex-col items-center gap-5 my-5">
                    <i class="fa-solid fa-shield-dog text-[50px]"></i>
                    <p class="font-bold text-xl">Trained & Healthy Pets</p>
                </div>
                <div class="flex flex-col items-center gap-5 my-5">
                    <i class="fa-solid fa-shield-cat text-[50px]"></i>
                    <p class="font-bold text-xl">Support Animal Welfare</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Adoption Process -->
    <section id="paymentSection" class="hidden py-16 bg-white">
        <div
            class="max-w-xl mx-auto p-8 rounded-xl shadow-lg border border-gray-200 bg-gradient-to-br from-white to-gray-100">
            <h2 class="text-3xl font-bold text-green-700 text-center mb-6">Complete Your Adoption</h2>

            <div class="bg-white rounded-lg p-5 mb-6 border border-gray-300 shadow-inner">
                <p class="text-gray-700 mb-1 text-center">You're adopting:</p>
                <h3 class="text-xl font-semibold text-center text-green-800" id="animalName">—</h3>
                <p class="text-gray-600 text-center">Amount: <span id="animalPrice"
                        class="text-green-700 font-bold text-lg">—</span> Rs</p>
            </div>

            <form action="{{ route('adoption.store') }}" method="POST" onsubmit="return handleSubmit(event);"
                class="space-y-5">
                @csrf

                <input type="hidden" name="animal_name" id="animal_name_input">
                <input type="hidden" name="animal_price" id="animal_price_input">

                <div class="flex items-center gap-3">
                    <i class="fas fa-user text-green-700"></i>
                    <input type="text" name="full_name" class="w-full border p-3 rounded" placeholder="Full Name"
                        required>
                </div>

                <div class="flex items-center gap-3">
                    <i class="fas fa-envelope text-green-700"></i>
                    <input type="email" name="email" class="w-full border p-3 rounded" placeholder="Email Address"
                        required>
                </div>

                <div class="flex items-center gap-3">
                    <i class="fas fa-phone text-green-700"></i>
                    <input type="text" name="phone" class="w-full border p-3 rounded" placeholder="Phone Number"
                        required>
                </div>

                <div class="flex items-center gap-3">
                    <i class="fas fa-location-dot text-green-700"></i>
                    <input type="text" name="address" class="w-full border p-3 rounded" placeholder="Address"
                        required>
                </div>

                <!-- Fake Card Info (no name needed) -->
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" class="border p-3 rounded" placeholder="Card Expiry (MM/YY)">
                    <input type="text" class="border p-3 rounded" placeholder="CVV">
                </div>

                <button type="submit"
                    class="w-full bg-green-700 text-white font-bold py-3 px-6 rounded-full hover:brightness-110 transition-all duration-300">
                    <i class="fas fa-lock mr-2"></i> Pay Now
                </button>
            </form>
        </div>
    </section>



   <script>
    // Show payment section
    function showPayment(price, name) {
        document.getElementById("animalName").textContent = name;
        document.getElementById("animalPrice").textContent = price;
        document.getElementById("animal_name_input").value = name;
        document.getElementById("animal_price_input").value = price;

        const section = document.getElementById("paymentSection");
        section.classList.remove("hidden");
        section.scrollIntoView({ behavior: 'smooth' });
    }

    // Handle form submit via JS
    document.getElementById("adoptionForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const form = e.target;
        const url = form.action;

        const formData = new FormData(form);

        fetch(url, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => {
            if (response.ok) {
                // ✅ Success popup
                alert("✅ Payment Successful!\n\nOur team will contact you shortly.");
                form.reset();
                document.getElementById("paymentSection").classList.add("hidden");
            } else {
                alert("❌ Something went wrong. Please try again.");
            }
        })
        .catch(error => {
            console.error(error);
            alert("❌ Error! Try again.");
        });
    });
</script>

@endsection
