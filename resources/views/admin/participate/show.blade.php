@extends('master.master')

@section('content')
    <div class="page-content">
        <h2>Participate Details</h2>

        {{-- <p>Participant ID: {{ $participate->id }}</p> --}}
        <h3 class="my-4">Title: {{ $participate->title }}</h3>

        <div class="row">
            <div class="col-md-8  grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Participate Table</h6>

                        <div class="table-responsive">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td>Tender Ref No::</td>
                                        <td>{{ $participate->tender_ref_id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Title :</td>
                                        <td>{{ $participate->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>০১।মহালের নাম :</td>
                                        <td>{{ $participate->palace_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>অবস্থান :</td>
                                        <td>{{ $participate->location }}</td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>০২। ১৪৩১ বাংলা সনের দরপত্র দাতা কর্তৃক ইজারা দর
                                                অংকে</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>অংকে :</td>
                                        <td>{{ $participate->lease_price_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            কথায় :</td>
                                        <td>{{ $participate->lease_price_text }}</td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>০৩। বায়নার টাকার বিবরন</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>ব্যাংকের নাম :</td>
                                        <td>{{ $participate->bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>সিডিআর / ড্রাপট নং :</td>
                                        <td>{{ $participate->draft_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>তারিখ :</td>
                                        <td>{{ $participate->pay_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>টাকার পরিমান :</td>
                                        <td>{{ $participate->pay_amount }}</td>
                                    </tr>
                                    <tr>
                                        <td>নথি আপলোড করুন:</td>
                                        <td>
                                            <a href="{{ asset('uploads/' . $participate->biyna_upload_file) }}" download>
                                                {{ $participate->biyna_upload_file }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>০৪। উৎস কর ও মূল্য সংযোজন কর বাবদ ইজারা মূল্যের ১০% ও ১৫%, মোট=২৫% (শতকরা
                                                পঁচিশ ভাগ)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ব্যাংকের নাম :</td>
                                        <td>{{ $participate->ejara_bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>সিডিআর / ড্রাপট নং :</td>
                                        <td>{{ $participate->ejara_draft_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>তারিখ :</td>
                                        <td>{{ $participate->ejara_pay_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>টাকার পরিমান :</td>
                                        <td>{{ $participate->ejara_pay_amount }}</td>
                                    </tr>

                                    <tr>
                                        <td>নথি আপলোড করুন:</td>
                                        <td>
                                            <a href="{{ asset('uploads/' . $participate->ejara_upload_file) }}" download>
                                                {{ $participate->ejara_upload_file }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>০৫। বায়নার উপর ৫% (শতকরা পাঁচ ভাগ) ফেরত যোগ্য</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ব্যাংকের নাম :</td>
                                        <td>
                                            @if ($participate->refundable)
                                                <?php $refundableData = json_decode($participate->refundable); ?>
                                                {{ $refundableData->name ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>সিডিআর / ড্রাপট নং :</td>
                                        <td>
                                            @if ($participate->refundable)
                                                <?php $refundableData = json_decode($participate->refundable); ?>
                                                {{ $refundableData->drapt_name ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>টাকার পরিমান :</td>
                                        <td>
                                            @if ($participate->refundable)
                                                <?php $refundableData = json_decode($participate->refundable); ?>
                                                {{ $refundableData->amount ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>নথি আপলোড করুন:</td>
                                        <td>
                                            <a href="{{ asset('uploads/' . $participate->refundable_document_file) }}"
                                                download>
                                                {{ $participate->refundable_document_file }}
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>০৬। সিডিউল মূল্য (অফেরতযোগ্য)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ব্যাংকের নাম :</td>
                                        <td>
                                            @if ($participate->schedule_price)
                                                <?php $schedule_priceData = json_decode($participate->schedule_price); ?>
                                                {{ $schedule_priceData->name ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>সিডিআর / ড্রাপট নং :</td>
                                        <td>
                                            @if ($participate->schedule_price)
                                                <?php $schedule_priceData = json_decode($participate->schedule_price); ?>
                                                {{ $schedule_priceData->drapt_name ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>টাকার পরিমান :</td>
                                        <td>
                                            @if ($participate->schedule_price)
                                                <?php $schedule_priceData = json_decode($participate->schedule_price); ?>
                                                {{ $schedule_priceData->amount ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>নথি আপলোড করুন:</td>
                                        <td>
                                            <a href="{{ asset('uploads/' . $participate->refundable_document_file) }}"
                                                download>
                                                {{ $participate->refundable_document_file }}
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>০৭। দর দাতার নাম :</td>
                                        <td>{{ $participate->bidder_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>মোবাইল নং-</td>
                                        <td>{{ $participate->bidder_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>০৮। পিতার নাম</td>
                                        <td>{{ $participate->bidder_father_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>০৯। মাতার নাম</td>
                                        <td>{{ $participate->bidder_mother_name }}</td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>১০। (ক) বর্তমান ঠিকানা</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>গ্রাম</td>
                                        <td>{{ $participate->a_village }}</td>
                                    </tr>
                                    <tr>
                                        <td>ডাকঘর</td>
                                        <td>{{ $participate->a_post }}</td>
                                    </tr>
                                    <tr>
                                        <td>উপজেলা</td>
                                        <td>{{ $participate->a_upazila }}</td>
                                    </tr>
                                    <tr>
                                        <td>জেলা</td>
                                        <td>{{ $participate->a_district }}</td>
                                    </tr>

                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>(খ) স্থায়ী ঠিকানা</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>গ্রাম</td>
                                        <td>{{ $participate->b_village }}</td>
                                    </tr>
                                    <tr>
                                        <td>ডাকঘর</td>
                                        <td>{{ $participate->b_post }}</td>
                                    </tr>
                                    <tr>
                                        <td>উপজেলা</td>
                                        <td>{{ $participate->b_upazila }}</td>
                                    </tr>
                                    <tr>
                                        <td>জেলা</td>
                                        <td>{{ $participate->b_district }}</td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>১১। স্বাক্ষীর নাম (১)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>নাম</td>
                                        <td>{{ $participate->a_witness_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>পিতার নাম</td>
                                        <td>{{ $participate->a_witness_father_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>গ্রাম</td>
                                        <td>{{ $participate->a_witness_village }}</td>
                                    </tr>
                                    <tr>
                                        <td>ডাকঘর</td>
                                        <td>{{ $participate->a_witness_post }}</td>
                                    </tr>
                                     <tr>
                                        <td>উপজেলা</td>
                                        <td>{{ $participate->a_witness_upazila }}</td>
                                    </tr>
                                    <tr>
                                        <td>জেলা</td>
                                        <td>{{ $participate->a_witness_district }}</td>
                                    </tr>
                                    <tr class="section-heading">
                                        <td colspan="2">
                                            <p>স্বাক্ষীর নাম (2)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>নাম</td>
                                        <td>{{ $participate->b_witness_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>পিতার নাম</td>
                                        <td>{{ $participate->b_witness_father_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>গ্রাম</td>
                                        <td>{{ $participate->b_witness_village }}</td>
                                    </tr>
                                    <tr>
                                        <td>ডাকঘর</td>
                                        <td>{{ $participate->b_witness_post }}</td>
                                    </tr>
                                     <tr>
                                        <td>উপজেলা</td>
                                        <td>{{ $participate->b_witness_upazila }}</td>
                                    </tr>
                                    <tr>
                                        <td>জেলা</td>
                                        <td>{{ $participate->b_witness_district }}</td>
                                    </tr>

                                    <tr>
                                        <td>Status :</td>
                                        <td>
                                            <form action="{{ route('admin.participate.update', $participate->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1"
                                                        {{ $participate->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="2"
                                                        {{ $participate->status == 0 ? 'selected' : '' }}>Pending</option>
                                                    <option value="3"
                                                        {{ $participate->status == 3 ? 'selected' : '' }}>Cancel</option>
                                                </select>
                                                <button type="submit" class="btn btn-primary mt-2">Update</button>
                                            </form>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
