{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}



{{-- =============Register =========== --}}
@extends('layouts.user.master')

@section('content')
      <div class="content mb-5">
        <div class="content-element">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card-header">{{ __('Register') }}</div>
                        <h2 class="signup-header">Sign Up</h2>
                        <div class="form-background">
                            <form class="signup-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="company-name" class="form-label">Full Name/Company Name:</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                           @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username/ID:</label>
                                    <input type="text" class="form-control" id="username"
                                        aria-describedby="emailHelp" />
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                     <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3 mobile-box-holder-con">
                                    <label for="phone" class="form-label">Mobile:</label>
                                    <div class="form-input-fuild">
                                        <input type="tel" id="phone" class="mobile-box-holder"
                                            placeholder="Enter your mobile number" required />
                                    </div>
                                    <span id="valid-msg" class="hide">Valid</span>
                                    <span id="error-msg" class="hide">Invalid number</span>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <div class="password-container">
                                        <input type="password" class="form-control" id="password"
                                            aria-describedby="emailHelp" />
                                        <span class="toggle-password" onclick="togglePasswordVisibility()"></span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="confirm-password" class="form-label">Confirm Password:</label>
                                    <div class="confirm-password-container">
                                        <input type="password" class="form-control" id="confirm-password"
                                            aria-describedby="emailHelp" />
                                        <span class="toggle-confirm-password"
                                            onclick="toggleConfirmPasswordVisibility()"></span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <!-- reCAPTCHA here -->
                                    <div class="g-recaptcha" data-sitekey="6LeM6JQpAAAAAKz1TXzqU07Y1gg6NftFy2bmuyc5">
                                    </div>
                                </div>

                                <button type="button" class="w-100 custom-btn">
                                    SIGN UP
                                </button>
                                <p class="s-form-footer mt-2">
                                    Already have an account?
                                    <a href="login.html">LOGIN HERE</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
