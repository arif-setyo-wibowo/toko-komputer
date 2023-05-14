<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function login()
    {
        $data =[
            'title' => 'login'
        ];
        return view('admin/logintest',$data);
    }

    public function signup()
    {
        $data =[
            'title' => 'register'
        ];
        return view('admin/registertest',$data);
    }
    public function signup_data(Request $request)
    {
        $request->validate([
            'customerEmail' => 'required|email|unique:users'
        ]);
        $customer = new Customer();
        $customer->customerName = $request->customerName;
        $customer->customerEmail = $request->customerEmail;
        $customer->customerPhoneNumber = $request->customerPhoneNumber;
        $customer->customerPassword = Hash::make($request->customerPassword);
        $customer->save();
        
        return redirect()->route('admin.login');
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
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
