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
        <!-- <img src=""
            alt="Church worship"
            class="w-full h-full object-cover opacity-20 mix-blend-overlay" /> -->
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
                    <span class="text-white font-medium">Find Your Purpose In Faith</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    Welcome To 
                    <span class="gradient-text block bg-gradient-to-r from-yellow-400 to-pink-400 bg-clip-text text-transparent">
                        Thika Road Connect
                    </span>
                    AGC
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


<section class="py-24 bg-gradient-to-br from-white via-purple-50/30 to-red-50/30 relative overflow-hidden">
    <!-- Enhanced Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-full blur-3xl -translate-x-48 -translate-y-48 floating"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-red-500/10 to-orange-500/10 rounded-full blur-3xl translate-x-48 translate-y-48 floating" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 left-1/2 w-72 h-72 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-full blur-3xl -translate-x-36 -translate-y-36 floating" style="animation-delay: -4s;"></div>

    <!-- Floating geometric shapes -->
    <div class="absolute top-20 right-20 w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-lg rotate-45 floating"></div>
    <div class="absolute bottom-32 left-16 w-12 h-12 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full floating" style="animation-delay: -3s;"></div>

  <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
    <div class="order-2 lg:order-1">
        <div class="bg-gradient-to-br from-gray-50 to-white p-10 rounded-3xl shadow-2xl border border-gray-100 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-r from-church-purple to-church-red rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-scroll text-white text-2xl"></i>
                </div>
                <h3 class="text-4xl font-bold bg-gradient-to-r from-church-purple to-church-red bg-clip-text text-transparent">
                    Our Sacred Story
                </h3>
            </div>
            
            <p class="text-xl text-gray-700 mb-8 leading-relaxed font-medium">
                From humble whispers of prayer to a thunderous chorus of worship - TRC AGC Church's story is one of miraculous growth, unwavering faith, and divine purpose. What began as a small circle of dreamers has blossomed into a powerhouse of spiritual transformation.
            </p>
            
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                Every chapter of our journey bears witness to God's extraordinary faithfulness. Through seasons of challenge and celebration, we've remained anchored in our calling to ignite hearts, build bridges across cultures, and serve as a lighthouse of hope in our community. Our legacy isn't just measured in years, but in the countless lives forever changed by encountering God's love within our walls.
            </p>
            
            <div class="bg-gradient-to-r from-church-purple to-church-red p-6 rounded-xl">
                <div class="flex items-center text-white font-bold text-lg">
                    <i class="fas fa-fire mr-3 text-2xl"></i>
                    <span class="text-xl">Igniting hearts & transforming destinies since day one</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="order-1 lg:order-2">
        <div class="relative group">
            <img src="{{ asset('images/history.webp') }}" alt="Church history" class="w-full h-96 object-cover rounded-3xl shadow-2xl transform group-hover:scale-105 transition-all duration-500" />
            <div class="absolute -bottom-8 -right-8 w-28 h-28 bg-gradient-to-r from-church-red to-orange-500 rounded-full flex items-center justify-center text-white text-4xl shadow-2xl animate-pulse">
                <i class="fas fa-church"></i>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
    </div>
</div>

   <!-- Vision Forward -->
   <div class="text-center">
                <div class="bg-gradient-to-br from-gray-50 to-white p-12 rounded-3xl shadow-xl border border-gray-100 max-w-4xl mx-auto">
                    <div class="flex items-center justify-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-church-purple to-church-red rounded-full flex items-center justify-center mr-6">
                            <i class="fas fa-rocket text-white text-3xl"></i>
                        </div>
                        <h3 class="text-4xl font-bold bg-gradient-to-r from-church-purple to-church-red bg-clip-text text-transparent">
                            The Journey Continues
                        </h3>
                    </div>
                    
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                        Every Sunday service, every prayer meeting, every community outreach adds another chapter to our unfolding story. We're building more than a church - we're creating a legacy of faith, hope, and transformation that will impact our community for years to come.
                    </p>

                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div class="p-6 bg-white rounded-xl shadow-md">
                            <div class="text-3xl text-church-purple mb-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="font-bold text-gray-800">Growing Community</div>
                            <div class="text-sm text-gray-600">New families joining weekly</div>
                        </div>
                        <div class="p-6 bg-white rounded-xl shadow-md">
                            <div class="text-3xl text-church-red mb-3">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="font-bold text-gray-800">Active Ministry</div>
                            <div class="text-sm text-gray-600">Serving our community daily</div>
                        </div>
                        <div class="p-6 bg-white rounded-xl shadow-md">
                            <div class="text-3xl text-green-600 mb-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="font-bold text-gray-800">Building Dreams</div>
                            <div class="text-sm text-gray-600">Permanent home in progress</div>
                        </div>
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
