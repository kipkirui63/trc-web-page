@extends('layouts.app')

@section('title', 'Children\'s Ministry')

@section('description', 'TRC AGC Church Children\'s Ministry - Building Faith, Creating Joy, Growing Together')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50">
    <!-- Hero Section with Animated Elements -->
    <section class="relative overflow-hidden pt-20 pb-16 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 min-h-screen flex items-center">
        <!-- Enhanced Floating Animation Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Stars -->
            <div class="absolute top-20 left-10 w-8 h-8 sparkle" style="animation-delay: 0.5s;">⭐</div>
            <div class="absolute top-32 right-20 w-8 h-8 sparkle" style="animation-delay: 1.2s;">✨</div>
            <div class="absolute bottom-40 left-1/4 w-8 h-8 sparkle" style="animation-delay: 2.1s;">🌟</div>
            <div class="absolute top-60 right-1/3 w-8 h-8 sparkle" style="animation-delay: 0.8s;">💫</div>
            <div class="absolute bottom-20 right-16 w-8 h-8 sparkle" style="animation-delay: 1.8s;">⭐</div>

            <!-- Floating shapes -->
            <div class="absolute top-24 left-20 w-16 h-16 bg-gradient-to-br from-yellow-300 to-orange-400 rounded-full opacity-80 float-animation shadow-lg" style="animation-delay: 0.5s;"></div>
            <div class="absolute top-40 right-32 w-12 h-12 bg-gradient-to-br from-pink-400 to-purple-500 opacity-70 bounce-slow shadow-lg" style="animation-delay: 1s; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
            <div class="absolute bottom-32 left-1/3 w-20 h-20 bg-gradient-to-br from-green-400 to-teal-500 rounded-full opacity-75 wiggle shadow-lg" style="animation-delay: 1.5s;"></div>
            <div class="absolute top-72 right-1/4 w-14 h-14 bg-gradient-to-br from-blue-400 to-indigo-500 opacity-80 float-animation shadow-lg" style="animation-delay: 2s; border-radius: 50% 50% 0 50%;"></div>
            <div class="absolute bottom-60 right-12 w-18 h-18 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full opacity-70 bounce-slow shadow-lg" style="animation-delay: 0.8s;"></div>

            <!-- Hearts and fun elements -->
            <div class="absolute top-16 right-1/2 text-4xl float-animation" style="animation-delay: 1.3s;">💖</div>
            <div class="absolute bottom-24 left-12 text-3xl wiggle" style="animation-delay: 2.5s;">🎨</div>
            <div class="absolute top-48 left-1/2 text-4xl bounce-slow" style="animation-delay: 0.3s;">🎈</div>
            <div class="absolute bottom-48 right-20 text-3xl float-animation" style="animation-delay: 1.7s;">🌈</div>
            <div class="absolute top-80 left-16 text-3xl sparkle" style="animation-delay: 2.2s;">🦋</div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Content Side -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <!-- Welcome Badge -->
                    <div class="inline-block bg-gradient-to-r from-purple-500 via-pink-500 to-yellow-400 text-white px-8 py-3 rounded-full text-lg font-bold mb-8 shadow-2xl pulse-glow transform hover:scale-105 transition duration-300">
                        <span class="flex items-center gap-2">
                            <span class="text-2xl wiggle">🌟</span>
                            Welcome to God's Playground!
                            <span class="text-2xl wiggle">🌟</span>
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-6xl lg:text-7xl font-extrabold mb-8 leading-tight">
                        <div class="relative">
                            <span class="rainbow-text block mb-2">Little Hearts</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-500 to-red-500 block mb-2">Big Faith</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-blue-500 to-purple-600 block">Endless Joy!</span>

                            <!-- Decorative elements around title -->
                            <div class="absolute -top-4 -left-4 text-4xl sparkle">🎪</div>
                            <div class="absolute top-8 -right-8 text-3xl float-animation">🎭</div>
                            <div class="absolute bottom-4 left-1/2 text-3xl bounce-slow">🎨</div>
                        </div>
                    </h1>

                    <!-- Description -->
                    <div class="relative mb-10">
                        <p class="text-2xl text-gray-700 leading-relaxed font-medium bg-white/60 p-6 rounded-3xl shadow-lg border-4 border-dashed border-purple-300">
                            <span class="text-3xl mr-2"></span>
                            Where every child discovers they are <span class="font-bold text-purple-600">God's masterpiece</span>!
                            Join our magical world of faith, friendship, and fantastic adventures!
                            <span class="text-3xl ml-2"></span>
                        </p>
                    </div>

                    <!-- Call to Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#programs" class="group relative overflow-hidden bg-gradient-to-r from-purple-500 via-pink-500 to-purple-600 hover:from-pink-500 hover:via-purple-500 hover:to-pink-600 text-white font-bold py-3 px-6 rounded-full shadow-2xl transform hover:scale-105 transition duration-500 text-base">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="text-lg group-hover:animate-spin">🎨</span>
                                Explore Our World
                                <span class="text-lg group-hover:animate-bounce">✨</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-pink-400 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                        </a>

                        <a href="#dedication" class="group relative overflow-hidden bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 hover:from-blue-500 hover:via-teal-500 hover:to-green-500 text-white font-bold py-3 px-6 rounded-full shadow-2xl transform hover:scale-105 transition duration-500 text-base">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="text-lg group-hover:animate-pulse">🎪</span>
                                Children's Dedication
                                <span class="text-lg group-hover:animate-bounce">🎈</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                        </a>
                    </div>


                </div>

                <!-- Image Side -->
                <div class="lg:w-1/2">
                    <div class="relative">
                        <!-- Glow effect -->
                        <div class="absolute -inset-8 bg-gradient-to-r from-purple-400 via-pink-400 to-yellow-400 rounded-full opacity-30 blur-3xl pulse-glow"></div>

                        <!-- Main image container -->
                        <div class="relative bg-gradient-to-br from-white via-purple-50 to-pink-50 p-8 rounded-3xl shadow-2xl border-4 border-white float-animation">
                            <img src="{{ asset('images/vbs8.webp') }}" alt="Happy children"
                                class="w-full h-auto rounded-2xl shadow-xl" />

                            <!-- Floating decorative elements around image -->
                            <div class="absolute -top-6 -left-6 bg-gradient-to-br from-yellow-400 to-orange-500 text-white p-4 rounded-full shadow-xl bounce-slow">
                                <span class="text-3xl">🌟</span>
                            </div>
                            <div class="absolute -top-4 -right-4 bg-gradient-to-br from-pink-400 to-purple-500 text-white p-4 rounded-full shadow-xl wiggle">
                                <span class="text-3xl">💖</span>
                            </div>
                            <div class="absolute -bottom-6 -left-4 bg-gradient-to-br from-green-400 to-teal-500 text-white p-4 rounded-full shadow-xl float-animation">
                                <span class="text-3xl">🎈</span>
                            </div>
                            <div class="absolute -bottom-4 -right-6 bg-gradient-to-br from-blue-400 to-indigo-500 text-white p-4 rounded-full shadow-xl sparkle">
                                <span class="text-3xl">✨</span>
                            </div>

                            <!-- Speech bubble -->
                            <div class="absolute top-4 right-4 bg-white p-3 rounded-2xl shadow-lg border-2 border-purple-200 max-w-32">
                                <div class="text-sm font-bold text-purple-600 mb-1">We Love Jesus!</div>
                                <div class="flex gap-1">
                                    <span class="text-yellow-400">⭐</span>
                                    <span class="text-yellow-400">⭐</span>
                                    <span class="text-yellow-400">⭐</span>
                                </div>
                                <!-- Speech bubble tail -->
                                <div class="absolute -bottom-2 left-6 w-4 h-4 bg-white transform rotate-45 border-b-2 border-r-2 border-purple-200"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center text-purple-600 bounce-slow">
                <span class="text-sm font-semibold mb-2">Discover More</span>
                <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="group">
                    <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-6 rounded-3xl shadow-lg group-hover:shadow-xl transition duration-300">
                        <div class="text-4xl mb-4">👥</div>
                        <div class="text-3xl font-bold text-church-purple mb-2">50+</div>
                        <div class="text-gray-600 font-medium">Happy Children</div>
                    </div>
                </div>
                <div class="group">
                    <div class="bg-gradient-to-br from-green-100 to-green-200 p-6 rounded-3xl shadow-lg group-hover:shadow-xl transition duration-300">
                        <div class="text-4xl mb-4">📖</div>
                        <div class="text-3xl font-bold text-church-purple mb-2">52</div>
                        <div class="text-gray-600 font-medium">Weekly Lessons</div>
                    </div>
                </div>
                <div class="group">
                    <div class="bg-gradient-to-br from-pink-100 to-pink-200 p-6 rounded-3xl shadow-lg group-hover:shadow-xl transition duration-300">
                        <div class="text-4xl mb-4">🎉</div>
                        <div class="text-3xl font-bold text-church-purple mb-2">5+</div>
                        <div class="text-gray-600 font-medium">Years of VBS</div>
                    </div>
                </div>
                <div class="group">
                    <div class="bg-gradient-to-br from-purple-100 to-purple-200 p-6 rounded-3xl shadow-lg group-hover:shadow-xl transition duration-300">
                        <div class="text-4xl mb-4">❤️</div>
                        <div class="text-3xl font-bold text-church-purple mb-2">100%</div>
                        <div class="text-gray-600 font-medium">Love & Care</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-20 bg-gradient-to-r from-purple-50 to-pink-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    <span class="text-church-purple">Our Amazing</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600"> Programs</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Two incredible programs designed to nurture young hearts and minds in their faith journey
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Sunday School Program -->
                <div class="group">
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden transform group-hover:scale-105 transition duration-500">
                        <div class="bg-gradient-to-br from-church-purple to-purple-600 p-8 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full -ml-12 -mb-12"></div>
                            <div class="relative z-10">
                                <div class="text-6xl mb-4">📚</div>
                                <h3 class="text-3xl font-bold mb-4">Sunday School</h3>
                                <p class="text-purple-100 text-lg">Every Sunday | 11:15 AM</p>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-purple rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Interactive Bible stories and lessons</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-purple rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Age-appropriate worship songs and prayers</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-purple rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Fun crafts and creative activities</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-purple rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Character building and moral lessons</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-purple rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Safe environment with trained teachers</p>
                                </div>
                            </div>
                            <div class="bg-purple-50 p-6 rounded-2xl">
                                <h4 class="font-bold text-church-purple mb-2 text-lg">Age Groups:</h4>
                                <div class="grid grid-cols-3 gap-2 text-sm">
                                    <div class="bg-white p-3 rounded-lg text-center">
                                        <div class="font-bold text-church-purple">3-5</div>
                                        <div class="text-gray-600">Little Lambs</div>
                                    </div>
                                    <div class="bg-white p-3 rounded-lg text-center">
                                        <div class="font-bold text-church-purple">6-9</div>
                                        <div class="text-gray-600">Growing Stars</div>
                                    </div>
                                    <div class="bg-white p-3 rounded-lg text-center">
                                        <div class="font-bold text-church-purple">10-12</div>
                                        <div class="text-gray-600">Young Leaders</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- VBS Program -->
                <div class="group">
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden transform group-hover:scale-105 transition duration-500">
                        <div class="bg-gradient-to-br from-church-red to-pink-500 p-8 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full -ml-12 -mb-12"></div>
                            <div class="relative z-10">
                                <div class="text-6xl mb-4">🎪</div>
                                <h3 class="text-3xl font-bold mb-4">Vacation Bible School</h3>
                                <p class="text-red-100 text-lg">December Holidays | 6 Amazing Days</p>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-red rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Themed adventures and Bible exploration</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-red rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Exciting games and outdoor activities</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-red rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Arts, crafts, and creative workshops</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-red rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Music, drama, and talent showcase</p>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-church-red rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Special treats and memorable experiences</p>
                                </div>
                            </div>
                            <div class="bg-red-50 p-6 rounded-2xl">
                                <h4 class="font-bold text-church-red mb-3 text-lg">VBS 2025 Theme:</h4>
                                <div class="bg-white p-4 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-church-red mb-2">Stay tuned for updates!</div>
                                    <!-- <div class="text-gray-600">December 16-20, 2025</div>
                                    <div class="text-sm text-gray-500 mt-2">Ages 3-12 Welcome</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Us Special -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    <span class="text-church-purple">What Makes</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600"> Our Ministry Special</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                        <div class="text-3xl">🛡️</div>
                    </div>
                    <h3 class="text-xl font-bold text-church-purple mb-4">Safe Environment</h3>
                    <p class="text-gray-600">Background-checked volunteers and secure facilities ensure your child's safety and peace of mind for parents.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-green-100 to-green-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                        <div class="text-3xl">🎨</div>
                    </div>
                    <h3 class="text-xl font-bold text-church-purple mb-4">Creative Learning</h3>
                    <p class="text-gray-600">Interactive lessons, hands-on activities, and creative expression make learning about God fun and memorable.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-purple-100 to-purple-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                        <div class="text-3xl">👥</div>
                    </div>
                    <h3 class="text-xl font-bold text-church-purple mb-4">Strong Community</h3>
                    <p class="text-gray-600">Children build lasting friendships and learn the importance of fellowship and caring for one another.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                        <div class="text-3xl">📖</div>
                    </div>
                    <h3 class="text-xl font-bold text-church-purple mb-4">Bible-Centered</h3>
                    <p class="text-gray-600">All activities and lessons are rooted in Scripture, helping children develop a strong foundation of faith.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-pink-100 to-pink-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                        <div class="text-3xl">🌟</div>
                    </div>
                    <h3 class="text-xl font-bold text-church-purple mb-4">Character Building</h3>
                    <p class="text-gray-600">We focus on developing Christian values, kindness, respect, and leadership qualities in every child.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                        <div class="text-3xl">❤️</div>
                    </div>
                    <h3 class="text-xl font-bold text-church-purple mb-4">Loving Care</h3>
                    <p class="text-gray-600">Every child receives individual attention and care from our dedicated team of volunteers and staff.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Child Dedication Section -->
    <section id="dedication" class="py-20 bg-gradient-to-br from-yellow-50 via-orange-50 to-pink-50 relative overflow-hidden">
        <!-- Floating Animation Elements -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 left-10 text-4xl sparkle" style="animation-delay: 0.5s;">🕊️</div>
            <div class="absolute top-40 right-20 text-3xl float-animation" style="animation-delay: 1.2s;">💝</div>
            <div class="absolute bottom-32 left-1/4 text-4xl bounce-slow" style="animation-delay: 2.1s;">🌟</div>
            <div class="absolute top-60 right-1/3 text-3xl wiggle" style="animation-delay: 0.8s;">🙏</div>
            <div class="absolute bottom-20 right-16 text-4xl sparkle" style="animation-delay: 1.8s;">👶</div>

            <!-- Floating shapes -->
            <div class="absolute top-24 left-20 w-12 h-12 bg-gradient-to-br from-yellow-300 to-orange-400 rounded-full opacity-80 float-animation shadow-lg" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-40 right-32 w-16 h-16 bg-gradient-to-br from-pink-400 to-purple-500 opacity-70 wiggle shadow-lg" style="animation-delay: 1.5s; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
            <div class="absolute top-72 left-1/3 w-14 h-14 bg-gradient-to-br from-blue-400 to-teal-500 rounded-full opacity-75 bounce-slow shadow-lg" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block bg-gradient-to-r from-yellow-400 via-orange-400 to-pink-400 text-white px-8 py-3 rounded-full text-lg font-bold mb-8 shadow-2xl pulse-glow transform hover:scale-105 transition duration-300">
                    <span class="flex items-center gap-2">
                        <span class="text-2xl wiggle">🕊️</span>
                        A Sacred Moment
                        <span class="text-2xl wiggle">💝</span>
                    </span>
                </div>

                <h2 class="text-5xl lg:text-6xl font-extrabold mb-8 leading-tight">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500 block mb-2">Child</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 block">Dedication</span>
                </h2>

                <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed bg-white/60 p-6 rounded-3xl shadow-lg border-4 border-dashed border-orange-300">
                    <span class="text-3xl mr-2">🙏</span>
                    A beautiful ceremony where parents publicly commit to raising their child in the knowledge and love of God,
                    surrounded by our church family's prayers and support.
                    <span class="text-3xl ml-2">✨</span>
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <div class="lg:flex">
                        <!-- Left Side - Form -->
                        <div class="lg:w-3/5 p-8 lg:p-12">
                            <div class="text-center lg:text-left mb-8">
                                <h3 class="text-3xl lg:text-4xl font-bold text-orange-600 mb-4">Register for Dedication</h3>
                                <p class="text-gray-600 text-lg">Take this meaningful step in your child's spiritual journey with our church community.</p>
                            </div>

                            <form class="space-y-6" action="#" method="POST">
                                <!-- Child Information -->
                                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 p-6 rounded-2xl border-2 border-yellow-200">
                                    <h4 class="text-xl font-bold text-orange-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">👶</span>
                                        Child's Information
                                    </h4>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="dedicationChildName">Child's Full Name *</label>
                                            <input type="text" id="dedicationChildName" name="child_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-orange-500 focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="childBirthdate">Date of Birth *</label>
                                            <input type="date" id="childBirthdate" name="child_birthdate" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-orange-500 focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="childGender">Gender</label>
                                        <select id="childGender" name="child_gender" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-orange-500 focus:outline-none transition duration-300">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Parents Information -->
                                <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-6 rounded-2xl border-2 border-pink-200">
                                    <h4 class="text-xl font-bold text-purple-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">👨‍👩‍👧‍👦</span>
                                        Parents' Information
                                    </h4>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="fatherName">Father's Full Name *</label>
                                            <input type="text" id="fatherName" name="father_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="motherName">Mother's Full Name *</label>
                                            <input type="text" id="motherName" name="mother_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-6 mt-4">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="parentPhone">Phone Number *</label>
                                            <input type="tel" id="parentPhone" name="parent_phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="parentEmail">Email Address *</label>
                                            <input type="email" id="parentEmail" name="parent_email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ceremony Preferences -->
                                <div class="bg-gradient-to-r from-blue-50 to-teal-50 p-6 rounded-2xl border-2 border-blue-200">
                                    <h4 class="text-xl font-bold text-blue-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">📅</span>
                                        Ceremony Preferences
                                    </h4>

                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2" for="preferredDate">Preferred Sunday Date</label>
                                        <input type="date" id="preferredDate" name="preferred_date" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition duration-300">
                                    </div>

                                    <div class="mt-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="specialRequests">Special Requests or Notes</label>
                                        <textarea id="specialRequests" name="special_requests" rows="3" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition duration-300" placeholder="Any special requests, family members to mention, or additional information..."></textarea>
                                    </div>
                                </div>

                                <!-- Commitment Statement -->
                                <div class="bg-gradient-to-r from-green-50 to-teal-50 p-6 rounded-2xl border-2 border-green-200">
                                    <h4 class="text-xl font-bold text-green-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">💖</span>
                                        Commitment Statement
                                    </h4>

                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment1" name="commitment1" class="w-5 h-5 text-green-600 border-2 border-gray-300 rounded focus:ring-green-500 mt-1" required>
                                            <label for="commitment1" class="text-gray-700">
                                                We commit to raising our child in the knowledge and love of Jesus Christ. *
                                            </label>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment2" name="commitment2" class="w-5 h-5 text-green-600 border-2 border-gray-300 rounded focus:ring-green-500 mt-1" required>
                                            <label for="commitment2" class="text-gray-700">
                                                We will actively participate in church life and model Christian values at home. *
                                            </label>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment3" name="commitment3" class="w-5 h-5 text-green-600 border-2 border-gray-300 rounded focus:ring-green-500 mt-1" required>
                                            <label for="commitment3" class="text-gray-700">
                                                We welcome the prayers and support of our church family in this journey. *
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="w-full bg-gradient-to-r from-orange-500 via-pink-500 to-purple-500 hover:from-purple-500 hover:via-pink-500 hover:to-orange-500 text-white font-bold py-4 px-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300 text-lg">
                                    <span class="flex items-center justify-center gap-2">
                                        <span class="text-2xl">🕊️</span>
                                        Register for Child Dedication
                                        <span class="text-2xl">💝</span>
                                    </span>
                                </button>
                            </form>
                        </div>

                        <!-- Right Side - Info -->
                        <div class="lg:w-2/5 bg-gradient-to-br from-orange-500 via-pink-500 to-purple-600 p-8 lg:p-12 text-white relative overflow-hidden">
                            <!-- Decorative elements -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full -ml-12 -mb-12"></div>
                            <div class="absolute top-1/2 left-1/2 w-40 h-40 bg-white opacity-5 rounded-full -ml-20 -mt-20"></div>

                            <div class="relative z-10 h-full flex flex-col justify-center">
                                <div class="text-center mb-8">
                                    <div class="text-6xl mb-6">🙏</div>
                                    <h3 class="text-2xl font-bold mb-4">A Sacred Promise</h3>
                                    <p class="text-orange-100 mb-8">Join families who have made this beautiful commitment to raise their children in faith!</p>
                                </div>

                                <div class="space-y-6">
                                    <div class="bg-white/20 p-4 rounded-2xl backdrop-blur-sm">
                                        <h4 class="font-bold text-lg mb-2">What is Child Dedication?</h4>
                                        <p class="text-orange-100 text-sm">A public ceremony where parents commit to raising their child according to Christian values, with the support of the church community.</p>
                                    </div>

                                    <div class="space-y-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">👨‍👩‍👧‍👦</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Family Commitment</div>
                                                <div class="text-orange-200 text-sm">Parents dedicate themselves to Christian parenting</div>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">⛪</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Church Support</div>
                                                <div class="text-orange-200 text-sm">Community commits to pray and support</div>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">📖</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Biblical Foundation</div>
                                                <div class="text-orange-200 text-sm">Based on Scripture and tradition</div>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">💝</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Special Blessing</div>
                                                <div class="text-orange-200 text-sm">Pastor's blessing and prayer</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white/20 p-4 rounded-2xl backdrop-blur-sm mt-8">
                                        <h4 class="font-bold mb-2">📞 Questions?</h4>
                                        <a href="mailto:children@thikaroadconnect.org" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Gallery Section -->
    <section class="py-20 bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    <span class="text-church-purple">Memories</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600"> We Create</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Take a glimpse into the joy, laughter, and learning that happens every day in our Children's Ministry
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-6xl mx-auto">
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/happy-children.webp') }}" alt="Children in Sunday School" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Sunday School</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/vbs2.webp') }}" alt="VBS Activities" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">VBS Fun</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/vbs3.webp') }}" alt="Craft Time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Chill Time</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/vbs4.webp') }}" alt="Worship Time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Dance</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg md:col-span-2">
                    <img src="{{ asset('images/vbs5.webp') }}" alt="Group Photo" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Our Amazing Kids</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/vbs7.webp') }}" alt="Bible Study" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Play Time</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/vbs6.webp') }}" alt="Game Time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Victory Has a Sound</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<script>
    // Enhanced form interactions
    function toggleChildrenAges(hasChildren) {
        const agesDiv = document.getElementById('children-ages');
        const yesDot = document.getElementById('yes-dot');
        const noDot = document.getElementById('no-dot');

        if (hasChildren) {
            agesDiv.classList.remove('hidden');
            yesDot.style.opacity = '1';
            noDot.style.opacity = '0';
        } else {
            agesDiv.classList.add('hidden');
            yesDot.style.opacity = '0';
            noDot.style.opacity = '1';
        }
    }

    // Smooth scrolling functions
    function scrollToForm() {
        document.getElementById('form-section').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    function scrollToInfo() {
        document.getElementById('info-section').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    const observerOptions1 = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer1 = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100); // Stagger by 100ms
            }
        });
    }, observerOptions1);

    // Initialize elements with starting state
    document.querySelectorAll('section > div').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        observer1.observe(section);
    });
    // Observe cards for animation
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card-hover, .faq-item');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
            observer.observe(card);
        });
    });

    // Form submission with animation
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const button = e.target.querySelector('button[type="submit"]');
        const originalText = button.innerHTML;

        button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Submitting...';
        button.disabled = true;

        // Simulate form submission
        setTimeout(() => {
            button.innerHTML = '<i class="fas fa-check mr-2"></i>Visit Confirmed!';
            button.classList.add('bg-green-500', 'hover:bg-green-600');
            button.classList.remove('bg-gradient-to-r', 'from-church-purple', 'to-church-purple-light');

            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
                button.classList.remove('bg-green-500', 'hover:bg-green-600');
                button.classList.add('bg-gradient-to-r', 'from-church-purple', 'to-church-purple-light');
            }, 3000);
        }, 2000);
    });
</script>
@endsection