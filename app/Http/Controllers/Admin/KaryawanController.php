<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'title' => "Karyawan",
            'karyawan' => Employee::all()
        ];

        return view('admin/employee',$data);
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
            'employeeEmail' => 'unique:employees'
        ]);

        $employee = new Employee;
        $employee->employeeName = $request->employeeName;
        $employee->employeeEmail = $request->employeeEmail;
        $employee->employeeRole = $request->employeeRole;
        $employee->employeePassword = Hash::make($request->employeePassword);
        $employee->save();

        return redirect()->route('administrator.karyawan')->with('succes','Karyawan Berhasil di tambah');
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
        $data = Employee::where('employeeId',$id)->get();
        return $data->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'employeeEmail' => 'unique:employees'
        ]);

        $employee = Employee::find($request->idUpdate);
        $employee->employeeName = $request->updateName;
        $employee->employeeEmail = $request->updateEmail;
        $employee->employeeRole = $request->updateRole;
        if(!empty($request->updatePassword)){
            $employee->employeePassword = Hash::make($request->updatePassword);
        }else{
            $employee->employeePassword = $request->passwordLama;
        }
        $employee->save();

        return redirect()->route('administrator.karyawan')->with('succes','Karyawan Berhasil di ubah');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee::destroy($id);
        return redirect()->route('administrator.karyawan')->with(['success' => 'Hapus Data Berhasil']);
   }
}
