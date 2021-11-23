<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Buy;
use App\Models\Kategori;
use App\Models\Penjual;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminAppController extends Controller
{
    public function listpenjual()
    {
        $penjual = Penjual::paginate(25);
        return view('admin.penjual.table',compact('penjual'));
    }

    public function tambahpenjual()
    {
        $penjual = new Penjual();
        return view('admin.penjual.tambah',compact('penjual'));
    }

    public function insertpenjual(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:penjuals,email',
            'no_telp' => 'required|numeric'
        ]);
        $data = $request->all();
        $data['password'] = Hash::make('password'); 
        $penjual = new Penjual();
        $penjual->create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $data['password'],
            'no_telp' => $request->no_telp    
        ]);
        return redirect(route('admin.listpenjual'));
    }

    public function editpenjual(Penjual $penjual)
    {
        return view('admin.penjual.edit',compact('penjual'));
    }

    public function updatepenjual(Request $request, Penjual $penjual)
    {
        $penjual->update($request->all());
        return redirect(route('admin.listpenjual'));
    }

    public function deletepenjual(Penjual $penjual)
    {
        $penjual->delete();
        return redirect(route('admin.listpenjual'));
    }

    public function listuser()
    {
        $user = User::paginate(25);
        return view('admin.user.table',compact('user'));
    }

    public function deleteuser(User $user)
    {
        $user->delete();
        return redirect(route('admin.listuser'));
    }

    public function detailuser(User $user)
    {
        return view('admin.user.detail',compact('user'));
    }

    // List Books

    public function books()
    {
        $buku = Buku::get();
        return view('admin.books.table',compact('buku'));
    }
    public function bookShow(Buku $buku)
    {
        return view('admin.books.show',compact('buku'));
    }
    public function bookCreate()
    {
        $buku = new Buku;
        $kategori = Kategori::get();
        return view('admin.books.create',compact('buku','kategori'));
    }

    public function bookInsert()
    {
        # code...
    }
    public function bookedit(Buku $buku)
    {
        $kategori = Kategori::get();
        return view('admin.books.update',compact('buku','kategori'));
    }

    public function bookUpdate(Buku $buku,Request $request)
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
            $name = time().rand().'.'.$filename;
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
        return redirect(route('admin.books'));
    }
    public function bookDelete(Buku $buku)
    {
        Storage::delete($buku->thumbnail);
        Storage::delete($buku->file);
        $buku->delete();
        return back();
    }

    public function bookTolak(Buku $buku)
    {
        $buku->update([
            'status' => 'tolak'
        ]);

        return back();
    }

    public function bookTerima(Buku $buku)
    {
        $buku->update([
            'status' => 'terima'
        ]);

        return back();
    }

    // List Orders
    public function orders()
    {
        $buy = Buy::get();
        return view('admin.orders.table',compact('buy'));
    }

    public function orderskonfirmasi(Buy $buy)
    {
        $buy->buku->userakses()->attach($buy->user->id);
        $buy->update([
            'status' => 'konfirmasi'
        ]);

        return back();
    }

    public function orderscancel(Buy $buy)
    {
        $buy->buku->userakses()->detach($buy->user->id);
        $buy->update([
            'status' => 'proses'
        ]);

        return back();
    }

    public function orderDelete(Buy $buy)
    {
        if($buy->status == "konfirmasi"){
            $buy->buku->userakses()->detach($buy->user->id);
        }
        $buy->delete();
        return back();
    }

    // List Categories
    public function categories()
    {
        $kategori = Kategori::get();
        return view('admin.categories.table',compact('kategori'));
    }

    public function editcategories(Request $request,Kategori $kategori)
    {
        $kategori->update($request->all());
        return back();
    }

    public function deletecategories(Kategori $kategori)
    {
        $kategori->delete();
        return back();
    }

    public function insertcategories(Request $request, Kategori $kategori)
    {
        $kategori = new Kategori;
        $kategori->create($request->all());
        return back();
    }
    // Profile
    public function profile()
    {
        return view('admin.profile');
    }
}
