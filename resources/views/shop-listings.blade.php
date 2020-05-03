@extends('layouts.app')

@section('content')
<style>
    body .main {
        min-height: 0; !important;
    }

    span {
        color: #ff3547;
        font-weight: 500;
    }

    .greenc {
        color: #00c851;
        text-align: center;

    }

    .searchBar{
        width: 20%;
        align-self: center;
    }

    .custom-select{
        width: 20%!important;
        align-self: center;
    }

    .brand-check{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding-top: 10px;
    }

    .brand-check .display-col:first-child{
        margin-right: 10px;
    }
    .brand-check .display-col:nth-child(2){
        margin-left: 10px;
    }

    .display-col{
        display: flex;
        flex-direction: column;
    }

    .brand-filter{
        text-align: center;
        align-self: center;
    }

    .price-max{
        text-align: center;
    }

    .filter {
        width: 80%;
        margin-top: 6%!important;
        background-color: #f2eeed;
        padding-bottom: 30px;
        padding-top: 30px;
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

    .multiple {
        display: block;
        position: relative;
        padding-left: 30px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .multiple input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 16px;
        width: 16px;
        border: 2px solid #d5d5d5;
        transition-duration: 200ms;
    }

    /* On mouse-over, add a grey background color */
    .multiple:hover input ~ .checkmark {
        background-color: rgba(0, 255, 112, 0.36);
        transition-duration: 100ms;
    }

    /* When the checkbox is checked, add a blue background */
    .multiple input:checked ~ .checkmark {
        background-color: #00c851;
        border: 0;
        height: 16px;
        width: 16px;
        transition-duration: 200ms;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .multiple input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .multiple .checkmark:after {
        left: 6px;
        top: 2px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .form-filter{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        position: relative;
    }

    .buttons{
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 20px;
    }


</style>
<div style="width: 100%; display: flex;justify-content: center">
    <div class="filter rounded mb-0">

        <form action="/shop" method="POST" id="filterForm">
            <h4 class="greenc">FILTER</h4>
            @csrf
            <div class="form-filter">

            <input class="searchBar form-control mr-sm-2" type="text" placeholder="Enter keyword" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">


            <select class="browser-default custom-select" name="type">
                <option selected="true" disabled="disabled">Select Category</option>
{{--                <option value="any" <?php if(isset($_POST['type']) && $_POST['type'] == "any") echo "selected"; ?>>Any</option>--}}
                <option value="laptop" <?php if(isset($_POST['type']) && $_POST['type'] == "laptop") echo "selected"; ?>>Laptop</option>
                <option value="pc" <?php if(isset($_POST['type']) && $_POST['type'] == "pc") echo "selected"; ?>>PC</option>
                <option value="mobile"<?php if(isset($_POST['type']) && $_POST['type'] == "mobile") echo "selected"; ?>>Mobile</option>
                <option value="tv" <?php if(isset($_POST['type']) && $_POST['type'] == "tv") echo "selected"; ?>>TV</option>
                <option value="headphones" <?php if(isset($_POST['type']) && $_POST['type'] == "headphones") echo "selected"; ?>>Headphones</option>
                <option value="other" <?php if(isset($_POST['type']) && $_POST['type'] == "other") echo "selected"; ?>>Other</option>
            </select>




                <div class="brand-filter">
                    <span>BRAND</span>
                    <div class="brand-check">

                        <div class="display-col">
                            <label class="multiple">Apple
                                <input type="checkbox" name="brand[]" value="apple" <?php if(isset($_POST['brand']) && in_array('apple',$_POST['brand'])) echo "checked='checked'"; ?>/>
                                <span class="checkmark"></span>
                            </label>
                            <label class="multiple">Samsung
                                <input type="checkbox" name="brand[]" value="samsung" <?php if(isset($_POST['brand']) && in_array('samsung',$_POST['brand'])) echo "checked='checked'"; ?>/>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="display-col">
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





            <div class="price-max">
                    <span>MAX PRICE</span>
                <div style="padding-top: 10px">
                    <label class="solo">
                        <input type="text" name="price" placeholder="£" value="<?php echo isset($_POST['price']) ? $_POST['price'] : '' ?>" />
                    </label>
                </div>
            </div>
            </div>
            <div class="buttons">
            <div class="search-button">
                <button type="submit" class="btn btn-outline-success btn-rounded btn-sm my-0 waves-effect waves-light">SEARCH</button>
            </div>


            <div class="show-all-btn" <?php if(isset($_POST['sectors']) || (isset($_POST['salary']) && $_POST['salary'] != '0') || (isset($_POST['jobType']) && $_POST['jobType'] != "any") || isset($_POST['industries'])) echo "style='display:flex;'"; ?>>
                <a href="/shop" class="btn btn-outline-danger btn-rounded btn-sm my-0 waves-effect waves-light">SHOW ALL</a>
            </div>
            </div>

        </form>
    </div>
</div>

    <div class = "results">
        @if($totalResults == 0)
            <div class="centered" style="margin-top: 40px; margin-bottom: 40px; text-align: center">
                <h3>Sorry, no products found</h3>
            </div>
        @else
            <div class="centered" style="margin-top: 40px; margin-bottom: 40px; text-align: center">
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
                        <a type="button" href="{{'/shop/' . $item->id}}" style="width: 100%" class="btn btn-outline-info waves-effect">More details</a>
                    </div>
                    <div class="btn-inf">
                        <a href="{{ route('item.addToCart', ['id' => $item->id]) }}" type="button" style="width: 50%" class="btn btn-success waves-effect waves-light"><i class="fas fa-cart-plus" style="font-size: 26px" aria-hidden="true"></i></a>
                        <a href="{{ route('addToWish', ['id' => $item->id]) }}" type="button" style="width: 50%" class="btn btn-danger waves-effect waves-light"><i class="fas fa-heart" style="font-size: 26px" aria-hidden="true"></i></a>
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
