<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MailSend;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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
                if (!empty($finduser->customerVerifyAt)) { 
                    // login
                    session(['login.customer' => true]);
                    session(['email.customer' => $finduser->customerEmail]);
                    session(['nama.customer' => $finduser->customerName]);                        
                    return redirect()->route('home');
                }
            }else{
                // redirect register with data
                $str = Str::random(100);
                $customer = new User;
                $customer->customerName = $user->name;
                $customer->customerEmail = $user->email;
                $customer->customerPhoneNumber = '-';
                $customer->customerPassword = '';
                $customer->customerVerifyKey = $str;
                $customer->save();
                session(['login.customer' => true]);
                session(['id.customer' => $customer->customerId]);
                session(['email.customer' => $customer->customerEmail]);
                session(['nama.customer' => $customer->customerName]);                    
                session(['telp.customer' => $customer->customerPhoneNumber]);  
                
                $data=[
                    'customerName' => $user->name,
                    'url' => request()->getHttpHost(). '/register/verify/'.$str
                ];

                Mail::to($user->email)->send(new MailSend($data));

                return redirect()->route('login')->with('succes','Silahkan Cek Email Untuk Verifikasi');       
            }
        }catch (Exception $e) {
            return redirect()->back();
        }
    }    
}