@extends('layout.navbar2')

@section('content2')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />


    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
        </div>
    </section>
    <section class="max-w-screen-md mx-auto ">
        <form action="/update" method="POST" enctype="multipart/form-data">
            <div class="flex flex-wrap justify-between flex-container">
                @csrf
                <label for="foto" class="flex flex-col items-center w-2/6 bg-white rounded-md shadow-md max-[480px]:w-full">
                    <img src="{{('img/'.$user->picture)}}" alt="" class="rounded-full w-36 h-36">
                    <input id="foto" name="ubah_photo" type="file" class="items-center w-48 h-10 mt-4 border hidden rounded-md">
                    <button class="w-48 py-1 mt-4 text-white rounded-md bg-biru">Ubah Photo</button>
                </label>
                <div class="w-3/5 max-[480px]:w-full">
                    <div class="bg-white rounded-md shadow-md ">
                        <div class="flex flex-col px-4 py-4 ">
                            <h5 class="text-3xl text-center font-hurricane">Your Profile</h5>
                            <h5>Nama Lengkap</h5>
                            <input value="{{$user->nama_lengkap}}" name="nama_lengkap" type="text" class="py-1 rounded-md">
                            <h5>No Telepon</h5>
                            <input value="{{$user->no_telepon}}" name="no_telepon" type="text" class="py-1 rounded-md">
                            <h5>Jenis Kelamin</h5>
                            <select name="jenis_kelamin" id="" class="py-1 rounded-md">
                                <option value="{{ $user->jenis_kelamin}}">{{ $user->jenis_kelamin}}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <h5>Alamat</h5>
                            <textarea name="alamat" type="text" class="py-1 rounded-md">

                            </textarea>
                            <h5>Bio</h5>
                            <textarea name="bio" type="text" class="py-1 rounded-md">
                            </textarea>
                            <button type="submit" class="py-2 mt-4 text-white rounded-md bg-blue-600">Perbaharui</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


@endsection
