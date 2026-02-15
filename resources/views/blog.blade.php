@extends('layouts.app')

@section('title', 'Blog')

@section('description', 'Read inspiring articles, updates, and stories from TRC AGC Church to grow in faith and stay connected.')

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
        background: url('/images/vbs5.webp');
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

    /* Category Card Styles */
    .category-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(220, 38, 38, 0.1);
        position: relative;
    }

    .category-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--church-red);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }

    .category-card:hover::before {
        transform: scaleX(1);
    }

    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.12);
        border-color: var(--church-red);
    }

    .category-image {
        position: relative;
        overflow: hidden;
        aspect-ratio: 4/3;
    }

    .category-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .category-card:hover .category-image img {
        transform: scale(1.05);
    }

    .category-badge {
        display: inline-block;
        padding: 0.375rem 0.875rem;
        background: white;
        color: var(--church-red);
        border-radius: 0.5rem;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .category-link {
        color: var(--church-red);
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: gap 0.3s ease;
    }

    .category-link:hover {
        gap: 1rem;
    }

    .category-link svg {
        transition: transform 0.3s ease;
    }

    .category-link:hover svg {
        transform: translateX(4px);
    }

    /* Section Styles */
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

    /* CTA Section */
    .cta-card {
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(220, 38, 38, 0.1);
    }

    .icon-circle {
        width: 4rem;
        height: 4rem;
        border-radius: 1rem;
        background: var(--church-red-light);
        color: var(--church-red);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-primary {
        background: var(--church-red);
        color: white;
        font-weight: 600;
        padding: 1rem 2rem;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: none;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
    }

    .btn-primary:hover {
        background: var(--church-red-dark);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(220, 38, 38, 0.3);
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
                        <i class="fas fa-book-open mr-3 text-xl"></i>
                        Insights & Updates
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight">
                    <span class="block mb-2">Church</span>
                    <span class="block mb-2">Blog</span>
                </h1>

                <!-- Description -->
                <p class="text-xl md:text-2xl mb-12 leading-relaxed text-white/90 max-w-4xl mx-auto">
                    Explore sermons, events, and pastoral reflections that inspire faith and strengthen our community
                </p>
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

<!-- Categories Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-16">
            <span class="badge mb-4">
                <i class="fas fa-th-large mr-2"></i>
                Content Categories
            </span>
            <h2 class="text-4xl md:text-5xl font-bold section-title mb-6">
                Explore Our Ministry
            </h2>
            <div class="title-underline"></div>
            <p class="text-lg text-gray-600 leading-relaxed mt-6">
                Discover meaningful content across three core areas of our church life
            </p>
        </div>

        <!-- Categories Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

            <!-- Sermon Recaps Card -->
            <article class="category-card">
                <div class="category-image">
                    <img src="{{ asset('images/kwale-missions1.webp') }}" 
                         alt="Weekly Sermon Recaps">
                    
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="category-badge">
                            WEEKLY
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fas fa-book-open text-red-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">
                            Sermon Recaps
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Comprehensive summaries of Sunday sermons with key scriptures and reflection questions to guide your spiritual growth throughout the week.
                    </p>
                    
                    <a href="{{ route('blog.category', 'sermons') }}" 
                       class="category-link">
                        <span>Explore Sermons</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Events & Announcements Card -->
            <article class="category-card">
                <div class="category-image">
                    <img src="{{ asset('images/kwale-missions1.webp') }}" 
                         alt="Events & Announcements">
                    
                    <div class="absolute top-4 left-4">
                        <span class="category-badge">
                            UPCOMING
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-red-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">
                            Events & Announcements
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Stay informed about church activities, special services, and community gatherings that bring us together in fellowship and worship.
                    </p>
                    
                    <a href="{{ route('blog.category', 'events') }}" 
                       class="category-link">
                        <span>View Calendar</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Pastor's Desk Card -->
            <article class="category-card">
                <div class="category-image">
                    <img src="{{ asset('images/rev.webp') }}" 
                         alt="Pastor's Desk">
                    
                    <div class="absolute top-4 left-4">
                        <span class="category-badge">
                            FEATURED
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
                            <i class="fas fa-pen-fancy text-red-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">
                            Pastor's Desk
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Personal reflections and deeper biblical teaching from our pastor on living authentically for Christ in contemporary society.
                    </p>
                    
                    <a href="{{ route('blog.category', 'pastors-desk') }}" 
                       class="category-link">
                        <span>Read Reflections</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto cta-card p-12 text-center">
            <div class="icon-circle mx-auto mb-6">
                <i class="fas fa-bell text-3xl"></i>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Never Miss an Update
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Subscribe to receive the latest sermons, event announcements, and spiritual insights directly in your inbox
            </p>
            <button class="btn-primary">
                Subscribe to Newsletter
                <i class="fas fa-envelope"></i>
            </button>
        </div>
    </div>
</section>

<script>
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

    // Initialize elements with starting state
    document.querySelectorAll('.category-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        observer.observe(card);
    });

    // Smooth scroll
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
</script>

@endsection