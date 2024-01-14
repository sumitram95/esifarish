<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
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

        if (Auth::attempt(['email'=>$validate['email'], 'password'=>$validate['password']])) {
            return auth()->user();
        }

        return back()->with('error','Invalid Email and Password');

    }

}
