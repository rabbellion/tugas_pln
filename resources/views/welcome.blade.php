<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar type="admin"/>

    <div class="container">
        <h1>Selamat Datang di Website</h1>
    </div>

    <x-button variant="primary">halo gais</x-button>
</body>
</html>
