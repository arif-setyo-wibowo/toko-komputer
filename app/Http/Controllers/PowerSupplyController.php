<?php

namespace App\Http\Controllers;

use App\Models\PowerSupply;
use App\Models\Identity;
use Illuminate\Http\Request;

class PowerSupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function detail($id)
    {
        $get = PowerSupply::with("brand")->where('psuId', $id)->get();
        $arr = [
            "Id" => $get[0]["psuId"],
            "Description" => $get[0]["psuDescription"],
            "Image" => '/psu/' . $get[0]["psuImage"],
            "Price" => $get[0]["psuPrice"],
            "Name" => $get[0]["psuName"],
            "Brand" => '/brand/' . $get[0]["brand"]["brandLogo"],
            "Power" => $get[0]["psuPower"] . ' watts',
            "Certification" => $get[0]["psuCertification"],
            "Efficiency" => $get[0]["psuEfficiency"],
            "Cooling" => $get[0]["psuCooling"],
            "Modular" => $get[0]["psuModular"],
            "Connector" => $get[0]["psuConnector"],
            "Warranty" => $get[0]["psuWarranty"],
            "Stock" => $get[0]["psuStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Power Supply",
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
    public function show(PowerSupply $powerSupply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PowerSupply $powerSupply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PowerSupply $powerSupply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PowerSupply $powerSupply)
    {
        //
    }
}
