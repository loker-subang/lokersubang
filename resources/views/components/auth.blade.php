<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="/img/lokersubang.png" sizes="32x32" type="image/png">
    <title>
        @isset($title)
        {{ $title }} - LOKER SUBANG
        @else
        LOKER SUBANG
        @endisset
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    {{ $slot }}

</body>

</html>