<aside class="w-64 bg-gradient-to-b from-blue-900 to-blue-800 text-white shadow-xl">
    <div class="p-6 flex items-center space-x-3">
        <svg class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>
        </svg>
        <h1 class="text-2xl font-bold">BookSpace</h1>
    </div>
    <nav class="mt-8">
        <ul class="space-y-2 px-4">
            <li>
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all {{ request()->is('admin/dashboard') ? 'bg-blue-600 shadow-md' : '' }}">
                   <i class="mr-2 fas fa-shield-alt mr-3"></i>
                   <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}" 
                   class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all {{ request()->is('admin/users') ? 'bg-blue-600 shadow-md' : '' }}">
                   <i class="fas fa-users mr-3"></i>
                   <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.rooms.index') }}" 
                   class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all {{ request()->is('admin/rooms') ? 'bg-blue-600 shadow-md' : '' }}">
                   <i class="fas fa-door-open mr-3"></i>
                   <span>Rooms</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.bookings.index') }}" 
                   class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all {{ request()->is('admin/bookings*') ? 'bg-blue-600 shadow-md' : '' }}">
                   <i class="fas fa-calendar-check mr-3"></i>
                   <span>Bookings</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="absolute bottom-0 p-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</aside>
