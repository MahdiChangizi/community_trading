@extends('layouts.app')
@section('title', 'Plans')
@section('content')

<script>
function payAlert(type, message) {
    const oldToast = document.getElementById("toast-message");
    if (oldToast) oldToast.remove();

    let borderColor = type === "success" ? "border-green-200" : "border-red-200";
    let textColor   = type === "success" ? "text-green-700" : "text-red-700";
    let iconColor   = type === "success" ? "text-green-500" : "text-red-500";

    const toastHtml = `
        <div id="toast-message" class="fixed top-10 right-4 flex justify-end z-50 animate-fadeIn">
            <div class="max-w-xs bg-white border ${borderColor} rounded-xl shadow-lg" role="alert">
                <div class="flex p-4">
                    <svg class="w-4 h-4 ${iconColor} mt-0.5" fill="currentColor" viewBox="0 0 16 16">
                        ${type === "success"
                            ? '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>'
                            : '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>'
                        }
                    </svg>
                    <div class="ml-3 text-sm ${textColor}">${message}</div>
                </div>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML("beforeend", toastHtml);
    setTimeout(() => {
        const el = document.getElementById("toast-message");
        if (el) el.remove();
    }, 4000);
}
</script>


@if (session('message'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            payAlert("success", "{{ session('message') }}");
        });
    </script>
@endif

{{--  --}}
<!-- ITI ACADEMY Course Overview Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-slate-50 opacity-60"></div>
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(0,0,0,0.03) 1px, transparent 0); background-size: 40px 40px;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-400 to-orange-500 text-gray-900 px-5 py-2.5 rounded-full font-bold text-sm mb-6 shadow-lg">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                </svg>
                PROFESSIONAL TRADING EDUCATION
            </div>

            <h1 class="text-5xl md:text-6xl font-black bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700 bg-clip-text text-transparent mb-5 leading-tight">
                ITI ACADEMY
            </h1>

            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="h-1 w-12 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full"></div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">
                    6-Month Beginner to Pro Trader Course
                </p>
                <div class="h-1 w-12 bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full"></div>
            </div>

            <p class="text-lg text-gray-600 font-medium">
                Master Crypto • Stocks • Forex • Commodities
            </p>
        </div>

        <!-- Course Format Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-20 max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-5 shadow-lg">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/>
                        <path d="M3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Weekly Theory</h3>
                <p class="text-gray-600 leading-relaxed">Comprehensive lessons covering all essential trading concepts and strategies</p>
            </div>

            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-5 shadow-lg">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Practical Application</h3>
                <p class="text-gray-600 leading-relaxed">Real-world trading scenarios and live market analysis sessions</p>
            </div>

            <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-5 shadow-lg">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Weekly Assignments</h3>
                <p class="text-gray-600 leading-relaxed">Hands-on tasks to reinforce learning and build your trading skills</p>
            </div>
        </div>

        <!-- Goal Statement -->
        <div class="max-w-4xl mx-auto mb-20" data-aos="fade-up" data-aos-delay="150">
            <div class="bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-10 shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-yellow-400/20 to-orange-500/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-blue-500/20 to-purple-500/20 rounded-full blur-3xl"></div>

                <div class="relative z-10 text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl mb-6 shadow-xl">
                        <svg class="w-8 h-8 text-gray-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Our Mission</h3>
                    <p class="text-xl text-gray-200 leading-relaxed">
                        Equip you to <span class="text-yellow-400 font-bold">trade independently</span> using advanced technical analysis, fundamental research, and proven psychological strategies
                    </p>
                </div>
            </div>
        </div>

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
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Trading Fundamentals & Market Basics</h3>
                            <p class="text-sm text-blue-600 font-semibold">Month 1 • Foundation Building</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Build a solid foundation across all markets</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>What is trading? Trader vs investor mindset</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Understanding Crypto, Stocks, Forex, Commodities, and Indices</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Trader types: Scalper, Day, Swing, Position trading</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>How exchanges and brokers work (CEX vs DEX)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Order types: Market, Limit, Stop, OCO explained</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Platform mastery: TradingView, MetaTrader, Binance, Bybit</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Crypto essentials: Blockchain, wallets, on-chain vs off-chain</span>
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
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Technical Analysis Essentials</h3>
                            <p class="text-sm text-green-600 font-semibold">Month 2 • Chart Mastery</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Learn to read and analyze price movements on any chart</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Candlestick patterns (Doji, Hammer, Engulfing, etc.)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Chart patterns (Triangles, Head & Shoulders, Wedges)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Support & Resistance zones (static and dynamic)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Trend identification (higher highs/lows analysis)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Volume & volatility fundamentals</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Key indicators: Moving Averages (SMA/EMA), RSI, MACD</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Bollinger Bands & Fibonacci Retracement techniques</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Multi-timeframe analysis across all asset classes</span>
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
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Risk Management & Trading Psychology</h3>
                            <p class="text-sm text-purple-600 font-semibold">Month 3 • Mindset & Protection</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Protect your capital and build the winning trader mindset</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Risk per trade percentage models</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Risk-reward ratio optimization (1:2, 1:3+)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Position sizing calculation methods</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Stop-loss and take-profit placement strategies</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Understanding compounding and drawdown management</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Trading journal setup and performance tracking</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Emotional discipline and avoiding FOMO & revenge trading</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Crypto-specific psychology: handling extreme volatility</span>
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
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Strategy Development & Backtesting</h3>
                            <p class="text-sm text-orange-600 font-semibold">Month 4 • System Building</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Build and test proven trading strategies across all markets</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Strategy components: Entry, Exit, Confirmation, Risk</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Breakout trading strategies</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Pullback and retest strategies</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Moving Average crossover systems</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>RSI/MACD divergence setups</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Fibonacci and structure confluence trading</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Smart money concepts and ICT methodology</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Scalping vs swing trading approaches</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Backtesting techniques (manual + TradingView replay)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>DeFi vs centralized exchange strategy differences</span>
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
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Fundamental & Sentiment Analysis</h3>
                            <p class="text-sm text-red-600 font-semibold">Month 5 • Market Intelligence</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-4">Add macroeconomic and news-based understanding to your trading</p>
                    <ul class="space-y-2.5 text-gray-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Economic indicators (GDP, CPI, interest rates, NFP)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Central banks & monetary policy (Forex & commodities)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Earnings reports analysis for stocks</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Tokenomics and whitepaper evaluation for crypto</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>On-chain metrics: active addresses, volume, exchange flows</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Market sentiment tools: Fear & Greed Index</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Advanced tools: CoinGlass, CryptoQuant, COT Report</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Using news events to plan high-probability trades</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span>Combining fundamental + technical analysis strategies</span>
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
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Trading Plan, Execution & Going Live</h3>
                            <p class="text-sm text-yellow-600 font-semibold">Month 6 • Professional Launch</p>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium mb-5">Finalize your trading plan and start real or challenge trading</p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"/></svg>
                                Trading Plan Development
                            </h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Complete strategy documentation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Setup criteria and entry rules</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Goals and performance targets</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Risk and money management protocols</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    <span>Daily routine and journaling system</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 020 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg>
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

    <!-- Bottom CTA -->
    <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="300">
        <div class="inline-flex flex-col items-center gap-4 bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 border-2 border-gray-200 shadow-xl max-w-2xl">
            <div class="flex items-center gap-3">
                <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"/>
                </svg>
                <h3 class="text-2xl font-bold text-gray-900">Ready to Start Your Journey?</h3>
            </div>
            <p class="text-gray-600 text-lg text-center leading-relaxed">
                Transform from beginner to professional trader in just 6 months. Choose your plan below and take the first step toward financial independence.
            </p>
            <div class="flex items-center gap-6 text-sm text-gray-500 mt-2">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                    </svg>
                    <span class="font-medium">Certificate Included</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"/>
                    </svg>
                    <span class="font-medium">Lifetime Access</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                    <span class="font-medium">24/7 Support</span>
                </div>
            </div>
        </div>
    </div>

</div>
</section>

{{--  --}}
<section class="py-20 bg-gradient-to-br from-slate-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-4">
                Choose Your Trading Journey
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Transform your trading skills with our comprehensive courses designed for every level
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            @foreach ($plans as $index => $plan)
            @php
                $colors = [
                    0 => [
                        'gradient' => 'linear-gradient(135deg, #FFD700 0%, #FFA500 100%)', // طلایی کلاسیک
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
                        'gradient' => 'linear-gradient(135deg, #CD7F32 0%, #FFD700 100%)', // برنز به طلایی
                        'accent'   => '#D4AF37',
                        'bg'       => '#FFF5E1',
                        'border'   => '#F0E68C',
                        'popular'  => false
                    ]
                ];
                $color = $colors[$index % 3];
            @endphp

            <div class="relative group">

                <div class="bg-white rounded-2xl shadow-xl border-2 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 overflow-hidden {{ $color['popular'] ? 'ring-2 ring-purple-200' : '' }}" style="border-color: {{ $color['border'] }}">

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
                                @foreach(array_slice($features, 0, 6) as $feature)
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
                        @if (!Auth::check())
                        <button onclick="window.location.href='{{ route('login') }}'"
                                class="w-full text-white py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300 group"
                                style="background: {{ $color['gradient'] }}">
                            <span class="flex items-center justify-center gap-2">
                                Start Learning Now
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </span>
                        </button>
                        @else
                        <button onclick="openPurchaseModal('{{ $plan->id }}','{{ $plan->name }}','{{ $plan->price_usdt }}')"
                                class="w-full text-white py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all duration-300 group"
                                style="background: {{ $color['gradient'] }}">
                            <span class="flex items-center justify-center gap-2">
                                Start Learning Now
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </span>
                        </button>
                        @endif

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
                </div>
            </div>
            @endforeach
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 text-center">
            <div class="inline-flex items-center gap-8 text-gray-500 text-sm">
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
<div id="purchaseModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center" data-aos="fade-up" data-aos-delay="150">
    <div class="bg-white rounded-2xl max-w-sm w-full p-6 relative">
        <button onclick="closePurchaseModal()" class="absolute top-3 right-3 text-gray-400">✕</button>
        <h2 class="text-xl font-semibold mb-2">Connect Wallet</h2>
        <p class="text-gray-500 text-sm mb-4">Pay with BEP20 USDT on Binance Smart Chain</p>

        <div class="bg-gray-100 rounded-xl p-3 text-center mb-4">
            <p id="selectedPlanName" class="text-gray-700 font-medium"></p>
            <p id="selectedPlanPrice" class="text-gray-900 font-semibold text-lg"></p>
        </div>

        <form id="purchaseForm" method="POST" action="">
            @csrf
            <input type="hidden" name="chain" value="bep20">
            <input type="hidden" name="pay_wallet_address" id="walletAddressInput">
            <input type="hidden" name="tx_hash" id="txHashInput">

            <button type="button" id="payWithMetamaskBtn" class="hidden md:flex w-full border border-gray-200 rounded-xl p-3 mb-4 hover:bg-gray-50 items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/MetaMask_Fox.svg" class="w-7 h-7" alt="MetaMask">
                <span class="ml-3">Connect with MetaMask</span>
            </button>
            <button type="button" id="payWithCoinbaseBtn" class="md:hidden w-full border border-gray-200 rounded-xl p-3 mb-4 hover:bg-gray-50 items-center flex">
                <img src="https://avatars.githubusercontent.com/u/18060234?s=200&v=4" class="w-7 h-7" alt="Coinbase Wallet">
                <span class="ml-3">Connect with Coinbase Wallet</span>
            </button>
            <button type="button" id="payWithTrustBtn" class="md:hidden w-full border border-gray-200 rounded-xl p-3 mb-4 hover:bg-gray-50 items-center flex">
                <img src="https://trustwallet.com/assets/images/media/assets/TWT.png" class="w-7 h-7" alt="Trust Wallet">
                <span class="ml-3">Connect with Trust Wallet</span>
            </button>

            {{-- Connect with Coinbase Wallet or Trust Wallet on mobile. --}}

            <button id="confirmBtn" type="submit" disabled
                class="w-full py-3 rounded-xl bg-gray-300 cursor-not-allowed font-semibold">
                Confirm Purchase
            </button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/ethers@5.7.2/dist/ethers.umd.min.js"></script>
<script>
let selectedPlanId = null;
let selectedPlanPrice = null;
let userWallet = null;
let provider, signer;
const receiverWallet = "0xD992B8a83a0F9deA3Cf15D72C9FBb2c995Ffc262";
const usdtBep20Address = "0x55d398326f99059fF775485246999027B3197955";

function openPurchaseModal(planId, planName, planPrice) {
    selectedPlanId = planId;
    selectedPlanPrice = planPrice;
    document.getElementById('selectedPlanName').innerText = planName;
    document.getElementById('selectedPlanPrice').innerText = planPrice + ' USDT';
    document.getElementById('purchaseForm').action = `/plans/${planId}/purchase`;
    document.getElementById('purchaseModal').classList.remove('hidden');
}

function closePurchaseModal() {
    document.getElementById('purchaseModal').classList.add('hidden');
}

// ===== Force switch to Binance Smart Chain =====
async function switchToBSC() {
    const chainId = '0x38'; // 56 in decimal for BSC Mainnet
    try {
        await window.ethereum.request({
            method: 'wallet_switchEthereumChain',
            params: [{ chainId }],
        });
    } catch (switchError) {
        if (switchError.code === 4902) { // chain not found
            await window.ethereum.request({
                method: 'wallet_addEthereumChain',
                params: [{
                    chainId,
                    chainName: 'Binance Smart Chain',
                    nativeCurrency: { name: 'BNB', symbol: 'BNB', decimals: 18 },
                    rpcUrls: ['https://bsc-dataseed.binance.org/'],
                    blockExplorerUrls: ['https://bscscan.com']
                }],
            });
        } else {
            console.error(switchError);
            payAlert('error', 'Failed to switch network: ' + switchError.message);
        }
    }
}

// ajax-pay /plans/{plan}/purchase
function planPurchasePay(id, pay_wallet_address, tx_hash) {
    fetch(`/plans/${id}/purchase`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            chain: 'bep20',
            pay_wallet_address,
            tx_hash
        })
    }).then(response => response.json())
      .then(data => {
          if (data.message) {
              payAlert('success', data.message);
          }
      }).catch(error => {
          console.error('Error:', error);
          payAlert('error', 'Purchase confirmation failed: ' + error.message);
      });
}

// ===== Step 1: Connect Wallet =====
async function connectWalletBep20(type) {
    let wallet_type = type;
    try {
        const ua = navigator.userAgent.toLowerCase();
        const isMobile = /android|iphone|ipad/.test(ua);

        if (!window.ethereum) {
            if (isMobile) {

                const currentUrl = encodeURIComponent(window.location.href);

                if (wallet_type === "coinbase") {
                    window.location.href = `https://go.cb-w.com/dapp?cb_url=${currentUrl}`;
                } else if (wallet_type === "trust") {
                    window.location.href = `trust://open_url?coin_id=60&url=${currentUrl}`;
                }
            } else {
                alert("MetaMask or other Ethereum wallet not detected!");
            }
            return;
        }

        // ۲. دسکتاپ یا موبایل با افزونه window.ethereum
        await switchToBSC();

        provider = new ethers.providers.Web3Provider(window.ethereum);
        await provider.send("eth_requestAccounts", []);

        signer = provider.getSigner();
        userWallet = await signer.getAddress();

        // ۳. نمایش والت در input
        document.getElementById('walletAddressInput').value = userWallet;
        payAlert('success', "Wallet connected");

        // ۴. فعال‌کردن دکمه تأیید
        let confirmBtn = document.getElementById('confirmBtn');
        confirmBtn.disabled = false;
        confirmBtn.classList.remove('bg-gray-300', 'cursor-not-allowed');
        confirmBtn.classList.add('bg-green-500', 'hover:bg-green-600', 'text-white');

    } catch (err) {
        console.error(err);
        payAlert('error', 'Connection failed: ' + err.message);
    }
}


