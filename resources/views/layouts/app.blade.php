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
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <section class="relative w-full flex min-h-screen" x-data="{ sidebarOpen: window.innerWidth >= 768 }"
        @resize.window="sidebarOpen = window.innerWidth >= 768">
        <div x-show="sidebarOpen" class="absolute md:relative flex flex-col justify-between w-full md:w-3/12 h-screen">
            <div class="flex items-center justify-center gap-2 p-8 border-b border-gray-800 bg-gray-900 text-white md:rounded-tr-3xl">
                <i class="fi fi-rr-display-code flex"></i>
                <h2 class="font-bold">Laravel Dashboard</h2>
            </div>
            <ul class="bg-gray-900 h-screen overflow-y-auto space-y-1 p-5">
                <li>
                    <a href="#"
                        class="w-full flex items-center gap-2 px-5 py-3 text-gray-300 rounded-2xl transition-all ease-in-out hover:bg-gray-800 hover:rounded-2xl">
                        <i class="fi fi-rr-dashboard-panel flex text-lg"></i>
                        <span class="inline-block">Dashboard</span>
                    </a>
                </li>
                <li x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <button type="button" @click="isOpen = !isOpen"
                        class="w-full flex justify-between items-center gap-2 px-5 py-3 text-gray-300 rounded-2xl transition-all ease-in-out hover:bg-gray-800 hover:rounded-2xl">
                        <span class="flex items-center gap-2">
                            <i class="fi fi-rr-boxes flex text-lg"></i>
                            <span class="inline-block">Produk</span>
                        </span>
                        <i class="fi fi-rr-angle-small-down flex"></i>
                    </button>
                    <ul x-show="isOpen" class="bg-gray-800 text-sm m-3 px-4 py-4 rounded-2xl">
                        <li>
                            <a href="#"
                                class="w-full inline-flex items-center gap-1 hover:bg-gray-700 hover:text-gray-200 text-gray-400 transition-all ease-in-out px-3 py-2 rounded-lg">
                                <i class="fi fi-rr-dot-circle flex"></i>
                                <span>Daftar produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="w-full inline-flex items-center gap-1 hover:bg-gray-700 hover:text-gray-200 text-gray-400 transition-all ease-in-out px-3 py-2 rounded-lg">
                                <i class="fi fi-rr-dot-circle flex"></i>
                                <span>Kategori produk</span>
                            </a>
                        </li>
                    </ul>
                </li><li x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <button type="button" @click="isOpen = !isOpen"
                        class="w-full flex justify-between items-center gap-2 px-5 py-3 text-gray-300 rounded-2xl transition-all ease-in-out hover:bg-gray-800 hover:rounded-2xl">
                        <span class="flex items-center gap-2">
                            <i class="fi fi-rr-users flex text-lg"></i>
                            <span class="inline-block">Pengguna</span>
                        </span>
                        <i class="fi fi-rr-angle-small-down flex"></i>
                    </button>
                    <ul x-show="isOpen" class="bg-gray-800 text-sm m-3 px-4 py-4 rounded-2xl">
                        <li>
                            <a href="#"
                                class="w-full inline-flex items-center gap-1 hover:bg-gray-700 hover:text-gray-200 text-gray-400 transition-all ease-in-out px-3 py-2 rounded-lg">
                                <i class="fi fi-rr-dot-circle flex"></i>
                                <span>Daftar pengguna</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="w-full inline-flex items-center gap-1 hover:bg-gray-700 hover:text-gray-200 text-gray-400 transition-all ease-in-out px-3 py-2 rounded-lg">
                                <i class="fi fi-rr-dot-circle flex"></i>
                                <span>Kategori pengguna</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"
                        class="w-full flex items-center gap-2 px-5 py-3 text-gray-300 rounded-2xl transition-all ease-in-out hover:bg-gray-800 hover:rounded-2xl">
                        <i class="fi fi-rr-settings flex text-lg"></i>
                        <span class="inline-block">Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="w-full flex items-center gap-2 px-5 py-3 text-gray-300 rounded-2xl transition-all ease-in-out hover:bg-gray-800 hover:rounded-2xl">
                        <i class="fi fi-rr-info flex text-lg"></i>
                        <span class="inline-block">Tentang</span>
                    </a>
                </li>
            </ul>
            <div class="flex md:hidden justify-center p-5">
                <button @click="sidebarOpen = !sidebarOpen"
                    class="block md:hidden text-lg bg-gray-100 hover:bg-gray-200 transition ease-in-out px-5 py-3 rounded-xl">
                    <i class="fi fi-rr-angle-circle-left flex"></i>
                </button>
            </div>
            <p class="text-xs text-gray-500 text-center bg-gray-900 p-3">Copyright © 2024 Politeknik LP3I Kampus Tasikmalaya</p>
        </div>
        <div class="w-full md:w-9/12 bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </section>

</body>

</html>
