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
use App\Models\Earphone;
use App\Models\Keyboard;
use App\Models\Microphone;
use App\Models\Monitor;
use App\Models\Mouse;
use App\Models\Identity;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categories,Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $identitas = Identity::all();
        $data=[
            'title' => "Shop",
            'identitas'  => $identitas[0],
            'countCart' => count($cart),
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
        ];
        if ($categories == "computer_cases") {
            $data["item"] = $this->computer_case();
        } elseif ($categories == "graphic_cards") {
            $data["item"] = $this->gpu();
        } elseif ($categories == "memories") {
            $data["item"] = $this->memories();
        } elseif ($categories == "motherboards") {
            $data["item"] = $this->mobo();
        } elseif ($categories == "power_supplies") {
            $data["item"] = $this->psu();
        } elseif ($categories == "processors") {
            $data["item"] = $this->processor();
        } elseif ($categories == "storages") {
            $data["item"] = $this->storage();
        } elseif ($categories == "coolers") {
            $data["item"] = $this->cooler();
        } elseif ($categories == "keyboards") {
            $data["item"] = $this->keyboard();
        } elseif ($categories == "microphones") {
            $data["item"] = $this->mic();
        } elseif ($categories == "monitors") {
            $data["item"] = $this->monitor();
        } elseif ($categories == "mouse") {
            $data["item"] = $this->mouse();
        } elseif ($categories == "earphone") {
            $data["item"] = $this->earphone();
        };

        
        
        return view('front/shop',$data);
    }

    public function computer_case()
    {
        $get = ComputerCase::with("brand")->get();
        $arr = [];
        for ($i=0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["caseId"],
                "Description" => $get[$i]["caseDescription"],
                "Image" => '/' . $get[$i]["caseImage"],
                "Price" => $get[$i]["casePrice"],
                "Name" => $get[$i]["caseName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }

    public function gpu()
    {
        $get = GraphicCard::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["gpuId"],
                "Description" => 'Gpu ini memiliki interface ' . $get[$i]["gpuInterface"] . ' serta base clock ' . $get[$i]["gpuBaseClock"] . ' dan boost clock ' . $get[$i]["gpuBoostClock"] . '. Gpu ini cocok dengan casing berukuran ' . $get[$i]["gpuCaseSupport"],
                "Image" => '/' . $get[$i]["gpuImage"],
                "Price" => $get[$i]["gpuPrice"],
                "Name" => $get[$i]["gpuName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }

    public function memories()
    {
        $get = Memory::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["memoryId"],
                "Description" => 'Memory ini memiliki tipe ' . $get[$i]["memoryType"] . ' serta speed ' . $get[$i]["memorySpeed"] . ', dengan ukuran sebesar ' . $get[$i]["memoryCapacity"],
                "Image" => '/' . $get[$i]["memoryImage"],
                "Price" => $get[$i]["memoryPrice"],
                "Name" => $get[$i]["memoryName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }

    public function mobo()
    {
        $get = Motherboard::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["moboId"],
                "Description" => $get[$i]["moboDescription"],
                "Image" => '/' . $get[$i]["moboImage"],
                "Price" => $get[$i]["moboPrice"],
                "Name" => $get[$i]["moboName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }

    public function psu()
    {
        $get = PowerSupply::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["psuId"],
                "Description" => 'Power Supply ini memiliki beberapa connector ' . $get[$i]["psuConnector"] . ' serta memiliki efficiency ' . $get[$i]["psuEfficiency"] . '. Power supply ini sudah bersertifikasi ' . $get[$i]["psuCertification"],
                "Image" => '/' . $get[$i]["psuImage"],
                "Price" => $get[$i]["psuPrice"],
                "Name" => $get[$i]["psuName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }

    public function processor()
    {
        $get = Processor::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["processorId"],
                "Description" => 'Cpu ini memiliki ' . $get[$i]["processorCores"] . ' serta ' . $get[$i]["processorThread"] . ' dan base speed ' . $get[$i]["processorBaseSpeed"] . '. Jika di boost, Cpu ini dapat mencapai ' . $get[$i]["processorBoostSpeed"],
                "Image" => '/' . $get[$i]["processorImage"],
                "Price" => $get[$i]["processorPrice"],
                "Name" => $get[$i]["processorName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }

    public function storage()
    {
        $get = Storage::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["storageId"],
                "Description" => 'Storage ini memiliki size ' . $get[$i]["storageSize"] . ' serta read ' . $get[$i]["storageReadSpeed"] . ' MB/s dan write speed ' . $get[$i]["storageWriteSpeed"] . 'MB/s.',
                "Image" => '/' . $get[$i]["storageImage"],
                "Price" => $get[$i]["storagePrice"],
                "Name" => $get[$i]["storageName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
    
    public function cooler()
    {
        $get = Cooler::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["coolerId"],
                "Description" => $get[$i]["coolerDescription"],
                "Image" => '/' . $get[$i]["coolerImage"],
                "Price" => $get[$i]["coolerPrice"],
                "Name" => $get[$i]["coolerName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
    
    public function keyboard()
    {
        $get = Keyboard::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["keyboardId"],
                "Description" => $get[$i]["keyboardDescription"],
                "Image" => '/' . $get[$i]["keyboardImage"],
                "Price" => $get[$i]["keyboardPrice"],
                "Name" => $get[$i]["keyboardName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
    
    public function mic()
    {
        $get = Microphone::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["micId"],
                "Description" => $get[$i]["micDescription"],
                "Image" => '/' . $get[$i]["micImage"],
                "Price" => $get[$i]["micPrice"],
                "Name" => $get[$i]["micName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
    
    public function monitor()
    {
        $get = Monitor::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["monitorId"],
                "Description" => $get[$i]["monitorDescription"],
                "Image" => '/' . $get[$i]["monitorImage"],
                "Price" => $get[$i]["monitorPrice"],
                "Name" => $get[$i]["monitorName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
    
    public function mouse()
    {
        $get = Mouse::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["mouseId"],
                "Description" => $get[$i]["mouseDescription"],
                "Image" => '/' . $get[$i]["mouseImage"],
                "Price" => $get[$i]["mousePrice"],
                "Name" => $get[$i]["mouseName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
    
    public function earphone()
    {
        $get = Earphone::with("brand")->get();
        $arr = [];
        for ($i = 0; $i < sizeof($get); $i++) {
            $arr += [$i => [
                "Id" => $get[$i]["earphoneId"],
                "Description" => $get[$i]["earphoneDescription"],
                "Image" => '/' . $get[$i]["earphoneImage"],
                "Price" => $get[$i]["earphonePrice"],
                "Name" => $get[$i]["earphoneName"],
                "Brand" => '/' . $get[$i]["brand"]["brandLogo"],
            ]];
        }

        return $arr;
    }
}