<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsPerPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products_per_package')->insert([
            [
                'package_id' => 1,
                'product_id' => 1,
            ],
            [
                'package_id' => 1,
                'product_id' => 2,
            ],
            [
                'package_id' => 1,
                'product_id' => 3,
            ],
            [
                'package_id' => 1,
                'product_id' => 4,
            ],
            [
                'package_id' => 1,
                'product_id' => 5,
            ],
            [
                'package_id' => 2,
                'product_id' => 1,
            ],
            [
                'package_id' => 2,
                'product_id' => 2,
            ],
            [
                'package_id' => 2,
                'product_id' => 3,
            ],
            [
                'package_id' => 2,
                'product_id' => 4,
            ],
            [
                'package_id' => 2,
                'product_id' => 5,
            ],
            [
                'package_id' => 3,
                'product_id' => 1,
            ],
            [
                'package_id' => 3,
                'product_id' => 3,
            ],
            [
                'package_id' => 3,
                'product_id' => 2,
            ],
            [
                'package_id' => 3,
                'product_id' => 5,
            ],
            [
                'package_id' => 3,
                'product_id' => 4,
            ],
            [
                'package_id' => 4,
                'product_id' => 3,
            ],
            [
                'package_id' => 4,
                'product_id' => 1,
            ]
        ]);
    }
}
