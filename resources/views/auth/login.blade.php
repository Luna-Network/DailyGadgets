@extends('layouts.app')

@section('content')

    <!-- Default form login -->







    <div class="login-form">
            <form class="text-center border border-light p-5 form-center" method="POST" action="{{ route('login') }}">
                @csrf
                <p class="h4 mb-4">Sign in</p>

                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail " class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror

            <!-- Password -->
                <input id="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="defaultLoginFormRemember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <!-- Forgot password -->
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <!-- Register -->
                <p>Not a member?
                    <a href="/register">Register</a>
                </p>

                <!-- Social login -->

            </form>
            <!-- Default form login -->

    </div>

@endsection
