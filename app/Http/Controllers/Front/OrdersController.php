<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identity;

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

        if (count($cart) == 0) {
            return redirect()->route('home');
        }else{
            return view('front/checkout',$data);
        }
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