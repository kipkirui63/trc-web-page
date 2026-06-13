@extends('layouts.app')

@section('title', 'About Us - TRC AGC Church')

@section('description', 'Learn about TRC AGC Church - our story, mission, vision, core values, and leadership team')

@section('content')

<style>
    /* Modern Variables - Unified Homepage Color Theme */
    :root {
        --church-red: #dc2626;
        --church-red-dark: #b91c1c;
        --church-red-light: #fef2f2;
        --church-black: #dc2626;
        --church-black-light: #b91c1c;
        --church-gray: #4a4a4a;
        --church-light: #f8f8f8;
    }

    /* Modern Hero Section - Pure Red */
    .modern-hero-red {
        background: url('/images/history.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
        min-height: 90vh;
    }

    /* Modern Hero Section - Pure Black */
    .modern-hero-black {
        background: url('/images/rev-ann.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
        min-height: 90vh;
    }

    .floating-element {
        animation: float 8s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    /* Modern Card Styles - Pure Red or Pure Black */
    .modern-card-red {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(220, 38, 38, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(196, 30, 58, 0.1);
    }

    .modern-card-red::before {
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

    .modern-card-red:hover::before {
        transform: scaleX(1);
    }

    .modern-card-red:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(196, 30, 58, 0.15);
        border-color: var(--church-red);
    }

    .modern-card-black {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(220, 38, 38, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(220, 38, 38, 0.12);
    }

    .modern-card-black::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--church-black);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }

    .modern-card-black:hover::before {
        transform: scaleX(1);
    }

    .modern-card-black:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.18);
        border-color: var(--church-black);
    }

    /* Animations */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-on-scroll {
        opacity: 0;
        animation: slideInUp 0.6s ease forwards;
    }

    .animate-delay-1 { animation-delay: 0.2s; }
    .animate-delay-2 { animation-delay: 0.4s; }
    .animate-delay-3 { animation-delay: 0.6s; }

    /* Gradient Text - Pure Red to Dark Red */
    .gradient-text-red {
        background: linear-gradient(135deg, var(--church-red), var(--church-red-dark));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* Solid Text - Pure Black */
    .text-black-solid {
        color: var(--church-black);
    }

    /* Badge Styles */
    .badge-red {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        background: var(--church-red);
        color: white;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(196, 30, 58, 0.2);
    }

    .badge-black {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        background: var(--church-black);
        color: white;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(220, 38, 38, 0.22);
    }

    /* Timeline Styles - Red */
    .timeline-item-red {
        position: relative;
        padding-left: 2rem;
    }

    .timeline-item-red::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 2px;
        height: 100%;
        background: var(--church-red);
    }

    .timeline-item-red::after {
        content: '';
        position: absolute;
        left: -8px;
        top: 0;
        width: 18px;
        height: 18px;
        background: var(--church-red);
        border: 3px solid white;
        border-radius: 50%;
        box-shadow: 0 0 0 2px rgba(196, 30, 58, 0.2);
    }

    /* Timeline Styles - Black */
    .timeline-item-black {
        position: relative;
        padding-left: 2rem;
    }

    .timeline-item-black::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 2px;
        height: 100%;
        background: var(--church-black);
    }

    .timeline-item-black::after {
        content: '';
        position: absolute;
        left: -8px;
        top: 0;
        width: 18px;
        height: 18px;
        background: var(--church-black);
        border: 3px solid white;
        border-radius: 50%;
        box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.22);
    }

    /* Section Header */
    .section-header {
        position: relative;
        margin-bottom: 4rem;
        text-align: center;
    }

    .section-divider-red {
        height: 4px;
        width: 80px;
        background: var(--church-red);
        margin: 1.5rem auto;
        position: relative;
    }

    .section-divider-red::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        background: var(--church-black);
        border-radius: 50%;
    }

    .section-divider-black {
        height: 4px;
        width: 80px;
        background: var(--church-black);
        margin: 1.5rem auto;
        position: relative;
    }

    .section-divider-black::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        background: var(--church-red);
        border-radius: 50%;
    }

    /* CTA Background - Pure Red */
    .cta-section-red {
        position: relative;
        background: linear-gradient(135deg, var(--church-red), var(--church-red-dark));
        overflow: hidden;
    }

    .cta-section-red::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
        z-index: 1;
    }

    /* CTA Background - Pure Black */
    .cta-section-black {
        position: relative;
        background: linear-gradient(135deg, var(--church-black), #7f1d1d);
        overflow: hidden;
    }

    .cta-section-black::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 50%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
        z-index: 1;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    /* Value Card Styles - Red */
    .value-card-red {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(220, 38, 38, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(196, 30, 58, 0.1);
    }

    .value-card-red::before {
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

    .value-card-red:hover::before {
        transform: scaleX(1);
    }

    .value-card-red:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(196, 30, 58, 0.1);
        border-color: var(--church-red);
    }

    /* Value Card Styles - Black */
    .value-card-black {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(220, 38, 38, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(220, 38, 38, 0.12);
    }

    .value-card-black::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--church-black);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }

    .value-card-black:hover::before {
        transform: scaleX(1);
    }

    .value-card-black:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.12);
        border-color: var(--church-black);
    }

    /* Red Circle Background */
    .red-circle-bg {
        background: var(--church-red-light);
        color: var(--church-red);
    }

    /* Black Circle Background */
    .black-circle-bg {
        background: #fef2f2;
        color: var(--church-black);
    }

    /* Button Styles - Red */
    .btn-primary-red {
        background: var(--church-red);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-primary-red:hover {
        background: var(--church-red-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(196, 30, 58, 0.3);
    }

    /* Button Styles - Black */
    .btn-primary-black {
        background: var(--church-black);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-primary-black:hover {
        background: var(--church-black-light);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(220, 38, 38, 0.28);
    }

    .btn-outline-red {
        background: transparent;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.5);
    }

    .btn-outline-red:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        transform: translateY(-2px);
    }

    .btn-outline-black {
        background: transparent;
        color: var(--church-black);
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid rgba(220, 38, 38, 0.28);
    }

    .btn-outline-black:hover {
        background: rgba(220, 38, 38, 0.06);
        border-color: var(--church-black);
        transform: translateY(-2px);
    }

    /* Icon Circle - Red */
    .icon-circle-red {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: var(--church-red);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 10px 20px rgba(196, 30, 58, 0.2);
    }

    /* Icon Circle - Black */
    .icon-circle-black {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background: var(--church-black);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 10px 20px rgba(220, 38, 38, 0.22);
    }

    .icon-circle-small-red {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--church-red-light);
        color: var(--church-red);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    .icon-circle-small-black {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: #fef2f2;
        color: var(--church-black);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    /* Text Colors */
    .text-red {
        color: var(--church-red);
    }

    .text-black {
        color: var(--church-black);
    }

    .bg-red-light {
        background: var(--church-red-light);
    }

    .bg-black-light {
        background: #fef2f2;
    }

    /* Red Section */
    .red-section {
        background: var(--church-red);
        color: white;
    }

    /* Black Section */
    .black-section {
        background: var(--church-black);
        color: white;
    }

    /* Force legacy black utility accents to the same red palette on this page */
    .bg-black {
        background-color: var(--church-red) !important;
    }

    .border-black {
        border-color: var(--church-red) !important;
    }
</style>

<!-- Church History Section - Using Red Theme -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="section-header">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our <span class="text-red">Story</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                A journey of faith, growth and transformation
            </p>
            <div class="section-divider-red"></div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="modern-card-red p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <span class="badge-red mb-4">Established November 23, 2020</span>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Our Humble Beginning</h3>
                        
                        <div class="space-y-6">
                            <div class="timeline-item-red">
                                <div class="ml-4">
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">The First Gathering</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        TRC AGC Church was established on November 23, 2020, starting with our first service in a rented hall at Kasarani Group of Schools. What began as a small gathering of faithful believers has grown into a vibrant community of over 200 members.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="timeline-item-red">
                                <div class="ml-4">
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Early Growth</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        From those early days, our church family quickly grew as people were drawn to the authentic worship, biblical teaching, and loving community. Despite starting during challenging times, God's faithfulness remained evident.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="timeline-item-red">
                                <div class="ml-4">
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Present Day</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Today, we continue to grow both spiritually and numerically, with active ministries serving our community and spreading God's love throughout Nairobi and beyond.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="aspect-w-4 aspect-h-3 rounded-2xl overflow-hidden">
                            <div class="bg-red-light h-full flex items-center justify-center">
                                <div class="text-center p-8">
                                    <div class="icon-circle-red mx-auto mb-6">
                                        <i class="fas fa-church text-3xl"></i>
                                    </div>
                                    <p class="text-gray-700 italic text-lg">"Unless the Lord builds the house, those who build it labor in vain."</p>
                                    <p class="text-red font-semibold mt-2">- Psalm 127:1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section - Alternating Red and Black Cards -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="section-header">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our <span class="text-black">Leadership</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Meet the passionate leaders who guide our church family with wisdom, love, and dedication
            </p>
            <div class="section-divider-black"></div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Lead Pastor - Red Card -->
                <div class="modern-card-red animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/rev.webp') }}" alt="Rev. Ernest Korir" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-red text-white text-xs px-3 py-1 rounded-full">Senior Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Rev. Ernest Korir</h3>
                        <p class="text-red font-medium mb-4">Senior Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Rev. Ernest Korir serves as our Lead Pastor with a heart for God's people and a vision for community transformation.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <div class="icon-circle-small-red mr-2">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <span>Biblical Teaching</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rev. Ann Korir - Black Card -->
                <div class="modern-card-black animate-on-scroll animate-delay-1">
                    <div class="relative">
                        <img src="{{ asset('images/rev-ann.webp') }}" alt="Rev. Ann Korir" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-black text-white text-xs px-3 py-1 rounded-full">Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Rev. Ann Korir</h3>
                        <p class="text-black font-medium mb-4">Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Rev. Ann Korir serves faithfully with a heart of compassion and excellence in ministry.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <div class="icon-circle-small-black mr-2">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <span>Pastoral Care</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pastor Vince - Red Card -->
                <div class="modern-card-red animate-on-scroll animate-delay-2">
                    <div class="relative">
                        <img src="{{ asset('images/pst-vince.webp') }}" alt="Pastor Vince" class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent h-20"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-red text-white text-xs px-3 py-1 rounded-full">Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Pastor Vince</h3>
                        <p class="text-red font-medium mb-4">Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pastor Vince serves with enthusiasm and connects with people of all ages and backgrounds.
                        </p>
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <div class="icon-circle-small-red mr-2">
                                    <i class="fas fa-users"></i>
                                </div>
                                <span>Community</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section - Red & Black Split -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="section-header">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Vision <span class="text-red">&</span> <span class="text-black">Mission</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our guiding purpose and future direction
            </p>
            <div class="section-divider-red"></div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Vision Card - Red Theme -->
                <div class="modern-card-red animate-on-scroll">
                    <div class="p-8">
                        <div class="icon-circle-red mb-6">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                        <div class="bg-red-light p-6 rounded-xl mb-6 border-l-4 border-red">
                            <h4 class="text-xl font-semibold text-red mb-2">"The Whole Church taking the Whole Gospel to the Whole World"</h4>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="icon-circle-small-red mr-3">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">The Whole Church</h5>
                                    <p class="text-sm text-gray-600">Every believer equipped for ministry</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="icon-circle-small-red mr-3">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">The Whole Gospel</h5>
                                    <p class="text-sm text-gray-600">Complete message of Christ's transformation</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="icon-circle-small-red mr-3">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-900">The Whole World</h5>
                                    <p class="text-sm text-gray-600">Reaching every nation and people</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Card - Black Theme -->
                <div class="modern-card-black animate-on-scroll animate-delay-1">
                    <div class="p-8">
                        <div class="icon-circle-black mb-6">
                            <i class="fas fa-bullseye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                        <div class="bg-black-light p-6 rounded-xl mb-6 border-l-4 border-black">
                            <p class="text-gray-700 font-medium">
                                To fulfill the Great Commandment and Great Commission of the Lord Jesus Christ according to the Great Plan.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="text-red mb-2 text-xl">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h5 class="font-semibold text-gray-900 text-sm">Great Commandment</h5>
                                <p class="text-xs text-gray-600">Love God & neighbor</p>
                                <p class="text-xs text-gray-500 mt-1">Mark 12:30-31</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="text-black mb-2 text-xl">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h5 class="font-semibold text-gray-900 text-sm">Great Commission</h5>
                                <p class="text-xs text-gray-600">Make disciples worldwide</p>
                                <p class="text-xs text-gray-500 mt-1">Matthew 28:19-20</p>
                            </div>
                        </div>
                        <div class="text-sm text-gray-600 italic">
                            <i class="fas fa-quote-left text-red mr-2"></i>
                            "Go therefore and make disciples of all nations"
                        </div>
                    </div>
    </div>
            </div>
        </div>
    </div>
</section>

<!-- The 5 Es Section - Alternating Red and Black -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="section-header">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">The 5 Es of <span class="text-black">AGC</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our ministry foundation built on five essential pillars
            </p>
            <div class="section-divider-black"></div>
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- E1: Evangelizing - Red -->
                <div class="modern-card-red animate-on-scroll">
                    <div class="p-6 text-center">
                        <div class="icon-circle-red mx-auto mb-4">
                            <span class="text-xl font-bold">E1</span>
                        </div>
                        <div class="w-12 h-12 mx-auto mb-4">
                            <i class="fas fa-bullhorn text-2xl text-red"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Evangelizing</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Reaching the unsaved with the Gospel
                        </p>
                    </div>
                </div>

                <!-- E2: Establishing - Black -->
                <div class="modern-card-black animate-on-scroll animate-delay-1">
                    <div class="p-6 text-center">
                        <div class="icon-circle-black mx-auto mb-4">
                            <span class="text-xl font-bold">E2</span>
                        </div>
                        <div class="w-12 h-12 mx-auto mb-4">
                            <i class="fas fa-church text-2xl text-black"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Establishing</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Planting dynamic churches
                        </p>
                    </div>
                </div>

                <!-- E3: Edifying - Red -->
                <div class="modern-card-red animate-on-scroll animate-delay-2">
                    <div class="p-6 text-center">
                        <div class="icon-circle-red mx-auto mb-4">
                            <span class="text-xl font-bold">E3</span>
                        </div>
                        <div class="w-12 h-12 mx-auto mb-4">
                            <i class="fas fa-book-open text-2xl text-red"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Edifying</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Building up believers
                        </p>
                    </div>
                </div>

                <!-- E4: Equipping - Black -->
                <div class="modern-card-black animate-on-scroll animate-delay-1">
                    <div class="p-6 text-center">
                        <div class="icon-circle-black mx-auto mb-4">
                            <span class="text-xl font-bold">E4</span>
                        </div>
                        <div class="w-12 h-12 mx-auto mb-4">
                            <i class="fas fa-seedling text-2xl text-black"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Equipping</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Developing servant leaders
                        </p>
                    </div>
                </div>

                <!-- E5: Exercising Compassion - Red -->
                <div class="modern-card-red animate-on-scroll animate-delay-2">
                    <div class="p-6 text-center">
                        <div class="icon-circle-red mx-auto mb-4">
                            <span class="text-xl font-bold">E5</span>
                        </div>
                        <div class="w-12 h-12 mx-auto mb-4">
                            <i class="fas fa-hands-helping text-2xl text-red"></i>
                        </div>
                        <h3 class="font-bold text-gray-900 text-lg mb-2">Exercising</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Showing Christ's compassion
                        </p>
                    </div>
                </div>
            </div>

            <!-- Summary - Red Border -->
            <div class="text-center mt-12">
                <div class="bg-white rounded-2xl p-8 max-w-4xl mx-auto shadow-lg border-t-4 border-red">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Building God's Kingdom Together</h3>
                    <p class="text-gray-600">
                        These five strategies work in harmony to create a comprehensive approach to ministry that transforms lives, builds communities, and advances God's kingdom both locally and globally.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section - Red Theme -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="section-header">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our <span class="text-red">Core Values</span></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                These are the guiding principles that direct our decision-making and shape our culture as a church.
            </p>
            <div class="section-divider-red"></div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Accountability - Red -->
                <div class="value-card-red animate-on-scroll">
                    <div class="p-8">
                        <div class="icon-circle-red mb-6">
                            <i class="fas fa-balance-scale text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Accountability</h3>
                        <p class="text-gray-700 leading-relaxed">We hold ourselves accountable to God, to each other, and to our commitments as a church community.</p>
                    </div>
                </div>

                <!-- Biblical Authority - Black -->
                <div class="value-card-black animate-on-scroll animate-delay-1">
                    <div class="p-8">
                        <div class="icon-circle-black mb-6">
                            <i class="fas fa-book-open text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Biblical Authority</h3>
                        <p class="text-gray-700 leading-relaxed">We believe in the inspiration and authority of Scripture as our ultimate guide for faith and practice.</p>
                    </div>
                </div>

                <!-- Commitment - Red -->
                <div class="value-card-red animate-on-scroll animate-delay-2">
                    <div class="p-8">
                        <div class="icon-circle-red mb-6">
                            <i class="fas fa-handshake text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Commitment</h3>
                        <p class="text-gray-700 leading-relaxed">We are committed to our calling, to each other, and to the mission God has given us.</p>
                    </div>
                </div>

                <!-- Diversity - Black -->
                <div class="value-card-black animate-on-scroll animate-delay-1">
                    <div class="p-8">
                        <div class="icon-circle-black mb-6">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Diversity</h3>
                        <p class="text-gray-700 leading-relaxed">We celebrate our unity in Christ while embracing the diversity of our members and communities.</p>
                    </div>
                </div>

                <!-- Excellence - Red -->
                <div class="value-card-red animate-on-scroll animate-delay-2">
                    <div class="p-8">
                        <div class="icon-circle-red mb-6">
                            <i class="fas fa-star text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Excellence</h3>
                        <p class="text-gray-700 leading-relaxed">We strive for excellence in all we do as an act of worship and a testimony to God's greatness.</p>
                    </div>
                </div>

                <!-- Faith Family - Black -->
                <div class="value-card-black animate-on-scroll animate-delay-1">
                    <div class="p-8">
                        <div class="icon-circle-black mb-6">
                            <i class="fas fa-home text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Faith Family</h3>
                        <p class="text-gray-700 leading-relaxed">We are a family of believers united by faith, supporting and caring for one another.</p>
                    </div>
                </div>

                <!-- Fellowship - Red -->
                <div class="value-card-red animate-on-scroll animate-delay-2">
                    <div class="p-8">
                        <div class="icon-circle-red mb-6">
                            <i class="fas fa-user-friends text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Fellowship</h3>
                        <p class="text-gray-700 leading-relaxed">We prioritize authentic relationships and meaningful connections within our church community.</p>
                    </div>
                </div>

                <!-- Holiness - Black -->
                <div class="value-card-black animate-on-scroll animate-delay-1">
                    <div class="p-8">
                        <div class="icon-circle-black mb-6">
                            <i class="fas fa-dove text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Holiness</h3>
                        <p class="text-gray-700 leading-relaxed">We pursue holiness in our personal lives and corporate worship, reflecting God's character.</p>
                    </div>
                </div>

                <!-- Servanthood - Red -->
                <div class="value-card-red animate-on-scroll animate-delay-2">
                    <div class="p-8">
                        <div class="icon-circle-red mb-6">
                            <i class="fas fa-hands text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Servanthood</h3>
                        <p class="text-gray-700 leading-relaxed">We lead by serving others, following Christ's example of humility and sacrificial love.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Doctrinal Statement Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="section-header">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our <span class="text-red">Doctrinal Statement</span></h2>
            
            <div class="section-divider-red"></div>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6">
            <div class="value-card-red p-8 animate-on-scroll">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Holy Scriptures</h3>
                <p class="text-gray-700 leading-relaxed">
                    That both Old and New Testaments constitute the divinely inspired Word of God, inerrant in the originals, and the final authority for life and faith.
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll animate-delay-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Holy Trinity</h3>
                <p class="text-gray-700 leading-relaxed">
                    That there is one God, eternally existent in the Holy Trinity of Father, Son and Holy Spirit, each with personality and deity.
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll animate-delay-2">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Son, Jesus Christ</h3>
                <p class="text-gray-700 leading-relaxed">
                    That the Son, our Lord Jesus Christ, manifested in the flesh through the virgin birth, died on the cross for the redemption of the human family, all of whom may be saved from sin through faith in Him.
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Fall of Man</h3>
                <p class="text-gray-700 leading-relaxed">
                    That man, although created by God in His own image and likeness fell into sin through disobedience and "so death passed upon all men, for all have sinned". (Romans 5:12).
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll animate-delay-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Salvation &amp; The Holy Spirit</h3>
                <p class="text-gray-700 leading-relaxed">
                    In the salvation of the human soul, including the new birth; and in a subsequent work of God in the soul, a crisis, wrought by faith, whereby the heart is cleansed from all sin and filled with the Holy Spirit. This gracious experience is retained by faith as expressed in a constant obedience to God's revealed will, thus giving us perfect cleansing moment by moment (1 John 1:7-9).
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll animate-delay-2">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Church</h3>
                <p class="text-gray-700 leading-relaxed">
                    That the Church is the body of Christ; that all who are united by faith to Christ are members of the same; and that, having thus become members of one another, it is our solemn covenant duty to fellowship with one another in peace, and to love one another with pure and fervent hearts.
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Resurrection</h3>
                <p class="text-gray-700 leading-relaxed">
                    That our Lord Jesus Christ in His literal resurrection from the dead is the living guarantee of the resurrection of all human beings; the believing saved to conscious eternal joy, and the unbelieving lost to conscious eternal punishment.
                </p>
            </div>

            <div class="value-card-red p-8 animate-on-scroll animate-delay-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">The Return of Christ</h3>
                <p class="text-gray-700 leading-relaxed">
                    That our Lord Jesus Christ, in fulfillment of His own promise, both angelically and apostolically attested that will personally return in power and great glory.
                </p>
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation on scroll
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-on-scroll');
                        if (index > 0) {
                            entry.target.classList.add(`animate-delay-${(index % 3) + 1}`);
                        }
                    }, index * 100);
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.modern-card-red, .modern-card-black, .value-card-red, .value-card-black').forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });

        // Smooth scroll for anchor links
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
    });

    // Loading animation
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.querySelectorAll('.modern-card-red, .modern-card-black, .value-card-red, .value-card-black').forEach((card, index) => {
                card.style.transitionDelay = `${index * 0.1}s`;
            });
        }, 500);
    });
</script>

@endsection
