@extends('layouts.app')

@section('content')
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white">
    <!-- Three.js / Vanta.js Background -->
    <div id="vanta-bg" class="absolute inset-0 opacity-80"></div>

    <!-- Animated Crypto Coins Flying to Globe -->
    <div class="absolute inset-0 pointer-events-none flex items-center justify-center">
        <!-- BTC Coins -->
        <img src="https://www.svgrepo.com/show/366911/btc.svg"
             class="coin-fly coin-1 w-16 h-16 absolute" alt="BTC">
        <img src="https://www.svgrepo.com/show/366911/btc.svg"
             class="coin-fly w-12 h-12 absolute" style="--tx: 100px; --ty: 180px; animation-delay: 0.4s;" alt="BTC">

        <!-- ETH Coins -->
        <img src="https://www.svgrepo.com/show/366996/etc.svg"
             class="coin-fly coin-2 w-14 h-14 absolute" alt="ETH">
        <img src="https://www.svgrepo.com/show/366996/etc.svg"
             class="coin-fly w-12 h-12 absolute" style="--tx: -120px; --ty: 100px; animation-delay: 1.2s;" alt="ETH">

        <!-- BNB Coins -->
        <img src="https://www.svgrepo.com/show/366901/bnb.svg"
             class="coin-fly coin-3 w-14 h-14 absolute" alt="BNB">
        <img src="https://www.svgrepo.com/show/366901/bnb.svg"
             class="coin-fly w-12 h-12 absolute" style="--tx: 150px; --ty: -180px; animation-delay: 2s;" alt="BNB">

        <!-- USDT Coins -->
        <img src="https://www.svgrepo.com/show/367256/usdt.svg"
             class="coin-fly coin-4 w-14 h-14 absolute" alt="USDT">
        <img src="https://www.svgrepo.com/show/367256/usdt.svg"
             class="coin-fly w-12 h-12 absolute" style="--tx: -180px; --ty: -100px; animation-delay: 2.8s;" alt="USDT">

        <!-- Extra Coins for More Dynamic Effect -->
        <img src="https://www.svgrepo.com/show/366911/btc.svg"
             class="coin-fly w-10 h-10 absolute" style="--tx: -90px; --ty: 140px; animation-delay: 3.2s;" alt="BTC">
        <img src="https://www.svgrepo.com/show/366996/etc.svg"
             class="coin-fly w-10 h-10 absolute" style="--tx: 110px; --ty: -90px; animation-delay: 3.6s;" alt="ETH">
    </div>


    <!-- Hero Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
    <div class="fade-in">
        <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4 leading-tight">
            Welcome to <span class="bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent">BITOREX</span>
            <span class="block text-2xl md:text-3xl mt-2">Where Millionaires Are Made</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
            Build your investment portfolio with our structured programs — from capital growth and daily earnings to secure trading and long-term wealth creation.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="/dashboard" class="group bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-10 py-5 rounded-2xl text-lg font-bold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center">
                <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                START INVESTING
            </a>

            <a href="#about" class="group border-2 border-gray-300 text-gray-700 px-10 py-5 rounded-2xl text-lg font-semibold hover:border-yellow-400 hover:text-yellow-600 transition-all duration-300 flex items-center">
                Learn More
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
</section>

<!-- Coin Flying Animation Styles -->
<style>
@keyframes coinFly {
    0% {
        transform: translate(0, 0) scale(0.5) rotate(0deg);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translate(var(--tx), var(--ty)) scale(1) rotate(720deg);
        opacity: 0;
    }
}

.coin-fly {
    animation: coinFly 3s ease-in-out infinite;
}

.coin-1 {
    --tx: 200px;
    --ty: 150px;
    animation-delay: 0s;
}
.coin-2 {
    --tx: -150px;
    --ty: 200px;
    animation-delay: 0.8s;
}
.coin-3 {
    --tx: 180px;
    --ty: -120px;
    animation-delay: 1.6s;
}
.coin-4 {
    --tx: -200px;
    --ty: -150px;
    animation-delay: 2.4s;
}

#globe-container {
    filter: brightness(1.5) contrast(1.3) saturate(1.2);
}
</style>

<!-- انیمیشن‌های اضافی -->
<style>
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in-up {
  animation: fadeInUp 0.8s ease-out;
}

