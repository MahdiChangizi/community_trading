@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Join Our <span class="gradient-text">Trading</span> Community
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Connect with thousands of traders worldwide. Share strategies, learn from experts, and track your progress on your trading journey.
            </p>
            <div class="flex flex-wrap justify-center items-center gap-8 text-sm text-gray-500">
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
        <div class="text-center mb-12 slide-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Connect With Our Community</h2>
            <p class="text-xl text-gray-600">Join thousands of traders on your preferred platform</p>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <!-- Telegram -->
            <a href="#" 
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
            <a href="#" 
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
            <a href="#" 
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
            <a href="#" 
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
<section class="relative bg-gradient-to-b from-gray-50 via-white to-gray-50 py-24 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Title -->
        <div class="text-center mb-20">
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
            <div class="mb-12 ml-6 relative group">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-primary-green to-green-500 shadow-lg ring-4 ring-primary-green/30 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">Community Launch <span class="text-sm text-gray-500 font-medium">(Jan 2023)</span></h3>
                    <p class="mt-2 text-gray-700">The very first step in building our global trader network.</p>
                </div>
            </div>

            <!-- Milestone -->
            <div class="mb-12 ml-6 relative group">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-primary-purple to-purple-500 shadow-lg ring-4 ring-primary-purple/30 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">Premium Features <span class="text-sm text-gray-500 font-medium">(Mar 2023)</span></h3>
                    <p class="mt-2 text-gray-700">Exclusive analytics and real-time alerts for subscribed members.</p>
                </div>
            </div>

            <!-- Milestone -->
            <div class="mb-12 ml-6 relative group">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-primary-red to-rose-500 shadow-lg ring-4 ring-primary-red/30 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">Global Expansion <span class="text-sm text-gray-500 font-medium">(Sep 2024)</span></h3>
                    <p class="mt-2 text-gray-700">Welcoming traders from over 50 countries worldwide.</p>
                </div>
            </div>

            <!-- Milestone -->
            <div class="ml-6 relative group">
                <div class="absolute -left-3 w-6 h-6 rounded-full bg-gradient-to-r from-gray-400 to-gray-300 shadow-lg ring-4 ring-gray-300/40 group-hover:scale-110 transition"></div>
                <div class="bg-white/60 backdrop-blur-xl border border-white/40 shadow-xl rounded-2xl p-6 transition transform group-hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-900">AI Trading Bot <span class="text-sm text-gray-500 font-medium">(Q4 2024)</span></h3>
                    <p class="mt-2 text-gray-700">Smart automation tools for faster and smarter trading.</p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-gradient-to-br from-primary-green/90 to-primary-green/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition">
                <div class="text-4xl font-extrabold counter" data-target="50000">0</div>
                <p class="mt-2">Total Members</p>
            </div>
            <div class="bg-gradient-to-br from-primary-purple/90 to-primary-purple/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition">
                <div class="text-4xl font-extrabold counter" data-target="120">0</div>
                <p class="mt-2">Countries Reached</p>
            </div>
            <div class="bg-gradient-to-br from-primary-red/90 to-primary-red/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition">
                <div class="text-4xl font-extrabold counter" data-target="1500">0</div>
                <p class="mt-2">Premium Users</p>
            </div>
            <div class="bg-gradient-to-br from-gray-700/90 to-gray-600/70 backdrop-blur-lg rounded-3xl shadow-lg p-8 text-center text-white transform hover:scale-[1.02] transition">
                <div class="text-4xl font-extrabold counter" data-target="35">0</div>
                <p class="mt-2">Team Members</p>
            </div>
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


