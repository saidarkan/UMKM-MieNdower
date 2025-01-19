<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Homepage</h2>

            <!-- Form untuk Menambahkan Homepage -->
            <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6">
                    <!-- Pembuka -->
                    <div>
                        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                        <input type="text" name="comment" id="comment" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Judul 1 -->
                    <div>
                        <label for="reply" class="block text-sm font-medium text-gray-700">Reply</label>
                        <input type="text" name="reply" id="reply" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Judul 2 -->
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
                        <input type="number" name="rating" id="rating" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Dropdown Menu (Relasi dengan Menu) -->
                    <div>
                        <label for="menu" class="block text-sm font-medium text-gray-700">Menu</label>
                        <select name="menu_id" id="menu" class="mt-1 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <option value="">Pilih Menu</option>
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
