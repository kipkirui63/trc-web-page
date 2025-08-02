@extends('layouts.app')

@section('title', 'Contact Us')

@section('description', 'Contact TRC AGC Church - Reach out to us with any questions or prayer requests')

@section('content')
<style>
    .hero-section {
        background: linear-gradient(135deg, #7c3aed 0%, #dc2626 50%, #ea580c 100%);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
        position: relative;
        overflow: hidden;
    }

    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        animation: patternMove 20s linear infinite;
    }

    @keyframes patternMove {
        0% { transform: translateX(0) translateY(0); }
        25% { transform: translateX(-10px) translateY(-10px); }
        50% { transform: translateX(-20px) translateY(0); }
        75% { transform: translateX(-10px) translateY(10px); }
        100% { transform: translateX(0) translateY(0); }
    }

    .floating-element {
        animation: float 8s ease-in-out infinite;
        will-change: transform;
    }

    .floating-element:nth-child(2) {
        animation: floatReverse 10s ease-in-out infinite;
        animation-delay: -2s;
    }

    .floating-element:nth-child(3) {
        animation: floatSpin 12s ease-in-out infinite;
        animation-delay: -4s;
    }

    .floating-element:nth-child(4) {
        animation: floatPulse 9s ease-in-out infinite;
        animation-delay: -6s;
    }

    .floating-element:nth-child(5) {
        animation: iconFloat 15s ease-in-out infinite;
        animation-delay: -1s;
    }

    .floating-element:nth-child(6) {
        animation: iconGlow 8s ease-in-out infinite;
        animation-delay: -3s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg) scale(1);
        }
        33% {
            transform: translateY(-25px) rotate(2deg) scale(1.05);
        }
        66% {
            transform: translateY(-15px) rotate(-1deg) scale(0.95);
        }
    }

    @keyframes floatReverse {
        0%, 100% {
            transform: translateY(0px) rotate(0deg) scale(1);
        }
        50% {
            transform: translateY(35px) rotate(-5deg) scale(1.1);
        }
    }

    @keyframes floatSpin {
        0%, 100% {
            transform: translateY(0px) rotate(0deg) scale(1);
        }
        25% {
            transform: translateY(-20px) rotate(90deg) scale(1.05);
        }
        50% {
            transform: translateY(-30px) rotate(180deg) scale(0.9);
        }
        75% {
            transform: translateY(-10px) rotate(270deg) scale(1.1);
        }
    }

    @keyframes floatPulse {
        0%, 100% {
            transform: translateY(0px) scale(1);
            opacity: 0.7;
        }
        50% {
            transform: translateY(-40px) scale(1.3);
            opacity: 1;
        }
    }

    @keyframes iconFloat {
        0%, 100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
            opacity: 0.2;
        }
        25% {
            transform: translateY(-15px) translateX(10px) rotate(5deg);
            opacity: 0.4;
        }
        50% {
            transform: translateY(-25px) translateX(-5px) rotate(-3deg);
            opacity: 0.3;
        }
        75% {
            transform: translateY(-10px) translateX(-10px) rotate(2deg);
            opacity: 0.5;
        }
    }

    @keyframes iconGlow {
        0%, 100% {
            transform: translateY(0px) scale(1);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            opacity: 0.2;
        }
        50% {
            transform: translateY(-30px) scale(1.2);
            text-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
            opacity: 0.4;
        }
    }

    .pulse-glow {
        animation: pulse-glow 4s ease-in-out infinite;
    }

    @keyframes pulse-glow {
        0%, 100% {
            box-shadow: 
                0 0 30px rgba(255, 255, 255, 0.2),
                inset 0 0 20px rgba(255, 255, 255, 0.1);
            transform: scale(1);
        }
        50% {
            box-shadow: 
                0 0 60px rgba(255, 255, 255, 0.4),
                0 0 100px rgba(124, 58, 237, 0.2),
                inset 0 0 30px rgba(255, 255, 255, 0.2);
            transform: scale(1.02);
        }
    }

    .text-shadow {
        text-shadow: 
            0 4px 8px rgba(0, 0, 0, 0.3),
            0 0 30px rgba(255, 255, 255, 0.1);
        animation: textGlow 4s ease-in-out infinite;
    }

    @keyframes textGlow {
        0%, 100% {
            text-shadow: 
                0 4px 8px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 255, 255, 0.1);
        }
        50% {
            text-shadow: 
                0 4px 8px rgba(0, 0, 0, 0.3),
                0 0 50px rgba(255, 255, 255, 0.2),
                0 0 80px rgba(255, 193, 7, 0.1);
        }
    }

    .backdrop-blur {
        backdrop-filter: blur(10px);
    }

    .hero-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        animation: cardFloat 6s ease-in-out infinite;
        will-change: transform;
    }

    .hero-card:nth-child(1) { animation-delay: 0s; }
    .hero-card:nth-child(2) { animation-delay: -2s; }
    .hero-card:nth-child(3) { animation-delay: -4s; }

    @keyframes cardFloat {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-8px) rotate(0.5deg);
        }
    }

    .hero-card:hover {
        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.4);
        transform: translateY(-10px) scale(1.05) rotate(-1deg);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.1),
            0 0 50px rgba(255, 255, 255, 0.2);
        animation-play-state: paused;
    }

    .scroll-indicator {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
        40% {
            transform: translateY(-15px) scale(1.1);
            opacity: 0.8;
        }
        60% {
            transform: translateY(-8px) scale(1.05);
            opacity: 0.9;
        }
    }

    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
        animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {
        0%, 100% {
            background-position: -200% center;
        }
        50% {
            background-position: 200% center;
        }
    }

    /* Button Animations */
    .hero-section a {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hero-section a::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
        transition: all 0.6s ease;
        transform: translate(-50%, -50%);
        border-radius: 50%;
    }

    .hero-section a:hover::before {
        width: 200%;
        height: 200%;
    }

    .hero-section a:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    /* Add particle effect */
    .hero-section::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(2px 2px at 20% 30%, rgba(255,255,255,0.3), transparent),
            radial-gradient(2px 2px at 40% 70%, rgba(255,255,255,0.2), transparent),
            radial-gradient(1px 1px at 90% 40%, rgba(255,255,255,0.3), transparent),
            radial-gradient(1px 1px at 50% 60%, rgba(255,255,255,0.2), transparent);
        background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px;
        animation: particles 25s linear infinite;
        pointer-events: none;
    }

    @keyframes particles {
        0% { transform: translateY(0) rotate(0deg); opacity: 1; }
        50% { opacity: 0.5; }
        100% { transform: translateY(-100px) rotate(360deg); opacity: 1; }
    }
