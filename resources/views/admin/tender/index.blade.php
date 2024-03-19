@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb d-flex justify-content-between align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Packages</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Packages</li>
            </ol>
            <a href="{{ route('admin.tender.create') }}" class="btn btn-primary active" role="button"
                aria-pressed="true">Create Package</a>

        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Cards Table</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tender Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Contact Details</th>
                                        <th>Method</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenders as $key => $tender)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $tender->tender_id }}</td>
                                            <td>{{ $tender->name }}</td>

                                            <td>{!! Str::limit($tender->description, 50) !!}</td>
                                            <td>{{ $tender->contact_details }}</td>
                                            <td>{{ $tender->method }}</td>
                                            <td>{{ $tender->start_date }}</td>
                                            <td>{{ $tender->end_date }}</td>
                                            <td>{{ $tender->created_at }}</td>
                                            <td>
                                                @if ($tender->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">No Status</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.tender.edit', $tender->id) }}"
                                                    class="btn btn-primary btn-icon">
                                                    <i data-feather="edit"></i></a>

                                                @if (Auth::user()->role_id == 1)
                                                    <form id="delete_form_{{ $tender->id }}"
                                                        action="{{ route('admin.tender.destroy', $tender->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-icon delete-button"
                                                            onclick="deleteId({{ $tender->id }})">
                                                            <i data-feather="trash"></i>
                                                        </button>
                                                    </form>
                                                @endif

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
