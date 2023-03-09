<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Memory;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class MemoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Memori",
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
            $logo = $request->file('memoryImage');
            $RamLogoName = Str::random(20) . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/gambar/ram'), $RamLogoName);
            $memory->memoryImage = $RamLogoName;
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Memory::destroy($id);
        return redirect()->route('admin.memory')->with(['success' => 'Hapus Data Berhasil']);
    }
}
