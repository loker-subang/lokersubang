<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }}
        @else
            Loker Subang
        @endisset
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="/js/alpine.js"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <main class="mt-16">
            @isset($header)
                <header class="bg-white shadow ">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900 flex items-center gap-3"><svg
                                class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z"
                                    clip-rule="evenodd" />
                            </svg>

                            {{ $header }}</h1>
                    </div>
                </header>
            @endisset
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
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
