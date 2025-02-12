@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb d-flex justify-content-between align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tender</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Tender</li>
            </ol>
            <a href="{{ route('admin.tender.create') }}" class="btn btn-primary active" role="button"
                aria-pressed="true">Create Tender</a>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tender Table</h6>

                        <!-- Filter Form -->
                        <div class="d-flex justify-content-between mb-3">
                            <form action="{{ route('admin.tender.index') }}" method="GET" class="d-flex">
                                <input type="date" name="start_date" value="{{ request('start_date') }}" class="form-control mr-2" />
                                <input type="date" name="end_date" value="{{ request('end_date') }}" class="form-control mr-2" />
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tender Id</th>
                                        <th>Name</th>
                                        <th>Gov Price</th>
                                        <th>Shedeul Price</th>
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
                                            <td><a href="{{ route('admin.tender.showParticipants', $tender->id) }}">{{ Str::limit($tender->name, 20) }}</a></td>
                                            <td>{{ $tender->govment_price }}</td>
                                            <td>{{ $tender->shedeul_price }}</td>
                                            <td>{{ $tender->start_date }}</td>
                                            <td>{{ $tender->end_date }}</td>
                                            <td>{{ $tender->created_at->format('d-M-Y') }}</td>
                                            <td>
                                                @if ($tender->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">No Status</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.tender.edit', $tender->id) }}" class="btn btn-primary btn-icon">
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
                                            </td>
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
