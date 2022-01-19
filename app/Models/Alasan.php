<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'penerbit_id',
        'alasan'
    ];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }
}
