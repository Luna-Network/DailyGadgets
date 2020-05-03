@extends('layouts.app')

@section('content')


    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="{{$imagesArray['0']}}" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Content-->
                    <div class="mb-3">
                        <a href="">
                            <span class="badge blue mr-1">{{$item['type']}}</span>
                        </a>
                    </div>
                    <h4 class="title">{{$item['title']}}</h4>
                    <div class="p-4">

                        @if(!empty($item['price']))
                            <p class="lead font-weight-bold">
                                <span>Price:</span>
                                <span class="lead">£{{$item['price']}}</span>
                            </p>
                        @endif
                        @if(!empty($item['brand']))
                        <p class="lead font-weight-bold">
                            <span>Brand:</span>
                            <span class="lead">{{$item['brand']}}</span>
                        </p>
                        @endif
                            @if(!empty($item['dimensions']))
                                <p class="lead font-weight-bold">
                                    <span>Dimensions:</span>
                                    <span class="lead">{{$item['dimensions']}}</span>
                                </p>
                            @endif
                            @if(!empty($item['processor']))
                                <p class="lead font-weight-bold">
                                    <span>Processor:</span>
                                    <span class="lead">{{$item['processor']}}</span>
                                </p>
                            @endif
                            @if(!empty($item['os']))
                                <p class="lead font-weight-bold">
                                    <span>OS:</span>
                                    <span class="lead">{{$item['os']}}</span>
                                </p>
                            @endif
                            @if(!empty($item['storage_capacity']))
                                <p class="lead font-weight-bold">
                                    <span>Storage capacity:</span>
                                    <span class="lead">{{$item['storage_capacity']}}</span>
                                </p>
                            @endif
                            @if(!empty($item['colour']))
                                <p class="lead font-weight-bold">
                                    <span>Color:</span>
                                    <span class="lead">{{$item['colour']}}</span>
                                </p>
                            @endif
                            @if(!empty($item['camera']))
                                <p class="lead font-weight-bold">
                                    <span>Camera:</span>
                                    <span class="lead">{{$item['camera']}}</span>
                                </p>
                            @endif




                            <div class="btn-inf">
                                <a href="{{ route('item.addToCart', ['id' => $item->id]) }}" type="button" style="width: 50%" class="btn btn-success waves-effect waves-light"><i class="fas fa-cart-plus" style="font-size: 26px" aria-hidden="true"></i></a>
                                <a href="{{ route('addToWish', ['id' => $item->id]) }}" type="button" style="width: 50%" class="btn btn-danger waves-effect waves-light"><i class="fas fa-heart" style="font-size: 26px" aria-hidden="true"></i></a>
                            </div>

                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr>

            <!--Grid row-->
            <div class="row d-flex justify-content-center wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 text-center">

                    <h4 class="my-4 h4">Additional information</h4>

                    <p>{{$item['description']}}</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn" style="margin-top: 100px; margin-bottom: 50px">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <img src="{{$imagesArray['0']}}" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <img src="{{$imagesArray['1']}}" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <img src="{{$imagesArray['2']}}" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();

    </script>
    @endsection
