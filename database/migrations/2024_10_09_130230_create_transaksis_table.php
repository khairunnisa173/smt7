<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table): void {
            $table->id();
            $table->string('id_transaksi');
            $table->enum('pilihan_laundry', ['laundry_hemat', 'laundry_kilat', 'laundry_komplit', 'laundry_premium']);
            $table->string('tanggal_masuk');
            $table->string('tanggal_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
