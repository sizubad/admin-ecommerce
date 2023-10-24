<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->string('produk_id')->primary();
            $table->string('nama_produk');
            $table->bigInteger('harga');
            $table->integer('stok');
            $table->text('deskripsi');
            $table->enum('ukuran',['S','M','L','XL']);
            $table->string('gambar');
            $table->string('kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
