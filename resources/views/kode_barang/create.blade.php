@extends('layouts.app')

@section('title', 'Tambah Kode Barang')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Tambah Kode Barang</h4>
    <a href="{{ route('kode-barang.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<form action="{{ route('kode-barang.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Kode Barang</label>
        <input type="text" name="kode" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Merk</label>
        <input type="text" name="merk" class="form-control">
    </div>

    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="lokasi" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Kondisi</label>
        <input type="text" name="kondisi" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <textarea name="keterangan" class="form-control" rows="3"></textarea>
    </div>

    <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
</form>
@endsection