.fade-in {
  animation: fadeIn 0.6s ease-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
</style>
<!-- Mission & Vision Section -->
<section id="about" class="py-24 bg-gradient-to-br from-gray-50 via-white to-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <!-- Text Content -->
      <div class="space-y-8 fade-in-left">
        <div>
          <h2 class="text-5xl font-bold bg-gradient-to-r from-[#B8860B] to-[#FFD700] bg-clip-text text-transparent mb-6">
            Our Mission & Vision
          </h2>
          <div class="w-24 h-1 bg-gradient-to-r from-[#B8860B] to-[#FFD700] rounded-full mb-8"></div>
        </div>

        <!-- Mission -->
        <div>
          <p class="text-gray-800 text-xl leading-relaxed font-medium">
            Building an investment platform as the first step — creating income-generating betting opportunities using major global and crypto market news and analysis (like the money market), enabling trading capabilities, and constructing a centralized exchange.
          </p>
          <p class="text-[#B8860B] text-xl font-bold leading-relaxed mt-4">
            We aim to empower individuals with the tools to achieve daily earnings, secure capital growth, and build long-term wealth through strategic investments.
          </p>
        </div>

        <!-- Vision -->
        <div class="pt-8">
          <p class="text-gray-800 text-xl leading-relaxed">
            To be the premier investment and trading platform that bridges capital growth with advanced market analytics, creating a trusted ecosystem for investors worldwide.
          </p>
          <p class="text-gray-800 text-xl leading-relaxed mt-4">
            Our vision is to foster a global community where investors thrive through transparent, secure, and profitable investment opportunities.
          </p>
        </div>
      </div>

      <!-- Image -->
      <div class="relative group fade-in-right">
        <div class="absolute inset-0 bg-gradient-to-r from-[#B8860B] to-[#FFD700] rounded-3xl opacity-20 group-hover:opacity-30 transition-opacity duration-500 blur"></div>
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&h=600&fit=crop&auto=format"
             alt="Trading Team"
             class="relative rounded-3xl shadow-2xl transition-transform duration-500 group-hover:scale-105">
      </div>
    </div>
  </div>
</section>



<!-- Features Section -->
<section id="features" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-5xl font-bold text-gray-900 mb-6">Why Choose Our Platform</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-[#FFD7D7] to-[#B76E79] rounded-full mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover the tools and features that make us the preferred choice for crypto traders worldwide
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="group p-8 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-3xl border border-yellow-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-in">
                <div class="w-16 h-16 bg-gradient-to-r from-[#FFD7D7] to-[#B76E79] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Advanced Market Analytics</h3>
                <p class="text-gray-600 leading-relaxed">Real-time market analysis and generating high returns on your capital — a trusted lending platform for reliable individuals with high-profit percentages on specified dates.</p>
                </div>

            <!-- Feature 2 -->
            <div class="group p-8 bg-gradient-to-br from-purple-50 to-violet-50 rounded-3xl border border-purple-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-in">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Expert Mentorship</h3>
                <p class="text-gray-600 leading-relaxed">Learn from seasoned traders with personalized guidance and proven strategies.</p>
            </div>

            <!-- Feature 3 -->
            <div class="group p-8 bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl border border-orange-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-in">
                <div class="w-16 h-16 bg-gradient-to-r from-[#B76E79] to-red-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Secure Platform</h3>
                <p class="text-gray-600 leading-relaxed">Bank-level security with advanced encryption to keep your investments safe.</p>
            </div>

            <!-- Feature 4 -->
            <div class="group p-8 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-in">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                <p class="text-gray-600 leading-relaxed">Round-the-clock customer support to assist you whenever you need help.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🌍 Global Network Section -->
<section class="py-20 bg-gradient-to-br from-white to-gray-50" data-aos="fade-up">
  <!-- 6-Month Curriculum -->
        <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Complete 6-Month Curriculum</h2>
                <p class="text-lg text-gray-600">From absolute beginner to professional trader</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 max-w-6xl mx-auto">

                <!-- Month 1 -->
                <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-blue-300 p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-black text-white">1</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Getting Started</h3>
                            <p class="text-sm text-blue-600 font-semibold">Month 1 • Foundation</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Take your first confident step toward capital growth</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Create an account in minutes</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Select your investment plan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Easy deposit with digital currencies</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Real-time balance monitoring</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Start earning daily income</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Professional user dashboard</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>24/7 customer support</span>
                        </li>
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-blue-600 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            <span>Assignment: Open demo accounts & master charting tools</span>
                        </div>
                    </div>
                </div>

                <!-- Month 2 -->
                <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-green-300 p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-black text-white">2</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Daily Earnings</h3>
                            <p class="text-sm text-green-600 font-semibold">Month 2 • Growth</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Your capital updates daily on the dashboard (boosted by referrals)</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Daily income calculation</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Full payment history</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Easy profit withdrawal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Transparent transaction reports</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Increase capital at any time</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Full asset management</span>
                        </li>
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-green-600 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            <span>Assignment: Identify trends, patterns & S/R on various charts</span>
                        </div>
                    </div>
                </div>

                <!-- Month 3 -->
                <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-purple-300 p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-black text-white">3</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Capital Security</h3>
                            <p class="text-sm text-purple-600 font-semibold">Month 3 • Protection</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Protecting your assets is our priority — we trade with your capital as a trusted lending company with high profit percentages.</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>We trade with your capital</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>We are a lending company for trustworthy individuals</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>High profit percentage</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Execute more crypto trades with your capital</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>User account protection</span>
                        </li>
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-purple-600 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            <span>Assignment: Create risk management plan & trading journal</span>
                        </div>
                    </div>
                </div>

                <!-- Month 4 -->
                <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-orange-300 p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-black text-white">4</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Investment Plans</h3>
                            <p class="text-sm text-orange-600 font-semibold">Month 4 • Strategy</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Select a plan tailored to your financial goals</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Flexible investment options</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Upgrade your plan at any time</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Run multiple plans simultaneously</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Smart capital management</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Performance analytics for your capital</span>
                        </li>
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-orange-600 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            <span>Assignment: Backtest strategies on crypto and forex markets</span>
                        </div>
                    </div>
                </div>

                <!-- Month 5 -->
                <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-red-300 p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-black text-white">5</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Income & Withdrawals</h3>
                            <p class="text-sm text-red-600 font-semibold">Month 5 • Earnings</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Effortless income and withdrawal management</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Fast withdrawals</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Complete payment history</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Daily profit reports</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>User-controlled wallet management</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Financial support</span>
                        </li>
                    </ul>
                    <div class="mt-6 pt-5 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-red-600 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            <span>Assignment: Write comprehensive market analysis report</span>
                        </div>
                    </div>
                </div>

                <!-- Month 6 -->
                <div class="bg-white rounded-2xl border-2 border-gray-200 hover:border-yellow-400 p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group lg:col-span-2">
                    <div class="flex items-start gap-4 mb-5">
                        <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl font-black text-gray-900">6</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Long-Term Growth</h3>
                            <p class="text-sm text-yellow-600 font-semibold">Month 6 • Scaling</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-5">Develop your capital for the future</p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"/></svg>
                                Growth Strategies
                            </h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Gradual capital increase</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Reinvest profits for higher returns</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Portfolio management</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Performance stats and analytics</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            Going Live & Scaling
                            </h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Choosing your primary market focus</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Live trading pre-flight checklist</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Trading challenges (FTMO, MyForexFunds)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Crypto portfolio management (spot vs futures)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Psychology of live trading</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Capital scaling & compounding strategies</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Avoiding overtrading and burnout</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Multiple income streams from trading</span>
                                </li>
                            </ul>
                        </div>
                    </div><div class="mt-6 pt-5 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-yellow-600 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
                            <span>Final Project: Submit full trading plan + journal + backtest results</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<script>
  AOS.init({
    duration: 900,
    once: true,
    offset: 100
  });
</script>
<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 slide-up">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Trading Performance
      </h2>
      <p class="text-xl text-gray-600">Track live market data & performance</p>
    </div>

    <div class="overflow-x-auto pb-10">
      <table class="min-w-full text-sm text-left bg-white shadow-lg rounded-xl overflow-hidden">
        <thead class="bg-gray-100 text-gray-700">
          <tr>
            <th class="px-6 py-3 font-semibold">Asset</th>
            <th class="px-6 py-3 font-semibold">Price</th>
            <th class="px-6 py-3 font-semibold">24h Change</th>
            <th class="px-6 py-3 font-semibold">Market Cap</th>
          </tr>
        </thead>
        <tbody id="performance-body" class="divide-y divide-gray-100"></tbody>
      </table>
    </div>

    <div class="mt-12">
      <div class="tradingview-widget-container rounded-xl overflow-hidden shadow-lg">
        <div id="tradingview_chart"></div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>

<script>
  const metaAssets = [
    { id: "bitcoin", symbol: "BTC", name: "Bitcoin", tv: "BINANCE:BTCUSDT" },
    { id: "ethereum", symbol: "ETH", name: "Ethereum", tv: "BINANCE:ETHUSDT" },
    { id: "binancecoin", symbol: "BNB", name: "Binance Coin", tv: "BINANCE:BNBUSDT" },
    { id: "solana", symbol: "SOL", name: "Solana", tv: "BINANCE:SOLUSDT" },
    { id: "dogecoin", symbol: "DOGE", name: "Dogecoin", tv: "BINANCE:DOGEUSDT" },
  ];

  const extraAssets = [
  {
    id: "gold",
    name: "Gold",
    symbol: "XAU",
    icon: "https://s3-symbol-logo.tradingview.com/metal/gold--big.svg",
    tv: "OANDA:XAUUSD"
  },
  {
    id: "silver",
    name: "Silver",
    symbol: "XAG",
    icon: "https://s3-symbol-logo.tradingview.com/metal/silver--big.svg",
    tv: "OANDA:XAGUSD"
  },
  {
    id: "spx",
    name: "S&P 500",
    symbol: "SPX",
    icon: "https://s3-symbol-logo.tradingview.com/indices/s-and-p-500--big.svg",
    tv: "OANDA:SPX500USD"
  }
];


  let tvWidget = null;

  function loadChart(tvSymbol) {
    const container = document.getElementById("tradingview_chart");
    container.innerHTML = "";

    if (!tvSymbol) {
      container.innerHTML = `<div class="flex items-center justify-center h-96 bg-gray-100 text-gray-600">
        <p>Chart symbol not available</p>
      </div>`;
      return;
    }

    try {
      if (tvWidget && typeof tvWidget.remove === "function") {
        tvWidget.remove();
        tvWidget = null;
      } else {
        container.innerHTML = "";
      }
    } catch (e) {
      container.innerHTML = "";
    }

    const start = () => {
      if (!window.TradingView) {
        return setTimeout(start, 150);
      }
      try {
        tvWidget = new window.TradingView.widget({
          width: "100%",
          height: 500,
          symbol: tvSymbol,
          interval: "D",
          timezone: "Etc/UTC",
          theme: "dark",
          style: "1",
          locale: "en",
          container_id: "tradingview_chart",
        });
      } catch (err) {
        console.error("TradingView widget error:", err);
        container.innerHTML = `<div class="flex items-center justify-center h-96 bg-gray-100 text-gray-600">
          <p>Unable to load chart for ${tvSymbol}</p>
        </div>`;
      }
    };
    start();
  }

  async function loadPerformance() {
    try {
      const ids = metaAssets.map(a => a.id).join(",");
      const res = await fetch(
        `https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${ids}`
      );
      const data = await res.json();

      let rows = data.map(coin => {
        const meta = metaAssets.find(m => m.id === coin.id) || {};
        const tvSym = meta.tv;
        const change = coin.price_change_percentage_24h?.toFixed(2) || "0.00";
        const isProfit = parseFloat(change) >= 0;
        return `
          <tr class="hover:bg-gray-50 transition-colors cursor-pointer" onclick="loadChart('${tvSym}')">
            <td class="px-6 py-4 flex items-center space-x-3">
              <img src="${coin.image}" class="w-6 h-6" alt="${coin.symbol}" />
              <div>
                <div class="font-semibold text-gray-900">${coin.name}</div>
                <div class="text-gray-500 text-xs">${coin.symbol.toUpperCase()}/USDT</div>
              </div>
            </td>
            <td class="px-6 py-4">$${Number(coin.current_price).toLocaleString()}</td>
            <td class="px-6 py-4 font-medium ${isProfit ? 'text-green-500' : 'text-red-500'}">
              ${isProfit ? '▲' : '▼'} ${change}%
            </td>
            <td class="px-6 py-4">$${Number(coin.market_cap || 0).toLocaleString()}</td>
          </tr>`;
      }).join("");

      rows += extraAssets.map(a => {
        const fakeChange = (Math.random() * 2 - 1).toFixed(2);
        const isProfit = parseFloat(fakeChange) >= 0;
        const fakePrice = (100 + Math.random() * 100).toFixed(2);
        return `
          <tr class="hover:bg-gray-50 transition-colors cursor-pointer" onclick="loadChart('${a.tv}')">
            <td class="px-6 py-4 flex items-center space-x-3">
              <img src="${a.icon}" class="w-6 h-6 rounded-full" alt="${a.name}" />
              <div>
                <div class="font-semibold text-gray-900">${a.name}</div>
                <div class="text-gray-500 text-xs">${a.symbol}</div>
              </div>
            </td>
            <td class="px-6 py-4">$${Number(fakePrice).toLocaleString()}</td>
            <td class="px-6 py-4 font-medium ${isProfit ? 'text-green-500' : 'text-red-500'}">
              ${isProfit ? '▲' : '▼'} ${fakeChange}%
            </td>
            <td class="px-6 py-4">—</td>
          </tr>`;
      }).join("");

      document.getElementById("performance-body").innerHTML = rows;
    } catch (err) {
      console.error("Load error:", err);
      document.getElementById("performance-body").innerHTML = `<tr><td class="px-6 py-4" colspan="4">Failed to load data</td></tr>`;
    }
  }

  loadPerformance();
  setInterval(loadPerformance, 60000);

  document.addEventListener('DOMContentLoaded', () => {
    loadChart(metaAssets[0].tv);
  });
</script>



<script>
    function animateCounter(element, target, duration = 2000) {
        let current = 0;
        const increment = target / (duration / 16);
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = Math.floor(target).toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, 16);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                console.log('Mobile menu clicked');
            });
        }

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');

                    const counters = entry.target.querySelectorAll('.counter-animation');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        if (target && !counter.classList.contains('animated')) {
                            counter.classList.add('animated');
                            animateCounter(counter, target);
                        }
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('.slide-up, .counter-animation').forEach(el => {
            observer.observe(el);
        });

        setTimeout(() => {
            document.querySelectorAll('.accuracy-fill').forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        }, 1000);

        setInterval(updateRealTimeData, 5000);
    });

    function updateRealTimeData() {
        const priceElements = document.querySelectorAll('td:nth-child(3)');
        const pnlElements = document.querySelectorAll('.profit, .loss');

        priceElements.forEach((element, index) => {
            if (index < 3) {
                const currentPrice = parseFloat(element.textContent.replace('$', '').replace(',', ''));
                const variation = (Math.random() - 0.5) * 0.02;
                const newPrice = currentPrice * (1 + variation);

                element.textContent = '$' + newPrice.toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }
        });
    }

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
</script>

