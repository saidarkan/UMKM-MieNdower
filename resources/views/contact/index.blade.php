<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <!-- Tombol Create -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('contacts.create') }}" class="text-red-500 hover:text-red-700 text-sm font-semibold transition">
                    + Tambah Kontak
                </a>
            </div>

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
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <!-- Tambahkan aksi hapus jika diperlukan -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
