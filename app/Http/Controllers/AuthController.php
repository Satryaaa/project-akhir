<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\Trigerlogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    // Proses Login

    public function ProsesLogin (Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            Trigerlogin::create([
                'id_user'=>Auth::user()->id
            ]);
            return redirect('/explore')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Email atau Password salah');
        }
    }

    // End Proses Login



    // Proses Register
    Public function ProsesRegis(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
            'tgl_lahir' => 'required',
        ]);
        $dataRegister =[
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        $validate = User::create($dataRegister);

        if($validate == true){
            return redirect('/register')->with('success', 'Data Berhasil di simpan');
        } else {
            return redirect()->back();
        }

    }
    // End Proses Register


}
