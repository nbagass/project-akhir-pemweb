<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=MataKuliah::All();
        return view('matakuliah',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMataKuliahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMataKuliahRequest $request)
    {
        $data=[
            'kode_matkul'=>$request->kode_matkul,
            'nama_matkul'=>$request->nama_matkul,
            'nama_prodi'=>$request->nama_prodi,
            'jumlah_sks'=>$request->jumlah_sks
        ];
        MataKuliah::create($data);
        return redirect('matakuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul=MataKuliah::findorfail($id);
        return view('edit_matkul',["matkul"=>$matkul]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMataKuliahRequest  $request
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMataKuliahRequest $request, $id)
    {
        $matkul=MataKuliah::find($id);
        $data=[
            'kode_matkul'=>$request->kode_matkul,
            'nama_matkul'=>$request->nama_matkul,
            'nama_prodi'=>$request->nama_prodi,
            'jumlah_sks'=>$request->jumlah_sks
        ];
        $matkul->update($data);
        return redirect()->route('matakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul=MataKuliah::find($id);
        $matkul->delete();
        return redirect('mahasiswa');
    }
}
