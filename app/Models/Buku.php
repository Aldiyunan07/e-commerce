<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'penjual_id',
        'thumbnail',
        'deskripsi',
        'harga_awal',
        'diskon',
        'penulis',
        'harga_asli',
        'kategori_id',
        'halaman',
        'bahasa',
        'berat',
        'panjang',
        'lebar',
        'isbn',
        'penerbit'
    ];

    public function getPictureAttribute()
    {
        return asset('/storage/' . $this->thumbnail);
    }

    public function rupiah($angka){
        $format = "Rp. ".number_format($angka,0,".",".");
        return $format;
    }
    
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function penjual()
    {
        return $this->belongsTo(Penjual::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buy()
    {
        return $this->hasMany(Buy::class);
    }

    public function userakses(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
