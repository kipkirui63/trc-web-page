@extends('layouts.app')

@section('title', 'Pastoral Ministry')
@section('description', 'Pastoral Ministry offers care, counseling, and guidance with a focus on couples and pre-marital counseling.')

@section('preloads')
<link rel="preload" as="image" href="{{ asset('images/pastoral.webp') }}" type="image/webp" fetchpriority="high">
@endsection

@section('styles')
<style>
    :root {
        --pastoral-red: #dc2626;
        --pastoral-red-dark: #991b1b;
        --pastoral-light: #fff5f5;
    }

    .pastoral-hero {
        background: url('/images/pastoral.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .pastoral-card {
        background: white;
        border: 1px solid rgba(220, 38, 38, 0.15);
        border-radius: 18px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pastoral-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 35px rgba(220, 38, 38, 0.2);
    }

    .pastoral-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--pastoral-red), var(--pastoral-red-dark));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.25);
    }

    .pastoral-cta {
        background: linear-gradient(135deg, var(--pastoral-red), var(--pastoral-red-dark));
        color: white;
        border-radius: 12px;
        padding: 12px 28px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pastoral-cta:hover {
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

    .pastoral-photo.feature {
        aspect-ratio: auto;
        min-height: 100%;
    }

    .pastoral-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
</style>
@endsection

@section('content')
<section class="pastoral-hero text-white py-24">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="pastoral-icon mx-auto mb-6">
                <i class="fas fa-user-shield text-3xl"></i>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Pastoral Ministry</h1>
            <p class="text-xl md:text-2xl opacity-90">
                Shepherding hearts with care, counseling, and spiritual guidance.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Questions About Discipleship?</h2>
            <p class="text-lg text-gray-600">
                Our pastoral team is here to help guide you in your faith journey.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-center">
            <div class="lg:col-span-3 grid grid-cols-2 auto-rows-[210px] gap-4">
                <div class="pastoral-photo feature row-span-2">
                    <img src="{{ asset('images/pastoral.webp') }}" alt="Pastoral ministry team sharing with the church" width="1000" height="667" loading="eager" decoding="async">
                </div>
                <div class="pastoral-photo">
                    <img src="{{ asset('images/pastoral1.webp') }}" alt="Pastoral ministry moment at TRC AGC" width="667" height="1000" loading="lazy" decoding="async">
                </div>
                <div class="pastoral-photo">
                    <img src="{{ asset('images/pastoral2.webp') }}" alt="TRC AGC pastoral team ministering" width="1000" height="667" loading="lazy" decoding="async">
                </div>
            </div>

            <div class="lg:col-span-2 grid gap-5">
                <div class="pastoral-card p-6">
                    <div class="pastoral-icon mb-5">
                        <i class="fas fa-phone text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-4">Speak directly with our pastoral team</p>
                    <a href="tel:+254791049004" class="text-xl font-bold text-church-red">+254 791 049004</a>
                </div>
                <div class="pastoral-card p-6">
                    <div class="pastoral-icon mb-5">
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
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Pastoral Care Focus Areas</h2>
            <p class="text-lg text-gray-600">
                Our pastoral ministry provides confidential, faith-based counseling and care for individuals and families.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="pastoral-card p-8 text-center">
                <div class="pastoral-icon mx-auto mb-5">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Couples Ministry</h3>
                <p class="text-gray-600">
                    Strengthening marriages through biblical guidance, communication support, and prayerful care.
                </p>
            </div>
            <div class="pastoral-card p-8 text-center">
                <div class="pastoral-icon mx-auto mb-5">
                    <i class="fas fa-ring text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Pre-Marital Counseling</h3>
                <p class="text-gray-600">
                    Preparing couples for marriage with sessions on faith, communication, conflict resolution, and purpose.
                </p>
            </div>
            <div class="pastoral-card p-8 text-center">
                <div class="pastoral-icon mx-auto mb-5">
                    <i class="fas fa-heart text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Pastoral Visits</h3>
                <p class="text-gray-600">
                    Strengthening marriages through biblical guidance, communication support, and prayerful care.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16" style="background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%);">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg p-10">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">How We Help</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li><i class="fas fa-check text-church-red mr-2"></i>Confidential pastoral counseling</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Prayer and spiritual support</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Guidance for relationship growth</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Marriage preparation sessions</li>
                    </ul>
                </div>
                <div class="text-center">
                    <p class="text-lg text-gray-600 mb-6">
                        Reach out to schedule a counseling session or learn more about our pastoral care.
                    </p>
                    <a href="/contact" class="pastoral-cta">
                        <i class="fas fa-envelope"></i>
                        Request Counseling
                    </a>
                    <div class="mt-6 bg-red-50 rounded-xl p-5 text-left">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">Pastoral Contact</h4>
                        <p class="text-gray-700 mb-2"><i class="fas fa-phone text-church-red mr-2"></i>+254 719 187 201</p>
                        <p class="text-gray-700"><i class="fas fa-envelope text-church-red mr-2"></i>pastoral@thikaroadconnectagc.org</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
