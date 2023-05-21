<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Processor;
use App\Models\ProcessorSocket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProcessorController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "CPU",
            'processor_socket' => ProcessorSocket::all(),
            'cpu' => Processor::with('brand','socket')->get(),
            'merk' => Brand::all()
        ];

        return view('admin/processor',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'processorImage' => 'image|mimes:png,jpg,jpeg'
        ]);
        $cpu = new Processor;
        if ($request->file('processorImage')) {
            $gambar = $request->file('processorImage');
            $cpuGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/cpu'), $cpuGambarName);
            $cpu->processorImage = $cpuGambarName;
        }
        $cpu->processorName = $request->processorName;
        $cpu->processorSocketId = $request->socketProcessor;
        $cpu->brandId = $request->brandProcessor;
        $cpu->processorGen = $request->processorGen;
        $cpu->processorCore = $request->processorCore;
        $cpu->processorThread = $request->processorThread;
        $cpu->processorBaseSpeed = $request->processorBaseSpeed;
        $cpu->processorBoostSpeed = $request->processorBoostSpeed;
        $cpu->processorCache = $request->processorCache;
        $cpu->processorArch = $request->processorArch;
        $cpu->processorIgpu = $request->processorIgpu;
        $cpu->processorPower = $request->processorPower;
        $cpu->processorHeatsink = $request->processorHeatsink;
        $cpu->processorWarranty = $request->processorWarranty;
        $cpu->processorPrice = $request->processorPrice;
        $cpu->processorStock = $request->processorStock;
        $cpu->save();

        return redirect()->route('admin.processor')->with(['success'=>'Tambah data berhasil']);
    }

    public function edit(string $id)
    {
        $data = Processor::with('brand')->with('socket')->where('processorId', $id)->get();
        return $data->toJson();
    }

    public function update(Request $request)
    {
       $request->validate([
            'processorImage' => 'image|mimes:png,jpg,jpeg'
        ]);
        $cpu = Processor::find($request->idUpdate);
        if ($request->file('processorImageUpdate')) {
            File::delete('uploads/gambar/cpu/'.$cpu->processorImage);
            $gambar = $request->file('processorImageUpdate');
            $cpuGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/gambar/cpu'), $cpuGambarName);
            $cpu->processorImage = $cpuGambarName;
        }else{
            $cpu->processorImage = $request->imageAwal;
        }
        $cpu->processorName = $request->processorNameUpdate;
        $cpu->processorSocketId = $request->socketProcessorUpdate;
        $cpu->brandId = $request->brandProcessorUpdate;
        $cpu->processorGen = $request->processorGenUpdate;
        $cpu->processorCore = $request->processorCoreUpdate;
        $cpu->processorThread = $request->processorThreadUpdate;
        $cpu->processorBaseSpeed = $request->processorBaseSpeedUpdate;
        $cpu->processorBoostSpeed = $request->processorBoostSpeedUpdate;
        $cpu->processorCache = $request->processorCacheUpdate;
        $cpu->processorArch = $request->processorArchUpdate;
        $cpu->processorIgpu = $request->processorIgpuUpdate;
        $cpu->processorPower = $request->processorPowerUpdate;
        $cpu->processorHeatsink = $request->processorHeatsinkUpdate;
        $cpu->processorWarranty = $request->processorWarrantyUpdate;
        $cpu->processorPrice = $request->processorPriceUpdate;
        $cpu->processorStock = $request->processorStockUpdate;
        $cpu->save();

        return redirect()->route('admin.processor')->with(['success'=>'Edit data berhasil']);
    }

    public function destroy(string $id)
    {
        $cpu = Processor::find($id);
        File::delete('uploads/gambar/cpu/'.$cpu->processorImage);
        Processor::destroy($id);
        return redirect()->route('admin.processor')->with(['success' => 'Hapus Data Berhasil']);
    }
}