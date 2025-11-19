@extends('layouts.app')

@section('title', 'Worship Ministry - Experience God\'s Presence')
@section('description', 'Join our Worship Ministry at TRC AGC Church. Discover your calling in music, technical arts, prayer, and creative worship expression.')

@section('styles')
<style>
    :root {
        --church-purple: #7c3aed;
        --church-red: #dc2626;
        --church-yellow: #f59e0b;
    }

    .ministry-hero {
        background: linear-gradient(45deg, var(--church-purple) 0%, var(--church-red) 50%, var(--church-yellow) 100%);
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .ministry-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .worship-orb {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        animation: float-orb 8s ease-in-out infinite;
    }

    .worship-orb:nth-child(1) {
        width: 100px;
        height: 100px;
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .worship-orb:nth-child(2) {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .worship-orb:nth-child(3) {
        width: 80px;
        height: 80px;
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes float-orb {

        0%,
        100% {
            transform: translateY(0px) scale(1);
        }

        50% {
            transform: translateY(-30px) scale(1.1);
        }
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 24px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        overflow: hidden;
        position: relative;
    }

    .glass-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--church-purple), var(--church-red), var(--church-yellow));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .glass-card:hover::before {
        opacity: 1;
    }

    .glass-card:hover {
        transform: translateY(-15px) rotateX(5deg);
        box-shadow: 0 25px 50px rgba(124, 58, 237, 0.2);
    }

    .ministry-path {
        background: linear-gradient(135deg, rgba(248, 250, 252, 0.9), rgba(255, 255, 255, 0.9));
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(124, 58, 237, 0.1);
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .ministry-path::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, var(--church-purple), var(--church-red));
        transform: scaleY(0);
        transition: transform 0.4s ease;
    }

    .ministry-path:hover::after {
        transform: scaleY(1);
    }

    .ministry-path:hover {
        transform: translateX(10px);
        box-shadow: 0 15px 35px rgba(124, 58, 237, 0.15);
    }

    .experience-card {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.05), rgba(220, 38, 38, 0.05));
        border-radius: 16px;
        border: 1px solid rgba(124, 58, 237, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .experience-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 0deg, var(--church-purple), var(--church-red), var(--church-yellow), var(--church-purple));
        opacity: 0;
        transition: opacity 0.3s ease;
        animation: rotate 20s linear infinite;
    }

    .experience-card:hover::before {
        opacity: 0.1;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .gradient-text {
        background: linear-gradient(135deg, var(--church-purple), var(--church-red), var(--church-yellow));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        background-size: 200% 200%;
        animation: gradient-shift 3s ease-in-out infinite;
    }

    @keyframes gradient-shift {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    .worship-timeline {
        position: relative;
    }

    .worship-timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(180deg, var(--church-purple), var(--church-red), var(--church-yellow));
        transform: translateX(-50%);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 16px;
        height: 16px;
        background: white;
        border: 3px solid var(--church-purple);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
    }

    .timeline-content {
        width: 45%;
    }

    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 55%;
    }

    .pulse-icon {
        animation: pulse-worship 2s ease-in-out infinite;
    }

    @keyframes pulse-worship {

        0%,
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(124, 58, 237, 0.4);
        }

        50% {
            transform: scale(1.05);
            box-shadow: 0 0 0 20px rgba(124, 58, 237, 0);
        }
    }

    .ministry-quote {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(248, 250, 252, 0.9));
        backdrop-filter: blur(15px);
        border-left: 5px solid var(--church-purple);
        position: relative;
        overflow: hidden;
    }

    .ministry-quote::before {
        content: '"';
        position: absolute;
        top: -10px;
        left: 20px;
        font-size: 6rem;
        color: var(--church-purple);
        opacity: 0.1;
        font-family: serif;
    }

    .call-to-action {
        background: linear-gradient(135deg, var(--church-purple) 0%, var(--church-red) 50%, var(--church-yellow) 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-particles {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        animation: particle-float 15s linear infinite;
    }

    @keyframes particle-float {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }

    .interactive-button {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: white;
        border-radius: 50px;
        padding: 1rem 2rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .interactive-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .interactive-button:hover::before {
        left: 100%;
    }

    .interactive-button:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .ministry-stats {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .stat-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: conic-gradient(var(--church-purple) 0deg 120deg, var(--church-red) 120deg 240deg, var(--church-yellow) 240deg 360deg);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .stat-circle::before {
        content: '';
        position: absolute;
        width: 60px;
        height: 60px;
        background: white;
        border-radius: 50%;
    }

    .stat-number {
        position: relative;
        z-index: 1;
        font-weight: 800;
        color: var(--church-purple);
    }

    @media (max-width: 768px) {
        .worship-timeline::before {
            left: 30px;
        }

        .timeline-dot {
            left: 30px;
        }

        .timeline-content {
            width: calc(100% - 60px);
            margin-left: 60px !important;
        }

        .ministry-hero {
            min-height: 80vh;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="ministry-hero text-white">
    <div class="worship-orb"></div>
    <div class="worship-orb"></div>
    <div class="worship-orb"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-6xl mx-auto">
            <div class="space-y-8">


                <!-- Main Heading -->
                <div class="space-y-6">
                    <h1 class="text-6xl md:text-8xl font-black leading-tight">
                        Lift Your
                        <span class="block bg-gradient-to-r from-yellow-300 via-white to-yellow-300 bg-clip-text text-transparent">
                            Voice to Heaven
                        </span>
                    </h1>
                    <p class="text-xl md:text-3xl opacity-90 leading-relaxed max-w-4xl mx-auto">
                        Join a community of passionate worshippers using their gifts to create
                        <span class="text-yellow-300 font-semibold">transformational worship experiences</span>
                        that draw hearts closer to God
                    </p>
                </div>

                <!-- Call to Actions -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
                    <button class="interactive-button text-lg font-semibold px-8 py-4">
                        <i class="fas fa-hand-holding-heart mr-3"></i>
                        Discover Your Calling
                    </button>
                </div>

                <!-- Scripture Verse -->
                <div class="pt-12">
                    <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-2xl p-8 border border-white border-opacity-20 max-w-4xl mx-auto">
                        <p class="text-lg md:text-xl italic opacity-95 mb-4 leading-relaxed text-gray-600">
                            "Sing to the Lord a new song; sing to the Lord, all the earth.
                            Sing to the Lord, praise his name; proclaim his salvation day after day."
                        </p>
                        <div class="flex items-center justify-center space-x-4">
                            <div class="w-12 h-0.5 bg-gradient-to-r from-transparent via-yellow-300 to-transparent"></div>
                            <span class="text-yellow-300 font-semibold">Psalm 96:1-2</span>
                            <div class="w-12 h-0.5 bg-gradient-to-r from-transparent via-yellow-300 to-transparent"></div>
                        </div>
                    </div>
                </div>

                <!-- Visual Elements -->
                <div class="pt-16 flex justify-center space-x-8 opacity-60">
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center pulse-icon">
                            <i class="fas fa-microphone text-xl"></i>
                        </div>
                        <span class="text-sm">Vocals</span>
                    </div>
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center pulse-icon" style="animation-delay: 0.5s;">
                            <i class="fas fa-guitar text-xl"></i>
                        </div>
                        <span class="text-sm">Instruments</span>
                    </div>
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center pulse-icon" style="animation-delay: 1s;">
                            <i class="fas fa-sliders-h text-xl"></i>
                        </div>
                        <span class="text-sm">Tech Arts</span>
                    </div>
                    <div class="flex flex-col items-center space-y-2">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center pulse-icon" style="animation-delay: 1.5s;">
                            <i class="fas fa-handshake text-xl"></i>
                        </div>
                        <span class="text-sm">Hospitality</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Paths Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Your Ministry Path Awaits</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Every voice matters, every gift has purpose. Find where your passion meets God's calling.
            </p>
        </div>

        <div class="space-y-8 max-w-4xl mx-auto">
            <!-- Vocal Ministry -->
            <div class="ministry-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-red-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-microphone-alt text-3xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Vocal Ministry</h3>
                        <p class="text-gray-600 mb-4">Lead congregational worship, join our choir, or share your solo talents to lift hearts to heaven.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Lead Worship</span>
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Choir</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Solo Ministry</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instrumental Ministry -->
            <div class="ministry-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-yellow-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-guitar text-3xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Instrumental Ministry</h3>
                        <p class="text-gray-600 mb-4">Create the soundtrack of worship with guitars, keyboards, drums, and orchestral instruments.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Guitar</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Keys</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Drums</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">Orchestra</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Arts -->
            <div class="ministry-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-purple-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-sliders-h text-3xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Technical Arts</h3>
                        <p class="text-gray-600 mb-4">Bring worship to life through sound engineering, lighting design, and live streaming excellence.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Sound</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Lighting</span>
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Streaming</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Creative Arts -->
            <div class="ministry-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-yellow-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-palette text-3xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Creative Arts</h3>
                        <p class="text-gray-600 mb-4">Express worship through dance, drama, visual arts, and creative storytelling.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Dance</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Drama</span>
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Visual Arts</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Prayer Ministry -->
            <div class="ministry-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-purple-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-praying-hands text-3xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Prayer Ministry</h3>
                        <p class="text-gray-600 mb-4">Intercede for our services, support worship teams, and create spiritual covering through prayer.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Intercession</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Worship Prayer</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Spiritual Warfare</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hospitality & Ushering -->
            <div class="ministry-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-red-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-handshake text-3xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Hospitality & Ushering</h3>
                        <p class="text-gray-600 mb-4">Welcome guests with warmth, guide worship flow, and create an atmosphere where everyone feels at home.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm">Welcome Team</span>
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">Ushering</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Guest Relations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Impact & Vision -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Our Vision & Impact</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Building a culture of excellence in worship that transforms hearts and glorifies God.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Vision Statement -->
            <div class="space-y-8">
                <div class="glass-card p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-eye text-xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Our Vision</h3>
                            <p class="text-gray-600 leading-relaxed">
                                To create an atmosphere where heaven touches earth through authentic worship,
                                where every heart finds its voice, and where God's presence transforms lives.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-target text-xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Our Mission</h3>
                            <p class="text-gray-600 leading-relaxed">
                                To equip and empower worshippers to serve with excellence, grow in their gifts,
                                and lead others into genuine encounters with the living God.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-8">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-heart text-xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Our Values</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Excellence without perfection, authenticity over performance,
                                community above competition, and God's glory as our ultimate goal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Impact Metrics -->
            <div class="space-y-8">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold gradient-text mb-4">Making a Difference</h3>
                    <p class="text-gray-600">See how God is using our worship ministry to impact lives</p>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="glass-card p-6 text-center">
                        <div class="stat-circle mx-auto mb-4">
                            <div class="stat-number text-2xl">150+</div>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-1">Lives Touched</h4>
                        <p class="text-gray-600 text-sm">Weekly through worship</p>
                    </div>

                    <div class="glass-card p-6 text-center">
                        <div class="stat-circle mx-auto mb-4">
                            <div class="stat-number text-2xl">5+</div>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-1">New Members</h4>
                        <p class="text-gray-600 text-sm">Joined this year</p>
                    </div>

                    <div class="glass-card p-6 text-center">
                        <div class="stat-circle mx-auto mb-4">
                            <div class="stat-number text-2xl">12</div>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-1">Training Sessions</h4>
                        <p class="text-gray-600 text-sm">Monthly development</p>
                    </div>

                    <div class="glass-card p-6 text-center">
                        <div class="stat-circle mx-auto mb-4">
                            <div class="stat-number text-2xl">100%</div>
                        </div>
                        <h4 class="font-semibold text-gray-800 mb-1">Commitment</h4>
                        <p class="text-gray-600 text-sm">To excellence</p>
                    </div>
                </div>

                <!-- Testimonial -->
                <div class="ministry-quote rounded-2xl p-6">
                    <p class="text-lg text-gray-800 mb-4 italic">
                        "Joining the worship ministry has been life-changing. I've not only grown in my musical abilities
                        but also in my relationship with God and my church family."
                    </p>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-red-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Ruth Kirui</p>
                            <p class="text-gray-600 text-sm">Vocalist, 2 years</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Journey Timeline -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Your Journey Begins</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From discovery to deployment, we'll guide you every step of the way.
            </p>
        </div>

        <div class="worship-timeline max-w-4xl mx-auto">
            <!-- Step 1 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="experience-card p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Discover Your Gift</h3>
                                <p class="text-gray-600 mb-4">Take our spiritual gifts assessment and meet with our ministry leaders to explore where you fit best.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span>Week 1-2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="experience-card p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Training & Development</h3>
                                <p class="text-gray-600 mb-4">Participate in specialized training sessions, workshops, and mentorship programs tailored to your ministry area.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span>Week 3-6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="experience-card p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Practice & Rehearsal</h3>
                                <p class="text-gray-600 mb-4">Join regular practice sessions with your team, build relationships, and prepare for your first service.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span>Week 7-8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="experience-card p-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-red-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold">4</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Launch Into Ministry</h3>
                                <p class="text-gray-600 mb-4">Begin serving in worship services with ongoing support, feedback, and opportunities for growth.</p>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-infinity mr-2"></i>
                                    <span>Ongoing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inspirational Quote -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="ministry-quote rounded-3xl p-12 text-center">
                <p class="text-2xl md:text-3xl font-light text-gray-800 mb-6 italic leading-relaxed">
                    "Worship is not about us. It's not about getting our needs met or feeling good.
                    Worship is about declaring the worth of God and bringing glory to His name."
                </p>
                <div class="flex items-center justify-center space-x-4">
                    <div class="w-1 h-16 bg-gradient-to-b from-purple-500 to-red-500 rounded-full"></div>
                    <div>
                        <p class="font-semibold text-gray-800">Rev. Ann Korir</p>
                        <p class="text-gray-600">Pastor, TRC AGC Church</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="call-to-action py-24 text-white relative">
    <div class="cta-particles">
        <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="left: 20%; animation-delay: 3s;"></div>
        <div class="particle" style="left: 30%; animation-delay: 6s;"></div>
        <div class="particle" style="left: 40%; animation-delay: 9s;"></div>
        <div class="particle" style="left: 50%; animation-delay: 12s;"></div>
        <div class="particle" style="left: 60%; animation-delay: 2s;"></div>
        <div class="particle" style="left: 70%; animation-delay: 5s;"></div>
        <div class="particle" style="left: 80%; animation-delay: 8s;"></div>
        <div class="particle" style="left: 90%; animation-delay: 11s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="mb-8">
                <div class="inline-block w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center pulse-icon">
                    <i class="fas fa-hands text-4xl"></i>
                </div>
            </div>

            <h2 class="text-4xl md:text-6xl font-bold mb-6">
                Your Voice Matters
            </h2>
            <p class="text-xl md:text-2xl mb-8 opacity-90 leading-relaxed">
                God has placed a unique song in your heart. It's time to let it be heard.
                Join our worship ministry and become part of something eternal.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                <a href="mailto:worship@thikaroadconnectagc.org	"><button class="interactive-button text-lg font-semibold">
                        <i class="fa-solid fa-heart-circle-plus mr-3"></i>
                        Contact Us
                    </button></a>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Quick Start</h3>
                    <p class="text-sm opacity-80">Begin serving within 30 days</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Community</h3>
                    <p class="text-sm opacity-80">Join a family of worshippers</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-2xl"></i>
                    </div>
                    <h3 class="font-semibold mb-2">Growth</h3>
                    <p class="text-sm opacity-80">Continuous training & development</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Smooth scrolling for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0) scale(1)';
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.glass-card, .ministry-path, .experience-card, .ministry-quote').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px) scale(0.95)';
        element.style.transition = 'all 0.8s cubic-bezier(0.25, 0.8, 0.25, 1)';
        observer.observe(element);
    });

    // Timeline animation
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateX(0)';
                }, index * 200);
            }
        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll('.timeline-item').forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = index % 2 === 0 ? 'translateX(-50px)' : 'translateX(50px)';
        item.style.transition = 'all 0.6s ease';
        timelineObserver.observe(item);
    });

    // Interactive buttons
    document.querySelectorAll('.interactive-button').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.05)';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });

        button.addEventListener('click', function() {
            // Add ripple effect
            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.6)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.left = '50%';
            ripple.style.top = '50%';
            ripple.style.width = '20px';
            ripple.style.height = '20px';
            ripple.style.marginLeft = '-10px';
            ripple.style.marginTop = '-10px';

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Add ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .animate-in {
            animation: slideInUp 0.8s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
    `;
    document.head.appendChild(style);

    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const orbs = document.querySelectorAll('.worship-orb');

        orbs.forEach((orb, index) => {
            const speed = 0.5 + (index * 0.1);
            orb.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Stats counter animation
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumber = entry.target.querySelector('.stat-number');
                const finalNumber = statNumber.textContent;

                if (finalNumber !== '∞') {
                    let current = 0;
                    const target = parseInt(finalNumber);
                    const increment = target / 30;

                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            current = target;
                            clearInterval(timer);
                        }
                        statNumber.textContent = Math.floor(current) + (finalNumber.includes('+') ? '+' : '');
                    }, 50);
                }
            }
        });
    }, {
        threshold: 0.5
    });

    document.querySelectorAll('.ministry-stats').forEach(stat => {
        statsObserver.observe(stat);
    });
</script>
@endsection