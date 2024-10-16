<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        // DB::table('transaksi')->insert([
        //     'user_id' => Str::random(10),
        //     'customer_id' => Str::random(10),
        //     'total_berat' => Str::random(10),
        //     'total_harga' => Str::random(10),
        //     'status_laundry' => Str::random(10),
        //     'status_pembayaran' => Str::random(10),
        //     'metode_pembayaran' => Str::random(10),
        //     'jumlah_dibayar' => Str::random(10),
        //     'tanggal_pembayaran' => Str::random(10),
        // ]);
        transaksi::factory(10)->create();

    
    }
}
