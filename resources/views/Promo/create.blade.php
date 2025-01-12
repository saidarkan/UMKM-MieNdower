<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Tambah Promo</h1>
        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Nama Promo -->
            <div>
                <label for="nama_promo" class="block text-sm font-medium text-gray-700">Nama Promo</label>
                <input type="text" name="nama_promo" id="nama_promo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" />
                @error('nama_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Deskripsi Promo -->
            <div>
                <label for="deskripsi_promo" class="block text-sm font-medium text-gray-700">Deskripsi Promo</label>
                <textarea name="deskripsi_promo" id="deskripsi_promo" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                @error('deskripsi_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gambar Promo -->
            <div>
                <label for="gambar_promo" class="block text-sm font-medium text-gray-700">Gambar Promo</label>
                <input type="file" name="gambar_promo" id="gambar_promo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm" accept="image/*" />
                @error('gambar_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Promo -->
            <div>
                <label for="tanggal_promo" class="block text-sm font-medium text-gray-700">Tanggal Promo</label>
                <input type="date" name="tanggal_promo" id="tanggal_promo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" />
                @error('tanggal_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Berakhir Promo -->
            <div>
                <label for="tanggal_berakhir" class="block text-sm font-medium text-gray-700">Tanggal Berakhir Promo</label>
                <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" />
                @error('tanggal_berakhir')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Simpan -->
            <div class="text-right">
                <button type="submit" class="inline-block bg-blue-600 text-white font-semibold px-6 py-2 rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi_promo'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
