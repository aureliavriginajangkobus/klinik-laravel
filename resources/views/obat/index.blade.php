@extends('layouts.app')

@section('judul', 'Katalog Obat')

@section('isi')
  <h2 class="text-success">Katalog Farmasi</h2>
  <p>Daftar obat yang ada di klinik.</p>

  <table class="table table-striped table-bordered">
    <thead class="table-success">
      <tr>
        <th>Nama Obat</th>
        <th>Kategori</th>
        <th>Sediaan</th>
        <th>Pabrikan</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($daftarObat as $obat)
        <tr>
          <td>{{ $obat->nama_obat }}</td>
          <td>{{ $obat->kategori }}</td>
          <td>{{ $obat->sediaan }}</td>
          <td>{{ $obat->pabrikan }}</td>
          <td>Rp{{ number_format($obat->harga, 0, ',', '.') }}</td>
          <td>{{ $obat->stok }}</td>
          <td>
            <a href="{{ route('obat.edit', $obat) }}" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="{{ route('obat.destroy', $obat) }}" class="d-inline"
                  onsubmit="return confirm('Yakin hapus data ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="7" class="text-center">Belum ada data obat.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  <a href="{{ route('obat.create') }}" class="btn btn-success">+ Tambah Obat</a>
@endsection
