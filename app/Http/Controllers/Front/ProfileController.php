<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ResetSend;
use Illuminate\Http\Request;
use App\Models\Identity;
use App\Models\Token;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $identitas = Identity::all();
        $user = User::where('customerEmail', session()->get('email.customer'))->first();;
        
        $data=[
            'title'     => "Profile",
            'identitas' => $identitas[0],
            'countCart' => count($cart),
            'user'      => $user
        ];

        return view('front/profile',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function reset_pw()
    {
        
        $token = Token::requestTokenResetPassword(session()->get('email.customer'));

        $email = session()->get('email.customer');
        $nama = User::where('customerEmail', $email)->first()->customerName;
        $url = route('customer.reset', ['token' => $token->token]);
        $data=[
            'customerName' => $nama,
            'url' => $url
        ];
        Mail::to($email)->send(new ResetSend($data));

        return redirect()->route('profile')->with('success','Silahkan Cek Email Untuk Verifikasi');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find($request->id);

        $user->customerName = $request->nama;
        $user->customerPhoneNumber = $request->telp;

        $user->save();
        return redirect()->route('profile')->with(['success' => 'Edit Profil Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}