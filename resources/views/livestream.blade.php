@extends('layouts.app')

@section('title', 'Live Stream')
@section('description', 'Join our live worship service every Sunday at 10:00 AM.')

@section('styles')

@section('content')
<!-- Hero Section with Live Animation -->
<section class="relative py-24 bg-gradient-to-br from-church-purple via-purple-800 to-indigo-900 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-32 h-32 bg-church-gold/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-white/10 rounded-full blur-2xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-church-gold/10 rounded-full blur-3xl animate-pulse delay-500"></div>
        <!-- Floating particles -->
        <div class="particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <!-- Live Badge -->
            <div class="inline-flex items-center px-6 py-3 bg-red-500/20 backdrop-blur-sm rounded-full text-white mb-6 animate-pulse">
                <div class="w-3 h-3 bg-red-500 rounded-full mr-3 animate-ping"></div>
                <span class="font-semibold">LIVE WORSHIP SERVICE</span>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-6xl md:text-7xl font-bold mb-6 animate-fadeInUp">
                <span class="bg-gradient-to-r from-white via-church-gold to-white bg-clip-text text-transparent">
                    Join Us Live
                </span>
            </h1>
            
            <!-- Service Info -->
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-8 text-white/90 text-lg mb-8 animate-fadeInUp delay-200">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-2 text-church-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Every Sunday • 10:00 AM
                </div>
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-2 text-church-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Streaming Worldwide
                </div>
            </div>
            
            <!-- Subtitle -->
            <p class="text-xl text-white/80 max-w-3xl mx-auto mb-10 leading-relaxed animate-fadeInUp delay-400">
                Experience worship, fellowship, and spiritual growth from anywhere in the world. 
                Our live service brings our community together in faith and praise.
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-gradient-to-b from-gray-50 to-white relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 50% 50%, #7C3AED 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        
        <!-- Enhanced Countdown -->
        <div class="text-center mb-12">
            <div id="countdown" class="inline-block bg-white rounded-2xl shadow-lg px-8 py-6 mb-8">
                <div class="text-sm text-gray-500 uppercase tracking-wide font-semibold mb-2">Next Service Begins In</div>
                <div class="countdown-display flex items-center justify-center space-x-4 text-2xl md:text-3xl font-bold text-church-purple">
                    <div class="countdown-item text-center">
                        <div id="days" class="countdown-number bg-church-purple/10 rounded-lg px-4 py-2 min-w-16">0</div>
                        <div class="countdown-label text-sm text-gray-500 mt-1">DAYS</div>
                    </div>
                    <div class="countdown-separator text-church-purple">:</div>
                    <div class="countdown-item text-center">
                        <div id="hours" class="countdown-number bg-church-purple/10 rounded-lg px-4 py-2 min-w-16">0</div>
                        <div class="countdown-label text-sm text-gray-500 mt-1">HOURS</div>
                    </div>
                    <div class="countdown-separator text-church-purple">:</div>
                    <div class="countdown-item text-center">
                        <div id="minutes" class="countdown-number bg-church-purple/10 rounded-lg px-4 py-2 min-w-16">0</div>
                        <div class="countdown-label text-sm text-gray-500 mt-1">MINS</div>
                    </div>
                    <div class="countdown-separator text-church-purple">:</div>
                    <div class="countdown-item text-center">
                        <div id="seconds" class="countdown-number bg-church-purple/10 rounded-lg px-4 py-2 min-w-16">0</div>
                        <div class="countdown-label text-sm text-gray-500 mt-1">SECS</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Platform Tabs -->
        <div class="flex justify-center mb-12">
            <div class="bg-white rounded-2xl shadow-lg p-2 inline-flex">
                <button id="tab-youtube"
                    class="tab-button active px-8 py-4 rounded-xl font-semibold transition-all duration-300 flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                    <span>YouTube Live</span>
                </button>
                <button id="tab-facebook"
                    class="tab-button px-8 py-4 rounded-xl font-semibold transition-all duration-300 flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span>Facebook Live</span>
                </button>
            </div>
        </div>

        <!-- Enhanced Stream Containers -->
        <div id="youtube-container" class="stream-container">
            <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Video Section -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                        <!-- Header -->
                        <div class="bg-gradient-to-r from-red-600 to-red-700 px-6 py-4 flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                                <span class="text-white font-semibold">Live Worship Service</span>
                            </div>
                            <div class="flex items-center space-x-2 text-white/80 text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <span id="viewer-count">0 watching</span>
                            </div>
                        </div>
                        <!-- Video Frame -->
                        <div class="aspect-video bg-gray-900 flex items-center justify-center">
                            <iframe id="youtube-frame"
                                class="w-full h-full"
                                src=""
                                title="Church Live Stream"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Chat Section -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 h-full">
                        <!-- Chat Header -->
                        <div class="bg-gradient-to-r from-church-gold to-yellow-500 px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                <span class="text-white font-semibold">Live Chat</span>
                            </div>
                        </div>
                        <!-- Chat Frame -->
                        <div class="h-[500px] lg:h-[600px]">
                            <iframe id="youtube-chat"
                                class="w-full h-full"
                                src=""
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="facebook-container" class="stream-container hidden">
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                    <!-- Header -->
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                            <span class="text-white font-semibold">Facebook Live Stream</span>
                        </div>
                    </div>
                    <!-- Facebook Frame -->
                    <div class="bg-gray-100 p-4">
                        <iframe id="facebook-frame"
                            src=""
                            class="w-full h-[600px] rounded-lg"
                            style="border:none;overflow:hidden"
                            scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Service Information Section -->
