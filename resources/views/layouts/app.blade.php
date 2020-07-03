<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gamer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="/images/games.svg" alt="gamer logo" class="w-20 flex-none">
                </a>
                <ul class="flex ml-16 space-x-5">
                    <li><a href="/" class="hover:text-gray-400">Home</a> </li>
                    <li><a href="/" class="hover:text-gray-400">Games</a> </li>
                    <li><a href="/" class="hover:text-gray-400">About</a> </li>
                    <li><a href="/" class="hover:text-gray-400">Contact</a> </li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full px-3 py-1" placeholder="Search...">
                </div>
                <div class="ml-6">
                    <a href="#"><img src="/images/user.svg" class="rounded-full w-8" alt="profile"></a>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')

</body>
</html>
