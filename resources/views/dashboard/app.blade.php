<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - CryptoTrade Community</title>
    <link rel="icon" type="image/x-icon" href="{{asset("images/Logo-bg.png")}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            green: '#FFD700',
                            purple: '#FFA500',
                            red: '#df6a6a',
                            yellow: '#d7df6a'
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-up {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .slide-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.4);
        }

        .dashboard-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .dashboard-card:hover {
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1);
        }

        .profile-avatar {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            transition: all 0.3s ease;
        }

        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(130, 223, 106, 0.3);
        }

        .plan-badge {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
        }

        .status-active {
            color: #FFD700;
            background-color: rgba(255, 215, 0, 0.1);
            border: 1px solid rgba(130, 223, 106, 0.2);
        }

        .status-expired {
            color: #df6a6a;
            background-color: rgba(223, 106, 106, 0.1);
            border: 1px solid rgba(223, 106, 106, 0.2);
        }

        .status-pending {
            color: #d7df6a;
            background-color: rgba(215, 223, 106, 0.1);
            border: 1px solid rgba(215, 223, 106, 0.2);
        }

        .referral-tree {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }

        .referral-tree.expanded {
            max-height: 2000px;
        }

        .referral-level {
            border-left: 3px solid;
            padding-left: 20px;
            margin-left: 10px;
        }

        .referral-level-1 { border-color: #FFD700; }
        .referral-level-2 { border-color: #FFA500; }
        .referral-level-3 { border-color: #df6a6a; }
        .referral-level-4 { border-color: #d7df6a; }
        .referral-level-5 { border-color: #9ca3af; }

        .copy-animation {
            animation: copySuccess 0.3s ease-in-out;
        }

        @keyframes copySuccess {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .wallet-address {
            font-family: monospace;
            font-size: 0.875rem;
            background: #f8fafc;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }

        .chain-badge {
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .chain-ethereum {
            background: rgba(98, 126, 234, 0.1);
            color: #627eea;
        }

        .progress-bar {
            height: 6px;
            background: #e5e7eb;
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 1s ease;
        }

        .notification-badge {
            background: #ef4444;
            color: white;
            font-size: 0.625rem;
            font-weight: 600;
            padding: 2px 6px;
            border-radius: 10px;
            position: absolute;
            top: -5px;
            right: -5px;
            min-width: 18px;
            text-align: center;
        }

        .sidebar {
            transition: transform 0.3s ease;
        }

        .sidebar-overlay {
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }
        }

        .stats-card {
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(255, 165, 0, 0.1));
            border: 1px solid rgba(130, 223, 106, 0.2);
        }

        .quick-action-btn {
            background: white;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .quick-action-btn:hover {
            border-color: #FFD700;
            background: rgba(130, 223, 106, 0.05);
            transform: translateY(-2px);
        }

        .tab-active {
            border-color: #FFD700;
            color: #FFD700;
            background: rgba(130, 223, 106, 0.05);
        }

        .gradient-text {
            background: linear-gradient(135deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-inter">
    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay fixed inset-0 z-40 lg:hidden" onclick="closeSidebar()"></div>

    @include('dashboard.side-bar')

    <!-- Main Content -->
    <div class="lg:ml-64">
        @include('dashboard.nav')

        <!-- Dashboard Content -->
        @yield('content')

    </div>

    <script>
        // Sidebar functionality
        function openSidebar() {
            document.querySelector('.sidebar').classList.add('active');
            document.querySelector('.sidebar-overlay').classList.add('active');
        }

        function closeSidebar() {
            document.querySelector('.sidebar').classList.remove('active');
            document.querySelector('.sidebar-overlay').classList.remove('active');
        }

        // Copy functionality
        function copyReferralLink() {
            const input = document.getElementById('referralLink');
            const button = document.getElementById('copyButton');

            input.select();
            document.execCommand('copy');

            button.classList.add('copy-animation');
            button.innerHTML = `
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Copied!
            `;

            setTimeout(() => {
                button.classList.remove('copy-animation');
                button.innerHTML = `
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    Copy
                `;
            }, 2000);
        }

        function copyAddress() {
            const address = "{{ $data->wallet->wallet_address ?? 'none' }}";
            navigator.clipboard.writeText(address).then(() => {
                // Show success feedback
                const event = new CustomEvent('showToast', {
                    detail: { message: 'Address copied to clipboard!', type: 'success' }
                });
                window.dispatchEvent(event);
            });
        }

        // Referral tree toggle
        function toggleReferralTree() {
            const tree = document.getElementById('referralTree');
            const button = document.getElementById('toggleButton');
            const text = document.getElementById('toggleText');
            const icon = document.getElementById('toggleIcon');

            tree.classList.toggle('expanded');

            if (tree.classList.contains('expanded')) {
                text.textContent = 'Hide Network';
                icon.style.transform = 'rotate(180deg)';
            } else {
                text.textContent = 'Show Network';
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Observe slide-up elements
            document.querySelectorAll('.slide-up').forEach(el => {
                observer.observe(el);
            });

            // Animate progress bars
            setTimeout(() => {
                document.querySelectorAll('.progress-fill').forEach(bar => {
                    const width = bar.style.width || '0%';
                    bar.style.width = '0%';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            }, 500);

            // Close sidebar on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 1024) {
                    closeSidebar();
                }
            });
        });

        // Simple toast notification system
        window.addEventListener('showToast', function(event) {
            const toast = document.createElement('div');
            toast.className = 'fixed top-4 right-4 bg-primary-green text-white px-4 py-2 rounded-md shadow-lg z-50 transform translate-x-full transition-transform';
            toast.textContent = event.detail.message;

            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.transform = 'translateX(0)';
            }, 100);

            setTimeout(() => {
                toast.style.transform = 'translateX(full)';
                setTimeout(() => {
                    document.body.removeChild(toast);
                }, 300);
            }, 3000);
        });
    </script>
</body>
</html>
