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
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $identitas = Identity::all();

        $data=[
            'title' => "home",
            'identitas' => $identitas[0],
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
            'banner1' => Slider::where('sliderId', '9967ce81-4d48-4756-a478-bd09283672ef')->get(),
            'banner2' => Slider::where('sliderId', '9967ce8e-3590-4a2f-b74a-ae561bb0d326')->get(),
            'banner3' => Slider::where('sliderId', '9967ce96-8428-4c34-93f9-e9fb5876da52')->get()

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