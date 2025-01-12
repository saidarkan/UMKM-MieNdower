<x-app-layout>
    <div class="relative isolate bg-gray-900 py-24 sm:py-32" id="about">

        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!-- Tailwind CSS -->



        <!-- Gambar Latar Belakang dengan efek blur -->
        <div class="absolute inset-0 -z-10 w-full min-h-[60vh]"> <!-- Mengubah ukuran gambar menjadi lebih tinggi -->
            <img src="https://i.pinimg.com/736x/86/fb/3c/86fb3c65c0a94cc612b4531748441a24.jpg"
                alt="Mie Ndower background" class="w-full h-full object-cover object-center filter blur-sm">
        </div>

        <!-- Overlay Transparan -->
        <div class="absolute inset-0 bg-black bg-opacity-40 -z-10"></div>

        <!-- Konten Utama -->
        <div class="text-center relative z-10">
            <!-- Teks Header -->
            <p class="text-3xl font-semibold text-white mb-4 tracking-wide"
                style="font-family: 'Playwrite AU SA', serif;">
                Selamat Datang di
            </p>
            <!-- Nama Usaha -->
            <h1 class="text-7xl font-extrabold tracking-widest sm:text-9xl" style="font-family: 'Bangers', cursive;">
                <span class="text-white">MIE</span>
                <span class="text-red-600">NDOWER</span>
            </h1>

            <!-- Subjudul -->
            <p class="text-4xl font-serif italic text-gray-100 mt-6 sm:text-5xl tracking-normal"
                style="font-family: 'Playwrite AU SA', serif;">
                Mie Pedas #1 Rumbai
            </p>
        </div>

    </div>

    <!-- Konten Lainnya di bawah -->
    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Kolom Teks -->
                    <div class="animate-fade-in">
                        <h1 class="text-5xl text-left font-bold text-red-600 mb-6"
                            style="font-family: 'Bebas Neue', sans-serif;">
                            TENTANG KAMI
                        </h1>
                        <p class="text-lg text-gray-800 mb-8">
                            UMKM Mie Ndower berdiri sejak September 2023, terinspirasi dari kecintaan kami terhadap mie.
                            Kami berkomitmen menghadirkan mie dengan rasa autentik, porsi memuaskan, dan harga yang
                            ramah di
                            kantong. Nikmati berbagai pilihan menu lezat dari Mie Ndower, Pangsit Ndower, Bakso Ndower,
                            dan
                            topping istimewa yang dapat menambah kenikmatan hidangan Anda!
                        </p>
                        <a href="#" class="bg-red-700 text-white px-6 py-3 rounded-lg text-lg hover:bg-red-600">
                            HUBUNGI KAMI
                        </a>
                    </div>

                    <!-- Kolom Gambar -->
                    <div
                        class="relative transform rotate-[-2deg] -mt-40 hover:scale-110 transition duration-500 ease-in-out rounded-lg border-8 border-white shadow-2xl overflow-visible w-full max-w-[3000px] mx-auto">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/19/FotoJet-2023-02-19T203316884-1175934296.jpg"
                            alt="Mie Ayam" class="w-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Section Promo -->

                <div class="mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                    <h2 class="text-3xl font-bold mb-6">PROMO TERBARU</h2>
                    <p class="text-lg mb-6">Dapatkan promo spesial hanya di Mie Ndower! Jangan sampai ketinggalan!</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="relative">
                            <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/19/FotoJet-2023-02-19T203316884-1175934296.jpg"
                                alt="Promo Mie Ndower" class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                        </div>
                        <div class="relative">
                            <img src="https://image.popmama.com/content-images/post/20240120/Pangsit%20Chilli%20Oil%20%284%29-QM6PzI0jd5UTOez7YDMv3zfnCxMHf7RC.jpg?width=1200&height=800"
                                alt="Promo Mie Pedas" class="w-full h-[300px] object-cover rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
       


            <h1 class="text-4xl font-bold text-center text-red-600 mb-6 animate-fade-down mt-12">
                MENU NDOWER
            </h1>

            <!-- Section Menu -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <!-- Menambahkan margin atas untuk memberi jarak -->
                <a href="/menus#miendower" class="w-full">
                    <div
                        class="w-full bg-white shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/19/FotoJet-2023-02-19T203316884-1175934296.jpg"
                            alt="Mie Special" class="w-full h-[300px] object-cover rounded-t-lg animate-slide-in">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-red-600 mt-4 animate-fade-left">
                                {{ $menus->first()->nama_menu }}</h3>
                            <p class="text-gray-600 mt-2 animate-fade-right">{{ $menus->first()->deskripsi_menu }}</p>
                        </div>
                    </div>
                </a>

                <a href="/menus#pangsitndower" class="w-full">
                    <div
                        class="w-full bg-white shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="https://image.popmama.com/content-images/post/20240120/Pangsit%20Chilli%20Oil%20%284%29-QM6PzI0jd5UTOez7YDMv3zfnCxMHf7RC.jpg?width=1200&height=800"
                            alt="Mie Pedas" class="w-full h-[300px] object-cover rounded-t-lg animate-slide-in">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-red-600 mt-4 animate-fade-left">
                                {{ $menus->first()->nama_menu }}</h3>
                            <p class="text-gray-600 mt-2 animate-fade-right">{{ $menus->first()->deskripsi_menu }}</p>
                        </div>
                    </div>
                </a>

                <a href="/menus#baksondower" class="w-full">
                    <div
                        class="w-full bg-white shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="https://i.pinimg.com/550x/25/c9/b9/25c9b97f66bca124826b837a792e8341.jpg"
                            alt="Mie Keju" class="w-full h-[300px] object-cover rounded-t-lg animate-slide-in">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-red-600 mt-4 animate-fade-left">
                                {{ $menus->first()->nama_menu }}</h3>
                            <p class="text-gray-600 mt-2 animate-fade-right">{{ $menus->first()->deskripsi_menu }}</p>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>

    <div class="flex justify-center mt-10">
        <iframe src="{{ $locations->first()->link_lokasi }}" width="1500" height="300" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</x-app-layout>
