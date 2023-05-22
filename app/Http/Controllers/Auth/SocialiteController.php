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
            return $this->createOrGetUser($user);
        }catch (Exception $e) {
            return redirect()->back();
        }
    }

    public function createOrGetUser($user)
    {
        $user = User::find($user->customerEmail);
        if($user){
            // login
            session(['login.customer' => true]);
            session(['email.customer' => $user->customerEmail]);
            session(['nama.customer' => $user->customerName]);
            return redirect('/administrator/paymentgateway');
        }else{
            // redirect register with data
            // session temp flash
            return redirect()->route('user.register')->with(['email.auth' => $user->customerEmail, 'nama.auth' =>  $user->customerName]);
        }
    }
}
