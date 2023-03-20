<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Str;
use App\Models\GraphicCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GpuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Gpu",
            'gpu' => GraphicCard::with('brand')->get(),
            'merk' => Brand::all()

        ];
        return view('admin/gpu',$data);
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
            'gpuImage' => 'image|mimes:png,jpg,jpeg'
        ]);

        $gpu = new GraphicCard;
        if ($request->file('gpuImage')) {
            $gambar = $request->file('gpuImage');
            $gpuLogoName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/gpu'), $gpuLogoName);
            $gpu->gpuImage = $gpuLogoName;
        }
        
        $gpu->gpuName = $request->gpuName;
        $gpu->brandId = $request->brandGpu;
        $gpu->gpuInterface = $request->gpuInterface;
        $gpu->gpuBaseClock = $request->gpuBaseClock;
        $gpu->gpuBoostClock = $request->gpuBoostClock;
        $gpu->gpuMemorySize = $request->gpuMemorySize;
        $gpu->gpuMemoryClockSpeed = $request->gpuMemoryClockSpeed;
        $gpu->gpuMemoryInterface = $request->gpuMemoryInterface;
        $gpu->gpuMemoryType = $request->gpuMemoryType;
        $gpu->gpuFeature = $request->gpuFeature;
        $gpu->gpuPowerReq = $request->gpuPowerReq;
        $gpu->gpuCaseSupport = $request->gpuCaseSupport;
        $gpu->gpuWarranty = $request->gpuWarranty;
        $gpu->gpuPrice = $request->gpuPrice;
        $gpu->gpuStock = $request->gpuStock;
        $gpu->save();

        return redirect()->route('admin.gpu')->with(['success' => 'Tambah Data Berhasil']);
        

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
        $data = GraphicCard::with('brand')->where('gpuId',$id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'gpuImage' => 'image|mimes:png,jpg,jpeg'
        ]);

        $gpu = GraphicCard::find($request->idUpdate);
        if ($request->file('gpuImageUpdate')) {
            File::delete('uploads/gambar/gpu/'.$gpu->gpuImage);
            $gambar = $request->file('gpuImageUpdate');
            $gpuLogoName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/gpu'), $gpuLogoName);
            $gpu->gpuImage = $gpuLogoName;
        }else{
            $gpu->gpuImage = $request->imageAwal;
        }

        $gpu->gpuName = $request->gpuNameUpdate;
        $gpu->brandId = $request->gpuBrandUpdate;
        $gpu->gpuInterface = $request->gpuInterfaceUpdate;
        $gpu->gpuBaseClock = $request->gpuBaseClockUpdate;
        $gpu->gpuBoostClock = $request->gpuBoostClockUpdate;
        $gpu->gpuMemorySize = $request->gpuMemorySizeUpdate;
        $gpu->gpuMemoryClockSpeed = $request->gpuMemoryClockSpeedUpdate;
        $gpu->gpuMemoryInterface = $request->gpuMemoryInterfaceUpdate;
        $gpu->gpuMemoryType = $request->gpuMemoryTypeUpdate;
        $gpu->gpuFeature = $request->gpuFeatureUpdate;
        $gpu->gpuPowerReq = $request->gpuPowerReqUpdate;
        $gpu->gpuCaseSupport = $request->gpuCaseSupportUpdate;
        $gpu->gpuWarranty = $request->garansiUpdate;
        $gpu->gpuPrice = $request->hargaUpdate;
        $gpu->gpuStock = $request->stokUpdate;
        $gpu->save();

        return redirect()->route('admin.gpu')->with(['success' => 'Edit Data Berhasil']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gpu = GraphicCard::find($id);
        File::delete('uploads/gambar/gpu/'.$gpu->gpuImage);
        GraphicCard::destroy($id);
        return redirect()->route('admin.gpu')->with(['success' => 'Hapus Data Berhasil']);
    }
}
