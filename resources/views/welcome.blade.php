@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white">
    <!-- Three.js / Vanta.js Background -->
    <div id="vanta-bg" class="absolute inset-0 opacity-80"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="fade-in">
            <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                Master Crypto Trading with
                <span class="bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent">Expert</span>
                <span class="bg-gradient-to-r from-purple-600 to-purple-400 bg-clip-text text-transparent">Guidance</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-10 max-w-4xl mx-auto leading-relaxed">
                Join thousands of successful traders in our premium community. Learn, grow, and profit from the crypto revolution with our proven strategies and expert mentorship.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="/dashboard" class="group bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-10 py-5 rounded-2xl text-lg font-bold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center">
                    <svg class="w-6 h-6 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    TRADE CRYPTO
                </a>
                <a href="#about" class="group border-2 border-gray-300 text-gray-700 px-10 py-5 rounded-2xl text-lg font-semibold hover:border-purple-400 hover:text-purple-600 transition-all duration-300 flex items-center">
                    Learn More
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section id="about" class="py-24 bg-gradient-to-br from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8 fade-in-left">
                <div>
                    <h2 class="text-5xl font-bold bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent mb-6">
                        Our Mission
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full mb-8"></div>
                </div>
                <p class="text-gray-600 text-xl leading-relaxed">
                    We believe everyone deserves access to professional-grade crypto trading education and tools. Our mission is to democratize financial success through blockchain technology and expert mentorship.
                </p>
                <p class="text-gray-600 text-xl leading-relaxed">
                    With over 10 years of combined experience in traditional and crypto markets, our team has helped thousands of traders achieve financial independence.
                </p>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center p-6 bg-white rounded-3xl shadow-lg border hover:shadow-xl transition-shadow duration-300">
                        <div class="text-4xl font-bold bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent">10+</div>
                        <div class="text-gray-500 text-sm font-medium mt-2">Years Experience</div>
                    </div>
                    <div class="text-center p-6 bg-white rounded-3xl shadow-lg border hover:shadow-xl transition-shadow duration-300">
                        <div class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-purple-400 bg-clip-text text-transparent">50K+</div>
                        <div class="text-gray-500 text-sm font-medium mt-2">Students Taught</div>
                    </div>
                    <div class="text-center p-6 bg-white rounded-3xl shadow-lg border hover:shadow-xl transition-shadow duration-300">
                        <div class="text-4xl font-bold bg-gradient-to-r from-yellow-600 to-orange-400 bg-clip-text text-transparent">95%</div>
                        <div class="text-gray-500 text-sm font-medium mt-2">Satisfaction Rate</div>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="relative group fade-in-right">
                <div class="absolute -inset-4 bg-gradient-to-r from-green-500 to-purple-600 rounded-3xl opacity-20 group-hover:opacity-30 transition-opacity duration-500 blur"></div>
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
            <div class="w-24 h-1 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover the tools and features that make us the preferred choice for crypto traders worldwide
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="group p-8 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-3xl border border-yellow-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-in">
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Advanced Analytics</h3>
                <p class="text-gray-600 leading-relaxed">Real-time market analysis and AI-powered insights to help you make informed trading decisions.</p>
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
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
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


<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 slide-up">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Trading Performance
      </h2>
      <p class="text-xl text-gray-600">
        Track live market data & performance
      </p>
    </div>

    <!-- نوار آیکون ارزها -->
    <div class="flex justify-center space-x-6 mb-8" id="crypto-icons"></div>

    <!-- جدول -->
    <div class="overflow-x-auto pb-10">
      <table
        class="min-w-full text-sm text-left bg-white shadow-lg rounded-xl overflow-hidden"
      >
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

    <!-- چارت -->
    <div class="mt-12">
      <div
        class="tradingview-widget-container rounded-xl overflow-hidden shadow-lg"
      >
        <div id="tradingview_chart"></div>
        <script
          type="text/javascript"
          src="https://s3.tradingview.com/tv.js"
        ></script>
        <script>
          let tvWidget;

          function loadChart(symbol) {
            if (tvWidget) {
              document.getElementById("tradingview_chart").innerHTML = "";
            }
            tvWidget = new TradingView.widget({
              width: "100%",
              height: 500,
              symbol: `BINANCE:${symbol}USDT`,
              interval: "D",
              timezone: "Etc/UTC",
              theme: "dark",
              style: "1",
              locale: "en",
              container_id: "tradingview_chart",
            });
          }
          loadChart("BTC"); // پیش‌فرض بیت‌کوین
        </script>
      </div>
    </div>
  </div>
