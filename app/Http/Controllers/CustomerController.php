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
use App\Mail\ResetSend;
use App\Models\Identity;
use App\Models\Token;

class CustomerController extends Controller
{
    
    public function login(Request $request)
    {
        
        $cart = $request->session()->get('cart.items', []);
        $identitas = Identity::all();
        
        $data=[
            'title' => "Login",
            'identitas' => $identitas[0],
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
        $identitas = Identity::all();
        $data = [
            'identitas' => $identitas[0],
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
        $cart = session()->get('cart.items', []);
        $identitas = Identity::all();
        $data = [
            'identitas' => $identitas[0],
            'countCart' => count($cart)
        ];
        return view('Auth/resetPassword',$data);
    }

    public function reset_req(Request $request)
    {
        $request->validate([
            'customerEmail' => 'required|email',
        ]);
        
        $token = Token::requestTokenResetPassword($request->customerEmail);

        $email = $request->customerEmail;
        $nama = User::where('customerEmail', $email)->first()->customerName;
        $url = route('customer.reset', ['token' => $token->token]);
        $data=[
            'customerName' => $nama,
            'url' => $url
        ];
        Mail::to($email)->send(new ResetSend($data));

        return redirect()->route('reset')->with('success','Silahkan Cek Email Untuk Verifikasi');
    }

    public function resetPassword($token)
    {
        $cart = session()->get('cart.items', []);
        $token = Token::where('token', $token)->first();
        $identitas = Identity::all();
        if ($token) {
            return view('Auth/passwordChange', [
                'token' => $token->token,
                'identitas' => $identitas[0],
                'countCart' => count($cart)
            ]);
        } else {
            return redirect()->route('login')->with('error', 'Token tidak ditemukan');
        }
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'customerPassword' => 'required|min:6',
        ]);

        $token = Token::where('token', $request->token)->first();
        if ($token) {
            $customer = User::where('customerEmail', $token->email)->first();
            $customer->customerPassword = bcrypt($request->customerPassword);
            $customer->save();
            $token->delete();
            return redirect()->route('login')->with('succes', 'Berhasil mereset password');
        } else {
            return redirect()->route('login')->with('error', 'Token tidak ditemukan');
        }
    }
}