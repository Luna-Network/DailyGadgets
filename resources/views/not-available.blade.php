@extends('layouts.app')

@section('content')

    <style>
        p  {
            margin-top: 150px;
            text-align: center;
        }
    </style>

    <p>Sorry, not enough items of <b>{{$DB_item->title}}.</b> Only <b>{{$DB_item->in_stock}}</b>  available.</p>
    <a href="{{ route('item.shoppingCart') }}">Go back to e-cart</a>

@endsection