</section>

<script>
  const assets = [
    { id: "bitcoin", symbol: "BTC", name: "Bitcoin" },
    { id: "ethereum", symbol: "ETH", name: "Ethereum" },
    { id: "ripple", symbol: "XRP", name: "XRP" },
    { id: "solana", symbol: "SOL", name: "Solana" },
    { id: "binancecoin", symbol: "BNB", name: "Binance Coin" },
    { id: "dogecoin", symbol: "DOGE", name: "Dogecoin" },
    { id: "tron", symbol: "TRX", name: "Tron" },
    { id: "cardano", symbol: "ADA", name: "Cardano" },
    { id: "chainlink", symbol: "LINK", name: "Chainlink" },
  ];

  // آیکون ساده (CoinGecko logo)
  function getIconUrl(id) {
    return `https://coinicons-api.vercel.app/api/icon/${id}`;
  }

  async function loadPerformance() {
    try {
      const ids = assets.map((a) => a.id).join(",");
      const res = await fetch(
        `https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${ids}`
      );
      const data = await res.json();

      // پر کردن جدول
      document.getElementById("performance-body").innerHTML = data
        .map((coin) => {
          const change = coin.price_change_percentage_24h?.toFixed(2) || 0;
          const isProfit = change >= 0;
          return `
            <tr class="hover:bg-gray-50 transition-colors" onclick="loadChart('${coin.symbol}')">
              <td class="px-6 py-4 flex items-center space-x-3">
                <img src="${coin.image}" class="w-6 h-6" />
                <div>
                  <div class="font-semibold text-gray-900">${coin.name}</div>
                  <div class="text-gray-500 text-xs">${coin.symbol.toUpperCase()}/USDT</div>
                </div>
              </td>
              <td class="px-6 py-4">$${coin.current_price.toLocaleString()}</td>
              <td class="px-6 py-4 font-medium ${
                isProfit ? "text-green-500" : "text-red-500"
              }">
                ${isProfit ? "▲" : "▼"} ${change}%
              </td>
              <td class="px-6 py-4">$${coin.market_cap.toLocaleString()}</td>
            </tr>
          `;
        })
        .join("");
    } catch (err) {
      console.error("Load error:", err);
    }
  }

  // ساختن نوار آیکون
  function buildIcons() {
    const container = document.getElementById("crypto-icons");
    container.innerHTML = assets
      .map(
        (a) => `
      <button
        class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-100 hover:bg-gray-200 transition"
        onclick="loadChart('${a.symbol}')"
        title="${a.name}">
        <img src="${getIconUrl(a.symbol.toLowerCase())}" class="w-6 h-6"/>
      </button>
    `
      )
      .join("");
  }

//   buildIcons();
  loadPerformance();
  setInterval(loadPerformance, 60000);
</script>


<script>
    // Counter Animation Function
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

    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                console.log('Mobile menu clicked');
            });
        }

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');

                    // Animate counters when they come into view
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

        // Observe slide-up elements and counter elements
        document.querySelectorAll('.slide-up, .counter-animation').forEach(el => {
            observer.observe(el);
        });

        // Animate accuracy bars
        setTimeout(() => {
            document.querySelectorAll('.accuracy-fill').forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        }, 1000);

        // Update real-time data simulation
        setInterval(updateRealTimeData, 5000);
    });

    // Simulate real-time data updates
    function updateRealTimeData() {
        const priceElements = document.querySelectorAll('td:nth-child(3)');
        const pnlElements = document.querySelectorAll('.profit, .loss');

        priceElements.forEach((element, index) => {
            if (index < 3) { // Only update active trades
                const currentPrice = parseFloat(element.textContent.replace('$', '').replace(',', ''));
                const variation = (Math.random() - 0.5) * 0.02; // ±1% variation
                const newPrice = currentPrice * (1 + variation);

                element.textContent = '$' + newPrice.toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }
        });
    }

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
</script>

