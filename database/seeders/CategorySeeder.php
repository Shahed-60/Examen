<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Aardappelen, groente, fruit'],
            ['id' => 2, 'name' => 'Kaas, vleeswaren'],
            ['id' => 3, 'name' => 'Zuivel, plantaardig en eieren'],
            ['id' => 4, 'name' => 'Bakkerij en Banket'],
            ['id' => 5, 'name' => 'Frisdrank, sappen, koffie en thee'],
            ['id' => 6, 'name' => 'Pasta, rijst, en wereldkeuken'],
            ['id' => 7, 'name' => 'Soepen, Sauzen, kruiden en olie'],
            ['id' => 8, 'name' => 'Snoep, koek, chips en chocolade'],
            ['id' => 9, 'name' => 'Baby, verzorging en hygiëne '],
        ]);
    }
}
