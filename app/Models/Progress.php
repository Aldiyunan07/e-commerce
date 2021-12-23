<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    protected $fillable = [
        'penerbit_id',
        'naskah',
        'administrasi',
        'antrian',
        'cover',
        'layout',
        'harga',
        'deal_harga',
        'masuk',
        'keluar',
        'produksi'
    ];
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }
    public function rupiah($angka){
        $format = "Rp. ".number_format($angka,0,".",".");
        return $format;
    }
}
