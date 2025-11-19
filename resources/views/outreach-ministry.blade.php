@extends('layouts.app')

@section('title', 'Outreach Ministry')
@section('description', 'Join TRC AGC Church in reaching out to our community and beyond through evangelism, missions, community outreach, and charity programs.')

@section('styles')
<style>
    .mission-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(240, 240, 255, 0.9) 100%);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(124, 58, 237, 0.2);
    }

    .mission-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(124, 58, 237, 0.2);
    }

    .impact-counter {
        background: linear-gradient(135deg, #7c3aed 0%, #dc2626 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .ministry-icon {
        background: linear-gradient(135deg, #7c3aed 0%, #dc2626 100%);
        color: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 1rem;
        box-shadow: 0 10px 30px rgba(124, 58, 237, 0.3);
    }

    .partner-highlight {
        background: linear-gradient(135deg, rgba(220, 38, 38, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
        border-left: 4px solid #dc2626;
    }

    .donation-cta {
        background: linear-gradient(135deg, #dc2626 0%, #7c3aed 100%);
        position: relative;
        overflow: hidden;
    }

    .donation-cta::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transform: rotate(45deg);
        animation: shine 3s infinite;
    }

    @keyframes shine {
        0% {
            transform: translateX(-100%) translateY(-100%) rotate(45deg);
        }

        100% {
            transform: translateX(100%) translateY(100%) rotate(45deg);
        }
    }

    .gallery-placeholder {
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        border: 2px dashed #9ca3af;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 300px;
        position: relative;
        overflow: hidden;
    }

    .gallery-placeholder::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(124, 58, 237, 0.1), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-church-purple via-purple-600 to-church-red text-white py-24 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="hero-pattern opacity-10"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="floating-animation mb-6">
                <i class="fas fa-hands-helping text-6xl mb-4 opacity-90"></i>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 rainbow-text">
                OUTREACH MINISTRY
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
            <h2 class="text-4xl font-bold mb-8 text-gradient">Our Outreach Mission</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                At TRC AGC Church, we believe in living out the Great Commission by taking the Gospel beyond our church walls.
                Our Outreach Ministry is dedicated to sharing God's love through evangelism, community service, missions,
                and compassionate action that transforms lives and communities.
            </p>
        </div>
    </div>
</section>

<!-- Impact Stats -->
<section class="py-16 bg-gradient-to-r from-gray-50 to-purple-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                <div class="text-4xl font-bold impact-counter mb-2">500+</div>
                <p class="text-gray-600 font-medium">Lives Touched</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                <div class="text-4xl font-bold impact-counter mb-2">25+</div>
                <p class="text-gray-600 font-medium">Community Events</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                <div class="text-4xl font-bold impact-counter mb-2">10+</div>
                <p class="text-gray-600 font-medium">School Partnerships</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                <div class="text-4xl font-bold impact-counter mb-2">1</div>
                <p class="text-gray-600 font-medium">Mission Partnership</p>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Areas -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6 text-gradient">Our Outreach Programs</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover the various ways we serve our community and spread God's love
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Community Outreach -->
            <div class="mission-card p-8 rounded-2xl card-hover">
                <div class="ministry-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-purple text-center">Community Outreach</h3>
                <p class="text-gray-600 text-center mb-6">
                    Serving our local community through various programs that meet practical needs and share God's love in action.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Food Distribution</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Community Clean-up</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Health Awareness</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Skills Training</li>
                </ul>
            </div>

            <!-- Evangelism -->
            <div class="mission-card p-8 rounded-2xl card-hover">
                <div class="ministry-icon">
                    <i class="fas fa-bible"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-purple text-center">Evangelism</h3>
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
            <div class="mission-card p-8 rounded-2xl card-hover">
                <div class="ministry-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-purple text-center">Educational Outreach</h3>
                <p class="text-gray-600 text-center mb-6">
                    Reaching young minds in educational institutions with programs that inspire and encourage spiritual growth.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>High School Tours</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Primary School Visits</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Campus Ministry</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Mentorship Programs</li>
                </ul>
            </div>

            <!-- Missions -->
            <div class="mission-card p-8 rounded-2xl card-hover lg:col-span-2">
                <div class="ministry-icon">
                    <i class="fas fa-globe-africa"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-purple text-center">Missions Partnership</h3>
                <p class="text-gray-600 text-center mb-6">
                    Partnering with mission fields to support evangelism and church planting beyond our immediate community.
                </p>
                <div class="partner-highlight p-6 rounded-lg">
                    <h4 class="text-xl font-bold text-church-red mb-3">Kinango Mission Field Partnership</h4>
                    <p class="text-gray-600 mb-4">
                        Through AGC Kenya, we have the blessed opportunity to partner with the Kinango Mission Field,
                        supporting Pastor Abraham and his wife Faith in their ministry work. Together, we're expanding
                        God's kingdom in rural Kenya.
                    </p>
                    <div class="grid md:grid-cols-3 gap-4 text-sm text-gray-600">
                        <div class="flex items-center"><i class="fas fa-pray text-church-purple mr-2"></i>Prayer Support</div>
                        <div class="flex items-center"><i class="fas fa-dollar-sign text-church-purple mr-2"></i>Financial Partnership</div>
                        <div class="flex items-center"><i class="fas fa-hands-helping text-church-purple mr-2"></i>Resource Sharing</div>
                    </div>
                </div>
            </div>

            <!-- Charity Programs -->
            <div class="mission-card p-8 rounded-2xl card-hover">
                <div class="ministry-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-church-purple text-center">Charity Programs</h3>
                <p class="text-gray-600 text-center mb-6">
                    Organized charitable initiatives that address urgent needs in our community with compassion and dignity.
                </p>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Emergency Relief</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Clothing Drives</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Medical Support</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-church-red mr-2"></i>Orphan Care</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Mission Field Gallery -->
<section class="py-20 bg-gradient-to-br from-purple-50 via-blue-50 to-red-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6 text-gradient">Kinango Mission Field</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Witness the incredible work being done through our partnership with Pastor Abraham and Faith
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="{{asset('images/kwale-missions1.webp')}}"
                    alt="Mission Field Activities"
                    class="w-full h-80 object-cover">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="{{asset('images/kwale-missions2.webp')}}"
                    alt="Mission Field Activities"
                    class="w-full h-80 object-cover">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="{{asset('images/kwale-missions3.webp')}}"
                    alt="Community Impact"
                    class="w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Get Involved -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8 text-gradient">Join Our Outreach Team</h2>
            <p class="text-xl text-gray-600 mb-12">
                God is calling you to be part of something bigger than yourself. Whether through prayer,
                volunteering, or financial support, there's a place for you in our outreach ministry.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-50 p-8 rounded-2xl card-hover">
                    <i class="fas fa-pray text-4xl text-church-purple mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Pray</h3>
                    <p class="text-gray-600">Join our prayer team and intercede for our outreach efforts worldwide.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl card-hover">
                    <i class="fas fa-hands-helping text-4xl text-church-purple mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Volunteer</h3>
                    <p class="text-gray-600">Use your gifts and talents to serve in various outreach programs.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl card-hover">
                    <i class="fas fa-heart text-4xl text-church-purple mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Support</h3>
                    <p class="text-gray-600">Partner with us financially to expand our reach and impact.</p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="donation-cta text-white p-12 rounded-3xl relative">
                <h3 class="text-3xl font-bold mb-4">Support Kinango Mission Field</h3>
                <p class="text-xl mb-8 opacity-90">
                    Your partnership helps Pastor Abraham and Faith reach more souls for Christ in rural Kenya
                </p>
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <a href="/donate" class="bg-white text-church-purple font-bold px-8 py-4 rounded-xl hover:bg-gray-100 transition inline-flex items-center shadow-lg">
                        <i class="fas fa-heart mr-2"></i>
                        Partner With Us
                    </a>
                    <a href="mailto:missions@thikaroadconnectagc.org	" class="border-2 border-white text-white font-bold px-8 py-4 rounded-xl hover:bg-white hover:text-church-purple transition inline-flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        Get Involved
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section class="py-16 bg-gradient-to-r from-gray-900 to-purple-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready to Make a Difference?</h2>
        <p class="text-xl mb-8 opacity-90">
            Contact our Outreach Ministry team to learn more about volunteer opportunities and partnerships.
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="mailto:missions@thikaroadconnectagc.org	" class="bg-church-red hover:bg-red-600 text-white font-medium px-8 py-3 rounded-lg transition inline-flex items-center justify-center">
                <i class="fas fa-envelope mr-2"></i>
                Email Us
            </a>
            <a href="tel:+254791049004" class="bg-transparent border-2 border-white text-white font-medium px-8 py-3 rounded-lg hover:bg-white hover:text-gray-900 transition inline-flex items-center justify-center">
                <i class="fas fa-phone mr-2"></i>
                Call Us
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