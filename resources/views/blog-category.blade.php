<!-- Blog Category Page -->
@extends('layouts.app')

@section('content')
<style>
    /* Red, Black & White Theme Variables */
    :root {
        --church-red: #DC2626;
        --church-red-dark: #B91C1C;
        --church-red-light: #fce4e8;
        --church-black: #000000;
        --church-gray: #4a4a4a;
        --church-light: #f8f8f8;
    }

    /* Blog Post Card Styles */
    .blog-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(220, 38, 38, 0.1);
        position: relative;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .blog-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--church-red);
        transform: scaleX(0);
        transition: transform 0.3s ease;
        transform-origin: left;
    }

    .blog-card:hover::before {
        transform: scaleX(1);
    }

    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(220, 38, 38, 0.12);
        border-color: var(--church-red);
    }

    .blog-image {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/10;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .blog-card:hover .blog-image img {
        transform: scale(1.05);
    }

    .blog-link {
        color: var(--church-red);
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: gap 0.3s ease;
        text-decoration: none;
    }

    .blog-link:hover {
        gap: 1rem;
    }

    .blog-link i {
        transition: transform 0.3s ease;
    }

    .blog-link:hover i {
        transform: translateX(4px);
    }

    /* Page Header */
    .page-header {
        background: linear-gradient(135deg, var(--church-red) 0%, var(--church-red-dark) 100%);
        padding: 4rem 0;
        margin-bottom: 3rem;
    }

    .section-title {
        color: var(--church-black);
        font-weight: 700;
    }

    .title-underline {
        background: var(--church-red);
        height: 0.25rem;
        width: 5rem;
        margin: 1rem auto;
        border-radius: 9999px;
    }

    /* Category Badge */
    .category-badge {
        display: inline-block;
        padding: 0.375rem 0.875rem;
        background: var(--church-red);
        color: white;
        border-radius: 0.5rem;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 0.75rem;
    }

    /* Breadcrumb */
    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: white;
        font-size: 0.875rem;
        margin-bottom: 1rem;
    }

    .breadcrumb a {
        color: white;
        text-decoration: none;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .breadcrumb a:hover {
        opacity: 1;
    }

    .breadcrumb-separator {
        opacity: 0.5;
    }
</style>

<!-- Page Header -->
<section class="page-header">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Breadcrumb -->
            <div class="breadcrumb justify-center mb-4">
                <a href="/">Home</a>
                <span class="breadcrumb-separator">›</span>
                <a href="{{ route('blog') }}">Blog</a>
                <span class="breadcrumb-separator">›</span>
                <span>
                    @if($category === 'sermons')
                        Sermons
                    @elseif($category === 'events')
                        Events
                    @elseif($category === 'pastors-desk')
                        Pastor's Desk
                    @endif
                </span>
            </div>

            @if($category === 'sermons')
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Weekly Sermon Recaps</h1>
                <p class="text-white/90 text-lg max-w-2xl mx-auto">
                    Catch up on recent Sunday sermons, key scriptures, and reflection questions for your spiritual journey.
                </p>
            @elseif($category === 'events')
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Upcoming Events & Announcements</h1>
                <p class="text-white/90 text-lg max-w-2xl mx-auto">
                    Stay informed about church events, services, and fellowship opportunities happening soon.
                </p>
            @elseif($category === 'pastors-desk')
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Pastor's Desk</h1>
                <p class="text-white/90 text-lg max-w-2xl mx-auto">
                    Reflections, insights, and biblical wisdom shared directly by our pastor.
                </p>
            @endif
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

            <!-- Example Post Card 1 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="/images/sample.jpg" alt="Sample Blog Post">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <span class="category-badge">
                        @if($category === 'sermons')
                            SERMON
                        @elseif($category === 'events')
                            EVENT
                        @elseif($category === 'pastors-desk')
                            REFLECTION
                        @endif
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sample Blog Post Title</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        A short excerpt or summary of the blog post goes here. It should be engaging and encourage the reader to click.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            Jan 15, 2024
                        </span>
                        <a href="#" class="blog-link">
                            Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Example Post Card 2 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="/images/sample2.jpg" alt="Another Blog Post">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <span class="category-badge">
                        @if($category === 'sermons')
                            SERMON
                        @elseif($category === 'events')
                            EVENT
                        @elseif($category === 'pastors-desk')
                            REFLECTION
                        @endif
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Another Post Title</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Another short summary of this blog entry goes here. Keep it concise and compelling.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            Jan 12, 2024
                        </span>
                        <a href="#" class="blog-link">
                            Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Example Post Card 3 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="/images/sample3.jpg" alt="Final Example Post">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <span class="category-badge">
                        @if($category === 'sermons')
                            SERMON
                        @elseif($category === 'events')
                            EVENT
                        @elseif($category === 'pastors-desk')
                            REFLECTION
                        @endif
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Final Example Post</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        This space will later be filled dynamically with content from your database.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            Jan 10, 2024
                        </span>
                        <a href="#" class="blog-link">
                            Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Example Post Card 4 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="/images/sample.jpg" alt="Fourth Post">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <span class="category-badge">
                        @if($category === 'sermons')
                            SERMON
                        @elseif($category === 'events')
                            EVENT
                        @elseif($category === 'pastors-desk')
                            REFLECTION
                        @endif
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Growing in Faith Daily</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Discover practical ways to deepen your relationship with God through daily spiritual practices.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            Jan 8, 2024
                        </span>
                        <a href="#" class="blog-link">
                            Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Example Post Card 5 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="/images/sample2.jpg" alt="Fifth Post">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <span class="category-badge">
                        @if($category === 'sermons')
                            SERMON
                        @elseif($category === 'events')
                            EVENT
                        @elseif($category === 'pastors-desk')
                            REFLECTION
                        @endif
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Community in Christ</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Exploring the importance of fellowship and how we can better support one another.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            Jan 5, 2024
                        </span>
                        <a href="#" class="blog-link">
                            Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Example Post Card 6 -->
            <article class="blog-card">
                <div class="blog-image">
                    <img src="/images/sample3.jpg" alt="Sixth Post">
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <span class="category-badge">
                        @if($category === 'sermons')
                            SERMON
                        @elseif($category === 'events')
                            EVENT
                        @elseif($category === 'pastors-desk')
                            REFLECTION
                        @endif
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Walking in Purpose</h3>
                    <p class="text-gray-600 mb-4 flex-grow">
                        Understanding God's calling for your life and stepping into your divine purpose.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar-alt mr-1"></i>
                            Jan 3, 2024
                        </span>
                        <a href="#" class="blog-link">
                            Read More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>

        </div>

        <!-- Pagination (for future implementation) -->
        <div class="mt-16 text-center">
            <div class="inline-flex gap-2">
                <button class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-gray-400 cursor-not-allowed">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg font-semibold">1</button>
                <button class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition">2</button>
                <button class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition">3</button>
                <button class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Back to Categories CTA -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center bg-gray-50 rounded-2xl p-10 border border-gray-100">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Explore Other Categories</h3>
            <p class="text-gray-600 mb-6">
                Discover more inspiring content across our other blog categories
            </p>
            <a href="{{ route('blog') }}" class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition gap-2">
                <i class="fas fa-arrow-left"></i>
                Back to Blog Home
            </a>
        </div>
    </div>
</section>

<script>
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, observerOptions);

    // Initialize blog cards with starting state
    document.querySelectorAll('.blog-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        observer.observe(card);
    });
</script>

@endsection