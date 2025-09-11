@extends('layouts.app')

@section('title', 'Discipleship Ministry')

@section('description', 'Join our Discipleship Ministry at TRC AGC Church - Bible Study, Cell Groups, and Catechism Classes to grow in your faith journey.')

@section('styles')
<style>
    .ministry-card {
        background: linear-gradient(135deg, rgba(124, 58, 237, 0.05) 0%, rgba(220, 38, 38, 0.05) 100%);
        border-left: 4px solid #7c3aed;
        transition: all 0.3s ease;
    }
    
    .ministry-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(124, 58, 237, 0.15);
        border-left-color: #dc2626;
    }

    .icon-circle {
        background: linear-gradient(135deg, #7c3aed, #dc2626);
        animation: pulse-glow 3s ease-in-out infinite;
    }

    .form-input:focus {
        border-color: #7c3aed;
        box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
    }

    .baptism-form {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(249, 250, 251, 0.98));
        backdrop-filter: blur(10px);
    }

    .section-header {
        position: relative;
        padding-bottom: 10px;
    }

    .section-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #7c3aed, #dc2626);
        border-radius: 2px;
    }

    .timeline-item {
        position: relative;
        padding-left: 30px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 8px;
        width: 12px;
        height: 12px;
        background: #7c3aed;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(124, 58, 237, 0.3);
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-600 via-purple-700 to-red-600 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="hero-pattern opacity-10"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="float-animation mb-6">
                <div class="icon-circle w-20 h-20 mx-auto rounded-full flex items-center justify-center">
                    <i class="fas fa-users text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Discipleship <span class="text-yellow-300">Ministry</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 leading-relaxed">
                Growing Together in Faith, Knowledge, and Community
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#bible-study" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                    Join Bible Study
                </a>
                <a href="#baptism" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">
                    Request Baptism
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Ministry Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 section-header">Our Discipleship Programs</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We offer comprehensive discipleship programs designed to help you grow in your relationship with Christ and serve His kingdom effectively.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Bible Study Card -->
            <div class="ministry-card p-8 rounded-xl card-hover">
                <div class="text-center mb-6">
                    <div class="icon-circle w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-bible text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-church-purple mb-2">Bible Study</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Join our weekly Bible study sessions where we dive deep into God's Word, exploring its relevance to our daily lives and growing in understanding together.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="timeline-item">
                        <strong class="text-church-purple">When:</strong> Every Wednesday
                    </div>
                    <div class="timeline-item">
                        <strong class="text-church-purple">Time:</strong> 8:30 PM - 9:30 PM
                    </div>
                    <div class="timeline-item">
                        <strong class="text-church-purple">Format:</strong> Interactive Discussion
                    </div>
                </div>
                <a href="#bible-study" class="inline-block bg-church-purple text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition transform hover:scale-105">
                    Learn More
                </a>
            </div>

            <!-- Cell Groups Card -->
            <div class="ministry-card p-8 rounded-xl card-hover">
                <div class="text-center mb-6">
                    <div class="icon-circle w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-home text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-church-red mb-2">Cell Groups</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Experience intimate fellowship and spiritual growth in small group settings. Our cell groups provide a supportive environment for prayer, study, and community.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="timeline-item">
                        <strong class="text-church-red">Format:</strong> Small Groups
                    </div>
                    <div class="timeline-item">
                        <strong class="text-church-red">Focus:</strong> Fellowship & Growth
                    </div>
                    <div class="timeline-item">
                        <strong class="text-church-red">Locations:</strong> Coming Soon
                    </div>
                </div>
                <button class="inline-block bg-church-red text-white px-6 py-3 rounded-lg hover:bg-red-700 transition opacity-75 cursor-not-allowed">
                    Locations Coming Soon
                </button>
            </div>

            <!-- Catechism Classes Card -->
            <div class="ministry-card p-8 rounded-xl card-hover">
                <div class="text-center mb-6">
                    <div class="icon-circle w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-church-purple mb-2">Catechism Classes</h3>
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Prepare for baptism and deepen your understanding of Christian doctrine through our comprehensive catechism classes led by experienced teachers.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="timeline-item">
                        <strong class="text-church-purple">Purpose:</strong> Baptism Preparation
                    </div>
                    <div class="timeline-item">
                        <strong class="text-church-purple">Content:</strong> Christian Doctrine
                    </div>
                    <div class="timeline-item">
                        <strong class="text-church-purple">Outcome:</strong> Water Baptism
                    </div>
                </div>
                <a href="#baptism" class="inline-block bg-church-purple text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition transform hover:scale-105">
                    Apply for Baptism
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bible Study Section -->
<section id="bible-study" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 section-header">Wednesday Bible Study</h2>
                <p class="text-xl text-gray-600">
                    Join us every Wednesday evening for an enriching study of God's Word
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-church-purple to-church-red p-8 text-white text-center">
                    <h3 class="text-3xl font-bold mb-4">Weekly Bible Study Sessions</h3>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bounce-slow">
                            <i class="fas fa-clock text-4xl mb-2"></i>
                            <h4 class="text-xl font-semibold mb-2">Time</h4>
                            <p class="text-lg">Every Wednesday<br>8:30 PM - 9:30 PM</p>
                        </div>
                        <div class="bounce-slow" style="animation-delay: 0.5s;">
                            <i class="fas fa-link text-4xl mb-2"></i>
                            <h4 class="text-xl font-semibold mb-2">Join Online</h4>
                            <p class="text-lg">Click the link below to join<br>our virtual Bible study</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">What to Expect</h4>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-church-purple text-xl mt-1"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Interactive Discussion</h5>
                                    <p class="text-gray-600">Engage with fellow believers in meaningful conversations</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-church-purple text-xl mt-1"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Deep Scripture Study</h5>
                                    <p class="text-gray-600">Explore the Bible verse by verse with context</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-church-purple text-xl mt-1"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Prayer Time</h5>
                                    <p class="text-gray-600">End each session with prayer and fellowship</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="fas fa-check-circle text-church-purple text-xl mt-1"></i>
                                <div>
                                    <h5 class="font-semibold text-gray-800">All Welcome</h5>
                                    <p class="text-gray-600">Open to all believers, regardless of experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <a href="#" class="inline-block bg-church-purple text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-purple-700 transition transform hover:scale-105 pulse-glow">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Join Bible Study Link
                        </a>
                        <p class="mt-4 text-gray-600">
                            Link will be activated 15 minutes before each session
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cell Groups Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 section-header">Cell Groups</h2>
            <p class="text-xl text-gray-600 mb-12">
                Intimate fellowship groups for spiritual growth and community building
            </p>
            
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-12 shadow-lg">
                <div class="float-animation mb-8">
                    <i class="fas fa-map-marked-alt text-6xl text-church-red"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-6">Locations Coming Soon</h3>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    We're currently organizing cell groups in different locations around Kasarani and neighboring areas. 
                    These small group gatherings will provide opportunities for deeper fellowship, prayer, and spiritual growth 
                    in a more intimate setting.
                </p>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div class="text-left">
                        <h4 class="text-xl font-bold text-church-red mb-3">What Cell Groups Offer:</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-heart text-church-red mr-3"></i>
                                Personal spiritual growth
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-hands-helping text-church-red mr-3"></i>
                                Mutual support and care
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-pray text-church-red mr-3"></i>
                                Group prayer and worship
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-book-open text-church-red mr-3"></i>
                                Bible study and discussion
                            </li>
                        </ul>
                    </div>
                    <div class="text-left">
                        <h4 class="text-xl font-bold text-church-red mb-3">Benefits of Joining:</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-users text-church-red mr-3"></i>
                                Build lasting friendships
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-seedling text-church-red mr-3"></i>
                                Accelerated spiritual growth
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-shield-alt text-church-red mr-3"></i>
                                Accountability and encouragement
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-home text-church-red mr-3"></i>
                                Sense of belonging
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-church-red text-white p-6 rounded-xl">
                    <h4 class="text-xl font-bold mb-3">Stay Informed</h4>
                    <p class="mb-4">
                        Be the first to know when cell group locations are announced. 
                        Contact us to express your interest and preferred area.
                    </p>
                    <a href="mailto:thikaroadagc@gmail.com" class="inline-block bg-white text-church-red px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-envelope mr-2"></i>
                        Express Interest
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Baptism Application Section -->
<section id="baptism" class="py-16 bg-gradient-to-br from-purple-50 to-red-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 section-header">Catechism & Baptism Application</h2>
                <p class="text-xl text-gray-600">
                    Take the next step in your faith journey through baptism preparation
                </p>
            </div>

            <div class="baptism-form rounded-2xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <div class="float-animation">
                        <i class="fas fa-water text-5xl text-church-purple mb-4"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-4">Application for Baptism</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Baptism is a public declaration of your faith and commitment to follow Jesus Christ. 
                        Our catechism classes will prepare you for this important step in your spiritual journey.
                    </p>
                </div>

                <form class="space-y-6" method="POST" action="#">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                First Name *
                            </label>
                            <input type="text" id="first_name" name="first_name" required
                                   class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Last Name *
                            </label>
                            <input type="text" id="last_name" name="last_name" required
                                   class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                Phone Number *
                            </label>
                            <input type="tel" id="phone" name="phone" required
                                   class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="age" class="block text-sm font-semibold text-gray-700 mb-2">
                                Age *
                            </label>
                            <input type="number" id="age" name="age" min="12" required
                                   class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                        </div>
                        <div>
                            <label for="gender" class="block text-sm font-semibold text-gray-700 mb-2">
                                Gender *
                            </label>
                            <select id="gender" name="gender" required
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                            Address *
                        </label>
                        <textarea id="address" name="address" rows="3" required
                                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition"
                                  placeholder="Please provide your full address"></textarea>
                    </div>

                    <div>
                        <label for="salvation_experience" class="block text-sm font-semibold text-gray-700 mb-2">
                            Please share your salvation experience *
                        </label>
                        <textarea id="salvation_experience" name="salvation_experience" rows="4" required
                                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition"
                                  placeholder="Tell us about when and how you accepted Jesus Christ as your Lord and Savior"></textarea>
                    </div>

                    <div>
                        <label for="baptism_reason" class="block text-sm font-semibold text-gray-700 mb-2">
                            Why do you want to be baptized? *
                        </label>
                        <textarea id="baptism_reason" name="baptism_reason" rows="4" required
                                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition"
                                  placeholder="Explain your motivation for water baptism"></textarea>
                    </div>

                    <div>
                        <label for="church_attendance" class="block text-sm font-semibold text-gray-700 mb-2">
                            How long have you been attending TRC AGC Church? *
                        </label>
                        <select id="church_attendance" name="church_attendance" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition">
                            <option value="">Select Duration</option>
                            <option value="less_than_3_months">Less than 3 months</option>
                            <option value="3_to_6_months">3 to 6 months</option>
                            <option value="6_months_to_1_year">6 months to 1 year</option>
                            <option value="more_than_1_year">More than 1 year</option>
                            <option value="first_time">This is my first time</option>
                        </select>
                    </div>

                    <div>
                        <label for="previous_baptism" class="block text-sm font-semibold text-gray-700 mb-2">
                            Have you been baptized before? *
                        </label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="previous_baptism" value="no" required class="text-church-purple mr-3">
                                <span>No, this will be my first baptism</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="previous_baptism" value="yes" required class="text-church-purple mr-3">
                                <span>Yes, I have been baptized before</span>
                            </label>
                        </div>
                    </div>

                    <div id="previous_baptism_details" class="hidden">
                        <label for="baptism_details" class="block text-sm font-semibold text-gray-700 mb-2">
                            Please provide details about your previous baptism
                        </label>
                        <textarea id="baptism_details" name="baptism_details" rows="3"
                                  class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition"
                                  placeholder="When and where were you baptized? Why are you seeking baptism again?"></textarea>
                    </div>

                    <div>
                        <label for="emergency_contact" class="block text-sm font-semibold text-gray-700 mb-2">
                            Emergency Contact Name & Phone *
                        </label>
                        <input type="text" id="emergency_contact" name="emergency_contact" required
                               class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition"
                               placeholder="Name and phone number of emergency contact">
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="text-lg font-bold text-gray-800 mb-3">
                            <i class="fas fa-info-circle text-church-purple mr-2"></i>
                            What Happens Next?
                        </h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-check text-church-purple mr-3 mt-1"></i>
                                Our pastoral team will review your application
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-church-purple mr-3 mt-1"></i>
                                You'll be contacted to schedule a meeting with a pastor
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-church-purple mr-3 mt-1"></i>
                                Attend catechism classes to prepare for baptism
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-church-purple mr-3 mt-1"></i>
                                Participate in water baptism ceremony
                            </li>
                        </ul>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" required class="text-church-purple mr-3">
                        <label for="terms" class="text-sm text-gray-700">
                            I understand that baptism is a public declaration of my faith in Jesus Christ and commitment to follow Him. I agree to attend the required catechism classes. *
                        </label>
                    </div>

                    <div class="text-center pt-6">
                        <button type="submit" class="bg-gradient-to-r from-church-purple to-church-red text-white px-12 py-4 rounded-full font-bold text-lg hover:shadow-lg transition transform hover:scale-105 pulse-glow">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Submit Application
                        </button>
                        <p class="mt-4 text-sm text-gray-600">
                            All fields marked with * are required
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Questions About Discipleship?</h2>
            <p class="text-xl mb-8 text-gray-300">
                Our pastoral team is here to help guide you in your faith journey
            </p>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="card-hover bg-gray-800 p-6 rounded-xl">
                    <i class="fas fa-phone text-3xl text-church-purple mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Call Us</h3>
                    <p class="text-gray-300 mb-4">Speak directly with our pastoral team</p>
                    <a href="tel:+254791049004" class="text-church-purple hover:text-purple-300 font-semibold">
                        +254 791 049004
                    </a>
                </div>
                <div class="card-hover bg-gray-800 p-6 rounded-xl">
                    <i class="fas fa-envelope text-3xl text-church-red mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Email Us</h3>
                    <p class="text-gray-300 mb-4">Send us your questions or concerns</p>
                    <a href="mailto:thikaroadagc@gmail.com" class="text-church-red hover:text-red-300 font-semibold">
                        thikaroadagc@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show/hide previous baptism details
        const previousBaptismRadios = document.querySelectorAll('input[name="previous_baptism"]');
        const previousBaptismDetails = document.getElementById('previous_baptism_details');
        const baptismDetailsTextarea = document.getElementById('baptism_details');

        previousBaptismRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    previousBaptismDetails.classList.remove('hidden');
                    baptismDetailsTextarea.required = true;
                } else {
                    previousBaptismDetails.classList.add('hidden');
                    baptismDetailsTextarea.required = false;
                    baptismDetailsTextarea.value = '';
                }
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form validation and submission
        const baptismForm = document.querySelector('form');
        if (baptismForm) {
            baptismForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                const requiredFields = baptismForm.querySelectorAll('[required]');
                let isValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.style.borderColor = '#dc2626';
                    } else {
                        field.style.borderColor = '#d1d5db';
                    }
                });

                if (isValid) {
                    // Show success message (you can replace this with actual form submission)
                    alert('Thank you for your baptism application! Our pastoral team will contact you soon.');
                    baptismForm.reset();
                } else {
                    alert('Please fill in all required fields.');
                }
            });
        }

        // Add floating animation delay to cards
        const cards = document.querySelectorAll('.ministry-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.2}s`;
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.ministry-card, .baptism-form').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    });

    // Add some interactive effects
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
            this.parentElement.style.transition = 'transform 0.2s ease';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });
</script>
@endsection