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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 text-sm h-full bg-gradient-to-bl from-gray-800 to-gray-950 bg-no-repeat bg-fixed">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#" class="dark:text-gray-400 dark:hover:text-white focus:outline"><img
            src="{{ asset('img/negative-logo.svg') }}" alt="logo"></a>
    <div class="flex items-center">
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
<main class="container mx-auto flex max-w-5xl text-gray-300">
    <div class="max-w-xs mr-5">
        <div class="border-none rounded-xl mt-16 bg-gradient-to-b from-gray-600 to-gray-950 p-0.5">
            <div class="border-none rounded-xl bg-gray-800 w-full h-full">
                <div class="px-6 py-2 pt-6 text-center">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">Let us know what would you like, and we'll take a look over!</p>
                </div>
                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text"
                               class="w-full rounded-xl bg-gray-700 px-4 py-2 border-none placeholder-gray-500 text-sm"
                               placeholder="Your Idea">
                    </div>
                    <div>
                        <select name="category_add" id="category_add"
                                class="w-full rounded-xl px-4 py-2 border-none bg-gray-700 text-sm">
                            <option value="Category one">Category one</option>
                            <option value="Category two">Category two</option>
                            <option value="Category three">Category three</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea_add" id="idea_add" cols="30" rows="4"
                                  class="w-full rounded-xl bg-gray-700 text-sm border-none px-4 py-2 placeholder-gray-500"
                                  placeholder="Describe your idea"></textarea>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                                class="flex w-1/2 items-center justify-center bg-gray-500 text-xs uppercase rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-4 h-4 transform -rotate-45">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                            </svg>
                            <span class="ml-1">Attach</span>
                        </button>
                        <button
                            class="bg-blue-500 w-1/2 text-xs uppercase rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150">
                            <span>Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="max-w-3xl w-full">
        <nav class="flex items-center justify-between text-xs">
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
</body>
</html>
