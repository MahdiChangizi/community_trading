@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6" data-aos="zoom-in">
                Join Our <span class="gradient-text">Trading</span> Community
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Connect with thousands of traders worldwide. Share strategies, learn from experts, and track your progress on your trading journey.
            </p>
            <div class="flex flex-wrap justify-center items-center gap-8 text-sm text-gray-500" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-primary-green rounded-full pulse-dot mr-2"></div>
                    <span class="counter-animation" data-target="25847">0</span>+ Active Members
                </div>
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-primary-purple rounded-full pulse-dot mr-2"></div>
                    <span class="counter-animation" data-target="1205">0</span>+ Daily Messages
                </div>
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-primary-yellow rounded-full pulse-dot mr-2"></div>
                    <span class="counter-animation" data-target="89">0</span>% Success Rate
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Links -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 slide-up" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Connect With Our Community</h2>
            <p class="text-xl text-gray-600">Join thousands of traders on your preferred platform</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <!-- Telegram -->
            <a href="#" data-aos="zoom-in" data-aos-delay="50"
                class="group flex flex-col items-center bg-white/70 backdrop-blur-md rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                    <!-- Telegram Icon -->
                    <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
                        <path d="M12 2.00049C6.48 2.00049 2 6.48049 2 12.0005C2 17.5205 6.48 22.0005 12 22.0005C17.52 22.0005 22 17.5205 22 12.0005C22 6.48049 17.52 2.00049 12 2.00049ZM16.64 8.80049C16.49 10.3805 15.84 14.2005 15.51 15.9905C15.37 16.7405 15.09 16.9905 14.83 17.0205C14.25 17.0705 13.81 16.6405 13.25 16.2705C12.37 15.6905 11.87 15.3305 10.98 14.7705C9.99 14.1205 10.63 13.7605 11.2 13.1905C11.35 13.0405 13.91 10.6405 13.96 10.4305C13.97 10.3705 13.95 10.3105 13.91 10.2705C13.85 10.2205 13.77 10.2405 13.69 10.2505C13.6 10.2705 12.2 11.2205 9.48 13.0905C9.08 13.3605 8.72 13.5005 8.4 13.4905C8.04 13.4805 7.36 13.2905 6.85 13.1205C6.22 12.9205 5.73 12.8105 5.77 12.4605C5.79 12.2805 6.04 12.1005 6.51 11.9105C9.43 10.6405 11.37 9.76049 12.34 9.35049C15.12 8.19049 15.69 7.98049 16.07 7.98049C16.15 7.98049 16.34 8.00049 16.46 8.10049C16.56 8.18049 16.59 8.29049 16.6 8.37049C16.59 8.43049 16.61 8.61049 16.64 8.80049Z"/>
                    </svg>
                </div>
                <span class="font-semibold text-gray-800 text-sm">Telegram</span>
                <span class="text-xs text-gray-500">
                    <span class="counter-animation" data-target="18230">0</span> members
                </span>
            </a>


            <!-- Discord -->
            <a href="#" data-aos="zoom-in" data-aos-delay="100"
               class="group flex flex-col items-center bg-white/70 backdrop-blur-md rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                    <!-- Discord Icon -->
                    <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
                        <path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419-.0002 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1568 2.4189Z"></path>
                    </svg>
                </div>
                <span class="font-semibold text-gray-800 text-sm">Discord</span>
                <span class="text-xs text-gray-500"><span class="counter-animation" data-target="12480">0</span> members</span>
            </a>

            <!-- Twitter -->
            <a href="#" data-aos="zoom-in" data-aos-delay="150"
               class="group flex flex-col items-center bg-white/70 backdrop-blur-md rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                    <!-- Twitter Icon -->
                    <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
                        <path d="M23.953 4.57C23.073 4.95 22.14 5.21 21.17 5.34C22.15 4.76 22.9 3.85 23.26 2.78C22.33 3.32 21.31 3.71 20.23 3.92C19.34 2.98 18.05 2.4 16.65 2.4C13.99 2.4 11.84 4.55 11.84 7.21C11.84 7.58 11.88 7.93 11.95 8.26C8.28 8.09 4.97 6.38 2.64 3.79C2.23 4.45 2 5.22 2 6.04C2 7.6 2.84 8.98 4.1 9.77C3.3 9.75 2.53 9.53 1.85 9.16V9.22C1.85 11.53 3.46 13.43 5.65 13.86C5.26 13.97 4.84 14.03 4.4 14.03C4.1 14.03 3.81 14.01 3.52 13.96C4.12 15.83 5.84 17.17 7.88 17.21C6.29 18.44 4.29 19.17 2.12 19.17C1.77 19.17 1.43 19.15 1.09 19.1C3.15 20.43 5.6 21.2 8.22 21.2C16.64 21.2 21.5 14.69 21.5 8.26C21.5 8.07 21.5 7.89 21.49 7.7C22.44 7.05 23.26 6.22 24 5.3L23.953 4.57Z"/>
                    </svg>
                </div>
                <span class="font-semibold text-gray-800 text-sm">Twitter</span>
                <span class="text-xs text-gray-500"><span class="counter-animation" data-target="45620">0</span> followers</span>
            </a>

            <!-- YouTube -->
            <a href="#" data-aos="zoom-in" data-aos-delay="200"
               class="group flex flex-col items-center bg-white/70 backdrop-blur-md rounded-2xl p-4 shadow-sm border border-gray-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                    <!-- YouTube Icon -->
                    <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
                        <path d="M23.498 6.186A3.016 3.016 0 0021.376 4.05C19.505 3.545 12 3.545 12 3.545S4.495 3.545 2.623 4.05A3.016 3.016 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136C4.495 20.455 12 20.455 12 20.455s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </div>
                <span class="font-semibold text-gray-800 text-sm">YouTube</span>
                <span class="text-xs text-gray-500"><span class="counter-animation" data-target="89340">0</span> subs</span>
            </a>
        </div>
    </div>
