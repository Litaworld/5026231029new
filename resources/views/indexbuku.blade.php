@extends('template')

@section('content')
<h2>Data Buku Tulis</h2>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/bukutulis/tambah" class="btn btn-primary">+ Tambah Buku Tulis</a>
        <form action="/bukutulis/cari" method="GET" class="form-inline d-flex">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="cari" placeholder="Cari merk atau ukuran...">
            <input type="submit" class="btn btn-info" value="Cari">
        </form>
    </div

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center">
            <thead class="table dark">
                <tr>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat (gram)</th>
                    <th>Ukuran</th>
                    <th>Jumlah Halaman</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody
                @foreach($buku as $b)
                <tr>
                    <td>{{ $b->merkbukutulis }}</td>
                    <td>Rp{{ number_format($b->hargabukutulis, 0, ',', '.') }}</td>
                    <td>
                        <div class="p-2 text-white text-center rounded" style="background-color: {{ $b->tersedia ? '#0dcaf0' : '#6c757d' }}">
                            {{ $b->tersedia ? 'Ya' : 'Tidak' }}
                        </div>
                    </td>
                    <td>{{ $b->berat }}</td>
                    <td>{{ $b->ukuranbuku }}</td>
                    <td>{{ $b->jumlahhalaman }}</td>
                    <td>
                        <a href="/bukutulis/edit/{{ $b->id }}" class="btn btn-sm btn-success">✏️ Edit</a>
                        <a href="/bukutulis/hapus/{{ $b->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">🗑️ Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $buku->links() }}
    </div>
@endsection
