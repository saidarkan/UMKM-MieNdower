<x-app-layout>

    <!-- Bagian About -->
    <div class="relative isolate  bg-gray-900 py-24 sm:py-32 " id="about">
        <img src="https://png.pngtree.com/background/20230516/original/pngtree-lot-of-chinese-food-on-a-table-filled-with-chopsticks-picture-image_2612447.jpg"
            alt="Chinese food background" class="absolute inset-0 -z-10 w-full h-full object-cover object-center-fixed">

        <!-- Konten utama dengan header "About Us" -->
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">About Us</h2>
                <p class="mt-8 text-lg font-medium text-gray-300 sm:text-xl">
                    UMKM ini berdiri sejak September 2023, terinspirasi oleh kecintaan pemiliknya terhadap mie. Dengan
                    passion terhadap kuliner mie, usaha ini hadir untuk menawarkan mie dengan cita rasa yang lezat dan
                    unik.
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk menambahkan efek transisi scroll -->
    <script>
        document.getElementById('about-link').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah navigasi default
            document.getElementById('about').scrollIntoView({
                behavior: 'smooth' // Mengatur agar scroll dilakukan dengan efek halus
            });
        });
    </script>

    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-red-600 mb-6 animate-fade-down">
                Selamat Datang di Mie Ndower
            </h1>
            <p class="text-lg text-gray-700 text-center mb-8 animate-fade-up">
                UMKM Mie Ndower berdiri sejak September 2023, terinspirasi dari kecintaan kami terhadap mie.
                Kami berkomitmen menghadirkan mie dengan rasa autentik, porsi memuaskan, dan harga yang ramah di
                kantong.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="/menus#miendower" class="w-full">
                    <div
                        class="w-full bg-white shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/19/FotoJet-2023-02-19T203316884-1175934296.jpg"
                            alt="Mie Special" class="w-full h-[300px] object-cover rounded-t-lg animate-slide-in">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-red-600 mt-4 animate-fade-left">Mie Ndower</h3>
                            <p class="text-gray-600 mt-2 animate-fade-right">Mie Ndower dengan kombinasi bumbu rahasia
                                yang membuat Anda ketagihan.</p>
                        </div>
                    </div>
                </a>

                <a href="/menus#pangsitndower" class="w-full">
                    <div
                        class="w-full bg-white shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="https://image.popmama.com/content-images/post/20240120/Pangsit%20Chilli%20Oil%20%284%29-QM6PzI0jd5UTOez7YDMv3zfnCxMHf7RC.jpg?width=1200&height=800"
                            alt="Mie Pedas" class="w-full h-[300px] object-cover rounded-t-lg animate-slide-in">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-red-600 mt-4 animate-fade-left">Pangsit Ndower</h3>
                            <p class="text-gray-600 mt-2 animate-fade-right">Tantang lidah Anda dengan mie pedas kami
                                yang legendaris!</p>
                        </div>
                    </div>
                </a>

                <a href="/menus#baksondower" class="w-full">
                    <div
                        class="w-full bg-white shadow rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-lg">
                        <img src="https://i.pinimg.com/550x/25/c9/b9/25c9b97f66bca124826b837a792e8341.jpg"
                            alt="Mie Keju" class="w-full h-[300px] object-cover rounded-t-lg animate-slide-in">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-red-600 mt-4 animate-fade-left">Bakso Creamy</h3>
                            <p class="text-gray-600 mt-2 animate-fade-right">Nikmati kombinasi mie dengan keju creamy
                                yang meleleh di mulut.</p>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div>
    <div class="flex justify-center mt-10">
        <iframe
            src="{{ $locations->first()->link_lokasi }}"
            width="1500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>




</x-app-layout>
