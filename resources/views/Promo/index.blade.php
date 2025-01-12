<x-app-layout>
    <div class="max-w-5xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Promo</h1>

        <!-- Flash Messages -->
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" class="bg-green-500 text-white p-4 rounded-lg mb-6 transition duration-500 ease-in-out transform hover:scale-105">
                <div class="flex items-center justify-between">
                    <span>{{ session('success') }}</span>
                    <button @click="show = false" class="text-white font-bold focus:outline-none">&times;</button>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div x-data="{ show: true }" x-show="show" class="bg-red-500 text-white p-4 rounded-lg mb-6 transition duration-500 ease-in-out transform hover:scale-105">
                <div class="flex items-center justify-between">
                    <span>{{ session('error') }}</span>
                    <button @click="show = false" class="text-white font-bold focus:outline-none">&times;</button>
                </div>
            </div>
        @endif

        <!-- Tombol Tambah Promo -->
        <a href="{{ route('promo.create') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg mb-6 hover:bg-blue-700 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition">
            Tambah Promo
        </a>

        <!-- Daftar Promo -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($promo as $item)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <!-- Gambar Promo -->
                    <div class="relative">
                        <img src="{{ asset('storage/' . $item->gambar_promo) }}" alt="{{ $item->nama_promo }}" class="w-full h-56 object-cover"
                             onerror="this.onerror=null;this.src='{{ asset('images/placeholder.png') }}';">
                        <div class="absolute top-0 left-0 bg-blue-500 text-white text-xs uppercase font-bold px-3 py-1 rounded-br-lg">
                            Promo
                        </div>
                    </div>

                    <!-- Informasi Promo -->
                    <div class="p-5">
                        <h2 class="text-lg font-bold text-gray-800 truncate">{{ $item->nama_promo }}</h2>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{!! Str::limit($item->deskripsi_promo, 100) !!}</p>
                        <p class="text-sm text-gray-500 mt-3">
                            <span class="font-medium">Mulai:</span> {{ \Carbon\Carbon::parse($item->tanggal_promo)->format('d M Y') }}
                        </p>
                        <p class="text-sm text-gray-500">
                            <span class="font-medium">Berakhir:</span> {{ $item->tanggal_berakhir ? \Carbon\Carbon::parse($item->tanggal_berakhir)->format('d M Y') : 'Tidak ditentukan' }}
                        </p>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="p-5 border-t flex items-center justify-between">
                        <a href="{{ route('promo.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800 text-sm font-semibold transition">Edit</a>
                        <form action="{{ route('promo.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus promo ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-semibold transition">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <!-- Jika Tidak Ada Promo -->
                <div class="col-span-3 text-center text-gray-500 text-lg">
                    Belum ada promo yang tersedia.
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-10">
            {{ $promo->links() }}
        </div>
    </div>
</x-app-layout>
