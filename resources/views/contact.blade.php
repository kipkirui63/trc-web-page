@extends('layouts.app')

@section('title', 'Contact Us')

@section('description', 'Contact TRC AGC Church - Reach out to us with any questions or prayer requests')

@section('content')
<!-- Hero Section with Floating Elements -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-church-purple via-church-purple-light to-purple-900"></div>
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-20 h-20 bg-white rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-12 h-12 bg-church-red rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-1000"></div>
    </div>
    
    <div class="relative container mx-auto px-4 py-20">
        <div class="text-center text-white">
            <div class="inline-block p-4 bg-white/10 backdrop-blur-sm rounded-full mb-6">
                <i class="fas fa-envelope text-4xl"></i>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">
                Get In Touch
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed opacity-90">
                We're here to listen, pray with you, and welcome you into our church family
            </p>
        </div>
    </div>
</section>

<!-- Quick Contact Cards -->
<section class="py-16 bg-gray-50 relative">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-6 -mt-10 relative z-10">
            <!-- Location Card -->
            <div class="bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-purple-light rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                </div>
                <h3 class="font-bold text-church-purple mb-2">Visit Us</h3>
                <p class="text-gray-600 text-sm">Kasarani Group of Schools, icipe Road</p>
            </div>

            <!-- Phone Card -->
            <div class="bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-gradient-to-br from-church-red to-red-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-phone text-white text-xl"></i>
                </div>
                <h3 class="font-bold text-church-purple mb-2">Call Us</h3>
                <p class="text-gray-600 text-sm">+254 791 049004</p>
            </div>

            <!-- Email Card -->
            <div class="bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-envelope text-white text-xl"></i>
                </div>
                <h3 class="font-bold text-church-purple mb-2">Email Us</h3>
                <p class="text-gray-600 text-sm">thikaroadagc@gmail.com</p>
            </div>

            <!-- Service Times Card -->
            <div class="bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <i class="fas fa-clock text-white text-xl"></i>
                </div>
                <h3 class="font-bold text-church-purple mb-2">Service Times</h3>
                <p class="text-gray-600 text-sm">Sunday 10:00 AM</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Contact Form -->
            <div class="order-2 lg:order-1">
                <div class="bg-gradient-to-br from-gray-50 to-purple-50 p-8 rounded-3xl shadow-2xl">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-church-purple mb-3">Send Us A Message</h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-church-purple to-church-red mx-auto rounded-full"></div>
                    </div>

                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative">
                                <input type="text" id="name" name="name" class="w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 peer" placeholder=" " required>
                                <label for="name" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-focus:text-church-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Your Name</label>
                            </div>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 peer" placeholder=" " required>
                                <label for="email" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-focus:text-church-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Your Email</label>
                            </div>
                        </div>

                        <div class="relative">
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 peer" placeholder=" ">
                            <label for="phone" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-focus:text-church-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Phone Number</label>
                        </div>

                        <div class="relative">
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 peer" placeholder=" " required>
                            <label for="subject" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-focus:text-church-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Subject</label>
                        </div>

                        <div class="relative">
                            <textarea id="message" name="message" rows="6" class="w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none focus:border-church-purple transition-all duration-300 peer resize-none" placeholder=" " required></textarea>
                            <label for="message" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-focus:text-church-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-4 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Your Message</label>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-church-purple to-church-purple-light hover:from-church-purple-light hover:to-church-purple text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Send Message
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="order-1 lg:order-2">
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold text-church-purple mb-6">Let's Connect</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Whether you're looking for spiritual guidance, want to join our community, or simply have questions about our church, we're here for you. Reach out and let us know how we can serve you.
                        </p>
                    </div>

                    <!-- Detailed Contact Info -->
                    <div class="space-y-6">
                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-gradient-to-br from-church-purple to-church-purple-light rounded-2xl flex items-center justify-center text-white text-xl mr-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-church-purple mb-2">Our Location</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Kasarani Group of Schools<br>
                                    icipe Road, Nairobi, Kenya<br>
                                    <span class="text-sm text-gray-500">Opposite International Centre Of Insect Physiology And Ecology</span>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-gradient-to-br from-church-red to-red-500 rounded-2xl flex items-center justify-center text-white text-xl mr-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-church-purple mb-2">Service Schedule</h3>
                                <div class="space-y-1 text-gray-700">
                                    <p><strong>Sunday Worship:</strong> 10:00 AM - 12:00 PM</p>
                                    <p><strong>Sunday School:</strong> 11:15 AM</p>
                                    <p><strong>Wednesday Bible Study:</strong> 8:30 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-gradient-to-r from-church-purple to-church-purple-light p-6 rounded-2xl text-white">
                        <h3 class="text-xl font-bold mb-4">Follow Our Journey</h3>
                        <p class="mb-6 opacity-90">Stay connected with our church community on social media</p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                <i class="fab fa-youtube text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                                <i class="fab fa-tiktok text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-4">Find Your Way To Us</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-church-purple to-church-red mx-auto rounded-full"></div>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="relative">
                <!-- Map Container with Loading Fallback -->
                <div id="map-container" class="h-96 bg-gray-100 flex items-center justify-center">
                    <div id="map-loading" class="text-center">
                        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-church-purple mx-auto mb-4"></div>
                        <p class="text-gray-600">Loading map...</p>
                    </div>
                </div>

                <!-- Location Info Overlay -->
                <div class="absolute top-6 left-6 bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl max-w-sm">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-church-purple rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-church text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-church-purple">TRC AGC Church</h4>
                            <p class="text-sm text-gray-600">Kasarani Group of Schools</p>
                        </div>
                    </div>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <span>4.3 (30 reviews)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-clock mr-2"></i>
                            <span>Open Sundays 10:00 AM</span>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Kasarani+Group+of+Schools+Nairobi+Kenya" target="_blank" class="flex-1 bg-church-purple text-white text-sm py-2 px-3 rounded-lg hover:bg-church-purple-light transition text-center">
                            <i class="fas fa-directions mr-1"></i>
                            Directions
                        </a>
                        <a href="https://www.google.com/maps/place/Kasarani+Group+of+Schools/@-1.2395899,36.8912113,17z/" target="_blank" class="flex-1 bg-gray-200 text-gray-700 text-sm py-2 px-3 rounded-lg hover:bg-gray-300 transition text-center">
                            View Map
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Call to Action -->
<section class="py-20 bg-gradient-to-br from-church-purple via-church-purple-light to-purple-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-32 h-32 bg-white rounded-full animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-24 h-24 bg-church-red rounded-full animate-bounce"></div>
    </div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Join Our Family?
            </h2>
            <p class="text-xl md:text-2xl mb-10 opacity-90 leading-relaxed">
                We can't wait to welcome you into our loving church community this Sunday
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/visit" class="group relative overflow-hidden bg-white text-church-purple font-bold py-4 px-8 rounded-2xl hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    <span class="relative flex items-center justify-center">
                        <i class="fas fa-map-marker-alt mr-3 group-hover:animate-bounce"></i>
                        Plan Your Visit
                        <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                    </span>
                </a>
                
                <a href="#" class="group relative overflow-hidden bg-church-red hover:bg-red-600 text-white font-bold py-4 px-8 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    <span class="relative flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-3 group-hover:animate-pulse"></i>
                        View Service Times
                        <i class="fas fa-clock ml-3 group-hover:animate-spin"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ Toggle Function
