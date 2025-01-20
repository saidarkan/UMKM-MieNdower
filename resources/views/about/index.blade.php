<x-app-layout>

    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
            <!-- Tombol Tambah Data -->
            <a href="{{ route('about.create') }}"
            class="inline-block bg-green-500 text-white px-6 py-3 rounded-full mb-4 hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
            <i class="fas fa-plus-circle"></i> Tambah Menu
            </a>

            @if (session('error'))
    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif


            <!-- Tabel Daftar About -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Judul</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Deskripsi</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Gambar</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                            <tr class="border-t">
                                <!-- Judul -->
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $about->judul }}</td>
                                <!-- Deskripsi -->
                                <td class="px-4 py-2 text-sm text-gray-800">{{ \Illuminate\Support\Str::limit($about->deskripsi, 50) }}</td>
                                <!-- Gambar -->
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    @if ($about->gambar)
                                        <img src="{{ asset('storage/' . $about->gambar) }}" alt="{{ $about->judul }}" class="rounded-md w-20 h-20">
                                    @else
                                        <span class="text-gray-500">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <!-- Aksi -->
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <a href="{{ route('about.edit', $about->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    |
                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
