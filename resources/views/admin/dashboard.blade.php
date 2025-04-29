<!DOCTYPE html>
<html lang="{{ str_replace('_', replace:'-', subject:app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>dashboard admin</Title>
        @vite(entrypoints:['resources/css.app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-navbar type="admin" />
        <x-profile-card />
    </body>
</html>
