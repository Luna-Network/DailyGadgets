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
                    <label class="solo">PC
                        <input type="radio" name="type" value="pc" <?php if(isset($_POST['type']) && $_POST['type'] == "pc") echo "checked='checked'"; ?>/>
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
            </div>

            <div class="filter-btn">
                <button type="submit">SEARCH</button>
            </div>

            <div class="clear-btn" <?php if(isset($_POST['sectors']) || (isset($_POST['salary']) && $_POST['salary'] != '0') || (isset($_POST['jobType']) && $_POST['jobType'] != "any") || isset($_POST['industries'])) echo "style='display:flex;'"; ?>>
                <a href="/shop">SHOW ALL</a>
            </div>

        </form>
    </div>

    <div class = "results">
        @if($totalResults == 0)
            <h3>Sorry, no jobs found</h3>
        @else
            <h5>Results found: {{ $totalResults }}</h5>
        @endif
    </div>

        @if(!is_null($items))
            @foreach($items[$page] as $item)
                @if(is_null($item))
                    @break
                @endif
                <div class = "card">
                    {{--SPONSORS HARD CODED--}}
                    <span class="sponsored">sponsored</span>
                    <h1>{{ $item -> title }}</h1>
                    <p class="desc">{{ $item->brand }}</p>

                    <div class="icon">
                        <i class="fas fa-laptop"></i>
                        <p>{{ $item -> price }}</p>
                    </div>

                    <div class="apply-btn">
                        <button>ADD TO CART</button>
                    </div>
                </div>
            @endforeach
        @endif




@endsection
