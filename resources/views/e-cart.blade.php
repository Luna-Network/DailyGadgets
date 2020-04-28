<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-CART</title>
</head>
<body>

    @if(Session::has('cart'))
        <div>
            <ul>
                @foreach($items as $item)
                    <li>
                        <span>Quantity: {{ $item['qty'] }} </span>
                        <h3>Title: {{ $item['item']['title'] }} </h3>
                        <h3>Price of item: {{ $item['price'] }} </h3>
                        <div>
{{--                            COULD BE DROPDOWN LIST TO CHOSE THE REAL QUANTITY OR REMOVE --}}
                            <a href="{{ route('item.reduceByOne', ['id' => $item['item']['id']]) }}">REDUCE BY 1</a>
                            <a href="{{ route('item.removeItem', ['id' => $item['item']['id']]) }}">REMOVE ITEM</a>
                        </div>
                    </li>
                    <hr>
                @endforeach
            </ul>
            <h2>TOTAL PRICE: {{ $totalPrice }}</h2>

            <a href=" {{ route('checkout') }} " type="button">CHECK OUT</a>
        </div>
    @else
        <h1>NO ITEMS IN E-CART</h1>
    @endif

</body>
</html>
