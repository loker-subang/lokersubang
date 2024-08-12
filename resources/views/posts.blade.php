<x-layout title="{{ $title ?? config('app.name') }}">

    {{-- Schema kotak penelusuran sitelink --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://lokersubang.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://lokersubang.com/?search={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }
        }
    </script>
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
            }]
        }
    </script>




    <section class="dark:bg-gray-900 antialiased ">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            <x-jumbotron title="{{ $title ?? 'LOKER SUBANG' }}" />
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 ">
                @forelse ($posts as $post)
                <x-post slugCategory="{{ $post->category->slug }}" slug="{{ $post->slug }}" category="{{ $post->category->name }}" color="{{ $post->category->color }}" date="{{ $post->created_at->format('d M Y') }}" title="{{ $post->title }}" description="{{ $post->description }}" author="{{ $post->user->name }}" />
                @empty
                <p class="text-lg text-slate-500 font-semibold">Tidak ada postingan !</p>
                @endforelse
            </div>

            <div class="mt-5">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</x-layout>