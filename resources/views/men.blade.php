@extends('layouts.app')

@section('title', 'Iron Sharpens Iron - Men\'s Ministry')
@section('description', 'Join the brotherhood at TRC AGC Church. Where men gather to grow in faith, forge lasting friendships, and become the leaders God called them to be.')

@section('styles')
<style>
    .iron-gradient {
        background: linear-gradient(135deg, #1f2937 0%, #374151 25%, #4b5563 50%, #6b7280 75%, #9ca3af 100%);
    }

    .fire-gradient {
        background: linear-gradient(135deg, #dc2626 0%, #ea580c 25%, #d97706 50%, #ca8a04 75%, #eab308 100%);
    }

    .steel-blue {
        background: linear-gradient(135deg, #1e40af 0%, #3730a3 50%, #5b21b6 100%);
    }

    .hero-masculinity {
        background: linear-gradient(135deg, rgba(31, 41, 55, 0.95) 0%, rgba(124, 58, 237, 0.85) 100%),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="steel" patternUnits="userSpaceOnUse" width="40" height="40"><rect width="40" height="40" fill="%23374151"/><circle cx="20" cy="20" r="2" fill="%236b7280" opacity="0.5"/></pattern></defs><rect width="1000" height="1000" fill="url(%23steel)"/></svg>');
        background-size: cover, 80px 80px;
    }

    .strength-shadow {
        box-shadow: 0 20px 40px rgba(31, 41, 55, 0.3), 0 0 20px rgba(124, 58, 237, 0.2);
    }

    .masculine-hover:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    }

    .brotherhood-glow {
        animation: brotherhoodPulse 3s ease-in-out infinite;
    }

    @keyframes brotherhoodPulse {

        0%,
        100% {
            box-shadow: 0 0 20px rgba(220, 38, 38, 0.3);
        }

        50% {
            box-shadow: 0 0 40px rgba(220, 38, 38, 0.6), 0 0 60px rgba(124, 58, 237, 0.3);
        }
    }

    .forge-animation {
        animation: forge 4s ease-in-out infinite;
    }

    @keyframes forge {

        0%,
        100% {
            transform: rotate(-2deg) scale(1);
        }

        25% {
            transform: rotate(1deg) scale(1.05);
        }

        50% {
            transform: rotate(-1deg) scale(1.02);
        }

        75% {
            transform: rotate(2deg) scale(1.03);
        }
    }

    .warrior-text {
        background: linear-gradient(45deg, #dc2626, #7c3aed, #dc2626);
        background-size: 200% 200%;
        animation: warriorShine 3s ease-in-out infinite;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    @keyframes warriorShine {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-masculinity min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="forge-animation absolute top-20 left-10 text-6xl">⚡</div>
        <div class="bounce-slow absolute top-40 right-20 text-4xl">🛡️</div>
        <div class="wiggle absolute bottom-20 left-20 text-5xl">⚔️</div>
        <div class="float-animation absolute bottom-40 right-10 text-6xl">🔥</div>
    </div>

    <div class="container mx-auto px-4 text-center text-white relative z-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-6xl md:text-8xl font-black mb-6 warrior-text">
                IRON SHARPENS IRON
            </h1>
            <div class="text-2xl md:text-3xl font-bold mb-8 text-gray-200">
                <span class="block">AS IRON SHARPENS IRON,</span>
                <span class="block text-red-400">SO ONE MAN SHARPENS ANOTHER</span>
                <span class="block text-sm mt-2 text-purple-300">- Proverbs 27:17</span>
            </div>

            <p class="text-xl md:text-2xl mb-10 text-gray-300 leading-relaxed">
                Join the <span class="font-bold text-red-400">BROTHERHOOD</span> where real men gather to grow in faith,
                forge unbreakable bonds, and become the <span class="font-bold text-purple-400">WARRIORS</span> God designed us to be.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button class="brotherhood-glow bg-church-red hover:bg-red-700 text-white font-black text-xl px-12 py-4 rounded-lg transition transform hover:scale-105">
                    JOIN THE BROTHERHOOD
                </button>
                <button class="steel-blue text-white font-bold text-lg px-10 py-4 rounded-lg hover:opacity-90 transition">
                    DISCOVER YOUR PURPOSE
                </button>
            </div>
        </div>
    </div>
</section>

<!-- What We're About Section -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-white mb-6">
                WE'RE NOT YOUR <span class="text-red-500">TYPICAL</span> MEN'S GROUP
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                This is where boys become men, and men become the godly leaders their families and communities need.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Real Talk Card -->
            <div class="masculine-hover bg-gray-800 rounded-xl p-8 strength-shadow transition-all duration-300">
                <div class="text-6xl mb-6 text-center">💪</div>
                <h3 class="text-2xl font-bold text-white mb-4 text-center">REAL TALK</h3>
                <p class="text-gray-300 text-center leading-relaxed">
                    No fluff, no pretense. We tackle the tough stuff - addiction, relationships, purpose, and the battles every man faces.
                </p>
            </div>

            <!-- Brotherhood Card -->
            <div class="masculine-hover bg-gray-800 rounded-xl p-8 strength-shadow transition-all duration-300">
                <div class="text-6xl mb-6 text-center">🤝</div>
                <h3 class="text-2xl font-bold text-white mb-4 text-center">BROTHERHOOD</h3>
                <p class="text-gray-300 text-center leading-relaxed">
                    Form bonds that last a lifetime. These aren't just church friends - these are your brothers in the trenches.
                </p>
            </div>

            <!-- Action Card -->
            <div class="masculine-hover bg-gray-800 rounded-xl p-8 strength-shadow transition-all duration-300">
                <div class="text-6xl mb-6 text-center">⚡</div>
                <h3 class="text-2xl font-bold text-white mb-4 text-center">ACTION</h3>
                <p class="text-gray-300 text-center leading-relaxed">
                    We don't just talk - we act. Community service, mentoring, and making a real difference in our world.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="py-20 iron-gradient">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-5xl font-black text-center text-white mb-16">
                THE <span class="text-yellow-400">WARRIOR</span> CODE
            </h2>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="fire-gradient w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">INTEGRITY OVER IMAGE</h3>
                            <p class="text-gray-300">Who you are when nobody's watching matters more than your reputation.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="fire-gradient w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">STRENGTH IN VULNERABILITY</h3>
                            <p class="text-gray-300">Real strength means admitting weakness and growing from it together.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="fire-gradient w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">PROTECT & PROVIDE</h3>
                            <p class="text-gray-300">We stand guard over our families, communities, and brothers in faith.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="fire-gradient w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">LEGACY BUILDERS</h3>
                            <p class="text-gray-300">Every decision we make today shapes the men of tomorrow.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="fire-gradient w-64 h-64 rounded-full mx-auto flex items-center justify-center forge-animation">
                        <div class="text-8xl">🔥</div>
                    </div>
                    <h3 class="text-3xl font-bold text-white mt-8 mb-4">FORGED IN FIRE</h3>
                    <p class="text-gray-300 text-lg">Refined through trials, strengthened by brotherhood</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-4">
        <h2 class="text-5xl font-black text-center text-white mb-16">
            WHAT WE <span class="text-purple-500">CONQUER</span> TOGETHER
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group cursor-pointer">
                <div class="steel-blue w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl">📖</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">BIBLE STUDY</h3>
                <p class="text-gray-400">Deep dives into God's Word with practical application for modern men</p>
            </div>

            <div class="text-center group cursor-pointer">
                <div class="steel-blue w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl">🎯</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">ACCOUNTABILITY</h3>
                <p class="text-gray-400">Iron-clad accountability groups that help you stay on track</p>
            </div>

            <div class="text-center group cursor-pointer">
                <div class="steel-blue w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl">👨‍👦</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">MENTORSHIP</h3>
                <p class="text-gray-400">Connecting seasoned warriors with the next generation</p>
            </div>

            <div class="text-center group cursor-pointer">
                <div class="steel-blue w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="text-3xl">🏗️</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">SERVICE</h3>
                <p class="text-gray-400">Building homes, changing lives, serving our community</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-r from-church-red via-purple-800 to-church-purple relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="sparkle absolute top-10 left-10 text-4xl">✨</div>
        <div class="sparkle absolute top-20 right-20 text-3xl" style="animation-delay: 1s;">⭐</div>
        <div class="sparkle absolute bottom-20 left-20 text-5xl" style="animation-delay: 2s;">🌟</div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-5xl md:text-6xl font-black text-white mb-8">
            READY TO BE <span class="text-yellow-300">FORGED?</span>
        </h2>

        <p class="text-2xl text-white mb-12 max-w-3xl mx-auto">
            The brotherhood is waiting. Your journey from ordinary to extraordinary starts here.
        </p>

        <div class="space-y-6">
            <a href="mailto:men@thikaroadconnect.org	"><button class="brotherhood-glow bg-white text-church-red font-black text-2xl px-16 py-6 rounded-full hover:bg-gray-100 transition transform hover:scale-105">
                    Contact Us
                </button></a>


        </div>
    </div>
</section>


@endsection

@section('scripts')
<script>
    // Add some interactive elements
    document.addEventListener('DOMContentLoaded', function() {
        // Add click effects to cards
        const cards = document.querySelectorAll('.masculine-hover');
        cards.forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Add scroll animations
        const observerOptions1 = {
            threshold: 0.15,
            rootMargin: '0px 0px -80px 0px'
        };

        const observer1 = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100); // Stagger by 100ms
                }
            });
        }, observerOptions1);

        // Initialize elements with starting state
        document.querySelectorAll('section > div').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            observer1.observe(section);
        });
    });
</script>
@endsection