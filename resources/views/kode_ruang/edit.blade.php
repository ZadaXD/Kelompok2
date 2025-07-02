@extends('layouts.app')

@section('title', 'Edit Kode Ruang')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Edit Kode Ruang</h4>
    <a href="{{ route('kode-ruang.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<form action="{{ route('kode-ruang.update', $kodeRuang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="kode">Kode Ruang</label>
        <input type="text" name="kode" class="form-control" value="{{ $kodeRuang->kode }}" required>
    </div>

    <div class="form-group">
        <label for="nama">Nama Ruang</label>
        <input type="text" name="nama" class="form-control" value="{{ $kodeRuang->nama }}" required>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="3">{{ $kodeRuang->deskripsi }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Simpan Perubahan
    </button>
</form>
@endsection
