<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    /**
     * Send req for login facebook
     */
    public function sendFacebookLoginReq()
    {
        return Socialite::driver('facebook') -> redirect();
    }

    /**
     * Facebook Login Info
     */
    public function loginWithFacebook()
    {
        $user = Socialite::driver('facebook')->user(); 


        $login_user = Patient::where('facebook_id', $user -> id)-> first();

        if( $login_user ){

            Auth::guard('patient') -> login($login_user);
            return redirect('/patient-dashboard');

        } else {

            $patient = Patient::create([
                'name'          => $user -> name,
                'status'        => true, 
                'facebook_id'    => $user -> id, 
            ]);

            Auth::guard('patient') -> login($patient);
            return redirect('/patient-dashboard');

        }
        

    }



     /**
     * Send req for login facebook
     */
    public function sendGithubLoginReq()
    {
        return Socialite::driver('github') -> redirect();
    }

    /**
     * Facebook Login Info
     */
    public function loginWithGithub()
    {
        $user = Socialite::driver('github')->user(); 

        $login_user = Patient::where('github_id', $user -> id)-> first();

        if( $login_user ){

            Auth::guard('patient') -> login($login_user);
            return redirect('/patient-dashboard');

        } else {

            $patient = Patient::create([
                'name'          => $user -> name,
                'status'        => true, 
                'github_id'     => $user -> id, 
            ]);

            Auth::guard('patient') -> login($patient);
            return redirect('/patient-dashboard');

        }
        

    }






     /**
     * Send req for login facebook
     */
    public function sendGoogleLoginReq()
    {
        return Socialite::driver('google') -> redirect();
    }

    /**
     * Facebook Login Info
     */
    public function loginWithGoogle()
    {
        $user = Socialite::driver('google')->user(); 

        $login_user = Patient::where('google_id', $user -> id)-> first();

        if( $login_user ){

            Auth::guard('patient') -> login($login_user);
            return redirect('/patient-dashboard');

        } else {

            $patient = Patient::create([
                'name'          => $user -> name,
                'status'        => true, 
                'google_id'     => $user -> id, 
            ]);

            Auth::guard('patient') -> login($patient);
            return redirect('/patient-dashboard');

        }
        

    }




     /**
     * Send req for login facebook
     */
    public function sendLinkedinLoginReq()
    {
        return Socialite::driver('linkedin') -> redirect();
    }

    /**
     * Facebook Login Info
     */
    public function loginWithLinkedin()
    {
        $user = Socialite::driver('linkedin')->user(); 

        $login_user = Patient::where('linked_id', $user -> id)-> first();

        if( $login_user ){

            Auth::guard('patient') -> login($login_user);
            return redirect('/patient-dashboard');

        } else {

            $patient = Patient::create([
                'name'          => $user -> name,
                'status'        => true, 
                'linked_id'     => $user -> id, 
            ]);

            Auth::guard('patient') -> login($patient);
            return redirect('/patient-dashboard');

        }
        

    }




}
