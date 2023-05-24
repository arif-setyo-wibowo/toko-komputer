<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use App\Models\Identity;
use Illuminate\Http\Request;

class MotherboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function detail($id)
    {
        $get = Motherboard::with("brand")->with("socket")->where('moboId', $id)->get();
        $arr = [
            "Id" => $get[0]["moboId"],
            "Description" => $get[0]["moboDescription"],
            "Image" => '/mobo/' . $get[0]["moboImage"],
            "Price" => $get[0]["moboPrice"],
            "Name" => $get[0]["moboName"],
            "Brand" => '/brand/' . $get[0]["brand"]["brandLogo"],
            "Socket" => $get[0]["socket"]["processorSocketName"],
            "Chipset" => $get[0]["moboChipset"],
            "Port" => $get[0]["moboPort"],
            "Sata Slot" => $get[0]["moboStorageSata"],
            "M.2 Slot" => $get[0]["moboStorageM2"],
            "Form Factor" => $get[0]["moboFormFactor"],
            "Memory Type" => $get[0]["moboMemoryType"],
            "Memory Cap" => $get[0]["moboMemoryCap"],
            "Memory Slot" => $get[0]["moboMemorySlot"],
            "Warranty" => $get[0]["moboWarranty"],
            "Stock" => $get[0]["moboStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Motherboard",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        // print("<pre>" . print_r($arr, true) . "</pre>");
        return view('front/detailproduk', $data);
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
    public function show(Motherboard $motherboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motherboard $motherboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motherboard $motherboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motherboard $motherboard)
    {
        //
    }
}
