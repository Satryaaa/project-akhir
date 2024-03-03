@extends('layout.navbar2')

@section('content2')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane"></h3>
        </div>
    </section>
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
    <section>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="{{asset('img/'.$user->picture)}}" alt="" class="w-24 rounded-full">
            </div>
            <a href="/profil">
                <h3 class="text-xl font-semibold">
                   {{$user->nama_lengkap}}
                </h3>
            </a>
            <small class="text-xs ">{{ $user->bio }}</small>
            <div class="flex flex-row mt-3">
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container">
                @foreach ($foto as $item )
                <div class="flex mt-2 bg-white">
                    <div class="flex flex-col px-2">
                        <a href="/explore-detail/{{$item->id}}">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="{{asset('foto/'.$item->url)}}" alt=""
                                    class="w-full transition duration-500 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        {{$item->judul_foto}}
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        {{$item->created_at}}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="/viewEditFoto/{{$item->id}}" class="bi bi-pencil bg-blue-500"></a>
                                <a href="/deleteFoto/{{$item->id}}" class="bi bi-trash bg-red-500"></a>
                                <span class="bi bi-chat-left-text"></span>
                                <small></small>
                                <span class="bi bi-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

@endsection
