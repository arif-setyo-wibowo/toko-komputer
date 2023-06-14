<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ResetSend;
use App\Models\Identity;
use App\Models\Token;
use App\Models\User;
use App\Models\ComputerCase;
use App\Models\GraphicCard;
use App\Models\Memory;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Processor;
use App\Models\Storage;
use App\Models\Cooler;
use App\Models\Earphone;
use App\Models\Keyboard;
use App\Models\Microphone;
use App\Models\Monitor;
use App\Models\Mouse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $identitas = Identity::all();
        $user = User::where('customerEmail', session()->get('email.customer'))->first();
        $cari = $request->query('query');

        $barang = DB::table('products')->where('productName', 'LIKE', "%$cari%")->get();
        
        $data=[
            'title'     => "Search",
            'identitas' => $identitas[0],
            'countCart' => count($cart),
            'user'      => $user,
            'barang'    => $barang,
            'mobo' => Motherboard::all()->count(),
            'pros' => Processor::all()->count(),
            'vga' => GraphicCard::all()->count(),
            'ram' => Memory::all()->count(),
            'ssd' => Storage::all()->count(),
            'psu' => PowerSupply::all()->count(),
            'fan' => Cooler::all()->count(),
            'kibot' => Keyboard::all()->count(),
            'mntr' => Monitor::all()->count(),
            'mos' => Mouse::all()->count(),
            'hetset' => Earphone::all()->count(),
            'judul' => $cari
        ];

        return view('front/search',$data);
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