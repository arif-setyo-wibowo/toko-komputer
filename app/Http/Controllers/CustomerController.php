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
use App\Models\Identity;

class CustomerController extends Controller
{
    
    public function login(Request $request)
    {
        
        $cart = $request->session()->get('cart.items', []);
        $data=[
            'title' => "Login",
            'identitas' => Identity::all(),
            'countCart' => count($cart)
        ];
        if (Auth::check()) {
            return redirect('front/home');
        }else{
            return view('/Auth/login',$data);
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
                    session(['id.customer' => $user->customerId]);
                    session(['email.customer' => $user->customerEmail]);
                    session(['nama.customer' => $user->customerName]);                    
                    session(['telp.customer' => $user->customerPhoneNumber]);                    
                    return redirect()->route('home');
                } else {
                    return redirect()->route('login')->withErrors(['email' => 'Akun belum diverifikasi'])->withInput();
                }
            } else {
                return redirect()->route('login')->withErrors(['password' => 'Password salah'])->withInput();
            }
        } else {
            return redirect()->route('login')->withErrors(['email' => 'Email tidak ditemukan'])->withInput();
        }
    }

    public function logout()
    {
        session()->forget('login.customer');
        session()->forget('id.customer');
        session()->forget('email.customer');
        session()->forget('nama.customer'); 
        session()->forget('telp.customer'); 
        return redirect()->route('login');
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
        session(['id.customer' => $customer->customerId]);
        session(['email.customer' => $customer->customerEmail]);
        session(['nama.customer' => $customer->customerName]);                    
        session(['telp.customer' => $customer->customerPhoneNumber]);  
        
        $data=[
            'customerName' => $request->customerName,
            'url' => request()->getHttpHost(). '/register/verify/'.$str
        ];

        Mail::to($request->customerEmail)->send(new MailSend($data));

        return redirect()->route('login')->with('succes','Silahkan Cek Email Untuk Verifikasi');
    }

    public function verify($verify_key)
    {       
        $cart = session()->get('cart.items', []);
        $data = [
            'identitas' => Identity::all(),
            'countCart' => count($cart)
        ];
        $keycheck = User::select('customerVerifyKey')
                        ->where('customerVerifyKey',$verify_key)
                        ->exists();
        if ($keycheck) {
            $user = User::where('customerVerifyKey',$verify_key)->update(['customerVerifyAt' => date('Y-m-d H:i:s')]);
                return view('Auth/verifikasi',$data);
            }else{
                return "Verifikasi Gagal";
            }
    }
    
    public function reset()
    {
        $data = [
            'identitas' => Identity::all(),
            // 'countCart' => count($cart)
        ];
        return view('Auth/resetPassword',$data);
    }
    public function reset_data()
    {
        $data = [
            'identitas' => Identity::all(),
            // 'countCart' => count($cart)
        ];
        return view('Auth/resetPassword',$data);
    }
}