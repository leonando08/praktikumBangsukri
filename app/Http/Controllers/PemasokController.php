<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasoks = Pemasok::all();
        return view('pemasok.index', [
            "title" => "Pemasok",
            "pemasoks" => $pemasoks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama_pemasok' => 'required|min:3|max:255',
            'nama_kontak' => 'required|min:3|max:255',
            'nomor_hp' => 'required|min:4|max:255|unique:pemasok',
            'alamat' => 'required|min:3|max:255',
        ]);

        Pemasok::create($validateData);
        return redirect('/pemasok')->with('success','Berhasil tambah data');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function show(Pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemasok $pemasok)
    {
        return view('pemasok.edit', [
            "title" => "Pemasok",
            "pemasok" => $pemasok,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemasok $pemasok)
    {
        {
            $request->validate([
                'nama_pemasok' => 'required|min:3|max:255',
                'nama_kontak' => 'required|min:3|max:255',
                'nomor_hp' => 'required|min:4|max:255|unique:pemasok,nomor_hp,' . $pemasok->id,
                'alamat' => 'required|min:3|max:255',
            ]);
    
            $pemasok->update([
                'nama_pemasok' => $request->nama_pemasok,
                'nama_kontak' => $request->nama_kontak,
                'nomor_hp' => $request->nomor_hp,
                'alamat' => $request->alamat,
            ]);
            return redirect('/pemasok')->with('success', 'Berhasil ubah data'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemasok $pemasok)
    {
        Pemasok::destroy($pemasok->id);
        return redirect('/pemasok')->with('success', 'Berhasil hapus data');
    }
}
