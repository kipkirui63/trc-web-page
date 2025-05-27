@extends('layouts.app')

@section('title', 'About Us - TRC AGC Church')

@section('description', 'Learn about TRC AGC Church - our story, mission, vision, core values, and leadership team')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background with parallax effect -->
    <div class="absolute inset-0 z-0">
        <img src="/api/placeholder/1920/1080" alt="Church community gathering" class="w-full h-full object-cover scale-110" />
        <div class="absolute inset-0 bg-gradient-to-br from-church-purple/80 via-church-purple/60 to-black/40"></div>
    </div>

    <!-- Floating elements -->
    <div class="absolute top-20 left-10 w-20 h-20 rounded-full bg-white/10 backdrop-blur-sm animate-float"></div>
    <div class="absolute bottom-32 right-16 w-16 h-16 rounded-full bg-church-red/20 backdrop-blur-sm animate-float-delayed"></div>
    <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-white/5 backdrop-blur-sm animate-float-slow"></div>

    <!-- Content -->
    <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
                About Us
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
            <p class="text-xl md:text-2xl mb-8 font-light leading-relaxed">
                Discover our story, our heart, and our commitment to serving God and community
            </p>
        </div>
        
        <div class="flex justify-center space-x-2 animate-bounce">
            <div class="w-2 h-2 bg-white rounded-full"></div>
            <div class="w-2 h-2 bg-white/70 rounded-full"></div>
            <div class="w-2 h-2 bg-white/40 rounded-full"></div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-church-purple rounded-full -translate-x-48 -translate-y-48"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-church-red rounded-full translate-x-40 translate-y-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Story</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Born from a vision to transform lives and communities through the love of Christ
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100">
                        <h3 class="text-2xl font-bold text-church-purple mb-6">A Journey of Faith</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            TRC AGC Church began as a small gathering of believers with a big dream - to see lives transformed by the power of God's love. What started as intimate fellowship meetings has grown into a vibrant community that spans generations and cultures.
                        </p>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Our journey has been marked by God's faithfulness, from our humble beginnings to becoming a beacon of hope in our community. Every step has been guided by our commitment to authentic worship, genuine fellowship, and passionate service.
                        </p>
                        <div class="flex items-center text-church-purple font-semibold">
                            <i class="fas fa-heart mr-2"></i>
                            <span>Transforming lives since our founding</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="/api/placeholder/600/400" alt="Church history" class="w-full h-80 object-cover rounded-2xl shadow-2xl" />
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-church-red rounded-full flex items-center justify-center text-white text-3xl shadow-xl">
                            <i class="fas fa-church"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-20 w-32 h-32 border-4 border-church-purple rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 border-4 border-church-red rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 border-4 border-church-purple rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Leadership</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Meet the passionate leaders who guide our church family with wisdom, love, and dedication
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Lead Pastor -->
            <div class="mb-16">
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                    <div class="lg:flex">
                        <div class="lg:w-1/3 relative">
                            <img src="/api/placeholder/400/500" alt="Rev. Ernest Korir" class="w-full h-80 lg:h-full object-cover" />
                            <div class="absolute inset-0 bg-gradient-to-t from-church-purple/20 to-transparent"></div>
                        </div>
                        <div class="lg:w-2/3 p-8 lg:p-12">
                            <div class="mb-6">
                                <span class="inline-block bg-church-red text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">Lead Pastor</span>
                                <h3 class="text-3xl font-bold text-church-purple mb-2">Rev. Ernest Korir</h3>
                                <p class="text-gray-600 text-lg">Senior Pastor & Visionary Leader</p>
                            </div>
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Rev. Ernest Korir serves as our Lead Pastor with a heart for God's people and a vision for community transformation. His passionate preaching and compassionate leadership have been instrumental in guiding our church's growth and spiritual development.
                            </p>
                            <p class="text-gray-700 mb-6 leading-relaxed">
                                With years of ministry experience and a deep commitment to Biblical truth, Reverend Ernest leads with both wisdom and humility, inspiring our congregation to live out their faith authentically.
                            </p>
                            <div class="flex items-center space-x-4 text-church-purple">
                                <div class="flex items-center">
                                    <i class="fas fa-bible mr-2"></i>
                                    <span class="text-sm">Biblical Teaching</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users mr-2"></i>
                                    <span class="text-sm">Community Building</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-pray mr-2"></i>
                                    <span class="text-sm">Spiritual Guidance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Pastors -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Rev. Ann Korir -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Rev. Ann Korir" class="w-full h-64 object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block bg-church-purple text-white px-3 py-1 rounded-full text-sm font-semibold">Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-church-purple mb-2">Rev. Ann Korir</h3>
                        <p class="text-gray-600 mb-4">Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Rev. Ann Korir serves faithfully under the leadership of our Lead Pastor. She brings a heart of compassion and excellence to her ministry, serving our church community with grace and wisdom.
                        </p>
                        <div class="flex items-center space-x-3 text-church-purple text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-pray mr-1"></i>
                                <span>Ministry</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-heart mr-1"></i>
                                <span>Pastoral Care</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pastor Vince -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative">
                        <img src="/api/placeholder/400/300" alt="Pastor Vince" class="w-full h-64 object-cover" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="inline-block bg-church-red text-white px-3 py-1 rounded-full text-sm font-semibold">Pastor</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-church-purple mb-2">Pastor Vince</h3>
                        <p class="text-gray-600 mb-4">Pastor</p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pastor Vince serves with enthusiasm and dedication under our Lead Pastor's guidance. He brings a vibrant approach to ministry and connects with people of all ages and backgrounds in our church community.
                        </p>
                        <div class="flex items-center space-x-3 text-church-purple text-sm">
                            <div class="flex items-center">
                                <i class="fas fa-users mr-1"></i>
                                <span>Ministry</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-hands-helping mr-1"></i>
                                <span>Community</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Vision</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-gradient-to-br from-church-purple to-purple-800 rounded-3xl shadow-2xl p-8 lg:p-12 text-white text-center mb-12">
                <h3 class="text-3xl lg:text-4xl font-bold mb-6">"The Whole Church taking the Whole Gospel to the Whole World"</h3>
                <p class="text-xl opacity-90 leading-relaxed">
                    We envision a vibrant, growing community of believers who are transformed by God's love and are actively sharing that love with others. Our vision encompasses spiritual growth, community impact, and global outreach.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-church-purple to-purple-600 flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-church"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-church-purple">The Whole Church</h3>
                    <p class="text-gray-600 leading-relaxed">Every believer equipped and mobilized for ministry, using their unique gifts to serve God's kingdom</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-church-red to-red-600 flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-church-purple">The Whole Gospel</h3>
                    <p class="text-gray-600 leading-relaxed">The complete message of Christ that transforms every area of life - spiritual, emotional, and physical</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-church-purple">The Whole World</h3>
                    <p class="text-gray-600 leading-relaxed">Reaching all people groups locally and globally with Christ's transforming love</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Mission</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-12 mb-12 border border-gray-100">
                <p class="text-lg text-gray-700 mb-8 leading-relaxed text-center">
                    The purpose of the Africa Gospel Church is to fulfill the Great Commandment and Great Commission of the Lord Jesus Christ according to the Great Plan (Mark 12:30-31, Matthew 28:19-20, Acts 1:8).
                </p>
                
                <div class="grid lg:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-church-purple/5 to-purple-50 p-6 rounded-2xl border-l-4 border-church-purple">
                        <h3 class="text-xl font-bold mb-3 text-church-purple">The Great Commandment</h3>
                        <p class="text-gray-600 italic mb-2">"Love the Lord your God with all your heart and with all your soul and with all your mind and with all your strength... Love your neighbor as yourself."</p>
                        <p class="text-sm text-gray-500">- Mark 12:30-31</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-church-red/5 to-red-50 p-6 rounded-2xl border-l-4 border-church-red">
                        <h3 class="text-xl font-bold mb-3 text-church-purple">The Great Commission</h3>
                        <p class="text-gray-600 italic mb-2">"Go and make disciples of all nations, baptizing them... and teaching them to obey everything I have commanded you."</p>
                        <p class="text-sm text-gray-500">- Matthew 28:19-20</p>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Mission Focus Cards -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-church-purple to-purple-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-pray"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Worship</h3>
                        <p class="text-gray-600 leading-relaxed">To celebrate God's presence through dynamic, authentic worship that honors Him</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-church-red to-red-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Fellowship</h3>
                        <p class="text-gray-600 leading-relaxed">To create a loving community where people are connected and grow together</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Discipleship</h3>
                        <p class="text-gray-600 leading-relaxed">To equip believers to mature in faith and live Christ-centered lives</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Service</h3>
                        <p class="text-gray-600 leading-relaxed">To empower believers to discover and use their gifts to serve others</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Evangelism</h3>
                        <p class="text-gray-600 leading-relaxed">To share the good news of Jesus Christ with our community and beyond</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100">
                    <div class="p-6">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center text-white text-xl mb-4">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-church-purple">Compassion</h3>
                        <p class="text-gray-600 leading-relaxed">To demonstrate God's love through meeting physical and social needs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-church-purple mb-4">Our Core Values</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-church-red to-orange-400 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                These values guide every decision we make and every ministry we pursue
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-church-purple text-white flex items-center justify-center mb-4">
                        <i class="fas fa-bible text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Biblical Authority</h3>
                    <p class="text-gray-700 leading-relaxed">We believe in the inspiration and authority of Scripture as our ultimate guide for faith and practice.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-church-red text-white flex items-center justify-center mb-4">
                        <i class="fas fa-seedling text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Spiritual Growth</h3>
                    <p class="text-gray-700 leading-relaxed">We are committed to helping believers grow in their relationship with Christ and become more like Him.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-orange-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-globe-africa text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Cultural Relevance</h3>
                    <p class="text-gray-700 leading-relaxed">We communicate timeless truth in culturally relevant ways while maintaining biblical integrity.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-green-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-star text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Excellence</h3>
                    <p class="text-gray-700 leading-relaxed">We strive for excellence in all we do as an act of worship and a testimony to God's greatness.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-blue-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-hands text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Unity in Diversity</h3>
                    <p class="text-gray-700 leading-relaxed">We celebrate our unity in Christ while embracing the diversity of our members and communities.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-12 h-12 rounded-lg bg-purple-500 text-white flex items-center justify-center mb-4">
                        <i class="fas fa-crown text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-church-purple">Servant Leadership</h3>
                    <p class="text-gray-700 leading-relaxed">We lead by serving others, following Christ's example of humility and sacrificial love.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-br from-church-purple via-purple-700 to-church-purple relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-48 -translate-y-48"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-white rounded-full translate-x-40 translate-y-40"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto text-white">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Join Our Church Family</h2>
            <div class="w-24 h-1 bg-white mx-auto mb-8"></div>
            <p class="text-xl md:text-2xl mb-12 leading-relaxed opacity-90">
                We invite you to be part of fulfilling God's purpose for His church. Together, we can make a lasting difference in our community and around the world.
            </p>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-door-open text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Visit Us</h3>
                    <p class="opacity-90">Experience our welcoming community</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hands-helping text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Get Involved</h3>
                    <p class="opacity-90">Find your place in ministry</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Connect</h3>
                    <p class="opacity-90">Build meaningful relationships</p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/visit" class="bg-white text-church-purple hover:bg-gray-100 font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 shadow-xl inline-block">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Plan Your Visit
                </a>
                <a href="/ministries" class="bg-transparent border-2 border-white hover:bg-white hover:text-church-purple text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 inline-block">
                    <i class="fas fa-users mr-2"></i>
                    Explore Ministries
                </a>
                <a href="/contact" class="bg-church-red hover:bg-red-700 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 shadow-xl inline-block">
                    <i class="fas fa-phone mr-2"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes float-delayed {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-float-delayed {
        animation: float-delayed 8s ease-in-out infinite;
        animation-delay: 2s;
    }
    
    .animate-float-slow {
        animation: float-slow 10s ease-in-out infinite;
        animation-delay: 4s;
    }
    
    .hero-pattern {
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(139, 69, 19, 0.1) 0%, transparent 70%),
            radial-gradient(circle at 75% 75%, rgba(75, 0, 130, 0.1) 0%, transparent 70%);
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Custom gradient text */
    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
    }
</style>
@endsection