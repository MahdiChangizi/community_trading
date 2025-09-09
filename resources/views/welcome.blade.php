@extends('layouts.app')

@section('content')
<!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center crypto-bg overflow-hidden">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="fade-in">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Master Crypto Trading with
                    <span class="text-primary-green">Expert</span>
                    <span class="text-primary-purple">Guidance</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Join thousands of successful traders in our premium community. Learn, grow, and profit from the crypto revolution with our proven strategies and expert mentorship.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button class="bg-primary-green text-white px-8 py-4 rounded-md text-lg font-semibold btn-primary hover:bg-green-600 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.01M15 10h1.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Watch Intro Video
                    </button>
                    <button class="bg-primary-purple text-white px-8 py-4 rounded-md text-lg font-semibold btn-primary hover:bg-purple-600 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Start Free Trial
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Mission & Vision -->
    <section id="about" class="relative py-20 bg-gradient-to-br from-white via-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

            <!-- Mission section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text -->
                <div class="space-y-6">
                    <h2 class="text-4xl font-extrabold bg-gradient-to-r from-primary-green to-green-500 bg-clip-text text-transparent">Our Mission</h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We believe everyone deserves access to professional-grade crypto trading education and tools. Our mission is to democratize financial success through blockchain technology and expert mentorship.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        With over 10 years of combined experience in traditional and crypto markets, our team has helped thousands of traders achieve financial independence.
                    </p>
                    <div class="flex gap-6">
                        <div class="flex-1 text-center rounded-2xl bg-white/60 backdrop-blur-md shadow p-4">
                            <div class="text-3xl font-bold text-primary-green">10+</div>
                            <div class="text-gray-500 text-sm">Years Experience</div>
                        </div>
                        <div class="flex-1 text-center rounded-2xl bg-white/60 backdrop-blur-md shadow p-4">
                            <div class="text-3xl font-bold text-primary-purple">50K+</div>
                            <div class="text-gray-500 text-sm">Students Taught</div>
                        </div>
                        <div class="flex-1 text-center rounded-2xl bg-white/60 backdrop-blur-md shadow p-4">
                            <div class="text-3xl font-bold text-primary-yellow">95%</div>
                            <div class="text-gray-500 text-sm">Satisfaction Rate</div>
                        </div>
                    </div>
                </div>
                <!-- Image -->
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&h=400&fit=crop&auto=format"
                         alt="Trading Team"
                         class="rounded-[2rem] shadow-lg transition-transform duration-500 group-hover:scale-105 group-hover:shadow-2xl">
                    <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-tr from-primary-green/10 to-green-500/10 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                </div>
            </div>



        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="fade-in">
                    <div class="space-y-8">
                        <div class="flex items-center">
                            <div class="bg-primary-green bg-opacity-10 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-primary-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                                <p class="text-gray-600">support@cryptotradecommunity.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-primary-purple bg-opacity-10 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-primary-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Phone</h3>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-primary-yellow bg-opacity-10 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-primary-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Office</h3>
                                <p class="text-gray-600">123 Trading Street, Crypto City, CC 12345</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" id="first-name" name="first-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-green focus:border-primary-green p-3">
                            </div>
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="last-name" name="last-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-purple focus:border-primary-purple p-3">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-green focus:border-primary-green p-3">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" id="subject" name="subject" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-purple focus:border-primary-purple p-3">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-green focus:border-primary-green p-3"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-primary-green text-white px-6 py-3 rounded-md btn-primary hover:bg-green-600">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
