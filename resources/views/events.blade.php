@extends('layouts.app')

@section('title', 'Upcoming Events - TRC AGC Church')

@section('description', 'Join us for worship services, Bible studies, and community events at TRC AGC Church.')

@section('content')

<style>
    /* Red, Black & White Theme Variables */
    :root {
        --church-red: #DC2626;
        --church-red-dark: #B91C1C;
        --church-red-light: #fce4e8;
        --church-black: #000000;
        --church-gray: #4a4a4a;
        --church-light: #f8f8f8;
    }

    /* Hero Section - With Background Image */
    .events-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/vbs1.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }

    /* Badge Styles */
    .modern-badge {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        background: var(--church-red);
        color: white;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(220, 38, 38, 0.2);
    }

    .event-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1.25rem;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* Card Styles */
    .modern-card {
        background: white;
        border-radius: 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(220, 38, 38, 0.1);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .modern-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--church-red);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }

    .modern-card:hover::before {
        transform: scaleX(1);
    }

    .modern-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.12);
        border-color: var(--church-red);
    }

    /* Event Header Colors */
    .card-header-red {
        background: var(--church-red);
        color: white;
        position: relative;
        overflow: hidden;
        padding: 1.5rem;
    }

    .card-header-black {
        background: var(--church-black);
        color: white;
        position: relative;
        overflow: hidden;
        padding: 1.5rem;
    }

    .card-header-red::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transform: translate(50px, -50px);
    }

    .card-header-black::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        transform: translate(50px, -50px);
    }

    /* Button Styles - ALL RED */
    .btn-primary {
        background: var(--church-red);
        color: white;
        font-weight: 600;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        width: 100%;
    }

    .btn-primary:hover {
        background: var(--church-red-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(220, 38, 38, 0.3);
    }

    .btn-secondary {
        background: var(--church-red);
        color: white;
        font-weight: 600;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        width: 100%;
    }

    .btn-secondary:hover {
        background: var(--church-red-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(220, 38, 38, 0.3);
    }

    .btn-outline-light {
        background: transparent;
        color: white;
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.5);
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: white;
        transform: translateY(-2px);
    }

    /* CTA Section - With Background Image */
    .cta-section {
        position: relative;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/images/Youth-hike.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    /* Icon Circle */
    .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        background: var(--church-red);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 10px 20px rgba(220, 38, 38, 0.2);
    }

    .icon-circle-small {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--church-red-light);
        color: var(--church-red);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    /* Section Header */
    .section-header {
        position: relative;
        margin-bottom: 4rem;
        text-align: center;
    }

    .section-divider {
        height: 4px;
        width: 80px;
        background: var(--church-red);
        margin: 1.5rem auto;
        position: relative;
    }

    .section-divider::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        background: var(--church-black);
        border-radius: 50%;
    }

    /* Date Badge */
    .date-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        padding: 0.35rem 1rem;
        border-radius: 50px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        backdrop-filter: blur(4px);
    }

    /* Calendar Icon */
    .calendar-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        color: white;
        font-size: 1.25rem;
        backdrop-filter: blur(4px);
    }

    /* Animations */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-on-scroll {
        opacity: 0;
        animation: slideInUp 0.8s ease forwards;
    }

    .animate-delay-1 { animation-delay: 0.2s; }
    .animate-delay-2 { animation-delay: 0.4s; }
    .animate-delay-3 { animation-delay: 0.6s; }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease forwards;
    }

    .animate-slide-up {
        opacity: 0;
        animation: slideUp 0.6s ease forwards;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
    }

    .animation-delay-400 {
        animation-delay: 0.4s;
    }

    /* Gradient Text - Pure Black */
    .gradient-text {
        color: var(--church-black);
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--church-red);
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--church-red-dark);
    }
</style>

