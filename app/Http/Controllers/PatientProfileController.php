<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    /**
     * Patient Password Change 
     */
    public function patientPasswordChange(Request $request)
    {

        // Old password check 
        if( !password_verify( $request -> old_pass , Auth::guard('patient') -> user() -> password ) ){
            return back() -> with('danger', 'Old Password not match');
        }

        // password confirmation 
        if( $request -> pass != $request -> pass_confirmation ){
            return back() -> with('warning', 'Password confirmation failed');
        }


        $data = Patient::findOrFail(Auth::guard('patient') -> user() -> id);
        $data -> update([
            'password'  => Hash::make($request -> pass)
        ]);

        Auth::guard('patient') -> logout();

        return redirect() -> route('login.page') -> with('success', 'Patient password changed');



    }
}
