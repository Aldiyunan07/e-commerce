<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Alasan;
use App\Models\Buku;
use App\Models\Buy;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penjual;
use App\Models\Progress;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminAppController extends Controller
{

    public function dashboard()
    {
        $user = User::get();
        $buy = Buy::where('status','proses')->get();
        $buku = Buku::where('status','terima')->get();
        $penjual = Penjual::get();
        return view('admin.dashboard',compact('user','buy','buku','penjual'));
    }

    public function listpenjual()
    {
        $penjual = Penjual::paginate(5);
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
        $user = User::paginate(5);
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
        $buku = Buku::paginate(5);
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
        $buy = Buy::paginate(5);
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

    public function listPenerbit()
    {
        $penerbit = Penerbit::orderBy('created_at','asc')->paginate(5);
        return view('admin.penerbit.index',compact('penerbit'));
    }

    public function detailPenerbit(Penerbit $penerbit)
    {
        return view('admin.penerbit.detail',compact('penerbit'));
    }

    public function progressbuku()
    {
        $progress = Progress::whereHas('penerbit', function($qry){
            $qry->where('status','terima');
        })->orderBy('created_at','desc')->paginate(5);
        return view('admin.penerbit.listprogress',compact('progress'));

    }

    public function editProgress(Progress $progress)
    {
        return view('admin.penerbit.edit',compact('progress'));
    }

    public function updateProgress(Progress $progress,Request $request)
    {
        $data = $request->all();
        
        $request->validate([
            'gambar' => 'mimes:png,jpg,jpeg'
        ]);

        if($request->hasFile('gambar')){
            if($progress->laporan !== null){
                Storage::delete($progress->laporan);
            }
            $data['laporan'] = $request->file('gambar')->store('images/laporan'); 
        }
        $progress->update($data);
        return back();
    }

    public function showBukuPenerbit(Penerbit $penerbit)
    {
        return view('admin.penerbit.show',compact('penerbit'));
    }

    public function profilUpdate(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $admin->update($request->all());
        return back();
    }

    public function changePassword(Request $request, Admin $admin)
    {
        $request->validate([
            'new_password' => 'required',
            'password_confirmation' => 'required'
        ],[
            'new_password.required' => 'Masukkan Password Baru!',
            'password_confirmation.required' => 'Masukkan Konfirmasi Password !'
        ]);
        
        if($request->new_password == $request->password_confirmation){
            $admin->update([
                'password' => Hash::make($request->new_password)
            ]);
            return ;
        }else{
            session()->flash('error','Password tidak sesuai!');
            return redirect(route('admin.profile'));
        }
    }

    public function acceptPenerbit(Penerbit $penerbit)
    {
        if($penerbit->status == "tolak"){
            $penerbit->alasan->delete();
        }
        $penerbit->status = "terima";
        $penerbit->save();
        return back();
    }

    public function declinedPenerbit(Penerbit $penerbit, Request $request)
    {
        $alasan = Alasan::create([
            'penerbit_id' => $penerbit->id,
            'alasan' => $request->alasan
        ]); 
        $penerbit->status = "tolak";
        $penerbit->save();
        return back();
    }
}
