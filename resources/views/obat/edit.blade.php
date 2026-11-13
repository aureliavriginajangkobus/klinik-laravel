@extends('layouts.app')

@section('judul', 'Edit Obat')

@section('isi')
  <h2 class="text-success">Edit Data Obat</h2>

  <div class="card">
    <div class="card-body">
      <form method="POST" action="{{ route('obat.update', $obat) }}">
        @csrf
        @method('PUT')
        @include('obat._form')
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
@endsection
