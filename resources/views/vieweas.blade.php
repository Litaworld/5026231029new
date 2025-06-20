<!DOCTYPE html>
<html>
<head>
    <title>View Karyawan</title>
</head>
<body>
    <h2>Detail Karyawan</h2>
    <table>
        <tr><td>Kode Pegawai</td><td>{{ $k->kodepegawai }}</td></tr>
        <tr><td>Nama Lengkap</td><td>{{ $k->nama }}</td></tr>
        <tr><td>Divisi</td><td>{{ $k->divisi }}</td></tr>
        <tr><td>Departemen</td><td>{{ $k->departemen }}</td></tr>
    </table>
    <br>
    <a href="/karyawan">Kembali</a>
</body>
</html>
