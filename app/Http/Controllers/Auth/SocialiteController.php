<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
            $user = Socialite::driver($provider)->user();
            $finduser = User::where('customerEmail','=', $user->email)->first();
            if($finduser){
                if (!empty($finduser->customerVerifyAt)) { 
                    session(['login.customer' => true]);
                    session(['id.customer' => $finduser->customerId]);
                    session(['email.customer' => $finduser->customerEmail]);
                    session(['nama.customer' => $finduser->customerName]);                           
                    return redirect()->route('home');
                } else {
                    return redirect()->route('login')->withErrors(['email' => 'Akun belum diverifikasi'])->withInput();
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
                $customer->customerVerifyAt = date('Y-m-d H:i:s');
                $customer->customerGoogle = $str;
                $customer->save();
                session(['login.customer' => true]);
                session(['email.customer' => $customer->customerEmail]);
                session(['nama.customer' => $customer->customerName]);      

                return redirect()->route('home');       
            }
        }
    }    