</style>


<!-- Hero Section -->
<section class="hero-section flex items-center justify-center relative min-h-screen">
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute bottom-40 left-20 w-24 h-24 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute bottom-20 right-10 w-18 h-18 bg-white/10 rounded-full floating-element"></div>
    
    <!-- Cross Elements -->
    <div class="absolute top-32 right-1/4 text-white/20 text-4xl floating-element">
        <i class="fas fa-cross"></i>
    </div>
    <div class="absolute bottom-32 left-1/4 text-white/20 text-3xl floating-element">
        <i class="fas fa-dove"></i>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto text-center text-white">
            <!-- Main Content -->
            <div class="mb-12">
                <!-- Subtitle -->
                <div class="mb-8">
                    <span class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur rounded-full text-white/90 font-semibold text-lg border border-white/30 pulse-glow">
                        <i class="fas fa-phone mr-3 text-xl"></i>
                        We'd Love to Hear From You
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 text-shadow leading-tight">
                    <span class="block mb-2">Contact</span>
                    <span class="block bg-gradient-to-r from-white via-yellow-200 to-white bg-clip-text text-transparent">Us Today</span>
                </h1>

                <!-- Description -->
                <p class="text-xl md:text-2xl mb-12 leading-relaxed text-white/90 max-w-4xl mx-auto">
                    Whether you're seeking prayer, have questions about faith, or want to connect with our community, 
                    we're here to support you on your spiritual journey
                </p>

                <!-- Contact Cards -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-3xl mb-2"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="text-white/80 font-semibold">Visit Us</div>
                    </div>
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-3xl mb-2"><i class="fas fa-phone"></i></div>
                        <div class="text-white/80 font-semibold">Call Us</div>
                    </div>
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-3xl mb-2"><i class="fas fa-envelope"></i></div>
                        <div class="text-white/80 font-semibold">Email Us</div>
                    </div>
                </div>

               
            </div>
            <br>
            <br>
            <br>
            <br>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 scroll-indicator">
                <div class="w-8 h-12 border-2 border-white/50 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white/70 rounded-full mt-2"></div>
                </div>
                <p class="text-white/60 text-sm mt-2">Scroll to explore</p>
            </div>
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

                    <!-- Success & Error Messages -->
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-xl">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-xl">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
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
const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);
        
        // Observe all cards and sections
        document.querySelectorAll('section > div').forEach(section => {
            observer.observe(section);
        });
</script>

@endsection