<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualAppController extends Controller
{
    public function listbuku()
    {
        $buku = Buku::where('user_id',Auth::guard('penjual')->user()->id)->get();
        return view('penjual.buku.table',compact('buku'));
    }

    public function tambahbuku()
    {
        $buku = new Buku();
        $kategori = Kategori::get();
        return view('penjual.buku.tambah',compact('buku','kategori'));
    }

    public function insertbuku(Request $request)
    {
        $buku = new Buku();
        $data = $request->all();
        $request->validate([
            'name' => 'required',
            'penulis' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'diskon' => 'required',
            'kategori' => 'required',
            'halaman' => 'required',
            'bahasa' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg'
        ]);
        $data['user_id'] = Auth::guard('penjual')->user()->id;
        $data['kategori_id'] = $request->kategori;
        
        $name = time().rand().'.'.$request->gambar->extension();
        $request->gambar->storeAs('images/buku',$name,'public');
        $data['thumbnail'] = 'images/buku/'.$name;

        $data['diskon'] = $request->diskon;
        $data['harga_awal'] = $request->harga;
        $harga = $data['diskon'] * $request->harga / 100 ;
        $data['harga_asli'] = $data['harga'] -  $harga;
        return dd($data);
        // $buku->create($data);
        // return redirect(route('penjual.listbuku'));
    }
}
