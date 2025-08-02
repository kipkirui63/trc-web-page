
@extends('layouts.app')

@section('title', 'Donate & Giving')

@section('description', 'Support the mission of TRC AGC Church through your generous giving')

@section('content')
<style>
        .hero-section {
            background: linear-gradient(135deg, #7c3aed 0%, #dc2626 50%, #ea580c 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            position: relative;
            overflow: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            animation: patternMove 20s linear infinite;
        }

        @keyframes patternMove {
            0% { transform: translateX(0) translateY(0); }
            25% { transform: translateX(-10px) translateY(-10px); }
            50% { transform: translateX(-20px) translateY(0); }
            75% { transform: translateX(-10px) translateY(10px); }
            100% { transform: translateX(0) translateY(0); }
        }

        .floating-element {
            animation: float 8s ease-in-out infinite;
            will-change: transform;
        }

        .floating-element:nth-child(2) {
            animation: floatReverse 10s ease-in-out infinite;
            animation-delay: -2s;
        }

        .floating-element:nth-child(3) {
            animation: floatSpin 12s ease-in-out infinite;
            animation-delay: -4s;
        }

        .floating-element:nth-child(4) {
            animation: floatPulse 9s ease-in-out infinite;
            animation-delay: -6s;
        }

        .floating-element:nth-child(5) {
            animation: iconFloat 15s ease-in-out infinite;
            animation-delay: -1s;
        }

        .floating-element:nth-child(6) {
            animation: iconGlow 8s ease-in-out infinite;
            animation-delay: -3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            33% {
                transform: translateY(-25px) rotate(2deg) scale(1.05);
            }
            66% {
                transform: translateY(-15px) rotate(-1deg) scale(0.95);
            }
        }

        @keyframes floatReverse {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            50% {
                transform: translateY(35px) rotate(-5deg) scale(1.1);
            }
        }

        @keyframes floatSpin {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            25% {
                transform: translateY(-20px) rotate(90deg) scale(1.05);
            }
            50% {
                transform: translateY(-30px) rotate(180deg) scale(0.9);
            }
            75% {
                transform: translateY(-10px) rotate(270deg) scale(1.1);
            }
        }

        @keyframes floatPulse {
            0%, 100% {
                transform: translateY(0px) scale(1);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-40px) scale(1.3);
                opacity: 1;
            }
        }

        @keyframes iconFloat {
            0%, 100% {
                transform: translateY(0px) translateX(0px) rotate(0deg);
                opacity: 0.2;
            }
            25% {
                transform: translateY(-15px) translateX(10px) rotate(5deg);
                opacity: 0.4;
            }
            50% {
                transform: translateY(-25px) translateX(-5px) rotate(-3deg);
                opacity: 0.3;
            }
            75% {
                transform: translateY(-10px) translateX(-10px) rotate(2deg);
                opacity: 0.5;
            }
        }

        @keyframes iconGlow {
            0%, 100% {
                transform: translateY(0px) scale(1);
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
                opacity: 0.2;
            }
            50% {
                transform: translateY(-30px) scale(1.2);
                text-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
                opacity: 0.4;
            }
        }

        .pulse-glow {
            animation: pulse-glow 4s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 
                    0 0 30px rgba(255, 255, 255, 0.2),
                    inset 0 0 20px rgba(255, 255, 255, 0.1);
                transform: scale(1);
            }
            50% {
                box-shadow: 
                    0 0 60px rgba(255, 255, 255, 0.4),
                    0 0 100px rgba(124, 58, 237, 0.2),
                    inset 0 0 30px rgba(255, 255, 255, 0.2);
                transform: scale(1.02);
            }
        }

        .text-shadow {
            text-shadow: 
                0 4px 8px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 255, 255, 0.1);
            animation: textGlow 4s ease-in-out infinite;
        }

        @keyframes textGlow {
            0%, 100% {
                text-shadow: 
                    0 4px 8px rgba(0, 0, 0, 0.3),
                    0 0 30px rgba(255, 255, 255, 0.1);
            }
            50% {
                text-shadow: 
                    0 4px 8px rgba(0, 0, 0, 0.3),
                    0 0 50px rgba(255, 255, 255, 0.2),
                    0 0 80px rgba(255, 193, 7, 0.1);
            }
        }

        .backdrop-blur {
            backdrop-filter: blur(10px);
        }

        .hero-card {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: cardFloat 6s ease-in-out infinite;
            will-change: transform;
        }

        .hero-card:nth-child(1) { animation-delay: 0s; }
        .hero-card:nth-child(2) { animation-delay: -2s; }
        .hero-card:nth-child(3) { animation-delay: -4s; }

        @keyframes cardFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-8px) rotate(0.5deg);
            }
        }

        .hero-card:hover {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.4);
            transform: translateY(-10px) scale(1.05) rotate(-1deg);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 0 50px rgba(255, 255, 255, 0.2);
            animation-play-state: paused;
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            40% {
                transform: translateY(-15px) scale(1.1);
                opacity: 0.8;
            }
            60% {
                transform: translateY(-8px) scale(1.05);
                opacity: 0.9;
            }
        }

        .bg-clip-text {
            -webkit-background-clip: text;
            background-clip: text;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% {
                background-position: -200% center;
            }
            50% {
                background-position: 200% center;
            }
        }

        /* Button Animations */
        .hero-section a {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-section a::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
            transition: all 0.6s ease;
            transform: translate(-50%, -50%);
            border-radius: 50%;
        }

        .hero-section a:hover::before {
            width: 200%;
            height: 200%;
        }

        .hero-section a:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Add particle effect */
        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(2px 2px at 20% 30%, rgba(255,255,255,0.3), transparent),
                radial-gradient(2px 2px at 40% 70%, rgba(255,255,255,0.2), transparent),
                radial-gradient(1px 1px at 90% 40%, rgba(255,255,255,0.3), transparent),
                radial-gradient(1px 1px at 50% 60%, rgba(255,255,255,0.2), transparent);
            background-size: 550px 550px, 350px 350px, 250px 250px, 150px 150px;
            animation: particles 25s linear infinite;
            pointer-events: none;
        }

        @keyframes particles {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; }
            50% { opacity: 0.5; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 1; }
        }

        .donate-button {
            background: linear-gradient(45deg, #dc2626, #ea580c);
            border: none;
        }

        .donate-button:hover {
            background: linear-gradient(45deg, #b91c1c, #dc2626);
        }

        .outline-button {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .outline-button:hover {
            background: rgba(255, 255, 255, 0.9);
            color: #7c3aed;
            border-color: rgba(255, 255, 255, 0.8);
        }
    </style>
<!-- Hero Section -->
<section class="hero-section flex items-center justify-center relative min-h-screen">
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full floating-element"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full floating-element"></div>
        <div class="absolute bottom-40 left-20 w-24 h-24 bg-white/10 rounded-full floating-element"></div>
        <div class="absolute bottom-20 right-10 w-18 h-18 bg-white/10 rounded-full floating-element"></div>
        
        <!-- Giving Icons -->
        <div class="absolute top-32 right-1/4 text-white/20 text-4xl floating-element">
            <i class="fas fa-hand-holding-heart"></i>
        </div>
        <div class="absolute bottom-32 left-1/4 text-white/20 text-3xl floating-element">
            <i class="fas fa-coins"></i>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto text-center text-white">
                <!-- Main Content -->
                <div class="mb-12">
                    <!-- Subtitle -->
                    <div class="mb-8">
                        <span class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur rounded-full text-white/90 font-semibold text-lg border border-white/30 pulse-glow">
                            <i class="fas fa-heart mr-3 text-xl"></i>
                            Give • Share • Bless
                        </span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-8 text-shadow leading-tight">
                        <span class="block mb-2">Support Our</span>
                        <span class="block bg-gradient-to-r from-white via-yellow-200 to-white bg-clip-text text-transparent">Sacred Mission</span>
                    </h1>

                    <!-- Description -->
                    <p class="text-xl md:text-2xl mb-12 leading-relaxed text-white/90 max-w-4xl mx-auto">
                        Your generosity helps us take the Whole Gospel to the Whole World. 
                        Join us in making an eternal impact through faithful giving
                    </p>

                    <!-- Giving Impact Cards -->
                    <div class="grid md:grid-cols-3 gap-6 mb-12">
                        <div class="hero-card backdrop-blur rounded-2xl p-6">
                            <div class="text-4xl font-bold mb-2">100%</div>
                            <div class="text-white/80">Goes to Ministry</div>
                        </div>
                        <div class="hero-card backdrop-blur rounded-2xl p-6">
                            <div class="text-4xl font-bold mb-2">52</div>
                            <div class="text-white/80">Weeks of Impact</div>
                        </div>
                        <div class="hero-card backdrop-blur rounded-2xl p-6">
                            <div class="text-4xl font-bold mb-2">∞</div>
                            <div class="text-white/80">Eternal Value</div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row justify-center gap-6 mt-12">
                        <a href="#giving-options" class="outline-button font-semibold py-4 px-8 rounded-full text-center text-lg">
                            <i class="fas fa-heart mr-2"></i>Ways to Give
                        </a>
                        <a href="#mpesa-section" class="donate-button text-white font-semibold py-4 px-8 rounded-full text-center shadow-xl text-lg">
                            <i class="fas fa-mobile-alt mr-2"></i>Give via M-Pesa
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>

                <!-- Scroll Indicator -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 scroll-indicator">
                    <div class="w-8 h-12 border-2 border-white/50 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-white/70 rounded-full mt-2"></div>
                    </div>
                    <p class="text-white/60 text-sm mt-2">Ways to give</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Support Section -->
    <section id="mission-support" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block">
                    <h2 class="text-4xl md:text-5xl font-bold text-gradient mb-4">Supporting Global Missions</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-church-red to-church-purple mx-auto rounded-full"></div>
                </div>
                <p class="text-xl text-gray-600 mt-6 max-w-2xl mx-auto">
                    Taking the Whole Gospel to the Whole World through your faithful partnership
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
                <!-- Mission Impact -->
                <div class="bg-white rounded-3xl shadow-xl p-8 md:p-10 elegant-border card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-purple-light rounded-2xl flex items-center justify-center text-white text-2xl mr-4">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Your Mission Giving Makes a Difference</h3>
                    </div>
                    
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        At TRC AGC Church, we are committed to fulfilling the Great Commission by supporting mission work locally and globally. Your generous donations enable us to:
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-church-red rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Send and sustain missionaries in unreached regions</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-church-red rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Fund Bible translation projects in indigenous languages</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-church-red rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Support church planting initiatives in strategic locations</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-church-red rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Provide humanitarian aid alongside Gospel ministry</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-2 h-2 bg-church-red rounded-full mt-3 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Train and equip local leaders for evangelism and discipleship</p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-r from-church-purple/10 to-church-purple-light/10 rounded-2xl p-6 border-l-4 border-church-purple">
                        <p class="italic text-gray-700 text-lg leading-relaxed">
                            "And this gospel of the kingdom will be proclaimed throughout the whole world as a testimony to all nations, and then the end will come."
                        </p>
                        <p class="font-semibold text-church-purple mt-2">— Matthew 24:14</p>
                    </div>
                </div>

                <!-- How to Support -->
                <div class="bg-white rounded-3xl shadow-xl p-8 md:p-10 elegant-border card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-red to-red-500 rounded-2xl flex items-center justify-center text-white text-2xl mr-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Ways to Support Our Mission Work</h3>
                    </div>
                    
                    <div class="space-y-8">
                        <!-- Regular Mission Giving -->
                        <div class="bg-gray-50 rounded-2xl p-6">
                            <h4 class="font-bold text-xl text-gray-800 mb-3 flex items-center">
                                <span class="w-8 h-8 bg-church-purple text-white rounded-full flex items-center justify-center text-sm mr-3">1</span>
                                Regular Mission Giving
                            </h4>
                            <p class="text-gray-700 mb-4">We encourage regular, faithful giving to missions as part of your stewardship:</p>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="bg-white rounded-xl p-4 shadow-sm">
                                    <div class="font-bold text-church-purple mb-1">M-Pesa</div>
                                    <div class="text-gray-600">Use account <span class="number-highlight text-2xl">7535398</span> for all giving</div>
                                </div>
                                <div class="bg-white rounded-xl p-4 shadow-sm">
                                    <div class="font-bold text-church-purple mb-1">Monthly Pledges</div>
                                    <div class="text-gray-600">Commit to regular support</div>
                                </div>
                            </div>
                            <p class="text-sm text-church-purple font-medium mt-4 bg-church-purple/10 rounded-lg p-3">
                                💯 100% of mission designated funds go directly to field operations and missionary support.
                            </p>
                        </div>
                        
                        <!-- Special Projects -->
                        <div class="bg-gradient-to-br from-church-purple/5 to-church-red/5 rounded-2xl p-6 border border-church-purple/20">
                            <h4 class="font-bold text-xl text-gray-800 mb-3 flex items-center">
                                <span class="w-8 h-8 bg-church-red text-white rounded-full flex items-center justify-center text-sm mr-3">2</span>
                                Special Mission Projects
                            </h4>
                            <p class="text-gray-700 mb-4">Throughout the year, we highlight specific projects needing funding</p>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="text-sm text-gray-600">• Mission field equipment</div>
                                <div class="text-sm text-gray-600">• Church building projects</div>
                                <div class="text-sm text-gray-600">• Crisis response aid</div>
                                <div class="text-sm text-gray-600">• Training scholarships</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scripture Call to Action -->
            <div class="mt-16 max-w-4xl mx-auto">
                <div class="elegant-gradient rounded-3xl p-10 text-white text-center shadow-2xl">
                    <div class="max-w-2xl mx-auto">
                        <p class="text-2xl italic mb-6 leading-relaxed">"How beautiful are the feet of those who preach the good news!"</p>
                        <p class="text-lg font-medium mb-2">— Romans 10:15</p>
                        <p class="text-xl mb-8 text-gray-100">Your giving enables feet to carry the Good News to the ends of the earth.</p>
                        <div class="flex flex-col sm:flex-row justify-center gap-6">
                            <a href="#mpesa-section" class="glass-effect hover:bg-white hover:text-church-purple font-semibold py-4 px-8 rounded-full transition-all duration-300">
                                <i class="fas fa-donate mr-2"></i>Give to Missions Now
                            </a>
                            <a href="mailto:thikaroadagc@gmail.com" class="bg-church-red hover:bg-red-700 text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 shadow-xl">
                                <i class="fas fa-envelope mr-2"></i>Contact Mission Office
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Giving Options -->
    <section id="giving-options" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gradient mb-4">Ways to Give</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-church-red to-church-purple mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Support our ministry through these convenient and secure giving options</p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 max-w-4xl mx-auto">
                <!-- M-Pesa Option -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-xl overflow-hidden card-hover elegant-border">
                    <div class="p-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-3xl mb-6 floating-animation">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Mobile Money (M-Pesa)</h3>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">Give easily and securely using our M-Pesa Paybill number from anywhere, anytime. Fast, convenient, and trusted.</p>
                        <div class="bg-gradient-to-r from-green-500/10 to-green-600/10 rounded-2xl p-4 border-l-4 border-green-500">
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt text-green-600 mr-2"></i>
                                <span class="text-green-800 font-medium">Secure & Instant</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sunday Service Option -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-3xl shadow-xl overflow-hidden card-hover elegant-border">
                    <div class="p-8">
                        <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-church-purple to-church-purple-light flex items-center justify-center text-white text-3xl mb-6 floating-animation" style="animation-delay: -2s;">
                            <i class="fas fa-church"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Sunday Service</h3>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">Join us in worship and give during our regular Sunday service when the offering is collected as part of our worship experience.</p>
                        <div class="bg-gradient-to-r from-church-purple/10 to-church-purple-light/10 rounded-2xl p-4 border-l-4 border-church-purple">
                            <div class="flex items-center">
                                <i class="fas fa-heart text-church-purple mr-2"></i>
                                <span class="text-church-purple font-medium">Worship Together</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- M-Pesa Section -->
    <section id="mpesa-section" class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gradient mb-4">Give via M-Pesa</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-church-red to-church-purple mx-auto rounded-full"></div>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden elegant-border">
                    <div class="lg:flex">
                        <div class="lg:w-3/5 p-8 lg:p-12">
                            <div class="flex items-center mb-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mr-4">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-gray-800">How to Give via M-Pesa</h3>
                            </div>
                            
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-church-purple text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">1</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Go to M-Pesa on your phone</p>
                                        <p class="text-gray-600 text-sm">Access your M-Pesa menu</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-church-purple text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">2</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Select "Lipa na M-Pesa"</p>
                                        <p class="text-gray-600 text-sm">Choose payment option</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-church-purple text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">3</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Select "Pay Bill"</p>
                                        <p class="text-gray-600 text-sm">For business payments</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-church-red text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">4</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Enter Business Number: <span class="number-highlight text-3xl">7535398</span></p>
                                        <p class="font-medium text-gray-800">Enter Business Number: <span class="number-highlight text-3xl">522533</span></p>
                                        <p class="text-gray-600 text-sm">Our official paybill number</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-church-red text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">5</span>
                                    <div>
                                        <p class="font-medium text-gray-800 mb-2">Enter Account Number: <span class="number-highlight text-2xl">7535398</span></p>
                                        <p class="text-gray-600 text-sm">For tithes, offerings, missions and other contributions</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">6</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Enter Amount & Complete</p>
                                        <p class="text-gray-600 text-sm">Enter PIN and confirm transaction</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border-l-4 border-blue-500">
                                <p class="text-gray-700 mb-2">
                                    <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                                    Need a receipt or have questions about your donation?
                                </p>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="mailto:thikaroadagc@gmail.com" class="text-church-purple hover:text-church-purple-light font-medium transition-colors">
                                        <i class="fas fa-envelope mr-1"></i>thikaroadagc@gmail.com
                                    </a>
                                    <a href="tel:+254123456789" class="text-church-purple hover:text-church-purple-light font-medium transition-colors">
                                        <i class="fas fa-phone mr-1"></i>+254 710 668 173
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:w-2/5 bg-gradient-to-br from-church-purple/10 to-church-red/10 p-8 lg:p-12 flex flex-col justify-center">
                            <div class="mb-8 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl p-6 text-center text-white shadow-xl">
                                <p class="text-lg font-bold mb-4">M-Pesa Paybill Number</p>
                                <div class="bg-white rounded-2xl p-6 shadow-inner">
                                    <p class="text-gray-800 text-4xl font-bold tracking-widest">522533</p>
                                </div>
                            </div>
                            
                            <div class="bg-gradient-to-br from-church-purple to-church-purple-light rounded-3xl p-6 text-white shadow-xl">
                                <p class="font-bold mb-4 text-xl flex items-center">
                                    <i class="fas fa-mobile-alt mr-2 text-yellow-300"></i>
                                    TRC AGC PAYBILL SERVICE
                                </p>
                                <p class="mb-4 text-gray-100">Use <span class="text-yellow-200 font-bold">ACCOUNT NUMBER</span> for all your contributions:</p>
                                <div class="bg-white/20 rounded-2xl p-4 mb-4">
                                    <div class="flex justify-between items-center py-2 px-3 bg-white/10 rounded-lg">
                                        <span class="number-highlight text-2xl">7535398</span>
                                        <span>All Giving</span>
                                    </div>
                                </div>
                                <p class="text-xs text-yellow-100 bg-yellow-600/20 rounded-lg p-3">
                                    <i class="fas fa-lightbulb mr-1"></i>
                                    Use this account for tithes, offerings, missions and other contributions
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why We Give -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gradient mb-4">Why We Give</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-church-red to-church-purple mx-auto rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-church-purple/5 to-church-purple-light/5 rounded-3xl p-8 lg:p-10 border border-church-purple/10 card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-purple-light rounded-2xl flex items-center justify-center text-white text-2xl mr-4">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Our Biblical Foundation</h3>
                    </div>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                        At TRC AGC Church, we believe that giving is an act of worship and obedience to God. The Bible teaches us to give cheerfully and generously (2 Corinthians 9:7), to tithe from our income (Malachi 3:10), and to support the work of ministry (1 Corinthians 9:14).
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Through your faithful giving, you participate in God's work of taking the Whole Gospel to the Whole World, as we fulfill our mission together.
                    </p>
                    <div class="mt-6 bg-white rounded-2xl p-6 shadow-sm border-l-4 border-church-purple">
                        <p class="italic text-gray-700 text-lg">
                            "Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."
                        </p>
                        <p class="font-semibold text-church-purple mt-2">— 2 Corinthians 9:7</p>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-church-red/5 to-red-500/5 rounded-3xl p-8 lg:p-10 border border-church-red/10 card-hover">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-red to-red-500 rounded-2xl flex items-center justify-center text-white text-2xl mr-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Your Impact</h3>
                    </div>
                    <p class="text-gray-700 mb-6 text-lg leading-relaxed">Your generous support enables us to:</p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-3 h-3 bg-church-red rounded-full mt-2 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Support our church ministries and operations</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3 h-3 bg-church-red rounded-full mt-2 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Fund community outreach programs</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3 h-3 bg-church-red rounded-full mt-2 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Build and maintain schools for underprivileged children</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3 h-3 bg-church-red rounded-full mt-2 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Support missionaries locally and globally</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3 h-3 bg-church-red rounded-full mt-2 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Provide care for those in need in our community</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-3 h-3 bg-church-red rounded-full mt-2 mr-4 flex-shrink-0"></div>
                            <p class="text-gray-700">Develop educational programs for youth and adults</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-white rounded-2xl p-6 shadow-sm">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-church-red to-red-500 rounded-full flex items-center justify-center text-white text-xl mx-auto mb-4">
                                <i class="fas fa-heart"></i>
                            </div>
                            <p class="text-gray-700 font-medium">Every gift, no matter the size, makes a difference in advancing God's kingdom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scripture Quote -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="elegant-gradient rounded-3xl p-12 text-white text-center shadow-2xl">
                    <div class="max-w-4xl mx-auto">
                        <div class="mb-8">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                                <i class="fas fa-quote-left text-white/80"></i>
                            </div>
                            <p class="italic text-xl md:text-2xl text-gray-100 leading-relaxed mb-6">
                                "Bring all the tithes...so that the servants (who have no allotment or inheritance of their own), and the foreigners, the fatherless and the widows who live in your towns may come and eat and be satisfied, and so that the LORD your God may bless you in all the work of your hands."
                            </p>
                            <p class="text-lg font-semibold text-yellow-200">— Deuteronomy 14:28-29</p>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6 mt-12">
                            <div class="glass-effect rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                                    <i class="fas fa-praying-hands"></i>
                                </div>
                                <h4 class="font-bold mb-2">Faithful Stewardship</h4>
                                <p class="text-sm text-gray-200">Managing God's resources with integrity</p>
                            </div>
                            <div class="glass-effect rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <h4 class="font-bold mb-2">Global Impact</h4>
                                <p class="text-sm text-gray-200">Reaching nations with the Gospel</p>
                            </div>
                            <div class="glass-effect rounded-2xl p-6 text-center">
                                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h4 class="font-bold mb-2">Generous Hearts</h4>
                                <p class="text-sm text-gray-200">Reflecting God's love through giving</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row justify-center gap-6 mt-10">
                            <a href="#mpesa-section" class="glass-effect hover:bg-white hover:text-church-purple font-semibold py-4 px-8 rounded-full transition-all duration-300 text-center">
                                <i class="fas fa-donate mr-2"></i>Start Giving Today
                            </a>
                            <a href="#giving-options" class="bg-white text-church-purple hover:bg-gray-100 font-semibold py-4 px-8 rounded-full transition-all duration-300 text-center shadow-xl">
                                <i class="fas fa-info-circle mr-2"></i>Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Call to Action -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gradient mb-6">Ready to Partner With Us?</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Join us in taking the Whole Gospel to the Whole World through your faithful giving and support.
                </p>
                
                <div class="grid md:grid-cols-2 gap-6 mb-12">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 border border-green-200">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Quick M-Pesa Giving</h3>
                        <p class="text-gray-600 mb-4">Give instantly using paybill <span class="font-bold text-2xl text-green-600"></span></p>
                        <a href="#mpesa-section" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
                            Give Now
                        </a>
  <!-- Footer Call to Action -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gradient mb-6">Ready to Partner With Us?</h2>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Join us in taking the Whole Gospel to the Whole World through your faithful giving and support.
            </p>
            
            <div class="grid md:grid-cols-2 gap-6 mb-12">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 border border-green-200">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Quick M-Pesa Giving</h3>
                    <div class="text-gray-700 mb-4">
                        <p class="mb-2">Paybill: <span class="font-bold text-2xl text-green-600">522533</span></p>
                        <p>Account: <span class="font-bold text-xl text-green-600">7535398</span></p>
                        <p class="text-sm text-gray-500 mt-2">For tithes, offerings and other contributions</p>
                    </div>
                    <a href="#mpesa-section" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
                        Give Now
                    </a>
                </div>
                
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6 border border-purple-200">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Have Questions?</h3>
                    <p class="text-gray-600 mb-4">Our finance team is here to help with any giving inquiries</p>
                    <a href="mailto:thikaroadagc@gmail.com" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
                        Contact Us
                    </a>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-gray-50 to-white rounded-2xl p-8 border border-gray-200">
                <p class="text-lg text-gray-700 italic leading-relaxed">
                    "Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows generously will also reap generously. Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."
                </p>
                <p class="font-semibold text-purple-600 mt-4">— 2 Corinthians 9:6-7</p>
            </div>
        </div>
    </div>
</section>

<style>
.text-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
</style>
    <script>
      const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);
        
        // Observe all cards and sections
        document.querySelectorAll('section > div').forEach(section => {
            observer.observe(section);
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