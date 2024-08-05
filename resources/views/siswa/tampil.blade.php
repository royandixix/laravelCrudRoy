@extends('layout')

@section('konten')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Daftar Siswa</h4>
    <div>
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah Siswa</a>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $no => $data)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_hp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->hobi }}</td>
            <td>
                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('siswa.delete', $data->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
