<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // dijalankan saat: php artisan migrate
    public function up(): void
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat', 100);
            $table->string('kategori', 50);
            $table->string('sediaan', 50);
            $table->string('pabrikan', 100);
            $table->unsignedInteger('harga');
            $table->unsignedInteger('stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};
