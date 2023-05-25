<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cooler;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CoolerController extends Controller
{
    public function index()
    {
        $data=[
            'title' => "Cooler",
            'cooler' => Cooler::with("brand")->get(),
            'merk' => Brand::all()
        ];

        return view('admin/cooler',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'coolerImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $cooler = new Cooler;
        if ($request->file('coolerImage')) {
            $gambar = $request->file('coolerImage');
            $coolerGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/cooler'), $coolerGambarName);
            $cooler->coolerImage = $coolerGambarName;
        }

        $cooler->brandId = $request->brandCooler;
        $cooler->coolerName = $request->coolerName;
        $cooler->coolerType = $request->coolerType;
        $cooler->coolerCaseType = $request->coolerCaseType;
        $cooler->coolerPrice = $request->coolerPrice;
        $cooler->coolerStock = $request->coolerStock;
        $cooler->coolerSocket = $request->coolerSocket;
        $cooler->coolerPrice = $request->coolerPrice;
        $cooler->coolerRpm = $request->coolerRpm;
        $cooler->save();
        
        return redirect()->route('administrator.cooler')->with(['success' => 'Tambah Data Berhasil']);
    }

    public function edit(string $id)
    {
        $data = Cooler::with("brand")->where('coolerId', $id)->get();
        return $data->toJson();
    }

    public function update(Request $request)
    {
        $request->validate([
             'coolerImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $cooler = Cooler::find($request->idUpdate);
        
        if ($request->file('coolerImage')) {
            File::delete('uploads/gambar/cooler/'.$cooler->coolerImage);
            $gambar = $request->file('coolerImage');
            $coolerGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/cooler'), $coolerGambarName);
            $cooler->coolerImage = $coolerGambarName;
        }else{
            $cooler->coolerImage = $request->imageAwal;
        }

        $cooler->brandId = $request->brand;
        $cooler->coolerName = $request->nama;
        $cooler->coolerType = $request->type;
        $cooler->coolerCaseType = $request->caseType;
        $cooler->coolerPrice = $request->harga;
        $cooler->coolerStock = $request->stok;
        $cooler->save();

        return redirect()->route('administrator.cooler')->with(['success' => 'Edit Data Berhasil']);
    }

    public function destroy(string $id)
    {
        $Cooler = Cooler::find($id);
        File::delete('uploads/gambar/cooler/'.$Cooler->coolerImage);
        Cooler::destroy($id);
        return redirect()->route('administrator.cooler')->with(['success' => 'Hapus Data Berhasil']);
    }
}