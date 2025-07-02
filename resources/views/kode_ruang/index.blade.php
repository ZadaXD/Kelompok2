@extends('layouts.app')

@section('title', 'Daftar Kode Ruang')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Daftar Kode Ruang</h4>
    <a href="{{ route('kode-ruang.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i> Tambah Ruang
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
                    <th>Nama Ruang</th>
                    <th>Deskripsi</th>
                    <th style="width: 15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ruangs as $ruang)
                    <tr>
                        <td>{{ $ruang->kode }}</td>
                        <td>{{ $ruang->nama }}</td>
                        <td>{{ $ruang->deskripsi }}</td>
                        <td>
                            <a href="{{ route('kode-ruang.edit', $ruang->id) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('kode-ruang.destroy', $ruang->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted">Belum ada data ruang</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
