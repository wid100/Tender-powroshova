<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display user profile.
     */
    public function profile()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('admin.profile.index', compact('user'));
    }

    /**
     * Update user profile.
     */
    public function profileupdate(Request $request)
    {
        $user = Auth::user();
        if (!$user instanceof User) {
            $user = User::find($user->id);
        }

        // Validate request data
        $request->validate([
            'name'     => 'required|string|max:255',
            // 'email'    => 'required|email|unique:users,email,' . $user->id,
            'phone'    => 'nullable|string|max:20',
            'address'  => 'nullable|string|max:255',
            'city'     => 'nullable|string|max:100',
            'country'  => 'nullable|string|max:100',
            'region'   => 'nullable|string|max:100',
            'nid'      => 'nullable|string|max:50',
            'about'    => 'nullable|string',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists('public/profile_images/' . $user->image)) {
                Storage::delete('public/profile_images/' . $user->image);
            }

            // Store new image with unique name
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/profile_images', $imageName);
            $user->image = $imageName;
        }

        // Update user data
        $user->name = $request->name;
        // $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->region = $request->region;
        $user->nid = $request->nid;
        $user->about = $request->about;

        $user->save(); // Save changes to database

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function ViewPassword()
    {
        return view('admin.profile.change-password');
    }


    public function changePassword(Request $request)
    {
        $user = Auth::user();
        if (!$user instanceof User) {
            $user = User::find($user->id);
        }
        // Validate input fields
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        // Check if old password matches the current password in the database
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Your old password does not match our records.');
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
