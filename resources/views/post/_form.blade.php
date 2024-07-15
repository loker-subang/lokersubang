<x-layout title="New Post">
    <x-slot name="header">New Post</x-slot>
    <form action="">
        <div class="flex flex-col md:flex-row bg-white rounded shadow">
            <div class="w-full md:w-2/3 bg-white-500 p-4">
                <div class="mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm text-gray-500 dark:text-white">Judul</label>
                    <input type="text" id="base-input" placeholder="Judul post..."
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm text-gray-500 dark:text-white">Deskripsi</label>
                    <textarea id="message" rows="2"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tulis deskripsi..."></textarea>
                </div>
                <div class="mb-5 group">
                    <label for="message" class="block mb-2 text-sm  text-gray-500 dark:text-white">Body</label>
                    <textarea name="editor1" id="editor1"> </textarea>
                </div>
            </div>
            <div class="w-full md:w-1/3 bg-white-500 p-4  md:mt-0 md:ml-4">
                <div class="mb-5 group">
                    <label for="base-input" class="block mb-2 text-sm text-gray-500 dark:text-white">Nama
                        Perusahaan</label>
                    <input type="text" id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5 group">
                    <label for="countries" class="block mb-2 text-sm text-gray-500 dark:text-white">Kota</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>-Pilih-</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                    </select>
                </div>

                <div class="mb-5 group">
                    <label for="countries" class="block mb-2 text-sm text-gray-500 dark:text-white">Kategori</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                    </select>
                </div>

                <div class="mb-5 group">
                    <label class="block mb-2 text-sm text-gray-500 dark:text-white" for="user_avatar">Image</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">

                </div>
            </div>
        </div>
        <button type="submit"
            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>
</x-layout>
