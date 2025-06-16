<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku Tulis</title>
</head>
<body>

    <h2>Edit Buku Tulis</h2>
    <a href="/bukutulis">Kembali</a>
    <br/><br/>

    @foreach($buku as $b)
    <form action="/bukutulis/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->id }}">
        Merk: <input type="text" name="merk" value="{{ $b->merkbukutulis }}"><br/>
        Harga: <input type="number" name="harga" value="{{ $b->hargabukutulis }}"><br/>
        Tersedia:
        <select name="tersedia">
            <option value="1" {{ $b->tersedia ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$b->tersedia ? 'selected' : '' }}>Tidak</option>
        </select><br/>
        Berat (gram): <input type="number" name="berat" value="{{ $b->berat }}"><br/>
        Ukuran Buku: <input type="text" name="ukuran" value="{{ $b->ukuranbuku }}"><br/>
        Jumlah Halaman: <input type="number" name="halaman" value="{{ $b->jumlahhalaman }}"><br/>
        <input type="submit" value="Simpan">
    </form>
    @endforeach

</body>
</html>
