<!-- /home/sir-sang/Documents/church/trc-agc-web/resources/views/children.blade.php -->
@extends('layouts.app')

@section('title', 'Children\'s Ministry')

@section('description', 'TRC AGC Church Children\'s Ministry - Building Faith, Creating Joy, Growing Together')

@section('styles')
<style>
    .children-photo-card {
        min-height: 240px;
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 18px 35px rgba(15, 23, 42, 0.12);
        border: 1px solid rgba(237, 28, 36, 0.12);
    }

    .children-photo-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .children-photo-card:hover img {
        transform: scale(1.06);
    }

    .children-photo-caption {
        position: absolute;
        inset: auto 16px 16px 16px;
        background: rgba(255, 255, 255, 0.92);
        color: #1f2937;
        border-radius: 12px;
        padding: 12px 14px;
        font-weight: 700;
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.12);
    }
</style>
@endsection

@section('content')
<div class="min-h-screen bg-gradient-to-br from-red-50 via-white to-red-50">
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-20 pb-16 bg-gradient-to-br from-red-50 via-white to-red-50 min-h-screen flex items-center">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Content Side -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <!-- Welcome Badge -->
                    <div class="inline-block bg-church-red text-white px-8 py-3 rounded-full text-lg font-bold mb-8 shadow-2xl transform hover:scale-105 transition duration-300">
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
                            <span class="text-church-red block mb-2">Big Faith</span>
                            <span class="text-church-red block">Endless Joy!</span>
                        </div>
                    </h1>

                    <!-- Description -->
                    <div class="relative mb-10">
                        <p class="text-2xl text-gray-700 leading-relaxed font-medium bg-white/60 p-6 rounded-3xl shadow-lg border-4 border-dashed border-red-300">
                            Where every child discovers they are <span class="font-bold text-church-red">God's masterpiece</span>!
                            Join our magical world of faith, friendship, and fantastic adventures!
                        </p>
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
                                <div class="text-sm font-bold text-church-red mb-1">We Love Jesus!</div>
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

        
    </section>

    


    

    <!-- Child Dedication Section -->
    <section id="dedication" class="py-20 bg-gradient-to-br from-red-50 via-white to-red-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block bg-church-red text-white px-8 py-3 rounded-full text-lg font-bold mb-8 shadow-2xl transform hover:scale-105 transition duration-300">
                    <span class="flex items-center gap-2">
                        Child Dedication
                    </span>
                </div>

            

                <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed bg-white/60 p-6 rounded-3xl shadow-lg border-4 border-dashed border-red-300">
                    "Train up a child in the way he should go; even when he is old he will not depart from it."
                    <span class="block mt-3 font-bold text-church-red">Proverbs 22:6</span>
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
                                <h3 class="text-3xl lg:text-4xl font-bold text-church-red mb-4">Register for Dedication</h3>
                                <p class="text-gray-600 text-lg">Take this meaningful step in your child's spiritual journey with our church community.</p>
                            </div>

                            <form class="space-y-6" action="{{ route('child.dedication.store') }}" method="POST">
                                @csrf

                                <!-- Child Information -->
                                <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-2xl border-2 border-red-200">
                                    <h4 class="text-xl font-bold text-church-red mb-4 flex items-center gap-2">
                                        <span class="text-2xl">👶</span>
                                        Child's Information
                                    </h4>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="dedicationChildName">Child's Full Name *</label>
                                            <input type="text" id="dedicationChildName" name="child_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="childBirthdate">Date of Birth *</label>
                                            <input type="date" id="childBirthdate" name="child_birthdate" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="block text-gray-700 font-semibold mb-2" for="childGender">Gender</label>
                                        <select id="childGender" name="child_gender" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Parents Information -->
                                <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-2xl border-2 border-red-200">
                                    <h4 class="text-xl font-bold text-church-red mb-4 flex items-center gap-2">
                                        <span class="text-2xl">👨‍👩‍👧‍👦</span>
                                        Parents' Information
                                    </h4>

                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="fatherName">Father's Full Name *</label>
                                            <input type="text" id="fatherName" name="father_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="motherName">Mother's Full Name *</label>
                                            <input type="text" id="motherName" name="mother_name" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-6 mt-4">
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="parentPhone">Phone Number *</label>
                                            <input type="tel" id="parentPhone" name="parent_phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300" required>
                                        </div>
                                        <div>
                                            <label class="block text-gray-700 font-semibold mb-2" for="parentEmail">Email Address *</label>
                                            <input type="email" id="parentEmail" name="parent_email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-church-red focus:outline-none transition duration-300" required>
                                        </div>
                                    </div>
                                </div>

                            

                                <!-- Commitment Statement -->
                                <div class="bg-gradient-to-r from-red-50 to-white p-6 rounded-2xl border-2 border-red-200">
                                    <h4 class="text-xl font-bold text-church-red mb-4 flex items-center gap-2">
                                        <span class="text-2xl">💖</span>
                                        Commitment Statement
                                    </h4>

                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment1" name="commitment1" class="w-5 h-5 text-church-red border-2 border-gray-300 rounded focus:ring-church-red mt-1" required>
                                            <label for="commitment1" class="text-gray-700">
                                                We commit to raising our child in the knowledge and love of Jesus Christ. *
                                            </label>
                                        </div>

                                        <div class="flex items-start space-x-3">
                                            <input type="checkbox" id="commitment2" name="commitment2" class="w-5 h-5 text-church-red border-2 border-gray-300 rounded focus:ring-church-red mt-1" required>
                                            <label for="commitment2" class="text-gray-700">
                                                We will actively participate in church life and model Christian values at home. *
                                            </label>
                                        </div>

                                       
                                    </div>
                                </div>

                                <button type="submit" class="w-full bg-church-red hover:bg-red-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300 text-lg">
                                    <span class="flex items-center justify-center gap-2">
                                        Register for Child Dedication
                                    </span>
                                </button>
                            </form>
                        </div>

                        <!-- Right Side - Info -->
                        <div class="lg:w-2/5 bg-church-red p-8 lg:p-12 text-white relative overflow-hidden">
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
                                        <a href="mailto:children@thikaroadconnectagc.org" class="bg-white text-church-red hover:bg-red-50 font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
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
                    <span class="text-church-red">Memories We Create</span>
                </h2>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                    Take a glimpse into the joy, laughter, and learning that happens every day in our Children's Ministry
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 auto-rows-[220px] gap-5 max-w-6xl mx-auto">
                <div class="children-photo-card lg:col-span-3 lg:row-span-2">
                    <img src="{{ asset('images/children2-gallery.webp') }}" alt="Children in Sunday School" loading="lazy" decoding="async" width="1200" height="900">
                    <div class="children-photo-caption">Sunday School</div>
                </div>

                <div class="children-photo-card lg:col-span-3">
                    <img src="{{ asset('images/childrean1-gallery.webp') }}" alt="Children learning together" loading="lazy" decoding="async" width="1200" height="900">
                    <div class="children-photo-caption">VBS Fun</div>
                </div>

                <div class="children-photo-card lg:col-span-2">
                    <img src="{{ asset('images/graduands-gallery.webp') }}" alt="Children graduation celebration" loading="lazy" decoding="async" width="1200" height="900">
                    <div class="children-photo-caption">Bonding Time</div>
                </div>

                <div class="children-photo-card lg:col-span-1">
                    <img src="{{ asset('images/children3-gallery.webp') }}" alt="Children worship time" loading="lazy" decoding="async" width="1200" height="900">
                    <div class="children-photo-caption">Dance</div>
                </div>

                <div class="children-photo-card lg:col-span-2">
                    <img src="{{ asset('images/vbs5.webp') }}" alt="Group Photo" loading="lazy" decoding="async" width="1200" height="800">
                    <div class="children-photo-caption">Our Amazing Kids</div>
                </div>

                <div class="children-photo-card lg:col-span-3">
                    <img src="{{ asset('images/vbs7.webp') }}" alt="Bible Study" loading="lazy" decoding="async" width="1200" height="800">
                    <div class="children-photo-caption">Play Time</div>
                </div>

                <div class="children-photo-card lg:col-span-3">
                    <img src="{{ asset('images/vbs6.webp') }}" alt="Game Time" loading="lazy" decoding="async" width="1200" height="800">
                    <div class="children-photo-caption">Victory Has a Sound</div>                </div>
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