<section class="py-16 bg-gradient-to-r from-church-purple to-purple-800">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">What to Expect</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-church-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-church-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Worship & Praise</h3>
                    <p class="text-white/80">Uplifting music and songs of praise</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-church-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-church-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Scripture Teaching</h3>
                    <p class="text-white/80">Biblical messages for spiritual growth</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-church-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-church-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Community Prayer</h3>
                    <p class="text-white/80">Join us in fellowship and prayer</p>
                </div>
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

.delay-500 {
    animation-delay: 0.5s;
}

.delay-1000 {
    animation-delay: 1s;
}

/* Floating Particles */
.particles {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.particle:nth-child(1) {
    width: 4px;
    height: 4px;
    left: 20%;
    animation-delay: 0s;
    animation-duration: 6s;
}

.particle:nth-child(2) {
    width: 6px;
    height: 6px;
    left: 40%;
    animation-delay: -2s;
    animation-duration: 8s;
}

.particle:nth-child(3) {
    width: 3px;
    height: 3px;
    left: 60%;
    animation-delay: -4s;
    animation-duration: 10s;
}

.particle:nth-child(4) {
    width: 5px;
    height: 5px;
    left: 80%;
    animation-delay: -6s;
    animation-duration: 7s;
}

.particle:nth-child(5) {
    width: 4px;
    height: 4px;
    left: 90%;
    animation-delay: -8s;
    animation-duration: 9s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
    }
    10%, 90% {
        opacity: 1;
    }
    50% {
        transform: translateY(-10vh) rotate(180deg);
    }
}

/* Tab Styles */
.tab-button {
    color: #6B7280;
    background: transparent;
}