</section>

<!-- Progress Timeline -->
<section class="relative bg-gradient-to-b from-gray-50 via-white to-gray-50 py-24 overflow-hidden" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Title -->
        <div class="text-center mb-20" data-aos="zoom-in">
            <h2 class="text-5xl font-extrabold text-black">
                Community Milestones
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                A journey shaped by our community’s passion and breakthroughs in trading innovation.
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="relative border-l border-white/20 backdrop-blur-sm">

            <!-- Milestone -->
            <div class="mb-12 ml-6 relative group" data-aos="fade-right" data-aos-delay="100">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-primary-green to-green-500 shadow-lg ring-4 ring-primary-green/30 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">
                        Community Launch <span class="text-sm text-gray-500 font-medium">(Jan 2023)</span>
                    </h3>
                    <p class="mt-2 text-gray-700">
                        The very first step in building our global trader network.
                    </p>
                </div>
            </div>

            <!-- Milestone -->
            <div class="mb-12 ml-6 relative group" data-aos="fade-right" data-aos-delay="200">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-primary-purple to-purple-500 shadow-lg ring-4 ring-primary-purple/30 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">
                        Premium Features <span class="text-sm text-gray-500 font-medium">(Mar 2023)</span>
                    </h3>
                    <p class="mt-2 text-gray-700">
                        Exclusive analytics and real-time alerts for subscribed members.
                    </p>
                </div>
            </div>

            <!-- Milestone -->
            <div class="mb-12 ml-6 relative group" data-aos="fade-right" data-aos-delay="300">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-primary-red to-rose-500 shadow-lg ring-4 ring-primary-red/30 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">
                        Global Expansion <span class="text-sm text-gray-500 font-medium">(Sep 2024)</span>
                    </h3>
                    <p class="mt-2 text-gray-700">
                        Welcoming traders from over 50 countries worldwide.
                    </p>
                </div>
            </div>

            <!-- Milestone -->
            <div class="ml-6 relative group" data-aos="fade-right" data-aos-delay="400">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-gray-400 to-gray-300 shadow-lg ring-4 ring-gray-300/40 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">
                        AI Trading Bot <span class="text-sm text-gray-500 font-medium">(Q4 2024)</span>
                    </h3>
                    <p class="mt-2 text-gray-700">
                        Smart automation tools for faster and smarter trading.
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-gradient-to-br from-primary-green/90 to-primary-green/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition"
                 data-aos="flip-left" data-aos-delay="100">
                <div class="text-4xl font-extrabold counter" data-target="50000">0</div>
                <p class="mt-2">Total Members</p>
            </div>
            <div class="bg-gradient-to-br from-primary-purple/90 to-primary-purple/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition"
                 data-aos="flip-left" data-aos-delay="200">
                <div class="text-4xl font-extrabold counter" data-target="120">0</div>
                <p class="mt-2">Countries Reached</p>
            </div>
            <div class="bg-gradient-to-br from-primary-red/90 to-primary-red/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition"
                 data-aos="flip-left" data-aos-delay="300">
                <div class="text-4xl font-extrabold counter" data-target="1500">0</div>
                <p class="mt-2">Premium Users</p>
            </div>
            <div class="bg-gradient-to-br from-gray-700/90 to-gray-600/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition"
                 data-aos="flip-left" data-aos-delay="400">
                <div class="text-4xl font-extrabold counter" data-target="35">0</div>
                <p class="mt-2">Team Members</p>
            </div>
        </div>
    </div>
