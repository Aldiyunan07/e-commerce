<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Buy;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function welcome(){
        $buku = Buku::where('status','terima')->get();
        $kategori = Kategori::get();
        $bukus = Buku::where('status','terima')->orderBy('created_at','desc')->get();
        return view('welcome',compact('buku','kategori','bukus'));
    }

    public function allBooks(Request $request)
    {
        $buku = Buku::where('status','terima')->orderBy('created_at','desc')->get();
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
        $kategori = Kategori::where('id',$buku->kategori_id)->get();
        $ebook = Buku::where('kategori_id',$buku->kategori_id)->where('id','!=',$buku->id)->get();
        return view('detail',compact('buku','kategori','ebook'));
    }

    public function listkategori(Kategori $kategori)
    {
        $buku = Buku::where('status','terima')->where('kategori_id',$kategori->id)->get();
        return view('search',compact('buku'));
    }

    public function search(Request $request)
    {
        $keywoard = $request->search;
        $buku = Buku::where("name","like","%$request->search%")->where('status','terima')->get();
        return view('search',compact('buku','keywoard'));
    }

    public function myBook()
    {
        $buku = Buku::where('status','terima')->get();
        return view('mybook',compact('buku'));
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

    public function updateProfile()
    {
        return view('profile');
    }

    public function updateProfil(Request $request,User $user)
    {
        $data = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'jk' => 'required',     
        ]);
        if($request->hasFile('foto')){
            if(Auth::user()->picture !== null){
                Storage::delete(Auth::user()->picture);
            }
            $data['picture'] = $request->file('foto')->store('images/avatar'); 
        }
        $data['ttl'] = $request->tanggal_lahir;

        $user->update($data);
        return back();

    }

    public function changePassword()
    {
        
        return view('change');
    }

    public function ubahPassword(Request $request,User $user)
    {
        $data = $request->all();
        $request->validate([
            'password' => 'password|required',
            'password_confirmation' => 'password|required'
        ]);
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        return back();
    }

    public function myOrders(Buy $buy,Request $request)
    {
        $search = $request->status;
        if($request->status == ""){
            $buy = Buy::where('user_id',Auth::user()->id)->orderBy('status','desc')->get();
        }else{
            $buy = Buy::where('user_id',Auth::user()->id)->where('status',$search)->get();
        }
        return view('orders',compact('buy','search'));
    }

    public function lihatbuku(Buku $buku)
    {
        return view('lihatbuku',compact('buku'));
    }

    public function pagePelayanan()
    {
        return view('pelayanan');
    }
}
