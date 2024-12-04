<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-2xl font-semibold text-gray-900">Edit Menu</h2>

            <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data" class="mt-6">
                @csrf
                @method('PUT') <!-- Menandakan bahwa ini adalah request PUT -->

                <!-- Nama Menu -->
                <div class="mb-4">
                    <label for="nama_menu" class="block text-sm font-medium text-gray-700">Nama Menu</label>
                    <input type="text" name="nama_menu" id="nama_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('nama_menu', $menu->nama_menu) }}" required>
                </div>

                <!-- Harga Menu -->
                <div class="mb-4">
                    <label for="harga_menu" class="block text-sm font-medium text-gray-700">Harga Menu</label>
                    <input type="number" name="harga_menu" id="harga_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('harga_menu', $menu->harga_menu) }}" required>
                </div>

                <!-- Gambar Menu -->
                <div class="mb-4">
                    <label for="gambar_menu" class="block text-sm font-medium text-gray-700">Gambar Menu</label>
                    <input type="file" name="gambar_menu" id="gambar_menu" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm">
                    @if ($menu->gambar_menu)
                        <img src="{{ asset('storage/' . $menu->gambar_menu) }}" alt="{{ $menu->nama_menu }}" class="mt-2 w-32 h-32 object-cover rounded-md">
                    @endif
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg">Perbarui Menu</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
