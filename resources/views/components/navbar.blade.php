<!-- Live Crypto Ticker -->
<div class="bg-gray-900 text-white py-2 overflow-hidden">
    <div id="crypto-ticker" class="ticker-scroll whitespace-nowrap">
        <span class="inline-block mx-8">Loading...</span>
    </div>
</div>

<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo - Left Side -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}">
                    <img class="h-16 w-auto sm:h-20 object-contain" src="{{ asset('images/Logo-bg.png') }}" alt="Community Trading Logo" loading="lazy">
                </a>
            </div>

            <!-- Navigation Links - Center (Desktop Only) -->
            <div class="hidden md:flex flex-1 justify-center">
                <div class="flex items-baseline space-x-6">
                    <a href="/#" class="text-gray-900 hover:text-primary-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                    <a href="/referral" class="text-gray-600 hover:text-primary-purple px-3 py-2 rounded-md text-sm font-medium transition-colors">Referral</a>
                    <a href="/plans" class="text-gray-600 hover:text-primary-purple px-3 py-2 rounded-md text-sm font-medium transition-colors">Iti course plan</a>
                    <a href="{{ route('community') }}" class="text-gray-600 hover:text-primary-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Iti community plan</a>
                    <a href="/#about" class="text-gray-600 hover:text-primary-purple px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                    <a href="/#contact" class="text-gray-600 hover:text-primary-green px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                </div>
            </div>

            <!-- Right Side - Auth Buttons & Language (Desktop) -->
            <div class="hidden md:flex items-center space-x-3">
                <!-- Auth Buttons -->
                @auth
                    <a href="{{ route('dashboard') }}"
                    class="bg-gradient-to-r from-[#FFD7D7] to-[#B76E79] text-black px-6 py-2 rounded-md font-bold shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                    class="bg-gradient-to-r from-[#FFD7D7] to-[#B76E79] text-black px-5 py-2 rounded-md font-bold shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}"
                    class="bg-gradient-to-r from-[#FFD7D7] to-[#B76E79] text-black px-5 py-2 rounded-md font-bold shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        Join Now
                    </a>
                @endauth

                <!-- Language Switcher Button -->
                <button id="lang-btn-desktop" class="lang-switcher-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                    <span id="current-lang-desktop">EN</span>
                </button>
            </div>

            <!-- Mobile Right Side -->
            <div class="md:hidden flex items-center space-x-2">
                <!-- Language Switcher Button - Mobile -->
                <button id="lang-btn-mobile" class="lang-switcher-btn-mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                    <span id="current-lang-mobile">EN</span>
                </button>

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
        <div class="px-4 pt-4 pb-6 space-y-2 bg-white border-t border-gray-200 shadow-lg rounded-b-2xl">
            <!-- Links -->
            <a href="/#"
               class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-900 hover:bg-gray-100 hover:text-primary-purple transition">
                Home
            </a>
            <a href="/referral"
               class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-900 hover:bg-gray-100 hover:text-primary-purple transition">
                Referral
            </a>
            <a href="/plans"
               class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-primary-purple transition">
                Iti course plan
            </a>
            <a href="{{ route('community') }}"
               class="block px-4 py-3 rounded-xl text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-primary-green transition">
                Iti community plan
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

<!-- Hidden Google Translate Elements -->
<div style="display: none;">
    <div id="google_translate_element"></div>
</div>

<style>
/* Ticker Animation */
.ticker-scroll {
    animation: scroll 30s linear infinite;
}

@keyframes scroll {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

/* Language Switcher Button - Desktop */
.lang-switcher-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    background-color: #f9fafb;
    border: 1.5px solid #d1d5db;
    border-radius: 0.5rem;
    padding: 8px 14px;
    font-size: 14px;
    font-weight: 600;
    color: #111827;
    cursor: pointer;
    transition: all 0.3s ease;
}

.lang-switcher-btn:hover {
    border-color: #9ca3af;
    background-color: #f3f4f6;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transform: translateY(-1px);
}

.lang-switcher-btn svg {
    color: #6b7280;
}

/* Language Switcher Button - Mobile */
.lang-switcher-btn-mobile {
    display: flex;
    align-items: center;
    gap: 4px;
    background-color: #f9fafb;
    border: 1.5px solid #d1d5db;
    border-radius: 0.5rem;
    padding: 6px 10px;
    font-size: 13px;
    font-weight: 600;
    color: #111827;
    cursor: pointer;
    transition: all 0.3s ease;
}

.lang-switcher-btn-mobile:hover {
    border-color: #9ca3af;
    background-color: #f3f4f6;
}

.lang-switcher-btn-mobile svg {
    color: #6b7280;
}

/* Hide Google branding */
.goog-logo-link,
.goog-te-gadget span,
.goog-te-banner-frame {
    display: none !important;
}

.goog-te-gadget {
    font-family: inherit !important;
    font-size: 0 !important;
    color: transparent !important;
}

body {
    top: 0 !important;
}

/* Style the hidden select dropdown */
.goog-te-combo {
    display: none;
}
</style>

<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {pageLanguage: 'en', includedLanguages: 'bn,en', autoDisplay: false},
        'google_translate_element'
    );
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
// Language Switcher Functionality
document.addEventListener('DOMContentLoaded', function() {
    let currentLang = 'en';

    // Wait for Google Translate to load
    setTimeout(function() {
        // Desktop button
        const langBtnDesktop = document.getElementById('lang-btn-desktop');
        const currentLangDesktop = document.getElementById('current-lang-desktop');

        // Mobile button
        const langBtnMobile = document.getElementById('lang-btn-mobile');
        const currentLangMobile = document.getElementById('current-lang-mobile');

        function switchLanguage() {
            const selectElement = document.querySelector('.goog-te-combo');
            if (selectElement) {
                if (currentLang === 'en') {
                    selectElement.value = 'bn';
                    currentLang = 'bn';
                    currentLangDesktop.textContent = 'BN';
                    currentLangMobile.textContent = 'BN';
                } else {
                    selectElement.value = 'en';
                    currentLang = 'en';
                    currentLangDesktop.textContent = 'EN';
                    currentLangMobile.textContent = 'EN';
                }
                selectElement.dispatchEvent(new Event('change'));
            }
        }

        if (langBtnDesktop) {
            langBtnDesktop.addEventListener('click', switchLanguage);
        }

        if (langBtnMobile) {
            langBtnMobile.addEventListener('click', switchLanguage);
        }
    }, 1000);

    // Mobile menu toggle
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

// Crypto Ticker
async function loadPrices() {
    try {
        const res = await fetch("/crypto-prices");
        const data = await res.json();
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