.tab-button.active {
    background: linear-gradient(to right, #DC2626, #EF4444);
    color: white;
    box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
}

.tab-button:not(.active):hover {
    background: #F3F4F6;
    color: #374151;
}

/* Stream Container Animation */
.stream-container {
    animation: slideInUp 0.6s ease-out;
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Countdown Animation */
.countdown-number {
    transition: all 0.3s ease;
}

.countdown-number.updating {
    background: linear-gradient(to right, #7C3AED, #8B5CF6) !important;
    color: white;
    transform: scale(1.1);
}

/* Live Pulse Effect */
@keyframes livePulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

.live-indicator {
    animation: livePulse 2s ease-in-out infinite;
}
</style>

<script>
    // ---------- CONFIG ----------
    const YOUTUBE_VIDEO_ID = "YOUR_VIDEO_ID";   
    const YOUTUBE_CHANNEL_ID = "YOUR_CHANNEL_ID"; 
    const FACEBOOK_PAGE = "YOUR_PAGE";          
    const FACEBOOK_VIDEO_ID = "YOUR_VIDEO_ID";  

    // DOM Elements
    const countdownEl = document.getElementById("countdown");
    const daysEl = document.getElementById("days");
    const hoursEl = document.getElementById("hours");
    const minutesEl = document.getElementById("minutes");
    const secondsEl = document.getElementById("seconds");
    const youtubeContainer = document.getElementById("youtube-container");
    const facebookContainer = document.getElementById("facebook-container");
    const youtubeFrame = document.getElementById("youtube-frame");
    const youtubeChat = document.getElementById("youtube-chat");
    const facebookFrame = document.getElementById("facebook-frame");
    const viewerCount = document.getElementById("viewer-count");
    const tabYoutube = document.getElementById("tab-youtube");
    const tabFacebook = document.getElementById("tab-facebook");

    // Get next Sunday at 10 AM
    function getNextSunday10am() {
        const now = new Date();
        const date = new Date();
        date.setDate(now.getDate() + (7 - now.getDay()) % 7);
        date.setHours(10, 0, 0, 0);
        if (date < now) { 
            date.setDate(date.getDate() + 7); 
        }
        return date;
    }

    const targetDate = getNextSunday10am();
    let isLive = false;

    // Enhanced countdown with animations
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance <= 0 && !isLive) {
            isLive = true;
            // Show live state
            countdownEl.innerHTML = `
                <div class="inline-flex items-center space-x-3 bg-red-500/20 backdrop-blur-sm rounded-2xl px-8 py-4 border border-red-500/30">
                    <div class="w-4 h-4 bg-red-500 rounded-full animate-ping"></div>
                    <span class="text-2xl font-bold text-red-600">🔴 WE ARE LIVE!</span>
                </div>
            `;
            
            // Load streams
            youtubeFrame.src = `https://www.youtube.com/embed/live_stream?channel=${YOUTUBE_CHANNEL_ID}`;
            youtubeChat.src = `https://www.youtube.com/live_chat?v=${YOUTUBE_VIDEO_ID}&embed_domain=${window.location.hostname}`;
            facebookFrame.src = `https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/${FACEBOOK_PAGE}/videos/${FACEBOOK_VIDEO_ID}`;
            
            // Simulate viewer count (in real app, get from API)
            simulateViewerCount();
            
        } else if (!isLive) {
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Update countdown with animation
            updateCountdownDisplay(daysEl, days);
            updateCountdownDisplay(hoursEl, hours);
            updateCountdownDisplay(minutesEl, minutes);
            updateCountdownDisplay(secondsEl, seconds);
        }
    }

    function updateCountdownDisplay(element, value) {
        const currentValue = parseInt(element.textContent);
        if (currentValue !== value) {
            element.classList.add('updating');
            setTimeout(() => {
                element.textContent = value.toString().padStart(2, '0');
                element.classList.remove('updating');
            }, 150);
        }
    }

    function simulateViewerCount() {
        let count = Math.floor(Math.random() * 200) + 50;
        const updateViewer = () => {
            count += Math.floor(Math.random() * 10) - 5;
            count = Math.max(count, 30);
            viewerCount.textContent = `${count} watching`;
        };
        setInterval(updateViewer, 5000);
        updateViewer();
    }

    // Tab switching with smooth transitions
    function switchToYoutube() {
        youtubeContainer.classList.remove("hidden");
        facebookContainer.classList.add("hidden");
        
        tabYoutube.classList.add("active");
        tabFacebook.classList.remove("active");
    }

    function switchToFacebook() {
        youtubeContainer.classList.add("hidden");
        facebookContainer.classList.remove("hidden");
        
        tabFacebook.classList.add("active");
        tabYoutube.classList.remove("active");
    }

    // Event listeners
    tabYoutube.addEventListener("click", switchToYoutube);
    tabFacebook.addEventListener("click", switchToFacebook);

    // Initialize
    setInterval(updateCountdown, 1000);
    updateCountdown();
    
    // Show YouTube by default
    switchToYoutube();

    // Add smooth scrolling to countdown when live
    function scrollToStream() {
        if (isLive) {
            document.querySelector('#youtube-container, #facebook-container').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    countdownEl.addEventListener('click', scrollToStream);
</script>
@endsection