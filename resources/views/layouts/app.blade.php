<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('judul') - Klinik Sehat Selalu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-dark bg-success px-4">
    <span class="navbar-brand mb-0 h1">Klinik Sehat Selalu</span>
    @auth
      <div class="d-flex align-items-center">
        <a href="{{ route('obat.index') }}" class="btn btn-light btn-sm me-2">Katalog Obat</a>
        <a href="{{ route('obat.create') }}" class="btn btn-outline-light btn-sm me-3">Tambah Obat</a>
        <span class="text-white me-2">{{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Logout</button>
        </form>
      </div>
    @endauth
  </nav>

  <div class="container my-4">
    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('isi')
  </div>

  <footer class="text-center text-muted py-3">
    <p class="mb-0">Aurelia Vrigina Jangkobus - 102022500113 - [Kelas] - [Nama Kelompok]</p>
    <p class="mb-0">Modul Katalog Farmasi</p>
  </footer>

</body>
</html>
