@extends('layouts.app')

@section('title', 'Blog')

@section('description', 'Read inspiring articles, updates, and stories from TRC AGC Church to grow in faith and stay connected.')



@section('content')
<!-- Hero Section with Gradient Background -->
<section class="relative py-24 bg-gradient-to-br from-church-purple via-purple-700 to-indigo-800 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-48 h-48 bg-church-gold/20 rounded-full blur-2xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <!-- Animated Badge -->
            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-6 animate-fadeInUp">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Weekly Updates & Inspiration
            </div>
            
            <!-- Main Heading with Gradient Text -->
            <h1 class="text-6xl md:text-7xl font-bold mb-6 animate-fadeInUp delay-200">
                <span class="bg-gradient-to-r from-white via-church-gold to-white bg-clip-text text-transparent">
                    Our Blog
                </span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl text-white/90 max-w-3xl mx-auto mb-8 leading-relaxed animate-fadeInUp delay-400">
                Discover weekly sermons, upcoming events, and inspiring reflections from our pastor. 
                Join us on a journey of faith, community, and spiritual growth.
            </p>
            
            <!-- Decorative Divider -->
            <div class="flex items-center justify-center space-x-4 animate-fadeInUp delay-600">
                <div class="w-16 h-0.5 bg-gradient-to-r from-transparent to-church-gold"></div>
                <div class="w-2 h-2 bg-church-gold rounded-full"></div>
                <div class="w-8 h-0.5 bg-church-gold"></div>
                <div class="w-2 h-2 bg-church-gold rounded-full"></div>
                <div class="w-16 h-0.5 bg-gradient-to-l from-transparent to-church-gold"></div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 50% 50%, #7C3AED 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Introduction -->
        <div class="text-center mb-16">
            <div class="inline-block px-6 py-2 bg-church-purple/10 rounded-full text-church-purple font-semibold text-sm mb-4">
                Explore Our Content
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-6">
                Three Pillars of Our Ministry
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Each category offers unique insights into our church life and spiritual journey together.
            </p>
        </div>

        <!-- Enhanced Blog Categories Grid -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

            <!-- Weekly Sermon Recaps -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                <!-- Gradient Overlay on Image -->
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/sermon.jpg') }}" alt="Weekly Sermon Recaps" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-church-purple/80 via-church-purple/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4 px-3 py-1 bg-church-purple/90 backdrop-blur-sm rounded-full text-white text-xs font-semibold">
                        Weekly Content
                    </div>
                    
                    <!-- Floating Icon -->
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-church-gold/90 transition-colors duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-church-purple mb-4 group-hover:text-church-purple/80 transition-colors">
                        Weekly Sermon Recaps
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Short summaries of Sunday sermons with key scriptures and reflection questions 
                        to guide your week and deepen your faith journey.
                    </p>
                    
                    <!-- Enhanced CTA Button -->
                    <a href="{{ route('blog.category', 'sermons') }}" 
                       class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-church-purple to-purple-700 text-white font-semibold rounded-xl hover:from-church-purple/90 hover:to-purple-700/90 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Explore Recaps</span>
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Decorative Corner -->
                <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-br from-church-gold/20 to-transparent rounded-tl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <!-- Upcoming Events & Announcements -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/events.jpg') }}" alt="Events & Announcements" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-church-purple/80 via-church-purple/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute top-4 left-4 px-3 py-1 bg-church-gold/90 backdrop-blur-sm rounded-full text-white text-xs font-semibold">
                        Community Events
                    </div>
                    
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-church-gold/90 transition-colors duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-church-purple mb-4 group-hover:text-church-purple/80 transition-colors">
                        Upcoming Events & Announcements
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Stay updated with what's happening in our church — from choir nights 
                        to youth fellowship and special services that bring our community together.
                    </p>
                    
                    <a href="{{ route('blog.category', 'events') }}" 
                       class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-church-gold to-yellow-500 text-white font-semibold rounded-xl hover:from-church-gold/90 hover:to-yellow-500/90 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>View Events</span>
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-br from-church-gold/20 to-transparent rounded-tl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <!-- Pastor's Desk -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/pastor.jpg') }}" alt="Pastor's Desk" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-church-purple/80 via-church-purple/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute top-4 left-4 px-3 py-1 bg-indigo-600/90 backdrop-blur-sm rounded-full text-white text-xs font-semibold">
                        Spiritual Guidance
                    </div>
                    
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-church-gold/90 transition-colors duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </div>
                </div>
                
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-church-purple mb-4 group-hover:text-church-purple/80 transition-colors">
                        Pastor's Desk
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Reflections, deeper teaching, and thoughts from our pastor on living a 
                        Christ-centered life in today's world with wisdom and grace.
                    </p>
                    
                    <a href="{{ route('blog.category', 'pastors-desk') }}" 
                       class="group/btn inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:from-indigo-600/90 hover:to-purple-600/90 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Read Pastor's Desk</span>
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                
                <div class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-br from-church-gold/20 to-transparent rounded-tl-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

        </div>
    </div>
</section>

<!-- Newsletter Subscription Section -->
<section class="py-20 bg-gradient-to-r from-church-purple to-purple-800 relative overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute inset-0">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-church-gold/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block px-6 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white font-semibold text-sm mb-6">
                Stay Connected
            </div>
            
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Never Miss an Update
            </h2>
            
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                Subscribe to our newsletter and receive weekly inspiration, event updates, 
                and spiritual insights directly in your inbox.
            </p>
            
            <!-- Newsletter Form -->
            <div class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" 
                           placeholder="Enter your email address"
                           class="flex-1 px-6 py-4 rounded-xl border-0 text-gray-800 placeholder-gray-500 focus:ring-4 focus:ring-church-gold/30 focus:outline-none shadow-lg">
                    <button class="px-8 py-4 bg-church-gold hover:bg-church-gold/90 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Subscribe
                    </button>
                </div>
                <p class="text-white/70 text-sm mt-4">
                    Join over 500 church members receiving weekly updates
                </p>
            </div>
        </div>
    </div>
</section>

<style>
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

.animate-fadeInUp {
    animation: fadeInUp 0.8s ease-out forwards;
}

.delay-200 {
    animation-delay: 0.2s;
}

.delay-400 {
    animation-delay: 0.4s;
}

.delay-600 {
    animation-delay: 0.6s;
}

.delay-1000 {
    animation-delay: 1s;
}

/* Ensure smooth animations */
* {
    transition-property: transform, opacity, background-color, border-color, text-decoration-color, fill, stroke, box-shadow;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

@endsection