function toggleFAQ(number) {
    const answer = document.getElementById(`answer-${number}`);
    const icon = document.getElementById(`icon-${number}`);
    
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        answer.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}

// Load Google Maps with fallback
function loadMap() {
    const mapContainer = document.getElementById('map-container');
    const loadingElement = document.getElementById('map-loading');
    
    // Create iframe element
    const iframe = document.createElement('iframe');
    iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8196851062135!2d36.89121131475444!3d-1.2395899359539297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3ef282c3c599%3A0x1b64fa1f30ef6c83!2sKasarani%20Group%20of%20Schools!5e0!3m2!1sen!2sus!4v1651508287656!5m2!1sen!2sus";
    iframe.width = "100%";
    iframe.height = "384";
    iframe.style.border = "0";
    iframe.allowFullscreen = "";
    iframe.loading = "lazy";
    iframe.referrerPolicy = "no-referrer-when-downgrade";
    
    // Handle iframe load
    iframe.onload = function() {
        loadingElement.style.display = 'none';
    };
    
    // Handle iframe error
    iframe.onerror = function() {
        loadingElement.innerHTML = `
            <div class="text-center">
                <i class="fas fa-map-marked-alt text-4xl text-church-purple mb-4"></i>
                <h3 class="text-xl font-bold text-church-purple mb-2">Map Unavailable</h3>
                <p class="text-gray-600 mb-4">Unable to load the interactive map</p>
                <a href="https://www.google.com/maps/place/Kasarani+Group+of+Schools/@-1.2395899,36.8912113,17z/" target="_blank" class="bg-church-purple text-white px-6 py-2 rounded-lg hover:bg-church-purple-light transition">
                    View on Google Maps
                </a>
            </div>
        `;
    };
    
    // Add iframe to container
    mapContainer.appendChild(iframe);
    
    // Set timeout fallback
    setTimeout(() => {
        if (loadingElement.style.display !== 'none') {
            iframe.onerror();
        }
    }, 10000); // 10 second timeout
}

// Load map when page is ready
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(loadMap, 1000); // Small delay to improve perceived performance
});
</script>

@endsection