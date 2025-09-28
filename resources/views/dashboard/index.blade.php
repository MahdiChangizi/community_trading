@extends('dashboard.app')
@section('content')

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
                            <div class="wallet-address flex-1">{{ $data->wallet->wallet_address ?? 'No Wallet Address' }}</div>
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
                            <div class="text-xl font-bold text-gray-900">{{ number_format($data->wallet->usdt_balance ?? 0, 2) }} USDT</div>
                        </div>

                        <a href="/withdraw" class="quick-action-btn px-4 py-2 rounded-md text-sm font-medium flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                            </svg>
                            Withdraw
                        </a>
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

@endsection
