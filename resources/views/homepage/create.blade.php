<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Homepage</h2>

            <!-- Form untuk Menambahkan Homepage -->
            <form action="{{ route('homepages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6">
                    <!-- Pembuka -->
                    <div>
                        <label for="pembuka" class="block text-sm font-medium text-gray-700">Pembuka</label>
                        <input type="text" name="pembuka" id="pembuka" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Judul 1 -->
                    <div>
                        <label for="judul1" class="block text-sm font-medium text-gray-700">Judul 1</label>
                        <input type="text" name="judul1" id="judul1" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Judul 2 -->
                    <div>
                        <label for="judul2" class="block text-sm font-medium text-gray-700">Judul 2</label>
                        <input type="text" name="judul2" id="judul2" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Deskripsi Judul -->
                    <div>
                        <label for="deskripsi_judul" class="block text-sm font-medium text-gray-700">Deskripsi Judul</label>
                        <textarea name="deskripsi_judul" id="deskripsi_judul" rows="3" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                    </div>

                    <!-- Subjudul -->
                    <div>
                        <label for="subjudul" class="block text-sm font-medium text-gray-700">Subjudul</label>
                        <input type="text" name="subjudul" id="subjudul" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Deskripsi Subjudul -->
                    <div>
                        <label for="deskripsi_subjudul" class="block text-sm font-medium text-gray-700">Deskripsi Subjudul</label>
                        <textarea name="deskripsi_subjudul" id="deskripsi_subjudul" rows="3" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>

                    <!-- Gambar -->
                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
