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
        'slug',
        'halaman',
        'bahasa',
        'berat',
        'panjang',
        'lebar',
        'isbn',
        'penerbit',
        'status',
        'file'
    ];

    public function getPictureAttribute()
    {
        return asset('/storage/' . $this->thumbnail);
    }

    public function getEbookAttribute()
    {
        return asset('/storage/' . $this->file);
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

    public function whistlistuser()
    {
        return $this->belongsToMany(User::class,'whistlist')->withTimestamps();
    }

    public function hargadiskon()
    {
        $hargadiskon = $this->harga_awal - $this->harga_asli;
        return $hargadiskon;
    }
}
