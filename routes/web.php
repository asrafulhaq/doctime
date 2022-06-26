<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController; 
use App\Http\Controllers\Auth\PatientAuthController;



// Frontend Controller 
Route::get('/', [ FrontendController::class, 'showHomePage' ]) -> name('home.page');
Route::get('/login', [ FrontendController::class, 'showLoginPage' ]) -> name('login.page');

// patient pages 
Route::get('/patient-register', [ FrontendController::class, 'showPatientRegisterPage' ]) -> name('patient.reg.page');
Route::get('/patient-dashboard', [ FrontendController::class, 'showPatientDashPage' ]) -> name('patient.dash.page');
Route::post('/patient-register',  [ PatientAuthController::class, 'register' ]) -> name('patient.register');
Route::post('/patient-login',  [ PatientAuthController::class, 'login' ]) -> name('patient.login');

// patient pages 
Route::get('/doctor-register', [ FrontendController::class, 'showDoctorRegisterPage' ]) -> name('doctor.reg.page');
Route::get('/doctor-dashboard', [ FrontendController::class, 'showDoctorDashPage' ]) -> name('doctor.dash.page');


