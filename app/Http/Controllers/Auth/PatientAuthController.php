<?php

namespace App\Http\Controllers\Auth;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\PatientAccountActivationNotification;
use Illuminate\Support\Facades\Auth;

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
            'email'             => 'required|email|unique:patients',
            'mobile'            => 'required',
            'pass'              => 'required|confirmed',
        ]);


        // create a token 
        $token = md5(time().rand());




        // data store 
        $patient = Patient::create([
            'name'          => $request -> name,
            'email'         => $request -> email,
            'mobile'        => $request -> mobile,
            'access_token'  => $token,
            'password'      => password_hash($request -> pass, PASSWORD_DEFAULT), 
        ]);


        // Send account activation link 
        $patient -> notify(new PatientAccountActivationNotification($patient));

        // return back
        return redirect() -> route('patient.reg.page') -> with('success', "Hi ". $patient -> name .", Your account is ready. Now login");

    }

    /**
     * Patient account activation 
     */
    public function patientAccountActivation($token = null)
    {
         
        // check token 
        if( !$token ){
            return redirect() -> route('login.page') -> with('danger', 'Access token not found');
        }


        // check token 
        if( $token ){

           $patient_data =  Patient::where('access_token', $token) -> first();

           if( $patient_data ){

            $patient_data -> update([
                'access_token'      => NULL, 
                'status'            => true
            ]);

            return redirect() -> route('login.page') -> with('success', 'Hi '. $patient_data ->  name .' Your account is varified, Now Log In');

           } else {
                return redirect() -> route('login.page') -> with('warning', 'Access Token not match');
           }


            

        }
        

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

       
        // auth process
        if( Auth::guard('patient') -> attempt([ 'email' => $request -> email , 'password' => $request -> password ]) || Auth::guard('patient') -> attempt([ 'mobile' => $request -> email , 'password' => $request -> password ]) ){    

            if( Auth::guard('patient') -> user() -> access_token == null &&  Auth::guard('patient') -> user() -> status == true ){

                return redirect() -> route('patient.dash.page');

            }else {

                Auth::guard('patient') -> logout();
                return redirect() -> route('login.page') -> with('warning', 'Apnar account ti doya kore active koron');

            }



        }else {
            return redirect() -> route('login.page') -> with('danger', 'Wrong email or password');
        }





    }

    /**
     * Patient Logout 
     */
    public function logout()
    {
        Auth::guard('patient') -> logout();
        return redirect() -> route('login.page');
        
    }


}
