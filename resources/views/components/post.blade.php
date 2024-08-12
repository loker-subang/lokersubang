<article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <a href="/kategori/{{ $slugCategory }}">
            <span class="bg-{{ $color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                <svg class="mr-1 w-3 h-3" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.153 19 21 12l-4.847-7H3l4.848 7L3 19h13.153Z" />
                </svg>
                {{ $category }}
            </span>
        </a>
        <span class="text-sm">{{ $date }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/{{ $slug }}.html">{{ $title }}</a></h2>
    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $description }}</p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img class="w-7 h-7 rounded-full" src="/img/lokersubang.png" alt="Jese Leos avatar" />
            <span class="font-normal text-sm dark:text-white">
                {{ $author }}
            </span>
        </div>
        <a href="/{{ $slug }}.html" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
            Detail
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>