@extends('layouts.app')

@section('title', 'Outreach Ministry')
@section('description', 'Join TRC AGC Church Outreach Ministry in sharing God\'s love with our community and beyond through missions, evangelism, and compassionate service.')

@section('styles')
<style>
    .outreach-hero {
        background: linear-gradient(135deg, #7c3aed 0%, #dc2626 100%);
        position: relative;
        overflow: hidden;
    }

    .outreach-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.3;
    }

    .outreach-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 250, 252, 0.9) 100%);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(124, 58, 237, 0.1);
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
    }

    .outreach-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #7c3aed, #dc2626);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .outreach-card:hover::before {
        transform: scaleX(1);
    }

    .outreach-card:hover {
        transform: translateY(-12px) scale(1.03);
        box-shadow: 0 25px 50px rgba(124, 58, 237, 0.2);
        border-color: rgba(124, 58, 237, 0.3);
    }

    .outreach-icon {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        transition: all 0.4s ease;
        position: relative;
    }

    .outreach-card:hover .outreach-icon {
        transform: scale(1.15) rotate(10deg);
        background: linear-gradient(135deg, #dc2626, #7c3aed);
        box-shadow: 0 10px 30px rgba(124, 58, 237, 0.4);
    }

    .impact-stat {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(220, 38, 38, 0.1));
        border: 1px solid rgba(124, 58, 237, 0.2);
        transition: all 0.3s ease;
    }

    .impact-stat:hover {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.15), rgba(220, 38, 38, 0.15));
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(124, 58, 237, 0.1);
    }

    .stat-number {
        background: linear-gradient(135deg, #dc2626, #7c3aed);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }

    .text-gradient {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-button {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .cta-button:hover::before {
        left: 100%;
    }

    .cta-button:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(124, 58, 237, 0.4);
    }

    .mission-highlight {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(124, 58, 237, 0.3); }
        50% { box-shadow: 0 0 40px rgba(124, 58, 237, 0.6); }
    }

    @keyframes sparkle {
        0%, 100% { opacity: 0; transform: scale(0) rotate(0deg); }
        50% { opacity: 1; transform: scale(1) rotate(180deg); }
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    .pulse-glow {
        animation: pulse-glow 3s ease-in-out infinite;
    }

    .sparkle {
        animation: sparkle 2s ease-in-out infinite;
    }

    .section-divider {
        background: linear-gradient(90deg, transparent, #7c3aed, transparent);
        height: 2px;
        border-radius: 1px;
    }

    .testimony-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(248, 250, 252, 0.8));
        border-left: 5px solid #7c3aed;
        transition: all 0.3s ease;
    }

    .testimony-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(124, 58, 237, 0.1);
        border-left-color: #dc2626;
    }

    .volunteer-perk {
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        border: 2px solid transparent;
        background-clip: padding-box;
        transition: all 0.3s ease;
        position: relative;
    }

    .volunteer-perk::before {
        content: '';
        position: absolute;
        inset: 0;
        padding: 2px;
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        border-radius: 1rem;
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask-composite: subtract;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .volunteer-perk:hover::before {
        opacity: 1;
    }

    .volunteer-perk:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(124, 58, 237, 0.15);
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="outreach-hero text-white py-24 relative">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <div class="floating mb-8">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-white bg-opacity-20 rounded-full pulse-glow">
                    <i class="fas fa-globe-americas text-4xl"></i>
                </div>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Outreach <span class="text-yellow-300">Ministry</span>
            </h1>
            <p class="text-2xl md:text-3xl mb-8 opacity-90 leading-relaxed">
                Sharing God's love with our community and beyond
            </p>
            <div class="section-divider w-32 mx-auto mb-8"></div>
            <div class="mission-highlight rounded-2xl p-8 mb-8 max-w-3xl mx-auto">
                <p class="text-lg md:text-xl leading-relaxed">
                    "Go into all the world and preach the gospel to all creation." - Mark 16:15
                </p>
            </div>
            <p class="text-lg opacity-80 max-w-4xl mx-auto leading-relaxed">
                Our Outreach Ministry exists to extend Christ's love beyond our church walls, transforming lives and communities through compassionate service, evangelism, and missions work that reflects God's heart for the world.
            </p>
        </div>
    </div>

    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="floating absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-5 rounded-full sparkle"></div>
        <div class="floating absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-5 rounded-full sparkle" style="animation-delay: 1s;"></div>
        <div class="floating absolute bottom-32 left-1/4 w-24 h-24 bg-white bg-opacity-5 rounded-full sparkle" style="animation-delay: 2s;"></div>
        <div class="floating absolute bottom-20 right-1/4 w-12 h-12 bg-white bg-opacity-5 rounded-full sparkle" style="animation-delay: 0.5s;"></div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gradient">Our Impact</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Through God's grace and your partnership, we're making a difference in our community and around the world
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="impact-stat rounded-2xl p-8 text-center">
                <div class="stat-number text-4xl md:text-5xl font-bold mb-2">500+</div>
                <h3 class="text-xl font-semibold text-gray-700">Lives Touched</h3>
                <p class="text-gray-600 mt-2">Through our programs</p>
            </div>
            <div class="impact-stat rounded-2xl p-8 text-center">
                <div class="stat-number text-4xl md:text-5xl font-bold mb-2">12</div>
                <h3 class="text-xl font-semibold text-gray-700">Countries Reached</h3>
                <p class="text-gray-600 mt-2">Through missions</p>
            </div>
            <div class="impact-stat rounded-2xl p-8 text-center">
                <div class="stat-number text-4xl md:text-5xl font-bold mb-2">50+</div>
                <h3 class="text-xl font-semibold text-gray-700">Volunteers</h3>
                <p class="text-gray-600 mt-2">Active servants</p>
            </div>
            <div class="impact-stat rounded-2xl p-8 text-center">
                <div class="stat-number text-4xl md:text-5xl font-bold mb-2">24/7</div>
                <h3 class="text-xl font-semibold text-gray-700">Commitment</h3>
                <p class="text-gray-600 mt-2">To serve others</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Outreach Programs -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gradient">How We Serve</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover the various ways we're making a difference in our community and around the world
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Community Outreach -->
            <div class="outreach-card rounded-2xl p-8 text-center group">
                <div class="outreach-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hands-helping text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Community Service</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Serving our local community through food drives, clothing distribution, home repairs, and support for those in need.
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="text-sm text-gray-600 space-y-2">
                        <div><i class="fas fa-utensils mr-2 text-church-purple"></i>Monthly Food Drives</div>
                        <div><i class="fas fa-tshirt mr-2 text-church-red"></i>Clothing Distribution</div>
                        <div><i class="fas fa-hammer mr-2 text-church-purple"></i>Home Repair Ministry</div>
                    </div>
                </div>
            </div>

            <!-- Evangelism -->
            <div class="outreach-card rounded-2xl p-8 text-center group">
                <div class="outreach-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-bullhorn text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Evangelism</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Sharing the gospel message through street evangelism, community events, and personal witness training.
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="text-sm text-gray-600 space-y-2">
                        <div><i class="fas fa-street-view mr-2 text-church-purple"></i>Street Evangelism</div>
                        <div><i class="fas fa-calendar-alt mr-2 text-church-red"></i>Community Events</div>
                        <div><i class="fas fa-graduation-cap mr-2 text-church-purple"></i>Witness Training</div>
                    </div>
                </div>
            </div>

            <!-- Missions -->
            <div class="outreach-card rounded-2xl p-8 text-center group">
                <div class="outreach-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-plane text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Global Missions</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Supporting missionaries worldwide and organizing mission trips to spread God's love across nations.
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="text-sm text-gray-600 space-y-2">
                        <div><i class="fas fa-globe mr-2 text-church-purple"></i>12 Countries</div>
                        <div><i class="fas fa-users mr-2 text-church-red"></i>Mission Teams</div>
                        <div><i class="fas fa-heart mr-2 text-church-purple"></i>Missionary Support</div>
                    </div>
                </div>
            </div>

            <!-- Prison Ministry -->
            <div class="outreach-card rounded-2xl p-8 text-center group">
                <div class="outreach-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-dove text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Prison Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Bringing hope and rehabilitation through chaplaincy services, Bible studies, and mentorship programs.
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="text-sm text-gray-600 space-y-2">
                        <div><i class="fas fa-bible mr-2 text-church-purple"></i>Bible Studies</div>
                        <div><i class="fas fa-user-friends mr-2 text-church-red"></i>Mentorship</div>
                        <div><i class="fas fa-key mr-2 text-church-purple"></i>Chaplaincy</div>
                    </div>
                </div>
            </div>

            <!-- Hospital Ministry -->
            <div class="outreach-card rounded-2xl p-8 text-center group">
                <div class="outreach-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heartbeat text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Hospital Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Providing comfort, prayer, and spiritual care to patients, families, and healthcare workers in hospitals.
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="text-sm text-gray-600 space-y-2">
                        <div><i class="fas fa-pray mr-2 text-church-purple"></i>Prayer Ministry</div>
                        <div><i class="fas fa-hand-holding-heart mr-2 text-church-red"></i>Spiritual Care</div>
                        <div><i class="fas fa-user-md mr-2 text-church-purple"></i>Chaplaincy</div>
                    </div>
                </div>
            </div>

            <!-- Youth Outreach -->
            <div class="outreach-card rounded-2xl p-8 text-center group">
                <div class="outreach-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-child text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Youth Outreach</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Reaching young people in schools, streets, and communities with programs that offer hope and direction.
                </p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="text-sm text-gray-600 space-y-2">
                        <div><i class="fas fa-school mr-2 text-church-purple"></i>School Programs</div>
                        <div><i class="fas fa-basketball-ball mr-2 text-church-red"></i>Sports Ministry</div>
                        <div><i class="fas fa-music mr-2 text-church-purple"></i>Arts & Music</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gradient">Lives Transformed</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hear the stories of lives touched and changed through our outreach ministry
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div class="testimony-card rounded-2xl p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-r from-church-purple to-church-red rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-quote-left text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">Sarah M.</h4>
                        <p class="text-gray-600 text-sm">Community Member</p>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed italic">
                    "When I lost my job and struggled to feed my family, TRC's food drive ministry was there for us. But more than food, they gave us hope and showed us God's love in action. Now my family and I attend church regularly."
                </p>
            </div>

            <div class="testimony-card rounded-2xl p-8">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-gradient-to-r from-church-red to-church-purple rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-quote-left text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">John K.</h4>
                        <p class="text-gray-600 text-sm">Former Inmate</p>
                    </div>
                </div>
                <p class="text-gray-700 leading-relaxed italic">
                    "The prison ministry changed my life. Through Bible studies and mentorship, I found forgiveness and purpose. Today, I'm a productive member of society and help others find the same hope I found."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Get Involved Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gradient">Join Our Mission</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                God is calling you to be part of His mission. Discover how you can make a difference today.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="volunteer-perk rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-church-purple to-church-red rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-heart text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Make a Difference</h3>
                <p class="text-gray-600">Transform lives and communities through practical acts of love and service.</p>
            </div>

            <div class="volunteer-perk rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-church-red to-church-purple rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Build Community</h3>
                <p class="text-gray-600">Connect with like-minded believers and build lasting friendships while serving together.</p>
            </div>

            <div class="volunteer-perk rounded-2xl p-8 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-church-purple to-church-red rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-crown text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-800">Grow in Faith</h3>
                <p class="text-gray-600">Deepen your relationship with God through serving others and witnessing His love in action.</p>
            </div>
        </div>

        <div class="text-center">
            <a href="/contact" class="cta-button inline-block px-10 py-4 text-white font-semibold rounded-full mr-4 mb-4">
                <i class="fas fa-envelope mr-2"></i>
                Contact Us Today
            </a>
            <a href="tel:+254791049004" class="bg-white text-church-purple border-2 border-church-purple px-10 py-4 rounded-full font-semibold hover:bg-church-purple hover:text-white transition mb-4 inline-block">
                <i class="fas fa-phone mr-2"></i>
                Call +254 791 049004
            </a>
        </div>
    </div>
</section>

<!-- Final Call to Action -->
<section class="py-20 bg-gradient-to-r from-church-purple to-church-red text-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                The Harvest is Ready
            </h2>
            <p class="text-xl md:text-2xl mb-8 opacity-90 leading-relaxed">
                "The harvest is plentiful but the workers are few. Ask the Lord of the harvest, therefore, to send out workers into his harvest field." - Matthew 9:37-38
            </p>
            <div class="section-divider w-32 mx-auto mb-8"></div>
            <p class="text-lg mb-8 opacity-80">
                Join us in fulfilling the Great Commission. Your heart, hands, and prayers are needed to reach those who need God's love most.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-white text-church-purple px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Start Your Journey
                </a>
                <a href="donate" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-church-purple transition transform hover:scale-105">
                    <i class="fas fa-heart mr-2"></i>
                    Support Our Mission
                </a>
            </div>
        </div>
    </div>

    <!-- Background Animation Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="floating absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-5 rounded-full"></div>
        <div class="floating absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-5 rounded-full" style="animation-delay: 2s;"></div>
        <div class="floating absolute bottom-32 left-1/4 w-24 h-24 bg-white bg-opacity-5 rounded-full" style="animation-delay: 1s;"></div>
        <div class="floating absolute bottom-20 right-1/3 w-12 h-12 bg-white bg-opacity-5 rounded-full" style="animation-delay: 3s;"></div>
    </div>
</section>
@endsection