// ===== Step 2: Pay USDT =====
async function payUsdtBep20(amountUsdt) {
    if (!signer || !userWallet) {
        return payAlert('error', 'Please connect your wallet first.');
    }
    try {
        const abi = [
    "function decimals() view returns (uint8)",
    "function transfer(address to, uint amount) public returns (bool)"
];
        const contract = new ethers.Contract(usdtBep20Address, abi, signer);

        let decimals = await contract.decimals();
        payAlert('success', `Paying ${amountUsdt.toString()} USDT...`);

        let value = ethers.utils.parseUnits(amountUsdt.toString(), decimals);

        const tx = await contract.transfer(receiverWallet, value);

        document.getElementById("txHashInput").value = tx.hash;
        planPurchasePay(selectedPlanId, userWallet, tx.hash);
        closePurchaseModal();
    } catch (err) {
        console.error(err);
        payAlert('error', 'Payment failed Please try again.');

    }
}


document.getElementById('payWithMetamaskBtn')
    .addEventListener('click', () => connectWalletBep20("metamask"));

document.getElementById('payWithCoinbaseBtn')
    .addEventListener('click', () => connectWalletBep20("coinbase"));

document.getElementById('payWithTrustBtn')
    .addEventListener('click', () => connectWalletBep20("trust"));


document.getElementById('confirmBtn').addEventListener('click', function(e) {
    e.preventDefault();
    if (selectedPlanPrice) {
        payUsdtBep20(selectedPlanPrice);
    } else {
        payAlert('error', 'No plan selected.');
    }
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


