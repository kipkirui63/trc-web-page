@extends('layouts.app')

@section('title', 'Men\'s Ministry - TRC AGC Church')
@section('description', 'A community where men grow in faith, build meaningful relationships, and develop as leaders in their families and communities.')

@section('styles')
<style>
    .navy-gradient {
        background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 50%, #4c1d95 100%);
    }

    .slate-gradient {
        background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
    }

    .hero-professional {
        background: linear-gradient(135deg, rgba(30, 58, 138, 0.95) 0%, rgba(76, 29, 149, 0.90) 100%),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><rect fill="%231e3a8a" width="1200" height="800"/><g fill-opacity="0.08"><circle fill="%23fff" cx="200" cy="150" r="100"/><circle fill="%23fff" cx="800" cy="400" r="150"/><circle fill="%23fff" cx="1000" cy="200" r="80"/></g></svg>');
        background-size: cover;
    }

    .professional-shadow {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .hover-lift {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .accent-line {
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        margin: 0 auto;
    }

    .fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .stagger-1 { animation-delay: 0.1s; }
    .stagger-2 { animation-delay: 0.2s; }
    .stagger-3 { animation-delay: 0.3s; }
    .stagger-4 { animation-delay: 0.4s; }

    .gradient-text {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-professional min-h-screen flex items-center relative overflow-hidden">
    <div class="container mx-auto px-4 py-20">
        <div class="max-w-4xl mx-auto text-center text-white">
            <div class="fade-in-up">
                <p class="text-blue-200 text-lg font-medium mb-4 tracking-wide">MEN'S MINISTRY</p>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    Iron Sharpens Iron
                </h1>
                <div class="accent-line mb-8"></div>
            </div>

            <div class="fade-in-up stagger-1">
                <p class="text-xl md:text-2xl mb-4 text-blue-100 italic">
                    "As iron sharpens iron, so one man sharpens another."
                </p>
                <p class="text-blue-200 mb-12">Proverbs 27:17</p>
            </div>

            <div class="fade-in-up stagger-2">
                <p class="text-xl md:text-2xl mb-12 text-gray-100 leading-relaxed max-w-3xl mx-auto">
                    A community where men grow in faith, build meaningful relationships, 
                    and develop as leaders in their families and communities.
                </p>
            </div>

            <div class="fade-in-up stagger-3 flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#join">
                    <button class="bg-white text-blue-900 font-semibold text-lg px-10 py-4 rounded-lg hover:bg-gray-100 transition transform hover:scale-105 professional-shadow">
                        Get Involved
                    </button>
                </a>
                <a href="#about">
                    <button class="border-2 border-white text-white font-semibold text-lg px-10 py-4 rounded-lg hover:bg-white hover:text-blue-900 transition">
                        Learn More
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Our Mission
            </h2>
            <div class="accent-line mb-8"></div>
            <p class="text-xl text-gray-600 leading-relaxed">
                We exist to help men discover their God-given purpose, develop authentic relationships, 
                and grow in their faith journey. Through intentional community and biblical teaching, 
                we equip men to lead with integrity in every area of life.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Faith Card -->
            <div class="hover-lift bg-white rounded-xl p-8 professional-shadow border border-gray-100">
                <div class="w-16 h-16 navy-gradient rounded-lg flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Spiritual Growth</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Deepen your relationship with God through biblical study, prayer, and authentic fellowship.
                </p>
            </div>

            <!-- Fellowship Card -->
            <div class="hover-lift bg-white rounded-xl p-8 professional-shadow border border-gray-100">
                <div class="w-16 h-16 navy-gradient rounded-lg flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Brotherhood</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Build lasting friendships with men who encourage and challenge you to be your best.
                </p>
            </div>

            <!-- Leadership Card -->
            <div class="hover-lift bg-white rounded-xl p-8 professional-shadow border border-gray-100">
                <div class="w-16 h-16 navy-gradient rounded-lg flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Leadership</h3>
                <p class="text-gray-600 text-center leading-relaxed">
                    Develop as a godly leader in your home, workplace, and community.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 slate-gradient">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Our Core Values
                </h2>
                <div class="accent-line mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    These principles guide everything we do as a community of men pursuing God together.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 hover-lift">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Authenticity</h3>
                            <p class="text-gray-300 leading-relaxed">
                                We create a safe space where men can be real about their struggles, doubts, and victories without judgment.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 hover-lift">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Accountability</h3>
                            <p class="text-gray-300 leading-relaxed">
                                We commit to speaking truth in love and holding each other to our highest potential in Christ.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 hover-lift">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Service</h3>
                            <p class="text-gray-300 leading-relaxed">
                                We believe faith is demonstrated through action, serving our families, church, and community with excellence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 hover-lift">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-3">Legacy</h3>
                            <p class="text-gray-300 leading-relaxed">
                                We invest in the next generation, mentoring younger men and modeling Christ-centered masculinity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                What We Offer
            </h2>
            <div class="accent-line mb-8"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Multiple ways to connect, grow, and serve alongside other men in the faith.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <div class="text-center group">
                <div class="w-20 h-20 navy-gradient rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform professional-shadow">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bible Studies</h3>
                <p class="text-gray-600 leading-relaxed">
                    Weekly studies focused on practical application of Scripture to daily life.
                </p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 navy-gradient rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform professional-shadow">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Small Groups</h3>
                <p class="text-gray-600 leading-relaxed">
                    Intimate groups for deeper relationships and mutual accountability.
                </p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 navy-gradient rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform professional-shadow">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Mentorship</h3>
                <p class="text-gray-600 leading-relaxed">
                    One-on-one relationships connecting experienced men with those seeking guidance.
                </p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 navy-gradient rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform professional-shadow">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Service Projects</h3>
                <p class="text-gray-600 leading-relaxed">
                    Hands-on opportunities to serve and make a tangible impact in our community.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section id="join" class="py-20 navy-gradient relative overflow-hidden">
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Join the Journey
            </h2>
            <div class="accent-line mb-8 bg-white"></div>
            
            <p class="text-xl md:text-2xl text-blue-100 mb-12 leading-relaxed">
                Whether you're new to faith or have been walking with God for years, 
                there's a place for you in our men's ministry. Take the next step today.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="mailto:men@thikaroadconnectagc.org">
                    <button class="bg-white text-blue-900 font-semibold text-xl px-12 py-5 rounded-lg hover:bg-gray-100 transition transform hover:scale-105 professional-shadow">
                        Contact Us
                    </button>
                </a>
                <a href="#about">
                    <button class="border-2 border-white text-white font-semibold text-xl px-12 py-5 rounded-lg hover:bg-white hover:text-blue-900 transition">
                        Learn More
                    </button>
                </a>
            </div>

            <div class="mt-16 pt-12 border-t border-blue-400/30">
                <p class="text-blue-200 text-lg">
                    Questions? We'd love to hear from you at <a href="mailto:men@thikaroadconnectagc.org" class="text-white font-semibold hover:underline">men@thikaroadconnect.org</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Animate sections on scroll
        document.querySelectorAll('.hover-lift').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    });
</script>
@endsection