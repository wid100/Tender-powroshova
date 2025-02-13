   @extends('layouts.frontend.master')

   @section('content')
       <section class="in-tender">
           <div class="tender-interface">
               <!-- Tender Options -->
               <div class="title-wrapper">
                   <h3 class="i-name">Participate in Tender / EoI</h3>
               </div>
               <div class="selection-bar">
                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="tender-tab-li">
                           <a class="tender-tab active" id="tender-fee-tab" data-toggle="tab" href="#tender-fee"
                               role="tab" aria-controls="tender-fee" aria-selected="true">
                               <div class="sd-nav">Tender Fee</div>
                           </a>
                       </li>
                       {{-- <li class="tender-tab-li">
                           <a class="tender-tab" id="compliance-tab" data-toggle="tab" href="#compliance" role="tab"
                               aria-controls="compliance" aria-selected="false">
                               <div class="sd-nav">Compliance</div>
                           </a>
                       </li>
                       <li class="tender-tab-li">
                           <a class="tender-tab" id="submit-offer-tab" data-toggle="tab" href="#submit-offer" role="tab"
                               aria-controls="submit-offer" aria-selected="false">
                               <div class="sd-nav">Submit Offer</div>
                           </a>
                       </li> --}}
                   </ul>

                   <div class="tab-content live-table-wrapper mt-4" id="myTabContent">
                       <div class="tab-pane fade show active" id="tender-fee" role="tabpanel"
                           aria-labelledby="tender-fee-tab">
                           <div class="tender-fee-form">
                               <form action="{{ route('user.participate.store') }}" method="post"
                                   enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                       <div class="col-md-12">
                                           <input type="hidden" name="tender_id" value="{{ $tender->id }}">
                                           <input type="hidden" name="tender_ref_id" value="{{ $tender->tender_id }}">
                                           <input type="hidden" name="title" value="{{ $tender->name }}">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="">Tender Ref
                                                   No:</label>
                                               <input type="text" class="form-control" placeholder="Tender Ref No"
                                                   value="{{ $tender->tender_id }}" disabled />
                                           </div>
                                       </div>

                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="">Tender
                                                   Title:</label>
                                               <input type="text" class="form-control"id="" placeholder="Tender Title"
                                                   value="{{ $tender->name }}" disabled />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="">০১।মহালের নাম
                                               </label>
                                               <input type="text" class="form-control" name="palace_name" id=""
                                                   value="" name="name" required placeholder="মহালের নাম" />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="">অবস্থান</label>
                                               <input type="text" class="form-control" name="location" id=""
                                                   value="" name="place" required placeholder="অবস্থান" />
                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">০২। ১৪৩২ বাংলা সনের দরপত্র দাতা কর্তৃক ইজারা
                                                   দর </p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">অংকে
                                                       </label>
                                                       <input type="text" class="form-control" name="lease_price_number"
                                                           id="" value="" required placeholder="অংকে" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">কথায়
                                                       </label>
                                                       <input type="text" class="form-control" id=""
                                                           name="lease_price_text" required value=""
                                                           placeholder="কথায়" />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">০৩। বায়নার টাকার বিবরন</p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">ব্যাংকের
                                                           নাম </label>
                                                       <input type="text" class="form-control" id=""
                                                           name="bank_name" required value=""
                                                           placeholder="ব্যাংকের নাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">সিডিআর / ড্রাপট
                                                           নং</label>
                                                       <input type="text" class="form-control" id=""
                                                           name="draft_no" required value=""
                                                           placeholder="ড্রাপট নং" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">তারিখ
                                                       </label>
                                                       <input type="date" class="form-control" id=""
                                                           value="" name="pay_date" required placeholder="তারিখ" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">টাকার
                                                           পরিমান </label>
                                                       <input type="text" class="form-control" id=""
                                                           value="" name="pay_amount" required
                                                           placeholder="টাকার পরিমান" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">নথি আপলোড
                                                           করুন</label>
                                                       <input type="file" class="form-control" id=""
                                                           value="" required name="biyna_upload_file"
                                                           placeholder="নথি আপলোড করুন" />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">০৪। উৎস কর ও মূল্য সংযোজন কর বাবদ ইজারা
                                                   মূল্যের ১০% ও ১৫%, মোট=২৫% (শতকরা পঁচিশ ভাগ)</p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">ব্যাংকের
                                                           নাম </label>
                                                       <input type="text" class="form-control" id=""
                                                           value="" required name="ejara_bank_name"
                                                           placeholder="ব্যাংকের নাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">সিডিআর / ড্রাপট
                                                           নং</label>
                                                       <input type="text" class="form-control" id=""
                                                           value="" required name="ejara_draft_no"
                                                           placeholder="ড্রাপট নং" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">তারিখ
                                                       </label>
                                                       <input type="date" class="form-control" id=""
                                                           value="" required name="ejara_pay_date"
                                                           placeholder="তারিখ" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">টাকার
                                                           পরিমান </label>
                                                       <input type="text" class="form-control" id=""
                                                           value="" required name="ejara_pay_amount"
                                                           placeholder="টাকার পরিমান" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="">নথি আপলোড
                                                           করুন</label>
                                                       <input type="file" class="form-control" id=""
                                                           value="" required name="ejara_upload_file"
                                                           placeholder="নথি আপলোড করুন" />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">০৫। বায়নার উপর ৫% (শতকরা পাঁচ ভাগ) ফেরত যোগ্য
                                               </p>

                                               <div class="table-responsive">
                                                   <table class="table participate-tender-table table-hover">
                                                       <thead class="tender-table-header">
                                                           <tr>
                                                               <th scope="col">ব্যাংকের
                                                                   নাম</th>
                                                               <th scope="col">সিডিআর / ড্রাপট নং</th>
                                                               <th scope="col">টাকা</th>
                                                               <th scope="col">নথি আপলোড করুন</th>

                                                           </tr>
                                                       </thead>
                                                       <tbody class="tender-table-body">
                                                           <tr>
                                                               <td>
                                                                   <div class="form-input-field">
                                                                       <input type="text" required
                                                                           name="refundable[name]">
                                                                   </div>
                                                               </td>
                                                               <td>
                                                                   <div class="form-input-field">
                                                                       <input type="text" required
                                                                           name="refundable[drapt_name]">
                                                                   </div>
                                                               </td>
                                                               <td>
                                                                   <div class="form-input-field">
                                                                       <input required type="text"
                                                                           name="refundable[amount]">
                                                                   </div>
                                                               </td>
                                                               <td>
                                                                   <input type="file" required
                                                                       name="refundable_document_file" />

                                                               </td>

                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">০৬। সিডিউল মূল্য (অফেরতযোগ্য)
                                               </p>

                                               <div class="table-responsive">
                                                   <table class="table participate-tender-table table-hover">
                                                       <thead class="tender-table-header">
                                                           <tr>
                                                               <th scope="col">ব্যাংকের
                                                                   নাম</th>
                                                               <th scope="col">সিডিআর / ড্রাপট নং</th>
                                                               <th scope="col">টাকা</th>
                                                               <th scope="col">নথি আপলোড করুন</th>
                                                           </tr>
                                                       </thead>
                                                       <tbody class="tender-table-body">
                                                           <tr>
                                                               <td>
                                                                   <div class="form-input-field">
                                                                       <input type="text" required
                                                                           name="schedule_price[bank_name]">
                                                                   </div>
                                                               </td>
                                                               <td>
                                                                   <div class="form-input-field">
                                                                       <input type="text" required
                                                                           name="schedule_price[draft_no]">
                                                                   </div>
                                                               </td>
                                                               <td>
                                                                   <div class="form-input-field">
                                                                       <input type="text" required
                                                                           name="schedule_price[amount]">
                                                                   </div>
                                                               </td>
                                                               <td>
                                                                    <input type="file" required
                                                                           name="schedule_price_document_file" />
                                                               </td>

                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="dor_data_name">০৭। দর দাতার নাম
                                                   :</label>
                                               <input type="text" required class="form-control" id="dor_data_name"
                                                   value="" name="bidder_name" placeholder="দর দাতার নাম" />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="mobile">মোবাইল নং-</label>
                                               <input type="number" class="form-control" id="mobile" value=""
                                                   name="bidder_number" required placeholder="মোবাইল নং" />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="bidder_father_name">০৮। পিতার নাম
                                               </label>
                                               <input type="text" class="form-control" id="bidder_father_name"
                                                   value="" required name="bidder_father_name"
                                                   placeholder="পিতার নাম" />
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-input-item">
                                               <label class="tender-form-header" for="bidder_mother_name">০৯। মাতার নাম
                                               </label>
                                               <input type="text" class="form-control" id="bidder_mother_name"
                                                   value="" required name="bidder_mother_name"
                                                   placeholder="মাতার নাম" />
                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">১০। (ক) বর্তমান ঠিকানা </p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_village">গ্রাম</label>
                                                       <input type="text" required class="form-control" id="a_village"
                                                           name="a_village" placeholder="গ্রাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_post">ডাকঘর </label>
                                                       <input type="text" class="form-control" id="a_post"
                                                           value="" required name="a_post" placeholder="ডাকঘর" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_upazila">উপজেলা </label>
                                                       <input type="text" class="form-control" id="a_upazila"
                                                           value="" required name="a_upazila"
                                                           placeholder="উপজেলা " />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_district">জেলা </label>
                                                       <input required type="text" class="form-control"
                                                           id="a_district" value="" name="a_district"
                                                           placeholder="জেলা " />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">(খ) স্থায়ী ঠিকানা </p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_village">গ্রাম</label>
                                                       <input required type="text" class="form-control" id="b_village"
                                                           name="b_village" placeholder="গ্রাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_post">ডাকঘর </label>
                                                       <input required type="text" class="form-control" id="b_post"
                                                           value="" name="b_post" placeholder="ডাকঘর" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_upazila">উপজেলা </label>
                                                       <input required type="text" class="form-control" id="b_upazila"
                                                           value="" name="b_upazila" placeholder="উপজেলা " />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_district">জেলা </label>
                                                       <input required type="text" class="form-control"
                                                           id="b_district" value="" name="b_district"
                                                           placeholder="জেলা " />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>

                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">১১। স্বাক্ষীর নাম (১)</p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_witness_name">
                                                           নাম </label>
                                                       <input required type="text" class="form-control"
                                                           id="a_witness_name" name="a_witness_name" placeholder="নাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_witness_father_name">পিতার
                                                           নাম </label>
                                                       <input required type="text" class="form-control"
                                                           id="a_witness_father_name" name="a_witness_father_name"
                                                           placeholder="পিতার নাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header"
                                                           for="a_witness_village">গ্রাম</label>
                                                       <input required type="text" class="form-control"
                                                           id="a_witness_village" name="a_witness_village"
                                                           placeholder="গ্রাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_witness_post">ডাকঘর
                                                       </label>
                                                       <input required type="text" class="form-control"
                                                           id="a_witness_post" value="" name="a_witness_post"
                                                           placeholder="ডাকঘর" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_witness_upazila">উপজেলা
                                                       </label>
                                                       <input required type="text" class="form-control"
                                                           id="a_witness_upazila" value="" name="a_witness_upazila"
                                                           placeholder="উপজেলা " />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="a_witness_district">জেলা
                                                       </label>
                                                       <input required type="text" class="form-control"
                                                           id="a_witness_district" value=""
                                                           name="a_witness_district" placeholder="জেলা " />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <div class="form-input-item">
                                               <p class="tender-form-header">স্বাক্ষীর নাম (2)</p>
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_witness_name">
                                                           নাম </label>
                                                       <input required type="text" class="form-control"
                                                           id="b_witness_name" name="b_witness_name" placeholder="নাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_witness_father_name">পিতার
                                                           নাম </label>
                                                       <input required type="text" class="form-control"
                                                           id="b_witness_father_name" name="b_witness_father_name"
                                                           placeholder="পিতার নাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header"
                                                           for="b_witness_village">গ্রাম</label>
                                                       <input required type="text" class="form-control"
                                                           id="b_witness_village" name="b_witness_village"
                                                           placeholder="গ্রাম" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_witness_post">ডাকঘর
                                                       </label>
                                                       <input required type="text" class="form-control"
                                                           id="b_witness_post" value="" name="b_witness_post"
                                                           placeholder="ডাকঘর" />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_witness_upazila">উপজেলা
                                                       </label>
                                                       <input required type="text" class="form-control"
                                                           id="b_witness_upazila" value="" name="b_witness_upazila"
                                                           placeholder="উপজেলা " />
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label class="tender-form-header" for="b_witness_district">জেলা
                                                       </label>
                                                       <input required type="text" class="form-control"
                                                           id="b_witness_district" value=""
                                                           name="b_witness_district" placeholder="জেলা " />
                                                   </div>
                                               </div>

                                           </div>
                                       </div>

                                   </div>
                                   <button class="custom-btn" type="submit">Submit Form</button>
                               </form>
                           </div>
                       </div>

                       <div class="tab-pane fade" id="compliance" role="tabpanel" aria-labelledby="compliance-tab">
                           <form action="">
                               <div class="tender-item-details-wrapper">
                                   <h2 class="table-text-list">
                                       Compliance - [ RFQ for Camera and SD Memory Card.
                                       [BPD/2024/RFQ-617] ]
                                   </h2>
                                   <div class="table-responsive">
                                       <table id="myTable" class="table participate-table table-hover">
                                           <thead class="tender-table-header">
                                               <tr>
                                                   <th scope="col">Requirement</th>
                                                   <th scope="col">Comply*</th>
                                                   <th scope="col">Comments</th>
                                                   <th scope="col">Upload</th>
                                               </tr>
                                           </thead>
                                           <tbody class="tender-table-body">
                                               <tr>
                                                   <td>Product Catalogue</td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="other" />
                                                               <label for="other">Others</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       At least 2 years relevant experience on
                                                       similar Field
                                                   </td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="other" />
                                                               <label for="other">Others</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                       <div onclick="addRow()" class="custom-btn w-auto d-inline-block">
                                           add
                                       </div>
                                   </div>
                               </div>
                               <div class="tender-item-details-wrapper mt-3">
                                   <h2 class="table-text-list">
                                       Document List - [ RFQ for 1.2 KW Solar System
                                       [BPD/2024/RFQ-620] ]
                                   </h2>
                                   <div class="table-responsive">
                                       <table class="table participate-table table-hover">
                                           <thead class="tender-table-header">
                                               <tr>
                                                   <th scope="col" class="particate-title-text w-25">
                                                       Document Title
                                                   </th>
                                                   <th scope="col">Mandatory</th>
                                                   <th scope="col">Comments</th>
                                                   <th scope="col">Upload</th>
                                               </tr>
                                           </thead>
                                           <tbody class="tender-table-body">
                                               <tr>
                                                   <td>
                                                       Copy of Trade license / Equivalent Document
                                                   </td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       Up to date copy of Tax Payment receipt /
                                                       Equivalent Document for international vendor
                                                   </td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>TIN Certificate</td>
                                                   <td></td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>BIN Certificate</td>
                                                   <td>
                                                       <ul class="participate-checkbox">
                                                           <li>
                                                               <input type="radio" id="yes" />
                                                               <label for="yes">Yes</label>
                                                           </li>
                                                           <li>
                                                               <input type="radio" id="no" />
                                                               <label for="no">No</label>
                                                           </li>
                                                       </ul>
                                                   </td>
                                                   <td>
                                                       <input class="form-control-item" type="text"
                                                           placeholder="Enter comments (Max 250 characters)" />
                                                   </td>

                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/upload.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>

                               <div class="participate-btn">
                                   <button class="custom-btn mt-3">Save & Next</button>
                                   <button class="custom-btn tender-close-btn mt-3">
                                       Close
                                   </button>
                               </div>
                           </form>
                       </div>

                       <div class="tab-pane fade" id="submit-offer" role="tabpanel" aria-labelledby="submit-offer-tab">
                           <form action="">
                               <div class="tender-item-details-wrapper mt-3">
                                   <h2 class="table-text-list">
                                       Tender Item List - [ RFQ for the Medical Equipment.
                                       [BPD/2024/RFQ-626] ]
                                   </h2>
                                   <div class="table-responsive">
                                       <table class="table participate-table table-hover">
                                           <thead class="tender-table-header">
                                               <tr>
                                                   <th scope="col">Sl.</th>
                                                   <th scope="col">Select</th>
                                                   <th scope="col">Lot/Group</th>
                                                   <th scope="col">Item Name</th>
                                                   <th scope="col">Quantity</th>
                                                   <th scope="col">Delivery Schedule</th>
                                                   <th scope="col">Technical Information</th>
                                                   <th scope="col">Financial Information</th>
                                                   <th scope="col">Offer Price</th>
                                                   <th scope="col">Status</th>
                                               </tr>
                                           </thead>
                                           <tbody class="tender-table-body">
                                               <tr>
                                                   <td>01</td>
                                                   <td>
                                                       <input type="checkbox" />
                                                   </td>
                                                   <td>Lot-1</td>

                                                   <td>Lancet</td>
                                                   <td>710.00</td>
                                                   <td>
                                                       <a href="#" class="show-color-text">
                                                           Show Details
                                                       </a>
                                                   </td>
                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <input type="file" />
                                                           <img src="{{ asset('assets-frontend/images/icons/file.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="upload-img custom-btn">
                                                           <img src="{{ asset('assets-frontend/images/icons/tk-icon.svg') }}"
                                                               alt="" />
                                                       </div>
                                                   </td>
                                                   <td>0.00</td>
                                                   <td>Not Applied</td>
                                               </tr>
                                               <tr>
                                                   <td colspan="7"></td>
                                                   <!-- Use colspan to merge cells -->
                                                   <td>Total</td>
                                                   <td>0.00</td>
                                                   <td>Not Applied</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="form-input-field mt-2">
                                       <label for="">Comments</label>
                                       <textarea name="" id="" cols="30" rows="5"></textarea>
                                   </div>
                                   <div class="participate-btn">
                                       <button class="custom-btn mt-4 btn-main-color">
                                           Save
                                       </button>
                                       <button class="custom-btn mt-4">Submit</button>
                                       <button class="custom-btn tender-close-btn mt-4">
                                           Close
                                       </button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   @endsection
