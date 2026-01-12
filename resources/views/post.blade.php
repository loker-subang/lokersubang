<x-layout title="{{ $post->title }}" desc="{{ $post->description }}" keyword="{{ $post->title }}"
    image="{{ $post->image }}">

    {{-- @if ($post->category_id == 1)
        <div class="alert mb-2 flex" role="alert">
            <div class="mx-auto">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline mb-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z"
                        clip-rule="evenodd" />
                </svg>

                Tahapan seleksi
                <strong> TIDAK DIPUNGUT BIAYA !</strong>
            </div>
        </div>
    @endif --}}
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-6 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="/img/lokersubang.webp" alt="Loker Subang">
                            <div>
                                <a href="https://www.instagram.com/ddn_nur/" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name }}</a>
                                <p class="text-base text-slate-900 dark:text-gray-400 mt-2">Donasi via <a
                                        href="https://saweria.co/lokersubang"
                                        class="p-1 bg-blue-700 rounded text-white hover:bg-blue-400 font-light">Saweria</a>
                                </p>
                                <p class="text-base text-gray-500 dark:text-gray-400 mt-2"><time pubdate
                                        datetime="2022-02-08"
                                        title="February 8th, 2022">{{ $post->created_at->format('d M Y') }}</time></p>
                            </div>
                        </div>
                    </address>


                    <h1
                        class="mb-2 mt-10 text-3xl font-bold tracking-tight leading-tight text-gray-900 lg:mb-3 lg:text-4xl dark:text-white">
                        {{ $post->title }}
                    </h1>
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
                    <div class="m-3">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3504060649077932"
                            crossorigin="anonymous"></script>
                        <!-- lokersubang -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3504060649077932"
                            data-ad-slot="8923893625" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </header>

                <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}" loading="lazy">
                {!! $post->body !!}

                <div class="m-3">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3504060649077932"
                        crossorigin="anonymous"></script>
                    <!-- lokersubang -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3504060649077932"
                        data-ad-slot="8923893625" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </article>
            <hr class="bg-blue-500">
        </div>
        <div class="sharethis-inline-share-buttons mt-16"></div>
    </main>

    <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">New Posts</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($related as $data)
                    <article class="max-w-xs">
                        <!-- <a href="{{ $data->slug }}.html">
                  <img src="/storage/{{ $data->image }}" class="mb-5 rounded-lg" alt="Image 1">
              </a> -->
                        <a href="{{ $data->slug }}.html">
                            <img src="/storage/{{ $data->image }}" class="mb-5 rounded-lg w-full h-48 object-cover"
                                width="320" height="192" alt="Image 1">
                        </a>
                        <h2 class="mb-2 text-xl font-semibold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ $data->slug }}.html">{{ $data->title }}</a>
                        </h2>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">
                            {{ Str::words($data->description, 10, '...') }}</p>
                        <a href="{{ $data->slug }}.html"
                            class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                            Selengkapnya..
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </aside>

    @if ($post->category_id == 1)
        <x-informasi />

        {{-- Schema Jobpost --}}
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "JobPosting",
  "title": "{{ $post->title }}",
  "description": "{{ strip_tags($post->description) }}",
  "url": "{{ url($post->slug . '.html') }}",
  "datePosted": "{{ $post->created_at->toAtomString() }}",
  "validThrough": "{{ now()->addMonths(3)->toAtomString() }}",
  "employmentType": "FULL_TIME",
  "hiringOrganization": {
    "@type": "Organization",
    "name": "{{ $post->company }}",
    "logo": "{{ asset('storage/'.$post->image) }}"
  },
  "jobLocation": {
    "@type": "Place",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "{{ $post->city->name }}",
      "addressRegion": "Jawa Barat",
      "addressCountry": "ID"
    }
  },
  "baseSalary": {
    "@type": "MonetaryAmount",
    "currency": "IDR",
    "value": {
      "@type": "QuantitativeValue",
      "value": {{ (int) $post->city->salary }},
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
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "{{ $post->category->name }}",
      "item": "{{ url('kategori/'.$post->category->slug) }}"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $post->title }}",
      "item": "{{ url($post->slug.'.html') }}"
    }
  ]
}
</script>

        {{-- Schema Article --}}
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "{{ $post->title }}",
  "description": "{{ strip_tags($post->description) }}",
  "image": "{{ asset('storage/'.$post->image) }}",
  "datePublished": "{{ $post->created_at->toAtomString() }}",
  "dateModified": "{{ $post->updated_at->toAtomString() }}",
  "author": {
    "@type": "Person",
    "name": "{{ $post->user->name }}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Loker Subang",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('img/logo.webp') }}"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ url($post->slug.'.html') }}"
  }
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
    <a href="{{ $item->category->slug }}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
        Selengkapnya
    </a>
    </article>
    @endforeach
    </div>
    </div>
    </aside> --}}





</x-layout>
