<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Mouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Mouse",
            'merk' => Brand::all(),
            'mouse' => Mouse::with('brand')->get()
        ];

        return view('admin/mouse',$data);
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
            'mouseImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $mouse = new Mouse;
        if ($request->file('mouseImage')) {
            $gambar = $request->file('mouseImage');
            $mouseGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $mouseGambarName);
            $mouse->mouseImage = $mouseGambarName;
        }

        $mouse->brandId = $request->brandmouse;
        $mouse->mouseName = $request->mouseName;
        $mouse->mouseSensor = $request->mouseSensor;
        $mouse->mouseSwitch = $request->mouseSwitch;
        $mouse->mouseDpi = $request->mouseDpi;
        $mouse->mouseSpeed = $request->mouseSpeed;
        $mouse->mouseConnection = $request->mouseConnection;
        $mouse->mousePollRate = $request->mousePollRate;
        $mouse->mouseGrip = $request->mouseGrip;
        $mouse->mouseDescription = $request->mouseDescription;
        $mouse->mouseWarranty = $request->mouseWarranty;
        $mouse->mouseStock = $request->mouseStock;
        $mouse->mousePrice = $request->mousePrice;
        $mouse->save();

        return redirect()->route('administrator.mouse')->with(['success' => 'Tambah Data Berhasil']);
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
        $data = Mouse::with("brand")->where('mouseId', $id)->get();
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
    
        $mouse = Mouse::find($request->idUpdate);

        if ($request->file('imageUpdate')) {
            File::delete('uploads/'.$mouse->mouseImage);
            $gambar = $request->file('imageUpdate');
            $RamGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $RamGambarName);
            $mouse->mouseImage = $RamGambarName;
        }else{
            $mouse->mouseImage = $request->imageAwal;
        }

        $mouse->brandId = $request->updateBrand;
        $mouse->mouseName = $request->updateName;
        $mouse->mouseSensor = $request->updateSensor;
        $mouse->mouseSwitch = $request->updateSwitch;
        $mouse->mouseDpi = $request->updateDpi;
        $mouse->mouseSpeed = $request->updateSpeed;
        $mouse->mouseConnection = $request->updateConnection;
        $mouse->mousePollRate = $request->updatePollRate;
        $mouse->mouseGrip = $request->updateGrip;
        $mouse->mouseDescription = $request->updateDescription;
        $mouse->mouseWarranty = $request->updateWarranty;
        $mouse->mouseStock = $request->updateStock;
        $mouse->mousePrice = $request->updatePrice;

        $mouse->save();

        return redirect()->route('administrator.mouse')->with(['success' => 'Edit Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mouse = Mouse::find($id);
        File::delete('uploads/'.$mouse->mouseImage);
        $mouse::destroy($id);
        return redirect()->route('administrator.mouse')->with(['success' => 'Hapus Data Berhasil']);
 
    }
}