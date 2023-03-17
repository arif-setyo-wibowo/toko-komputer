<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Memory;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;


class MemoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Memory",
            'memori' => Memory::with("brand")->get(),
            'merk' => Brand::all()
            
        ];

        return view('admin/memory',$data);
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
            'memoryImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $memory = new Memory;
        if ($request->file('memoryImage')) {
            $gambar = $request->file('memoryImage');
            $RamGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/ram'), $RamGambarName);
            $memory->memoryImage = $RamGambarName;
        }

        $memory->brandId = $request->brand;
        $memory->memoryName = $request->nama;
        $memory->memoryType = $request->type;
        $memory->memorySpeed = $request->speed;
        $memory->memoryCapacity = $request->capacity;
        $memory->memoryCasLatency = $request->latency;
        $memory->memoryVoltage = $request->volt;
        $memory->memoryWarranty = $request->garansi;
        $memory->memoryPrice = $request->harga;
        $memory->memoryStock = $request->stok;
        $memory->save();
        
        return redirect()->route('admin.memory')->with(['success' => 'Tambah Data Berhasil']);
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
        $data = Memory::with("brand")->where('memoryId', $id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
             'imageUpdate' => 'image|mimes:png,jpg,jpeg',
        ]);
        
        $memory = Memory::find($request->idUpdate);

        if ($request->file('imageUpdate')) {
            File::delete('uploads/gambar/ram/'.$memory->memoryImage);
            $gambar = $request->file('imageUpdate');
            $RamGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/ram'), $RamGambarName);
            $memory->memoryImage = $RamGambarName;
        }else{
            $memory->memoryImage = $request->imageAwal;
        }

        $memory->brandId = $request->brand;
        $memory->memoryName = $request->nama;
        $memory->memoryType = $request->type;
        $memory->memorySpeed = $request->speed;
        $memory->memoryCapacity = $request->capacity;
        $memory->memoryCasLatency = $request->latency;
        $memory->memoryVoltage = $request->volt;
        $memory->memoryWarranty = $request->garansi;
        $memory->memoryPrice = $request->harga;
        $memory->memoryStock = $request->stok;

        $memory->save();

        return redirect()->route('admin.memory')->with(['success' => 'Edit Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $memory = Memory::find($id);
        File::delete('uploads/gambar/ram/'.$memory->memoryImage);
        Memory::destroy($id);
        return redirect()->route('admin.memory')->with(['success' => 'Hapus Data Berhasil']);
    }
}
