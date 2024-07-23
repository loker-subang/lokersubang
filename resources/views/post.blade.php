<x-layout title="{{ $post->title }}" desc="{{ $post->description }}" keyword="{{ $post->title }}"
    image="{{ $post->image }}">

    @if ($post->category_id == 1)
        <div class="alert mb-2" role="alert">
            <marquee>
                Tahapan seleksi
                <strong> TIDAK DIPUNGUT BIAYA APAPUN !</strong>
            </marquee>
        </div>
    @endif
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-6 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="/img/logo.png" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name }}</a>
                                {{-- <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator &
                                    CEO
                                    Flowbite</p> --}}
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08"
                                        title="February 8th, 2022">{{ $post->created_at->format('d M Y') }}</time></p>
                            </div>
                        </div>
                    </address>


                    <h1
                        class="mb-2 mt-10 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-3 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-2 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="{{ route('home') }}"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a href="/kategori/{{ $post->category->slug }}"
                                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">{{ $post->category->name }}</a>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span
                                        class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $post->title }}</span>
                                </div>
                            </li>
                        </ol>
                    </nav>

                </header>
                <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}" loading="lazy">
                {!! $post->body !!}
            </article>
            <hr class="bg-blue-500">
        </div>
        <div class="sharethis-inline-share-buttons mt-16"></div>
    </main>


    @if ($post->category_id == 1)
        <x-informasi />

        {{-- Schema Jobpost --}}
        <script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "@type": "JobPosting",
    "title": "{{ $post->title }}",
    "description": "{{ $post->body }}",
    "url": "https://lokersubang.com/{{ $post->slug }}.html",
    "datePosted": "{{ $post->created_at->tz('UTC')->toAtomString()}}",
    "validThrough": "2025-03-18T00:00",
    "employmentType": "FULL_TIME",
    "hiringOrganization": {
        "@type": "Organization",
        "name": "{{ $post->company }}",
        "sameAs": "https://lokersubang.com/{{ $post->slug }}.html",
        "logo": "{{ asset('storage/'.$post->image) }}"
    },
    "jobLocation": {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ $post->city->name }}",
            "addressLocality": "{{ $post->city->name }}",
            "addressRegion": "Jawa Barat",
            "postalCode": "41211",
            "addressCountry": "Indonesia"
        }
    },
    "jobLocationType": null,
    "applicantLocationRequirements": [{
        "@type": "Country",
        "name": ""
    }],
    "baseSalary": {
        "@type": "MonetaryAmount",
        "currency": "IDR",
        "value": {
            "@type": "QuantitativeValue",
            "value": "{{$post->city->salary}}",
            "unitText": "MONTH"
        }
    }

}
</script>
    @else
        {{-- Schema Breadcrumb --}}
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://lokersubang.com"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "{{ $post->category->name }}",
                "item": "https://lokersubang.com/kategori/{{ $post->category->slug }}"
            }, {
                "@type": "ListItem",
                "position": 3,
                "name": "{{ $post->title }}",
                "item": "https://lokersubang.com/{{ $post->slug }}.html"
            }]
        }
    </script>

        {{-- Schema Rating --}}
        <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Book",
            "name": "Artikel lokersubang.com",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "ratingCount": "1831",
                "bestRating": "5",
                "worstRating": "1"
            }
        }
    </script>

        {{-- Schema Article --}}
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "headline": "{{ $post->title }}",
            "image": ["{{ $post->image }}"],
            "datePublished": "{{ $post->created_at->tz('UTC')->toAtomString()}}",
            "dateModified": "{{ $post->created_at->tz('UTC')->toAtomString() }}",
            "author": [{
                "@type": "Person",
                "name": "Dadan Nurmaulana",
                "url": "https://web.facebook.com/dadannurmaulana"
            }]
        }
    </script>
    @endif

    {{-- <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Informasi Lainnya</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">

                @foreach ($related as $item)
                    <article class="max-w-xs">
                        <a href="#">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                                class="mb-5 rounded-lg" alt="Image 1">
                        </a>
                        <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="#">{{ $item->title }}</a>
                        </h2>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">{{ Str::limit($item->description, 50) }}</p>
                        <a href="{{ $item->category->slug }}"
                            class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                            Selengkapnya
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </aside> --}}





</x-layout>
