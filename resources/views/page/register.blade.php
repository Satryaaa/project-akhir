@extends('layout.master')

@section('content')

<!doctype html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/build.css" rel="stylesheet">
</head>
<body>

    <h5 class="font-playfair text-4xl mb-3 mt-10 text-center">Register</h5>
    <div class="bg-white shadow-lg w-1/4 p-2 mx-auto mt-15 rounded-xl px-11 ">
        <h2 class="font-playfair text-5xl text-center">PickSat</h2>


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
    <div>
        <form action="/ProsesRegister" method="POST">
            @csrf
            <div class="mb-4 mt-5">
                <label for="">email</label>
                <input name="email" type="email" class="w-full p-1 border border-slate-400 rounded-md bg-slate-50 ">
                @error('email')
                <span class="font-sm p-2 mb-4 text-sm text-red-700 rounded-lg">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 mt-3">
                <label for="">password</label>
                <input name="password" type="password" class="w-full p-1 border border-slate-400 rounded-md bg-slate-50 ">
                @error('password')
                <span class="font-sm p-2 mb-4 text-sm text-red-700 rounded-lg">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 mt-3">
            <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="w-full p-1 border border-slate-400 rounded-md bg-slate-50 ">
                @error('tgl_lahir')
                <span class="font-sm p-2 mb-4 text-sm text-red-700 rounded-lg">{{ $message }}</span>
                @enderror
            </div>
            <button class=" bg-blue-400 px-4 py-1 rounded-full w-full mt-8 text-white " >Register</button>
            </form>
            <p class="mt-4 text-sm mb-10">Sudah Punya Akun? <a class="text-blue-800" href="/login">Silahkan Klik disini</a></p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    </body>
    </html>
