<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | TRC AGC Church</title>
    <meta name="description" content="@yield('description', 'TRC AGC Church - Fulfilling the Great Commandment and Great Commission of the Lord Jesus Christ')">

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

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    
    @yield('styles')
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Announcement Bar -->
    <div class="bg-church-purple text-white text-center py-2 px-4">
        <p class="text-sm md:text-base">Join us this Sunday 10:00 AM for our worship service | <a href="#" class="underline hover:text-church-red transition">Live Stream</a></p>
    </div>

    <!-- Header/Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="../images/TRC.png" alt="TRC Logo" class="h-10 w-auto">
                    <div class="text-church-purple text-3xl font-bold">
                        <a href="/">TRC AGC</a>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="/" class="text-gray-800 hover:text-church-purple font-medium transition">Home</a>

                    <!-- About Dropdown -->
                    <div class="dropdown relative">
                        <button class="text-gray-800 hover:text-church-purple font-medium transition flex items-center">
                            About
                            <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-10">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Our History</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mission & Vision</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Leadership</a>
                        </div>
                    </div>

                    <!-- Ministries Dropdown -->
                    <div class="dropdown relative">
                        <button class="text-gray-800 hover:text-church-purple font-medium transition flex items-center">
                            Ministries
                            <svg class="h-4 w-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu hidden absolute left-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-10">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Children</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Youth</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Community Outreach</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Education</a>
                        </div>
                    </div>

                    <a href="#" class="text-gray-800 hover:text-church-purple font-medium transition">Events</a>
                    <a href="#" class="text-gray-800 hover:text-church-purple font-medium transition">Blog</a>
                    <a href="#" class="text-gray-800 hover:text-church-purple font-medium transition">Contact</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#" class="bg-church-red hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md transition">Donate Now</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-600 hover:text-church-purple focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4">
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Home</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">About</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Ministries</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Events</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Blog</a>
                <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-gray-100">Contact</a>
                <a href="#" class="mt-3 block text-center bg-church-red hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md transition">Donate Now</a>
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
                            <i class="fab fa-twitter"></i>
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
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Ministries</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Sermons</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Service Times -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Service Times</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Sunday Worship: 9:00 AM & 11:00 AM</li>
                        <li>Sunday School: 10:15 AM</li>
                        <li>Wednesday Bible Study: 7:00 PM</li>
                        <li>Youth Group: Friday, 6:30 PM</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>123 Church Street, City, Country</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            <span>+123 456 7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>info@trcagc.org</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-6 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} TRC AGC Church. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="fixed bottom-6 right-6 bg-church-purple hover:bg-church-purple-light text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition opacity-0 z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
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