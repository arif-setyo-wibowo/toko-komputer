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
            return redirect('/home');
        }else{
            return view('admin/logintest',$data);
        }
    }

    public function login_data(Request $request)
    {
        $data =[
            'customerEmail' => $request->customerEmail,
            'customerPassword' => $request->customerPassword
        ];

        if (Auth::attempt($data)) {
            return redirect('/home');
        }else{
            Session::flash('error','Email atau Password Salah');
        }
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
