<x-app-layout>
 

    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-1 sm:px-8 lg:px-10">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-bold text-center text-red-600 mb-4">{{ $promo->nama_promo }}</h2>

                <div class="flex justify-center mb-6">
                    <img src="{{ asset('storage/' . $promo->gambar_promo) }}" alt="{{ $promo->nama_promo }}"
                        class="rounded-lg w-full max-w-4xl">
                </div>

                <p class="text-lg text-gray-700 mb-4">{{ $promo->deskripsi_promo }}</p>

                <div class="flex justify-between text-gray-600">
                    <div class="flex items-center">
                        <span class="font-semibold">Tanggal Promo: </span>
                        <span>{{ \Carbon\Carbon::parse($promo->tanggal_promo)->format('d M Y') }}</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-semibold">Tanggal Berakhir: </span>
                        <span>{{ \Carbon\Carbon::parse($promo->tanggal_berakhir)->format('d M Y') }}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
