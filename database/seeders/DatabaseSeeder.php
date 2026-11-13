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
        // akun untuk login (password otomatis di-hash oleh Laravel)
        User::create([
            'name' => 'Aurelia',
            'email' => 'admin@klinik.test',
            'password' => 'password123',
        ]);

        // data awal obat
        Obat::create(['nama_obat' => 'Paracetamol 500mg', 'kategori' => 'Analgesik', 'sediaan' => 'Tablet', 'pabrikan' => 'Kimia Farma', 'harga' => 2000, 'stok' => 100]);
        Obat::create(['nama_obat' => 'Amoxicillin 500mg', 'kategori' => 'Antibiotik', 'sediaan' => 'Kapsul', 'pabrikan' => 'Kalbe Farma', 'harga' => 3500, 'stok' => 50]);
        Obat::create(['nama_obat' => 'OBH Combi', 'kategori' => 'Obat Batuk', 'sediaan' => 'Sirup', 'pabrikan' => 'Combiphar', 'harga' => 15000, 'stok' => 30]);
    }
}
