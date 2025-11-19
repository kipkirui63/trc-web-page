@extends('layouts.app')

@section('title', 'Women\'s Ministry - Sisterhood')
@section('description', 'Join our vibrant sisterhood at TRC AGC Church. Connect, grow, and flourish together in faith, friendship, and divine purpose.')

@section('styles')
<style>
    :root {
        --church-purple: #7c3aed;
        --church-red: #dc2626;
        --church-yellow: #f59e0b;
        --rose-pink: #f43f5e;
        --soft-pink: #fce7f3;
        --lavender: #ddd6fe;
        --electric-purple: #8b5cf6;
        --hot-pink: #ec4899;
        --coral: #f97316;
        --gold: #f59e0b;
        --deep-purple: #6366f1;
        --gradient-main: linear-gradient(135deg, #8b5cf6 0%, #ec4899 50%, #f97316 100%);
        --gradient-alt: linear-gradient(45deg, #6366f1, #8b5cf6, #ec4899, #f97316);
    }

    .sisterhood-hero {
        background: linear-gradient(135deg, var(--church-purple) 0%, var(--rose-pink) 40%, var(--church-red) 70%, var(--church-yellow));
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .sisterhood-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M50 30c11.046 0 20 8.954 20 20s-8.954 20-20 20-20-8.954-20-20 8.954-20 20-20zm0 5c-8.284 0-15 6.716-15 15s6.716 15 15 15 15-6.716 15-15-6.716-15-15-15z'/%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.6;
    }

    .floating-hearts {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .heart {
        position: absolute;
        color: rgba(255, 255, 255, 0.1);
        font-size: 2rem;
        animation: float-hearts 12s ease-in-out infinite;
    }

    .heart:nth-child(1) {
        left: 10%;
        top: 20%;
        animation-delay: 0s;
    }

    .heart:nth-child(2) {
        left: 85%;
        top: 15%;
        animation-delay: 3s;
    }

    .heart:nth-child(3) {
        left: 15%;
        bottom: 25%;
        animation-delay: 6s;
    }

    .heart:nth-child(4) {
        right: 10%;
        bottom: 20%;
        animation-delay: 9s;
    }

    .heart:nth-child(5) {
        left: 70%;
        top: 60%;
        animation-delay: 2s;
    }

    .heart:nth-child(6) {
        left: 30%;
        top: 70%;
        animation-delay: 8s;
    }

    @keyframes float-hearts {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg) scale(1);
            opacity: 0.1;
        }

        25% {
            transform: translateY(-20px) rotate(5deg) scale(1.1);
            opacity: 0.15;
        }

        50% {
            transform: translateY(-10px) rotate(-3deg) scale(0.9);
            opacity: 0.12;
        }

        75% {
            transform: translateY(-25px) rotate(8deg) scale(1.05);
            opacity: 0.18;
        }
    }

    .sisterhood-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(244, 63, 94, 0.2);
        border-radius: 28px;
        box-shadow: 0 8px 32px rgba(124, 58, 237, 0.15);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        overflow: hidden;
        position: relative;
    }

    .sisterhood-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--church-purple), var(--rose-pink), var(--church-red));
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .sisterhood-card:hover::before {
        opacity: 1;
    }

    .sisterhood-card:hover {
        transform: translateY(-20px) rotateX(3deg);
        box-shadow: 0 30px 60px rgba(244, 63, 94, 0.25);
        border-color: rgba(244, 63, 94, 0.4);
    }

    .circle-icon {
        background: linear-gradient(135deg, var(--church-purple), var(--rose-pink));
        transition: all 0.5s ease;
        position: relative;
        overflow: hidden;
    }

    .circle-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, var(--rose-pink), var(--church-red));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .sisterhood-card:hover .circle-icon::before {
        opacity: 1;
    }

    .sisterhood-card:hover .circle-icon {
        transform: scale(1.15) rotate(15deg);
    }

    .gradient-text {
        background: linear-gradient(135deg, var(--church-purple), var(--rose-pink), var(--church-red));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        background-size: 200% 200%;
        animation: gradient-flow 4s ease-in-out infinite;
    }

    @keyframes gradient-flow {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    .vision-card {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.05), rgba(244, 63, 94, 0.08));
        backdrop-filter: blur(10px);
        border-radius: 24px;
        border: 1px solid rgba(244, 63, 94, 0.15);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .vision-card::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 1px;
        height: 100%;
        background: linear-gradient(180deg, var(--church-purple), var(--rose-pink), var(--church-red));
        transform: scaleY(0);
        transition: transform 0.4s ease;
    }

    .vision-card:hover::after {
        transform: scaleY(1);
    }

    .vision-card:hover {
        transform: translateX(8px);
        box-shadow: 0 20px 40px rgba(244, 63, 94, 0.15);
        border-color: rgba(244, 63, 94, 0.3);
    }

    .growth-path {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        border: 2px solid transparent;
        background-clip: padding-box;
        position: relative;
        transition: all 0.5s ease;
    }

    .growth-path::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, var(--church-purple), var(--rose-pink), var(--church-red), var(--church-yellow));
        border-radius: 20px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .growth-path:hover::before {
        opacity: 1;
    }

    .growth-path:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(244, 63, 94, 0.2);
    }

    .community-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .community-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(252, 231, 243, 0.9));
        backdrop-filter: blur(15px);
        border-radius: 24px;
        border: 1px solid rgba(244, 63, 94, 0.2);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
    }

    .community-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 0deg, var(--church-purple), var(--rose-pink), var(--church-red), var(--church-yellow), var(--church-purple));
        opacity: 0;
        transition: opacity 0.3s ease;
        animation: rotate-gradient 10s linear infinite;
    }

    .community-card:hover::before {
        opacity: 0.03;
    }

    @keyframes rotate-gradient {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .community-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 25px 50px rgba(244, 63, 94, 0.2);
    }

    .ripple-button {
        background: linear-gradient(135deg, var(--church-purple), var(--rose-pink));
        border-radius: 50px;
        border: none;
        color: white;
        padding: 1rem 2.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .ripple-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .ripple-button:hover::before {
        left: 100%;
    }

    .ripple-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(244, 63, 94, 0.4);
        background: linear-gradient(135deg, var(--rose-pink), var(--church-red));
    }


    .connection-web {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .connection-line {
        position: absolute;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(244, 63, 94, 0.2), transparent);
        animation: pulse-line 3s ease-in-out infinite;
    }

    @keyframes pulse-line {

        0%,
        100% {
            opacity: 0.2;
        }

        50% {
            opacity: 0.6;
        }
    }

    .hero-crown {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(15px);
        border-radius: 50%;
        padding: 2rem;
        animation: gentle-pulse 4s ease-in-out infinite;
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    /* Slideshow Section */
    .slideshow-container {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 0px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .slide {
        position: relative;
        width: 100%;
        height: 500px;
        display: none;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .slide.active {
        display: block;
        opacity: 1;

    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
                rgba(0, 0, 0, 0.3) 0%,
                rgba(236, 72, 153, 0.2) 50%,
                rgba(0, 0, 0, 0.4) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .slide-content {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .slide-content img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 0px;
        transition: opacity 0.5s ease-in-out;


    }

    @keyframes zoomInOut {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }


    /* Navigation arrows */
    .nav-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: #333;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .nav-arrow:hover {
        background: white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .prev {
        left: 20px;
    }

    .next {
        right: 20px;
    }

    /* Dots indicator */
    .dots-container {
        text-align: center;
        padding: 20px 0;
        background: rgba(245, 245, 247, 0.8);
    }

    .dot {
        height: 12px;
        width: 12px;
        margin: 0 5px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .dot.active,
    .dot:hover {
        background-color: #ec4899;
        transform: scale(1.2);
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .slide {
            height: 300px;
        }

        .slide-text {
            bottom: 10px;
            left: 10px;
            right: 10px;
            padding: 15px;
        }

        .slide-text h3 {
            font-size: 1.2rem;
        }

        .nav-arrow {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        .slide {
            height: 250px;
        }
    }


    .value-badge {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        padding: 0.5rem 1.5rem;
        color: white;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .value-badge:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .sisterhood-hero {
            min-height: 90vh;
            padding: 2rem 0;
        }

        .community-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .hero-crown {
            padding: 1.5rem;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="sisterhood-hero text-white">
    <div class="floating-hearts">
        <div class="heart"><i class="fas fa-heart"></i></div>
        <div class="heart"><i class="fas fa-heart"></i></div>
        <div class="heart"><i class="fas fa-heart"></i></div>
        <div class="heart"><i class="fas fa-heart"></i></div>
        <div class="heart"><i class="fas fa-heart"></i></div>
        <div class="heart"><i class="fas fa-heart"></i></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <div class="space-y-8">
                <!-- Hero Crown -->
                <div class="hero-crown">
                    <i class="fas fa-crown text-5xl text-yellow-300"></i>
                </div>

                <!-- Main Heading -->
                <div class="space-y-6">
                    <h1 class="text-6xl md:text-8xl font-black leading-tight">
                        Beautiful
                        <span class="block bg-gradient-to-r from-yellow-300 via-pink-200 to-yellow-300 bg-clip-text text-transparent">
                            Sisterhood
                        </span>
                    </h1>
                    <p class="text-xl md:text-2xl opacity-90 leading-relaxed max-w-4xl mx-auto">
                        Where women of faith gather to grow, support, and inspire each other in their journey with Christ.
                        <span class="text-pink-200 font-semibold">You belong here, sister.</span>
                    </p>
                </div>

                <!-- Values Badges -->
                <div class="flex flex-wrap justify-center gap-4 pt-8">
                    <span class="value-badge">Faith</span>
                    <span class="value-badge">Friendship</span>
                    <span class="value-badge">Growth</span>
                    <span class="value-badge">Purpose</span>
                    <span class="value-badge">Community</span>
                </div>

                <!-- Call to Actions -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
                    <button class="ripple-button text-lg">
                        <i class="fas fa-hand-holding-heart mr-3"></i>
                        Join Our Sisterhood
                    </button>
                    <button class="ripple-button text-lg" style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
                        <i class="fas fa-calendar-heart mr-3"></i>
                        Connect With Us
                    </button>
                </div>


                <br />
                <br />
            </div>
        </div>
    </div>
</section>

</br>
</br>

<!-- Slideshow Section -->
<section class="slideshow-section">
    <div class="slideshow-container">
        <div class="slide active" style="background-image: linear-gradient(45deg, rgba(245, 245, 247, 0.3), rgba(236, 72, 153, 0.3)), url('data:image/svg+xml,%3Csvg viewBox=\'0 0 400 300\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23ec4899\'/%3E%3Ctext x=\'200\' y=\'150\' text-anchor=\'middle\' dominant-baseline=\'middle\' fill=\'white\' font-family=\'Arial\' font-size=\'20\'%3E%3C/text%3E%3C/svg%3E');">
            <div class="slide-overlay">
                <div class="slide-content">
                </div>
            </div>

            <div class="slide" style="background-image: linear-gradient(45deg, rgba(139, 92, 246, 0.3), rgba(236, 72, 153, 0.3)), url('data:image/svg+xml,%3Csvg viewBox=\'0 0 400 300\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%238b5cf6\'/%3E%3Ctext x=\'200\' y=\'150\' text-anchor=\'middle\' dominant-baseline=\'middle\' fill=\'white\' font-family=\'Arial\' font-size=\'18\'%3E %3C/text%3E%3C/svg%3E');">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <img src="{{ asset('images/ladies2.webp') }}" alt="Ladies 1" class="w-full h-80 lg:h-full object-cover" />
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: linear-gradient(45deg, rgba(139, 92, 246, 0.3), rgba(236, 72, 153, 0.3)), url('data:image/svg+xml,%3Csvg viewBox=\'0 0 400 300\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23f97316\'/%3E%3Ctext x=\'200\' y=\'150\' text-anchor=\'middle\' dominant-baseline=\'middle\' fill=\'white\' font-family=\'Arial\' font-size=\'20\'%3E%3C/text%3E%3C/svg%3E');">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <img src="{{ asset('images/ladies1.webp') }}" alt="Ladies 1" class="w-full h-80 lg:h-full object-cover" />
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: linear-gradient(45deg, rgba(139, 92, 246, 0.3), rgba(236, 72, 153, 0.3)), url('data:image/svg+xml,%3Csvg viewBox=\'0 0 400 300\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%23f59e0b\'/%3E%3Ctext x=\'200\' y=\'150\' text-anchor=\'middle\' dominant-baseline=\'middle\' fill=\'white\' font-family=\'Arial\' font-size=\'18\'%3E%3C/text%3E%3C/svg%3E');">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <img src="{{ asset('images/ladies1.webp') }}" alt="Ladies 1" class="w-full h-80 lg:h-full object-cover" />
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: linear-gradient(45deg, rgba(139, 92, 246, 0.3), rgba(236, 72, 153, 0.3)), url('data:image/svg+xml,%3Csvg viewBox=\'0 0 400 300\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'400\' height=\'300\' fill=\'%236366f1\'/%3E%3Ctext x=\'200\' y=\'150\' text-anchor=\'middle\' dominant-baseline=\'middle\' fill=\'white\' font-family=\'Arial\' font-size=\'20\'%3E%3C/text%3E%3C/svg%3E');">
                <div class="slide-overlay">
                    <div class="slide-content">
                        <img src="{{ asset('images/ladies1.webp') }}" alt="Ladies 1" class="w-full h-80 lg:h-full object-cover" />
                    </div>
                </div>
            </div>
        </div>

        <div class="slideshow-nav">
            <div class="nav-dot active" onclick="currentSlide(1)"></div>
            <div class="nav-dot" onclick="currentSlide(2)"></div>
            <div class="nav-dot" onclick="currentSlide(3)"></div>
            <div class="nav-dot" onclick="currentSlide(4)"></div>
            <div class="nav-dot" onclick="currentSlide(5)"></div>
        </div>
</section>

<!-- Our Heart Section -->
<section class="py-24 bg-gradient-to-br from-purple-50 via-pink-50 to-red-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Our Heart</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We exist to create a safe space where women can discover their identity in Christ,
                build authentic relationships, and live out their God-given purpose.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Vision -->
            <div class="vision-card p-8">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-eye text-3xl text-white relative z-10"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Our Vision</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    To see every woman walk confidently in her calling, supported by a community of sisters
                    who celebrate her journey and cheer her on to greatness.
                </p>
            </div>

            <!-- Mission -->
            <div class="vision-card p-8">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-3xl text-white relative z-10"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Our Mission</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    To nurture authentic relationships, provide biblical teaching, and create opportunities
                    for women to grow spiritually, emotionally, and relationally.
                </p>
            </div>

            <!-- Values -->
            <div class="vision-card p-8">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-gem text-3xl text-white relative z-10"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Our Values</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Authenticity over perfection, grace over judgment, community over competition,
                    and Christ as the center of everything we do.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Growth Paths Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Paths of Growth</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Every season of life offers opportunities for growth. Find your path and flourish in community.
            </p>
        </div>

        <div class="space-y-8 max-w-5xl mx-auto">
            <!-- Spiritual Growth -->
            <div class="growth-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-pray text-4xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-3xl font-bold text-gray-800 mb-3">Spiritual Growth</h3>
                        <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                            Deepen your relationship with God through Bible study, prayer groups, and spiritual mentorship.
                            Discover who you are in Christ and walk confidently in His plans for your life.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">Bible Study</span>
                            <span class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full text-sm font-medium">Prayer Ministry</span>
                            <span class="px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-medium">Mentorship</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Development -->
            <div class="growth-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-pink-500 to-red-500 rounded-3xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-seedling text-4xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-3xl font-bold text-gray-800 mb-3">Personal Development</h3>
                        <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                            Grow in confidence, discover your gifts, and develop practical life skills.
                            We believe every woman has unique talents that deserve to be nurtured and celebrated.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full text-sm font-medium">Life Skills</span>
                            <span class="px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-medium">Leadership</span>
                            <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">Confidence Building</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Relational Connection -->
            <div class="growth-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-red-500 to-yellow-500 rounded-3xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-users text-4xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-3xl font-bold text-gray-800 mb-3">Relational Connection</h3>
                        <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                            Build meaningful friendships. Whether you're single, married, a mom, or career-focused,
                            there's a place for you in our community of sisters.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-medium">Small Groups</span>
                            <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">Fellowship</span>
                            <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">Support Networks</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service & Impact -->
            <div class="growth-path p-8">
                <div class="flex items-center space-x-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-yellow-500 to-purple-500 rounded-3xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-hands-helping text-4xl text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-3xl font-bold text-gray-800 mb-3">Service & Impact</h3>
                        <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                            Use your gifts to make a difference in our church and community.
                            From serving in ministries to outreach programs, find meaningful ways to impact lives.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">Ministry Teams</span>
                            <span class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">Community Outreach</span>
                            <span class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full text-sm font-medium">Global Missions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women's Ministry Connections -->
<section class="py-24 bg-gradient-to-br from-purple-50 via-pink-50 to-red-50 relative">
    <div class="connection-web">
        <div class="connection-line" style="top: 20%; left: 10%; width: 200px; transform: rotate(45deg);"></div>
        <div class="connection-line" style="top: 60%; right: 15%; width: 150px; transform: rotate(-30deg);"></div>
        <div class="connection-line" style="bottom: 30%; left: 20%; width: 180px; transform: rotate(60deg);"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="gradient-text">Women's Ministry</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Together we grow in faith, encourage one another, and serve with love.
                Discover how you can be part of this sisterhood.
            </p>
        </div>

        <div class="community-grid">
            <!-- Fellowship Gatherings -->
            <div class="community-card p-8 text-center">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Fellowship Gatherings</h3>
                <p class="text-gray-600 leading-relaxed">
                    A time to connect, share meals, laugh, and strengthen friendships rooted in Christ.
                </p>
            </div>

            <!-- Bible Study -->
            <div class="community-card p-8 text-center">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-book-bible text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Bible Study</h3>
                <p class="text-gray-600 leading-relaxed">
                    Growing together in the Word of God through study, reflection, and discussion.
                </p>
            </div>

            <!-- Prayer & Intercession -->
            <div class="community-card p-8 text-center">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-praying-hands text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Prayer & Intercession</h3>
                <p class="text-gray-600 leading-relaxed">
                    Standing together in prayer, lifting one another’s burdens, and interceding for our families and church.
                </p>
            </div>

            <!-- Worship & Praise -->
            <div class="community-card p-8 text-center">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-music text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Worship & Praise</h3>
                <p class="text-gray-600 leading-relaxed">
                    Celebrating God through music, dance, and joyful worship as a community of sisters.
                </p>
            </div>

            <!-- Outreach & Service -->
            <div class="community-card p-8 text-center">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hand-holding-heart text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Outreach & Service</h3>
                <p class="text-gray-600 leading-relaxed">
                    Extending love beyond our walls through acts of kindness, community service, and outreach.
                </p>
            </div>

            <!-- Encouragement & Testimonies -->
            <div class="community-card p-8 text-center">
                <div class="circle-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Encouragement & Testimonies</h3>
                <p class="text-gray-600 leading-relaxed">
                    Sharing testimonies and stories that inspire faith, hope, and strength for every season of life.
                </p>
            </div>
        </div>
    </div>
</section>




<!-- Join Us Section -->
<section class="py-24 bg-gradient-to-br from-purple-600 via-pink-600 to-red-600 text-white relative overflow-hidden">
    <div class="floating-hearts">
        <div class="heart"><i class="fas fa-star"></i></div>
        <div class="heart"><i class="fas fa-crown"></i></div>
        <div class="heart"><i class="fas fa-gem"></i></div>
        <div class="heart"><i class="fas fa-star"></i></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="hero-crown mb-8">
                <i class="fas fa-sparkles text-5xl text-yellow-300"></i>
            </div>

            <h2 class="text-5xl md:text-7xl font-black mb-8 leading-tight">
                Your Sisterhood
                <span class="block bg-gradient-to-r from-yellow-300 via-pink-200 to-yellow-300 bg-clip-text text-transparent">
                    Awaits You
                </span>
            </h2>

            <p class="text-xl md:text-2xl opacity-90 leading-relaxed mb-12">
                You don't have to walk this journey alone. Step into a community where you're celebrated,
                supported, and empowered to become everything God created you to be.
                <span class="block mt-4 text-pink-200 font-semibold">
                    Your chair at the table is waiting, sister.
                </span>
            </p>

            <div class="space-y-8">
                <!-- Main CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button class="ripple-button text-xl px-8 py-4">
                        <i class="fas fa-door-open mr-3"></i>
                        Join Our Sisterhood
                    </button>
                    <a href="mailto:women@thikaroadconnect.org	"> <button class="ripple-button text-xl px-8 py-4" style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
                            <i class="fas fa-calendar-heart mr-3"></i>
                            Contact Us Today
                        </button></a>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.nav-dot');
    let isTransitioning = false;

    function showSlide(index) {
        if (isTransitioning) return; // Prevent rapid clicking

        isTransitioning = true;
        const currentSlide = document.querySelector('.slide.active');
        const nextSlide = slides[index];

        // If it's the same slide, don't transition
        if (currentSlide === nextSlide) {
            isTransitioning = false;
            return;
        }

        // Remove active class from all dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });

        // Add active class to current dot
        dots[index].classList.add('active');

        if (currentSlide) {
            // Fade out current slide
            currentSlide.style.opacity = '0';

            setTimeout(() => {
                // Hide current slide and show next slide
                currentSlide.classList.remove('active');
                nextSlide.classList.add('active');
                nextSlide.style.opacity = '1';

                // Reset transition flag
                setTimeout(() => {
                    isTransitioning = false;
                }, 50);
            }, );
        } else {
            // First slide initialization
            nextSlide.classList.add('active');
            nextSlide.style.opacity = '1';
            isTransitioning = false;
        }
    }

    function currentSlide(index) {
        slideIndex = index - 1;
        showSlide(slideIndex);
    }

    function nextSlide() {
        if (isTransitioning) return;
        slideIndex = (slideIndex + 1) % slides.length;
        showSlide(slideIndex);
    }

    // Initialize slides with proper styling
    document.addEventListener('DOMContentLoaded', function() {
        slides.forEach((slide, index) => {
            slide.style.transition = 'opacity 0.6s ease-in-out';
            slide.style.opacity = index === 0 ? '1' : '0';
        });

        // Show first slide
        if (slides.length > 0) {
            slides[0].classList.add('active');
            if (dots.length > 0) {
                dots[0].classList.add('active');
            }
        }
    });

    // Auto-advance slides every 5 seconds
    setInterval(nextSlide, 5000);

    // Intersection Observer for smooth animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all major sections for animation
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('.identity-section, .slideshow-section, .empowerment-section, .final-cta');
        sections.forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(50px)';
            section.style.transition = 'all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            observer.observe(section);
        });
    });
</script>

@endsection