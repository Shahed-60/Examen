<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id();
        // $table->string('name');
        // $table->foreignId('user_id')->constrained();
        // $table->integer('date_created');
        // $table->integer('date_picked_up');
        // $table->timestamps();

        DB::table('packages')->insert([
            ['id' => 1, 'name' => 'Admin', 'user_id' => 1, 'date_created' => '2024-06-12', 'date_picked_up' => '2024-06-12'],
            ['id' => 2, 'name' => 'John Doe', 'user_id' => 1, 'date_created' => '2024-06-12', 'date_picked_up' => '2024-06-12'],
            ['id' => 3, 'name' => 'Jane Smith', 'user_id' => 1, 'date_created' => '2024-06-12', 'date_picked_up' => '2024-06-12'],
            ['id' => 4, 'name' => 'Alice Johnson', 'user_id' => 1, 'date_created' => '2024-06-12', 'date_picked_up' => '2024-06-12'],
            ['id' => 5, 'name' => 'Boo Brown', 'user_id' => 1, 'date_created' => '2024-06-12', 'date_picked_up' => '2024-06-12'],
        ]);

    }
}
