<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('items')->insert([
            ['product_name' => 'Laptop','created_at' => Carbon::now(),'updated_at' => Carbon::now(),],
            ['product_name' => 'Mouse','created_at' => Carbon::now(),'updated_at' => Carbon::now(),],
            ['product_name' => 'Keyboard','created_at' => Carbon::now(),'updated_at' => Carbon::now(),],
            ['product_name' => 'Headphones','created_at' => Carbon::now(),'updated_at' => Carbon::now(),],
        ]);
    }
}
