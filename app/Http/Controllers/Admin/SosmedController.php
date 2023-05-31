<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Media;

class SosmedController extends Controller
{
    public function index()
    {
        $data=[
            'title' => "Sosial Media",
            'sosmed' => Media::all()
        ];

        return view('admin/sosmed',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'unique:media,mediaName',
            'link'  => 'unique:media,medialink'
        ],[
            'nama.unique'  => 'Nama Platform Sudah Digunakan !!',
            'link.unique'  => 'Link Platform Sudah Digunakan !!'
        ]);

        $media = new Media;
        $media->mediaName = $request->nama;
        $media->medialink = $request->link;
        $media->save();

        return redirect()->route('administrator.sosmed')->with(['success' => 'Tambah Data Berhasil']);
    }

    public function edit(string $id)
    {
        $data = Media::where('mediaId', $id)->get();
        return $data->toJson();
    }

    public function update(Request $request)
    {
        $request->validate([
            'mediaName'  => Rule::unique('media','mediaName')->ignore($request->mediaId, 'mediaId'),
            'medialink'  => Rule::unique('media','medialink')->ignore($request->mediaId, 'mediaId'),
        ],[
            'mediaName.unique'  => 'Nama Platform Sudah Digunakan !!',
            'medialink.unique'  => 'Link Platform Sudah Digunakan !!'
        ]);
        

        $media = Media::find($request->mediaId);
        $media->mediaName = $request->mediaName;
        $media->medialink = $request->medialink;
        $media->save();

        return redirect()->route('administrator.sosmed')->with(['success' => 'Edit Data Berhasil']);
    }

    public function destroy(string $id)
    {
        Media::destroy($id);
        return redirect()->route('administrator.sosmed')->with(['success' => 'Hapus Data Berhasil']);
    }
}