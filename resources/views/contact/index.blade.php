<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
            <!-- Tombol Create -->
            <a href="{{ route('contact.create') }}"
            class="inline-block bg-green-500 text-white px-6 py-3 rounded-full mb-4 hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
            <i class="fas fa-plus-circle"></i> Tambah Menu
            </a>

            <!-- Tabel Kontak -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Nama Media Sosial</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Link Media Sosial</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Icon Media Sosial</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $contact->nama_medsos }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <a href="{{ $contact->link_medsos }}" class="text-blue-500 hover:text-blue-700" target="_blank">
                                        {{ $contact->link_medsos }}
                                    </a>
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800" title="{{ $contact->icon_medsos }}">
                                    {{ Str::limit($contact->icon_medsos, 200) }}
                                </td>


                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <!-- Tombol aksi edit atau hapus (sesuaikan dengan rute atau logika yang diinginkan) -->
                                    <a href="{{ route('contact.edit', $contact->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-full py-2 px-4 transition duration-300 ease-in-out transform hover:scale-105">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <!-- Tambahkan aksi hapus jika diperlukan -->
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
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
