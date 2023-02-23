<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function FormLoginMasyarakat()
    {
        return view('auth.login');
    }

    public function LoginMasyarakat()
    {
        //variable akan mengambil data, lalu jika data cocok maka

        $auth = request()->only('username','password');
        if(Auth()->guard('masyarakat')->attempt($auth))
        {
            return redirect()->to('/');
        }
    }
}
