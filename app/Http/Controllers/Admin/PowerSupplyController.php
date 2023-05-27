<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\PowerSupply;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PowerSupplyController extends Controller
{
    public function index()
    {
        $data=[
            'title' => "Power Supply",
            'power' => PowerSupply::with('brand')->get(),
            'merk' => Brand::all()
        ];

        return view('admin/powersupply',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'psuImage' => 'image|mimes:png,jpg,jpeg'
        ]);
        $psu = new PowerSupply;
        if ($request->file('psuImage')) {
            $image = $request->file('psuImage');
            $psuLogoName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $psuLogoName);
            $psu->psuImage = $psuLogoName;
        }
        $psu->psuName = $request->psuName;
        $psu->brandId = $request->brandPsu;
        $psu->psuPower = $request->psuPower;
        $psu->psuCertification = $request->psuCertification;
        $psu->psuEfficiency = $request->psuEfficiency;
        $psu->psuCooling = $request->psuCooling;
        $psu->psuModular = $request->psuModular;
        $psu->psuConnector = $request->psuConnector;
        $psu->psuWarranty = $request->psuWarranty;
        $psu->psuPrice = $request->psuPrice;
        $psu->psuStock = $request->psuStock;
        $psu->save();
        
        return redirect()->route('administrator.powersupply')->with(['success'=>'Tambah data berhasil']);
    }

    public function edit(string $id)
    {
        $data = PowerSupply::with("brand")->where('psuId', $id)->get();
        return $data->toJson();
    }

    public function update(Request $request)
    {
        $request->validate([
            'imageUpdate' => 'image|mimes:png,jpg,jpeg',
        ]);
        
        $psu = PowerSupply::find($request->idUpdate);

        if ($request->file('imageUpdate')) {
            File::delete('uploads/'.$psu->psuImage);
            $gambar = $request->file('imageUpdate');
            $psuGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $psuGambarName);
            $psu->psuImage = $psuGambarName;
        }else{
            $psu->psuImage = $request->imageAwal;
        }

        $psu->brandId = $request->brandUpdate;
        $psu->psuName = $request->namaUpdate;
        $psu->psuPower = $request->powerUpdate;
        $psu->psuCertification = $request->certificationUpdate;
        $psu->psuEfficiency = $request->efficiencyUpdate;
        $psu->psuCooling = $request->coolingUpdate;
        $psu->psuModular = $request->modularUpdate;
        $psu->psuConnector = $request->connectorUpdate;
        $psu->psuWarranty = $request->garansiUpdate;
        $psu->psuPrice = $request->hargaUpdate;
        $psu->psuStock = $request->stokUpdate;
        $psu->save();

        return redirect()->route('administrator.powersupply')->with(['success' => 'Edit Data Berhasil']);
    }

    public function destroy(string $id)
    {
        $psu = PowerSupply::find($id);
        File::delete('uploads/'.$psu->psuImage);
        PowerSupply::destroy($id);
        return redirect()->route('administrator.powersupply')->with(['success' => 'Hapus Data Berhasil']);
    }
}