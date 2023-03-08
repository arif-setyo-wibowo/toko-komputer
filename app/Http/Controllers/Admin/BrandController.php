<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Brand",
            'brand' => Brand::all()
        ];

        return view('admin/brand',$data);
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
        $request->validate([
            'brandName' => 'required',
            'brandLogo' => 'image|mimes:png,jpg,jpeg',
        ]);

        $brand = new Brand;
        if ($request->file('brandLogo')) {
            $logo = $request->file('brandLogo');
            $branLogoName = Str::random(20) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/gambar/brand'), $branLogoName);
            $brand->brandLogo = $branLogoName;
        }
        $brand->brandName = $request->brandName;
        $brand->brandCategory = $request->brandCategory;
        $brand->save();
        
        return redirect()->route('admin.brand')->with('succes','Berhasil Tambah Data');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
