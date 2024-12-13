<x-app-layout>
    <div class="pt-16 bg-white">
        <div class="mx-auto max-w-7xl px-6 py-10 sm:px-8 lg:px-10">
            <!-- Navigation Tabs -->
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <nav class="flex justify-center space-x-4 border-b-2 pb-4">
                    <!-- Mie -->
                    <a href="{{ route('menus.index', ['category' => 'mie']) }}"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Mie Ndower
                    </a>
                    <!-- Pangsit -->
                    <a href="{{ route('menus.index', ['category' => 'pangsit']) }}"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Pangsit Ndower
                    </a>
                    <!-- Bakso -->
                    <a href="{{ route('menus.index', ['category' => 'bakso']) }}"
                        class="text-gray-500 hover:text-red-600 px-3 py-2 text-lg font-medium border-b-2 border-transparent hover:border-red-600 transition">
                        Bakso Ndower
                    </a>
                </nav>
            </div>

            <!-- Tombol Create (Minimalist) -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('menus.create') }}"
                    class="text-red-500 hover:text-red-700 text-sm font-semibold transition">
                    + Tambah Menu
                </a>
            </div>

            <!-- Grid Produk -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($menus as $menu)
                    <div class="group rounded-lg shadow-md overflow-hidden cursor-pointer"
                        onclick="openModal({{ $menu->id }})">
                        <img src="{{ asset('storage/' . $menu->gambar_menu) }}" alt="{{ $menu->nama_menu }}"
                            class="w-full h-[250px] rounded-lg bg-gray-200 object-cover group-hover:opacity-75">
                        <div class="text-center mt-4">
                            <h3 class="text-sm text-gray-700">{{ $menu->nama_menu }}</h3>
                            <p class="text-lg font-medium text-gray-900">
                                Rp{{ number_format($menu->harga_menu, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id="productModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg max-w-lg w-full relative">
                    <!-- Close Icon -->
                    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">
                        &times;
                    </button>

                    <img id="modalProductImage" class="w-full h-[250px] object-cover rounded-md" src="" alt="Gambar Menu">
                    <h2 class="text-xl font-semibold mt-4" id="modalProductName">Nama Menu</h2>
                    <p id="modalProductDesc" class="mt-2 text-gray-700">Deskripsi menu</p>
                    <p id="modalProductType" class="mt-2 text-gray-600">Jenis Menu: </p>
                    <p id="modalProductPrice" class="mt-2 text-lg font-medium text-gray-900">Rp0</p>

                    <div class="mt-4 flex justify-between">
                        <!-- Tombol Edit -->
                        <a href="#" id="editButton" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            Edit
                        </a>

                        <!-- Form for Hapus/Delete -->
                        <form action="#" method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function openModal(menuId) {
            const modal = document.getElementById('productModal');

            // Menggunakan fetch untuk mengambil data produk
            fetch(`/menus/${menuId}`)
                .then(response => response.json())
                .then(data => {
                    // Menampilkan data produk di dalam modal
                    document.getElementById('modalProductName').innerText = data.nama_menu;
                    document.getElementById('modalProductDesc').innerText = data.deskripsi_menu;
                    document.getElementById('modalProductPrice').innerText =
                        `Rp${new Intl.NumberFormat().format(data.harga_menu)}`;
                    document.getElementById('modalProductType').innerText = `Jenis Menu: ${data.jenis_menu}`;
                    document.getElementById('modalProductImage').src =
                        `/storage/${data.gambar_menu}`;

                    // Set tombol Edit untuk mengarah ke halaman edit menu
                    const editButton = document.getElementById('editButton');
                    editButton.href = `/menus/${menuId}/edit`;

                    // Set form action untuk mengarah ke route destroy
                    const deleteForm = document.getElementById('deleteForm');
                    deleteForm.action = `/menus/${menuId}`;

                    // Menampilkan modal
                    modal.classList.remove('hidden');
                })
                .catch(error => console.error('Error fetching product data:', error));
        }

        function closeModal() {
            document.getElementById('productModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
