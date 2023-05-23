<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use App\Models\Identity;
use Illuminate\Http\Request;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function detail($id)
    {
        $get = Memory::with("brand")->where('memoryId', $id)->get();
        $arr = [
            "Id" => $get[0]["memoryId"],
            "Description" => $get[0]["memoryDescription"],
            "Image" => '/ram/' . $get[0]["memoryImage"],
            "Price" => $get[0]["memoryPrice"],
            "Name" => $get[0]["memoryName"],
            "Brand" => '/brand/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["memoryType"],
            "Speed" => $get[0]["memorySpeed"],
            "Capacity" => $get[0]["memoryCapacity"],
            "Cas latency" => $get[0]["memoryCasLatency"],
            "Voltage" => $get[0]["memoryVoltage"],
            "Warranty" => $get[0]["memoryWarranty"],
            "Stock" => $get[0]["memoryStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Memory",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        // print("<pre>" . print_r($get, true) . "</pre>");
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
    public function show(Memory $memory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Memory $memory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Memory $memory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Memory $memory)
    {
        //
    }
}
