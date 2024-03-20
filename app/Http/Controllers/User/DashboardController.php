<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::get();
        $tenderCount = Tender::count();
        return view('user.dashboard', compact('tenders', 'tenderCount'));
    }
    public function userMangement()
    {
        return view('user.user-mangement.index');
    }
    public function liveTender()
    {
        $tenders = Tender::get();
        return view('user.live-tender.index', compact('tenders'));
    }
    public function liveTenderId($id)
    {
        $tender = Tender::find($id);
        return view('user.live-tender.show', compact('tender'));
    }
    public function ParticipateTender()
    {
        return view('user.participate-tender.index');
    }
    public function changePassword()
    {
        return view('user.change-password.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
