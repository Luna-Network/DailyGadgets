<html>
    <head>
        <title>
            Daily Gadgets
        </title>
        <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans Condensed' rel='stylesheet'>
        <link rel="stylesheet" href="css/main.css" type="text/css">
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
                E-cart
            </li>
            <li class="option">
                Wish list
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
                    <a href="{{ url('/') }}">
                        <img src="./imgs/logo.png">
                    </a>
                </div>
            </div>


            <div class="row">
            <div class="side">
                <div class="header-button" onclick="header_menu()">
                    Filters
                </div>

                <div class="dropdown">
                    Category

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
                <div class="header-button" onclick="account_menu()">
                    Account
                </div>

                <div class="header-button">
                    E-cart
                </div>

                <div class="header-button">
                    Wish list
                </div>
            </div>
            </div>
        </section>

        <!-- SLIDE OUT MENUS -->
        <ul id="header-menu">
            <form type="submit" action="#" id="filters">
                <li class="option close" onclick="header_menu()">
                    <img src="imgs/arrow-left.png">
                </li>
                <li class="option">
                    Price <input type="number" placeholder="£">
                </li>
                <li class="option">
                    Brand
                    <select name="brand">
                        <option name="all" default>
                            All Brands
                        </option>
                        <option name="apple">
                            Apple
                        </option>
                        <option name="samsung">
                            Samsung
                        </option>
                    </select>
                </li>
                <li class="option">
                    Screen Size
                    <select name="size">
                        <option name="all" default>
                            All Sizes
                        </option>
                        <option name="13">
                            13 Inch
                        </option>
                        <option name="15">
                            15 Inch
                        </option>
                        <option name="17">
                            17 Inch
                        </option>
                    </select>
                </li>
                <li class="option">
                    Condition
                    <select name="condition">
                        <option name="all" default>
                            All Conditions
                        </option>
                        <option name="new">
                            Brand New
                        </option>
                        <option name="used">
                            Used
                        </option>
                        <option name="parts">
                            Parts Only
                        </option>
                    </select>
                </li>
                <li class="option">
                    <input type="submit" value="SEARCH">
                </li>
            </form>
        </ul>

        <ul id="account-menu" >
            <li class="option close" onclick="account_menu()" style="left: 0; right: unset;">
                <img src="imgs/arrow-left.png" style="transform: rotate(0deg)">
            </li>
            <li class="option">
                Acount details
            </li>
        </ul>


        <!-- Advert line  -->
        <section class="advert">
        </section>


        <section class="main">
            <div class="section-title">
                <div class="half-under">
                    LISTINGS PAGE
                </div>
            </div>
            <div class="row">
                <div class="s1">
                    <div class="showcase-item">
                        <img src="imgs/phone1.JPG">
                        <div class="bottom-text">
                            <div>
                                iPhone X 64gb
                            </div>
                            <div>
                                £320
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="row">
                                <div class="side">
                                    Brand
                                </div>
                                <div class="side">
                                    Apple
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Model
                                </div>
                                <div class="side">
                                    iPhone X
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Price
                                </div>
                                <div class="side">
                                    £320
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Size
                                </div>
                                <div class="side">
                                    9.2 Inch
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Color
                                </div>
                                <div class="side">
                                    Space Grey
                                </div>
                            </div>
                            <div class="view-item">
                                <form type="submit" id="details-button" action="#">
                                    <input type="text" name="id" value="PHP GOES HERE" hidden>
                                    <input type="submit" value="More Details">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s1">
                    <div class="showcase-item">
                        <img src="imgs/phone2.JPG">
                        <div class="bottom-text">
                            <div>
                                iPhone SE 32GB
                            </div>
                            <div>
                                £129
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="row">
                                <div class="side">
                                    Brand
                                </div>
                                <div class="side">
                                    Apple
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Model
                                </div>
                                <div class="side">
                                    iPhone SE
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Price
                                </div>
                                <div class="side">
                                    £129
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Size
                                </div>
                                <div class="side">
                                    6.9 Inch
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Color
                                </div>
                                <div class="side">
                                    Gold
                                </div>
                            </div>
                            <div class="view-item">
                                <form type="submit" id="details-button" action="#">
                                    <input type="text" name="id" value="PHP GOES HERE" hidden>
                                    <input type="submit" value="More Details">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s1">
                    <div class="showcase-item">
                        <img src="imgs/phone3.JPG">
                        <div class="bottom-text">
                            <div>
                                Macbook Pro
                            </div>
                            <div>
                                £229
                            </div>
                        </div>
                        <div class="overlay">
                            <div class="row">
                                <div class="side">
                                    Brand
                                </div>
                                <div class="side">
                                    Apple
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Model
                                </div>
                                <div class="side">
                                    Macbook Pro
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Price
                                </div>
                                <div class="side">
                                    £229
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Size
                                </div>
                                <div class="side">
                                    13 Inch
                                </div>
                            </div>
                            <div class="row">
                                <div class="side">
                                    Color
                                </div>
                                <div class="side">
                                    Silver
                                </div>
                            </div>
                            <div class="view-item">
                                <form type="submit" id="details-button" action="#">
                                    <input type="text" name="id" value="PHP GOES HERE" hidden>
                                    <input type="submit" value="More Details">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section class="footer">
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

        <script src="js/global.js"></script>
    </body>
</html>
