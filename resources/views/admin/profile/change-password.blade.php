@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile Information</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Change Password</h6>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif


                        <form class="forms-sample" action="{{ route('admin.profile.change-password') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Old Password</label>
                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                               id="current_password" name="current_password" placeholder="Enter Old Password">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                               id="new_password" name="new_password" placeholder="Enter New Password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror"
                                               id="confirm_password" name="confirm_password" placeholder="Confirm New Password">
                                        @error('confirm_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-2">Change Password</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
