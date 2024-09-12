<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Serwis Pc</title>

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-900 dark:text-white flex flex-col min-h-screen">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                    Icon when menu is closed.

                    Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                    Icon when menu is open.

                    Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="/">
                        <img class="h-8 w-8" src="{{ Vite::asset('resources/images/logo.png') }}">
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <x-nav-link href="/repairListing" :active="request()->is('repairListing')">Zgłoś Naprawę</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">O Nas</x-nav-link>
                    @auth
                        @if (auth()->user()->role == 'pracownik')
                            <x-nav-link href="/employee" :active="request()->is('employee')">Panel Pracownika</x-nav-link>
                        @elseif (auth()->user()->role == 'admin')
                            <x-nav-link href="/admin" :active="request()->is('admin')">Panel Admina</x-nav-link>
                        @endif
                    @endauth
                </div>
            </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    @guest
                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                    <!--<x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>-->
                    @endguest
                    @auth
                    <x-nav-link href="/edit-user/{{auth()->user()->id}}" :active="request()->is('edit_user')">Edit Account</x-nav-link>
                    <form method="post" action="/logout">
                    @csrf
                        <x-form-button>Log Out</x-form-button>
                    </form>  
                    @endauth
            
                </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow flex">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        <x-footer></x-footer>
    </body>
</html>
