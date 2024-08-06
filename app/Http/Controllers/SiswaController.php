<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Psy\CodeCleaner\ReturnTypePass;

class SiswaController extends Controller
{
    //membuat fungsi
    function tampil(){
        $siswa = Siswa::get();
        // dd($siswa);
        return view('siswa.tampil', compact('siswa'));
    }

    function tambah(){
        return view('siswa.tambah');

    }

    function submit(Request $request) {
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->save();

        return redirect() ->route ('siswa.tampil');

    }

    function edit($id) {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    function update(Request $request, $id) {
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->update();

        return redirect() ->route ('siswa.tampil');
    }

    function hapus($id) {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect() ->route ('siswa.tampil');

    }
}
