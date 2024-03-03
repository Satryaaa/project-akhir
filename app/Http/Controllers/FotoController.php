<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    public function upload_foto(Request $request){
        $request->validate([
            'foto' => 'required|mimes:jpeg,jpg,png',
            'judul'=> 'required',
            'deskripsi' => 'required'
        ]);

        $foto_file = $request->file('foto');
        $foto_ektensi = $foto_file->extension();
        $foto_nama = date('ymdhis') .".". $foto_ektensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'judul_foto' => $request->judul,
            'deskripsi_foto'  => $request->input('deskripsi'),
            'url'   => $foto_nama,
            'user_id' => Auth::user()->id,
            'album_id' => $request->album_id
        ];

        $validate = Foto::create($data);


        if($validate == true){
            return redirect('/pin')->with('success', 'Postingan berhasil di upload');
        } else {
            return redirect()->back();
        }
     }

     public function viewEditFoto ($id) {
        $data = Foto::find($id);
        return view('page.editfoto', compact('data'));
     }

     public function processEditFoto (Request $request, $id) {

        $data = Foto::find($id);

        $request->validate([
            'judul_foto' => 'required',
            'deskripsi_foto' => 'required'
        ]);

        $data->judul_foto = $request->judul_foto;
        $data->deskripsi_foto = $request->deskripsi_foto;
        $data->save();
        return redirect()->back()->with('success', 'Postingan Berhasil Diedit');
     }

     public function deleteFoto($id){
        $data = Foto::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Postingan Berhasil Dihapus');
     }
}
