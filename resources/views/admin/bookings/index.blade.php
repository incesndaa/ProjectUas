@extends('admin.layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-6">Manajemen Bookings</h1>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200" style="overflow: visible !important;">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Room</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Booker</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Time</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Purpose</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($bookings as $booking)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="text-sm font-medium text-gray-900">{{ $booking->room->name }}</div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $booking->user->name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">
                            {{ \Carbon\Carbon::parse($booking->date)->format('d M Y') }}
                            <br>
                            {{ $booking->start_time }} - {{ $booking->end_time }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">{{ Str::limit($booking->purpose, 30) }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs rounded-full 
                            {{ $booking->status === 'approved' ? 'bg-green-100 text-green-800' : 
                               ($booking->status === 'rejected' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex items-center space-x-2">
                            <!-- Dropdown Edit Status -->
                            <div class="relative">
                                <!-- Icon Edit -->
                                <button onclick="toggleDropdown(this)" class="text-blue-600 hover:text-blue-900 p-1 relative z-20">
                                    <i class="fas fa-edit"></i>
                                </button>
                                
                                <!-- Dropdown Menu -->
                                <div id="dropdown-{{ $booking->id }}" style="position: fixed !important; z-index: 9999 !important; transform: translateX(-50%);" class="hidden absolute right-0 z-10 mt-1 w-40 bg-white rounded-md shadow-lg border border-gray-200">
                                    <form action="{{ route('admin.bookings.updateStatus', $booking->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" name="status" value="pending" 
                                                class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 {{ $booking->status === 'pending' ? 'bg-blue-50 text-blue-600' : '' }}">
                                            <i class="fas fa-clock mr-2"></i> Pending
                                        </button>
                                        <button type="submit" name="status" value="approved" 
                                                class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 {{ $booking->status === 'approved' ? 'bg-green-50 text-green-600' : '' }}">
                                            <i class="fas fa-check mr-2"></i> Approved
                                        </button>
                                        <button type="submit" name="status" value="rejected" 
                                                class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 {{ $booking->status === 'rejected' ? 'bg-red-50 text-red-600' : '' }}">
                                            <i class="fas fa-times mr-2"></i> Rejected
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Delete Button -->
                            <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" onsubmit="return confirm('Do you want to delete it?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 p-1">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $bookings->links() }}
    </div>
</div>
@endsection

<!-- resources/views/admin/bookings/index.blade.php -->
@section('scripts')
<script>
// Fungsi toggle dropdown
function toggleDropdown(button) {
    const dropdown = button.nextElementSibling;
    dropdown.classList.toggle('hidden');
    
    // Tutup dropdown lain yang terbuka
    document.querySelectorAll('.relative .bg-white').forEach(el => {
        if (el !== dropdown && !el.classList.contains('hidden')) {
            el.classList.add('hidden');
        }
    });
}

// Tutup dropdown saat klik di luar
document.addEventListener('click', function(e) {
    if (!e.target.closest('.relative')) {
        document.querySelectorAll('.relative .bg-white').forEach(el => {
            el.classList.add('hidden');
        });
    }
});
</script>
@endsection
