@extends('layouts.app')

@section('content')

    <div class="spacing-top"></div>
    <div class="container">
        @if(count($items) > 0)
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>

                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($items as $item)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="{{ substr($item['images'], 0, strpos($item['images'], ';')) }}" width="100" height="100" alt="product image" class="img-responsive" /></div>
                                <div class="col-sm-10 product">
                                    <h4 class="nomargin">{{ $item['title'] }}</h4>
                                    <p>{{ \Illuminate\Support\Str::limit($item['description'], $limit = 100, $end = '...') }}</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">£{{ $item['price'] }}</td>
                        <td class="actions" data-th="">
                            <a href="{{ route('item.addToCart', ['id' => $item['id']]) }}" type="button" class="btn btn-success btn-md"><i class="fas fa-cart-plus"></i></a>
                            <a href="{{ route('removeFromWish', ['id' => $item['id']]) }}" type="button" class="btn btn-danger btn-md"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td><a href="{{ $lastURL ?? '/' }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                </tr>
                </tfoot>
            </table>
        @else
            <div style="width: 100%">
                <h1 style="text-align: center">Your wish list is empty!</h1>
                <td><a href="{{ $lastURL ?? '/' }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a></td>
            </div>
        @endif
    </div>

@endsection()
