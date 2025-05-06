@extends('layouts.app')

@section('title', 'Home')

@section('description', 'TRC AGC Church - The Whole Gospel to the Whole World')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen">
    <!-- Full-width background image -->
    <div class="absolute inset-0 z-0">
        <img src="https://i.pinimg.com/736x/b2/13/0f/b2130ff39bf55401962c266f7fd9e5c8.jpg" alt="Person praying in church" class="w-full h-full object-cover" />
        
    </div>
    
    <!-- Content positioned over the image -->
    <div class="relative z-10 flex flex-col justify-center h-full px-6 md:px-16 max-w-5xl mx-auto text-white">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">Find Peace and Purpose</h2>
        <p class="text-xl md:text-2xl mb-8 max-w-2xl">Join us on a spiritual journey where love, faith, and community converge to uplift hearts and spread God's message.</p>
        
        <div class="flex flex-col sm:flex-row gap-4 mb-12">
            <a href="/visit" class="bg-purple-800 hover:bg-purple-900 text-white font-medium py-3 px-8 rounded-md transition text-center inline-block max-w-xs">Visit Us</a>
            <a href="/watch" class="bg-transparent border-2 border-white hover:bg-white hover:text-purple-800 text-white font-medium py-3 px-8 rounded-md transition text-center inline-block max-w-xs">Watch Live</a>
        </div>
        
        <!-- Service Times -->
        <div class="p-6 rounded-lg border border-gray-500 max-w-lg">
            <h3 class="text-xl font-bold text-white mb-4">This Week's Service Times</h3>
            <div class="space-y-3 text-gray-100">
                <div class="flex justify-between">
                    <span class="font-medium">Sunday Worship:</span>
                    <span>10:00 AM - 12:00 PM</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium">Sunday School:</span>
                    <span>11:15 AM</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-medium">Wednesday Bible Study:</span>
                    <span>8:30 PM - 9:30 PM</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mission & Vision -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">Our Mission & Vision</h2>
            <div class="w-20 h-1 bg-church-red mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <div class="text-4xl text-church-purple mb-4">
                    <i class="fas fa-cross"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Our Vision</h3>
                <p class="text-gray-700">The Whole Church taking the Whole Gospel to the Whole world</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <div class="text-4xl text-church-purple mb-4">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Our Mission</h3>
                <p class="text-gray-700">The purpose of the Africa Gospel Church is to fulfill the Great Commandment and Great commission of the Lord Jesus Christ according to the Great Plan (Mark 12: 30,31 Mathew 28:19,20 Acts 1:8).</p>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section class="py-16 bg-gray-50 hero-pattern">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">What We Do</h2>
            <p class="text-lg text-gray-600">We support children and youth to reach their full potential!</p>
            <div class="w-20 h-1 bg-church-red mx-auto mt-2"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mb-4">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">We Find & Fund</h3>
                    <p class="text-gray-600">We are in search of opportunities to help as many youths as possible. We approach and fund all those who are in need.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mb-4">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">We Educate</h3>
                    <p class="text-gray-600">Today's youth need a helpful hand and right guidance at every stage. Here's where we take care of them like our own.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mb-4">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">We Provide Care</h3>
                    <p class="text-gray-600">We build schools for the underprivileged children so they are encouraged to attend school with their friends.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">We Consult</h3>
                    <p class="text-gray-600">We run small-scale schools for the underprivileged children and youth of daily wage workers for a better future.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mb-4">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">We Build Schools</h3>
                    <p class="text-gray-600">We run organizations where we employ youngsters so they can live their dreams for themselves and their families.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-church-purple-light flex items-center justify-center text-white text-xl mb-4">
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">We Strengthen</h3>
                    <p class="text-gray-600">We believe that education, and employment gives people an inner strength to lead a better life.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Care For -->

<!-- Upcoming Events -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">Upcoming Events</h2>
            <div class="w-20 h-1 bg-church-red mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Event 1 -->
            <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden">
                <div class="bg-church-purple text-white p-3 flex justify-between">
                    <span class="font-bold text-lg">MAY 12</span>
                    <span>10:00 AM</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Sunday Worship Service</h3>
                    <p class="text-gray-600 mb-4">Join us for our weekly worship service with Pastor John Smith.</p>
                    <a href="#" class="text-church-purple hover:text-church-purple-light font-medium inline-flex items-center">
                        Learn More
                        <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden">
                <div class="bg-church-purple text-white p-3 flex justify-between">
                    <span class="font-bold text-lg">MAY 15</span>
                    <span>7:00 PM</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Bible Study Group</h3>
                    <p class="text-gray-600 mb-4">Weekly Bible study focusing on the Book of Romans and its applications.</p>
                    <a href="#" class="text-church-purple hover:text-church-purple-light font-medium inline-flex items-center">
                        Learn More
                        <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Event 3 -->
            <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden">
                <div class="bg-church-red text-white p-3 flex justify-between">
                    <span class="font-bold text-lg">MAY 20</span>
                    <span>9:00 AM</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Community Outreach</h3>
                    <p class="text-gray-600 mb-4">Join us as we serve our local community through various charitable activities.</p>
                    <a href="#" class="text-church-purple hover:text-church-purple-light font-medium inline-flex items-center">
                        Learn More
                        <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="#" class="inline-flex items-center bg-church-purple hover:bg-church-purple-light text-white font-medium py-3 px-6 rounded-md transition">
                View All Events
                <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>


@endsection