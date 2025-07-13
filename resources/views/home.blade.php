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

    .hero-gradient {
        background: linear-gradient(135deg, rgba(88, 44, 131, 0.9), rgba(237, 28, 36, 0.8));
    }

    .card-hover {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-hover:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .morphism {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.12);
    }

    .pattern-overlay {
        background-image: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.1) 1px, transparent 0);
        background-size: 20px 20px;
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-church-purple via-purple-800 to-church-red"></div>
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

    <!-- Main Content -->
    <div class="relative z-10 container mx-auto px-6 lg:px-16">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
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
                    <a href="/visit" class="group relative overflow-hidden bg-gradient-to-r from-purple-500 via-pink-500 to-purple-600 hover:from-pink-500 hover:via-purple-500 hover:to-pink text-white font-semibold py-4 px-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:scale-105 inline-block">
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
                        <span class="relative flex items-center justify-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Visit Us Today
                        </span>
                    </a>
                    <button class="group relative overflow-hidden bg-gradient-to-r from-purple-500 via-pink-500 to-purple-600 hover:from-pink-500 hover:via-purple-500 hover:to-pink text-white font-semibold py-4 px-8 rounded-2xl transition-all duration-300 hover:shadow-2xl hover:scale-105">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-play mr-2"></i>
                            Watch Live
                        </span>
                    </button>
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
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 via-white to-purple-50 relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-church-purple/5 rounded-full -translate-x-48 -translate-y-48"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-church-red/5 rounded-full translate-x-48 translate-y-48"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-church-purple/10 rounded-full px-6 py-3 mb-6">
                <i class="fas fa-star text-church-purple mr-2"></i>
                <span class="text-church-purple font-semibold">Our Foundation</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Mission</span> & <span class="gradient-text">Vision</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Guided by God's love, we strive to impact lives and transform communities through faith, hope, and action.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
            <!-- Vision Card -->
            <div class="card-hover group">
                <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-church-purple via-purple-600 to-purple-700 p-8 h-full">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 30px 30px;"></div>
                    </div>

                    <div class="relative z-10">
                        <div class="flex items-center mb-8">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-eye text-3xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-3xl font-bold text-white">Our Vision</h3>
                                <p class="text-purple-100">Where we're heading</p>
                            </div>
                        </div>

                        <blockquote class="text-2xl font-bold text-white mb-8 leading-relaxed">
                            "The Whole Church taking the Whole Gospel to the Whole World"
                        </blockquote>

                        <div class="space-y-4">
                            <div class="flex items-center text-purple-100">
                                <i class="fas fa-globe-americas mr-3 text-white/80"></i>
                                <span>Global Impact & Outreach</span>
                            </div>
                            <div class="flex items-center text-purple-100">
                                <i class="fas fa-hands-praying mr-3 text-white/80"></i>
                                <span>Spiritual Transformation</span>
                            </div>
                            <div class="flex items-center text-purple-100">
                                <i class="fas fa-heart mr-3 text-white/80"></i>
                                <span>Community Unity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission Card -->
            <div class="card-hover group">
                <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-church-red via-red-500 to-red-600 p-8 h-full">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 30px 30px;"></div>
                    </div>

                    <div class="relative z-10">
                        <div class="flex items-center mb-8">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-compass text-3xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-3xl font-bold text-white">Our Mission</h3>
                                <p class="text-red-100">How we serve</p>
                            </div>
                        </div>

                        <p class="text-lg text-white/95 mb-8 leading-relaxed">
                            To fulfill the Great Commandment and Great Commission of Jesus Christ, spreading love, hope, and salvation to all people through God's grace.
                        </p>

                        <div class="flex flex-wrap gap-3 mb-6">
                            <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-white font-medium">Mark 12:30-31</span>
                            <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-white font-medium">Matthew 28:19-20</span>
                            <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-white font-medium">Acts 1:8</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The 5 Es of AGC Section -->
