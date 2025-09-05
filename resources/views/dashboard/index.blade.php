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
                            green: '#82df6a',
                            purple: '#836adf',
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
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
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
            background: linear-gradient(135deg, #82df6a, #836adf);
            transition: all 0.3s ease;
        }
        
        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(130, 223, 106, 0.3);
        }
        
        .plan-badge {
            background: linear-gradient(135deg, #82df6a, #836adf);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
        }
        
        .status-active {
            color: #82df6a;
            background-color: rgba(130, 223, 106, 0.1);
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
        
        .referral-level-1 { border-color: #82df6a; }
        .referral-level-2 { border-color: #836adf; }
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
            background: linear-gradient(135deg, rgba(130, 223, 106, 0.1), rgba(131, 106, 223, 0.1));
            border: 1px solid rgba(130, 223, 106, 0.2);
        }
        
        .quick-action-btn {
            background: white;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .quick-action-btn:hover {
            border-color: #82df6a;
            background: rgba(130, 223, 106, 0.05);
            transform: translateY(-2px);
        }
        
        .tab-active {
            border-color: #82df6a;
            color: #82df6a;
            background: rgba(130, 223, 106, 0.05);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #82df6a, #836adf);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-inter">
    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay fixed inset-0 z-40 lg:hidden" onclick="closeSidebar()"></div>
    
    <!-- Sidebar -->
    <div class="sidebar fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg lg:translate-x-0">
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h1 class="text-xl font-bold text-gray-900">CryptoTrade</h1>
            <button onclick="closeSidebar()" class="lg:hidden text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <nav class="mt-6 px-3">
            <div class="space-y-1">
                <a href="#" class="flex items-center px-3 py-2 text-gray-900 bg-primary-green bg-opacity-10 rounded-md border-l-4 border-primary-green">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v4H8V5z"></path>
                    </svg>
                    Dashboard
                </a>
                
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    Trading
                </a>
                
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors relative">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Community
                    <span class="notification-badge">3</span>
                </a>
                
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                    Billing
                </a>
                
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Settings
                </a>
            </div>
            
            <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="px-3 mb-2">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Support</p>
                </div>
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Help Center
                </a>
                <a href="#" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                    </svg>
                    Contact Support
                </a>
            </div>
        </nav>
        
        <div class="absolute bottom-0 left-0 right-0 p-4">
            <button class="w-full flex items-center px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Sign Out
            </button>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="lg:ml-64">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
            <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <div class="flex items-center">
                    <button onclick="openSidebar()" class="lg:hidden -ml-2 mr-2 p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-900">Dashboard</h1>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5V1h0z"></path>
                        </svg>
                        <span class="notification-badge">2</span>
                    </button>
                    
                    <button class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5V1h0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        
        <!-- Dashboard Content -->
        <main class="p-4 sm:p-6 lg:p-8">
            <!-- Welcome Section & Profile -->
            <div class="mb-8">
                <div class="dashboard-card p-6 slide-up">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex items-center space-x-4 mb-4 md:mb-0">
                            <div class="profile-avatar w-16 h-16 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                JD
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">Welcome back, John Doe!</h2>
                                <div class="flex items-center space-x-4 text-sm text-gray-600 mt-1">
                                    <span>UID: #CT2024-8472</span>
                                    <span>Member since: Jan 2024</span>
                                    <span class="plan-badge">Premium Trader</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <button class="quick-action-btn px-4 py-2 rounded-md text-sm font-medium flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                                Edit Profile
                            </button>
                            <button class="bg-primary-green text-white px-4 py-2 rounded-md text-sm font-medium btn-primary">
                                Upgrade Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="stats-card p-6 rounded-lg slide-up">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Earnings</p>
                            <p class="text-2xl font-bold text-gray-900">$12,450</p>
                            <p class="text-sm text-primary-green">+15.3% this month</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-green rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm slide-up">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Active Referrals</p>
                            <p class="text-2xl font-bold text-gray-900">47</p>
                            <p class="text-sm text-primary-purple">+8 this week</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-purple rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm slide-up">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Success Rate</p>
                            <p class="text-2xl font-bold text-gray-900">89.2%</p>
                            <p class="text-sm text-primary-yellow">+2.1% improvement</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-yellow rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm slide-up">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Plan Status</p>
                            <p class="text-lg font-bold text-gray-900">Premium</p>
                            <p class="text-sm text-gray-500">23 days remaining</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-red rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
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
                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-primary-green rounded-full mr-3"></div>
                                        <h4 class="font-semibold text-gray-900">Premium Trader</h4>
                                    </div>
                                    <span class="status-active px-3 py-1 rounded-full text-sm font-medium">Active</span>
                                </div>
                                <div class="text-sm text-gray-600 space-y-1">
                                    <p><strong>Start Date:</strong> Jan 15, 2024</p>
                                    <p><strong>Expires:</strong> Apr 15, 2024</p>
                                    <p><strong>Price:</strong> $299/month</p>
                                </div>
                                <div class="mt-3">
                                    <div class="flex items-center justify-between text-sm text-gray-600 mb-1">
                                        <span>Plan Progress</span>
                                        <span>23 days left</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress-fill bg-primary-green" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-gray-400 rounded-full mr-3"></div>
                                        <h4 class="font-semibold text-gray-900">Basic Trader</h4>
                                    </div>
                                    <span class="status-expired px-3 py-1 rounded-full text-sm font-medium">Expired</span>
                                </div>
                                <div class="text-sm text-gray-600 space-y-1">
                                    <p><strong>Duration:</strong> Oct 15, 2023 - Jan 14, 2024</p>
                                    <p><strong>Price:</strong> $99/month</p>
                                </div>
                            </div>
                            
                            <div class="border border-gray-200 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-primary-yellow rounded-full mr-3"></div>
                                        <h4 class="font-semibold text-gray-900">Elite VIP</h4>
                                    </div>
                                    <span class="status-pending px-3 py-1 rounded-full text-sm font-medium">Pending</span>
                                </div>
                                <div class="text-sm text-gray-600 space-y-1">
                                    <p><strong>Start Date:</strong> Apr 16, 2024</p>
                                    <p><strong>Price:</strong> $499/month</p>
                                    <p class="text-primary-yellow"><strong>Auto-renewal enabled</strong></p>
                                </div>
                            </div>
                        </div>
                        
                        <button class="w-full mt-4 bg-primary-purple text-white px-4 py-2 rounded-md btn-primary">
                            View All Plans
                        </button>
                    </div>
                </div>
                
                <!-- Wallet Info Section -->
                <div class="dashboard-card slide-up">
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
                            <div class="flex items-center justify-between p-3 bg-green-50 border border-green-200 rounded-lg">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-primary-green rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M11.944 17.97L4.58 13.62 11.943 24l7.37-10.38-7.372 4.35h.003zM12.056 0L4.69 12.223l7.365 4.354 7.365-4.35L12.056 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">Connected</p>
                                        <span class="chain-ethereum chain-badge">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M11.944 17.97L4.58 13.62 11.943 24l7.37-10.38-7.372 4.35h.003zM12.056 0L4.69 12.223l7.365 4.354 7.365-4.35L12.056 0z"/>
                                            </svg>
                                            Ethereum
                                        </span>
                                    </div>
                                </div>
                                <button class="text-primary-red text-sm font-medium hover:text-red-700">
                                    Disconnect
                                </button>
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-700">Wallet Address</label>
                                <div class="flex items-center space-x-2">
                                    <div class="wallet-address flex-1">0x1a2b3c4d5e6f7890abcdef1234567890abcdef12</div>
                                    <button onclick="copyAddress()" class="p-2 text-gray-500 hover:text-primary-green transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-700">Balance</label>
                                <div class="text-2xl font-bold text-gray-900">24.58 ETH</div>
                                <div class="text-sm text-gray-500">≈ $45,890 USD</div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-3 pt-4">
                                <button class="quick-action-btn px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Add Funds
                                </button>
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
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-4 bg-gradient-to-br from-primary-green to-green-400 text-white rounded-lg">
                            <div class="text-2xl font-bold">47</div>
                            <div class="text-sm opacity-90">Total Referrals</div>
                        </div>
                        <div class="text-center p-4 bg-gradient-to-br from-primary-purple to-purple-400 text-white rounded-lg">
                            <div class="text-2xl font-bold">$2,840</div>
                            <div class="text-sm opacity-90">Total Earnings</div>
                        </div>
                        <div class="text-center p-4 bg-gradient-to-br from-primary-yellow to-yellow-400 text-white rounded-lg">
                            <div class="text-2xl font-bold">12.3%</div>
                            <div class="text-sm opacity-90">Commission Rate</div>
                        </div>
                    </div>
                    
                    <!-- Referral Link -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your Referral Link</label>
                            <div class="flex items-center space-x-2">
                                <input 
                                    type="text" 
                                    readonly 
                                    value="https://cryptotrade.com/ref/CT2024-8472"
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
                                <!-- Level 1 -->
                                <div class="referral-level referral-level-1">
                                    <div class="flex items-center justify-between py-2">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-primary-green rounded-full flex items-center justify-center text-white text-xs font-bold mr-3">L1</div>
                                            <div>
                                                <div class="font-medium text-gray-900">Level 1 (12 referrals)</div>
                                                <div class="text-sm text-gray-500">Commission: 5%</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-bold text-primary-green">$1,240</div>
                                            <div class="text-sm text-gray-500">earned</div>
                                        </div>
                                    </div>
                                    <div class="ml-11 space-y-2">
                                        <div class="flex items-center justify-between py-1 text-sm">
                                            <span class="text-gray-600">@alice_trader</span>
                                            <span class="text-primary-green">+$120</span>
                                        </div>
                                        <div class="flex items-center justify-between py-1 text-sm">
                                            <span class="text-gray-600">@bob_crypto</span>
                                            <span class="text-primary-green">+$89</span>
                                        </div>
                                        <div class="flex items-center justify-between py-1 text-sm">
                                            <span class="text-gray-600">@charlie_btc</span>
                                            <span class="text-primary-green">+$156</span>
                                        </div>
                                        <div class="text-xs text-gray-500">+ 9 more users...</div>
                                    </div>
                                </div>
                                
                                <!-- Level 2 -->
                                <div class="referral-level referral-level-2">
                                    <div class="flex items-center justify-between py-2">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-primary-purple rounded-full flex items-center justify-center text-white text-xs font-bold mr-3">L2</div>
                                            <div>
                                                <div class="font-medium text-gray-900">Level 2 (18 referrals)</div>
                                                <div class="text-sm text-gray-500">Commission: 3%</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-bold text-primary-purple">$780</div>
                                            <div class="text-sm text-gray-500">earned</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Level 3 -->
                                <div class="referral-level referral-level-3">
                                    <div class="flex items-center justify-between py-2">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-primary-red rounded-full flex items-center justify-center text-white text-xs font-bold mr-3">L3</div>
                                            <div>
                                                <div class="font-medium text-gray-900">Level 3 (11 referrals)</div>
                                                <div class="text-sm text-gray-500">Commission: 2%</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-bold text-primary-red">$460</div>
                                            <div class="text-sm text-gray-500">earned</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Level 4 -->
                                <div class="referral-level referral-level-4">
                                    <div class="flex items-center justify-between py-2">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-primary-yellow rounded-full flex items-center justify-center text-white text-xs font-bold mr-3">L4</div>
                                            <div>
                                                <div class="font-medium text-gray-900">Level 4 (4 referrals)</div>
                                                <div class="text-sm text-gray-500">Commission: 1%</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-bold text-primary-yellow">$280</div>
                                            <div class="text-sm text-gray-500">earned</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Level 5 -->
                                <div class="referral-level referral-level-5">
                                    <div class="flex items-center justify-between py-2">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-gray-400 rounded-full flex items-center justify-center text-white text-xs font-bold mr-3">L5</div>
                                            <div>
                                                <div class="font-medium text-gray-900">Level 5 (2 referrals)</div>
                                                <div class="text-sm text-gray-500">Commission: 0.5%</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="font-bold text-gray-600">$80</div>
                                            <div class="text-sm text-gray-500">earned</div>
                                        </div>
                                    </div>
                                </div>
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
            const address = '0x1a2b3c4d5e6f7890abcdef1234567890abcdef12';
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
