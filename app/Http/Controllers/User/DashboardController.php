<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Participate;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $participateTenders=Participate::get();
        $tenderCount = Tender::count();
        return view('user.dashboard', compact('tenders', 'tenderCount', 'participateTenders'));
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
    public function ParticipateTender($id)
    {
        $tender = Tender::find($id);
        return view('user.participate-tender.index', compact('tender'));
    }
    public function showChangePasswordForm()
    {
        $user = Auth::user();
        $user = \App\Models\User::find($user->id); // Convert to User model instance
        return view('user.change-password.index', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();
        $user = \App\Models\User::find($user->id); // Convert to User model instance

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'The old password does not match our records.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.dashboard')->with('success', 'Password changed successfully.');
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