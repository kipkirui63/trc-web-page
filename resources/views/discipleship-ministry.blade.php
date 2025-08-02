@extends('layouts.app')

@section('title', 'Discipleship Ministry')
@section('description', 'Grow deeper in faith through Bible study, catechism classes, and cell groups at TRC AGC Church')

@section('styles')
<style>
    .gradient-overlay {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.9) 0%, rgba(220, 38, 38, 0.8) 100%);
    }
    
    .ministry-card {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    
    .ministry-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 30px 60px rgba(124, 58, 237, 0.2);
        background: rgba(255, 255, 255, 1);
    }
    
    .icon-glow {
        filter: drop-shadow(0 0 20px rgba(124, 58, 237, 0.4));
        transition: all 0.3s ease;
    }
    
    .ministry-card:hover .icon-glow {
        filter: drop-shadow(0 0 30px rgba(220, 38, 38, 0.6));
        transform: scale(1.1);
    }
    
    .text-shimmer {
        background: linear-gradient(45deg, #7c3aed, #dc2626, #7c3aed);
        background-size: 200% 200%;
        animation: shimmer 3s ease-in-out infinite;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    @keyframes shimmer {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .floating-element {
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-element:nth-child(2) {
        animation-delay: -2s;
    }
    
    .floating-element:nth-child(3) {
        animation-delay: -4s;
    }
    
    .section-bg {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        position: relative;
        overflow: hidden;
    }
    
    .section-bg::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 200%;
        background: radial-gradient(circle, rgba(124, 58, 237, 0.05) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .feature-highlight {
        position: relative;
        padding: 2rem;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }
    
    .feature-highlight:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .pulse-ring {
        position: absolute;
        border: 2px solid rgba(124, 58, 237, 0.3);
        border-radius: 50%;
        animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
    }
    
    @keyframes pulse-ring {
        0% {
            transform: scale(0.8);
            opacity: 1;
        }
        100% {
            transform: scale(2.5);
            opacity: 0;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Dynamic Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800"></div>
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    
    <!-- Animated Geometric Shapes -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- Large Cross Pattern -->
        <div class="absolute top-1/4 left-1/4 w-32 h-32 opacity-10">
            <div class="absolute inset-0 bg-white transform rotate-45 floating-element"></div>
            <div class="absolute top-1/2 left-1/2 w-1 h-full bg-white transform -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute top-1/2 left-1/2 w-full h-1 bg-white transform -translate-x-1/2 -translate-y-1/2"></div>
        </div>
        
        <!-- Floating Bible Icons -->
        <div class="absolute top-20 right-20 text-white text-4xl opacity-20 floating-element">
            <i class="fas fa-book-open"></i>
        </div>
        <div class="absolute bottom-32 left-20 text-white text-3xl opacity-15 floating-element" style="animation-delay: -2s;">
            <i class="fas fa-users"></i>
        </div>
        <div class="absolute top-1/2 right-10 text-white text-2xl opacity-25 floating-element" style="animation-delay: -4s;">
            <i class="fas fa-praying-hands"></i>
        </div>
        
        <!-- Glowing Orbs -->
        <div class="absolute top-16 left-1/3 w-24 h-24 bg-purple-500 rounded-full opacity-20 blur-xl floating-element"></div>
        <div class="absolute bottom-24 right-1/3 w-32 h-32 bg-pink-500 rounded-full opacity-15 blur-2xl floating-element" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-indigo-400 rounded-full opacity-30 blur-lg floating-element" style="animation-delay: -1s;"></div>
    </div>
    
    <!-- Main Content -->
    <div class="relative z-10 text-center text-white px-4 max-w-7xl mx-auto">
       
        <!-- Main Headline -->
        <h1 class="text-6xl md:text-8xl font-black mb-8 leading-tight">
            <span class="block text-white">Transform Your</span>
            <span class="block bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 bg-clip-text text-transparent animate-pulse">
                Faith Journey
            </span>
        </h1>
        
        <!-- Subtitle -->
        <p class="text-xl md:text-2xl mb-12 text-gray-200 max-w-4xl mx-auto leading-relaxed font-light">
            Join a community of believers committed to deepening their relationship with Christ through 
            <span class="text-yellow-300 font-semibold">Bible Study</span>, 
            <span class="text-pink-300 font-semibold">Catechism</span>, and 
            <span class="text-purple-300 font-semibold">Cell Groups</span>
        </p>
        
        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
            <button class="group relative overflow-hidden bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold py-4 px-10 rounded-full transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <span class="relative z-10">Start Your Journey</span>
                <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </button>
          
        </div>
      
        
        <!-- Scripture Quote -->
        <div class="max-w-5xl mx-auto backdrop-blur-lg  bg-opacity-10 rounded-3xl p-8 border border-white border-opacity-20 shadow-2xl">
            <blockquote class="text-lg md:text-xl font-medium mb-4 italic text-gray-100 leading-relaxed">
                "Therefore go and make disciples of all nations, baptizing them in the name of the Father and of the Son and of the Holy Spirit, teaching them to observe all that I have commanded you."
            </blockquote>
            <div class="flex items-center justify-center space-x-2">
                <div class="w-12 h-0.5 bg-gradient-to-r from-transparent to-yellow-400"></div>
                <cite class="text-yellow-400 font-bold text-lg">Matthew 28:19-20</cite>
                <div class="w-12 h-0.5 bg-gradient-to-l from-transparent to-yellow-400"></div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-8 h-12 border-2 border-white rounded-full flex justify-center items-start pt-2">
            <div class="w-1 h-3 bg-white rounded-full animate-pulse"></div>
        </div>
        <div class="text-white text-xs mt-2 tracking-wider">SCROLL</div>
    </div>
</section>

<!-- Main Content -->
<section class="section-bg py-20 relative">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Our <span class="text-gradient">Discipleship</span> Focus
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We believe in building strong foundations through three core pillars of discipleship
            </p>
        </div>
        
        <!-- Ministry Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Bible Study Card -->
            <div class="ministry-card rounded-3xl p-8 text-center group">
                <div class="relative mb-6">
                    <div class="pulse-ring w-20 h-20 mx-auto"></div>
                    <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-church-purple to-church-red rounded-2xl flex items-center justify-center mx-auto icon-glow">
                        <i class="fas fa-book-open text-3xl text-white"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Bible Study</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Dive deep into God's Word through systematic study, exploring the richness of Scripture with fellow believers in an environment of learning and growth.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center justify-center space-x-2 text-church-purple">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Verse-by-verse studies</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-church-purple">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Topical explorations</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-church-purple">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Interactive discussions</span>
                    </div>
                </div>
            </div>
            
            <!-- Catechism Card -->
            <div class="ministry-card rounded-3xl p-8 text-center group">
                <div class="relative mb-6">
                    <div class="pulse-ring w-20 h-20 mx-auto"></div>
                    <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-church-red to-church-purple rounded-2xl flex items-center justify-center mx-auto icon-glow">
                        <i class="fas fa-graduation-cap text-3xl text-white"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Catechism Classes</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Build a solid foundation of Christian doctrine and faith principles through structured teaching that equips you for lifelong spiritual growth.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center justify-center space-x-2 text-church-red">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Core doctrine</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-church-red">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Faith foundations</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-church-red">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Practical application</span>
                    </div>
                </div>
            </div>
            
            <!-- Cell Groups Card -->
            <div class="ministry-card rounded-3xl p-8 text-center group">
                <div class="relative mb-6">
                    <div class="pulse-ring w-20 h-20 mx-auto"></div>
                    <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-church-purple via-purple-500 to-church-red rounded-2xl flex items-center justify-center mx-auto icon-glow">
                        <i class="fas fa-users text-3xl text-white"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Cell Groups</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Experience authentic fellowship and accountability in small group settings where faith is strengthened through shared experiences and mutual support.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center justify-center space-x-2 text-purple-600">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Small group fellowship</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-purple-600">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Prayer & support</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-purple-600">
                        <i class="fas fa-check-circle"></i>
                        <span class="font-medium">Life application</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Why Join Our <span class="text-gradient">Discipleship</span> Journey?
            </h2>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="feature-highlight text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-red rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-seedling text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Spiritual Growth</h3>
                <p class="text-gray-600">Develop a deeper relationship with God through structured learning and spiritual disciplines.</p>
            </div>
            
            <div class="feature-highlight text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-church-red to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hands-helping text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Community</h3>
                <p class="text-gray-600">Build meaningful relationships with fellow believers who share your journey of faith.</p>
            </div>
            
            <div class="feature-highlight text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-church-purple rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-compass text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Direction</h3>
                <p class="text-gray-600">Gain clarity on God's purpose for your life through biblical wisdom and guidance.</p>
            </div>
            
            <div class="feature-highlight text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-red rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hands-praying text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Accountability</h3>
                <p class="text-gray-600">Experience the support and encouragement that comes from committed Christian fellowship.</p>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Section -->
<section class="section-bg py-20">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                <span class="text-gradient">Meeting</span> Schedule
            </h2>
            <p class="text-xl text-gray-600">Join us at these regular times for discipleship activities</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Bible Study Schedule -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-red rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-open text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Bible Study</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-calendar-alt text-church-purple"></i>
                        <span class="font-medium">Wednesday Evenings</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-clock text-church-purple"></i>
                        <span class="font-medium">8:30 PM - 9:30 PM</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-map-marker-alt text-church-purple"></i>
                        <span class="font-medium">Church Sanctuary</span>
                    </div>
                </div>
            </div>
            
            <!-- Catechism Schedule -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-church-red to-church-purple rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Catechism Classes</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-calendar-alt text-church-red"></i>
                        <span class="font-medium">Saturday Mornings</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-clock text-church-red"></i>
                        <span class="font-medium">9:00 AM - 10:30 AM</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-map-marker-alt text-church-red"></i>
                        <span class="font-medium">Fellowship Hall</span>
                    </div>
                </div>
            </div>
            
            <!-- Cell Groups Schedule -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-church-red rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Cell Groups</h3>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-calendar-alt text-purple-600"></i>
                        <span class="font-medium">Various Days</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-clock text-purple-600"></i>
                        <span class="font-medium">Flexible Times</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-map-marker-alt text-purple-600"></i>
                        <span class="font-medium">Various Locations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="relative py-20 overflow-hidden">
    <div class="absolute inset-0 gradient-overlay"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Begin Your <span class="text-shimmer">Discipleship Journey?</span>
        </h2>
        <p class="text-xl text-gray-200 mb-8 max-w-3xl mx-auto">
            Take the next step in your faith journey. Join us for Bible study, catechism classes, or find a cell group near you.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="contact" class="bg-white text-church-purple font-bold py-4 px-8 rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Get Connected Today
            </a>
            <a href="about" class="border-2 border-white text-white font-bold py-4 px-8 rounded-full hover:bg-white hover:text-church-purple transition-all duration-300 transform hover:scale-105">
                Learn More About Us
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add fade-in animation to elements on scroll
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
    
    // Observe all cards and features
    document.querySelectorAll('.ministry-card, .feature-highlight').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
</script>
@endsection