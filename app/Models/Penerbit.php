<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'gelar',
        'no_hp',
        'judul_buku',
        'email',
        'kode_pos',
        'ukuran',
        'jk',
        'institusi',
        'pekerjaan',
        'jumlah_halaman',
        'jasa'
    ];


    public function gravatar($size = 150)
    {
        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->email ) ) ) . "?d=mm&s=" . $size;
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function alasan()
    {
        return $this->hasOne(Alasan::class);
    }
}
