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

    .filter {
        width: 100%;
        padding-top: 10%;
        padding-left: 20%;
    }

    .pagination {
        height: 48px;
        display: flex;
        justify-content: center;
        font-size: 20px;
        margin-top: 10px;
    }

    .pagination button {
        color: hotpink;
        text-decoration: none;
        margin-left: 5px;
        margin-right: 5px;
        padding: 5px 5px 0 5px;
        transition: 250ms;
        background-color: #ffffff;
        border: 0;
        outline: none;
    }

    .pagination button:focus {
        outline: none;
    }

    .pagination button:hover {
        color: #783c4e;
        text-decoration: none;
        padding: 5px;
        transition: 250ms;
        border-bottom: rgba(46, 156, 250, 0.77) solid 2px;
    }

    .current-page button {
        pointer-events: none;
        cursor: default;
        padding: 5px 5px 0 5px;
        color: #783c4e;
        border-bottom: rgba(46, 156, 250, 0.77) solid 1px;
    }

</style>
    <div class="filter main">

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


            <input class="searchBar form-control mr-sm-2" type="text" placeholder="Search" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">

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
                            <input type="checkbox" name="brand[]" value="Xioami" <?php if(isset($_POST['brand']) && in_array('Xioami',$_POST['brand'])) echo "checked='checked'"; ?>/>
                            <span class="checkmark"></span>
                        </label>
                        <label class="multiple">LG
                            <input type="checkbox" name="brand[]" value="LG" <?php if(isset($_POST['brand']) && in_array('LG',$_POST['brand'])) echo "checked='checked'"; ?>/>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div>
                <div class="mgt">
                    <div>
                        <span>MAX PRICE</span>
                    </div>
                    <div>
                        <label class="solo">
                            <input type="text" name="price" placeholder="Max price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : '' ?>" />
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
                        <a href="{{ route('item.addToCart', ['id' => $item->id]) }}" type="button" style="width: 50%" class="btn btn-success waves-effect waves-light"><i class="fas fa-cart-plus" style="font-size: 26px" aria-hidden="true"></i></a>
                        <a href="#" type="button" style="width: 50%" class="btn btn-danger waves-effect waves-light"><i class="fas fa-heart" style="font-size: 26px" aria-hidden="true"></i></a>
                    </div>
                </div>
            @endforeach
        @endif
</div>

@if(!is_null($items))

    <div class="pagination">
        {{--    if current page is first page   --}}
        @if($page == 0)
            <div class="current-page">
        @else
            <div>
                @endif
                {{--    always display link to first page   --}}
                <button form="filterForm" name="page" type="submit" value="{{ 0 }}">{{ 1 }}</button>
            </div>

            <div>
                {{--    if the page number is greater than 2, then display first page with "..."    --}}
                @if($page > 2)
                    <p>...</p>
                @endif
            </div>

            <div>
                {{--    display two pages backstep, unless it is first page--}}
                @if($page-2 > 0)
                    <button form="filterForm" name="page" type="submit" value="{{ $page - 2 }}">{{$page - 1 }}</button>
                @endif
            </div>

            <div>
                {{--    display one page backstep, unless it is first page--}}
                @if($page-1 > 0)
                    <button form="filterForm" name="page" type="submit" value="{{ $page-1 }}">{{ $page }}</button>
                @endif
            </div>

            {{--    display current page, unless it is first or last page        --}}


            <div class="current-page">
                @if($page+1 != count($items) && $page+1 != 1)
                    <button form="filterForm" name="page" type="submit" value="{{ $page }}">{{$page + 1 }}</button>
                @endif
            </div>

            {{--    display one page forward, unless it is more than last page        --}}
            <div>
                @if($page+1 < count($items)-1)
                    <button form="filterForm" name="page" type="submit" value="{{ $page+1 }}">{{$page + 2 }}</button>
                @endif
            </div>

            {{--    display two pages forward, unless it is more than last page        --}}
            <div>
                @if($page+2 < count($items)-1)
                    <button form="filterForm" name="page" type="submit" value="{{ $page+2 }}">{{$page + 3 }}</button>
                @endif
            </div>

            {{--    if the page number is greater than total pages - 2, then display last page without "..."    --}}
            <div>
                @if($page < count($items)-3)
                    <p>...</p>
                @endif
            </div>


            {{--    if current page is last page   --}}
            @if($page == count($items)-1)
                <div class="current-page">
            @else
                <div>
            @endif
            {{--    always display last page, unless it is the equal to first page        --}}
                @if(count($items) != 1)
                    <button form="filterForm" name="page" type="submit" value="{{count($items)-1}}">{{count($items)}}</button>
                @endif
                </div>
            </div>
        </div>
    </div>

@endif

@endsection
