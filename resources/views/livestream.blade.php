@extends('layouts.app')

@section('title', 'Live Stream')
@section('description', 'Join our live worship service every Sunday at 10:00 AM.')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Heading -->
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Live Stream</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Join us every Sunday at 10:00 AM for our worship service.
            </p>
        </div>

        <!-- Tabs -->
        <div class="flex justify-center mb-6 space-x-4">
            <button id="tab-youtube"
                class="px-4 py-2 rounded-lg bg-church-purple text-white font-semibold hover:bg-purple-700">
                YouTube
            </button>
            <button id="tab-facebook"
                class="px-4 py-2 rounded-lg bg-gray-200 text-gray-800 font-semibold hover:bg-gray-300">
                Facebook
            </button>
        </div>

        <!-- Countdown -->
        <div id="countdown" class="text-center mb-10 text-2xl font-bold text-church-purple"></div>

        <!-- Stream Containers -->
        <div id="youtube-container" class="hidden">
            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Video -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="aspect-video">
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
                <!-- Chat -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <iframe id="youtube-chat"
                        class="w-full h-[600px]"
                        src=""
                        frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>

        <div id="facebook-container" class="hidden">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <iframe id="facebook-frame"
                    src=""
                    width="100%" height="600"
                    style="border:none;overflow:hidden"
                    scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>
        </div>

    </div>
</section>

<script>
    // ---------- CONFIG ----------
    const YOUTUBE_VIDEO_ID = "YOUR_VIDEO_ID";   // e.g. "dQw4w9WgXcQ"
    const YOUTUBE_CHANNEL_ID = "YOUR_CHANNEL_ID"; // UCxxxxxx
    const FACEBOOK_PAGE = "YOUR_PAGE";          // e.g. "YourChurchPage"
    const FACEBOOK_VIDEO_ID = "YOUR_VIDEO_ID";  // numeric

    // Countdown target (next Sunday at 10 AM)
    function getNextSunday10am() {
        const now = new Date();
        const date = new Date();
        date.setDate(now.getDate() + (7 - now.getDay()) % 7); // next Sunday
        date.setHours(10, 0, 0, 0); // 10:00:00
        if (date < now) { date.setDate(date.getDate() + 7); } // if today past 10am, go to next week
        return date;
    }
    const targetDate = getNextSunday10am();

    // Countdown
    const countdownEl = document.getElementById("countdown");
    const youtubeContainer = document.getElementById("youtube-container");
    const facebookContainer = document.getElementById("facebook-container");
    const youtubeFrame = document.getElementById("youtube-frame");
    const youtubeChat = document.getElementById("youtube-chat");
    const facebookFrame = document.getElementById("facebook-frame");

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance <= 0) {
            countdownEl.innerHTML = "🔴 We are Live!";
            // Load YouTube live
            youtubeFrame.src = `https://www.youtube.com/embed/live_stream?channel=${YOUTUBE_CHANNEL_ID}`;
            youtubeChat.src = `https://www.youtube.com/live_chat?v=${YOUTUBE_VIDEO_ID}&embed_domain=${window.location.hostname}`;
            facebookFrame.src = `https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/${FACEBOOK_PAGE}/videos/${FACEBOOK_VIDEO_ID}`;
            youtubeContainer.classList.remove("hidden");
        } else {
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            countdownEl.innerHTML =
                `${days}d ${hours}h ${minutes}m ${seconds}s until we go Live`;
        }
    }
    setInterval(updateCountdown, 1000);
    updateCountdown();

    // Tabs
    const tabYoutube = document.getElementById("tab-youtube");
    const tabFacebook = document.getElementById("tab-facebook");

    tabYoutube.addEventListener("click", () => {
        youtubeContainer.classList.remove("hidden");
        facebookContainer.classList.add("hidden");
        tabYoutube.classList.add("bg-church-purple", "text-white");
        tabFacebook.classList.remove("bg-church-purple", "text-white");
        tabFacebook.classList.add("bg-gray-200", "text-gray-800");
    });

    tabFacebook.addEventListener("click", () => {
        youtubeContainer.classList.add("hidden");
        facebookContainer.classList.remove("hidden");
        tabFacebook.classList.add("bg-church-purple", "text-white");
        tabYoutube.classList.remove("bg-church-purple", "text-white");
        tabYoutube.classList.add("bg-gray-200", "text-gray-800");
    });
</script>
@endsection
