<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memory;
use App\Models\Customer;
use App\Models\ComputerCase;
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
            'listbank' => $tripay->getBank(),
            'pelanggan' => Customer::all(),
            'casing' => ComputerCase::with("brand")->get(),
            'memori' => Memory::with("brand")->get(),
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
        $tripay = new TripayController();
        $pelanggan = json_decode(Customer::where('customerId', $request->pelanggan)->get());
        $memory = json_decode(Memory::where('memoryId', $request->barang1)->get());
        $casing = json_decode(ComputerCase::where('caseId', $request->barang2)->get());

        $data = [
            'nama' => $pelanggan[0]->customerName,
            'email' => $pelanggan[0]->customerEmail,
            'telp' => $pelanggan[0]->customerPhoneNumber,
            'order' => [
                [
                    'name'        => $memory[0]->memoryName,
                    'price'       => $memory[0]->memoryPrice,
                    'quantity'    => $request->jumlah1,
                    'subtotal'    => $memory[0]->memoryPrice * $request->jumlah1,
                ],
                [
                    'name'        => $casing[0]->caseName,
                    'price'       => $casing[0]->casePrice,
                    'quantity'    => $request->jumlah2,
                    'subtotal'    => $casing[0]->casePrice * $request->jumlah2,
                ]
                ],
            'method' => $request->metode
        ];

        $transaksi = $tripay->requestTransaksi($data);

        return redirect()->to('https://tripay.co.id/checkout/'.$transaksi->reference);
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
