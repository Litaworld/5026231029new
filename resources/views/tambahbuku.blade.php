@extends('template')

@section('content')

<h2>Tambah Buku Tulis</h2>
    <a href="/bukutulis" class="btn btn-info"> Kembali</a>
    <br/>
    <br/>

    <form action="/bukutulis/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">Merk: </div>
            <div class="col-8">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">Harga: </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">Tersedia: </div>
            <div class="col-8">
                <select name="tersedia" required="required" class="form-control">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">Berat (gram): </div>
            <div class="col-8">
                <input type="number" name="berat" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">Ukuran Buku: </div>
            <div class="col-8">
                <input type="text" name="ukuran" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">Jumlah Halaman: </div>
            <div class="col-8">
                <input type="number" name="halaman" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan">
    </form>

@endsection
