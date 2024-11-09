<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [AppointmentController::class,'save'])->name('save.appointment');

Route::get('/doctor/login',function(){
    return view('Doctor.Auth.login');
})->name('doctor.login');

Route::get('/doctor/registration',function(){
    return view('Doctor.Auth.signup');
})->name('doctor.registration');

Route::get('doctor/dashboard',function(){
    return view('Doctor.dashboard');
});

Route::post('/doctor/registration',[AuthController::class,'savedoc'])->name('doctor.registration.save');

Route::post('/doctor/login', [AuthController::class, 'DocLogin'])->name('doctor.login');
