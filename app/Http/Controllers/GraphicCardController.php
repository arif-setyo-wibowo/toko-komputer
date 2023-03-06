<?php

namespace App\Http\Controllers;

use App\Models\GraphicCard;
use Illuminate\Http\Request;

class GraphicCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Graphic Card"
        ];

        return view('admin/graphic',$data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GraphicCard $graphicCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GraphicCard $graphicCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GraphicCard $graphicCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GraphicCard $graphicCard)
    {
        //
    }
}
