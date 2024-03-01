<?php

namespace App\Models;

use App\Models\User;
use App\Models\Album;
use App\Models\Likefoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class foto extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'url',
        'user_id',
        'album_id'
    ];
    protected $table = 'fotos';

    //Relasi nilai balik ke tabel user
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    //relasi album
    public function albums(){
        return $this->belongsTo(Album::class,'album_id','id');
    }
    //Relasi ke tabel like
    public function likefoto(){
        return $this->hasMany(Likefoto::class,'foto_id', 'id');
    }
    public function Comment(){
        return $this->hasMany(Comment::class,'foto_id', 'id');
    }


}
