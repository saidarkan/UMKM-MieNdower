<nav class="fixed top-0 z-50 w-full bg-red-600 border-b border-gray-200 dark:bg-red-800 dark:border-gray-700 transition-all duration-300">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg sm:hidden hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-200 dark:text-gray-400 dark:hover:bg-red-700 dark:focus:ring-red-600" onclick="toggleSidebar()">
                    <span class="sr-only">Toggle Sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <div class="flex-shrink-0">
                    <img class="h-12 w-12" src="https://png.pngtree.com/png-vector/20220911/ourmid/pngtree-hot-noodle-logo-png-image_6161663.png" alt="Logo">
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3" x-data="{ open: false }">
                    <button @click="open = !open" type="button" class="flex text-sm bg-red-700 rounded-full focus:ring-4 focus:ring-red-300 dark:focus:ring-red-600">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-show="open" x-transition x-cloak class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 absolute top-16 right-3">
                        <div class="px-4 py-3">
                            <p class="text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">{{ Auth::user()->email }}</p>
                        </div>
                        <ul class="py-1">
                            <li>
                                <a href="/dashboard" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Earnings
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-red-700 hover:bg-red-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Sign out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform transform bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar" x-data="{ open: false }">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium mt-3">
            <li>
                <x-side-link :active="request()->routeIs('homepage.index')" href="{{ route('homepage.index') }}">
                    Homepage
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('about.index')" href="{{ route('about.index') }}">
                    About
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('location.index')" href="{{ route('location.index') }}">
                    Location
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('contact.index')" href="{{ route('contact.index') }}">
                    Contact
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('menu.index')" href="{{ route('menu.index') }}">
                    Menu
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('promo.index')" href="{{ route('promo.index') }}">
                    Promo
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('faq.index')" href="{{ route('faq.index') }}">
                    FAQ
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('artikel.index')" href="{{ route('artikel.index') }}">
                    Artikel
                </x-side-link>
            </li>
            <li>
                <x-side-link :active="request()->routeIs('review.index')" href="{{ route('review.index') }}">
                    Reviews
                </x-side-link>
            </li>
        </ul>
    </div>
</aside>






