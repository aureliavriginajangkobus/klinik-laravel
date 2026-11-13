{{-- Form ini dipakai bareng oleh halaman tambah dan halaman edit --}}
<div class="mb-3">
  <label for="nama_obat" class="form-label">Nama Obat</label>
  <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat" name="nama_obat"
         value="{{ old('nama_obat', $obat->nama_obat) }}">
  @error('nama_obat') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label for="kategori" class="form-label">Kategori</label>
  <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
    <option value="">-- Pilih --</option>
    @foreach (['Analgesik', 'Antibiotik', 'Antasida', 'Vitamin', 'Obat Batuk'] as $kat)
      <option value="{{ $kat }}" {{ old('kategori', $obat->kategori) == $kat ? 'selected' : '' }}>{{ $kat }}</option>
    @endforeach
  </select>
  @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label d-block">Sediaan</label>
  @foreach (['Tablet', 'Sirup', 'Kapsul'] as $sed)
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="sediaan" id="{{ $sed }}" value="{{ $sed }}"
             {{ old('sediaan', $obat->sediaan ?? 'Tablet') == $sed ? 'checked' : '' }}>
      <label class="form-check-label" for="{{ $sed }}">{{ $sed }}</label>
    </div>
  @endforeach
</div>

<div class="mb-3">
  <label for="pabrikan" class="form-label">Pabrikan</label>
  <input type="text" class="form-control @error('pabrikan') is-invalid @enderror" id="pabrikan" name="pabrikan"
         value="{{ old('pabrikan', $obat->pabrikan) }}">
  @error('pabrikan') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="row">
  <div class="col-md-6 mb-3">
    <label for="harga" class="form-label">Harga</label>
    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
           value="{{ old('harga', $obat->harga) }}">
    @error('harga') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
  <div class="col-md-6 mb-3">
    <label for="stok" class="form-label">Stok</label>
    <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
           value="{{ old('stok', $obat->stok) }}">
    @error('stok') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
</div>
