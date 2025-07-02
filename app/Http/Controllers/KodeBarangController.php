<?php

namespace App\Http\Controllers;

use App\Models\KodeBarang;
use Illuminate\Http\Request;

class KodeBarangController extends Controller
{
    public function index()
    {
        $barangs = KodeBarang::all();
        return view('kode_barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('kode_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:kode_barangs',
            'nama' => 'required',
            'lokasi' => 'required',
            'kondisi' => 'required',
        ]);

        KodeBarang::create($request->all());
        return redirect()->route('kode-barang.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(KodeBarang $kodeBarang)
    {
        return view('kode_barang.edit', compact('kodeBarang'));
    }

    public function update(Request $request, KodeBarang $kodeBarang)
    {
        $request->validate([
            'kode' => 'required|unique:kode_barangs,kode,' . $kodeBarang->id,
            'nama' => 'required',
            'lokasi' => 'required',
            'kondisi' => 'required',
        ]);

        $kodeBarang->update($request->all());
        return redirect()->route('kode-barang.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(KodeBarang $kodeBarang)
    {
        $kodeBarang->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }
}
