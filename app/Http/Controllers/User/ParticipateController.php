<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;

use App\Http\Controllers\Controller;

use App\Models\Participate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();

        $participations = Participate::where('user_id', $userId)->get();
        return view('user.my-tender.index', compact('participations'));
    }

    public function CloseTender()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Get today's date
        $today = Carbon::today();

        // Query to get participations for the authenticated user
        $participations = Participate::where('user_id', $userId)
            ->with('tender') // Eager load the related tender
            ->get();

        // Filter the participations to include only tenders closing today
        $closeTenders = $participations->filter(function ($participation) use ($today) {
            return Carbon::parse($participation->tender->end_date)->isSameDay($today);
        });

        // Return the view with the filtered close tenders
        return view('user.close-tender.index', compact('closeTenders'));
    }



    public function AwardTenderList()
    {
        $userId = Auth::id();

        $awardTenders = Participate::where('user_id', $userId)
            ->where('status', 1)
            ->get();

        return view('user.award-tender-list.index', compact('awardTenders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


        $participate = new Participate();
        $participate->user_id = Auth::user()->id;
        $participate->tender_id = $request->input('tender_id');
        $participate->tender_ref_id = $request->input('tender_ref_id');
        $participate->title = $request->input('title');
        $participate->palace_name = $request->input('palace_name');
        $participate->location = $request->input('location');
        $participate->lease_price_number = $request->input('lease_price_number');
        $participate->lease_price_text = $request->input('lease_price_text');
        $participate->bank_name = $request->input('bank_name');
        $participate->draft_no = $request->input('draft_no');
        $participate->pay_date = $request->input('pay_date');
        $participate->pay_amount = $request->input('pay_amount');


        if ($request->hasFile('biyna_upload_file')) {
            $file = $request->file('biyna_upload_file');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $participate->biyna_upload_file = $fileName; // Save file name to database
        }


        $participate->ejara_bank_name = $request->input('ejara_bank_name');
        $participate->ejara_draft_no = $request->input('ejara_draft_no');
        $participate->ejara_pay_date = $request->input('ejara_pay_date');

        if ($request->hasFile('ejara_upload_file')) {
            $file = $request->file('ejara_upload_file');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $participate->ejara_upload_file = $fileName; 
        }

        $participate->ejara_pay_amount = $request->input('ejara_pay_amount');

        // Save contact information
        // $participate->refundable = $request->input('refundable');
        // $participate->schedule_price = $request->input('schedule_price');
        $participate->refundable = json_encode($request->input('refundable'));
        $participate->schedule_price = json_encode($request->input('schedule_price'));

        if ($request->hasFile('refundable_document_file')) {
            $file = $request->file('refundable_document_file');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $participate->refundable_document_file = $fileName; // Save file name to database
        }

        if ($request->hasFile('schedule_price_document_file')) {
            $file = $request->file('schedule_price_document_file');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $participate->schedule_price_document_file = $fileName; // Save file name to database
        }





        $participate->bidder_name = $request->input('bidder_name');
        $participate->bidder_number = $request->input('bidder_number');
        $participate->bidder_father_name = $request->input('bidder_father_name');
        $participate->bidder_mother_name = $request->input('bidder_mother_name');

        $participate->a_village = $request->input('a_village');
        $participate->a_post = $request->input('a_post');
        $participate->a_upazila = $request->input('a_upazila');
        $participate->a_district = $request->input('a_district');

        $participate->b_village = $request->input('b_village');
        $participate->b_post = $request->input('b_post');
        $participate->b_upazila = $request->input('b_upazila');
        $participate->b_district = $request->input('b_district');


        $participate->a_witness_name = $request->input('a_witness_name');
        $participate->a_witness_father_name = $request->input('a_witness_father_name');
        $participate->a_witness_village = $request->input('a_witness_village');
        $participate->a_witness_post = $request->input('a_witness_post');
        $participate->a_witness_upazila = $request->input('a_witness_upazila');
        $participate->a_witness_district = $request->input('a_witness_district');


        $participate->b_witness_name = $request->input('b_witness_name');
        $participate->b_witness_father_name = $request->input('b_witness_father_name');
        $participate->b_witness_village = $request->input('b_witness_village');
        $participate->b_witness_post = $request->input('b_witness_post');
        $participate->b_witness_upazila = $request->input('b_witness_upazila');
        $participate->b_witness_district = $request->input('b_witness_district');
        // dd($participate);
        $participate->save();
        $participateId = $participate->id;

        return redirect()->route('user.print.participate', ['id' => $participateId])->with('success', 'Tender created successfully');
        // return redirect()->route('user.my-tender')->with('success', 'Participant information has been stored successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participate  $participate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Fetch the tender data by ID
        $participate = Participate::findOrFail($id);

        // Pass the tender data to the view
        return view('user.print.participate')->with('participate', $participate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participate  $participate
     * @return \Illuminate\Http\Response
     */
    public function edit(Participate $participate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participate  $participate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participate $participate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participate  $participate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participate $participate)
    {
        //
    }
}
