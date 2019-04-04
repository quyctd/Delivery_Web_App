@extends('layouts.base')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@stop

@section('navbar')
    @include('layouts.header')
@stop

@section('content')

    {{--Carousel--}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="{{ asset('images/homepage/carousel1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="{{ asset('images/homepage/carousel2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="{{ asset('images/homepage/carousel3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{--section Major Service--}}
    @include("homepage.major_services")

@stop

@section('footer')
    @include('layouts.footer')
@stop
