<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penjual;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.books.table');
    }
    public function bookShow()
    {
        return view('admin.books.show');
    }
    public function bookCreate()
    {
        return view('admin.books.create');
    }
    public function bookUpdate()
    {
        return view('admin.books.update');
    }
    public function bookDelete()
    {
        return dd('delete');
    }

    // List Orders
    public function orders()
    {
        return view('admin.orders.table');
    }
    // List Categories
    public function categories()
    {
        return view('admin.categories.table');
    }
    // Profile
    public function profile()
    {
        return view('admin.profile');
    }
}
