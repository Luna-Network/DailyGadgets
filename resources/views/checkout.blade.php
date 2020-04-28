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

    <h1>Checkout</h1>
    <h4>Your total price: {{ $total }} pounds.</h4>

    <h3>Enter your details below:</h3>
    <form action="{{ route('checkout') }}" method="post" id="checkout-form">
    @csrf
        <label>Credit carad number</label>
        <input type="text" required />
        <button type="submit">Buy now</button>
    </form>

</body>
</html>
