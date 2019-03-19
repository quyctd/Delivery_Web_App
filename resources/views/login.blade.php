@extends('layouts.base')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop

@section('content')

    <div class="justify-content-center">
        <div class="container-login">

            <div class="wrap-login pd-t-50 pd-b-90 pd-x-20">
                <form class="d-flex justify-content-between flex-wrap">
                    <h1 class="login-title pd-b-50 text-primary">login</h1>

                    <div class="wrap-input m-bt-16 form-group">
                        <input type="email" class="form-control custom-input" placeholder="Email">
                    </div>
                    <div class="wrap-input m-bt-16 form-group">
                        <input type="password" class="form-control custom-input" placeholder="Password">

                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label label-checkbox" for="exampleCheck1">Remember me</label>
                    </div>

                    <div class="w-100 d-flex flex-wrap m-t-17">
                        <button type="submit" class="btn btn-primary login-form-btn">Submit</button>
                    </div>
                    <p class="w-100 text-center pt-3 register-text">Not registered? <a href="/register">Create an account</a></p>
                </form>
            </div>
        </div>

    </div>
@stop