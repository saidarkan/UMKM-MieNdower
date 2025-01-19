<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-xl font-semibold mb-4">Daftar FAQ</h2>

            <!-- Tombol Tambah FAQ -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('faq.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">+ Tambah FAQ</a>
            </div>

            <!-- Tabel FAQ -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Pertanyaan</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Jawaban</th>
                            <th class="px-4 py-2 text-sm font-medium text-gray-700">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($faqs as $faq)
                            <tr class="border-t">
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $faq->pertanyaan }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ \Illuminate\Support\Str::limit($faq->jawaban, 50) }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    <a href="{{ route('faq.edit', $faq->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    |
                                    <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Yakin ingin menghapus FAQ ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-2 text-center text-sm text-gray-500">Belum ada FAQ tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

