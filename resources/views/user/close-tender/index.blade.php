@extends('layouts.frontend.master')

@section('content')
   <div class="live-tender-wrapper">
       <h1 class="tender-title">Close Tender List</h1>
       <div class="live-table-wrapper">
           <h2 class="table-text-list">Tender Information List</h2>
           <div class="table-responsive">
               @if ($closeTenders->isNotEmpty())
                   <table class="table table-hover" id="dataTableExample">
                       <thead class="tender-table-header">
                           <tr>
                               <th scope="col">Tender No.</th>
                               <th scope="col">Tender Title</th>
                               <th scope="col">Potential government value</th>
                               <th scope="col">Schedule price</th>
                               <th scope="col">Publish Date</th>
                               <th scope="col">Last Submission Date</th>
                               <th scope="col">Submission date</th>
                               <th scope="col">Status</th>
                           </tr>
                       </thead>
                       <tbody class="tender-table-body">
                           @foreach ($closeTenders as $tender)
                               <tr class="clickable-row"
                                  >
                                   <td>{{ $tender->tender->tender_id }}</td>
                                   <td>{{ $tender->tender->name }}</td>
                                   <td>{{ $tender->tender->govment_price }}</td>
                                   <td>{{ $tender->tender->shedeul_price }}</td>
                                   <td>{{ $tender->tender->start_date }}</td>
                                   <td>{{ $tender->tender->end_date }}</td>
                                   <td>{{ $tender->created_at->format('d-m-Y') }}</td>
                                   <td>
                                       @if ($tender->status == 0)
                                           <span class="badge btn-primary">Pending</span>
                                       @elseif($tender->status == 1)
                                           <span class="badge btn-success">Accepted</span>
                                       @else
                                           <span class="badge btn-danger">Cancelled</span>
                                       @endif
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               @else
                   <p>No tenders are closing today.</p>
               @endif
           </div>
       </div>
   </div>
@endsection
