@extends('layouts.base')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@stop

@section('content')

    <div class="justify-content-center">
        <div class="container-login">

            <div class="wrap-register pd-t-50 pd-b-90 pd-x-20">
                <form class="d-flex justify-content-between flex-wrap">
                    <h1 class="login-title pd-b-50 text-primary">Register</h1>

                    <div class="wrap-input m-bt-16 form-group">
                        <input type="email" class="form-control custom-input" placeholder="Email">
                    </div>
                    <div class="wrap-input m-bt-16 form-group">
                        <input type="text" class="form-control custom-input" placeholder="Full Name">
                    </div>
                    <div class="wrap-input m-bt-16 form-group">
                        <input type="text" class="form-control custom-input" placeholder="Phone Number">
                    </div>
                    <div class="wrap-input m-bt-16 form-group">
                        <input type="password" class="form-control custom-input" placeholder="Password">

                    </div>
                    <div class="wrap-input m-bt-16 form-group">
                        <input type="password" class="form-control custom-input" placeholder="Confirm Password">

                    </div>


                    <div class="w-100 d-flex flex-wrap m-t-17">
                        <button type="submit" class="btn btn-primary login-form-btn">Register</button>
                    </div>
                    <p class="w-100 text-center pt-3 login-text">Already registered?  <a href="/login">Sign In</a></p>

                </form>
            </div>
        </div>

    </div>
@stop