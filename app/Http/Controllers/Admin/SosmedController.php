<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Sosial Media",
            'sosmed' => Media::all()
        ];

        return view('admin/sosmed',$data);
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
        $this->validate($request, [
            'nama'   => 'required|min:5',
            'link'   => 'required|min:10'
        ]);

        Media::create([
            'mediaId'   => "media".rand(),
            'mediaName' => $request->nama,
            'medialink' => $request->link
        ]);

        return redirect()->route('admin.sosmed');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Media::where('mediaId', $id)->delete();
        return redirect()->route('admin.sosmed');
    }
}
