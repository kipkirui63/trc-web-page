@extends('layouts.app')

@section('title', 'Worship Ministry')
@section('description', 'Join our Worship Ministry at TRC AGC Church. Serve through vocals, instruments, technical arts, prayer, and hospitality.')

@section('styles')
<style>
    :root {
        --worship-red: #dc2626;
        --worship-red-dark: #991b1b;
        --worship-soft: #fff5f5;
        --worship-border: rgba(220, 38, 38, 0.15);
    }

    .worship-hero {
        background: url('/images/worship-hero.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .worship-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(127, 29, 29, 0.72), rgba(15, 23, 42, 0.42));
    }

    .worship-tag {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--worship-red);
        color: #ffffff;
        border-radius: 9999px;
        padding: 10px 20px;
        font-weight: 700;
    }

    .worship-card {
        background: #ffffff;
        border: 1px solid var(--worship-border);
        border-radius: 16px;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .worship-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 36px rgba(220, 38, 38, 0.16);
    }

    .worship-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        background: var(--worship-red);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .worship-section-soft {
        background: linear-gradient(135deg, var(--worship-soft) 0%, #ffffff 100%);
    }

    .worship-cta {
        background: var(--worship-red);
        color: #ffffff;
        border-radius: 9999px;
        padding: 14px 28px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 700;
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .worship-cta:hover {
        background: var(--worship-red-dark);
        transform: translateY(-3px);
    }

    .worship-cta.light {
        background: #ffffff;
        color: var(--worship-red);
    }

    .worship-cta.light:hover {
        background: var(--worship-soft);
        color: var(--worship-red-dark);
    }

    .worship-photo-card {
        min-height: 230px;
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        border: 1px solid var(--worship-border);
        box-shadow: 0 18px 35px rgba(15, 23, 42, 0.12);
    }

    .worship-photo-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .worship-photo-card:hover img {
        transform: scale(1.05);
    }
</style>
@endsection

@section('content')
<section class="worship-hero text-white py-24 md:py-32">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="worship-icon mx-auto mb-6 rounded-full">
                <i class="fas fa-music"></i>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Worship Ministry</h1>
            <p class="text-xl md:text-2xl opacity-95 max-w-3xl mx-auto">
                Leading hearts into God's presence through song, service, prayer, and excellence.
            </p>
            <div class="mt-8">
                <a href="/contact" class="worship-cta light">
                    <i class="fas fa-envelope"></i>
                    Join the Team
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <span class="worship-tag">
                <i class="fas fa-heart"></i>
                Serving Through Worship
            </span>
            <h2 class="text-4xl font-bold text-gray-800 mt-5 mb-4">Where Your Gift Can Serve</h2>
            <p class="text-lg text-gray-600">
                Every voice, instrument, and faithful hand helps create a worship environment that points people to Christ.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="worship-card p-7">
                <div class="worship-icon mb-5"><i class="fas fa-microphone-alt"></i></div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Vocals</h3>
                <p class="text-gray-600">Lead congregational worship, join the choir, or serve through special music.</p>
            </div>
            <div class="worship-card p-7">
                <div class="worship-icon mb-5"><i class="fas fa-guitar"></i></div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Instruments</h3>
                <p class="text-gray-600">Serve with guitars, keys, drums, and other instruments that support worship.</p>
            </div>
            <div class="worship-card p-7">
                <div class="worship-icon mb-5"><i class="fas fa-sliders-h"></i></div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Technical Arts</h3>
                <p class="text-gray-600">Support sound, media, livestreaming, and the technical flow of services.</p>
            </div>
            <div class="worship-card p-7">
                <div class="worship-icon mb-5"><i class="fas fa-palette"></i></div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Creative Arts</h3>
                <p class="text-gray-600">Express worship through dance, drama, visual arts, and creative storytelling.</p>
            </div>
            <div class="worship-card p-7">
                <div class="worship-icon mb-5"><i class="fas fa-praying-hands"></i></div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Prayer</h3>
                <p class="text-gray-600">Cover worship services, teams, and ministry moments in prayer.</p>
            </div>
            <div class="worship-card p-7">
                <div class="worship-icon mb-5"><i class="fas fa-handshake"></i></div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Hospitality</h3>
                <p class="text-gray-600">Welcome people warmly and help create order, care, and belonging.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 worship-section-soft">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">
            <div>
                <span class="worship-tag">
                    <i class="fas fa-bullseye"></i>
                    Our Objective
                </span>
                <h2 class="text-4xl font-bold text-gray-800 mt-5 mb-5">Worship That Glorifies God</h2>
                <p class="text-lg text-gray-600 mb-6">
                    We are building a culture of worship that values excellence without performance, authenticity over show, and God's glory above everything else.
                </p>
                <div class="space-y-4">
                    <div class="worship-card p-5 flex gap-4 items-start">
                        <div class="worship-icon w-12 h-12 text-base"><i class="fas fa-eye"></i></div>
                        <p class="text-gray-600">Create an atmosphere where hearts are drawn closer to God.</p>
                    </div>
                    <div class="worship-card p-5 flex gap-4 items-start">
                        <div class="worship-icon w-12 h-12 text-base"><i class="fas fa-seedling"></i></div>
                        <p class="text-gray-600">Equip worshippers to grow in their gifts and serve faithfully.</p>
                    </div>
                    <div class="worship-card p-5 flex gap-4 items-start">
                        <div class="worship-icon w-12 h-12 text-base"><i class="fas fa-users"></i></div>
                        <p class="text-gray-600">Serve as a team with humility, unity, and spiritual maturity.</p>
                    </div>
                </div>
            </div>

            <div class="worship-card p-8">
                <p class="text-2xl text-gray-800 italic leading-relaxed mb-6">
                    "Sing to the Lord a new song; sing to the Lord, all the earth."
                </p>
                <p class="font-bold text-church-red">Psalm 96:1</p>
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <img src="{{ asset('images/worship1-feature.webp') }}" alt="Worship team ministering" class="w-full h-44 object-cover rounded-xl" loading="lazy" decoding="async">
                    <img src="{{ asset('images/worship2-feature.webp') }}" alt="Congregation worshipping" class="w-full h-44 object-cover rounded-xl" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <span class="worship-tag">
                <i class="fas fa-route"></i>
                Your Journey
            </span>
            <h2 class="text-4xl font-bold text-gray-800 mt-5 mb-4">How to Start Serving</h2>
            <p class="text-lg text-gray-600">
                We help you move from interest to service with care, training, and team support.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-5 max-w-6xl mx-auto">
            <div class="worship-card p-6 text-center">
                <div class="worship-icon mx-auto mb-4 rounded-full">1</div>
                <h3 class="font-bold text-gray-800 mb-2">Connect</h3>
                <p class="text-gray-600 text-sm">Reach out and tell us where you'd like to serve.</p>
            </div>
            <div class="worship-card p-6 text-center">
                <div class="worship-icon mx-auto mb-4 rounded-full">2</div>
                <h3 class="font-bold text-gray-800 mb-2">Meet</h3>
                <p class="text-gray-600 text-sm">Meet ministry leaders and discuss your gifting.</p>
            </div>
            <div class="worship-card p-6 text-center">
                <div class="worship-icon mx-auto mb-4 rounded-full">3</div>
                <h3 class="font-bold text-gray-800 mb-2">Train</h3>
                <p class="text-gray-600 text-sm">Join rehearsals, training, and team preparation.</p>
            </div>
            <div class="worship-card p-6 text-center">
                <div class="worship-icon mx-auto mb-4 rounded-full">4</div>
                <h3 class="font-bold text-gray-800 mb-2">Serve</h3>
                <p class="text-gray-600 text-sm">Begin serving with ongoing guidance and support.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 worship-section-soft">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <span class="worship-tag">
                <i class="fas fa-camera"></i>
                Worship Moments
            </span>
            <h2 class="text-4xl font-bold text-gray-800 mt-5 mb-4">Serving in Song and Fellowship</h2>
            <p class="text-lg text-gray-600">
                Scenes from our worship ministry in service, song, and community.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 auto-rows-[230px] gap-5 max-w-6xl mx-auto">
            <div class="worship-photo-card lg:col-span-3 lg:row-span-2">
                <img src="{{ asset('images/worship1-feature.webp') }}" alt="Worship ministry team" loading="lazy" decoding="async" width="1600" height="1067">
            </div>
            <div class="worship-photo-card lg:col-span-3">
                <img src="{{ asset('images/worship2-feature.webp') }}" alt="Congregation in worship" loading="lazy" decoding="async" width="1600" height="1067">
            </div>
            <div class="worship-photo-card lg:col-span-2">
                <img src="{{ asset('images/worship4-feature.webp') }}" alt="Worship service moment" loading="lazy" decoding="async" width="1600" height="1067">
            </div>
            <div class="worship-photo-card lg:col-span-1">
                <img src="{{ asset('images/worship-gathering-feature.webp') }}" alt="Worship gathering" loading="lazy" decoding="async" width="1200" height="900">
            </div>
            <div class="worship-photo-card lg:col-span-3">
                <img src="{{ asset('images/worship5.jpeg') }}" alt="Worship fellowship moment" loading="lazy" decoding="async" width="1200" height="800">
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto worship-card p-10">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Serve?</h2>
                    <p class="text-lg text-gray-600">
                        If you sing, play, pray, operate tech, or simply want to serve with excellence, we'd love to hear from you.
                    </p>
                </div>
                <div class="text-center md:text-right">
                    <a href="/contact" class="worship-cta">
                        <i class="fas fa-envelope"></i>
                        Contact Worship Ministry
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
