<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password - CryptoTrade</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { colors: { primary: { green: '#FFD700', purple: '#FFA500', red: '#df6a6a', yellow: '#d7df6a' } }, fontFamily: { 'inter': ['Inter', 'sans-serif'] } } }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .fade-in { opacity: 0; transform: translateY(20px); animation: fadeInUp 0.8s ease-out forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(255, 215, 0, 0.4); }
        .input-focus:focus { border-color: #FFD700; box-shadow: 0 0 0 3px rgba(130,223,106,0.1); }
        .auth-card { backdrop-filter: blur(10px); background: rgba(255,255,255,0.95); border: 1px solid rgba(255,255,255,0.2); }
        .gradient-text { background: linear-gradient(135deg, #FFD700, #FFA500); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .auth-bg { background: linear-gradient(135deg, rgba(130,223,106,0.05)0%, rgba(131,106,223,0.05)50%, rgba(223,106,106,0.05)100%); }
    </style>
</head>
<body class="min-h-screen auth-bg flex items-center justify-center p-4">
    <div class="w-full max-w-md">

        <!-- Logo -->
        <div class="text-center mb-8 fade-in">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-green rounded-xl mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold gradient-text">CryptoTrade</h1>
            <p class="text-gray-600 mt-2">Premium Trading Community</p>
        </div>

        <!-- Confirm Password Form -->
        <div class="auth-card rounded-xl shadow-xl p-8 fade-in" style="animation-delay:0.2s;">
            <p class="text-sm text-gray-600 mb-6">
                This is a secure area of the application. Please confirm your password before continuing.
            </p>

            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password"
                           class="input-focus w-full px-4 py-3 border border-gray-300 rounded-md"
                           placeholder="Enter your password">
                    @error('password')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                        class="btn-primary w-full bg-primary-green hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md">
                    Confirm
                </button>
            </form>
        </div>
    </div>
</body>
</html>
