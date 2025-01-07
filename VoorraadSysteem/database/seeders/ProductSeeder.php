<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // mini seeder voor status
        DB::table('statuses')->insert([
            [
                'name' => 'Op'
            ],
            [
                'name' => 'In voorraad'
            ],
            [
                'name' => 'Niet beschikbaar'
            ]
        ]);

        Product::factory(100)->create();
    }
}
