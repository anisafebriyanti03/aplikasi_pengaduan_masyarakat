<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengkat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Masukkan Pengaduan
                </div>
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control">
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="masyarakat_nik" class="form-control" placeholder="Nama Pengadu ..">
 
                            @if($errors->has('masyarakat_nik'))
                                <div class="text-danger">
                                    {{ $errors->first('masyarakat_nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Laporan</label>
                            <textarea name="isi_laporan" class="form-control" placeholder="isi laporan .."></textarea>
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control">
 
                            @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>

<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-body">
                        <form action="/pengaduan/store" method="POST">
                            @csrf
                            <div class="card-header">
                                <h3 class="text-center">Laporkan Pengaduan</h3>
                            </div>

                            <div class="form-group">
                                <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                                <input type="date" name="tgl_penggaduan" class="form-control">
                                @if($errors->has('tgl_pengaduan'))
                                    <div class="text-danger">
                                        {{ $errors->first('tgl_pengaduan')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="masyarakat_nik">Masyarakat Nik</label>
                                <input type="text" name="masyarakat_nik" class="form-control">
                                @if($errors->has('masyarakat_nik'))
                                    <div class="text-danger">
                                        {{ $errors->first('masyarakat_nik')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="isi_laporan">Isi Laporan</label>
                                <textarea type="text" name="isi_laporan" class="form-control"></textarea>
                                @if($errors->has('isi_laporan'))
                                    <div class="text-danger">
                                        {{ $errors->first('isi_laporan')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" class="form-control">
                                @if($errors->has('foto'))
                                    <div class="text-danger">
                                        {{ $errors->first('foto')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <input type="radio" name="status" value="0"> 0
                                <input type="radio" name="status" value="proses"> Proses
                                <input type="radio" name="status" value="selesai"> Selesai

                                @if($errors->has('foto'))
                                    <div class="text-danger">
                                        {{ $errors->first('foto')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                               <button type="submit" class="btn btn-primary form-control">Laporkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->