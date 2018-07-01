@extends('layouts.app')

@section('content')

    <div class="bg-dim">
        <div class="container">
            <form method="post" action="{{url('do/login')}}" class="login-form">
                @csrf
                <h3 class="text-center">Login now</h3>

                <div class="seperator">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email_id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <p class="mt-3">Not registered? <a href="{{url('sign-up')}}">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>

    @endsection