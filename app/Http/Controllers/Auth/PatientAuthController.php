<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientAuthController extends Controller
{


    /**
     * Patient Register 
     */
    public function register(Request $request)
    {
        // data validate 
        $this -> validate($request , [
            'name'              => 'required',
            'email'             => 'required|email',
            'mobile'            => 'required',
            'pass'              => 'required|confirmed',
        ]);

        // data store 
        $patient = Patient::create([
            'name'          => $request -> name,
            'email'         => $request -> email,
            'mobile'        => $request -> mobile,
            'password'      => password_hash($request -> pass, PASSWORD_DEFAULT), 
        ]);

        // return back
        return redirect() -> route('patient.reg.page') -> with('success', "Hi ". $patient -> name .", Your account is ready. Now login");

    }




     /**
     * Patient Login 
     */
    public function login(Request $request)
    {
        // data validate 
        $this -> validate($request , [
            'email'                 => 'required',
            'password'              => 'required',
        ]);

       return $request -> all();

    }


}
