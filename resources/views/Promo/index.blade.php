<x-app-layout>
    <div class="relative isolate bg-gray-900 py-24 sm:py-32" id="about">
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

        <div class="absolute inset-0 -z-10 w-full min-h-[40vh]">
            <img src="https://i.pinimg.com/originals/9e/9f/9c/9e9f9c9f88e4c737590d37c344963cdb.jpg"
                alt="Mie Ndower background" class="w-full h-full object-cover object-center filter blur-sm">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-20 -z-10"></div>

        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-80 h-96 bg-no-repeat bg-cover bg-center"
            style="background-image: url('https://img.pikbest.com/png-images/20240621/transparent-background-thai-noodles-with-chicken_10629734.png!sw800');">
        </div>

        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 w-80 h-96 bg-no-repeat bg-cover bg-center"
            style="background-image: url('https://img.pikbest.com/png-images/20240621/transparent-background-thai-noodles-with-chicken_10629734.png!sw800');">
        </div>

        <div class="text-center relative z-10">
            <h1 class="text-6xl font-extrabold tracking-widest sm:text-8xl" style="font-family: 'Bangers', cursive;">
                <span class="text-white">PROMO</span> <span class="text-yellow-500">NDOWER</span>
            </h1>
            <p class="text-lg text-white mt-4">Nikmati promo dari Mie Ndower, Pangsit Ndower, dan banyak lagi!</p>
        </div>
    </div>

    <div class="pt-16 bg-white">
        <div class="max-w-5xl mx-auto py-10 px-4 ">
            <!-- Promo Berlangsung -->
            <h1 class="text-center text-xl py-4 font-extrabold text-red-600 tracking-widest sm:text-5xl"
                style="font-family: 'Bangers', cursive;">
                <span class="text-red-500">Promo</span> <span class="text-yellow-500">Berlangsung</span>
            </h1>
            <div class="grid grid-cols-2 gap-6">
                @forelse ($promo->where('jenis_promo', 'berlangsung') as $item)
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center w-full rounded-lg shadow-lg overflow-hidden bg-white">
                            <img src="{{ asset('storage/' . $item->gambar_promo) }}" alt="{{ $item->nama_promo }}"
                                class="w-full h-[200px] object-cover bg-gray-200"
                                onerror="this.onerror=null;this.src='{{ asset('images/placeholder.png') }}';">
                            <div class="flex-1 p-6 text-center">
                                <h3 class="text-2xl font-bold text-red-500 mb-2">{{ $item->nama_promo }}</h3>
                                <h5 class="text-sm font-bold text-gray-800 mb-2">{{ Str::limit($item->deskripsi_promo,100 )}}</h5>
                                <a href="{{ route('promo.show', $item->id) }}"
                                    class="block mt-4 text-red-600 font-semibold underline hover:text-red-800">
                                    Klik untuk info selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">Tidak ada promo yang berlangsung.</p>
                @endforelse
            </div>

            <!-- Garis pemisah -->
            <hr class="my-8 border-t-2 border-gray-300">

            <!-- Promo Berakhir -->
            <h1 class="text-center text-xl py-4 font-extrabold text-red-600 tracking-widest sm:text-5xl"
                style="font-family: 'Bangers', cursive;">
                <span class="text-red-500">Promo</span> <span class="text-yellow-500">Berakhir</span>
            </h1>
            <div class="grid grid-cols-2 gap-6">
                @forelse ($promo->where('jenis_promo', 'berakhir') as $item)
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center w-full rounded-lg shadow-lg overflow-hidden bg-white">
                            <img src="{{ asset('storage/' . $item->gambar_promo) }}" alt="{{ $item->nama_promo }}"
                                class="w-full h-[200px] object-cover bg-gray-200"
                                onerror="this.onerror=null;this.src='{{ asset('images/placeholder.png') }}';">
                            <div class="flex-1 p-6 text-center">
                                <h3 class="text-2xl font-bold text-red-500 mb-2">{{ $item->nama_promo }}</h3>
                                <h5 class="text-sm font-bold text-gray-800 mb-2">{{ Str::limit($item->deskripsi_promo,100 )}}</h5>
                                <a href="{{ route('promo.show', $item->id) }}"
                                    class="block mt-4 text-red-600 font-semibold underline hover:text-red-800">
                                    Klik untuk info selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">Tidak ada promo yang berakhir.</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $promo->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
