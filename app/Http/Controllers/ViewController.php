<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function upload(Request $request){
        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view('page.pin', compact('albums', 'user'));
    }
}
