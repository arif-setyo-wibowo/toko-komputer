<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\TripayController;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tripay = new TripayController();

        $data=[
            'title' => "Payment Gateway",
            'listbank' => $tripay->getBank()
        ];

        return view('admin/paymentgateway',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $method = $request->method;

        $tripay = new TripayController();
        $transaksi = $tripay->requestTransaksi($method);

        return redirect()->route('paymentgateway.detail', ['refesensi' => $transaksi->reference]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tripay = new TripayController();

        $data=[
            'title' => "Detail Transaksi",
            'detail' => $tripay->detailTransaksi($id)
        ];

        //dd($tripay->detailTransaksi($id));
        return view('admin/paymentgatewaydetail',$data);
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
