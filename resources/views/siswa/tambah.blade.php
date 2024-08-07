@extends('layout')

@section('konten')
    <h4>Tambah Siswa</h4>
    <form action="{{ route('siswa.submit') }}" method="POST">
        @csrf
        <div class=" form-control mb-3 ">
            <label for="">NIS</label>
            <input type="number" name="nis" class="form-control">

            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control">

            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control">

            <label for="">No Hp</label>
            <input type="text" name="no_hp" class="form-control">

            <label for="">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control">

            <label for="">Hobi</label>
            <input type="text" name="hobi" class="form-control">
        </div>

        <button class="btn btn-primary" type="submit">Tambah</button>
    </form>
@endsection
