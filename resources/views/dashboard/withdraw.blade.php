@extends('dashboard.app')
@section('content')

<main class="min-h-screen flex justify-center items-start p-6 bg-gray-50">
    <div class="w-full max-w-lg bg-white shadow-lg p-10 border border-gray-100 hover:border-gray-200">

        <h1 class="text-3xl font-extrabold text-black mb-8 text-center tracking-tight">
            Withdrawal USDT
        </h1>

        <form action="{{ route('withdrawal.usdt') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Available Balance Card -->
            <div class="flex justify-between items-center bg-gray-100 rounded-xl px-6 py-4 shadow-inner text-gray-800 font-medium">
                <span>Available Balance:</span>
                <p class="font-semibold" id="available-balance">{{ $data->wallet->usdt_balance }} USDT</p>
            </div>

            <!-- Wallet Address -->
            <div class="flex flex-col">
                <label for="wallet" class="text-gray-700 font-medium mb-2">Wallet Address</label>
                <input type="text" id="wallet" name="wallet" placeholder="BEP20 USDT Address" value="{{ $data->wallet->wallet_address }}"
                    class="w-full px-5 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ffae00] focus:border-[#ffae00] shadow-sm transition duration-300">
                <span class="text-gray-400 text-sm mt-1">BEP20 USDT</span>
            </div>

            <!-- Amount -->
            <div class="flex flex-col">
                <label for="amount" class="text-gray-700 font-medium mb-2">Amount</label>
                <input type="number" id="amount" name="amount" placeholder="0.00"
                    step="0.01"
                    max="{{ $data->wallet->usdt_balance }}"
                    class="w-full px-5 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#ffae00] focus:border-[#ffae00] shadow-sm transition duration-300">
                <span class="text-gray-400 text-sm mt-1">Max: <span id="amount-max">{{ $data->wallet->usdt_balance }}</span> USDT</span>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full py-3 bg-gradient-to-r from-[#ffae00] to-[#afda38] hover:from-[#afda38] hover:to-[#ffae00] text-black font-bold rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl">
                Withdrawal
            </button>
        </form>

        <!-- Info Text -->
        <p class="mt-6 text-center text-gray-500 text-sm">
            Please ensure your wallet address is correct. Transactions are irreversible.
        </p>
    </div>
</main>

<script>
    const amountInput = document.getElementById('amount');
    const maxBalance = parseFloat(document.getElementById('amount-max').innerText);

    amountInput.addEventListener('input', () => {
        if (parseFloat(amountInput.value) > maxBalance) {
            amountInput.value = maxBalance.toFixed(2); // خودکار محدود کنه
        }
    });
</script>

@endsection