<!-- Pricing Section -->
<section id="pricing" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-5xl font-bold text-gray-900 mb-6">Choose Your Plan</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-green-500 to-purple-600 rounded-full mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Select the perfect plan for your trading journey. Start free and upgrade as you grow.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

    @foreach($plans as $plan)
        <a href="/plans"
           class="group block bg-white rounded-2xl shadow-xl border
           @if($plan->price_usdt > 1000) border-amber-300 ring-2 ring-purple-200
           @else border-yellow-200 @endif
           hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 overflow-hidden">

            <!-- Header -->
            <div class="bg-gradient-to-br
                @if($plan->price_usdt > 1000) from-amber-700 to-yellow-500
                @else from-yellow-400 to-yellow-600 @endif
                text-white p-8 relative overflow-hidden">

                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>

                <h3 class="text-2xl font-bold mb-3">{{ $plan->name }}</h3>

                <div class="flex items-baseline gap-2 mb-2">
                    <span class="text-4xl font-black">${{ number_format($plan->price_usdt, 0) }}</span>
                    <span class="text-lg opacity-80">USDT</span>
                </div>

                <p class="opacity-90 line-clamp-3">{{ $plan->description }}</p>
            </div>

            <!-- Body -->
            <div class="p-8">
                <ul class="space-y-3 text-gray-700 text-sm leading-relaxed">
                    <li class="flex items-start gap-2">
                        <span class="w-2 h-2 bg-yellow-500 rounded-full mt-2"></span>
                        {{ $plan->duration_months }}-Month Access
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="w-2 h-2 bg-yellow-500 rounded-full mt-2"></span>
                        {{ Str::limit($plan->description, 80) }}
                    </li>
                </ul>

                <button class="mt-8 w-full bg-gradient-to-r
                    @if($plan->price_usdt > 1000) from-amber-700 to-yellow-500
                    @else from-yellow-400 to-yellow-600 @endif
                    text-white py-3 rounded-xl font-semibold shadow-lg group-hover:scale-[1.02] transition-all duration-300">
                    Choose Plan →
                </button>
            </div>
        </a>
    @endforeach

</div>

    </div>
</section>

{{-- <!-- Contact Section -->
<section id="contact" class="py-24 bg-gradient-to-br from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-5xl font-bold text-gray-900 mb-6">Get In Touch</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-green-500 to-purple-600 rounded-full mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div class="space-y-8 fade-in-left">
                <div class="flex items-start group">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-400 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Email</h3>
                        <p class="text-gray-600 text-lg">support@cryptotradecommunity.com</p>
                        <p class="text-gray-500 text-sm mt-1">We'll respond within 24 hours</p>
                    </div>
                </div>

                <div class="flex items-start group">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-400 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Phone</h3>
                        <p class="text-gray-600 text-lg">+1 (555) 123-4567</p>
                        <p class="text-gray-500 text-sm mt-1">Monday to Friday, 9AM - 6PM EST</p>
                    </div>
                </div>

                <div class="flex items-start group">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-2xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Office</h3>
                        <p class="text-gray-600 text-lg">123 Trading Street</p>
                        <p class="text-gray-600 text-lg">Crypto City, CC 12345</p>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="pt-8">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center text-white hover:bg-blue-600 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center text-white hover:bg-pink-600 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.346-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.986C24.007 5.367 18.641.001.012.017 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-700 rounded-xl flex items-center justify-center text-white hover:bg-blue-800 transition-colors duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-10 rounded-3xl shadow-xl border fade-in-right">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first-name" class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                            <input type="text"
                                   id="first-name"
                                   name="first-name"
                                   class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-green-500 focus:outline-none transition-colors duration-300"
                                   placeholder="John">
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                            <input type="text"
                                   id="last-name"
                                   name="last-name"
                                   class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-purple-500 focus:outline-none transition-colors duration-300"
                                   placeholder="Doe">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email"
                               id="email"
                               name="email"
                               class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-green-500 focus:outline-none transition-colors duration-300"
                               placeholder="john.doe@example.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                        <input type="text"
                               id="subject"
                               name="subject"
                               class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-purple-500 focus:outline-none transition-colors duration-300"
                               placeholder="How can we help you?">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea id="message"
                                  name="message"
                                  rows="5"
                                  class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-green-500 focus:outline-none transition-colors duration-300 resize-none"
                                  placeholder="Tell us more about your inquiry..."></textarea>
                    </div>

                    <div>
                        <button type="submit"
                                class="w-full bg-gradient-to-r from-green-500 to-emerald-400 text-white px-8 py-5 rounded-2xl text-lg font-bold shadow-xl hover:shadow-2xl hover:from-green-600 hover:to-emerald-500 transform hover:-translate-y-1 transition-all duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> --}}

<!-- Scripts for 3D background and animations -->
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

<!-- Custom CSS for additional styling -->
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
