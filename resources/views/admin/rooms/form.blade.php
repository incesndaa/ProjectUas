<div class="bg-white rounded-lg shadow p-6">
    <div class="grid grid-cols-1 gap-6">
        <!-- Nama Ruangan -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama Ruangan</label>
            <input type="text" name="name" id="name" value="{{ old('name', $room->name ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Lokasi -->
        <div>
            <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
            <input type="text" name="location" id="location" value="{{ old('location', $room->location ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('location')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kapasitas -->
        <div>
            <label for="capacity" class="block text-sm font-medium text-gray-700">Kapasitas</label>
            <input type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->capacity ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('capacity')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Fasilitas -->
        <div>
            <label for="facilities" class="block text-sm font-medium text-gray-700">Fasilitas</label>
            <textarea name="facilities" id="facilities" rows="3"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('facilities', $room->facilities ?? '') }}</textarea>
            @error('facilities')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gambar -->
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Ruangan</label>
            <input type="file" name="image" id="image"
                   class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            @error('image')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            
            @if(isset($room) && $room->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/room_images/' . $room->image) }}" alt="Preview" class="h-32 rounded-md">
                </div>
            @endif
        </div>
    </div>
</div>