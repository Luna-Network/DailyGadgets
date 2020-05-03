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
        <form class="text-center border border-light p-5 form-center" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <p class="h4 mb-4">Reset password</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail " class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{$email ?? old('email')}}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror



            <input id="password" type="password" placeholder="New password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            </small>
            <input id="password-confirm" placeholder="Verify new password" type="password" class="form-control mb-4" name="password_confirmation" required autocomplete="new-password">

            <!-- </div> -->

            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-block my-4" type="submit">Change password</button>


        </form>
        <!-- Default form login -->

    </div>





