<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Storage;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Storage",
            'storage' => Storage::with("brand")->get(),
            'merk' => Brand::all()
        ];

        return view('admin/storage',$data);
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
            'storageImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $storage = new Storage;
        if ($request->file('storageImage')) {
            $gambar = $request->file('storageImage');
            $StorageGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/storage'), $StorageGambarName);
            $storage->storageImage = $StorageGambarName;
        }

        $storage->brandId = $request->brandId;
        $storage->storageName = $request->storageName;
        $storage->storageType = $request->storageType;
        $storage->storageSize = $request->storageSize . " " . $request->storageSize2;
        $storage->storageReadSpeed = $request->storageReadSpeed;
        $storage->storageWriteSpeed = $request->storageWriteSpeed;
        $storage->storageRpm = $request->storageRpm;
        $storage->storageDimension = $request->storageDimension;
        $storage->storageWarranty = $request->storageWarranty;
        $storage->storagePrice = $request->storagePrice;
        $storage->storageStock = $request->storageStock;
        $storage->save();
        
        return redirect()->route('admin.storage')->with(['success' => 'Tambah Data Berhasil']);
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
        $data = Storage::with("brand")->where('storageId', $id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'storageImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $storage = Storage::find($request->idUpdate);

        if ($request->file('imageUpdate')) {
            File::delete('uploads/gambar/storage/'.$storage->storageImage);
            $gambar = $request->file('imageUpdate');
            $StorageGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/storage'), $StorageGambarName);
            $storage->storageImage = $StorageGambarName;
        }else{
            $storage->storageImage = $request->imageAwal;
        }

        $storage->brandId = $request->brandId;
        $storage->storageName = $request->storageName;
        $storage->storageType = $request->storageType;
        $storage->storageSize = $request->storageSize . " " . $request->storageSize2;
        $storage->storageReadSpeed = $request->storageReadSpeed;
        $storage->storageWriteSpeed = $request->storageWriteSpeed;
        $storage->storageRpm = $request->storageRpm;
        $storage->storageDimension = $request->storageDimension;
        $storage->storageWarranty = $request->storageWarranty;
        $storage->storagePrice = $request->storagePrice;
        $storage->storageStock = $request->storageStock;
        $storage->save();
        
        return redirect()->route('admin.storage')->with(['success' => 'Tambah Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $storage = Storage::find($id);
        File::delete('uploads/gambar/storage/'.$storage->storageImage);
        Storage::destroy($id);
        return redirect()->route('admin.storage')->with(['success' => 'Hapus Data Berhasil']);
    }
}