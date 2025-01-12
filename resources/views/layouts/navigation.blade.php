<<<<<<< HEAD
<nav class="bg-transparent fixed top-0 left-0 w-full z-10 transition-all duration-300 ease-in-out" id="navbar" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img class="h-12 w-12" src="https://png.pngtree.com/png-vector/20220911/ourmid/pngtree-hot-noodle-logo-png-image_6161663.png" alt="Logo">
            </div>

            <!-- Menu Links -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-6">
                    <x-nav-link href="/" :active="request()->is('/')">HOME</x-nav-link>
                    <x-nav-link href="/menus" :active="request()->is('menus')">MENU</x-nav-link>
                    <x-nav-link href="/promo" :active="request()->is('promo')">PROMO</x-nav-link>
                    <x-nav-link href="/#about" :active="request()->is('home')">ABOUT</x-nav-link>
                    <x-nav-link href="/#contact" :active="request()->is('home')">LOCATION</x-nav-link>
                    <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
                </div>
            </div>

            <!-- Login & Register Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:bg-gray-100 hover:text-red-500 px-4 py-2 rounded-md text-sm font-medium">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded-md text-sm font-medium">
                            Log in
                        </a>
                        
                    @endauth
                @endif
            </div>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none" @click="isOpen = !isOpen">
                    <svg class="h-6 w-6" x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg class="h-6 w-6" x-show="isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
=======
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>



                <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @if(auth()->user()->role === 'super_admin')
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('pesansaran.index')" :active="request()->routeIs('pesansaran.index')">
                            {{ __('Pesan Saran') }}
                        </x-nav-link>
                        <x-nav-link :href="route('question_answer.index')" :active="request()->routeIs('question_answer')">
                            {{ __('Question & Answer') }}
                        </x-nav-link>
                        <x-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel')">
                            {{ __('Artikel') }}
                        </x-nav-link>
                    @elseif(auth()->user()->role === 'admin')
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('pesansaran.index')" :active="request()->routeIs('pesansaran')">
                            {{ __('Pesan Saran') }}
                        </x-nav-link>
                        <x-nav-link :href="route('berita.index')" :active="request()->routeIs('berita')">
                            {{ __('Berita') }}
                        </x-nav-link>
                        <x-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel')">
                            {{ __('Artikel') }}
                        </x-nav-link>
                    @elseif(auth()->user()->role === 'guest')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
<<<<<<< HEAD
                    <x-nav-link :href="route('pesansaran.index')" :active="request()->routeIs('pesansaran')">
                        {{ __('Pesan Saran') }}
                    </x-nav-link>
                    <x-nav-link :href="route('berita.index')" :active="request()->routeIs('berita')">
                        {{ __('Berita') }}
                    </x-nav-link>
                    <x-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel')">
                        {{ __('Artikel') }}
                    </x-nav-link>
                    @endif
=======
                    <x-nav-link :href="route('artikel.index')" :active="request()->routeIs('artikel')">
                        {{ __('Artikel') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about.index')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
>>>>>>> origin/Rakha
                </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
>>>>>>> origin/Ridho
                    </svg>
                </button>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Mobile Menu -->
    <div x-show="isOpen" class="md:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <x-nav-link href="/" :active="request()->is('/')">HOME</x-nav-link>
            <x-nav-link href="/menus" :active="request()->is('menus')">MENU</x-nav-link>
            <x-nav-link href="/promo" :active="request()->is('promo')">PROMO</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">ABOUT</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">CONTACT</x-nav-link>
        </div>
    </div>

</nav>

<script>
    // Script untuk navbar transparan saat di-scroll
    window.onscroll = function () {
        var navbar = document.getElementById("navbar");
        var links = document.querySelectorAll("#navbar .nav-link");

        // Menambahkan pengecekan jika halaman sudah di-scroll
        if (window.scrollY > 0) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-white", "shadow-md");  // Menambahkan shadow agar navbar terlihat jelas
            links.forEach(function(link) {
                link.classList.remove("text-white");  // Mengubah warna menjadi normal setelah scroll
                link.classList.add("text-gray-700");  // Ganti warna menjadi abu-abu setelah scroll
            });
        } else {
            navbar.classList.remove("bg-white", "shadow-md");
            navbar.classList.add("bg-transparent");
            links.forEach(function(link) {
                link.classList.add("text-white");  // Menambahkan warna putih pada navbar transparan
                link.classList.remove("text-gray-700");
            });
        }
    };

    // Pastikan navbar tetap transparan dan teks putih saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");
        var links = document.querySelectorAll("#navbar .nav-link");

        // Cek apakah halaman home aktif
        if (window.location.pathname === '/') {
            navbar.classList.add("bg-transparent");
            links.forEach(function(link) {
                link.classList.add("text-white");  // Teks putih saat di halaman home
                link.classList.remove("text-gray-700");
            });
        }
    });
</script>

=======
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
>>>>>>> origin/Ridho
