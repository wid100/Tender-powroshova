<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participate;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{


    public function participate_print($id){
        $participate = Participate::findOrFail($id);
        return view("admin.participent-print", compact("participate"));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participates = Participate::where('status', '!=', 3)->get();
        // $participates = Participate::all();
        return view('admin.participate.index', compact('participates'));
    }

    public function draft()
    {
        // Fetch participations with status 3 (draft)
        $draftParticipates = Participate::where('status', 3)->get();
        return view('admin.draft_participate.index', compact('draftParticipates'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participate = Participate::findOrFail($id);
        // dd($participate); // Dump and die to see the structure of $participate
        return view('admin.participate.show', compact('participate'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $participate = Participate::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'status' => 'required|in:1,2,3', // Ensure status is one of the specified values
        ]);

        // Update the status
        $participate->status = $validatedData['status'];
        $participate->save();

        // Redirect to the index page with a success message
        return redirect()->route('admin.participate.index')->with('success', 'Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Participate $participate)
    {
        $participate->delete();

        return redirect()->route('admin.participate.index')->with('success', 'Tender deleted successfully');
    }
}