<!-- Professional Hero Section - With Background Image -->
<section class="relative events-hero py-24 md:py-32">
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Breadcrumb -->
            <div class="mb-8 animate-fade-in">
                <span class="event-badge">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    Events & Activities
                </span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-slide-up">
                Upcoming <span class="text-white">Events</span>
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto animate-slide-up animation-delay-200">
                Join us for worship services, Bible studies, and community events designed to strengthen your faith and build meaningful connections.
            </p>

            <!-- Quick Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up animation-delay-400">
                <a href="#events" class="inline-flex items-center justify-center bg-white text-red-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    <i class="fas fa-arrow-down mr-2"></i>
                    View All Events
                </a>
                <a href="/contact" class="btn-outline-light">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact Us
                </a>
            </div>

            <!-- Quick Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-3 gap-8 max-w-3xl mx-auto pt-8 border-t border-white/20">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">Weekly</div>
                    <div class="text-white/80 text-sm uppercase tracking-wider">Worship</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">Wednesday</div>
                    <div class="text-white/80 text-sm uppercase tracking-wider">Bible Study</div>
                </div>
                <div class="text-center col-span-2 md:col-span-1">
                    <div class="text-3xl font-bold text-white mb-1">Monthly</div>
                    <div class="text-white/80 text-sm uppercase tracking-wider">Fellowship</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="section-header">
            <span class="modern-badge mb-4">
                <i class="fas fa-calendar-alt mr-2"></i>
                OUR CALENDAR
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Featured <span class="gradient-text">Events</span>
            </h2>
            <div class="section-divider"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Browse our upcoming events and add them directly to your calendar. We look forward to welcoming you!
            </p>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <!-- Sunday Worship - Red Theme -->
            <div class="modern-card animate-on-scroll">
                <!-- Event Header -->
                <div class="card-header-red">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="date-badge mb-2 inline-block">
                                <i class="fas fa-calendar mr-1"></i>
                                Weekly Service
                            </span>
                            <div class="text-sm font-semibold opacity-90 mb-1">
                                {{ $nextSunday->format('l') }}
                            </div>
                            <div class="text-3xl font-bold">{{ $nextSunday->format('M d, Y') }}</div>
                        </div>
                        <div class="calendar-icon">
                            <i class="fas fa-church text-xl"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <div class="text-sm opacity-90 mb-1">Service Time</div>
                            <div class="text-2xl font-bold">10:00 AM</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90 mb-1">Duration</div>
                            <div class="text-lg font-semibold">90 min</div>
                        </div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Sunday Worship Service</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Join us for uplifting worship, inspiring messages from God's Word, and meaningful fellowship with our church family.
                    </p>
                    
                    <div class="space-y-3 mb-8 text-sm text-gray-600">
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <span>Duration: 90 minutes</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <span>All ages welcome</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-music"></i>
                            </div>
                            <span>Contemporary worship</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Kasarani, Nairobi</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Sunday+Worship+Service&dates={{ $nextSunday->format('Ymd') }}T100000/{{ $nextSunday->format('Ymd') }}T113000&details=Join+us+for+worship+at+TRC+AGC+Church&location=Kasarani,+Nairobi&sf=true&output=xml" 
                       target="_blank" 
                       class="btn-primary">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Bible Study - Black Theme -->
            <div class="modern-card animate-on-scroll animate-delay-1">
                <!-- Event Header -->
                <div class="card-header-red">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="date-badge mb-2 inline-block">
                                <i class="fas fa-book-open mr-1"></i>
                                Weekly Study
                            </span>
                            <div class="text-sm font-semibold opacity-90 mb-1">
                                {{ $nextWednesday->format('l') }}
                            </div>
                            <div class="text-3xl font-bold">{{ $nextWednesday->format('M d, Y') }}</div>
                        </div>
                        <div class="calendar-icon">
                            <i class="fas fa-bible text-xl"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <div class="text-sm opacity-90 mb-1">Evening Study</div>
                            <div class="text-2xl font-bold">8:30 PM</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90 mb-1">Duration</div>
                            <div class="text-lg font-semibold">60 min</div>
                        </div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Wednesday Bible Study</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Deepen your understanding of Scripture through guided verse-by-verse study and interactive group discussion.
                    </p>
                    
                    <div class="space-y-3 mb-8 text-sm text-gray-600">
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-clock"></i>
                            </div>
                            <span>Duration: 60 minutes</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <span>Verse-by-verse study</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-comments"></i>
                            </div>
                            <span>Group discussion</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-video"></i>
                            </div>
                            <span>Online & In-person</span>
                        </div>
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Wednesday+Bible+Study&dates={{ $nextWednesday->format('Ymd') }}T203000/{{ $nextWednesday->format('Ymd') }}T213000&details=Join+us+for+verse-by-verse+Bible+study&location=TRC+AGC+Church,+Kasarani&sf=true&output=xml" 
                       target="_blank" 
                       class="btn-primary">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>

            <!-- Custom Events -->
            @foreach ($customEvents as $event)
            <div class="modern-card animate-on-scroll animate-delay-{{ min(2, $loop->index + 1) }}">
                <!-- Event Header - Alternating Red/Black -->
                <div class="{{ $loop->even ? 'card-header-red' : 'card-header-red' }}">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <span class="date-badge mb-2 inline-block">
                                <i class="fas fa-star mr-1"></i>
                                Special Event
                            </span>
                            <div class="text-sm font-semibold opacity-90 mb-1">
                                {{ $event['date']->format('l') }}
                            </div>
                            <div class="text-3xl font-bold">{{ $event['date']->format('M d, Y') }}</div>
                        </div>
                        <div class="calendar-icon">
                            <i class="fas fa-{{ $event['icon'] ?? 'calendar-alt' }} text-xl"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div>
                            <div class="text-sm opacity-90 mb-1">Event Time</div>
                            <div class="text-2xl font-bold">{{ $event['time'] }}</div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm opacity-90 mb-1">Admission</div>
                            <div class="text-lg font-semibold">Free</div>
                        </div>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $event['title'] }}</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">{{ $event['description'] }}</p>
                    
                    <div class="space-y-3 mb-8 text-sm text-gray-600">
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-tag"></i>
                            </div>
                            <span>Special fellowship event</span>
                        </div>
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-heart"></i>
                            </div>
                            <span>All are welcome</span>
                        </div>
                        @if(isset($event['location']))
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>{{ $event['location'] }}</span>
                        </div>
                        @endif
                        @if(isset($event['speaker']))
                        <div class="flex items-center">
                            <div class="icon-circle-small mr-3">
                                <i class="fas fa-user"></i>
                            </div>
                            <span>Speaker: {{ $event['speaker'] }}</span>
                        </div>
                        @endif
                    </div>

                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text={{ urlencode($event['title']) }}&dates={{ $event['date']->format('Ymd') }}T{{ str_replace(':', '', $event['time_start'] ?? '090000') }}/{{ $event['date']->format('Ymd') }}T{{ str_replace(':', '', $event['time_end'] ?? '103000') }}&details={{ urlencode($event['description']) }}&location={{ urlencode($event['location'] ?? 'TRC AGC Church, Kasarani') }}&sf=true&output=xml" 
                       target="_blank" 
                       class="btn-primary">
                        <i class="fas fa-calendar-plus mr-2"></i>
                        Add to Calendar
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View More Link -->
        
    </div>
