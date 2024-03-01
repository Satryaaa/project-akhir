<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Foto;
use App\Models\Trigerlogin;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'no_telepon',
        'alamat',
        'bio',
        'picture',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function fotos(){
        return $this->hasMany(Foto::class,'user_id','id');
    }

    public function comments(){
        return $this->hasMany(Comment:: class,'foto_id','id');
    }

    public function favorites(){
        return $this->hasMany(Favorite:: class,'foto_id','id');
    }

    public function likefoto(){
        return $this->hasMany(Likefoto:: class,'foto_id','id');
    }
    public function trigerLogin(){
        return $this->hasMany(Trigerlogin:: class,'id_user','id');
    }

}
