
@extends('layouts.user.master')

@section('content')
    <div class="content mb-5">
        <div class="content-element">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <h2 class="login-header">Login to your account.</h2>
                        <div class="form-background">
                            <form class="log-in-form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" required placeholder="Email"value="{{ old('email') }}"
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <div class="password-container">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="password" required autocomplete="current-password"
                                            placeholder="Password">
                                        <span class="toggle-password" onclick="togglePasswordVisibility()"></span>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input"name="remember"
                                        id="authCheck"{{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="authCheck">
                                        Remember me
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="forget-pass">Forget password</a>
                                @endif
                                <button type="submit" class="custom-btn w-100">LOGIN</button>
                                <p class="login-footer">Are you a new user?</p>
                                <a href="{{ route('register') }}" class="custom-btn mt-2 text-center w-100">
                                    SIGN UP
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
