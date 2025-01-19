<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="max-w-7xl mx-auto py-12 grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Konten Artikel -->
            <div class="lg:col-span-3">
                <!-- Judul Artikel -->
                <h1 class="text-4xl font-extrabold text-red-600 mb-6">{{ $artikel->judul }}</h1>

                <!-- Gambar Artikel dengan ukuran lebih kecil -->
                <img src="{{ Storage::url($artikel->gambar) }}" class="w-full h-64 object-cover rounded-lg shadow-lg mb-8"
                    alt="{{ $artikel->judul }}">

                <!-- Informasi Artikel -->
                <div class="text-sm text-gray-500 mb-6">
                    <span><strong>Kategori:</strong> {{ $artikel->kategori }}</span> &bull;
                    <span><strong>Tanggal:</strong>
                        {{ \Carbon\Carbon::parse($artikel->tanggal)->format('d M Y') }}</span> &bull;
                    <span><strong>Status:</strong> {{ $artikel->status }}</span>
                </div>

                <!-- Isi Artikel -->
                <div class="prose max-w-none">
                    {!! $artikel->artikel !!}
                </div>

                <!-- Tombol Navigasi -->
                <div class="mt-8">
                    <a href="{{ route('artikel.index') }}"
                        class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Kembali ke Daftar
                        Artikel</a>
                </div>
            </div>

            <!-- Rekomendasi Artikel -->
            <div class="lg:col-span-1">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Rekomendasi Artikel</h2>
                <ul class="space-y-4">
                    @foreach ($rekomendasi as $item)
                        <li>
                            <a href="{{ route('artikel.show', $item->id) }}" class="flex items-start space-x-4">
                                <img src="{{ Storage::url($item->gambar) }}"
                                    class="w-20 h-20 object-cover rounded-md shadow" alt="{{ $item->judul }}">
                                <div>
                                    <h3 class="text-md font-semibold text-gray-700">{{ $item->judul }}</h3>
                                    <p class="text-sm text-gray-500">
                                        {{ \Illuminate\Support\Str::limit($item->artikel, 50) }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
