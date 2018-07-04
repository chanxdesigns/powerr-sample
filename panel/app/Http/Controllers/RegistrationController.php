<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('custom.auth');
    }

    public function index() {
        return view('register');
    }

    public function register(Request $request) {

        $user = User::where('email', $request->input('email'))->get();

        if (!count($user)) {
            if ($request->input('password') !== $request->input('confpassword')) {
                return back()->with('status', 'Password do not match.');
            }

            $user = new User;
            $user->id = base64_encode(str_random(20));
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->age = $request->input('age');
            $user->gender = $request->input('gender');
            $user->education = $request->input('education');
            $user->income = $request->input('income');
            $user->city = $request->input('city');
            $user->province = $request->input('province');
            $user->country = $request->input('country');
            $user->marital = $request->input('marital');
            $user->employed = $request->input('employed') == 'yes';
            $user->notemp = $request->input('notemp');
            $user->industry = $request->input('industry');
            $user->workers = $request->input('workers');
            $user->comp_nature = $request->input('comp-nature');
            $user->credit_card = $request->input('credit-card') == 'yes';
            $user->e_pay = $request->input('e-pay');
            $user->child = $request->input('child') == 'yes';
            $user->car = $request->input('car') == 'yes';
            $user->travel = $request->input('travel') == 'yes';
            $user->run = $request->input('run') == 'yes';
            $user->save();

            $request->session()->put(['email' => $user->email, 'name' => $user->name]);

            return redirect('/home')->with('status', 'Successfully registered');
        }
        return back()->with('status', 'Failed to register, Email ID exists');
    }
}
