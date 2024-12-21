<!-- resources/views/locations/edit.blade.php -->

<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-xl font-semibold mb-4">Edit Lokasi</h2>

            <form action="{{ route('locations.update', $location->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="nama_lokasi" class="block text-sm font-medium text-gray-700">Nama Lokasi</label>
                        <input type="text" id="nama_lokasi" name="nama_lokasi" value="{{ old('nama_lokasi', $location->nama_lokasi) }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        @error('nama_lokasi') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <label for="alamat_lokasi" class="block text-sm font-medium text-gray-700">Alamat Lokasi</label>
                        <input type="text" id="alamat_lokasi" name="alamat_lokasi" value="{{ old('alamat_lokasi', $location->alamat_lokasi) }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        @error('alamat_lokasi') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div>
                        <label for="link_lokasi" class="block text-sm font-medium text-gray-700">Link Lokasi</label>
                        <input type="url" id="link_lokasi" name="link_lokasi" value="{{ old('link_lokasi', $location->link_lokasi) }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        @error('link_lokasi') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
