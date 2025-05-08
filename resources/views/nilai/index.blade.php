@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Nilai</h1>
    <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Guru</th>
                <th>Nama Murid</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Semester</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $item)
                <tr>
                    <td>{{ $item->guru->nama }}</td>
                    <td>{{ $item->murid->nama }}</td>
                    <td>{{ $item->mataPelajaran->mata_pelajaran }}</td>
                    <td>{{ $item->nilai }}</td>
                    <td>{{ $item->predikat }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>
                        <a href="{{ route('nilai.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('nilai.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
