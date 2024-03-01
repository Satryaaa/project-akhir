<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likefoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'foto_id',
    ];

    protected $table = 'likefotos';

    public function fotos(){
        return $this->belongsTo(Foto::class, 'foto_id', 'id');
    }

}
