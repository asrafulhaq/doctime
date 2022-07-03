<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientProfileController extends Controller
{
    
    /**
     * Show Patuent Setting pag e
     */
    public function showPatientSettingsPage()
    {
        return view('frontend.patient.settings');
    }


    /**
     * Show Patuent Setting pag e
     */
    public function showPatientPasswordPage()
    {
        return view('frontend.patient.password');
    }
}
