<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @session('messages')
        <div class="text-red-500 text-center">
            {{ session('messages') }}
        </div>
    @endsession

    {{ $slot }}
</body>

</html>
