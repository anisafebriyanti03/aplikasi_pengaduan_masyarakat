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
                    Pengaduan Masyarakat
                </div>
                <div class="card-body">
                    <a href="/pengaduan/create" class="btn btn-primary">Laporkan Masalah Anda</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal Pengaduan</th>
                                <th>NIK</th>
                                <th>Laporan</th>
                                <th>Foto</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->masyarakat_nik }}</td>
                                <td>{{ $p->isi_laporan }}</td>
                                <!-- <td><img src="{{ asset('image/'. $p->foto ) }}" height="50%" width="50%" alt=""></td> -->
                                <td><img src="{{ asset($p->foto) }}" height="50%" width="50%" alt=""></td>
                                <td>
                                    <a href="/pengaduan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pengaduan/show/{{ $p->id }}" class="btn btn-success">detail</a>
                                    <a href="/pengaduan/delete/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>