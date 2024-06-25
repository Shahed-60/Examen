<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DistributorsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(PackagesSeeder::class);
        $this->call(ProductsPerPackageSeeder::class);
    }
}
