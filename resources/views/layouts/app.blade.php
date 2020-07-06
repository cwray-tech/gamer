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
    <livewire:styles>
</head>
<body class="bg-gray-900 text-white">
<div id="app">
    @include('.partials._navbar')

    <main class="py-8">
        @yield('content')
    </main>

    @include('.partials._footer')
</div>

<script src="/js/app.js"></script>
<livewire:scripts>
</body>
</html>
