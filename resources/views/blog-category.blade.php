<!-- Blog Category Page -->
@extends('layouts.app')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Page Heading -->
        <div class="text-center mb-16">
            @if($category === 'sermons')
                <h2 class="text-4xl font-bold text-church-purple mb-4">Weekly Sermon Recaps</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Catch up on recent Sunday sermons, key scriptures, and reflection questions for your spiritual journey.
                </p>
            @elseif($category === 'events')
                <h2 class="text-4xl font-bold text-church-purple mb-4">Upcoming Events & Announcements</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Stay informed about church events, services, and fellowship opportunities happening soon.
                </p>
            @elseif($category === 'pastors-desk')
                <h2 class="text-4xl font-bold text-church-purple mb-4">Pastor’s Desk</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Reflections, insights, and biblical wisdom shared directly by our pastor.
                </p>
            @endif
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- Example Post Card -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden">
                <img src="/images/sample.jpg" alt="Post Image" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-church-purple mb-3">Sample Blog Post Title</h3>
                    <p class="text-gray-600 mb-4">
                        A short excerpt or summary of the blog post goes here. It should be engaging and encourage the reader to click.
                    </p>
                    <a href="#" class="text-church-purple font-semibold hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

            <!-- Duplicate cards for now (you’ll loop through posts later from DB) -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden">
                <img src="/images/sample2.jpg" alt="Post Image" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-church-purple mb-3">Another Post Title</h3>
                    <p class="text-gray-600 mb-4">Another short summary of this blog entry goes here.</p>
                    <a href="#" class="text-church-purple font-semibold hover:underline">Read More →</a>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition duration-300 overflow-hidden">
                <img src="/images/sample3.jpg" alt="Post Image" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-church-purple mb-3">Final Example Post</h3>
                    <p class="text-gray-600 mb-4">This space will later be filled dynamically with content from your database.</p>
                    <a href="#" class="text-church-purple font-semibold hover:underline">Read More →</a>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
