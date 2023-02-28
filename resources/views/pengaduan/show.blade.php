<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <!-- <h5 class="card-title">Card title</h5> -->
        <h6 class="card-subtitle mb-2 text-muted">Tanggal Pengaduan</h6>
        <p class="card-text">
            @foreach($$pengaduan as $p)
                {{$p->tgl_pengaduan}}
            @endforeach
        </p>
    </div>
    </div>
</body>
</html>