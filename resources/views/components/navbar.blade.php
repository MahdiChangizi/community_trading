<script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');

            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
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
                        // Close mobile menu if open
                        mobileMenu.classList.add('hidden');
                    }
                });
            });

            // Fade in animations on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });

            // Counter animation
            function animateCounter(element, start, end, duration) {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const current = Math.floor(progress * (end - start) + start);
                    element.textContent = current.toLocaleString();
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }

            // Animate counters when they come into view
            const counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                        animateCounter(counter, 0, target, 2000);
                        counterObserver.unobserve(counter);
                    }
                });
            });

            document.querySelectorAll('.counter').forEach(counter => {
                counterObserver.observe(counter);
            });

            // Reviews carousel
            let currentSlide = 0;
            const slides = document.querySelectorAll('.review-slide');
            const totalSlides = slides.length;
            const slider = document.querySelector('.reviews-slider');

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }

            function updateSlider() {
                if (window.innerWidth >= 768) {
                    slider.style.transform = `translateX(-${currentSlide * 33.333}%)`;
                } else {
                    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                }
            }

            // Auto-advance slides
            setInterval(nextSlide, 4000);

            // Update slider on resize
            window.addEventListener('resize', updateSlider);
        });
    </script>
<style>
    .ticker-scroll {
            animation: scroll 30s linear infinite;
        }

        @keyframes scroll {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
</style>
<!-- Live Crypto Ticker -->
<div class="bg-gray-900 text-white py-2 overflow-hidden">
    <div id="crypto-ticker" class="ticker-scroll whitespace-nowrap">
        <span class="inline-block mx-8">Loading...</span>
    </div>
</div>

<script>
async function loadPrices() {
    try {
        const res = await fetch("/crypto-prices");
        const data = await res.json();
        // 'BTC,ETH,XRP,SOL,BNB,DOGE,TRX,ADA,HYPE,LINK'
        const symbols = ["BTC", "ETH", "XRP", "SOL", "BNB", "DOGE", "TRX", "ADA", "HYPE", "LINK"];
        let html = "";

        symbols.forEach(symbol => {
    const coin = data.data[symbol];
    if (!coin || !coin.quote || !coin.quote.USD) return;

    const price = coin.quote.USD.price ? coin.quote.USD.price.toFixed(2) : "N/A";
    const percent = coin.quote.USD.percent_change_24h
        ? coin.quote.USD.percent_change_24h.toFixed(2)
        : "0.00";
    const color = percent >= 0 ? "text-green-400" : "text-red-400";

    html += `
        <span class="inline-block mx-8">
            <span class="${color}">${symbol}</span>
            $${price} (${percent}%)
        </span>
    `;
});
    document.getElementById("crypto-ticker").innerHTML = html;
    } catch (err) {
        console.error("Error loading prices", err);
    }
}
loadPrices();
setInterval(loadPrices, 60000);
</script>

<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-gray-900">CryptoTrade</h1>
                </div>
                <div class="hidden md:block ml-10">
                    <div class="flex items-baseline space-x-4">
                        <a href="/#" class="text-gray-900 hover:text-primary-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="/plans" class="text-gray-600 hover:text-primary-purple px-3 py-2 rounded-md text-sm font-medium transition-colors">Plans</a>
                        <a href="{{ route('community') }}" class="text-gray-600 hover:text-primary-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Community</a>
                        <a href="/#about" class="text-gray-600 hover:text-primary-purple px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                        <a href="/#contact" class="text-gray-600 hover:text-primary-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">

            <!-- auth -->
            @auth
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="bg-primary-purple text-white px-6 py-2 rounded-md btn-primary hover:bg-purple-600">Dashboard</a>
                </div>
            @else
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="bg-primary-green text-white px-6 py-2 rounded-md btn-primary hover:bg-green-600">Sign In</a>
                    <a href="{{ route('register') }}" class="bg-primary-purple text-white px-6 py-2 rounded-md btn-primary hover:bg-purple-600">Join Now</a>
                </div>
            @endauth


            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-toggle bg-gray-100 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-200">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
<div class="mobile-menu hidden md:hidden">
    <div class="px-4 pt-4 pb-6 space-y-2 bg-white border-t border-gray-200 shadow-lg rounded-b-2xl animate-slide-down">
        <!-- Links -->
        <a href="/#"
           class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-900 hover:bg-gray-100 hover:text-primary-purple transition">
            Home
        </a>
        <a href="/plans"
           class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-primary-purple transition">
            Plans
        </a>
        <a href="{{ route('community') }}"
           class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-primary-green transition">
            Community
        </a>
        <a href="/#about"
           class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-primary-purple transition">
            About
        </a>
        <a href="/#contact"
           class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-primary-green transition">
            Contact
        </a>

        <!-- Auth / CTA buttons -->
        <div class="pt-5 border-t border-gray-200">
            <div class="flex flex-col gap-3">
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="w-full text-center bg-primary-purple text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-purple-600 transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="w-full text-center bg-primary-green text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-green-600 transition">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}"
                       class="w-full text-center bg-primary-purple text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-purple-600 transition">
                        Join Now
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>

</nav>
