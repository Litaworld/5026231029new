<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    // Halaman Inti (Tabel)
    public function index()
    {
        $karyawan = DB::table('mykaryawan')->get();
        return view('indexeas', ['karyawan' => $karyawan]);
    }

    public function view()
    {
        $karyawan = DB::table('mykaryawan')->get();
        return view('vieweas', ['karyawan' => $karyawan]);
    }

    // method untuk edit data pegawai
    public function edit($kodepegawai)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$karyawan = DB::table('mykaryawan')->where('karyawan', $kodepegawai)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editeas',['karyawan' => $karyawan]);

    }

    // Proses Simpan
    public function update(Request $request)
    {
        // Validasi kodepegawai tidak boleh sama (cek di DB)
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi'      => $request->divisi,
            'departemen'  => $request->departemen,
        ]);
        return redirect('/pekerja')->with('success', 'Data berhasil ditambahkan');
    }

}
