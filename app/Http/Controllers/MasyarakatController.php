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
        return redirect()->to('/');
        // $message = [
        //     'unique' => 'Nik sudah terdata',
        //     'required' => 'Tidak boleh kosong',
        // ];

        // $this->validate($request,[
        //     'tgl_pengaduan' => 'required',
        //     'masyarakat_nik' => 'required|unique:masyarakat,masyarakat_nik',
        //     'isi_laporan' => 'required',
        //     'foto' => 'required',
        //     '=satatus' => 'required',
        // ], $message);

        // $data_pengaduan = Pengaduan::create([
        //     'tgl_pengaduan' => $request->tgl_pengaduan,
        //     'masyarakat_nik' => $request->masyarakat_nik,
        //     'isi_laporan' => $request->isi_laporan,
        //     'foto' => $request->foto,
        //     'status' => $request->status,
        // ]);  
    }

    public function laporanku(){
        $data_pengaduan = Auth()->guard('masyarakat')->user()->pengaduan;
        return view('laporanku', compact('data_pengaduan'));
    }
}
