<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-xl font-semibold mb-4">Tambah Data About</h2>

            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4">
                    <!-- Input Judul -->
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" id="judul" name="judul" value="{{ old('judul') }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        @error('judul') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <!-- Input Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ old('deskripsi') }}</textarea>
                        @error('deskripsi') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <!-- Input Gambar -->
                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" id="gambar" name="gambar" class="mt-1 block w-full border-gray-300 rounded-md" accept="image/*">
                        @error('gambar') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
