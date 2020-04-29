<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans Condensed' rel='stylesheet'>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />




    <!-- Styles -->
    <script src="https://kit.fontawesome.com/db6f70a430.js" crossorigin="anonymous"></script>

</head>
<body>


<!-- MOBILE NAVIGATION -->
                    <ul id="mobile-nav">

                        <!-- SEARCH BAR  -->
                        <form type="submit" action="#" class="search">
                            <input type="text" name="seachbar" class="searchbar" placeholder="looking for">
                            <input type="submit" value="search" class="searchgo">
                        </form>

                        <li class="option">
                            Shop
                        </li>
                        <li class="option">
                            Today's special
                        </li>
                        <li class="option">
                            Sales
                        </li>
                        <li class="option">
                            Account
                        </li>

                        <li class="option">
                            E-Cart
                        </li>
                        <li class="option">
                            Wish list
                        </li>
                        <li class="option">
                            Wish list
                        </li>
                    </ul>

                    <div id="top-bar">
                        <div id="logo">
                            <img src="{{asset('imgs/logo.png')}}">
                        </div>
                        <div class="menu" onclick="menu_toggle()">
                            <div class="hamburger"></div>
                            <div class="hamburger"></div>
                            <div class="hamburger"></div>
                        </div>
                    </div>


                    <!-- HEADER NAVIGATION -->
                    <section class="header-nav">
                        <!-- LEFT SIDE NAVIGATION -->
                        <div class="row">
                            <div id="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{asset('imgs/logo.png')}}">
                                </a>
                            </div>
                        </div>


                        <div class="row">
                            <div class="side">
                                <div class="header-button" onclick="header_menu()">
                                    Shop
                                </div>

                                <div class="dropdown">
                                    Today's special

                                    <div class="to-drop">
                                        <div class="drop-contain">  </div>
                                        <li>Computers</li>
                                        <li>Laptops</li>
                                        <li>Phones</li>
                                        <li>Tablets</li>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    Sales

                                    <div class="to-drop">
                                        <div class="drop-contain"></div>
                                        <li>Computers</li>
                                        <li>Laptops</li>
                                        <li>Phones</li>
                                        <li>Tablets</li>
                                    </div>
                                </div>
                            </div>

                            <!-- SEARCH BAR  -->
                            <div class="side">
                                <form class="form-inline mr-auto search-bar">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-danger btn-rounded btn-sm my-0" type="submit">Search</button>
                                </form>
                            </div>


                            <!-- RIGHT SIDE NAVIGATION -->
                            <div class="side">

                                <div class="header-button">
                                    <a href="{{ route('item.shoppingCart') }}">
                                        E-cart {{Session::has('cart') ? Session::get('cart') -> totalQty : ''}}
                                    </a>
                                </div>

                                <div class="header-button">
                                    <a href="#">Whish List</a>
                                </div>
                                @guest
                                    <div class="header-button">
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </div>
                                    @if (Route::has('register'))
                                        <div class="header-button">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </div>
                @endif
            @else
                <div class="header-button">
                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">{{ __('Details') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Your Orders') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Admin') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest

        </div>
    </div>
</section>

<!-- SLIDE OUT MENUS -->
<ul id="header-menu">
    <li class="option close" onclick="header_menu()">
        <img src="{{asset('imgs/arrow-left.png')}}">
    </li>
    <li class="option">
        Laptops
    </li>
    <li class="option">
        Computers
    </li>
    <li class="option">
        Tablets
    </li>
    <li class="option">
        Phones
    </li>
</ul>

<ul id="account-menu" >
    <li class="option close" onclick="account_menu()" style="left: 0; right: unset;">
        <img src="{{asset('imgs/arrow-left.png')}}" style="transform: rotate(0deg)">
    </li>
    <li class="option">
        Acount details
    </li>
</ul>

{{--        END NAVIGATION--}}



    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>




<section class="footer">
    <div class="row">
        <img src="{{asset('imgs/logo.PNG')}}">
    </div>
    <div class="row">
        <div class="clickable">

        </div>
    </div>
    <div class="row">
        <p><b>
                Developers:
        </p></b>
        <p>
            Front-End --> Karolis Abramovicius (Client), Dovydas Pukinskis (Admin)
        </p>
        <p>
            Back-End --> Simonas Stankevicius, Markas Visniauskas
        </p>
    </div>
    <div class="row">
        @Copyright all rights reserved by Daily Gadgets LTD 2020
    </div>
</section>

<script
    src="https://code.jquery.com/jquery-3.5.0.js"
    integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>

<script src="{{asset('js/global.js')}}"></script>



</body>
</html>
