<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengkat</title>
    </head>
    <body>
    <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card mt-3">
            <div class="card-header">
                    <div class="pull-left">
                      <strong><h5><center>Laporanku</center></h5></strong>
                    </div>
            </div>
                <div class="card-body">
                   <br/>
                        <form method="post" action="/pengaduan">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="nip" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->tgl_pengaduan }} 
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="id_jabatan" class="col-sm-2 col-form-label"> NIK</label>
                                <div class="col-sm-10">
                                 <b>:</b> {{ $pengaduan->nik }}  
                                </div>
                            </div>
                           
                            <div class="mb-3 row">
                              <label for="nik" class="col-sm-2 col-form-label">Laporan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->isi_laporan }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="nama" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->foto }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tmpt_lahir" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->status }}
                                </div>
                            </div>

                                <div class="col-sm-10 offset-sm-2 mb-2 mt-2">
                                  <a href="/pengaduan/index" class="btn btn-sm btn-success">Kembali</a>
                                </div>
                        </form>
                </div>
            </div>
          </div>
          </div>
        </div>
    </body>
</html>