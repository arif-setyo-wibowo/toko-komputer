<?php

namespace App\Http\Controllers;

use App\Models\GraphicCard;
use App\Models\Identity;
use Illuminate\Http\Request;

class GraphicCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function detail($id)
    {
        $get = GraphicCard::with("brand")->where('gpuId', $id)->get();
        $arr = [
            "Id" => $get[0]["gpuId"],
            "Description" => $get[0]["gpuDescription"],
            "Image" => '/gpu/' . $get[0]["gpuImage"],
            "Price" => $get[0]["gpuPrice"],
            "Name" => $get[0]["gpuName"],
            "Brand" => '/brand/' . $get[0]["brand"]["brandLogo"],
            "Interface" => $get[0]["gpuInterface"],
            "Base clock" => $get[0]["gpuBaseClock"],
            "Boost clock" => $get[0]["gpuBoostClock"],
            "Memory clock speed" => $get[0]["gpuMemoryClockSpeed"],
            "Memory size" => $get[0]["gpuMemorySize"],
            "Memory interface" => $get[0]["gpuMemoryInterface"],
            "Memory type" => $get[0]["gpuMemoryType"],
            "Feature" => $get[0]["gpuFeature"],
            "Power requirement" => $get[0]["gpuPowerReq"] . ' watts',
            "Case compatibility" => $get[0]["gpuCaseSupport"],
            "Warranty" => $get[0]["gpuWarranty"],
            "Stock" => $get[0]["gpuStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Graphic Card",
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
    public function show(GraphicCard $graphicCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GraphicCard $graphicCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GraphicCard $graphicCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GraphicCard $graphicCard)
    {
        //
    }
}
