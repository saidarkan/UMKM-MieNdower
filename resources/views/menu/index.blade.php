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
                <span class="text-white">MENU</span> <span class="text-yellow-500">NDOWER</span>
            </h1>
            <p class="text-lg text-white mt-4">Nikmati berbagai pilihan menu lezat dari Mie Ndower, Pangsit Ndower, dan
                banyak lagi!</p>
        </div>
    </div>


    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-1 sm:px-8 lg:px-10">
            <!-- Navigation Tabs -->
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav class="flex justify-center space-x-4 ">
                    <a href="#mie"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Mie Ndower
                    </a>
                    <a href="#pangsit"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Pangsit Ndower
                    </a>
                    <a href="#bakso"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Bakso Ndower
                    </a>
                    <a href="#topping"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Topping
                    </a>
                </nav>
            </div>

            <!-- Semua Kategori -->
            @foreach (['mie' => 'Mie Ndower', 'pangsit' => 'Pangsit Ndower', 'bakso' => 'Bakso Ndower', 'topping' => 'Topping Ndower'] as $category => $title)
                <div id="{{ $category }}" class="mt-12 border-t border-gray-300 pt-4">
                    <!-- Judul Kategori -->
                    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

                    <h1 class="text-center text-xl py-4 font-extrabold text-red-600 tracking-widest sm:text-5xl"

                    style="font-family: 'Bangers', cursive;">
                    {{ $title }}
                </h1>

                    <!-- Deskripsi Kategori -->
                    <p class="text-center text-gray-500 mb-6 sm:text-lg">
                        {{ $category == 'mie' ? 'Nikmati mie dengan berbagai rasa khas dan topping istimewa.' : '' }}
                        {{ $category == 'pangsit' ? 'Pangsit renyah yang pas untuk dinikmati bersama mie.' : '' }}
                        {{ $category == 'bakso' ? 'Bakso lezat dengan kuah yang segar, cocok di segala suasana.' : '' }}
                        {{ $category == 'topping' ? 'Tambah topping favoritmu untuk pengalaman makan yang lebih nikmat.' : '' }}
                    </p>

                    <!-- Grid Produk -->
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-10">
                        @php
                            $filteredMenus = $menus->where('jenis_menu', $category);
                        @endphp

                        @forelse ($filteredMenus as $menu)
                            <div class="group rounded-lg shadow-md overflow-hidden cursor-pointer"
                                onclick="openModal({{ $menu->id }})">
                                <img src="{{ asset('storage/' . $menu->gambar_menu) }}" alt="{{ $menu->nama_menu }} "
                                    class="w-full h-[250px] rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
                                <div class="text-center mt-4">
                                    <h3 class="text-sm text-gray-700">{{ $menu->nama_menu }}</h3>
                                    <p class="text-lg font-medium text-gray-900">
                                        Rp{{ number_format($menu->harga_menu, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500">Tidak ada menu untuk kategori ini.</p>
                        @endforelse
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
