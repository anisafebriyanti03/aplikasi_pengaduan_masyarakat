<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pegaduan Masyarakat</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include('components.navbar')
    @yield('content')

    <!-- script -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>