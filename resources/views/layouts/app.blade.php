<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{asset('/mdb/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/mdb/css/mdb.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/index.css')}}">
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{-- <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
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
    <body class="antialiased body px-5">
 
        <nav class="navbar navbar-expand-sm shadow-none">
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
                                {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link font-weight-bold text-blue">Register</a>
                                </li>
                                @endif --}}
                            @endauth
                     @endif 
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
 
    </body>
</html>
 
