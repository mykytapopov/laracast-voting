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
<body class="font-sans text-gray-900 text-sm h-full bg-gradient-to-bl from-gray-800 to-gray-950 bg-no-repeat">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#" class="dark:text-gray-400 dark:hover:text-white focus:outline"><img src="{{ asset('img/negative-logo.svg') }}" alt="logo"></a>
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
    <div class="max-w-xs mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolorem earum eius facilis illo magni molestiae neque odit, perferendis quae, quidem quod quos ratione totam veritatis vitae voluptatum. Accusantium architecto assumenda cupiditate debitis dicta dolorem esse ex, expedita illum ipsa itaque natus numquam odit perferendis saepe sit ut veniam. Natus nulla officia quasi rerum similique? A alias architecto atque autem cumque debitis doloribus eveniet ex fuga hic iure labore, molestias necessitatibus perspiciatis placeat quaerat repudiandae saepe sequi similique tempore temporibus ullam velit vitae. Asperiores atque autem debitis dolore doloremque harum inventore, nostrum pariatur, possimus provident quidem quos sapiente sint voluptatem.</div>
    <div class="max-w-3xl w-full">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray-500">
                <li><a href="#" class="border-b-2 pb-3.5 border-blue-500">All ideas (87)</a></li>
                <li><a href="#" class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">Considering (6)</a></li>
                <li><a href="#" class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">In Progress (1)</a></li>
            </ul>

            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray-500">
                <li><a href="#" class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">Implemented (10)</a></li>
                <li><a href="#" class="border-b-2 pb-3.5 border-gray-500 text-gray-500 transition duration-150 ease-in hover:border-blue-500">Closed (55)</a></li>
            </ul>
        </nav>
        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>
</main>
</body>
</html>
