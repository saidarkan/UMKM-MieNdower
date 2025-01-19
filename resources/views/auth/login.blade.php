<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Wrapper untuk Centering -->
    <div class="flex items-center justify-center min-h-screen bg-white">
        <!-- Container -->
        <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-xl overflow-hidden w-11/12 max-w-4xl">
            <!-- Left Side (Image/Brand Section) -->
            <div class="bg-gradient-to-r from-red-500 to-red-700 md:w-1/2 flex items-center justify-center p-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-white mb-4">Selamat Datang Kembali!</h1>
                    <p class="text-white text-sm leading-relaxed">
                        Masuk untuk melanjutkan ke platform kami dan nikmati pengalaman terbaik.
                    </p>
                    <div class="mt-6">
                        <img class="h-20 w-20 mx-auto" src="https://png.pngtree.com/png-vector/20220911/ourmid/pngtree-hot-noodle-logo-png-image_6161663.png" alt="Logo">
                    </div>
                </div>
            </div>

            <!-- Right Side (Form Section) -->
            <div class="md:w-1/2 p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Masuk</h2>

                <form method="POST" action="/login">
                    @csrf

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition">
                        Masuk
                    </button>
                </form>

                <!-- Footer -->
                <p class="text-sm text-center text-gray-600 mt-6">
                    Belum punya akun? <a href="/register" class="text-red-600 hover:text-red-700 font-semibold">Daftar Sekarang</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
