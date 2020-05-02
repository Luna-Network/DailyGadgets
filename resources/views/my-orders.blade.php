@extends('layouts.app')

@section('content')

    <div>
        <h1>YOUR ORDERS HISTORY:</h1>
    </div>
    <div class="main" >
    @for($i = 0; $i < count($orders); $i++)
        <img src="{{ substr($items[$i]->images, 0, strpos($items[$i]->images, ';')) }}" alt="Product image" width="100">
        <h3>{{$items[$i]->title}}</h3>
        <h5>Qty: {{$orders[$i]->qty}}</h5>
        <h5>Total price: {{$orders[$i]->totalPrice}}</h5>
        <h5>Ordered at: {{$orders[$i]->created_at}}</h5>
        <hr>
    @endfor
    </div>

@endsection
