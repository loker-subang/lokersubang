<x-layout>
    <x-slot name="header">Posts</x-slot>

    <a href="{{ route('post.create') }}"><x-table.button> New Post</x-table.button></a>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
        <x-table>
            <x-table.thead>
                <tr>
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
                            {{ $post->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-right flex float-end gap-2">
                            <a href="#"
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

</x-layout>
