<x-app-layout>
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <div class="relative isolate bg-gray-900 py-24 sm:py-32" id="about">

        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- Gambar Latar Belakang dengan efek blur -->
        <div class="absolute inset-0 -z-10 w-full min-h-[60vh]">
            <img src="{{ asset('storage/' . $homepage->first()->gambar) }}" alt="Mie Ndower background"
                class="w-full h-full object-cover object-center filter blur-sm">
        </div>

        <!-- Overlay Transparan -->
        <div class="absolute inset-0 bg-black bg-opacity-40 -z-10"></div>

        <!-- Konten Utama -->
        <div class="text-center relative z-10">
            <p class="text-3xl font-semibold text-white mb-4 tracking-wide" style="font-family: 'Playwrite AU SA', serif;" data-aos="fade-up">
                {{ $homepage->first()->pembuka }}
            </p>
            <h1 class="text-7xl font-extrabold tracking-widest sm:text-9xl" style="font-family: 'Bangers', cursive;" data-aos="fade-up">
                <span class="text-white"> {{ $homepage->first()->judul1 }}</span>
                <span class="text-red-600"> {{ $homepage->first()->judul2 }}</span>
            </h1>
            <p class="text-4xl font-serif italic text-gray-100 mt-6 sm:text-5xl tracking-normal" style="font-family: 'Playwrite AU SA', serif;" data-aos="fade-up">
                {{ $homepage->first()->deskripsi_judul }}
            </p>

        </div>
    </div>

    <!-- Konten Lainnya di bawah -->
    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Kolom Teks -->
                    <div class="animate-fade-in" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <h1 class="text-5xl text-left font-bold text-red-600 mb-6" style="font-family: 'Bebas Neue', sans-serif;">
                            {{ $about->first()->judul }}
                        </h1>
                        <p class="text-lg text-gray-800 mb-8">
                            {{ $about->first()->deskripsi }}
                        </p>
                        <a href="#" class="bg-red-700 text-white px-6 py-3 rounded-lg text-lg hover:bg-red-600">
                            HUBUNGI KAMI
                        </a>
                    </div>

                    <!-- Kolom Gambar -->
                    <div class="relative -mt-40 hover:scale-110 transition-transform duration-500 ease-in-out transform rotate-[-5deg] hover:transform-none"
                    style="transform: rotate(-5deg);"
                    data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <img src="{{ asset('storage/' . $about->first()->gambar) }}" alt="Mie Ayam" class="w-full object-cover transition-transform duration-500 ease-in-out hover:scale-110 border-8 border-white">
                </div>



                </div>
            </div>


            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    AOS.init({
                        duration: 1000,  // Durasi animasi
                        easing: 'ease-in-out',  // Efek easing
                        once: true,  // Animasi hanya terjadi sekali
                    });
                });
            </script>



            <section id="faq" class="relative w-screen text-center bg-red-700 py-12 -mx-40 lg:scroll-mx-32">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                            <h1 class="text-center text-2xl font-bold mb-6" data-aos="fade-up">
                                FAQ INFO MIE MAPAN
                            </h1>
                            @foreach ($faqs as $faq)
                                <div class="faq-item border-t-2 border-red-500 py-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="faq-question flex justify-between items-center font-bold cursor-pointer text-black"
                                        onclick="toggleAnswer(this)">
                                        {{ $faq->pertanyaan }}
                                        <span class="toggle-icon text-red-500 text-xl">+</span>
                                    </div>
                                    <div class="faq-answer hidden mt-2 text-gray-600" data-aos="slide-down" data-aos-delay="200">
                                        {{ $faq->jawaban }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <script>
                function toggleAnswer(element) {
                    const answer = element.nextElementSibling;
                    const icon = element.querySelector('.toggle-icon');
                    answer.classList.toggle('hidden');
                    icon.textContent = answer.classList.contains('hidden') ? '+' : '-';
                }

                document.addEventListener('DOMContentLoaded', function () {
                    AOS.init({
                        duration: 1000,  // Durasi animasi
                        easing: 'ease-in-out',  // Efek easing
                        once: true,  // Animasi hanya terjadi sekali
                    });
                });
            </script>


        <section id="promo" class="relative w-screen text-center py-12 -mx-40 lg:scroll-mx-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold text-center text-red-600 mb-6" data-aos="fade-up">
                    PROMO TERBARU
                </h1>
                <p class="text-lg mb-6 text-red-600" data-aos="fade-up" data-aos-delay="100">Dapatkan promo spesial hanya di Mie Ndower! Jangan sampai
                    ketinggalan!</p>

                <!-- Kontainer Promo -->
                <div class="relative overflow-hidden">
                    <!-- Tombol Navigasi Kiri -->
                    <button id="prev-btn"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-200 text-gray-700 w-10 h-10 flex items-center justify-center rounded-full shadow-lg hover:bg-red-500 hover:text-white transition-all duration-300 group z-10"
                        data-aos="fade-right" data-aos-delay="200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 group-hover:stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <!-- Slider Promo -->
                    <div id="promo-slider" class="flex transition-transform duration-500 ease-in-out">
                        @foreach ($promo as $item)
                            <div class="promo-item flex-none w-full md:w-1/2 px-4 text-center bg-white p-4 rounded-lg"
                                data-aos="zoom-in" data-aos-delay="300">
                                <h3 class="text-xl font-bold text-black">{{ $item->nama_promo }}</h3>
                                <img src="{{ asset('storage/' . $item->gambar_promo) }}"
                                    alt="{{ $item->nama_promo }}"
                                    class="w-full h-[200px] object-cover rounded-lg shadow-lg mb-4">
                                <p class="text-gray-700">{{ Str::limit($item->deskripsi_promo, 100) }}</p>
                                <a href="{{ route('promo.show', $item->id) }}"
                                    class="mt-4 inline-block bg-red-700 text-white py-2 px-4 rounded-lg text-sm hover:bg-red-800 transition duration-300">Selengkapnya</a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Tombol Navigasi Kanan -->
                    <button id="next-btn"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-200 text-gray-700 w-10 h-10 flex items-center justify-center rounded-full shadow-lg hover:bg-red-500 hover:text-white transition-all duration-300 group z-10"
                        data-aos="fade-left" data-aos-delay="400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 group-hover:stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>



            <section id="menu" class="relative w-screen text-center bg-red-700 py-12 -mx-40 lg:scroll-mx-32">
                <h1 class="text-4xl font-extrabold text-center text-white mb-6 animate-fade-down mt-12" data-aos="fade-down">
                    MENU NDOWER
                </h1>

                <p class="text-lg mb-6 text-white" data-aos="fade-up" data-aos-delay="100">Nikmati menu spesial hanya di Mie Ndower! Jangan sampai
                    ketinggalan!</p>

                <!-- Section Menu -->
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-12">
                        <!-- Mie Menu -->
                        <a href="/menus#miendower" class="w-full" data-aos="zoom-in" data-aos-delay="200">
                            <div class="bg-white rounded-lg overflow-hidden shadow-md transform transition duration-300 hover:scale-105 hover:shadow-xl">
                                <img src="{{ asset('storage/' . $menus->where('jenis_menu', 'mie')->first()->gambar_menu) }}" alt="Mie Special"
                                    class="w-full h-[300px] object-cover rounded-t-lg transition-all duration-500">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-red-600 mt-4">
                                        {{ $menus->where('jenis_menu', 'mie')->first()->nama_menu }}
                                    </h3>
                                    <p class="text-gray-600 mt-2">{{ $menus->where('jenis_menu', 'mie')->first()->deskripsi_menu }}</p>
                                </div>
                            </div>
                        </a>

                        <!-- Pangsit Menu -->
                        <a href="/menus#pangsitndower" class="w-full" data-aos="zoom-in" data-aos-delay="300">
                            <div class="bg-white rounded-lg overflow-hidden shadow-md transform transition duration-300 hover:scale-105 hover:shadow-xl">
                                <img src="{{ asset('storage/' . $menus->where('jenis_menu', 'pangsit')->first()->gambar_menu) }}" alt="Pangsit"
                                    class="w-full h-[300px] object-cover rounded-t-lg transition-all duration-500">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-red-600 mt-4">
                                        {{ $menus->where('jenis_menu', 'pangsit')->first()->nama_menu }}
                                    </h3>
                                    <p class="text-gray-600 mt-2">{{ $menus->where('jenis_menu', 'pangsit')->first()->deskripsi_menu }}</p>
                                </div>
                            </div>
                        </a>

                        <!-- Bakso Menu -->
                        <a href="/menus#baksondower" class="w-full" data-aos="zoom-in" data-aos-delay="400">
                            <div class="bg-white rounded-lg overflow-hidden shadow-md transform transition duration-300 hover:scale-105 hover:shadow-xl">
                                <img src="{{ asset('storage/' . $menus->where('jenis_menu', 'bakso')->first()->gambar_menu) }}" alt="Bakso"
                                    class="w-full h-[300px] object-cover rounded-t-lg transition-all duration-500">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-red-600 mt-4">
                                        {{ $menus->where('jenis_menu', 'bakso')->first()->nama_menu }}
                                    </h3>
                                    <p class="text-gray-600 mt-2">{{ $menus->where('jenis_menu', 'bakso')->first()->deskripsi_menu }}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="mt-8 text-center" data-aos="fade-up" data-aos-delay="500">
                        <a href="{{ route('menu.index') }}"
                           class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 inline-flex items-center space-x-2">
                            <i class="fas fa-utensils"></i> <!-- Ikon menu -->
                            <span>Lihat Semua Menu</span>
                        </a>
                    </div>
                </div>
            </section>





<!-- Artikel Section -->
<div id="artikel" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-red-500" data-aos="fade-up">ARTIKEL TERBARU</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($artikel as $item)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden relative" data-aos="fade-up" data-aos-delay="200">
                    <!-- Kategori di atas -->
                    <div class="absolute top-4 left-4 bg-red-500 text-white px-4 py-1 text-sm rounded">
                        {{ $item->kategori }}
                    </div>

                    <!-- Gambar Artikel -->
                    <img src="{{ Storage::url($item->gambar) }}" class="w-full h-56 object-cover"
                        alt="{{ $item->judul }}" data-aos="zoom-in" data-aos-delay="300" />

                    <div class="p-4">
                        <h2 class="text-lg font-bold" data-aos="fade-up" data-aos-delay="400">{{ $item->judul }}</h2>

                        <p class="text-gray-600 mt-2" data-aos="fade-up" data-aos-delay="500">{!! \Illuminate\Support\Str::limit($item->artikel, 75) !!}</p>

                        <!-- Tombol "Selengkapnya" -->
                        <div class="mt-4 flex justify-between items-center" data-aos="fade-up" data-aos-delay="600">
                            <a href="{{ route('artikel.show', $item->id) }}"
                               class="text-blue-500 hover:underline">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('artikel.index') }}"
               class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600 inline-flex items-center space-x-2"
               data-aos="fade-up" data-aos-delay="700">
                <i class="fas fa-newspaper"></i> <!-- Ikon menu -->
                <span>Lihat Semua Artikel</span>
            </a>
        </div>

    </div>
</div>



        </div>
    </div>



    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('.toggle-icon');
            answer.classList.toggle('hidden');
            icon.textContent = answer.classList.contains('hidden') ? '+' : '×';
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('promo-slider');
            const items = document.querySelectorAll('.promo-item');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            let currentIndex = 0; // Index awal promo

            const updateSliderPosition = () => {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            };

            // Tombol Kiri
            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
                updateSliderPosition();
            });

            // Tombol Kanan
            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
                updateSliderPosition();
            });
        });
    </script>



    <script>
        AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Jenis easing animasi
            once: true, // Animasi hanya dijalankan sekali
        });
    </script>

    <script>
        const promoTitle = document.getElementById('promo-title');

        window.addEventListener('scroll', () => {
            const rect = promoTitle.getBoundingClientRect();
            if (rect.top >= 0 && rect.top <= window.innerHeight) {
                promoTitle.classList.remove('opacity-0');
                promoTitle.classList.add('opacity-100', 'translate-y-0');
            }
        });
    </script>





    <div class="flex justify-center ">
        <iframe src="{{ $locations->first()->link_lokasi }}" width="1500" height="400" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</x-app-layout>
