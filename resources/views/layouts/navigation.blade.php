<nav class="bg-white fixed top-0 left-0 w-full z-10 shadow" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
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
            </div>

            <!-- Login & Register Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:bg-gray-100 hover:text-red-500 px-4 py-2 rounded-md text-sm font-medium">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:bg-gray-100 hover:text-red-500 px-4 py-2 rounded-md text-sm font-medium">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-red-500 text-white hover:bg-red-600 px-4 py-2 rounded-md text-sm font-medium">
                                Register
                            </a>
                        @endif
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
                    </svg>
                </button>
            </div>
        </div>
    </div>

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
