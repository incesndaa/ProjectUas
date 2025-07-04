<div class="bg-white rounded-lg shadow p-6">
    <div class="grid grid-cols-1 gap-6">
        <!-- Nama Ruangan -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Room Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $room->name ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Lokasi -->
        <div>
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" id="location" value="{{ old('location', $room->location ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('location')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Kapasitas -->
        <div>
            <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
            <input type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->capacity ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            @error('capacity')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Fasilitas -->
        <div>
            <label for="facilities" class="block text-sm font-medium text-gray-700">Facility</label>
            <textarea name="facilities" id="facilities" rows="3"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('facilities', $room->facilities ?? '') }}</textarea>
            @error('facilities')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>