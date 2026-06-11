@extends('layouts.app')

@section('title', "Men's Ministry - TRC AGC Church")
@section('description', 'A community where men grow in faith, build meaningful relationships, and develop as leaders in their families and communities.')

@section('styles')
<style>
    /* Hero Section with Image - NO OVERLAY */
    .hero-image {
        background: url('/images/vbs8.webp');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
        position: relative;
    }

    /* Card Styles */
    .card-red {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .card-red:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -5px rgba(220, 38, 38, 0.1), 0 10px 10px -5px rgba(220, 38, 38, 0.04);
        border-color: #dc2626;
    }

    .card-red-accent {
        border-left: 4px solid #dc2626;
        background: white;
        transition: all 0.3s ease;
    }

    .card-red-accent:hover {
        background: #fef2f2;
        transform: translateX(5px);
    }

    /* Icon Styles */
    .icon-red {
        background: #dc2626;
        color: white;
        transition: all 0.3s ease;
    }

    .icon-red:hover {
        background: #b91c1c;
        transform: scale(1.1);
    }

    /* Text Styles */
    .text-red {
        color: #dc2626;
    }

    .text-black {
        color: #000000;
    }

    /* Underline */
    .red-underline {
        width: 80px;
        height: 4px;
        background: #dc2626;
        margin: 1rem auto;
    }

    /* Button Styles */
    .btn-red {
        background: #dc2626;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        border: 2px solid #dc2626;
    }

    .btn-red:hover {
        background: #b91c1c;
        border-color: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(220, 38, 38, 0.3);
    }

    .btn-outline-red {
        background: transparent;
        color: #dc2626;
        border: 2px solid #dc2626;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-outline-red:hover {
        background: #dc2626;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(220, 38, 38, 0.3);
    }

    .btn-outline-white {
        background: transparent;
        color: white;
        border: 2px solid white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-outline-white:hover {
        background: white;
        color: #000000;
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
    }

    /* Backgrounds */
    .bg-red-light {
        background: #fef2f2;
    }

    .bg-white-custom {
        background: #ffffff;
    }

    /* White Background Section (replacing red CTA) */
    .cta-white {
        background: #ffffff;
        border-top: 4px solid #dc2626;
        border-bottom: 4px solid #dc2626;
    }

    /* Animations */
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

    /* Section Titles */
    .section-title {
        color: #000000;
        font-weight: 700;
        position: relative;
    }

    .section-title span {
        color: #dc2626;
    }

    /* Text contrast for hero section */
    .hero-text {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-text-light {
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    /* Ensure content is visible */
    .hero-content {
        position: relative;
        z-index: 10;
        background: rgba(0, 0, 0, 0.4); /* Subtle dark overlay only for readability */
        padding: 2rem;
        border-radius: 1rem;
        backdrop-filter: blur(2px);
    }
</style>
@endsection

@section('content')
<!-- Hero Section with Image - NO RED OVERLAY -->
<section class="hero-image flex items-center relative overflow-hidden">
    <div class="container mx-auto px-4 py-20">
        <div class="max-w-4xl mx-auto text-center text-white hero-content">
            <div class="fade-in-up">
                <p class="text-lg font-medium mb-4 tracking-wide hero-text">MEN'S MINISTRY</p>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight hero-text">
                    Iron Sharpens Iron
                </h1>
                <div class="w-24 h-1 bg-white mx-auto mb-8"></div>
            </div>

            <div class="fade-in-up stagger-1">
                <p class="text-xl md:text-2xl mb-4 text-white italic hero-text">
                    "As iron sharpens iron, so one man sharpens another."
                </p>
                <p class="text-gray-200 mb-12 hero-text-light">Proverbs 27:17</p>
            </div>

            <div class="fade-in-up stagger-2">
                <p class="text-xl md:text-2xl mb-12 text-gray-100 leading-relaxed max-w-3xl mx-auto hero-text-light">
                    A community where men grow in faith, build meaningful relationships, 
                    and develop as leaders in their families and communities.
                </p>
            </div>

            <div class="fade-in-up stagger-3 flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#join" class="btn-outline-white">Get Involved</a>
                <a href="#about" class="btn-outline-white">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h2 class="section-title text-4xl md:text-5xl mb-4">
                Our <span>Mission</span>
            </h2>
            <div class="red-underline"></div>
            <p class="text-xl text-gray-600 leading-relaxed mt-8">
                We exist to help men discover their God-given purpose, develop authentic relationships, 
                and grow in their faith journey. Through intentional community and biblical teaching, 
                we equip men to lead with integrity in every area of life.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Faith Card -->
            <div class="card-red p-8 text-center">
                <div class="w-16 h-16 icon-red rounded-lg flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-black mb-4">Spiritual Growth</h3>
                <p class="text-gray-600 leading-relaxed">
                    Deepen your relationship with God through biblical study, prayer, and authentic fellowship.
                </p>
            </div>

            <!-- Fellowship Card -->
            <div class="card-red p-8 text-center">
                <div class="w-16 h-16 icon-red rounded-lg flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-black mb-4">Mentorship - Wasee & Wazee</h3>
                <p class="text-gray-600 leading-relaxed">
                    Build lasting friendships with men who encourage and challenge you to be your best.
                </p>
            </div>

            <!-- Leadership Card -->
            <div class="card-red p-8 text-center">
                <div class="w-16 h-16 icon-red rounded-lg flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-black mb-4">Leadership</h3>
                <p class="text-gray-600 leading-relaxed">
                    Develop as a godly leader in your home, workplace, and community.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 bg-red-light">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="section-title text-4xl md:text-5xl mb-4">
                    Our Core <span>Values</span>
                </h2>
                <div class="red-underline"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                    These principles guide everything we do as a community of men pursuing God together.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="card-red-accent p-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 icon-red rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold">1</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-black mb-2">Authenticity</h3>
                            <p class="text-gray-600">
                                We create a safe space where men can be real about their struggles, doubts, and victories without judgment.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-red-accent p-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 icon-red rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold">2</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-black mb-2">Accountability</h3>
                            <p class="text-gray-600">
                                We commit to speaking truth in love and holding each other to our highest potential in Christ.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-red-accent p-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 icon-red rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold">3</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-black mb-2">Service</h3>
                            <p class="text-gray-600">
                                We believe faith is demonstrated through action, serving our families, church, and community with excellence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-red-accent p-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 icon-red rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold">4</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-black mb-2">Legacy</h3>
                            <p class="text-gray-600">
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
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="section-title text-4xl md:text-5xl mb-4">
                What We <span>Do</span>
            </h2>
            <div class="red-underline"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-8">
                Multiple ways to connect, grow, and serve alongside other men in the faith.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center group">
                <div class="w-20 h-20 icon-red rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Bible Studies</h3>
                <p class="text-gray-600">Weekly studies focused on practical application of Scripture to daily life.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 icon-red rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Mentorship</h3>
                <p class="text-gray-600">One-on-one relationships connecting experienced men with those seeking guidance.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 icon-red rounded-xl mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-black mb-3">Service Projects</h3>
                <p class="text-gray-600">Hands-on opportunities to serve and make a tangible impact in our community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Verse Section -->
<section class="py-16 bg-red-light">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto">
            <svg class="w-12 h-12 text-red mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <p class="text-2xl md:text-3xl text-gray-800 italic mb-4">
                "Be watchful, stand firm in the faith, act like men, be strong. Let all that you do be done in love."
            </p>
            <p class="text-xl font-bold text-red">1 Corinthians 16:13-14</p>
        </div>
    </div>
</section>

<!-- Call to Action Section - NOW WHITE WITH RED ACCENTS -->
<section id="join" class="py-20 cta-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-black mb-6">
                Join the Journey
            </h2>
            <div class="w-24 h-1 bg-red mx-auto mb-8"></div>
            
            <p class="text-xl md:text-2xl text-gray-700 mb-12 leading-relaxed">
                Whether you're new to faith or have been walking with God for years, 
                there's a place for you in our men's ministry. Take the next step today.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="mailto:men@thikaroadconnectagc.org" class="btn-red">Contact Us</a>
                <a href="#about" class="btn-outline-red">Learn More</a>
            </div>

            <div class="mt-16 pt-12 border-t border-gray-200">
                <p class="text-gray-600 text-lg">
                    Questions? We'd love to hear from you at <a href="mailto:men@thikaroadconnectagc.org" class="text-red font-semibold hover:underline">men@thikaroadconnect.org</a>
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

        // Animate cards on scroll
        document.querySelectorAll('.card-red, .card-red-accent, .group').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    });
</script>
@endsection