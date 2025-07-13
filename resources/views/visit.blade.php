@extends('layouts.app')

@section('title', 'Plan Your Visit')

@section('description', 'TRC AGC Church - The Whole Gospel to the Whole World')

@section('content')
<body class="bg-gray-50 text-gray-800">
    
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0  bg-gradient-to-br from-church-purple via-church-purple-light to-purple-900">
            <div class="absolute inset-0  bg-gradient-to-br from-church-purple via-church-purple-light to-purple-900 bg-opacity-20"></div>
            <!-- Floating Elements -->
            <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full blur-xl animate-pulse"></div>
            <div class="absolute bottom-32 right-16 w-32 h-32 bg-white bg-opacity-5 rounded-full blur-2xl animate-pulse delay-300"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white bg-opacity-10 rounded-full blur-lg animate-pulse delay-700"></div>
        </div>
        
        <div class="relative z-10 container mx-auto px-4 text-center text-white">
            <div class="animate-fade-in-up">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    Plan Your <span class="text-yellow-300">Visit</span>
                </h1>
                <p class="text-xl md:text-2xl max-w-4xl mx-auto mb-8 leading-relaxed">
                    We're excited to have you join our church family. Let us help make your first visit comfortable and meaningful.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button onclick="scrollToForm()" class="bg-white text-church-purple hover:bg-gray-100 font-bold py-4 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 pulse-shadow">
                        <i class="fas fa-calendar-plus mr-2"></i>Plan My Visit
                    </button>
                    <button onclick="scrollToInfo()" class="border-2 border-white text-white hover:bg-white hover:text-church-purple font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-info-circle mr-2"></i>What to Expect
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    <!-- Visit Info Section with Cards -->
    <section id="info-section" class="py-20 bg-white relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">What to Expect</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-church-purple to-church-red mx-auto rounded-full"></div>
                <p class="text-gray-600 text-lg mt-6 max-w-2xl mx-auto">Your comfort and spiritual growth are our priorities. Here's everything you need to know for your visit.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service Times Card -->
                <div class="card-hover bg-white rounded-2xl shadow-xl p-8 border-l-4 border-church-purple">
                    <div class="text-church-purple mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-purple-light rounded-2xl flex items-center justify-center">
                            <i class="fas fa-clock text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800">Service Times</h3>
                    <div class="space-y-2 text-gray-600">
                        <p class="flex items-center">
                            <i class="fas fa-circle text-church-red text-xs mr-2"></i>
                            <strong>Sunday Worship:</strong> 10:00 AM - 12:00 PM
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-circle text-church-red text-xs mr-2"></i>
                            <strong>Sunday School:</strong> 11:15 AM
                        </p>
                    </div>
                </div>
                
                <!-- Location Card -->
                <div class="card-hover bg-white rounded-2xl shadow-xl p-8 border-l-4 border-church-red">
                    <div class="text-church-red mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-red to-red-500 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800">Location</h3>
                    <div class="text-gray-600">
                        <p class="font-semibold">Kasarani Group of Schools</p>
                        <p>icipe Road, Nairobi, Kenya</p>
                        <button class="mt-3 text-church-purple hover:text-church-purple-light font-semibold text-sm">
                            <i class="fas fa-directions mr-1"></i>Get Directions
                        </button>
                    </div>
                </div>
                
                <!-- Children's Ministry Card -->
                <div class="card-hover bg-white rounded-2xl shadow-xl p-8 border-l-4 border-green-500">
                    <div class="text-green-500 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-child text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800">Children's Ministry</h3>
                    <p class="text-gray-600">Vibrant programs for ages 0-12 years during all services with trained volunteers.</p>
                </div>
                
                <!-- Dress Code Card -->
                <div class="card-hover bg-white rounded-2xl shadow-xl p-8 border-l-4 border-blue-500">
                    <div class="text-blue-500 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-users text-2xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800">Dress Code</h3>
                    <p class="text-gray-600">Come as you are! From casual to business attire - you'll fit right in.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Visit Form Section -->
    <section id="form-section" class="py-20 bg-gradient-to-br from-gray-50 to-purple-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Let Us Know You're Coming</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Fill out this form and we'll have a welcome package ready for you when you arrive!</p>
                </div>
                
                <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 relative overflow-hidden">
                    <!-- Decorative Elements -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-church-purple to-church-purple-light opacity-10 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-church-red to-red-500 opacity-10 rounded-full translate-y-12 -translate-x-12"></div>
                    
                    <form class="relative z-10">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="group">
                                <label for="name" class="block text-gray-700 font-semibold mb-3">Full Name *</label>
                                <input type="text" id="name" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 bg-gray-50 focus:bg-white" placeholder="Enter your full name">
                            </div>
                            
                            <div class="group">
                                <label for="email" class="block text-gray-700 font-semibold mb-3">Email Address *</label>
                                <input type="email" id="email" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 bg-gray-50 focus:bg-white" placeholder="your.email@example.com">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="group">
                                <label for="phone" class="block text-gray-700 font-semibold mb-3">Phone Number</label>
                                <input type="tel" id="phone" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 bg-gray-50 focus:bg-white" placeholder="+254 700 000 000">
                            </div>
                            
                            <div class="group">
                                <label for="date" class="block text-gray-700 font-semibold mb-3">Date of Visit *</label>
                                <input type="date" id="date" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 bg-gray-50 focus:bg-white">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-4">Will you bring children?</label>
                            <div class="flex gap-6">
                                <label class="flex items-center cursor-pointer group">
                                    <input type="radio" id="children-yes" name="children" class="sr-only" onchange="toggleChildrenAges(true)">
                                    <div class="w-6 h-6 border-2 border-gray-300 rounded-full mr-3 relative group-hover:border-church-purple transition-colors">
                                        <div class="w-3 h-3 bg-church-purple rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 transition-opacity" id="yes-dot"></div>
                                    </div>
                                    <span class="text-gray-700 font-medium">Yes</span>
                                </label>
                                
                                <label class="flex items-center cursor-pointer group">
                                    <input type="radio" id="children-no" name="children" class="sr-only" onchange="toggleChildrenAges(false)">
                                    <div class="w-6 h-6 border-2 border-gray-300 rounded-full mr-3 relative group-hover:border-church-purple transition-colors">
                                        <div class="w-3 h-3 bg-church-purple rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 transition-opacity" id="no-dot"></div>
                                    </div>
                                    <span class="text-gray-700 font-medium">No</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="mb-6 hidden transition-all duration-300" id="children-ages">
                            <label for="ages" class="block text-gray-700 font-semibold mb-3">Children's Ages</label>
                            <input type="text" id="ages" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 bg-gray-50 focus:bg-white" placeholder="e.g., 3, 5, 10">
                        </div>
                        
                        <div class="mb-8">
                            <label for="questions" class="block text-gray-700 font-semibold mb-3">Questions or Special Requests</label>
                            <textarea id="questions" rows="4" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 bg-gray-50 focus:bg-white resize-none" placeholder="Let us know how we can make your visit special..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-church-purple to-church-purple-light hover:from-church-purple-light hover:to-church-purple text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <i class="fas fa-heart mr-2"></i>Confirm My Visit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Frequently Asked Questions</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-church-purple to-church-red mx-auto rounded-full"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Items with Enhanced Styling -->
                    <div class="faq-item bg-gradient-to-r from-gray-50 to-purple-50 rounded-2xl p-8 shadow-lg border-l-4 border-church-purple cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-church-purple mb-3 flex items-center">
                                    <i class="fas fa-clock mr-3 text-church-red"></i>
                                    What time are your Sunday services?
                                </h3>
                                <p class="text-gray-700 leading-relaxed">Our Sunday Worship Service starts from 10:00am to 12:00pm, with Sunday School at 11:15 AM.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl p-8 shadow-lg border-l-4 border-blue-500 cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-blue-600 mb-3 flex items-center">
                                    <i class="fas fa-hourglass-half mr-3 text-church-red"></i>
                                    How long are the services?
                                </h3>
                                <p class="text-gray-700 leading-relaxed">Our services typically last about 75-90 minutes, which includes worship, announcements, and the sermon.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-item bg-gradient-to-r from-gray-50 to-green-50 rounded-2xl p-8 shadow-lg border-l-4 border-green-500 cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-green-600 mb-3 flex items-center">
                                    <i class="fas fa-parking mr-3 text-church-red"></i>
                                    Is there parking available?
                                </h3>
                                <p class="text-gray-700 leading-relaxed">Yes, we have free parking available at our church campus for all attendees.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item bg-gradient-to-r from-gray-50 to-yellow-50 rounded-2xl p-8 shadow-lg border-l-4 border-yellow-500 cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-yellow-600 mb-3 flex items-center">
                                    <i class="fas fa-child mr-3 text-church-red"></i>
                                    What's available for my children?
                                </h3>
                                <p class="text-gray-700 leading-relaxed">We offer age-appropriate children's programs during all services. Our check-in process is secure and our volunteers are trained and background-checked for your child's safety.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item bg-gradient-to-r from-gray-50 to-pink-50 rounded-2xl p-8 shadow-lg border-l-4 border-pink-500 cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-pink-600 mb-3 flex items-center">
                                    <i class="fas fa-heart mr-3 text-church-red"></i>
                                    Do I need to be a member to attend?
                                </h3>
                                <p class="text-gray-700 leading-relaxed">Absolutely not! We welcome everyone to attend our services regardless of religious background or church experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Gift Section -->
    <section class="py-20 bg-gradient-to-br from-church-purple via-purple-600 to-church-purple-light relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 border-4 border-white rounded-full"></div>
            <div class="absolute bottom-20 right-20 w-32 h-32 border-4 border-white rounded-full"></div>
            <div class="absolute top-1/2 left-1/4 w-20 h-20 border-4 border-white rounded-full"></div>
        </div>
        
        <div class="container mx-auto px-4 text-center text-white relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="mb-8">
                    <i class="fas fa-gift text-6xl mb-6 text-yellow-300"></i>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">First-Time Guest Gift</h2>
                    <p class="text-xl md:text-2xl leading-relaxed mb-8">As our way of saying thanks for visiting, we have a special gift for all first-time guests. Just stop by our Welcome Center after the service!</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button onclick="scrollToForm()" class="bg-white text-church-purple hover:bg-gray-100 font-bold py-4 px-8 rounded-full shadow-2xl transition-all duration-300 transform hover:scale-105 pulse-shadow">
                        <i class="fas fa-calendar-check mr-2"></i>Plan Your Visit Now
                    </button>
                    <button class="border-2 border-white text-white hover:bg-white hover:text-church-purple font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-phone mr-2"></i>Call Us Today
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Enhanced form interactions
        function toggleChildrenAges(hasChildren) {
            const agesDiv = document.getElementById('children-ages');
            const yesDot = document.getElementById('yes-dot');
            const noDot = document.getElementById('no-dot');
            
            if (hasChildren) {
                agesDiv.classList.remove('hidden');
                yesDot.style.opacity = '1';
                noDot.style.opacity = '0';
            } else {
                agesDiv.classList.add('hidden');
                yesDot.style.opacity = '0';
                noDot.style.opacity = '1';
            }
        }
        
        // Smooth scrolling functions
        function scrollToForm() {
            document.getElementById('form-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        
        function scrollToInfo() {
            document.getElementById('info-section').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        
        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe cards for animation
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-hover, .faq-item');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(card);
            });
        });
        
        // Form submission with animation
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const button = e.target.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            
            button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Submitting...';
            button.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                button.innerHTML = '<i class="fas fa-check mr-2"></i>Visit Confirmed!';
                button.classList.add('bg-green-500', 'hover:bg-green-600');
                button.classList.remove('bg-gradient-to-r', 'from-church-purple', 'to-church-purple-light');
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.disabled = false;
                    button.classList.remove('bg-green-500', 'hover:bg-green-600');
                    button.classList.add('bg-gradient-to-r', 'from-church-purple', 'to-church-purple-light');
                }, 3000);
            }, 2000);
        });
    </script>
</body>
@endsection