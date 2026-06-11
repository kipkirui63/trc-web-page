@extends('layouts.app')

@section('title', 'Evangelism & Missions')
@section('description', 'Join TRC AGC Church in evangelism and missions through community outreach, global missions, and compassion programs.')

@section('styles')
<style>
    .mission-card {
        background: white;
        border: 1px solid rgba(220, 38, 38, 0.2);
        transition: all 0.3s ease;
    }

    .mission-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.2);
    }

    .impact-counter {
        background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .ministry-icon {
        background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
        color: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 1rem;
        box-shadow: 0 10px 30px rgba(220, 38, 38, 0.3);
    }

    .partner-highlight {
        background: rgba(220, 38, 38, 0.05);
        border-left: 4px solid #dc2626;
    }

    .current-mission-highlight {
        background: linear-gradient(135deg, rgba(220, 38, 38, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);
        border: 2px solid #dc2626;
    }

    .text-gradient {
        background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .mission-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .mission-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .mission-image-wrapper:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease;
    }

    .success-badge {
        background: #dc2626;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 600;
        display: inline-block;
    }

    .current-badge {
        background: #dc2626;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 600;
        display: inline-block;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.8;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative text-white py-24 overflow-hidden" style="background-image: url('{{asset('images/kwale-missions1.webp')}}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="absolute inset-0 bg-black opacity-40"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="floating-animation mb-6">
                <i class="fas fa-hands-helping text-6xl mb-4 opacity-90"></i>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                EVANGELISM & MISSIONS
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">
                Extending God's Love Beyond Our Walls
            </p>
            <div class="text-lg md:text-xl font-medium">
                "Go therefore and make disciples of all nations..." - Matthew 28:19
            </div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 text-white opacity-20">
        <i class="fas fa-cross text-3xl bounce-slow"></i>
    </div>
    <div class="absolute bottom-20 right-10 text-white opacity-20">
        <i class="fas fa-heart text-4xl pulse-glow"></i>
    </div>
    <div class="absolute top-1/2 left-20 text-white opacity-15">
        <i class="fas fa-globe-africa text-5xl wiggle"></i>
    </div>
</section>

<!-- Mission Statement -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8 text-gradient">Our Evangelism & Missions Vision</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                At TRC AGC Church, we believe in living out the Great Commission by taking the Gospel beyond our church walls.
                Our Evangelism & Missions Ministry is dedicated to sharing God's love through evangelism, community service, missions,
                and compassionate action that transforms lives and communities.
            </p>
        </div>
    </div>
</section>



<!-- Current Mission Field - Masimba -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="current-badge mb-4">
                <i class="fas fa-circle mr-2"></i>Upcoming Mission Field
            </span>
            <h2 class="text-4xl font-bold mb-6 text-gradient mt-4">Masimba Mission Field</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Preparing to bring hope and transformation to Masimba through strategic partnership
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="current-mission-highlight p-8 md:p-12 rounded-3xl mb-12">
                <div class="grid md:grid-cols-2 gap-8 items-center mb-8">
                    <div>
                        <h3 class="text-3xl font-bold text-church-red mb-4">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Masimba Mission Field
                        </h3>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Through AGC Kenya, we are preparing to partner with the Masimba Mission Field to expand God's kingdom 
                            in this growing community. As we move forward in faith, we are committed to supporting evangelism, 
                            discipleship, and community transformation through strategic partnership and preparation.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-church-red mr-3 text-xl"></i>
                                <span class="font-medium">Strategic Planning & Assessment</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-church-red mr-3 text-xl"></i>
                                <span class="font-medium">Partnership Development</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-church-red mr-3 text-xl"></i>
                                <span class="font-medium">Resource Mobilization</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-check-circle text-church-red mr-3 text-xl"></i>
                                <span class="font-medium">Prayer & Preparation</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg">
                            <h4 class="text-xl font-bold text-gray-800 mb-4">
                                <i class="fas fa-bullseye text-church-red mr-2"></i>
                                Mission Goals
                            </h4>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-star text-church-red mr-3 mt-1"></i>
                                    <span>Establish a strong, self-sustaining church community</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-star text-church-red mr-3 mt-1"></i>
                                    <span>Train and equip local leadership</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-star text-church-red mr-3 mt-1"></i>
                                    <span>Reach 500+ individuals with the Gospel</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-star text-church-red mr-3 mt-1"></i>
                                    <span>Provide essential community services</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Masimba Mission Field - Coming Soon -->
                <div class="mt-8">
                    <div class="bg-gradient-to-r from-red-50 to-white p-8 rounded-2xl border-2 border-dashed border-church-red">
                        <div class="text-center">
                            <i class="fas fa-rocket text-6xl text-church-red mb-4"></i>
                            <h4 class="text-2xl font-bold text-gray-800 mb-4">
                                Upcoming Mission Field
                            </h4>
                            <p class="text-gray-600 text-lg mb-6 max-w-2xl mx-auto">
                                We are preparing to launch our partnership with Masimba Mission Field. 
                                Through prayer, planning, and partnership, we're laying the foundation for 
                                transformative ministry in this community. Stay tuned for updates as we embark 
                                on this new chapter of reaching souls for Christ!
                            </p>
                            <div class="grid md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                                <div class="bg-white p-4 rounded-xl shadow-sm">
                                    <i class="fas fa-calendar-alt text-3xl text-church-red mb-2"></i>
                                    <h5 class="font-bold text-gray-800 mb-1">Planning Phase</h5>
                                    <p class="text-sm text-gray-600">Strategic groundwork in progress</p>
                                </div>
                                <div class="bg-white p-4 rounded-xl shadow-sm">
                                    <i class="fas fa-users text-3xl text-church-red mb-2"></i>
                                    <h5 class="font-bold text-gray-800 mb-1">Team Building</h5>
                                    <p class="text-sm text-gray-600">Assembling dedicated volunteers</p>
                                </div>
                                <div class="bg-white p-4 rounded-xl shadow-sm">
                                    <i class="fas fa-hand-holding-heart text-3xl text-church-red mb-2"></i>
                                     <h5 class="font-bold text-gray-800 mb-1">Support Mission</h5><!--link to payment page and contact -->
                                    <p class="text-sm text-gray-600">Mobilizing support and funding</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action for Masimba -->
                <div class="bg-church-red text-white p-8 rounded-2xl mt-8">
                    <h3 class="text-2xl font-bold mb-3 text-center">Join Us in Preparing for Masimba</h3>
                    <p class="text-lg mb-6 text-center">
                        Your partnership helps us lay a strong foundation for reaching souls and transforming lives in Masimba
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="/donate" class="bg-white text-church-red font-bold px-8 py-4 rounded-xl hover:bg-gray-100 transition inline-flex items-center shadow-lg">
                            <i class="fas fa-heart mr-2"></i>
                            Support Masimba Mission
                        </a>
                        <a href="tel:+254791049004" class="bg-transparent border-2 border-white text-white font-bold px-8 py-4 rounded-xl hover:bg-white hover:text-church-red transition inline-flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Past Success - Kinango Mission Field -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="success-badge mb-4">
                <i class="fas fa-check-circle mr-2"></i>Successful Partnership
            </span>
            <h2 class="text-4xl font-bold mb-6 text-gradient mt-4">Kinango Mission Field</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Celebrating God's faithfulness through our successful partnership with Kinango Mission Field
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl mb-12">
                <div class="partner-highlight p-6 rounded-2xl mb-8">
                    <h3 class="text-2xl font-bold text-church-red mb-4">
                        <i class="fas fa-trophy mr-2"></i>
                        Our Journey with Kinango
                    </h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Through AGC Kenya, we had the blessed opportunity to partner with the Kinango Mission Field. Together, we witnessed 
                        incredible transformation and growth in the Mission Field which has resulted in the planting of more Churches.
                    </p>
                    
                </div>

                <!-- Kinango Photo Gallery -->
                <div class="mb-8">
                    <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-camera mr-2 text-church-red"></i>
                        Memories from Kinango
                    </h4>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="mission-image-wrapper" style="height: 320px;">
                            <img src="{{asset('images/kwale-missions1.webp')}}"
                                alt="Kinango Mission Field Activities"
                                loading="lazy">
                        </div>
                        <div class="mission-image-wrapper" style="height: 320px;">
                            <img src="{{asset('images/kwale-missions2.webp')}}"
                                alt="Kinango Mission Field Ministry"
                                loading="lazy">
                        </div>
                        <div class="mission-image-wrapper" style="height: 320px;">
                            <img src="{{asset('images/kwale-missions3.webp')}}"
                                alt="Kinango Community Impact"
                                loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="bg-red-50 p-6 rounded-2xl border-l-4 border-church-red">
                    <h4 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-lightbulb text-church-red mr-2"></i>
                        Key Achievements
                    </h4>
                    <div class="grid md:grid-cols-2 gap-4 text-gray-600">
                        <div class="flex items-start">
                            <i class="fas fa-check text-church-red mr-3 mt-1"></i>
                            <span>Established sustainable church infrastructure</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check text-church-red mr-3 mt-1"></i>
                            <span>Trained local pastoral leadership</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check text-church-red mr-3 mt-1"></i>
                            <span>Implemented community development programs</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check text-church-red mr-3 mt-1"></i>
                            <span>Created self-sustaining ministry model</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Areas -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6 text-gradient">Our Evangelism & Missions Programs</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover the various ways we serve our community and spread God's love
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Community Outreach -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="ministry-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-red text-center">Community Outreach</h3>
                <p class="text-gray-600 text-center mb-6">
                    Serving our local community through various programs that meet practical needs and share God's love in action.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Food Distribution</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Health Awareness</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Skills Training</li>
                </ul>
            </div>

            <!-- Evangelism -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="ministry-icon">
                    <i class="fas fa-bible"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-red text-center">Evangelism</h3>
                <p class="text-gray-600 text-center mb-6">
                    Sharing the Gospel message through personal witness, crusades, and community events that lead people to Christ.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Street Evangelism</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Crusades & Rallies</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Door-to-Door Ministry</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Follow-up Programs</li>
                </ul>
            </div>

            <!-- Campus Tours -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="ministry-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-red text-center">Educational Outreach</h3>
                <p class="text-gray-600 text-center mb-6">
                    Reaching young minds in educational institutions with programs that inspire and encourage spiritual growth.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Comprehensive Primary School Visits</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Campus Ministry</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Mentorship Programs</li>
                </ul>
            </div>

    

            <!-- Prison Ministry -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="ministry-icon">
                    <i class="fas fa-praying-hands"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-red text-center">Prison Ministry</h3>
                <p class="text-gray-600 text-center mb-6">
                    Bringing hope and restoration to those in correctional facilities through spiritual support and rehabilitation programs.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Bible Studies</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Counseling Services</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Reintegration Support</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Family Connection</li>
                </ul>
            </div>

            <!-- Youth & Children -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="ministry-icon">
                    <i class="fas fa-child"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-red text-center">Youth & Children Programs</h3>
                <p class="text-gray-600 text-center mb-6">
                    Nurturing the next generation through engaging programs that build strong spiritual foundations.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Sunday School</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Youth Camps</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Mentorship</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Leadership Training</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Get Involved -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-red-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8 text-gradient">Join Our Evangelism & Missions Team</h2>
            <p class="text-xl text-gray-600 mb-12">
                God is calling you to be part of something bigger than yourself. Whether through prayer,
                volunteering, or financial support, there's a place for you in our evangelism and missions ministry.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <i class="fas fa-pray text-4xl text-church-red mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Pray</h3>
                    <p class="text-gray-600">Join our prayer team and intercede for our outreach efforts worldwide.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <i class="fas fa-hands-helping text-4xl text-church-red mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Volunteer</h3>
                    <p class="text-gray-600">Use your gifts and talents to serve in various outreach programs.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <i class="fas fa-heart text-4xl text-church-red mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Support</h3>
                    <p class="text-gray-600">Partner with us financially to expand our reach and impact.</p>
                </div>
            </div>

            <a href="/donate" class="inline-flex items-center justify-center bg-church-red hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-xl transition duration-300">
                <i class="fas fa-hand-holding-heart mr-2"></i>
                Partner With Us
            </a>
        </div>
    </div>
</section>


@endsection

@section('scripts')
<script>
    // Add scroll animations
    document.addEventListener('DOMContentLoaded', function() {
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

        // Observe all cards
        document.querySelectorAll('.mission-card, .card-hover').forEach(card => {
            observer.observe(card);
        });

        // Counter animation
        const counters = document.querySelectorAll('.impact-counter');
        counters.forEach(counter => {
            const target = parseInt(counter.textContent);
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.textContent = Math.floor(current) + (counter.textContent.includes('+') ? '+' : '');
            }, 20);
        });
    });
</script>
@endsection
