@extends('layout')

@section('title', 'Daftar Laporan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('Laporan.create') }}" class="btn btn-primary">Tambah Laporan</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>kebun_id</th>
            <th>file_path</th>
            <th>file_type</th>
            <th>tanggal_laporan</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($Laporan as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('laporan.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('laporan.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data laporan.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection

