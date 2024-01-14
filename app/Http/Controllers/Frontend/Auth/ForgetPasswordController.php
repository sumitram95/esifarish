<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function forgetPasswordPage(){
        return view('frontend.auth.pages.forget-password');
    }
}
