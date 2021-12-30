<?php

namespace App\Http\Controllers\Penjual;
use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Buy;
use App\Models\Kategori;
use App\Models\Metode;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PenjualAppController extends Controller
{
    public function index()
    {
        $bukuaccept = Buku::where('status','terima')->where('penjual_id',Auth::guard('penjual')->user()->id)->get();
        return view('penjual.dashboard',compact('bukuaccept'));
    }
    public function listbuku()
    {
        $buku = Buku::where('penjual_id',Auth::guard('penjual')->user()->id)->paginate(5);
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
            'gambar' => 'required',
            'berat' => 'required',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'isbn' => 'required|numeric',
            'penerbit' => 'required',
            'ebook' => 'required'
        ]);
        $data['bahasa'] = 'indonesia';
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
            'berat' => 'required|numeric',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
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

    public function listmetode()
    {
        $metode = Metode::where('penjual_id',Auth::guard('penjual')->user()->id)->get();
        return view('penjual.metode.listmetode',compact('metode'));
    }

    public function tambahMetode(Request $request)
    {
        $wallet = new Metode;
        $wallet->create([
            'penjual_id' => Auth::guard('penjual')->user()->id,
            'wallet' => $request->wallet,
            'number' => $request->number
        ]);
        return back();
    }

    public function updateMetode(Metode $metode,Request $request)
    {
        $metode->update([
            'number' => $request->number
        ]);
        return back();
    }

    public function deleteMetode(Metode $metode)
    {
        $metode->delete();
        return back();
    }

    public function profil()
    {
        return view('penjual.profil');
    }

    public function profilUpdate(Request $request, Penjual $penjual)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:penjuals',
            'whatsapp' => 'required'
        ]);
        $penjual->update($request->all());
        return back();
    }

    public function changePassword(Request $request, Penjual $penjual)
    {
        $request->validate([
            'new_password' => 'required',
            'password_confirmation' => 'required'
        ],[
            'new_password.required' => 'Masukkan Password Baru!',
            'password_confirmation.required' => 'Masukkan Konfirmasi Password !'
        ]);
        
        if($request->new_password == $request->password_confirmation){
            $penjual->update([
                'password' => Hash::make($request->new_password)
            ]);
            return ;
        }else{
            session()->flash('error','Password tidak sesuai!');
            return redirect(route('penjual.profil'));
        }
    }
}
