<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | TRC AGC Church</title>
    <meta name="description" content="@yield('description', 'TRC AGC Church - Fulfilling the Great Commandment and Great Commission of the Lord Jesus Christ')">

    <!-- Favicon - Church Logo -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('images/trcc-.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/trcc-.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/trcc-.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/trcc-.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/trcc-.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/trcc-.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/trcc-.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/trcc-.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Scripts -->
    @vite('resources/js/app.js')

    <!-- Instrument Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        .hero-pattern {
            background-color: #f9f9f9;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%236a0dad' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes wiggle {

            0%,
            100% {
                transform: rotate(-3deg);
            }

            50% {
                transform: rotate(3deg);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(147, 51, 234, 0.3);
            }

            50% {
                box-shadow: 0 0 40px rgba(147, 51, 234, 0.6);
            }
        }

        @keyframes sparkle {

            0%,
            100% {
                opacity: 0;
                transform: scale(0) rotate(0deg);
            }

            50% {
                opacity: 1;
                transform: scale(1) rotate(180deg);
            }
        }

        @keyframes rainbow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        .bounce-slow {
            animation: bounce-slow 4s ease-in-out infinite;
        }

        .wiggle {
            animation: wiggle 2s ease-in-out infinite;
        }

        .pulse-glow {
            animation: pulse-glow 3s ease-in-out infinite;
        }

        .sparkle {
            animation: sparkle 2s ease-in-out infinite;
        }

        .rainbow-text {
            background: linear-gradient(-45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4, #fcea2b, #ff9ff3, #54a0ff);
            background-size: 400% 400%;
            animation: rainbow 3s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .church-purple {
            color: #7c3aed;
        }

        .church-red {
            color: #dc2626;
        }

        .text-church-purple {
            color: #7c3aed;
        }

        .text-church-red {
            color: #dc2626;
        }

        .bg-church-purple {
            background-color: #7c3aed;
        }

        .bg-church-red {
            background-color: #dc2626;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .pulse-soft {
            animation: pulseSoft 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulseSoft {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .hero-overlay {
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.8) 0%, rgba(139, 69, 193, 0.6) 100%);
        }

        .section-divider {
            background: linear-gradient(90deg, transparent, #E5E7EB, transparent);
            height: 1px;
        }

        .elegant-gradient {
            background: linear-gradient(135deg, #6B46C1 0%, #8B5CF6 50%, #A855F7 100%);
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .elegant-border {
            position: relative;
        }

        .elegant-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #DC2626, #6B46C1, #8B5CF6);
            border-radius: 2px;
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .text-gradient {
            background: linear-gradient(135deg, #6B46C1, #DC2626);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .number-highlight {
            background: linear-gradient(135deg, #DC2626, #6B46C1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
        }
    </style>

    @yield('styles')
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Announcement Bar -->
    <div class="bg-gradient-to-r from-church-purple to-church-purple-light text-white text-center py-2 px-4">
        <p class="text-sm md:text-base">Join us this Sunday 10:00 AM for our worship service | <a href="{{ route('livestream') }}" class="hover:text-church-purple">Live Stream</a></p>
    </div>

    <!-- Header/Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="h-16 flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <a href="/">
                        <img src="{{ asset('images/trcc-.png') }}" alt="TRC Logo" class="h-20 w-auto object-contain max-h-full">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-gray-800 hover:text-church-purple font-medium transition">Home</a>
                    <a href="about" class="text-gray-800 hover:text-church-purple font-medium transition">About Us</a>
                    <a href="ministries" class="text-gray-800 hover:text-church-purple font-medium transition">Ministries</a>
                    <a href="events" class="text-gray-800 hover:text-church-purple font-medium transition">Events</a>
                    <a href="contact" class="text-gray-800 hover:text-church-purple font-medium transition">Contact</a>
                    <a href="blog" class="text-gray-800 hover:text-church-purple font-medium transition">Blog</a>


                </nav>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="donate" class="bg-church-red hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md transition">Partner With Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-toggle" class="text-gray-600 hover:text-church-purple focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4">
                <a href="/" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Home</a>
                <a href="about" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">About Us</a>
                <a href="ministries" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Ministries</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Events</a>
                <a href="contact" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Contact</a>
                <a href="donate" class="mt-3 block text-center bg-church-red hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md transition">Partner With Us</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- About Column -->
                <div>
                    <h3 class="text-xl font-bold mb-4">TRC AGC Church</h3>
                    <p class="text-gray-400 mb-4">The Whole Church taking the Whole Gospel to the Whole World.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-church-red transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-white hover:text-church-red transition">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="#" class="text-white hover:text-church-red transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white hover:text-church-red transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="about" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="ministries" class="text-gray-400 hover:text-white transition">Ministries</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Events</a></li>
                        <li><a href="contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Service Times -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Service Times</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Sunday Worship: 10:00 AM - 12:00 AM</li>
                        <li>Sunday School: 11:15 AM</li>
                        <li>Wednesday Bible Study: 8:30 PM - 9:30 PM</li>
                        <li>Youth Group: Friday, 8:30 PM</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>Kasarani Group of Schools<br>
                                icipe Road, Nairobi, Kenya</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            <span>+254 791 049004</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>thikaroadagc@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-6 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Thika Road Connect AGC. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="fixed bottom-6 right-6 bg-church-purple hover:bg-church-purple-light text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition opacity-0 z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });

        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.style.opacity = '1';
            } else {
                scrollToTopBtn.style.opacity = '0';
            }
        });
    </script>

    @yield('scripts')
</body>

</html>