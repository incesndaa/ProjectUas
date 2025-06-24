<aside class="w-64 bg-gradient-to-b from-blue-900 to-blue-800 text-white shadow-xl">
    <div class="p-6 flex items-center space-x-3">
        <i class="fas fa-book-open text-2xl text-amber-400"></i>
        <h1 class="text-2xl font-bold">BookSpace</h1>
    </div>
    <nav class="mt-8">
        <ul class="space-y-2 px-4">
            <li>
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all {{ request()->is('admin/dashboard') ? 'bg-blue-600 shadow-md' : '' }}">
                   <i class="fas fa-tachometer-alt mr-3"></i>
                   <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.rooms.index') }}" 
                   class="flex items-center p-3 rounded-lg hover:bg-blue-700 transition-all {{ request()->is('admin/rooms') ? 'bg-blue-600 shadow-md' : '' }}">
                   <i class="fas fa-door-open mr-3"></i>
                   <span>Ruangan</span>
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
