@extends('layouts.app')

@section('title', 'Youth Ministry')

@section('description', 'TRC AGC Church Youth Ministry - Empowering the Next Generation for Christ')

@section('styles')
<style>
    .text-church-purple-light {
        color: #a855f7;
    }

    .bg-church-purple-light {
        background-color: #a855f7;
    }

    .border-church-purple-light {
        border-color: #a855f7;
    }

    .text-nature-green {
        color: #22c55e;
    }

    .text-nature-brown {
        color: #a16207;
    }

    .text-safari-gold {
        color: #f59e0b;
    }

    .text-kenya-red {
        color: #dc2626;
    }

    .bg-nature-green {
        background-color: #22c55e;
    }

    .bg-nature-brown {
        background-color: #a16207;
    }

    .bg-safari-gold {
        background-color: #f59e0b;
    }

    .border-nature-green {
        border-color: #22c55e;
    }

    .border-nature-brown {
        border-color: #a16207;
    }

    .border-safari-gold {
        border-color: #f59e0b;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounce 3s ease-in-out infinite;
    }

    .animate-pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
    }

    @keyframes pulse-glow {

        0%,
        100% {
            box-shadow: 0 0 20px rgba(147, 51, 234, 0.3);
        }

        50% {
            box-shadow: 0 0 40px rgba(147, 51, 234, 0.6);
        }
    }

    .gradient-text {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .glass-effect {
        backdrop-filter: blur(16px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>
@endsection

@section('content')
<!-- Dark mode design with vibrant accents -->
<div class="bg-gray-900 text-white min-h-screen">
    <!-- Hero Section with Dynamic Animation -->
    <section class="relative h-screen overflow-hidden">
        <div class="absolute inset-0 z-0">
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
                    <span class="inline-block transform hover:rotate-3 transition duration-500 gradient-text">YOUTH</span>
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
                        Join Our Family
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition duration-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
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
                                <img src="{{ asset('images/Youth-hike.webp') }}" alt="Youth group gathering" class="w-full h-auto rounded-lg shadow-2xl transform group-hover:rotate-1 transition duration-300" />
                                <div class="absolute -bottom-6 -right-6 bg-church-red text-white p-4 rounded-lg shadow-lg">
                                    <div class="text-2xl font-bold">All Ages</div>
                                    <div class="text-sm">Welcome!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <h2 class="text-5xl font-black mb-8 gradient-text">
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
                                <div class="text-4xl font-black text-church-purple-light mb-2 group-hover:scale-110 transition duration-300">50+</div>
                                <div class="text-gray-400 font-medium">Active Youth</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black text-church-red mb-2 group-hover:scale-110 transition duration-300">4</div>
                                <div class="text-gray-400 font-medium">Years Strong</div>
                            </div>
                            <div class="text-center group">
                                <div class="text-4xl font-black text-church-purple-light mb-2 group-hover:scale-110 transition duration-300">10+</div>
                                <div class="text-gray-400 font-medium">Dedicated Leaders</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 bg-gray-900 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-5xl font-black text-white mb-6">
                    What We're <span class="gradient-text">All About</span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-church-red to-church-purple mx-auto mb-8 rounded-full"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Every Friday night, we gather for worship, teaching, games, and fellowship that's designed to help you grow in your faith and friendships.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Worship -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 hover:border-church-purple transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="text-church-purple text-4xl mb-6 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 group-hover:text-church-purple transition duration-300">Worship Together</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Experience God through powerful worship music, prayer, and authentic community. Our worship team creates an atmosphere where you can encounter Jesus personally.
                    </p>
                </div>

                <!-- Bible Study -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 hover:border-church-red transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="text-church-red text-4xl mb-6 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 group-hover:text-church-red transition duration-300">Dig Deep</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Explore God's Word through interactive Bible studies, small groups, and discussions that make ancient truths relevant to your everyday life.
                    </p>
                </div>

                <!-- Community -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 hover:border-church-purple-light transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="text-church-purple-light text-4xl mb-6 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 group-hover:text-church-purple-light transition duration-300">Build Community</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Form lasting friendships with peers who share your values. Our community extends beyond Friday nights into everyday life support and encouragement.
                    </p>
                </div>

                <!-- Service -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 hover:border-church-red transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="text-church-red text-4xl mb-6 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 group-hover:text-church-red transition duration-300">Serve Others</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Make a real difference in our community through service projects, outreach programs, and mission trips that put faith into action.
                    </p>
                </div>

                <!-- Leadership -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 hover:border-church-purple transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="text-church-purple text-4xl mb-6 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 group-hover:text-church-purple transition duration-300">Grow as Leaders</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Develop your gifts and talents through leadership opportunities, mentorship programs, and training that prepares you for your future calling.
                    </p>
                </div>

                <!-- Fun & Games -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-700 hover:border-church-purple-light transition duration-500 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="text-church-purple-light text-4xl mb-6 group-hover:scale-110 transition duration-300">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3 class="text-2xl font-black mb-4 group-hover:text-church-purple-light transition duration-300">Have Fun!</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Enjoy games, competitions, movie nights, and social events that prove faith and fun go hand in hand. Laughter is part of our DNA!
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action Section -->
    <section class="py-24 bg-gradient-to-br from-church-purple via-church-red to-red-600 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl opacity-5 -ml-48 -mt-48 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full filter blur-3xl opacity-5 -mr-32 -mb-32 animate-pulse"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
                    Ready to Start Your <span class="text-yellow-300">Journey</span>?
                </h2>
                <p class="text-2xl text-gray-100 mb-12 leading-relaxed">
                    You don't need to have it all figured out. Come as you are, and let's discover what God has in store for your life together.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#" class="group bg-white text-church-purple font-black py-4 px-10 rounded-full hover:bg-gray-100 transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                        <span class="flex items-center">
                            Join Us This Sunday
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition duration-300" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>

                </div>

                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="group">
                        <div class="text-3xl font-black text-white mb-2 group-hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">When</h3>
                        <p class="text-gray-200">Every Sunday • 12:00 PM</p>
                    </div>
                    <div class="group">
                        <div class="text-3xl font-black text-white mb-2 group-hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Where</h3>
                        <p class="text-gray-200">Church</p>
                    </div>
                    <div class="group">
                        <div class="text-3xl font-black text-white mb-2 group-hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Who</h3>
                        <p class="text-gray-200">All Youth<br>Ages 18-25</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
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
    // Add scroll-triggered animations
    window.addEventListener('scroll', () => {
        const cards = document.querySelectorAll('.group');
        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

            if (isVisible) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }
        });
    });
</script>
@endsection
