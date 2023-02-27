@extends('layouts.app')

@section('content')
    @foreach($data_pengaduan as $pengaduan)
        {{$pengaduan->isi_laporan}}
    @endforeach
@endsection