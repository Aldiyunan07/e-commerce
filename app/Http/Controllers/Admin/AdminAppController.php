<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAppController extends Controller
{
    public function listpenjual()
    {
        $penjual = Penjual::get();
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
}
