<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/edit.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="bg-white shadow-md dark:bg-blue-400">
    <div class="flex flex-wrap items-center max-w-screen-xl justify-center p-4 mx-auto px-5">
            <div class="text-2xl font-shadow text-white">Sat Gallery</div>
            <div class=" px-10 ml-[200px]">
        <input type="text" class="bg-search px-20 py-1 mr-8 ml-10 rounded-full " placeholder="Cari Foto ...">
    </div>
        <div class="ml-auto text-white">
        <a class="px-2 w-1" a href="home.html">Home</a></a>
        <a class="px-2 w-1" a href="album.html">Album</a></a>
        </div>
            <div class="flex items-center space-x-1 ">
                <img src="img/.png" alt="" class="w-10 h-10 rounded-full" data-dropdown-toggle="user-dropdown-menu">

            </div>
        </div>
    </div>
    </nav>

    <section class="">
      <div class="flex flex-col gap-10">
          <h3 class="mt-9 text-3xl font-shadow text-center">Simple Gallery</h3>
      </div>
      </section>
      <div class="max-w-screen-md mx-auto">
          <div class="flex flex-wrap items-center flex-container">
                <div class="flex flex-row">
                <div class="mt-6">
                    <div class="flex flex-col px-9">
                         <div class="w-[363px] h-[192px] bg-bgcolor2">
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center  w-full h-69 border-2 border-gray-900 border-dashed rounded-lg cursor-pointer bg-gray-300 dark:hover:bg-bray-800 dark:bg-blue-400 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/></svg>
                                            <p class="mb-2 text-sm text-white dark:text-white"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-white dark:text-white">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                                </div>
                            </div>
                        </div>
                <!-- <div class="flex mt-2 "> -->
                    <!-- <div class="flex flex-col px-2"> -->
                            <div class="w-[363px] h-[192px]">
                                <div class="mt-4 mb-2">
                                    <label for="default-input" class="ml-2 mb-2 text-xl font-medium dark:text-dark">Judul</label>
                                    <input type="text" id="default-input" class="  block p-2 w-full text-sm text-gwhite bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-blue-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="">
                                </div>
                                <div class="mb-2">
                                    <form class="max-w-sm mx-auto">
                                      <label for="message" class="block ml-2 text-xl font-medium text-black dark:text-dark">Deskripsi</label>
                                        <textarea id="message" rows="4" class="block p-2 w-full text-sm text-white bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-blue-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
                                    </form>
                                </div>
                                <div class="mb-2 ">
                                    <!-- <label for="default-input" class="flex mb-1 text-sm font-medium dark:text-dark">Album</label> -->

                                <div class="w-[363px] h-[192px] ">
                                    <div class="mb-2">
                                        <a href="explore.html"><Button type="text" id="default-input" class="rounded-lg block p-2 w-full dark:bg-blue-400 bg-biru-muda text-dark ">Unggah</Button></a>
                                    </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                </section>
            </body>
        </html>
