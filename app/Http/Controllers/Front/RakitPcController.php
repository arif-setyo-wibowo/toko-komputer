<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComputerCase;
use App\Models\GraphicCard;
use App\Models\Memory;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Processor;
use App\Models\Storage;
use App\Models\Cooler;
use App\Models\Identity;

class RakitPcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $case=ComputerCase::all();
        $gpu=GraphicCard::all();
        $memory=Memory::all();
        $mobo=Motherboard::all();
        $psu=PowerSupply::all();
        $cpu=Processor::all();
        $storage=Storage::all();
        $cooler=Cooler::where('coolerType','Fan')->get();
        $identitas = Identity::all();

        $data=[
            'title' => "Rakit Pc",
            'identitas'  => $identitas[0],
            'countCart' => count($cart),
            'case' => $case,
            'gpu' => $gpu,
            'memory' => $memory,
            'mobo' => $mobo,
            'psu' => $psu,
            'cpu' => $cpu,
            'storage' => $storage,
            'cooler' => $cooler,
        ];

        return view('front/rakitPc',$data);
    }

    
}