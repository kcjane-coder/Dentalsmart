
<?php

use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

// Login Page
Route::get('/Login', function () {
    return view('authentication.Login');
})->name('Login');

// Register Page
Route::get('/Register', function () {
    return view('authentication.Register');
})->name('Register');

//Forgot Password Page
Route::get('/ForgotPassword', function () {
    return view('authentication.forgotpassword');
})->name('ForgotPassword');