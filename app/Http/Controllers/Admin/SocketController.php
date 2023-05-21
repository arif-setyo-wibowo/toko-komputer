<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SocketExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\ProcessorSocket;
use Maatwebsite\Excel\Facades\Excel;

class SocketController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Socket",
            'socket' => ProcessorSocket::all()

        ];

        return view('admin/socket', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'unique:processor_sockets,processorSocketName',
        ], [
            'nama.unique'  => 'Nama Socket Sudah Digunakan !!',
        ]);

        $socket = new ProcessorSocket;
        $socket->processorSocketName = $request->nama;
        $socket->save();

        return redirect()->route('admin.socket')->with(['success' => 'Tambah Data Berhasil']);
    }

    public function edit(string $id)
    {
        $data = ProcessorSocket::where('processorSocketId', $id)->get();
        return $data->toJson();
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama'  => Rule::unique('processor_sockets', 'processorSocketName')->ignore($request->processorSocketId, 'processorSocketId'),
        ], [
            'nama.unique'  => 'Nama Socket Sudah Digunakan !!',
        ]);


        $socket = ProcessorSocket::find($request->processorSocketId);
        $socket->processorSocketName = $request->nama;
        $socket->save();

        return redirect()->route('admin.socket')->with(['success' => 'Edit Data Berhasil']);
    }

    public function destroy(string $id)
    {
        ProcessorSocket::destroy($id);
        return redirect()->route('admin.socket')->with(['success' => 'Hapus Data Berhasil']);
    }

    // Contoh export excel
    public function export(){
        return Excel::download(new SocketExport, 'socket.xlsx');
    }
}