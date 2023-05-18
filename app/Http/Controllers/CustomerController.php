<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;

class CustomerController extends Controller
{
    
    public function login()
    {
        $data =[
            'title' => 'login'
        ];
        if (Auth::check()) {
            return redirect('front/home');
        }else{
            return view('admin/logintest',$data);
        }
    }

    public function login_data(Request $request)
    {
        $request->validate([
            'customerEmail' => 'required|email',
            'customerPassword' => 'required|min:6',
        ]);

        $user = User::where('customerEmail', $request->customerEmail)->first();

        if ($user) {
            if (password_verify($request->customerPassword, $user->customerPassword)) {
                if (!empty($user->customerVerifyAt)) { 
                    session(['login.customer' => true]);
                    session(['email.customer' => $user->customerEmail]);
                    session(['nama.customer' => $user->customerName]);                    
                    return redirect('/paymentgateway');
                } else {
                    return redirect()->route('admin.login')->withErrors(['email' => 'Akun belum diverifikasi'])->withInput();
                }
            } else {
                return redirect()->route('admin.login')->withErrors(['password' => 'Password salah'])->withInput();
            }
        } else {
            return redirect()->route('admin.login')->withErrors(['email' => 'Email tidak ditemukan'])->withInput();
        }
    }

    public function logout()
    {
        session()->forget('login.customer');
        session()->forget('email.customer');
        session()->forget('nama.customer'); 
        return redirect()->route('admin.login');
    }

    public function signup()
    {
        $data =[
            'title' => 'register'
        ];
        return view('admin/registertest',$data);
    }
    public function signup_data(Request $request)
    {
        $request->validate([
            'customerEmail' => 'required|email|unique:users',
            'customerPassword' => 'required|min:6'
        ]);
        $str = Str::random(100);
        $customer = new User;
        $customer->customerName = $request->customerName;
        $customer->customerEmail = $request->customerEmail;
        $customer->customerPhoneNumber = $request->customerPhoneNumber;
        $customer->customerPassword = Hash::make($request->customerPassword);
        $customer->customerVerifyKey = $str;
        $customer->save();
        session(['login.customer' => true]);
        session(['email.customer' => $customer->customerEmail]);
        session(['nama.customer' => $customer->customerName]);
        
        $data=[
            'customerName' => $request->customerName,
            'url' => request()->getHttpHost(). '/registertest/verify/'.$str
        ];

        Mail::to($request->customerEmail)->send(new MailSend($data));

        return redirect()->route('admin.login')->with('succes','Silahkan login');
    }

    public function verify($verify_key)
    {       
        $keycheck = User::select('customerVerifyKey')
                        ->where('customerVerifyKey',$verify_key)
                        ->exists();
        if ($keycheck) {
            $user = User::where('customerVerifyKey',$verify_key)->update(['customerVerifyAt' => date('Y-m-d H:i:s')]);
                return "Verifikasi berhasil";
            }else{
                return "Verifikasi Gagal";
            }
    }
    
}
