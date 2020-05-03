@extends('layouts.app')

@section('content')

    <!-- Default form login -->

    <style>
        .fix-forgotPassword{
            padding:0px !important;
            margin-top: 30px;
        }
    </style>


    <div class="login-form">
        <form class="text-center border border-light p-5 form-center" method="POST" action="{{ route('password.email') }}">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @csrf
            <p class="h4 mb-4">Password reset</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail " class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <!-- </div> -->

            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-block my-4" type="submit">Send email</button>


        </form>
        <!-- Default form login -->

    </div>

@endsection




