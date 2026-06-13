@extends('layouts.app')

@section('title', 'Compassion Ministry')
@section('description', 'Serve with compassion at TRC AGC Church through care, relief, and community support.')

@section('preloads')
<link rel="preload" as="image" href="{{ asset('images/kwale-missions1.webp') }}" type="image/webp" fetchpriority="high">
@endsection

@section('styles')
<style>
    :root {
        --compassion-red: #ED1C24;
        --compassion-red-dark: #ED1C24;
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
        border: 1px solid rgba(237, 28, 36, 0.15);
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .compassion-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 35px rgba(237, 28, 36, 0.18);
    }

    .compassion-icon {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: var(--compassion-red);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(237, 28, 36, 0.25);
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
        background: var(--compassion-red);
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
        box-shadow: 0 12px 24px rgba(237, 28, 36, 0.2);
    }

</style>
@endsection

@section('content')
<section class="compassion-hero text-white py-24">
    <img
        src="{{ asset('images/kwale-missions1.webp') }}"
        alt="TRC AGC evangelism and missions outreach"
        class="compassion-hero-image"
        width="1600"
        height="1067"
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
