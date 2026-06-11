<!-- /home/sir-sang/Documents/church/trc-agc-web/resources/views/children.blade.php -->
@extends('layouts.app')

@section('title', 'Children\'s Ministry')

@section('description', 'TRC AGC Church Children\'s Ministry - Building Faith, Creating Joy, Growing Together')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-red-50 via-white to-red-50">
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-20 pb-16 bg-gradient-to-br from-red-50 via-white to-red-50 min-h-screen flex items-center">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Content Side -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <!-- Welcome Badge -->
                    <div class="inline-block bg-gradient-to-r from-red-700 to-red-600 text-white px-8 py-3 rounded-full text-lg font-bold mb-8 shadow-2xl transform hover:scale-105 transition duration-300">
                        <span class="flex items-center gap-2">
                            <span class="text-2xl">🌟</span>
                            Children's Ministry
                            <span class="text-2xl">🌟</span>
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-6xl lg:text-7xl font-extrabold mb-8 leading-tight">
                        <div class="relative">
                            <span class="text-church-red block mb-2">Little Hearts</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-red-600 block mb-2">Big Faith</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-red-600 block">Endless Joy!</span>
                        </div>
                    </h1>

                    <!-- Description -->
                    <div class="relative mb-10">
                        <p class="text-2xl text-gray-700 leading-relaxed font-medium bg-white/60 p-6 rounded-3xl shadow-lg border-4 border-dashed border-red-300">
                            Where every child discovers they are <span class="font-bold text-red-600">God's masterpiece</span>!
                            Join our magical world of faith, friendship, and fantastic adventures!
                        </p>
                    </div>

                    <!-- Call to Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#dedication" class="group relative overflow-hidden bg-gradient-to-r from-red-700 to-red-600 hover:from-red-800 hover:to-red-700 text-white font-bold py-3 px-6 rounded-full shadow-2xl transform hover:scale-105 transition duration-500 text-base">
                            <span class="relative z-10 flex items-center gap-2">
                                Children's Dedication
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-500 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                        </a>

                    </div>
                </div>

                <!-- Image Side -->
                <div class="lg:w-1/2">
                    <div class="relative">
                        <!-- Glow effect -->
                        <div class="absolute -inset-8 bg-gradient-to-r from-red-400 via-red-300 to-red-200 rounded-full opacity-30 blur-3xl"></div>

                        <!-- Main image container -->
                        <div class="relative bg-gradient-to-br from-white via-white to-red-50 p-8 rounded-3xl shadow-2xl border-4 border-white">
                            <img src="{{ asset('images/children3.JPG') }}" alt="Happy children in ministry"
                                class="w-full h-auto rounded-2xl shadow-xl" />



                            <!-- Speech bubble -->
                            <div class="absolute top-4 right-4 bg-white p-3 rounded-2xl shadow-lg border-2 border-red-200 max-w-32">
                                <div class="text-sm font-bold text-red-600 mb-1">We Love Jesus!</div>
                                <div class="flex gap-1">
                                    <span class="text-red-200">⭐</span>
                                    <span class="text-red-200">⭐</span>
                                    <span class="text-red-200">⭐</span>
                                </div>
                                <!-- Speech bubble tail -->
                                <div class="absolute -bottom-2 left-6 w-4 h-4 bg-white transform rotate-45 border-b-2 border-r-2 border-red-200"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-col items-center text-red-600">
                <span class="text-sm font-semibold mb-2">Discover More</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    


    <!-- What Makes Us Special -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="text-center group">
            <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-church-red mb-4">Safe Environment</h3>
            <p class="text-gray-600">Background-checked volunteers and secure facilities for peace of mind.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-church-red mb-4">Creative Learning</h3>
            <p class="text-gray-600">Interactive lessons and hands-on activities make learning fun.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-church-red mb-4">Strong Community</h3>
            <p class="text-gray-600">Building lasting friendships and learning to care for one another.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-church-red mb-4">Bible-Centered</h3>
            <p class="text-gray-600">Scripture-rooted activities building a strong foundation of faith.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-church-red mb-4">Character Building</h3>
            <p class="text-gray-600">Developing Christian values, kindness, and leadership qualities.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-red-100 to-red-200 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition duration-300">
                <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-church-red mb-4">Loving Care</h3>
            <p class="text-gray-600">Individual attention from our dedicated team of volunteers.</p>
        </div>
    </div>


    <!-- Child Dedication Section -->
    <section id="dedication" class="py-20 bg-gradient-to-br from-red-50 via-white to-red-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block bg-gradient-to-r from-red-600 to-red-500 text-white px-8 py-3 rounded-full text-lg font-bold mb-8 shadow-2xl transform hover:scale-105 transition duration-300">
                    <span class="flex items-center gap-2">
                        A Sacred Moment
                    </span>
                </div>

                <h2 class="text-5xl lg:text-6xl font-extrabold mb-8 leading-tight">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-700 to-red-600 block mb-2">Child</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500 block">Dedication</span>
                </h2>

                <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed bg-white/60 p-6 rounded-3xl shadow-lg border-4 border-dashed border-red-300">
                    A beautiful ceremony where parents/guardian publicly commit to raising their child in the knowledge and love of God,
                    surrounded by our church family's prayers and support.
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <div class="lg:flex">
                        <!-- Left Side - Form -->
                        <div class="lg:w-3/5 p-8 lg:p-12">
                            <!-- Success Message -->
                            @if(session('success'))
                                <div class="mb-6 bg-red-100 border border-red-300 text-red-800 px-6 py-4 rounded-xl">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="text-center lg:text-left mb-8">
                                <h3 class="text-3xl lg:text-4xl font-bold text-red-600 mb-4">Register for Dedication</h3>
                                <p class="text-gray-600 text-lg">Take this meaningful step in your child's spiritual journey with our church community.</p>
                            </div>

                            <form class="space-y-6" action="{{ route('child.dedication.store') }}" method="POST">
                                @csrf

                                <!-- Child Information -->
                                <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-2xl border-2 border-red-200">
                                    <h4 class="text-xl font-bold text-red-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">👶</span>
                                        Child's Information
                                    </h4>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="dedicationChildName">Child's Full Name *</label>
                                            <input type="text" id="dedicationChildName" name="child_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="childBirthdate">Date of Birth *</label>
                                            <input type="date" id="childBirthdate" name="child_birthdate" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="childGender">Gender</label>
                                        <select id="childGender" name="child_gender" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Parents Information -->
                                <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-2xl border-2 border-red-200">
                                    <h4 class="text-xl font-bold text-red-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">👨‍👩‍👧‍👦</span>
                                        Parents' Information
                                    </h4>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="fatherName">Father's Full Name *</label>
                                            <input type="text" id="fatherName" name="father_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="motherName">Mother's Full Name *</label>
                                            <input type="text" id="motherName" name="mother_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-6 mt-4">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="parentPhone">Phone Number *</label>
                                            <input type="tel" id="parentPhone" name="parent_phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="parentEmail">Email Address *</label>
                                            <input type="email" id="parentEmail" name="parent_email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-red-500 focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>
                                </div>

                            

                                <!-- Commitment Statement -->
                                <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-2xl border-2 border-red-200">
                                    <h4 class="text-xl font-bold text-red-600 mb-4 flex items-center gap-2">
                                        <span class="text-2xl">💖</span>
                                        Commitment Statement
                                    </h4>

                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment1" name="commitment1" class="w-5 h-5 text-red-600 border-2 border-gray-300 rounded focus:ring-red-500 mt-1" required>
                                            <label for="commitment1" class="text-gray-700">
                                                We commit to raising our child in the knowledge and love of Jesus Christ. *
                                            </label>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment2" name="commitment2" class="w-5 h-5 text-red-600 border-2 border-gray-300 rounded focus:ring-red-500 mt-1" required>
                                            <label for="commitment2" class="text-gray-700">
                                                We will actively participate in church life and model Christian values at home. *
                                                We will actively participate in church life and model Christian values at home. *
                                            </label>
                                        </div>

                                       
                                    </div>
                                </div>

                                <button type="submit" class="w-full bg-gradient-to-r from-red-700 to-red-600 hover:from-red-800 hover:to-red-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300 text-lg">
                                    <span class="flex items-center justify-center gap-2">
                                        Register for Child Dedication
                                    </span>
                                </button>
                            </form>
                        </div>

                        <!-- Right Side - Info -->
                        <div class="lg:w-2/5 bg-gradient-to-br from-red-800 to-red-700 p-8 lg:p-12 text-white relative overflow-hidden">
                            <!-- Decorative elements -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -mr-16 -mt-16"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white opacity-10 rounded-full -ml-12 -mb-12"></div>
                            <div class="absolute top-1/2 left-1/2 w-40 h-40 bg-white opacity-5 rounded-full -ml-20 -mt-20"></div>

                            <div class="relative z-10 h-full flex flex-col justify-center">
                                <div class="text-center mb-8">
                                    <img src="{{ asset('images/childdedication.png') }}" alt="Child dedication ceremony" class="w-full h-64 object-cover rounded-2xl shadow-2xl mb-6 border-4 border-white/30">
                                    <h3 class="text-2xl font-bold mb-4">A Sacred Promise</h3>
                                    <p class="text-red-100 mb-8">Join families who have made this beautiful commitment to raise their children in faith!</p>
                                </div>

                                <div class="space-y-6">
                                    <div class="bg-white/20 p-4 rounded-2xl backdrop-blur-sm">
                                        <h4 class="font-bold text-lg mb-2">What is Child Dedication?</h4>
                                        <p class="text-red-100 text-sm">A public ceremony where parents/guardian commit to raising their child according to Christian values, with the support of the church community.</p>
                                    </div>

                                    <div class="space-y-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">👨‍👩‍👧‍👦</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Family Commitment</div>
                                                <div class="text-red-200 text-sm">Parents dedicate themselves to Christian parenting</div>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">⛪</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Church Support</div>
                                                <div class="text-red-200 text-sm">Community commits to pray and support</div>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">📖</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Biblical Foundation</div>
                                                <div class="text-red-200 text-sm">Based on Scripture and tradition</div>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                                                <span class="text-2xl">💝</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold">Special Blessing</div>
                                                <div class="text-red-200 text-sm">Pastor's blessing and prayer</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-white/20 p-4 rounded-2xl backdrop-blur-sm mt-8">
                                        <h4 class="font-bold mb-2">📞 Questions?</h4>
                                        <a href="mailto:children@thikaroadconnectagc.org" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
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
    <section class="py-20 bg-gradient-to-r from-red-50 via-white to-red-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    <span class="text-church-red">Memories</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500"> We Create</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Take a glimpse into the joy, laughter, and learning that happens every day in our Children's Ministry
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-6xl mx-auto">
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/children2.JPG') }}" alt="Children in Sunday School" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Sunday School</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/childrean1.JPG') }}" alt="Children learning together" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">VBS Fun</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/graduands.JPG') }}" alt="Children graduation celebration" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <div class="font-semibold">Bonding Time</div>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset('images/children3.JPG') }}" alt="Children worship time" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
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

</script>
@endsection
