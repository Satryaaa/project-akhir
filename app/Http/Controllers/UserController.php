<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profil (){
        $user = auth()->user();
        return view('page.my-pin', compact('user'));
    }
    public function album(Request $request){
        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view('page.album', compact('user', 'albums'));
    }

}
