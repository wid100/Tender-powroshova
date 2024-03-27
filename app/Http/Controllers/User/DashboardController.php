<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Participate;
use App\Models\Tender;
use Carbon\Carbon;
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

        // Get today's date
        $today = Carbon::today();

        // Calculate the date 7 days ago
        $sevenDaysAgo = Carbon::now()->subDays(7);

        // Query to get participations for the authenticated user
        $participations = Participate::where('user_id', $userId)->get();

        // Filter the participations to include only tenders closing today
        $closeTenders = $participations->filter(function ($participation) use ($today) {
            return Carbon::parse($participation->tender->end_date)->isSameDay($today);
        });

        // Count of tenders closing today
        $closeTenderCount = $closeTenders->count();

        // Query to get awarded tenders for the authenticated user
        $awardTenders = Participate::where('user_id', $userId)
            ->where('status', 1)
            ->get();
        $awardedTenderCount = $awardTenders->count();

        // Query to count tenders created within the last 7 days
        $latestTenderCount = Tender::where('created_at', '>=', $sevenDaysAgo)->count();

        // Additional data retrieval
        $tenders = Tender::get();
        $participateTenders = Participate::get();
        $tenderCount = Tender::count();

        return view('user.dashboard', compact('tenders', 'tenderCount', 'participateTenders', 'participations', 'awardedTenderCount', 'closeTenderCount', 'latestTenderCount'));
    }

    public function liveTender()
    {
        $tenders = Tender::get();
        return view('user.live-tender.index', compact('tenders'));
    }
    public function latestTender()
    {
        // Calculate the date 7 days ago
        $sevenDaysAgo = Carbon::now()->subDays(7);

        // Query to get tenders created within the last 7 days
        $tenders = Tender::where('created_at', '>=', $sevenDaysAgo)->get();

        return view('user.latest-tender.index', compact('tenders'));
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
