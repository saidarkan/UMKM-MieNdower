<x-app-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="pt-16 bg-white">
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Daftar Promo</h1>

            <a href="{{ route('promo.create') }}"
                class="inline-block bg-green-500 text-white px-6 py-3 rounded-full mb-4 hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
                <i class="fas fa-plus-circle"></i> Tambah Promo
            </a>

            <div class="grid grid-cols-2 gap-6">
                @forelse ($promo as $item)
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center w-full rounded-lg shadow-lg overflow-hidden bg-white relative">
                            <!-- Jenis Promo -->
                            <span
                                class="absolute top-2 left-2 bg-yellow-500 text-white text-sm font-bold py-1 px-2 rounded">
                                {{ $item->jenis_promo }}
                            </span>

                            <!-- Gambar Promo -->
                            <img src="{{ asset('storage/' . $item->gambar_promo) }}" alt="{{ $item->nama_promo }}"
                                class="w-full h-[200px] object-cover bg-gray-200"
                                onerror="this.onerror=null;this.src='{{ asset('images/placeholder.png') }}';">

                            <div class="flex-1 p-6 text-center">
                                <!-- Nama Promo -->
                                <h3 class="text-2xl font-bold text-red-500 mb-2">{{ $item->nama_promo }}</h3>
                                <!-- Deskripsi Promo -->
                                <h5 class="text-sm font-bold text-gray-800 mb-2">{{Str::limit($item->deskripsi_promo,100 ) }}</h5>
                            </div>

                            <div class="mt-4 flex justify-between items-center space-x-4">
                                <!-- Tombol Edit -->
                                <a href="{{ route('promo.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('promo.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">Tidak ada promo yang tersedia.</p>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>
