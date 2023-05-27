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

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($categories,Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $data=[
            'title' => "Shop",
            'identitas' => Identity::all(),
            'countCart' => count($cart)
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
        }

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
}