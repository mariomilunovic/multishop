<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
    @livewireStyles
</head>
<body>

    <div class="bg-blue-700 text-white"> Tailwind test OK</div>

    <h1 x-data="{ message: 'Alpine test OK' }" x-text="message"></h1>

    <livewire:livewire-test />
    @livewireScripts
</body>
</html>
