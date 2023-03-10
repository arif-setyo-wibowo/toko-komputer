<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'brandLogo' => 'image|mimes:png,jpg,jpeg',
        ]);

        $brand = new Brand;
        if ($request->file('brandLogo')) {
            $logo = $request->file('brandLogo');
            $brandLogoName = Str::random(20) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/gambar/brand'), $brandLogoName);
            $brand->brandLogo = $brandLogoName;
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
        $data = Brand::where('brandId', $id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'brandLogo' => 'image|mimes:png,jpg,jpeg',
        ]);

        $brand = Brand::find($request->brandIdUpdate);

        if ($request->file('brandLogoUpdate')) {
            File::delete('uploads/gambar/brand/'.$brand->brandLogo);
            $gambar = $request->file('brandLogoUpdate');
            $brandGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/brand'), $brandGambarName);
            $brand->brandLogo = $brandGambarName;
        }else{
            $brand->brandLogo = $request->imageAwal;
        }

        $brand->brandName = $request->brandNameUpdate;
        $brand->brandCategory = $request->brandCategoryUpdate;
        $brand->save();

        return redirect()->route('admin.brand')->with(['success' => 'Edit Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::destroy($id);
        return redirect()->route('admin.brand')->with(['success' => 'Hapus Data Berhasil']);
    }
}
