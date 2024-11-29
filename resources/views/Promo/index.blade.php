<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Promo</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('promo.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Promo
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($promo as $promo)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ Storage::url($promo->gambar_promo) }}" class="w-full h-48 object-cover" alt="{{ $promo->nama_promo }}" />
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $promo->nama_promo }}</h2>
                        <p class="text-gray-600 mt-2">{!! Str::limit($promo->deskripsi_promo, 100) !!}</p>
                        <p class="text-gray-500 mt-2">Tanggal Promo: {{ \Carbon\Carbon::parse($promo->tanggal_promo)->format('d M Y') }}</p>
                        <div class="mt-4">
                            <a href="{{ route('promo.edit', $promo->id) }}" class="text-blue-500 hover:underline">Edit</a>

                            <form action="{{ route('promo.destroy', $promo->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus promo ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination links -->
        <div class="mt-6">
            {{ $promo->links() }}
        </div>
    </div>
</x-app-layout>
