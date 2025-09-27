@extends('layouts.app')

@section('title', 'Upcoming Events')

@section('content')
<!-- Redesigned Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Dynamic Background with Multiple Layers -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-red-50"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Floating geometric shapes -->
        <div class="absolute top-20 -right-20 w-96 h-96 bg-gradient-to-br from-church-purple/15 to-purple-400/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-gradient-to-tr from-church-red/12 to-red-400/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-gradient-to-r from-purple-300/8 to-red-300/8 rounded-full blur-2xl animate-pulse" style="animation-delay: 2s;"></div>
        
        <!-- Small decorative elements -->
        <div class="absolute top-32 left-10 transform rotate-45">
            <div class="w-6 h-6 bg-gradient-to-br from-church-purple to-purple-600 rounded-sm opacity-20 animate-bounce" style="animation-delay: 0.5s;"></div>
        </div>
        <div class="absolute bottom-40 right-20 transform -rotate-12">
            <div class="w-4 h-4 bg-gradient-to-br from-church-red to-red-600 rounded-full opacity-25 animate-bounce" style="animation-delay: 1.5s;"></div>
        </div>
        <div class="absolute top-2/3 right-1/3 transform rotate-90">
            <div class="w-8 h-2 bg-gradient-to-r from-purple-400 to-red-400 rounded-full opacity-15 animate-pulse" style="animation-delay: 0.8s;"></div>
        </div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-6xl mx-auto">
            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left Column - Text Content -->
                <div class="space-y-8 text-center lg:text-left">
                    <!-- Subtitle -->
                    <div class="inline-flex items-center px-6 py-3 bg-white/60 backdrop-blur-sm rounded-full shadow-lg border border-purple-100/50">
                        <div class="w-2 h-2 bg-gradient-to-r from-church-purple to-church-red rounded-full mr-3 animate-pulse"></div>
                        <span class="text-gray-700 font-medium text-sm uppercase tracking-wide">Join Our Community</span>
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight">
                        <span class="bg-gradient-to-r from-gray-800 via-purple-800 to-gray-900 bg-clip-text text-transparent mb-4 block">
                            Upcoming
                        </span>
                        <span class="bg-gradient-to-r from-church-purple via-purple-600 to-church-red bg-clip-text text-transparent">
                            Events
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Experience transformative worship, enriching Bible studies, and meaningful community connections that strengthen our faith together.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#events" class="group inline-flex items-center justify-center bg-gradient-to-r from-church-purple to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                            <i class="fas fa-calendar-alt mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                            View Events
                        </a>
                        <a href="/about" class="group inline-flex items-center justify-center bg-white/80 backdrop-blur-sm hover:bg-white border-2 border-purple-200 hover:border-purple-400 text-gray-700 hover:text-purple-700 font-semibold py-4 px-8 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
                            <i class="fas fa-info-circle mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                            Learn More
                        </a>
                    </div>
                                  <!-- Stats or Features -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-purple-100/50">
                        <div class="text-center">
                            <div class="text-2xl font-bold bg-gradient-to-r from-church-purple to-purple-600 bg-clip-text text-transparent">10+</div>
                            <div class="text-sm text-gray-600 font-medium">Weekly Events</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-church-red bg-clip-text text-transparent">200+</div>
                            <div class="text-sm text-gray-600 font-medium">Members</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold bg-gradient-to-r from-church-red to-red-600 bg-clip-text text-transparent">7+</div>
                            <div class="text-sm text-gray-600 font-medium">Ministries</div>
                        </div>
      
                    </div>
                </div>

                <!-- Right Column - Visual Element -->
                <div class="relative">
                    <!-- Main Visual Container -->
                    <div class="relative bg-white/70 backdrop-blur-sm rounded-3xl shadow-2xl border border-purple-100/50 p-8 transform hover:scale-105 transition-all duration-500">
                        
                        <!-- Event Preview Cards Stack -->
                        <div class="space-y-4">
                            <!-- Sunday Service Preview -->
                            <div class="bg-gradient-to-r from-church-purple to-purple-600 text-white p-6 rounded-2xl shadow-lg transform -rotate-2 hover:rotate-0 transition-transform duration-300">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-bold text-lg">Sunday Worship</h3>
                                        <p class="text-purple-100 text-sm">{{ $nextSunday->format('M d, Y') }}</p>
                                    </div>
                                    <div class="text-2xl opacity-75">
                                        <i class="fas fa-church"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bible Study Preview -->
                            <div class="bg-gradient-to-r from-church-red to-red-600 text-white p-6 rounded-2xl shadow-lg transform rotate-1 hover:rotate-0 transition-transform duration-300">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-bold text-lg">Bible Study</h3>
                                        <p class="text-red-100 text-sm">{{ $nextWednesday->format('M d, Y') }}</p>
                                    </div>
                                    <div class="text-2xl opacity-75">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Special Events Indicator -->
                            <div class="bg-gradient-to-r from-purple-400 to-red-400 text-white p-6 rounded-2xl shadow-lg transform -rotate-1 hover:rotate-0 transition-transform duration-300">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="font-bold text-lg">Special Events</h3>
                                        <p class="text-purple-100 text-sm">Throughout the month</p>
                                    </div>
                                    <div class="text-2xl opacity-75">
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full opacity-20 animate-pulse"></div>
                        <div class="absolute -bottom-2 -left-2 w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-400 rounded-full opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
                    </div>

                    <!-- Floating elements around the visual -->
                    <div class="absolute -top-6 -left-6 w-16 h-16 bg-white/50 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center border border-purple-100/50">
                        <i class="fas fa-heart text-2xl text-church-purple"></i>
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-white/50 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center border border-red-100/50">
                        <i class="fas fa-hands-praying text-xl text-church-red"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="animate-bounce">
            <div class="w-8 h-12 border-2 border-purple-300 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-gradient-to-b from-church-purple to-transparent rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="py-32 bg-gradient-to-br from-slate-50 via-white to-purple-50/30 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-transparent"></div>
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Join Our Community</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Experience the power of fellowship through our carefully planned events designed to nurture your spiritual journey.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <!-- Sunday Worship -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Event Header -->
                <div class="relative bg-gradient-to-br from-church-purple via-purple-600 to-purple-700 text-white p-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-800/20 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="text-center">
                                <div class="text-sm font-medium opacity-90 mb-2 tracking-wider uppercase">
                                    {{ strtoupper($nextSunday->format('M')) }}
                                </div>
                                <div class="text-5xl font-bold leading-none">{{ $nextSunday->format('d') }}</div>
                                <div class="text-sm opacity-75 mt-1">{{ $nextSunday->format('Y') }}</div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium opacity-90 mb-1">Service Time</div>
                                <div class="text-2xl font-bold">10:00 AM</div>
                                <div class="text-sm opacity-75">90 minutes</div>
                            </div>
                        </div>
                        <div class="h-px bg-white/20 w-full"></div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="relative p-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Sunday Worship Service</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Experience uplifting worship with contemporary music, inspiring messages, and a welcoming community that celebrates faith together.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-clock mr-3 text-purple-500"></i>
                            <span>Duration: 90 minutes</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-users mr-3 text-purple-500"></i>
                            <span>All ages welcome</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Sunday+Worship+Service&dates={{ $nextSunday->format('Ymd') }}T100000/{{ $nextSunday->format('Ymd') }}T113000&details=Join+us+for+worship&sf=true&output=xml" 
                       target="_blank" 
                       class="group w-full inline-flex items-center justify-center bg-gradient-to-r from-church-purple to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-4 px-6 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-calendar-plus mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Bible Study -->
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-red-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Event Header -->
                <div class="relative bg-gradient-to-br from-church-red via-red-600 to-red-700 text-white p-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-800/20 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="text-center">
                                <div class="text-sm font-medium opacity-90 mb-2 tracking-wider uppercase">
                                    {{ strtoupper($nextWednesday->format('M')) }}
                                </div>
                                <div class="text-5xl font-bold leading-none">{{ $nextWednesday->format('d') }}</div>
                                <div class="text-sm opacity-75 mt-1">{{ $nextWednesday->format('Y') }}</div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium opacity-90 mb-1">Evening Study</div>
                                <div class="text-xl font-bold">8:30 - 9:30 PM</div>
                                <div class="text-sm opacity-75">Weekly</div>
                            </div>
                        </div>
                        <div class="h-px bg-white/20 w-full"></div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="relative p-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">Bible Study Group</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Deepen your understanding of Scripture through guided study, meaningful discussion, and fellowship with believers seeking spiritual growth.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-book-open mr-3 text-red-500"></i>
                            <span>Interactive Bible study</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-comments mr-3 text-red-500"></i>
                            <span>Group discussions</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Bible+Study+Group&dates={{ $nextWednesday->format('Ymd') }}T203000/{{ $nextWednesday->format('Ymd') }}T213000&details=Join+us+for+Bible+Study&sf=true&output=xml" 
                       target="_blank" 
                       class="group w-full inline-flex items-center justify-center bg-gradient-to-r from-church-red to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold py-4 px-6 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-calendar-plus mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Custom Events -->
            @foreach ($customEvents as $event)
            <div class="group relative bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100/50 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-{{ $event['color'] }}-500/5 to-{{ $event['color'] }}-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Event Header -->
                <div class="relative bg-gradient-to-br from-{{ $event['color'] }}-500 via-{{ $event['color'] }}-600 to-{{ $event['color'] }}-700 text-white p-8">
                    <div class="absolute inset-0 bg-gradient-to-r from-{{ $event['color'] }}-800/20 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="text-center">
                                <div class="text-sm font-medium opacity-90 mb-2 tracking-wider uppercase">
                                    {{ strtoupper($event['date']->format('M')) }}
                                </div>
                                <div class="text-5xl font-bold leading-none">{{ $event['date']->format('d') }}</div>
                                <div class="text-sm opacity-75 mt-1">{{ $event['date']->format('Y') }}</div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium opacity-90 mb-1">Event Time</div>
                                <div class="text-2xl font-bold">{{ $event['time'] }}</div>
                                <div class="text-sm opacity-75">Special Event</div>
                            </div>
                        </div>
                        <div class="h-px bg-white/20 w-full"></div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="relative p-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900">{{ $event['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $event['description'] }}</p>
                    </div>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-star mr-3 text-{{ $event['color'] }}-500"></i>
                            <span>Special community event</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-heart mr-3 text-{{ $event['color'] }}-500"></i>
                            <span>Fellowship and connection</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text={{ urlencode($event['title']) }}&dates={{ $event['date']->format('Ymd') }}T090000/{{ $event['date']->format('Ymd') }}T103000&details={{ urlencode($event['description']) }}&sf=true&output=xml" 
                       target="_blank" 
                       class="group w-full inline-flex items-center justify-center bg-gradient-to-r from-{{ $event['color'] }}-500 to-{{ $event['color'] }}-600 hover:from-{{ $event['color'] }}-600 hover:to-{{ $event['color'] }}-700 text-white font-semibold py-4 px-6 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        <i class="fas fa-calendar-plus mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="mt-24 text-center">
            <div class="bg-white rounded-3xl shadow-2xl p-12 max-w-4xl mx-auto border border-gray-100/50">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Ready to Connect?
                </h3>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-2xl mx-auto">
                    Join our growing community of believers and discover the joy of worship, fellowship, and spiritual growth together.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/about" class="inline-flex items-center justify-center border-2 border-gray-300 hover:border-purple-500 text-gray-700 hover:text-purple-600 font-semibold py-4 px-8 rounded-2xl transition-all duration-300 hover:shadow-lg">
                        <i class="fas fa-info-circle mr-3"></i>
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced custom CSS for the new hero -->
<style>
/* Smooth animations for hero elements */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Apply animations */
.container > div > div:first-child {
    animation: slideInLeft 0.8s ease-out;
}

.container > div > div:last-child {
    animation: slideInRight 0.8s ease-out 0.2s both;
}

/* Card hover effects */
.card-hover {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.card-hover:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Event cards in main section */
.group:nth-child(1) { animation: fadeInUp 0.6s ease-out 0.1s both; }
.group:nth-child(2) { animation: fadeInUp 0.6s ease-out 0.2s both; }
.group:nth-child(3) { animation: fadeInUp 0.6s ease-out 0.3s both; }
.group:nth-child(4) { animation: fadeInUp 0.6s ease-out 0.4s both; }
.group:nth-child(5) { animation: fadeInUp 0.6s ease-out 0.5s both; }

/* Smooth button transitions */
.group button, .group a {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Custom scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f5f9;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #8b5cf6, #a855f7);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #7c3aed, #9333ea);
}

/* Backdrop blur support */
@supports (backdrop-filter: blur(10px)) {
    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
    }
}
</style>
@endsection