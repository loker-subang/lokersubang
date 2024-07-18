<x-layout title="{{ $meta['header'] }}">
    <x-slot name="header">{{ $meta['header'] }}</x-slot>
    <form action="{{ $meta['url'] }}" method="post" enctype="multipart/form-data">
        @csrf
        @method($meta['method'])
        <div class="flex flex-col md:flex-row bg-white rounded shadow">
            <div class="w-full md:w-2/3 bg-white-500 p-4">
                <div class="mb-5 group">
                    <label for="title" class="block mb-2 text-sm text-gray-500 dark:text-white">Judul</label>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input name="title" type="text" id="title" placeholder="Judul post..."
                        value="{{ old('title', $post->title) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('title')
                        <span class="text-red-700 text-sm"> Judul harus di isi</span>
                    @enderror
                </div>
                <div class="mb-5 group">
                    <label for="description" class="block mb-2 text-sm text-gray-500 dark:text-white">Deskripsi</label>
                    <textarea id="description" rows="2" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tulis deskripsi..." style="resize: none">{{ $post->description }}</textarea>
                    @error('description')
                        <span class="text-red-700 text-sm"> Deskripsi harus di isi</span>
                    @enderror
                </div>
                <div class="mb-5 group">
                    <label for="message" class="block mb-2 text-sm  text-gray-500 dark:text-white">Body</label>
                    <textarea id="editor1" name="body"> {{ $post->body }}</textarea>
                    @error('body')
                        <span class="text-red-700 text-sm"> Body harus di isi</span>
                    @enderror
                </div>
            </div>
            <div class="w-full md:w-1/3 bg-white-500 p-4  md:mt-0 md:ml-4">
                <div class="mb-5 group">
                    <label for="company" class="block mb-2 text-sm text-gray-500 dark:text-white">Nama
                        Perusahaan</label>
                    <input name="company" type="text" value="{{ old('company', $post->company) }}" id="company"
                        placeholder="Nama perusahaan..."
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('company')
                        <span class="text-red-700 text-sm"> Nama perusahaan harus di isi</span>
                    @enderror
                </div>
                <div class="mb-5 group">
                    <label for="city" class="block mb-2 text-sm text-gray-500 dark:text-white">Kota</label>
                    <select id="city" name="city_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih...</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" {{ $post->city_id == $city->id ? 'selected' : '' }}>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('city_id')
                        <span class="text-red-700 text-sm"> Nama Kota harus di Pilih</span>
                    @enderror
                </div>
                <div class="mb-5 group">
                    <label for="category" name="category_id"
                        class="block mb-2 text-sm text-gray-500 dark:text-white">Kategori</label>
                    <select id="category" name="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-red-700 text-sm"> Kategori harus di Pilih</span>
                    @enderror
                </div>
                <div class="mb-5 group">
                    <label class="block mb-2 text-sm text-gray-500 dark:text-white" for="image">Gambar</label>
                    <input type="hidden" name="image_lama" value="{{ $post->image }}">
                    <input type="file" name="image" id="image" value="{{ $post->image }}">
                    {{-- <input name="image"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" type="file" accept="image/*"> --}}
                    <div class="mt-5">
                        @if (!empty($post->image))
                            <img id="preview" src="/storage/{{ $post->image }}" alt="Preview" width="150"
                                class="img-fluid">
                        @else
                            <img id="preview" src="/img/preview.jpeg" alt="Preview" width="150" class="img-fluid">
                        @endif

                    </div>
                    @error('image')
                        <span class="text-red-700 text-sm"> Gambar harus di Pilih</span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit"
            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $meta['button'] }}</button>
    </form>
</x-layout>
