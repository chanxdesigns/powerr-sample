<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('custom.auth');
    }

    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $email = $request->input('email');
        $pass = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user) {
            if (Hash::check($pass, $user->password)) {
                $request->session()->put(['email' => $user->email, 'name' => $user->name]);
                return redirect('/home');
            }
        }

        return back()->with('status', 'Failed to log in');
    }
}
