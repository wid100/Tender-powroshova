{{-- @extends('layouts.app')
@include('layouts.backend.style')

@section('content')
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#"
                                            class="noble-ui-logo logo-light d-block mb-2">Noble<span>UI</span></a>
                                        <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                        <form class="forms-sample"method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    id="email" placeholder="Email"value="{{ old('email') }}"
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" id="userPassword" required
                                                    autocomplete="current-password" placeholder="Password">
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
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">

                                                    Login
                                                </button>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                    class="d-block mt-3 text-muted">Forget password</a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.backend.js')
@endsection --}}

{{-- =============login =========== --}}
@extends('layouts.user.master')

@section('content')
    <div class="content mb-5">
        <div class="content-element">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h2 class="login-header">Welcome back! Log in to your account.</h2>
                        <div class="form-background">
                            <form class="log-in-form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Email"value="{{ old('email') }}"
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
