<x-admin>
    <x-slot name="header">Posts</x-slot>

    <x-table.button><a href="{{ route('post.create') }}"> New Post</a></x-table.button>
    <form action="" class="mt-5">
        <div class="items-center mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
            <div class="relative w-full">
                <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                    address</label>
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5  text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>

                </div>
                <input
                    class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Cari disini..." type="text" id="email" name="search">
            </div>
            <div>
                <button type="submit"
                    class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Pencarian</button>
            </div>
        </div>

    </form>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3 min-h-screen bg-white">
        <x-table>
            <x-table.thead>
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Publish
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </x-table.thead>
            <tbody>
                @forelse ($posts as $post)
                    <x-table.tr>

                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <th class="px-6 py-4">
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-right flex float-end gap-2">
                            <a href="{{ route('post.edit', $post->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            |
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="font-medium  text-red-600 dark:text-red-500 hover:underline"
                                    onclick="return confirm('Yakin Data Mau di Hapus ?')">Hapus</button>
                            </form>
                        </td>
                    </x-table.tr>

                @empty
                    <x-table.tr>
                        <td colspan="4" class="px-6 py-4">Tidak ada data</td>
                    </x-table.tr>
                @endforelse
            </tbody>
        </x-table>
    </div>
    <div class="mt-3">
        {{ $posts->links() }}
    </div>

</x-admin>
