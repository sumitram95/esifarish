<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Verification\VerificationController;

// Route::middleware('guest')->group(function () {
    Route::controller(VerificationController::class)->group(function () {
        Route::get('/verification', 'verificationPage')->name('verification.page');
        Route::post('/verification-check', 'verificationCheck')->name('verification.check');
        Route::get('/resend-verification', 'resendVerificationCode')->name('verification.resend_code');
    });
// });

