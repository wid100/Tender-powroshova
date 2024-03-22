@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Basic Form</h6>

                        <form class="forms-sample" action="{{ route('admin.tender.update', $tender->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $tender->name }}" autocomplete="true" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="method" class="form-label">Method</label>
                                        <input type="text" class="form-control" id="method" name="method"
                                            value="{{ $tender->method }}" placeholder="Method">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" name="start_date" id="start_date"
                                            value="{{ $tender->start_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control" name="end_date" id="end_date"
                                            value="{{ $tender->end_date }}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="govment_price" class="form-label">Govment Price</label>
                                        <input type="text" class="form-control" name="govment_price" id="govment_price"
                                            value="{{ $tender->govment_price }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="shedeul_price" class="form-label">Schedule Price</label>
                                        <input type="text" class="form-control" name="shedeul_price" id="shedeul_price"
                                            value="{{ $tender->shedeul_price }}">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="contact_details" class="form-label">Contact Details</label>
                                        <textarea class="form-control" name="contact_details" id="easyMdeExample2" rows="5">{!! $tender->contact_details !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="easyMdeExample" rows="5">{!! $tender->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="condition" class="form-label">Condition</label>
                                        <textarea class="form-control" name="condition" id="easyMdeExample3" rows="5">{!! $tender->condition !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="status" name="status"
                                            {{ $tender->status == 1 ? 'checked' : '' }} value="{{ $tender->status }}">
                                        <label class="form-check-label" for="status" name="status">
                                            Active
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
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
