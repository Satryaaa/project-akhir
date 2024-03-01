@extends('layout.navbar2')

@section('content2')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

<script src="asset('javascript/upload.js')"></script>

    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
        </div>
    </section>
    <section class="mt-10">
        <form method="post" action="/Upload" enctype="multipart/form-data">
            @csrf
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap px-2 flex-container">
                <div class="w-3/5 max-[480px]:w-full">
                    <div class="flex justify-center px-3">
                        <div class="flex items-center justify-center w-full">
                            {{-- <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span></p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF (MAX. 800x400px)
                                    </p>
                                </div>
                                <input id="dropzone-file" type="file" name="foto" class="hidden" />
                            </label> --}}
                            {{-- <div id="preview-container" class="hidden">
                                <img id="preview-image" class="h-auto max-w-full" alt="image description">
                            </div>
                            <div id="original-content">
                                <img class="h-auto max-w-full" id="original-image" src="img/hero_99.jpg" alt="image description">
                            </div> --}}

                            <div id="preview-container" class="hidden">
                                <img id="preview-image" class="h-auto max-w-full" alt="image description">
                            </div>
                            <div id="original-content">
                            </div>



                        </div>
                    </div>
                </div>
                <div class="w-2/5  max-[480px]:w-full px-2">
                    <div class="flex flex-col flex-wrap">
                        <h3>Pilih Foto</h3>
                        <input name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="choose_photo" type="file" onchange="previewImage(this)">
                        <h3>Judul</h3>
                        <input type="text" name="judul" id="" class="py-1 rounded-full border-slate-500">
                        <h3 class="mt-4">Deskripsi</h3>
                        <textarea name="deskripsi" id="" cols="30" rows="10"
                            class="w-full h-36 border-slate-500 rounded-xl"></textarea>
                            <h3>Album</h3>
                            <select name="album" id="">
                                @foreach ($albums as $album )
                                <option value="{{$album->id}}">{{$album->nama_album}}</option>

                                @endforeach

                            </select>
                        <div class="flex flex-row justify-between">
                            <div></div>
                            <button type="submit" class="px-6 py-1 mt-4 text-white rounded-sm bg-blue-700">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

@endsection
