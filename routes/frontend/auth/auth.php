<?php

use App\Http\Controllers\Frontend\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Auth\ForgetPasswordController;
use App\Http\Controllers\Frontend\Auth\OtpController;
use App\Http\Controllers\Backend\Esifarish\EsifarishCommonController;


Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return redirect()->route('login');
    });

    // ********************Auth Controller **************************************/
    Route::controller(AuthController::class)->group(function () {
        Route::get('/register', 'registerPage')->name('register');
        Route::get('/', 'loginPage')->name('login');
        Route::post('/logged', 'loggedIn')->name('logged.in');
    });


    // ********************Forget password controller **************************************/
    Route::controller(ForgetPasswordController::class)->group(function () {
        Route::get('/forget-password', 'forgetPasswordPage')->name('forget.password');
    });

    // ********************Otp controller **************************************/
    Route::controller(OtpController::class)->group(function () {
        Route::get('/otp', 'otpPage')->name('otp');
    });

    Route::controller(EsifarishCommonController::class)->group(function () {
        Route::post('/register-all', 'commonMethod')->name('all.data.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return 'Esifarish Dashboard';
    })->name('dashboard.index');
});


Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');

