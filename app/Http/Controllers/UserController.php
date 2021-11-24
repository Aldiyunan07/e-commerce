<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Buy;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function welcome(){
        $buku = Buku::where('status','terima')->get();
        $kategori = Kategori::get();
        return view('welcome',compact('buku','kategori'));
    }
    public function dashboard()
    {
        $buku = Buku::where('status','terima')->get();
        $buy = Buy::get();
        return view('dashboard',compact('buku','buy'));
    }

    public function allBooks()
    {
        $buku = Buku::where('status','terima')->get();
        $buy = Buy::get();
        return view('allbooks',compact('buku','buy'));
    }
    public function belisekarang(Buku $buku)
    {   
        
        return view('belisekarang',compact('buku'));
    }

    public function buynow(Buku $buku){
        $buycheck = Buy::where('buku_id',$buku->id)->where('user_id',Auth::user()->id)->get();
        if($buycheck->count() == 0){
            $buy = new Buy;
            $buy->create([
                'user_id' => Auth::user()->id,
                'buku_id' => $buku->id,
                'status' => 'proses',
                'penjual_id' => $buku->penjual_id,
            ]);
        }
        return view('konfirmasi',compact('buku'));
    }

    public function detail(Buku $buku)
    {
        return view('detail',compact('buku'));
    }

    public function listkategori(Kategori $kategori)
    {
        $buku = Buku::where('status','terima')->where('kategori_id',$kategori->id)->get();
        return view('search',compact('buku'));
    }

    public function searchbuku(Request $request)
    {
        $keywoard = $request->search;
        $buku = Kategori::where('name','like','%$request->search%')->get();
        return view('search',compact('buku','keywoard'));
    }

    public function listbuku()
    {
        $buku = Buku::where('status','terima')->get();
        return view('listbuku',compact('buku'));
    }

    public function whistlist(Buku $buku)
    {
        $buku->whistlistuser()->attach(Auth::user()->id);
        return back();
    }

    public function unwhistlist(Buku $buku)
    {
        $buku->whistlistuser()->detach(Auth::user()->id);
        return back();
    }

    public function listwhistlist()
    {
        $buku = Buku::where('status','terima')->get();
        return view('whistlist',compact('buku'));
    }
}
