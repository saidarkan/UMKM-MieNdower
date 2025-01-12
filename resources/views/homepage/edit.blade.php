<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Homepage</h1>
        <form action="{{ route('homepage.update', $homepage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" value="{{ $homepage->judul }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
                @error('judul')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Deskripsi Judul -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Judul</label>
                <textarea name="deskripsi_judul" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $homepage->deskripsi_judul }}</textarea>
                @error('deskripsi_judul')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Subjudul -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Subjudul</label>
                <input type="text" name="subjudul" value="{{ $homepage->subjudul }}" class="mt-1 block w-full border-gray-300 rounded-md" />
                @error('subjudul')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Deskripsi Subjudul -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Subjudul</label>
                <textarea name="deskripsi_subjudul" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ $homepage->deskripsi_subjudul }}</textarea>
                @error('deskripsi_subjudul')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($homepage->gambar)
                    <div class="mt-2">
                        <img src="{{ Storage::url($homepage->gambar) }}" class="h-48 w-auto rounded-md shadow-md" alt="Gambar Homepage" />
                    </div>
                @endif
                @error('gambar')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Update -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">
                Update
            </button>
        </form>
    </div>
</x-app-layout>
