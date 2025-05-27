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

                        <a href="#register" class="group relative overflow-hidden bg-gradient-to-r from-green-500 via-teal-500 to-blue-500 hover:from-blue-500 hover:via-teal-500 hover:to-green-500 text-white font-bold py-3 px-6 rounded-full shadow-2xl transform hover:scale-105 transition duration-500 text-base">
                            <span class="relative z-10 flex items-center gap-2">
                                <span class="text-lg group-hover:animate-pulse">🎪</span>
                                Join the Fun
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
                            <img src="https://i.pinimg.com/736x/de/b4/43/deb443cafd393aff67e14dc86cc6c384.jpg"
                                alt="Happy children at church"
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

    <!-- Registration Section -->
    <section id="register" class="py-20 bg-gradient-to-br from-church-purple to-purple-600">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <div class="lg:flex">
                        <!-- Left Side - Form -->
                        <div class="lg:w-3/5 p-8 lg:p-12">
                            <div class="text-center lg:text-left mb-8">
                                <h2 class="text-3xl lg:text-4xl font-bold text-church-purple mb-4">Join Our Family!</h2>
                                <p class="text-gray-600 text-lg">Register your child for our amazing programs and watch them grow in faith and joy.</p>
                            </div>

                            <form class="space-y-6" action="#" method="POST">
                                @csrf
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2" for="childName">Child's Full Name *</label>
                                        <input type="text" id="childName" name="child_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2" for="childAge">Child's Age *</label>
                                        <select id="childAge" name="child_age" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300" required>
                                            <option value="">Select Age</option>
                                            <option value="3">3 years</option>
                                            <option value="4">4 years</option>
                                            <option value="5">5 years</option>
                                            <option value="6">6 years</option>
                                            <option value="7">7 years</option>
                                            <option value="8">8 years</option>
                                            <option value="9">9 years</option>
                                            <option value="10">10 years</option>
                                            <option value="11">11 years</option>
                                            <option value="12">12 years</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2" for="parentName">Parent/Guardian Name *</label>
                                        <input type="text" id="parentName" name="parent_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2" for="parentPhone">Phone Number *</label>
                                        <input type="tel" id="parentPhone" name="parent_phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2" for="parentEmail">Email Address *</label>
                                    <input type="email" id="parentEmail" name="parent_email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300" required>
                                </div>

                                <!-- <div>
                                    <label class="block text-gray-700 font-semibold mb-2" for="allergies">Allergies or Special Needs</label>
                                    <textarea id="allergies" name="allergies" rows="3" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300" placeholder="Please list any allergies, medical conditions, or special accommodations..."></textarea>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2" for="emergency_contact">Emergency Contact Name</label>
                                    <input type="text" id="emergency_contact" name="emergency_contact" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300">
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2" for="emergency_phone">Emergency Contact Phone</label>
                                    <input type="tel" id="emergency_phone" name="emergency_phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-purple focus:outline-none transition duration-300">
                                </div> -->

                                <div class="flex items-start space-x-3">
                                    <input type="checkbox" id="consent" name="consent" class="w-5 h-5 text-church-purple border-2 border-gray-300 rounded focus:ring-church-purple mt-1" required>
                                    <label for="consent" class="text-gray-700 text-sm">
                                        I give permission for my child to participate in all Children's Ministry activities and understand that photos/videos may be taken for church promotional purposes. I also acknowledge that I have provided accurate emergency contact information. *
                                    </label>
                                </div>

                                <button type="submit" class="w-full bg-gradient-to-r from-church-purple to-purple-600 hover:from-purple-600 hover:to-church-purple text-white font-bold py-4 px-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                                    🎉 Register My Child
                                </button>
                            </form>
                        </div>

                        <!-- Right Side - Info -->
                        <div class="lg:w-2/5 bg-gradient-to-br from-church-purple to-purple-600 p-8 lg:p-12 text-white">
                            <div class="h-full flex flex-col justify-center">
                                <div class="text-center mb-8">
                                    <div class="text-6xl mb-6">🌟</div>
                                    <h3 class="text-2xl font-bold mb-4">Ready to Start?</h3>
                                    <p class="text-purple-100 mb-8">Join over 150 families who trust us with their children's spiritual journey!</p>
                                </div>

                                <div class="space-y-6">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-semibold">Free Registration</div>
                                            <div class="text-purple-200 text-sm">No fees required</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-semibold">Safe & Secure</div>
                                            <div class="text-purple-200 text-sm">Trained volunteers</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-semibold">Loving Environment</div>
                                            <div class="text-purple-200 text-sm">Christ-centered care</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-semibold">Fun Activities</div>
                                            <div class="text-purple-200 text-sm">Music, crafts & games</div>
                                        </div>
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
                    <img src="https://i.pinimg.com/736x/8d/a3/42/8da3420c87c6b35c0b9dd8b5dc5c7c37.jpg" alt="Children in Sunday School" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Sunday School</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/f5/8e/9d/f58e9d6c8b5f4a1e2d3c7b9e8f6a5d4c.jpg" alt="VBS Activities" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">VBS Fun</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/3c/7d/1a/3c7d1a8f9e2b5c4d6a7e8f9c1b2a3d4e.jpg" alt="Craft Time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Craft Time</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/9a/4b/7c/9a4b7c3e5f8d2a6b9c1e4f7a8b3c5d6e.jpg" alt="Worship Time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Worship</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg md:col-span-2">
                    <img src="https://i.pinimg.com/736x/6e/2f/8a/6e2f8a1b4c9d7e3f5a8b2c6d9e1f4a7b.jpg" alt="Group Photo" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Our Amazing Kids</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/2b/5c/8e/2b5c8e4a7d1f9c3b6e2a5f8c1d4b7e9a.jpg" alt="Bible Study" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Bible Time</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="https://i.pinimg.com/736x/7f/3a/6d/7f3a6d9c2e5b8f1a4c7e9b2d5a8f3c6e.jpg" alt="Game Time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Play Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection