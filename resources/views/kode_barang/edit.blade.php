@extends('layouts.app')

@section('title', 'Edit Kode Barang')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Edit Kode Barang</h4>
    <a href="{{ route('kode-barang.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<form action="{{ route('kode-barang.update', $kodeBarang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="kode">Kode Barang</label>
        <input type="text" name="kode" class="form-control" value="{{ $kodeBarang->kode }}" required>
    </div>

    <div class="form-group">
        <label for="nama">Nama Barang</label>
        <input type="text" name="nama" class="form-control" value="{{ $kodeBarang->nama }}" required>
    </div>

    <div class="form-group">
        <label for="merk">Merk</label>
        <input type="text" name="merk" class="form-control" value="{{ $kodeBarang->merk }}">
    </div>

    <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" name="lokasi" class="form-control" value="{{ $kodeBarang->lokasi }}" required>
    </div>

    <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <input type="text" name="kondisi" class="form-control" value="{{ $kodeBarang->kondisi }}" required>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" class="form-control" rows="3">{{ $kodeBarang->keterangan }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Simpan Perubahan
    </button>
</form>
@endsection
