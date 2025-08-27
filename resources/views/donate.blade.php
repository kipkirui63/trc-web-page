@extends('layouts.app')

@section('title', 'Donate & Giving')

@section('description', 'Support the mission of TRC AGC Church through your generous giving')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden">
        <div class="elegant-gradient text-white py-24 md:py-32 relative">
            <!-- Decorative Elements -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-white floating-animation"></div>
                <div class="absolute top-40 right-20 w-20 h-20 rounded-full bg-white floating-animation" style="animation-delay: -2s;"></div>
                <div class="absolute bottom-20 left-1/4 w-24 h-24 rounded-full bg-white floating-animation" style="animation-delay: -4s;"></div>
            </div>
            
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        Give to Support Our 
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-white">
                            Sacred Mission
                        </span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-gray-100 leading-relaxed">
                        Your generosity helps us take the Whole Gospel to the Whole World
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6 mt-12">
                        <a href="#giving-options" class="glass-effect hover:bg-white hover:text-church-purple font-semibold py-4 px-8 rounded-full transition-all duration-300 text-center border border-white/30">
                            <i class="fas fa-heart mr-2"></i>Ways to Give
                        </a>
                        <a href="#mpesa-section" class="bg-church-red hover:bg-red-700 text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 text-center shadow-xl hover:shadow-2xl">
                            <i class="fas fa-mobile-alt mr-2"></i>Give via M-Pesa
                        </a>
                    </div>
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
                                    <div class="text-gray-600">Account Number <span class="number-highlight text-2xl">3</span> for Missions</div>
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
                                        <p class="text-gray-600 text-sm">Our official paybill number</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <span class="w-8 h-8 bg-church-red text-white rounded-full flex items-center justify-center text-sm font-bold mr-4 flex-shrink-0 mt-1">5</span>
                                    <div>
                                        <p class="font-medium text-gray-800 mb-2">Enter Account Number:</p>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="bg-gradient-to-r from-church-purple/10 to-church-purple-light/10 rounded-xl p-3 border border-church-purple/20">
                                                <div class="number-highlight text-2xl">1</div>
                                                <div class="text-sm text-gray-600">Tithe</div>
                                            </div>
                                            <div class="bg-gradient-to-r from-church-purple/10 to-church-purple-light/10 rounded-xl p-3 border border-church-purple/20">
                                                <div class="number-highlight text-2xl">2</div>
                                                <div class="text-sm text-gray-600">Offering</div>
                                            </div>
                                            <div class="bg-gradient-to-r from-church-red/10 to-red-500/10 rounded-xl p-3 border border-church-red/20">
                                                <div class="number-highlight text-2xl">3</div>
                                                <div class="text-sm text-gray-600">Missions</div>
                                            </div>
                                            <div class="bg-gradient-to-r from-gray-400/10 to-gray-500/10 rounded-xl p-3 border border-gray-400/20">
                                                <div class="number-highlight text-2xl">4</div>
                                                <div class="text-sm text-gray-600">Other</div>
                                            </div>
                                        </div>
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
                                    <a href="mailto:finance@trcchurch.org" class="text-church-purple hover:text-church-purple-light font-medium transition-colors">
                                        <i class="fas fa-envelope mr-1"></i>finance@trcchurch.org
                                    </a>
                                    <a href="tel:+254123456789" class="text-church-purple hover:text-church-purple-light font-medium transition-colors">
                                        <i class="fas fa-phone mr-1"></i>+254 710 668 173
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:w-2/5 bg-gradient-to-br from-gray-50 to-gray-100 p-8 lg:p-12 flex flex-col justify-center">
                            <div class="mb-8 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl p-6 text-center text-white shadow-xl">
                                <p class="text-lg font-bold mb-4">M-Pesa Paybill Number</p>
                                <div class="bg-white rounded-2xl p-6 shadow-inner">
                                    <p class="text-gray-800 text-4xl font-bold tracking-widest">522533</p>
                                </div>
                            </div>
                            
                            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-3xl p-6 text-white shadow-xl">
                                <p class="font-bold mb-4 text-xl flex items-center">
                                    <i class="fas fa-mobile-alt mr-2 text-green-400"></i>
                                    TRC PAYBILL SERVICE
                                </p>
                                <p class="mb-4 text-gray-300">Enter <span class="text-yellow-300 font-bold">ACCOUNT NUMBER</span> according to your giving purpose:</p>
                                <div class="space-y-2 mb-4">
                                    <div class="flex justify-between items-center py-2 px-3 bg-white/10 rounded-lg">
                                        <span class="number-highlight text-xl">1</span>
                                        <span>Tithe</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2 px-3 bg-white/10 rounded-lg">
                                        <span class="number-highlight text-xl">2</span>
                                        <span>Offering</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2 px-3 bg-white/10 rounded-lg">
                                        <span class="number-highlight text-xl">3</span>
                                        <span>Missions</span>
                                    </div>
                                    <div class="flex justify-between items-center py-2 px-3 bg-white/10 rounded-lg">
                                        <span class="number-highlight text-xl">4</span>
                                        <span>Other</span>
                                    </div>
                                </div>
                                <p class="text-xs text-yellow-100 bg-yellow-600/20 rounded-lg p-3">
                                    <i class="fas fa-lightbulb mr-1"></i>
                                    Example for "Other": Instruments, chairs, building fund, etc.
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
                    </div>
                    
                    <div class="bg-gradient-to-br from-church-purple/10 to-church-purple-light/10 rounded-2xl p-6 border border-church-purple/20">
                        <div class="w-16 h-16 bg-gradient-to-br from-church-purple to-church-purple-light rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Have Questions?</h3>
                        <p class="text-gray-600 mb-4">Our finance team is here to help with any giving inquiries</p>
                        <a href="mailto:thikaroadagc@gmail.com" class="bg-church-purple hover:bg-church-purple-light text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 inline-block">
                            Contact Us
                        </a>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-gray-50 to-white rounded-2xl p-8 border border-gray-200">
                    <p class="text-lg text-gray-700 italic leading-relaxed">
                        "Remember this: Whoever sows sparingly will also reap sparingly, and whoever sows generously will also reap generously. Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."
                    </p>
                    <p class="font-semibold text-church-purple mt-4">— 2 Corinthians 9:6-7</p>
                </div>
            </div>
        </div>
    </section>
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
        
        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
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