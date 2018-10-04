@extends('layouts.app')

@section('menu-add-nav')
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if (Route::has('login'))
        <ul class="nav navbar-nav navbar-right">
            @auth
                <li class="hidden">
                    <a href="{{ url('/home') }}">Home</a>
                </li>
            @else
                <li class="page-scroll">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="page-scroll">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endauth        
        </ul>
    @endif
</div>    
@endsection

@section('header')
<header>
    <div class="container" id="maincontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="{{ asset('theme/front/img/profile.png') }}" alt="">
                <div class="intro-text">
                    <h1 class="name">Laravel</h1>
                    <hr class="star-light">
                    <span class="skills">Documentation - Laracasts - News - GitHub</span>
                </div>
            </div>
        </div>
    </div>
</header>   
@endsection

@section('content')
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
</section>
@endsection
