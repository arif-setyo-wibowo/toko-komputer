<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Earphone;
use Illuminate\Http\Request;
use App\Models\ComputerCase;
use App\Models\GraphicCard;
use App\Models\Memory;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Processor;
use App\Models\Storage;
use App\Models\Cooler;
use App\Models\Keyboard;
use App\Models\Microphone;
use App\Models\Monitor;
use App\Models\Mouse;
use App\Models\Identity;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart.items', []);

        $data=[
            'title' => "home",
            'identitas' => Identity::all(),
            'countCart' => count($cart),
            'earphone'  => Earphone::all(),
            'keyboard'  => Keyboard::all(),
            'mouse' => Mouse::all(),
            'mobo' => Motherboard::all(),
            'monitor' => Monitor::all(),
            'merk' => Brand::all(),
            'case' => ComputerCase::all(),
            'processor' => Processor::all(),
            'gpu' => GraphicCard::all(),
            'memory' => Memory::all(),
            'storage' => Storage::all(),

        ];

        return view('front/home',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blank()
    {
        return redirect()->route('history');
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