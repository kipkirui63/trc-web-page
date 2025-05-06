@extends('layouts.app')

@section('title', 'Donate & Giving')

@section('description', 'Support the mission of TRC AGC Church through your generous giving')

@section('content')
<!-- Hero Section -->
<section class="relative">
    <div class="bg-gradient-to-r from-church-purple to-church-purple-light text-white py-20 md:py-32">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">Give to Support Our Mission</h1>
                <p class="text-lg md:text-xl mb-6">Your generosity helps us take the Whole Gospel to the Whole World</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#giving-options" class="bg-white text-church-purple hover:bg-gray-100 font-medium py-3 px-6 rounded-md transition text-center">Ways to Give</a>
                    <a href="#mpesa-section" class="bg-church-red hover:bg-red-600 text-white font-medium py-3 px-6 rounded-md transition text-center">Give via M-Pesa</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Support Section -->
<section id="mission-support" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">Supporting Global Missions</h2>
            <p class="text-lg text-gray-600">Taking the Whole Gospel to the Whole World</p>
            <div class="w-20 h-1 bg-church-red mx-auto mt-2"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
            <!-- Mission Impact -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-church-purple mb-4">Your Mission Giving Makes a Difference</h3>
                <p class="text-gray-700 mb-4">At TRC AGC Church, we are committed to fulfilling the Great Commission by supporting mission work locally and globally. Your generous donations to missions enable us to:</p>
                <ul class="list-disc pl-5 space-y-2 text-gray-700 mb-6">
                    <li>Send and sustain missionaries in unreached regions</li>
                    <li>Fund Bible translation projects in indigenous languages</li>
                    <li>Support church planting initiatives in strategic locations</li>
                    <li>Provide humanitarian aid alongside Gospel ministry</li>
                    <li>Train and equip local leaders for evangelism and discipleship</li>
                    <li>Maintain mission bases and ministry centers in key regions</li>
                </ul>
                <p class="italic text-gray-600">"And this gospel of the kingdom will be proclaimed throughout the whole world as a testimony to all nations, and then the end will come." - Matthew 24:14</p>
            </div>

            <!-- How to Support -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-church-purple mb-4">Ways to Support Our Mission Work</h3>
                
                <div class="mb-6">
                    <h4 class="font-bold text-gray-800 mb-2">Regular Mission Giving</h4>
                    <p class="text-gray-700 mb-3">We encourage regular, faithful giving to missions as part of your stewardship. You can designate your mission offering through:</p>
                    <ul class="list-disc pl-5 text-gray-700 mb-3">
                        <li><span class="font-bold">M-Pesa:</span> Use Account Number <span class="font-bold">3</span> for Missions</li>
                        <li><span class="font-bold">Monthly Pledges:</span> Commit to regular mission support</li>
                        <li><span class="font-bold">Sunday Offering:</span> Mark your envelope "Missions"</li>
                    </ul>
                    <p class="text-sm text-gray-600 italic">100% of mission designated funds go directly to field operations and missionary support.</p>
                </div>
                
                <div class="mb-6">
                    <h4 class="font-bold text-gray-800 mb-2">Special Mission Projects</h4>
                    <p class="text-gray-700 mb-3">Throughout the year, we highlight specific mission projects that need funding:</p>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Mission field equipment and resources</li>
                        <li>Church building projects in developing nations</li>
                        <li>Crisis response and humanitarian aid</li>
                        <li>Mission training scholarships</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-gray-800 mb-2">Mission Accountability</h4>
                    <p class="text-gray-700">We provide quarterly mission reports to our congregation detailing how mission funds are being used. We believe in transparency and faithful stewardship of every shilling given for God's work.</p>
                </div>
            </div>
        </div>
        
        <!-- Scripture and Call to Action -->
        <div class="mt-12 max-w-3xl mx-auto">
            <div class="bg-church-purple-light rounded-lg p-8 text-white text-center">
                <p class="text-lg italic mb-4">"How beautiful are the feet of those who preach the good news!" - Romans 10:15</p>
                <p class="mb-6">Your giving enables feet to carry the Good News to the ends of the earth.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#mpesa-section" class="bg-white text-church-purple hover:bg-gray-100 font-medium py-3 px-6 rounded-md transition">Give to Missions Now</a>
                    <a href="mailto:missions@trcchurch.org" class="bg-church-red hover:bg-red-600 text-white font-medium py-3 px-6 rounded-md transition">Contact Mission Office</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Giving Options -->
