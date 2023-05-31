<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Monitor",
            'merk' => Brand::all(),
            'monitor' => Monitor::with('brand')->get()
        ];

        return view('admin/monitor',$data);
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
        $request->validate([
            'monitorImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $monitor = new Monitor;
        if ($request->file('monitorImage')) {
            $gambar = $request->file('monitorImage');
            $monitorGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $monitorGambarName);
            $monitor->monitorImage = $monitorGambarName;
        }

        $monitor->brandId = $request->brandMonitor;
        $monitor->monitorName = $request->monitorName;
        $monitor->monitorResolution = $request->monitorResolution;
        $monitor->monitorSize = $request->monitorSize;
        $monitor->monitorPanel = $request->monitorPanel;
        $monitor->monitorRefreshRate = $request->monitorRefreshRate;
        $monitor->monitorResponseTime = $request->monitorResponseTime;
        $monitor->monitorGamut = $request->monitorGamut;
        $monitor->monitorPort = $request->monitorPort;
        $monitor->monitorDescription = $request->monitorDescription;
        $monitor->monitorWarranty = $request->monitorWarranty;
        $monitor->monitorStock = $request->monitorStock;
        $monitor->monitorPrice = $request->monitorPrice;
        $monitor->save();

        return redirect()->route('administrator.monitor')->with(['success' => 'Tambah Data Berhasil']);
           
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
        $data = Monitor::with("brand")->where('monitorId', $id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
        'imageUpdate' => 'image|mimes:png,jpg,jpeg',
        ]);
    
        $monitor = Monitor::find($request->idUpdate);

        if ($request->file('imageUpdate')) {
            File::delete('uploads/'.$monitor->monitorImage);
            $gambar = $request->file('imageUpdate');
            $monitorGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $monitorGambarName);
            $monitor->monitorImage = $monitorGambarName;
        }else{
            $monitor->monitorImage = $request->imageAwal;
        }

        $monitor->brandId = $request->updateBrand;
        $monitor->monitorName = $request->updateName;
        $monitor->monitorResolution = $request->updateResolution;
        $monitor->monitorSize = $request->updateSize;
        $monitor->monitorPanel = $request->updatePanel;
        $monitor->monitorRefreshRate = $request->updateRefreshRate;
        $monitor->monitorResponseTime = $request->updateResponseTime;
        $monitor->monitorGamut = $request->updateGamut;
        $monitor->monitorPort = $request->updatePort;
        $monitor->monitorDescription = $request->updateDescription;
        $monitor->monitorWarranty = $request->updateWarranty;
        $monitor->monitorStock = $request->updateStock;
        $monitor->monitorPrice = $request->updatePrice;
        $monitor->save();

        $monitor->save();

        return redirect()->route('administrator.monitor')->with(['success' => 'Edit Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $monitor = Monitor::find($id);
        File::delete('uploads/'.$monitor->monitorImage);
        $monitor::destroy($id);
        return redirect()->route('administrator.monitor')->with(['success' => 'Hapus Data Berhasil']);
    }
}
