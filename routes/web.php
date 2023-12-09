<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/register', function () {
//     return view('auth.register');
// });
// Route::get('/reset_password', function () {
//     return view('auth.reset_password');
// });
// Route::get('/two_steps', function () {
//     return view('auth.two_steps');
// });
// Route::get('/verify_email', function () {
//     return view('auth.verify_email');
// });
// Route::get('/forgot_password', function () {
//     return view('auth.forgot_password');
// });
// Route::get('/register_multisteps', function () {
//     return view('auth.register_multisteps');
// });
