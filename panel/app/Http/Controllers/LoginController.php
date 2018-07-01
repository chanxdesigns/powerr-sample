<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct(Request $request)
    {
        //$this->middleware('custom.auth');
//        if ($request->session()) {
//            return redirect('/home');
//        }
    }

    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $email = $request->input('email_id');
        $pass = $request->input('password');

        $user = User::where('email', $email)->first();

        if (Hash::check($pass, $user->password)) {
            $request->session()->put('email_id', $email);
            return redirect('/home');
        }
        else {
            return redirect('/login');
        }
    }
}
