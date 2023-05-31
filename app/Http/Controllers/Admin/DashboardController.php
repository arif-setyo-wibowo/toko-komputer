<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function manager()
    {
        $data=[
            'title' => "Dashboard Manager",
            'pelanggan' => User::all()->count(),
            'barang' => DB::table('products')->count(),
            'karyawan' => Employee::all()->count()
        ];

        return view('admin/dashboardManager',$data);
    }

    public function karyawan()
    {
        $data=[
            'title' => "Dashboard Karyawan",
            'pelanggan' => User::all()->count(),
            'barang' => DB::table('products')->count(),
            'order' => DB::table('orders')->count(),
        ];

        return view('admin/dashboard',$data);
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
        //
    }
}