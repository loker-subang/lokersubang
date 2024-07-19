<x-layout title="{{ $title ?? config('app.name') }}">
    @isset($title)
        <x-slot name="header">{{ $title }}</x-slot>
    @endisset
    <section class=dark:bg-gray-900">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
            <x-jumbotron />
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 ">
                @forelse ($posts as $post)
                    <x-post slugCategory="{{ $post->category->slug }}" slug="{{ $post->slug }}"
                        category="{{ $post->category->name }}" color="{{ $post->category->color }}"
                        date="{{ $post->created_at->format('d M Y') }}" title="{{ $post->title }}"
                        description="{{ $post->description }}" author="{{ $post->user->name }}" />
                @empty
                    <p class="text-lg text-slate-500 font-semibold">Tidak ada postingan !</p>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>
