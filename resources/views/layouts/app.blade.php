<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js for Sidebar Toggle -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100" x-data="{ sidebarOpen: false }">

        <!-- Menampilkan navbar biasa jika belum login, atau sidenav jika sudah login -->
        @if(auth()->check())
            <!-- Panggil sidebar dari file terpisah -->
            @include('layouts.sidenav')
        @else
            @include('layouts.navigation') <!-- Jika belum login, tampilkan navbar biasa -->
        @endif

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-red-500 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Konten Utama -->
        <main>
            <div :class="{'ml-64': sidebarOpen, 'ml-0': !sidebarOpen}" class="transition-all duration-300">
                @if (Auth::check())
                    <!-- Jika pengguna sudah login, tampilkan sidebar dan konten utama -->
                    <div class="flex">
                        <!-- Konten utama yang mengikuti sidebar -->
                        <div class="ml-64 pt-15 w-full ">
                            {{ $slot }}
                        </div>
                    </div>
                @else
                    <!-- Jika pengguna belum login, tampilkan konten tanpa sidebar -->
                    <div class="min-h-screen bg-gray-100 w-full">
                        {{ $slot }}
                    </div>


                @endif
            </div>
        </main>

        <!-- Menampilkan footer hanya jika belum login -->
        @if(!auth()->check())
            @include('layouts.footer', ['contacts' => $contacts]) <!-- Tampilkan footer hanya jika belum login -->
        @endif
    </div>
</body>
</html>
