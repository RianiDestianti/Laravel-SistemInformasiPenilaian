@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Murid</h1>
    <a href="{{ route('murid.create') }}" class="btn btn-primary mb-3">Tambah Murid</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>No. Telp</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($murid as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nis }}</td>
                <td>{{ $m->kelas }}</td>
                <td>{{ $m->no_telp }}</td>
                <td>{{ $m->jenis_kelamin }}</td>
                <td>{{ $m->tanggal_lahir }}</td>
                <td>
                    <a href="{{ route('murid.edit', $m->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('murid.destroy', $m->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
