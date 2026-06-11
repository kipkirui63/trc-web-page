@extends('layouts.app')

@section('title', 'Contact Us')

@section('description', 'Contact TRC AGC Church - Reach out to us with any questions or prayer requests')

@section('content')
<style>
    /* Red, Black & White Theme Variables - Same as Events Page */
    :root {
        --church-red: #DC2626;
        --church-red-dark: #B91C1C;
        --church-red-light: #fce4e8;
        --church-black: #000000;
        --church-gray: #4a4a4a;
        --church-light: #f8f8f8;
    }
    
    .hero-section {
        background: url('/images/kwale-missions1.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .floating-element {
        animation: float 8s ease-in-out infinite;
        will-change: transform;
        z-index: 3;
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
        0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
        33% { transform: translateY(-25px) rotate(2deg) scale(1.05); }
        66% { transform: translateY(-15px) rotate(-1deg) scale(0.95); }
    }

    @keyframes floatReverse {
        0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
        50% { transform: translateY(35px) rotate(-5deg) scale(1.1); }
    }

    @keyframes floatSpin {
        0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
        25% { transform: translateY(-20px) rotate(90deg) scale(1.05); }
        50% { transform: translateY(-30px) rotate(180deg) scale(0.9); }
        75% { transform: translateY(-10px) rotate(270deg) scale(1.1); }
    }

    @keyframes floatPulse {
        0%, 100% { transform: translateY(0px) scale(1); opacity: 0.7; }
        50% { transform: translateY(-40px) scale(1.3); opacity: 1; }
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0.2; }
        25% { transform: translateY(-15px) translateX(10px) rotate(5deg); opacity: 0.4; }
        50% { transform: translateY(-25px) translateX(-5px) rotate(-3deg); opacity: 0.3; }
        75% { transform: translateY(-10px) translateX(-10px) rotate(2deg); opacity: 0.5; }
    }

    @keyframes iconGlow {
        0%, 100% { transform: translateY(0px) scale(1); text-shadow: 0 0 10px rgba(255, 255, 255, 0.3); opacity: 0.2; }
        50% { transform: translateY(-30px) scale(1.2); text-shadow: 0 0 25px rgba(255, 255, 255, 0.6); opacity: 0.4; }
    }

    .pulse-glow {
        animation: pulse-glow 4s ease-in-out infinite;
    }

    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 30px rgba(220, 38, 38, 0.2), inset 0 0 20px rgba(220, 38, 38, 0.1); transform: scale(1); }
        50% { box-shadow: 0 0 60px rgba(220, 38, 38, 0.4), inset 0 0 30px rgba(220, 38, 38, 0.2); transform: scale(1.02); }
    }

    .text-shadow {
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.5), 0 0 30px rgba(220, 38, 38, 0.3);
        animation: textGlow 4s ease-in-out infinite;
    }

    @keyframes textGlow {
        0%, 100% { text-shadow: 0 4px 8px rgba(0, 0, 0, 0.5), 0 0 30px rgba(220, 38, 38, 0.3); }
        50% { text-shadow: 0 4px 8px rgba(0, 0, 0, 0.5), 0 0 50px rgba(220, 38, 38, 0.4); }
    }

    .backdrop-blur {
        backdrop-filter: blur(10px);
    }

    .scroll-indicator {
        animation: bounce 2s infinite;
        z-index: 3;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0) scale(1); opacity: 1; }
        40% { transform: translateY(-15px) scale(1.1); opacity: 0.8; }
        60% { transform: translateY(-8px) scale(1.05); opacity: 0.9; }
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
        background: radial-gradient(circle, rgba(220, 38, 38, 0.3) 0%, transparent 70%);
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
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    /* Contact Card Styles - Red, Black, White Only */
    .contact-card {
        background: white;
        border-radius: 1rem;
        padding: 1.25rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(220, 38, 38, 0.1);
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(220, 38, 38, 0.15);
        border-color: var(--church-red);
    }

    .contact-icon {
        width: 3rem;
        height: 3rem;
        background: var(--church-red);
        border-radius: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
        transition: all 0.3s ease;
    }

    .contact-card:hover .contact-icon {
        transform: scale(1.05);
    }

    .contact-icon i {
        color: white;
        font-size: 1.25rem;
    }

    .contact-title {
        color: var(--church-red);
        font-weight: 700;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        letter-spacing: 0.5px;
    }

    .contact-text {
        color: var(--church-gray);
        font-size: 0.875rem;
        line-height: 1.4;
    }

    /* Form Styles - Red Focus States */
    .form-input:focus {
        border-color: var(--church-red) !important;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1) !important;
    }

    .form-input:focus + label {
        color: var(--church-red) !important;
    }

    .submit-btn {
        background: var(--church-red);
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: var(--church-red-dark);
        transform: scale(1.05);
        box-shadow: 0 10px 25px -5px rgba(220, 38, 38, 0.5);
    }

    .section-title {
        color: var(--church-black);
        font-weight: 700;
    }

    .title-underline {
        background: var(--church-red);
        height: 0.25rem;
        width: 5rem;
        margin: 1rem auto;
        border-radius: 9999px;
    }

    /* Info Section Styles */
    .info-card {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        border: 1px solid rgba(220, 38, 38, 0.1);
        transition: all 0.3s ease;
    }

    .info-card:hover {
        border-color: var(--church-red);
        box-shadow: 0 10px 30px rgba(220, 38, 38, 0.15);
    }

    .info-icon {
        width: 3.5rem;
        height: 3.5rem;
        background: var(--church-red);
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        transition: all 0.3s ease;
    }

    .info-card:hover .info-icon {
        transform: scale(1.1);
    }

    /* Social Media Section - Red Theme */
    .social-section {
        background: var(--church-red);
        color: white;
    }

    .social-link {
        width: 3rem;
        height: 3rem;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: white;
        color: var(--church-red);
        transform: scale(1.1);
    }

    /* Map Section */
    .map-overlay {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    .map-btn-primary {
        background: var(--church-red);
        color: white;
    }

    .map-btn-primary:hover {
        background: var(--church-red-dark);
    }

    .map-btn-secondary {
        background: var(--church-light);
        color: var(--church-black);
    }

    .map-btn-secondary:hover {
        background: #e5e5e5;
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
                        <i class="fas fa-phone mr-3 text-xl" style="color: var(--church-white);"></i>
                        We'd Love to Hear From You
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl lg:text-7xl font-bold mb-8 text-shadow leading-tight">
                    <span class="block mb-2">Contact</span>
                    <span class="block mb-2" >Us Today</span>
                </h1>

                
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


<!-- Quick Contact Cards - Two Rows, Two Columns -->
<section class="py-12 bg-gray-50 relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 gap-3 md:gap-4 max-w-3xl mx-auto">
            <!-- Row 1, Column 1: Location Card -->
            <div class="contact-card text-center">
                <div class="contact-icon mx-auto">
                    <a href="https://maps.app.goo.gl/Ct76RfxeJ7WxXYBG9" class="w-full h-full flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </a>
                </div>
                <h3 class="contact-title mt-4 mb-2">VISIT US</h3>
                <p class="contact-text leading-snug">Kasarani Seasons,<br>Opposite DO's Office</p>
            </div>

            <!-- Row 1, Column 2: Phone Card -->
            <div class="contact-card text-center">
                <div class="contact-icon mx-auto">
                    <i class="fas fa-phone text-white text-xl"></i>
                </div>
                <h3 class="contact-title mt-4 mb-2">CALL US</h3>
                <p class="contact-text leading-snug">+254 791 049004<br>+254 722 123456</p>
            </div>

            <!-- Row 2, Column 1: Email Card -->
            <div class="contact-card text-center">
                <div class="contact-icon mx-auto">
                    <i class="fas fa-envelope text-white text-xl"></i>
                </div>
                <h3 class="contact-title mt-4 mb-2">EMAIL US</h3>
                <p class="contact-text leading-snug text-sm">info@thikaroadconnectagc.org<br>support@trcagc.org</p>
            </div>

            <!-- Row 2, Column 2: Service Times Card -->
            <div class="contact-card text-center">
                <div class="contact-icon mx-auto">
                    <i class="fas fa-clock text-white text-xl"></i>
                </div>
                <h3 class="contact-title mt-4 mb-2">SERVICE TIMES</h3>
                <p class="contact-text leading-snug">Sunday 10:00 AM<br>Wed 8:30 PM</p>
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
                <div class="bg-gray-50 p-8 rounded-3xl shadow-2xl border border-gray-100">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold section-title mb-3">Send Us A Message</h2>
                        <div class="title-underline"></div>
                    </div>

                    <!-- Success & Error Messages -->
                    @if(session('success'))
                    <div class="mb-4 p-4 bg-white border-l-4 border-red-600 text-gray-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="mb-4 p-4 bg-white border-l-4 border-red-600 text-gray-700 rounded-lg">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Hidden reCAPTCHA token field -->
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative">
                                <input type="text" id="name" name="name" class="form-input w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-300 peer" placeholder=" " required>
                                <label for="name" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Your Name</label>
                            </div>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="form-input w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-300 peer" placeholder=" " required>
                                <label for="email" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Your Email</label>
                            </div>
                        </div>

                        <div class="relative">
                            <input type="tel" id="phone" name="phone" class="form-input w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-300 peer" placeholder=" ">
                            <label for="phone" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Phone Number</label>
                        </div>

                        <div class="relative">
                            <input type="text" id="subject" name="subject" class="form-input w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-300 peer" placeholder=" " required>
                            <label for="subject" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Subject</label>
                        </div>

                        <div class="relative">
                            <textarea id="message" name="message" rows="6" class="form-input w-full px-4 py-4 bg-white border-2 border-gray-200 rounded-xl focus:outline-none transition-all duration-300 peer resize-none" placeholder=" " required></textarea>
                            <label for="message" class="absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-4 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Your Message</label>
                        </div>

                        <button type="submit" id="submitBtn" class="submit-btn w-full text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Send Message
                            </span>
                        </button>

                        <!-- reCAPTCHA Badge Info -->
                        <p class="text-xs text-gray-500 text-center">
                            This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy" class="text-church-red hover:underline">Privacy Policy</a> and
                            <a href="https://policies.google.com/terms" class="text-church-red hover:underline">Terms of Service</a> apply.
                        </p>
                    </form>
                </div>
            </div>


            <!-- Contact Information -->
            <div class="order-1 lg:order-2">
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold section-title mb-6">Let's Connect</h2>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Whether you're looking for spiritual guidance, want to join our community, or simply have questions about our church, we're here for you. Reach out and let us know how we can serve you.
                        </p>
                    </div>

                    <!-- Detailed Contact Info -->
                    <div class="space-y-6">
                        <div class="info-card flex items-start">
                            <div class="info-icon">
                                <a href="https://maps.app.goo.gl/Ct76RfxeJ7WxXYBG9">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </a>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2" style="color: var(--church-red);">Our Location</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Mwiki Road<br>
                                    Kasarani Seasons<br>
                                    <span class="text-sm text-gray-500">Opposite DO's Office</span>
                                </p>
                            </div>
                        </div>

                        <div class="info-card flex items-start">
                            <div class="info-icon">
                                <i class="fas fa-clock text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2" style="color: var(--church-red);">Service Schedule</h3>
                                <div class="space-y-1 text-gray-700">
                                    <p><strong>Sunday Worship:</strong> 10:00 AM - 12:00 PM</p>
                                    <p><strong>Sunday School:</strong> 11:15 AM</p>
                                    <p><strong>Wednesday Bible Study:</strong> 8:30 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="social-section p-6 rounded-2xl">
                        <h3 class="text-xl font-bold mb-4">Follow Our Journey</h3>
                        <p class="mb-6 opacity-90">Stay connected with our church community on social media</p>
                        <div class="flex space-x-4">
                            <a href="https://web.facebook.com/profile.php?id=61584163760330" target="_blank" rel="noopener noreferrer" class="social-link">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                            <a href="https://www.instagram.com/trc_agc/" class="social-link">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCOlYLzEsSZfa-Badq9L74-g" target="_blank" rel="noopener noreferrer" class="social-link">
                                <i class="fab fa-youtube text-lg"></i>
                            </a>
                            <a href="#" class="social-link">
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
            <h2 class="text-3xl font-bold section-title mb-4">Find Your Way To Us</h2>
            <div class="title-underline"></div>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <div class="relative">
                <!-- Map Container with Loading Fallback -->
                <div id="map-container" class="h-96 bg-gray-100 flex items-center justify-center">
                    <div id="map-loading" class="text-center">
                        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-red-600 mx-auto mb-4"></div>
                        <p class="text-gray-600">Loading map...</p>
                    </div>
                </div>

                <!-- Location Info Overlay -->
                <div class="absolute top-6 left-6 map-overlay p-6 rounded-2xl shadow-xl max-w-sm">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center mr-3" style="background: var(--church-red);">
                            <i class="fas fa-church text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold" style="color: var(--church-red);">TRC AGC Church</h4>
                            <p class="text-sm text-gray-600">Kasarani Seasons, Opposite DO's Office</p>
                        </div>
                    </div>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-star mr-2" style="color: var(--church-red);"></i>
                            <span>4.3 (30 reviews)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-clock mr-2"></i>
                            <span>Open Sundays 10:00 AM</span>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <a href="https://maps.app.goo.gl/Ct76RfxeJ7WxXYBG9" target="_blank" class="flex-1 map-btn-primary text-sm py-2 px-3 rounded-lg transition text-center">
                            <i class="fas fa-directions mr-1"></i>
                            Directions
                        </a>
                        <a href="https://maps.app.goo.gl/Ct76RfxeJ7WxXYBG9" target="_blank" class="flex-1 map-btn-secondary text-sm py-2 px-3 rounded-lg transition text-center">
                            View Map
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Load Google Maps with fallback
    function loadMap() {
        const mapContainer = document.getElementById('map-container');
        const loadingElement = document.getElementById('map-loading');

        // Create iframe element
        const iframe = document.createElement('iframe');
        iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.915561910429!2d36.9036869!3d-1.2188634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1503ac5b0a07%3A0xb2e0440f57b10cba!2sThika%20Road%20Connect%20(TRC)%20-%20Africa%20Gospel%20Church%20(AGC)%20Kenya.!5e0!3m2!1sen!2ske!4v1757497380177!5m2!1sen!2ske";
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
                <i class="fas fa-map-marked-alt text-4xl mb-4" style="color: var(--church-red);"></i>
                <h3 class="text-xl font-bold mb-2" style="color: var(--church-red);">Map Unavailable</h3>
                <p class="text-gray-600 mb-4">Unable to load the interactive map</p>
                <a href="https://www.google.com/maps/place/Kasarani+Group+of+Schools/@-1.2395899,36.8912113,17z/" target="_blank" class="px-6 py-2 rounded-lg transition" style="background: var(--church-red); color: white;">
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

    // Intersection Observer for animations
    const observerOptions1 = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer1 = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions1);

    // Initialize elements with starting state
    document.querySelectorAll('section > div').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        observer1.observe(section);
    });
</script>

<!-- reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const originalBtnHtml = submitBtn.innerHTML;

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Disable submit button
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="flex items-center justify-center"><i class="fas fa-spinner fa-spin mr-2"></i>Sending...</span>';

            // Execute reCAPTCHA
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'contact_form'})
                    .then(function(token) {
                        // Add token to hidden field
                        document.getElementById('recaptcha_token').value = token;
                        
                        // Submit the form
                        form.submit();
                    })
                    .catch(function(error) {
                        // Re-enable button on error
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;
                        alert('reCAPTCHA verification failed. Please try again.');
                        console.error('reCAPTCHA error:', error);
                    });
            });
        });
    });
</script>

@endsection
