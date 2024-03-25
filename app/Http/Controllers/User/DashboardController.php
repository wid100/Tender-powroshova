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
        $userId = Auth::id();

        $participations = Participate::where('user_id', $userId)->get();
        $tenders = Tender::get();
        $participateTenders = Participate::get();
        $tenderCount = Tender::count();
        return view('user.dashboard', compact('tenders', 'tenderCount', 'participateTenders', 'participations'));
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


    // public function MyTenderList()
    // {
    //     $userId = Auth::id();

    //     $participations = Participate::where('user_id', $userId)->get();

    //     return view('user.my-tender.index', compact('participations'));
    // }



    // public function AwardTenderList()
    // {
    //     $awardTenders = Tender::get();
    //     return view('user.award-tender-list.index', compact('awardTenders'));
    // }





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
}
