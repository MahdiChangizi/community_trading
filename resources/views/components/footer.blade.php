<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Footer Content - 3 Columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">

            <!-- Column 1: About + Logo -->
            <div>
                <div class="mb-4">
                    <img class="h-16 w-auto object-contain" src="{{ asset('images/Logo-bg.png') }}" alt="Community Trading Logo" loading="lazy">
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">Empowering traders worldwide with expert knowledge, proven strategies, and a supportive community.</p>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-[#B76E79]">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/#" class="text-gray-400 hover:text-white transition-colors text-sm">Home</a></li>
                    <li><a href="/referral" class="text-gray-400 hover:text-white transition-colors text-sm">Referral Program</a></li>
                    <li><a href="/plans" class="text-gray-400 hover:text-white transition-colors text-sm">Iti Course Plan</a></li>
                    <li><a href="{{ route('community') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Iti Community Plan</a></li>
                    <li><a href="/#about" class="text-gray-400 hover:text-white transition-colors text-sm">About Us</a></li>
                    <li><a href="/#contact" class="text-gray-400 hover:text-white transition-colors text-sm">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Account & Support -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-[#B76E79]">Account & Support</h4>
                <ul class="space-y-2">
                    @auth
                        <li><a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Dashboard</a></li>
                        <li><a href="{{ route('profile.edit') }}" class="text-gray-400 hover:text-white transition-colors text-sm">My Profile</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Sign In</a></li>
                        <li><a href="{{ route('register') }}" class="text-gray-400 hover:text-white transition-colors text-sm">Join Now</a></li>
                    @endauth
                    <li><a href="/#faq" class="text-gray-400 hover:text-white transition-colors text-sm">FAQ</a></li>
                    <li><a href="/#contact" class="text-gray-400 hover:text-white transition-colors text-sm">Help Center</a></li>
                    <li><a href="/#reviews" class="text-gray-400 hover:text-white transition-colors text-sm">Testimonials</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
/* Footer link hover effect */
footer a {
    position: relative;
    display: inline-block;
}

footer a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 1px;
    bottom: -2px;
    left: 0;
    background-color: currentColor;
    transition: width 0.3s ease;
}

footer a:hover::after {
    width: 100%;
}

/* Smooth scroll */
html {
    scroll-behavior: smooth;
}
</style>
