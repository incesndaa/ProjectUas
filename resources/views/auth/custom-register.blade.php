<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Booking</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left Column -->
        <div class="md:w-1/2 gradient-bg flex items-center justify-center p-12 text-white">
            <div class="max-w-md">
                <h2 class="text-4xl font-bold mb-4">Register a New Account</h2>
                <p class="text-lg opacity-90">Join to start booking rooms on your campus.</p>
            </div>
        </div>

        <!-- Right Column -->
        <div class="md:w-1/2 bg-white flex items-center justify-center p-8 md:p-12">
            <div class="w-full max-w-md">
                <!-- Form -->
                <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition duration-200"
                            placeholder="John Doe"
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition duration-200"
                            placeholder="email@example.com"
                        >
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition duration-200"
                            placeholder="••••••••"
                        >
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition duration-200"
                            placeholder="••••••••"
                        >
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 px-4 rounded-lg font-medium transition duration-200 shadow-md">
                        Register Now
                    </button>
                </form>

                <!-- Login Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-medium text-purple-600 hover:text-purple-800">
                            Login here
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>