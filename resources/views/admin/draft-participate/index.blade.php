@extends('master.master')

@section('content')
    <div class="page-content">
        <h2>Draft Participate Table</h2>

        <div class="table-responsive">
            <table id="draftDataTable" class="table">
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
                    @foreach ($draftParticipates as $key => $participate)
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
                                <span class="badge bg-danger">Draft</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.participate.show', $participate->id) }}"
                                    class="btn btn-primary btn-icon">
                                    <i data-feather="eye"></i>
                                </a>
                                <!-- Add other actions if needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
