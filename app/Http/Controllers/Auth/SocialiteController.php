<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    public function handleProvideCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            $finduser = User::where('customerEmail','=', $user->email)->first();
            if($finduser){
                // login
                session(['login.customer' => true]);
                session(['email.customer' => $finduser->customerEmail]);
                session(['nama.customer' => $finduser->customerName]);
                return redirect()->route('home');
            }else{
                // redirect register with data
                return redirect()->route('register')->with(['email.auth' => $user->email]);
            }
        }catch (Exception $e) {
            return redirect()->back();
        }
    }    
}