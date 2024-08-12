<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Loker Subang">
    <meta name="google-site-verification" content="2ga1mhc6hM_haMw4jHAKzdi7oghPndrlG2S9WJlE9Hw" />
    <title>
        @isset($title)
        {{ $title }}
        @else
        Loker Subang
        @endisset
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="/img/lokersubang.png" sizes="32x32" type="image/png">
    <script defer src="/js/alpine.js"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

    {{-- TAG --}}
    <meta name="description" content="{{ $desc ?? 'Loker Subang adalah website Informasi lowongan kerja Subang dan Sekitarnya. Info loker subang 2024 terbaru dan terupdate setiap hari Daerah Subang, Purwakarta, Karawang, Majalengka, Indramayu, Cikarang, Bekasi dan Bandung' }}">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title ?? 'LOKER SUBANG' }}" />
    <meta property="og:description" content="{{ $desc ?? 'Informasi lowongan kerja Subang dan Sekitarnya. Info loker subang 2024 terbaru dan terupdate setiap hari Daerah Subang, Purwakarta, Karawang, Majalengka, Indramayu, Cikarang, Bekasi dan Bandung' }}" />
    <meta name="keywords" content="{{ $keyword ?? 'loker subang 2024, lokersubang, loker subang, loker terbaru, lowongan kerja subang, loker hari ini, info loker subang, loker pabrik subang, loker subang com, loker subang id' }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    {{-- <meta property="og:url" content="{{ URL::full() }}" /> --}}
    <meta property="og:site_name" content="LOKER SUBANG" />
    <meta property="og:image" content="
    @isset($image)
        {{ asset('storage/' . $image) }}
        @else
         {{ asset('/img/logo.png') }}
        @endisset
     " />
    <meta property="og:image:width" content="1080" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Ditulis oleh" />
    <meta name="twitter:data1" content="Loker Subang" />
    <meta name="twitter:label2" content="Estimasi waktu membaca" />
    <meta name="twitter:data2" content="2 menit" />
    <link rel="canonical" href="{{ url()->current() }}">
    {{-- <link rel="canonical" href="{{ URL::full() }}"> --}}
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <main class="mt-16">
            @isset($header)
            <header class="bg-white shadow ">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 flex items-center gap-3"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z" clip-rule="evenodd" />
                        </svg>
                        {{ $header }}
                    </h1>
                </div>
            </header>
            @endisset
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 min-h-screen">
                {{ $slot }}
            </div>
        </main>
        <x-footer />
    </div>

    {{-- Laravel Filemanager --}}
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    {{-- CKEDITOR --}}
    <script>
        var customOptions = Object.assign({}, options, {
            versionCheck: false
        });
        CKEDITOR.replace('editor1', customOptions);
    </script>

    {{-- Image Preview --}}
    <script>
        document.getElementById("image").addEventListener("change", function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgElement = document.getElementById("preview");
                imgElement.src = e.target.result;
                imgElement.style.display = "inline";
            };
            reader.readAsDataURL(file);
        });
    </script>

    {{-- Sweetalert --}}
    @include('sweetalert::alert')
</body>


</html>