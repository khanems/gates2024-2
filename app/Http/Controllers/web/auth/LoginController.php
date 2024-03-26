<?php

namespace App\Http\Controllers\web\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LoginController extends Controller
{

    public function login(Request $request)
    {
    //    return $request->all();
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           $user = Auth::user(); // Retrieve the authenticated user
        //   return $user->load('vendorId');

            // Authentication passed...
            if (Gate::allows('admin', $user)) {
                return redirect('/admin/');
            } elseif (Gate::allows('vendor', $user)) {
                return redirect('/vendor');
            } elseif (Gate::allows('user', $user)) {
                return redirect('/user');
            } else {
                return redirect('/')->with('error', 'Unauthorized access');
            }
        }

        return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput($request->only('email'));
    }


    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the user

        // Redirect the user to the login page with a success message
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
