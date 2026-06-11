@extends('layouts.app')

@section('title', 'Youth Ministry')

@section('description', 'TRC AGC Church Youth Ministry - Empowering the Next Generation for Christ')

@section('content')
<style>
    /* Red, Black & White Theme Variables */
    :root {
        --church-red: #DC2626;
        --church-red-dark: #B91C1C;
        --church-red-light: #fce4e8;
        --church-black: #000000;
        --church-gray: #4a4a4a;
        --church-light: #f8f8f8;
    }
    
    .hero-section {
        background: url('/images/youths2.JPG');
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

    .scroll-indicator {
        animation: bounce 2s infinite;
        z-index: 3;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0) scale(1); opacity: 1; }
        40% { transform: translateY(-15px) scale(1.1); opacity: 0.8; }
        60% { transform: translateY(-8px) scale(1.05); opacity: 0.9; }
    }

    .gradient-text {
        background: linear-gradient(135deg, var(--church-red), var(--church-red-dark));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Activity Cards */
    .activity-card {
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid transparent;
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .activity-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(220, 38, 38, 0.1);
        border-color: var(--church-red);
    }

    .icon-circle {
        width: 3.5rem;
        height: 3.5rem;
        border-radius: 0.875rem;
        background: var(--church-red-light);
        color: var(--church-red);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .activity-card:hover .icon-circle {
        background: var(--church-red);
        color: white;
        transform: scale(1.05);
    }

    .activity-card h3 {
        font-size: 1.25rem;
        line-height: 1.4;
    }

    .activity-card p {
        font-size: 0.9375rem;
        line-height: 1.6;
    }

    /* Stats Section */
    .stat-card {
        text-align: center;
        padding: 1.5rem;
        background: white;
        border-radius: 1rem;
        border: 1px solid rgba(220, 38, 38, 0.1);
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        border-color: var(--church-red);
        transform: scale(1.05);
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--church-red);
        margin-bottom: 0.5rem;
    }

    .stat-label {
        color: var(--church-gray);
        font-weight: 500;
    }

    /* About Section */
    .about-image-wrapper {
        position: relative;
        border-radius: 1.5rem;
        overflow: hidden;
    }

    .about-image-wrapper::before {
        content: '';
        position: absolute;
        top: -20px;
        left: -20px;
        right: 20px;
        bottom: 20px;
        border: 3px solid var(--church-red);
        border-radius: 1.5rem;
        z-index: -1;
    }

    /* CTA Section */
    .cta-section {
        background: url('/images/youths4.JPG');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.1;
    }

    .info-box {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 1rem;
        padding: 1.5rem;
        text-align: center;
        transition: all 0.3s ease;
    }

    .info-box:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
    }

    .btn-primary {
        background: white;
        color: var(--church-red);
        font-weight: 700;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn-primary:hover {
        background: var(--church-black);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
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

    .badge {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        background: var(--church-red);
        color: white;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
</style>

<!-- Hero Section -->
<section class="hero-section flex items-center justify-center relative min-h-screen">
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute bottom-40 left-20 w-24 h-24 bg-white/10 rounded-full floating-element"></div>
    <div class="absolute bottom-20 right-10 w-18 h-18 bg-white/10 rounded-full floating-element"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto text-center text-white">
            <!-- Main Content -->
            <div class="mb-12">
                <!-- Subtitle -->
                <div class="mb-8">
                    <span class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur rounded-full text-white/90 font-semibold text-lg border border-white/30">
                        <i class="fas fa-users mr-3 text-xl"></i>
                        Youth Ministry
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-6xl md:text-8xl lg:text-9xl font-black mb-8 leading-tight">
                    <span class="block mb-2">YOUTH</span>
                </h1>

                <!-- Description -->
                <p class="text-2xl md:text-4xl mb-4 max-w-4xl mx-auto font-light">
                    Where Faith Meets <span class="font-bold">Adventure</span>
                </p>
                <p class="text-lg md:text-xl mb-12 max-w-2xl mx-auto text-white/90">
                    Building Community, Growing Faith, Making Memories
                </p>

                <a href="#about" class="btn-primary">
                    Join Our Family
                    <i class="fas fa-arrow-right"></i>
                </a>
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

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="about-image-wrapper">
                    <img src="{{ asset('images/youths3.JPG') }}" 
                         alt="Youth group gathering" 
                         class="w-full h-auto rounded-2xl shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-red-600 text-white p-4 rounded-lg shadow-lg z-10">
                        <div class="text-2xl font-bold">All Ages</div>
                        <div class="text-sm">Welcome!</div>
                    </div>
                </div>
                <div>
                    <span class="badge mb-4">
                        <i class="fas fa-heart mr-2"></i>
                        About Us
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold section-title mb-6">
                        This Is <span class="gradient-text">Us</span>
                    </h2>
                    <div class="title-underline" style="margin-left: 0;"></div>
                    <p class="text-xl text-gray-600 mb-6 leading-relaxed">
                        We're a vibrant community of young people who believe that faith should be
                        <span class="text-red-600 font-semibold">real</span>,
                        <span class="text-red-600 font-semibold">relevant</span>, and
                        <span class="text-red-600 font-semibold">relational</span>.
                    </p>
                    <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                        Whether you're taking your first steps in faith or you've been walking with Jesus for years,
                        you'll find a place to belong, grow, and make a difference. Come as you are –
                        we're excited to meet you!
                    </p>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <span class="badge mb-4">
                <i class="fas fa-star mr-2"></i>
                Our Activities
            </span>
            <h2 class="text-4xl md:text-5xl font-bold section-title mb-6">
                What We're <span class="gradient-text">All About</span>
            </h2>
            <div class="title-underline"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed mt-6">
                Every Sunday at 12:30 PM, we come together for an experience that's designed to help you grow in your faith and build authentic friendships.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Worship -->
            <div class="activity-card">
                <div class="flex items-start gap-4 mb-3">
                    <div class="icon-circle">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 pt-2">Worship Together</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Experience God through powerful worship music and prayer. Our team creates an atmosphere where you can truly encounter Jesus.
                </p>
            </div>

            <!-- Bible Study -->
            <div class="activity-card">
                <div class="flex items-start gap-4 mb-3">
                    <div class="icon-circle">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 pt-2">Dig Deep</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Explore God's Word through interactive studies and discussions that make biblical truths relevant to your everyday life.
                </p>
            </div>

            <!-- Community -->
            <div class="activity-card">
                <div class="flex items-start gap-4 mb-3">
                    <div class="icon-circle">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 pt-2">Build Community</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Form lasting friendships with people who share your values. Our community extends beyond Sundays into everyday life.
                </p>
            </div>

            <!-- Service -->
            <div class="activity-card">
                <div class="flex items-start gap-4 mb-3">
                    <div class="icon-circle">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 pt-2">Serve Others</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Make a real impact through service projects, outreach programs, and mission trips that put your faith into action.
                </p>
            </div>

            <!-- Leadership -->
            <div class="activity-card">
                <div class="flex items-start gap-4 mb-3">
                    <div class="icon-circle">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 pt-2">Grow as Leaders</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Develop your gifts through leadership opportunities and mentorship that prepares you for your calling.
                </p>
            </div>

            <!-- Fun & Games -->
            <div class="activity-card">
                <div class="flex items-start gap-4 mb-3">
                    <div class="icon-circle">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 pt-2">Have Fun!</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Enjoy games, movie nights, and social events that prove faith and fun go hand in hand. Laughter is part of who we are!
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <span class="badge mb-4">
                    <i class="fas fa-camera mr-2"></i>
                    Moments
                </span>
                <h2 class="text-4xl md:text-5xl font-bold section-title mb-6">
                    Youth <span class="gradient-text">In Action</span>
                </h2>
                <div class="title-underline"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <img src="{{ asset('images/youths2.JPG') }}" alt="Youth ministry gathering" class="w-full h-72 object-cover rounded-2xl shadow-lg">
                <img src="{{ asset('images/youths3.JPG') }}" alt="Youth fellowship" class="w-full h-72 object-cover rounded-2xl shadow-lg">
                <img src="{{ asset('images/youths4.JPG') }}" alt="Youth ministry moments" class="w-full h-72 object-cover rounded-2xl shadow-lg">
                <img src="{{ asset('images/HKE_0241.JPG') }}" alt="Youth community event" class="w-full h-72 object-cover rounded-2xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 cta-section relative">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
                Ready to Start Your <span class="text-white">Journey</span>?
            </h2>
            <p class="text-2xl text-white/90 mb-12 leading-relaxed">
                You don't need to have it all figured out. Come as you are, and let's discover what God has in store for your life together.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                <a href="mailto:youth@thikaroadconnect.org" class="btn-primary">
                    Contact Us
                    <i class="fas fa-envelope"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="info-box">
                    <div class="text-4xl text-white mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">When</h3>
                    <p class="text-white/90">Every Sunday • 12:30 PM</p>
                </div>
                <div class="info-box">
                    <div class="text-4xl text-white mb-3">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Where</h3>
                    <p class="text-white/90">Church Main Hall</p>
                </div>
                <div class="info-box">
                    <div class="text-4xl text-white mb-3">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Who</h3>
                    <p class="text-white/90">All Youth</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);

    // Initialize activity cards
    document.querySelectorAll('.activity-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        observer.observe(card);
    });
</script>

@endsection
