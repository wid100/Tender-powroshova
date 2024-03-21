<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/'; 

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2, // Set default role ID if necessary
        ]);
    }

    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->role_id == 1) {
            return '/admin/dashboard'; // Redirect admin users to admin dashboard
        } elseif (Auth::check() && Auth::user()->role_id == 2) {
            return '/user/dashboard'; // Redirect user users to user dashboard
        } else {
            return $this->redirectTo; // Redirect other users to the default route
        }
    }
}
