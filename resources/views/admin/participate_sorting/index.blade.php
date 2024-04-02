@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb d-flex justify-content-between align-items-center">
            <h2> Tender Name: {{ $tender->name }}</h2>

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
                                        <th>Place Name</th>
                                        <th>Location</th>
                                        <th>Price</th>
                                        <th>Bank Name</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($participant as $key => $participate)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $participate->tender_ref_id }}</td>
                                            <td>{{ $participate->title }}</td>

                                            <td>{{ $participate->palace_name }}</td>
                                            <td>{{ $participate->location }}</td>
                                            <td>{{ $participate->lease_price_number }}</td>
                                            <td>{{ $participate->bank_name }}</td>
                                            <td>{{ $participate->created_at->format('d-M-Y') }}</td>

                                            <td>
                                                @if ($participate->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                 <a href="{{ route('admin.participate.show', $participate->id) }}"
                                                    class="btn btn-primary btn-icon">
                                                    <i data-feather="eye"></i>
                                                </a>

                                                @if (Auth::user()->role_id == 1)
                                                    <form id="delete_form_{{ $participate->id }}"
                                                        action="{{ route('admin.participate.destroy', $participate->id) }}"
                                                        method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-icon delete-button"
                                                            onclick="deleteId({{ $participate->id }})">
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
