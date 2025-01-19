<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
            <!-- Tombol Create -->
            <a href="{{ route('homepage.create') }}"
            class="inline-block bg-green-500 text-white px-6 py-3 rounded-full mb-4 hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
            <i class="fas fa-plus-circle"></i> Tambah Menu
            </a>

            <!-- Tabel Daftar Homepage -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Pembuka</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Judul 1</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Judul 2</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Deskripsi Judul</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Subjudul</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Deskripsi Subjudul</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Gambar</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homepages as $homepage)
                            <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $homepage->pembuka }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $homepage->judul1 }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $homepage->judul2 }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $homepage->deskripsi_judul }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $homepage->subjudul }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $homepage->deskripsi_subjudul }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    @if($homepage->gambar)
                                        <img src="{{ asset('storage/'.$homepage->gambar) }}" alt="Gambar" class="w-16 h-16 object-cover">
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <a href="{{ route('homepage.edit', $homepage->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    |
                                    <form action="{{ route('homepage.destroy', $homepage->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
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
