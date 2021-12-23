<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Models\Progress;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function index()
    {
        return view('penerbit.index');
    }

    public function formPenerbit()
    {
        return view('penerbit.form');
    }

    public function submitPenerbit(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'nama' => 'required',
            'whatsapp' => 'required|numeric',
            'email' => 'required|email',
            'usia' => 'required',
            'jk' => 'required',
            'institusi' => 'required',
            'job' => 'required',
            'kode_pos' => 'required|numeric',
            'jasa' => 'required',
            'ukuran' => 'required',
            'judul_buku' => 'required',
            'file' => 'required|mimes:pdf',
            'jumlah_halaman' => 'required',
            'jumlah_cetakan' => 'required'
        ]);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $name = time().rand().'.'.$filename;
            $file->storeAs('filePenerbit/buku/', $name, 'public');
            $data['ebook'] = 'filePenerbit/buku/'.$name;
        }
        $data['no_hp'] = $request->whatsapp;
        if($request->job == "lainnya"){
            $request->validate([
                'lainnya' => 'required'
            ]);
            $data['pekerjaan'] = $request->lainnya;
        }else{
            $data['pekerjaan'] = $request->job;
        }

        $penerbit = new Penerbit;
        $save = $penerbit->create($data)->id;
        $progress = new Progress();
        $progress->create([
            'penerbit_id' => $save
        ]);

        return view('penerbit.thanks');

    }

    public function pageProgress()
    {
        return view('penerbit.pageProgress');
    }

    public function searchProgress(Request $request,Penerbit $penerbit)
    {
        $progress = Progress::where('penerbit_id',$request->cari)->get();
        $listpenerbit = Penerbit::get();
        return view('penerbit.searchPenerbit',compact('listpenerbit','progress'));   
    }
}
