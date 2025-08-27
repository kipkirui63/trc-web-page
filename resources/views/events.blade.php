@extends('layouts.app')

@section('title', 'Upcoming Events')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-700 to-purple-900 text-white py-32">
    <div class="container mx-auto text-center px-6">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6">Upcoming Events</h1>
        <p class="text-lg md:text-xl text-purple-100 max-w-3xl mx-auto">
            Stay connected and grow with us through our worship services, bible studies, and community programs.
        </p>
    </div>
</section>

<!-- Events Section -->
<section class="py-24 bg-gradient-to-br from-gray-50 to-purple-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Sunday Worship -->
            <div class="card-hover bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-church-purple to-purple-600 text-white p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm opacity-90 mb-1">{{ strtoupper($nextSunday->format('M')) }}</div>
                            <div class="text-4xl font-bold">{{ $nextSunday->format('d') }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">Start Time</div>
                            <div class="text-xl font-semibold">10:00 AM</div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Sunday Worship Service</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">An inspiring worship service with contemporary music and powerful preaching.</p>
                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Sunday+Worship+Service&dates={{ $nextSunday->format('Ymd') }}T100000/{{ $nextSunday->format('Ymd') }}T113000&details=Join+us+for+worship&sf=true&output=xml" 
                       target="_blank" 
                       class="w-full inline-block text-center bg-church-purple hover:bg-purple-600 text-white font-semibold py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Bible Study -->
            <div class="card-hover bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-church-red to-red-600 text-white p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm opacity-90 mb-1">{{ strtoupper($nextWednesday->format('M')) }}</div>
                            <div class="text-4xl font-bold">{{ $nextWednesday->format('d') }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">Time</div>
                            <div class="text-xl font-semibold">8:30 - 9:30 PM</div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Bible Study Group</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Weekly Bible Study every Wednesday evening. Dive deep into God’s word with us.</p>
                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Bible+Study+Group&dates={{ $nextWednesday->format('Ymd') }}T203000/{{ $nextWednesday->format('Ymd') }}T213000&details=Join+us+for+Bible+Study&sf=true&output=xml" 
                       target="_blank" 
                       class="w-full inline-block text-center bg-church-red hover:bg-red-600 text-white font-semibold py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Custom Events -->
            @foreach ($customEvents as $event)
            <div class="card-hover bg-white rounded-3xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-{{ $event['color'] }}-500 to-{{ $event['color'] }}-700 text-white p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm opacity-90 mb-1">{{ strtoupper($event['date']->format('M')) }}</div>
                            <div class="text-4xl font-bold">{{ $event['date']->format('d') }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90">Start Time</div>
                            <div class="text-xl font-semibold">{{ $event['time'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">{{ $event['title'] }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ $event['description'] }}</p>
                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text={{ urlencode($event['title']) }}&dates={{ $event['date']->format('Ymd') }}T090000/{{ $event['date']->format('Ymd') }}T103000&details={{ urlencode($event['description']) }}&sf=true&output=xml" 
                       target="_blank" 
                       class="w-full inline-block text-center bg-{{ $event['color'] }}-500 hover:bg-{{ $event['color'] }}-600 text-white font-semibold py-4 rounded-2xl transition-all duration-300 hover:scale-105">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