</section>

<!-- Downloadable Resources -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="zoom-in">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                📄 Study Resources
            </h2>
            <p class="text-lg text-gray-600">
                Download our whitepapers, course outlines, and community plans
            </p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <!-- PDF 1 -->
            <a href="{{asset('pdfs/ITI ACCADEMY PRESENTATION.pdf')}}" target="_blank"
               class="group flex flex-col items-start p-6 bg-white rounded-2xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300"
               data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-indigo-500 to-blue-500 text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">ITI Course Outline</h3>
                <p class="text-sm text-gray-600 mb-3">Full 6-month syllabus overview</p>
                <span class="text-primary-green font-medium group-hover:underline">Download PDF →</span>
            </a>

            <!-- PDF 2 -->
            <a href="{{asset('pdfs/ITI MILLIONAIRE PLAN.pdf')}}" target="_blank"
               class="group flex flex-col items-start p-6 bg-white rounded-2xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300"
               data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-green-500 to-emerald-500 text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">ITI Millionaire Plan</h3>
                <p class="text-sm text-gray-600 mb-3">Community growth and wealth strategy</p>
                <span class="text-primary-green font-medium group-hover:underline">Download PDF →</span>
            </a>

            <!-- PDF 3 -->
            <a href="{{asset('pdfs/ITI RANK PLAN.pdf')}}" target="_blank"
               class="group flex flex-col items-start p-6 bg-white rounded-2xl shadow-md border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300"
               data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-r from-pink-500 to-rose-500 text-white mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">ITI Rank Plan</h3>
                <p class="text-sm text-gray-600 mb-3">Ranking system and benefits explained</p>
                <span class="text-primary-green font-medium group-hover:underline">Download PDF →</span>
            </a>
        </div>
    </div>
</section>



<script>
    // Simple counter animation
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");
        counters.forEach(counter => {
            const target = +counter.getAttribute("data-target");
            let count = 0;
            const step = target / 100;
            const update = () => {
                if (count < target) {
                    count += step;
                    counter.textContent = Math.floor(count);
                    requestAnimationFrame(update);
                } else {
                    counter.textContent = target.toLocaleString();
                }
            };
            update();
        });
    });
</script>


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

<script>
  AOS.init({
    duration: 900,
    once: true,
    offset: 100
  });
</script>
@endsection
