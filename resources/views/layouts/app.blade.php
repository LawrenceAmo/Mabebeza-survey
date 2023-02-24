<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}} 
        {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('/mdb/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/mdb/css/mdb.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/index.css')}}">
 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Libre+Franklin:wght@300&family=Raleway:wght@500;900&display=swap" rel="stylesheet">
 
        <style>
            p span {
            display: block;
            }
            span{
                padding: 0px !important;
                margin: 0px !important;
            }
        </style>
    </head>
    <body class="antialiased body  ">
 
        {{-- <nav class="navbar navbar-expand-sm shadow-none">
            <a class="navbar-brand" href="/"><img src="{{ asset('/logo.png') }}"  style="width: 100px;" class=" m-0 ml-3" alt=""></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">                    

                    @if (Route::has('login'))
                             @auth
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link active font-weight-bold text-blue">Home</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link font-weight-bold text-blue ">Log in</a>
                            </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link font-weight-bold text-blue">Register</a>
                                </li>
                                @endif
                            @endauth
                     @endif 
                </ul>
            </div>
        </nav> --}}
        <div class="d-flex justify-content-center pt-5">
            <img src="{{ asset('/images/BlueCircle.svg') }}" class="circle-blue" alt=""> 
            <a class="" href="/"><img src="{{ asset('/logo.png') }}"  style="width: 100px;z-index:10;" class=" m-0 ml-3" alt=""></a>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="  w-100 p-2 footer" style="">
            <p class="text-white text-center">
                Safe & secure shopping with many ways to pay. Free delivery and returns
            </p>
        </div>
 
    </body>
</html>
 
