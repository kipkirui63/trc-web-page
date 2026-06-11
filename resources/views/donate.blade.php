@extends('layouts.app')

@section('title', 'Donate & Giving')

@section('description', 'Support the mission of TRC AGC Church through your generous giving')

@section('content')
<style>
    .hero-section {
        background: url('/images/vbs6.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .hero-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .hero-card:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-5px);
    }

    .section-title {
        color: #000000;
        font-weight: 700;
        position: relative;
    }

    .section-title span {
        color: #dc2626;
    }

    .red-underline {
        width: 80px;
        height: 4px;
        background: #dc2626;
        margin: 1rem auto;
    }

    .payment-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        transition: all 0.3s ease;
    }

    .payment-card:hover {
        box-shadow: 0 20px 25px -5px rgba(220, 38, 38, 0.1), 0 10px 10px -5px rgba(220, 38, 38, 0.04);
        border-color: #dc2626;
    }

    .payment-number {
        background: #fef2f2;
        color: #dc2626;
        font-size: 2rem;
        font-weight: 700;
        padding: 1rem;
        border-radius: 0.75rem;
        border: 2px dashed #dc2626;
        font-family: monospace;
    }

    .payment-label {
        color: #000000;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .impact-item {
        border-left: 4px solid #dc2626;
        padding: 1rem;
        background: #f9fafb;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .impact-item:hover {
        background: #fef2f2;
        transform: translateX(5px);
    }

    .btn-primary {
        background: #dc2626;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary:hover {
        background: #b91c1c;
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(220, 38, 38, 0.3);
    }

    .btn-outline {
        background: transparent;
        color: #dc2626;
        border: 2px solid #dc2626;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-outline:hover {
        background: #dc2626;
        color: white;
    }

    .verse-box {
        background: #fef2f2;
        border-left: 4px solid #dc2626;
        padding: 1.5rem;
        border-radius: 0.5rem;
    }

    .text-red {
        color: #dc2626;
    }

    .bg-red {
        background: #dc2626;
    }

    .bg-red-light {
        background: #fef2f2;
    }

    .border-red {
        border-color: #dc2626;
    }
</style>

<!-- Hero Section -->
<section class="hero-section py-20 text-white">
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Give Generously</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto opacity-90 mb-10">
            "Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver."
        </p>
        <p class="text-lg">— 2 Corinthians 9:7</p>
    </div>
</section>

