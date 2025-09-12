<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - CryptoTrade</title>
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

        <!-- Verify Email Card -->
        <div class="auth-card rounded-xl shadow-xl p-8 fade-in" style="animation-delay:0.2s;">
            <p class="text-sm text-gray-600 mb-4">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
                If you didn't receive the email, we will gladly send you another.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif

            <div class="flex items-center justify-between mt-6">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                            class="btn-primary bg-primary-green hover:bg-green-600 text-white font-medium py-2 px-4 rounded-md">
                        Resend Verification Email
                    </button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
