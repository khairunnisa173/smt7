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
            $table->string('user_id');
            $table->string('customer_id');
            $table->string('total_berat');
            $table->string('total_harga');
            $table->string('status_laundry');
            $table->string('status_pembayaran');
            $table->string('metode_pembayaran');
            $table->string('jumlah_dibayar');
            $table->string('tanggal_pembayaran');
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
