<?php

namespace Database\Seeders;

use App\Models\Obat;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // dijalankan saat: php artisan db:seed
    public function run(): void
    {
        // forceCreate dipakai supaya kolom "role" bisa diisi tanpa mengubah $fillable di User
        // password otomatis di-hash oleh Laravel

        // Role 1: Admin (lihat, tambah, ubah, hapus)
        User::forceCreate([
            'name' => 'Aurelia',
            'email' => 'admin@klinik.test',
            'role' => 'admin',
            'password' => 'password123',
        ]);

        // Role 2: Petugas (lihat, tambah, ubah - tidak boleh hapus)
        User::forceCreate([
            'name' => 'Petugas Farmasi',
            'email' => 'petugas@klinik.test',
            'role' => 'petugas',
            'password' => 'password123',
        ]);

        // data awal obat
        Obat::create(['nama_obat' => 'Paracetamol 500mg', 'kategori' => 'Analgesik', 'sediaan' => 'Tablet', 'pabrikan' => 'Kimia Farma', 'harga' => 2000, 'stok' => 100]);
        Obat::create(['nama_obat' => 'Amoxicillin 500mg', 'kategori' => 'Antibiotik', 'sediaan' => 'Kapsul', 'pabrikan' => 'Kalbe Farma', 'harga' => 3500, 'stok' => 50]);
        Obat::create(['nama_obat' => 'OBH Combi', 'kategori' => 'Obat Batuk', 'sediaan' => 'Sirup', 'pabrikan' => 'Combiphar', 'harga' => 15000, 'stok' => 30]);
    }
}
