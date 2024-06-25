<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Appels',
                'category_id' => 1,
                'amount' => 100,
                'barcode' => 1234567890123,
                'description' => 'Frisse groene appels',
                'distributors_id' => 3,
            ],
            [
                'name' => 'Kaas',
                'category_id' => 2,
                'amount' => 200,
                'barcode' => 123797890123,
                'description' => 'Oude kaas van de boerderij',
                'distributors_id' => 1,
            ],
            [
                'name' => 'Melk',
                'category_id' => 3,
                'amount' => 150,
                'barcode' => 1234567890124,
                'description' => 'Description for Product 3',
                'distributors_id' => 2,
            ],
            [
                'name' => 'Brood',
                'category_id' => 4,
                'amount' => 250,
                'barcode' => 1234567890125,
                'description' => 'Vers gebakken wit brood',
                'distributors_id' => 2,
            ],
            [
                'name' => 'Koffie',
                'category_id' => 5,
                'amount' => 100,
                'barcode' => 1234567890127,
                'description' => 'Sterke espresso koffiebonen',
                'distributors_id' => 4,
            ],
            [
                'name' => 'Thee',
                'category_id' => 5,
                'amount' => 200,
                'barcode' => 1234567890128,
                'description' => 'Groene thee blaadjes',
                'distributors_id' => 5,
            ],
        ]);
    }
}
