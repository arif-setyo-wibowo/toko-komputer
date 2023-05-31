<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ['title'=>'Login'];
        return view('admin/login',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        
        $employee = Employee::where('employeeEmail', $request->employeeEmail)->first();
        if ($employee) {
            if ($employee->employeeRole === 'Karyawan') {
                if (password_verify($request->employeePassword, $employee->employeePassword)) {
                    session(['login.karyawan' => true]);
                    session(['email.karyawan' => $employee->employeeEmail]);
                    session(['nama.karyawan' => $employee->employeeName]);    
                    session(['role.karyawan' => $employee->employeeRole]);      
                    return redirect()->route('karyawan');
                } else {
                    return redirect()->route('login.admin')->withErrors(['password' => 'Password salah'])->withInput();
                }
            }else if ($employee->employeeRole === 'Manager') {
                if (password_verify($request->employeePassword, $employee->employeePassword)) {
                    session(['login.manager' => true]);
                    session(['email.manager' => $employee->employeeEmail]);
                    session(['nama.manager' => $employee->employeeName]);  
                    session(['role.manager' => $employee->employeeRole]);        
                    return redirect()->route('manager');
                } else {
                    return redirect()->route('login.admin')->withErrors(['password' => 'Password salah'])->withInput();
                }
            }
        } else {
            return redirect()->route('login.admin')->withErrors(['email' => 'Email tidak ditemukan'])->withInput();
        }

    }

    public function logout()
    {
        session()->forget('login.karyawan');
        session()->forget('email.karyawan');
        session()->forget('nama.karyawan'); 
        session()->forget('role.karyawan'); 

        session()->forget('login.manager');
        session()->forget('email.manager');
        session()->forget('nama.manager'); 
        session()->forget('role.manager'); 

        return redirect()->route('login.admin');
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
