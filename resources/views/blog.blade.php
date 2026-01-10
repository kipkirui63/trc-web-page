@extends('layouts.app')

@section('title', 'Blog')

@section('description', 'Read inspiring articles, updates, and stories from TRC AGC Church to grow in faith and stay connected.')

@section('content')
<!-- Professional Hero Section -->
<section class="relative py-32 bg-gradient-to-br from-gray-900 via-church-purple to-indigo-900 overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Professional Badge -->
            <div class="inline-flex items-center px-5 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white text-sm font-medium mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                Insights & Updates
            </div>
            
            <!-- Clean Heading -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight">
                Church Blog
            </h1>
            
            <!-- Professional Subtitle -->
            <p class="text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Explore sermons, events, and pastoral reflections that inspire faith and strengthen our community
            </p>
        </div>
    </div>
    
    <!-- Clean Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- Professional Categories Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <span class="inline-block px-4 py-1 bg-church-purple/10 text-church-purple text-sm font-semibold rounded-full mb-4">
                Content Categories
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Explore Our Ministry
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Discover meaningful content across three core areas of our church life
            </p>
        </div>

        <!-- Professional Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

            <!-- Sermon Recaps Card -->
            <article class="group bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-church-purple/30 hover:shadow-2xl transition-all duration-500">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/sermon.jpg') }}" 
                         alt="Weekly Sermon Recaps" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0"></div>
                    
                    <!-- Category Label -->
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1 bg-white/95 backdrop-blur-sm text-church-purple text-xs font-semibold rounded-lg shadow-lg">
                            WEEKLY
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex items-center gap-2 text-church-purple mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900">
                            Sermon Recaps
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Comprehensive summaries of Sunday sermons with key scriptures and reflection questions to guide your spiritual growth throughout the week.
                    </p>
                    
                    <a href="{{ route('blog.category', 'sermons') }}" 
                       class="inline-flex items-center text-church-purple font-semibold hover:gap-3 gap-2 transition-all duration-300 group/link">
                        <span>Explore Sermons</span>
                        <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Events & Announcements Card -->
            <article class="group bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-church-gold/30 hover:shadow-2xl transition-all duration-500">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/events.jpg') }}" 
                         alt="Events & Announcements" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0"></div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1 bg-white/95 backdrop-blur-sm text-church-gold text-xs font-semibold rounded-lg shadow-lg">
                            UPCOMING
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex items-center gap-2 text-church-gold mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900">
                            Events & Announcements
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Stay informed about church activities, special services, and community gatherings that bring us together in fellowship and worship.
                    </p>
                    
                    <a href="{{ route('blog.category', 'events') }}" 
                       class="inline-flex items-center text-church-gold font-semibold hover:gap-3 gap-2 transition-all duration-300 group/link">
                        <span>View Calendar</span>
                        <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Pastor's Desk Card -->
            <article class="group bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-indigo-600/30 hover:shadow-2xl transition-all duration-500">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/pastor.jpg') }}" 
                         alt="Pastor's Desk" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0"></div>
                    
                    <div class="absolute top-4 left-4">
                        <span class="inline-block px-3 py-1 bg-white/95 backdrop-blur-sm text-indigo-600 text-xs font-semibold rounded-lg shadow-lg">
                            FEATURED
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex items-center gap-2 text-indigo-600 mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900">
                            Pastor's Desk
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Personal reflections and deeper biblical teaching from our pastor on living authentically for Christ in contemporary society.
                    </p>
                    
                    <a href="{{ route('blog.category', 'pastors-desk') }}" 
                       class="inline-flex items-center text-indigo-600 font-semibold hover:gap-3 gap-2 transition-all duration-300 group/link">
                        <span>Read Reflections</span>
                        <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- Optional CTA Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-12 text-center border border-gray-100">
            <div class="w-16 h-16 bg-church-purple/10 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-8 h-8 text-church-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Never Miss an Update
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Subscribe to receive the latest sermons, event announcements, and spiritual insights directly in your inbox
            </p>
            <button class="inline-flex items-center px-8 py-4 bg-church-purple text-white font-semibold rounded-xl hover:bg-church-purple/90 transition-colors duration-300 shadow-lg hover:shadow-xl">
                Subscribe to Newsletter
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<style>
/* Clean, professional transitions */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/* Smooth hover effects */
article {
    transform-origin: center;
}

/* Professional focus states */
a:focus-visible,
button:focus-visible {
    outline: 2px solid var(--church-purple, #7C3AED);
    outline-offset: 4px;
}
</style>

@endsection