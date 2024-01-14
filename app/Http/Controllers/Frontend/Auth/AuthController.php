<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function registerPage()
    {
        $districs = District::get();
        return view('frontend.auth.pages.register', compact('districs'));
    }
    public function loginPage()
    {
        return view('frontend.auth.pages.login');
    }
    public function loggedIn(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])) {
            return redirect()->route('dashboard.index');
        }
        return back()->with('error', 'Invalid email and password');
    }
    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }

}