<!-- Pricing Section -->
<section id="pricing" class="py-24 bg-gradient-to-br from-slate-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-5xl font-bold text-gray-900 mb-6">Choose Your Plan</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-[#B76E79] to-[#FFD7D7] rounded-full mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Select the perfect plan for your trading journey. Start free and upgrade as you grow.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @foreach($plans as $index => $plan)
                @php
                    $colors = [
                        0 => [
                            'gradient' => 'linear-gradient(135deg, #FFD700 0%, #FFA500 100%)',
                            'accent'   => '#DAA520',
                            'bg'       => '#FFF9E6',
                            'border'   => '#FFE5A0',
                            'popular'  => false
                        ],
                        1 => [
                            'gradient' => 'linear-gradient(135deg, #CD7F32 0%, #FFD700 100%)',
                            'accent'   => '#D4AF37',
                            'bg'       => '#FFF5E1',
                            'border'   => '#F0E68C',
                            'popular'  => false
                        ],
                        2 => [
                            'gradient' => 'linear-gradient(135deg, #CD7F32 0%, #FFD700 100%)',
                            'accent'   => '#D4AF37',
                            'bg'       => '#FFF5E1',
                            'border'   => '#F0E68C',
                            'popular'  => false
                        ]
                    ];
                    $color = $colors[$index % 3];
                    $isTemporarilyDisabled = ((float) $plan->price_usdt === 800.0);
                @endphp

                <div class="relative group">

                    @if ($isTemporarilyDisabled)
                    <div class="block bg-white rounded-2xl shadow-xl border-2 overflow-hidden opacity-60 cursor-not-allowed pointer-events-none {{ $color['popular'] ? 'ring-2 ring-purple-200' : '' }}" style="border-color: {{ $color['border'] }}">
                    @else
                    <a href="/plans" class="block bg-white rounded-2xl shadow-xl border-2 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 overflow-hidden {{ $color['popular'] ? 'ring-2 ring-purple-200' : '' }}" style="border-color: {{ $color['border'] }}">
                    @endif

                        <!-- Header Section -->
                        <div class="text-white p-8 relative overflow-hidden" style="background: {{ $color['gradient'] }}">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full translate-y-12 -translate-x-12"></div>

                            <div class="relative z-10">
                                <h3 class="text-2xl font-bold mb-3 leading-tight">{{ $plan->name }}</h3>
                                <div class="flex items-baseline gap-2 mb-2">
                                    <span class="text-4xl font-black">${{ number_format($plan->price_usdt, 0) }}</span>
                                    <span class="text-lg opacity-80">USDT</span>
                                </div>
                                <div class="flex items-center gap-2 text-white/90">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                    </svg>
                                    <span class="font-medium">{{ $plan->duration_months }} Months Program</span>
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-8">
                            <div class="prose prose-gray max-w-none mb-8">
                                @php
                                    $lines = explode('.', $plan->description);
                                    $features = [];
                                    foreach($lines as $line) {
                                        $line = trim($line);
                                        if(!empty($line)) {
                                            $features[] = $line;
                                        }
                                    }
                                @endphp

                                <div class="space-y-4">
                                    @foreach(array_slice($features, 0, 5) as $feature)
                                    <div class="flex items-start gap-3">
                                        <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5" style="background-color: {{ $color['bg'] }}">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" style="color: {{ $color['accent'] }}">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                            </svg>
                                        </div>
                                        <span class="text-gray-700 text-sm leading-relaxed">{{ trim($feature, ': ') }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- CTA Button -->
                            <button {{ $isTemporarilyDisabled ? 'disabled' : '' }} class="w-full text-white py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300 group"
                                    style="background: {{ $color['gradient'] }}">
                                <span class="flex items-center justify-center gap-2">
                                    View Details
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </span>
                            </button>

                            <!-- Additional Info -->
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <div class="flex items-center justify-center gap-6 text-sm text-gray-500">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                        </svg>
                                        <span>24/7 Support</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"/>
                                        </svg>
                                        <span>Certificate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if ($isTemporarilyDisabled)
                    </div>
                    @else
                    </a>
                    @endif
                </div>
            @endforeach
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 text-center">
            <div class="inline-flex items-center gap-8 text-gray-500 text-sm flex-wrap justify-center">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                    </svg>
                    <span>Secure Payment</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"/>
                    </svg>
                    <span>Money Back Guarantee</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                    <span>Expert Instructors</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts for 3D Globe -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>

<script>
      // Initialize Vanta.js Globe Background
    VANTA.GLOBE({
    el: "#vanta-bg",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0xFFD700,       // Golden nodes
    color2: 0xFFA500,      // Amber-golden links
    backgroundColor: 0xffffff, // White background
    size: 1.00,
    spacing: 15.00
});


    // Intersection Observer for fade-in animations
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

    // Apply fade-in animation to elements
    document.addEventListener('DOMContentLoaded', function() {
        const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');

        fadeElements.forEach(element => {
            element.style.opacity = '0';
            element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';

            if (element.classList.contains('fade-in-left')) {
                element.style.transform = 'translateX(-50px)';
            } else if (element.classList.contains('fade-in-right')) {
                element.style.transform = 'translateX(50px)';
            } else {
                element.style.transform = 'translateY(50px)';
            }

            observer.observe(element);
        });
    });

    // Smooth scrolling for navigation links
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
</script>

<style>
    .btn-primary {
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-primary:hover::before {
        left: 100%;
    }
</style>
@endsection
