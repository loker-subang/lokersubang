<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }} / Loker Subang
        @else
            Loker Subang
        @endisset
    </title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="/js/alpine.js"></script>
</head>

<body class="h-full">

    <div class="min-h-full">
        <x-navbar />



        <main class="mt-16">
            @isset($header)
                <header class="bg-white shadow ">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $header }}</h1>
                    </div>
                </header>
            @endisset
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <x-footer />
    </div>

</body>

</html>
