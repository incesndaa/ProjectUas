<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @stack('styles')
</head>
<body class="font-sans bg-gray-50 antialiased">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2">
                        <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
                        </svg>
                        <span class="text-xl font-bold text-gray-800">BookSpace</span>
                    </a>
                </div>

                <!-- Menu -->
                <div class="flex items-center space-x-8">
                    @auth
                        <a href="{{ route('rooms.availability') }}" class="text-gray-600 hover:text-blue-600 transition duration-200 {{ request()->routeIs('rooms.availability.*') ? 'text-blue-600 font-medium' : '' }}">
                            <i class="mr-1 fas fa-calendar-check"></i> Rooms
                        </a>
                        <a href="{{ route('bookings.index') }}" class="text-gray-600 hover:text-blue-600 transition duration-200 {{ request()->routeIs('bookings.*') ? 'text-blue-600 font-medium' : '' }}">
                        <a href="" class="text-gray-600 whover:text-blue-600 transition duration-200 {{ request()->routeIs('bookings.*') ? 'text-blue-600 font-medium' : '' }}">
                            <i class="mr-1 fas fa-calendar-check"></i> Bookings
                        </a>
                        
                        @if(auth()->user()->is_admin)
                            <a href="" class="text-gray-600 hover:text-blue-600 transition duration-200 {{ request()->routeIs('admin.*') ? 'text-blue-600 font-medium' : '' }}">
                                <i class="mr-1 fas fa-tachometer-alt"></i> Admin
                            </a>
                        @endif
                        
                        <!-- User Dropdown -->
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="flex items-center space-x-1 focus:outline-none">
                                <span class="text-gray-700">{{ Auth::user()->name }}</span>
                                <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            
                            <div x-show="open" @click.away="open = false" 
                                 class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="mr-2 fas fa-user-cog"></i> Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="mr-2 fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 transition duration-200">
                            <i class="mr-1 fas fa-sign-in-alt"></i> Login
                        </a>
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-blue-600 transition duration-200">
                            <i class="mr-1 fas fa-user-plus"></i> Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Flash Messages -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            
            @if(session('error'))
                <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} BookSpace - STT Terpadu Nurul Fikri
            </p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>