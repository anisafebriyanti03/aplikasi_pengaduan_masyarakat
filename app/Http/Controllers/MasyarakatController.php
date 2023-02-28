<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pengaduan,Masyarakat,Tanggapan};

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function formPengaduan()
    {
        return view('form-pengaduan');
    }

    public function simpanPengaduan(){
        // $masyarakat = Masyarakat::all();
        $data_pengaduan = Pengaduan::create(request()->all());
        return redirect()->to('/pengaduan/index');
    }

    public function laporanku(){
        $data_pengaduan = Auth()->guard('masyarakat')->user()->pengaduan;
        return view('laporanku', compact('data_pengaduan'));
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    // 		'tgl_pengaduan' => 'required',
    // 		'masyarakat_nik' => 'required',
    //         'isi_laporan' => 'required',
    //         'foto' => 'required',
    //         'status' => 'required'
    // 	]);

    //     $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
    //     $request->foto->move(public_path('image'), $imgName);
 
    //     Pengaduan::create([
    // 		'tgl_pengaduan' => $request->tgl_pengaduan,
    // 		'masyarakat_nik' => $request->masyarakat_nik,
    //         'isi_laporan' => $request->isi_laporan,
    //         'foto' => $imgName,
    //         'status' => $request->status,
    // 	]);
 
    // 	return redirect('/laporanku');
    // }
}
