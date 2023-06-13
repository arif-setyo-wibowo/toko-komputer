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
    public function index()
    {
        //$request->session()->forget('cart');
        $cart = session()->get('cart.items', []);
        $subtotal = 0;
        $identitas = Identity::all();

        foreach ($cart as $item) {
            $subtotal += $item['product_price'] * $item['quantity'];
        }

        $data=[
            'title'     => "Cart",
            'identitas' => $identitas[0],
            'cart'      => $cart,
            'countCart' => count($cart),
            'subtotal'  => $subtotal
        ];

        if (count($cart) == 0) {
            return redirect()->route('empty.cart');
        }

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
            'product_id'    => $productId,
            'product_name'  => $product->productName,
            'product_price' => $product->productPrice,
            'quantity'      => $quantity,
            'product_images'=> $product->productImage
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
    public function empty()
    {
        return view('front/cartempty');
    }

    public function updateCartQuantity(Request $request){
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        // Dapatkan data keranjang saat ini dari session
        $cartItems = $request->session()->get('cart.items', []);

        // Perbarui jumlah barang dalam keranjang sesuai dengan productId
        foreach ($cartItems as &$item) {
            if ($item['product_id'] === $productId) {
                $item['quantity'] = $quantity;
                break;
            }
        }

        // Simpan kembali data keranjang yang diperbarui ke session
        $request->session()->put('cart.items', $cartItems);

        // Hitung total jumlah barang dalam keranjang
        $cartItemCount = $this->getCartItemCount($cartItems);

        return response()->json([
            'success' => true,
            'cartItemCount' => $cartItemCount,
        ]);
    }

    protected function getCartItemCount($cartItems)
    {
        $count = 0;

        foreach ($cartItems as $item) {
            $count += $item['quantity'];
        }

        return $count;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}