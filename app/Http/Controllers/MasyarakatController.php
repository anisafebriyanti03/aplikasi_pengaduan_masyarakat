<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
