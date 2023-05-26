<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identity;
use App\Models\Order;
use App\Models\OrderDetail;
use Ramsey\Uuid\Uuid;
use App\Http\Controllers\Api\MidtransControllers;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['product_price'] * $item['quantity'];
        }

       $data=[
            'title'     => "Cart",
            'identitas' => Identity::all(),
            'cart'      => $cart,
            'countCart' => count($cart),
            'subtotal'  => $subtotal
        ];

        if (count($cart) > 0 && session()->get('login.customer')  == false) {
            return redirect()->route('login')->withErrors(['' => 'Silahkan Login Terlebih Dahulu']);
        }elseif (count($cart) == 0 || session()->get('login.customer') == false) {
            return redirect()->route('home');
        } else{
            return view('front/checkout',$data);
        }
    }

    public function store(Request $request)
    {
        $midtrans = new MidtransControllers();

        $cart = $request->session()->get('cart.items', []);
        $date = date("d-m-Y");
        $idorder = Uuid::uuid4()->toString();

        $billing_address = array(
            'first_name'   => $request->nama,
            'last_name'    => '',
            'address'      => $request->alamat,
            'city'         => $request->kota,
            'postal_code'  => $request->kodepos,
            'phone'        => $request->telp,
            'country_code' => 'IDN'
        );

        $customer_details = array(
            'first_name'       => $request->nama,
            'last_name'        => " ",
            'email'            => $request->email,
            'phone'            => $request->telp,
            'billing_address'  => $billing_address,
            'shipping_address' => $billing_address,
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

        $detailItems = [];
        foreach ($cart as $item) {
            $detailItems[] = [
                'orderDetailId' => Uuid::uuid4()->toString(),
                'orderId' => $idorder,
                'orderDetailProductId' => $item['product_id'],
                'orderDetailProductPrice' => $item['product_price'],
                'orderDetailProductQty' => $item['quantity'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        // Tambahkan item ongkir ke array $midtransItems
        $midtransItems[] = [
            'id' => 'shipping',
            'price' => 16000,
            'quantity' => 1,
            'name' => 'Ongkos Kirim'
        ];

        $amount = 0;
        for ($i=0; $i < count($midtransItems) ; $i++) { 
            $amount += ($midtransItems[$i]['price']*$midtransItems[$i]['quantity']);
        }
        
        $transaction_details = array(
            'order_id'    => $idorder,
            'gross_amount'  => $amount
        );

        $callbacks = array(
            'finish' => "http://127.0.0.1:8000/"
        );

        // Input Order
        $order = new Order;
        $order->orderId = $idorder;
        $order->customerId = $request->session()->get('id.customer');
        $order->orderDate = date('Y-m-d', strtotime($date));
        $order->orderTotalPrice = $amount;

        
        $transaksi = $midtrans->CreatePayment($customer_details,$midtransItems,$transaction_details,$callbacks);
        if ($transaksi) {
            $order->save();
            OrderDetail::insert($detailItems);
            $request->session()->forget('cart.items');
            return redirect()->to('https://app.sandbox.midtrans.com/snap/v3/redirection/'.$transaksi);
        }
    }

    public function callback(Request $request)
    {
        $serverKey = "SB-Mid-server-_WEHTFfYgN0J0ssrU2yJfInV";
        $hashed = hash("sha512",$request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == "capture" || $request->transaction_status == "settlement") {
                $order = Order::find($request->order_id);
                $order->orderStatus = "Paid";
                $order->save();
            }
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