@extends('layouts.app')

@section('title', "Women's Ministry - TRC AGC Church")
@section('description', 'Join the vibrant women of TRC AGC Church as we gather for retreats, morning breakfasts, fellowship, and growth in faith.')

@section('styles')
<style>
    :root {
        --church-red: #dc2626;
        --church-red-light: #ef4444;
        --church-red-dark: #b91c1c;
        --white: #ffffff;
        --off-white: #f9fafb;
        --gray-light: #f3f4f6;
        --gradient-red: linear-gradient(135deg, #dc2626 0%, #ef4444 50%, #b91c1c 100%);
    }

    /* Hero Section */
    .ministry-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(220, 38, 38, 0.3)), url('/images/ladies1.webp');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at center, transparent 0%, rgba(220, 38, 38, 0.2) 100%);
        pointer-events: none;
    }

    /* Cards and Components */
    .ministry-card {
        background: var(--white);
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(220, 38, 38, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(220, 38, 38, 0.1);
    }

    .ministry-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px rgba(220, 38, 38, 0.2);
        border-color: var(--church-red);
    }

    .red-gradient-bg {
        background: var(--gradient-red);
    }

    .red-button {
        background: var(--church-red);
        color: white;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        border: 2px solid transparent;
    }

    .red-button:hover {
        background: white;
        color: var(--church-red);
        border-color: var(--church-red);
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(220, 38, 38, 0.3);
    }

    .outline-red-button {
        background: transparent;
        color: var(--church-red);
        border: 2px solid var(--church-red);
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .outline-red-button:hover {
        background: var(--church-red);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.25);
    }

    .section-title {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        position: relative;
        display: inline-block;
        margin-bottom: 1.5rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--gradient-red);
        border-radius: 2px;
    }

    .section-title-left {
        font-size: 3rem;
        font-weight: 800;
        color: #1f2937;
        position: relative;
        display: inline-block;
        margin-bottom: 1.5rem;
    }

    .section-title-left::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 4px;
        background: var(--gradient-red);
        border-radius: 2px;
    }

    .verse-card {
        background: rgba(220, 38, 38, 0.03);
        border-left: 4px solid var(--church-red);
        padding: 1.5rem;
        border-radius: 1rem;
        margin-top: 1.5rem;
        font-style: italic;
    }

    .verse-text {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #374151;
        font-family: 'Georgia', serif;
    }

    .verse-ref {
        color: var(--church-red);
        font-weight: 600;
        margin-top: 0.5rem;
        display: block;
        font-style: normal;
    }

    .feature-block {
        padding: 4rem 0;
    }

    .feature-image {
        border-radius: 2rem;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(220, 38, 38, 0.25);
    }

    .feature-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .feature-image:hover img {
        transform: scale(1.05);
    }

    .scripture-badge {
        background: var(--church-red);
        color: white;
        padding: 0.25rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
        .ministry-hero {
            min-height: 80vh;
            background-attachment: scroll;
        }
        
        .section-title, .section-title-left {
            font-size: 2.5rem;
        }

        .feature-block {
            padding: 2rem 0;
        }
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="ministry-hero text-white">
    <div class="hero-overlay"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-2 rounded-full mb-8 border border-white/30">
                <span class="text-sm font-semibold tracking-wider">WOMEN'S MINISTRY</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                Women of Faith
                <span class="block text-red-200">Rising Together</span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-12 text-gray-100 leading-relaxed max-w-3xl mx-auto">
                "She is clothed with strength and dignity, and she laughs without fear of the future."
                <span class="block mt-2 text-red-200">— Proverbs 31:25</span>
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#ministry-story" class="red-button">Discover Our Story</a>
                <a href="#join" class="outline-red-button text-white border-white hover:bg-white hover:text-church-red">Become Part of Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12 max-w-6xl mx-auto">
            <div class="lg:w-1/2">
                <span class="text-church-red font-semibold tracking-wider uppercase">Welcome</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-4 mb-6">
                    A Place for Every Woman
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Whether you're a young professional, a mother, a grandmother, or just starting your faith journey, 
                    there's a place for you here. Our Women's Ministry is built on the foundation of authentic relationships, 
                    spiritual growth, and shared experiences.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    From intimate morning breakfasts to transformative retreats, we create spaces where women can connect, 
                    grow, and flourish in their God-given purpose.
                </p>
                
                <div class="verse-card">
                    <p class="verse-text">
                        "Therefore encourage one another and build each other up, just as in fact you are doing."
                    </p>
                    <span class="verse-ref">— 1 Thessalonians 5:11</span>
                </div>
            </div>
            
            <div class="lg:w-1/2">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="/images/ladies1.webp" alt="Women's Ministry" class="rounded-2xl shadow-lg w-full h-48 object-cover">
                        <img src="/images/ladies2.webp" alt="Women's Fellowship" class="rounded-2xl shadow-lg w-full h-64 object-cover">
                    </div>
                    <div class="space-y-4 pt-8">
                        <img src="/images/ladies2.webp" alt="Women in Prayer" class="rounded-2xl shadow-lg w-full h-64 object-cover">
                        <img src="/images/ladies1.webp" alt="Sisterhood" class="rounded-2xl shadow-lg w-full h-48 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Story - What We've Been Doing -->
<section id="ministry-story" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-church-red font-semibold tracking-wider uppercase">Our Journey</span>
            <h2 class="section-title">What We've Been Doing</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-6">
                Taking a look back at the beautiful moments God has given us together.
            </p>
        </div>

        <!-- Feature 1: Morning Breakfasts (Image Left, Text Right) -->
        <div class="feature-block">
            <div class="flex flex-col lg:flex-row items-center gap-12 max-w-6xl mx-auto">
                <div class="lg:w-1/2">
                    <div class="feature-image">
                        <img src="/images/ladies2.webp" alt="Morning Breakfast Fellowship" class="w-full h-[400px]">
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <span class="scripture-badge">Psalm 34:8</span>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Morning Breakfast Fellowship</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Every first Saturday of the month we gather. These breakfast fellowships 
                        have become sacred spaces where burdens are shared, prayers are lifted, and lifelong friendships are forged.
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-heart text-church-red text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Taste and see that the Lord is good</h4>
                                <p class="text-gray-600">Women gathering around the table to experience God's goodness together</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-hands-praying text-church-red text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Where two or three gather in my name</h4>
                                <p class="text-gray-600">Small accountability groups that meet beyond the breakfast table</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bible Verse instead of testimonial -->
                    <div class="verse-card">
                        <p class="verse-text">
                            "Taste and see that the Lord is good; blessed is the one who takes refuge in him."
                        </p>
                        <span class="verse-ref">— Psalm 34:8</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2: Annual Retreats (Image Right, Text Left) -->
        <div class="feature-block">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 max-w-6xl mx-auto">
                <div class="lg:w-1/2">
                    <div class="feature-image">
                        <img src="/images/ladies1.webp" alt="Women's Annual Retreat" class="w-full h-[400px]">
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <span class="scripture-badge">Isaiah 40:31</span>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Refreshed & Renewed Retreats</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        For years, our annual retreat has been the highlight of our ministry calendar. 
                        Women step away from the noise of daily life to encounter God in fresh ways. 
                        The retreats have become times of healing, restoration, and renewed vision as 
                        women seek God together away from their daily routines.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                            <i class="fas fa-dove text-3xl text-church-red mb-2"></i>
                            <div class="font-semibold text-gray-900">Renewed strength</div>
                        </div>
                        <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                            <i class="fas fa-heart text-3xl text-church-red mb-2"></i>
                            <div class="font-semibold text-gray-900">Healed hearts</div>
                        </div>
                    </div>

                    <div class="verse-card">
                        <p class="verse-text">
                            "But those who hope in the Lord will renew their strength. They will soar on wings like eagles; 
                            they will run and not grow weary, they will walk and not be faint."
                        </p>
                        <span class="verse-ref">— Isaiah 40:31</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 3: Community Outreach (Image Left, Text Right) -->
        <div class="feature-block">
            <div class="flex flex-col lg:flex-row items-center gap-12 max-w-6xl mx-auto">
                <div class="lg:w-1/2">
                    <div class="feature-image">
                        <img src="/images/ladies2.webp" alt="Community Outreach" class="w-full h-[400px]">
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <span class="scripture-badge">Matthew 25:40</span>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Serving Our Community</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Our women don't just gather—they go. We've visited children's homes, organized medical camps, 
                        and supported widows in our community. Our hands and feet extend the love of Christ beyond our church walls.
                    </p>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-hand-holding-heart text-church-red"></i>
                            <span class="text-gray-700">Visiting children's homes with gifts and love</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-hand-holding-heart text-church-red"></i>
                            <span class="text-gray-700">Medical camps serving our community</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-hand-holding-heart text-church-red"></i>
                            <span class="text-gray-700">Supporting widows through our outreach program</span>
                        </div>
                    </div>

                    <div class="verse-card">
                        <p class="verse-text">
                            "Truly I tell you, whatever you did for one of the least of these brothers and sisters of mine, you did for me."
                        </p>
                        <span class="verse-ref">— Matthew 25:40</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripture Reflection Section -->


<!-- Ministry Activities - What We Do Regularly -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-church-red font-semibold tracking-wider uppercase">Ongoing Ministries</span>
            <h2 class="section-title">Gathering Throughout the Week</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mt-6">
                There are many ways to connect with us throughout the week.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Weekly Prayer -->
            <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-xl transition">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-pray text-3xl text-church-red"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Weekly Prayer</h3>
                <p class="text-gray-600 mb-4">Join us for a time of intercession and prayer for our families, church, and community.</p>
                <div class="verse-card text-left mt-4">
                    <p class="verse-text text-sm">"Pray without ceasing."</p>
                    <span class="verse-ref text-sm">— 1 Thessalonians 5:17</span>
                </div>
            </div>

            <!-- Bible Study -->
            <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-xl transition">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-bible text-3xl text-church-red"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Bible Study</h3>
                <p class="text-gray-600 mb-4">Discovering our identity and purpose.</p>
                <div class="verse-card text-left mt-4">
                    <p class="verse-text text-sm">"Your word is a lamp for my feet, a light on my path."</p>
                    <span class="verse-ref text-sm">— Psalm 119:105</span>
                </div>
            </div>

            <!-- Community Outreach -->
            <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-xl transition">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hand-holding-heart text-3xl text-church-red"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Community Outreach</h3>
                <p class="text-gray-600 mb-4">Visits to children's homes, hospitals, and community service projects.</p>
                <div class="verse-card text-left mt-4">
                    <p class="verse-text text-sm">"Faith without works is dead."</p>
                    <span class="verse-ref text-sm">— James 2:26</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section id="join" class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Journey With Us</h2>
            <p class="text-xl text-gray-600 mb-10">
                Whether you're new to the church or have been here for years, 
                we'd love to have you. Come as you are and find your people.
            </p>
            
            <!-- Bible verse for encouragement -->
            <div class="verse-card max-w-2xl mx-auto mb-10">
                <p class="verse-text">
                    "Let us not give up meeting together, as some are in the habit of doing, but encouraging one another."
                </p>
                <span class="verse-ref">— Hebrews 10:25</span>
            </div>
            
            

            
        </div>
    </div>
</section>

@endsection