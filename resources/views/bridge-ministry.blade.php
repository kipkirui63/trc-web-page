@extends('layouts.app')

@section('title', 'Bridge Ministry')
@section('description', 'Bridge Ministry supports students transitioning from Form 4 to university through mentorship, discipleship, and life skills.')

@section('styles')
<style>
    :root {
        --bridge-red: #dc2626;
        --bridge-red-dark: #991b1b;
        --bridge-light: #fff1f2;
    }

    .bridge-hero {
        background: url('/images/Youth-hike.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .bridge-card {
        background: white;
        border-radius: 18px;
        border: 1px solid rgba(220, 38, 38, 0.15);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .bridge-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 35px rgba(220, 38, 38, 0.2);
    }

    .bridge-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--bridge-red), var(--bridge-red-dark));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 25px rgba(220, 38, 38, 0.25);
    }

    .bridge-cta {
        background: linear-gradient(135deg, var(--bridge-red), var(--bridge-red-dark));
        color: white;
        border-radius: 12px;
        padding: 12px 28px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .bridge-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(220, 38, 38, 0.2);
    }
</style>
@endsection

@section('content')
<section class="bridge-hero text-white py-24">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="bridge-icon mx-auto mb-6">
                <i class="fas fa-bridge text-3xl"></i>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Bridge Ministry</h1>
            <p class="text-xl md:text-2xl opacity-90">
                Helping Form 4 graduates transition to university with faith, wisdom, and community.
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Building a Strong Foundation</h2>
            <p class="text-lg text-gray-600">
                Bridge Ministry equips students for the next season of life through mentorship, discipleship, and practical support.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bridge-card p-8 text-center">
                <div class="bridge-icon mx-auto mb-5">
                    <i class="fas fa-user-friends text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Mentorship</h3>
                <p class="text-gray-600">Connect with mentors who guide students in faith, character, and decision-making.</p>
            </div>
            <div class="bridge-card p-8 text-center">
                <div class="bridge-icon mx-auto mb-5">
                    <i class="fas fa-book-open text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Discipleship</h3>
                <p class="text-gray-600">Intentional discipleship to strengthen spiritual growth and personal devotion.</p>
            </div>
            <div class="bridge-card p-8 text-center">
                <div class="bridge-icon mx-auto mb-5">
                    <i class="fas fa-graduation-cap text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Life Skills</h3>
                <p class="text-gray-600">Guidance on campus life, career direction, and healthy relationships.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16" style="background: linear-gradient(135deg, #fff1f2 0%, #ffffff 100%);">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg p-10">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Who It’s For</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li><i class="fas fa-check text-church-red mr-2"></i>Form 4 graduates preparing for university</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Students navigating new academic environments</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Young adults seeking spiritual accountability</li>
                        <li><i class="fas fa-check text-church-red mr-2"></i>Families desiring support during transition</li>
                    </ul>
                </div>
                <div class="text-center">
                    <p class="text-lg text-gray-600 mb-6">
                        Join a community that will walk with you as you step into university life.
                    </p>
                    <a href="/contact" class="bridge-cta">
                        <i class="fas fa-envelope"></i>
                        Connect With Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
