<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;


//require __DIR__ . '/auth.php';
Route::group(['prefix' => '/', 'middleware'=>'auth'], function () {
Route::get('', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::get('/personnels/list_centers', function () {
    return view('personnel.index');
})->name('personnels.list_centers');

Route::get('/personnels/list_personnels', function () {
    return view('personnel.list');
})->name('personnels.list_personnels');


});

// Route::any('/login',[AuthController::class,'login'])->name('login');
// Route::post('/check-otp',[AuthController::class,'checkOtp']);
// Route::post('/resend-otp',[AuthController::class,'resendOtp']);

Route::any('/login',[AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('/resend_otp',[AuthController::class,'resendOtp'])->middleware('guest')->name('resendOtp');
Route::post('/check_otp',[AuthController::class,'checkOtp'])->middleware('guest')->name('checkOtp');

Route::any('/register', [RegisterController::class,'register'])->middleware('guest')->name('register');


