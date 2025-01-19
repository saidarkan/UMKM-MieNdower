<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="relative isolate bg-white py-24 sm:py-32">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Kolom Rating, Komentar -->
                <!-- Detail Menu -->
                <div class="flex flex-col items-center lg:items-start">
                    <div class="relative w-full max-w-[500px] aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $menu->gambar_menu) }}" alt="{{ $menu->nama_menu }}"
                            class="w-full h-full object-contain">
                    </div>
                    <h2 class="text-3xl font-extrabold text-gray-800 mt-4">{{ $menu->nama_menu }}</h2>
                    <p class="text-xl font-medium text-yellow-500 mt-2">Rp{{ number_format($menu->harga_menu, 0, ',', '.') }}</p>
                    <p class="text-lg text-gray-500 mt-2 text-justify lg:text-left space-y-8">
                        {{ $menu->deskripsi_menu }}
                    </p>
                </div>


                <!-- Kolom Rating dan Komentar -->
                <div>
                    <!-- Rata-Rata Rating dalam Bentuk Bintang -->
                    <div class="mt-4">
                        <h3 class="text-2xl font-bold text-gray-800">Rating</h3>
                        <span class="text-xl font-bold text-yellow-500">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= round($averageRating) ? 'text-yellow-500' : 'text-gray-300' }} inline-block"></i>
                            @endfor
                        </span>
                        <span class="ml-2 text-xl">{{ number_format($averageRating, 1) }} / 5</span>
                    </div>

                    <!-- Form untuk memberikan rating -->
                    <form method="POST" action="{{ route('menu.storeReview', $menu->id) }}" id="rating-form">
                        @csrf
                        <div class="mt-4">
                            <label class="text-gray-700">Nama:</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama Anda" class="w-full p-4 rounded-lg border border-gray-300" required>
                        </div>
                        <div class="mt-4">
                            <label class="text-gray-700">Rating:</label>
                            <div class="flex items-center space-x-1 mt-2" id="star-rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <input type="radio" name="rating" value="{{ $i }}" id="rating{{ $i }}" class="hidden" />
                                    <label for="rating{{ $i }}" class="text-xl cursor-pointer">
                                        <i class="fas fa-star text-gray-400" data-index="{{ $i }}"></i>
                                    </label>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4">
                            <textarea name="comment" placeholder="Tulis komentar Anda..." class="w-full p-4 rounded-lg border border-gray-300" required></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-6 py-3 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                Kirim Komentar
                            </button>
                        </div>
                    </form>

                   <!-- Komentar Pengguna -->
                    <div class="mt-4">
                        <h3 class="text-xl font-bold text-gray-800">Komentar Pengguna</h3>
                        <div class="mt-4">
                            @forelse ($reviews as $review)
                                <div class="border-b border-gray-300 py-4">
                                    <div class="flex items-start justify-between">
                                        <!-- Nama Pengguna di kiri atas -->
                                        <div class="flex flex-col items-start space-y-2">
                                            <p class="text-gray-700 font-semibold">{{ $review->nama }}</p> <!-- Nama Pengguna -->
                                            <p class="text-gray-500 mt-2">{{ $review->comment }}</p> <!-- Komentar Pengguna -->
                                        </div>

                                        <!-- Rating di kanan atas -->
                                        <div class="flex items-start flex-col justify-start">
                                            <span class="text-yellow-500 font-semibold">{{ $review->rating }} / 5</span>
                                            <div class="flex items-center space-x-1">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i class="fas fa-star {{ $i <= $review->rating ? 'text-yellow-500' : 'text-gray-300' }} inline-block"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Aksi Hapus -->
                                    <div class="mt-2 flex space-x-4">
                                        <form action="{{ route('review.destroy', $review->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-500">Belum ada komentar.</p>
                            @endforelse
                        </div>

                        <!-- Pagination Links -->
                        <div class="mt-4">
                            {{ $reviews->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rekomendasi Menu (pindah ke bawah) -->
            <div class="mt-16">
                <h2 class="text-3xl font-extrabold text-gray-800">Rekomendasi Menu Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($recommendedMenus as $recommendedMenu)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <a href="{{ route('menu.show', $recommendedMenu->id) }}">
                                <img src="{{ asset('storage/' . $recommendedMenu->gambar_menu) }}"
                                    alt="{{ $recommendedMenu->nama_menu }}"
                                    class="w-full h-[200px] object-cover">
                            </a>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $recommendedMenu->nama_menu }}</h3>
                                <p class="text-lg font-bold text-yellow-500 mt-2">
                                    Rp{{ number_format($recommendedMenu->harga_menu, 0, ',', '.') }}
                                </p>
                                <a href="{{ route('menu.show', $recommendedMenu->id) }}"
                                    class="block mt-4 px-4 py-2 bg-red-600 text-white text-center rounded-lg hover:bg-red-700">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk interaktivitas bintang -->
    <script>
        const stars = document.querySelectorAll('#star-rating i');
        let selectedRating = 0;

        stars.forEach(star => {
            star.addEventListener('click', function() {
                selectedRating = this.getAttribute('data-index');
                stars.forEach(star => {
                    if (star.getAttribute('data-index') <= selectedRating) {
                        star.classList.add('text-yellow-500');
                        star.classList.remove('text-gray-400');
                    } else {
                        star.classList.remove('text-yellow-500');
                        star.classList.add('text-gray-400');
                    }
                });
                document.querySelector(`#rating${selectedRating}`).checked = true;
            });
        });
    </script>
</x-app-layout>
