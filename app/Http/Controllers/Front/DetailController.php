<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ComputerCase;
use App\Models\GraphicCard;
use App\Models\Memory;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Processor;
use App\Models\Storage;
use App\Models\Identity;
use App\Models\Cooler;
use App\Models\Keyboard;
use App\Models\Microphone;
use App\Models\Monitor;
use App\Models\Mouse;
use App\Models\Earphone;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($productId,Request $request)
    {
        $cart = $request->session()->get('cart.items', []);
        $product = DB::table('products')->where('productId', $productId)->first();
        if ($product->source_table == "computer_cases") {
            $data = $this->computer_case($productId);
        } elseif ($product->source_table == "graphic_cards") {
            $data = $this->gpu($productId);
        } elseif ($product->source_table == "memories") {
            $data = $this->memories($productId);
        } elseif ($product->source_table == "motherboards") {
            $data = $this->mobo($productId);
        } elseif ($product->source_table == "power_supplies") {
            $data = $this->psu($productId);
        } elseif ($product->source_table == "processors") {
            $data = $this->processor($productId);
        } elseif ($product->source_table == "storages") {
            $data = $this->storage($productId);
        } elseif ($product->source_table == "coolers") {
            $data = $this->cooler($productId);
        } elseif ($product->source_table == "keyboards") {
            $data = $this->keyboard($productId);
        } elseif ($product->source_table == "microphones") {
            $data = $this->mic($productId);
        } elseif ($product->source_table == "monitors") {
            $data = $this->monitor($productId);
        } elseif ($product->source_table == "mouse") {
            $data = $this->mouse($productId);
        } elseif ($product->source_table == "earphones") {
            $data = $this->earphone($productId);
        }
 
        $data['countCart'] = count($cart);
        return view('front/detailproduk', $data);
    }

    public function computer_case($id)
    {
        $get = ComputerCase::with("brand")->where('caseId', $id)->get();
        $arr = [
            "Id" => $get[0]["caseId"],
            "Description" => $get[0]["caseDescription"],
            "Image" => '/' . $get[0]["caseImage"],
            "Price" => $get[0]["casePrice"],
            "Name" => $get[0]["caseName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["caseType"],
            "Fan slot" => $get[0]["caseFanSlot"],
            "Warranty" => $get[0]["caseWarranty"],
            "Stock" => $get[0]["caseStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Casing",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function gpu($id)
    {
        $get = GraphicCard::with("brand")->where('gpuId', $id)->get();
        $arr = [
            "Id" => $get[0]["gpuId"],
            "Description" => $get[0]["gpuDescription"],
            "Image" => '/' . $get[0]["gpuImage"],
            "Price" => $get[0]["gpuPrice"],
            "Name" => $get[0]["gpuName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Interface" => $get[0]["gpuInterface"],
            "Base clock" => $get[0]["gpuBaseClock"],
            "Boost clock" => $get[0]["gpuBoostClock"],
            "Memory clock speed" => $get[0]["gpuMemoryClockSpeed"],
            "Memory size" => $get[0]["gpuMemorySize"],
            "Memory interface" => $get[0]["gpuMemoryInterface"],
            "Memory type" => $get[0]["gpuMemoryType"],
            "Feature" => $get[0]["gpuFeature"],
            "Power requirement" => $get[0]["gpuPowerReq"] . ' watts',
            "Case compatibility" => $get[0]["gpuCaseSupport"],
            "Warranty" => $get[0]["gpuWarranty"],
            "Stock" => $get[0]["gpuStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Graphic Card",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function memories($id)
    {
        $get = Memory::with("brand")->where('memoryId', $id)->get();
        $arr = [
            "Id" => $get[0]["memoryId"],
            "Description" => $get[0]["memoryDescription"],
            "Image" => '/' . $get[0]["memoryImage"],
            "Price" => $get[0]["memoryPrice"],
            "Name" => $get[0]["memoryName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["memoryType"],
            "Speed" => $get[0]["memorySpeed"],
            "Capacity" => $get[0]["memoryCapacity"],
            "Cas latency" => $get[0]["memoryCasLatency"],
            "Voltage" => $get[0]["memoryVoltage"],
            "Warranty" => $get[0]["memoryWarranty"],
            "Stock" => $get[0]["memoryStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Memory",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function mobo($id)
    {
        $get = Motherboard::with("brand")->with("socket")->where('moboId', $id)->get();
        $arr = [
            "Id" => $get[0]["moboId"],
            "Description" => $get[0]["moboDescription"],
            "Image" => '/' . $get[0]["moboImage"],
            "Price" => $get[0]["moboPrice"],
            "Name" => $get[0]["moboName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Socket" => $get[0]["socket"]["processorSocketName"],
            "Chipset" => $get[0]["moboChipset"],
            "Port" => $get[0]["moboPort"],
            "Sata Slot" => $get[0]["moboStorageSata"],
            "M.2 Slot" => $get[0]["moboStorageM2"],
            "Form Factor" => $get[0]["moboFormFactor"],
            "Memory Type" => $get[0]["moboMemoryType"],
            "Memory Cap" => $get[0]["moboMemoryCap"],
            "Memory Slot" => $get[0]["moboMemorySlot"],
            "Warranty" => $get[0]["moboWarranty"],
            "Stock" => $get[0]["moboStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Motherboard",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function psu($id)
    {
        $get = PowerSupply::with("brand")->where('psuId', $id)->get();
        $arr = [
            "Id" => $get[0]["psuId"],
            "Description" => $get[0]["psuDescription"],
            "Image" => '/' . $get[0]["psuImage"],
            "Price" => $get[0]["psuPrice"],
            "Name" => $get[0]["psuName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Power" => $get[0]["psuPower"] . ' watts',
            "Certification" => $get[0]["psuCertification"],
            "Efficiency" => $get[0]["psuEfficiency"],
            "Cooling" => $get[0]["psuCooling"],
            "Modular" => $get[0]["psuModular"],
            "Connector" => $get[0]["psuConnector"],
            "Warranty" => $get[0]["psuWarranty"],
            "Stock" => $get[0]["psuStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Power Supply",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function processor($id)
    {
        $get = Processor::with("brand")->where('processorId', $id)->get();
        $arr = [
            "Id" => $get[0]["processorId"],
            "Description" => $get[0]["processorDescription"],
            "Image" => '/' . $get[0]["processorImage"],
            "Price" => $get[0]["processorPrice"],
            "Name" => $get[0]["processorName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Generation" => $get[0]["processorGen"],
            "Core" => $get[0]["processorCore"],
            "Threads" => $get[0]["processorThread"],
            "Base speed" => $get[0]["processorBaseSpeed"],
            "Boost speed" => $get[0]["processorBoostSpeed"],
            "Cache" => $get[0]["processorCache"],
            "Architecture" => $get[0]["processorArch"],
            "Integrated Graphics" => $get[0]["processorIgpu"],
            "Power" => $get[0]["processorPower"] . ' watts',
            "Heatsink" => $get[0]["processorHeatsink"],
            "Warranty" => $get[0]["processorWarranty"],
            "Stock" => $get[0]["processorStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Processor",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function storage($id)
    {
        $get = Storage::with("brand")->where('storageId', $id)->get();
        $arr = [
            "Id" => $get[0]["storageId"],
            "Description" => $get[0]["storageDescription"],
            "Image" => '/' . $get[0]["storageImage"],
            "Price" => $get[0]["storagePrice"],
            "Name" => $get[0]["storageName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["storageType"],
            "Read speed" => $get[0]["storageReadSpeed"] . ' MB/s',
            "Write speed" => $get[0]["storageWriteSpeed"] . ' MB/s',
            "RPM" => $get[0]["storageRpm"] . ' RPM',
            "Dimension" => $get[0]["storageDimension"],
            "Warranty" => $get[0]["storageWarranty"],
            "Stock" => $get[0]["storageStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function cooler($id)
    {
        $get = Cooler::with("brand")->where('coolerId', $id)->get();
        $arr = [
            "Id" => $get[0]["coolerId"],
            "Description" => $get[0]["coolerDescription"],
            "Image" => '/' . $get[0]["coolerImage"],
            "Price" => $get[0]["coolerPrice"],
            "Name" => $get[0]["coolerName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["coolerType"],
            "Casing support" => $get[0]["coolerCaseType"],
            "Socket" => $get[0]["coolerSocket"],
            "RPM" => $get[0]["coolerRpm"] . ' RPM',
            "Warranty" => $get[0]["coolerWarranty"],
            "Stock" => $get[0]["coolerStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function keyboard($id)
    {
        $get = Keyboard::with("brand")->where('keyboardId', $id)->get();
        $arr = [
            "Id" => $get[0]["keyboardId"],
            "Description" => $get[0]["keyboardDescription"],
            "Image" => '/' . $get[0]["keyboardImage"],
            "Price" => $get[0]["keyboardPrice"],
            "Name" => $get[0]["keyboardName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["keyboardType"],
            "Size" => $get[0]["keyboardSize"],
            "Switch" => $get[0]["keyboardSwitch"],
            "Layout" => $get[0]["keyboardLayout"],
            "Connection" => $get[0]["keyboardConnection"],
            "Feature" => $get[0]["keyboardFeature"],
            "Warranty" => $get[0]["keyboardWarranty"],
            "Stock" => $get[0]["keyboardStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function mic($id)
    {
        $get = Microphone::with("brand")->where('micId', $id)->get();
        $arr = [
            "Id" => $get[0]["micId"],
            "Description" => $get[0]["micDescription"],
            "Image" => '/' . $get[0]["micImage"],
            "Price" => $get[0]["micPrice"],
            "Name" => $get[0]["micName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["micType"],
            "Sensitivity" => $get[0]["micSize"],
            "Impendance" => $get[0]["micImpendance"],
            "Frequency Response" => $get[0]["micFreqResponse"],
            "Connection" => $get[0]["micConnection"],
            "Feature" => $get[0]["micFeature"],
            "Warranty" => $get[0]["micWarranty"],
            "Stock" => $get[0]["micStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function monitor($id)
    {
        $get = Monitor::with("brand")->where('monitorId', $id)->get();
        $arr = [
            "Id" => $get[0]["monitorId"],
            "Description" => $get[0]["monitorDescription"],
            "Image" => '/' . $get[0]["monitorImage"],
            "Price" => $get[0]["monitorPrice"],
            "Name" => $get[0]["monitorName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Resolution" => $get[0]["monitorResolution"],
            "Size" => $get[0]["monitorSize"],
            "Panel" => $get[0]["monitorPanel"],
            "Refresh rate" => $get[0]["monitorRefreshRate"],
            "Response time" => $get[0]["monitorResponseTime"],
            "Gamut" => $get[0]["monitorGamut"],
            "Port" => $get[0]["monitorPort"],
            "Warranty" => $get[0]["monitorWarranty"],
            "Stock" => $get[0]["monitorStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function mouse($id)
    {
        $get = Mouse::with("brand")->where('mouseId', $id)->get();
        $arr = [
            "Id" => $get[0]["mouseId"],
            "Description" => $get[0]["mouseDescription"],
            "Image" => '/' . $get[0]["mouseImage"],
            "Price" => $get[0]["mousePrice"],
            "Name" => $get[0]["mouseName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Sensor" => $get[0]["mouseSensor"],
            "Switch" => $get[0]["mouseSwitch"],
            "Dpi" => $get[0]["mouseDpi"],
            "Speed" => $get[0]["mouseSpeed"],
            "Polling rate" => $get[0]["mousePollRate"],
            "Connection" => $get[0]["mouseConnection"],
            "Grip" => $get[0]["mouseGrip"],
            "Warranty" => $get[0]["mouseWarranty"],
            "Stock" => $get[0]["mouseStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }
    
    public function earphone($id)
    {
        $get = Earphone::with("brand")->where('earphoneId', $id)->get();
        $arr = [
            "Id" => $get[0]["earphoneId"],
            "Description" => $get[0]["earphoneDescription"],
            "Image" => '/' . $get[0]["earphoneImage"],
            "Price" => $get[0]["earphonePrice"],
            "Name" => $get[0]["earphoneName"],
            "Brand" => '/' . $get[0]["brand"]["brandLogo"],
            "Type" => $get[0]["earphoneType"],
            "Sensitivity" => $get[0]["earphoneSensitivity"],
            "Impedance" => $get[0]["earphoneImpedance"],
            "Driver" => $get[0]["earphoneDriver"],
            "Connection" => $get[0]["earphoneConnection"],
            "Sound signature" => $get[0]["earphoneSoundSig"],
            "Include mic?" => $get[0]["earphoneHaveMic"],
            "Warranty" => $get[0]["earphoneWarranty"],
            "Stock" => $get[0]["earphoneStock"],
        ];
        $data = [
            'title' => "Detail Produk",
            'itemType' => "Storage",
            'identitas' => Identity::all(),
            'item' => $arr
        ];
        //print("<pre>" . print_r($get, true) . "</pre>");
        
        return $data;
    }

    
}