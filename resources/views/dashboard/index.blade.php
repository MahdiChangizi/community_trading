<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - CryptoTrade Community</title>
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
        <main class="p-4 sm:p-6 lg:p-8">
            <!-- Welcome Section & Profile -->
            <div class="mb-8">
                <div class="dashboard-card p-4 sm:p-6 slide-up">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                        <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                            <div class="profile-avatar w-16 h-16 rounded-full flex items-center justify-center text-white font-bold text-xl mx-auto sm:mx-0">
                                {{ strtoupper(substr($data->name, 0, 2)) }}
                            </div>
                            <div class="text-center sm:text-left">
                                <h2 class="text-xl sm:text-2xl font-bold text-gray-900">Welcome {{ $data->name }}</h2>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-gray-600 mt-1 space-y-1 sm:space-y-0">
                                    <span class="block sm:inline">UID: #{{ $data->uid }}</span>
                                    <span class="block sm:inline">Member since: {{ $data->created_at->format('Y-M-D') }}</span>
                                    <div class="flex justify-center sm:justify-start lg:justify-end">
                                        <span
                                            @class([
                                                'plan-badge inline-block',
                                                'w-56' => !empty($data->purchases[0]->plan->name),
                                                'w-18' => empty($data->purchases[0]->plan->name),
                                            ])>
                                            {{ $data->purchases[0]->plan->name ?? 'No Plan' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($data->purchases->isEmpty())
                            <div class="flex justify-center sm:justify-start lg:justify-end">
                                <a href="/plans" class="bg-primary-green text-white px-4 py-2 rounded-md text-sm font-medium btn-primary w-full sm:w-auto text-center">
                                    Upgrade Plan
                                </a>
                            </div>
                        @else
                            <div class="flex justify-center sm:justify-start lg:justify-end">
                                <button class="bg-primary-green text-white px-4 py-2 rounded-md text-sm font-medium btn-primary w-44 sm:w-auto" disabled>
                                    Upgrade Plan (paid)
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>



            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Purchased Plans Section -->
                <div class="dashboard-card slide-up">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            My Plans
                        </h3>
                    </div>
                    <div class="p-6">
                        @if ($data->purchases->isEmpty())
                            <div class="text-center py-10">
                                <p class="text-gray-600 mb-4">You have not purchased any plans yet.</p>
                                <a href="/plans" class="bg-primary-green text-white px-4 py-2 rounded-md text-sm font-medium btn-primary">
                                    Explore Plans
                                </a>
                            </div>
                        @else
                        <div class="space-y-4">
                            @foreach ($data->purchases->sortByDesc('created_at')->take(4) as $purchase)
                                @php
                                    $start = $purchase->created_at;
                                    $end = $purchase->created_at->copy()->addMonths(6);
                                    $today = now();
                                    $totalDays = $start->diffInDays($end);
                                    $daysLeft = $today->lt($end) ? floor($today->diffInDays($end)) : 0;

                                    $progress = $totalDays > 0 ? (($totalDays - $daysLeft) / $totalDays) * 100 : 100;
                                @endphp

                                <div class="border border-gray-200 rounded-lg p-4">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 {{ $daysLeft > 0 ? 'bg-primary-green' : 'bg-gray-400' }} rounded-full mr-3"></div>
                                            <h4 class="font-semibold text-gray-900">{{ $purchase->plan->name }}</h4>
                                        </div>
                                        <span class="{{ $daysLeft > 0 ? 'status-active' : 'status-expired' }} px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $daysLeft > 0 ? 'Active' : 'Expired' }}
                                        </span>
                                    </div>

                                    <div class="text-sm text-gray-600 space-y-1">
                                        <p><strong>Start Date:</strong> {{ $start->format('M d, Y') }}</p>
                                        <p><strong>Expires:</strong> {{ $end->format('M d, Y') }}</p>
                                        <p><strong>Price:</strong> ${{ number_format($purchase->plan->price_usdt / 6, 2) }} / month</p>
                                    </div>

                                    <div class="mt-3">
                                        <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                                            <span>Plan Progress</span>
                                            <span>
                                                {{ $daysLeft > 0 ? $daysLeft . ' days left' : 'Expired' }}
                                            </span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="h-2 rounded-full bg-primary-green" style="width: {{ $progress }}%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Wallet Info Section -->
                <div class="dashboard-card slide-up h-[270px]">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            Wallet Connection
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-700">Wallet Address</label>
                                <div class="flex items-center space-x-2">
                                    <div class="wallet-address flex-1">{{ $data->wallet_address ?? 'No Wallet Address' }}</div>
                                    <button onclick="copyAddress()" class="p-2 text-gray-500 hover:text-primary-green transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center justify-between space-x-2">
                                <div>
                                    <label class="text-sm font-medium text-gray-700">Balance</label>
                                    <div class="text-xl font-bold text-gray-900">{{ number_format($data->wallet->balance ?? 0, 2) }} USDT</div>
                                </div>

                                <button class="quick-action-btn px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                    </svg>
                                    Withdraw
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Referral Section -->
            <div class="dashboard-card mt-8 slide-up">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Referral Program
                    </h3>
                </div>

                <div class="p-6">
                    <!-- Referral Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        {{-- Total Referrals --}}
                        <div class="text-center p-4 bg-gradient-to-br from-primary-green to-green-400 text-white rounded-lg">
                            <div class="text-2xl font-bold">{{ $data->referrals->count() ?? 0 }}</div>
                            <div class="text-sm opacity-90">Total Referrals</div>
                        </div>

                        {{-- Total Earnings --}}
                        <div class="text-center p-4 bg-gradient-to-br from-primary-purple to-purple-400 text-white rounded-lg">
                            <div class="text-2xl font-bold">
                                ${{ number_format(optional($data->commissions)->sum('amount_usdt') ?? 0, 2) }}
                            </div>
                            <div class="text-sm opacity-90">Total Earnings</div>
                        </div>
                    </div>


                    <!-- Referral Link -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your Referral Code</label>
                            <div class="flex items-center space-x-2">
                                <input
                                    type="text"
                                    readonly
                                    value="{{ $data->ref_code }}"
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-sm font-mono"
                                    id="referralLink"
                                >
                                <button
                                    onclick="copyReferralLink()"
                                    class="bg-primary-green text-white px-4 py-2 rounded-md btn-primary flex items-center"
                                    id="copyButton"
                                >
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Copy
                                </button>
                            </div>
                        </div>

                        <!-- Referral Tree Toggle -->
                        <div class="flex items-center justify-between">
                            <h4 class="text-md font-semibold text-gray-900">Referral Network</h4>
                            <button
                                onclick="toggleReferralTree()"
                                class="text-primary-purple text-sm font-medium hover:text-purple-700 flex items-center"
                                id="toggleButton"
                            >
                                <span id="toggleText">Show Network</span>
                                <svg class="w-4 h-4 ml-1 transition-transform" id="toggleIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Referral Tree -->
                        <div id="referralTree" class="referral-tree">
                            <div class="space-y-4 pt-4">
                                @php
                                    $levelColors = [
                                        1 => 'primary-green',
                                        2 => 'primary-purple',
                                        3 => 'primary-red',
                                        4 => 'primary-yellow',
                                        5 => 'gray-400',
                                    ];
                                @endphp

                                @for($level = 1; $level <= 5; $level++)
                                    @php
                                        $referrals = optional($data->referrals)->where('level', $level) ?? collect();
                                        $commissions = optional($data->commissions)->where('level', $level) ?? collect();
                                        $totalEarned = $commissions->sum('amount_usdt') ?? 0;
                                        $referralCount = $referrals->count();
                                    @endphp

                                    <div class="referral-level referral-level-{{ $level }}">
                                        <div class="flex items-center justify-between py-2">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 bg-{{ $levelColors[$level] ?? 'gray-400' }} rounded-full flex items-center justify-center text-white text-xs font-bold mr-3">L{{ $level }}</div>
                                                <div>
                                                    <div class="font-medium text-gray-900">
                                                        Level {{ $level }} <span class="text-gray-600">({{ $referralCount }} referrals)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <div class="font-bold text-{{ $levelColors[$level] ?? 'gray-600' }}">
                                                    ${{ number_format($totalEarned, 2) }}
                                                </div>
                                                <div class="text-sm text-gray-500">earned</div>
                                            </div>
                                        </div>

                                        {{-- لیست ایمیل‌ها برای هر لول --}}
                                        <div class="ml-11 space-y-2">
                                            @foreach ($referrals->sortBy('created_at')->take(5) as $referral)
                                                <div class="flex items-center justify-between py-1 text-sm">
                                                    <span class="text-gray-600">{{ optional($referral->descendant)->email ?? 'N/A' }}</span>
                                                </div>
                                            @endforeach

                                            @if ($referralCount > 5)
                                                <div class="text-sm text-gray-500">and {{ $referralCount - 5 }} more...</div>
                                            @endif
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
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
            const address = "{{ $data->wallet_address ?? 'none' }}";
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
