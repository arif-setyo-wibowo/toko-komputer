<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Motherboard;
use App\Models\ProcessorSocket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MoboController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "MotherBoard",
            'mobo' => Motherboard::with("brand","socket")->get(),
            'merk' => Brand::all(),
            'processor' => ProcessorSocket::all()

        ];
        return view('admin/motherboard',$data);
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
            'moboImage' => 'image|mimes:png,jpg,jpeg'
        ]);

        $mobo = new Motherboard;
        if ($request->file('moboImage')) {
            $image = $request->file('moboImage');
            $moboLogoName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gambar/mobo'), $moboLogoName);
            $mobo->moboImage = $moboLogoName;
        }

        if (!empty($request->moboPort)) {
            $moboPort = join(', ',$request->moboPort);
        }else{
            $moboPort = ',';
        }
        $mobo->moboPort = $moboPort;
        $mobo->processorSocketId = $request->processorSocketId;
        $mobo->brandId = $request->brandId;
        $mobo->moboName = $request->moboName;
        $mobo->moboChipset = $request->moboChipset;
        $mobo->moboStorageSata = $request->moboStorageSata;
        $mobo->moboStorageM2 = $request->moboStorageM2;
        $mobo->moboFormFactor = $request->moboFormFactor;
        $mobo->moboMemoryType = $request->moboMemoryType;
        $mobo->moboMemoryCap = $request->moboMemoryCap;
        $mobo->moboMemorySlot = $request->moboMemorySlot;
        $mobo->moboDescription = $request->moboDescription;
        $mobo->moboWarranty = $request->moboWarranty;
        $mobo->moboPrice = $request->moboPrice;
        $mobo->moboStock = $request->moboStock;
        $mobo->save();


        return redirect()->route('admin.mobo')->with(['success' => 'Tambah Data Berhasil']);
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
        $data = Motherboard::with("brand")->with('socket')->where('moboId', $id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'imageUpdate' => 'image|mimes:png,jpg,jpeg'
        ]);

        $mobo = Motherboard::find($request->idUpdate);
        if ($request->file('imageUpdate')) {
            File::delete('uploads/gambar/mobo/'.$mobo->moboImage);
            $image = $request->file('imageUpdate');
            $moboLogoName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gambar/mobo'), $moboLogoName);
            $mobo->moboImage = $moboLogoName;
        }else{
            $mobo->moboImage = $request->imageAwal;
        }

        if (!empty($request->portUpdate)) {
            $moboPort = join(', ',$request->portUpdate);
        }else{
            $moboPort = ',';
        }
        $mobo->moboPort = $moboPort;
        $mobo->processorSocketId = $request->socketUpdate;
        $mobo->brandId = $request->brandUpdate;
        $mobo->moboName = $request->namaUpdate;
        $mobo->moboChipset = $request->chipsetUpdate;
        $mobo->moboStorageSata = $request->sataUpdate;
        $mobo->moboStorageM2 = $request->M2Update;
        $mobo->moboFormFactor = $request->ffUpdate;
        $mobo->moboMemoryType = $request->typeUpdate;
        $mobo->moboMemoryCap = $request->capUpdate;
        $mobo->moboMemorySlot = $request->slotUpdate;
        $mobo->moboDescription = $request->descUpdate;
        $mobo->moboWarranty = $request->garansiUpdate;
        $mobo->moboPrice = $request->hargaUpdate;
        $mobo->moboStock = $request->stokUpdate;
        $mobo->save();


        return redirect()->route('admin.mobo')->with(['success' => 'Edit Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobo = Motherboard::find($id);
        File::delete('uploads/gambar/mobo/'.$mobo->moboImage);
        Motherboard::destroy($id);
        return redirect()->route('admin.mobo')->with(['success' => 'Hapus Data Berhasil']);
    }
}
