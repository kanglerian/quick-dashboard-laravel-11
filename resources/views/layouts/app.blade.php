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
        <div x-show="sidebarOpen" class="absolute md:relative flex flex-col justify-between w-full md:w-2/12 h-screen bg-gray-900">
            <div class="flex items-center justify-center gap-2 p-5 bg-gray-900 text-white">
                <i class="fi fi-rr-display-code flex"></i>
                <h2 class="font-bold">Laravel Dashboard</h2>
            </div>
            <ul class="bg-gray-800 h-screen overflow-y-auto p-5">
                <li class="border border-gray-600 ">
                    <a href="#" class="flex items-center gap-2 px-3 py-1.5 text-gray-300 rounded-2xl">
                        <i class="fi fi-rr-dashboard-panel flex text-lg"></i>
                        <span class="inline-block">Dashboard</span>
                    </a>
                </li>
                <li x-data="{ isOpen: false }" @click.away="isOpen = false">
                    <button type="button" @click="isOpen = !isOpen">show</button>
                    <ul x-show="isOpen">
                        <li>anu</li>
                        <li>anu</li>
                        <li>anu</li>
                        <li>anu</li>
                    </ul>
                </li>
            </ul>
            <div class="flex md:hidden justify-center p-5">
                <button @click="sidebarOpen = !sidebarOpen" class="block md:hidden text-lg bg-gray-100 hover:bg-gray-200 transition ease-in-out px-5 py-3 rounded-xl">
                    <i class="fi fi-rr-angle-circle-left flex"></i>
                </button>
            </div>
        </div>
        <div class="w-full md:w-10/12 bg-gray-100">
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
