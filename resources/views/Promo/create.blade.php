<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Promo</h1>
        <form action="{{ route('promos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Promo</label>
                <input type="text" name="nama_promo" class="mt-1 block w-full border-gray-300 rounded-md" />
                @error('nama_promo')
                    <div class="text-red-500 text-sm mt-1">Nama promo wajib diisi dan tidak boleh lebih dari 255 karakter.</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Promo</label>
                <textarea name="deskripsi_promo" id="deskripsi_promo" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
                @error('deskripsi_promo')
                    <div class="text-red-500 text-sm mt-1">Deskripsi promo wajib diisi.</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Promo</label>
                <input type="file" name="gambar_promo" class="mt-1 block w-full" accept="image/*" />
                @error('gambar_promo')
                    <div class="text-red-500 text-sm mt-1">Gambar harus berupa file gambar dengan format png, jpg, atau jpeg, dan tidak boleh lebih dari 2 MB.</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Promo</label>
                <input type="date" name="tanggal_promo" class="mt-1 block w-full border-gray-300 rounded-md" />
                @error('tanggal_promo')
                    <div class="text-red-500 text-sm mt-1">Tanggal promo wajib diisi dengan format yang benar.</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi_promo'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
