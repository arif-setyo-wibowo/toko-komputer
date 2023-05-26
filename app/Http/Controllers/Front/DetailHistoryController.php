<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identity;
use Illuminate\Support\Facades\DB;

class DetailHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($idOrder,Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $orderDetail = DB::table('order_details')->join('products', 'order_details.orderDetailProductId', '=', 'products.productId')->select('order_details.*', 'products.productName','products.productImage')->get();
        $order = DB::table('orders')->where('orderId', '=', $idOrder)->get();
        $subtotal = 0;

        foreach ($orderDetail as $key => $value) {
            $subtotal += $value->orderDetailProductPrice * $value->orderDetailProductQty;
        }

        $data=[
            'title'         => "Detail History",
            'identitas'     => Identity::all(),
            'countCart'     => count($cart),
            'orderDetail'   => $orderDetail,
            'order'         => $order[0],
            'subtotal'      => $subtotal
        ];

        return view('front/detailhistory',$data);
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