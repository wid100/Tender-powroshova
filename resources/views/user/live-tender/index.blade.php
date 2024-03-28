   @extends('layouts.frontend.master')

   @section('content')
       <div class="live-tender-wrapper">
           <h1 class="tender-title">Live Tender List</h1>
           <div class="live-table-wrapper">
               <h2 class="table-text-list">Tender Information List</h2>
               <div class="table-responsive">
                   <table class="table table-hover" id="dataTableExample">
                       <thead class="tender-table-header">
                           <tr>
                               <th scope="col">Tender No.</th>
                               <th scope="col">Tender Title</th>
                               <th scope="col">Potential government value</th>
                               <th scope="col">Schedule price</th>
                               <th scope="col">Last Submission Date</th>
                               <th scope="col">Tender Opening Date</th>

                           </tr>
                       </thead>
                       <tbody class="tender-table-body">
                           @foreach ($tenders as $tender)
                               @php
                                   $endDate = \Carbon\Carbon::parse($tender->end_date);
                                   $now = \Carbon\Carbon::now();
                               @endphp

                               @if ($endDate->isFuture())
                                   <tr class="clickable-row" {{-- onclick="window.location='/user/live-tender/{{ $tender->id }}';"> --}}
                                       onclick="window.location='{{ route('user.live-tender.show', ['id' => $tender->id]) }}';">
                                       <td>{{ $tender->tender_id }}</td>
                                       <td>{{ $tender->name }}</td>
                                       <td>{{ $tender->govment_price }}</td>
                                       <td>{{ $tender->shedeul_price }}</td>
                                       <td>{{ $tender->start_date }}</td>
                                       <td>{{ $tender->end_date }}</td>
                                   </tr>
                               @endif
                           @endforeach
                       </tbody>
                   </table>
               </div>

           </div>
       </div>
   @endsection
