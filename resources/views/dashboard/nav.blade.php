<!-- Top Navigation -->
        <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-30">
            <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
                <div class="flex items-center">
                    <button onclick="openSidebar()" class="lg:hidden -ml-2 mr-2 p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a href="{{ url('/') }}">
                        <img class="h-16 w-auto sm:h-20 object-contain" src="{{ asset('images/Logo-bg.png') }}" alt="Community Trading Logo" loading="lazy">
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="/" class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                        {{-- back icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                    </a>
                </div>
            </div>
        </header
