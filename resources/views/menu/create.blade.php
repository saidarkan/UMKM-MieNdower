<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-2xl font-semibold text-gray-900">Tambah Menu</h2>

            <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data" class="mt-6">
                @csrf

                <div class="mb-4">
                    <label for="nama_menu" class="block text-sm font-medium text-gray-700">Nama Menu</label>
                    <input type="text" name="nama_menu" id="nama_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('nama_menu') }}" required>
                </div>

                <div class="mb-4">
                    <label for="jenis_menu" class="block text-sm font-medium text-gray-700">Jenis Menu</label>
                    <select name="jenis_menu" id="jenis_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" required>
                        <option value="Mie" {{ old('jenis_menu') == 'Mie' ? 'selected' : '' }}>Mie</option>
                        <option value="Bakso" {{ old('jenis_menu') == 'Bakso' ? 'selected' : '' }}>Bakso</option>
                        <option value="Pangsit" {{ old('jenis_menu') == 'Pangsit' ? 'selected' : '' }}>Pangsit</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="deskripsi_menu" class="block text-sm font-medium text-gray-700">Deskripsi Menu</label>
                    <input type="text" name="deskripsi_menu" id="deskripsi_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('deskripsi_menu') }}" required>
                </div>

                <div class="mb-4">
                    <label for="harga_menu" class="block text-sm font-medium text-gray-700">Harga Menu</label>
                    <input type="number" name="harga_menu" id="harga_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('harga_menu') }}" required>
                </div>

                <div class="mb-4">
                    <label for="gambar_menu" class="block text-sm font-medium text-gray-700">Gambar Menu</label>
                    <input type="file" name="gambar_menu" id="gambar_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan Menu</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
