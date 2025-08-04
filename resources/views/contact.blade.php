@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section
        class="w-full min-h-screen bg-[url('http://pet_clinic.test/cuidar_files/contact.jpg')] bg-center bg-cover bg-no-repeat flex justify-center items-center">
        <div class="bg-black w-full min-h-screen absolute top-0 left-0 z-0" style="opacity: 0.5"></div>
        <div class="flex flex-col z-10 w-100 md:w-[50%]  gap-10 mt-[100px]">
            <h1 class="flex flex-col w-full text-white gap-3">
                <span class="font-sans text-center font-black text-6xl">Get in Touch</span>
                <span class="font-sans text-center  font-bold text-xl">We’re here to help animals—and to help you help them.
                    Contact us anytime for questions, adoptions, or emergencies.
                </span>
            </h1>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center mb-12">
                <div>
                    <div class="text-3xl text-green-700 mb-2">📍</div>
                    <h3 class="text-xl font-bold">Our Address</h3>
                    <p class="text-gray-600">123 Animal Rescue Street, City, State, Zip</p>
                </div>
                <div>
                    <div class="text-3xl text-green-700 mb-2">📞</div>
                    <h3 class="text-xl font-bold">Call Us</h3>
                    <p class="text-gray-600">+1 (555) 123-4567</p>
                </div>
                <div>
                    <div class="text-3xl text-green-700 mb-2">✉️</div>
                    <h3 class="text-xl font-bold">Email</h3>
                    <p class="text-gray-600">support@cuidarrescue.org</p>
                </div>
            </div>

            <!-- Contact Form + Map -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Contact Form -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg">
                    <h2 class="text-3xl font-extrabold text-green-700 mb-6">Send Us a Message</h2>
                    <form method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block font-semibold mb-1">Full Name</label>
                            <input type="text" name="name" required
                                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">Email</label>
                            <input type="email" name="email" required
                                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">Subject</label>
                            <input type="text" name="subject"
                                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                        </div>
                        <div>
                            <label class="block font-semibold mb-1">Message</label>
                            <textarea name="message" rows="5" required
                                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-green-700 text-white font-bold py-2 px-6 rounded hover:bg-green-800 transition">Send
                            Message</button>
                    </form>
                </div>

                <!-- Google Map -->
                <div class="rounded-xl overflow-hidden shadow-lg h-[450px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.948661273063!2d-122.08424998469066!3d37.42199977982557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24d9a6f44af%3A0x9f05b5e65e20c9b0!2sGoogleplex!5e0!3m2!1sen!2sus!4v1616580036213!5m2!1sen!2sus"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="pt-[80px] pb-[150px] bg-green-700 text-white text-center">
        <h2 class="text-3xl font-extrabold mb-4">Need Immediate Assistance?</h2>
        <p class="text-lg mb-6">We’re always available for emergency rescues. Call us anytime.</p>
        <a href="tel:+15551234567"
            class="bg-white text-green-700 font-bold py-3 px-6 rounded-full hover:bg-gray-100 transition">📞 +1 (555)
            123-4567</a>
    </section>
@endsection
