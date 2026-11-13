@extends('layouts.app')

@section('judul', 'Tambah Obat')

@section('isi')
  <h2 class="text-success">Tambah Obat Baru</h2>

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('obat.store') }}">
        @csrf
        @include('obat._form', ['obat' => new \App\Models\Obat])
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
@endsection
