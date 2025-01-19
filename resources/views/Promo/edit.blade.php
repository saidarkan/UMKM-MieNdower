<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Promo</h1>
        <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Promo -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Promo</label>
                <input type="text" name="nama_promo" value="{{ $promo->nama_promo }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('nama_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Jenis Promo</label>
                <select name="jenis_promo" class="mt-1 block w-full border-gray-300 rounded-md" required>
                    <option value="berlangsung" {{ $promo->jenis_promo === 'berlangsung' ? 'selected' : '' }}>Berlangsung</option>
                    <option value="berakhir" {{ $promo->jenis_promo === 'berakhir' ? 'selected' : '' }}>Berakhir</option>
                </select>
                @error('jenis_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>


            <!-- Deskripsi Promo -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Promo</label>
                <textarea name="deskripsi_promo" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $promo->deskripsi_promo }}</textarea>
                @error('deskripsi_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gambar Promo -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Promo</label>
                <input type="file" name="gambar_promo" class="mt-1 block w-full" accept="image/*" />
                @if ($promo->gambar_promo)
                    <div class="mt-2">
                        <img src="{{ Storage::url($promo->gambar_promo) }}" class="h-48 w-auto rounded-md shadow-md" alt="Gambar Promo" />
                    </div>
                @endif
                @error('gambar_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Promo -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Promo</label>
                <input type="date" name="tanggal_promo" value="{{ $promo->tanggal_promo }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('tanggal_promo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Berakhir Promo -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Berakhir Promo</label>
                <input type="date" name="tanggal_berakhir" value="{{ $promo->tanggal_berakhir }}" class="mt-1 block w-full border-gray-300 rounded-md" />
                @error('tanggal_berakhir')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Update -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">
                Update
            </button>
        </form>
    </div>

    <!-- CKEditor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
