<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Tender;
use App\Models\Participate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tenders = Tender::get();
        return view('admin.tender.index', compact('tenders'));
    }
    public function showParticipants($id)
    {
        $tender = Tender::with('participants')->find($id);
        $participant = Participate::where('tender_id', $id)->get();

        return view('admin.participate_sorting.index', compact('participant', 'tender'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'contact_details' => 'nullable|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'method' => 'nullable|string',
            'condition' => 'nullable|string',
            'govment_price' => 'nullable|string',
            'shedeul_price' => 'nullable|string',
        ]);
        $tenderId = Str::random(8);

        $tenderId .= date('Ymd');

        $tenderId = preg_replace("/[^0-9]/", "", $tenderId);
        $tender_status = $request->has('status') ? 1 : 0;

        $tender = new Tender();
        $tender->name = $validatedData['name'];
        $tender->description = $validatedData['description'];
        $tender->contact_details = $validatedData['contact_details'];
        $tender->start_date = $validatedData['start_date'];
        $tender->end_date = $validatedData['end_date'];
        $tender->method = $validatedData['method'];
        $tender->condition = $validatedData['condition'];
        $tender->govment_price = $validatedData['govment_price'];
        $tender->shedeul_price = $validatedData['shedeul_price'];
        $tender->tender_id = $tenderId;
        $tender->status = $tender_status;

        $tender->user_id = auth()->user()->id;
        $tender->save();

        return redirect()->route('admin.tender.index')->with('success', 'Tender created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tender = Tender::find($id);
        return view('admin.tender.edit', compact('tender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tender = Tender::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'contact_details' => 'nullable|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'method' => 'nullable|string',
            'status' => 'nullable|boolean',
            'condition' => 'nullable|string',
            'govment_price' => 'nullable|string',
            'shedeul_price' => 'nullable|string',
        ]);

        // Update the tender attributes
        $tender->name = $validatedData['name'];
        $tender->description = $validatedData['description'];
        $tender->contact_details = $validatedData['contact_details'];
        $tender->start_date = $validatedData['start_date'];
        $tender->end_date = $validatedData['end_date'];
        $tender->method = $validatedData['method'];
        $tender->condition = $validatedData['condition'];
        $tender->govment_price = $validatedData['govment_price'];
        $tender->shedeul_price = $validatedData['shedeul_price'];
        if ($request->has('status')) {
            $tender->status = $validatedData['status'];
        }

        $tender->save();

        return redirect()->route('admin.tender.index')->with('success', 'Tender updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tender $tender)
    {
        $tender->delete();

        return redirect()->route('admin.tender.index')->with('success', 'Tender deleted successfully');
    }
}