@extends('layouts.app')

@section('content')

    <div class="spacing-top"></div>
    <div class="container">
        @if(Session::has('cart'))
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
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
                        <td data-th="Quantity" class="quantity">
                            <a href="{{ route('item.reduceByOne', ['id' => $item['item']['id']]) }}" type="button" class="btn btn-warning btn-sm"><i class="fas fa-minus"></i></a>
                            <input type="number" class="form-control text-center" value="{{ $item['qty'] }}" readonly style="min-width: 40px"/>
                            <a href="{{ route('item.increaseByOne', ['id' => $item['item']['id']]) }}" type="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a>
                        </td>
                        <td data-th="Subtotal" class="text-center">£{{ $item['price'] }}</td>
                        <td class="actions" data-th="">
                            <a href="{{ route('item.removeItem', ['id' => $item['item']['id']]) }}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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
                    <td><a href="{{ route('payment.index') }}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>
                </tfoot>
            </table>
        @else
            <div style="width: 100%">
                <h1 style="text-align: center">Your e-cart is empty!</h1>
                <td><a href="{{ $lastURL ?? '/' }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            </div>
        @endif
    </div>

@endsection()
