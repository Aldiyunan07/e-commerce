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
        'ebook',
        'email',
        'usia',
        'kode_pos',
        'ukuran',
        'jk',
        'institusi',
        'pekerjaan',
        'jumlah_halaman',
        'jumlah_cetakan',
        'jasa'
    ];

    public function getFileAttribute()
    {
        return asset('/storage/' . $this->ebook);
    }

    public function gravatar($size = 150)
    {
        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->email ) ) ) . "?d=mm&s=" . $size;
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
