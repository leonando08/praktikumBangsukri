<?php

namespace App\Http\Controllers;
use App\Models\BarangMasuk;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', [
            "title" => "Karyawan",
            "karyawans" => $karyawans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create', [
            "title" => "Karyawan",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_karyawan' => 'required|min:3|max:255',
            'nomor_hp' => 'required|min:4|max:255|unique:karyawan',
            'alamat' => 'required|min:3|max:255',
        ]);

        Karyawan::create($validateData);
        return redirect('/karyawan')->with('success','Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', [
            "title" => "Karyawan",
            "karyawan" => $karyawan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nama_karyawan' => 'required|min:3|max:255',
            'nomor_hp' => 'required|min:4|max:255|unique:karyawan,nomor_hp,' . $karyawan->id,
            'alamat' => 'required|min:3|max:255',
        ]);

        $karyawan->update([
            'nama_karyawan' => $request->nama_karyawan,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
        ]);
        return redirect('/karyawan')->with('success', 'Berhasil ubah data'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);
        return redirect('/karyawan')->with('success', 'Berhasil hapus data');
    }
}
