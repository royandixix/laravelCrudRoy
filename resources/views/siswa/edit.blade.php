@extends('layout')

@section('konten')
<h4>Edit Siswa</h4>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    <div class=" form-control mb-3 ">
        <label for="">NIS</label>
        <input type="number" name="nis" value="{{ $siswa->nisn }}" class="form-control">

        <label for="">Nama</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control">

        <label for="">Alamat</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control">

        <label for="">No Hp</label>
        <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control">

        <label for="">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control">

        <label for="">Hobi</label>
        <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Edit</button>
</form>
@endsection
