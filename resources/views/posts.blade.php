<x-layout title="{{ $title ?? config('app.name') . ' - Lowongan Kerja Subang dan Sekitarnya Terbaru 2026' }}"
    desc="{{ $description ?? 'Informasi lowongan kerja subang dan sekitarnya. Update harian loker pabrik, swasta, dan perusahaan terpercaya.' }}">


    {{-- =========================
SCHEMA: CollectionPage + ItemList
(HALAMAN LISTING – BENAR)
========================= --}}
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "{{ $title ?? 'Lowongan Kerja Subang Terbaru 2026' }}",
  "description": "Kumpulan lowongan kerja terbaru di Subang dan sekitarnya",
  "url": "{{ url()->current() }}",
  "mainEntity": {
    "@type": "ItemList",
    "itemListOrder": "ItemListOrderDescending",
    "numberOfItems": {{ $posts->total() }},
    "itemListElement": [
      @foreach ($posts as $index => $post)
      {
        "@type": "ListItem",
        "position": {{ $index + 1 }},
        "url": "{{ url($post->slug . '.html') }}"
      }@if(!$loop->last),@endif
      @endforeach
    ]
  }
}
</script>


    <section class="dark:bg-gray-900 antialiased">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            <x-jumbotron title="{{ $title ?? 'LOKER SUBANG' }}" />

            <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($posts as $post)
                    <x-post slugCategory="{{ $post->category->slug }}" slug="{{ $post->slug }}"
                        category="{{ $post->category->name }}" color="{{ $post->category->color }}"
                        date="{{ $post->created_at->format('d M Y') }}" title="{{ $post->title }}"
                        description="{{ $post->description }}" author="{{ $post->user->name }}"
                        itemprop="itemListElement" />
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