<section class="py-24 bg-gradient-to-br from-white via-purple-50/30 to-red-50/30 relative overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-church-purple/5 rounded-full blur-3xl -translate-x-36 -translate-y-36"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-church-red/5 rounded-full blur-3xl translate-x-48 translate-y-48"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl -translate-x-32 -translate-y-32"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-gradient-to-r from-church-purple/10 to-church-red/10 rounded-full px-8 py-4 mb-8 border border-purple-200/50">
                <div class="w-3 h-3 bg-gradient-to-r from-church-purple to-church-red rounded-full mr-3 animate-pulse"></div>
                <span class="text-church-purple font-bold text-lg">Our Foundation</span>
            </div>
            <h2 class="text-5xl md:text-7xl font-bold mb-8">
                <span class="gradient-text">The 5 Es</span> of AGC
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Our ministry is built on five essential pillars that guide everything we do, from sharing the Gospel to serving our community with compassion and purpose.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- 1. Evangelizing the Lost -->
            <div class="card-hover group relative overflow-hidden bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:border-orange-200">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center text-white text-2xl mr-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            1
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Evangelizing the Lost</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Focused on outreach and sharing the Gospel with those outside the faith through evangelism and missions, reaching every heart with God's love.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm font-medium">Outreach</span>
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Missions</span>
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">Gospel</span>
                    </div>
                </div>
            </div>

            <!-- 2. Establishing Churches -->
            <div class="card-hover group relative overflow-hidden bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:border-blue-200">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center text-white text-2xl mr-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <i class="fas fa-church"></i>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            2
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Establishing Churches</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Planting and forming local congregations with solid structures, worship practices, and physical sanctuaries that serve as beacons of hope.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Church Planting</span>
                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">Worship</span>
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Community</span>
                    </div>
                </div>
            </div>

            <!-- 3. Edifying Believers -->
            <div class="card-hover group relative overflow-hidden bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:border-green-200">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center text-white text-2xl mr-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            3
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Edifying Believers</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Strengthening spiritual growth and maturity through discipleship, and ministry to children, youth, men, and women, building strong foundations.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">Discipleship</span>
                        <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-medium">Growth</span>
                        <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm font-medium">Ministry</span>
                    </div>
                </div>
            </div>

            <!-- 4. Equipping Leaders -->
            <div class="card-hover group relative overflow-hidden bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:border-purple-200">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-violet-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-purple-500 to-violet-500 flex items-center justify-center text-white text-2xl mr-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-violet-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            4
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Equipping Leaders</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Training and preparing church leaders at all levels—through leadership development and schools—to guide the church effectively into the future.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-medium">Leadership</span>
                        <span class="bg-violet-100 text-violet-700 px-3 py-1 rounded-full text-sm font-medium">Training</span>
                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium">Development</span>
                    </div>
                </div>
            </div>

            <!-- 5. Exercising Compassion -->
            <div class="card-hover group relative overflow-hidden bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:border-pink-200 md:col-start-2 lg:col-start-2">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-500/10 to-rose-500/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-pink-500 to-rose-500 flex items-center justify-center text-white text-2xl mr-4 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="w-8 h-8 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            5
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Exercising Compassion</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Responding to community needs holistically, offering physical care through relief, development, health, advocacy, and rehabilitation programs.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm font-medium">Relief</span>
                        <span class="bg-rose-100 text-rose-700 px-3 py-1 rounded-full text-sm font-medium">Healthcare</span>
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Advocacy</span>
                    </div>
                </div>
            </div>
            <a href="/ministries" class="bg-gradient-to-r from-church-purple via-purple-600 to-church-red hover:from-purple-600 hover:via-red-500 hover:to-red-600 text-white font-bold py-6 px-12 rounded-2xl transition-all duration-300 hover:scale-105 shadow-xl">
                <span class="flex items-center justify-center text-lg">
                    <i class="fas fa-arrow-right mr-3"></i>
                    Be Part of Our Mission
                </span>
            </a>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-20">
            <div class="inline-flex items-center bg-gradient-to-r from-church-purple/5 to-church-red/5 rounded-full px-8 py-4 mb-8">
                <i class="fas fa-hands-praying text-church-purple mr-3"></i>
                <span class="text-gray-700 font-semibold">Join us in living out these values</span>
            </div>

        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-purple-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-church-purple/10 rounded-full px-6 py-3 mb-6">
                <i class="fas fa-calendar-alt text-church-purple mr-2"></i>
                <span class="text-church-purple font-semibold">Join Us</span>
            </div>
            <h2 class="text-5xl md:text-6xl font-bold mb-6 gradient-text">Upcoming Events</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Connect, grow, and worship together through our inspiring events and programs.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Event Cards -->
            <div class="card-hover bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-church-purple to-purple-600 text-white p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm opacity-90 mb-1">MAY</div>
                            <div class="text-4xl font-bold">26</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">Start Time</div>
                            <div class="text-xl font-semibold">10:00 AM</div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Sunday Worship Service</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Join us for an inspiring worship experience with contemporary music and powerful preaching.</p>
                    <button class="w-full bg-church-purple hover:bg-purple-600 text-white font-semibold py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </button>
                </div>
            </div>

            <div class="card-hover bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-church-red to-red-600 text-white p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm opacity-90 mb-1">MAY</div>
                            <div class="text-4xl font-bold">29</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">Start Time</div>
                            <div class="text-xl font-semibold">8:30 PM</div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Bible Study Group</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Deep dive into God's word with our midweek Bible study focusing on practical life applications.</p>
                    <button class="w-full bg-church-red hover:bg-red-600 text-white font-semibold py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </button>
                </div>
            </div>

            <div class="card-hover bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm opacity-90 mb-1">JUN</div>
                            <div class="text-4xl font-bold">02</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">Start Time</div>
                            <div class="text-xl font-semibold">9:00 AM</div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Community Outreach</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Join us in serving our local community through various charitable activities and volunteer work.</p>
                    <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center mt-16">
            <button class="bg-gradient-to-r from-church-purple to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-4 px-12 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">
                <span class="flex items-center justify-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    View All Events
                </span>
            </button>
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
                <a href="/visit" class="group relative overflow-hidden bg-white text-church-purple hover:bg-gray-100 font-bold py-6 px-12 rounded-2xl transition-all duration-300 hover:scale-105 shadow-2xl">
                    <span class="relative flex items-center justify-center text-lg">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        Plan Your Visit
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
</script>


@endsection