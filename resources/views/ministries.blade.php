@extends('layouts.app')

@section('title', 'Our Ministries')
@section('description', 'Discover the various ministries at TRC AGC Church and find your place to serve and grow in faith.')

@section('styles')
<style>
    .ministry-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 250, 252, 0.95) 100%);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(124, 58, 237, 0.1);
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
    }

    .ministry-card::before {
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

    .ministry-card:hover::before {
        transform: scaleX(1);
    }

    .ministry-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(124, 58, 237, 0.15);
        border-color: rgba(124, 58, 237, 0.3);
    }

    .ministry-icon {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        transition: all 0.3s ease;
    }

    .ministry-card:hover .ministry-icon {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, #dc2626, #7c3aed);
    }

    .hero-section {
        background: linear-gradient(135deg, #7c3aed 0%, #dc2626 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.3;
    }

    .floating-element {
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(2) {
        animation-delay: -2s;
    }

    .floating-element:nth-child(3) {
        animation-delay: -4s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    .pulse-glow {
        animation: pulse-glow 3s ease-in-out infinite;
    }

    @keyframes pulse-glow {
        0%, 100% { 
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.3);
        }
        50% { 
            box-shadow: 0 0 40px rgba(124, 58, 237, 0.6);
        }
    }

    .text-gradient {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .section-divider {
        background: linear-gradient(90deg, transparent, #7c3aed, transparent);
        height: 2px;
        border-radius: 1px;
    }

    .ministry-number {
        background: linear-gradient(135deg, #dc2626, #7c3aed);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }

    .cta-button {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        transition: all 0.3s ease;
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
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(124, 58, 237, 0.3);
    }

    .ministry-stats {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(220, 38, 38, 0.1));
        border: 1px solid rgba(124, 58, 237, 0.2);
    }

    .ministry-preview {
        transition: all 0.3s ease;
    }

    .ministry-preview:hover {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.05), rgba(220, 38, 38, 0.05));
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section text-white py-20 relative">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="floating-element mb-6">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full pulse-glow">
                    <i class="fas fa-hands-helping text-3xl"></i>
                </div>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Our <span class="text-yellow-300">Ministries</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 leading-relaxed">
                Discover your calling and join us in serving God's kingdom through diverse ministries
            </p>
            <div class="section-divider w-24 mx-auto mb-8"></div>
            <p class="text-lg opacity-80 max-w-2xl mx-auto">
                "Each of you should use whatever gift you have to serve others, as faithful stewards of God's grace in its various forms." - 1 Peter 4:10
            </p>
        </div>
    </div>
    
    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="floating-element absolute top-20 left-10 w-16 h-16 bg-white bg-opacity-10 rounded-full"></div>
        <div class="floating-element absolute top-40 right-20 w-12 h-12 bg-white bg-opacity-10 rounded-full"></div>
        <div class="floating-element absolute bottom-20 left-1/4 w-20 h-20 bg-white bg-opacity-10 rounded-full"></div>
    </div>
</section>

<!-- Ministry Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="ministry-stats rounded-2xl p-8 text-center">
                <div class="ministry-number text-4xl md:text-5xl font-bold mb-2">7</div>
                <h3 class="text-xl font-semibold text-gray-700">Active Ministries</h3>
                <p class="text-gray-600 mt-2">Serving our community</p>
            </div>
            <div class="ministry-stats rounded-2xl p-8 text-center">
                <div class="ministry-number text-4xl md:text-5xl font-bold mb-2">500+</div>
                <h3 class="text-xl font-semibold text-gray-700">Ministry Members</h3>
                <p class="text-gray-600 mt-2">Growing together in faith</p>
            </div>
            <div class="ministry-stats rounded-2xl p-8 text-center">
                <div class="ministry-number text-4xl md:text-5xl font-bold mb-2">∞</div>
                <h3 class="text-xl font-semibold text-gray-700">Lives Impacted</h3>
                <p class="text-gray-600 mt-2">Through God's love</p>
            </div>
        </div>
    </div>
</section>

<!-- Ministries Grid -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                <span class="text-gradient">Find Your Ministry</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Every member is a minister. Discover where God is calling you to serve and make a difference in our community and beyond.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Children's Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-child text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Children's Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Nurturing young hearts with God's love through engaging programs, Sunday school, and fun activities that build strong foundations of faith.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-users mr-2"></i>Ages 3-12</span>
                        <span><i class="fas fa-clock mr-2"></i>Sundays 11:15 AM</span>
                    </div>
                </div>
                <a href="children" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Youth Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Youth Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Empowering teenagers and young adults to grow in faith, build lasting friendships, and discover their purpose in God's plan.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-users mr-2"></i>Ages 13-25</span>
                        <span><i class="fas fa-clock mr-2"></i>Fridays 8:30 PM</span>
                    </div>
                </div>
                <a href="youth-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Worship Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-music text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Worship Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Creating an atmosphere of worship through music, media, hospitality, and prayer, welcoming all into God's presence.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="text-sm text-gray-600 space-y-1">
                        <div><i class="fas fa-microphone mr-2"></i>Choir & Music</div>
                        <div><i class="fas fa-video mr-2"></i>Media Team</div>
                        <div><i class="fas fa-handshake mr-2"></i>Hospitality & Ushering</div>
                    </div>
                </div>
                <a href="worship-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Men's Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-male text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Men's Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Building godly men who lead with integrity, support each other in faith, and make a positive impact in their families and community.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-shield-alt mr-2"></i>Leadership</span>
                        <span><i class="fas fa-hands-helping mr-2"></i>Fellowship</span>
                    </div>
                </div>
                <a href="men-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Women's Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-female text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Women's Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Encouraging women to grow in faith, build meaningful relationships, and discover their unique gifts to serve God and others.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span><i class="fas fa-heart mr-2"></i>Sisterhood</span>
                        <span><i class="fas fa-pray mr-2"></i>Prayer Groups</span>
                    </div>
                </div>
                <a href="women-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Discipleship Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group">
                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-book-open text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Discipleship Ministry</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Deepening your relationship with God through Bible study, small groups, and spiritual growth programs that transform lives.
                </p>
                <div class="ministry-preview rounded-lg p-4 mb-6 bg-gray-50">
                    <div class="text-sm text-gray-600 space-y-1">
                        <div><i class="fas fa-bible mr-2"></i>Bible Study</div>
                        <div><i class="fas fa-home mr-2"></i>Cell Groups</div>
                        <div><i class="fas fa-graduation-cap mr-2"></i>Catechism</div>
                    </div>
                </div>
                <a href="discipleship-ministry" class="cta-button inline-block px-6 py-3 text-white font-semibold rounded-full hover:shadow-lg transition">
                    Learn More <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Outreach Ministry -->
            <div class="ministry-card rounded-2xl p-8 text-center group lg:col-span-3 md:col-span-2">
                <div class="max-w-4xl mx-auto">
                    <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe-americas text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Outreach Ministry</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed max-w-2xl mx-auto">
                        Sharing the love of Christ with our community and beyond through missions, evangelism, community service, and compassionate outreach programs.
                    </p>
                    <div class="ministry-preview rounded-lg p-6 mb-6 bg-gray-50 max-w-md mx-auto">
                        <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                            <div><i class="fas fa-hands-helping mr-2"></i>Community Outreach</div>
                            <div><i class="fas fa-bullhorn mr-2"></i>Evangelism</div>
                            <div><i class="fas fa-plane mr-2"></i>Missions</div>
                            <div><i class="fas fa-gift mr-2"></i>Charity Programs</div>
                        </div>
                    </div>
                    <a href="outreach-ministry" class="cta-button inline-block px-8 py-4 text-white font-semibold rounded-full hover:shadow-lg transition">
                        Learn More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-r from-church-purple to-church-red text-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Involved?</h2>
            <p class="text-xl mb-8 opacity-90">
                Your gifts and talents are needed in God's kingdom. Take the next step and discover how you can make a difference.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact" class="bg-white text-church-purple px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                    Contact Us Today
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-church-purple transition transform hover:scale-105">
                    Join a Ministry
                </a>
            </div>
        </div>
    </div>
    
    <!-- Background Pattern -->
    <!-- <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-repeat" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.3'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);"></div>
    </div> -->
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
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all ministry cards
        document.querySelectorAll('.ministry-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>
@endsection