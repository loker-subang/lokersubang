<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Loker Subang">
    <meta name="google-site-verification" content="2wRbchEjwMCPnEIi1wvMYevyByrlZFQzmcMY5KmSs8g">


    <title>{{ $title ?? 'Loker Subang - Lowongan Kerja Subang & Sekitarnya Terupdate 2026' }}</title>

    <meta name="description"
        content="{{ $desc ?? 'Loker Subang 2026 - Informasi lowongan kerja terbaru di Subang, Purwakarta, Karawang, Majalengka, Indramayu, Cikarang, Bekasi dan Bandung. Update harian loker pabrik, swasta, dan perusahaan terpercaya.' }}">


    <meta itemprop="name"
        content="{{ $title ?? 'Loker Subang - Lowongan Kerja Subang & Sekitarnya Terupdate 2026' }}">

    <meta itemprop="description"
        content="{{ $desc ?? 'Temukan info lowongan kerja terupdate di Subang dan sekitarnya. Loker pabrik, swasta, perusahaan terbaik dengan gaji kompetitif 2026.' }}">

    <meta itemprop="image"
        content="{{ isset($image) ? asset('storage/'.$image) : asset('img/logo.webp') }}">

    {{-- ================= OPEN GRAPH ================= --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title"
        content="{{ $title ?? 'Loker Subang - Lowongan Kerja Subang & Sekitarnya Terupdate 2026' }}">
    <meta property="og:description"
        content="{{ $desc ?? 'Temukan info lowongan kerja terupdate di Subang dan sekitarnya. Loker pabrik dan swasta terpercaya 2026.' }}">
    <meta property="og:image"
        content="{{ isset($image) ? asset('storage/'.$image) : asset('img/logo.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $title ?? 'Loker Subang 2026' }}">
    <meta property="og:site_name" content="Loker Subang">
    <meta property="og:locale" content="id_ID">

    {{-- ================= TWITTER ================= --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title"
        content="{{ $title ?? 'Loker Subang - Lowongan Kerja Subang & Sekitarnya Terupdate 2026' }}">
    <meta name="twitter:description"
        content="{{ $desc ?? 'Info loker terupdate Subang dan sekitarnya. Update harian lowongan kerja terpercaya 2026.' }}">
    <meta name="twitter:image"
        content="{{ isset($image) ? asset('storage/'.$image) : asset('img/logo.webp') }}">
    <meta name="twitter:site" content="@lokersubang">
    <meta name="twitter:creator" content="@lokersubang">


    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="/img/lokersubang.webp" sizes="32x32" type="image/webp">
    <link rel="apple-touch-icon" href="/img/lokersubang.webp">

    <!-- Web App Manifest -->
    <link rel="manifest" href="/site.webmanifest">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="{{ asset('resources/css/app.css') }}" as="style">
    <link rel="preload" href="https://rsms.me/inter/inter.css" as="style">
    <link rel="preload" href="{{ asset('js/alpine.js') }}" as="script">

    <!-- CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" crossorigin="anonymous">

    <!-- Structured Data for Better Rich Snippets -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Loker Subang",
            "url": "{{ URL::to('/') }}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{{ URL::to('/search?q={search_term}') }}",
                "query-input": "required name=search_term"
            },
            "description": "Informasi lowongan kerja terbaru di Subang dan sekitarnya",
            "publisher": {
                "@type": "Organization",
                "name": "Loker Subang",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{ asset('/img/logo.webp') }}",
                    "width": "600",
                    "height": "60"
                }
            }
        }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Beranda",
                    "item": "{{ URL::to('/') }}"
                }
                @isset($breadcrumbs), {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "{{ $breadcrumbs['name'] }}",
                    "item": "{{ URL::to($breadcrumbs['url']) }}"
                }
                @endisset
            ]
        }
    </script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PWH4W0VJ95"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-PWH4W0VJ95');
    </script>

    <!-- Dark Mode Script -->
    <script>
        // Cek preferensi dark mode user
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.documentElement.style.colorScheme = 'dark';
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.style.colorScheme = 'light';
        }
    </script>

    <!-- Defer Non-Critical Scripts -->
    <script defer src="/js/alpine.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3504060649077932" crossorigin="anonymous"></script>
    <script defer src="https://platform-api.sharethis.com/js/sharethis.js#property=65de7486b17a2e001a12db11&product=inline-share-buttons&source=platform"></script>
</head>

<body class="h-full bg-gray-100 dark:bg-gray-900">
    <div class="min-h-full">
        <x-navbar />
        <main class="mt-16">
            @isset($header)
            <header class="bg-white shadow dark:bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center gap-3">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 0 0-.822 1.57L6.632 12l-4.454 6.43A1 1 0 0 0 3 20h13.153a1 1 0 0 0 .822-.43l4.847-7a1 1 0 0 0 0-1.14l-4.847-7a1 1 0 0 0-.822-.43H3Z" clip-rule="evenodd" />
                        </svg>
                        {{ $header }}
                    </h1>
                </div>
            </header>
            @endisset
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 min-h-screen bg-white dark:bg-gray-800">
                {{ $slot }}
            </div>
        </main>
        <x-footer />
    </div>

    <!-- Tombol toggle dark mode (opsional) -->
    <script>
        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        }
    </script>
</body>

</html>