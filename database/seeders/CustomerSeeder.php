<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        // DB::table('customers')->insert([
        //     'nama' => Str::random(10),
        //     'no_hp' => Str::random(10),
        //     'alamat' => Str::random(10),
        // ]);
        customer::factory(10)->create();

    
    }
}
