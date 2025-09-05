@extends('layouts.app')

@section('title', 'Outreach Ministry')
@section('description', 'Join TRC AGC Church Outreach Ministry in sharing God\'s love with our community and beyond through missions, evangelism, and compassionate service.')

@section('styles')
<style>
    :root {
        --church-purple: #7c3aed;
        --church-red: #dc2626;
    }

    .hero-section {
        min-height: 100vh;
        background: linear-gradient(45deg, var(--church-purple), var(--church-red));
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 30% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                    radial-gradient(circle at 70% 80%, rgba(255,255,255,0.05) 0%, transparent 50%);
    }

    .floating-elements {
        position: absolute;
        inset: 0;
        overflow: hidden;
    }

    .float-item {
        position: absolute;
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        animation: float-around 20s infinite linear;
    }

    @keyframes float-around {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
    }

    .hero-content {
        position: relative;
        z-index: 10;
    }

    .text-reveal {
        overflow: hidden;
        position: relative;
    }

    .text-reveal span {
        display: inline-block;
        animation: slideUp 1s ease-out forwards;
        opacity: 0;
        transform: translateY(50px);
    }

    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .mission-flow {
        position: relative;
        padding: 5rem 0;
    }

    .mission-item {
        display: flex;
        align-items: center;
        margin: 4rem 0;
        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.6s ease;
    }

    .mission-item.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .mission-item:nth-child(even) {
        flex-direction: row-reverse;
        transform: translateX(50px);
    }

    .mission-item:nth-child(even).visible {
        transform: translateX(0);
    }

    .mission-icon {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--church-purple), var(--church-red));
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 3rem;
        position: relative;
        box-shadow: 0 20px 40px rgba(124, 58, 237, 0.3);
    }

    .mission-icon::before {
        content: '';
        position: absolute;
        inset: -5px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--church-purple), var(--church-red));
        z-index: -1;
        opacity: 0.5;
        animation: pulse-ring 2s infinite;
    }

    @keyframes pulse-ring {
        0% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.1); opacity: 0.2; }
        100% { transform: scale(1.2); opacity: 0; }
    }

    .mission-content {
        flex: 1;
        padding: 2rem;
        background: rgba(255,255,255,0.05);
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
    }

    .stats-section {
        background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }

    .stat-circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: conic-gradient(from 0deg, var(--church-purple), var(--church-red), var(--church-purple));
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 2rem auto;
    }

    .stat-circle::before {
        content: '';
        position: absolute;
        inset: 10px;
        border-radius: 50%;
        background: white;
    }

    .stat-content {
        position: relative;
        z-index: 10;
        text-align: center;
    }

    .testimonial-slider {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 30px;
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(220, 38, 38, 0.1));
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.2);
    }

    .testimonial-slide {
        padding: 3rem;
        text-align: center;
        position: relative;
    }

    .testimonial-slide::before {
        content: '"';
        position: absolute;
        top: 1rem;
        left: 2rem;
        font-size: 5rem;
        color: var(--church-purple);
        opacity: 0.3;
        font-family: serif;
    }

    .involvement-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 4rem 0;
    }

    .involvement-item {
        position: relative;
        padding: 3rem 2rem;
        background: linear-gradient(45deg, transparent, rgba(124, 58, 237, 0.05));
        border-radius: 30px;
        border-left: 5px solid transparent;
        border-image: linear-gradient(45deg, var(--church-purple), var(--church-red)) 1;
        transition: all 0.4s ease;
        overflow: hidden;
    }

    .involvement-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, var(--church-purple), var(--church-red));
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: -1;
    }

    .involvement-item:hover::before {
        opacity: 0.05;
    }

    .involvement-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(124, 58, 237, 0.15);
    }

    .wave-divider {
        width: 100%;
        height: 100px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='%23ffffff'%3E%3C/path%3E%3C/svg%3E") center/cover;
    }

    .cta-section {
        background: linear-gradient(135deg, var(--church-purple), var(--church-red));
        position: relative;
        overflow: hidden;
        clip-path: polygon(0 15%, 100% 0, 100% 85%, 0 100%);
        margin-top: -50px;
        padding: 8rem 0 6rem;
    }

    .cta-button {
        display: inline-block;
        padding: 1rem 2.5rem;
        background: rgba(255,255,255,0.2);
        color: white;
        text-decoration: none;
        border-radius: 50px;
        border: 2px solid rgba(255,255,255,0.3);
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
        margin: 0.5rem;
        position: relative;
        overflow: hidden;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .cta-button:hover::before {
        left: 100%;
    }

    .cta-button:hover {
        background: rgba(255,255,255,0.3);
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }

    .section-title {
        text-align: center;
        margin: 4rem 0;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -1rem;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--church-purple), var(--church-red));
        border-radius: 2px;
    }

    @media (max-width: 768px) {
        .mission-item,
        .mission-item:nth-child(even) {
            flex-direction: column;
            text-align: center;
            transform: translateY(50px);
        }

        .mission-item.visible,
        .mission-item:nth-child(even).visible {
            transform: translateY(0);
        }

        .mission-icon {
            margin: 0 0 2rem 0;
        }

        .hero-section {
            min-height: 80vh;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="floating-elements">
        <div class="float-item" style="left: 10%; width: 20px; height: 20px; animation-delay: 0s;"></div>
        <div class="float-item" style="left: 20%; width: 15px; height: 15px; animation-delay: 2s;"></div>
        <div class="float-item" style="left: 30%; width: 25px; height: 25px; animation-delay: 4s;"></div>
        <div class="float-item" style="left: 50%; width: 18px; height: 18px; animation-delay: 6s;"></div>
        <div class="float-item" style="left: 70%; width: 22px; height: 22px; animation-delay: 8s;"></div>
        <div class="float-item" style="left: 80%; width: 16px; height: 16px; animation-delay: 10s;"></div>
        <div class="float-item" style="left: 90%; width: 20px; height: 20px; animation-delay: 12s;"></div>
    </div>
    
    <div class="container mx-auto px-4 hero-content">
        <div class="max-w-6xl mx-auto text-center text-white">
            <div class="text-reveal mb-8">
                <span style="animation-delay: 0.1s;">
                    <i class="fas fa-heart text-6xl mb-8 block text-yellow-300"></i>
                </span>
            </div>
            
            <div class="text-reveal mb-6">
                <span class="text-6xl md:text-8xl font-bold block" style="animation-delay: 0.3s;">Outreach</span>
                <span class="text-6xl md:text-8xl font-bold block text-yellow-300" style="animation-delay: 0.5s;">Ministry</span>
            </div>
            
            <div class="text-reveal mb-8">
                <span class="text-2xl md:text-3xl block opacity-90" style="animation-delay: 0.7s;">
                    Extending God's love beyond our walls
                </span>
            </div>
            
            <div class="text-reveal mb-12">
                <span class="text-lg md:text-xl max-w-4xl mx-auto block leading-relaxed opacity-80" style="animation-delay: 0.9s;">
                    "Go into all the world and preach the gospel to all creation." - Mark 16:15
                </span>
            </div>
            
            <div class="text-reveal">
                <span style="animation-delay: 1.1s;">
                    <a href="#mission" class="cta-button">
                        <i class="fas fa-arrow-down mr-2"></i>
                        Discover Our Mission
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Mission Flow Section -->
<section id="mission" class="mission-flow bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2 class="text-5xl md:text-6xl font-bold">
                <span class="bg-gradient-to-r from-purple-600 to-red-600 bg-clip-text text-transparent">
                    How We Serve
                </span>
            </h2>
            <p class="text-xl text-gray-600 mt-4 max-w-3xl mx-auto">
                Discover the transformative ways we're sharing God's love with our community and the world
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="mission-item">
                <div class="mission-icon">
                    <i class="fas fa-hands-helping text-4xl text-white"></i>
                </div>
                <div class="mission-content">
                    <h3 class="text-3xl font-bold mb-4 text-gray-800">Community Service</h3>
                    <p class="text-lg text-gray-600 mb-4">
                        We serve our local community through food drives, clothing distribution, and home repairs, meeting physical needs while sharing Christ's love.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Food Ministry</span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Clothing Drive</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Home Repairs</span>
                    </div>
                </div>
            </div>

            <div class="mission-item">
                <div class="mission-icon">
                    <i class="fas fa-bullhorn text-4xl text-white"></i>
                </div>
                <div class="mission-content">
                    <h3 class="text-3xl font-bold mb-4 text-gray-800">Evangelism</h3>
                    <p class="text-lg text-gray-600 mb-4">
                        Sharing the gospel through street evangelism, community events, and training believers to be effective witnesses for Christ.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Street Ministry</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Witness Training</span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Community Events</span>
                    </div>
                </div>
            </div>

            <div class="mission-item">
                <div class="mission-icon">
                    <i class="fas fa-globe-americas text-4xl text-white"></i>
                </div>
                <div class="mission-content">
                    <h3 class="text-3xl font-bold mb-4 text-gray-800">Global Missions</h3>
                    <p class="text-lg text-gray-600 mb-4">
                        Supporting missionaries worldwide and organizing mission trips to spread God's love across 12 nations and counting.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">12 Countries</span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Mission Trips</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Missionary Support</span>
                    </div>
                </div>
            </div>

            <div class="mission-item">
                <div class="mission-icon">
                    <i class="fas fa-heartbeat text-4xl text-white"></i>
                </div>
                <div class="mission-content">
                    <h3 class="text-3xl font-bold mb-4 text-gray-800">Specialized Ministry</h3>
                    <p class="text-lg text-gray-600 mb-4">
                        Reaching those in hospitals, prisons, and youth through targeted ministry programs that bring hope and healing.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Hospital Ministry</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Prison Ministry</span>
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Youth Outreach</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="stats-section py-20">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2 class="text-5xl md:text-6xl font-bold">
                <span class="bg-gradient-to-r from-purple-600 to-red-600 bg-clip-text text-transparent">
                    Our Impact
                </span>
            </h2>
            <p class="text-xl text-gray-600 mt-4">God is working through us to transform lives</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="text-center">
                <div class="stat-circle">
                    <div class="stat-content">
                        <div class="text-4xl font-bold text-purple-600">500+</div>
                        <div class="text-sm font-semibold text-gray-600">Lives Touched</div>
                    </div>
                </div>
            </div>
            
           
            
            <div class="text-center">
                <div class="stat-circle">
                    <div class="stat-content">
                        <div class="text-4xl font-bold text-purple-600">50+</div>
                        <div class="text-sm font-semibold text-gray-600">Volunteers</div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <div class="stat-circle">
                    <div class="stat-content">
                        <div class="text-4xl font-bold text-red-600">24/7</div>
                        <div class="text-sm font-semibold text-gray-600">Commitment</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2 class="text-5xl md:text-6xl font-bold">
                <span class="bg-gradient-to-r from-purple-600 to-red-600 bg-clip-text text-transparent">
                    Lives Transformed
                </span>
            </h2>
            <p class="text-xl text-gray-600 mt-4">Real stories of God's love in action</p>
        </div>

        <div class="testimonial-slider">
            <div class="testimonial-slide">
                <p class="text-2xl text-gray-700 leading-relaxed italic mb-6">
                    When I lost my job and struggled to feed my family, TRC's food drive ministry was there for us. But more than food, they gave us hope and showed us God's love in action.
                </p>
                <div class="flex items-center justify-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-red-600 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-xl">S</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">Sarah M.</h4>
                        <p class="text-gray-600">Community Member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Wave Divider -->
<div class="wave-divider"></div>

<!-- Get Involved -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="section-title">
            <h2 class="text-5xl md:text-6xl font-bold">
                <span class="bg-gradient-to-r from-purple-600 to-red-600 bg-clip-text text-transparent">
                    Join the Mission
                </span>
            </h2>
            <p class="text-xl text-gray-600 mt-4">God is calling you to make a difference</p>
        </div>

        <div class="involvement-grid max-w-6xl mx-auto">
            <div class="involvement-item">
                <div class="w-20 h-20 bg-gradient-to-r from-purple-600 to-red-600 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-hand-holding-heart text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Volunteer</h3>
                <p class="text-gray-600 leading-relaxed">
                    Join our team of dedicated volunteers and experience the joy of serving others while growing in your faith journey.
                </p>
            </div>

            <div class="involvement-item">
                <div class="w-20 h-20 bg-gradient-to-r from-red-600 to-purple-600 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-heart text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Support</h3>
                <p class="text-gray-600 leading-relaxed">
                    Partner with us financially to expand our reach and impact more lives with the transforming love of Jesus Christ.
                </p>
            </div>

            <div class="involvement-item">
                <div class="w-20 h-20 bg-gradient-to-r from-purple-600 to-red-600 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-pray text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Pray</h3>
                <p class="text-gray-600 leading-relaxed">
                    Become a prayer warrior for our ministry, interceding for those we serve and the communities we reach.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="cta-section text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">
                The Harvest is Ready
            </h2>
            <p class="text-2xl mb-8 opacity-90 leading-relaxed">
                "The harvest is plentiful but the workers are few. Ask the Lord of the harvest, therefore, to send out workers into his harvest field."
            </p>
            <p class="text-lg mb-12 opacity-75">
                Matthew 9:37-38
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contact" class="cta-button">
                    <i class="fas fa-envelope mr-2"></i>
                    Get Involved Today
                </a>
                <a href="tel:+254791049004" class="cta-button">
                    <i class="fas fa-phone mr-2"></i>
                    Call +254 791 049004
                </a>
                <a href="/donate" class="cta-button">
                    <i class="fas fa-heart mr-2"></i>
                    Support Our Mission
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Intersection Observer for mission items
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.mission-item').forEach(item => {
    observer.observe(item);
});

// Stagger text reveal animations
document.querySelectorAll('.text-reveal span').forEach((span, index) => {
    span.style.animationDelay = `${0.1 + (index * 0.2)}s`;
});

// Add floating elements dynamically
function addFloatingElement() {
    const element = document.createElement('div');
    element.className = 'float-item';
    element.style.left = Math.random() * 100 + '%';
    element.style.width = (Math.random() * 10 + 15) + 'px';
    element.style.height = element.style.width;
    element.style.animationDelay = '0s';
    
    document.querySelector('.floating-elements').appendChild(element);
    
    // Remove element after animation
    setTimeout(() => {
        element.remove();
    }, 20000);
}

// Add new floating elements periodically
setInterval(addFloatingElement, 3000);
</script>
@endsection