<?php

namespace App\Http\Controllers\Frontend\Verification;

use App\Http\Controllers\Controller;
use App\Models\EsifarishCitizenUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function verificationPage()
    {
        return view("frontend.auth.pages.verification");
    }

    public function verificationCheck(Request $request)
    {
        $validate = $request->validate([
            'verification_code' => 'required|numeric',
        ]);

        $verification = EsifarishCitizenUser::where('email', auth()->user()->email)->where('verification_code', $validate['verification_code'])->first();

        if (!$verification) {
            return back()->with('error', 'Wrong Verification Code');
        }
        $verification->email_verified_at = now();
        $verification->save();
        return redirect()->route('dashboard.index');
    }

    public function resendVerificationCode()
    {
        return 'resend';
    }
}
