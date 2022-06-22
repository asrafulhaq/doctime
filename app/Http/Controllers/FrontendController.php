<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Show Home Page 
     */
    public function showHomePage()
    {
        return view('frontend.home'); 
    }


     /**
     * Show Login Page 
     */
    public function showLoginPage()
    {
        return view('frontend.login'); 
    }

     /**
     * Show patient Reg Page 
     */
    public function showPatientRegisterPage()
    {
        return view('frontend.patient.register'); 
    }

    /**
     * Show patient Dash Page 
     */
    public function showPatientDashPage()
    {
        return view('frontend.patient.dashboard'); 
    }

     /**
     * Show patient Reg Page 
     */
    public function showDoctorRegisterPage()
    {
        return view('frontend.doctor.register'); 
    }

    /**
     * Show patient Dash Page 
     */
    public function showDoctorDashPage()
    {
        return view('frontend.doctor.dashboard'); 
    }


}
