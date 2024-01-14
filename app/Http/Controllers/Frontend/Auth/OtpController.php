<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function otpPage()
    {
        return view('frontend.auth.pages.otp.otp');
    }
}
