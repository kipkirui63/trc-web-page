@extends('layouts.app')

@section('title', 'Youth Ministry')

@section('description', 'TRC AGC Church Youth Ministry - Empowering the Next Generation')

@section('content')
<!-- Dark mode design with vibrant accents -->
<div class="bg-gray-900 text-white min-h-screen">
    <!-- Hero Section with Dynamic Animation -->
    <section class="relative h-screen overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="/api/placeholder/1920/1080" alt="Youth worship" class="w-full h-full object-cover opacity-40" />
            <div class="absolute inset-0 bg-gradient-to-br from-church-purple via-gray-900 to-church-red opacity-80"></div>
        </div>

        <!-- Floating geometric shapes -->
        <div class="absolute inset-0 z-5">
            <div class="absolute top-20 left-10 w-32 h-32 bg-church-red rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute top-40 right-20 w-20 h-20 bg-church-purple-light rotate-45 opacity-30 animate-bounce"></div>
            <div class="absolute bottom-40 left-1/4 w-16 h-16 bg-church-red rounded-full opacity-25 animate-ping"></div>
        </div>

        <!-- Main content -->
        <div class="relative z-10 flex flex-col justify-center items-center h-full px-6 text-center">
            <div class="mb-8">
                <h1 class="text-7xl md:text-9xl font-black mb-4 tracking-tight">
                    <span class="inline-block transform hover:rotate-3 transition duration-500 text-transparent bg-clip-text bg-gradient-to-r from-church-red to-church-purple-light">YOUTH</span>
                </h1>
                <div class="w-32 h-2 bg-gradient-to-r from-church-red to-church-purple mx-auto rounded-full"></div>
            </div>

            <p class="text-2xl md:text-4xl mb-4 max-w-4xl mx-auto font-light">
                Where Faith Meets <span class="text-church-red font-bold">Adventure</span>
            </p>
            <p class="text-lg md:text-xl mb-12 max-w-2xl mx-auto text-gray-300">
                TRC Youth Ministry - Building Community, Growing Faith, Making Memories
            </p>

            <div class="flex flex-wrap justify-center gap-6">
                <a href="#about" class="group bg-gradient-to-r from-church-red to-red-600 hover:from-red-600 hover:to-church-red text-white font-bold py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                    <span class="flex items-center">
                        Join Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition duration-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <a href="#events" class="group bg-transparent border-3 border-white hover:bg-white hover:text-gray-900 text-white font-bold py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 backdrop-blur-sm">
                    What's Coming Up
                </a>
            </div>
        </div>

        <!-- Animated scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
            <div class="animate-bounce">
                <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gradient-to-br from-gray-800 to-gray-900 relative overflow-hidden">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute transform rotate-45 -top-32 -right-32 w-64 h-64 bg-church-red"></div>
            <div class="absolute transform -rotate-45 -bottom-32 -left-32 w-48 h-48 bg-church-purple"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-16">
                    <div class="lg:w-1/2">
                        <div class="relative group">
                            <div class="absolute -inset-4 bg-gradient-to-r from-church-red to-church-purple rounded-lg blur opacity-25 group-hover:opacity-40 transition duration-300"></div>
                            <div class="relative">
                                <img src="/api/placeholder/600/500" alt="Youth group gathering" class="w-full h-auto rounded-lg shadow-2xl transform group-hover:rotate-1 transition duration-300" />
                                <div class="absolute -bottom-6 -right-6 bg-church-red text-white p-4 rounded-lg shadow-lg">
                                    <div class="text-2xl font-bold">All Ages</div>
                                    <div class="text-sm">Welcome!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <h2 class="text-5xl font-black mb-8 text-transparent bg-clip-text bg-gradient-to-r from-church-red to-church-purple-light">
                            This Is Us
                        </h2>
                        <p class="text-xl text-gray-300 mb-6 leading-relaxed">
                            We're a vibrant community of young people who believe that faith should be
                            <span class="text-church-red font-semibold">real</span>,
                            <span class="text-church-purple-light font-semibold">relevant</span>, and
                            <span class="text-church-red font-semibold">relational</span>.
                        </p>
                        <p class="text-xl text-gray-300 mb-10 leading-relaxed">
                            Whether you're taking your first steps in faith or you've been walking with Jesus for years,
                            you'll find a place to belong, grow, and make a difference. Come as you are –
                            we're excited to meet you!
                        </p>

                        <div class="grid grid-cols-3 gap-8">
                            <div class="text-center group">
                                <div class="text-4xl font-black text-church-purple-light mb-2 group-hover:scale-110 transition duration-300">500+</div>
                                <div class="text-gray-400 font-medium">Young Lives Touched</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black text-church-red mb-2 group-hover:scale-110 transition duration-300">12</div>
                                <div class="text-gray-400 font-medium">Years Strong</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black text-church-purple-light mb-2 group-hover:scale-110 transition duration-300">30+</div>
                                <div class="text-gray-400 font-medium">Amazing Leaders</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-24 bg-gray-900 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-church-purple rounded-full filter blur-3xl opacity-10 -mr-48 -mt-48 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-church-red rounded-full filter blur-3xl opacity-10 -ml-32 -mb-32 animate-pulse"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-5xl font-black text-white mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-church-red to-church-purple-light">Epic</span> Events Ahead
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-church-red to-church-purple mx-auto mb-8 rounded-full"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    These aren't just events – they're <span class="text-church-red font-semibold">life-changing experiences</span>
                    waiting to happen. Mark your calendar and get ready for adventure!
                </p>
            </div>

            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-5xl font-black text-white mb-4 animate-float">🌿 Nairobi Nature Escapes</h1>
                    <p class="text-xl text-green-200 max-w-2xl mx-auto">Discover Kenya's breathtaking natural wonders just outside the capital</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Nairobi National Park -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-gray-700 hover:border-nature-green transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                        <div class="relative">
                            <div class="bg-gradient-to-r from-nature-green to-green-600 text-white py-3 px-6 flex justify-between items-center">
                                <div class="font-black text-lg">DAILY VISITS</div>
                                <div class="bg-white text-nature-green text-xs font-black px-3 py-1 rounded-full animate-pulse">LIONS SPOTTED!</div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-black mb-4 group-hover:text-nature-green transition duration-300">🦁 Nairobi National Park</h3>
                                <p class="text-gray-300 mb-6 leading-relaxed">
                                    Experience Africa's wildlife just 7km from the city center! Lions, giraffes, rhinos,
                                    and zebras roam free with Nairobi's skyline as backdrop.
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-safari-gold">KSh 1,500</span>
                                    <a href="#" class="flex items-center text-nature-green font-bold hover:text-white transition group-hover:translate-x-2 duration-300">
                                        Book Safari!
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Karura Forest -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-gray-700 hover:border-nature-brown transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                        <div class="relative">
                            <div class="bg-gradient-to-r from-nature-brown to-amber-700 text-white py-3 px-6 flex justify-between items-center">
                                <div class="font-black text-lg">OPEN DAILY</div>
                                <div class="bg-white text-nature-brown text-xs font-black px-3 py-1 rounded-full animate-pulse">PERFECT WEATHER!</div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-black mb-4 group-hover:text-nature-brown transition duration-300">🌳 Karura Forest Reserve</h3>
                                <p class="text-gray-300 mb-6 leading-relaxed">
                                    Peaceful forest trails, stunning waterfalls, caves, and picnic spots.
                                    Perfect for hiking, cycling, and reconnecting with nature.
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-kenya-red">KSh 300</span>
                                    <a href="#" class="flex items-center text-nature-brown font-bold hover:text-white transition group-hover:translate-x-2 duration-300">
                                        Explore Now!
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- David Sheldrick Wildlife Trust -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-gray-700 hover:border-safari-gold transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                        <div class="relative">
                            <div class="bg-gradient-to-r from-safari-gold to-orange-600 text-white py-3 px-6 flex justify-between items-center">
                                <div class="font-black text-lg">11AM DAILY</div>
                                <div class="bg-white text-safari-gold text-xs font-black px-3 py-1 rounded-full animate-pulse">BABY ELEPHANTS!</div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-2xl font-black mb-4 group-hover:text-safari-gold transition duration-300">🐘 Elephant Orphanage</h3>
                                <p class="text-gray-300 mb-6 leading-relaxed">
                                    Watch adorable baby elephants play, feed, and splash in mud baths!
                                    Support conservation while creating unforgettable memories.
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-nature-green">KSh 650</span>
                                    <a href="#" class="flex items-center text-safari-gold font-bold hover:text-white transition group-hover:translate-x-2 duration-300">
                                        Visit Babies!
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <p class="text-green-200 text-lg">🇰🇪 Discover the wild side of Nairobi - where urban meets untamed!</p>
                </div>
            </div>


            <div class="text-center mt-16">
                <a href="/youth/calendar" class="inline-flex items-center bg-gradient-to-r from-church-purple to-church-red hover:from-church-red hover:to-church-purple text-white font-black py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                    See Everything We're Up To
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @endsection