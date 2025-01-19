<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <div class="pt-16 bg-white">
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Daftar Menu</h1>

            <a href="{{ route('menu.create') }}"
            class="inline-block bg-green-500 text-white px-6 py-3 rounded-full mb-4 hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
            <i class="fas fa-plus-circle"></i> Tambah Menu
            </a>

            <!-- Grid untuk Menampilkan Menu -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($menus as $menu)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden relative">
                        <!-- Kategori di atas -->
                        <div class="absolute top-4 left-4 bg-red-500 text-white px-4 py-1 text-sm rounded">
                            {{ $menu->jenis_menu }}
                        </div>

                        <!-- Gambar Menu -->
                        <img src="{{ Storage::url($menu->gambar_menu) }}" class="w-full h-56 object-cover"
                            alt="{{ $menu->nama_menu }}" />

                        <div class="p-4">
                            <h2 class="text-lg font-bold">{{ $menu->nama_menu }}</h2>
                            <p class="text-gray-600 mt-2">
                                {!! \Illuminate\Support\Str::limit($menu->deskripsi_menu, 75) !!}
                            </p>

                            <!-- Tombol Edit dan Hapus -->
                            <div class="mt-4 flex justify-between items-center space-x-4">
                                <!-- Tombol Edit -->
                                <a href="{{ route('menu.edit', $menu->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
