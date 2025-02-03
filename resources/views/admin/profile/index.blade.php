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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Profile Information</h6>

                        <form class="forms-sample" action="{{ route('admin.profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $user->name }}" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" disabled
                                            value="{{ $user->email }}" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ $user->phone }}" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $user->address }}" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city"
                                            value="{{ $user->city }}" placeholder="City">
                                    </div>

                                </div>




                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" name="country"
                                            value="{{ $user->country }}" placeholder="country">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="region" class="form-label">Region</label>
                                        <input type="text" class="form-control" id="region" name="region"
                                            value="{{ $user->region }}" placeholder="Region">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nid" class="form-label">NID</label>
                                        <input type="text" class="form-control" id="nid" name="nid"
                                            value="{{ $user->nid }}" placeholder="NID">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            placeholder="Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        @if ($user->image)
                                            <img src="{{ asset('storage/profile_images/' . $user->image) }}"
                                                alt="Profile Image" width="100">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="about" class="form-label">About</label>
                                        <textarea class="form-control" name="about" id="tinymceExample2" rows="5">{{ $user->about }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
