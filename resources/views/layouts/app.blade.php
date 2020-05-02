<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans Condensed' rel='stylesheet'>


    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">



    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://kit.fontawesome.com/db6f70a430.js" crossorigin="anonymous"></script>


</head>
<body>


<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark white scrolling-navbar">
        <a class="navbar-brand" href="#"><img class="logo" src="{{asset('imgs/logo.png')}}"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/shop">Shop <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">News</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <form action="/shop" method="POST" class="form-inline mr-auto search-bar">
                    @csrf
                    <input name="search" class="form-control mr-sm-2" type="text" placeholder="Looking for..." aria-label="Search">
                    <button class="btn btn-outline-danger btn-rounded btn-sm my-0" type="submit">Search</button>
                </form>
            </ul>
            <ul class="navbar-nav navbar-links">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('item.shoppingCart') }}">
                        E-cart ({{Session::has('cart') ? Session::get('cart') -> totalQty : ''}})
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Whish List</a>
                </li>
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <div class="dropdown">
                        <button class="dropdown-toggle nav-link" type="button" id="dropdownMenu6" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
                            <a class="dropdown-item" href="/account">{{ __('Details') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Your Orders') }}</a>
                            <a class="dropdown-item" href="#">{{ __('Admin') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </ul>
        </div>
    </nav>

</header>
<!--Main Navigation-->


    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>




<section class="footer">
    <div class="row">
        <p>
            <img src="{{asset('imgs/logo.PNG')}}">
        </p>

        <h6>
            Contact Developers
        <p>
            <a href="mailto:simonas@inspiringinterns.com">Simonas Simonavicius</a>, <a href="mailto:info@humancode.dev">Karolis Abramovicius</a>, <a href="mailto:markas.cherry@gmail.com">Markas Vysniauskas</a>, <a href="mailto:dovydaspukinskis@gmail.com">Dovydas Pukinskis</a>
            </h6>
        </p>
        <p>
            @Copyright all rights reserved by Daily Gadgets LTD 2020
        </p>
    </div>
</section>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script src="{{asset('js/global.js')}}"></script>
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}



</body>
</html>
