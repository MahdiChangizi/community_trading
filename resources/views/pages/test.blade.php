<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Your Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#82df6a',
                        'primary-purple': '#836adf',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Navigation Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-primary-green to-primary-purple rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">Settings</span>
                </div>

                <!-- Navigation Menu -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Trading</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Community</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Billing</a>
                    <a href="#" class="text-gray-600 font-semibold">Settings</a>
                </nav>

                <div class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center">
                    <span class="text-white text-sm font-medium">U</span>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Settings Navigation -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden h-fit">
                <div class="p-4 border-b border-gray-200">
                    <h3 class="font-semibold text-gray-900">Settings</h3>
                </div>
                <nav class="p-2">
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm font-medium bg-primary-green bg-opacity-10 text-primary-green rounded-lg mb-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Profile
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg mb-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        Security
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg mb-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM11 17H6l5 5v-5zM7 7a8 8 0 1116 0v5H7V7z"/>
                        </svg>
                        Notifications
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg mb-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                        </svg>
                        API Keys
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        </svg>
                        Preferences
                    </a>
                </nav>
            </div>

            <!-- Main Settings Content -->
            <div class="lg:col-span-3">
                <!-- Profile Settings -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                    <div class="bg-gradient-to-r from-primary-green to-primary-purple p-6 text-white">
                        <h2 class="text-2xl font-bold">Profile Settings</h2>
                        <p class="text-white text-opacity-90">Manage your personal information</p>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center space-x-6 mb-8">
                            <div class="relative">
                                <div class="w-24 h-24 bg-primary-green rounded-full flex items-center justify-center">
                                    <span class="text-white text-2xl font-bold">JD</span>
                                </div>
                                <button class="absolute -bottom-2 -right-2 w-8 h-8 bg-primary-purple text-white rounded-full flex items-center justify-center hover:bg-purple-700 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">John Doe</h3>
                                <p class="text-gray-600">john.doe@example.com</p>
                                <p class="text-sm text-gray-500 mt-1">Member since January 2024</p>
                            </div>
                        </div>

                        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" value="John" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" value="Doe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" value="john.doe@example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" value="+1 (555) 123-4567" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green">
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                                <textarea rows="4" placeholder="Tell us about yourself..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green resize-none"></textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Time Zone</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green">
                                    <option>UTC-8 (Pacific Time)</option>
                                    <option>UTC-5 (Eastern Time)</option>
                                    <option>UTC+0 (Greenwich Mean Time)</option>
                                    <option>UTC+1 (Central European Time)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Language</label>
                                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-green focus:border-primary-green">
                                    <option>English</option>
                                    <option>Spanish</option>
                                    <option>French</option>
                                    <option>German</option>
                                </select>
                            </div>
                        </form>

                        <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                            <button class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                Cancel
                            </button>
                            <button class="px-6 py-2 bg-primary-green text-white rounded-lg hover:bg-green-700 transition-colors font-semibold">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Security Settings -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">Security Settings</h3>
                        <p class="text-gray-600 mt-1">Keep your account secure</p>
                    </div>

                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Password -->
                            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-primary-purple bg-opacity-10 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-primary-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Password</h4>
                                        <p class="text-sm text-gray-600">Last changed 3 months ago</p>
                                    </div>
                                </div>
                                <button class="px-4 py-2 bg-primary-purple text-white rounded-lg hover:bg-purple-700 transition-colors">
                                    Change
                                </button>
                            </div>

                            <!-- Two-Factor Authentication -->
                            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Two-Factor Authentication</h4>
                                        <p class="text-sm text-green-600">Enabled with Authenticator App</p>
                                    </div>
                                </div>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                    Manage
                                </button>
                            </div>

                            <!-- Login Sessions -->
                            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900">Active Sessions</h4>
                                        <p class="text-sm text-gray-600">3 devices currently logged in</p>
                                    </div>
                                </div>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                    View All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification Settings -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">Notification Preferences</h3>
                        <p class="text-gray-600 mt-1">Choose how you want to be notified</p>
                    </div>

                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Email Notifications -->
                            <div>
                                <h4 class="font-medium text-gray-900 mb-4">Email Notifications</h4>
                                <div class="space-y-3">
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Trading alerts and updates</span>
                                        <input type="checkbox" checked class="w-4 h-4 text-primary-green border-gray-300 rounded focus:ring-primary-green">
                                    </label>
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Community activity</span>
                                        <input type="checkbox" class="w-4 h-4 text-primary-green border-gray-300 rounded focus:ring-primary-green">
                                    </label>
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Weekly market summary</span>
                                        <input type="checkbox" checked class="w-4 h-4 text-primary-green border-gray-300 rounded focus:ring-primary-green">
                                    </label>
                                </div>
                            </div>

                            <!-- Push Notifications -->
                            <div>
                                <h4 class="font-medium text-gray-900 mb-4">Push Notifications</h4>
                                <div class="space-y-3">
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Price alerts</span>
                                        <input type="checkbox" checked class="w-4 h-4 text-primary-purple border-gray-300 rounded focus:ring-primary-purple">
                                    </label>
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Order executions</span>
                                        <input type="checkbox" checked class="w-4 h-4 text-primary-purple border-gray-300 rounded focus:ring-primary-purple">
                                    </label>
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">New community posts</span>
                                        <input type="checkbox" class="w-4 h-4 text-primary-purple border-gray-300 rounded focus:ring-primary-purple">
                                    </label>
                                </div>
                            </div>

                            <!-- SMS Notifications -->
                            <div>
                                <h4 class="font-medium text-gray-900 mb-4">SMS Notifications</h4>
                                <div class="space-y-3">
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Security alerts</span>
                                        <input type="checkbox" checked class="w-4 h-4 text-red-500 border-gray-300 rounded focus:ring-red-500">
                                    </label>
                                    <label class="flex items-center justify-between">
                                        <span class="text-sm text-gray-700">Critical trade notifications</span>
                                        <input type="checkbox" class="w-4 h-4 text-red-500 border-gray-300 rounded focus:ring-red-500">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                            <button class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                Reset to Default
                            </button>
                            <button class="px-6 py-2 bg-primary-green text-white rounded-lg hover:bg-green-700 transition-colors font-semibold">
                                Save Preferences
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
