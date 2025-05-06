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
                                <p>Sunday Worship: 9:00 AM & 11:00 AM<br>
                                Sunday School: 10:15 AM</p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="mr-4 text-church-purple">
                                <i class="fas fa-map-marker-alt text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">Location</h3>
                                <p>123 Church Street<br>
                                City, Country</p>
                                <a href="#" class="text-church-purple hover:text-church-purple-light mt-1 inline-block">Get Directions</a>
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
                            
                            <div class="mb-4">
                                <label for="service" class="block text-gray-700 font-medium mb-2">Service Time</label>
                                <select id="service" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-church-purple">
                                    <option>9:00 AM Sunday Service</option>
                                    <option>11:00 AM Sunday Service</option>
                                </select>
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
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-church-purple mb-2">Frequently Asked Questions</h2>
                <div class="w-20 h-1 bg-church-red mx-auto"></div>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">Where should I park?</h3>
                    <p class="text-gray-600">We have ample parking available in our main lot, with designated visitor parking near the front entrance. Our parking team will be happy to direct you.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">How long are the services?</h3>
                    <p class="text-gray-600">Our services typically last about 75-90 minutes, which includes worship, announcements, and the sermon.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">What's available for my children?</h3>
                    <p class="text-gray-600">We offer age-appropriate children's programs during all services. Our check-in process is secure and our volunteers are trained and background-checked for your child's safety.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-xl font-bold mb-2">Do I need to be a member to attend?</h3>
                    <p class="text-gray-600">Absolutely not! We welcome everyone to attend our services regardless of religious background or church experience.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-2">What if I have more questions?</h3>
                    <p class="text-gray-600">Feel free to contact us at <a href="mailto:info@trcagc.org" class="text-church-purple hover:text-church-purple-light">info@trcagc.org</a> or call us at <a href="tel:+1234567890" class="text-church-purple hover:text-church-purple-light">+123 456 7890</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Virtual Tour -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-church-purple mb-6">Take a Virtual Tour</h2>
            <p class="text-lg mb-8 max-w-3xl mx-auto">Can't wait until Sunday? Take a virtual tour of our facilities to get familiar with our campus before your visit.</p>
            
            <div class="bg-gray-200 rounded-lg aspect-video max-w-4xl mx-auto flex items-center justify-center">
                <!-- This would be replaced with an actual video or 360° tour -->
                <div class="text-center text-gray-600">
                    <i class="fas fa-video text-5xl mb-4"></i>
                    <p class="text-xl">Virtual Tour Video</p>
                </div>
            </div>
            
            <a href="#" class="mt-6 inline-flex items-center bg-church-purple hover:bg-church-purple-light text-white font-medium py-3 px-6 rounded-md transition">
                View Full Virtual Tour
                <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
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