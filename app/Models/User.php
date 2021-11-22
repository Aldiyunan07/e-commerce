<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telp',
        'profesi',
        'alamat'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

    public function buy()
    {
        return $this->hasMany(Buy::class);
    }

    public function bukuakses()
    {
        return $this->belongsToMany(Buku::class)->withTimestamps();
    }

    public function bukuaccess($buku){
        return (bool) $this->bukuakses()->find($buku->id); 
    }

    public function pesanansaya($user)
    {
        $buy = Buy::where('user_id',$user)->where('status','proses')->get();
        return $buy->count();
    }

    public function checkwhistlist($buku)
    {
        return (bool) $this->whistlistbuku()->find($buku->id);
    }

    public function whistlistbuku()
    {
        return $this->belongsToMany(Buku::class,'whistlist')->withTimestamps();
    }
}
