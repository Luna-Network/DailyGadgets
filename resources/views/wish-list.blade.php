@extends('layouts.app')

@section('content')

    <div class="spacing-top"></div>
    <div class="container">
        @if(Session::has('wishlist'))
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
                                <div class="col-sm-2 hidden-xs"><img src="{{ substr($item['item']['images'], 0, strpos($item['item']['images'], ';')) }}" width="100" height="100" alt="product image" class="img-responsive" /></div>
                                <div class="col-sm-10 product">
                                    <h4 class="nomargin">{{ $item['item']['title'] }}</h4>
                                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">£{{ $item['item']['price'] }}</td>
                        <td class="actions" data-th="">
                            <a href="{{ route('item.removeItem', ['id' => $item['item']['id']]) }}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                            <a href="{{ route('item.addItem', ['id' => $item['item']['id']]) }}" type="button" class="btn btn-success btn-sm"><i class="fa fa-trash-o">+</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total £{{ $totalPrice }}</strong></td>
                </tr>
                <tr>
                    <td><a href="{{ $lastURL ?? '/' }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total £{{ $totalPrice }}</strong></td>
                    <td>
                        <a href="{{ route('checkout') }}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a>
                    
                    </td>
                </tr>
                </tfoot>
            </table>
        @else
            <div style="width: 100%">
                <h1 style="text-align: center">Your wish list is empty!</h1>
                <td><a href="{{ $lastURL ?? '/' }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            </div>
        @endif
    </div>

@endsection()
