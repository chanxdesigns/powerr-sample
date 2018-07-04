@extends('layouts.app')

@section('content')

    <div class="bg-dim">
        <div class="container">
            <form method="post" action="{{url('do/login')}}" class="login-form">
                @csrf
                <h3 class="text-center">Login now</h3>

                @if(session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="seperator">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <p class="mt-3">Not registered? <a href="{{url('register')}}">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>

    @endsection