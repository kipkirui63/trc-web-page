@extends('layouts.app')

@section('title', 'Home - TRC AGC Church')

@section('description', 'TRC AGC Church - The Whole Gospel to the Whole World')

@push('styles')
<style>
    /* Custom animations and effects */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes glow {

        0%,
        100% {
            opacity: 0.7;
        }

        50% {
            opacity: 1;
        }
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    .glow {
        animation: glow 3s ease-in-out infinite;
    }

    .slide-up {
        animation: slideInUp 0.8s ease-out forwards;
    }

    .slide-left {
        animation: slideInLeft 0.8s ease-out forwards;
    }

    .slide-right {
        animation: slideInRight 0.8s ease-out forwards;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .glass-card-dark {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .gradient-text {
        background: linear-gradient(135deg, #582C83, #ED1C24);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>
@endpush

@section('content')
<!-- Unified Hero & Foundation Section -->
<section class="relative min-h-screen bg-gradient-to-br from-church-purple via-purple-800 to-church-red overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 pattern-overlay"></div>
        <img src="https://i.pinimg.com/736x/d9/a3/cb/d9a3cb64544754fc8790c1c76c3ff686.jpg"
            alt="Church worship"
            class="w-full h-full object-cover opacity-20 mix-blend-overlay" />
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-20 right-20 floating glow">
        <div class="w-6 h-6 bg-white rounded-full opacity-30"></div>
    </div>
    <div class="absolute bottom-32 left-16 floating glow" style="animation-delay: -2s;">
        <div class="w-8 h-8 bg-church-red rounded-full opacity-40"></div>
    </div>
    <div class="absolute top-1/2 right-32 floating glow" style="animation-delay: -4s;">
        <div class="w-4 h-4 bg-yellow-400 rounded-full opacity-30"></div>
    </div>
    <div class="absolute top-1/4 left-1/4 floating glow" style="animation-delay: -3s;">
        <div class="w-5 h-5 bg-white rounded-full opacity-20"></div>
    </div>

    <!-- Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-church-purple/20 rounded-full blur-3xl -translate-x-48 -translate-y-48 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-church-red/20 rounded-full blur-3xl translate-x-48 translate-y-48 animate-pulse"></div>

    <div class="relative z-10 container mx-auto px-6 lg:px-16 py-20">
        <!-- Hero Content -->
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-32">
            <!-- Left Content -->
            <div class="slide-left">
                <!-- Welcome Badge -->
                <div class="inline-flex items-center glass-card rounded-full px-6 py-3 mb-8">
                    <div class="w-3 h-3 bg-green-400 rounded-full mr-3 animate-pulse"></div>
                    <span class="text-white font-medium">Welcome to Our Church Family</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    Find Your
                    <span class="gradient-text block bg-gradient-to-r from-yellow-400 to-pink-400 bg-clip-text text-transparent">
                        Purpose
                    </span>
                    in Faith
                </h1>

                <p class="text-xl text-white/90 mb-10 max-w-xl leading-relaxed">
                    Join our vibrant community where love, faith, and purpose unite. Experience transformation through God's word and fellowship.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="/livestream" class="group relative overflow-hidden bg-gradient-to-r from-purple-500 via-pink-500 to-purple-600 hover:from-pink-500 hover:via-purple-500 hover:to-pink text-white font-semibold py-4 px-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:scale-105">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-play mr-2"></i>
                            Watch Live
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right Content - Service Times Card -->
            <div class="slide-right">
                <div class="glass-card-dark rounded-3xl p-8 backdrop-blur-xl shadow-2xl max-w-md ml-auto">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-gradient-to-r from-church-red to-pink-500 rounded-2xl flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white">Service Times</h3>
                            <p class="text-white/70 text-sm">Join us for worship</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white/10 backdrop-blur-sm">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-church-purple rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-church text-white text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-white">Sunday Worship</div>
                                    <div class="text-white/70 text-sm">Main Service</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-bold">10:00 AM</div>
                                <div class="text-white/70 text-sm">2 hours</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white/10 backdrop-blur-sm">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-church-red rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-graduation-cap text-white text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-white">Sunday School</div>
                                    <div class="text-white/70 text-sm">Little Children</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-bold">11:15 AM</div>
                                <div class="text-white/70 text-sm">45 min</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white/10 backdrop-blur-sm">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-book text-white text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-white">Bible Study</div>
                                    <div class="text-white/70 text-sm">Wednesday</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-bold">8:30 PM</div>
                                <div class="text-white/70 text-sm">1 hour</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 rounded-2xl bg-white/10 backdrop-blur-sm">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-amber-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-hands text-white text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-white">Friday Prayers</div>
                                    <div class="text-white/70 text-sm">Last Friday of Month</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-white font-bold">6:00 PM</div>
                                <div class="text-white/70 text-sm">1 hour</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compact Foundation Banner -->
        <div class="relative z-10 mt-20">
            <div class="glass-card-dark rounded-3xl p-8 mx-auto max-w-5xl backdrop-blur-xl border border-white/10">
                <!-- Floating Icons -->
                <div class="absolute -top-6 left-8 floating">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center shadow-2xl">
                        <i class="fas fa-eye text-white text-lg"></i>
                    </div>
                </div>
                <div class="absolute -top-6 right-8 floating" style="animation-delay: -2s;">
                    <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl flex items-center justify-center shadow-2xl">
                        <i class="fas fa-compass text-white text-lg"></i>
                    </div>
                </div>

                <div class="text-center pt-4">
                    <!-- Foundation Header -->
                    <div class="inline-flex items-center bg-white/10  rounded-full px-6 py-2 mb-6 border border-white/20">
                        <i class="fas fa-star text-white mr-2 text-sm"></i>
                        <span class="text-white font-semibold text-sm">Our Foundation</span>
                    </div>

                    <!-- Compact Mission & Vision -->
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <!-- Vision -->
                        <div class="group text-center">
                            <h3 class="text-2xl font-bold mb-3">
                                <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Our Vision</span>
                            </h3>
                            <blockquote class="text-lg font-semibold text-white/95 italic relative">
                                "The Whole Church taking the Whole Gospel to the Whole World"
                            </blockquote>
                        </div>

                        <!-- Mission -->
                        <div class="group text-center">
                            <h3 class="text-2xl font-bold mb-3">
                                <span class="bg-gradient-to-r from-red-400 to-orange-400 bg-clip-text text-transparent">Our Mission</span>
                            </h3>
                            <p class="text-lg text-white/90">
                                Fulfilling the Great Commandment and Great Commission through love, hope, and salvation.
                            </p>
                        </div>
                    </div>

                    <!-- Core Values Pills -->
                    <div class="flex flex-wrap justify-center gap-3">
                        <div class="group flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                            <i class="fas fa-globe-americas text-purple-400 mr-2 text-sm group-hover:scale-110 transition-transform"></i>
                            <span class="text-white text-sm font-medium">Global Impact</span>
                        </div>
                        <div class="group flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                            <i class="fas fa-hands-praying text-pink-400 mr-2 text-sm group-hover:scale-110 transition-transform"></i>
                            <span class="text-white text-sm font-medium">Spiritual Growth</span>
                        </div>
                        <div class="group flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                            <i class="fas fa-heart text-red-400 mr-2 text-sm group-hover:scale-110 transition-transform"></i>
                            <span class="text-white text-sm font-medium">Community Love</span>
                        </div>
                        <div class="group flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                            <i class="fas fa-book-open text-yellow-400 mr-2 text-sm group-hover:scale-110 transition-transform"></i>
                            <span class="text-white text-sm font-medium">Biblical Truth</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
        --church-purple: #6B46C1;
        --church-red: #DC2626;
    }

    .church-purple {
        color: var(--church-purple);
    }

    .bg-church-purple {
        background-color: var(--church-purple);
    }

    .church-red {
        color: var(--church-red);
    }

    .bg-church-red {
        background-color: var(--church-red);
    }

    .pattern-overlay {
        background-image:
            radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
            radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        background-size: 50px 50px, 30px 30px;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .glass-card-dark {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    .glow {
        filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        33% {
            transform: translateY(-20px) rotate(1deg);
        }

        66% {
            transform: translateY(-10px) rotate(-1deg);
        }
    }

    .slide-left {
        animation: slideInLeft 1s ease-out;
    }

    .slide-right {
        animation: slideInRight 1s ease-out;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<style>
    :root {
        --church-purple: #6B46C1;
        --church-red: #DC2626;
    }

    .church-purple {
        color: var(--church-purple);
    }

    .bg-church-purple {
        background-color: var(--church-purple);
    }

    .church-red {
        color: var(--church-red);
    }

    .bg-church-red {
        background-color: var(--church-red);
    }

    .pattern-overlay {
        background-image:
            radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 2px, transparent 2px),
            radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        background-size: 50px 50px, 30px 30px;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .glass-card-dark {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    .glow {
        filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        33% {
            transform: translateY(-20px) rotate(1deg);
        }

        66% {
            transform: translateY(-10px) rotate(-1deg);
        }
    }

    .slide-left {
        animation: slideInLeft 1s ease-out;
    }

    .slide-right {
        animation: slideInRight 1s ease-out;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>


<!-- The 5 Es of AGC Section -->
<section class="py-24 bg-gradient-to-br from-white via-purple-50/30 to-red-50/30 relative overflow-hidden">
    <!-- Enhanced Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-full blur-3xl -translate-x-48 -translate-y-48 floating"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-red-500/10 to-orange-500/10 rounded-full blur-3xl translate-x-48 translate-y-48 floating" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 left-1/2 w-72 h-72 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-full blur-3xl -translate-x-36 -translate-y-36 floating" style="animation-delay: -4s;"></div>

    <!-- Floating geometric shapes -->
    <div class="absolute top-20 right-20 w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-lg rotate-45 floating"></div>
    <div class="absolute bottom-32 left-16 w-12 h-12 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full floating" style="animation-delay: -3s;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Enhanced Header -->
        <div class="text-center mb-24">
            <div class="inline-flex items-center bg-gradient-to-r from-purple-500/10 via-pink-500/10 to-red-500/10 rounded-full px-10 py-5 mb-8 border border-purple-200/50 shadow-lg backdrop-blur-sm">
                <div class="w-4 h-4 bg-gradient-to-r from-purple-500 to-red-500 rounded-full mr-4 animate-pulse"></div>
                <span class="text-purple-700 font-bold text-xl">Our Foundation</span>
                <div class="w-4 h-4 bg-gradient-to-r from-red-500 to-purple-500 rounded-full ml-4 animate-pulse" style="animation-delay: -1s;"></div>
            </div>
            <h2 class="text-6xl md:text-8xl font-bold mb-10 leading-tight">
                <span class="gradient-text">The 5 Es</span> of AGC
            </h2>
            <p class="text-2xl text-gray-600 max-w-5xl mx-auto leading-relaxed">
                Our ministry is built on five essential pillars that guide everything we do, from sharing the Gospel to serving our community with <span class="text-purple-600 font-semibold">compassion</span> and <span class="text-red-600 font-semibold">purpose</span>.
            </p>
        </div>

        <!-- Enhanced Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-8xl mx-auto mb-20">
            <!-- 1. Evangelizing the Lost -->
            <div class="card-hover group relative overflow-hidden bg-white/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-white/50 hover:border-orange-200/50">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 to-red-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-full -translate-y-20 translate-x-20"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center text-white text-3xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-lg number-circle">
                            1
                        </div>
                    </div>

                    <h3 class="text-3xl font-bold mb-6 text-gray-800 group-hover:text-orange-600 transition-colors">
                        Evangelizing the Lost
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Focused on outreach and sharing the Gospel with those outside the faith through evangelism and missions, reaching every heart with God's love.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-gradient-to-r from-orange-100 to-orange-200 text-orange-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Outreach</span>
                        <span class="bg-gradient-to-r from-red-100 to-red-200 text-red-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Missions</span>
                        <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Gospel</span>
                    </div>


                </div>
            </div>

            <!-- 2. Establishing Churches -->
            <div class="card-hover group relative overflow-hidden bg-white/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-white/50 hover:border-blue-200/50">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-indigo-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-full -translate-y-20 translate-x-20"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center text-white text-3xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-church"></i>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-lg number-circle">
                            2
                        </div>
                    </div>

                    <h3 class="text-3xl font-bold mb-6 text-gray-800 group-hover:text-blue-600 transition-colors">
                        Establishing Churches
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Planting and forming local congregations with solid structures, worship practices, and physical sanctuaries that serve as beacons of hope.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Church Planting</span>
                        <span class="bg-gradient-to-r from-indigo-100 to-indigo-200 text-indigo-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Worship</span>
                        <span class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Community</span>
                    </div>


                </div>
            </div>

            <!-- 3. Edifying Believers -->
            <div class="card-hover group relative overflow-hidden bg-white/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-white/50 hover:border-green-200/50">
                <div class="absolute inset-0 bg-gradient-to-br from-green-50/50 to-emerald-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-full -translate-y-20 translate-x-20"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white text-3xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-lg number-circle">
                            3
                        </div>
                    </div>

                    <h3 class="text-3xl font-bold mb-6 text-gray-800 group-hover:text-green-600 transition-colors">
                        Edifying Believers
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Strengthening spiritual growth and maturity through discipleship, and ministry to children, youth, men, and women, building strong foundations.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Discipleship</span>
                        <span class="bg-gradient-to-r from-emerald-100 to-emerald-200 text-emerald-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Growth</span>
                        <span class="bg-gradient-to-r from-teal-100 to-teal-200 text-teal-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Ministry</span>
                    </div>


                </div>
            </div>

            <!-- 4. Equipping Leaders -->
            <div class="card-hover group relative overflow-hidden bg-white/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-white/50 hover:border-purple-200/50">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-50/50 to-violet-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-purple-500/10 to-violet-500/10 rounded-full -translate-y-20 translate-x-20"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white text-3xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-violet-500 rounded-full flex items-center justify-center text-white font-bold text-lg number-circle">
                            4
                        </div>
                    </div>

                    <h3 class="text-3xl font-bold mb-6 text-gray-800 group-hover:text-purple-600 transition-colors">
                        Equipping Leaders
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Training and preparing church leaders at all levels—through leadership development and schools—to guide the church effectively into the future.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Leadership</span>
                        <span class="bg-gradient-to-r from-violet-100 to-violet-200 text-violet-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Training</span>
                        <span class="bg-gradient-to-r from-indigo-100 to-indigo-200 text-indigo-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Development</span>
                    </div>


                </div>
            </div>

            <!-- 5. Exercising Compassion -->
            <div class="card-hover group relative overflow-hidden bg-white/80 backdrop-blur-sm rounded-3xl p-10 shadow-2xl border border-white/50 hover:border-pink-200/50 md:col-start-2 lg:col-start-2">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-50/50 to-rose-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-pink-500/10 to-rose-500/10 rounded-full -translate-y-20 translate-x-20"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-r from-pink-500 to-rose-500 flex items-center justify-center text-white text-3xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-2xl">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center text-white font-bold text-lg number-circle">
                            5
                        </div>
                    </div>

                    <h3 class="text-3xl font-bold mb-6 text-gray-800 group-hover:text-pink-600 transition-colors">
                        Exercising Compassion
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Responding to community needs holistically, offering physical care through relief, development, health, advocacy, and rehabilitation programs.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-gradient-to-r from-pink-100 to-pink-200 text-pink-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Relief</span>
                        <span class="bg-gradient-to-r from-rose-100 to-rose-200 text-rose-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Healthcare</span>
                        <span class="bg-gradient-to-r from-red-100 to-red-200 text-red-800 px-4 py-2 rounded-full text-sm font-semibold shadow-sm hover-lift">Advocacy</span>
                    </div>


                </div>
            </div>

            <!-- Enhanced CTA Button -->
            <div class="lg:col-start-3 flex items-center justify-center">
                <div class="group relative">
                    <!-- Glowing background effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-pulse"></div>
                    <a href="/ministries" class="inline-block group">
                        <button class="relative bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 text-white font-bold py-8 px-12 rounded-3xl transition-all duration-500 hover:scale-105 shadow-2xl group-hover:shadow-purple-500/25 overflow-hidden">
                            <!-- Shimmer effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>

                            <div class="relative flex items-center justify-center text-xl">
                                <div class="mr-4 group-hover:animate-bounce">
                                    <i class="fas fa-hands-praying text-2xl"></i>
                                </div>
                                <div class="text-center">
                                    <div class="font-black text-2xl mb-1">Be Part of Our Mission</div>
                                    <div class="text-sm opacity-90 font-medium">Join the Movement</div>
                                </div>
                                <div class="ml-4 group-hover:translate-x-2 transition-transform duration-300">
                                    <i class="fas fa-arrow-right text-xl"></i>
                                </div>
                            </div>

                            <!-- Floating particles effect -->
                            <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
                                <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-ping" style="animation-delay: 0s;"></div>
                                <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-yellow-300/50 rounded-full animate-ping" style="animation-delay: 1s;"></div>
                                <div class="absolute bottom-1/4 left-3/4 w-1.5 h-1.5 bg-white/20 rounded-full animate-ping" style="animation-delay: 2s;"></div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>




<!-- Call to Action Section -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-church-purple via-purple-800 to-church-red"></div>
    <div class="absolute inset-0 pattern-overlay"></div>

    <!-- Floating Elements -->
    <div class="absolute top-20 left-20 floating glow">
        <div class="w-8 h-8 bg-white/20 rounded-full"></div>
    </div>
    <div class="absolute bottom-20 right-20 floating glow" style="animation-delay: -2s;">
        <div class="w-6 h-6 bg-yellow-400/30 rounded-full"></div>
    </div>
    <div class="absolute top-1/2 left-1/4 floating glow" style="animation-delay: -4s;">
        <div class="w-4 h-4 bg-white/15 rounded-full"></div>
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
                Ready to Begin Your
                <span class="block text-yellow-400">Spiritual Journey?</span>
            </h2>
            <p class="text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed">
                Take the first step toward a life of purpose, community, and faith. We're here to welcome you with open hearts and open arms.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
                <a href="/ministries" class="group relative overflow-hidden bg-white text-church-purple hover:bg-gray-100 font-bold py-6 px-12 rounded-2xl transition-all duration-300 hover:scale-105 shadow-2xl">
                    <span class="relative flex items-center justify-center text-lg">
                        <i class="fas fa-hands-helping mr-3"></i>
                        Join A Ministry
                    </span>
                </a>
                <a href="/contact" class="group glass-card hover:bg-white/20 text-white font-bold py-6 px-12 rounded-2xl transition-all duration-300 hover:scale-105 shadow-2xl">
                    <span class="flex items-center justify-center text-lg">
                        <i class="fas fa-envelope mr-3"></i>
                        Contact Us
                    </span>
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
    // Enhanced interaction effects
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effects to cards
        const cards = document.querySelectorAll('.card-hover');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add click animation to main CTA button
        const ctaButton = document.querySelector('button[class*="from-purple-600"]');
        if (ctaButton) {
            ctaButton.addEventListener('click', function() {
                // Add ripple effect
                const ripple = document.createElement('span');
                ripple.className = 'absolute inset-0 bg-white/20 rounded-3xl animate-ping';
                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        }

        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all cards for staggered animation
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
            observer.observe(card);
        });
    });
</script>


@endsection