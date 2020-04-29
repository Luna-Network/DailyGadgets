@extends('layouts.app')

@section('content')


{{--        MAIN CONTENT--}}






<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="slider carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        <li data-target="#carousel-example-1z" data-slide-to="4"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="./imgs/rmk3fixed.png"
                 alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="./imgs/rmk2fixed.png"
                 alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="./imgs/rmk1fixed.png"
                 alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./imgs/rmk4fixed.png"
                 alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./imgs/rmk5fixed.png"
                 alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<div class="section-header">
    <h2>FEATURED PHONES</h2>
</div>
<section class="featured">
        <div class="main index">

            <div class="cards">


                @foreach($mobiles as $mobile)

                <div class="card card-cascade narrower">
                    <div class="details"></div>
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ substr($mobile->images, 0, strpos($mobile->images, ';')) }} "
                             alt="Card image cap">
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> {{ $mobile->brand }}</h5>
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">{{ $mobile->title }}</h4>
                        <!-- Text -->
                        <div class="price">
                            <p class="price-text">£{{ $mobile->price }}</p>
                        </div>
                        <!-- Button -->
                        <div class="btn-inf">
                        <button type="button" style="width: 100%" class="btn btn-outline-info waves-effect">More details</button>
                        </div>
                        <div class="btn-inf">
                            <button type="button" style="width: 50%" class="btn btn-success"><i class="fas fa-cart-plus" style="font-size: 26px"></i></button>
                            <button type="button" style="width: 50%" class="btn btn-danger"><i class="fas fa-heart" style="font-size: 26px"></i></button>
                        </div>
                    </div>

                </div>

                @endforeach


            </div>
        </div>
</section>


<div class="section-header">
    <h2>FEATURED LAPTOPS</h2>
</div>
<section class="featured2">
    <div class="main index">

        <div class="cards">


{{--ONE CARD STARTS--}}

            @foreach($laptops as $laptop)

                <div class="card card-cascade narrower">
                    <div class="details"></div>
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ substr($laptop->images, 0, strpos($laptop->images, ';')) }} "
                             alt="Card image cap">
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> {{ $laptop->brand }}</h5>
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">{{ $laptop->title }}</h4>
                        <!-- Text -->
                        <div class="price">
                            <p class="price-text">£{{ $laptop->price }}</p>
                        </div>
                        <!-- Button -->
                        <div class="btn-inf">
                            <button type="button" style="width: 100%" class="btn btn-outline-info waves-effect">More details</button>
                        </div>
                        <div class="btn-inf">
                            <button type="button" style="width: 50%" class="btn btn-success"><i class="fas fa-cart-plus" style="font-size: 26px"></i></button>
                            <button type="button" style="width: 50%" class="btn btn-danger"><i class="fas fa-heart" style="font-size: 26px"></i></button>
                        </div>
                    </div>

                </div>

            @endforeach


{{--ONE CARD FINISHED--}}


        </div>
    </div>
</section>

<div class="section-header">
    <h2>FEATURED TVs</h2>
</div>
<section class="featured3">
    <div class="main index">

        <div class="cards">




            @foreach($tvs as $tv)

                <div class="card card-cascade narrower">
                    <div class="details"></div>
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ substr($tv->images, 0, strpos($tv->images, ';')) }} "
                             alt="Card image cap">
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Label -->
                        <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> {{ $tv->brand }}</h5>
                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">{{ $tv->title }}</h4>
                        <!-- Text -->
                        <div class="price">
                            <p class="price-text">£{{ $tv->price }}</p>
                        </div>
                        <!-- Button -->
                        <div class="btn-inf">
                            <button type="button" style="width: 100%" class="btn btn-outline-info waves-effect">More details</button>
                        </div>
                        <div class="btn-inf">
                            <button type="button" style="width: 50%" class="btn btn-success"><i class="fas fa-cart-plus" style="font-size: 26px"></i></button>
                            <button type="button" style="width: 50%" class="btn btn-danger"><i class="fas fa-heart" style="font-size: 26px"></i></button>
                        </div>
                    </div>

                </div>

            @endforeach



        </div>
    </div>
</section>
{{--        MAIN CONTENT END--}}



@endsection()
