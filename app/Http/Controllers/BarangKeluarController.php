<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //validate form
        $request->validate([
            'id_barang' => 'required',
            'nama_customer' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);

        if ($barang->stok < $request->jumlah) {
            return redirect('/barang_keluar')->with('error', 'Stok barang tidak mencukupi !!');
        }

        $barang->decrement('stok', $request->jumlah);
        BarangKeluar::create([
            'id_barang' -> $request->id_barang,
            'nama_customer' -> $request->nama_customer,
            'jumlah' -> $request->jumlah,
        ]);
        return redirect('/barang')->with('succes', 'Barang keluar berhasil ditambahkan');
        
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
