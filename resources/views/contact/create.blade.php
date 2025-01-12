<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-2xl font-semibold text-gray-900">Tambah Kontak</h2>

            <form action="{{ route('contacts.store') }}" method="POST" class="mt-6">
                @csrf

                <div class="mb-4">
                    <label for="nama_medsos" class="block text-sm font-medium text-gray-700">Nama Media Sosial</label>
                    <input type="text" name="nama_medsos" id="nama_medsos" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('nama_medsos') }}" required>
                </div>

                <div class="mb-4">
                    <label for="icon_medsos" class="block text-sm font-medium text-gray-700">Path/Link Icon Media Sosial</label>
                    <input type="text" name="icon_medsos" id="icon_medsos" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('icon_medsos') }}" placeholder="Contoh: /images/icon.png atau https://example.com/icon.png" required>
                </div>

                <div class="mb-4">
                    <label for="link_medsos" class="block text-sm font-medium text-gray-700">Link Media Sosial</label>
                    <input type="url" name="link_medsos" id="link_medsos" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm" value="{{ old('link_medsos') }}" required>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan Kontak</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
