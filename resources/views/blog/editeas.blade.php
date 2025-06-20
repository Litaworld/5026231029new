<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Karyawan</title>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Karyawan</h3>
	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $k)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->kodepegawai }}"> <br/>
		Kode Pegawai <input type="text" required="required" name="kode" value="{{ $k->karyawan_kode }}"> <br/>
        Nama Lengkap <input type="text" required="required" name="nama" value="{{ $k->karyawan_nama }}"> <br/>
		Divisi <input type="text" required="required" name="divisi" value="{{ $k->karyawan_divisi }}"> <br/>
		Departemen <input type="text" required="required" name="depart" value="{{ $k->karyawan_departemen }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
