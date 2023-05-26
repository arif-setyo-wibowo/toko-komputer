<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memory;
use App\Models\User;
use App\Models\Storage;
use App\Models\ComputerCase;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api\MidtransControllers;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $request->session()->put('idCustomer', '993a8474-fdc5-4cfd-9054-cb11bac89502');
        $request->session()->put('email', 'okkyfirman@gmail.com');
        $cart = $request->session()->get('cart.items', []);
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['product_price'] * $item['quantity'];
        }

        //$request->session()->forget('cart');
        $data=[
            'title' => "Payment Gateway",
            'pelanggan' => User::all(),
            'storage' => Storage::with("brand")->get(),
            'memori' => Memory::with("brand")->get(),
            'casing' => ComputerCase::with("brand")->get(),
            'cart' => $cart,
            'subtotal' => $subtotal
        ];

        return view('admin/paymentgateway',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request)
    {
        $productId = $request->input('productId');
        $quantity = 1;

        $product = DB::table('products')->where('productId', $productId)->first();
        print_r($product);

        $cart = $request->session()->get('cart.items', []);

        if (isset($cart[$productId])) {
            // Produk sudah ada di dalam keranjang, tambahkan jumlahnya
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Tambahkan produk baru ke keranjang
            $cart[$productId] = [
                'product_id' => $productId,
                'product_name' => $product->productName,
                'product_price' => $product->productPrice,
                'quantity' => $quantity,
            ];
        }

        $request->session()->put('cart.items', $cart);

        return redirect()->route('paymentgateway.index')->with(['success' => 'Tambah Data Berhasil']);
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
    public function midtrans(Request $request)
    {
        $midtrans = new MidtransControllers();

        $cart = $request->session()->get('cart', []);
        $idorder = "ORDER-".time();

        $billing_address = array(
            'first_name'   => $request->pelanggan,
            'last_name'    => '',
            'address'      => $request->alamat,
            'city'         => $request->kota,
            'postal_code'  => $request->kodepos,
            'phone'        => $request->telp,
            'country_code' => 'IDN'
        );

        $shipping_address = array(
           'first_name'    => $request->pelanggan,
            'last_name'    => " ",
            'address'      => $request->alamat,
            'city'         => $request->kota,
            'postal_code'  => $request->kodepos,
            'phone'        => $request->telp,
            'country_code' => 'IDN'
        );

        $customer_details = array(
            'first_name'       => $request->pelanggan,
            'last_name'        => " ",
            'email'            => $request->session()->get('email'),
            'phone'            => $request->telp,
            'billing_address'  => $billing_address,
            'shipping_address' => $shipping_address,
        );

        $midtransItems = [];
        foreach ($cart as $item) {
            $midtransItems[] = [
                'id' => $item['product_id'],
                'price' => $item['product_price'],
                'quantity' => $item['quantity'],
                'name' => $item['product_name']
            ];
        }

        $amount = 0;
        for ($i=0; $i < count($midtransItems) ; $i++) { 
            $amount += ($midtransItems[$i]['price']*$midtransItems[$i]['quantity']);
        }
        
        $transaction_details = array(
            'order_id'    => $idorder,
            'gross_amount'  => $amount
        );

        $callbacks = array(
            'finish' => "http://127.0.0.1:8000/paymentgateway"
        );

        $query = "INSERT INTO tblorder (orderId,customerId, totalPrice) VALUES ('$idorder','$request->idpelanggan', '$amount')";
        
        $transaksi = $midtrans->CreatePayment($customer_details,$midtransItems,$transaction_details,$callbacks);
        if ($transaksi) {
            DB::statement($query);
            $request->session()->forget('cart');
            return redirect()->to('https://app.sandbox.midtrans.com/snap/v3/redirection/'.$transaksi);
        }
        
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}