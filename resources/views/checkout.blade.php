@extends('layouts.app')

    @section('content')

        <div style="margin-top: 200px; margin-left: 200px; width: 500px">
            @if(session()->has('success_message'))
                <div class="spacer"></div>
            <div class="alert alert-success">
                {{session()->get('success_message')}}
            </div>
            @endif

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

                @endif

            <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                @csrf
                <input type="text" id="name_on_card" placeholder="Name on the card" name="name_on_card">
                <input type="text" id="address" placeholder="address" name="address">
                <input type="text" id="city" placeholder="city" name="city">
                <input type="text" id="province" placeholder="province" name="province">
                <input type="text" id="postcode" placeholder="postcode" name="postcode">
                <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <button>Submit Payment</button>
            </form>







        </div>




    @endsection












{{--    <h4>Your total price: {{ $total }} pounds.</h4>--}}

{{--    <div class="links">--}}
{{--        <form action="api/payment" method="post">--}}
{{--            @csrf--}}
{{--            <script--}}
{{--                src="https://checkout.stripe.com/checkout.js" class=stripe-button"--}}
{{--                data-key="pk_test_39ZWlPdrgvN6vzXGF8tJZPKu00Y2pqMlol"--}}
{{--                data-amount="1000"--}}
{{--                data-name="Simonas Stanke"--}}
{{--                data-description="Example"--}}
{{--                data-image="https://stipe.com/img/documentation/checkout/marketplace.png"--}}
{{--                data-locale="auto"--}}
{{--                data-currency="sgd"--}}
{{--            >--}}
{{--            </script>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    <h3>Enter your details below:</h3>--}}
{{--    <form action="{{ route('checkout') }}" method="post" id="checkout-form">--}}
{{--    @csrf--}}
{{--        <label>Credit carad number</label>--}}
{{--        <input type="text" required />--}}
{{--        <button type="submit">Buy now</button>--}}
{{--    </form>--}}


