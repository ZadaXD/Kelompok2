<?php

namespace App\Http\Controllers;

use App\Models\KodeRuang;
use Illuminate\Http\Request;

class KodeRuangController extends Controller
{
    public function index()
    {
        $ruangs = KodeRuang::all();
        return view('kode_ruang.index', compact('ruangs'));
    }

    public function create()
    {
        return view('kode_ruang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:kode_ruangs',
            'nama' => 'required',
        ]);

        KodeRuang::create($request->all());
        return redirect()->route('kode-ruang.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(KodeRuang $kodeRuang)
    {
        return view('kode_ruang.edit', compact('kodeRuang'));
    }

    public function update(Request $request, KodeRuang $kodeRuang)
    {
        $request->validate([
            'kode' => 'required|unique:kode_ruangs,kode,' . $kodeRuang->id,
            'nama' => 'required',
        ]);

        $kodeRuang->update($request->all());
        return redirect()->route('kode-ruang.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(KodeRuang $kodeRuang)
    {
        $kodeRuang->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }
}

