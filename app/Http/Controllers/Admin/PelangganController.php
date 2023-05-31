<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PelangganController extends Controller
{
    public function index()
    {
        $data=[
            'title' => "Pelanggan",
            'pelanggan' => User::all()
        ];

        return view('admin/pelanggan',$data);
    
    }
}