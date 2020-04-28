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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/app.css" type="text/css">

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
    <li class="option" onclick="account_menu(), show_reg(), show_login()">
        Account
    </li>
    <li class="option">
        <a href="ecart.html">E-cart</a>
    </li>
    <li class="option">
        <a href="wishlist.html" >Wish list</a>
    </li>
</ul>

<div id="top-bar">
    <div id="logo">
        <img src="./imgs/logo.png">
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
            <a href="./index.html">
                <img src="./imgs/logo.png">
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
            <form type="submit" action="#" class="search">
                <input type="text" name="seachbar" class="searchbar" placeholder="looking for">
                <input type="submit" value="search" class="searchgo">
            </form>
        </div>


        <!-- RIGHT SIDE NAVIGATION -->
        <div class="side">
            <div class="header-button" onclick="account_menu(), show_reg(), show_login()">
                Account
            </div>

            <div class="header-button">
                <a href="ecart.html">E-cart</a>
            </div>

            <div class="header-button">
                <a href="wishlist.html" >Wish list</a>
            </div>


        </div>
    </div>
</section>

<!-- SLIDE OUT MENUS -->
<ul id="header-menu">
    <li class="option close" onclick="header_menu()">
        <img src="imgs/arrow-left.png">
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
        <img src="imgs/arrow-left.png" style="transform: rotate(0deg)">
    </li>
    <li id="account">
        <form type="submit" action="#" id="login-form">
            <div class="form-title">Login Form</div>
            <input type="email" name="email" class="form-defaults input" placeholder="Email" required>
            <input type="password" name="password" class="form-defaults input" placeholder="Password" required>
            <input type="submit" value="LOGIN" class="form-defaults" id="login" onclick="login()">
            <div class="form-switcher" onclick="show_reg()">Don't have an account? Sign up!</div>
            <div id="wrongpass">Incorrect password or email</div>
        </form>
        <form type="submit" action="#" id="reg-form">
            <div class="form-title">Registration Form</div>
            <input type="text" name="name" class="form-defaults input" placeholder="Your Name" required>
            <input type="email" name="email" class="form-defaults input" placeholder="Email" required>
            <input type="email" name="email2" class="form-defaults input" placeholder="Confirm email" required>
            <input type="password" name="password1" class="form-defaults input" placeholder="Password" required>
            <input type="password" name="password2" class="form-defaults input" placeholder="Confirm password" required>
            <input type="submit" value="REGISTER" class="form-defaults" id="register">
            <div class="form-switcher" onclick="show_login()">Already have an account? Login!</div>
            <label class="cb-label">
                <input type="checkbox" checked="checked" name="newsletter" class="cb"> Subscribe to Newsletter
            </label>
        </form>
    </li>
    <li class="option acc-visible">
        Your Orders
    </li>
    <li class="option acc-visible">
        Your Account
    </li>
    <li class="option acc-visible">
        Log Out
    </li>
</ul>


<!-- NAVIGATION END -->





@yield('content')





{{--        FOOOTER--}}

<section class="footer">
    <div class="row">
        @Copyright all rights reserved by Daily Gadgets LTD 2020
    </div>
</section>

{{--        FOOTER END--}}

<script src="js/global.js"></script>
</body>
</html>