<!-- Payment Options Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="section-title text-4xl md:text-5xl mb-4">Our <span>Payment</span> Options</h2>
            <div class="red-underline"></div>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mt-6">Choose your preferred method to give securely</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-8">
            <!-- M-Pesa Paybill 1 -->
            <div class="payment-card p-8">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-red-light rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-mobile-alt text-3xl text-red"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-black">M-Pesa Paybill</h3>
                        <p class="text-gray-600">For Tithes, Offerings & General Giving</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-red-light p-6 rounded-xl text-center">
                        <p class="payment-label mb-2">PAYBILL NUMBER</p>
                        <p class="payment-number">522533</p>
                    </div>
                    <div class="bg-red-light p-6 rounded-xl text-center">
                        <p class="payment-label mb-2">ACCOUNT NUMBER</p>
                        <p class="payment-number">7535398</p>
                        <p class="text-sm text-gray-600 mt-2">Use for all contributions</p>
                    </div>
                </div>
                
                <div class="mt-4 text-sm text-gray-500 flex items-center">
                    <i class="fas fa-info-circle text-red mr-2"></i>
                    Go to M-Pesa → Lipa na M-Pesa → Paybill → Enter 522533 → Account 7535398 → Amount → PIN
                </div>
            </div>

            <!-- M-Pesa Paybill 2 -->
            <div class="payment-card p-8">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-red-light rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-hand-holding-heart text-3xl text-red"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-black">M-Pesa Paybill</h3>
                        <p class="text-gray-600">For Missions & Special Projects</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-red-light p-6 rounded-xl text-center">
                        <p class="payment-label mb-2">PAYBILL NUMBER</p>
                        <p class="payment-number">4043953</p>
                    </div>
                    <div class="bg-red-light p-6 rounded-xl text-center">
                        <p class="payment-label mb-2">ACCOUNT NUMBER</p>
                        <p class="payment-number">OFFERING/TITHE</p>
                        <p class="text-sm text-gray-600 mt-2">Missions & Special Projects</p>
                    </div>
                </div>
                
                <div class="mt-4 text-sm text-gray-500 flex items-center">
                    <i class="fas fa-info-circle text-red mr-2"></i>
                    For mission giving, church planting, and special project contributions
                </div>
            </div>

            <!-- Bank Account -->
            <div class="payment-card p-8 border-2 border-red">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-red rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-university text-3xl text-white"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-black">Bank Transfer</h3>
                        <p class="text-gray-600">Direct to our church account</p>
                    </div>
                </div>
                
                <div class="bg-red-light p-8 rounded-xl text-center">
                    <p class="payment-label mb-2">KCB BANK ACCOUNT</p>
                    <p class="payment-number text-3xl">1293791407</p>
                    <p class="text-lg font-medium text-black mt-4">Account Name: TRC AGC Church</p>
                    <p class="text-gray-600">Bank: KCB Bank Kenya</p>
                </div>
                
                <div class="mt-6 grid md:grid-cols-2 gap-4 text-center text-sm">
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="font-bold text-black">Branch:</span>
                        <span class="text-gray-600">Kipande House</span>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="font-bold text-black">Swift Code:</span>
                        <span class="text-gray-600">KCBLKENX</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact for Support -->
        <div class="text-center mt-12 p-6 bg-red-light rounded-xl max-w-2xl mx-auto">
            <p class="text-black font-medium mb-4">Need a receipt or have questions?</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="mailto:finance@thikaroadconnect.org" class="text-red hover:text-red-700 font-medium">
                    <i class="fas fa-envelope mr-2"></i>finance@thikaroadconnect.org
                </a>
                <a href="tel:+254710668173" class="text-red hover:text-red-700 font-medium">
                    <i class="fas fa-phone mr-2"></i>+254 710 668 173
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why We Give Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="section-title text-4xl md:text-5xl mb-4">Why <span>We Give</span></h2>
            <div class="red-underline"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Biblical Foundation -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-red rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-bible text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-black">Biblical Foundation</h3>
                </div>
                
                <p class="text-gray-700 mb-6 leading-relaxed">
                    At TRC AGC Church, we believe that giving is an act of worship and obedience to God. The Bible teaches us to give cheerfully and generously, to tithe from our income, and to support the work of ministry.
                </p>

                <div class="verse-box">
                    <p class="italic text-gray-800 text-lg">
                        "Honor the Lord with your wealth and with the firstfruits of all your produce."
                    </p>
                    <p class="font-bold text-red mt-2">— Proverbs 3:9</p>
                </div>
            </div>

            <!-- Your Impact -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-center mb-6">
                    <div class="w-14 h-14 bg-red rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-black">Your Impact</h3>
                </div>

                <p class="text-gray-700 mb-6">Your faithful giving enables us to:</p>

                <div class="space-y-3">
                    <div class="impact-item">
                        <i class="fas fa-check-circle text-red mr-3"></i>
                        <span class="text-gray-800">Support church ministries and operations</span>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-check-circle text-red mr-3"></i>
                        <span class="text-gray-800">Fund community outreach programs</span>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-check-circle text-red mr-3"></i>
                        <span class="text-gray-800">Build and maintain schools for underprivileged children</span>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-check-circle text-red mr-3"></i>
                        <span class="text-gray-800">Support missionaries locally and globally</span>
                    </div>
                    <div class="impact-item">
                        <i class="fas fa-check-circle text-red mr-3"></i>
                        <span class="text-gray-800">Provide care for those in need in our community</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stewardship Note -->
        <div class="text-center mt-12">
            <div class="inline-flex items-center bg-red-light px-6 py-3 rounded-full">
                <i class="fas fa-shield-alt text-red mr-2"></i>
                <span class="text-gray-800">100% of your gifts are used for ministry purposes with transparent accounting</span>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold text-black mb-4">Ready to Give?</h3>
        <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
            Choose any of the payment options above and be part of what God is doing through TRC AGC Church.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#mpesa-section" class="btn-primary">Give via M-Pesa</a>
            <a href="tel:+254710668173" class="btn-outline">Contact Us</a>
        </div>
    </div>
</section>

<script>
    // Intersection Observer for animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    // Observe payment cards
    document.querySelectorAll('.payment-card, .bg-white').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });
</script>
@endsection