<!-- Trading Performance -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 slide-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Trading Performance</h2>
            <p class="text-xl text-gray-600">Track our community's trading success with real-time performance data</p>
        </div>

        <!-- Performance Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="trading-card p-6 slide-up">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Win Rate</h3>
                    <div class="w-10 h-10 bg-primary-green rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-2"><span class="counter-animation" data-target="89">0</span>.2%</div>
                <div class="flex items-center text-sm">
                    <svg class="w-4 h-4 text-primary-green mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                    <span class="text-primary-green">+2.1% this month</span>
                </div>
            </div>

            <div class="trading-card p-6 slide-up">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Avg. Monthly Return</h3>
                    <div class="w-10 h-10 bg-primary-purple rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-2"><span class="counter-animation" data-target="24">0</span>.7%</div>
                <div class="flex items-center text-sm">
                    <svg class="w-4 h-4 text-primary-green mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                    <span class="text-primary-green">+3.2% this month</span>
                </div>
            </div>

            <div class="trading-card p-6 slide-up">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Total Trades</h3>
                    <div class="w-10 h-10 bg-primary-yellow rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-2"><span class="counter-animation" data-target="15420">0</span></div>
                <div class="flex items-center text-sm">
                    <svg class="w-4 h-4 text-primary-green mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                    <span class="text-primary-green">+847 this month</span>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto pb-10">
            <table class="min-w-full text-sm text-left bg-white shadow-lg rounded-xl overflow-hidden">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-6 py-3 font-semibold">Asset</th>
                        <th class="px-6 py-3 font-semibold">Entry</th>
                        <th class="px-6 py-3 font-semibold">Current</th>
                        <th class="px-6 py-3 font-semibold">PnL</th>
                    </tr>
                </thead>
                <tbody id="performance-body" class="divide-y divide-gray-100">
                    <!-- Rows injected by JS -->
                </tbody>
            </table>
        </div>
        
        <script>
            // آیکون‌های رسمی کریپتو به صورت SVG
            const icons = {
                BTC: `<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"viewBox="0 0 4091.27 4091.73" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003"> <g id="Layer_x0020_1">  <metadata id="CorelCorpID_0Corel-Layer"/>  <g id="_1421344023328">   <path fill="#F7931A" fill-rule="nonzero" d="M4030.06 2540.77c-273.24,1096.01 -1383.32,1763.02 -2479.46,1489.71 -1095.68,-273.24 -1762.69,-1383.39 -1489.33,-2479.31 273.12,-1096.13 1383.2,-1763.19 2479,-1489.95 1096.06,273.24 1763.03,1383.51 1489.76,2479.57l0.02 -0.02z"/>   <path fill="white" fill-rule="nonzero" d="M2947.77 1754.38c40.72,-272.26 -166.56,-418.61 -450,-516.24l91.95 -368.8 -224.5 -55.94 -89.51 359.09c-59.02,-14.72 -119.63,-28.59 -179.87,-42.34l90.16 -361.46 -224.36 -55.94 -92 368.68c-48.84,-11.12 -96.81,-22.11 -143.35,-33.69l0.26 -1.16 -309.59 -77.31 -59.72 239.78c0,0 166.56,38.18 163.05,40.53 90.91,22.69 107.35,82.87 104.62,130.57l-104.74 420.15c6.26,1.59 14.38,3.89 23.34,7.49 -7.49,-1.86 -15.46,-3.89 -23.73,-5.87l-146.81 588.57c-11.11,27.62 -39.31,69.07 -102.87,53.33 2.25,3.26 -163.17,-40.72 -163.17,-40.72l-111.46 256.98 292.15 72.83c54.35,13.63 107.61,27.89 160.06,41.3l-92.9 373.03 224.24 55.94 92 -369.07c61.26,16.63 120.71,31.97 178.91,46.43l-91.69 367.33 224.51 55.94 92.89 -372.33c382.82,72.45 670.67,43.24 791.83,-303.02 97.63,-278.78 -4.86,-439.58 -206.26,-544.44 146.69,-33.83 257.18,-130.31 286.64,-329.61l-0.07 -0.05zm-512.93 719.26c-69.38,278.78 -538.76,128.08 -690.94,90.29l123.28 -494.2c152.17,37.99 640.17,113.17 567.67,403.91zm69.43 -723.3c-63.29,253.58 -453.96,124.75 -580.69,93.16l111.77 -448.21c126.73,31.59 534.85,90.55 468.94,355.05l-0.02 0z"/>  </g> </g></svg>`,
                ETH: `<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"viewBox="0 0 784.37 1277.39" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003"> <g id="Layer_x0020_1">  <metadata id="CorelCorpID_0Corel-Layer"/>  <g id="_1421394342400">   <g>    <polygon fill="#343434" fill-rule="nonzero" points="392.07,0 383.5,29.11 383.5,873.74 392.07,882.29 784.13,650.54 "/>    <polygon fill="#8C8C8C" fill-rule="nonzero" points="392.07,0 -0,650.54 392.07,882.29 392.07,472.33 "/>    <polygon fill="#3C3C3B" fill-rule="nonzero" points="392.07,956.52 387.24,962.41 387.24,1263.28 392.07,1277.38 784.37,724.89 "/>    <polygon fill="#8C8C8C" fill-rule="nonzero" points="392.07,1277.38 392.07,956.52 -0,724.89 "/>    <polygon fill="#141414" fill-rule="nonzero" points="392.07,882.29 784.13,650.54 392.07,472.33 "/>    <polygon fill="#393939" fill-rule="nonzero" points="0,650.54 392.07,882.29 392.07,472.33 "/>   </g>  </g> </g></svg>`,
                SOL: `<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 397.7 311.7" style="enable-background:new 0 0 397.7 311.7;" xml:space="preserve"><style type="text/css">	.st0{fill:url(#SVGID_1_);}	.st1{fill:url(#SVGID_2_);}	.st2{fill:url(#SVGID_3_);}</style><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="360.8791" y1="351.4553" x2="141.213" y2="-69.2936" gradientTransform="matrix(1 0 0 -1 0 314)">	<stop  offset="0" style="stop-color:#00FFA3"/>	<stop  offset="1" style="stop-color:#DC1FFF"/></linearGradient><path class="st0" d="M64.6,237.9c2.4-2.4,5.7-3.8,9.2-3.8h317.4c5.8,0,8.7,7,4.6,11.1l-62.7,62.7c-2.4,2.4-5.7,3.8-9.2,3.8H6.5	c-5.8,0-8.7-7-4.6-11.1L64.6,237.9z"/><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="264.8291" y1="401.6014" x2="45.163" y2="-19.1475" gradientTransform="matrix(1 0 0 -1 0 314)">	<stop  offset="0" style="stop-color:#00FFA3"/>	<stop  offset="1" style="stop-color:#DC1FFF"/></linearGradient><path class="st1" d="M64.6,3.8C67.1,1.4,70.4,0,73.8,0h317.4c5.8,0,8.7,7,4.6,11.1l-62.7,62.7c-2.4,2.4-5.7,3.8-9.2,3.8H6.5	c-5.8,0-8.7-7-4.6-11.1L64.6,3.8z"/><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="312.5484" y1="376.688" x2="92.8822" y2="-44.061" gradientTransform="matrix(1 0 0 -1 0 314)">	<stop  offset="0" style="stop-color:#00FFA3"/>	<stop  offset="1" style="stop-color:#DC1FFF"/></linearGradient><path class="st2" d="M333.1,120.1c-2.4-2.4-5.7-3.8-9.2-3.8H6.5c-5.8,0-8.7,7-4.6,11.1l62.7,62.7c2.4,2.4,5.7,3.8,9.2,3.8h317.4	c5.8,0,8.7-7,4.6-11.1L333.1,120.1z"/></svg>`,
                ADA: `<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 375 346.5" style="enable-background:new 0 0 375 346.5;" xml:space="preserve"><style type="text/css">	.st0{fill:#0033AD;}</style><g id="Layer_2_1_">	<g id="Layer_1-2">		<path class="st0" d="M102.8,172c-0.8,13.9,9.9,25.8,23.8,26.6c0.5,0,1,0,1.5,0c14,0,25.3-11.3,25.2-25.3c0-14-11.3-25.3-25.3-25.2			C114.6,148.1,103.5,158.6,102.8,172z"/>		<path class="st0" d="M8.6,165.5c-4.5-0.3-8.4,3.2-8.6,7.7s3.2,8.4,7.7,8.6c4.5,0.3,8.3-3.2,8.6-7.7			C16.6,169.6,13.1,165.8,8.6,165.5C8.6,165.5,8.6,165.5,8.6,165.5z"/>		<path class="st0" d="M101.2,25.4c4-2,5.6-7,3.6-11c-2-4-7-5.6-11-3.6c-4,2-5.6,6.9-3.6,10.9C92.2,25.8,97.1,27.5,101.2,25.4			C101.1,25.4,101.2,25.4,101.2,25.4z"/>		<path class="st0" d="M126.8,70.1c6.2-3.1,8.7-10.7,5.6-16.9s-10.7-8.7-16.9-5.6c-6.2,3.1-8.7,10.7-5.6,16.9			C113,70.7,120.6,73.2,126.8,70.1z"/>		<path class="st0" d="M40.6,100.8c4.8,3.1,11.2,1.8,14.4-3c3.1-4.8,1.8-11.2-3-14.4c-4.8-3.1-11.2-1.8-14.4,3c0,0,0,0,0,0			C34.4,91.2,35.8,97.7,40.6,100.8z"/>		<path class="st0" d="M55.9,161c-7-0.4-12.9,4.9-13.3,11.9s4.9,12.9,11.9,13.3c7,0.4,12.9-4.9,13.3-11.9c0,0,0,0,0,0			C68.2,167.4,62.9,161.4,55.9,161z"/>		<path class="st0" d="M42,245.7c-5.1,2.6-7.2,8.8-4.6,14c2.6,5.1,8.8,7.2,14,4.6c5.1-2.6,7.2-8.8,4.6-14c0,0,0,0,0,0			C53.4,245.2,47.1,243.1,42,245.7C42,245.7,42,245.7,42,245.7z"/>		<path class="st0" d="M91,134.9c6.9,4.5,16.1,2.6,20.5-4.3c4.5-6.9,2.6-16.1-4.3-20.5c-6.9-4.5-16.1-2.6-20.5,4.3			C82.2,121.2,84.1,130.4,91,134.9C91,134.9,91,134.9,91,134.9z"/>		<path class="st0" d="M246.5,69.1c5.8,3.8,13.7,2.2,17.5-3.6s2.2-13.7-3.6-17.5c-5.8-3.8-13.7-2.2-17.5,3.6c0,0,0,0,0,0			C239,57.5,240.6,65.3,246.5,69.1C246.5,69.1,246.5,69.1,246.5,69.1z"/>		<path class="st0" d="M272.3,24.6c3.8,2.5,8.8,1.4,11.3-2.4s1.4-8.8-2.4-11.3c-3.8-2.5-8.8-1.4-11.3,2.3			C267.5,17,268.6,22.1,272.3,24.6C272.3,24.6,272.3,24.6,272.3,24.6z"/>		<path class="st0" d="M248.4,147.9c-13.9-0.8-25.9,9.9-26.6,23.8c-0.8,13.9,9.9,25.9,23.8,26.6c0.5,0,1,0,1.4,0			c13.9,0,25.2-11.3,25.2-25.3C272.3,159.7,261.8,148.6,248.4,147.9L248.4,147.9z"/>		<path class="st0" d="M135.1,133.1c4.3,8.5,13,13.9,22.6,13.9c13.9,0,25.2-11.3,25.2-25.3c0-3.9-0.9-7.8-2.7-11.4			c-6.3-12.5-21.5-17.5-33.9-11.2C133.8,105.5,128.8,120.7,135.1,133.1L135.1,133.1z"/>		<path class="st0" d="M333,100.8c5.1-2.6,7.1-8.9,4.5-14c-2.6-5.1-8.9-7.1-14-4.5c-5.1,2.6-7.1,8.8-4.6,13.9			C321.6,101.3,327.8,103.4,333,100.8C333,100.8,333,100.8,333,100.8z"/>		<path class="st0" d="M269,108.8c-7.3,3.7-10.3,12.6-6.6,19.9c3.7,7.3,12.6,10.3,19.9,6.6c7.3-3.7,10.3-12.6,6.6-19.9			C285.2,108.1,276.3,105.2,269,108.8z"/>		<path class="st0" d="M186.5,20.8c5.7,0.3,10.6-4.1,11-9.8s-4.1-10.6-9.8-11c-5.7-0.3-10.6,4-11,9.7			C176.4,15.5,180.8,20.4,186.5,20.8C186.5,20.8,186.5,20.8,186.5,20.8z"/>		<path class="st0" d="M186.4,86.1c8.2,0.5,15.2-5.8,15.6-14c0.5-8.2-5.8-15.2-14-15.6c-8.2-0.5-15.2,5.8-15.6,14			C172,78.7,178.2,85.7,186.4,86.1C186.4,86.1,186.4,86.1,186.4,86.1z"/>		<path class="st0" d="M106,237.7c7.3-3.7,10.3-12.6,6.6-19.9c-3.7-7.3-12.6-10.3-19.9-6.6c-7.3,3.7-10.3,12.6-6.6,19.9			C89.8,238.4,98.7,241.4,106,237.7z"/>		<path class="st0" d="M196,107.8c-7.6,11.7-4.4,27.3,7.3,34.9c11.7,7.6,27.3,4.4,34.9-7.3c7.6-11.7,4.4-27.3-7.3-34.9			c-4.1-2.7-8.9-4.1-13.8-4.1C208.6,96.4,200.7,100.7,196,107.8z"/>		<path class="st0" d="M239.9,213.4c-6.3-12.5-21.5-17.5-33.9-11.2c-12.5,6.3-17.5,21.5-11.2,33.9c6.3,12.5,21.5,17.5,33.9,11.2			c0,0,0,0,0,0c12.4-6.2,17.5-21.2,11.3-33.7C240,213.5,240,213.5,239.9,213.4z"/>		<path class="st0" d="M284,211.6c-6.9-4.5-16.1-2.6-20.5,4.3c-4.5,6.9-2.6,16.1,4.3,20.5c6.9,4.5,16.1,2.6,20.5-4.3			C292.8,225.3,290.9,216.1,284,211.6C284,211.6,284,211.6,284,211.6z"/>		<path class="st0" d="M332.4,173.7c0.4-7-4.9-12.9-11.9-13.3c-7-0.4-12.9,4.9-13.3,11.9c-0.4,7,4.9,12.9,11.9,13.3c0,0,0,0,0,0			C326,186,332,180.6,332.4,173.7z"/>		<path class="st0" d="M367.3,164.7c-4.5-0.3-8.4,3.2-8.6,7.7s3.2,8.4,7.7,8.6c4.5,0.3,8.3-3.2,8.6-7.7			C375.2,168.8,371.8,165,367.3,164.7z"/>		<path class="st0" d="M334.4,245.7c-4.8-3.1-11.2-1.8-14.4,3c-3.1,4.8-1.8,11.2,3,14.4c4.8,3.1,11.2,1.8,14.4-3			C340.6,255.3,339.2,248.8,334.4,245.7C334.4,245.7,334.4,245.7,334.4,245.7z"/>		<path class="st0" d="M102.6,321.9c-3.8-2.5-8.8-1.4-11.3,2.3c-2.5,3.8-1.4,8.8,2.3,11.3c3.8,2.5,8.8,1.4,11.3-2.3c0,0,0,0,0,0			C107.5,329.5,106.4,324.4,102.6,321.9z"/>		<path class="st0" d="M273.8,321.1c-4,2-5.6,7-3.6,11c2,4,7,5.6,11,3.6c4-2,5.6-6.9,3.6-10.9C282.8,320.7,277.9,319,273.8,321.1			C273.9,321.1,273.8,321.1,273.8,321.1z"/>		<path class="st0" d="M179,238.7c7.6-11.7,4.4-27.3-7.3-35c-11.7-7.6-27.3-4.4-35,7.3s-4.4,27.3,7.3,35c4.1,2.7,8.9,4.1,13.8,4.1			C166.4,250.2,174.3,245.9,179,238.7z"/>		<path class="st0" d="M128.5,277.4c-5.8-3.8-13.7-2.2-17.5,3.6c-3.8,5.8-2.2,13.7,3.6,17.5s13.7,2.2,17.5-3.6c0,0,0,0,0,0			C136,289.1,134.4,281.2,128.5,277.4z"/>		<path class="st0" d="M187.4,325.7c-5.7-0.3-10.6,4.1-11,9.8s4.1,10.6,9.8,11c5.7,0.3,10.6-4,11-9.7			C197.5,331,193.1,326.1,187.4,325.7C187.4,325.7,187.4,325.7,187.4,325.7z"/>		<path class="st0" d="M187.5,260.4c-8.2-0.5-15.2,5.8-15.6,14c-0.5,8.2,5.8,15.2,14,15.6c8.2,0.4,15.2-5.8,15.6-14			C202,267.9,195.7,260.8,187.5,260.4C187.5,260.4,187.5,260.4,187.5,260.4z"/>		<path class="st0" d="M248.2,276.4c-6.2,3.2-8.7,10.8-5.5,17c3.2,6.2,10.8,8.7,17,5.5c6.2-3.1,8.7-10.7,5.6-16.9			C262.1,275.8,254.5,273.2,248.2,276.4C248.2,276.4,248.2,276.4,248.2,276.4z"/>	</g></g></svg>`,
                MATIC: `<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 178 161" style="enable-background:new 0 0 178 161;" xml:space="preserve"><style type="text/css">.st0{fill:#6C00F6;}</style><path class="st0" d="M66.8,54.7l-16.7-9.7L0,74.1v58l50.1,29l50.1-29V41.9L128,25.8l27.8,16.1v32.2L128,90.2l-16.7-9.7v25.8l16.7,9.7l50.1-29V29L128,0L77.9,29v90.2l-27.8,16.1l-27.8-16.1V86.9l27.8-16.1l16.7,9.7V54.7z"/></svg>`
            };
            
            async function loadPerformance() {
                try {
                    const res = await fetch('/crypto-prices');
                    const { data } = await res.json();
            
                    document.getElementById('performance-body').innerHTML = Object.keys(icons).map(symbol => {
                        const asset = assets.find(a => a.symbol === symbol);
                        const coin = data[symbol];
                        if (!asset || !coin?.quote?.USD) return '';
                        const price = coin.quote.USD.price ?? asset.entry;
                        const pnlValue = price - asset.entry;
                        const pnlPercent = (pnlValue / asset.entry * 100).toFixed(2);
                        const isProfit = pnlValue >= 0;
                        return `
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 flex items-center space-x-3">
                                    <div class="w-6 h-6 rounded-full flex items-center justify-center">
                                        ${icons[symbol]}
                                    </div>
                                    <div>
                                        <div class="font-semibold text-gray-900">${asset.name}</div>
                                        <div class="text-gray-500 text-xs">${symbol}/USDT</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">$${asset.entry}</td>
                                <td class="px-6 py-4">$${price.toFixed(2)}</td>
                                <td class="px-6 py-4 font-medium ${isProfit ? 'text-green-500' : 'text-red-500'}">
                                    ${isProfit ? '▲ ' : '▼ '}${pnlValue.toFixed(2)} (${pnlPercent}%)
                                </td>
                            </tr>
                        `;
                    }).join('');
                } catch (err) {
                    console.error('Load error:', err);
                }
            }
            
            // دیتای پایه برای ورود اولیه رمزها
            const assets = [
                { symbol: 'BTC', name: 'Bitcoin', entry: 67450 },
                { symbol: 'ETH', name: 'Ethereum', entry: 3420 },
                { symbol: 'SOL', name: 'Solana', entry: 142.5 },
                { symbol: 'ADA', name: 'Cardano', entry: 0.89 },
                { symbol: 'MATIC', name: 'Polygon', entry: 1.05 }
            ];
            
            loadPerformance();
            setInterval(loadPerformance, 60000);
        </script>
        
        
    </div>
</section>


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
@endsection