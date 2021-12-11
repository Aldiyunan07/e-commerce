<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode extends Model
{
    use HasFactory;

    protected $fillable = ['penjual_id','thumbnail','name','number'];
    
    public function penjual()
    {
        return $this->belongsTo(Penjual::class);
    }
}
