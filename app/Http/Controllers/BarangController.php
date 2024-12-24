<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
            $barangs = Barang::all();
            return view('barang.index', [
                "title" => "Barang",
                "barangs" => $barangs,
            ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create', [
            "title" => "Barang",
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
            'nama_barang' => 'required|min:3|max:255',
            'merk' => 'required|min:3|max:255',
            'tipe' => 'required|min:4|max:255|unique:barang',
            'satuan' => 'required|min:3|max:255',
        ]);

        Barang::create($validateData);
        return redirect('/barang')->with('success','Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', [
            "title" => "Barang",
            "barang" => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        {
            $request->validate([
                'nama_barang' => 'required|min:3|max:255',
                'merk' => 'required|min:3|max:255',
                'tipe' => 'required|min:4|max:255|unique:barang,tipe,' . $barang->id,
                'satuan' => 'required|min:3|max:255',
            ]);
    
            $barang->update([
                'nama_barang' => $request->nama_barang,
                'merk' => $request->merk,
                'tipe' => $request->tipe,
                'satuan' => $request->satuan,
            ]);
            return redirect('/barang')->with('success', 'Berhasil ubah data'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        {
            Barang::destroy($barang->id);
            return redirect('/barang')->with('success', 'Berhasil hapus data');
        }
    }
}
