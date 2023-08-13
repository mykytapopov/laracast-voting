<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 text-sm h-full bg-gradient-to-bl from-gray-800 to-gray-950 bg-no-repeat bg-fixed">
<header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
    <a href="/" class="dark:text-gray-400 dark:hover:text-white focus:outline"><img
                src="{{ asset('img/negative-logo.svg') }}" alt="logo"></a>
    <div class="flex items-center mt-2 md:mt-0">
        @if (Route::has('login'))
            <div class="p-6 text-right z-10">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                           class="dark:text-gray-400 dark:hover:text-white focus:outline"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="https://gravatar.com/avatar/00000000000000000000000000000000?d=mp"
                 alt="avatar"
                 class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>
<main class="container mx-auto flex max-w-7xl text-gray-300 flex-col md:flex-row">
    <div class="max-w-xs md:mr-5 mx-auto md:mx-0">
        <div class="md:sticky md:top-8 border-none rounded-xl mt-1 md:mt-16 bg-gradient-to-b from-gray-600 to-gray-950 p-0.5">
            <div class="border-none rounded-xl bg-gray-800 w-full h-full">
                <div class="px-6 py-2 pt-6 text-center">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">
                        @auth
                            Let us know what would you like, and we'll take a look over!
                        @else
                            Please login to create an idea.
                        @endauth
                    </p>
                </div>
                @auth
                    <livewire:create-idea />
                @else
                    <div class="text-center px-4 py-6 space-y-4">
                        <a
                                href="{{ route('login') }}"
                                class="inline-block bg-blue-500 w-1/2 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150">
                            Login
                        </a>
                        <a
                                href="{{ route('register') }}"
                                class="inline-block bg-gray-500 w-1/2 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150">
                            Sign Up
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
    <div class="md:max-w-3xl px-2 md:px-0 w-full">
        <nav class=" hidden md:flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray-500">
                <li><a href="#" class="border-b-2 pb-3.5 border-blue-500">All ideas (87)</a></li>
                <li><a href="#"
                       class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">Considering
                        (6)</a></li>
                <li><a href="#"
                       class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">In
                        Progress (1)</a></li>
            </ul>

            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray-500">
                <li><a href="#"
                       class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">Implemented
                        (10)</a></li>
                <li><a href="#"
                       class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">Closed
                        (55)</a></li>
            </ul>
        </nav>
        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>
@livewireScripts
</body>
</html>
