<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Artikel</h1>

        @if (session('success'))
        <div id="success-notification" class="bg-green-500 text-white p-3 mb-4 flex justify-between items-center">
            <span>{{ session('success') }}</span>
            <button onclick="dismissNotification()" class="text-white ml-4">x</button>
        </div>
    @endif

        @if (session('error'))
            <div id="success-notification" class="bg-red-500 text-white p-3 mb-4 flex justify-between items-center">
                <span>{{ session('error') }}</span>
                <button onclick="dismissNotification()" class="text-white ml-4">x</button>
            </div>
        @endif

        <a href="{{ route('artikel.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Berita
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($artikel as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="{{ $item->judul }}" />
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mt-2">{{$item->tanggal}}</p>
                        <p class="text-gray-600 mt-2">{{$item->status}}</p>
                        <p class="text-gray-600 mt-2">{{$item->kategori}}</p>
                        <p class="text-gray-600 mt-2">{!!($item->artikel)!!}</p>
                        <div class="mt-4">
                            <a href="{{ route('artikel.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function dismissNotification() {
            const notification = document.getElementById('success-notification');
            if (notification) {
                notification.style.display = 'none'; // Sembunyikan notifikasi
            }
        }
    </script>
</x-app-layout>
