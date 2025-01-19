<x-app-layout>
    <div class="relative isolate bg-gray-900 py-24 sm:py-32" id="about">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

        <!-- Gambar Latar Belakang dengan efek blur -->
        <div class="absolute inset-0 -z-10 w-full min-h-[40vh]">
            <img src="https://i.pinimg.com/originals/9e/9f/9c/9e9f9c9f88e4c737590d37c344963cdb.jpg"
                alt="Mie Ndower background" class="w-full h-full object-cover object-center filter blur-sm">
        </div>

        <!-- Overlay Transparan -->
        <div class="absolute inset-0 bg-black bg-opacity-20 -z-10"></div>

        <!-- Gambar Transparan Kiri -->
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-80 h-96 bg-no-repeat bg-cover bg-center"
            style="background-image: url('https://img.pikbest.com/png-images/20240621/transparent-background-thai-noodles-with-chicken_10629734.png!sw800');">
        </div>

        <!-- Gambar Transparan Kanan -->
        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-80 h-96 bg-no-repeat bg-cover bg-center"
            style="background-image: url('https://img.pikbest.com/png-images/20240621/transparent-background-thai-noodles-with-chicken_10629734.png!sw800');">
        </div>

        <!-- Konten Utama -->
        <div class="text-center relative z-10">
            <h1 class="text-6xl font-extrabold tracking-widest sm:text-8xl" style="font-family: 'Bangers', cursive;">
                <span class="text-white">ARTIKEL</span> <span class="text-yellow-500">NDOWER</span>
            </h1>
            <p class="text-lg text-white mt-4">Nikmati berbagai pilihan menu lezat dari Mie Ndower, Pangsit Ndower, dan
                banyak lagi!</p>
        </div>
    </div>
    <div class="pt-16 bg-white">
        <div class="max-w-4xl mx-auto py-6">



            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($artikel as $item)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden relative">
                        <!-- Kategori di atas -->
                        <div class="absolute top-4 left-4 bg-red-500 text-white px-4 py-1 text-sm rounded">
                            {{ $item->kategori }}
                        </div>

                        <!-- Gambar Artikel -->
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-56 object-cover"
                            alt="{{ $item->judul }}" />

                        <div class="p-4">
                            <h2 class="text-lg font-bold">{{ $item->judul }}</h2>

                            <p class="text-gray-600 mt-2">{!! \Illuminate\Support\Str::limit($item->artikel, 75) !!}</p>

                            <!-- Tombol "Selengkapnya" -->
                            <div class="mt-4 flex justify-between items-center ">
                                <a href="{{ route('artikel.show', $item->id) }}"
                                    class="text-blue-500 hover:underline">Selengkapnya</a>
                                {{-- <a href="{{ route('artikel.edit', $item->id) }}"
                                    class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                </form> --}}
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menutup notifikasi
        function dismissNotification() {
            const notification = document.getElementById('success-notification') || document.getElementById(
                'error-notification');
            if (notification) {
                notification.style.display = 'none'; // Sembunyikan notifikasi
            }
        }
    </script>
</x-app-layout>
