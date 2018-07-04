<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $pplaceholder;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('custom.auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('email', session('email'))->first();


        if ($user->gender == 'male') {
            $this->pplaceholder = '002-boy-1.png';
        }
        else {
            $this->pplaceholder = '001-girl-1.png';
        }

        return view('home')->with([
            'user' => $user,
            'prof_pic' => $this->pplaceholder
        ]);
    }
}
