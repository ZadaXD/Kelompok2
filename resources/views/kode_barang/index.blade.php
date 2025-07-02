@extends('layouts.app')

@section('title', 'Daftar Kode Barang')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Daftar Kode Barang</h4>
    <a href="{{ route('kode-barang.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i> Tambah Barang
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body p-0">
        <table class="table table-bordered table-striped mb-0">
            <thead class="thead-light">
                <tr>
                    <th style="width: 10%">Kode</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Lokasi</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th style="width: 15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($barangs as $barang)
                    <tr>
                        <td>{{ $barang->kode }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->merk }}</td>
                        <td>{{ $barang->lokasi }}</td>
                        <td>{{ $barang->kondisi }}</td>
                        <td>{{ $barang->keterangan }}</td>
                        <td>
                            <a href="{{ route('kode-barang.edit', $barang->id) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('kode-barang.destroy', $barang->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted">Belum ada data barang</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
