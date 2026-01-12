<x-layout title="{{ $title ?? config('app.name') . ' - Lowongan Kerja Subang dan Sekitarnya Terbaru 2026' }}"
    desc="{{ $description ?? 'Informasi lowongan kerja subang dan sekitarnya. Update harian loker pabrik, swasta, dan perusahaan terpercaya.' }}"
    keyword="loker subang, lowongan kerja subang, loker terbaru subang, loker pabrik subang, loker subang {{ date('Y') }}">

    <!-- Structured Data for Search Box -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Loker Subang",
        "url": "{{ url('/') }}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{ url('/?search={search_term_string}') }}",
            "query-input": "required name=search_term_string"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Loker Subang",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('img/logo.webp') }}",
                "width": "300",
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
            "item": "{{ url('/') }}"
        }@isset($title),{
            "@type": "ListItem",
            "position": 2,
            "name": "{{ $title }}",
            "item": "{{ url()->current() }}"
        }@endisset]
    }
    </script>

    <!-- CollectionPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "{{ $title ?? 'Lowongan Kerja Subang Terbaru' }}",
        "description": "Kumpulan lowongan kerja terbaru di Subang dan sekitarnya",
        "url": "{{ url()->current() }}",
        "mainEntity": {
            "@type": "ItemList",
            "itemListElement": [
                @foreach($posts as $index => $post)
                {
                    "@type": "ListItem",
                    "position": {{ $index + 1 }},
                    "item": {
                        "@type": "JobPosting",
                        "url": "{{ url('/' . $post->slug) }}",
                        "name": "{{ $post->title }}",
                        "datePosted": "{{ $post->created_at->toIso8601String() }}"
                    }
                }@if(!$loop->last),@endif
                @endforeach
            ]
        }
    }
    </script>

    <section class="dark:bg-gray-900 antialiased" itemscope itemtype="http://schema.org/ItemList">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            <x-jumbotron title="{{ $title ?? 'LOKER SUBANG' }}" />

            <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($posts as $post)
                    <x-post slugCategory="{{ $post->category->slug }}" slug="{{ $post->slug }}"
                        category="{{ $post->category->name }}" color="{{ $post->category->color }}"
                        date="{{ $post->created_at->format('d M Y') }}" title="{{ $post->title }}"
                        description="{{ $post->description }}" author="{{ $post->user->name }}"
                        itemprop="itemListElement" itemtype="http://schema.org/JobPosting" />
                @empty
                    <p class="text-lg text-slate-500 font-semibold col-span-3 text-center py-10">
                        Tidak ada lowongan tersedia saat ini. Silakan cek kembali nanti!
                    </p>
                @endforelse
            </div>

            <div class="mt-5">
                {{ $posts->onEachSide(1)->links() }}
            </div>
        </div>
    </section>
</x-layout>
