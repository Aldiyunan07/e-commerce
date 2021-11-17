<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'thumbnail',
        'deskripsi',
        'harga_awal',
        'diskon',
        'penulis',
        'harga_asli',
        'kategori_id',
        'halaman',
        'bahasa'
    ];

    public function getThumbnailAttribute()
    {
        return asset('/storage/' . $this->thumbnail);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
