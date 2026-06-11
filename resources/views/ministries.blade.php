@extends('layouts.app')

@section('title', 'Our Ministries - TRC AGC Church')
@section('description', 'Explore the diverse ministries at TRC AGC Church. Find your place to serve, grow in faith, and make a meaningful impact in our community.')

@section('styles')
<style>
    /* Professional Color Palette - Red Theme */
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #E63946; /* Vibrant red from logo */
        --accent-color: #F25C66; /* Lighter red for accents */
        --light-color: #f8f9fa;
        --dark-color: #2c3e50;
        --success-color: #27ae60;
        --red-subtle: #FFF5F6; /* Very light red for backgrounds */
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-color) 100%);
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
        background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23E63946' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
        border-radius: 2px;
    }

    /* Ministry Cards */
    .ministry-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        height: 100%;
        border: 1px solid #e9ecef;
    }

    .ministry-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(230, 57, 70, 0.15);
        border-color: var(--secondary-color);
    }

    .ministry-photo {
        height: 220px;
        width: 100%;
        object-fit: cover;
    }

    .ministry-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--secondary-color) 0%, var(--accent-color) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(230, 57, 70, 0.2);
    }

    .ministry-card:hover .ministry-icon {
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(230, 57, 70, 0.3);
    }

    .ministry-tag {
        display: inline-block;
        padding: 4px 12px;
        background: var(--light-color);
        color: var(--primary-color);
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        margin: 5px;
    }

    .ministry-tag.primary {
        background: var(--secondary-color);
        color: white;
    }

    .ministry-tag.accent {
        background: var(--accent-color);
        color: white;
    }

    .ministry-tag.success {
        background: var(--success-color);
        color: white;
    }

    .benefit-list {
        list-style: none;
        padding: 0;
    }

    .benefit-list li {
        padding: 8px 0;
        border-bottom: 1px solid #f0f0f0;
        position: relative;
        padding-left: 25px;
    }

    .benefit-list li:last-child {
        border-bottom: none;
    }

    .benefit-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--success-color);
        font-weight: bold;
    }

    /* Stats Section */
    .stats-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(230, 57, 70, 0.12);
    }

    .stats-number {
        font-size: 3rem;
        font-weight: 700;
        background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    /* CTA Button */
    .cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 28px;
        background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
        color: white;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 10px rgba(230, 57, 70, 0.2);
    }

    .cta-button:hover {
        background: white;
        color: var(--secondary-color);
        border-color: var(--secondary-color);
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(230, 57, 70, 0.25);
    }

    .cta-button.accent {
        background: white;
        color: var(--secondary-color);
        border: 2px solid var(--secondary-color);
        box-shadow: 0 4px 10px rgba(230, 57, 70, 0.15);
    }

    .cta-button.accent:hover {
        background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
        color: white;
        border-color: transparent;
    }

    /* Timeline for Ministry Impact */
    .timeline-item {
        position: relative;
        padding-left: 30px;
        margin-bottom: 2rem;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 5px;
        width: 12px;
        height: 12px;
        background: var(--secondary-color);
        border-radius: 50%;
        box-shadow: 0 0 0 4px rgba(230, 57, 70, 0.1);
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        left: 5px;
        top: 17px;
        bottom: -25px;
        width: 2px;
        background: linear-gradient(180deg, var(--secondary-color), transparent);
    }

    .timeline-item:last-child::after {
        display: none;
    }

    /* Subtle red background accents */
    .bg-red-subtle {
        background-color: var(--red-subtle);
    }

    /* Pulse effect for header badge */
    .pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
    }

    @keyframes pulse-glow {
        0%, 100% {
            box-shadow: 0 0 0 0 rgba(230, 57, 70, 0.4);
        }
        50% {
            box-shadow: 0 0 0 10px rgba(230, 57, 70, 0);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .ministry-card {
            margin-bottom: 2rem;
        }
        
        .stats-number {
            font-size: 2.5rem;
        }
    }
</style>
@endsection

@section('content')

<!-- Ministries Grid -->
<section id="ministries" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="mb-8">
                <span class="inline-flex items-center px-6 py-3 rounded-full text-white font-semibold text-lg shadow-md pulse-glow" style="background: linear-gradient(135deg, #E63946, #F25C66); border: 2px solid #E63946;">
                    <i class="fas fa-users mr-3 text-xl"></i>
                    Serve • Connect • Grow
                </span>
            </div>

            <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-6">
                Each ministry serves a unique purpose in building up the church and reaching our community
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Children's Ministry -->
            <div class="ministry-card">
                <img src="{{ asset('images/children3.JPG') }}" alt="Children's Ministry" class="ministry-photo">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-child text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Children's Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To provide a safe, engaging environment where children can learn about God's love and develop a personal relationship with Jesus.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Age-appropriate Bible lessons and worship</li>
                        <li>Safe and secure environment</li>
                        <li>Interactive learning activities</li>
                        <li>Special events and holiday programs</li>
                    </ul>
                    
                    <a href="children" class="cta-button w-full text-center">
                        Get Involved <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Youth Ministry -->
            <div class="ministry-card">
                <img src="{{ asset('images/youths3.JPG') }}" alt="Youth Ministry" class="ministry-photo">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Youth Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To empower teenagers and young adult to grow in faith, build authentic relationships, and discover their God-given purpose.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Contemporary worship and Bible study</li>
                        <li>Leadership development programs</li>
                        <li>Mentorship opportunities</li>
                        <li>Mission trips and outreach projects</li>
                    </ul>
                    
                    <a href="youth" class="cta-button w-full text-center">
                        Join Youth <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Worship Ministry -->
            <div class="ministry-card">
                <img src="{{ asset('images/worship5.jpeg') }}" alt="Worship Ministry" class="ministry-photo">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-music text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Worship Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To lead the congregation in authentic worship through music, create an atmosphere for encountering God, and serve with excellence.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Choir and vocal teams</li>
                        <li>Instrumental and band ministry</li>
                        <li>Media and technical support</li>
                        <li>Hospitality and ushering teams</li>
                    </ul>
                    
                    <a href="worship-ministry" class="cta-button w-full text-center">
                        Serve in Worship <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Men's Ministry -->
            <div class="ministry-card">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-male text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Men's Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To disciple men to become godly leaders in their homes, workplaces, and community through Bible study, fellowship, and accountability.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Monthly men's breakfast and Bible study</li>
                        <li>Leadership training workshops</li>
                        <li>Accountability groups</li>
                        <li>Service projects and outreach</li>
                    </ul>
                    
                    <a href="men" class="cta-button w-full text-center">
                        Join Men's Group <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Women's Ministry -->
            <div class="ministry-card">
                <img src="{{ asset('images/women1.JPG') }}" alt="Women's Ministry" class="ministry-photo">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-female text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Women's Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To create a supportive community where women can grow spiritually, build meaningful relationships, and use their gifts to serve others.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Weekly Bible study and prayer groups</li>
                        <li>Annual women's retreat</li>
                        <li>Mentorship program</li>
                        <li>Service and outreach opportunities</li>
                    </ul>
                    
                    <a href="women-ministry" class="cta-button w-full text-center accent">
                        Join Women's Group <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Discipleship Ministry -->
            <div class="ministry-card">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-book-open text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Discipleship Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To provide systematic teaching and mentoring that helps believers grow in spiritual maturity and live out their faith daily.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>New believers' classes</li>
                        <li>Cell Groups</li>
                        <li>One-on-one discipleship</li>
                        <li>Catechism</li>
                    </ul>
                    
                    <a href="discipleship-ministry" class="cta-button w-full text-center">
                        Grow in Faith <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Compassion Ministry -->
            <div class="ministry-card">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-hand-holding-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Compassion Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To demonstrate Christ's love through practical care, mercy, and support for the vulnerable in our community.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Food and essentials support</li>
                        <li>Hospital and home visits</li>
                        <li>Emergency relief response</li>
                        <li>Care and encouragement teams</li>
                    </ul>
                    
                    <a href="compassion-ministry" class="cta-button w-full text-center">
                        Serve with Compassion <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Bridge Ministry -->
            <div class="ministry-card">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-bridge text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Bridge Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To support students transitioning from Form 4 to university with spiritual growth, mentorship, and life skills.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Transition mentorship</li>
                        <li>Faith and life skills training</li>
                        <li>Career and campus guidance</li>
                        <li>Community and accountability</li>
                    </ul>
                    
                    <a href="bridge-ministry" class="cta-button w-full text-center">
                        Join Bridge Ministry <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Pastoral Ministry -->
            <div class="ministry-card">
                <div class="p-8">
                    <div class="ministry-icon mb-6">
                        <i class="fas fa-user-shield text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Pastoral Ministry</h3>
                    <p class="text-gray-600 mb-4">
                        <strong>Purpose:</strong> To provide spiritual care, counseling, and guidance for individuals and families.
                    </p>
                    <ul class="benefit-list mb-6">
                        <li>Couples care and support</li>
                        <li>Pre-marital counseling</li>
                        <li>Pastoral visits and prayer</li>
                        <li>Confidential guidance</li>
                    </ul>
                    
                    <a href="pastoral-ministry" class="cta-button w-full text-center">
                        Get Pastoral Support <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Evangelism & Missions - Full Width -->
        <div class="mb-16">
            <div class="ministry-card">
                <div class="p-8 md:p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/4 text-center">
                            <div class="ministry-icon mb-6">
                                <i class="fas fa-hands-helping text-2xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Evangelism & Missions</h3>
                        </div>
                        <div class="md:w-3/4">
                            <p class="text-gray-600 mb-6">
                                <strong>Purpose:</strong> To extend God's love beyond our church walls through evangelism, local outreach, and global missions that share the Gospel and serve communities.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div>
                                    <h4 class="font-bold text-gray-700 mb-3">Local Outreach</h4>
                                    <ul class="benefit-list">
                                        <li>Community food drives</li>
                                        <li>Prison ministry visits</li>
                                        <li>Hospital visitation teams</li>
                                        <li>Neighborhood evangelism</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-700 mb-3">Global Missions</h4>
                                    <ul class="benefit-list">
                                        <li>Mission trip coordination</li>
                                        <li>Support for missionaries</li>
                                        <li>International relief projects</li>
                                        <li>Cross-cultural training</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <a href="outreach-ministry" class="cta-button accent">
                                Make a Difference <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Get Involved CTA -->
        <div class="text-center">
            <div class="rounded-2xl p-8 md:p-12" style="background: linear-gradient(135deg, #FFF5F6 0%, #ffffff 100%);">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                    Ready to Serve?
                </h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                    Whether you're just beginning your faith journey or have been serving for years, there's a place for you in our ministries.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="cta-button px-8">
                        Contact Ministry Leaders <i class="fas fa-envelope ml-2"></i>
                    </a>
                    <a href="/visit" class="cta-button accent px-8">
                        Visit a Ministry <i class="fas fa-calendar-alt ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Impact -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Ministry Impact</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">See how our ministries are making a difference</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="timeline-item">
                <h4 class="font-bold text-gray-800 mb-2">Spiritual Growth</h4>
                <p class="text-gray-600">Weekly discipleship programs helping believers mature in their faith</p>
            </div>
            <div class="timeline-item">
                <h4 class="font-bold text-gray-800 mb-2">Community Service</h4>
                <p class="text-gray-600">Monthly outreach events serving over 500 local families annually</p>
            </div>
            <div class="timeline-item">
                <h4 class="font-bold text-gray-800 mb-2">Leadership Development</h4>
                <p class="text-gray-600">Training and equipping the next generation of church leaders</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Simple animation for ministry cards on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        // Animate ministry cards
        document.querySelectorAll('.ministry-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });
    });
</script>
@endsection
