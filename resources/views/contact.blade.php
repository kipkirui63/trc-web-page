@extends('layouts.app')

@section('title', 'Contact Us')

@section('description', 'Contact TRC AGC Church - Reach out to us with any questions or prayer requests')

@section('content')
<!-- Hero Section -->
<section class="relative">
    <div class="bg-gradient-to-r from-church-purple to-church-purple-light text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">Contact Us</h1>
                <p class="text-lg md:text-xl">We'd love to hear from you! Reach out to us with any questions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information & Form -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold text-church-purple mb-6">Get in Touch</h2>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1">Our Location</h3>
                            <p class="text-gray-700">
                                Kasarani Group of Schools<br>
                                icipe Road, Nairobi, Kenya
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1">Email Us</h3>
                            <p class="text-gray-700">thikaroadagc@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mr-4">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1">Call Us</h3>
                            <p class="text-gray-700">+254 791 049004</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mr-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1">Service Times</h3>
                            <p class="text-gray-700">
                                Sunday Worship: 10:00 AM<br>
                                Sunday School: 11:15 AM<br>
                                Wednesday Bible Study: 8:30 PM
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-lg font-bold text-church-purple mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-church-purple flex items-center justify-center text-white hover:bg-church-purple-light transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-church-purple flex items-center justify-center text-white hover:bg-church-purple-light transition">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-church-purple flex items-center justify-center text-white hover:bg-church-purple-light transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-church-purple flex items-center justify-center text-white hover:bg-church-purple-light transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-church-purple mb-6">Send a Message</h2>

                    <form>
                        <div class="grid md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple" required>
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Your Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple">
                        </div>

                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple" required>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple" required></textarea>
                        </div>

                        <button type="submit" class="bg-church-purple hover:bg-church-purple-light text-white font-medium py-3 px-6 rounded-md transition w-full">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<<!-- Google Maps -->
    <section class="py-8 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <h2 class="text-2xl font-bold text-church-purple p-6 border-b">Our Location</h2>
                <div class="relative">
                    <!-- Maps Area -->
                    <div class="h-96">
                        <!-- Google Maps iframe with prominent marker -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8196851062135!2d36.89121131475444!3d-1.2395899359539297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3ef282c3c599%3A0x1b64fa1f30ef6c83!2sKasarani%20Group%20of%20Schools!5e0!3m2!1sen!2sus!4v1651508287656!5m2!1sen!2sus&markers=color:red%7Clabel:K%7C-1.23959,36.89121"
                            width="100%"
                            height="400"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <!-- Overlay for location details -->
                    <div class="absolute top-4 left-4 bg-white p-4 rounded-lg shadow-lg max-w-xs">
                        <div class="font-bold text-gray-800 mb-1">Kasarani Group of Schools</div>
                        <div class="text-sm text-gray-600 mb-2">QVGW+FH, Opposite International Centre Of Insect Physiology And Ecology, Icipe Road, Nairobi</div>
                        <div class="flex items-center mb-1">
                            <div class="flex items-center text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill-opacity="0.5" />
                                </svg>
                            </div>
                            <span class="text-sm text-gray-600 ml-1">4.3</span>
                            <span class="text-xs text-gray-500 ml-1">(30 reviews)</span>
                        </div>
                        <a href="https://www.google.com/maps/place/Kasarani+Group+of+Schools/@-1.2395899,36.8912113,17z/" target="_blank" class="text-sm text-blue-600 hover:text-blue-800">View larger map</a>
                        <div class="mt-3">
                            <a href="https://www.google.com/maps/dir/?api=1&destination=Kasarani+Group+of+Schools+Nairobi+Kenya" target="_blank" class="bg-blue-500 text-white text-sm py-1 px-3 rounded hover:bg-blue-600">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prayer Request Section
<section class="py-16 bg-church-purple text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Need Prayer?</h2>
        <p class="text-lg mb-8 max-w-3xl mx-auto">We believe in the power of prayer. Submit your prayer requests and our prayer team will pray for you.</p>
        <a href="#" class="bg-white text-church-purple hover:bg-gray-100 font-medium py-3 px-6 rounded-md transition">Submit Prayer Request</a>
    </div>
</section> -->

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-church-purple mb-2">Frequently Asked Questions</h2>
                <div class="w-20 h-1 bg-church-red mx-auto"></div>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-bold text-church-purple mb-3">What time are your Sunday services?</h3>
                        <p class="text-gray-700">Our Sunday Worhip Service starts from 10:00am to 12:00pm, with Sunday School at 11:15 AM.</p>
                    </div>

                      <!-- FAQ Item 2 -->
                      <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-bold text-church-purple mb-3">How long are the services?</h3>
                        <p class="text-gray-700">Our services typically last about 75-90 minutes, which includes worship, announcements, and the sermon.</p>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-bold text-church-purple mb-3">Is there parking available?</h3>
                        <p class="text-gray-700">Yes, we have free parking available at our church campus for all attendees.</p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-bold text-church-purple mb-3">What's available for my children?</h3>
                        <p class="text-gray-700">We offer age-appropriate children's programs during all services. Our check-in process is secure and our volunteers are trained and background-checked for your child's safety.</p>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                        <h3 class="text-xl font-bold text-church-purple mb-3">Do I need to be a member to attend?</h3>
                        <p class="text-gray-700">Absolutely not! We welcome everyone to attend our services regardless of religious background or church experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-church-purple text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Join Us This Sunday</h2>
            <p class="text-lg mb-8 max-w-3xl mx-auto">We'd love to have you join us for worship this Sunday. Come experience the warmth of our community!</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-church-purple hover:bg-gray-100 font-medium py-3 px-6 rounded-md transition">Service Times</a>
                <a href="visit" class="bg-church-red hover:bg-red-600 text-white font-medium py-3 px-6 rounded-md transition">Plan Your Visit</a>
            </div>
        </div>
    </section>
    @endsection