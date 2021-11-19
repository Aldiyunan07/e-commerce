<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Buy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $buku = Buku::get();
        return view('dashboard',compact('buku'));
    }

    public function belisekarang(Buku $buku)
    {
        return view('belisekarang',compact('buku'));
    }

    public function buynow(Buku $buku){
        $buy = new Buy;
        $buy->create([
            'user_id' => Auth::user()->id,
            'buku_id' => $buku->id,
            'status' => 'proses',
            'penjual_id' => $buku->penjual_id,
        ]);
        return view('konfirmasi',compact('buku'));
    }
}
