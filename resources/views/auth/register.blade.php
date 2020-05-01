@extends('layouts.app')

@section('content')


    <div class="login-form">
    <!-- Default form register -->
    <form class="text-center border border-light p-5" method="POST" action="{{ route('register') }}">
        @csrf

        <p class="h4 mb-4">Sign up</p>

         <!-- Person title -->
         <div class="form-row mb-4 justify-content-around">
             <div><input type="radio" name="title" value="Mr"> Mr</div>
             <div><input type="radio" name="title" value="Mrs"> Mrs</div>
             <div><input type="radio" name="title" value="Ms"> Ms</div>
             <div><input type="radio" name="title" value="Miss"> Miss</div>
         </div>   

            <!-- <select name="title">
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
            </select> -->

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input class="form-control @error('name') is-invalid @enderror" placeholder="First name" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" required>
            </div>
        </div>

         <!-- E-mail -->
         <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" required>

        <!-- Verify e-mail -->
        <input type="email" id="defaultRegisterFormVerifyEmail" class="form-control mb-4" placeholder="Verify e-mail" required>

        <!-- Password -->
        <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
        </small>

        <!-- Verify password -->
        <input type="password" id="defaultRegisterFormVerifyPassword" class="form-control mb-4" placeholder="Verify password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>

        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
            Optional - for two step authentication
        </small>

        <!-- Address line 1 -->
        <input type="text" id="defaultRegisterFormAddressLine1" class="form-control mb-4" placeholder="Address line 1" required>

        <!-- Address line 2 -->
        <input type="text" id="defaultRegisterFormAddressLine2" class="form-control mb-4" placeholder="Address line 2">

        <!-- City -->
        <input type="text" id="defaultRegisterFormCity" class="form-control mb-4" placeholder="City" required>

        <!-- Post code -->
        <input type="text" id="defaultRegisterFormPostCode" class="form-control mb-4" placeholder="Post Code" required>

        <!-- Country -->
        <input type="text" id="defaultRegisterFormCountry" class="form-control mb-4" placeholder="Country" required>

        <!-- Newsletter -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
            <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
        </div>

        <!-- Sign up button -->
        <button class="btn btn-outline-danger my-4 btn-block" type="submit">Sign in</button>



        <hr>

        <!-- Terms of service -->
        <p>By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>

    </form>
    <!-- Default form register -->
    </div>



{{--    TESTING REGISTER DELETE AFTER--}}


            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection
