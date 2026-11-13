@extends('layouts.app')

@section('judul', 'Login')

@section('isi')
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <h3 class="text-success mb-3">Login</h3>

          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-success w-100">Login</button>
          </form>

          <p class="text-muted mt-3 mb-0 small">Akun demo: admin@klinik.test / password123</p>
        </div>
      </div>
    </div>
  </div>
@endsection
