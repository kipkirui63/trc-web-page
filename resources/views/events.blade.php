@extends('layouts.app')

@section('title', 'Upcoming Events')

@section('content')
<!-- Professional Hero Section -->
<section class="relative bg-gradient-to-b from-slate-50 to-white py-24 md:py-32">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Breadcrumb -->
            <div class="mb-8">
                <span class="inline-flex items-center px-4 py-2 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    Events & Activities
                </span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                Upcoming Events
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                Join us for worship services, Bible studies, and community events designed to strengthen your faith and build meaningful connections.
            </p>

            <!-- Quick Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#events" class="inline-flex items-center justify-center bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-200 shadow-sm hover:shadow-md">
                    <i class="fas fa-arrow-down mr-2"></i>
                    View All Events
                </a>
                <a href="/about" class="inline-flex items-center justify-center bg-white hover:bg-gray-50 border-2 border-gray-200 text-gray-700 font-semibold py-3 px-8 rounded-lg transition-all duration-200">
                    <i class="fas fa-info-circle mr-2"></i>
                    About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white border-y border-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-3 gap-8 max-w-4xl mx-auto text-center">
            <div>
                <div class="text-3xl md:text-4xl font-bold text-purple-600 mb-2">10+</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Weekly Events</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-purple-600 mb-2">200+</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Active Members</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-purple-600 mb-2">7+</div>
                <div class="text-sm md:text-base text-gray-600 font-medium">Ministries</div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">All Events</h2>
            <p class="text-lg text-gray-600">
                Browse our upcoming events and add them directly to your calendar.
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <!-- Sunday Worship -->
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <!-- Event Header -->
                <div class="bg-purple-600 text-white p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <div class="text-sm font-semibold opacity-90 mb-1">
                                {{ $nextSunday->format('l') }}
                            </div>
                            <div class="text-3xl font-bold">{{ $nextSunday->format('M d, Y') }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90 mb-1">Service Time</div>
                            <div class="text-2xl font-bold">10:00 AM</div>
                        </div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sunday Worship Service</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Join us for uplifting worship, inspiring messages, and meaningful fellowship with our community.
                    </p>
                    
                    <div class="space-y-2 mb-6 text-sm text-gray-500">
                        <div class="flex items-center">
                            <i class="fas fa-clock w-5 text-purple-600"></i>
                            <span class="ml-2">Duration: 90 minutes</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users w-5 text-purple-600"></i>
                            <span class="ml-2">All ages welcome</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-music w-5 text-purple-600"></i>
                            <span class="ml-2">Contemporary worship</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Sunday+Worship+Service&dates={{ $nextSunday->format('Ymd') }}T100000/{{ $nextSunday->format('Ymd') }}T113000&details=Join+us+for+worship&sf=true&output=xml" 
                       target="_blank" 
                       class="w-full inline-flex items-center justify-center bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Bible Study -->
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <!-- Event Header -->
                <div class="bg-red-600 text-white p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <div class="text-sm font-semibold opacity-90 mb-1">
                                {{ $nextWednesday->format('l') }}
                            </div>
                            <div class="text-3xl font-bold">{{ $nextWednesday->format('M d, Y') }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90 mb-1">Evening Study</div>
                            <div class="text-xl font-bold">8:30 PM</div>
                        </div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Wednesday Bible Study</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Deepen your understanding of Scripture through guided study and group discussion every Wednesday evening.
                    </p>
                    
                    <div class="space-y-2 mb-6 text-sm text-gray-500">
                        <div class="flex items-center">
                            <i class="fas fa-clock w-5 text-red-600"></i>
                            <span class="ml-2">Duration: 60 minutes</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-book-open w-5 text-red-600"></i>
                            <span class="ml-2">Interactive study</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-comments w-5 text-red-600"></i>
                            <span class="ml-2">Group discussion</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Bible+Study+Group&dates={{ $nextWednesday->format('Ymd') }}T203000/{{ $nextWednesday->format('Ymd') }}T213000&details=Join+us+for+Bible+Study&sf=true&output=xml" 
                       target="_blank" 
                       class="w-full inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Custom Events -->
            @foreach ($customEvents as $event)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <!-- Event Header -->
                <div class="bg-{{ $event['color'] }}-600 text-white p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <div class="text-sm font-semibold opacity-90 mb-1">
                                {{ $event['date']->format('l') }}
                            </div>
                            <div class="text-3xl font-bold">{{ $event['date']->format('M d, Y') }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90 mb-1">Event Time</div>
                            <div class="text-xl font-bold">{{ $event['time'] }}</div>
                        </div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $event['title'] }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ $event['description'] }}</p>
                    
                    <div class="space-y-2 mb-6 text-sm text-gray-500">
                        <div class="flex items-center">
                            <i class="fas fa-star w-5 text-{{ $event['color'] }}-600"></i>
                            <span class="ml-2">Special event</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-heart w-5 text-{{ $event['color'] }}-600"></i>
                            <span class="ml-2">Community fellowship</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text={{ urlencode($event['title']) }}&dates={{ $event['date']->format('Ymd') }}T090000/{{ $event['date']->format('Ymd') }}T103000&details={{ urlencode($event['description']) }}&sf=true&output=xml" 
                       target="_blank" 
                       class="w-full inline-flex items-center justify-center bg-{{ $event['color'] }}-600 hover:bg-{{ $event['color'] }}-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-r from-purple-600 to-purple-700 rounded-2xl shadow-xl p-12 text-center text-white">
                <h3 class="text-3xl md:text-4xl font-bold mb-4">
                    Join Our Community
                </h3>
                <p class="text-lg text-purple-100 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Experience the joy of worship, fellowship, and spiritual growth. We'd love to have you join us at any of our upcoming events.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/about" class="inline-flex items-center justify-center bg-white text-purple-600 hover:bg-purple-50 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">
                        <i class="fas fa-info-circle mr-2"></i>
                        Learn More About Us
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center bg-purple-800 hover:bg-purple-900 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200">
                        <i class="fas fa-envelope mr-2"></i>
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Minimal Custom Styling -->
<style>
/* Smooth transitions */
* {
    transition-property: box-shadow, transform;
    transition-duration: 0.2s;
    transition-timing-function: ease-in-out;
}

/* Clean hover states */
.hover\:shadow-lg:hover {
    transform: translateY(-2px);
}

/* Ensure text remains readable */
body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
@endsection