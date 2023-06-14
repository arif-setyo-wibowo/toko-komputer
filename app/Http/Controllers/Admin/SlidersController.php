<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Slider",
            'slider' => Slider::all()
        ];

        return view('admin/slider',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = Slider::where('sliderId', $id)->get();
        return $data->toJson();
    }

    public function update(Request $request)
    {
        $request->validate([
            'sliderImageUpdate' => 'dimensions:min_width=1110,min_height=236|image|mimes:png,jpg,jpeg',
        ]);

        $slider = Slider::find($request->IdUpdate);

        if ($request->file('sliderImageUpdate')) {
            File::delete('uploads/'.$slider->sliderImage);
            $gambar = $request->file('sliderImageUpdate');
            $sliderGambarName = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $sliderGambarName);
            $slider->sliderImage = $sliderGambarName;
        }else{
            $slider->sliderImage = $request->imageAwal;
        }
        $slider->save();

        return redirect()->route('administrator.slider')->with(['success' => 'Edit Data Berhasil']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}