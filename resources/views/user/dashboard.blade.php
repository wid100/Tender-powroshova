   @extends('layouts.frontend.master')

   @section('content')
       <section class="supplier-dashboard">
           <div class="sd-interface">
               <!-- Supplier Dashboard -->
               <div class="title-wrapper">
                   <h3 class="i-name">Supplier Dashboard</h3>
               </div>
               <div class="sd-boxes">
                   <div class="row">
                       <!-- LIVE TENDER -->
                       <div class="col-md-3">
                           <a href="{{ route('user.live-tender') }}" class="sd-box">
                               <div class="sd-box-icons">
                                   <img src="{{ asset('assets-frontend/sd-images/Frame.png') }}" alt="" />
                               </div>
                               <div class="sd-box-text">
                                   <p>LIVE TENDER</p>
                               </div>
                               <div class="sd-box-values">
                                   <p>{{ $tenderCount }}</p>
                               </div>
                           </a>
                       </div>
                       <!-- CLOSING TODAY -->
                       <div class="col-md-3">
                           <a href="{{ route('user.close-tender') }}" class="sd-box">
                               <div class="sd-box-icons">
                                   <img src="{{ asset('assets-frontend/sd-images/Frame(1).png') }}" alt="" />
                               </div>
                               <div class="sd-box-text">
                                   <p>CLOSING TODAY</p>
                               </div>
                               <div class="sd-box-values">
                                   <p>{{ $closeTenderCount }}</p>
                               </div>
                           </a>
                       </div>
                       <!-- TENDER NOTICE -->
                       <div class="col-md-3">
                           <a href="{{ route('user.latest-tender') }}" class="sd-box">
                               <div class="sd-box-icons">
                                   <img src="{{ asset('assets-frontend/sd-images/clarity_new-solid.png') }}"
                                       alt="" />
                               </div>
                               <div class="sd-box-text">
                                   <p>TENDER LATEST</p>
                               </div>
                               <div class="sd-box-values">
                                   <p>{{ $tenderCount }}</p>
                               </div>
                           </a>
                       </div>
                       <!-- AWARD TENDER -->
                       <div class="col-md-3">
                           <a href="{{ route('user.award-tender') }}" class="sd-box">
                               <div class="sd-box-icons">
                                   <img src="{{ asset('assets-frontend/sd-images/material-symbols-light_award-star-outline-rounded.png') }}"
                                       alt="" />
                               </div>
                               <div class="sd-box-text">
                                   <p>AWARD TENDER</p>
                               </div>
                               <div class="sd-box-values">
                                   <p>{{ $awardedTenderCount }}</p>
                               </div>
                           </a>
                       </div>
                   </div>
               </div>
               <div class="title-wrapper pt-4">
                   <h3 class="i-name">Tender Process</h3>
               </div>
               <div class="selection-bar">
                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="tender-tab-li">
                           <a class="tender-tab active" id="featured-tender-tab" data-toggle="tab" href="#featured-tender"
                               role="tab" aria-controls="featured-tender" aria-selected="true">
                               <div class="sd-nav">Featured Tender / EOI</div>
                           </a>
                       </li>
                       <li class="tender-tab-li">
                           <a class="tender-tab" id="participated-tender-tab" data-toggle="tab" href="#participated-tender"
                               role="tab" aria-controls="participated-tender" aria-selected="false">
                               <div class="sd-nav">Participated Tender</div>
                           </a>
                       </li>
                   </ul>

                   <div class="tab-content" id="myTabContent">
                       <div class="tab-pane fade show active" id="featured-tender" role="tabpanel"
                           aria-labelledby="featured-tender-tab">
                           <div class="featured-tenders-section-wrapper">
                               <div class="featured-tenders-section-content">
                                   <div class="featured-tenders-header d-flex align-items-center justify-content-between">
                                       <h3>Featured Tenders</h3>
                                       <div class="d-flex align-items-center gap-2">
                                           <p class="view-more">View More</p>
                                           <div class="d-flex align-items-center gap-2">
                                               <div class="button-prev">
                                                   <img src="{{ asset('assets-frontend/home-image/left-arrow.svg') }}"
                                                       alt="" />
                                               </div>
                                               <div class="button-next">
                                                   <img src="{{ asset('assets-frontend/home-image/right-arrow.svg') }}"
                                                       alt="" />
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="featured-tenders-swiper">
                                       <div class="swiper-container swiper">
                                           <div class="swiper-wrapper">

                                               @foreach ($tenders as $tender)
                                                   @php
                                                       $endDate = \Carbon\Carbon::parse($tender->end_date);
                                                       $now = \Carbon\Carbon::now();
                                                       $duration = $endDate->diff($now); // Calculate the difference between end date and current date
                                                       $days = $duration->d;
                                                       $hours = $duration->h;
                                                       $minutes = $duration->i;
                                                       // Check if the end date has already passed
                                                       if ($endDate < $now) {
                                                           $days = -$days;
                                                           $hours = -$hours;
                                                           $minutes = -$minutes;
                                                       }
                                                   @endphp
                                                   @if ($endDate->isFuture())
                                                       <div class="swiper-slide">
                                                           <div class="swiper-content-featured-tenders">
                                                               <p class="swipper-head-text">
                                                                   {{ $tender->name }}
                                                               </p>
                                                               <div class="counting-part">
                                                                   <span
                                                                       id="countdown_{{ $tender->id }}">{{ $days }}
                                                                       Days: {{ $hours }} Hrs: {{ $minutes }}
                                                                       Mins</span>
                                                               </div>
                                                               <div class="row">
                                                                   <div class="col-6">
                                                                       <span>Ref No:</span>
                                                                       <p>{{ $tender->tender_id }}</p>
                                                                   </div>
                                                                   <div class="col-6">
                                                                       <span>Tender Opening Date:</span>
                                                                       <p>{{ $tender->end_date }}</p>
                                                                   </div>
                                                                   {{-- <div class="col-6">
                                                                       <span>Last Submission:</span>
                                                                       <p>{{ $tender->end_date }}</p>
                                                                   </div> --}}
                                                                   <div class="col-6">
                                                                       <span>Last Submission Date:</span>
                                                                       <p>{{ $tender->start_date }}</p>
                                                                   </div>
                                                               </div>
                                                               <a
                                                                   href="{{ route('user.live-tender.show', ['id' => $tender->id]) }}">read
                                                                   more</a>
                                                           </div>
                                                       </div>
                                                   @endif
                                               @endforeach

                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="participated-tender" role="tabpanel"
                           aria-labelledby="participated-tender-tab">
                           <div class="featured-tenders-section-wrapper">
                               <div class="featured-tenders-section-content">
                                   <div class="featured-tenders-header d-flex align-items-center justify-content-between">
                                       <h3>Featured Tenders</h3>
                                       <div class="d-flex align-items-center gap-2">
                                           <p class="view-more">View More</p>
                                           <div class="d-flex align-items-center gap-2">
                                               <div class="button-prev">
                                                   <img src="{{ asset('assets-frontend/home-image/left-arrow.svg') }}"
                                                       alt="" />
                                               </div>
                                               <div class="button-next">
                                                   <img src="{{ asset('assets-frontend/home-image/right-arrow.svg') }}"
                                                       alt="" />
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="featured-tenders-swiper">
                                       <div class="swiper-container swiper">
                                           <div class="swiper-wrapper">
                                               @foreach ($participations as $participant)
                                                   @php
                                                       $endDate = \Carbon\Carbon::parse($participant->end_date);
                                                       $now = \Carbon\Carbon::now();
                                                       $duration = $endDate->diff($now); // Calculate the difference between end date and current date
                                                       $days = $duration->d;
                                                       $hours = $duration->h;
                                                       $minutes = $duration->i;
                                                       // Check if the end date has already passed
                                                       if ($endDate < $now) {
                                                           $days = -$days;
                                                           $hours = -$hours;
                                                           $minutes = -$minutes;
                                                       }
                                                   @endphp
                                                   @if ($endDate->isFuture())
                                                       <div class="swiper-slide">
                                                           <div class="swiper-content-featured-tenders">
                                                               <p class="swipper-head-text">
                                                                   {{ $participant->tender->name }}
                                                               </p>
                                                               <div class="counting-part">
                                                                   <span
                                                                       id="countdown_{{ $participant->id }}">{{ $days }}
                                                                       Days: {{ $hours }} Hrs: {{ $minutes }}
                                                                       Mins</span>
                                                               </div>
                                                               <div class="row">
                                                                   <div class="col-6">
                                                                       <span>Ref No:</span>
                                                                       <p>{{ $participant->tender->tender_id }}</p>
                                                                   </div>
                                                                   <div class="col-6">
                                                                       <span>Opening Date:</span>
                                                                       <p>{{ $participant->tender->start_date }}</p>
                                                                   </div>
                                                                   <div class="col-6">
                                                                       <span>Last Submission:</span>
                                                                       <p>{{ $participant->tender->end_date }}</p>
                                                                   </div>
                                                                   <div class="col-6">
                                                                       <span>Closing Date:</span>
                                                                       <p>{{ $participant->tender->end_date }}</p>
                                                                   </div>
                                                               </div>
                                                               <a
                                                                   href="{{ route('user.live-tender.show', ['id' => $participant->id]) }}">read
                                                                   more</a>
                                                           </div>
                                                       </div>
                                                   @endif
                                               @endforeach
                                               <!-- Add more slides as needed -->
                                           </div>
                                           <!-- Add navigation buttons -->
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   @endsection
