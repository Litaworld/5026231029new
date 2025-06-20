@extends('template')

@section('content')
<h3>Data Karyawan</h3>

<table class="table table-hover table-bordered align-middle text-center">
    <thead class="table dark">
    <tr>
      <th>Kode Pegawai</th>
      <th>Nama Lengkap</th>
      <th>Divisi</th>
      <th>Departemen</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    @foreach($karyawan as $k)
    <tr>
      <td>{{ $k->kodepegawai }}</td>
      <td class="text-capitalize">{{ $k->namalengkap }}</td>
      <td>{{ $k->divisi }}</td>
      <td class="text-capitalize">{{ $k->departemen }}</td>
      <td>
        <a href="/karyawan/edit/{{ $k->kodepegawai }}">Edit</a>
		<a href="/karyawan/view/{{ $k->kodepegawai }}">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
