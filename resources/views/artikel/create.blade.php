<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Artikel</h1>
        @if ($errors->any())
        <div class="mb-4 p-4 bg-red-500 border border-red-700 text-white rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal</label>
                <input type="date" name="tanggal" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Kategori</label>
                <select name="kategori" class="mt-1 block w-full border-gray-300 rounded-md">
                    <option value="berita">Berita</option>
                    <option value="pengumuman">Pengumuman</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Status</label>
                <div class="flex items-center">
                    <label class="mr-4">
                        <input type="radio" name="status" value="draft" class="mr-2" /> Draft
                    </label>
                    <label>
                        <input type="radio" name="status" value="post" class="mr-2" /> Post
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Artikel</label>
                <textarea name="artikel" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="gambar/*" />
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
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
