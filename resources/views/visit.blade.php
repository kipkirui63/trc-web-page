@extends('layouts.app')

@section('title', 'Plan Your Visit')

@section('description', 'TRC AGC Church - The Whole Gospel to the Whole World')

@section('content')
<body class="bg-gray-50 text-gray-800">
    <!-- Header would go here (same as main site) -->
    
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-church-purple to-church-purple-light text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Plan Your Visit</h1>
            <p class="text-xl max-w-3xl mx-auto">We're excited to have you join us for a service. Let us help make your first visit comfortable and meaningful.</p>
        </div>
    </section>

    <!-- Visit Info Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-church-purple mb-6">What to Expect</h2>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="mr-4 text-church-purple">
                                <i class="fas fa-clock text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Service Times</h3>
                                <p>Sunday Worship: 10:00 AM - 12:00 PM<br>
                                Sunday School: 11:15 AM</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="mr-4 text-church-purple">
                                <i class="fas fa-map-marker-alt text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Location</h3>
                                <span>Kasarani Group of Schools<br>
                                icipe Road, Nairobi, Kenya</span>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="mr-4 text-church-purple">
                                <i class="fas fa-child text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Children's Ministry</h3>
                                <p>We offer vibrant children's programs during all services for ages 0-12 years.</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="mr-4 text-church-purple">
                                <i class="fas fa-users text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Dress Code</h3>
                                <p>Come as you are! You'll find people dressed in everything from casual to business attire.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Visit Form -->
                <div>
                    <div class="bg-gray-50 rounded-lg shadow-md p-6">
                        <h2 class="text-2xl font-bold text-church-purple mb-6">Let Us Know You're Coming</h2>
                        <p class="mb-6">Fill out this short form and we'll have a welcome package ready for you when you arrive!</p>
                        
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple">
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple">
                            </div>
                            
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone (Optional)</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple">
                            </div>
                            
                            <div class="mb-4">
                                <label for="date" class="block text-gray-700 font-medium mb-2">Date of Visit</label>
                                <input type="date" id="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple">
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">Will you bring children?</label>
                                <div class="flex items-center">
                                    <input type="radio" id="children-yes" name="children" class="mr-2">
                                    <label for="children-yes" class="mr-6">Yes</label>
                                    
                                    <input type="radio" id="children-no" name="children" class="mr-2">
                                    <label for="children-no">No</label>
                                </div>
                            </div>
                            
                            <div class="mb-4 hidden" id="children-ages">
                                <label for="ages" class="block text-gray-700 font-medium mb-2">Children's Ages</label>
                                <input type="text" id="ages" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple" placeholder="e.g., 3, 5, 10">
                            </div>
                            
                            <div class="mb-4">
                                <label for="questions" class="block text-gray-700 font-medium mb-2">Questions or Special Requests</label>
                                <textarea id="questions" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-church-purple hover:bg-church-purple-light text-white font-medium py-3 px-4 rounded-md transition">Confirm Your Visit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- First-Time Guest Gift -->
    <section class="py-12 bg-church-purple text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">First-Time Guest Gift</h2>
            <p class="text-lg mb-8 max-w-3xl mx-auto">As our way of saying thanks for visiting, we have a special gift for all first-time guests. Just stop by our Welcome Center after the service!</p>
            <a href="#" class="bg-white text-church-purple hover:bg-gray-100 font-medium py-3 px-6 rounded-md transition">Plan Your Visit Now</a>
        </div>
    </section>
</body>
@endsection