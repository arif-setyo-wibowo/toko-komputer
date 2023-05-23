<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use App\Models\Identity;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function detail($id)
    {
        $get = Processor::with("brand")->where('processorId', $id)->get();
        $arr = [
            "Id" => $get[0]["processorId"],
            "Description" => $get[0]["processorDescription"],
            "Image" => '/cpu/' . $get[0]["processorImage"],
            "Price" => $get[0]["processorPrice"],
            "Name" => $get[0]["processorName"],
            "Brand" => '/brand/' . $get[0]["brand"]["brandLogo"],
            "Generation" => $get[0]["processorGen"],
            "Core" => $get[0]["processorCore"],
            "Threads" => $get[0]["processorThread"],
            "Base speed" => $get[0]["processorBaseSpeed"],
            "Boost speed" => $get[0]["processorBoostSpeed"],
            "Cache" => $get[0]["processorCache"],
            "Architecture" => $get[0]["processorArch"],
            "Integrated Graphics" => $get[0]["processorIgpu"],
            "Power" => $get[0]["processorPower"] . ' watts',
            "Heatsink" => $get[0]["processorHeatsink"],
            "Warranty" => $get[0]["processorWarranty"],
            "Stock" => $get[0]["processorStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Processor",
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
    public function show(Processor $processor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Processor $processor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Processor $processor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Processor $processor)
    {
        //
    }
}
