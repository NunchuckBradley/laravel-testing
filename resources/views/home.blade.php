<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue</title>
    <!-- Scripts -->
    @vite('resources/js/app.js')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <main class="py-3">
            <h3>Enable JavaScript to use this site</h3>
        </main>
    </div>    
</body>
</html>