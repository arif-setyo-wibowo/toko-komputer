<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identity;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$request->session()->forget('cart');
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

        return view('front/cart',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request)
    {
        $productId = $request->input('productId');
        $quantity = 1;

        // Dapatkan produk dari database berdasarkan $productId jika diperlukan
        $product = DB::table('products')->where('productId', $productId)->first();
    
        // Buat item produk dengan data yang diperlukan
        $item = [
            'product_id' => $productId,
            'product_name' => $product->productName,
            'product_price' => $product->productPrice,
            'quantity' => $quantity,
        ];
    
        $cartItems = $request->session()->get('cart.items', []);
    
        // Periksa apakah ID produk sudah ada dalam keranjang
        $itemIndex = -1;
        foreach ($cartItems as $index => $cartItem) {
            if ($cartItem['product_id'] == $productId) {
                $itemIndex = $index;
                break;
            }
        }
    
        // Jika ID produk sudah ada, tambahkan jumlah (quantity) saja
        if ($itemIndex >= 0) {
            $cartItems[$itemIndex]['quantity'] += 1;
        } else {
            // Jika ID produk belum ada, tambahkan item ke keranjang
            $cartItems[] = $item;
        }
    
        // Simpan item-item keranjang kembali ke session
        $request->session()->put('cart.items', $cartItems);
        $cartItemCount = count($request->session()->get('cart.items', []));
    
        return response()->json(['success' => true,'cartItemCount' => $cartItemCount]);

    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('productId');

        $cartItems = $request->session()->get('cart.items', []);

        $index = -1;
        foreach ($cartItems as $key => $item) {
            if ($item['product_id'] === $productId) {
                $index = $key;
                break;
            }
        }

        if ($index !== -1) {
            unset($cartItems[$index]);
            $request->session()->put('cart.items', $cartItems);
        }

        $cartItemCount = count($cartItems);

        return response()->json(['success' => true, 'cartItemCount' => $cartItemCount]);
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