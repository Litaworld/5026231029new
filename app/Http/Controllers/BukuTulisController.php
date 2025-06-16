<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuTulisController extends Controller
{
    public function index()
    {
        $buku = DB::table('bukutulis')->paginate(10);
        return view('indexbuku', ['buku' => $buku]);
    }

    public function tambah()
    {
        return view('tambahbuku');
    }

    public function store(Request $request)
    {
        DB::table('bukutulis')->insert([
            'merkbukutulis' => $request->merk,
            'hargabukutulis' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat,
            'ukuranbuku' => $request->ukuran,
            'jumlahhalaman' => $request->halaman
        ]);
        return redirect('/bukutulis');
    }

    public function edit($id)
    {
        $buku = DB::table('bukutulis')->where('ID', $id)->get();
        return view('editbuku', ['buku' => $buku]);
    }

    public function update(Request $request)
    {
        DB::table('bukutulis')->where('ID', $request->id)->update([
            'merkbukutulis' => $request->merk,
            'hargabukutulis' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat,
            'ukuranbuku' => $request->ukuran,
            'jumlahhalaman' => $request->halaman
        ]);
        return redirect('/bukutulis');
    }

    public function hapus($id)
    {
        DB::table('bukutulis')->where('ID', $id)->delete();
        return redirect('/bukutulis');
    }

    public function cari(Request $request)
    {
    $cari = $request->cari;

    $buku = DB::table('bukutulis')
        ->where('merkbukutulis', 'like', "%".$cari."%")
        ->orWhere('ukuranbuku', 'like', "%".$cari."%")
        ->get();

    return view('indexbuku', ['buku' => $buku]);
    }

}
