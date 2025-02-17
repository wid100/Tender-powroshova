@extends('master.master')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb d-flex justify-content-between align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Participate</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Participate</li>
            </ol>

        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Participate Table</h6>

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
                                    @foreach ($participates as $key => $participate)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $participate->tender_ref_id }}</td>
                                            <td>{{ Str::limit($participate->title, 25) }}</td>

                                            <td>{{ Str::limit($participate->palace_name, 25) }}</td>
                                            <td>{{ Str::limit($participate->location, 25)  }}</td>
                                            <td>{{ $participate->lease_price_number }}</td>
                                            <td>{{  Str::limit($participate->bank_name, 25)  }}</td>
                                            <td>{{ $participate->created_at->format('d-M-Y') }}</td>
                                            <td>
                                                @if ($participate->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @elseif ($participate->status == 0)
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif ($participate->status == 3)
                                                    <span class="badge bg-danger">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.participate.show', $participate->id) }}"
                                                    class="btn btn-primary btn-icon">
                                                    <i data-feather="eye"></i>
                                                </a>


                                                <a target="_blank" href="{{ route('admin.print.participate', $participate->id) }}"
                                                    class="btn btn-primary btn-icon">
                                                    <i data-feather="printer"></i>
                                                </a>

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
