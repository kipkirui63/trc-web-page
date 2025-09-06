@extends('layouts.app')

@section('title', 'About Us - TRC AGC Church')

@section('description', 'Learn about TRC AGC Church - our story, mission, vision, core values, and leadership team')

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
                        <i class="fas fa-church mr-3 text-xl"></i>
                        Welcome to TRC AGC Church
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 text-shadow leading-tight">
                    <span class="block mb-2">About</span>
                    <span class="block bg-gradient-to-r from-white via-yellow-200 to-white bg-clip-text text-transparent">Our Story</span>
                </h1>

                <!-- Description -->
                <p class="text-xl md:text-2xl mb-12 leading-relaxed text-white/90 max-w-4xl mx-auto">
                    Discover the heart and soul of TRC AGC Church - where faith meets purpose,
                    community thrives, and lives are transformed by God's love
                </p>

                <!-- Stats Cards -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold mb-2">5+</div>
                        <div class="text-white/80">Years of Ministry</div>
                    </div>
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold mb-2">200+</div>
                        <div class="text-white/80">Church Family</div>
                    </div>
                    <div class="hero-card backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold mb-2">7</div>
                        <div class="text-white/80">Active Ministries</div>
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

<!-- Our Story Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-church-purple rounded-full -translate-x-48 -translate-y-48"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-church-red rounded-full translate-x-40 translate-y-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Story</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Born from a vision to transform lives and communities through the love of Christ
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100">
                        <h3 class="text-2xl font-bold text-church-purple mb-6">A Journey of Faith</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            TRC AGC Church began as a small gathering of believers with a big dream - to see lives transformed by the power of God's love. What started as intimate fellowship meetings has grown into a vibrant community that spans generations and cultures.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Our journey has been marked by God's faithfulness, from our humble beginnings to becoming a beacon of hope in our community. Every step has been guided by our commitment to authentic worship, genuine fellowship, and passionate service.
                        </p>
                        <div class="flex items-center text-church-purple font-semibold">
                            <i class="fas fa-heart mr-2"></i>
                            <span>Transforming lives since our founding</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="{{ asset('images/history.jpg') }}" alt="Church history" class="w-full h-80 object-cover rounded-2xl shadow-2xl" />
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-church-red rounded-full flex items-center justify-center text-white text-3xl shadow-xl">
                            <i class="fas fa-church"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-32 h-32 border-4 border-church-purple rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 border-4 border-church-red rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 border-4 border-church-purple rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Leadership</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Meet the passionate leaders who guide our church family with wisdom, love, and dedication
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Lead Pastor -->
            <div class="mb-16">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                    <div class="lg:flex">
                        <div class="lg:w-1/3 relative">
                            <img src="{{ asset('images/rev.jpg') }}" alt="Rev. Ernest Korir" class="w-full h-80 lg:h-full object-cover" />
                            <div class="absolute inset-0 bg-gradient-to-t from-church-purple/20 to-transparent"></div>
                        </div>
                        <div class="lg:w-2/3 p-8 lg:p-12">
                            <div class="mb-6">
                                <span class="inline-block bg-church-red text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">Lead Pastor</span>
                                <h3 class="text-3xl font-bold text-church-purple mb-2">Rev. Ernest Korir</h3>
                                <p class="text-gray-600 text-lg">Senior Pastor & Visionary Leader</p>
                            </div>
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Rev. Ernest Korir serves as our Lead Pastor with a heart for God's people and a vision for community transformation. His passionate preaching and compassionate leadership have been instrumental in guiding our church's growth and spiritual development.
                            </p>
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                With years of ministry experience and a deep commitment to Biblical truth, Reverend Ernest leads with both wisdom and humility, inspiring our congregation to live out their faith authentically.
                            </p>
                            <div class="flex items-center space-x-4 text-church-purple">
                                <div class="flex items-center">
                                    <i class="fas fa-bible mr-2"></i>
                                    <span class="text-sm">Biblical Teaching</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users mr-2"></i>
                                    <span class="text-sm">Community Building</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-pray mr-2"></i>
                                    <span class="text-sm">Spiritual Guidance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Pastors -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Rev. Ann Korir -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset('images/rev-ann.jpg') }}" alt="Rev. Ann Korir" class="w-full h-64 object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block bg-church-purple text-white px-3 py-1 rounded-full text-sm font-semibold">Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-church-purple mb-2">Rev. Ann Korir</h3>
                        <p class="text-gray-600 mb-4">Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Rev. Ann Korir serves faithfully under the leadership of our Lead Pastor. She brings a heart of compassion and excellence to her ministry, serving our church community with grace and wisdom.
                        </p>
                        <div class="flex items-center space-x-3 text-church-purple text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-pray mr-1"></i>
                                <span>Ministry</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-heart mr-1"></i>
                                <span>Pastoral Care</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pastor Vince -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{ asset('images/pastor-vince.jpg') }}" alt="Pastor Vince" class="w-full h-64 object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block bg-church-red text-white px-3 py-1 rounded-full text-sm font-semibold">Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-church-purple mb-2">Pastor Vince</h3>
                        <p class="text-gray-600 mb-4">Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pastor Vince serves with enthusiasm and dedication under our Lead Pastor's guidance. He brings a vibrant approach to ministry and connects with people of all ages and backgrounds in our church community.
                        </p>
                        <div class="flex items-center space-x-3 text-church-purple text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-users mr-1"></i>
                                <span>Ministry</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-hands-helping mr-1"></i>
                                <span>Community</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Vision</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-gradient-to-br from-church-purple to-purple-800 rounded-3xl shadow-2xl p-8 lg:p-12 text-white text-center mb-12">
                <h3 class="text-3xl lg:text-4xl font-bold mb-6">"The Whole Church taking the Whole Gospel to the Whole World"</h3>
                <p class="text-xl opacity-90 leading-relaxed">
                    We envision a vibrant, growing community of believers who are transformed by God's love and are actively sharing that love with others. Our vision encompasses spiritual growth, community impact, and global outreach.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-church-purple to-purple-600 flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-church"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-church-purple">The Whole Church</h3>
                    <p class="text-gray-600 leading-relaxed">Every believer equipped and mobilized for ministry, using their unique gifts to serve God's kingdom</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-church-red to-red-600 flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-church-purple">The Whole Gospel</h3>
                    <p class="text-gray-600 leading-relaxed">The complete message of Christ that transforms every area of life - spiritual, emotional, and physical</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-church-purple">The Whole World</h3>
                    <p class="text-gray-600 leading-relaxed">Reaching all people groups locally and globally with Christ's transforming love</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Mission</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 mb-12 border border-gray-100">
                <p class="text-lg text-gray-700 mb-8 leading-relaxed text-center">
                    The purpose of the Africa Gospel Church is to fulfill the Great Commandment and Great Commission of the Lord Jesus Christ according to the Great Plan (Mark 12:30-31, Matthew 28:19-20, Acts 1:8).
                </p>

                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-church-purple/5 to-purple-50 p-6 rounded-2xl border-l-4 border-church-purple">
                        <h3 class="text-xl font-bold mb-3 text-church-purple">The Great Commandment</h3>
                        <p class="text-gray-600 italic mb-2">"Love the Lord your God with all your heart and with all your soul and with all your mind and with all your strength... Love your neighbor as yourself."</p>
                        <p class="text-sm text-gray-500">- Mark 12:30-31</p>
                    </div>

                    <div class="bg-gradient-to-br from-church-red/5 to-red-50 p-6 rounded-2xl border-l-4 border-church-red">
                        <h3 class="text-xl font-bold mb-3 text-church-purple">The Great Commission</h3>
                        <p class="text-gray-600 italic mb-2">"Go and make disciples of all nations, baptizing them... and teaching them to obey everything I have commanded you."</p>
                        <p class="text-sm text-gray-500">- Matthew 28:19-20</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Mission Focus Cards -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-church-purple to-purple-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-pray"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Worship</h3>
                        <p class="text-gray-600 leading-relaxed">To celebrate God's presence through dynamic, authentic worship that honors Him</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-church-red to-red-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Fellowship</h3>
                        <p class="text-gray-600 leading-relaxed">To create a loving community where people are connected and grow together</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Discipleship</h3>
                        <p class="text-gray-600 leading-relaxed">To equip believers to mature in faith and live Christ-centered lives</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Service</h3>
                        <p class="text-gray-600 leading-relaxed">To empower believers to discover and use their gifts to serve others</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Evangelism</h3>
                        <p class="text-gray-600 leading-relaxed">To share the good news of Jesus Christ with our community and beyond</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Compassion</h3>
                        <p class="text-gray-600 leading-relaxed">To demonstrate God's love through meeting physical and social needs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Core Values</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                These values guide every decision we make and every ministry we pursue
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-church-purple text-white flex items-center justify-center mb-4">
                        <i class="fas fa-bible text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Biblical Authority</h3>
                    <p class="text-gray-700 leading-relaxed">We believe in the inspiration and authority of Scripture as our ultimate guide for faith and practice.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-church-red text-white flex items-center justify-center mb-4">
                        <i class="fas fa-seedling text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Spiritual Growth</h3>
                    <p class="text-gray-700 leading-relaxed">We are committed to helping believers grow in their relationship with Christ and become more like Him.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-orange-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-globe-africa text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Cultural Relevance</h3>
                    <p class="text-gray-700 leading-relaxed">We communicate timeless truth in culturally relevant ways while maintaining biblical integrity.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-green-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-star text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Excellence</h3>
                    <p class="text-gray-700 leading-relaxed">We strive for excellence in all we do as an act of worship and a testimony to God's greatness.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-blue-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-hands text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Unity in Diversity</h3>
                    <p class="text-gray-700 leading-relaxed">We celebrate our unity in Christ while embracing the diversity of our members and communities.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-purple-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-crown text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Servant Leadership</h3>
                    <p class="text-gray-700 leading-relaxed">We lead by serving others, following Christ's example of humility and sacrificial love.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-br from-church-purple via-purple-700 to-church-purple relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-48 -translate-y-48"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-white rounded-full translate-x-40 translate-y-40"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Join Our Church Family</h2>
            <div class="w-24 h-1 bg-white mx-auto mb-8"></div>
            <p class="text-xl md:text-2xl mb-12 leading-relaxed opacity-90">
                We invite you to be part of fulfilling God's purpose for His church. Together, we can make a lasting difference in our community and around the world.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-door-open text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Visit Us</h3>
                    <p class="opacity-90">Experience our welcoming community</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hands-helping text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Get Involved</h3>
                    <p class="opacity-90">Find your place in ministry</p>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Connect</h3>
                    <p class="opacity-90">Build meaningful relationships</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/about" class="bg-white text-church-purple hover:bg-gray-100 font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 shadow-xl inline-block">
                    <i class="fas fa-info-circle mr-2"></i>
                    Learn About Us
                </a>
                <a href="/ministries" class="bg-transparent border-2 border-white hover:bg-white hover:text-church-purple text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 inline-block">
                    <i class="fas fa-users mr-2"></i>
                    Explore Ministries
                </a>
                <a href="/contact" class="bg-church-red hover:bg-red-700 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 shadow-xl inline-block">
                    <i class="fas fa-phone mr-2"></i>
                    Contact Us
                </a>
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
@endsection