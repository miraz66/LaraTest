<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @session('messages')
        <div class="text-red-500 text-center" x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            {{ session('messages') }}
        </div>
    @endsession

    {{ $slot }}
</body>

</html>
