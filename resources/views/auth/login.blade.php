<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - CryptoTrade Community</title>
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
        * { font-family: 'Inter', sans-serif; }
        .fade-in { opacity: 0; transform: translateY(20px); animation: fadeInUp 0.8s ease-out forwards; }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .btn-primary { transition: all 0.3s ease; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,0.2); }
        .input-focus { transition: all 0.3s ease; }
        .input-focus:focus { border-color: #82df6a; box-shadow: 0 0 0 3px rgba(130,223,106,0.1); }
        .auth-card { backdrop-filter: blur(10px); background: rgba(255,255,255,0.95); border: 1px solid rgba(255,255,255,0.2); }
        .gradient-text { background: linear-gradient(135deg, #82df6a, #836adf); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .password-toggle { cursor: pointer; transition: color 0.3s ease; }
        .password-toggle:hover { color: #82df6a; }
        .remember-checkbox:checked { background-color: #82df6a; border-color: #82df6a; }
        .auth-bg { background: linear-gradient(135deg, rgba(130,223,106,0.05)0%, rgba(131,106,223,0.05)50%, rgba(223,106,106,0.05)100%); }
        .loading-spinner { animation: spin 1s linear infinite; }
        @keyframes spin { from { transform: rotate(0deg);} to { transform: rotate(360deg);} }
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

        <!-- Login Form -->
        <div class="auth-card rounded-xl shadow-xl p-8 fade-in" style="animation-delay:0.2s;">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Welcome Back</h2>
                <p class="text-gray-600">Sign in to access your trading dashboard</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <div class="relative">
                        <input type="email" id="email" name="email"
                               value="{{ old('email') }}" required autofocus autocomplete="username"
                               class="input-focus w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none placeholder-gray-400"
                               placeholder="Enter your email">
                        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </div>
                    @error('email')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required autocomplete="current-password"
                               class="input-focus w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none placeholder-gray-400 pr-12"
                               placeholder="Enter your password">
                        <button type="button" class="password-toggle absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                                onclick="togglePassword('password')">
                            <svg id="passwordEye" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 
                                      0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <div class="text-sm text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember / Forgot Password -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                               class="remember-checkbox h-4 w-4 rounded border-gray-300 text-primary-green focus:ring-primary-green focus:ring-2 focus:ring-offset-2">
                        <span class="ml-2 text-sm text-gray-700">Remember me</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-primary-green hover:text-green-600 font-medium">Forgot password?</a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-primary w-full bg-primary-green hover:bg-green-600 text-white font-medium py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2">
                    Sign In
                </button>
            </form>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-sm text-gray-500 fade-in" style="animation-delay:0.4s;">
            <p>&copy; {{ date('Y') }} CryptoTrade Community. All rights reserved.</p>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const eye = document.getElementById(fieldId + 'Eye');
            if (field.type === 'password') {
                field.type = 'text';
                eye.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 
                    10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 
                    3 0 114.243 4.243M9.878 9.878l4.242 
                    4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>`;
            } else {
                field.type = 'password';
                eye.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 
                    0 8.268-2.943 9.542 7-1.274 4.057-5.064 
                    7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>`;
            }
        }
    </script>
</body>
</html>
