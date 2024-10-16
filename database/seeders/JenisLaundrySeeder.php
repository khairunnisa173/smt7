<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\jenislaundry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JenisLaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        // DB::table('jenislaundry')->insert([
        //     'nama_item' => Str::random(10),
        //     'harga_per_kg' => Str::random(10),
        // ]);
        jenislaundry::factory(10)->create();

    
    }
}
