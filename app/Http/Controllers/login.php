<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function pelajar()
    {
        return view('login_pelajar');
    }

    public function pengajar()
    {
        return view('login_pengajar');
    }


}
