<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Keyboard;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Keyboard",
            'keyboard' => Keyboard::with('brand')->get(),
            'merk' => Brand::all()
        ];

        return view('admin/keyboard',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'keyboardImage' => 'image|mimes:png,jpg,jpeg',
        ]);

        $keyboard = new Keyboard;
        if ($request->file('keyboardImage')) {
            $gambar = $request->file('keyboardImage');
            $keyboardGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $keyboardGambarName);
            $keyboard->keyboardImage = $keyboardGambarName;
        }

        $keyboard->brandId = $request->brandkeyboard;
        $keyboard->keyboardName = $request->keyboardName;
        $keyboard->keyboardType = $request->keyboardType;
        $keyboard->keyboardSize = $request->keyboardSize;
        $keyboard->keyboardSwitch = $request->keyboardSwitch;
        $keyboard->keyboardLayout = $request->keyboardLayout;
        $keyboard->keyboardConnection = $request->keyboardConnection;
        $keyboard->keyboardPrice = $request->keyboardPrice;
        $keyboard->keyboardDescription = $request->keyboardDescription;
        $keyboard->keyboardFeature = $request->keyboardFeature;
        $keyboard->keyboardWarranty = $request->keyboardWarranty;
        $keyboard->keyboardStock = $request->keyboardStock;
        $keyboard->save();
            
        return redirect()->route('administrator.keyboard')->with(['success' => 'Tambah Data Berhasil']);
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
        $data = Keyboard::with("brand")->where('keyboardId', $id)->get();
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
        
        $keyboard = Keyboard::find($request->idUpdate);

        if ($request->file('imageUpdate')) {
            File::delete('uploads/'.$keyboard->keyboardImage);
            $gambar = $request->file('imageUpdate');
            $keyboardGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $keyboardGambarName);
            $keyboard->keyboardImage = $keyboardGambarName;
        }else{
            $keyboard->keyboardImage = $request->imageAwal;
        }

        $keyboard->brandId = $request->updateBrand;
        $keyboard->keyboardName = $request->updateName;
        $keyboard->keyboardType = $request->updateType;
        $keyboard->keyboardSize = $request->updateSize;
        $keyboard->keyboardSwitch = $request->updateSwitch;
        $keyboard->keyboardLayout = $request->updateLayout;
        $keyboard->keyboardConnection = $request->updateConnection;
        $keyboard->keyboardPrice = $request->updatePrice;
        $keyboard->keyboardDescription = $request->updateDescription;
        $keyboard->keyboardFeature = $request->updateFeature;
        $keyboard->keyboardWarranty = $request->updateWarranty;
        $keyboard->keyboardStock = $request->updateStock;
        $keyboard->save();

        return redirect()->route('administrator.keyboard')->with(['success' => 'Update Data Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keyboard = Keyboard::find($id);
        File::delete('uploads/'.$keyboard->keyboardImage);
        $keyboard::destroy($id);
        return redirect()->route('administrator.keyboard')->with(['success' => 'Hapus Data Berhasil']);
    }
}