<section id="giving-options" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">Ways to Give</h2>
            <p class="text-lg text-gray-600">Support our ministry through these convenient giving options</p>
            <div class="w-20 h-1 bg-church-red mx-auto mt-2"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-3xl mx-auto">
            <!-- Option 1 -->
            <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-16 h-16 rounded-full bg-church-purple flex items-center justify-center text-white text-2xl mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Mobile Money (M-Pesa)</h3>
                    <p class="text-gray-600 mb-4">Give easily using our M-Pesa Paybill number from anywhere, anytime.</p>
                
                </div>
            </div>

            <!-- Option 2 -->
            <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                <div class="p-6">
                    <div class="w-16 h-16 rounded-full bg-church-purple flex items-center justify-center text-white text-2xl mb-4">
                        <i class="fas fa-church"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sunday Service</h3>
                    <p class="text-gray-600 mb-4">Give during our regular Sunday service when the offering basket is passed.</p>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- M-Pesa Section -->
<section id="mpesa-section" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">Give via M-Pesa</h2>
            <div class="w-20 h-1 bg-church-red mx-auto"></div>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 p-6 md:p-8">
                        <h3 class="text-xl font-bold mb-4">How to Give via M-Pesa</h3>
                        <ol class="list-decimal pl-5 mb-6 space-y-2 text-gray-700">
                            <li>Go to M-Pesa on your phone</li>
                            <li>Select "Lipa na M-Pesa"</li>
                            <li>Select "Pay Bill"</li>
                            <li>Enter Business Number: <span class="font-bold">404953</span></li>
                            <li>Enter Account Number according to what you are giving:
                                <ul class="list-disc pl-5 mt-2 ml-3 text-gray-600">
                                    <li><span class="font-medium">1</span> - Tithe</li>
                                    <li><span class="font-medium">2</span> - Offering</li>
                                    <li><span class="font-medium">3</span> - Missions</li>
                                    <li><span class="font-medium">4</span> - Other (indicate reason)</li>
                                </ul>
                            </li>
                            <li>Enter Amount</li>
                            <li>Enter your M-Pesa PIN</li>
                            <li>Confirm and Send</li>
                        </ol>
                        <p class="text-gray-700 mb-2">If you need a receipt or have any questions about your donation, please contact our finance office at <a href="mailto:finance@trcchurch.org" class="text-church-purple hover:underline">finance@trcchurch.org</a> or call <a href="tel:+254123456789" class="text-church-purple hover:underline">+254 123 456 789</a>.</p>
                    </div>
                    <div class="md:w-1/2 bg-gray-50 p-6 md:p-8 flex flex-col justify-center">
                        <div class="mb-6 bg-green-500 rounded-lg p-4 text-center text-white">
                            <p class="text-lg font-bold mb-2">M-Pesa Paybill Number</p>
                            <div class="bg-white rounded p-3">
                                <p class="text-gray-800 text-2xl font-bold tracking-widest">404953</p>
                            </div>
                        </div>
                        
                        <div class="bg-gray-800 rounded-lg p-4 text-white">
                            <p class="font-bold mb-2">TRC PAYBILL SERVICE</p>
                            <p class="mb-1">Enter <span class="text-yellow-300 font-medium">ACCOUNT NUMBER</span> according to what you are giving for:</p>
                            <ol class="list-decimal pl-5 mb-2 text-sm">
                                <li>Tithe</li>
                                <li>Offering</li>
                                <li>Missions</li>
                                <li>Other: indicate reason for giving</li>
                            </ol>
                            <p class="text-xs italic text-yellow-100">Example: For Instruments, chairs, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why We Give -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-church-purple mb-2">Why We Give</h2>
            <div class="w-20 h-1 bg-church-red mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">Our Biblical Foundation</h3>
                <p class="text-gray-700 mb-4">At TRC AGC Church, we believe that giving is an act of worship and obedience to God. The Bible teaches us to give cheerfully and generously (2 Corinthians 9:7), to tithe from our income (Malachi 3:10), and to support the work of ministry (1 Corinthians 9:14).</p>
                <p class="text-gray-700">Through your faithful giving, you participate in God's work of taking the Whole Gospel to the Whole World, as we fulfill our mission together.</p>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4">Your Impact</h3>
                <p class="text-gray-700 mb-4">Your generous support enables us to:</p>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Support our church ministries and operations</li>
                    <li>Fund community outreach programs</li>
                    <li>Build and maintain schools for underprivileged children</li>
                    <li>Support missionaries locally and globally</li>
                    <li>Provide care for those in need in our community</li>
                    <li>Develop educational programs for youth and adults</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Scripture Quote -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <p class="italic text-lg text-gray-700">"Bring all the tithes...so that the servants (who have no allotment or inheritance of their own), and the foreigners, the fatherless and the widows who live in your towns may come and eat and be satisfied, and so that the LORD your God may bless you in all the work of your hands."</p>
            <p class="mt-2 font-medium text-church-purple">Deuteronomy 14:28-29</p>
        </div>
    </div>
</section>

@endsection