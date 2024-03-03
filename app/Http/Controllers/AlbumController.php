<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function storeAlbum(Request $request){
        $request->validate([
            'nama_album'    => 'required',
            'deskripsi'     => 'required'
        ]);

        $filenya = $request->file('foto');
        if ($request->hasFile('foto')) {
            $filename = pathinfo($filenya, PATHINFO_FILENAME);
            $extensi = $filenya->getClientOriginalExtension();
            $foto= 'img' . time() . '.'. $extensi;
            $filenya->move('img', $foto);
        }
        else {
            $foto = 'default,jpg';
        }
        $dataAlbum = [
            'nama_album'    => $request->nama_album,
            'deskripsi'     => $request->deskripsi,
            'foto'          => $foto,
            'user_id'       => Auth::user()->id,
        ];

        Album::create($dataAlbum);
        return redirect()->back()->with('success', 'Album Berhasil Di Buat');
    }

    public function ViewAddAlbum(){
        return view('page.buatalbum');
    }

    public function detail($id){
        $user = auth()->user();
        $fotos = Foto::where('album_id', $id)->where('user_id', Auth::user()->id)->get();
        $album = Album::where('id', $id)->first();
        return view('page.detail-album', compact('fotos', 'album', 'user'));



    }
    public function hapusAlbum($id){
        $album = Album::where('id', $id)->first();
        $album->delete();

        return redirect()->back()->with('success', 'Album Berhasil Dihapus');
    }

}
