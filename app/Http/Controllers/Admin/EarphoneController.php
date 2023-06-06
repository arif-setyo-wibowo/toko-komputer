<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Earphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class EarphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Earphone",
            'merk' => Brand::all(),
            'earphone' => Earphone::with("brand")->get()
        ];

        return view('admin/earphone',$data);
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
            'earphoneImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $earphone = new Earphone;
        if ($request->file('earphoneImage')) {
            $gambar = $request->file('earphoneImage');
            $earphoneGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $earphoneGambarName);
            $earphone->earphoneImage = $earphoneGambarName;
        }

        $earphone->brandId = $request->brandearphone;
        $earphone->earphoneName = $request->earphoneName;
        $earphone->earphoneType = $request->earphoneType;
        $earphone->earphoneSensitivity = $request->earphoneSensitivity;
        $earphone->earphoneImpedance = $request->earphoneImpedance;
        $earphone->earphoneDriver = $request->earphoneDriver;
        $earphone->earphoneConnection = $request->earphoneConnection;
        $earphone->earphoneSoundSig = $request->earphoneSoundSig;
        $earphone->earphoneHaveMic = $request->earphoneHaveMic;
        $earphone->earphoneDescription = $request->earphoneDescription;
        $earphone->earphoneWarranty = $request->earphoneWarranty;
        $earphone->earphoneStock = $request->earphoneStock;
        $earphone->earphonePrice = $request->earphonePrice;
        $earphone->save();
            
        return redirect()->route('administrator.earphone')->with(['success' => 'Tambah Data Berhasil']);
           
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
        $data = Earphone::with("brand")->where('earphoneId', $id)->get();
        return $data->toJson();
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
        $earphone = Earphone::find($id);
        File::delete('uploads/'.$earphone->earphoneImage);
        $earphone::destroy($id);
        return redirect()->route('administrator.earphone')->with(['success' => 'Hapus Data Berhasil']);
    }
}
