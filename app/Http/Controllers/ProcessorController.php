<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Processor"
        ];

        return view('admin/processor',$data);
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
    public function show(Processor $processor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Processor $processor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Processor $processor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Processor $processor)
    {
        //
    }
}
