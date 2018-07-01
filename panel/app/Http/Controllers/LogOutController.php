<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function __construct()
    {
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/login');
    }

}
