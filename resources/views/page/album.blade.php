@extends('layout.navbar2')
@section('content2')


    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Album</h3>
        </div>
        <div class="flex justify-center">
            @if ($message = Session::get('success'))
                    <div id="alert-1" class="flex items-center p-4 mt-2 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-300 dark:text-blue-400" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-3 text-sm font-medium">
                          {{ $message }}
                        </div>
                          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:text-blue-400 dark:hover:bg-gray-500" data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                      </div>
                    @endif
            </div>
    </section>
    <div class="ml-72 mt-4">
        <a href="/viewaddalbum"><button class="px-3 py-1 bg-blue-400 rounded-md text-white">+Buat Album</button></a>
    </div>
    <section class="mt-8">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container">

                @foreach ($albums as $album)

                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/detailalbum/{{ $album->id }}">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="{{asset('/img/'.$album->foto)}}" alt="" class="w-full transition duration-500 hover:scale-105">
                            </div>
                        </a>
                        <div class="text-center font-semibold shadow-xl">
                            {{ $album->nama_album }}
                            <a href="/delete/{{$album->id}}" class="bi bi-trash bg-red-500"></a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    @endsection
