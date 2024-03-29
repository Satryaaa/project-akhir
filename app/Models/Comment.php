<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'foto_id',
        'isi_komentar',
    ];

    protected $table = 'comments';
    public function fotos(){
        return $this->belongsTo(Foto::class,'foto_id','id');
    }
        public function user(){
            return $this->belongsTo(User::class, 'user_id', 'id');
        }

 }


