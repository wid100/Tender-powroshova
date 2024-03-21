@extends('layouts.frontend.master')

@section('content')
    <form method="POST" action="{{ route('user.change-password') }}">
        @csrf

        <div class="live-tender-wrapper">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <h1 class="tender-title">Change Password</h1>
            <div class="live-table-wrapper live-change-wrapper mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-background">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="form-input-field">
                                        <label for="old_password">Old Password</label>
                                        <input type="password" id="old_password" name="old_password" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input-field">
                                        <label for="password">New Password</label>
                                        <input type="password" id="password" name="password" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input-field">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            required />
                                    </div>
                                </div>
                                  <div class="participate-btn">
                <button type="submit" class="custom-btn mt-4">Update</button>
            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </form>
@endsection
