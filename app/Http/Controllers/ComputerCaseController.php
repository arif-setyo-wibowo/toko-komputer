<?php

namespace App\Http\Controllers;

use App\Models\ComputerCase;
use App\Models\Identity;

use Illuminate\Http\Request;

class ComputerCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function detail($id)
    {
        $get = ComputerCase::with("brand")->where('caseId', $id)->get();
        $arr = [
            "Id" => $get[0]["caseId"],
            "Description" => $get[0]["caseDescription"],
            "Image" => '/casing/' . $get[0]["caseImage"],
            "Price" => $get[0]["casePrice"],
            "Name" => $get[0]["caseName"],
            "Brand" => '/brand/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["caseType"],
            "Fan slot" => $get[0]["caseFanSlot"],
            "Warranty" => $get[0]["caseWarranty"],
            "Stock" => $get[0]["caseStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Casing",
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
    public function show(ComputerCase $computerCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComputerCase $computerCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComputerCase $computerCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComputerCase $computerCase)
    {
        //
    }
}
