<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Promo</h1>
        <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Promo</label>
                <input type="text" name="nama_promo" value="{{ $promo->nama_promo }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Promo</label>
                <textarea name="deskripsi_promo" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $promo->deskripsi_promo }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Promo</label>
                <input type="file" name="gambar_promo" class="mt-1 block w-full" accept="image/*" />
                @if ($promo->gambar_promo)
                    <img src="{{ Storage::url($promo->gambar_promo) }}" class="h-48 mt-2" alt="Gambar Promo" />
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Promo</label>
                <input type="date" name="tanggal_promo" value="{{ $promo->tanggal_promo }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
        
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
