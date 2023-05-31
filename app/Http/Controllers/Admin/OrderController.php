<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identity;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = DB::table('orders')->join('users', 'orders.customerId', '=', 'users.customerId')->select('orders.*', 'users.customerName', 'users.customerEmail')->get();
        $data = [
            'title' => "Order",
            'order' => $order
        ];

        return view('admin/order', $data);
    }

    public function detail($idOrder)
    {
        $orderDetail = DB::table('order_details')->where('orderId', '=', $idOrder)->join('products', 'order_details.orderDetailProductId', '=', 'products.productId')->select('order_details.*', 'products.productName', 'products.productImage', 'products.Categories')->get();
        $order = DB::table('orders')->where('orderId', '=', $idOrder)->get();
        $pelanggan = DB::table('users')->where('customerId', '=', $order[0]->customerId)->get();
        $subtotal = 0;

        foreach ($orderDetail as $key => $value) {
            $subtotal += $value->orderDetailProductPrice * $value->orderDetailProductQty;
        }

        $data = [
            'title'         => "Invoice",
            'identitas'     => Identity::all()->first(),
            'pelanggan'     => $pelanggan[0],
            'orderdetail'   => $orderDetail,
            'order'         => $order[0],
            'subtotal'      => $subtotal
        ];
        return view('admin/orderInvoice', $data);
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
        $resi = $request->resi;
        $order = Order::find($request->orderId);
        $order->orderResi = $resi;
        $order->save();
        return redirect('/administrator/order')->with(['success' => 'Input Resi Berhasil']);
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
