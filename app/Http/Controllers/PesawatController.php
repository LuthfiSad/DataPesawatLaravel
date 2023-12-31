<?php

namespace App\Http\Controllers;

use App\Models\Pesawat;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pesawats = Pesawat::all();
        return view('pesawat.index', compact('pesawats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pesawat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $year = date("Y");
        $validated = $request->validate([
            'kode_pesawat' => 'required|max:255|unique:pesawats',
            'nama_pesawat' => 'required|max:255',
            'type'=> 'required|max:255',
            'tahun_rakit' => 'required|min_digits:4|min:1901|max:'.$year.'|max_digits:4|numeric',
        ]);

        Pesawat::create($validated);
        return to_route('pesawats.index')->with('success', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesawat $pesawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesawat $pesawat)
    {
        //
        return view('pesawat.edit', compact('pesawat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesawat $pesawat)
    {
        //
        $year = date("Y");
        $validated = $request->validate([
            'kode_pesawat' => 'required|max:255|unique:pesawats,kode_pesawat,' . $pesawat->id,
            'nama_pesawat' => 'required|max:255',
            'type'=> 'required|max:255',
            'tahun_rakit' => 'required|min_digits:4|min:1901|max:'.$year.'|max_digits:4|numeric',
        ]);

        // dd($validated);
        $pesawat->update($validated);
        return to_route('pesawats.index')->with('success', 'Berhasil Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesawat $pesawat)
    {
        //
        Pesawat::destroy($pesawat->id);
        return to_route('pesawats.index')->with('success', 'Berhasil Menghapus Data');
    }
}
