<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ComputerCase;
use App\Models\Identity;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($productId)
    {
        $product = DB::table('products')->where('productId', $productId)->first();
        if ($product->source_table == "computer_cases") {
            $data = $this->computer_case($productId);
        }
        return view('front/detailproduk', $data);
    }

    public function computer_case($id)
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
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
