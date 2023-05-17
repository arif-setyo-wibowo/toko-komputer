<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memory;
use App\Models\User;
use App\Models\ComputerCase;
use App\Http\Controllers\Api\TripayController;
use App\Http\Controllers\Api\MidtransControllers;

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
            'pelanggan' => User::all(),
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
        $pelanggan = json_decode(User::where('customerId', $request->pelanggan)->get());
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
    public function midtrans(Request $request)
    {
        $midtrans = new MidtransControllers();

        $pelanggan = json_decode(User::where('customerId', $request->pelanggan)->get());
        $memory = json_decode(Memory::where('memoryId', $request->barang1)->get());
        $casing = json_decode(ComputerCase::where('caseId', $request->barang2)->get());

        $billing_address = array(
            'first_name'       => $pelanggan[0]->customerName,
            'last_name'        => " ",
            'address'      => "Karet Belakang 15A, Setiabudi.",
            'city'         => "Jakarta",
            'postal_code'  => "51161",
            'phone'        => $pelanggan[0]->customerPhoneNumber,
            'country_code' => 'IDN'
        );

        $shipping_address = array(
           'first_name'       => $pelanggan[0]->customerName,
            'last_name'        => " ",
            'address'      => "Bakerstreet 221B.",
            'city'         => "Jakarta",
            'postal_code'  => "51162",
            'phone'        => $pelanggan[0]->customerPhoneNumber,
            'country_code' => 'IDN'
        );

        $customer_details = array(
            'first_name'       => $pelanggan[0]->customerName,
            'last_name'        => " ",
            'email'            => $pelanggan[0]->customerEmail,
            'phone'            => $pelanggan[0]->customerPhoneNumber,
            'billing_address'  => $billing_address,
            'shipping_address' => $shipping_address,
        );

        $items = array(
            array(
                'id'       => $memory[0]->memoryId,
                'price'    => $memory[0]->memoryPrice,
                'quantity' => $request->jumlah1,
                'name'     => $memory[0]->memoryName
            ),
            array(
                'id'       => $casing[0]->caseId,
                'price'    => $casing[0]->casePrice,
                'quantity' => $request->jumlah2,
                'name'     => $casing[0]->caseName
            )
        );

        $amount = 0;
        for ($i=0; $i < count($items) ; $i++) { 
            $amount += ($items[$i]['price']*$items[$i]['quantity']);
        }
        
        $transaction_details = array(
            'order_id'    => "ORDER-".time(),
            'gross_amount'  => $amount
        );

        $callbacks = array(
            'finish' => "http://127.0.0.1:8000/paymentgateway"
        );

        $transaksi = $midtrans->CreatePayment($customer_details,$items,$transaction_details,$callbacks);
        return redirect()->to('https://app.sandbox.midtrans.com/snap/v3/redirection/'.$transaksi);
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
