{{-- <!DOCTYPE html>

    <script>
        // Form submission handler
        document.getElementById('profitForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const month = document.getElementById('month').value;
            const profit = document.getElementById('profit').value;

            if (month && profit) {
                // Simulate form processing
                const button = e.target.querySelector('button[type="submit"]');
                const originalText = button.textContent;

                button.textContent = 'Processing...';
                button.disabled = true;

                setTimeout(() => {
                    button.textContent = 'Distribution Set!';
                    button.classList.remove('gold-gradient', 'hover-orange');
                    button.classList.add('bg-green-500', 'hover:bg-green-600');

                    setTimeout(() => {
                        button.textContent = originalText;
                        button.disabled = false;
                        button.classList.remove('bg-green-500', 'hover:bg-green-600');
                        button.classList.add('gold-gradient', 'hover-orange');
                    }, 2000);
                }, 1500);
            }
        });

        // Auto-focus on month input when page loads
        window.addEventListener('load', function() {
            document.getElementById('month').focus();
        });
    </script>
</body>
</html> --}}

@extends('dashboard.app')
@section('content')
<style>
        .gold-gradient {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
        }
        .hover-orange:hover {
            background: linear-gradient(135deg, #FFA500 0%, #FF8C00 100%);
        }
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
            border-color: #FFD700;
        }
        .card-shadow {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .info-icon {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
        }
    </style>
<div class="flex items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">
        <div class="w-full max-w-md">
            <!-- Main Card -->
            <div class="bg-white rounded-2xl card-shadow p-8 sm:p-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-2xl sm:text-3xl font-bold text-black mb-2">
                        Monthly Distribution
                    </h1>
                    <p class="text-gray-600 text-sm">
                        Set profit parameters for token holders
                    </p>
                </div>

                <!-- Form -->
                <form class="space-y-6" id="profitForm" method="POST" action="{{ url('admin/distribute') }}">
                    @csrf

                    @if(session('success'))
                        <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded">
                            <ul class="list-disc pl-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Total Profit Input -->
                    <div class="space-y-2">
                        <label for="profit" class="block text-sm font-semibold text-black">
                            Total Profit (USDT)
                        </label>
                        <input
                            type="number"
                            id="profit"
                            name="total_profit"
                            step="0.01"
                            min="0"
                            placeholder="Enter total profit amount"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl form-input focus:outline-none focus:ring-0 text-black bg-gray-50"
                            value="{{ old('profit') }}"
                            required
                        >
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full gold-gradient hover-orange text-black font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg text-lg mt-8"
                    >
                        Calculate Distribution
                    </button>
                </form>
            </div>

            <!-- Explanation Box -->
            <div class="mt-6 bg-gray-50 rounded-2xl p-6 border border-gray-100">
                <div class="flex items-start space-x-4">

                    <div class="flex-1">
                        <h3 class="font-semibold text-black mb-2 text-lg">
                            How Distribution Works
                        </h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            <strong>Example:</strong> If the total profit is <span class="text-yellow-600 font-semibold">1,000 USDT</span>
                            and there are <span class="text-yellow-600 font-semibold">2,000 total tokens</span>, then each token equals
                            <span class="text-yellow-600 font-semibold">0.5 USDT</span>. A user holding
                            <span class="text-yellow-600 font-semibold">100 tokens</span> will receive
                            <span class="text-yellow-600 font-semibold">50 USDT</span> as their share.
                        </p>
                        <div class="mt-3 p-3 bg-white rounded-lg border-l-4 border-yellow-500">
                            <p class="text-xs text-gray-600">
                                <strong>Formula:</strong> Profit per Token = Total Profit ÷ Total Tokens<br>
                                <strong>User Share:</strong> User Tokens × Profit per Token
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
