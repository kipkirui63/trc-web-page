@extends('layouts.app')

@section('title', 'Compassion Ministry')
@section('description', 'Serve with compassion at TRC AGC Church through care, relief, and community support.')

@section('preloads')
<link rel="preload" as="image" href="{{ asset('images/happy-children-hero.webp') }}" type="image/webp" fetchpriority="high">
@endsection

@section('styles')
<style>
    :root {
        --compassion-red: #dc2626;
        --compassion-red-dark: #991b1b;
        --compassion-light: #fff5f5;
    }

    .compassion-hero {
        position: relative;
        overflow: hidden;
    }

    .compassion-hero-image {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .compassion-card {
        background: white;
        border: 1px solid rgba(220, 38, 38, 0.15);
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .compassion-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 35px rgba(220, 38, 38, 0.18);
    }

    .compassion-icon {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--compassion-red), var(--compassion-red-dark));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.25);
    }

    .compassion-tag {
        display: inline-block;
        background: var(--compassion-light);
        color: var(--compassion-red-dark);
        padding: 6px 14px;
        border-radius: 9999px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .cta-red {
        background: linear-gradient(135deg, var(--compassion-red), var(--compassion-red-dark));
        color: white;
        border-radius: 10px;
        padding: 12px 26px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cta-red:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(220, 38, 38, 0.2);
    }

    .pastoral-photo {
        aspect-ratio: 4 / 3;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.12);
        border: 1px solid rgba(220, 38, 38, 0.12);
    }

    .pastoral-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .pastoral-photo.portrait {
        aspect-ratio: 3 / 4;
    }

    .pastoral-photo.feature {
        aspect-ratio: auto;
        min-height: 100%;
    }

    .pastoral-contact {
        background: transparent;
        border: 1px solid rgba(220, 38, 38, 0.16);
        border-radius: 14px;
        padding: 24px;
    }
</style>
@endsection

@section('content')
<section class="compassion-hero text-white py-24">
    <img
        src="{{ asset('images/happy-children-hero.webp') }}"
        alt="Children smiling together at TRC AGC"
        class="compassion-hero-image"
        width="1920"
        height="1280"
        loading="eager"
        decoding="async"
        fetchpriority="high">
    <div class="container mx-auto px-4 relative z-20">
        <div class="max-w-4xl mx-auto text-center">
            <div class="compassion-icon mx-auto mb-6">
                <i class="fas fa-hand-holding-heart text-3xl"></i>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Compassion Ministry</h1>
            <p class="text-xl md:text-2xl opacity-90">
                Demonstrating Christ's love through care, mercy, and practical support.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <span class="compassion-tag">Pastoral Care</span>
            <h2 class="text-4xl font-bold text-gray-800 mt-4 mb-4">Questions About Discipleship?</h2>
            <p class="text-lg text-gray-600">
                Our pastoral team is here to help guide you in your faith journey.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-center">
            <div class="lg:col-span-3 grid grid-cols-2 auto-rows-[210px] gap-4">
                <div class="pastoral-photo feature row-span-2">
                    <img src="{{ asset('images/pastoral.webp') }}" alt="Pastoral ministry team sharing with the church" width="1000" height="667" loading="eager" decoding="async" fetchpriority="high">
                </div>
                <div class="pastoral-photo">
                    <img src="{{ asset('images/pastoral1.webp') }}" alt="Pastoral ministry moment at TRC AGC" width="667" height="1000" loading="lazy" decoding="async">
                </div>
                <div class="pastoral-photo">
                    <img src="{{ asset('images/pastoral2.webp') }}" alt="TRC AGC pastoral team ministering" width="1000" height="667" loading="lazy" decoding="async">
                </div>
            </div>

            <div class="lg:col-span-2 grid gap-5">
                <div class="pastoral-contact">
                    <div class="compassion-icon mb-5">
                        <i class="fas fa-phone text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-4">Speak directly with our pastoral team</p>
                    <a href="tel:+254791049004" class="text-xl font-bold text-church-red">+254 791 049004</a>
                </div>
                <div class="pastoral-contact">
                    <div class="compassion-icon mb-5">
                        <i class="fas fa-envelope text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-4">Send us your questions or concerns</p>
                    <a href="mailto:discipleship@thikaroadconnectagc.org" class="text-lg font-bold text-church-red break-words">discipleship@thikaroadconnectagc.org</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <span class="compassion-tag">Care in Action</span>
            <h2 class="text-4xl font-bold text-gray-800 mt-4 mb-4">Our Heart for Compassion</h2>
            <p class="text-lg text-gray-600">
                We serve individuals and families facing challenges by offering encouragement, relief, and hope.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="compassion-card p-8 text-center">
                <div class="compassion-icon mx-auto mb-5">
                    <i class="fas fa-box-open text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Relief & Essentials</h3>
                <p class="text-gray-600">Food support, basic needs assistance, and emergency response for families in crisis.</p>
            </div>
            <div class="compassion-card p-8 text-center">
                <div class="compassion-icon mx-auto mb-5">
                    <i class="fas fa-hospital-user text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Care Visits</h3>
                <p class="text-gray-600">Hospital and home visits to encourage, pray, and provide practical help.</p>
            </div>
            <div class="compassion-card p-8 text-center">
                <div class="compassion-icon mx-auto mb-5">
                    <i class="fas fa-hands-helping text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Community Support</h3>
                <p class="text-gray-600">Support networks, counseling referrals, and care teams for ongoing needs.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16" style="background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%);">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg p-10">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Ways to Serve</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li><i class="fas fa-check text-church-red mr-2"></i>Join the care and visitation team</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Partner in relief and support drives</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Provide mentorship and encouragement</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Volunteer for emergency response</li>
                    </ul>
                </div>
                <div class="text-center">
                    <p class="text-lg text-gray-600 mb-6">
                        Be part of a team that brings hope to those who need it most.
                    </p>
                    <a href="/contact" class="cta-red">
                        <i class="fas fa-envelope"></i>
                        Get Involved
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
