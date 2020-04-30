@extends('layouts.app')

@section('content')

    <div class="filter" style="width: 100%; margin-top: 150px; padding-left: 30%;">

        <div class="filter-header">
            <div>
                <i class="las la-filter"></i>
            </div>
            <div>
                <h4>Filter</h4>
            </div>
            <div>
                <i id="filterArrow" class="las la-angle-right"></i>
            </div>
        </div>

        <form action="/shop" method="POST" id="filterForm">
            @csrf

            <input class="searchBar" type="text" placeholder="Search" name="search">

            <div>
                <div>
                    <span>Type of product</span>
                </div>
                <div>
                    <label class="solo">Any
                        <input type="radio" name="type" value="any" checked="checked">
                        <span class="radiomark"></span>
                    </label>
                    <label class="solo">Laptop
                        <input type="radio" name="type" value="laptop" <?php if(isset($_POST['type']) && $_POST['type'] == "laptop") echo "checked='checked'"; ?>/>
                        <span class="radiomark"></span>
                    </label>
                    <label class="solo">Mobile
                        <input type="radio" name="type" value="mobile" <?php if(isset($_POST['type']) && $_POST['type'] == "mobile") echo "checked='checked'"; ?>/>
                        <span class="radiomark"></span>
                    </label>
                    <label class="solo">TV
                        <input type="radio" name="type" value="TV" <?php if(isset($_POST['type']) && $_POST['type'] == "TV") echo "checked='checked'"; ?>/>
                        <span class="radiomark"></span>
                    </label>
                    <label class="solo">Headphones
                        <input type="radio" name="type" value="headphones" <?php if(isset($_POST['type']) && $_POST['type'] == "headphones") echo "checked='checked'"; ?>/>
                        <span class="radiomark"></span>
                    </label>
                    <label class="solo">Other
                        <input type="radio" name="type" value="other" <?php if(isset($_POST['type']) && $_POST['type'] == "other") echo "checked='checked'"; ?>/>
                        <span class="radiomark"></span>
                    </label>
                </div>
            </div>

            <div>
                <div>
                    <div>
                        <span>BRAND</span>
                    </div>
                    <div>
                        <label class="multiple">Apple
                            <input type="checkbox" name="brand[]" value="apple" <?php if(isset($_POST['brand']) && in_array('apple',$_POST['brand'])) echo "checked='checked'"; ?>/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="multiple">Samsung
                            <input type="checkbox" name="brand[]" value="samsung" <?php if(isset($_POST['brand']) && in_array('samsung',$_POST['brand'])) echo "checked='checked'"; ?>/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="multiple">Xioami
                            <input type="checkbox" name="brand[]" value="xioami" <?php if(isset($_POST['brand']) && in_array('xioami',$_POST['brand'])) echo "checked='checked'"; ?>/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="multiple">LG
                            <input type="checkbox" name="brand[]" value="LG" <?php if(isset($_POST['brand']) && in_array('LG',$_POST['brand'])) echo "checked='checked'"; ?>/>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                {{--                <div class="non-visible-wrapper">--}}
                {{--                    <div id="openSalary" class="section-grouper">--}}
                {{--                        <i id="open2" class="las la-angle-right <?php if(isset($_POST['salary']) && $_POST['salary'] != '0' )  echo "down"; ?>"></i>--}}
                {{--                        <span>Salary</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="section" id="salarySection" <?php if(isset($_POST['salary']) && $_POST['salary'] != '0' )  echo "style='display:block'"; ?>>--}}
                {{--                        <label class="solo">Any--}}
                {{--                            <input type="radio" name="salary" value="0" checked="checked"/>--}}
                {{--                            <span class="radiomark"></span>--}}
                {{--                        </label>--}}
                {{--                        <label class="solo">£17,000+--}}
                {{--                            <input type="radio" name="salary" value="17000" <?php if(isset($_POST['salary']) && $_POST['salary'] == "17000") echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="radiomark"></span>--}}
                {{--                        </label>--}}
                {{--                        <label class="solo">£23,000+--}}
                {{--                            <input type="radio" name="salary" value="23000" <?php if(isset($_POST['salary']) && $_POST['salary'] == "23000") echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="radiomark"></span>--}}
                {{--                        </label>--}}
                {{--                        <label class="solo">£50,000+--}}
                {{--                            <input type="radio" name="salary" value="50000" <?php if(isset($_POST['salary']) && $_POST['salary'] == "50000") echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="radiomark"></span>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}


                {{--                <div class="non-visible-wrapper">--}}
                {{--                    <div id="openIndustries" class="section-grouper">--}}
                {{--                        <i id="open4" class="las la-angle-right" <?php if(isset($_POST['industries']))  echo "down"; ?>></i>--}}
                {{--                        <span>Industries</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="section" id="industriesSection" <?php if(isset($_POST['industries']))  echo "style='display:block'"; ?>>--}}
                {{--                        <label class="multiple">Charity--}}
                {{--                            <input id="charity" type="checkbox" name="industries[]" value="%charity%" <?php if(isset($_POST['industries']) && in_array('%charity%',$_POST['industries'])) echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="checkmark"></span>--}}

                {{--                        </label>--}}
                {{--                        <label class="multiple">Media--}}
                {{--                            <input type="checkbox" name="industries[]" value="%media%" <?php if(isset($_POST['industries']) && in_array('%media%',$_POST['industries'])) echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="checkmark"></span>--}}
                {{--                        </label>--}}
                {{--                        <label class="multiple">Retail--}}
                {{--                            <input type="checkbox" name="industries[]" value="%retail%" <?php if(isset($_POST['industries']) && in_array('%retail%',$_POST['industries'])) echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="checkmark"></span>--}}
                {{--                        </label>--}}
                {{--                        <label class="multiple">Legal--}}
                {{--                            <input type="checkbox" name="industries[]" value="%legal%" <?php if(isset($_POST['industries']) && in_array('%legal%',$_POST['industries'])) echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="checkmark"></span>--}}
                {{--                        </label>--}}
                {{--                        <label class="multiple">Science--}}
                {{--                            <input type="checkbox" name="industries[]" value="%science%" <?php if(isset($_POST['industries']) && in_array('%science%',$_POST['industries'])) echo "checked='checked'"; ?>/>--}}
                {{--                            <span class="checkmark"></span>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

            <div class="filter-btn">
                <button type="submit">SEARCH</button>
            </div>

            <div class="clear-btn" <?php if(isset($_POST['sectors']) || (isset($_POST['salary']) && $_POST['salary'] != '0') || (isset($_POST['jobType']) && $_POST['jobType'] != "any") || isset($_POST['industries'])) echo "style='display:flex;'"; ?>>
                <a href="/shop">SHOW ALL</a>
            </div>

        </form>
    </div>

    <section class="featured">
        <div class="main index">

            <div class="cards">


                @foreach($items as $item)

                    <div class="card card-cascade narrower">
                        <div class="details"></div>
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="{{ substr($item->images, 0, strpos($item->images, ';')) }} "
                                 alt="Card image cap">
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> {{ $item->brand }}</h5>
                            <!-- Title -->
                            <h4 class="font-weight-bold card-title">{{ $item->title }}</h4>
                            <!-- Text -->
                            <div class="price">
                                <p class="price-text">£{{ $item->price }}</p>
                            </div>
                            <!-- Button -->
                            <div class="btn-inf">
                                <button type="button" style="width: 100%" class="btn btn-outline-info waves-effect">More details</button>
                            </div>
                            <div class="btn-inf">
                                <a href="{{ route('item.addToCart', ['id' => $item->id]) }}" type="button" style="width: 50%" class="btn btn-success"><i class="fas fa-cart-plus" style="font-size: 26px"></i></a>
                                <a href="#" type="button" style="width: 50%" class="btn btn-danger"><i class="fas fa-heart" style="font-size: 26px"></i></a>
                            </div>
                        </div>

                    </div>

                @endforeach


            </div>
        </div>
    </section>


    {{ $items->appends(request()->except('page'))->links() }}


@endsection
