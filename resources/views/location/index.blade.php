<!-- resources/views/locations/index.blade.php -->

<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <!-- Tombol Create -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('locations.create') }}" class="text-red-500 hover:text-red-700 text-sm font-semibold transition">
                    + Tambah Lokasi
                </a>
            </div>

            <!-- Tabel Daftar Lokasi -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Nama Lokasi</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Alamat Lokasi</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Link Lokasi</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                            <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $location->nama_lokasi }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $location->alamat_lokasi }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <a href="{{ $location->link_lokasi }}" class="text-blue-500 hover:text-blue-700" target="_blank">
                                        {{ $location->link_lokasi }}
                                    </a>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <a href="{{ route('locations.edit', $location->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    |
                                    <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
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
