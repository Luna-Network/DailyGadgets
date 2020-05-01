@extends('layouts.app')

@section('content')
<style> 
    span {
        color: #ff3547;
        font-weight: 500;
    }

    .greenc {
        color: #00c851;
    }

    .mgt {
        margin-top: 1em;
    }
</style>
    <div class="filter main" style="width: 100%; margin-top: 150px; padding-left: 30%;">

        <div class="filter-header">
            <div>
                <i class="las la-filter"></i>
            </div>
            <div>
                <h4 class="greenc">Filter</h4>
            </div>
            <div>
                <i id="filterArrow" class="las la-angle-right"></i>
            </div>
        </div>

        <form action="/shop" method="POST" id="filterForm">
            @csrf

<<<<<<< Updated upstream
            <input class="searchBar form-control mr-sm-2" type="text" placeholder="Search" name="search" style="max-width:40em;">

            <div>
                <div class="mgt">
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
                <div class="mgt">
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

            <div  class="mgt">
                <button type="submit" class="btn btn-outline-success btn-rounded btn-sm my-0 waves-effect waves-light">SEARCH</button>
            </div>
            <br/>
            <div class="" <?php if(isset($_POST['sectors']) || (isset($_POST['salary']) && $_POST['salary'] != '0') || (isset($_POST['jobType']) && $_POST['jobType'] != "any") || isset($_POST['industries'])) echo "style='display:flex;'"; ?>>
                <a href="/shop" class="btn btn-outline-success btn-rounded btn-sm my-0 waves-effect waves-light">SHOW ALL</a>
            </div>

        </form>
    </div>

    <div class = "results">
        @if($totalResults == 0)
            <div class="main centered">
                <h3>Sorry, no jobs found</h3>
            </div>
        @else
            <div class="main centered">
                <h5>Results found: {{ $totalResults }}</h5>
            </div>
        @endif
    </div>
<div class="main listings">
        @if(!is_null($items))
            @foreach($items[$page] as $item)
                @if(is_null($item))
                    @break
                @endif
                <div class = "card">
                    {{--SPONSORS HARD CODED--}}
                    <span class="sponsored">sponsored</span>
                    <img class="card-img-top" src="{{ substr($item->images, 0, strpos($item->images, ';')) }} "
                             alt="Card image cap">

                             <div class="icon">
                        <i class="fas fa-laptop"></i>
                        <p>{{ $item -> brand }}</p>
                    </div>
                    <h1 class="title">{{ $item -> title }}</h1>
                    <p class="desc">£{{ $item-> price }}</p>

                    

                    <div class="btn-inf">
                        <a href="http://127.0.0.1:8000/add-to-cart/1" type="button" style="width: 50%" class="btn btn-success waves-effect waves-light"><i class="fas fa-cart-plus" style="font-size: 26px" aria-hidden="true"></i></a>
                        <a href="#" type="button" style="width: 50%" class="btn btn-danger waves-effect waves-light"><i class="fas fa-heart" style="font-size: 26px" aria-hidden="true"></i></a>
                    </div>
                </div>
            @endforeach
        @endif
</div>



=======
>>>>>>> Stashed changes
@endsection
