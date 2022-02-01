<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'jk' => 'required',
            'institusi' => 'required',
            'job' => 'required',
            'kode_pos' => 'required|numeric',
            'jasa' => 'required',
            'judul_buku' => 'required',
            'jumlah_halaman' => 'required',
        ]);
        if($request->custom !== null){
            $data['ukuran'] = $request->custom;
        }elseif($request->custom == null && $request->size !== null){
            $data['ukuran'] = $request->size;
        }elseif($request->custom == null && $request->size == null){
            $request->validate([
                'size' => 'required'
            ]);
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

        return back()->with('success', 'success!');

    }

    public function pageProgress(Request $request,Penerbit $penerbit)
    {
        $progress = Progress::where('penerbit_id',$request->cari)->first();
        $penerbit = Penerbit::where('id',$request->cari )->first();
        $listpenerbit = Penerbit::get();
        return view('penerbit.pageProgress',compact('listpenerbit','progress','penerbit'));
    }

    public function searchProgress(Request $request,Penerbit $penerbit)
    {
        $progress = Progress::where('penerbit_id',$request->cari)->get();
        $listpenerbit = Penerbit::get();
        return view('penerbit.pageProgress',compact('listpenerbit','progress'));
    }

    public function downloadProgress(Progress $progress)
    {
        return Storage::download($progress->laporan);
    }
}
