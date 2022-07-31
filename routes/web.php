<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController; 
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\Auth\PatientAuthController;



// Frontend Controller 
Route::get('/', [ FrontendController::class, 'showHomePage' ]) -> name('home.page');
Route::get('/login', [ FrontendController::class, 'showLoginPage' ]) -> name('login.page') -> middleware('admin.redirect');



// patient pages 
Route::get('/patient-register', [ FrontendController::class, 'showPatientRegisterPage' ]) -> name('patient.reg.page') -> middleware('admin.redirect');
Route::get('/patient-dashboard', [ FrontendController::class, 'showPatientDashPage' ]) -> name('patient.dash.page') -> middleware('admin');
Route::get('/patient-settings', [ PatientProfileController::class, 'showPatientSettingsPage' ]) -> name('patient.settings.page') -> middleware('admin');
Route::get('/patient-password', [ PatientProfileController::class, 'showPatientPasswordPage' ]) -> name('patient.password.page') -> middleware('admin');
Route::post('/patient-password', [ PatientProfileController::class, 'patientPasswordChange' ]) -> name('patient.password.change') -> middleware('admin');

Route::post('/patient-register',  [ PatientAuthController::class, 'register' ]) -> name('patient.register');
Route::post('/patient-login',  [ PatientAuthController::class, 'login' ]) -> name('patient.login');
Route::get('/patient-logout',  [ PatientAuthController::class, 'logout' ]) -> name('patient.logout');
Route::get('/patient_account_activation/{token?}',  [ PatientAuthController::class, 'patientAccountActivation' ]) -> name('patient.account.activation');




// patient pages 
Route::get('/doctor-register', [ FrontendController::class, 'showDoctorRegisterPage' ]) -> name('doctor.reg.page');
Route::get('/doctor-dashboard', [ FrontendController::class, 'showDoctorDashPage' ]) -> name('doctor.dash.page');




// Facebook login system 
Route::get('facebook-login-req', [ SocialLoginController::class, 'sendFacebookLoginReq' ]) -> name('fb.req');
Route::get('facebook-login-system', [ SocialLoginController::class, 'loginWithFacebook' ]);




// Facebook login system 
Route::get('github-login-req', [ SocialLoginController::class, 'sendGithubLoginReq' ]);
Route::get('github-login-system', [ SocialLoginController::class, 'loginWithGithub' ]);



// Facebook login system 
Route::get('google-login-req', [ SocialLoginController::class, 'sendGoogleLoginReq' ]);
Route::get('google-login-system', [ SocialLoginController::class, 'loginWithGoogle' ]);



// Facebook login system 
Route::get('linkedin-login-req', [ SocialLoginController::class, 'sendLinkedinLoginReq' ]);
Route::get('linkedin-login-system', [ SocialLoginController::class, 'loginWithLinkedin' ]);

