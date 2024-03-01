@extends('layout.navbar2')
@push('cssjsexternal')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
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
                <img src="/img/hero_8.jpg" alt="" class="w-24" id="imageUser">
            </div>
            <h3 class="text-xl font-semibold" id="namaUser">
                OmenSoft
            </h3>
            <small class="text-xs " id="bio"></small>
            <div class="flex flex-row mt-3">
                <a href="/follower">
                    <small class="mr-4 text-abuabu" id="follower"></small>
                </a>
                <a href="/following">
                    <small class="text-abuabu" id="follow"></small>
                </a>

            </div>
            <div id="tombolikuti">

            </div>
            <button class="px-4 mt-4 text-white bg-black rounded-full"></button>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="exploredata">

            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

@endsection
@push('footerjsexternal')
<script src="/javascript/other-pin.js"></script>

@endpush
