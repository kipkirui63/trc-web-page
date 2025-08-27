@extends('layouts.app')

@section('content')
<!-- Blog Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Section Heading -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-church-purple mb-4">Our Blog</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Stay inspired with weekly sermons, updates, and reflections from our pastor.
            </p>
        </div>

        <!-- Blog Categories Grid -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- Weekly Sermon Recaps -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden">
                <img src="{{ asset('images/sermon.jpg') }}" alt="Weekly Sermon Recaps" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-church-purple mb-3">Weekly Sermon Recaps</h3>
                    <p class="text-gray-600 mb-4">
                        Short summaries of Sunday sermons with key scriptures and reflection questions 
                        to guide your week.
                    </p>
                    <a href="{{ route('blog.category', 'sermons') }}" 
                       class="text-church-purple font-semibold hover:underline">
                        Explore Recaps →
                    </a>
                </div>
            </div>

            <!-- Upcoming Events & Announcements -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden">
                <img src="{{ asset('images/events.jpg') }}" alt="Events & Announcements" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-church-purple mb-3">Upcoming Events & Announcements</h3>
                    <p class="text-gray-600 mb-4">
                        Stay updated with what’s happening in our church — from choir nights 
                        to youth fellowship and special services.
                    </p>
                    <a href="{{ route('blog.category', 'events') }}" 
                       class="text-church-purple font-semibold hover:underline">
                        View Events →
                    </a>
                </div>
            </div>

            <!-- Pastor’s Desk -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden">
                <img src="{{ asset('images/pastor.jpg') }}" alt="Pastor's Desk" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-church-purple mb-3">Pastor’s Desk</h3>
                    <p class="text-gray-600 mb-4">
                        Reflections, deeper teaching, and thoughts from our pastor on living a 
                        Christ-centered life in today’s world.
                    </p>
                    <a href="{{ route('blog.category', 'pastors-desk') }}" 
                       class="text-church-purple font-semibold hover:underline">
                        Read Pastor’s Desk →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