</section>

<!-- Call to Action - With Background Image -->
<section class="py-20 cta-section">
    <div class="container mx-auto px-6 cta-content">
        <div class="max-w-4xl mx-auto text-center">
            <span class="modern-badge mb-6 bg-white/20 text-white border border-white/30">
                <i class="fas fa-heart mr-2"></i>
                Join Our Community
            </span>
            
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Experience the Joy of <span class="border-b-4 border-white pb-2">Fellowship</span>
            </h2>
            
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto leading-relaxed">
                Whether you're new to faith or have been walking with Christ for years, you'll find a warm welcome and a place to belong at TRC AGC Church.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/about" class="btn-primary" style="width: auto; padding: 0.75rem 2rem;">
                    <i class="fas fa-info-circle mr-2"></i>
                    Learn About Us
                </a>
                <a href="/contact" class="btn-outline-light" style="width: auto; padding: 0.75rem 2rem;">
                    <i class="fas fa-envelope mr-2"></i>
                    Get in Touch
                </a>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 flex flex-wrap justify-center gap-8 text-white/80 text-sm">
                <div class="flex items-center">
                    <div class="icon-circle-small mr-3 bg-white/20 text-white">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <span>Kasarani, Nairobi</span>
                </div>
                <div class="flex items-center">
                    <div class="icon-circle-small mr-3 bg-white/20 text-white">
                        <i class="fas fa-clock"></i>
                    </div>
                    <span>Sundays @ 10:00 AM</span>
                </div>
                <div class="flex items-center">
                    <div class="icon-circle-small mr-3 bg-white/20 text-white">
                        <i class="fas fa-phone"></i>
                    </div>
                    <span>+254 XXX XXX XXX</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-on-scroll');
                        if (index > 0) {
                            entry.target.classList.add(`animate-delay-${(index % 3) + 1}`);
                        }
                    }, index * 100);
                }
            });
        }, observerOptions);

        // Observe all modern cards
        document.querySelectorAll('.modern-card').forEach(card => {
            card.style.opacity = '0';
            observer.observe(card);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add hover effect to cards
        document.querySelectorAll('.modern-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });

    // Loading animation
    window.addEventListener('load', function() {
        setTimeout(() => {
            document.querySelectorAll('.modern-card').forEach((card, index) => {
                card.style.transitionDelay = `${index * 0.1}s`;
            });
        }, 500);
    });
</script>

@endsection