@extends('layout')

@section('konten')
<h4>Edit Siswa</h4>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-control mb-3">
        <label for="nis">NIS</label>
        <input type="number" id="nis" name="nis" value="{{ old('nis', $siswa->nisn) }}" class="form-control">

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" class="form-control">

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $siswa->alamat) }}" class="form-control">

        <label for="no_hp">No HP</label>
        <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $siswa->no_hp) }}" class="form-control">

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', $siswa->jenis_kelamin) }}" class="form-control">

        <label for="hobi">Hobi</label>
        <input type="text" id="hobi" name="hobi" value="{{ old('hobi', $siswa->hobi) }}" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Edit</button>
</form>
@endsection
