<?php

namespace App\Http\Controllers\Penjual;
use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Buy;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenjualAppController extends Controller
{
    public function listbuku()
    {
        $buku = Buku::where('penjual_id',Auth::guard('penjual')->user()->id)->get();
        return view('penjual.buku.table',compact('buku'));
    }

    public function listbukuShow(Buku $buku)
    {
        return view('penjual.buku.show',compact('buku'));
    }

    public function tambahbuku()
    {
        $buku = new Buku();
        $kategori = Kategori::get();
        return view('penjual.buku.tambah',compact('buku','kategori'));
    }

    public function insertbuku(Request $request)
    {
        // return dd($request->all());
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
            'gambar' => 'required',
            'berat' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'isbn' => 'required',
            'penerbit' => 'required',
            'ebook' => 'required'
        ]);

        if($request->hasFile('ebook')){
            $file = $request->file('ebook');
            $filename = $file->getClientOriginalName();
            $name = Auth::guard('penjual')->user()->id.time().rand().'.'.$filename;
            $file->storeAs('file/buku/', $name, 'public');
            $data['file'] = 'file/buku/'.$name;
        }
        
        $data['status'] = "proses";
        $data['slug'] = Str::slug($request->name);
        $data['penjual_id'] = Auth::guard('penjual')->user()->id;
        $data['kategori_id'] = $request->kategori;
        
        $files = $request->file('gambar');
        $name = $data['penjual_id'].time().rand().'.'.$files->getClientOriginalName();
        $request->file('gambar')->storeAs('images/buku/',$name,'public');
        $data['thumbnail'] = 'images/buku/'.$name;
        

        $data['harga_awal'] = $request->harga;
        $harga = $request->diskon * $request->harga / 100 ;
        $data['harga_asli'] = $data['harga_awal'] -  $harga;
        $buku = new Buku;
        $buku->create($data);
        return redirect(route('penjual.listbuku'));
    }

    public function editbuku(Buku $buku)
    {
        $kategori = Kategori::get();
        return view('penjual.buku.edit',compact('buku','kategori'));
    }

    public function updatebuku(Buku $buku,Request $request)
    {
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
            'berat' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'isbn' => 'required',
            'penerbit' => 'required',
        ]);
        
        if($request->hasFile('ebook')){
            $file = $request->file('ebook');
            $filename = $file->getClientOriginalName();
            $name = Auth::guard('penjual')->user()->id.time().rand().'.'.$filename;
            $file->storeAs('file/buku/', $name, 'public');
            Storage::delete($buku->ebook);
            $data['file'] = 'file/buku/'.$name;
        }else{
            $data['file'] = $buku->file;
        }
        if($request->file('gambar')){
            Storage::delete($buku->thumbnail);
            $thumbnailUrl = $request->file('gambar')->store('images/buku'); 
        }else{
            $thumbnailUrl = $buku->thumbnail;
        }
        $data['status'] = $buku->status;
        $data['slug'] = Str::slug($request->name);
        $data['thumbnail'] = $thumbnailUrl;
        $data['harga_awal'] = $request->harga;
        $harga = $request->diskon * $request->harga / 100 ;
        $data['harga_asli'] = $data['harga_awal'] -  $harga;
        $buku->update($data);
        return redirect(route('penjual.listbuku'));
    }

    public function deletebuku(Buku $buku){
        Storage::delete($buku->thumbnail);
        $buku->delete();
        return redirect(route('penjual.listbuku'));
    }

    public function listbuy()
    {
        $buy = Buy::where('penjual_id',Auth::guard('penjual')->user()->id)->get();
        return view('penjual.buku.listbuy',compact('buy'));
    }

    public function konfirmasi(Buy $buy){
        $buy->buku->userakses()->attach($buy->user->id);
        $buy->update([
            'status' => 'konfirmasi'
        ]);
        return redirect(route('penjual.listbuy'));
    }

    public function unkonfirmasi(Buy $buy)
    {
        $buy->buku->userakses()->detach($buy->user->id);
        $buy->update([
            'status' => 'proses'
        ]);
        return redirect(route('penjual.listbuy'));
    }
}
