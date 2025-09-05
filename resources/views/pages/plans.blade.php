@extends('layouts.app')
@section('title', 'Plans')
@section('content')
 <!-- Header Section -->

    @if (session('message'))
        {{-- disable after 5 secend --}}
        <div id="toast-message" class="fixed top-10 right-4 flex justify-end z-50">
            <div class="max-w-xs bg-white border border-green-200 rounded-xl shadow-lg" role="alert" tabindex="-1" aria-labelledby="toast-backend-fix-label">
            <div class="flex p-4">
                <div class="shrink-0">
                <svg class="shrink-0 w-4 h-4 text-green-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                </div>
                <div class="ms-3">
                <p id="toast-backend-fix-label" class="text-sm text-green-700">
                    {{ session('message') }}
                </p>
                </div>
            </div>
            </div>
        </div>
        <script>
            setTimeout(() => {
            const toast = document.getElementById('toast-message');
            if (toast) toast.style.display = 'none';
            }, 2000);
        </script>
    @endif


    <section class="py-16 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Choose Your <span class="text-primary-green">Trading</span> Journey
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Select the perfect plan that matches your trading experience and goals. All plans include lifetime access and our exclusive community support.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-primary-green mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        30-Day Money Back Guarantee
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-primary-purple mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Instant Access
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Beginner Plan -->
                @foreach ($plans as $plan)
                <div class="plan-card bg-white rounded-xl shadow-lg overflow-hidden hover-scale slide-up border border-gray-200">
                    <div class="bg-gradient-to-br from-primary-green to-green-600 text-white p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold">Beginner Bootcamp</h3>
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="price-highlight text-3xl font-bold mb-2">199 USDT</div>
                        <div class="text-green-100">Perfect for newcomers</div>
                    </div>

                    <div class="p-6">
                        <p class="text-gray-600 mb-6">Master the fundamentals of crypto trading with step-by-step guidance from our expert instructors.</p>

                        <div class="space-y-4 mb-8">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-primary-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">12+ Video Lessons</div>
                                    <div class="text-sm text-gray-500">4 hours of premium content</div>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-primary-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">Trading Simulator</div>
                                    <div class="text-sm text-gray-500">Practice without risk</div>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-primary-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">Community Access</div>
                                    <div class="text-sm text-gray-500">24/7 support chat</div>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-primary-green mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <div class="font-medium text-gray-900">Certificate</div>
                                    <div class="text-sm text-gray-500">Upon completion</div>
                                </div>
                            </div>
                        </div>

                        <button onclick="openPurchaseModal('{{ $plan->id }}', '{{ $plan->name }}', '{{ $plan->price_usdt }}')" class="w-full bg-primary-green text-white py-3 rounded-xl hover:bg-green-600 transition shadow-lg font-semibold">
                            Choose {{ $plan->name }}
                        </button>


                        <div class="mt-4 text-center">
                            <a href="#" onclick="openDetailModal('beginner')" class="text-primary-green hover:text-green-600 text-sm font-medium">View Full Details →</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Purchase Modal -->
    <div id="purchaseModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm relative">

            <!-- Close Button -->
            <button onclick="closePurchaseModal()"
            class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition">
            ✕
            </button>

            <!-- Header -->
            <div class="p-6 text-center">
            <h2 class="text-xl font-semibold text-gray-800">Connect Wallet</h2>
            <p class="text-gray-500 text-sm mt-1">Connect your wallet to complete purchase</p>
            </div>

            <!-- Plan Info -->
            <div class="px-6 mb-4">
            <div class="bg-gray-100 rounded-xl p-3 text-center">
                <p id="selectedPlanName" class="text-gray-700 font-medium"></p>
                <p id="selectedPlanPrice" class="text-gray-900 font-semibold text-lg"></p>
            </div>
            </div>

            <!-- Form -->
            <form id="purchaseForm" method="POST" action="" class="px-6 pb-6">
                @csrf
                <input type="hidden" name="chain" id="chainInput" value="erc20">
                <input type="hidden" name="pay_wallet_address" id="walletAddressInput">
                <input type="hidden" name="tx_hash" id="txHashInput">

                <!-- Network Selection -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-1">Choose Network</label>
                    <select id="chainSelect"
                    class="w-full border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-purple-400">
                        <option value="erc20">ERC20</option>
                        <option value="trc20">TRC20</option>
                    </select>
                </div>

                <!-- Connect MetaMask Button -->
                <div class="mb-4">
                    <button type="button" onclick="connectWallet()"
                    class="flex items-center w-full border border-gray-200 rounded-xl p-3 hover:bg-gray-50 transition">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/MetaMask_Fox.svg/768px-MetaMask_Fox.svg.png"
                            alt="MetaMask" class="w-7 h-7">
                        <div class="ml-3 text-left">
                            <p class="text-gray-800 font-medium">Connect MetaMask</p>
                            <p class="text-gray-500 text-sm">Connect to your MetaMask wallet</p>
                        </div>
                    </button>
                </div>

                {{-- بعد از کانکت و ساخت دیتافیک، دکمه فعال میشه --}}
                <button id="confirmBtn" type="submit" disabled
                    class="w-full text-black py-3 rounded-xl bg-gray-300 cursor-not-allowed transition shadow-xl font-semibold">
                    Confirm Purchase
                </button>
            </form>

            {{-- fake data for pay --}}
            <script src="https://cdn.jsdelivr.net/npm/ethers@5.7.2/dist/ethers.umd.min.js"></script>
            <script>
            let selectedPlanId = null;
            let userWallet = null;

            // وقتی روی Choose Plan کلیک میشه
            function openPurchaseModal(planId, planName, planPrice) {
                selectedPlanId = planId;

                // اینجا اکشن فرم رو درست ست می‌کنیم
                document.getElementById('purchaseForm').action = `/plans/${planId}/purchase`;

                document.getElementById('selectedPlanName').innerText = planName;
                document.getElementById('selectedPlanPrice').innerText = planPrice + ' USDT';

                document.getElementById('purchaseModal').classList.remove('hidden');
            }

            // بستن مودال
            function closePurchaseModal() {
                document.getElementById('purchaseModal').classList.add('hidden');
            }

            // وصل شدن به متامسک
            async function connectWallet() {
                if (window.ethereum) {
                    try {
                        const provider = new ethers.providers.Web3Provider(window.ethereum);
                        await provider.send("eth_requestAccounts", []);
                        const signer = provider.getSigner();
                        userWallet = await signer.getAddress();

                        // 👇 اینجا دیتافیک رو می‌سازیم (فعلاً الکی)
                        document.getElementById('walletAddressInput').value = userWallet;
                        document.getElementById('txHashInput').value = "0xFAKE_TX_HASH_" + Date.now(); // fake hash

                        // فعال کردن دکمه Confirm Purchase
                        let confirmBtn = document.getElementById('confirmBtn');
                        confirmBtn.disabled = false;
                        confirmBtn.classList.remove('bg-gray-300','cursor-not-allowed');
                        confirmBtn.classList.add('bg-green-500','hover:bg-green-600','text-white');

                        alert("Wallet connected! Fake TX hash generated. Now you can confirm purchase.");

                    } catch (err) {
                        console.error(err);
                        alert("Connection failed");
                    }
                } else {
                    alert("MetaMask not detected!");
                }
            }
            </script>
            {{-- fake data for pay --}}
        </div>
    </div>



    <!-- Features Comparison -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 slide-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Compare All Plans</h2>
                <p class="text-xl text-gray-600">See what's included in each trading plan</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Features</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-primary-green">Beginner</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-primary-purple">Advanced</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold text-primary-red">Professional</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">Video Lessons</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">12+</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">24+</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">50+</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">Trading Simulator</td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-green mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-purple mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-red mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">Community Access</td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-green mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center text-sm text-primary-purple font-medium">VIP Access</td>
                            <td class="px-6 py-4 text-center text-sm text-primary-red font-medium">VIP + Private</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">1-on-1 Mentorship</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-400">—</td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-purple mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center text-sm text-primary-red font-medium">Weekly Sessions</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">Premium Signals</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-400">—</td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-purple mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <svg class="w-5 h-5 text-primary-red mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/ethers@5.7.2/dist/ethers.umd.min.js"></script>
    <script>
    let selectedPlanId = null;

    function openPurchaseModal(planId, planName, planPrice) {
        selectedPlanId = planId;
        document.getElementById('selectedPlanName').innerText = planName;
        document.getElementById('selectedPlanPrice').innerText = planPrice + ' USDT';
        document.getElementById('purchaseForm').action = `/plans/${planId}/purchase`;
        document.getElementById('purchaseModal').classList.remove('hidden');
    }

    function closePurchaseModal() {
        document.getElementById('purchaseModal').classList.add('hidden');
    }
    </script>
    <script>
    let userWallet = null;

    async function connectWallet() {
        if (window.ethereum) {
            try {
                const provider = new ethers.providers.Web3Provider(window.ethereum);
                await provider.send("eth_requestAccounts", []);
                const signer = provider.getSigner();
                userWallet = await signer.getAddress();

                document.getElementById('walletAddressInput').value = userWallet;
                alert("Wallet connected: " + userWallet);

                // اینجا میتونی قرارداد USDT رو صدا بزنی و payment بزنی
                // ولی فعلا ساده نگه میداریم
                // بعد از پرداخت txHash رو اینجوری میگیری:
                // let tx = await signer.sendTransaction({ to: "OUR_RECEIVER_WALLET", value: ethers.utils.parseEther("0.1") });
                // document.getElementById('txHashInput').value = tx.hash;

            } catch (err) {
                console.error(err);
                alert("Connection failed");
            }
        } else {
            alert("MetaMask not detected!");
        }
    }
    </script>

@endsection
