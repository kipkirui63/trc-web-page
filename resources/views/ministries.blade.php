@extends('layouts.app')

@section('title', 'Our Ministries')
@section('description', 'Discover the various ministries at TRC AGC Church and find your place to serve and grow in faith.')

@section('styles')
<style>
    .ministry-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 250, 252, 0.95) 100%);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(124, 58, 237, 0.1);
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
    }

    .ministry-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #7c3aed, #dc2626);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .ministry-card:hover::before {
        transform: scaleX(1);
    }

    .ministry-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(124, 58, 237, 0.15);
        border-color: rgba(124, 58, 237, 0.3);
    }

    .ministry-icon {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        transition: all 0.3s ease;
    }

    .ministry-card:hover .ministry-icon {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, #dc2626, #7c3aed);
    }



    @keyframes bounce-float {

        0%,
        100% {
            transform: translateY(0px);
        }

        25% {
            transform: translateY(-15px);
        }

        50% {
            transform: translateY(-5px);
        }

        75% {
            transform: translateY(-10px);
        }
    }

    .animate-bounce-float {
        animation: bounce-float 2s ease-in-out infinite;
    }

    .pulse-glow {
        animation: pulse-glow 3s ease-in-out infinite;
    }

    @keyframes pulse-glow {

        0%,
        100% {
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.3);
        }

        50% {
            box-shadow: 0 0 40px rgba(124, 58, 237, 0.6);
        }
    }

    .text-gradient {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .section-divider {
        background: linear-gradient(90deg, transparent, #7c3aed, transparent);
        height: 2px;
        border-radius: 1px;
    }

    .ministry-number {
        background: linear-gradient(135deg, #dc2626, #7c3aed);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }

    .cta-button {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .cta-button:hover::before {
        left: 100%;
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(124, 58, 237, 0.3);
    }

    .ministry-stats {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(220, 38, 38, 0.1));
        border: 1px solid rgba(124, 58, 237, 0.2);
    }

    .ministry-preview {
        transition: all 0.3s ease;
    }

    .ministry-preview:hover {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.05), rgba(220, 38, 38, 0.05));
    }

    .hero-section {
        background: linear-gradient(135deg, #7c3aed 0%, #dc2626 50%, #ea580c 100%);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
        position: relative;
        overflow: hidden;
    }

    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
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
        0% {
            transform: translateX(0) translateY(0);
        }

        25% {
            transform: translateX(-10px) translateY(-10px);
        }

        50% {
            transform: translateX(-20px) translateY(0);
        }

        75% {
            transform: translateX(-10px) translateY(10px);
        }

        100% {
            transform: translateX(0) translateY(0);
        }
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

        0%,
        100% {
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

        0%,
        100% {
            transform: translateY(0px) rotate(0deg) scale(1);
        }

        50% {
            transform: translateY(35px) rotate(-5deg) scale(1.1);
        }
    }

    @keyframes floatSpin {

        0%,
        100% {
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

        0%,
        100% {
            transform: translateY(0px) scale(1);
            opacity: 0.7;
        }

        50% {
            transform: translateY(-40px) scale(1.3);
            opacity: 1;
        }
    }

    @keyframes iconFloat {

        0%,
        100% {
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

        0%,
        100% {
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

        0%,
        100% {
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

        0%,
        100% {
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

    .hero-card:nth-child(1) {
        animation-delay: 0s;
    }

    .hero-card:nth-child(2) {
        animation-delay: -2s;
    }

    .hero-card:nth-child(3) {
        animation-delay: -4s;
    }

    @keyframes cardFloat {

        0%,
        100% {
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

        0%,
        20%,
        50%,
        80%,
        100% {
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

        0%,
        100% {
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
        background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
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
            radial-gradient(2px 2px at 20% 30%, rgba(255, 255, 255, 0.3), transparent),
            radial-gradient(2px 2px at 40% 70%, rgba(255, 255, 255, 0.2), transparent),
            radial-gradient(1px 1px at 90% 40%, rgba(255, 255, 255, 0.3), transparent),
            radial-gradient(1px 1px at 50% 60%, rgba(255, 255, 255, 0.2), transparent);
        background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px;
        animation: particles 25s linear infinite;
        pointer-events: none;
    }

    @keyframes particles {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 1;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="hero-section flex items-center justify-center relative min-h-screen">
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute bottom-40 left-20 w-24 h-24 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute bottom-20 right-10 w-18 h-18 bg-white/10 rounded-full floating-element"></div>

    <!-- Ministry Elements -->
    <div class="absolute top-32 right-1/4 text-white/20 text-4xl floating-element">
        <i class="fas fa-hands-praying"></i>
    </div>
    <div class="absolute bottom-32 left-1/4 text-white/20 text-3xl floating-element">
        <i class="fas fa-heart"></i>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto text-center text-white">
            <!-- Main Content -->
            <div class="mb-12">
                <!-- Subtitle -->
                <div class="mb-8">
                    <span class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur rounded-full text-white/90 font-semibold text-lg border border-white/30 pulse-glow">
                        <i class="fas fa-users mr-3 text-xl"></i>
                        Serve • Connect • Grow
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 text-shadow leading-tight">
                    <span class="block mb-2">Our</span>
                    <span class="block bg-gradient-to-r from-white via-yellow-200 to-white bg-clip-text text-transparent">Ministries</span>
                </h1>

                <!-- Description -->
                <p class="text-xl md:text-2xl mb-12 leading-relaxed text-white/90 max-w-4xl mx-auto">
                    Discover your place to serve, connect with others, and grow in faith.
                    Join us as we make a difference in our community and beyond through God's love
                </p>

                <!-- Ministry Stats Cards -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold mb-2">7</div>
                        <div class="text-white/80">Active Ministries</div>
                    </div>
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold mb-2">100+</div>
                        <div class="text-white/80">Ministry members</div>
                    </div>
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold mb-2">∞</div>
                        <div class="text-white/80">Lives Impacted</div>
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
                <p class="text-white/60 text-sm mt-2">Explore ministries</p>
            </div>
        </div>
    </div>
</section>

<!-- Ministries Grid -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gradient">Find Your Ministry</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Every member is a minister. Discover where God is calling you to serve and make a difference in our community and beyond.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Children's Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-child text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Children's Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Nurturing young hearts with God's love through engaging programs, Sunday school, and fun activities that build strong foundations of faith.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-users mr-2"></i>Ages 3-12</span>
                        <span><i class="fas fa-clock mr-2"></i>Sundays 11:15 AM</span>
                    </div>
                </div>
                <a href="children" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Youth Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Youth Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Empowering teenagers and young adults to grow in faith, build lasting friendships, and discover their purpose in God's plan.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-users mr-2"></i>Ages 13-25</span>
                        <span><i class="fas fa-clock mr-2"></i>Fridays 8:30 PM</span>
                    </div>
                </div>
                <a href="youth" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Worship Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-music text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Worship Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Creating an atmosphere of worship through music, media, hospitality, and prayer, welcoming all into God's presence.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="text-sm text-gray-600 space-y-1">
                        <div><i class="fas fa-microphone mr-2"></i>Choir & Music</div>
                        <div><i class="fas fa-video mr-2"></i>Media Team</div>
                        <div><i class="fas fa-handshake mr-2"></i>Hospitality & Ushering</div>
                    </div>
                </div>
                <a href="worship-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Men's Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-male text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Men's Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Building godly men who lead with integrity, support each other in faith, and make a positive impact in their families and community.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-shield-alt mr-2"></i>Leadership</span>
                        <span><i class="fas fa-hands-helping mr-2"></i>Fellowship</span>
                    </div>
                </div>
                <a href="men" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Women's Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-female text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Women's Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Encouraging women to grow in faith, build meaningful relationships, and discover their unique gifts to serve God and others.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-heart mr-2"></i>Sisterhood</span>
                        <span><i class="fas fa-pray mr-2"></i>Prayer Groups</span>
                    </div>
                </div>
                <a href="women-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Discipleship Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-book-open text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Discipleship Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Deepening your relationship with God through Bible study, small groups, and spiritual growth programs that transform lives.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="text-sm text-gray-600 space-y-1">
                        <div><i class="fas fa-bible mr-2"></i>Bible Study</div>
                        <div><i class="fas fa-home mr-2"></i>Cell Groups</div>
                        <div><i class="fas fa-graduation-cap mr-2"></i>Catechism</div>
                    </div>
                </div>
                <a href="discipleship-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Outreach Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group lg:col-span-3 md:col-span-2">
                <div class="max-w-4xl mx-auto">
                    <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe-americas text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Outreach Ministry</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed max-w-2xl mx-auto">
                        Sharing the love of Christ with our community and beyond through missions, evangelism, community service, and compassionate outreach programs.
                    </p>
                    <div class="ministry-preview rounded-lg p-6 mb-6 bg-gray-50 max-w-md mx-auto">
                        <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                            <div><i class="fas fa-hands-helping mr-2"></i>Community Outreach</div>
                            <div><i class="fas fa-bullhorn mr-2"></i>Evangelism</div>
                            <div><i class="fas fa-plane mr-2"></i>Missions</div>
                            <div><i class="fas fa-gift mr-2"></i>Charity Programs</div>
                        </div>
                    </div>
                    <a href="outreach-ministry" class="cta-button inline-block px-8 py-4 text-white font-semibold rounded-full hover:shadow-lg transition">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-r from-church-purple to-church-red text-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Involved?</h2>
            <p class="text-xl mb-8 opacity-90">
                Your gifts and talents are needed in God's kingdom. Take the next step and discover how you can make a difference.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact" class="bg-white text-church-purple px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                    Contact Us Today
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-church-purple transition transform hover:scale-105">
                    Join a Ministry
                </a>
            </div>
        </div>
    </div>

    <!-- Background Pattern -->
    <!-- <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-repeat" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.3'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);"></div>
    </div> -->
</section>
@endsection

@section('scripts')
<script>
    // Add scroll animations
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
                }, index * 100); // Stagger by 100ms
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
@endsection