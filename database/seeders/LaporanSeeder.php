<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\laporan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        // DB::table('laporan')->insert([
        //     'tgl_mulai_laporan' => Str::random(10),
        //     'tgl_akhir_laporan' => Str::random(10),
        //     'total_pendapatan' => Str::random(10),
        //     'total_transaksi' => Str::random(10),
        // ]);
        laporan::factory(10)->create();

    
    }
}
