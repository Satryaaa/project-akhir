<?php

namespace App\Http\Controllers;

use App\Models\foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangepasswordController extends Controller
{
    public function change(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ], [
            'old_password.required' => 'kolom tidak boleh kosong'


        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $user = auth()->user();
            if (!Hash::check($request->old_password, $user->password)) {
                return redirect()->back()->with('error','password lama salah');
            } else {
                $user->update([
                    'password' => Hash::make($request->new_password)
                ]);
                return redirect('/my-pin');
            }
        }


    }
    public function profil(){
        $user = auth()->user();
        $foto = foto::where('user_id', auth()->id())->get();
        return view('page.my-pin' , compact('user','foto'));
    }
    public function editprofil(){
        $user = auth()->user();
        return view('page.profil' , compact('user'));
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'no_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'bio' => 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        } else {
            $user = auth()->user();
            if($request->hasFile('ubah_photo')){
                $foto = $request->file('ubah_photo');
                $extensi = $foto->getClientOriginalExtension();
                $name = 'foto' . now()->timestamp . '.'. $extensi;
                $foto->move('img',$name);
                $user->picture = $name;
            } else {
                $foto = $user->picture;
            }
            $user->nama_lengkap = $request->nama_lengkap;
            $user->no_telepon = $request->no_telepon;
            $user->jenis_kelamin = $request->jenis_kelamin;
            $user->alamat = $request->alamat;
            $user->bio = $request->bio;
            $user->save();
            return redirect('/my-pin');

        }



    }
}
