@extends('layout.navbar2')

@section('content2')

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />


<!doctype html>
<html>
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
        </div>
        @if(session()->has('error'))
        <h3 class="text-5xl text-center font-hurricane">{{ session('error')}}</h3>
        @endif
    </section>
    <section class="max-w-[500px] mx-auto ">
        <form action="/changepassword" method="post">
            @csrf
            <div class="max-[480px]:w-full">
                <div class="bg-white rounded-md shadow-md ">
                    <div class="flex flex-col px-4 py-4 ">
                        <h5 class="text-3xl text-center font-hurricane">Change Your Password</h5>
                        <h5>Old Password</h5>
                        <input name="old_password" type="password" class="py-1 rounded-md">
                        @error('old_password')
                        <p>{{ $message }}</p>
                        @enderror
                        <h5>New Password</h5>
                        <input name="new_password" type="password" class="py-1 rounded-md">
                        <h5>Confirm Password</h5>
                        <input name="confirm_password" type="password" class="py-1 rounded-md">
                        <button type="submit" class="py-2 mt-4 text-white rounded-md bg-blue-500">Perbaharui</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

@endsection
@push('footerjsexternal')
    <script src="/javascript/exploredetail.js"></script>
@endpush
