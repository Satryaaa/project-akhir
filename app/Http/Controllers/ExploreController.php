<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Comment;
use App\Models\LikeFoto;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function getdata(Request $request){
        if($request->cari !== 'null'){
            $explore = Foto::with(['likefoto', 'comment'])->withCount(['likefoto', 'comment'])->where('judul_foto','like','%'.$request->cari.'%')->orderBy('id', 'DESC')->paginate(4);
        } else {
            $explore = Foto::with(['likefoto', 'comment'])->orderBy('id', 'DESC')->paginate(4);
            $explore = Foto::with('likefoto', 'comment')->withCount(['likefoto', 'comment'])->paginate(4 ,['*'], 'page', $request->get('page'));
        }
        return response()->json([
            'data' =>$explore,
            'statuscode' => 200,
            'idUser'     => auth()->user()->id
        ]);
    }

    public function likefotos(Request $request){
        try {
            $request->validate([
                'fotoid' => 'required'
            ]);

            $existingLike = LikeFoto::where('foto_id', $request->fotoid)->where('user_id', auth()->user()->id)->first();
            if(!$existingLike){
                $dataSimpan = [
                    'foto_id'       => $request->fotoid,
                    'user_id'       => auth()->user()->id
                ];
                Likefoto::create($dataSimpan);
            }else{
                Likefoto::where('foto_id', $request->fotoid)->where('user_id', auth()->user()->id)->delete();
            }

            return response()->json('Data berhasil di simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Somenting went wrong', 500);
        }
    }
    public function getdatadetail(Request $request, $id){
        $dataDetailFoto  = Foto::with('users')->where('id', $id)->firstOrFail();
        return response()->json([
            'dataDetailFoto' => $dataDetailFoto
        ],200);
        }

        public function ambildatakomentar(Request $request, $id){
            $ambilkomentar = Comment::with('user')->where('foto_id', $id)->get();
            return response()->json([
            'data'   =>$ambilkomentar
            ], 200);

        }

        public function kirimkomentar(Request $request){
            try{
                $request->validate([
                'idfoto'            => 'required',
                'isi_komentar'      => 'required'
            ]);

                $dataStoreKomentar = [
                 'user_id'          => auth()-> user()->id,
                 'foto_id'          => $request->idfoto,
                 'isi_komentar'     => $request->isi_komentar
                ];
                Comment::create($dataStoreKomentar);

                return response()->json([
                    'data'          => 'Data berhasil di simpan',

                ], 200);
            } catch (\Throwable $th) {
                return response()->json('Data komentar gagal di simpan', 500);
            }
        }
    }
