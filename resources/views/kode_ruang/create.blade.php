@extends('layouts.app')

@section('title', 'Tambah Kode Ruang')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Tambah Kode Ruang</h4>
    <a href="{{ route('kode-ruang.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<form action="{{ route('kode-ruang.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Kode Ruang</label>
        <input type="text" name="kode" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nama Ruang</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
    </div>

    <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
</form>
@endsection
