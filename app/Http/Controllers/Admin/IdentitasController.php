<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Identity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Identitas",
            'identitas' => Identity::all()
        ];

        return view('admin/identitas',$data);
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data=[
            'title' => "Identitas",
            'identitas' => Identity::all()
        ];
        
        $request->validate([
            'shopLogo' => 'image|mimes:png,jpg'
        ]); 

        $identitas = Identity::first();
        if ($request->file('shopLogo')) {
            File::delete('uploads/gambar/identitas/'.$identitas->shopLogo);
            $logo = $request->file('shopLogo');
            $shopLogoName = Str::random(20) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/gambar/identitas'), $shopLogoName);
            $identitas->shopLogo = $shopLogoName;
        }

        $identitas->shopName = $request->shopName;
        $identitas->shopAddress = $request->shopAddress;
        $identitas->shopPhoneNumber = $request->shopPhoneNumber;
        $identitas->shopEmail = $request->shopEmail;
        $identitas->save();

        return redirect()->route('admin.identitas',$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
