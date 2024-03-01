@extends('layout.navbar2')

@section('content2')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
        </div>
    </section>
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
                        <a href="/explore-detail">
                            <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                                <img src="{{asset('foto/'.$item->url)}}" alt=""
                                    class="w-full transition duration-500 ease-in-out hover:scale-105">
                            </div>
                        </a>
                        <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                            <div>
                                <div class="flex flex-col">
                                    <div>
                                        Kebahagiaan
                                    </div>
                                    <div class="text-xs text-abuabu">
                                        bebas
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="bi bi-chat-left-text"></span>
                                <small>14</small>
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
